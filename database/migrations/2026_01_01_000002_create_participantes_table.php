<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('par_name');
            $table->string('par_apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('grupo_amigos_id')->nullable();
            $table->string('par_Pago', 2)->default('NO');  // SI / NO
            $table->date('par_FechaPago')->nullable();
            $table->string('par_tel', 30)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
