<?php

namespace App\Http\Requests\Escola\Aluno;

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
            'turma'                 => 'required',
            'telefone'              => 'max:15',
            'cep'                   => 'max:8',
            'bairro'                => 'max:100',
            'rua'                   => 'max:100',
            'numero'                => 'max:5',
            'complemento'           => '',
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

            'turma.required' => 'O campo turma é de preencimento obrigatório',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',

            'telefone.numeric' => 'Insira um telefoen válido!',
            'telefone.max' => 'Insira um telefone válido!',

            'cep.max' => 'Insira um CEP válido!',

            'bairro.max' => 'Insira um bairro válido!',

            'rua.max' => 'Insira uma rua válida!',

            'numero.max' => 'Insira um número válido!',
        ];
    }
}
