<?php

namespace App\Http\Requests\Admin\Escola;

use Illuminate\Foundation\Http\FormRequest;

class EscolaCreateFormRequest extends FormRequest
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
            'name'                  => 'required|min:3|string|max:100',
            'categoria_id'          => 'required',
            'email'                 => 'required|email|string|unique:users|unique:professores|unique:avaliadores',
            'telefone'              => 'required|string|min:8|max:15',
            'cep'                   => 'required|min:8|max:8',
            'bairro'                => 'required|min:4|string|max:100',
            'rua'                   => 'required|min:4|string|max:100',
            'numero'                => 'required|min:1|max:5',
            'complemento'           => '',
            'username'              => 'required|string|min:5|max:20|unique:users',
            'password'              => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.min' => 'Insira um nome válido!',
            'name.max' => 'Insira um nome válido!',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',

            'email.required' => 'O campo email é de preenchimento obrigatório!',
            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'telefone.required' => 'O campo telefone é de preenchimento obrigatório',
            'telefone.numeric' => 'Insira um telefoen válido!',
            'telefone.min' => 'Insira um telefone válido!',
            'telefone.max' => 'Insira um telefone válido!',

            'cep.required' => 'O campo CEP é de preenchimento obrigatório',
            'cep.min' => 'Insira um CEP válido!',
            'cep.max' => 'Insira um CEP válido!',

            'bairro.required' => 'O campo bairro é de preenchimento obrigatório!',
            'bairro.min' => 'Insira um bairro válido!',
            'bairro.max' => 'Insira um bairro válido!',

            'rua.required' => 'O campo rua é de preenchimento obrigatório!',
            'rua.min' => 'Insira uma rua válida!',
            'rua.max' => 'Insira uma rua válida!',

            'numero.required' => 'O campo número é de preenchimento obrigatório!',
            'numero.min' => 'Insira um némero válido!',
            'numero.max' => 'Insira um némero válido!',
            
            'numero.max' => 'Insira um número válido!',

            'username.required' => 'O campo usuário é de preenchimento obrigatório!',
            'username.min' => 'Insira um némero válido!',
            'username.max' => 'Insira um némero válido!',
            'username.unique' => 'O campo usuário já está em uso!',

            'password.required' => 'O campo senha é de preenchimento obrigatório!',
            'password.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password.confirmed' => 'As senhas devem ser iguais!',

            'password_confirmed.required' => 'O campo senha é de preenchimento obrigatório!',
            'password_confirmed.min' => 'A senha deve ter no mínimo 6 caractéres',
        ];
    }
}
