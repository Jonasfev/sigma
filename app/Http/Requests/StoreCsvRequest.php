<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCsvRequest extends FormRequest
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
            'csv' => 'mimes:csv,txt|required',
        ];
    }

    public function messages(){
        return [ 
            'csv.required' => '/!\\ Nenhum arquivo CSV indexado! /!\\',
            'csv.mimes' => '/!\\ Extensão de arquivo inválido, CSV requerido /!\\',
        ];
    }
}
