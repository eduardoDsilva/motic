<?php

namespace App\Http\Controllers\Professor\Conta;

use App\Http\Controllers\Controller;

class ProfessorContaController extends Controller
{

    public function index()
    {
        return view('professor/conta/home');
    }

}