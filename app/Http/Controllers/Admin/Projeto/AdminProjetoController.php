<?php

namespace App\Http\Controllers\Admin\Projeto;

use App\Aluno;
use App\Avaliador;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjetoController;
use App\Http\Requests\Projeto\ProjetoUpdateFormRequest;
use App\Professor;
use App\Projeto;
use App\Suplente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminProjetoController extends Controller
{

    private $projetoController;
    private $escola;
    private $professor;

    public function __construct(ProjetoController $projetoController, Professor $professor, Escola $escola)
    {
        $this->projetoController = $projetoController;
        $this->professor = $professor;
        $this->escola = $escola;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        try {
            $projetos = Projeto::where('ano', '=', '2018')
                ->where('tipo', '=', 'normal')
                ->orderBy('titulo', 'asc')
                ->paginate(10);
            $quantidade = count(Projeto::all()->where('tipo', '=', 'normal'));
            return view('admin.projeto.home', compact('projetos', 'quantidade'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $disciplinas = Disciplina::all();
            $escolas = Escola::all();
            return view("admin.projeto.cadastro", compact('disciplinas', 'escolas', 'categorias'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();
        try {
            $this->projetoController->store($dataForm);
            return redirect()->route("admin.projeto");
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
            $professores = Professor::all()->where('projeto_id', '=', $projeto->id);
            return view("admin.projeto.show", compact('projeto', 'alunos', 'professores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        $dataForm = $request->all();
        try {
            $projetos = $this->projetoController->filtrar($dataForm);
            $quantidade = count(Projeto::all()->where('tipo', '=', 'normal'));
            return view('admin.projeto.home', compact('projetos', 'quantidade'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $disciplinas = Disciplina::all();
            $titulo = 'Editar projeto: ' . $projeto->titulo;
            return view("admin.projeto.editar", compact('projeto', 'titulo', 'disciplinas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        try {
            $this->projetoController->update($dataForm, $id);
            return redirect()->route("admin.projeto");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->projetoController->destroy($id);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function rebaixaSuplente($id)
    {
        try {
            $projeto = Projeto::findOrFail($id);
            $projeto->update(['tipo' => 'suplente']);
            Session::put('mensagem', 'O projeto '.$projeto->titulo.' foi rebaixado para suplente com sucesso!');
            return redirect()->route("admin.projeto");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function vincularAvaliador($id){
        $avaliadores = Avaliador::orderBy('name','asc')->where('projetos', '<', '3')->get();
        $projeto = Projeto::findOrFail($id);
        return view('admin.projeto.vincular-avaliador', compact('avaliadores', 'projeto'));
    }

    public function vincula(Request $request){
        $dataForm = $request->all();
        foreach($dataForm['avaliadores'] as $id){
            $avaliador = Avaliador::findOrFail($id);
            $avaliador->projeto()->attach(Session::get('id'));
            $tamanho = $avaliador->projetos;
            $avaliador->projetos = $tamanho + 1;
            $avaliador->save();
        }
        $tamanho = count($dataForm['avaliadores']);
        $projeto = Projeto::findOrFail(Session::get('id'));
        $projeto->avaliadores = $tamanho;
        $projeto->save();
        return redirect()->route("admin.projeto");
    }

    public function categorias()
    {
        try {
            $escola_id = Input::get('escola_id');
            Session::put('escola_id', $escola_id);
            $escola = $this->escola->findOrFail($escola_id);
            $projetos = DB::table('projetos')->select('categoria_id')->where('escola_id', '=', $escola->id)->where('tipo', '=', 'normal')->get();
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