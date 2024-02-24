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
        Schema::create('prod_especs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 25);
            $table->string('valor_defecto', 25);
            $table->unsignedBigInteger('id_prod');

            $table->foreign('id_prod')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod_especs');
    }
};
