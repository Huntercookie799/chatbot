<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('keywords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('knowledge_items')->onDelete('cascade');
            $table->string('palabra');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('keywords');
    }
};
