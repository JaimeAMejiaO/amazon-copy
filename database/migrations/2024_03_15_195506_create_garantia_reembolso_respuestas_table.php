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
        Schema::create('garantia_reembolso_respuestas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('respuesta', 30);
            $table->text('sustentacion');
            $table->integer('monto');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_gar_reem');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_gar_reem')->references('id')->on('garantia_reembolsos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garantia_reembolso_respuestas');
    }
};
