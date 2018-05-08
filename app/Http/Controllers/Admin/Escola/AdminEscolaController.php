<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;

class AdminEscolaController extends Controller
{
    public function index()
    {
        return view('admin/escola/home');
    }

    public function paginaCadastrarEscola(){
        return view('admin/escola/cadastro/registro');
    }

    public function salvarUsuario(Request $req)
    {
        $dados = $req->all() + ['tipoUser' => 'escola'];
        //dd($dados);
        //if($this->validator($req->all())->validate())
        //dd($dados);
        $teste = User::create([
            'name' => $dados['name'],
            'username' => $dados['username'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
            'tipoUser' => $dados['tipoUser'],]);
        session(['idEscola' => $teste->id]);
        dd($teste);
    }

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

}
