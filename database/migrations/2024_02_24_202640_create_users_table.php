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
            $table->string('name', 50);
            $table->string('apell', 50)->nullable();
            $table->string('email', 100);
            $table->string('celular', 13)->nullable(); //Campo dentro de configuracion de usuario
            $table->date('fecha_nac')->nullable(); //Campo dentro de configuracion de usuario
            $table->string('password')->nullable();
            $table->unsignedBigInteger('id_rol')->nullable(); //Campo dentro de configuracion de admin
            $table->integer('fondos')->nullable(); //Campo dentro de configuracion de metodos de pago
            $table->string('google_id')->nullable();
            $table->rememberToken();

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
