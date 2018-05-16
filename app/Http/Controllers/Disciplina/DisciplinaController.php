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
        //dd($disciplina->name);
        $this->auditoriaController->storeCreate(
            'Criada a disciplina '.$disciplina.' pelo usuário '.Auth::user()->name,
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
            'Deletada a disciplina '.$disciplina.' pelo usuário '.Auth::user()->name,
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
            'Editada a disciplina '.$disciplina.' pelo usuário '.Auth::user()->name,
            $disciplina->id);

        try{
            return $disciplina;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }



}
