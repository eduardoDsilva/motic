<?php

namespace App\Http\Controllers\Dado;

use App\Dado;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class DadoController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $dados = Dado::all();
        try{
            return $dados;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $dado = Dado::find($id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $dado = Dado::create($request);
        $this->auditoriaController->storeCreate(
            $descricao = "Criado os dados pessoais do: ".$dado->nome.
                ", nascimento: ".$dado->nascimento.
                ", sexo: ".$dado->sexo.", email: ".$dado->email.
                ", telefone: ".$dado->telefone. ", grau de instrucao: ".$dado->grauDeInstrucao.
                ", Criação: ".$dado->created_at.', pelo usuário: '.Auth::user()->name,
            $dado->id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $dado = Dado::find($id);
        $usuario = User::find($dado->users->id);
        $usuario->delete();

        $this->auditoriaController->storeDelete(
            $descricao = "Deletado os dados pessoais do: ".$dado->nome.
                ", nascimento: ".$dado->nascimento.
                ", sexo: ".$dado->sexo.", email: ".$dado->email.
                ", telefone: ".$dado->telefone. ", grau de instrucao: ".$dado->grauDeInstrucao.
                ", Criação: ".$dado->created_at.', pelo usuário: '.Auth::user()->name, $dado->id,
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

        $dado->dado->update($req->all());

        $this->auditoriaController->storeUpdate(
            $descricao = "Editado os dados pessoais do: ".$dado->nome.
                ", nascimento: ".$dado->nascimento.
                ", sexo: ".$dado->sexo.", email: ".$dado->email.
                ", telefone: ".$dado->telefone. ", grau de instrucao: ".$dado->grauDeInstrucao.
                ", Criação: ".$dado->created_at.', pelo usuário: '.Auth::user()->name, $dado->id,
            $dado->id);
        try{
            return $dado;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}
