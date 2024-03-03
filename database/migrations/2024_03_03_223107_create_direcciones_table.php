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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('pais');
            $table->string('nombre_completo', 50);
            $table->string('num_tel', 30);
            $table->string('especificacion_dir', 50);
            $table->text('departamento');
            $table->text('ciudad');
            $table->text('barrio');
            $table->text('cod_postal');
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
