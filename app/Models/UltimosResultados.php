<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UltimosResultados extends Model
{
    use SoftDeletes;
    protected $table = 'ultimos_resultados';
    protected $fillable = ['Ur_grupo','Ur_partido','Ur_resultado','ur_GolesEq2','ur_GolesEq1'];
}
