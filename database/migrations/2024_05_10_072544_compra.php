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
        Schema::create('compra', function (Blueprint $table) {
            $table->bigIncrements('id_compra')->comment('ID de la compra');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_producto');
            $table->float('precio', precision: 53);
            $table->timestamp('f_compra')->useCurrent();
            $table->foreign('id_cliente')->references('id_usuario')->on('usuario')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_juego')->on('juego')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra');
    }
};
