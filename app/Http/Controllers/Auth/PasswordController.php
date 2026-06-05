<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    protected $redirectTo = '/IngresarUsuario';


    protected function getEmailSubject()
    {
        return 'Link para el cambio de contraseña';
    }

    public function getEmail()
    {
        return view('front.password');
    }

    public function postEmail(Request $request)
    {
        $request->validate( ['email' => 'required|email']);

        $response = Password::broker('participantes')->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            Session::flash('message-error', 'Le hemos enviado un mail, siga las instrucciones para modificar su contraseña');
            return redirect('/IngresarUsuario');
        }

        // Si no encontró participante, intentar con administrador
        $response = Password::broker('administrador')->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            Session::flash('message-error', 'Le hemos enviado un mail, siga las instrucciones para modificar su contraseña');
            return redirect('/IngresarUsuario');
        }

        return redirect()->back()->withErrors(['email' => trans($response)]);
    }

    public function getReset($token = null, $type = null)
    {
        if (is_null($token)) {
            abort(404);
        }

        return view('front.resetPassword', compact('token', 'type'));
    }

    public function postReset(Request $request, $type)
    {
        $request->validate( [
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed|min:6|max:12',
        ]);

        $credentials = $request->only('email', 'password', 'password_confirmation', 'token');

        $broker = ($type === 'admin') ? 'administrador' : 'participantes';

        $response = Password::broker($broker)->reset($credentials, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        if ($response == Password::PASSWORD_RESET) {
            return redirect('/IngresarUsuario');
        }

        Session::flash('message-error', 'Error al restablecer la contraseña');
        return redirect('/IngresarUsuario')->withInput($request->only('email'));
    }

    protected function resetPassword($user, $password)
    {
        $user->password = $password;
        $user->save();

        $fromName  = 'Administrador Mundial2018';
        $fromEmail = $user->email;
        $data      = ['password' => $password];

        Mail::send('emails.participantes.ResetPassword', $data, function ($msj) use ($fromName, $fromEmail) {
            $msj->subject('Cambio correcto de contraseña');
            $msj->to($fromEmail, $fromName);
        });

        Session::flash('message-error', 'Contraseña modificada correctamente');
    }
}
