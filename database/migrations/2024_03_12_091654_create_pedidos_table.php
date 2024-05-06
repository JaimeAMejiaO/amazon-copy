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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha_pedido');
            $table->integer('costo_pedido');
            $table->boolean('success')->default(false);
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_carro');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_carro')->references('id')->on('carro_compras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
