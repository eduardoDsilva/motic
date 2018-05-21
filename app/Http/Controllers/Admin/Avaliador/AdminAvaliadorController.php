<?php

namespace App\Http\Controllers\Admin\Avaliador;

use App\Avaliador;
use App\Dado;
use App\Endereco;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Avaliador\ProfessorCreateFormRequest;
use App\Http\Requests\Admin\Avaliador\ProfessorUpdateFormRequest;
use App\User;
use Illuminate\Http\Request;


class AdminAvaliadorController extends Controller
{

    private $avaliador;
    private $auditoriaController;

    public function __construct(Avaliador $avaliador, AuditoriaController $auditoriaController)
    {
        $this->avaliador = $avaliador;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        return view('admin/avaliador/home');
    }

    public function create(){
        $titulo = 'Cadastrar avaliador';
        return view('admin/avaliador/cadastro/registro', 'avaliador');
    }

    public function store(ProfessorCreateFormRequest $request){
        $dataForm = $request->all();
        try{
            $user = User::create($dataForm + ['tipoUser' => 'avaliador']);
            $this->auditoriaController->storeCreate($user, $user->id);

            $avaliador = Avaliador::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($avaliador, $avaliador->id);

            $dado = Dado::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($dado, $dado->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($endereco, $endereco->id);

            return redirect()
                ->route("admin/avaliador/home")
                ->with("success", "Avaliador ".$avaliador->name." adicionado com sucesso");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $avaliadores = Avaliador::all();
            return view("admin/avaliador/busca/buscar", compact('avaliadores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $avaliador = Avaliador::find($id);
            $titulo = 'Editar avaliador :'.$avaliador->dado->name;

            return view("admin/avaliador/cadastro/registro", compact('avaliador', 'avaliador'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(ProfessorUpdateFormRequest $request, $id){
        $dataForm = $request->all();
        try{
            $user = User::find($id);
            $user->update($dataForm + ['tipoUser' => 'avaliador']);
            $this->auditoriaController->storeUpdate($user, $user->id);

            $avaliador = $user->avaliador;
            $avaliador->update($dataForm);
            $this->auditoriaController->storeUpdate($avaliador, $user->id);

            $dado = $user->dado;
            $dado->update($dataForm);
            $this->auditoriaController->storeUpdate($dado, $user->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate($endereco, $user->id);

            $avaliadores = $this->avaliador->all();
            return redirect()->route("admin/avaliador/busca/buscar", compact('avaliadores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $avaliador = User::find($id);
            $avaliador->delete($id);
            $this->auditoriaController->storeUpdate($avaliador, $avaliador->id);

            $avaliadores = Avaliador::all();
            return redirect()->route("admin/avaliador/busca/buscar", compact('avaliadores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
