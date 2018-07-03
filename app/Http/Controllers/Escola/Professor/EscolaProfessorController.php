<?php

namespace App\Http\Controllers\Escola\Professor;

use App\Dado;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Requests\Professor\ProfessorCreateFormRequest;
use App\Http\Requests\Professor\ProfessorUpdateFormRequest;
use App\Professor;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EscolaProfessorController extends Controller
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
        $professores = Professor::where('escola_id', '=', Auth::user()->escola->id)->orderBy('name', 'asc')->paginate(10);
        return view("escola/professor/home", compact('professores'));
    }

    public function create(){
        $escola = Escola::find(Auth::user()->escola->id);

        return view('escola/professor/cadastro', compact('escola'));
    }

    public function store(ProfessorCreateFormRequest $request){
        $dataForm = $request->all()+ ['tipoUser' => 'professor'] + ['escola_id' => Auth::user()->escola->id];
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

            $professor = Professor::create($dataForm + ['user_id' => $user->id]);
            $texto = str_replace(",", ", ", json_encode($professor, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $professor->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $endereco->id);

            Session::put('mensagem', "O professor ".$professor->name." foi criado com sucesso!");

            return redirect()->route("escola/professor/home");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id){
        try{
            $professor = Professor::find($id);
            return view("escola/professor/show", compact('professor'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $professor = Professor::find($id);
            $escola = Escola::find(Auth::user()->escola->id);
            $titulo = 'Editar professor: '.$professor->name;

            return view("escola/professor/cadastro", compact('professor', 'titulo', 'escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(ProfessorUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'professor'] + ['escola_id' => Auth::user()->escola->id];
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

            $professor = $user->professor;
            $professor->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($professor, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $professor->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $endereco->id);

            Session::put('mensagem', "O professor ".$professor->name." foi editado com sucesso!");

            return redirect()->route("escola/professor/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $professor = Professor::find($id);
            $professor->user()->delete($id);
            $texto = str_replace(",", ", ", json_encode($professor, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeDelete($texto, $professor->id);
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}