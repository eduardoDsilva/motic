<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Disciplinas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Disciplina\DisciplinaController;

class AdminDisciplinaController extends Controller
{

    private $disciplinaController;
    private $request;

    public function __construct(DisciplinaController $disciplinaController)
    {
        $this->disciplinaController = $disciplinaController;
    }

    public function index()
    {
        $disciplinas = $this->disciplinaController->buscar();
        return view('admin/disciplinas/home', compact('disciplinas'));
    }

    public function editar($id)
    {
        $disciplina = $this->disciplinaController->editar($id);

        return view('admin/disciplinas/editar/editar', compact('disciplina'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all();
        $this->disciplinaController->store($this->request);

        return redirect()
            ->route("admin/disciplinas/home")
            ->with("sucess", "Disciplina cadastrada com sucesso!");
    }

    public function delete($id){
        $this->disciplinaController->delete($id);
        $disciplinas = $this->disciplinaController->buscar();

        return redirect()
            ->route("admin/disciplinas/home")
            ->with(compact('disciplinas'));
    }

    public function update(Request $req, $id)
    {
        $this->disciplinaController->update($req, $id);
        $disciplinas = $this->disciplinaController->buscar();
        return view('admin/disciplinas/home', compact('disciplinas'));
    }


}
