<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_c', function (Blueprint $table) {
            $table->id();
            $table->string('C_Partido', 2);
            $table->string('C_Equipo1', 255);
            $table->string('C_Bandera1', 255)->nullable();
            $table->string('C_abreviado1', 10)->nullable();
            $table->string('C_Equipo2', 255);
            $table->string('C_Bandera2', 255)->nullable();
            $table->string('C_abreviado2', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_c');
    }
};
