<?php

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAlunoController extends Controller
{

    private $aluno;
    private $auditoriaController;

    public function __construct(Aluno $aluno, AuditoriaController $auditoriaController)
    {
        $this->aluno = $aluno;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        return view('admin/aluno/home');
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin/aluno/cadastro/registro', compact('escolas'));
    }

    public function store(Request $request){
        $dataForm = $request->all();
        try{
            $user = User::create($dataForm + ['tipoUser' => 'aluno']);
            $this->auditoriaController->storeCreate($user, $user->id);

            $aluno = aluno::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($aluno, $aluno->id);

            $dado = Dado::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($dado, $dado->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($endereco, $endereco->id);

            return redirect()
                ->route("admin/aluno/home")
                ->with("success", "aluno ".$aluno->name." adicionado com sucesso");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $alunos = aluno::all();
            return view("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $aluno = aluno::find($id);
            return view("admin/aluno/editar/editar", compact('aluno'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id){
        $dataForm = $request->all();
        try{
            $user = User::find($id);
            $user->update($dataForm + ['tipoUser' => 'aluno']);
            $this->auditoriaController->storeUpdate($user, $user->id);

            $aluno = $user->aluno;
            $aluno->update($dataForm);
            $this->auditoriaController->storeUpdate($aluno, $aluno->id);

            $dado = $user->dado;
            $dado->update($dataForm);
            $this->auditoriaController->storeUpdate($dado, $dado->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate($endereco, $endereco->id);

            $alunos = $this->aluno->all();
            return redirect()->route("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $aluno = User::find($id);
            $aluno->delete($id);
            $this->auditoriaController->storeUpdate($aluno, $aluno->id);

            $alunos = aluno::all();
            return redirect()->route("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}