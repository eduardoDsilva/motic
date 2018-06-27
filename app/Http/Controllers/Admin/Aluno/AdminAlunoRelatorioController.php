<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 26/06/2018
 * Time: 08:32
 */

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;
use App\Escola;
use Illuminate\Http\Request;

class AdminAlunoRelatorioController
{

    public function index(){
        $alunos = Aluno::orderBy('name', 'asc')->get();
        return view('admin/aluno/relatorios', compact('alunos'));
    }

    public function todosAlunosExibe()
    {
        $alunos = Aluno::orderBy('name','asc')->get();
        return \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.todos-alunos', compact('alunos'))
            ->stream('todos-alunos-motic'.date('Y').'.pdf');
    }

    public function escolaAlunosExibe()
    {
        $escolas = Escola::orderBy('name','asc')->get();
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.escola-alunos', compact('escolas'))
            ->stream('todos-alunos-por-escola-motic'.date('Y').'.pdf');
    }

    public function alunoExibe(Request $request)
    {
        $dataForm = $request->all();
        $aluno = Aluno::find($dataForm['id']);
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.aluno-individual', compact('aluno'))
            ->stream('aluno-'.$aluno->name.'-'.date('Y').'.pdf');
    }

    public function todosCompletoExibe()
    {
        $alunos = Aluno::all();
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.todos-alunos-completo', compact('alunos'))
            ->stream('alunos-completo-'.date('Y').'.pdf');
    }



}