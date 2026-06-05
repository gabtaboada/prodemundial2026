<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Apuestas extends Model
{
    use SoftDeletes;

    protected $table = 'apuestas';

    // Mundial 2026: 12 grupos (A-L), cada uno con 6 partidos
    // Resultado partido: 1=local, X=empate, 2=visitante
    // Goles: Par_X#_GolEqui1 y Par_X#_GolEqui2
    protected $fillable = [
        'Part_id',
        // Grupo A
        'A1','A2','A3','A4','A5','A6',
        'Par_A1_GolEqui1','Par_A1_GolEqui2','Par_A2_GolEqui1','Par_A2_GolEqui2',
        'Par_A3_GolEqui1','Par_A3_GolEqui2','Par_A4_GolEqui1','Par_A4_GolEqui2',
        'Par_A5_GolEqui1','Par_A5_GolEqui2','Par_A6_GolEqui1','Par_A6_GolEqui2',
        // Grupo B
        'B1','B2','B3','B4','B5','B6',
        'Par_B1_GolEqui1','Par_B1_GolEqui2','Par_B2_GolEqui1','Par_B2_GolEqui2',
        'Par_B3_GolEqui1','Par_B3_GolEqui2','Par_B4_GolEqui1','Par_B4_GolEqui2',
        'Par_B5_GolEqui1','Par_B5_GolEqui2','Par_B6_GolEqui1','Par_B6_GolEqui2',
        // Grupo C
        'C1','C2','C3','C4','C5','C6',
        'Par_C1_GolEqui1','Par_C1_GolEqui2','Par_C2_GolEqui1','Par_C2_GolEqui2',
        'Par_C3_GolEqui1','Par_C3_GolEqui2','Par_C4_GolEqui1','Par_C4_GolEqui2',
        'Par_C5_GolEqui1','Par_C5_GolEqui2','Par_C6_GolEqui1','Par_C6_GolEqui2',
        // Grupo D
        'D1','D2','D3','D4','D5','D6',
        'Par_D1_GolEqui1','Par_D1_GolEqui2','Par_D2_GolEqui1','Par_D2_GolEqui2',
        'Par_D3_GolEqui1','Par_D3_GolEqui2','Par_D4_GolEqui1','Par_D4_GolEqui2',
        'Par_D5_GolEqui1','Par_D5_GolEqui2','Par_D6_GolEqui1','Par_D6_GolEqui2',
        // Grupo E
        'E1','E2','E3','E4','E5','E6',
        'Par_E1_GolEqui1','Par_E1_GolEqui2','Par_E2_GolEqui1','Par_E2_GolEqui2',
        'Par_E3_GolEqui1','Par_E3_GolEqui2','Par_E4_GolEqui1','Par_E4_GolEqui2',
        'Par_E5_GolEqui1','Par_E5_GolEqui2','Par_E6_GolEqui1','Par_E6_GolEqui2',
        // Grupo F
        'F1','F2','F3','F4','F5','F6',
        'Par_F1_GolEqui1','Par_F1_GolEqui2','Par_F2_GolEqui1','Par_F2_GolEqui2',
        'Par_F3_GolEqui1','Par_F3_GolEqui2','Par_F4_GolEqui1','Par_F4_GolEqui2',
        'Par_F5_GolEqui1','Par_F5_GolEqui2','Par_F6_GolEqui1','Par_F6_GolEqui2',
        // Grupo G
        'G1','G2','G3','G4','G5','G6',
        'Par_G1_GolEqui1','Par_G1_GolEqui2','Par_G2_GolEqui1','Par_G2_GolEqui2',
        'Par_G3_GolEqui1','Par_G3_GolEqui2','Par_G4_GolEqui1','Par_G4_GolEqui2',
        'Par_G5_GolEqui1','Par_G5_GolEqui2','Par_G6_GolEqui1','Par_G6_GolEqui2',
        // Grupo H
        'H1','H2','H3','H4','H5','H6',
        'Par_H1_GolEqui1','Par_H1_GolEqui2','Par_H2_GolEqui1','Par_H2_GolEqui2',
        'Par_H3_GolEqui1','Par_H3_GolEqui2','Par_H4_GolEqui1','Par_H4_GolEqui2',
        'Par_H5_GolEqui1','Par_H5_GolEqui2','Par_H6_GolEqui1','Par_H6_GolEqui2',
        // Grupo I (NUEVO - Mundial 2026)
        'I1','I2','I3','I4','I5','I6',
        'Par_I1_GolEqui1','Par_I1_GolEqui2','Par_I2_GolEqui1','Par_I2_GolEqui2',
        'Par_I3_GolEqui1','Par_I3_GolEqui2','Par_I4_GolEqui1','Par_I4_GolEqui2',
        'Par_I5_GolEqui1','Par_I5_GolEqui2','Par_I6_GolEqui1','Par_I6_GolEqui2',
        // Grupo J (NUEVO)
        'J1','J2','J3','J4','J5','J6',
        'Par_J1_GolEqui1','Par_J1_GolEqui2','Par_J2_GolEqui1','Par_J2_GolEqui2',
        'Par_J3_GolEqui1','Par_J3_GolEqui2','Par_J4_GolEqui1','Par_J4_GolEqui2',
        'Par_J5_GolEqui1','Par_J5_GolEqui2','Par_J6_GolEqui1','Par_J6_GolEqui2',
        // Grupo K (NUEVO)
        'K1','K2','K3','K4','K5','K6',
        'Par_K1_GolEqui1','Par_K1_GolEqui2','Par_K2_GolEqui1','Par_K2_GolEqui2',
        'Par_K3_GolEqui1','Par_K3_GolEqui2','Par_K4_GolEqui1','Par_K4_GolEqui2',
        'Par_K5_GolEqui1','Par_K5_GolEqui2','Par_K6_GolEqui1','Par_K6_GolEqui2',
        // Grupo L (NUEVO)
        'L1','L2','L3','L4','L5','L6',
        'Par_L1_GolEqui1','Par_L1_GolEqui2','Par_L2_GolEqui1','Par_L2_GolEqui2',
        'Par_L3_GolEqui1','Par_L3_GolEqui2','Par_L4_GolEqui1','Par_L4_GolEqui2',
        'Par_L5_GolEqui1','Par_L5_GolEqui2','Par_L6_GolEqui1','Par_L6_GolEqui2',
    ];

    public static function BuscarBoletas($Part_id)
    {
        return DB::table('apuestas')
            ->where('Part_id', '=', $Part_id)
            ->select('apuestas.*')
            ->get();
    }

    public static function SeleccionpApuestasValidas()
    {
        return DB::table('apuestas')
            ->join('participantes','participantes.id','=','apuestas.Part_id')
            ->where('participantes.par_Pago','SI')
            ->select('apuestas.*','participantes.*')
            ->get();
    }
}
