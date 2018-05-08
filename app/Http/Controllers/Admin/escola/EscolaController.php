<?php

namespace App\Http\Controllers\Admin\escola;

use App\Instituicao;
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

    public function cadastra(){
        return view('admin/escola/cadastro/escola');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all() + ['user_id' => session()->get('idEscola')];

        Instituicao::create($dados);

        return redirect()->route('admin.escola.cadastro.endereco');

    }
}
