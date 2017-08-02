<?php

namespace sisNutrir\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteFormRequest extends FormRequest
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
            'nombre' => 'required | max:100',
            'apellidop' => 'required | max:50',
            'apellidom' => 'required | max:50',
            'genero' => '',
            'edad' => 'required',
            'correo' => 'max:100',
            'telefono' => 'max:20' 
        ];
    }
}
