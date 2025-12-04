<?php

namespace App\NLP;

class NLPManager {
    public function analyze($text) {
        $normal = new Normalizer();
        $tokenizer = new Tokenizer();
        $syn = new SynonymExpander();
        $search = new KnowledgeSearch();
        $sentiment = new SentimentAnalyzer();
        $intent = new IntentClassifier();

        // Procesamiento básico del texto
        $normalizedText = $normal->normalize($text);
        $tokens = $tokenizer->tokenize($normalizedText);
        $expandedTokens = $syn->expand($tokens);

        // Análisis avanzado
        $sentimentAnalysis = $sentiment->analyze($tokens);
        $intentAnalysis = $intent->classify($tokens, $text);
        
        // Construir contexto para búsqueda inteligente
        $context = $this->buildContext($sentimentAnalysis, $intentAnalysis);
        
        // Búsqueda contextualizada con tokens filtrados
        $searchTokens = $this->getSearchTokens($expandedTokens, $intentAnalysis);
        $results = $search->search($searchTokens, $context);
        
        // Si no hay resultados, intentar búsqueda fuzzy
        if ($results->isEmpty() && !empty($searchTokens)) {
            $results = $search->fuzzySearch($searchTokens);
        }

        return [
            'original_text' => $text,
            'tokens' => $tokens,
            'expanded_tokens' => $expandedTokens,
            'search_tokens' => $searchTokens,
            'sentiment' => $sentimentAnalysis,
            'intent' => $intentAnalysis,
            'context' => $context,
            'resultados' => $results,
            'has_results' => $results->isNotEmpty(),
            'response_suggestion' => $this->generateResponseSuggestion(
                $results, 
                $intentAnalysis, 
                $sentimentAnalysis
            )
        ];
    }
    
    private function getSearchTokens($tokens, $intentAnalysis) {
        $intent = $intentAnalysis['primary_intent'];
        
        // Palabras que no aportan valor a la búsqueda
        $noiseWords = [
            'hola', 'gracias', 'porfavor', 'por', 'favor', 
            'quiero', 'necesito', 'dame', 'muestrame', 'ayuda',
            'buenos', 'dias', 'tardes', 'noches', 'informacion',
            'busco', 'encuentra', 'localiza', 'donde', 'como',
            'cuando', 'porque', 'quien', 'cuanto', 'cuantos'
        ];
        
        $filteredTokens = array_filter($tokens, function($token) use ($noiseWords) {
            // Mantener solo tokens con significado
            return strlen($token) > 2 && !in_array($token, $noiseWords);
        });
        
        // Si filtramos todo, devolver los tokens originales (menos palabras vacías comunes)
        if (empty($filteredTokens)) {
            $basicNoise = ['hola', 'gracias', 'por', 'favor'];
            $filteredTokens = array_filter($tokens, fn($t) => !in_array($t, $basicNoise));
        }
        
        return array_values($filteredTokens);
    }
    
    private function buildContext($sentiment, $intent) {
        return [
            'is_urgent' => $sentiment === 'negative' || $intent['primary_intent'] === 'problem',
            'needs_quick_response' => in_array($intent['primary_intent'], ['question', 'problem']),
            'is_formal' => $intent['primary_intent'] !== 'greeting',
            'sentiment' => $sentiment,
            'intent' => $intent['primary_intent']
        ];
    }
    
    /**
     * Genera una sugerencia de respuesta basada en el análisis
     */
    private function generateResponseSuggestion($results, $intent, $sentiment) {
        if ($results->isEmpty()) {
            return $this->getNoResultsMessage($intent['primary_intent'], $sentiment);
        }
        
        $topResult = $results->first();
        
        return [
            'type' => 'success',
            'best_match' => [
                'id' => $topResult->id,
                'titulo' => $topResult->titulo,
                'relevance' => $topResult->relevance_score ?? $topResult->fuzzy_score ?? 0,
                'match_percentage' => $topResult->match_percentage ?? 0
            ],
            'suggested_response' => $this->formatResponse(
                $topResult, 
                $intent['primary_intent'],
                $sentiment
            )
        ];
    }
    
    private function getNoResultsMessage($intent, $sentiment) {
        $messages = [
            'question' => 'No encontré información específica sobre tu pregunta. ¿Podrías reformularla con más detalles?',
            'problem' => 'No tengo información sobre ese problema. Por favor contacta a soporte técnico.',
            'command' => 'No encuentro lo que buscas. ¿Podrías ser más específico?',
            'greeting' => '¡Hola! ¿En qué puedo ayudarte hoy?',
            'thanks' => '¡De nada! ¿Hay algo más en lo que pueda ayudarte?'
        ];
        
        return [
            'type' => 'no_results',
            'message' => $messages[$intent] ?? 'No encontré información relevante.',
            'suggestion' => 'Intenta usar palabras clave diferentes o sé más específico.'
        ];
    }
    
    private function formatResponse($item, $intent, $sentiment) {
        $intro = match($intent) {
            'problem' => 'He encontrado información que puede ayudarte:',
            'question' => 'Según nuestra base de conocimientos:',
            'command' => 'Aquí está lo que encontré:',
            default => 'Información relevante:'
        };
        
        return [
            'intro' => $intro,
            'content' => [
                'titulo' => $item->titulo,
                'contenido' => $item->contenido,
                'has_media' => $item->media->isNotEmpty(),
                'tags' => $item->tags
            ],
            'urgency' => $sentiment === 'negative' ? 'high' : 'normal'
        ];
    }
}