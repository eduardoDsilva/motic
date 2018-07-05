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

class AdminAlunoRelatorioController
{

    public function index(){
        $alunos = Aluno::orderBy('name', 'asc')->paginate();
        return view('admin/aluno/relatorios', compact('alunos'));
    }

    public function todosAlunosResumo()
    {
        $alunos = Aluno::orderBy('name','asc')->get();
        return \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.aluno.todos-alunos', compact('alunos'))
            ->stream('todos-alunos-motic'.date('Y').'.pdf');
    }

    public function alunosPorEscola()
    {
        $escolas = Escola::orderBy('name','asc')->get();
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.aluno.escola-alunos', compact('escolas'))
            ->stream('todos-alunos-por-escola-motic'.date('Y').'.pdf');
    }

    public function alunoIndividual($id)
    {
        $aluno = Aluno::find($id);
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.aluno.aluno-individual', compact('aluno'))
            ->stream('aluno-'.$aluno->name.'-'.date('Y').'.pdf');
    }

    public function todosAlunosCompleto()
    {
        $alunos = Aluno::all();
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.aluno.todos-alunos-completo', compact('alunos'))
            ->stream('alunos-completo-'.date('Y').'.pdf');
    }



}