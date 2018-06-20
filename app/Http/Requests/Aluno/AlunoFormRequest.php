<?php

namespace App\Http\Requests\Aluno;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlunoFormRequest extends FormRequest
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
            'escola_id'             => 'required|integer|exists:escolas,id',
            'etapa'                 => 'required',
            'turma'                 => 'required',
            'telefone'              => 'max:16',
            'cep'                   => 'max:8',
            'bairro'                => 'max:100',
            'rua'                   => 'max:100',
            'numero'                => 'max:6',
            'complemento'           => '',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.alpha' => 'Insira um nome válido!',
            'name.between' => 'Insira um nome válido!',

            'naacimento.required' => 'O cmapo nascimento é de preencimento obrigatório',

            'sexo.required' => 'O campo sexo é de preencimento obrigatório',

            'etapa.required' => 'O campo etapa sé de preencimento obrigatório',

            'turma.required' => 'O campo turma é de preencimento obrigatório',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.integer'  => 'Selecione uma escola válida!',
            'escola_id.exists'  => 'Selecione uma escola válida!',

            'telefone.max' => 'Insira um telefone válido!',

            'bairro.max' => 'Insira um bairro válido!',

            'rua.max' => 'Insira uma rua válida!',

            'numero.max' => 'Insira um número válido!',

            'cep.max' => 'Insira um cep válido!',
        ];
    }
}
