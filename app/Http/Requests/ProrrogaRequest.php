<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProrrogaRequest extends FormRequest
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
            'fecha_solicitud' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fecha_solicitud.required' => 'El campo fecha es obligatorio.',
        ];
    }
}
