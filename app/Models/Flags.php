<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flags extends Model
{
    use SoftDeletes;
    protected $table = 'flags';
    protected $fillable = ['bandera','estado'];
}
