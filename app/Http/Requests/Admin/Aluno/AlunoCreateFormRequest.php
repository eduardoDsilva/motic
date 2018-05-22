<?php

namespace App\Http\Requests\Admin\Aluno;

use Illuminate\Foundation\Http\FormRequest;

class AlunoCreateFormRequest extends FormRequest
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
            'nascimento'            => 'required',
            'sexo'                  => 'required',
            'anoLetivo'             => 'required',
            'escola_id'             => 'required|numeric',
            'email'                 => 'email|string|unique:users',
            'telefone'              => 'max:15',
            'cpf'                   => '',
            'cep'                   => 'max:8',
            'bairro'                => 'max:100',
            'rua'                   => 'max:100',
            'numero'                => 'max:5',
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

            'naacimento.required' => 'O cmapo nascimento é de preencimento obrigatório',

            'sexo.required' => 'O cmapo sexo é de preencimento obrigatório',

            'anoLetivo.required' => 'O campo ano letivo é de preencimento obrigatório',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.numeric'  => 'Escola uma escola válida!',

            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'telefone.numeric' => 'Insira um telefoen válido!',
            'telefone.max' => 'Insira um telefone válido!',

            'cep.max' => 'Insira um CEP válido!',

            'bairro.max' => 'Insira um bairro válido!',

            'rua.max' => 'Insira uma rua válida!',

            'numero.max' => 'Insira um némero válido!',

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
