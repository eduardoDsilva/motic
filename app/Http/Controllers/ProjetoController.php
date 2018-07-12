<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Professor;
use App\Projeto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProjetoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function store($dataForm)
    {
        try {
            $escola = Escola::find($dataForm['escola_id']);
            $projeto = Projeto::all()
                ->where('escola_id', '=', $escola->id);
            if (count($projeto) >= $escola->projetos) {
                dd('não pode mais cadastrar projetos');
            }
            $projeto = Projeto::create($dataForm);
            foreach ($dataForm['disciplina_id'] as $disciplina) {
                $projeto->disciplina()->attach($disciplina);
            }
            $alunos = [];
            foreach ($dataForm['aluno_id'] as $aluno_id) {
                $alunos[] = Aluno::find($aluno_id);
            }
            foreach ($alunos as $aluno) {
                $aluno->projeto_id = $projeto->id;
                $aluno->save();
            }

            $orientador = Professor::find($dataForm['orientador']);
            $orientador->projeto_id = $projeto->id;
            $orientador->tipo = 'orientador';
            $orientador->save();

            if (isset($dataForm['coorientador'])) {
                $coorientador = Professor::find($dataForm['coorientador']);
                $coorientador->projeto_id = $projeto->id;
                $coorientador->tipo = 'coorientador';
                $coorientador->save();
            }

            $texto = str_replace(",", ", ", json_encode($projeto, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $projeto->id, 'projeto');

            Session::put('mensagem', "O projeto ".$projeto->titulo." foi salvo com sucesso!");


        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar($dataForm)
    {
        try {
            if ($dataForm['tipo'] == 'id') {
                $projetos = Projeto::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'nome') {
                $filtro = '%' . $dataForm['search'] . '%';
                $projetos = Projeto::where('titulo', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'escola') {
                $filtro = '%' . $dataForm['search'] . '%';
                $escola = Escola::where('name', 'like', $filtro)->get();
                foreach ($escola as $id) {
                    $array[] = $id->id;
                }
                $projetos = Projeto::whereIn('escola_id', $array)->paginate(10);
            } else if ($dataForm['tipo'] == 'categoria') {
                $categoria = Categoria::where('categoria', '=', $dataForm['search'])->get();
                $array[] = null;
                foreach ($categoria as $id) {
                    $array[] = $id->id;
                }
                $projetos = Projeto::whereIn('categoria_id', $array)->paginate(10);
            }
            return $projetos;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($dataForm, $id)
    {
        try {
            $projeto = Projeto::find($id);
            $projeto->update($dataForm);
            $projeto->disciplina()->detach();
            foreach ($dataForm['disciplina_id'] as $disciplina) {
                $projeto->disciplina()->attach($disciplina);
            }
            $texto = str_replace(",", ", ", json_encode($projeto, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $projeto->id, 'projeto');

            Session::put('mensagem', "O projeto " . $projeto->titulo . " foi editado com sucesso!");

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            DB::update('update alunos set projeto_id = ? where projeto_id = ?', [null, $id]);
            DB::update('update professores set projeto_id = ? where projeto_id = ?', [null, $id]);
            $projeto = Projeto::find($id);
            $projeto->delete($id);
            $texto = str_replace(",", ", ", json_encode($projeto, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeDelete($texto, $projeto->id, 'projeto');

            Session::put('mensagem', "O projeto ".$projeto->titulo." foi deletado com sucesso!");

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}