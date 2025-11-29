<?php

namespace App\NLP;

class IntentClassifier {
    private $intentPatterns = [
        'question' => [
            'que', 'cual', 'como', 'donde', 'cuando', 'porque', 'por qué',
            'quien', 'cuanto', 'cuánto', 'cuantos', 'cuántos'
        ],
        'command' => [
            'necesito', 'quiero', 'busco', 'dame', 'muestrame', 'ayuda',
            'encuentra', 'localiza'
        ],
        'problem' => [
            'problema', 'error', 'falla', 'no funciona', 'no sirve',
            'urgente', 'ayuda', 'solución'
        ],
        'greeting' => [
            'hola', 'buenos dias', 'buenas tardes', 'buenas noches'
        ],
        'thanks' => [
            'gracias', 'agradecido', 'agradecida', 'mil gracias'
        ]
    ];
    
    public function classify($tokens, $originalText) {
        $text = strtolower($originalText);
        $scores = [];
        
        foreach ($this->intentPatterns as $intent => $patterns) {
            $scores[$intent] = $this->calculateIntentScore($tokens, $text, $patterns);
        }
        
        // Encontrar la intención con mayor puntuación
        arsort($scores);
        $primaryIntent = key($scores);
        
        return [
            'primary_intent' => $primaryIntent,
            'confidence' => $scores[$primaryIntent],
            'all_scores' => $scores
        ];
    }
    
    private function calculateIntentScore($tokens, $text, $patterns) {
        $score = 0;
        
        // Puntos por tokens coincidentes
        foreach ($tokens as $token) {
            if (in_array($token, $patterns)) {
                $score += 1;
            }
        }
        
        // Puntos adicionales por patrones de múltiples palabras
        foreach ($patterns as $pattern) {
            if (str_contains($pattern, ' ') && str_contains($text, $pattern)) {
                $score += 2;
            }
        }
        
        return $score;
    }
}