<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Participantes extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;
    use \Illuminate\Notifications\Notifiable;

    protected $table = 'participantes';
    protected $fillable = ['par_name','par_apellido','email','password','grupo_amigos_id','par_Pago','par_FechaPago','par_tel'];
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($valor)
    {
        if (!empty($valor)) {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    
    public function sendPasswordResetNotification($token)
    {
        $url = url("ResetPassword/{$token}/participantes");
        \Illuminate\Support\Facades\Mail::send(
            "emails.participantes.resetLink",
            ["url" => $url],
            function ($msg) {
                $msg->subject("Recuperación de contraseña - Prode Mundial 2026");
                $msg->to($this->email);
            }
        );
    }
    public static function ParticipantesIndex()
    {
        return DB::table('participantes')
            ->join('aciertos','aciertos.APart_id','=','participantes.id')
            ->whereNull('participantes.deleted_at')
            ->select('participantes.*','aciertos.CantidadAciertos')
            ->orderBy('par_apellido','ASC')
            ->paginate(25);
            //->get();
    }

    public function scopeParticipante($query, $ParticipanteBusqueda, $pago)
    {
        if ($ParticipanteBusqueda != null && $pago != "Seleccione") {
            $query->where(DB::raw("CONCAT(par_apellido,' ',par_name)"), "LIKE", "%{$ParticipanteBusqueda}%")
                  ->where('par_Pago', $pago);
        } elseif ($ParticipanteBusqueda != null) {
            $query->where(DB::raw("CONCAT(par_apellido,' ',par_name)"), "LIKE", "%{$ParticipanteBusqueda}%");
        } elseif ($pago != "Seleccione") {
            $query->where('participantes.par_Pago', $pago);
        }
    }

    public function scopePosiciones($query, $Nombre)
    {
        if ($Nombre != null) {
            $query->where(DB::raw("CONCAT(par_apellido,' ',par_name)"), "LIKE", "%{$Nombre}%");
        }
    }
}
