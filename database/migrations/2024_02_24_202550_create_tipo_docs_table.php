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
        Schema::create('tipo_docs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('acronimo_tipo', 20)->default('-');
            $table->string('nombre_tipo', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_docs');
    }
};
