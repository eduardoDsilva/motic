<?php

namespace App\Http\Controllers\Escola;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Escola;
use App\User;
use Illuminate\Support\Facades\Auth;

class EscolaController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $escolas = Escola::all();
        try{
            return $escolas;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $escola = Escola::find($id);
        try{
            return $escola;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $escola = Escola::create($request);
        $this->auditoriaController->storeCreate(
            'Criada a escola '.$escola->name.
            'tipoEscola: '.$escola->tipoEscola, ', telefone: '.$escola->telefone,
            ', pelo usuário '.Auth::user()->name,
            $escola->id);
        try{
            return $escola;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $escola = Escola::find($id);
        $usuario = User::find($escola->users->id);
        $usuario->delete();

        $this->auditoriaController->storeDelete(
            'Deletada a escola '.$escola->name.
            'tipoEscola: '.$escola->tipoEscola, ', telefone: '.$escola->telefone,
            ', pelo usuário '.Auth::user()->name,
            $escola->id);
        try{
            return $escola;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $escola = Escola::find($id);

        $escola->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editada a escola '.$escola->name.
            'tipoEscola: '.$escola->tipoEscola, ', telefone: '.$escola->telefone,
            ', pelo usuário '.Auth::user()->name,
            $escola->id);
        try{
            return $escola;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}
