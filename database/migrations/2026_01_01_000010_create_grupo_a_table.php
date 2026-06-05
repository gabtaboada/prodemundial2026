<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_a', function (Blueprint $table) {
            $table->id();
            $table->string('A_Partido', 2);
            $table->string('A_Equipo1', 255);
            $table->string('A_Bandera1', 255)->nullable();
            $table->string('A_abreviado1', 10)->nullable();
            $table->string('A_Equipo2', 255);
            $table->string('A_Bandera2', 255)->nullable();
            $table->string('A_abreviado2', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_a');
    }
};
