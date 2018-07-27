<?php

namespace App\Http\Controllers\Escola\Configuracoes;

use App\Dado;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class EscolaConfigController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.escola');
    }

    public function alterarSenha()
    {
        try {
            return view('escola.config.mudar-senha');
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function alteraSenha(Request $request){
        try{
            $dataForm = $request->all();
            if(!(Hash::check($dataForm['senha_atual'], Auth::user()->password))){
                Session::put('mensagem', "Senha incorreta!");
                return redirect()->route('escola.config.alterar-senha')->withErrors(['password' => 'Senha atual está incorreta'])->withInput();
            }
            $user = User::find(Auth::user()->id);
            $user->password = (bcrypt($dataForm['password']));
            $user->save();
            Session::put('mensagem', "Senha atualizada!");
            return redirect()->route('escola.config.alterar-senha');
        } catch(\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

}