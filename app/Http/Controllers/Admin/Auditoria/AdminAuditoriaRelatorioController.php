<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 26/06/2018
 * Time: 08:32
 */

namespace App\Http\Controllers\Admin\Auditoria;

use App\Aluno;
use App\Auditoria;
use App\Escola;
use App\User;
use Illuminate\Http\Request;

class AdminAuditoriaRelatorioController
{

    public function index(){
        $usuarios = User::orderBy('username', 'asc')->get();
        return view('admin/auditoria/relatorios', compact('usuarios'));
    }

    public function todosRegistros()
    {
        $registros = Auditoria::latest()->get();
        return \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.auditoria.todos-registros', compact('registros'))
            ->stream('todos-registros-motic'.date('Y').'.pdf');
    }

    /*

    public function escolaAlunosPdf()
    {
        $escolas = Escola::orderBy('name','asc')->get();
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.escola-alunos', compact('escolas'))
            ->stream('todos-alunos-por-escola-motic'.date('Y').'.pdf');
    }

    public function alunoPdf(Request $request)
    {
        $dataForm = $request->all();
        $aluno = Aluno::find($dataForm['id']);
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.aluno-individual', compact('aluno'))
            ->stream('aluno-'.$aluno->name.'-'.date('Y').'.pdf');
    }

    public function alunoCompletoPdf()
    {
        $alunos = Aluno::all();
        return  \PDF::setOptions(['dpi' => 325, 'defaultFont' => 'sans-serif'])
            ->loadView('pdf.todos-alunos-completo', compact('alunos'))
            ->stream('alunos-completo-'.date('Y').'.pdf');
    }
*/


}