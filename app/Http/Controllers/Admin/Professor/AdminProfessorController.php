<?php

namespace App\Http\Controllers\Admin\Professor;

use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Requests\Admin\Professor\AlunoCreateFormRequest;
use App\Http\Requests\Admin\Professor\AlunoUpdateFormRequest;
use App\professor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Session;

class AdminProfessorController extends Controller
{

    private $professor;
    private $auditoriaController;

    use RegistersUsers;

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
        $titulo = 'Cadastrar professor';

        return view('admin/professor/cadastro/registro', compact('escolas', 'titulo'));
    }

    public function store(AlunoCreateFormRequest $request){
        $dataForm = $request->all()+ ['tipoUser' => 'professor'];
        try{
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeCreate($user, $user->id);

            $professor = Professor::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($professor, $professor->id);

            $dado = Dado::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($dado, $dado->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($endereco, $endereco->id);

            Session::put('mensagem', "O professor ".$professor->user->dado->name." foi criado com sucesso!");

            return redirect()->route("admin/professor/busca/buscar");

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
            $escolas = Escola::all();
            $titulo = 'Editar professor: '.$professor->user->dado->name;

            return view("admin/professor/cadastro/registro", compact('professor', 'titulo', 'escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AlunoUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'professor'];
        try{
            $user = User::find($id);
            $user = $user->update([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
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

            Session::put('mensagem', "O professor ".$professor->user->dado->name." foi editado com sucesso!");

            return redirect()->route("admin/professor/busca/buscar");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $professor = User::find($id);
            $professor->delete($id);
            $this->auditoriaController->storeDelete($professor, $professor->id);

            $professores = Professor::all();
            return redirect()->route("admin/professor/busca/buscar", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}