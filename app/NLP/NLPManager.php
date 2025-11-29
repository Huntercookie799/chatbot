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
        
        // Búsqueda contextualizada
        $searchTokens = $this->getSearchTokens($expandedTokens, $intentAnalysis);
        $results = $search->search($searchTokens);

        return [
            'tokens' => $tokens,
            'expanded_tokens' => $expandedTokens,
            'sentiment' => $sentimentAnalysis,
            'intent' => $intentAnalysis,
            'search_tokens' => $searchTokens,
            'resultados' => $results,
            'context' => $this->buildContext($sentimentAnalysis, $intentAnalysis)
        ];
    }
    
    private function getSearchTokens($tokens, $intentAnalysis) {
        $intent = $intentAnalysis['primary_intent'];
        
        $filteredTokens = array_filter($tokens, function($token) use ($intent) {
            // Remover palabras de cortesía y de intención para mejorar la búsqueda
            $noiseWords = [
                'hola', 'gracias', 'porfavor', 'por favor', 
                'quiero', 'necesito', 'dame', 'muestrame'
            ];
            
            return !in_array($token, $noiseWords);
        });
        
        return array_values($filteredTokens);
    }
    
    private function buildContext($sentiment, $intent) {
        return [
            'is_urgent' => $sentiment === 'negative' || $intent['primary_intent'] === 'problem',
            'needs_quick_response' => in_array($intent['primary_intent'], ['question', 'problem']),
            'is_formal' => $intent['primary_intent'] !== 'greeting'
        ];
    }
}