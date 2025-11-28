<?php

namespace App\NLP;

class Normalizer {
    public function normalize($text) {
        $text = strtolower($text);

        $text = str_replace(
            ['á','é','í','ó','ú','ñ'],
            ['a','e','i','o','u','n'],
            $text
        );

        return preg_replace('/[^a-z0-9 ]/', '', $text);
    }
}
