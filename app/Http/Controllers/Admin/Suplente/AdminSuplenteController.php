<?php

namespace App\Http\Controllers\Admin\Suplente;

use App\Aluno;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SuplenteController;
use App\Http\Requests\Projeto\ProjetoUpdateFormRequest;
use App\Professor;
use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminSuplenteController extends Controller
{

    private $suplenteController;
    private $escola;
    private $professor;

    public function __construct(SuplenteController $suplenteController, Professor $professor, Escola $escola)
    {
        $this->suplenteController = $suplenteController;
        $this->professor = $professor;
        $this->escola = $escola;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        try {
            $projetos = Projeto::where('ano', '=', '2018')
                ->where('tipo', '=', 'suplente')
                ->orderBy('titulo', 'asc')
                ->paginate(10);
            return view('admin.suplente.home', compact('projetos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $disciplinas = Disciplina::all();
            $escolas = Escola::all();
            return view("admin.suplente.cadastro", compact('disciplinas', 'escolas', 'categorias'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $dataForm = $request->all() + ['tipo' => 'suplente'];
            $this->suplenteController->store($dataForm);
            return redirect()->route("admin.suplente");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function filtrar(Request $request)
    {
        $dataForm = $request->all();
        try {
            $projetos = $this->suplenteController->filtrar($dataForm);
            return view('admin.suplente.home', compact('projetos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


    public function show($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $alunos = Aluno::all()
                ->where('projeto_id', '=', $projeto->id);
            $professores = Professor::all()
                ->where('projeto_id', '=', $projeto->id);
            return view("admin.suplente.show", compact('projeto', 'alunos', 'professores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $disciplinas = Disciplina::all();
            $titulo = 'Editar suplente: ' . $projeto->titulo;
            return view("admin.suplente.editar", compact('projeto', 'titulo', 'disciplinas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        try {
            $this->suplenteController->update($dataForm, $id);
            return redirect()->route("admin.suplente");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->suplenteController->destroy($id);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function promoveSuplente($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $projeto->update(['tipo' => 'normal']);
            Session::put('mensagem', 'O projeto '.$projeto->titulo.' foi promovido para titular com sucesso!');
            return redirect()->route("admin.suplente");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function categorias()
    {
        try {
            $escola_id = Input::get('escola_id');
            Session::put('escola_id', $escola_id);
            $escola = $this->escola->findOrFail($escola_id);
            $projetos = DB::table('projetos')
                ->select('categoria_id')
                ->where('escola_id', '=', $escola->id)
                ->where('tipo', '=', 'suplente')
                ->get();
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