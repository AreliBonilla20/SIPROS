<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SitioRequest extends FormRequest
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
        $rules = [
            'titulo'=>'required|max:100',
            'descripcion'=>'required|max:300',
        ];

        if ($this->get('file')) 
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);
        
        return $rules;
    }
    public function messages()
    {
        return [
            'titulo.required'=>'El campo título es obligatorio.',
            'titulo.max'=>'La cantidad máxima de carácteres es 100.',

            'descripcion.required'=>'El campo descripción es obligatorio.',
            'descripcion.max'=>'La cantidad máxima de carácteres es 300.',

        ];
    }
}
