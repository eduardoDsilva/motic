<?php

namespace App\Http\Controllers\Escola\Aluno;

use App\Aluno;
use App\Dado;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Projeto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class EscolaAlunoController extends Controller
{

    private $aluno;
    private $auditoriaController;

    public function __construct(Aluno $aluno, AuditoriaController $auditoriaController)
    {
        $this->aluno = $aluno;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        $alunos = Aluno::where('escola_id', '=', Auth::user()->escola->id)->paginate(10);
        $projetos = Projeto::where('escola_id', '=', Auth::user()->escola->id)->paginate(10);
        return view('escola/aluno/home', compact('alunos', 'projetos'));
    }

    public function create(){
        $escola = Escola::find(Auth::user()->escola->id);
        $categorias = $escola->categoria;
        foreach ($categorias as $categoria){
            if($categoria->id == 1){
                $ano[] = 'Educação Infantil';
            }else if($categoria->id == 2){
                $ano[] = '1° ANO';
                $ano[] = '2° ANO';
                $ano[] = '3° ANO';
            }else if($categoria->id == 3){
                $ano[] = '4° ANO';
                $ano[] = '5° ANO';
                $ano[] = '6° ANO';
            }else if($categoria->id == 4){
                $ano[] = '7° ANO';
                $ano[] = '8° ANO';
                $ano[] = '9° ANO';
            }else if($categoria->id == 5){
                $ano[] = 'EJA';
            }
        }
        return view('escola/aluno/cadastro/', compact('escola', 'ano'));
    }

    public function store(AlunoFormRequest $request){
        $dataForm = $request->all() + ['escola_id' => Auth::user()->escola->id];
        try{
            $dataForm += ['categoria_id' => $this->categoriaAluno($dataForm['etapa'])];
            $aluno = Aluno::create($dataForm);

            $this->auditoriaController->storeCreate(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi cadastrado com sucesso!");

            return redirect()->route("escola/aluno/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id){
        try{
            $aluno = Aluno::find($id);
            return view('escola/aluno/show', compact('aluno'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $aluno = Aluno::find($id);
            $escola = Escola::find(Auth::user()->escola->id);
            $categorias = $escola->categoria;
            foreach ($categorias as $categoria){
                if($categoria->id == 1){
                    $ano[] = 'Educação Infantil';
                }else if($categoria->id == 2){
                    $ano[] = '1° ANO';
                    $ano[] = '2° ANO';
                    $ano[] = '3° ANO';
                }else if($categoria->id == 3){
                    $ano[] = '4° ANO';
                    $ano[] = '5° ANO';
                    $ano[] = '6° ANO';
                }else if($categoria->id == 4){
                    $ano[] = '7° ANO';
                    $ano[] = '8° ANO';
                    $ano[] = '9° ANO';
                }else if($categoria->id == 5){
                    $ano[] = 'EJA';
                }
            }
            return view('escola/aluno/cadastro/', compact('escola', 'ano', 'aluno'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AlunoFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'aluno'] + ['escola_id' => Auth::user()->escola->id];
        try{
            $dataForm += ['categoria_id' => $this->categoriaAluno($dataForm['etapa'])];

            $aluno = Aluno::find($id);
            $aluno->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi editado com sucesso!");

            $alunos = $this->aluno->all();
            return redirect()->route("escola/aluno/home", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $aluno = Aluno::find($id);
            $aluno->delete($id);
            $this->auditoriaController->storeDelete(json_encode($aluno, JSON_UNESCAPED_UNICODE), $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->name." foi deletado com sucesso!");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    private function categoriaAluno($ano){
        if($ano == 'Educação Infantil'){
            return '1';
        }else if($ano == '1° ANO') {
            return '2';
        }else if($ano == '2° ANO') {
            return '2';
        }else if($ano == '3° ANO') {
            return '2';
        }else if($ano == '4° ANO') {
            return '3';
        }else if($ano == '5° ANO') {
            return '3';
        }else if($ano == '6° ANO') {
            return '3';
        }else if($ano == '7° ANO') {
            return '4';
        }else if($ano == '8° ANO') {
            return '4';
        }else if($ano == '9° ANO') {
            return '4';
        }else if($ano == 'EJA') {
            return '5';
        }else{
            dd('erro');
        }
    }

    public function escolaCategoria(){
        $escola_id = Input::get('escola_id');
        $escola = Escola::find($escola_id);
        $categorias = $escola->categoria;
        $ano = [];
        foreach ($categorias as $categoria){
            if($categoria->id == 1){
                $ano[] = 'Educação Infantil';
            }else if($categoria->id == 2){
                $ano[] = '1° ANO';
                $ano[] = '2° ANO';
                $ano[] = '3° ANO';
            }else if($categoria->id == 3){
                $ano[] = '4° ANO';
                $ano[] = '5° ANO';
                $ano[] = '6° ANO';
            }else if($categoria->id == 4){
                $ano[] = '7° ANO';
                $ano[] = '8° ANO';
                $ano[] = '9° ANO';
            }else if($categoria->id == 5){
                $ano[] = 'EJA';
            }else{
            }
        }
        return response()->json($ano);
    }

}