<?php

namespace Leivaproducciones\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CampeonatoRequest extends FormRequest
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
            'nombre' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'deporte_id' => 'required',
            'categoria_id' => 'required', 
        ];
    }
}
