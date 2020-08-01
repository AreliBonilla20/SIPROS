<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ];
    }

    public function messages()
    {   
        return [
            'name.required'=>'El campo nombre es obligatorio.',
            'name.max'=>'La cantidad máxima de caracteres es 255.',

            'slug.required'=>'El campo slug es obligatorio.',
            'slug.max'=>'La cantidad máxima de caracteres es 255.',

            'description.required'=>'El campo descripción es obligatorio.',
            'description.max'=>'La cantidad máxima de caracteres es 255.',  

         ];
    }
}
