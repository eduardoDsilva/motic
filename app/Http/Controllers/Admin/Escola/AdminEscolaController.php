<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Categoria;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Escola\EscolaFormRequest;
use App\User;

class AdminEscolaController extends Controller
{
    private $escola;

    private $auditoriaController;

    public function __construct(Escola $escola, AuditoriaController $auditoriaController)
    {
        $this->escola = $escola;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        return view('admin/escola/home');
    }

    public function create(){
        $categorias = Categoria::all();
        $titulo = 'Cadastrar escola';
        return view('admin/escola/cadastro/registro', compact('categorias', 'titulo'));
    }

    public function store(EscolaFormRequest $request){
        $dataForm = $request->all();
        try{
            $user = User::create($dataForm + ['tipoUser' => 'escola']);
            $this->auditoriaController->storeCreate($user, $user->id);

            $escola = Escola::create($dataForm + ['user_id' => $user->id]);
            foreach ($request->only(['categoria_id']) as $categoria){
                $escola->categoria()->attach($categoria);
            }
            $this->auditoriaController->storeCreate($escola, $escola->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate($endereco, $endereco->id);

            return redirect()
                ->route("admin/escola/home")
                ->with("success", "Escola ".$escola->name." adicionada com sucesso");
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
            $titulo = 'Editar escola :'.$escola->name;
            foreach ($escola->categoria as $id){
                $categoria_escola[] = $id->pivot->categoria_id;
            }
            return view("admin/escola/cadastro/registro", compact('escola', 'categorias', 'titulo', 'categoria_escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(EscolaFormRequest $request, $id){
        $dataForm = $request->all();
        try{
            $user = User::find($id);
            $user->update($dataForm + ['tipoUser' => 'escola']);

            $escola = $user->escola;
            $escola->update($dataForm);

            $endereco = $user->endereco;
            $endereco->update($dataForm);

            $escolas = $this->escola->all();
            return redirect()->route("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $escola = User::find($id);
            $escola->delete($id);

            $escolas = Escola::all();
            return redirect()->route("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}
