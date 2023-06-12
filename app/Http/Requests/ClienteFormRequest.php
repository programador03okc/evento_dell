<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nombres'=>'required|max:300',
            'apellidos'=>'required|max:300',
            'email'=>'required|email|max:150',
            'dni'=>'required|min:8|max:8',
            'telefono'=>'required|max:150',
            'tipoparticipante'=>'required|max:300',
            //'pais'=>'required|max:300',
           
            'terminos'=>'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    // public function attributes()
    // {
    //     return [
    //         'email' => 'email address',
    //     ];
    // }
}
