<?php
namespace App\Http\Controllers\Auditoria;

use \ForceUTF8\Encoding;
use App\Auditoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuditoriaController extends Controller
{

    public function buscar()
    {
        $auditorias = Auditoria::all();
        try{
            return $auditorias;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function storeCreate($descricao, $id_acao){
        $auditoria = new Auditoria();
        $auditoria->tipo = 'create';
        $auditoria->descricao = $descricao;
        $auditoria->nome_usuario= Auth::user()->name;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = Auth::user()->id;
        try {
            return $auditoria->save();
        } catch (\Exception $e) {
            dd("ERRO: " . $e->getMessage());
        }
    }

    public function storeUpdate($descricao, $id_acao){
        $auditoria = new Auditoria();
        $auditoria->tipo = 'update';
        $auditoria->descricao = $descricao;
        $auditoria->nome_usuario= Auth::user()->name;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = Auth::user()->id;
        try {
            return $auditoria->save();
        } catch (\Exception $e) {
            dd("ERRO: " . $e->getMessage());
        }
    }
    public function storeDelete($descricao, $id_acao){
        $auditoria = new Auditoria();
        $auditoria->tipo = 'delete';
        $auditoria->descricao = $descricao;
        $auditoria->nome_usuario= Auth::user()->name;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = Auth::user()->id;
        try {
            return $auditoria->save();
        } catch (\Exception $e) {
            dd("ERRO: " . $e->getMessage());
        }
    }
}
