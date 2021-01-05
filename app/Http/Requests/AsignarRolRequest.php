<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignarRolRequest extends FormRequest
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
            'email'    => 'required|string|email|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'role_id'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'      => 'El campo nombre de usuario es obligatorio.',
            'name.max'           => 'La cantidad máxima de caracteres es 255.',

            'email.required'     => 'El campo correo electrónico es obligatorio.',
            'email.max'          => 'La cantidad máxima de caracteres es 255.',
            'email.email'        => 'El valor ingresado no corresponde a una dirección de correo electrónico.',

            'password.min'       => 'Deben ser más de 6 caracteres como mínimo.',
            'password.confirmed' => 'Las contraseñas deben coincidir.',
            'role_id.required' => 'El campo rol de usuario es obligatorio',
        ];

    }
}
