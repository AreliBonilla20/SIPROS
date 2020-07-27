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
            'nombre'=>'required|max:200|alpha',
            'area'=>'required|max:250|alpha',
            'ojetivos'=>'required|max:250|alpha',
            'logro'=>'required|max:250|alpha',
            'cantidad'=>'required|numeric|min:0',
            'encargado'=>'required|max:150|alpha',
            'correo'=>'required|max:100|regex:/[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
            'telefono'=>'required|max:9|regex:/[0-9]{4}-[0-9]{4}/',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'* El campo nombre es obligatorio.',
            'nombre.max'=>'* La cantidad máxima de carácteres es 200.',
            'nombre.alpha'=>'* Los carácteres deben ser solo letras.',

            'area.required'=>'* El campo área es obligatorio.',
            'area.max'=>'* La cantidad máxima de carácteres es 250.',
            'area.alpha'=>'* Los carácteres deben ser solo letras.',

            'objetivos.required'=>'* El campo objetivos es obligatorio.',
            'objetivos.max'=>'* La cantidad máxima de carácteres es 250.',
            'objetivos.alpha'=>'* Los carácteres deben ser solo letras.',

            'logro.required'=>'* El campo logro es obligatorio.',
            'logro.max'=>'* La cantidad máxima de carácteres es 250.',
            'logro.alpha'=>'* Los carácteres deben ser solo letras.',

            'cantidad.required'=>'* El campo cantidad es obligatorio.',
            'cantidad.numeric'=>'* La cantidad ingresada debe ser numérica.',
            'cantidad.min'=>'* La cantidad deber ser mayor que cero.',

            'encargado.required'=>'* El campo encargado es obligatorio.',
            'encargado.alpha'=>'* Los carácteres deben ser solo letras.',
            'encargado.max'=>'* La cantidad máxima de carácteres es 250.',

            'correo.required'=>'* El campo correo electrónico es obligatorio.',
            'correo.max'=>'* La cantidad máxima de carácteres es 150.',
            'correo.regex'=>'* El valor ingresado no corresponde a una dirección de correo.',

            'telefono.required'=>'* El campo teléfono es obligatorio.',
            'telefono.max'=>'* El valor ingresado excede la cantidad máxima de caracteres permitidos    .',
            'telefono.regex'=>'* El formato de teléfono es 0000-0000.',
            
        ];
    }
}
