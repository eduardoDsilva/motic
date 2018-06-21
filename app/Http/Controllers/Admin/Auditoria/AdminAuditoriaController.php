<?php

namespace App\Http\Controllers\Admin\Auditoria;

use App\Auditoria;
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
        $auditorias = Auditoria::latest()->paginate(10);

        return view('admin/auditoria/home', compact('auditorias'));

    }

}
