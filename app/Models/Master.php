<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Master extends Model
{
    use SoftDeletes;

    protected $table = 'masters';

    protected $fillable = [
        // Grupo A
        'A1','A2','A3','A4','A5','A6',
        'Mas_A1_GolEqui1','Mas_A1_GolEqui2','Mas_A2_GolEqui1','Mas_A2_GolEqui2',
        'Mas_A3_GolEqui1','Mas_A3_GolEqui2','Mas_A4_GolEqui1','Mas_A4_GolEqui2',
        'Mas_A5_GolEqui1','Mas_A5_GolEqui2','Mas_A6_GolEqui1','Mas_A6_GolEqui2',
        // Grupo B
        'B1','B2','B3','B4','B5','B6',
        'Mas_B1_GolEqui1','Mas_B1_GolEqui2','Mas_B2_GolEqui1','Mas_B2_GolEqui2',
        'Mas_B3_GolEqui1','Mas_B3_GolEqui2','Mas_B4_GolEqui1','Mas_B4_GolEqui2',
        'Mas_B5_GolEqui1','Mas_B5_GolEqui2','Mas_B6_GolEqui1','Mas_B6_GolEqui2',
        // Grupo C
        'C1','C2','C3','C4','C5','C6',
        'Mas_C1_GolEqui1','Mas_C1_GolEqui2','Mas_C2_GolEqui1','Mas_C2_GolEqui2',
        'Mas_C3_GolEqui1','Mas_C3_GolEqui2','Mas_C4_GolEqui1','Mas_C4_GolEqui2',
        'Mas_C5_GolEqui1','Mas_C5_GolEqui2','Mas_C6_GolEqui1','Mas_C6_GolEqui2',
        // Grupo D
        'D1','D2','D3','D4','D5','D6',
        'Mas_D1_GolEqui1','Mas_D1_GolEqui2','Mas_D2_GolEqui1','Mas_D2_GolEqui2',
        'Mas_D3_GolEqui1','Mas_D3_GolEqui2','Mas_D4_GolEqui1','Mas_D4_GolEqui2',
        'Mas_D5_GolEqui1','Mas_D5_GolEqui2','Mas_D6_GolEqui1','Mas_D6_GolEqui2',
        // Grupo E
        'E1','E2','E3','E4','E5','E6',
        'Mas_E1_GolEqui1','Mas_E1_GolEqui2','Mas_E2_GolEqui1','Mas_E2_GolEqui2',
        'Mas_E3_GolEqui1','Mas_E3_GolEqui2','Mas_E4_GolEqui1','Mas_E4_GolEqui2',
        'Mas_E5_GolEqui1','Mas_E5_GolEqui2','Mas_E6_GolEqui1','Mas_E6_GolEqui2',
        // Grupo F
        'F1','F2','F3','F4','F5','F6',
        'Mas_F1_GolEqui1','Mas_F1_GolEqui2','Mas_F2_GolEqui1','Mas_F2_GolEqui2',
        'Mas_F3_GolEqui1','Mas_F3_GolEqui2','Mas_F4_GolEqui1','Mas_F4_GolEqui2',
        'Mas_F5_GolEqui1','Mas_F5_GolEqui2','Mas_F6_GolEqui1','Mas_F6_GolEqui2',
        // Grupo G
        'G1','G2','G3','G4','G5','G6',
        'Mas_G1_GolEqui1','Mas_G1_GolEqui2','Mas_G2_GolEqui1','Mas_G2_GolEqui2',
        'Mas_G3_GolEqui1','Mas_G3_GolEqui2','Mas_G4_GolEqui1','Mas_G4_GolEqui2',
        'Mas_G5_GolEqui1','Mas_G5_GolEqui2','Mas_G6_GolEqui1','Mas_G6_GolEqui2',
        // Grupo H
        'H1','H2','H3','H4','H5','H6',
        'Mas_H1_GolEqui1','Mas_H1_GolEqui2','Mas_H2_GolEqui1','Mas_H2_GolEqui2',
        'Mas_H3_GolEqui1','Mas_H3_GolEqui2','Mas_H4_GolEqui1','Mas_H4_GolEqui2',
        'Mas_H5_GolEqui1','Mas_H5_GolEqui2','Mas_H6_GolEqui1','Mas_H6_GolEqui2',
        // Grupo I (NUEVO)
        'I1','I2','I3','I4','I5','I6',
        'Mas_I1_GolEqui1','Mas_I1_GolEqui2','Mas_I2_GolEqui1','Mas_I2_GolEqui2',
        'Mas_I3_GolEqui1','Mas_I3_GolEqui2','Mas_I4_GolEqui1','Mas_I4_GolEqui2',
        'Mas_I5_GolEqui1','Mas_I5_GolEqui2','Mas_I6_GolEqui1','Mas_I6_GolEqui2',
        // Grupo J (NUEVO)
        'J1','J2','J3','J4','J5','J6',
        'Mas_J1_GolEqui1','Mas_J1_GolEqui2','Mas_J2_GolEqui1','Mas_J2_GolEqui2',
        'Mas_J3_GolEqui1','Mas_J3_GolEqui2','Mas_J4_GolEqui1','Mas_J4_GolEqui2',
        'Mas_J5_GolEqui1','Mas_J5_GolEqui2','Mas_J6_GolEqui1','Mas_J6_GolEqui2',
        // Grupo K (NUEVO)
        'K1','K2','K3','K4','K5','K6',
        'Mas_K1_GolEqui1','Mas_K1_GolEqui2','Mas_K2_GolEqui1','Mas_K2_GolEqui2',
        'Mas_K3_GolEqui1','Mas_K3_GolEqui2','Mas_K4_GolEqui1','Mas_K4_GolEqui2',
        'Mas_K5_GolEqui1','Mas_K5_GolEqui2','Mas_K6_GolEqui1','Mas_K6_GolEqui2',
        // Grupo L (NUEVO)
        'L1','L2','L3','L4','L5','L6',
        'Mas_L1_GolEqui1','Mas_L1_GolEqui2','Mas_L2_GolEqui1','Mas_L2_GolEqui2',
        'Mas_L3_GolEqui1','Mas_L3_GolEqui2','Mas_L4_GolEqui1','Mas_L4_GolEqui2',
        'Mas_L5_GolEqui1','Mas_L5_GolEqui2','Mas_L6_GolEqui1','Mas_L6_GolEqui2',
    ];
}
