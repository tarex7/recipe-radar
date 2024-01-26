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
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id') // Chiave esterna che riferisce a `recipes.id`
                ->constrained()
                ->onDelete('cascade'); // Elimina le voci correlate se la ricetta viene eliminata
            $table->foreignId('ingredient_id') // Chiave esterna che riferisce a `ingredients.id`
                ->constrained()
                ->onDelete('cascade'); // Elimina le voci correlate se l'ingrediente viene eliminato
            $table->string('quantity'); // Quantità dell'ingrediente nella ricetta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_ingredients');
    }
};
