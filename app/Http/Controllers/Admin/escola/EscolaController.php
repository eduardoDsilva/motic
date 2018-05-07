<?php

namespace App\Http\Controllers\Admin\escola;

use App\Escola;
use App\Usuario;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EscolaController extends Controller
{

    public function escola()
    {
        return view('admin/escola/home');
    }

    public function cadastraEscola(){
        return view('admin/escola/cadastrar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        $array = [
            'name'  => $dados['nome'],
            'username' => $dados['username'],
            'email' => $dados['email'],
            'password' => $dados['password'],
            'tipo' => $dados['tipo']
    ];
        User::create($array);
        dd($dados);
        //Escola::create($dados);

        return redirect()->route('admin.cursos');

    }
}
