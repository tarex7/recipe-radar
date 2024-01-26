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
        Schema::create('shopping_list_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shopping_list_id') // Chiave esterna che riferisce a `shopping_lists.id`
                ->constrained()
                ->onDelete('cascade'); // Elimina l'articolo se la lista della spesa viene eliminata
            $table->string('item_name'); // Nome dell'articolo
            $table->integer('quantity')->default(1); // Quantità dell'articolo
            $table->boolean('purchased')->default(false); // Indica se l'articolo è stato acquistato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_list_items');
    }
};
