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
        Schema::create('garantia_reembolsos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo_peticion', 30);
            $table->text('motivo');
            $table->text('img');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_pedido');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_pedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garantia_reembolsos');
    }
};
