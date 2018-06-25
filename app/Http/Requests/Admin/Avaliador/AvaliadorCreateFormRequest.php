<?php

namespace App\Http\Requests\Admin\Avaliador;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name'                  => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/|between:3,100',
            'nascimento'            => 'sometimes|nullable|date_format:d-m-Y',
            'sexo'                  => ['required', Rule::in(['masculino', 'feminino']),],
            'grauDeInstrucao'       => ['required', Rule::in(['Técnico', 'Graduado', 'Mestrado', 'Doutorado']),],
            'email'                 => 'required|email|unique:users|unique:alunos',
            'telefone'              => 'sometimes|nullable|integer|digits_between:8, 16',
            'instituicao'           => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'cpf'                   => 'sometimes|nullable|digits:11|unique:alunos|unique:professores|unique:avaliadores',
            'cep'                   => 'sometimes|nullable|digits:8',
            'bairro'                => 'sometimes|nullable|alpha_num|max:100',
            'rua'                   => 'sometimes|nullable|alpha_num|max:100',
            'numero'                => 'sometimes|nullable|digits_between:0,5',
            'complemento'           => 'sometimes|nullable|alpha_num',
            'cidade'                => 'sometimes|nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado'                => 'sometimes|nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'pais'                  => 'sometimes|nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'username'              => 'required|alpha_num|between:5,30|unique:users',
            'password'              => 'required|alpha_num|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.regex' => 'Insira um nome sem números!',
            'name.between' => 'Insira um nome entre entre 3 ou 100 caracteres!',

            'nascimento.required' => 'O campo nascimento é de preencimento obrigatório',
            'nascimento.date' => 'Insira uma data sem letras',

            'sexo.required' => 'O campo sexo é de preencimento obrigatório',

            'grauDeInstrucao.required' => 'O campo sexo é de preencimento obrigatório',

            'email.required' => 'O campo email é de preenchimento obrigatório!',
            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'telefone.digits_between' => 'Insira um telefone que tenha entre 8 e 16 dígitos!',
            'telefone.integer' => 'Insira um telefone sem letras!',

            'insituicao.required' => 'O campo instituição é de preenchimento obrigatório',
            'insituicao.string' => 'Insira uma instituição válida',

            'cpf.digits' => 'Insira um CPF de 11 caracteres!',
            'cpf.unique' => 'CPF já cadastrado no sistema!',

            'cep.digits' => 'Insira um cep válido!',

            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'bairro.max' => 'Insira um bairro válido!',
            'bairro.alpha_num' => 'Não insira caracteres especiais',

            'rua.max' => 'Insira uma rua válida!',
            'rua.alpha_num' => 'Não insira caracteres especiais!',

            'numero.digits_between' => 'Insira um número com no máximo 5 dígitos!',

            'complemento.alpha_num' => 'Insira um complemento sem caracteres especiais!',

            'cidade.regex' => 'Insira uma cidade sem caracteres especiais!',

            'estado.regex' => 'Insira um estado sem caracteres especiais!',

            'pais.regex' => 'Insira um país sem caracteres especiais!',

            'username.required' => 'O campo usuário é de preenchimento obrigatório!',
            'username.alpha_num' => 'Insira um usuário sem números!',
            'username.between' => 'Insira um usuário entre 5 e 20 caracteres!',
            'username.unique' => 'O campo usuário já está em uso!',

            'password.required' => 'O campo senha é de preenchimento obrigatório!',
            'password.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password.confirmed' => 'As senhas devem ser iguais!',
            'password.alpha_num' => 'Insira uma senha sem caracteres especiais!',

            'password_confirmed.required' => 'O campo senha é de preenchimento obrigatório!',
            'password_confirmed.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password_confirmed.alpha_num' => 'Insira uma senha sem caracteres especiais',
            'password_confirmed.confirmed' => 'As senhas devem ser iguais',
        ];
    }
}
