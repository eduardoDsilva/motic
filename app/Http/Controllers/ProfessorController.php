<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Professor;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfessorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $auditoriaController;

    use RegistersUsers;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function filtro($dataForm){
        try{
            if($dataForm['tipo'] == 'id'){
                $professores = Professor::where('id','=',$dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'nome'){
                $filtro = '%'.$dataForm['search'].'%';
                $professores = Professor::where('name', 'like', $filtro)->paginate(10);
            }else if($dataForm['tipo'] == 'usuario'){
                $filtro = '%'.$dataForm['search'].'%';
                $users = User::where('username', 'like', $filtro)->get();
                $array[] = null;
                foreach($users as $id){
                    $array[] = $id->id;
                }
                $professores = Professor::whereIn('user_id', $array)->paginate(10);
            }else if($dataForm['tipo'] == 'escola'){
                $filtro = '%'.$dataForm['search'].'%';
                $escola = Escola::where('name', 'like', $filtro)->get();
                $array[] = null;
                foreach($escola as $id){
                    $array[] = $id->id;
                }
                $professores = Professor::whereIn('escola_id', $array)->paginate(10);
            }else if($dataForm['tipo'] == 'email'){
                $professores = Professor::where('email', '=', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'nascimento'){
                $professores = Professor::where('nascimento', 'like', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'sexo'){
                $professores = Professor::where('sexo', 'like', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'cpf'){
                $professores = Professor::where('cpf', '=', $dataForm['search'])->paginate(10);
            }

            return $professores;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($dataForm){
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

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update($dataForm, $id){
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
