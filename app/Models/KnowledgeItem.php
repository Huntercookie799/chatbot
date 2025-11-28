<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeItem extends Model
{
    protected $fillable = ['titulo', 'contenido', 'tags', 'tipo'];

    public function keywords()
    {
        return $this->hasMany(Keyword::class, 'item_id');
    }
}
