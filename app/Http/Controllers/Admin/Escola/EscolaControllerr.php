<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Endereco\EnderecoController;
use App\Http\Controllers\Escola\EscolaController;

class EscolaControllerr extends Controller
{

    private $usuarioController;
    private $escolaController;
    private $enderecoController;
    private $request;

    public function __construct(UsuarioController $usuarioController, EscolaController $escolaController, EnderecoController $enderecoController)
    {
        $this->usuarioController = $usuarioController;
        $this->escolaController = $escolaController;
        $this->enderecoController = $enderecoController;
    }

    public function index(){
        return view('admin/escola/home');
        }

    public function paginaCadastrarEscola(){
        return view('admin/escola/cadastro/registro');
    }

    public function editar($id){
        $escola = $this->escolaController->editar($id);
       // dd($escola->tipoEscola);
        return view('admin/escola/editar/editar', compact('escola'));
    }

    public function buscar()
    {
        $escolas = $this->escolaController->buscar();
        return view("admin/escola/busca/buscar", compact('escolas'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all() + ['tipoUser' => 'escola'] ;

        $usuario = $this->usuarioController->store($this->request);
        $this->request += ['user_id' => $usuario->id];

        $this->escolaController->store($this->request);

        $this->enderecoController->store($this->request);

        return redirect()
            ->route("admin/escola/home")
            ->with("sucess", "Escola cadastrada com sucesso!");

    }

    public function delete($id){
        $this->escolaController->delete($id);
        $escolas = $this->escolaController->buscar();

        return redirect()
            ->route("admin/escola/busca/buscar")
            ->with(compact('escolas'));
    }

    public function update(Request $req, $id)
    {
        $this->request = $req->all() + ['tipoUser' => 'escola'] ;
        $this->escolaController->update($req, $id);
        $escolas = $this->escolaController->buscar();
        return redirect()
            ->route("admin/escola/busca/buscar")
            ->with(compact('escolas'));
    }

}
