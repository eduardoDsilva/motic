<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\User;
use App\Escola;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Usuario;

class AdminEnderecoEscolaController extends Controller
{
    public function store($request)
    {
        try {
            $cadastroEndereco = Endereco::create($request);
            return $cadastroEndereco;
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
}
