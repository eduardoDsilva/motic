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
             $escola = Escola::create($request);
             return $escola->id;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
