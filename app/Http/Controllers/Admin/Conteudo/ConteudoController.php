<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 18/07/2018
 * Time: 11:26
 */

namespace App\Http\Controllers\Admin\Conteudo;

use App\Conteudo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConteudoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        return view('admin.config.pagina-inicial');
    }

    public function sobre()
    {
        $conteudo = Conteudo::latest()->first();

        return view('admin.config.gerenciar-sobre', compact('conteudo'));
    }

    public function contato()
    {
        $conteudo = Conteudo::latest()->first();

        return view('admin.config.gerenciar-contato', compact('conteudo'));
    }

    public function sobreStore(Request $request)
    {
        try {
            $dataForm = $request->all();
            $conteudo = Conteudo::latest()->first();
            $conteudo->sobre = $dataForm['sobre'];
            $conteudo->save();

            $response = array(
                'status' => 'success',
                'msg' => $request->message,
            );
            return response()->json($response);

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function contatoStore(Request $request)
    {
        try {
            $dataForm = $request->all();
            $conteudo = Conteudo::latest()->first();
            $conteudo->contato = $dataForm['contato'];
            $conteudo->save();

            $response = array(
                'status' => 'success',
                'msg' => $request->message,
            );
            return response()->json($response);

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}