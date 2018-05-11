<?php

namespace App\Http\Controllers\Admin\Escola;

use App\User;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{

    public function store($request)
    {
        try {
            $user = User::create($request);
            return $user->id;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }


}
