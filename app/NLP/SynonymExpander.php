<?php

namespace App\NLP;

use App\Models\Synonym;

class SynonymExpander {
    public function expand($tokens) {
        $expanded = $tokens;

        foreach ($tokens as $token) {
            $exactSynonyms = Synonym::where('palabra', $token)->pluck('sinonimo')->toArray();
            
            if (empty($exactSynonyms)) {
                $corrections = $this->getSpellingCorrections($token);
                foreach ($corrections as $correctedWord) {
                    $correctedSynonyms = Synonym::where('palabra', $correctedWord)->pluck('sinonimo')->toArray();
                    $exactSynonyms = array_merge($exactSynonyms, $correctedSynonyms);
                }
            }
            
            $expanded = array_merge($expanded, $exactSynonyms);
        }

        return array_unique($expanded);
    }
    
    private function getSpellingCorrections($token) {
        $corrections = [];
        $allWords = Synonym::distinct()->pluck('palabra')->toArray();
        
        foreach ($allWords as $word) {
            if (levenshtein($token, $word) <= 2) {
                $corrections[] = $word;
            }
        }
        
        $tokenSound = metaphone($token);
        foreach ($allWords as $word) {
            if (metaphone($word) === $tokenSound) {
                $corrections[] = $word;
            }
        }
        
        return array_slice(array_unique($corrections), 0, 3); // Máximo 3 correcciones
    }
}