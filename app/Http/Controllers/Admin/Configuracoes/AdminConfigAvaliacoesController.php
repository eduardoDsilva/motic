<?php

namespace App\Http\Controllers\Admin\Configuracoes;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Avaliacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminConfigAvaliacoesController extends Controller
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
        try {
            $datas = Avaliacao::latest()->first();
            return view('admin.config.avaliacoes', compact('datas'));
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $dataForm = $request->all();
            $avaliacao = Avaliacao::create($dataForm);

            $texto = str_replace(",", ", ", json_encode($avaliacao, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $avaliacao->id, 'periodo_avaliacao');
            Session::put('mensagem', "O período de avaliação foi salvo com sucesso!");
            return redirect()->route("admin.config.avaliacoes");
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}