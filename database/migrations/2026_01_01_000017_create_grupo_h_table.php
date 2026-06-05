<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_h', function (Blueprint $table) {
            $table->id();
            $table->string('H_Partido', 2);
            $table->string('H_Equipo1', 255);
            $table->string('H_Bandera1', 255)->nullable();
            $table->string('H_abreviado1', 10)->nullable();
            $table->string('H_Equipo2', 255);
            $table->string('H_Bandera2', 255)->nullable();
            $table->string('H_abreviado2', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_h');
    }
};
