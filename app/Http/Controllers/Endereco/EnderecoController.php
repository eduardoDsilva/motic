<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 15/05/2018
 * Time: 10:38
 */

namespace App\Http\Controllers\Endereco;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Endereco;
use Illuminate\Support\Facades\Auth;

class EnderecoController
{

    private $auditoriaController;
    private $endereco;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $enderecos = Endereco::all();
        try{
            return $enderecos;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $endereco = Endereco::find($id);
        try{
            return $endereco;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $endereco = Endereco::create($request);
        $this->auditoriaController->storeCreate(
            'Criado o endereço '.$endereco.' pelo usuário '.Auth::user()->name,
            $endereco->id);

        try{
            return $endereco;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $endereco = Endereco::find($id);
        $endereco = $endereco->delete();

        $this->auditoriaController->storeDelete(
            'Deletado o endereço '.$endereco->name.' pelo usuário '.Auth::user()->name,
            $endereco->id);
        try{
            return $endereco;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($req, $id)
    {
        $endereco = $this->getEndereco($id);
        $endereco->update($req->all());
        $this->auditoriaController->storeUpdate(
            'Editado o endereço '.$endereco->name.' pelo usuário '.Auth::user()->name,
            $endereco->id);

        try{
            return $endereco;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    private function getEndereco($id)
    {
        return $this->endereco->find($id);
    }

}