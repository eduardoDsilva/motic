<?php

namespace App\Http\Controllers\Admin\user;

use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{

    use RegistersUsers;

    public function cadastraAluno(){
        return view('admin/escola/cadastro/usuario');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all() + ['tipo' => 'escola'];
        $user = User::create($dados);

        session(['idEscola' => $user->id]);

        return view('admin.escola.cadastro.escola');
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
            'tipo' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tipo' => $data['tipo'],
        ]);
    }

}
