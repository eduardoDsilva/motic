<?php

namespace App\Http\Controllers\Escola\Documentos;

use App\Dado;
use App\Http\Controllers\Controller;

class EscolaDocumentosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.escola');
    }

    public function index()
    {
        return view('escola.documentos.documentos');
    }

}