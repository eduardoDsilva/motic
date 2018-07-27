<?php

namespace App\Http\Controllers\Admin\Configuracoes;

use App\Dado;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class AdminConfigController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function alterarSenha()
    {
        try {
            return view('admin.config.mudar-senha');
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function alteraSenha(Request $request){
        try{
            $dataForm = $request->all();
            $validator = Validator::make($request->all(), [
                'senha_atual.required'  => 'O campo senha é de preenchimento obrigatório!',
                'senha_atual.min'       => 'A senha deve ter no mínimo 6 caractéres',
                'senha_atual.confirmed' => 'As senhas devem ser iguais!',
                'senha_atual.alpha_num' => 'Insira uma senha sem caracteres especiais!',

                'password.required'     => 'O campo senha é de preenchimento obrigatório!',
                'password.min'          => 'A senha deve ter no mínimo 6 caractéres',
                'password.confirmed'    => 'As senhas devem ser iguais!',
                'password.alpha_num'    => 'Insira uma senha sem caracteres especiais!',

                'password_confirmed.required'   => 'O campo senha é de preenchimento obrigatório!',
                'password_confirmed.min'        => 'A senha deve ter no mínimo 6 caractéres',
                'password_confirmed.alpha_num'  => 'Insira uma senha sem caracteres especiais',
                'password_confirmed.confirmed'  => 'As senhas devem ser iguais',

            ]);
            if ($validator->fails()) {
                return redirect()->route('admin.config.alterar-senha')
                    ->withErrors($validator)
                    ->withInput();
            }
            if(!(Hash::check($dataForm['senha_atual'], Auth::user()->password))){
                Session::put('mensagem', "Senha incorreta!");
                return redirect()->route('admin.config.alterar-senha')->withErrors(['password' => 'Senha atual está incorreta'])->withInput();
            }
            $user = User::find(Auth::user()->id);
            $user->password = (bcrypt($dataForm['password']));
            $user->save();
            Session::put('mensagem', "Senha atualizada!");
            return redirect()->route('admin.config.alterar-senha');
        } catch(\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

}