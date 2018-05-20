<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Escola;
use App\Http\Controllers\Categoria\CategoriaController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Endereco\EnderecoController;
use App\Http\Controllers\Escola\EscolaController;

class AdminEscolaController extends Controller
{

    private $usuarioController;
    private $escolaController;
    private $enderecoController;
    private $categoriaController;
    private $request;
    private $escola;

    public function __construct(UsuarioController $usuarioController, CategoriaController $categoriaController, EscolaController $escolaController, EnderecoController $enderecoController)
    {
        $this->usuarioController = $usuarioController;
        $this->escolaController = $escolaController;
        $this->enderecoController = $enderecoController;
        $this->categoriaController = $categoriaController;
        $this->escola = new Escola();
    }

    public function index(){
        return view('admin/escola/home');
        }

    public function paginaCadastrarEscola(){
        $categorias = $this->categoriaController->buscar();

        return view('admin/escola/cadastro/registro', compact('categorias'));

    }

    public function editar($id){
        $escola = $this->escolaController->editar($id);
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

        $teste = $this->escola->find($id);

        $idUser = $teste->user->id;

        $this->enderecoController->update($req, $idUser);

        $this->usuarioController->update($req, $idUser);

        $escolas = $this->escolaController->buscar();
        return redirect()
            ->route("admin/escola/busca/buscar")
            ->with(compact('escolas'));
    }

}
