<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Escola;
use App\User;
use Illuminate\Support\Facades\Session;

class EscolaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function filtro($dataForm)
    {
        try {
            if ($dataForm['tipo'] == 'id') {
                $escolas = Escola::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'nome') {
                $filtro = '%' . $dataForm['search'] . '%';
                $escolas = Escola::where('name', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'usuario') {
                $filtro = $dataForm['search'];
                $escolas = [User::where('username', '=', $filtro)->first()->escola];
            } else if ($dataForm['tipo'] == 'email') {
                $filtro = '%' . $dataForm['search'] . '%';
                $escolas = Escola::where('email', 'like', $filtro)->paginate(10);
            }
            return $escolas;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($dataForm)
    {
        $qntProjetos = $dataForm['categoria_id'];
        try {
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);

            $escola = Escola::create($dataForm + ['user_id' => $user->id] + ['projetos' => count($qntProjetos)]);
            foreach ($dataForm['categoria_id'] as $categoria) {
                $escola->categoria()->attach($categoria);
            }

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);

            Session::put('mensagem', "A escola " . $escola->name . " foi cadastrada com sucesso!");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function update($dataForm, $id)
    {
        $qntProjetos = $dataForm['categoria_id'];
        try {
            $user = User::findOrFail($id);
            $user->update([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);

            $escola = $user->escola;
            $escola->update($dataForm + ['projetos' => count($qntProjetos)]);

            $escola = $user->escola;
            $escola->categoria()->detach();
            foreach ($dataForm['categoria_id'] as $categoria) {
                $escola->categoria()->attach($categoria);
            }

            $endereco = $user->endereco;
            $endereco->update($dataForm);

            Session::put('mensagem', "A escola " . $escola->name . " foi editada com sucesso!");

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $escola = Escola::findOrFail($id);
            $escola->user()->delete($id);

            Session::put('mensagem', "A escola " . $escola->name . " foi deletada com sucesso!");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
