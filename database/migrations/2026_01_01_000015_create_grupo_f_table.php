<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_f', function (Blueprint $table) {
            $table->id();
            $table->string('F_Partido', 2);
            $table->string('F_Equipo1', 255);
            $table->string('F_Bandera1', 255)->nullable();
            $table->string('F_abreviado1', 10)->nullable();
            $table->string('F_Equipo2', 255);
            $table->string('F_Bandera2', 255)->nullable();
            $table->string('F_abreviado2', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_f');
    }
};
