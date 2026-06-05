<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aciertos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('APart_id');
            $table->foreign('APart_id')->references('id')->on('participantes');
            $table->integer('CantidadAciertos')->nullable()->default(0);
            $table->integer('ac_Posicion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('flags', function (Blueprint $table) {
            $table->id();
            $table->string('bandera', 255);
            $table->integer('estado')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('grupo_amigos', function (Blueprint $table) {
            $table->id();
            $table->string('Grupo_amigos', 255);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ultimos_resultados', function (Blueprint $table) {
            $table->id();
            $table->string('Ur_grupo', 1);
            $table->string('Ur_partido', 2);
            $table->string('Ur_resultado', 1);
            $table->integer('ur_GolesEq1')->nullable();
            $table->integer('ur_GolesEq2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aciertos');
        Schema::dropIfExists('flags');
        Schema::dropIfExists('grupo_amigos');
        Schema::dropIfExists('ultimos_resultados');
        Schema::dropIfExists('password_reset_tokens');
    }
};
