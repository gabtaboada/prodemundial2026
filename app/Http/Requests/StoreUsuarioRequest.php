<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'par_name'     => 'required',
            'par_apellido' => 'required',
            'email'        => 'required|email|unique:participantes,email',
            'password'     => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'par_name.required'     => 'El nombre es obligatorio.',
            'par_apellido.required' => 'El apellido es obligatorio.',
            'email.required'        => 'El email es obligatorio.',
            'email.email'           => 'El email no tiene un formato válido.',
            'email.unique'          => 'Este email ya está registrado.',
            'password.required'     => 'La contraseña es obligatoria.',
        ];
    }
}
