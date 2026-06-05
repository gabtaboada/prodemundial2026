<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aciertos extends Model
{
    use SoftDeletes;
    protected $table = 'aciertos';
    protected $fillable = ['APart_id','CantidadAciertos','ac_Posicion'];
}
