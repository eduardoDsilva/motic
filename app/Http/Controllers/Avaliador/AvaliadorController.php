<?php

namespace App\Http\Controllers\Avaliador;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Avaliador;
use App\User;
use Illuminate\Support\Facades\Auth;

class AvaliadorController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $avaliadores = Avaliador::all();
        try{
            return $avaliadores;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $avaliador = Avaliador::find($id);
        try{
            return $avaliador;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $avaliador = Avaliador::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o avaliador '.$avaliador.' pelo usuário '.Auth::user()->name,
            $avaliador->id);
        try{
            return $avaliador;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $avaliador = Avaliador::find($id);
        $usuario = User::find($avaliador->users->id);
         $usuario->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o avaliador '.$avaliador.' pelo usuário '.Auth::user()->name,
            $avaliador->id);
        try{
            return $avaliador;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
