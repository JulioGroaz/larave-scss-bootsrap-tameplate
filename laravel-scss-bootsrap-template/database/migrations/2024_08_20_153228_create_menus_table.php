<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome del piatto o della bevanda
            $table->text('description')->nullable(); // Descrizione del piatto o della bevanda
            $table->decimal('price', 8, 2); // Prezzo del piatto o della bevanda
            $table->string('category'); // Categoria del piatto o della bevanda (es. 'caffè', 'dolci', 'panini')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
