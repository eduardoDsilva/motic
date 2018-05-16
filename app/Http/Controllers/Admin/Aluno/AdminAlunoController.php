<?php

namespace App\Http\Controllers\Admin\Aluno;

use App\Http\Controllers\Aluno\AlunoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DadosPessoais\DadosPessoaisController;
use App\Http\Controllers\Escola\EscolaController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Endereco\EnderecoController;

class AdminAlunoController extends Controller
{

    private $dadosPessoaisController;
    private $usuarioController;
    private $alunoController;
    private $enderecoController;
    private $escolaController;
    private $request;

    public function __construct(DadosPessoaisController $dadosPessoaisController, UsuarioController $usuarioController, AlunoController $alunoController, EnderecoController $enderecoController, EscolaController $escolaController)
    {
        $this->dadosPessoaisController = $dadosPessoaisController;
        $this->usuarioController = $usuarioController;
        $this->alunoController = $alunoController;
        $this->enderecoController = $enderecoController;
        $this->escolaController = $escolaController;
    }

    public function index()
    {
        return view('admin/aluno/home');
    }

    public function paginaCadastrarAluno()
    {
        $escolas = $this->escolaController->buscar();
        return view('admin/aluno/cadastro/registro', compact('escolas'));
    }

    public function editar($id){
        $aluno = $this->alunoController->editar($id);

        return view('admin/aluno/editar/editar', compact('aluno'));
    }

    public function buscar()
    {
        $alunos = $this->alunoController->buscar();
        return view("admin/avaliador/busca/buscar", compact('alunos'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all() + ['tipoUser' => 'aluno'] ;

        $usuario = $this->usuarioController->store($this->request);
        $this->request += ['user_id' => $usuario->id];

        $this->alunoController->store($this->request);

        $this->dadosPessoaisController->store($this->request);

        $this->enderecoController->store($this->request);

        return redirect()
            ->route("admin/aluno/home")
            ->with("sucess", "Aluno cadastrado com sucesso!");

    }

    public function delete($id){
        $this->alunoController->delete($id);
        $alunos = $this->alunoController->buscar();

        return redirect()
            ->route("admin/aluno/busca/buscar")
            ->with(compact('alunos'));
    }

    public function update(Request $req, $id)
    {
        $this->request = $req->all() + ['tipoUser' => 'aluno'] ;

        $this->usuarioController->update($req, $id);

        $this->alunoController->update($req, $id);

        $this->dadosPessoaisController->update($req, $id);

        $this->enderecoController->update($req, $id);

        $alunos = $this->alunoController->buscar();
        return redirect()
            ->route("admin/avaliador/busca/buscar")
            ->with(compact('alunos'));
    }

}
