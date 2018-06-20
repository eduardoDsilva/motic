<?php

namespace App\Http\Requests\Admin\Escola;

use Illuminate\Foundation\Http\FormRequest;

class EscolaUpdateFormRequest extends FormRequest
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
            'name'                  => 'required|min:3|alpha|max:100',
            'categoria_id'          => 'required',
            'email'                 => 'required|email',
            'telefone'              => 'required|min:8|max:15',
            'cep'                   => 'required|min:8|max:8',
            'bairro'                => 'required|min:4|max:100',
            'rua'                   => 'required|min:4|max:100',
            'numero'                => 'required|min:1|max:5',
            'complemento'           => '',
            'username'              => 'required|alpha|min:5|max:20',
            'password'              => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é de preenchimento obrigatório!',
            'name.alpha' => 'Insira um nome sem números!',
            'name.min' => 'Insira um nome com no mínimo 3 caracteres!',
            'name.max' => 'Insira um nome com no máximo 100 caracteres!',

            'categoria_id.required' => 'O campo categoria é de preenchimento obrigatório!',

            'email.required' => 'O campo email é de preenchimento obrigatório!',
            'email.email' => 'Insira um e-mail válido!',

            'telefone.required' => 'O campo telefone é de preenchimento obrigatório',
            'telefone.numeric' => 'Insira um telefoen válido!',
            'telefone.min' => 'Insira um telefone válido!',
            'telefone.max' => 'Insira um telefone válido!',

            'cep.required' => 'O campo CEP é de preenchimento obrigatório',
            'cep.min' => 'Insira um CEP válido!',
            'cep.max' => 'Insira um CEP válido!',

            'bairro.required' => 'O campo bairro é de preenchimento obrigatório!',
            'bairro.min' => 'Insira um bairro válido!',
            'bairro.max' => 'Insira um bairro válido!',

            'rua.required' => 'O campo rua é de preenchimento obrigatório!',
            'rua.min' => 'Insira uma rua válida!',
            'rua.max' => 'Insira uma rua válida!',

            'numero.required' => 'O campo número é de preenchimento obrigatório!',
            'numero.min' => 'Insira um némero válido!',
            'numero.max' => 'Insira um némero válido!',
            
            'numero.max' => 'Insira um complemento!',

            'username.required' => 'O campo usuário é de preenchimento obrigatório!',
            'username.min' => 'Insira um némero válido!',
            'username.max' => 'Insira um némero válido!',

            'password.required' => 'O campo senha é de preenchimento obrigatório!',
            'password.min' => 'A senha deve ter no mínimo 6 caractéres',
            'password.confirmed' => 'As senhas devem ser iguais!',

            'password_confirmed.required' => 'O campo senha é de preenchimento obrigatório!',
            'password_confirmed.min' => 'A senha deve ter no mínimo 6 caractéres',
        ];
    }
}
