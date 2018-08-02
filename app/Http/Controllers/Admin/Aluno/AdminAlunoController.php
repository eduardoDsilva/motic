<?php

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;
use App\Dado;
use App\Escola;
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
            return view('admin.aluno.home', compact('alunos'));
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
            $categorias = $escola->categoria;
            $ano = [];
            foreach ($categorias as $categoria) {
                if ($categoria->id == 1) {
                    $ano[] = 'Educação Infantil';
                } else if ($categoria->id == 2) {
                    $ano[] = '1° ANO';
                    $ano[] = '2° ANO';
                    $ano[] = '3° ANO';
                } else if ($categoria->id == 3) {
                    $ano[] = '4° ANO';
                    $ano[] = '5° ANO';
                    $ano[] = '6° ANO';
                } else if ($categoria->id == 4) {
                    $ano[] = '7° ANO';
                    $ano[] = '8° ANO';
                    $ano[] = '9° ANO';
                } else if ($categoria->id == 5) {
                    $ano[] = 'EJA';
                } else {
                }
            }
            return response()->json($ano);
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }
}