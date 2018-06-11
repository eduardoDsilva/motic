<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Projeto;

use App\Aluno;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Professor;
use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminProjetoController extends Controller
{

    private $auditoriaController;
    private $professor;
    private $escola;

    public function index()
    {
        $projetos = Projeto::paginate(10);
        $suplentes = Projeto::paginate(10);
        return view('admin/projeto/home', compact('projetos', 'suplentes'));
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
        return view("admin/projeto/cadastro/registro", compact('disciplinas', 'escolas', 'categorias'));
    }

    public function store(Request $request){
        $dataForm = $request->all();
        $escola = Escola::find($dataForm['escola_id']);
        $projeto = Projeto::all()->where('escola_id', '=', $escola->id);
        if(count($projeto)>=$escola->projetos){
            dd('não pode mais cadastrar projetos');
        }
        try{
            $projeto = Projeto::create($dataForm);

            foreach ($request->only(['disciplina_id']) as $disciplina){
                $projeto->disciplina()->attach($disciplina);
            }

            foreach ($request->only(['aluno_id']) as $aluno_id){
                $alunos = Aluno::find($aluno_id);
            }

            foreach ($alunos as $aluno) {
                $aluno->projeto_id = $projeto->id;
                $aluno->save();
            }

            $orientador = Professor::find($dataForm['orientador']);
            $orientador->projeto_id = $projeto->id;
            $orientador->tipo = 'orientador';
            $orientador->save();

            if(isset($dataForm['coorientador'])){
                $coorientador = Professor::find($dataForm['coorientador']);
                $coorientador->projeto_id = $projeto->id;
                $coorientador->tipo = 'coorientador';
                $coorientador->save();
            }

            $projetos = Projeto::all()->where('ano', '=', '2018');
            return view('admin/projeto/home', compact('projetos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function show(){
        try{
            $projetos = Projeto::all()->where('ano', '=', date('y'));
            return view("admin/projeto/busca/buscar", compact('projetos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $projeto = Projeto::find($id);
            $disciplinas = Disciplina::all();
            $titulo = 'Editar projeto: '.$projeto->titulo;
            return view("admin/projeto/edita/editar", compact( 'projeto', 'titulo', 'disciplinas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id){
        $dataForm = $request->all();
        try{
            $projeto = Projeto::find($id);
            $projeto->update($dataForm);
            $projeto->disciplina()->detach();
            foreach ($request->only(['disciplina_id']) as $disciplina){
                $projeto->disciplina()->attach($disciplina);
            }
            $this->auditoriaController->storeUpdate(json_encode($projeto, JSON_UNESCAPED_UNICODE), $projeto->id);

            Session::put('mensagem', "O projeto ".$projeto->titulo." foi editado com sucesso!");

            return redirect()->route("admin/projeto/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $projeto = Projeto::find($id);
            $projeto->delete($id);
            $this->auditoriaController->storeUpdate(json_encode($projeto, JSON_UNESCAPED_UNICODE), $projeto->id);
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function categorias(){
        $escola_id = Input::get('escola_id');
        Session::put('escola_id', $escola_id);
        $escola = $this->escola->find($escola_id);
        $projetos = DB::table('projetos')->select('categoria_id')->where('escola_id', '=', $escola->id)->get();
        $categoria_id = [];
        foreach($projetos as $projeto){
            $categoria_id[] = $projeto->categoria_id;
        }
        $categoria = $escola->categoria->whereNotIn('id', $categoria_id);

        return response()->json($categoria);
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