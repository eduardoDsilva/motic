<?php

namespace App\Http\Controllers\Admin\Avaliador;

use App\Avaliador;
use App\Dados_Pessoais;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Usuario;
use App\Endereco;
use App\Auditoria;

class AvaliadorController extends Controller
{

    private $auditoriaController;
    private $user;
    private $avaliador;
    private $endereco;
    private $dados_pessoais;
    private $request;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->auditoria = new Auditoria();
        $this->avaliador = new Avaliador();
        $this->user = new User();
        $this->endereco = new Endereco();
        $this->dados_pessoais = new Dados_Pessoais();
    }

    public function index(){
        return view('admin/avaliador/home');
    }

    public function paginaCadastrarAvaliador(){
        return view('admin/avaliador/cadastro/registro');
    }

    public function editar($id){
        $user = User::find($id);
        return view('admin/avaliador/editar/editar', compact('user'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all() + ['tipoUser' => 'avaliador'];

        //dd($this->request);

        //cadastra o usuario do avaliador
        $user = $this->createUser();

        //pega o id do usuario
        $this->request += ['user_id' => $user->id];

        //cadastra os dados do avaliador
        $this->createAvaliador();

        //cadastra o endereço da escola
        $this->createEndereco();

        //se tudo for cadastrado
        return redirect()
            ->route('admin/avaliador/home')
            ->with('success', 'Avaliador cadastrado com sucesso!');

    }

    public function busca()
    {
        $avaliadores = Avaliador::all();
        return view('admin/avaliador/busca/buscar', compact('avaliadores'));
    }

    public function update(Request $req, $id)
    {
        $this->request = $req->all() + ['tipoUser' => 'escola'];
        $user = $this->getUser($id);

        $user->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados do usuário pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        $user->avaliador->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados do avaliador pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        $user->endereco->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados do endereço da escola pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        $user->dados_pessoais->update($this->request);
        $this->salvaAuditoria("create",
            "Feito a edição dos dados pessoais pelo " . auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        //se tudo for cadastrado
        return redirect()
            ->route('admin/avaliador/home')
            ->with('success', 'Avaliador editado com sucesso!');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        $this->salvaAuditoria("create",
            "Exclusão do avaliador realizada pelo ".auth()->user()->username,
            auth()->user()->name,
            $user->id,
            auth()->id());

        $avaliadores = Avaliador::all();
        return view('admin/avaliador/busca/buscar', compact('avaliadores'));
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

    private function createAvaliador()
    {
        $avaliador = Avaliador::create($this->request);
        $dados_pessoais = Dados_Pessoais::create($this->request);
        $this->statusCreate($avaliador, "avaliador");
        $this->statusCreate($dados_pessoais, "dados pessoais");


        $this->salvaAuditoria("create",
            "Avaliador cadastrado pelo ".auth()->user()->username,
            auth()->user()->name,
            $avaliador->id,
            auth()->id());
    }

    private function createEndereco()
    {
        $endereco = Endereco::create($this->request);
        $this->statusCreate($endereco, "endereço");

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
