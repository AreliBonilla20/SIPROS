<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsignacionRequest extends FormRequest
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
            'carne'           => 'required|max:7|regex:/[A-Za-z]{2}[0-9]{5}/',
            'id_proyecto'     => 'required',
            'horas_asignadas' => 'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'carne.required'           => 'El campo carnet es obligatorio.',
            'carne.max'                => 'La cantidad máxima de carácteres es 7.',
            'carne.regex'              => 'El formato debe ser AA#####',

            'id_proyecto.required'     => 'El campo proyecto es obligatorio.',

            'horas_asignadas.required' => 'El campo horas asignadas es obligatorio.',
            'horas_asignadas.numeric'  => 'El campo horas asignadas debe ser numérico.',
            'horas_asignadas.required' => 'El campo horas asignadas debe ser mayor que 0.',

        ];
    }
}
