<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoletaParcial extends Model
{
    use SoftDeletes;

    protected $table = 'boleta_parcial';

    protected $guarded = [];
}