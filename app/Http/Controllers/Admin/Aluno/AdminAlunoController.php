<?php

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;
use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Aluno\AlunoCreateFormRequest;
use App\Http\Requests\Admin\Aluno\AlunoUpdateFormRequest;
use App\Projeto;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

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
        $alunos = Aluno::all();
        $projetos = Projeto::all();
        return view('admin/aluno/home', compact('alunos', 'projetos'));
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin/aluno/cadastro/registro', compact('escolas'));
    }

    public function store(AlunoCreateFormRequest $request){
        $dataForm = $request->all();
        try{
            $dataForm += ['categoria_id' => $this->categoriaAluno($dataForm['anoLetivo'])];
            $aluno = Aluno::create($dataForm);

            $this->auditoriaController->storeCreate(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi cadastrado com sucesso!");

            return redirect()->route("admin/aluno/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $alunos = aluno::all();
            return view('admin/aluno/home', compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $aluno = Aluno::find($id);
            $titulo = "Editar aluno: ".$aluno->name;
            $escolas = Escola::all();
            return view("admin/aluno/cadastro/registro", compact('aluno', 'titulo', 'escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AlunoUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'aluno'];
        try{
            $aluno = Aluno::find($id);
            $aluno->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi editado com sucesso!");

            $alunos = $this->aluno->all();
            return redirect()->route("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $aluno = Aluno::find($id);
            $aluno->delete($id);
            $this->auditoriaController->storeDelete(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi deletado com sucesso!");

            $alunos = aluno::all();
            return redirect()->route("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    private function categoriaAluno($ano){
        if($ano == 'Educação Infantil'){
            return '1';
        }else if($ano == '1° ANO') {
            return '2';
        }else if($ano == '2° ANO') {
            return '2';
        }else if($ano == '3° ANO') {
            return '2';
        }else if($ano == '4° ANO') {
            return '3';
        }else if($ano == '5° ANO') {
            return '3';
        }else if($ano == '6° ANO') {
            return '3';
        }else if($ano == '7° ANO') {
            return '4';
        }else if($ano == '8° ANO') {
            return '4';
        }else if($ano == '9° ANO') {
            return '4';
        }else if($ano == 'EJA') {
            return '5';
        }else{
            dd('erro');
        }
    }

}