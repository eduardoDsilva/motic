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
        $avaliadores = Avaliador::orderBy('name', 'asc')
            ->paginate(10);
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
            $texto = str_replace(",", ", ", json_encode($user, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $user->id);

            $avaliador = Avaliador::create($dataForm + ['user_id' => $user->id]);
            $texto = str_replace(",", ", ", json_encode($avaliador, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $avaliador->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $endereco->id);

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

    public function showAvaliadorDisponivel(){
        try{
            $avaliadores = Avaliador::all()->where('projetos','<','3');
            return view("admin/avaliador/avaliador-disponivel", compact('avaliadores'));
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
        dd('batata');
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
            $texto = str_replace(",", ", ", json_encode($user, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $user->id);

            $avaliador = $user->avaliador;
            $avaliador->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($avaliador, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $avaliador->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $endereco->id);

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
            $avaliador->user()->delete($id);
            $texto = str_replace(",", ", ", json_encode($avaliador, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeDelete($texto, $avaliador->id);

            Session::put('mensagem', "O avaliador ".$avaliador->name." foi deletado com sucesso!");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }
    
    public function atribuir($id){
        try{
            $projetos = Projeto::where('ano', '=', '2018')
                ->where('tipo', '=', 'normal')
                ->where('avaliadores', '<','3')
                ->paginate(10);
            $avaliador = Avaliador::find($id);

            return view('admin/avaliador/atribuir', compact('projetos', 'avaliador'));
        }catch (\Exception $e){
            return "ERRO: " . $e->getMessage();
        }
    }

    public function atribui(Request $request){
        dd('batata');
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
