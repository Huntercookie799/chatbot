<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('knowledge_items', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('contenido');
            $table->string('tags')->nullable();   // ejemplo: "ingeniería, evento, inscripción"
            $table->string('tipo')->nullable();   // evento, carrera, tramite, info_general, etc
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('knowledge_items');
    }
};
