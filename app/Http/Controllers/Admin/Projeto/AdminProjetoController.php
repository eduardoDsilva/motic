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

    public function index()
    {
        return view('admin/projeto/home');
    }

    public function __construct(AuditoriaController $auditoriaController, Professor $professor)
    {
        $this->auditoriaController = $auditoriaController;
        $this->professor = $professor;
    }

    public function create(){
        $disciplinas = Disciplina::all();
        $escolas = Escola::all();
        $categorias = Categoria::all();

        return view("admin/projeto/cadastro/registro", compact('disciplinas', 'escolas', 'categorias'));
    }

    public function store(Request $request){
        $dataForm = $request->all();
        try{
            $projeto = Projeto::create($dataForm);
            foreach ($request->only(['disciplina_id']) as $disciplina){
                $projeto->disciplina()->attach($disciplina);
            }
            $this->auditoriaController->storeCreate($projeto, $projeto->id);

            $professores = $this->professor->all()
                ->where('escola_id', '=', $projeto->escola_id)
                ->where('projeto_id', '=', null);

            $alunos = Aluno::all()
                ->where('escola_id', '=', $projeto->escola_id)
                ->where('projeto_id', '=', '');

            Session::put('projeto_id', $projeto->id);

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

    public function alunos(){
        $escola_id = Input::get('escola_id');
        $alunos = Aluno::where('escola_id', '=', $escola_id)->get();
        return response()->json($alunos);
    }

}