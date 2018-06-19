<?php

namespace App\Http\Controllers\Admin\Avaliador;

use App\Avaliador;
use App\Dado;
use App\Endereco;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Avaliador\AvaliadorCreateFormRequest;
use App\Http\Requests\Admin\Avaliador\AvaliadorUpdateFormRequest;
use App\Projeto;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
        $avaliadores = Avaliador::all();
        return view("admin/avaliador/home", compact('avaliadores'));
    }

    public function create(){
        $titulo = 'Cadastrar avaliador';
        return view('admin/avaliador/cadastro', compact('titulo'));
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

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

            Session::put('mensagem', "O avaliador ".$avaliador->name." foi cadastrado com sucesso!");

            return redirect()->route("admin/avaliador/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id){
        try{
            $avaliador = Avaliador::find($id);
            return view("admin/avaliador/show", compact('avaliador'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $avaliador = Avaliador::find($id);
            $titulo = 'Editar avaliador: '.$avaliador->name;

            return view("admin/avaliador/cadastro", compact('avaliador', 'titulo'));
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

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $user->id);

            Session::put('mensagem', "O avaliador ".$avaliador->name." foi editado com sucesso!");

            $avaliadores = $this->avaliador->all();
            return redirect()->route("admin/avaliador/home", compact('avaliadores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $avaliador = Avaliador::find($id);
            $avaliador->delete($id);
            $this->auditoriaController->storeDelete(json_encode($avaliador, JSON_UNESCAPED_UNICODE), $avaliador->id);
            Session::put('mensagem', "O avaliador ".$avaliador->name." foi deletado com sucesso!");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
    
    public function atribuir(){
        try{
            $projetos = Projeto::where('ano', '=', '2018')->where('tipo', '=', 'normal')->where('avaliadores', '<','3')->paginate(10);
            $avaliadores = Avaliador::all();
            return view('admin/avaliador/atribuir', compact('projetos', 'avaliadores'));
        }catch (\Exception $e){
            return "ERRO: " . $e->getMessage();
        }
    }

    public function atribui(Request $request){
        $dataForm = $request->all();
        try{
            $projeto = Projeto::find($dataForm['projeto_id']);
            $avaliador = Avaliador::find($dataForm['avaliador_id']);

            $avaliador->projeto()->attach($projeto->id);
            $qnt = $projeto->avaliadores + 1;
            $projeto->update(['avaliadores' => $qnt]);

            return view('admin/avaliador/atribuir');
        }catch (\Exception $e){
            return "ERRO: " . $e->getMessage();
        }
    }

}
