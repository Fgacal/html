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
        Schema::create('partida', function (Blueprint $table) {
            $table->bigIncrements('id_partida')->comment('ID de la partida');
            $table->unsignedBigInteger('id_jugador');
            $table->unsignedBigInteger('id_videojuego');
            $table->timestamp('f_inicio')->useCurrent();
            $table->timestamp('f_finalizacion')->nullable($value = true);
            $table->time('hora')->nullable($value = true);
            $table->foreign('id_jugador')->references('id_usuario')->on('usuario')->onDelete('cascade');
            $table->foreign('id_videojuego')->references('id_juego')->on('juego')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partida');
    }
};
