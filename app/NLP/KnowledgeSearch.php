<?php

namespace App\NLP;

use App\Models\KnowledgeItem;

class KnowledgeSearch {
    public function search($tokens) {
        $results = KnowledgeItem::with('media');

        foreach ($tokens as $t) {
            $results->orWhere('titulo', 'LIKE', "%$t%")
                ->orWhere('tags', 'LIKE', "%$t%")
                ->orWhere('contenido', 'LIKE', "%$t%");
        }

        return $results->limit(5)->get();
    }
}
