<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
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
            'nome'  => 'required',
            'cpf'   => 'required',
            'cel'   => 'required',
            'email' => 'required|unique:cadastro',
            'senha' => 'required'
         ];
    }
    public function message()
    {
        return [
            'nome.required'  => 'campo obrigatorio',
            'cpf.required'   => 'campo obrigatorio',
            'cel.required'   => 'campo obrigatorio',
            'email.required' => 'campo obrigatorio',
            'senha.required' => 'campo obrigatorio'
        ];
    }
}