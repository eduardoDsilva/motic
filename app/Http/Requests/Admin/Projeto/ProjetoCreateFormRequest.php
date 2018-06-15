<?php

namespace App\Http\Requests\Admin\Projeto;

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
            'titulo'            => 'required|min:5|string|max:100',
            'area'              => 'required|min:5|string|max:100',
            'resumo'            => 'required|min:100|string|max:240',
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
            'titulo.min' => 'Insira um titulo com no mínimo 5 caracteres!',
            'titulo.max' => 'Insira um titulo com no máximo 100 caracteres!',
            'titulo.string' => 'Insira um titulo válido!',

            'area.required' => 'O campo area é de preenchimento obrigatório!',
            'area.min' => 'Insira uma area com no mínimo 5 caracteres!',
            'area.max' => 'Insira uma area com no máximo 100 caracteres!',
            'area.string' => 'Insira uma area válido!',

            'resumo.required' => 'O campo resumo é de preenchimento obrigatório!',
            'resumo.min' => 'Insira um resumo com no mínimo 100 caracteres!',
            'resumo.max' => 'Insira um resumo com no máximo 240 caracteres!',
            'resumo.string' => 'Insira um resumo válido!',

            'disciplina_id.required' => 'O campo disciplina é de preenchimento obrigatório!',
            'disciplina_id.integer' => 'Escolha uma disciplina válido!',

            'escola_id.required' => 'O campo escola é de preenchimento obrigatório!',
            'escola_id.integer' => 'Escolha uma escola válida!',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',
            'categoria_id.integer'  => 'Escolha uma categoria válida!',

            'aluno_id.required' => 'O campo aluno é de preenchimento obrigatório!',
            'aluno_id.integer'  => 'Escolha um aluno válido!',

            'orientador.required' => 'O campo orientador é de preenchimenti obrigatório!',
            'orientador.integer' => 'Escolha um orientador válido',

            'coorientador.integer' => 'Escolha um coorientador válido',
        ];
    }
}
