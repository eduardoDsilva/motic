<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Http\Controllers\Controller;
use App\Escola;
use App\Usuario;

class AdminNomeController extends Controller
{
    public function store($request)
    {
        try {
            $teste = Escola::create($request);
            return $teste->id;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
