<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoG extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_g';

    protected $fillable = [
        'G_Partido',
        'G_Equipo1', 'G_Bandera1', 'G_abreviado1',
        'G_Equipo2', 'G_Bandera2', 'G_abreviado2',
    ];
}
