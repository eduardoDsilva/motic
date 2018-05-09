<?php

namespace App\Http\Controllers\Admin\Escola;

use App\User;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{

    public function store($request)
    {
        try {
            $teste = User::create($request);
            return $teste->id;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}
