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
        Schema::create('favorite_recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') // Chiave esterna che riferisce a `users.id`
            ->constrained()
            ->onDelete('cascade'); // Elimina le voci correlate se l'utente viene eliminato
      $table->foreignId('recipe_id') // Chiave esterna che riferisce a `recipes.id`
            ->constrained()
            ->onDelete('cascade'); // Elimina le voci correlate se la ricetta viene eliminata
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_recipes');
    }
};
