<?php

namespace App\Http\Controllers\Admin\Configuracoes;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;

class AdminPdfAvaliacoesController extends Controller
{
    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        try {
            return view('admin.config.pdf');
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function termos()
    {
        try {
            return view('admin.config.termos-escola');
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function regras()
    {
        try {
            return view('admin.config.regras-regulamentos');
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function store()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}