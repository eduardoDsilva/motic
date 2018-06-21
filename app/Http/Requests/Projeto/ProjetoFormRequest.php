<?php

namespace App\Http\Requests\Projeto;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoFormRequest extends FormRequest
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
            'titulo'            => 'required|alpha_num|between:5,100',
            'area'              => 'required|alpha_num|between:5,100',
            'resumo'            => 'required|alpha_num|between:50,240',
            'disciplina_id'     => 'required|integer',
            'escola_id'         => 'required|integer|exists:escolas,id',
            'categoria_id'      => 'required|integer|size:1',
            'aluno_id'          => 'required|integer|size:3',
            'orientador'        => 'required|integer',
            'coorientador'      => 'sometimes|nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo titulo é de preenchimento obrigatório!',
            'titulo.between' => 'Insira um titulo com no mínimo 5 caracteres!',
            'titulo.alpha_num' => 'Insira um titulo sem caracteres especiais!',

            'area.required' => 'O campo area é de preenchimento obrigatório!',
            'area.between' => 'Insira uma area com no mínimo 5 caracteres!',
            'area.alpha_num' => 'Insira uma área sem caracteres especiais!',

            'resumo.required' => 'O campo resumo é de preenchimento obrigatório!',
            'resumo.between' => 'Insira um resumo com no mínimo 50 caracteres e no máximo 240!',
            'resumo.alpha_num' => 'Insira um resumo sem caracteres especiais!',

            'disciplina_id.required' => 'O campo disciplina é de preenchimento obrigatório!',
            'disciplina_id.integer' => 'Escolha uma disciplina válido!',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.integer' => 'Escolha uma escola válida!',
            'escola_id.exists' => 'Escola não cadastrada no sistema!',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',
            'categoria_id.integer'  => 'Escolha uma categoria válida!',
            'categoria.size'  => 'Escolha uma categoria!',

            'aluno_id.required' => 'O campo aluno é de preenchimento obrigatório!',
            'aluno_id.integer'  => 'Escolha um aluno válido!',
            'aluno_id.size'  => 'Escolha três alunos!',

            'orientador.required' => 'O campo orientador é de preencimento obrigatório!',
            'orientador.integer' => 'Escolha um orientador válido',

            'coorientador.integer' => 'Escolha um coorientador válido',
        ];
    }
}