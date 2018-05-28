<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Projeto;

use App\Aluno;
use App\Categoria;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Professor;
use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminProjetoController extends Controller
{

    private $request;
    private $auditoriaController;
    private $professor;
    private $escola;

    public function index()
    {
        return view('admin/projeto/home');
    }

    public function __construct(AuditoriaController $auditoriaController, Professor $professor, Escola $escola)
    {
        $this->auditoriaController = $auditoriaController;
        $this->escola = $escola;
        $this->professor = $professor;
    }

    public function create(){
        $disciplinas = Disciplina::all();
        $escolas = Escola::all();
        $categorias = Categoria::all();

        return view("admin/projeto/cadastro/registro", compact('disciplinas', 'escolas', 'categorias'));
    }

    public function store(Request $request){
        $dataForm = $request->all() + ['status' => 'aprovado'];
        dd($dataForm);
        try{
            $projeto = Projeto::create($dataForm);

            foreach ($request->only(['disciplina_id']) as $disciplina){
                $projeto->disciplina()->attach($disciplina);
            }
            foreach ($request->only(['aluno_id']) as $aluno_id){
                $alunos = Aluno::find($aluno_id);
            }
            foreach ($alunos as $a){
                $a->projeto_id = $projeto->id;
                $a->save();
            }



            $this->auditoriaController->storeCreate($projeto, $projeto->id);
            dd('cadastrado');
            return view("admin/projeto/cadastro/equipe", compact('projeto', 'professores', 'alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function show(){
        try{
            $escolas = Escola::all();
            return view("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $escola = Escola::find($id);
            $categorias = Categoria::all();
            $titulo = 'Editar avalaidor: '.$escola->name;
            foreach ($escola->categoria as $id){
                $categoria_escola[] = $id->pivot->categoria_id;
            }

            return view("admin/escola/cadastro/registro", compact('escola', 'categorias', 'titulo', 'categoria_escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'escola'];
        try{
            return redirect()->route("admin/escola/busca/buscar");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            dd($id);
            $escola = User::find($id);
            $escola->delete($id);
            $this->auditoriaController->storeDelete($escola, $escola->id);

            $escolas = Escola::all();
            Session::put('mensagem', "A escola ".$escola->name." foi deletada com sucesso!");

            return redirect()->route("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function categorias(){
        $escola_id = Input::get('escola_id');
        Session::put('escola_id', $escola_id);
        $escola = $this->escola->find($escola_id);
        $categorias = $escola->categoria;
        return response()->json($categorias);
    }

    public function alunos(){
        $categoria_id = Input::get('categoria_id');
        $alunos = Aluno::where('escola_id', '=', Session::get('escola_id'))->where('categoria_id', '=', $categoria_id)->where('projeto_id', '=', null)->get();
        return response()->json($alunos);
    }

    public function professores(){
        $escola_id = Input::get('escola_id');
        $professores = Professor::where('escola_id', '=', $escola_id)->where('projeto_id', '=', null)->get();
        return response()->json($professores);
    }

}