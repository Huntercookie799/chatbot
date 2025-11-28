<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = ['item_id', 'palabra'];

    public function item()
    {
        return $this->belongsTo(KnowledgeItem::class);
    }
}
