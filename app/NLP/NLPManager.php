<?php

namespace App\NLP;

class NLPManager {
    public function analyze($text) {
        $normal = new Normalizer();
        $tokenizer = new Tokenizer();
        $syn = new SynonymExpander();
        $search = new KnowledgeSearch();

        $text = $normal->normalize($text);
        $tokens = $tokenizer->tokenize($text);
        $tokens = $syn->expand($tokens);

        $results = $search->search($tokens);

        return [
            'tokens' => $tokens,
            'resultados' => $results
        ];
    }
}