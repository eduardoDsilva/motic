<?php
namespace App\Http\Controllers\Admin\Escola;
use App\Aluno;
use App\Categoria;
use App\Endereco;
use App\Escola;
use App\Http\Controllers\Auditoria\AuditoriaController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Escola\EscolaCreateFormRequest;
use App\Http\Requests\Admin\Escola\EscolaUpdateFormRequest;
use App\Professor;
use App\Projeto;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
        $escolas = Escola::orderBy('name', 'asc')->paginate(10);
        return view("admin/escola/home", compact('escolas'));
    }

    public function create(){
        $categorias = Categoria::all();
        $titulo = 'Cadastrar escola';

        return view('admin/escola/cadastro', compact('categorias', 'titulo'));
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
            $texto = str_replace(",", ", ", json_encode($user, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $user->id);

            $escola = Escola::create($dataForm + ['user_id' => $user->id] + ['projetos' => count($qntProjetos)]);
            foreach ($request->only(['categoria_id']) as $categoria){
                $escola->categoria()->attach($categoria);
            }
            $texto = str_replace(",", ", ", json_encode($escola, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $escola->id);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeCreate($texto, $endereco->id);

            Session::put('mensagem', "A escola ".$escola->name." foi cadastrada com sucesso!");

            return redirect()->route("admin/escola/home");

        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id){
        try{
            $escola = Escola::find($id);
            $alunos = Aluno::where('escola_id', '=', $escola->id)->paginate(6);
            $professores = Professor::where('escola_id', '=', $escola->id)->paginate(6);
            $projetos = Projeto::where('escola_id', '=', $escola->id)->paginate(6);
            return view('admin/escola/show', compact('escola', 'alunos', 'professores', 'projetos'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request){
        $dataForm = $request->all();
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
            return view('admin/escola/home', compact('escolas'));
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
            return view("admin/escola/cadastro", compact('escola', 'categorias', 'titulo', 'categoria_escola'));
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(EscolaUpdateFormRequest $request, $id){
        $dataForm = $request->all() + ['tipoUser' => 'escola'];
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
            $this->auditoriaController->storeUpdate($texto, $user->id);

            $escola = $user->escola;
            $escola->update($dataForm + ['projetos' => count($qntProjetos)]);
            $texto = str_replace(",", ", ", json_encode($escola, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $escola->id);
            $escola = $user->escola;
            $escola->categoria()->detach();
            foreach ($request->only(['categoria_id']) as $categoria){
                $escola->categoria()->attach($categoria);
            }

            $endereco = $user->endereco;
            $endereco->update($dataForm);
            $texto = str_replace(",", ", ", json_encode($endereco, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeUpdate($texto, $endereco->id);

            Session::put('mensagem', "A escola ".$escola->name." foi editada com sucesso!");

            return redirect()->route("admin/escola/home");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id){
        try{
            $escola = Escola::find($id);
            $escola->user()->delete($id);
            $texto = str_replace(",", ", ", json_encode($escola, JSON_UNESCAPED_UNICODE));
            $this->auditoriaController->storeDelete($texto, $escola->id);

            Session::put('mensagem', "A escola ".$escola->name." foi deletada com sucesso!");
        }catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

}