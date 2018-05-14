<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Disciplinas;

use App\Disciplina;
use App\Http\Controllers\Auditoria\AuditoriaController;
use Illuminate\Http\Request;
use App\Usuario;
use App\Escola;
use App\Auditoria;

class DisciplinasController
{


    private $auditoriaController;
    private $auditoria;
    private $disciplina;
    private $request;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->auditoria = new Auditoria();
        $this->disciplina = new Disciplina();
    }

    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('admin/disciplinas/home', compact('disciplinas'));
    }

    public function editar($id){
        $disciplina = Disciplina::find($id);
        return view('admin/disciplinas/editar/editar', compact('disciplina'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all();

        $disciplina = Disciplina::create($this->request);
        $this->statusCreate($disciplina, "disciplina");
        $this->salvaAuditoria("create",
            "Disciplina cadastrada pelo ".auth()->user()->username,
            auth()->user()->name,
            $disciplina->id,
            auth()->id());

        //se tudo for cadastrado
        return redirect()
            ->route('admin/disciplinas/home')
            ->with('success', 'Disciplina cadastrada com sucesso!');

    }

    public function delete($id){
        $disciplina = Disciplina::find($id);
        $disciplina->delete();

        $this->salvaAuditoria("delete",
            "Exclusão da disciplina realizada pelo ".auth()->user()->username,
            auth()->user()->name,
            $disciplina->id,
            auth()->id());

        $disciplinas = Disciplina::all();
        return view('admin/disciplinas/home', compact('disciplinas'));
    }

    public function update(Request $req, $id)
    {
        $disciplina = $this->getDisciplina($id);

        $disciplina->update($this->request);
        $this->salvaAuditoria("update",
            "Feito a edição dos dados da disciplina pelo " . auth()->user()->username,
            auth()->user()->name,
            $disciplina->id,
            auth()->id());

        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola editada com sucesso!');
    }

    private function getDisciplina($id)
    {
        return $this->disciplina->find($id);
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
