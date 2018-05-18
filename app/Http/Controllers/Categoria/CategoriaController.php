<?php

namespace App\Http\Controllers\Categoria;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Categoria;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function buscar()
    {
        $categorias = Categoria::all();
        try{
            return $categorias;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function editar($id){

        $categoria = Categoria::find($id);
        try{
            return $categoria;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($request)
    {
        $categoria = Categoria::create($request);
        $this->auditoriaController->storeCreate(
            $descricao = "Criado a categoria: ".$categoria->id.", Criação: ".$categoria->created_at.', pelo usuário: '.Auth::user()->name,
            $categoria->id);
        try{
            return $categoria;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function delete($id){

        $categoria = Categoria::find($id);
        $categoria->delete();

        $this->auditoriaController->storeDelete(
            $descricao = "Deletado a categoria: ".$categoria->id.", Criação: ".$categoria->created_at.', pelo usuário: '.Auth::user()->name,
            $categoria->id);
        try{
            return $categoria;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
