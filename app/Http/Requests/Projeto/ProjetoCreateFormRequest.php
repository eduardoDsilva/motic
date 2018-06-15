<?php

namespace App\Http\Requests\Projeto;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoCreateFormRequest extends FormRequest
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
            'titulo'            => 'required|string|between:5,100',
            'area'              => 'required|string|between:5,100',
            'resumo'            => 'required|string|between:100,240',
            'disciplina_id'     => 'required|integer',
            'escola_id'         => 'required|integer',
            'categoria_id'      => 'required|integer|size:1',
            'aluno_id'          => 'required|integer|size:3',
            'orientador'        => 'required|integer',
            'coorientador'      => 'integer',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo titulo é de preenchimento obrigatório!',
            'titulo.between' => 'Insira um titulo com no mínimo 5 caracteres!',
            'titulo.string' => 'Insira um titulo válido!',

            'area.required' => 'O campo area é de preenchimento obrigatório!',
            'area.between' => 'Insira uma area com no mínimo 5 caracteres!',
            'area.string' => 'Insira uma area válido!',

            'resumo.required' => 'O campo resumo é de preenchimento obrigatório!',
            'resumo.between' => 'Insira um resumo com no mínimo 100 caracteres!',
            'resumo.string' => 'Insira um resumo válido!',

            'disciplina_id.required' => 'O campo disciplina é de preenchimento obrigatório!',
            'disciplina_id.integer' => 'Escolha uma disciplina válido!',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.integer' => 'Escolha uma escola válida!',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',
            'categoria_id.integer'  => 'Escolha uma categoria válida!',
            'categoria.size'  => 'Escolha uma categoria!',

            'aluno_id.required' => 'O campo aluno é de preenchimento obrigatório!',
            'aluno_id.integer'  => 'Escolha um aluno válido!',
            'aluno_id.size'  => 'Escolha três alunos!',

            'orientador.required' => 'O campo orientador é de preenchimenti obrigatório!',
            'orientador.integer' => 'Escolha um orientador válido',

            'coorientador.integer' => 'Escolha um coorientador válido',
        ];
    }
}