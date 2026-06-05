<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_k', function (Blueprint $table) {
            $table->id();
            $table->string('K_Partido', 2);
            $table->string('K_Equipo1', 255);
            $table->string('K_Bandera1', 255)->nullable();
            $table->string('K_abreviado1', 10)->nullable();
            $table->string('K_Equipo2', 255);
            $table->string('K_Bandera2', 255)->nullable();
            $table->string('K_abreviado2', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_k');
    }
};
