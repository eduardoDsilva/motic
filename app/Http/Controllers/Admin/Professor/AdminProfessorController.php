<?php

namespace App\Http\Controllers\Admin\Professor;

use App\professor;
use App\Http\Controllers\professor\professorController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DadosPessoais\DadosPessoaisController;
use App\Http\Controllers\Escola\EscolaController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Endereco\EnderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminProfessorController extends Controller
{

    private $dadosPessoaisController;
    private $usuarioController;
    private $professorController;
    private $enderecoController;
    private $escolaController;
    private $request;
    private $professor;

    public function __construct(DadosPessoaisController $dadosPessoaisController, UsuarioController $usuarioController, professorController $professorController, EnderecoController $enderecoController, EscolaController $escolaController)
    {
        $this->dadosPessoaisController = $dadosPessoaisController;
        $this->usuarioController = $usuarioController;
        $this->professorController = $professorController;
        $this->enderecoController = $enderecoController;
        $this->escolaController = $escolaController;
        $this->professor = new professor();
    }

    public function index()
    {
        return view('admin/professor/home');
    }

    public function paginaCadastrarProfessor()
    {
        $escolas = $this->escolaController->buscar();
        return view('admin/professor/cadastro/registro', compact('escolas'));
    }

    public function editar($id){
        $professor = $this->professorController->editar($id);

        return view('admin/professor/editar/editar', compact('professor'));
    }

    public function buscar()
    {
        $professores = $this->professorController->buscar();
        $escolas = $this->escolaController->buscar();

        Session::put('escolas',  $escolas);

        return view("admin/professor/busca/buscar", compact('professores'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all() + ['tipoUser' => 'professor'] ;

        $usuario = $this->usuarioController->store($this->request);
        $this->request += ['user_id' => $usuario->id];

        $this->professorController->store($this->request);

        $this->dadosPessoaisController->store($this->request);

        $this->enderecoController->store($this->request);

        return redirect()
            ->route("admin/professor/home")
            ->with("sucess", "professor cadastrado com sucesso!");

    }

    public function delete($id){
        $this->professorController->delete($id);
        $professores = $this->professorController->buscar();

        return redirect()
            ->route("admin/professor/busca/buscar")
            ->with(compact('professores'));
    }

    public function update(Request $req, $id)
    {
        $this->request = $req->all() + ['tipoUser' => 'professor'] ;

        $teste = $this->professor->find($id);

        $idUser = $teste->user->id;

        $this->usuarioController->update($req, $idUser);

        $this->dadosPessoaisController->update($req, $idUser);

        $this->enderecoController->update($req, $idUser);

        $this->professorController->update($req, $id);

        $professores = $this->professorController->buscar();
        return redirect()
            ->route("admin/professor/busca/buscar")
            ->with(compact('professores'));
    }

}
