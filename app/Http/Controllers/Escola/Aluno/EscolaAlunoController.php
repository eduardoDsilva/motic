<?php

namespace App\Http\Controllers\Escola\Aluno;

use App\Aluno;
use App\Dado;
use App\Escola;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Aluno\AlunoCreateFormRequest;
use App\Http\Requests\Aluno\AlunoUpdateFormRequest;
use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class EscolaAlunoController extends Controller
{

    private $alunoController;

    public function __construct(AlunoController $alunoController)
    {
        $this->alunoController = $alunoController;
        $this->middleware('auth');
        $this->middleware('check.escola');
    }

    public function index()
    {
        try {
            $alunos = Aluno::where('escola_id', '=', Auth::user()->escola->id)->orderBy('name', 'asc')->paginate(10);
            $projetos = Projeto::where('escola_id', '=', Auth::user()->escola->id)->paginate(10);
            return view('escola.aluno.home', compact('alunos', 'projetos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function create()
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        try {
            $escola = Escola::findOrFail(Auth::user()->escola->id);
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
                }
            }
            return view('escola.aluno.cadastro', compact('escola', 'ano'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store(AlunoCreateFormRequest $request)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        try {
            $dataForm = $request->all() + ['escola_id' => Auth::user()->escola->id];
            $this->alunoController->store($dataForm);
            return redirect()->route("escola.aluno");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        $this->authorize('show', $aluno);
        try {
            return view('escola.aluno.show', compact('aluno'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        $this->authorize('edit', $aluno);
        try {
            $aluno = Aluno::findOrFail($id);
            $escola = Escola::findOrFail(Auth::user()->escola->id);
            $categorias = $escola->categoria;
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
                }
            }
            return view('escola.aluno.cadastro', compact('escola', 'ano', 'aluno'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AlunoUpdateFormRequest $request, $id)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        try {
            $dataForm = $request->all() + ['tipoUser' => 'aluno'] + ['escola_id' => Auth::user()->escola->id];
            $alunos = $this->alunoController->update($dataForm, $id);
            return redirect()->route("escola.aluno", compact('alunos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        try {
            $dataForm = $request->all();
            $alunos = $this->alunoController->filtro($dataForm);
            return view('escola.aluno.home', compact('alunos'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $aluno = Aluno::findOrFail($id);
        $this->authorize('view', $inscricao);
        $this->authorize('delete', $aluno);
        try {
            $this->alunoController->destroy($id);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
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
            return "ERRO: " . $e->getMessage();
        }
    }

}