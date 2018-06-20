<?php

namespace App\Http\Requests\Professor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfessorCreateFormRequest extends FormRequest
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
            'name'                  => 'required|alpha|between:3,100',
            'nascimento'            => 'required',
            'sexo'                  => ['required', Rule::in(['masculino', 'feminino']),],
            'grauDeInstrucao'       => 'required',
            'matricula'             => 'required|numeric|unique:professores',
            'escola_id'             => 'required|numeric|exists:escolas,id',
            'email'                 => 'required|email|string|unique:users|unique:alunos',
            'telefone'              => 'required|between:8,16',
            'cpf'                   => 'required|string|digits:11|unique:alunos|unique:professores|unique:avaliadores',
            'cep'                   => 'required|digits:8',
            'bairro'                => 'required|string|between:4,100',
            'rua'                   => 'required|between:4,100',
            'numero'                => 'required|max:5',
            'complemento'           => '',
            'username'              => 'required|string|between:4,20|unique:users',
            'password'              => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.alpha' => 'Insira um nome válido!',
            'name.between' => 'Insira um nome válido!',

            'nascimento.required' => 'O cmapo nascimento é de preencimento obrigatório',

            'sexo.required' => 'O cmapo sexo é de preencimento obrigatório',

            'grauDeInstrucao.required' => 'O cmapo grau de instrução é de preencimento obrigatório',

            'matricula.required' => 'O campo matrícula é de preenchimento obrigatório!',
            'matricula.numeric'  => 'Insira uma matrícula válida!',
            'matricula.unique'   => 'Matrícula já cadastrada no sistema!',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.numeric'  => 'Escolha uma escola válida!',
            'escola_id.exists'  => 'Escola inválida!',

            'email.required' => 'O campo email é de preenchimento obrigatório!',
            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'telefone.required' => 'O campo telefone é de preenchimento obrigatório',
            'telefone.numeric' => 'Insira um telefoen válido!',
            'telefone.between' => 'Insira um telefone entre 8 e 16 caracteres!',

            'cpf.required' => 'O campo cpf é de preenchimento obrigatório!',
            'cpf.digits' => 'Insira um CPF de 11 caracteres!',
            'cpf.unique' => 'CPF já cadastrado no sistema!',

            'cep.required' => 'O campo CEP é de preenchimento obrigatório',
            'cep.digits' => 'Insira um CEP válido!',

            'bairro.required' => 'O campo bairro é de preenchimento obrigatório!',
            'bairro.string' => 'Insira um bairro válido!',
            'bairro.between' => 'Insira um bairro válido!',

            'rua.required' => 'O campo rua é de preenchimento obrigatório!',
            'rua.between' => 'Insira uma rua válida!',

            'numero.required' => 'O campo número é de preenchimento obrigatório!',
            'numero.max' => 'Insira um número válido!',

            'username.required' => 'O campo usuário é de preenchimento obrigatório!',
            'username.string' => 'Insira um usuário válido',
            'username.between' => 'Insira um usuário válido!',
            'username.unique' => 'O campo usuário já está em uso!',

            'password.required' => 'O campo senha é de preenchimento obrigatório!',
            'password.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password.confirmed' => 'As senhas devem ser iguais!',

            'password_confirmed.required' => 'O campo senha é de preenchimento obrigatório!',
            'password_confirmed.min' => 'A senha deve ter no mínimo 6 caractéres',
        ];
    }
}
