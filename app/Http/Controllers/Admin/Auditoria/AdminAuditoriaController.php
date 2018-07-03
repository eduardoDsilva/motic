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
        $auditorias = Auditoria::latest()->paginate(10);

        return view('admin/auditoria/home', compact('auditorias'));
    }

    public function filtrar(\Illuminate\Http\Request $request){
        $dataForm = $request->all();
        try{
            if($dataForm['tipo'] == 'id'){
                $auditorias = Auditoria::where('id', '=', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'tipo'){
                $filtro = '%'.$dataForm['search'].'%';
                $auditorias = Auditoria::where('tipo', 'like', $filtro)->paginate(10);
            }else if($dataForm['tipo'] == 'user') {
                $filtro = '%' . $dataForm['search'] . '%';
                $auditorias = Auditoria::where('nome_usuario', 'like', $filtro)->paginate(10);
            }else if($dataForm['tipo'] == 'id_user') {
                $auditorias = Aluno::where('user_id', '=', $dataForm['search'])->paginate(10);
            }
            return view('admin/auditoria/home', compact('auditorias'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
