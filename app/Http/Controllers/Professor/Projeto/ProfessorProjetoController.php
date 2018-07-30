<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Professor\Projeto;

use App\Http\Controllers\Controller;
use App\Projeto;
use Illuminate\Support\Facades\Auth;

class ProfessorProjetoController extends Controller
{

    public function index()
    {
        $projeto = Projeto::findOrFail(Auth::user()->professor->projeto);

        return view('professor.projeto.home', compact('projeto'));
    }

}