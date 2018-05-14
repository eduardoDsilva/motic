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

    private $auditoriaController;
    private $auditoria;
    private $user;
    private $escola;
    private $endereco;
    private $request;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
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
        $user = $this->createUser();

        //pega o id do usuario
        $this->request += ['user_id' => $user->id];

        //cadastra a escola em si
        $escola = $this->createEscola();

        //cadastra o endereço da escola
        $this->createEndereco();

        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola cadastrada com sucesso!');

    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        $this->salvaAuditoria("delete",
            "Exclusão do usuário realizada pelo ".auth()->user()->username,
            auth()->user()->name,
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
        $this->salvaAuditoria("update",
            "Feito a edição dos dados do usuário pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        $user->escola->update($this->request);
        $this->salvaAuditoria("update",
            "Feito a edição dos dados da escola pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        $user->endereco->update($this->request);
        $this->salvaAuditoria("update",
            "Feito a edição dos dados do endereço da escola pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola editada com sucesso!');
    }

    private function getUser($id)
    {
        return $this->user->find($id);
    }

    private function createUser()
    {
        $user = User::create($this->request);
        $this->statusCreate($user, "usuário");

        $this->salvaAuditoria("create",
            "Criado o usuário pelo ".auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        return $user;
    }

    private function createEscola()
    {
        $escola = Escola::create($this->request);
        $this->statusCreate($escola, "escola");

        $this->salvaAuditoria("create",
            "Escola cadastrada pelo ".auth()->user()->username,
            auth()->user()->name,
            $escola->id,
            auth()->id());

        return $escola;
    }

    private function createEndereco()
    {
        $endereco = Endereco::create($this->request);
        $this->statusCreate($endereco, "endereco");

        $this->salvaAuditoria("create",
            "Endereço cadastrado pelo ".auth()->user()->username,
            auth()->user()->name,
            $endereco->id,
            auth()->id());
    }

    private function statusCreate($dado, $acao){
        if(empty($dado)) {
            return redirect()
                ->back()
                ->with('error', 'Falha ao criar o '.$acao);
        }
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
