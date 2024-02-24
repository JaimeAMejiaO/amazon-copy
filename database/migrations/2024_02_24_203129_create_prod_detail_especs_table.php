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
        Schema::create('prod_detail_especs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 25);
            $table->string('valor_detail_specs', 25);
            $table->unsignedBigInteger('id_prod_detail');

            $table->foreign('id_prod_detail')->references('id')->on('producto_detalles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod_detail_especs');
    }
};
