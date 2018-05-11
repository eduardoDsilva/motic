<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Usuario;
use App\Escola;
use App\Endereco;
use App\Auditoria;

class EscolaController extends Controller
{

    private $adminNomeController;
    private $adminUserController;
    private $adminEnderecoEscolaController;
    private $auditoriaController;
    private $auditoria;
    private $user;
    private $escola;
    private $endereco;
    private $request;

    public function __construct(AuditoriaController $auditoriaController, AdminUserController $adminUserController, AdminNomeController $adminNomeController, AdminEnderecoEscolaController $adminEnderecoEscolaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->adminUserController = $adminUserController;
        $this->adminNomeController = $adminNomeController;
        $this->adminEnderecoEscolaController = $adminEnderecoEscolaController;
        $this->auditoria = new Auditoria();
        $this->user = new User();
        $this->escola = new Escola();
        $this->endereco = new Endereco();
    }

    public function index(){
        return view('admin/escola/home');
    }

    public function paginaCadastrarEscola(){
        return view('admin/escola/cadastro/registro');
    }


    public function store(Request $req)
    {
        $this->request = $req->all() + ['tipoUser' => 'escola'];

        //cadastra o usuario da escola
        $this->salvaUsuario($this->request);

        //cadastra a escola em si
        $this->salvaEscola($this->request);

        //cadastra o endereço da escola
        $this->salvaEndereco($this->request);

        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola cadastrada com sucesso!');

    }

    private function salvaUsuario($request){
        $idUser = $this->adminUserController->store($request);
        if(empty($idUser)) {
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir o usuário');
        }
        $this->request += ['user_id' => $idUser];
        $descricao = 'Criado o usuário da escola pelo usuário = '.auth()->user()->username;
        $tipo = 'create';
        $user = auth()->id();
        $id_action = $idUser;
        $this->salvaAuditoria($descricao, $tipo, $user, $id_action);
    }

    private function salvaEscola($request){
        $idEscola = $this->adminNomeController->store($request);
        if (empty($idEscola)){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }
        $descricao = 'Adicionada a escola pelo usuário = '.auth()->user()->username;
        $tipo = 'create';
        $user = auth()->id();
        $id_action = $idEscola;
        $this->salvaAuditoria($descricao, $tipo, $user, $id_action);
    }

    private function salvaEndereco($request){
        $idEndereco = $this->adminEnderecoEscolaController->store($request);
        if (empty($idEndereco)){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }
        $descricao = 'Adicionado o endereço da escola pelo usuário = '.auth()->user()->username;
        $tipo = 'create';
        $user = auth()->id();
        $id_action = $idEndereco;
        $this->salvaAuditoria($descricao, $tipo, $user, $id_action);
    }

    private function salvaAuditoria($descricao, $tipo, $user, $id_action){
        $auditoria = new Auditoria();
        $auditoria->descricao = $descricao;
        $auditoria->tipo = $tipo;
        $auditoria->user = $user;
        $auditoria->id_action = $id_action;
        $this->auditoriaController->store($auditoria);
    }

    public function busca()
    {
        $escolas = Escola::all();
        return view('admin/escola/busca/buscar', compact('escolas'));
    }

}
