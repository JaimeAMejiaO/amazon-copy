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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rating_cal');
            $table->text('comentario');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_prod_mod');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_prod_mod')->references('id')->on('producto_modelos');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
