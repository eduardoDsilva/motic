<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Avaliador\Projeto;

use App\Avaliador;
use App\Http\Controllers\Controller;
use App\Projeto;
use Illuminate\Support\Facades\Auth;

class AvaliadorProjetoController extends Controller
{

    public function index()
    {
        $avaliador = Avaliador::find(Auth::user()->avaliador->id);
        $projetos = $avaliador->projeto;
        return view('avaliador/projeto/home', compact('projetos'));
    }
    public function avaliar($id)
    {
        $projeto = Projeto::find($id);
        return view('avaliador/projeto/ficha-de-avaliacao', compact('projeto'));
    }

}