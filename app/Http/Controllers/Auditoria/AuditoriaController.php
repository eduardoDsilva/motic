<?php

namespace App\Http\Controllers\Auditoria;

use App\Auditoria;
use App\Http\Controllers\Controller;

class AuditoriaController extends Controller
{

    public function create($request){
    {
        try {
            $auditoria = Auditoria::create[$request];
            return $auditoria;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
}
