<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Aluno;
use App\Categoria;
use App\Escola;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EscolaController;
use App\Http\Requests\Admin\Escola\EscolaCreateFormRequest;
use App\Http\Requests\Admin\Escola\EscolaUpdateFormRequest;
use App\Professor;
use App\Projeto;
use Illuminate\Http\Request;

class AdminEscolaController extends Controller
{

    private $escolaController;

    public function __construct(EscolaController $escolaController)
    {
        $this->escolaController = $escolaController;
    }

    public function index()
    {
        $escolas = Escola::orderBy('name', 'asc')->paginate(10);
        return view("admin.escola.home", compact('escolas'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $titulo = 'Cadastrar escola';

        return view('admin.escola.cadastro', compact('categorias', 'titulo'));
    }

    public function store(EscolaCreateFormRequest $request)
    {
        try {
            $dataForm = $request->all() + ['tipoUser' => 'escola'];
            $this->escolaController->store($dataForm);
            return redirect()->route("admin.escola");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $escola = Escola::findOrFail($id);
            $alunos = Aluno::where('escola_id', '=', $escola->id)->paginate(6);
            $professores = Professor::where('escola_id', '=', $escola->id)->paginate(6);
            $projetos = Projeto::where('escola_id', '=', $escola->id)->paginate(6);
            return view('admin.escola.show', compact('escola', 'alunos', 'professores', 'projetos'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        try {
            $dataForm = $request->all();
            $escolas = $this->escolaController->filtro($dataForm);
            return view('admin.escola.home', compact('escolas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $escola = Escola::findOrFail($id);
            $categorias = Categoria::all();
            $titulo = 'Editar avalaidor: ' . $escola->name;
            foreach ($escola->categoria as $id) {
                $categoria_escola[] = $id->pivot->categoria_id;
            }
            return view("admin.escola.cadastro", compact('escola', 'categorias', 'titulo', 'categoria_escola'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(EscolaUpdateFormRequest $request, $id)
    {
        try {
            $dataForm = $request->all() + ['tipoUser' => 'escola'];
            $escolas = $this->escolaController->update($dataForm, $id);
            return redirect()->route("admin.escola", compact('escolas'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $this->escolaController->destroy($id);
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}