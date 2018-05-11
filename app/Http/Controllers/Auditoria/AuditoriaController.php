<?php

namespace App\Http\Controllers\Auditoria;

use App\Auditoria;
use App\Http\Controllers\Controller;

class AuditoriaController extends Controller
{

    public function store(Auditoria $auditoria)
    {
        try {
            $auditoria->save();
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
