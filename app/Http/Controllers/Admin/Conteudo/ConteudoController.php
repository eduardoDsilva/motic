<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 18/07/2018
 * Time: 11:26
 */

namespace App\Http\Controllers\Admin\Conteudo;

use App\Contato;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Sobre;
use Illuminate\Http\Request;

class ConteudoController extends Controller
{

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        $conteudos = Conteudo::latest()->first();

        return view('admin.config.pagina-inicial', compact('conteudos'));
    }

    public function sobre()
    {
        $sobre = Sobre::latest()->first();

        return view('admin.config.gerenciar-sobre', compact('sobre'));
    }

    public function contato()
    {
        $contato = Contato::latest()->first();

        return view('admin.config.gerenciar-contato', compact('contato'));
    }

    public function sobreStore(Request $request)
    {
        try {
            $dataForm = $request->all();
            $sobre = Sobre::create($dataForm);

            $texto = str_replace(",", ", ", json_encode($sobre, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $sobre->id, 'conteudo');

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
            $contato = Contato::create($dataForm);

            $texto = str_replace(",", ", ", json_encode($contato, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $contato->id, 'conteudo');

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