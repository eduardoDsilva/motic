<?php

namespace App\Http\Controllers\Disciplina;

use App\Disciplina;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DisciplinaController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $disciplinas = Disciplina::all();
        try{
            return $disciplinas;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){
        $disciplina = Disciplina::find($id);
        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $disciplina = Disciplina::create($request);
        $this->auditoriaController->storeCreate(
            $descricao = "Criada a Disciplina: ".$disciplina->name.", Descrição: ".$disciplina->descricao.", Criação: ".$disciplina->created_at.', pelo usuário: '.Auth::user()->name,
            $disciplina->id);
        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $disciplina = Disciplina::find($id);
        $disciplina->delete();


        $this->auditoriaController->storeDelete(
            $descricao = "Deletada a Disciplina: ".$disciplina->name.", Descrição: ".$disciplina->descricao.", Criação: ".$disciplina->created_at.', pelo usuário: '.Auth::user()->name,
            $disciplina->id);
        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->update($req->all());
        $this->auditoriaController->storeUpdate(
            $descricao = "Editada a Disciplina: ".$disciplina->name.", Descrição: ".$disciplina->descricao.", Criação: ".$disciplina->created_at.', pelo usuário: '.Auth::user()->name,
            $disciplina->id);

        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }



}
