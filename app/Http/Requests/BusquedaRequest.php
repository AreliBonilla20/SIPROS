<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusquedaRequest extends FormRequest
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
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fecha_inicio.required' => 'El campo fecha inicio es obligatorio.',
            'fecha_final.required' => 'El campo fecha final es obligatorio.',
        ];
    }

}