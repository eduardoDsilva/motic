<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    private $auditoriaController;
    private $user;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $users = User::all();
        try{
            return $users;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $user = User::find($id);
        try{
            return $user;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $user = User::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o usuário '.$user.' pelo usuário '.Auth::user()->name,
            $user->id);
        try{
            return $user;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $user = User::find($id);
        $user = $user->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o usuário '.$user.' pelo usuário '.Auth::user()->name,
            $user->id);
        try{
            return $user;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $user = User::find($id);
        dd($user);
        $user->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado o usuário '.$user.' pelo usuário '.Auth::user()->name,
            $user->id);

        try{
            return $user;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}