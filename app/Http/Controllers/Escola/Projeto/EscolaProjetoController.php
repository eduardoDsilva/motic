<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Escola\Projeto;

use App\Aluno;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjetoController;
use App\Http\Requests\Projeto\ProjetoUpdateFormRequest;
use App\Professor;
use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class EscolaProjetoController extends Controller
{

    private $projetoController;

    public function __construct(ProjetoController $projetoController)
    {
        $this->projetoController = $projetoController;
        $this->middleware('auth');
        $this->middleware('check.escola');
    }

    public function index(){
        try{
            $projetos = Projeto::where('ano', '=', '2018')
                ->where('tipo','=', 'normal')
                ->orderBy('titulo', 'asc')
                ->paginate(10);

            return view('escola/projeto/home', compact('projetos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function create(){
        try{
            $disciplinas = Disciplina::all();
            $escola = Escola::find(Auth::user()->escola->id);

            $projetos = DB::table('projetos')->select('categoria_id')->where('escola_id', '=', $escola->id)->get();
            $categoria_id = [];
            foreach($projetos as $projeto){
                $categoria_id[] = $projeto->categoria_id;
            }
            $categorias = $escola->categoria->whereNotIn('id', $categoria_id);
            $professores = Professor::all()->where('escola_id', '=', Auth::user()->escola->id)->where('projeto_id', '=', null)->where('suplente_id', '=', null);

            return view("escola/projeto/cadastro", compact('disciplinas', 'escola', 'categorias', 'professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store(Request $request){
        $dataForm = $request->all() + ['escola_id' => Auth::user()->escola->id];
        try{
            $this->projetoController->store($dataForm);
            return redirect()->route("escola.projeto");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function show($id){
        try{
            $projeto = Projeto::find($id);
            $alunos = Aluno::all()
                ->where('projeto_id', '=', $projeto->id);
            $professores = Professor::all()
                ->where('projeto_id', '=', $projeto->id);
            return view("escola/projeto/show", compact('projeto', 'alunos', 'professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $projeto = Projeto::find($id);
            $disciplinas = Disciplina::all();
            $titulo = 'Editar projeto: '.$projeto->titulo;
            return view("escola/projeto/editar", compact( 'projeto', 'titulo', 'disciplinas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id){
        $dataForm = $request->all();
        try{
            $this->projetoController->store($dataForm, $id);
            return redirect()->route("escola.projeto");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request){
        $dataForm = $request->all();
        try{
            $projetos = $this->projetoController->filtrar($dataForm);
            return view('escola/projeto/home', compact('projetos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $this->projetoController->destroy($id);
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function rebaixaSuplente($id){
        try{
            $projeto = Projeto::find($id);
            $projeto->update(['tipo' => 'suplente']);
            return redirect()->route("escola.projeto");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function alunos(){
        try{
            $categoria_id = Input::get('categoria_id');
            $alunos = Aluno::where('escola_id', '=', Auth::user()->escola->id)
                ->where('categoria_id', '=', $categoria_id)
                ->where('projeto_id', '=', null)
                ->get();
            return response()->json($alunos);
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}