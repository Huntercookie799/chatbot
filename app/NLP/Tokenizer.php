<?php

namespace App\NLP;

class Tokenizer {
    public function tokenize($text) {
        $tokens = explode(' ', $text);

        $stop = ['el','la','los','las','de','del','y','a','en','un','una','por','para','que'];

        return array_values(array_filter($tokens, fn($t) => $t && !in_array($t, $stop)));
    }
}
