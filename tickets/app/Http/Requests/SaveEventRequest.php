<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEventRequest extends FormRequest
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
            'nombre_evento' => 'required|min:3',
            'fecha_evento' => 'required',
            'direccion' => 'required',
            'descripcion' => 'required|min:3',
            'capacidad' => 'required',
            'siglas' => 'required',
        ];
    }
}
