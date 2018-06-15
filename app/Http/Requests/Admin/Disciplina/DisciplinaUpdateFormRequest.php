<?php

namespace App\Http\Requests\Admin\Disciplina;

use Illuminate\Foundation\Http\FormRequest;

class DisciplinaUpdateFormRequest extends FormRequest
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
            'name'      =>'required|between:3,100|string',
            'descricao' =>'required|max:240|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.between' => 'Insira um nome válido!',
            'name.string' => 'Insira um nome válido!',
            'name.unique' => 'Essa disciplina já existe no sistema!',

            'descricao.required' => 'O campo descrição é de preenchimento obrigatório',
            'descricao.max' => 'Insira uma descrição com no máximo 240 caractéres!',
            'descricao.string' => 'Insira uma descrição válida!',
        ];
    }
}
