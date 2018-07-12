<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Disciplina;

use App\Disciplina;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Disciplina\DisciplinaCreateFormRequest;
use App\Http\Requests\Admin\Disciplina\DisciplinaUpdateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminDisciplinaController extends Controller
{

    private $disciplinas;
    private $auditoriaController;

    public function __construct(Disciplina $disciplina, AuditoriaController $auditoriaController)
    {
        $this->disciplinas = $disciplina;
        $this->auditoriaController = $auditoriaController;
        $this->middleware('auth');
        $this->middleware('check.admin');
    }

    public function index()
    {
        $disciplinas = Disciplina::orderBy('name', 'asc')->paginate(10);
        return view('admin.disciplinas.home', compact('disciplinas'));
    }

    public function store(DisciplinaCreateFormRequest $request)
    {
        $dataForm = $request->all();
        try {
            $disciplinas = Disciplina::create($dataForm);
            $texto = str_replace(",", ", ", json_encode($disciplinas, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $disciplinas->id, 'disciplina');
            return redirect()
                ->route("admin.disciplina")
                ->with("success", "disciplina " . $disciplinas->name . " adicionada com sucesso");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        $dataForm = $request->all();
        try {
            if ($dataForm['tipo'] == 'id') {
                $disciplinas = Disciplina::all()->where('id', '=', $dataForm['search']);
            } else if ($dataForm['tipo'] == 'nome') {
                $filtro = '%' . $dataForm['search'] . '%';
                $disciplinas = Disciplina::where('name', 'like', $filtro)->paginate(10);
            }
            return view("admin.disciplinas.home", compact('disciplinas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $disciplina = disciplina::find($id);
            return view("admin.disciplinas.editar", compact('disciplina'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(DisciplinaUpdateFormRequest $request, $id)
    {
        $dataForm = $request->all();
        try {
            $disciplinas = Disciplina::find($id);
            $disciplinas->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($disciplinas, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $disciplinas->id, 'disciplina');

            Session::put('mensagem', 'A disciplina '.$disciplinas->name.' foi editada com sucesso!');
            $disciplinas = Disciplina::all();
            return view('admin.disciplinas.home', compact('disciplinas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $disciplina = Disciplina::find($id);
            $disciplina->delete($id);
            $texto = str_replace(",", ", ", json_encode($disciplina, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeDelete($texto, $disciplina->id, 'disciplina');
            Session::put('mensagem', 'A disciplina '.$disciplina->name.' foi deletada com sucesso!');

        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}