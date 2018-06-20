<?php

namespace App\Http\Controllers\Avaliador\Conta;

use App\Http\Controllers\Controller;

class AvaliadorContaController extends Controller
{

    public function index()
    {
        return view('avaliador/conta/home');
    }

}