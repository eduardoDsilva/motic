<?php

namespace App\Http\Requests\Aluno;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlunoUpdateFormRequest extends FormRequest
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
            'escola_id'             => 'required|integer|exists:escolas,id',
            'etapa'                 => 'required',
            'turma'                 => 'required|alpha_num',
            'cpf'                   => 'sometimes|nullable|digits:11',
            'email'                 => 'sometimes|nullable|email',
            'telefone'              => 'sometimes|nullable|digits_between:8, 16',
            'cep'                   => 'sometimes|nullable|digits:8',
            'bairro'                => 'sometimes|nullable|alpha_num|max:100',
            'rua'                   => 'sometimes|nullable|alpha_num|max:100',
            'numero'                => 'digits_between:0,5',
            'complemento'           => 'sometimes|nullable|alpha_num',
            'cidade'                => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'estado'                => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
            'pais'                  => 'regex:/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/',
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

            'etapa.required' => 'O campo etapa é de preencimento obrigatório',

            'turma.required' => 'O campo turma é de preencimento obrigatório',
            'turma.alpha_num' => 'Não insira caracteres especiais',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.integer'  => 'Selecione uma escola válida!',
            'escola_id.exists'  => 'Selecione uma escola válida!',

            'telefone.digits_between' => 'Insira um telefone que tenha entre 8 e 16 dígitos!',

            'cpf.digits' => 'Insira um CPF de 11 caracteres!',

            'cep.digits' => 'Insira um cep válido!',

            'email.email' => 'Insira um e-mail válido!',

            'bairro.max' => 'Insira um bairro válido!',
            'bairro.alpha_num' => 'Não insira caracteres especiais no bairro',

            'rua.max' => 'Insira uma rua válida!',
            'rua.alpha_num' => 'Não insira caracteres especiais na rua!',

            'numero.digits_between' => 'Insira um número com no máximo 5 dígitos!',

            'complemento.alpha_num' => 'Insira um complemento sem caracteres especiais!',

            'cidade.regex' => 'Insira uma cidade sem caracteres especiais!',

            'estado.regex' => 'Insira um estado sem caracteres especiais!',

            'pais.regex' => 'Insira um país sem caracteres especiais!',

        ];
    }
}
