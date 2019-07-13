<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteForm extends FormRequest
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
            
         'ci'=>'required|digits:7',
         'nombre'=>'required|regex:/^[\pL\s\-]+$/u',
         'ap_paterno'=>'required|alpha',
         'ap_materno'=>'required|alpha',
         'fecha_nac'=>'required',
         'direccion'=>'required',
         'telefono'=>'digits_between:7,8|required',



        ];
    }
}
