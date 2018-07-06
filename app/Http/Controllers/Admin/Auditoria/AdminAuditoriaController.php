<?php

namespace App\Http\Controllers\Admin\Auditoria;

use App\Auditoria;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use http\Env\Request;

class AdminAuditoriaController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }
    public function index()
    {
        try{
            $auditorias = Auditoria::latest()->paginate(10);
            return view('admin.auditoria.home', compact('auditorias'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(\Illuminate\Http\Request $request){
        try {
            $dataForm = $request->all();
            $auditorias = $this->auditoriaController->filtro($dataForm);
            return view('admin.auditoria.home', compact('auditorias'));
        }catch(\Exception $e){
            return "Erro ". $e->getMessage();
        }
    }

}
