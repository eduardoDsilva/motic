<?php


namespace App\Http\Controllers\Escola\Suplente;

use App\Aluno;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SuplenteController;
use App\Professor;
use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class EscolaSuplenteController extends Controller
{

    private $suplenteController;

    public function __construct(SuplenteController $suplenteController)
    {
        $this->suplenteController = $suplenteController;
        $this->middleware('auth');
        $this->middleware('check.escola');
    }

    public function index()
    {
        try {
            $projetos = Projeto::where('ano', '=', '2018')
                ->where('tipo', '=', 'suplente')
                ->orderBy('titulo', 'asc')
                ->paginate(10);

            return view('escola.suplente.home', compact('projetos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function create()
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        try {
            $disciplinas = Disciplina::all();
            $escola = Escola::find(Auth::user()->escola->id);

            $projetos = DB::table('projetos')
                ->select('categoria_id')
                ->where('escola_id', '=', $escola->id)
                ->where('tipo', '=', 'suplente')
                ->get();
            $categoria_id = [];
            foreach ($projetos as $projeto) {
                $categoria_id[] = $projeto->categoria_id;
            }
            $categorias = $escola->categoria->whereNotIn('id', $categoria_id);
            $professores = Professor::all()->where('escola_id', '=', Auth::user()->escola->id)->where('projeto_id', '=', null)->where('projeto_id', '=', null);

            return view("escola.suplente.cadastro", compact('disciplinas', 'escola', 'categorias', 'professores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        try {
            $dataForm = $request->all() + ['escola_id' => Auth::user()->escola->id] + ['tipo' => 'suplente'];
            $this->suplenteController->store($dataForm);
            return redirect()->route("escola.suplente");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function show($id)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        $projeto = Projeto::find($id);
        $this->authorize('show', $projeto);
        try {
            $alunos = Aluno::all()
                ->where('projeto_id', '=', $projeto->id);
            $professores = Professor::all()
                ->where('projeto_id', '=', $projeto->id);
            return view("escola.suplente.show", compact('projeto', 'alunos', 'professores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        $projeto = Projeto::find($id);
        $this->authorize('edit', $projeto);
        try {
            $disciplinas = Disciplina::all();
            $titulo = 'Editar suplente: ' . $projeto->titulo;
            return view("escola.suplente.editar", compact('projeto', 'titulo', 'disciplinas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        $dataForm = $request->all();
        try {
            $projetos = $this->suplenteController->filtrar($dataForm);
            return view('escola.suplente.home', compact('projetos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        try {
            $dataForm = $request->all();
            $this->suplenteController->update($dataForm, $id);
            return redirect()->route("escola.suplente");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $inscricao = \App\Inscricao::orderBy('id', 'desc')->first();
        $this->authorize('view', $inscricao);
        $projeto = Projeto::find($id);
        $this->authorize('delete', $projeto);
        try {
            $this->projetoController->destroy($id);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function categorias()
    {
        try {
            $escola_id = Input::get('escola_id');
            Session::put('escola_id', $escola_id);
            $escola = $this->escola->find($escola_id);
            $projetos = DB::table('projetos')->select('categoria_id')->where('escola_id', '=', $escola->id)->get();
            $categoria_id = [];
            foreach ($projetos as $projeto) {
                $categoria_id[] = $projeto->categoria_id;
            }
            $categoria = $escola->categoria->whereNotIn('id', $categoria_id);

            return response()->json($categoria);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function alunos()
    {
        try {
            $categoria_id = Input::get('categoria_id');
            $alunos = Aluno::where('escola_id', '=', Session::get('escola_id'))
                ->where('categoria_id', '=', $categoria_id)
                ->where('projeto_id', '=', null)
                ->get();
            return response()->json($alunos);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function professores()
    {
        try {
            $escola_id = Input::get('escola_id');
            $professores = Professor::where('escola_id', '=', $escola_id)
                ->where('projeto_id', '=', null)
                ->get();
            return response()->json($professores);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}