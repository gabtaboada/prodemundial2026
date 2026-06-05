<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Part_id');
            $table->foreign('Part_id')->references('id')->on('participantes');

            // Grupo A
            $table->string('A1',1)->nullable();
            $table->string('A2',1)->nullable();
            $table->string('A3',1)->nullable();
            $table->string('A4',1)->nullable();
            $table->string('A5',1)->nullable();
            $table->string('A6',1)->nullable();
            $table->integer('Par_A1_GolEqui1')->nullable();
            $table->integer('Par_A1_GolEqui2')->nullable();
            $table->integer('Par_A2_GolEqui1')->nullable();
            $table->integer('Par_A2_GolEqui2')->nullable();
            $table->integer('Par_A3_GolEqui1')->nullable();
            $table->integer('Par_A3_GolEqui2')->nullable();
            $table->integer('Par_A4_GolEqui1')->nullable();
            $table->integer('Par_A4_GolEqui2')->nullable();
            $table->integer('Par_A5_GolEqui1')->nullable();
            $table->integer('Par_A5_GolEqui2')->nullable();
            $table->integer('Par_A6_GolEqui1')->nullable();
            $table->integer('Par_A6_GolEqui2')->nullable();

            // Grupo B
            $table->string('B1',1)->nullable();
            $table->string('B2',1)->nullable();
            $table->string('B3',1)->nullable();
            $table->string('B4',1)->nullable();
            $table->string('B5',1)->nullable();
            $table->string('B6',1)->nullable();
            $table->integer('Par_B1_GolEqui1')->nullable();
            $table->integer('Par_B1_GolEqui2')->nullable();
            $table->integer('Par_B2_GolEqui1')->nullable();
            $table->integer('Par_B2_GolEqui2')->nullable();
            $table->integer('Par_B3_GolEqui1')->nullable();
            $table->integer('Par_B3_GolEqui2')->nullable();
            $table->integer('Par_B4_GolEqui1')->nullable();
            $table->integer('Par_B4_GolEqui2')->nullable();
            $table->integer('Par_B5_GolEqui1')->nullable();
            $table->integer('Par_B5_GolEqui2')->nullable();
            $table->integer('Par_B6_GolEqui1')->nullable();
            $table->integer('Par_B6_GolEqui2')->nullable();

            // Grupo C
            $table->string('C1',1)->nullable();
            $table->string('C2',1)->nullable();
            $table->string('C3',1)->nullable();
            $table->string('C4',1)->nullable();
            $table->string('C5',1)->nullable();
            $table->string('C6',1)->nullable();
            $table->integer('Par_C1_GolEqui1')->nullable();
            $table->integer('Par_C1_GolEqui2')->nullable();
            $table->integer('Par_C2_GolEqui1')->nullable();
            $table->integer('Par_C2_GolEqui2')->nullable();
            $table->integer('Par_C3_GolEqui1')->nullable();
            $table->integer('Par_C3_GolEqui2')->nullable();
            $table->integer('Par_C4_GolEqui1')->nullable();
            $table->integer('Par_C4_GolEqui2')->nullable();
            $table->integer('Par_C5_GolEqui1')->nullable();
            $table->integer('Par_C5_GolEqui2')->nullable();
            $table->integer('Par_C6_GolEqui1')->nullable();
            $table->integer('Par_C6_GolEqui2')->nullable();

            // Grupo D
            $table->string('D1',1)->nullable();
            $table->string('D2',1)->nullable();
            $table->string('D3',1)->nullable();
            $table->string('D4',1)->nullable();
            $table->string('D5',1)->nullable();
            $table->string('D6',1)->nullable();
            $table->integer('Par_D1_GolEqui1')->nullable();
            $table->integer('Par_D1_GolEqui2')->nullable();
            $table->integer('Par_D2_GolEqui1')->nullable();
            $table->integer('Par_D2_GolEqui2')->nullable();
            $table->integer('Par_D3_GolEqui1')->nullable();
            $table->integer('Par_D3_GolEqui2')->nullable();
            $table->integer('Par_D4_GolEqui1')->nullable();
            $table->integer('Par_D4_GolEqui2')->nullable();
            $table->integer('Par_D5_GolEqui1')->nullable();
            $table->integer('Par_D5_GolEqui2')->nullable();
            $table->integer('Par_D6_GolEqui1')->nullable();
            $table->integer('Par_D6_GolEqui2')->nullable();

            // Grupo E
            $table->string('E1',1)->nullable();
            $table->string('E2',1)->nullable();
            $table->string('E3',1)->nullable();
            $table->string('E4',1)->nullable();
            $table->string('E5',1)->nullable();
            $table->string('E6',1)->nullable();
            $table->integer('Par_E1_GolEqui1')->nullable();
            $table->integer('Par_E1_GolEqui2')->nullable();
            $table->integer('Par_E2_GolEqui1')->nullable();
            $table->integer('Par_E2_GolEqui2')->nullable();
            $table->integer('Par_E3_GolEqui1')->nullable();
            $table->integer('Par_E3_GolEqui2')->nullable();
            $table->integer('Par_E4_GolEqui1')->nullable();
            $table->integer('Par_E4_GolEqui2')->nullable();
            $table->integer('Par_E5_GolEqui1')->nullable();
            $table->integer('Par_E5_GolEqui2')->nullable();
            $table->integer('Par_E6_GolEqui1')->nullable();
            $table->integer('Par_E6_GolEqui2')->nullable();

            // Grupo F
            $table->string('F1',1)->nullable();
            $table->string('F2',1)->nullable();
            $table->string('F3',1)->nullable();
            $table->string('F4',1)->nullable();
            $table->string('F5',1)->nullable();
            $table->string('F6',1)->nullable();
            $table->integer('Par_F1_GolEqui1')->nullable();
            $table->integer('Par_F1_GolEqui2')->nullable();
            $table->integer('Par_F2_GolEqui1')->nullable();
            $table->integer('Par_F2_GolEqui2')->nullable();
            $table->integer('Par_F3_GolEqui1')->nullable();
            $table->integer('Par_F3_GolEqui2')->nullable();
            $table->integer('Par_F4_GolEqui1')->nullable();
            $table->integer('Par_F4_GolEqui2')->nullable();
            $table->integer('Par_F5_GolEqui1')->nullable();
            $table->integer('Par_F5_GolEqui2')->nullable();
            $table->integer('Par_F6_GolEqui1')->nullable();
            $table->integer('Par_F6_GolEqui2')->nullable();

            // Grupo G
            $table->string('G1',1)->nullable();
            $table->string('G2',1)->nullable();
            $table->string('G3',1)->nullable();
            $table->string('G4',1)->nullable();
            $table->string('G5',1)->nullable();
            $table->string('G6',1)->nullable();
            $table->integer('Par_G1_GolEqui1')->nullable();
            $table->integer('Par_G1_GolEqui2')->nullable();
            $table->integer('Par_G2_GolEqui1')->nullable();
            $table->integer('Par_G2_GolEqui2')->nullable();
            $table->integer('Par_G3_GolEqui1')->nullable();
            $table->integer('Par_G3_GolEqui2')->nullable();
            $table->integer('Par_G4_GolEqui1')->nullable();
            $table->integer('Par_G4_GolEqui2')->nullable();
            $table->integer('Par_G5_GolEqui1')->nullable();
            $table->integer('Par_G5_GolEqui2')->nullable();
            $table->integer('Par_G6_GolEqui1')->nullable();
            $table->integer('Par_G6_GolEqui2')->nullable();

            // Grupo H
            $table->string('H1',1)->nullable();
            $table->string('H2',1)->nullable();
            $table->string('H3',1)->nullable();
            $table->string('H4',1)->nullable();
            $table->string('H5',1)->nullable();
            $table->string('H6',1)->nullable();
            $table->integer('Par_H1_GolEqui1')->nullable();
            $table->integer('Par_H1_GolEqui2')->nullable();
            $table->integer('Par_H2_GolEqui1')->nullable();
            $table->integer('Par_H2_GolEqui2')->nullable();
            $table->integer('Par_H3_GolEqui1')->nullable();
            $table->integer('Par_H3_GolEqui2')->nullable();
            $table->integer('Par_H4_GolEqui1')->nullable();
            $table->integer('Par_H4_GolEqui2')->nullable();
            $table->integer('Par_H5_GolEqui1')->nullable();
            $table->integer('Par_H5_GolEqui2')->nullable();
            $table->integer('Par_H6_GolEqui1')->nullable();
            $table->integer('Par_H6_GolEqui2')->nullable();

            // Grupo I
            $table->string('I1',1)->nullable();
            $table->string('I2',1)->nullable();
            $table->string('I3',1)->nullable();
            $table->string('I4',1)->nullable();
            $table->string('I5',1)->nullable();
            $table->string('I6',1)->nullable();
            $table->integer('Par_I1_GolEqui1')->nullable();
            $table->integer('Par_I1_GolEqui2')->nullable();
            $table->integer('Par_I2_GolEqui1')->nullable();
            $table->integer('Par_I2_GolEqui2')->nullable();
            $table->integer('Par_I3_GolEqui1')->nullable();
            $table->integer('Par_I3_GolEqui2')->nullable();
            $table->integer('Par_I4_GolEqui1')->nullable();
            $table->integer('Par_I4_GolEqui2')->nullable();
            $table->integer('Par_I5_GolEqui1')->nullable();
            $table->integer('Par_I5_GolEqui2')->nullable();
            $table->integer('Par_I6_GolEqui1')->nullable();
            $table->integer('Par_I6_GolEqui2')->nullable();

            // Grupo J
            $table->string('J1',1)->nullable();
            $table->string('J2',1)->nullable();
            $table->string('J3',1)->nullable();
            $table->string('J4',1)->nullable();
            $table->string('J5',1)->nullable();
            $table->string('J6',1)->nullable();
            $table->integer('Par_J1_GolEqui1')->nullable();
            $table->integer('Par_J1_GolEqui2')->nullable();
            $table->integer('Par_J2_GolEqui1')->nullable();
            $table->integer('Par_J2_GolEqui2')->nullable();
            $table->integer('Par_J3_GolEqui1')->nullable();
            $table->integer('Par_J3_GolEqui2')->nullable();
            $table->integer('Par_J4_GolEqui1')->nullable();
            $table->integer('Par_J4_GolEqui2')->nullable();
            $table->integer('Par_J5_GolEqui1')->nullable();
            $table->integer('Par_J5_GolEqui2')->nullable();
            $table->integer('Par_J6_GolEqui1')->nullable();
            $table->integer('Par_J6_GolEqui2')->nullable();

            // Grupo K
            $table->string('K1',1)->nullable();
            $table->string('K2',1)->nullable();
            $table->string('K3',1)->nullable();
            $table->string('K4',1)->nullable();
            $table->string('K5',1)->nullable();
            $table->string('K6',1)->nullable();
            $table->integer('Par_K1_GolEqui1')->nullable();
            $table->integer('Par_K1_GolEqui2')->nullable();
            $table->integer('Par_K2_GolEqui1')->nullable();
            $table->integer('Par_K2_GolEqui2')->nullable();
            $table->integer('Par_K3_GolEqui1')->nullable();
            $table->integer('Par_K3_GolEqui2')->nullable();
            $table->integer('Par_K4_GolEqui1')->nullable();
            $table->integer('Par_K4_GolEqui2')->nullable();
            $table->integer('Par_K5_GolEqui1')->nullable();
            $table->integer('Par_K5_GolEqui2')->nullable();
            $table->integer('Par_K6_GolEqui1')->nullable();
            $table->integer('Par_K6_GolEqui2')->nullable();

            // Grupo L
            $table->string('L1',1)->nullable();
            $table->string('L2',1)->nullable();
            $table->string('L3',1)->nullable();
            $table->string('L4',1)->nullable();
            $table->string('L5',1)->nullable();
            $table->string('L6',1)->nullable();
            $table->integer('Par_L1_GolEqui1')->nullable();
            $table->integer('Par_L1_GolEqui2')->nullable();
            $table->integer('Par_L2_GolEqui1')->nullable();
            $table->integer('Par_L2_GolEqui2')->nullable();
            $table->integer('Par_L3_GolEqui1')->nullable();
            $table->integer('Par_L3_GolEqui2')->nullable();
            $table->integer('Par_L4_GolEqui1')->nullable();
            $table->integer('Par_L4_GolEqui2')->nullable();
            $table->integer('Par_L5_GolEqui1')->nullable();
            $table->integer('Par_L5_GolEqui2')->nullable();
            $table->integer('Par_L6_GolEqui1')->nullable();
            $table->integer('Par_L6_GolEqui2')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apuestas');
    }
};
