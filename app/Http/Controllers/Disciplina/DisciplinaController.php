<?php

namespace App\Http\Controllers\Disciplina;

use App\Disciplina;
use App\Http\Controllers\Auditoria\AuditoriaController;

class DisciplinaController
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
            'Criada a disciplina '.$disciplina->name.' pelo usuário '.auth()->name,
            $disciplina->id);
        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $disciplina = Disciplina::find($id);
        $disciplina = $disciplina->delete();

        $this->auditoriaController->storeDelete(
            'Deletada a disciplina '.$disciplina->name.' pelo usuário '.auth()->name,
            $disciplina->id);
        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $disciplina = $this->getDisciplina($id);
        $disciplina->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editada a disciplina '.$disciplina->name.' pelo usuário '.auth()->name,
            $disciplina->id);

        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    private function getDisciplina($id)
    {
        return $this->disciplina->find($id);
    }



}
