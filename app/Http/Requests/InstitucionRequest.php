<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitucionRequest extends FormRequest
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
            'nombre'=>'required|max:150|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ,.]/',
            'tipo_institucion_id'=>'required',
            'sector_id'=>'required',
            'id_region'=>'required',
            'id_departamento'=>'required',
            'id_municipio'=>'required',
            'direccion'=>'required|max:150',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'* El campo nombre es obligatorio.',
            'nombre.max'=>'* La cantidad máxima de carácteres es 150.',
            'nombre.regex'=>'* Los carácteres deben ser solo letras.',
            
            'tipo_institucion_id.required'=>'* Debe seleccionar una institución.',

            'sector_id.required'=>'* Debe seleccionar un sector.',

            'id_region.required'=>'* Debe seleccionar una región.',

            'id_departamento.required'=>'* Debe seleccionar un departamento.',

            'id_municipio.required'=>'* Debe seleccionar un municipio.',

            'direccion.required'=>'* El campo direccion es obligatorio.',
            'direccion.max'=>'* La cantidad máxima de carácteres es 150.',

        ];
    }
}
