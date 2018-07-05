<?php

namespace App\Http\Controllers\Escola\Professor;

use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Requests\Professor\ProfessorCreateFormRequest;
use App\Http\Requests\Professor\ProfessorUpdateFormRequest;
use App\Professor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EscolaProfessorController extends Controller
{

    private $professorController;

    public function __construct(ProfessorController $professorController)
    {
        $this->professorController = $professorController;
        $this->middleware('auth');
        $this->middleware('check.escola');
    }

    public function index()
    {
        try{
            $professores = Professor::where('escola_id', '=', Auth::user()->escola->id)->orderBy('name', 'asc')->paginate(10);
            return view("escola/professor/home", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function create(){
        try{
            $escola = Escola::find(Auth::user()->escola->id);

            return view('escola/professor/cadastro', compact('escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store(ProfessorCreateFormRequest $request){
        $dataForm = $request->all()+ ['tipoUser' => 'professor'] + ['escola_id' => Auth::user()->escola->id];
        try{
            $this->professorController->store($dataForm);

            return redirect()->route("escola.professor");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id){
        try{
            $professor = Professor::find($id);
            return view("escola/professor/show", compact('professor'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $professor = Professor::find($id);
            $escola = Escola::find(Auth::user()->escola->id);
            $titulo = 'Editar professor: '.$professor->name;

            return view("escola/professor/cadastro", compact('professor', 'titulo', 'escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request){
        try {
            $dataForm = $request->all();
            $professores = $this->professorController->filtro($dataForm);
            return view('escola/professor/home', compact('professores'));
        }catch(\Exception $e){
            return "Erro ". $e->getMessage();
        }
    }

    public function update(ProfessorUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'professor'] + ['escola_id' => Auth::user()->escola->id];
        try{
            $this->professorController->update($dataForm);

            return redirect()->route("escola.professor");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $this->professorController->destroy($id);
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}