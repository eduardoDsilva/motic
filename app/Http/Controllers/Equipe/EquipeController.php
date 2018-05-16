<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 16/05/2018
 * Time: 08:33
 */

namespace App\Http\Controllers\Equipe;


use App\Equipe;
use App\Http\Controllers\Controller;

class EquipeController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $equipes = Equipe::all();
        try{
            return $equipes;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $equipe = Equipe::find($id);
        try{
            return $equipe;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $equipe = Equipe::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o equipe '.$equipe.' pelo usuário '.Auth::user()->name,
            $equipe->id);
        try{
            return $equipe;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $equipe = Equipe::find($id);
        $equipe->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o equipe '.$equipe.' pelo usuário '.Auth::user()->name,
            $equipe->id);
        try{
            return $equipe;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $equipe = Equipe::find($id);

        $equipe->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado o equipe '.$equipe.' pelo usuário '.Auth::user()->name,
            $equipe->id);
        try{
            return $equipe;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}