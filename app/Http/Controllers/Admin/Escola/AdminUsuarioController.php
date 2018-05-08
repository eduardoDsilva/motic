<?php

namespace App\Http\Controllers\Admin\Escola;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminUsuarioController extends Controller
{

    use RegistersUsers;

    public function cadastraAluno(){
        return view('admin/escola/cadastro/usuario');
    }

    public function salvarUsuario(Request $req)
    {
        $dados = $req->all() + ['tipoUser' => 'escola'];
        dd($dados);
        $this->validator($req->all())->validate();
        User::create([
            'name' => $dados['name'],
            'username' => $dados['username'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
            'tipoUser' => $dados['tipoUser'],]);
        session(['idEscola' => $dados->id]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tipoUser' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

}
