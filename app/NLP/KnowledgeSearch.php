<?php

namespace App\NLP;

use App\Models\KnowledgeItem;
use Illuminate\Support\Facades\DB;

class KnowledgeSearch {
    
    public function search($tokens, $context = []) {
        if (empty($tokens)) {
            return collect([]);
        }

        // Construir query con scoring de relevancia
        $query = KnowledgeItem::query()->with('media');
        
        // Calcular relevancia con CASE WHEN para cada token
        $relevanceScore = $this->buildRelevanceScore($tokens);
        
        $query->select('knowledge_items.*')
              ->selectRaw("({$relevanceScore}) as relevance_score");
        
        // Aplicar filtros WHERE con OR agrupados
        $query->where(function($q) use ($tokens) {
            foreach ($tokens as $token) {
                $q->orWhere('titulo', 'LIKE', "%{$token}%")
                  ->orWhere('tags', 'LIKE', "%{$token}%")
                  ->orWhere('contenido', 'LIKE', "%{$token}%");
            }
        });
        
        // Filtrar por urgencia si el contexto lo indica
        if (isset($context['is_urgent']) && $context['is_urgent']) {
            $query->where(function($q) {
                $q->where('tags', 'LIKE', '%urgente%')
                  ->orWhere('tags', 'LIKE', '%problema%')
                  ->orWhere('prioridad', '>=', 8);
            });
        }
        
        // Ordenar por relevancia
        $results = $query->orderByDesc('relevance_score')
                        ->having('relevance_score', '>', 0)
                        ->limit(5)
                        ->get();
        
        // Agregar metadata de matching
        return $results->map(function($item) use ($tokens) {
            $item->matched_tokens = $this->getMatchedTokens($item, $tokens);
            $item->match_percentage = $this->calculateMatchPercentage($item, $tokens);
            return $item;
        });
    }
    
    /**
     * Construye un SQL scoring de relevancia
     */
    private function buildRelevanceScore($tokens) {
        $scores = [];
        
        foreach ($tokens as $token) {
            $escapedToken = str_replace("'", "''", $token);
            
            // Peso mayor a coincidencias en título
            $scores[] = "CASE WHEN titulo LIKE '%{$escapedToken}%' THEN 10 ELSE 0 END";
            
            // Peso medio a coincidencias en tags
            $scores[] = "CASE WHEN tags LIKE '%{$escapedToken}%' THEN 5 ELSE 0 END";
            
            // Peso menor a coincidencias en contenido
            $scores[] = "CASE WHEN contenido LIKE '%{$escapedToken}%' THEN 2 ELSE 0 END";
        }
        
        return implode(' + ', $scores);
    }
    
    /**
     * Encuentra qué tokens coincidieron
     */
    private function getMatchedTokens($item, $tokens) {
        $matched = [];
        
        foreach ($tokens as $token) {
            if (
                stripos($item->titulo, $token) !== false ||
                stripos($item->tags, $token) !== false ||
                stripos($item->contenido, $token) !== false
            ) {
                $matched[] = $token;
            }
        }
        
        return $matched;
    }
    
    /**
     * Calcula el porcentaje de tokens que coincidieron
     */
    private function calculateMatchPercentage($item, $tokens) {
        if (empty($tokens)) return 0;
        
        $matchedCount = count($this->getMatchedTokens($item, $tokens));
        return round(($matchedCount / count($tokens)) * 100);
    }
    
    /**
     * Búsqueda fuzzy para cuando no hay resultados exactos
     */
    public function fuzzySearch($tokens, $threshold = 70) {
        $allItems = KnowledgeItem::with('media')->get();
        
        $scoredItems = $allItems->map(function($item) use ($tokens) {
            $item->fuzzy_score = $this->calculateFuzzyScore($item, $tokens);
            return $item;
        })->filter(function($item) use ($threshold) {
            return $item->fuzzy_score >= $threshold;
        })->sortByDesc('fuzzy_score')
          ->take(5)
          ->values();
        
        return $scoredItems;
    }
    
    private function calculateFuzzyScore($item, $tokens) {
        $score = 0;
        $searchText = strtolower($item->titulo . ' ' . $item->tags . ' ' . $item->contenido);
        
        foreach ($tokens as $token) {
            $token = strtolower($token);
            
            // Coincidencia exacta
            if (strpos($searchText, $token) !== false) {
                $score += 30;
                continue;
            }
            
            // Similitud de Levenshtein
            $words = explode(' ', $searchText);
            foreach ($words as $word) {
                if (strlen($word) < 3) continue;
                
                $distance = levenshtein($token, $word);
                $maxLen = max(strlen($token), strlen($word));
                $similarity = (1 - $distance / $maxLen) * 100;
                
                if ($similarity > 70) {
                    $score += 20;
                }
            }
        }
        
        return $score;
    }
}