<?php

namespace App\Http\Requests\Aluno;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name'                  => 'required|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/|between:3,100',
            'nascimento'            => 'nullable|date_format:d-m-Y',
            'sexo'                  => ['required', Rule::in(['masculino', 'feminino']),],
            'escola_id'             => 'required|integer|exists:escolas,id',
            'etapa'                 => 'required',
            'turma'                 => 'required',
            'cpf'                   => 'sometimes|nullable|digits:11|unique:alunos|unique:professores|unique:avaliadores',
            'email'                 => 'sometimes|nullable|email|unique:users|unique:alunos',
            'telefone'              => 'sometimes|nullable|digits_between:8, 16',
            'cep'                   => 'sometimes|nullable|digits:8',
            'bairro'                => 'sometimes|nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/|max:100',
            'rua'                   => 'sometimes|nullable|regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/|max:100',
            'numero'                => 'digits_between:0,5',
            'complemento'           => 'sometimes|nullable|alpha_num',
            'cidade'                => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado'                => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'pais'                  => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'camisa'                => ['required', Rule::in(['P', 'PP', 'M', 'G', 'GG']),],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.regex' => 'Insira um nome sem caractéres especiais!',
            'name.between' => 'Insira um nome entre entre 3 ou 100 caracteres!',

            'nascimento.date' => 'Insira uma data sem letras',

            'sexo.required' => 'O campo sexo é de preencimento obrigatório',

            'etapa.required' => 'O campo etapa é de preencimento obrigatório',

            'turma.required' => 'O campo turma é de preencimento obrigatório',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.integer'  => 'Selecione uma escola válida!',
            'escola_id.exists'  => 'Selecione uma escola válida!',

            'telefone.digits_between' => 'Insira um telefone que tenha entre 8 e 16 dígitos!',

            'cpf.digits' => 'Insira um CPF de 11 caracteres!',
            'cpf.unique' => 'CPF já cadastrado no sistema!',

            'cep.digits' => 'Insira um cep válido!',

            'email.email' => 'Insira um e-mail válido!',
            'email.unique' => 'E-mail já cadastrado no sistema',

            'bairro.max' => 'Insira um bairro válido!',
            'bairro.regex' => 'Não insira caracteres especiais no bairro',

            'rua.max' => 'Insira uma rua válida!',
            'rua.regex' => 'Não insira caracteres especiais no bairro',

            'numero.digits_between' => 'Insira um número com no máximo 5 dígitos!',

            'complemento.alpha_num' => 'Insira um complemento sem caracteres especiais!',

            'cidade.regex' => 'Insira uma cidade sem caracteres especiais!',

            'estado.regex' => 'Insira um estado sem caracteres especiais!',

            'pais.regex' => 'Insira um país sem caracteres especiais!',

            'camisa.required' => 'Selecione um tamanho de camisa para o aluno',

        ];
    }
}
