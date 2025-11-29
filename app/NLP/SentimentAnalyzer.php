<?php

namespace App\NLP;

class SentimentAnalyzer {
    private $lexicon = [
        'bueno' => 'positive', 'excelente' => 'positive', 'genial' => 'positive',
        'perfecto' => 'positive', 'maravilloso' => 'positive', 'fantástico' => 'positive',
        'malo' => 'negative', 'terrible' => 'negative', 'horrible' => 'negative',
        'pésimo' => 'negative', 'fatal' => 'negative', 'problema' => 'negative',
        'urgente' => 'negative', 'error' => 'negative', 'falla' => 'negative',
        'gracias' => 'positive', 'ayuda' => 'neutral', 'información' => 'neutral',
        'necesito' => 'neutral', 'quiero' => 'neutral', 'dónde' => 'neutral',
        'cómo' => 'neutral', 'cuándo' => 'neutral', 'por qué' => 'neutral'
    ];
    
    private $intensifiers = [
        'muy' => 2, 'realmente' => 2, 'extremadamente' => 3,
        'totalmente' => 2, 'absolutamente' => 2, 'bastante' => 1.5
    ];
    
    private $negations = ['no', 'nunca', 'jamás', 'tampoco'];

    public function analyze($tokens) {
        $score = 0;
        $intensity = 1;
        $negation = false;
        
        foreach ($tokens as $token) {
            if (in_array($token, $this->negations)) {
                $negation = true;
                continue;
            }
            
            if (isset($this->intensifiers[$token])) {
                $intensity = $this->intensifiers[$token];
                continue;
            }
            
            if (isset($this->lexicon[$token])) {
                $tokenScore = $this->getTokenScore($token);
                
                if ($negation) {
                    $tokenScore = -$tokenScore;
                    $negation = false;
                }
                
                $score += $tokenScore * $intensity;
                $intensity = 1; // Reset intensity after use
            }
        }
        
        return $this->classifySentiment($score);
    }
    
    private function getTokenScore($token) {
        $sentiment = $this->lexicon[$token];
        return match($sentiment) {
            'positive' => 1,
            'negative' => -1,
            default => 0
        };
    }
    
    private function classifySentiment($score) {
        if ($score > 1) return 'positive';
        if ($score < -1) return 'negative';
        return 'neutral';
    }
}