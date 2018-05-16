<?php

namespace App\Http\Controllers\Admin\Professor\Coorientador;

use App\Coorientador;
use App\Http\Controllers\Aluno\AlunoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DadosPessoais\DadosPessoaisController;
use App\Http\Controllers\Escola\EscolaController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Endereco\EnderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCoorientadorController extends Controller
{

    private $dadosPessoaisController;
    private $usuarioController;
    private $alunoController;
    private $enderecoController;
    private $escolaController;
    private $request;
    private $aluno;

    public function __construct(DadosPessoaisController $dadosPessoaisController, UsuarioController $usuarioController, AlunoController $alunoController, EnderecoController $enderecoController, EscolaController $escolaController)
    {
        $this->dadosPessoaisController = $dadosPessoaisController;
        $this->usuarioController = $usuarioController;
        $this->alunoController = $alunoController;
        $this->enderecoController = $enderecoController;
        $this->escolaController = $escolaController;
        $this->aluno = new Aluno();
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
        $escolas = $this->escolaController->buscar();

        Session::put('escolas',  $escolas);

        return view("admin/aluno/busca/buscar", compact('alunos'));
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

        $teste = $this->aluno->find($id);

        $idUser = $teste->user->id;

        $this->usuarioController->update($req, $idUser);

        $this->dadosPessoaisController->update($req, $idUser);

        $this->enderecoController->update($req, $idUser);

        $this->alunoController->update($req, $id);

        $alunos = $this->alunoController->buscar();
        return redirect()
            ->route("admin/aluno/busca/buscar")
            ->with(compact('alunos'));
    }

}
