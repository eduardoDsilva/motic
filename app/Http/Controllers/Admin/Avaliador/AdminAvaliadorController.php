<?php

namespace App\Http\Controllers\Admin\Avaliador;

use App\Avaliador;
use App\Dado;
use App\Endereco;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Avaliador\AvaliadorCreateFormRequest;
use App\Http\Requests\Admin\Avaliador\AvaliadorUpdateFormRequest;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class AdminAvaliadorController extends Controller
{

    private $avaliador;
    private $auditoriaController;

    use RegistersUsers;

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
        return view('admin/avaliador/cadastro/registro', compact('titulo'));
    }

    public function store(AvaliadorCreateFormRequest $request){
        $dataForm = $request->all() + ['tipoUser' => 'avaliador'];
        try{
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeCreate(json_encode($user, JSON_UNESCAPED_UNICODE), $user->id);

            $avaliador = Avaliador::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($avaliador, JSON_UNESCAPED_UNICODE), $avaliador->id);

            $dado = Dado::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($dado, JSON_UNESCAPED_UNICODE), $dado->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

            Session::put('mensagem', "O avaliador ".$avaliador->user->dado->name." foi cadastrado com sucesso!");

            return redirect()>route("admin/avaliador/busca/buscar");
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
            $titulo = 'Editar avaliador: '.$avaliador->user->dado->name;

            return view("admin/avaliador/cadastro/registro", compact('avaliador', 'titulo'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AvaliadorUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'avaliador'];
        try{
            $user = User::find($id);
            $user->update([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeUpdate(json_encode($user, JSON_UNESCAPED_UNICODE), $user->id);

            $avaliador = $user->avaliador;
            $avaliador->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($avaliador, JSON_UNESCAPED_UNICODE), $user->id);

            $dado = $user->dado;
            $dado->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($dado, JSON_UNESCAPED_UNICODE), $user->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $user->id);

            Session::put('mensagem', "O avaliador ".$avaliador->user->dado->name." foi editado com sucesso!");

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
            $this->auditoriaController->storeDelete(json_encode($avaliador, JSON_UNESCAPED_UNICODE), $avaliador->id);
            Session::put('mensagem', "O avaliador ".$avaliador->name." foi deletado com sucesso!");

            $avaliadores = Avaliador::all();
            return redirect()->route("admin/avaliador/busca/buscar", compact('avaliadores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
