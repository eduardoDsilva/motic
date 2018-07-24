<?php

namespace App\Http\Controllers;

use App\Conteudo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function regulamento()
    {
        return view('regulamento');
    }

    public function contato()
    {
        $conteudo = Conteudo::latest()->first();
        return view('contato', compact('conteudo'));
    }

    public function sobre()
    {
        $conteudo = Conteudo::latest()->first();
        return view('sobre', compact('conteudo'));
    }
}
