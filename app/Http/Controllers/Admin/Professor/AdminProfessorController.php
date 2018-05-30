<?php

namespace App\Http\Controllers\Admin\Professor;

use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Requests\Admin\Professor\ProjetoCreateFormRequest;
use App\Http\Requests\Admin\Professor\ProfessorUpdateFormRequest;
use App\professor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
        $professores = Professor::all();
        return view("admin/professor/home", compact('professores'));
    }

    public function create(){
        $escolas = Escola::all();
        $titulo = 'Cadastrar professor';

        return view('admin/professor/cadastro/registro', compact('escolas', 'titulo'));
    }

    public function store(ProjetoCreateFormRequest $request){
        $dataForm = $request->all()+ ['tipoUser' => 'professor'];
        try{
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeCreate(json_encode($user, JSON_UNESCAPED_UNICODE), $user->id);

            $professor = Professor::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($professor, JSON_UNESCAPED_UNICODE), $professor->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

            Session::put('mensagem', "O professor ".$professor->name." foi criado com sucesso!");

            return redirect()->route("admin/professor/busca/buscar");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $professores = Professor::all();
            return view("admin/professor/home", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $professor = Professor::find($id);
            $escolas = Escola::all();
            $titulo = 'Editar professor: '.$professor->name;

            return view("admin/professor/cadastro/registro", compact('professor', 'titulo', 'escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(ProfessorUpdateFormRequest $request, $id){
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
            $this->auditoriaController->storeUpdate(json_encode($user, JSON_UNESCAPED_UNICODE), $user->id);

            $professor = $user->professor;
            $professor->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($professor, JSON_UNESCAPED_UNICODE), $professor->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

            Session::put('mensagem', "O professor ".$professor->name." foi editado com sucesso!");

            return redirect()->route("admin/professor/busca/buscar");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $professor = User::find($id);
            $professor->delete($id);
            $this->auditoriaController->storeDelete(json_encode($professor, JSON_UNESCAPED_UNICODE), $professor->id);

            $professores = Professor::all();
            return redirect()->route("admin/professor/busca/buscar", compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}