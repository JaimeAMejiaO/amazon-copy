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
        Schema::create('cat_productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 25);
            $table->text('array_cat');
            $table->unsignedBigInteger('id_depto');

            $table->foreign('id_depto')->references('id')->on('departamento_cats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_productos');
    }
};


