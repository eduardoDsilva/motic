<?php

namespace App\Http\Controllers\Admin\Avaliador;

use App\Avaliador;
use App\Http\Controllers\Avaliador\AvaliadorController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dado\DadoController;
use Illuminate\Http\Request;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Endereco\EnderecoController;

class AdminAvaliadorController extends Controller
{

    private $dadoController;
    private $usuarioController;
    private $avaliadorController;
    private $enderecoController;
    private $avaliador;
    private $request;

    public function __construct(DadoController $dadoController, UsuarioController $usuarioController, AvaliadorController $avaliadorController, EnderecoController $enderecoController)
    {
        $this->dadoController = $dadoController;
        $this->usuarioController = $usuarioController;
        $this->avaliadorController = $avaliadorController;
        $this->enderecoController = $enderecoController;
        $this->avaliador = new Avaliador();
    }

    public function index(){
        return view('admin/avaliador/home');
        }

    public function paginaCadastrarAvaliador(){
        return view('admin/avaliador/cadastro/registro');
    }

    public function editar($id){
        $avaliador = $this->avaliadorController->editar($id);

        return view('admin/avaliador/editar/editar', compact('avaliador'));
    }

    public function buscar()
    {
        $avaliadores = $this->avaliadorController->buscar();

        return view("admin/avaliador/busca/buscar", compact('avaliadores'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all() + ['tipoUser' => 'avaliador'] ;

        $usuario = $this->usuarioController->store($this->request);
        $this->request += ['user_id' => $usuario->id];

        $this->avaliadorController->store($this->request);

        $this->dadoController->store($this->request);

        $this->enderecoController->store($this->request);

        return redirect()
            ->route("admin/avaliador/home")
            ->with("sucess", "Avaliador cadastrada com sucesso!");

    }

    public function delete($id){
        $this->avaliadorController->delete($id);
        $avaliadores = $this->avaliadorController->buscar();

        return redirect()
            ->route("admin/avaliador/busca/buscar")
            ->with(compact('avaliadores'));
    }

    public function update(Request $req, $id)
    {
        $this->request = $req->all() + ['tipoUser' => 'avaliador'] ;

        $teste = $this->avaliador->find($id);

        $idUser = $teste->user->id;

        $this->usuarioController->update($req, $idUser);

        $this->dadoController->update($req, $idUser);

        $this->enderecoController->update($req, $idUser);

        $avaliadores = $this->avaliadorController->buscar();
        return redirect()
            ->route("admin/avaliador/busca/buscar")
            ->with(compact('avaliadores'));
    }

}
