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
        Schema::create('categoriaJuego', function (Blueprint $table) {
            $table->bigIncrements('id_categoriaJuego')->comment('ID de la categoriaJuego');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_juego');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria')->onDelete('cascade');
            $table->foreign('id_juego')->references('id_juego')->on('juego')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
