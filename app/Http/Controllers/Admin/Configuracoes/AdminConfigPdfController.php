<?php

namespace App\Http\Controllers\Admin\Configuracoes;

use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class AdminConfigPdfController extends Controller
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
            return view('admin.config.pdf');
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function termos()
    {
        try {
            return view('admin.config.termos-escola');
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function regras()
    {
        try {
            return view('admin.config.regras-regulamentos');
        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function carregaRegrasDeAutorizacao(Request $request)
    {
        try {
            if ($request->file('pdf')) {

                $extensao = $request->pdf->extension();
                $nameFile = "regras-motic.$extensao";
                $request->pdf->storeAs('regras', $nameFile);
                $texto = 'O usuário '.Auth::user()->username.' fez o upload do pdf regras-motic.';
                $texto = str_replace(",", ", ", json_encode($texto, JSON_UNESCAPED_UNICODE));
                $this->auditoriaController->storeCreate($texto, 999, 'upload');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function carregaRegulamento(Request $request)
    {
        try {
            if ($request->file('pdf')) {
                $extensao = $request->pdf->extension();
                $nameFile = "regulamento-motic.$extensao";
                $request->pdf->storeAs('regulamentos', $nameFile);
                $texto = 'O usuário '.Auth::user()->username.' fez o upload do pdf regulamento-motic.';
                $texto = str_replace(",", ", ", json_encode($texto, JSON_UNESCAPED_UNICODE));
                $this->auditoriaController->storeCreate($texto, 999, 'upload');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function carregaTermoMenor(Request $request)
    {
        try {
            if ($request->file('pdf')) {
                $extensao = $request->pdf->extension();
                $nameFile = "termo-menor-motic.$extensao";
                $request->pdf->storeAs('termos', $nameFile);
                $texto = 'O usuário '.Auth::user()->username.' fez o upload do pdf termo-menor-motic.';
                $texto = str_replace(",", ", ", json_encode($texto, JSON_UNESCAPED_UNICODE));
                $this->auditoriaController->storeCreate($texto, 999, 'upload');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function carregaTermoMaior(Request $request)
    {
        try {
            if ($request->file('pdf')) {
                $extensao = $request->pdf->extension();
                $nameFile = "termo-maior-motic.$extensao";
                $request->pdf->storeAs('termos', $nameFile);
                $texto = 'O usuário '.Auth::user()->username.' fez o upload do pdf termo-maior-motic.';
                $texto = str_replace(",", ", ", json_encode($texto, JSON_UNESCAPED_UNICODE));
                $this->auditoriaController->storeCreate($texto, 999, 'upload');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function carregaContratoConvivencia(Request $request)
    {
        try {
            if ($request->file('pdf')) {
                $extensao = $request->pdf->extension();
                $nameFile = "contrato-convivencia-motic.$extensao";
                $request->pdf->storeAs('termos', $nameFile);
                $texto = 'O usuário '.Auth::user()->username.' fez o upload do pdf contrato-convivencia-motic.';
                $texto = str_replace(",", ", ", json_encode($texto, JSON_UNESCAPED_UNICODE));
                $this->auditoriaController->storeCreate($texto, 999, 'upload');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function carregaFichaDeAvaliacao(Request $request)
    {
        try {
            if ($request->file('pdf')) {
                $extensao = $request->pdf->extension();
                $nameFile = "ficha-de-avaliacao-motic.$extensao";
                $request->pdf->storeAs('termos', $nameFile);
                $texto = 'O usuário '.Auth::user()->username.' fez o upload do pdf ficha-de-avaliacao-motic.';
                $texto = str_replace(",", ", ", json_encode($texto, JSON_UNESCAPED_UNICODE));
                $this->auditoriaController->storeCreate($texto, 999, 'upload');
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return "Erro " . $e->getMessage();
        }
    }

    public function store()
    {
        //
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