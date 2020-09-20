<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required'      => 'El campo nombre de usuario es obligatorio.',
            'name.max'           => 'La cantidad máxima de caracteres es 255.',

            'email.required'     => 'El campo correo electrónico es obligatorio.',
            'email.max'          => 'La cantidad máxima de caracteres es 255.',
            'email.email'        => 'El valor ingresado no corresponde a una dirección de correo electónico.',
            'email.unique'       => 'Ya existe un registro con este correo electrónico',

            'password.required'  => 'El campo contraseña es obligatorio.',
            'password.min'       => 'Deben ser más de 6 caracteres como mínimo.',
            'password.confirmed' => 'Las contraseñas deben coincidir.',

        ];
    }
}
