<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Escola;
use Illuminate\Support\Facades\Session;

class AlunoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function filtro($dataForm)
    {
        try {
            if ($dataForm['tipo'] == 'id') {
                $alunos = Aluno::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'nome') {
                $filtro = '%' . $dataForm['search'] . '%';
                $alunos = Aluno::where('name', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'nascimento') {
                $alunos = Aluno::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'sexo') {
                $filtro = '%' . $dataForm['search'] . '%';
                $alunos = Aluno::where('sexo', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'etapa') {
                $filtro = '%' . $dataForm['search'] . '%';
                $alunos = Aluno::where('etapa', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'escola') {
                $filtro = '%' . $dataForm['search'] . '%';
                $escola = Escola::where('name', 'like', $filtro)->get();
                $array[] = null;
                foreach ($escola as $id) {
                    $array[] = $id->id;
                }
                $alunos = Aluno::whereIn('escola_id', $array)->paginate(10);
            }
            return $alunos;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($dataForm)
    {
        try {
            $dataForm += ['categoria_id' => $this->categoriaAluno($dataForm['etapa'])];
            $aluno = Aluno::create($dataForm);

            Session::put('mensagem', "O aluno " . $aluno->name . " foi cadastrado com sucesso!");

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($dataForm, $id)
    {
        try {
            $dataForm += ['categoria_id' => $this->categoriaAluno($dataForm['etapa'])];

            $aluno = Aluno::find($id);
            $aluno->update($dataForm);

            Session::put('mensagem', "O aluno " . $aluno->name . " foi editado com sucesso!");

            return Aluno::paginate(10);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $aluno = Aluno::find($id);
            $aluno->delete($id);

            Session::put('mensagem', "O aluno " . $aluno->name . " foi deletado com sucesso!");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    private function categoriaAluno($ano)
    {
        if ($ano == 'Educação Infantil') {
            return '1';
        } else if ($ano == '1° ANO') {
            return '2';
        } else if ($ano == '2° ANO') {
            return '2';
        } else if ($ano == '3° ANO') {
            return '2';
        } else if ($ano == '4° ANO') {
            return '3';
        } else if ($ano == '5° ANO') {
            return '3';
        } else if ($ano == '6° ANO') {
            return '3';
        } else if ($ano == '7° ANO') {
            return '4';
        } else if ($ano == '8° ANO') {
            return '4';
        } else if ($ano == '9° ANO') {
            return '4';
        } else if ($ano == 'EJA') {
            return '5';
        } else {
            dd('erro');
        }
    }
}
