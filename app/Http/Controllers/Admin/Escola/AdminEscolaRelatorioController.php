<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 26/06/2018
 * Time: 08:32
 */

namespace App\Http\Controllers\Admin\Escola;

use App\Escola;

class AdminEscolaRelatorioController
{

    public function index()
    {
        $escolas = Escola::all();
        return view('admin.escola.relatorios', compact('escolas'));
    }


    public function todasEscolas()
    {
        $escolas = Escola::orderBy('name', 'asc')->get();
        return \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.escola.todas-escolas', compact('escolas'))
            ->stream('todas-escolas-motic' . date('Y') . '.pdf');
    }
    /*
        public function escolaAlunosPdf()
        {
            $escolas = Escola::orderBy('name','asc')->get();
            return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
                ->loadView('pdf.aluno.escola-alunos', compact('escolas'))
                ->stream('todos-alunos-por-escola-motic'.date('Y').'.pdf');
        }

        public function alunoPdf(Request $request)
        {
            $dataForm = $request->all();
            $aluno = Aluno::findOrFail($dataForm['id']);
            return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
                ->loadView('pdf.aluno.aluno-individual', compact('aluno'))
                ->stream('aluno-'.$aluno->name.'-'.date('Y').'.pdf');
        }

        public function alunoCompletoPdf()
        {
            $alunos = Aluno::all();
            return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
                ->loadView('pdf.aluno.todos-alunos-completo', compact('alunos'))
                ->stream('alunos-completo-'.date('Y').'.pdf');
        }

    */

}