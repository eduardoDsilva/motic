<?php

namespace App\Http\Controllers\Admin\Aluno;

use App\Aluno;
use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Aluno\AlunoCreateFormRequest;
use App\Http\Requests\Admin\Aluno\AlunoUpdateFormRequest;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class AdminAlunoController extends Controller
{

    private $aluno;
    private $auditoriaController;
    use RegistersUsers;

    public function __construct(Aluno $aluno, AuditoriaController $auditoriaController)
    {
        $this->aluno = $aluno;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        return view('admin/aluno/home');
    }

    public function create(){
        $escolas = Escola::all();
        return view('admin/aluno/cadastro/registro', compact('escolas'));
    }

    public function store(AlunoCreateFormRequest $request){
        $dataForm = $request->all() + ['tipoUser' => 'aluno'];
        try{
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeCreate($user, $user->id);

            $aluno = Aluno::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($aluno, $aluno->id);

            $dado = Dado::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($dado, $dado->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($endereco, $endereco->id);

            Session::put('mensagem', "O aluno ".$aluno->user->dado->name." foi cadastrado com sucesso!");

            return redirect()->route("admin/aluno/busca/buscar");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $alunos = aluno::all();
            return view("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $aluno = Aluno::find($id);
            $titulo = "Editar aluno: ".$aluno->user->dado->name;
            $escolas = Escola::all();
            return view("admin/aluno/cadastro/registro", compact('aluno', 'titulo', 'escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AlunoUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'aluno'];
        try{
            $user = User::find($id);
            $user->update([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeUpdate($user, $user->id);

            $aluno = $user->aluno;
            $aluno->update($dataForm);
            $this->auditoriaController->storeUpdate($aluno, $aluno->id);

            $dado = $user->dado;
            $dado->update($dataForm);
            $this->auditoriaController->storeUpdate($dado, $dado->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate($endereco, $endereco->id);

            Session::put('mensagem', "O aluno ".$aluno->user->dado->name." foi editado com sucesso!");

            $alunos = $this->aluno->all();
            return redirect()->route("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $aluno = Aluno::find($id);
            $aluno->delete($id);
            $this->auditoriaController->storeDelete($aluno, $aluno->id);

            Session::put('mensagem', "O aluno ".$aluno->user->dado->name." foi deletado com sucesso!");

            $alunos = aluno::all();
            return redirect()->route("admin/aluno/busca/buscar", compact('alunos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}