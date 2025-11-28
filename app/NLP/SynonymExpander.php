<?php

namespace App\NLP;

use App\Models\Synonym;

class SynonymExpander {
    public function expand($tokens) {
        $expanded = $tokens;

        foreach ($tokens as $token) {
            $syns = Synonym::where('palabra', $token)->pluck('sinonimo')->toArray();
            $expanded = array_merge($expanded, $syns);
        }

        return array_unique($expanded);
    }
}
