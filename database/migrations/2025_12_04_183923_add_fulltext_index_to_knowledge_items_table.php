<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('knowledge_items', function (Blueprint $table) {
            // Índice de texto completo para búsqueda rápida
            $table->fullText(['titulo', 'contenido', 'tags'], 'knowledge_fulltext_index');
            
            // Índice para prioridad si tienes esa columna
            if (Schema::hasColumn('knowledge_items', 'prioridad')) {
                $table->index('prioridad');
            }
        });
    }

    public function down(): void
    {
        Schema::table('knowledge_items', function (Blueprint $table) {
            $table->dropFullText('knowledge_fulltext_index');
            
            if (Schema::hasColumn('knowledge_items', 'prioridad')) {
                $table->dropIndex(['prioridad']);
            }
        });
    }
};