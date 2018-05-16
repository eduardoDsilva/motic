<?php

namespace App\Http\Controllers\Projeto;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Projeto;

class ProjetoController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $projetos = Projeto::all();
        try{
            return $projetos;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $projeto = Projetos::find($id);
        try{
            return $projeto;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $projeto = Projeto::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o usuário '.$projeto.' pelo usuário '.Auth::user()->name,
            $projeto->id);
        try{
            return $projeto;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $projeto = Projeto::find($id);
        $projeto->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o usuário '.$projeto.' pelo usuário '.Auth::user()->name,
            $projeto->id);
        try{
            return $projeto;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $projeto = projeto::find($id);
        $projeto->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado o usuário '.$projeto.' pelo usuário '.Auth::user()->name,
            $projeto->id);

        try{
            return $projeto;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}