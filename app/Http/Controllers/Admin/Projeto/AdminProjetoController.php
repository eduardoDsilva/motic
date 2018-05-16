<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Projeto;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Disciplina\DisciplinaController;
use App\Http\Controllers\Projeto\ProjetoController;
use Illuminate\Http\Request;

class AdminProjetoController extends Controller
{

    private $projetoController;
    private $disciplinaController;
    private $request;

    public function __construct(ProjetoController $projetoController, DisciplinaController $disciplinaController)
    {
        $this->projetoController = $projetoController;
        $this->disciplinaController = $disciplinaController;
    }

    public function index(){
        return view('admin/projeto/home');
    }

    public function paginaCadastrarProjeto(){
        $disciplinas = $this->disciplinaController->buscar();
        return view("admin/projeto/cadastro/registro", compact('disciplinas'));
    }

    public function editar($id){
        $projeto = $this->projetoController->editar($id);

        return view('admin/projeto/editar/editar', compact('projeto'));
    }

    public function buscar()
    {
        $projetos = $this->projetoController->buscar();
        return view("admin/projeto/busca/buscar", compact('projetos'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all();
        $this->projetoController->store($this->request);

        return redirect()
            ->route("admin/projeto/home")
            ->with("sucess", "Projeto cadastrado com sucesso!");
    }

    public function delete($id){
        $this->projetoController->delete($id);
        $projeto = $this->projetoController->buscar();

        return redirect()
            ->route("admin/projeto/home")
            ->with(compact('projeto'));
    }

    public function update(Request $req, $id)
    {
        $this->projetoController->update($req, $id);
        $projetos = $this->projetoController->buscar();
        return view('admin/projeto/home', compact('projetos'));
    }


}
