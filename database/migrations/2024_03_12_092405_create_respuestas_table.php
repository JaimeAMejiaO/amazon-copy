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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('respuesta', 400);
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_pregunta');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_pregunta')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};
