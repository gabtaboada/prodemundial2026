<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_l', function (Blueprint $table) {
            $table->id();
            $table->string('L_Partido', 2);
            $table->string('L_Equipo1', 255);
            $table->string('L_Bandera1', 255)->nullable();
            $table->string('L_abreviado1', 10)->nullable();
            $table->string('L_Equipo2', 255);
            $table->string('L_Bandera2', 255)->nullable();
            $table->string('L_abreviado2', 10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_l');
    }
};
