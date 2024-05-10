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
        Schema::create('juego', function (Blueprint $table) {
            $table->bigIncrements('id_juego')->comment('ID del juego');
            $table->string('titulo', length: 50);
            $table->string('genero', length: 100);
            $table->unsignedBigInteger('id_desarrollador');
            $table->timestamp('f_lanzamiento')->useCurrent();
            $table->integer('clasificacion_edad');
            $table->text('descripcion');
            $table->foreign('id_desarrollador')->references('id_usuario')->on('usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juego');
    }
};
