<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'nombre'         => 'required|max:200|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]/',
            'area'           => 'required|max:250|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]/',
            'duracion'       => 'max:50',
            'objetivos'      => 'required|max:250|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]/',
            'logro'          => 'required|max:250|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]/',
            'institucion'    => 'required',
            'cantidad'       => 'required|numeric|min:0',
            'encargado'      => 'required|max:150|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]/',
            'correo'         => 'required|max:100|email',
            'telefono'       => 'required|max:9|regex:/[0-9]{4}-[0-9]{4}/',
            'codigo_carrera' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'         => 'El campo nombre es obligatorio.',
            'nombre.max'              => 'La cantidad máxima de carácteres es 200.',
            'nombre.regex'            => 'Los carácteres deben ser solo letras.',

            'area.required'           => 'El campo área es obligatorio.',
            'area.max'                => 'La cantidad máxima de carácteres es 250.',
            'area.regex'              => 'Los carácteres deben ser solo letras.',

            'duracion.max'            => 'La cantidad máxima de carácteres es 50.',

            'objetivos.required'      => 'El campo objetivos es obligatorio.',
            'objetivos.max'           => 'La cantidad máxima de carácteres es 250.',
            'objetivos.regex'         => 'Los carácteres deben ser solo letras.',

            'logro.required'          => 'El campo logros es obligatorio.',
            'logro.max'               => 'La cantidad máxima de carácteres es 250.',
            'logro.regex'             => 'Los carácteres deben ser solo letras.',

            'institucion.required'    => 'Debe seleccionar una institución.',

            'cantidad.required'       => 'El campo cantidad es obligatorio.',
            'cantidad.numeric'        => 'La cantidad ingresada debe ser numérica.',
            'cantidad.min'            => 'La cantidad deber ser mayor que cero.',

            'encargado.required'      => 'El campo encargado es obligatorio.',
            'encargado.regex'         => 'Los carácteres deben ser solo letras.',
            'encargado.max'           => 'La cantidad máxima de carácteres es 250.',

            'correo.required'         => 'El campo correo electrónico es obligatorio.',
            'correo.max'              => 'La cantidad máxima de carácteres es 150.',
            'correo.email'            => 'El valor ingresado no corresponde a una dirección de correo.',

            'telefono.required'       => 'El campo teléfono es obligatorio.',
            'telefono.max'            => 'El valor ingresado excede la cantidad máxima de caracteres permitidos    .',
            'telefono.regex'          => 'El formato de teléfono es 0000-0000.',

            'codigo_carrera.required' => 'El campo carrera es obligatorio.',

        ];
    }
}
