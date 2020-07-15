<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeEstudianteRequest extends FormRequest
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
            'carne'=>'required|max:7',
            'nombres'=>'required|max:50',
            'apellidos'=>'required|max:50',
            'edad'=>'required',
            'dui'=>'required|max:50',
            'direccionActual'=>'required|max:50',
            'direccionElectronica'=>'required|max:50',
            'telefonoFijoMovil'=>'required|max:50',

        ];
    }
}
