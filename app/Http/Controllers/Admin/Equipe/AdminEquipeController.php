<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Equipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\equipe\equipeController;

class AdminEquipeController extends Controller
{

    private $equipeController;
    private $request;

    public function __construct(equipeController $equipeController)
    {
        $this->equipeController = $equipeController;
    }

    public function index()
    {
        $equipe = $this->equipeController->buscar();
        return view('admin/equipe/home', compact('equipe'));
    }

    public function editar($id)
    {
        $equipe = $this->equipeController->editar($id);

        return view('admin/equipe/editar/editar', compact('equipe'));
    }

    public function store(Request $req)
    {
        $this->request = $req->all();
        $this->equipeController->store($this->request);

        return redirect()
            ->route("admin/equipe/home")
            ->with("sucess", "equipe cadastrada com sucesso!");
    }

    public function delete($id){
        $this->equipeController->delete($id);
        $equipe = $this->equipeController->buscar();

        return redirect()
            ->route("admin/equipe/home")
            ->with(compact('equipe'));
    }

    public function update(Request $req, $id)
    {
        $this->equipeController->update($req, $id);
        $equipe = $this->equipeController->buscar();
        return view('admin/equipe/home', compact('equipe'));
    }


}
