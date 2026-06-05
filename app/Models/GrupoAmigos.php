<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class GrupoAmigos extends Model
{
    use SoftDeletes;
    protected $table = 'grupo_amigos';
    protected $fillable = ['Grupo_amigos'];

    public static function GrupoAmigosIndex()
    {
        return DB::table('grupo_amigos')
            ->whereNull('grupo_amigos.deleted_at')
            ->select('grupo_amigos.*')
            ->orderBy('grupo_amigos.Grupo_amigos','ASC')
            ->get();
    }
}
