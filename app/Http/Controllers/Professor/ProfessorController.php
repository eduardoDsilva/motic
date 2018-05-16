<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 16/05/2018
 * Time: 08:34
 */

namespace App\Http\Controllers\Professor;


use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Professor;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $professores = Professor::all();
        try{
            return $professores;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $professor = Professor::find($id);
        try{
            return $professor;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $professor = Professor::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o professor '.$professor.' pelo usuário '.Auth::user()->name,
            $professor->id);
        try{
            return $professor;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $professor = Professor::find($id);
        $usuario = User::find($professor->user->id);
        $usuario->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o professor '.$professor.' pelo usuário '.Auth::user()->name,
            $professor->id);
        try{
            return $professor;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $professor = Professor::find($id);

        $professor->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado o professor '.$professor.' pelo usuário '.Auth::user()->name,
            $professor->id);
        try{
            return $professor;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}