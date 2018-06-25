<?php

namespace App\Http\Controllers\Admin\Professor;

use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Requests\Professor\ProfessorCreateFormRequest;
use App\Http\Requests\Professor\ProfessorUpdateFormRequest;
use App\professor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
        $professores = Professor::orderBy('name', 'asc')->paginate(10);
        return view("admin/professor/home", compact('professores'));
    }

    public function create(){
        $escolas = Escola::all();
        $titulo = 'Cadastrar professor';

        return view('admin/professor/cadastro', compact('escolas', 'titulo'));
    }

    public function store(ProfessorCreateFormRequest $request){
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

            return redirect()->route("admin/professor/home");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id){
        try{
            $professor = Professor::find($id);
            return view("admin/professor/show", compact('professor'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request){
        $dataForm = $request->all();
        try{
            if($dataForm['tipo'] == 'id'){
                $professores = Professor::where('id','=',$dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'nome'){
                $filtro = '%'.$dataForm['search'].'%';
                $professores = Professor::where('name', 'like', $filtro)->paginate(10);
            }else if($dataForm['tipo'] == 'usuario'){
                $filtro = $dataForm['search'];
                $professores = [User::where('username', '=', $filtro)->first()->professor];
            }else if($dataForm['tipo'] == 'escola'){
                $filtro = '%'.$dataForm['search'].'%';
                $professores = [Escola::where('name', 'like', $filtro)->first()->escola];
            }else if($dataForm['tipo'] == 'email'){
                $professores = Professor::where('email', '=', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'nascimento'){
                $professores = Professor::where('nascimento', 'like', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'sexo'){
                $professores = Professor::where('sexo', 'like', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'cpf'){
                $professores = Professor::where('cpf', '=', $dataForm['search'])->paginate(10);
            }

            return view('admin/professor/home', compact('professores'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $professor = Professor::find($id);
            $escolas = Escola::all();
            $titulo = 'Editar professor: '.$professor->name;

            return view("admin/professor/cadastro", compact('professor', 'titulo', 'escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(ProfessorUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'professor'];
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

            $professor = $user->professor;
            $professor->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($professor, JSON_UNESCAPED_UNICODE), $professor->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

            Session::put('mensagem', "O professor ".$professor->name." foi editado com sucesso!");

            return redirect()->route("admin/professor/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $professor = Professor::find($id);
            $professor->user()->delete($id);
            $this->auditoriaController->storeDelete(json_encode($professor, JSON_UNESCAPED_UNICODE), $professor->id);
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}