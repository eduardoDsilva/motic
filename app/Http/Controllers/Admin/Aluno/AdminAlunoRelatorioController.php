<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 26/06/2018
 * Time: 08:32
 */

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;

class AdminAlunoRelatorioController
{

    public function index(){
        return view('admin/aluno/relatorios');
    }

    public function todosAlunosExibe()
    {
        $alunos = Aluno::paginate(10);
        return \PDF::loadView('pdf.teste', compact('alunos'))
            ->stream('nome-arquivo-pdf-gerado.pdf');
    }

    public function todosAlunosBaixa()
    {
        $alunos = Aluno::all();

        return \PDF::loadView('pdf.teste', compact('alunos'))
            ->download('nome-arquivo-pdf-gerado.pdf');
    }

    public function projetosAlunosBaixa()
    {
        $alunos = Aluno::all();

        return \PDF::loadView('pdf.teste', compact('alunos'))
            ->download('nome-arquivo-pdf-gerado.pdf');
    }

    public function semProjetosAlunosBaixa()
    {
        $alunos = Aluno::all();

        return \PDF::loadView('pdf.teste', compact('alunos'))
            ->download('nome-arquivo-pdf-gerado.pdf');
    }

}