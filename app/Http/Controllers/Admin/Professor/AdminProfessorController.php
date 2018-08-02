<?php

namespace App\Http\Controllers\Admin\Professor;

use App\Dado;
use App\Escola;
use App\Http\Controllers\ProfessorController;
use App\Http\Requests\Professor\ProfessorCreateFormRequest;
use App\Http\Requests\Professor\ProfessorUpdateFormRequest;
use App\Professor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfessorController extends Controller
{

    private $professorController;

    public function __construct(ProfessorController $professorController)
    {
        $this->professorController = $professorController;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        try {
            $professores = Professor::orderBy('name', 'asc')->paginate(10);
            $quantidade = count(Professor::all());
            return view("admin.professor.home", compact('professores', 'quantidade'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $escolas = Escola::all();
            $titulo = 'Cadastrar professor';

            return view('admin.professor.cadastro', compact('escolas', 'titulo'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function store(ProfessorCreateFormRequest $request)
    {
        try {
            $dataForm = $request->all() + ['tipoUser' => 'professor'];
            $this->professorController->store($dataForm);

            return redirect()->route("admin.professor");
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $professor = Professor::findOrFail($id);
            return view("admin.professor.show", compact('professor'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        try {
            $dataForm = $request->all();
            $professores = $this->professorController->filtro($dataForm);
            $quantidade = count(Professor::all());
            return view('admin.professor.home', compact('professores', 'quantidade'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $professor = Professor::findOrFail($id);
            $escolas = Escola::all();
            $titulo = 'Editar professor: ' . $professor->name;

            return view("admin.professor.cadastro", compact('professor', 'titulo', 'escolas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(ProfessorUpdateFormRequest $request, $id)
    {
        try {
            $dataForm = $request->all() + ['tipoUser' => 'professor'];
            $this->professorController->update($dataForm, $id);
            return redirect()->route("admin.professor");
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->professorController->destroy($id);
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

}