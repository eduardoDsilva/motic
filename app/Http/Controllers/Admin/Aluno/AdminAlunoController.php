<?php

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;
use App\Dado;
use App\Escola;
use App\Etapa;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Aluno\AlunoCreateFormRequest;
use App\Http\Requests\Aluno\AlunoUpdateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminAlunoController extends Controller
{

    private $alunoController;

    public function __construct(AlunoController $alunoController)
    {
        $this->alunoController = $alunoController;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        try {
            $alunos = Aluno::orderBy('name', 'asc')->paginate(10);
            $quantidade = count(Aluno::all());
            return view('admin.aluno.home', compact('alunos', 'quantidade'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $escolas = Escola::all();
            return view('admin.aluno.cadastro', compact('escolas'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function store(AlunoCreateFormRequest $request)
    {
        try {
            $dataForm = $request->all();
            $this->alunoController->store($dataForm);
            return redirect()->route("admin.aluno");
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $aluno = Aluno::findOrFail($id);
            return view('admin.aluno.show', compact('aluno'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        try {
            $dataForm = $request->all();
            $alunos = $this->alunoController->filtro($dataForm);
            $quantidade = count(Aluno::all());
            return view('admin.aluno.home', compact('alunos', 'quantidade'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $aluno = Aluno::findOrFail($id);
            $titulo = "Editar aluno: " . $aluno->name;
            $escolas = Escola::all();
            return view("admin.aluno.cadastro", compact('aluno', 'titulo', 'escolas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AlunoUpdateFormRequest $request, $id)
    {
        try {
            $dataForm = $request->all() + ['tipoUser' => 'aluno'];
            $alunos = $this->alunoController->update($dataForm, $id);
            return redirect()->route("admin.aluno", compact('alunos'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->alunoController->destroy($id);
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function escolaCategoria()
    {
        try {
            $escola_id = Input::get('escola_id');
            $escola = Escola::findOrFail($escola_id);
            $ano = [];
            foreach($escola->categoria as $categoria){
                foreach($categoria->etapa as $etapa){
                    $ano[] = $etapa->etapa;
                }
            }
            return response()->json($ano);
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }
}