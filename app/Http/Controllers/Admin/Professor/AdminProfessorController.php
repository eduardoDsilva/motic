<?php

namespace App\Http\Controllers\Admin\Professor;

use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\professor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminProfessorController extends Controller
{

    private $professor;
    private $auditoriaController;

    public function __construct(Professor $professor, AuditoriaController $auditoriaController)
    {
        $this->professor = $professor;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        return view('admin/professor/home');
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin/professor/cadastro/registro', compact('escolas'));
    }

    public function store(Request $request){
        $dataForm = $request->all();
        try{
            $user = User::create($dataForm + ['tipoUser' => 'professor']);
            $this->auditoriaController->storeCreate($user, $user->id);

            $professor = Professor::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($professor, $professor->id);

            $dado = Dado::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($dado, $dado->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($endereco, $endereco->id);

            return redirect()
                ->route("admin/professor/home")
                ->with("success", "professor ".$professor->name." adicionado com sucesso");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $professores = Professor::all();
            return view("admin/professor/busca/buscar", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $professor = Professor::find($id);
            return view("admin/professor/editar/editar", compact('professor'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id){
        $dataForm = $request->all();
        try{
            $user = User::find($id);
            $user->update($dataForm + ['tipoUser' => 'professor']);
            $this->auditoriaController->storeUpdate($user, $user->id);

            $professor = $user->professor;
            $professor->update($dataForm);
            $this->auditoriaController->storeUpdate($professor, $professor->id);

            $dado = $user->dado;
            $dado->update($dataForm);
            $this->auditoriaController->storeUpdate($dado, $dado->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate($endereco, $endereco->id);

            $professores = $this->professor->all();
            return redirect()->route("admin/professor/busca/buscar", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $professor = User::find($id);
            $professor->delete($id);
            $this->auditoriaController->storeUpdate($professor, $professor->id);

            $professores = Professor::all();
            return redirect()->route("admin/professor/busca/buscar", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}