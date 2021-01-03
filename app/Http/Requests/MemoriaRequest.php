<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Asignacion;

class MemoriaRequest extends FormRequest
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
        $horas = Asignacion::select('horas_asignadas as horas')
                            ->where('id',$this->request->get('asignacion_id'))
                            ->get()
                            ->pluck('horas')
                            ->first();

        return [
            'asignacion_id'         => 'required',
            'fecha_inicio'          => 'required',
            'fecha_fin'             => 'required|after:fecha_inicio',
            'inversion_institucion' => 'required|numeric',
            'inversion_estudiante'  => 'required|numeric',
            'horas_completadas'     => 'required|numeric|max:'.$horas,
        ];
    }

    public function messages()
    {
        return [
            'asignacion_id.required'         => 'El campo proyecto es obligatorio.',
            'fecha_inicio.required'          => 'El campo fecha inicio es obligatorio.',
            'fecha_fin.required'             => 'El campo fecha final es obligatorio.',
            'fecha_fin.after'                => 'La fecha final debe ser posterior a la fecha de inicio.',
            'inversion_institucion.required' => 'El campo inversión institución es obligatorio.',
            'inversion_institucion.numeric'  => 'El campo inversión institución debe se una cantidad.',
            'inversion_estudiante.required'  => 'El campo inversión estudiante es obligatorio.',
            'inversion_estudiante.numeric'   => 'El campo inversión estudiante debe se una cantidad.',
            'horas_completadas.required'     => 'El campo horas completadas es obligatorio.',
            'horas_completadas.numeric'      => 'El campo debe ser numérico.',
            'horas_completadas.max'          => 'La cantidad de horas registradas no debe ser mayor a las horas asignadas.',
        ];
    }
}
