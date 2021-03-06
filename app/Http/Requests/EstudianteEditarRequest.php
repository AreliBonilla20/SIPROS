<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteEditarRequest extends FormRequest
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
            'nombres'          => 'required|max:100|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/',
            'apellidos'        => 'required|max:100|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/',
            'direccion'        => 'required|max:150',
            'email'            => 'required|max:100|email',
            'telefono'         => 'required|max:9|regex:/[0-9]{4}-[0-9]{4}/',
            'codigo'           => 'required',
            'sexo_id'          => 'required',
            'municipio_id'     => 'required',
            'departamento_id'  => 'required',
            'area_id'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required'          => 'El campo nombres es obligatorio.',
            'nombres.max'               => 'La cantidad máxima de carácteres es 100.',
            'nombres.regex'             => 'Los carácteres deben ser solo letras.',

            'apellidos.required'        => 'El campo apellidos es obligatorio.',
            'apellidos.max'             => 'La cantidad máxima de carácteres es 100.',
            'apellidos.regex'           => 'Los carácteres deben ser solo letras.',

            'direccion.required'        => 'El campo dirección es obligatorio.',
            'direccion.max'             => 'La cantidad máxima de carácteres es 150.',

            'email.required'            => 'El campo correo electrónico es obligatorio.',
            'email.max'                 => 'La cantidad máxima de carácteres es 100.',
            'email.email'               => 'El valor ingresado no corresponde a una dirección de correo electónico.',

            'telefono.required'         => 'El campo teléfono es obligatorio.',
            'telefono.max'              => 'El valor ingresado excede la cantidad máxima de caracteres permitidos    .',
            'telefono.regex'            => 'El formato de teléfono es 0000-0000.',

            'codigo.required'           => 'Debe seleccionar una carrera.',

            'sexo_id.required'          => 'Debe seleccionar un género.',

            'municipio_id.required'     => 'Debe seleccionar un municipio.',

            'departamento_id.required'  => 'Debe seleccionar un departamento.',

            'area_id.required'          => 'Debe seleccionar una área.',
        ];
    }
}
