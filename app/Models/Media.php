<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'type',
        'path',
        'title',
        'mime_type',
        'item_id',
    ];

    public function item()
    {
        return $this->belongsTo(KnowledgeItem::class, 'item_id');
    }
}
