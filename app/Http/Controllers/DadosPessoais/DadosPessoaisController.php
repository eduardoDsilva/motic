<?php

namespace App\Http\Controllers\DadosPessoais;

use App\Dados_Pessoais;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Avaliador;
use App\User;
use Illuminate\Support\Facades\Auth;

class DadosPessoaisController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $dados = Dados_Pessoais::all();
        try{
            return $dados;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $dado = Dados_Pessoais::find($id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
       // dd($request);
        $dado = Dados_Pessoais::create($request);
        $this->auditoriaController->storeCreate(
            'Criado os dados pessoais do '.$dado.' pelo usuário '.Auth::user()->name,
            $dado->id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $dado = Dados_Pessoais::find($id);
        $usuario = User::find($dado->users->id);
        $usuario->delete();

        $this->auditoriaController->storeDelete(
            'Deletado os dados pessoais do '.$dado.' pelo usuário '.Auth::user()->name,
            $dado->id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $dado = User::find($id);

        $dado->dados_pessoais->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado os dados pessoais do '.$dado.' pelo usuário '.Auth::user()->name,
            $dado->id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}
