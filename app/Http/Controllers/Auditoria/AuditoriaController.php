<?php

namespace App\Http\Controllers\Auditoria;

use App\Auditoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuditoriaController extends Controller
{

    public function buscar()
    {
        $auditorias = Auditoria::all();
        try {
            return $auditorias;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function storeCreate($dados, $id_acao, $objeto)
    {
        $auditoria = new Auditoria();
        $auditoria->tipo = 'create';
        $auditoria->descricao = $dados;
        $auditoria->objeto = $objeto;
        $auditoria->nome_usuario = Auth::user()->name;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = Auth::user()->id;
        try {
            return $auditoria->save();
        } catch (\Exception $e) {
            dd("ERRO: " . $e->getMessage());
        }
    }

    public function storeUpdate($descricao, $id_acao, $objeto)
    {
        $auditoria = new Auditoria();
        $auditoria->tipo = 'update';
        $auditoria->descricao = $descricao;
        $auditoria->objeto = $objeto;
        $auditoria->nome_usuario = Auth::user()->name;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = Auth::user()->id;
        try {
            return $auditoria->save();
        } catch (\Exception $e) {
            dd("ERRO: " . $e->getMessage());
        }
    }

    public function storeDelete($descricao, $id_acao, $objeto)
    {
        $auditoria = new Auditoria();
        $auditoria->tipo = 'delete';
        $auditoria->descricao = $descricao;
        $auditoria->objeto = $objeto;
        $auditoria->nome_usuario = Auth::user()->name;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = Auth::user()->id;
        try {
            return $auditoria->save();
        } catch (\Exception $e) {
            dd("ERRO: " . $e->getMessage());
        }
    }

    public function filtro($dataForm)
    {
        try {
            if ($dataForm['tipo'] == 'id') {
                $auditorias = Auditoria::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'tipo') {
                $filtro = '%' . $dataForm['search'] . '%';
                $auditorias = Auditoria::where('tipo', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'objeto') {
                $filtro = '%' . $dataForm['search'] . '%';
                $auditorias = Auditoria::where('objeto', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'user') {
                $filtro = '%' . $dataForm['search'] . '%';
                $auditorias = Auditoria::where('nome_usuario', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'id_user') {
                $auditorias = Aluno::where('user_id', '=', $dataForm['search'])->paginate(10);
            }
            return $auditorias;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
