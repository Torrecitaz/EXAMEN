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
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);       // Título corto del error
            $table->string('area', 50);         // Parte del juego donde ocurre
            $table->string('gravedad');         // Qué tan grave es el bug
            $table->text('pasos');              // Cómo reproducir el error
            $table->string('estado')->default('Nuevo'); // Estado (Nuevo, Revisando, etc.)
            $table->timestamps();               // Registra la fecha sola automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bugs');
    }
};
