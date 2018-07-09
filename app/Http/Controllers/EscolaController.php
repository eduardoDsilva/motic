<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\User;
use Illuminate\Support\Facades\Session;

class EscolaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $auditoriaController;

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
        $this->middleware('auth');
        $this->middleware('auth.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function filtro($dataForm){
        try{
            if($dataForm['tipo'] == 'id'){
                $escolas = Escola::where('id', '=', $dataForm['search'])->paginate(10);
            }else if($dataForm['tipo'] == 'nome'){
                $filtro = '%'.$dataForm['search'].'%';
                $escolas = Escola::where('name', 'like', $filtro)->paginate(10);
            }else if($dataForm['tipo'] == 'usuario'){
                $filtro = $dataForm['search'];
                $escolas = [User::where('username', '=', $filtro)->first()->escola];
            }else if($dataForm['tipo'] == 'email'){
                $filtro = '%'.$dataForm['search'].'%';
                $escolas = Escola::where('email', 'like', $filtro)->paginate(10);
            }
            return $escolas;
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function store($dataForm){
        $qntProjetos = $dataForm['categoria_id'];
        try{
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $texto = str_replace(",", ", ", json_encode($user, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $user->id, 'escola');

            $escola = Escola::create($dataForm + ['user_id' => $user->id] + ['projetos' => count($qntProjetos)]);
            foreach ($dataForm['categoria_id'] as $categoria){
                $escola->categoria()->attach($categoria);
            }
            $texto = str_replace(",", ", ", json_encode($escola, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $escola->id, 'escola');

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $endereco->id, 'escola');

            Session::put('mensagem', "A escola ".$escola->name." foi cadastrada com sucesso!");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }

    }

    public function update($dataForm, $id){
        $qntProjetos = $dataForm['categoria_id'];
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
            $this->auditoriaController->storeUpdate($texto, $user->id, 'escola');

            $escola = $user->escola;
            $escola->update($dataForm + ['projetos' => count($qntProjetos)]);
            $texto = str_replace(",", ", ", json_encode($escola, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $escola->id, 'escola');

            $escola = $user->escola;
            $escola->categoria()->detach();
            foreach ($dataForm['categoria_id'] as $categoria){
                $escola->categoria()->attach($categoria);
            }

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $endereco->id, 'escola');

            Session::put('mensagem', "A escola ".$escola->name." foi editada com sucesso!");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $escola = Escola::find($id);
            $escola->user()->delete($id);
            $texto = str_replace(",", ", ", json_encode($escola, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeDelete($texto, $escola->id, 'escola');

            Session::put('mensagem', "A escola ".$escola->name." foi deletada com sucesso!");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
