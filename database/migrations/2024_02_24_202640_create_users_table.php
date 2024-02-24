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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 50);
            $table->string('apell', 50);
            $table->string('nombre_usuario', 25);
            $table->string('email', 100);
            $table->integer('num_doc');
            $table->date('fecha_nac');
            $table->string('dir', 50);
            $table->string('contrasena');
            $table->unsignedBigInteger('id_tipo_doc');
            $table->unsignedBigInteger('id_rol');
            $table->rememberToken();

            $table->foreign('id_tipo_doc')->references('id')->on('tipo_docs');
            $table->foreign('id_rol')->references('id')->on('rol_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
