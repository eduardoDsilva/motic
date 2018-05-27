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
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class AdminAlunoController extends Controller
{

    private $aluno;
    private $auditoriaController;
    use RegistersUsers;

    public function __construct(Aluno $aluno, AuditoriaController $auditoriaController)
    {
        $this->aluno = $aluno;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        $alunos = aluno::all();
        return view('admin/aluno/home', compact('alunos'));
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin/aluno/cadastro/registro', compact('escolas'));
    }

    public function store(AlunoCreateFormRequest $request){
        $dataForm = $request->all();
        try{
            $categoria = $this->categoriaAluno($dataForm['anoLetivo']);
            $dataForm = ['categoria' => $categoria];
            $aluno = Aluno::create($dataForm);

            $this->auditoriaController->storeCreate(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi cadastrado com sucesso!");

            return redirect()->route("admin/aluno/busca/buscar");
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
            return 'Educação Infantil';
        }else if($ano == '1° ANO' || '2° ANO' || '3° ANO'){
            return 'EMEF 1';
        }else if($ano == '4° ANO' || '5° ANO' || '6° ANO'){
            return 'EMEF 2';
        }else if($ano == '7° ANO' || '8° ANO' || '9° ANO'){
            return 'EMEF 3';
        }else if ($ano == 'EJA'){
            return 'EJA';
        }else{
            return 'Sem categoria';
        }
    }

}