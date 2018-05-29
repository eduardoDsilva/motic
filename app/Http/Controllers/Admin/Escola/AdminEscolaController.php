<?php
namespace App\Http\Controllers\Admin\Escola;
use App\Categoria;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Escola\EscolaCreateFormRequest;
use App\Http\Requests\Admin\Escola\EscolaUpdateFormRequest;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class AdminEscolaController extends Controller
{

    private $escola;
    private $auditoriaController;

    use RegistersUsers;

    public function __construct(Escola $escola, AuditoriaController $auditoriaController)
    {
        $this->escola = $escola;
        $this->auditoriaController = $auditoriaController;
    }

    public function index()
    {
        $escolas = Escola::all();
        return view("admin/escola/home", compact('escolas'));
    }

    public function create(){
        $categorias = Categoria::all();
        $titulo = 'Cadastrar escola';

        return view('admin/escola/cadastro/registro', compact('categorias', 'titulo'));
    }

    public function store(EscolaCreateFormRequest $request){
        $dataForm = $request->all() + ['tipoUser' => 'escola'];
        $qntProjetos = $dataForm['categoria_id'];
        try{
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);
            $this->auditoriaController->storeCreate(json_encode($user, JSON_UNESCAPED_UNICODE), $user->id);

            $escola = Escola::create($dataForm + ['user_id' => $user->id] + ['projetos' => count($qntProjetos)]);
            foreach ($request->only(['categoria_id']) as $categoria){
                $escola->categoria()->attach($categoria);
            }
            $this->auditoriaController->storeCreate(json_encode($escola, JSON_UNESCAPED_UNICODE), $escola->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $this->auditoriaController->storeCreate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

            Session::put('mensagem', "A escola ".$escola->name." foi cadastrada com sucesso!");

            return redirect()->route("admin/escola/busca/buscar");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show(){
        try{
            $escolas = Escola::all();
            return view("admin/escola/home", compact('escolas'));
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

    public function update(EscolaUpdateFormRequest $request, $id){
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
            $this->auditoriaController->storeUpdate(json_encode($user, JSON_UNESCAPED_UNICODE), $user->id);

            $escola = $user->escola;
            $escola->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($escola, JSON_UNESCAPED_UNICODE), $escola->id);

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $this->auditoriaController->storeUpdate(json_encode($endereco, JSON_UNESCAPED_UNICODE), $endereco->id);

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
            $this->auditoriaController->storeDelete(json_encode($escola, JSON_UNESCAPED_UNICODE), $escola->id);

            $escolas = Escola::all();
            Session::put('mensagem', "A escola ".$escola->name." foi deletada com sucesso!");

            return redirect()->route("admin/escola/busca/buscar", compact('escolas'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}