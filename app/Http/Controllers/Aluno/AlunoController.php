<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 16/05/2018
 * Time: 08:34
 */

namespace App\Http\Controllers\Aluno;


use App\Aluno;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller

{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $alunos = Aluno::all();
        try{
            return $alunos;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $aluno = Aluno::find($id);
        try{
            return $aluno;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $aluno = Aluno::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o aluno '.$aluno.' pelo usuário '.Auth::user()->name,
            $aluno->id);
        try{
            return $aluno;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $aluno = Aluno::find($id);
        $usuario = User::find($aluno->users->id);
        $usuario->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o aluno '.$aluno.' pelo usuário '.Auth::user()->name,
            $aluno->id);
        try{
            return $aluno;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado o aluno '.$aluno.' pelo usuário '.Auth::user()->name,
            $aluno->id);
        try{
            return $aluno;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}