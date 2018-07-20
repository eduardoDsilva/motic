<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 20/07/2018
 * Time: 10:17
 */

namespace App\Http\Controllers\Audit;

use App\Audit;
use App\User;

class AuditController
{

    public function index(){
        $auditorias = Audit::latest()->paginate(10);
        return view('admin.auditoria.home', compact('auditorias'));
    }

    public function filtrar(\Illuminate\Http\Request $request)
    {
        try {
            $dataForm = $request->all();
            if ($dataForm['tipo'] == 'id') {
                $auditorias = Audit::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'tipo') {
                $filtro = '%' . $dataForm['search'] . '%';
                $auditorias = Audit::where('auditable_type', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'evento') {
                $filtro = '%' . $dataForm['search'] . '%';
                $auditorias = Audit::where('event', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'user') {
                $user = User::where('username', '=', $dataForm['search'])->first();
                $auditorias = Audit::where('user_id', 'like', $user->id)->paginate(10);
            }
            return view('admin.auditoria.home', compact('auditorias'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

}