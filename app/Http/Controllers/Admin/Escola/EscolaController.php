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
        $this->salvaAuditoria("create",
            "Criado o usuário pelo ".auth()->user()->username,
            auth()->name(),
            $idUser,
            auth()->id());
    }

    private function salvaEscola($request){
        $idEscola = $this->adminNomeController->store($request);
        if (empty($idEscola)){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }
        $this->salvaAuditoria("create",
            "Escola cadastrada pelo ".auth()->user()->username,
            auth()->name(),
            $idEscola,
            auth()->id());

    }

    private function salvaEndereco($request){
        $idEndereco = $this->adminEnderecoEscolaController->store($request);
        if (empty($idEndereco)){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }
        $this->salvaAuditoria("create",
            "Endereço cadastrado pelo ".auth()->user()->username,
            auth()->name(),
            $idEndereco,
            auth()->id());
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        $this->salvaAuditoria("create",
            "Exclusão do usuário realizada pelo ".auth()->user()->username,
            auth()->name(),
            $user->id,
            auth()->id());

        $escolas = Escola::all();
        return view('admin/escola/busca/buscar', compact('escolas'));
    }

    public function update(Request $req, $id)
    {
        $this->request = $req->all() + ['tipoUser' => 'escola'];
        $user = $this->getUser($id);

        $user->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados do usuário pelo " . auth()->user()->username,
            auth()->name(),
            $user->id,
            auth()->id());
        $user->escola->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados da escola pelo " . auth()->user()->username,
            auth()->name(),
            $user->id,
            auth()->id());
        $user->endereco->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados do endereço da escola pelo " . auth()->user()->username,
            auth()->name(),
            $user->id,
            auth()->id());

        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola editada com sucesso!');
    }

    protected function getUser($id)
    {
        return $this->user->find($id);
    }

    private function salvaAuditoria($tipo, $descricao, $nome_usuario, $id_acao, $user_id){
        $auditoria = new Auditoria();
        $auditoria->tipo = $tipo;
        $auditoria->descricao = $descricao;
        $auditoria->nome_usuario= $nome_usuario;
        $auditoria->id_acao = $id_acao;
        $auditoria->user_id = $user_id;
        $this->auditoriaController->store($auditoria);
    }



}
