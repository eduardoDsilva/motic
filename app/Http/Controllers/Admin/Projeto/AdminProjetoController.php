<?php
/**
 * Created by PhpStorm.
 * User: eduardo.dgi
 * Date: 14/05/2018
 * Time: 09:49
 */

namespace App\Http\Controllers\Admin\Projeto;

use App\Categoria;
use App\Disciplina;
use App\Escola;
use App\Http\Controllers\Controller;
use App\Projeto;
use http\Env\Request;

class AdminProjetoController extends Controller
{

    private $request;

    public function index()
    {
        return view('admin/projeto/home');
    }

    public function __construct(AuditoriaController $auditoriaController)
    {
        $this->auditoriaController = $auditoriaController;
    }

    public function create(){
        $disciplinas = Disciplina::all();
        $escolas = Escola::all();
        $categorias = Categoria::all();

        return view("admin/projeto/cadastro/registro", compact('disciplinas', 'escolas', 'categorias'));
    }

    public function store(Request $request){
        $dataForm = $request->all();
        try{

            $projeto = Projeto::create($dataForm);
            $this->auditoriaController->store($projeto, $projeto->id);
            return view("admin/projeto/cadastro/equipe", compact('projeto'));
         //   Session::put('mensagem', "O projeto ".$projeto->titulo." foi cadastrado com sucesso!");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $escolas = Escola::all();
            return view("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id){
        try{
            $escola = Escola::find($id);
            $categorias = Categoria::all();
            $titulo = 'Editar avalaidor: '.$escola->name;
            foreach ($escola->categoria as $id){
                $categoria_escola[] = $id->pivot->categoria_id;
            }

            return view("admin/escola/cadastro/registro", compact('escola', 'categorias', 'titulo', 'categoria_escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(Request $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'escola'];
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


            $escola = $user->escola;
            $escola->update($dataForm);
            $this->auditoriaController->storeUpdate($escola, $escola->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate($endereco, $endereco->id);

            Session::put('mensagem', "A escola ".$escola->name." foi editada com sucesso!");

            return redirect()->route("admin/escola/busca/buscar");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            dd($id);
            $escola = User::find($id);
            $escola->delete($id);
            $this->auditoriaController->storeDelete($escola, $escola->id);

            $escolas = Escola::all();
            Session::put('mensagem', "A escola ".$escola->name." foi deletada com sucesso!");

            return redirect()->route("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}