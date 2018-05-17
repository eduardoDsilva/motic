<?php

namespace App\Http\Controllers\Admin\Auditoria;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;

class AdminAuditoriaController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }
    public function index()
    {
        $auditorias = $this->auditoriaController->buscar();

        return view('admin/auditoria/home', compact('auditorias'));

    }

}
