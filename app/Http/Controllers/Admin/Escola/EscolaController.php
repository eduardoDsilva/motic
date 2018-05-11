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

    public function editar($id){
        $user = User::find($id);
        return view('admin/escola/editar/editar', compact('user'));
    }

    public function busca()
    {
        $escolas = Escola::all();
        return view('admin/escola/busca/buscar', compact('escolas'));
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
        $this->salvaAuditoria("Criado o usuário pelo ".auth()->user()->username, 'create', auth()->id(), $idUser);

    }

    private function salvaEscola($request){
        $idEscola = $this->adminNomeController->store($request);
        if (empty($idEscola)){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }
        $this->salvaAuditoria("Escola cadastrada pelo ".auth()->user()->username, 'create', auth()->id(), $idEscola);
    }

    private function salvaEndereco($request){
        $idEndereco = $this->adminEnderecoEscolaController->store($request);
        if (empty($idEndereco)){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }
        $this->salvaAuditoria("Endereço cadastrado pelo ".auth()->user()->username, 'create', auth()->id(), $idEndereco);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        $this->salvaAuditoria("Exclusão do usuário realizada pelo ".auth()->user()->username, 'delete', auth()->id(), $user->id);

        $escolas = Escola::all();
        return view('admin/escola/busca/buscar', compact('escolas'));
    }

    public function update(Request $req, $id){
        $this->request = $req->all() + ['tipoUser' => 'escola'];
        $user = $this->getUser($id);

        $user->update($this->request);
        $this->salvaAuditoria("Feito a edição dos dados do usuário pelo ".auth()->user()->username, 'update', auth()->id(), $user->id);
        $user->escola->update($this->request);
        $this->salvaAuditoria("Feito a edição dos dados da escola pelo ".auth()->user()->username, 'update', auth()->id(), $user->escola->id);
        $user->endereco->update($this->request);
        $this->salvaAuditoria("Feito a edição dos dados do endereço da escola pelo ".auth()->user()->username, 'update', auth()->id(), $user->endereco->id);

        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola editada com sucesso!');
    }

    protected function getUser($id)
    {
        return $this->user->find($id);
    }

    private function salvaAuditoria($descricao, $tipo, $user, $id_action){
        $auditoria = new Auditoria();
        $auditoria->descricao = $descricao;
        $auditoria->tipo = $tipo;
        $auditoria->user = $user;
        $auditoria->id_action = $id_action;
        $this->auditoriaController->store($auditoria);
    }



}
