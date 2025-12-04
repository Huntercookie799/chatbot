<?php

namespace App\NLP;

class Tokenizer {
    
    private $stopWords = [
        'el', 'la', 'los', 'las', 'un', 'una', 'unos', 'unas',
        'de', 'del', 'y', 'o', 'pero', 'a', 'en', 'con', 'sin',
        'sobre', 'entre', 'hasta', 'desde', 'por', 'para', 'que',
        'al', 'lo', 'se', 'me', 'te', 'le', 'les', 'nos', 'os'
    ];
    
    public function tokenize($text) {
        // Primero, extraer frases importantes entre comillas
        $phrases = $this->extractPhrases($text);
        
        // Tokenizar normalmente
        $tokens = explode(' ', $text);
        
        // Filtrar stopwords pero mantener palabras de 3+ caracteres
        $filtered = array_filter($tokens, function($token) {
            return strlen($token) > 0 && 
                   !in_array($token, $this->stopWords);
        });
        
        // Agregar las frases importantes como tokens compuestos
        $result = array_merge(array_values($filtered), $phrases);
        
        return array_values(array_unique($result));
    }
    
    /**
     * Extrae frases entre comillas o frases clave
     */
    private function extractPhrases($text) {
        $phrases = [];
        
        // Buscar texto entre comillas
        if (preg_match_all('/"([^"]+)"/', $text, $matches)) {
            $phrases = array_merge($phrases, $matches[1]);
        }
        
        if (preg_match_all("/'([^']+)'/", $text, $matches)) {
            $phrases = array_merge($phrases, $matches[1]);
        }
        
        // Detectar números con contexto (ej: "año 2024", "versión 2.0")
        if (preg_match_all('/\b(\w+)\s+(\d+(?:\.\d+)?)\b/', $text, $matches)) {
            for ($i = 0; $i < count($matches[0]); $i++) {
                $phrases[] = $matches[1][$i] . ' ' . $matches[2][$i];
            }
        }
        
        return $phrases;
    }
    
    /**
     * Tokeniza manteniendo bigramas importantes
     */
    public function tokenizeWithBigrams($text) {
        $tokens = $this->tokenize($text);
        $bigrams = $this->extractBigrams($tokens);
        
        return array_merge($tokens, $bigrams);
    }
    
    private function extractBigrams($tokens) {
        $bigrams = [];
        
        for ($i = 0; $i < count($tokens) - 1; $i++) {
            // Solo crear bigramas si ambos tokens son significativos
            if (strlen($tokens[$i]) > 2 && strlen($tokens[$i + 1]) > 2) {
                $bigrams[] = $tokens[$i] . ' ' . $tokens[$i + 1];
            }
        }
        
        return $bigrams;
    }
}