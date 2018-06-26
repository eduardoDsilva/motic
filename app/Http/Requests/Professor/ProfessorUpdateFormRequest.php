<?php

namespace App\Http\Requests\Professor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfessorUpdateFormRequest extends FormRequest
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
            'nascimento'            => 'required|date_format:d-m-Y',
            'sexo'                  => ['required', Rule::in(['masculino', 'feminino']),],
            'grauDeInstrucao'       => 'required',
            'matricula'             => 'required|numeric',
            'escola_id'             => 'required|numeric|exists:escolas,id',
            'email'                 => 'required|email',
            'cpf'                   => 'required|digits:11',
            'telefone'              => 'required|digits_between:8, 16',
            'cep'                   => 'required|digits:8',
            'bairro'                => 'required|string|between:4,100',
            'rua'                   => 'required|string|between:4,100',
            'numero'                => 'required|digits_between:1,5',
            'complemento'           => 'sometimes|nullable|string',
            'cidade'                => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado'                => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'pais'                  => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'username'              => 'required|alpha_num|between:5,30',
            'password'              => 'required|alpha_num|min:6|confirmed',
            'camisa'                => ['required', Rule::in(['P', 'PP', 'M', 'G', 'GG']),],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.regex' => 'Insira um nome sem números!',
            'name.between' => 'Insira um nome entre 3 e 100 caracteres!',

            'naacimento.required' => 'O campo nascimento é de preencimento obrigatório',
            'naacimento.date' => 'Insira uma data sem letras',

            'sexo.required' => 'O campo sexo é de preencimento obrigatório',

            'grauDeInstrucao.required' => 'O campo grau de instrução é de preencimento obrigatório',

            'matricula.required' => 'O campo matrícula é de preenchimento obrigatório!',
            'matricula.numeric'  => 'Insira uma matrícula sem letras!',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.numeric'  => 'Escolha uma escola válida!',
            'escola_id.exists'  => 'Escola não existe no sistema!',

            'email.required' => 'O campo email é de preenchimento obrigatório!',
            'email.email' => 'Insira um e-mail válido!',

            'cpf.required' => 'O campo cpf é de preenchimento obrigatório!',
            'cpf.digits' => 'Insira um CPF de 11 caracteres!',

            'telefone.required' => 'O campo telefone é de preenchimento obrigatório',
            'telefone.digits_between' => 'Insira um telefone entre 8 e 16 dígitos!',

            'cep.required' => 'O campo CEP é de preenchimento obrigatório',
            'cep.digits' => 'Insira um CEP com 8 dígitos!',

            'bairro.required' => 'O campo bairro é de preenchimento obrigatório!',
            'bairro.between' => 'Insira um bairro que tenha entre 4 e 100 caracteres!',
            'bairro.string' => 'Insira um bairro sem caracteres especiais!',

            'rua.required' => 'O campo rua é de preenchimento obrigatório!',
            'rua.between' => 'Insira uma rua que tenha entre 4 e 100 caracteres!',
            'rua.string' => 'Insira uma rua sem caracteres especiais!',

            'numero.required' => 'O campo número é de preenchimento obrigatório!',
            'numero.digits_between' => 'Insira um número que tenha até 5 dígitos!',

            'complemento.string' => 'Insira um complemento sem caracteres especiais!',

            'cidade.regex' => 'Insira uma cidade sem caracteres especiais!',

            'estado.regex' => 'Insira um estado sem caracteres especiais!',

            'pais.regex' => 'Insira um país sem caracteres especiais!',

            'username.required' => 'O campo usuário é de preenchimento obrigatório!',
            'username.alpha_num' => 'Insira um usuário sem números!',
            'username.between' => 'Insira um usuário entre 5 e 20 caracteres!',

            'password.required' => 'O campo senha é de preenchimento obrigatório!',
            'password.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password.confirmed' => 'As senhas devem ser iguais!',
            'password.alpha_num' => 'Insira uma senha sem caracteres especiais!',

            'password_confirmed.required' => 'O campo senha é de preenchimento obrigatório!',
            'password_confirmed.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password_confirmed.alpha_num' => 'Insira uma senha sem caracteres especiais',
            'password_confirmed.confirmed' => 'As senhas devem ser iguais',

            'camisa.required' => 'Selecione um tamanho de camisa para o professor',
        ];
    }
}