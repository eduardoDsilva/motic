<?php

namespace App\Http\Requests\Admin\Avaliador;

use Illuminate\Foundation\Http\FormRequest;

class AvaliadorCreateFormRequest extends FormRequest
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
            'sexo'                  => 'required',
            'email'                 => 'required|email|string|unique:users|unique:alunos',
            'instituicao'           => 'required|string',
            'cpf'                   => 'required|string|min:11|max:11|unique:alunos|unique:professores|unique:avaliadores',
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

            'sexo.required' => 'O cmapo sexo é de preencimento obrigatório',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',

            'cpf.required' => 'O campo cpf é de preenchimento obrigatório!',
            'cpf.min' => 'Insira um CPF válido!',
            'cpf.max' => 'Insira um CPF válido!',

            'email.required' => 'O campo email é de preenchimento obrigatório!',
            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'insituicao.required' => 'O campo instituição é de preenchimento obrigatório',
            'insituicao.string' => 'Insira uma instituição válida',
            
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
