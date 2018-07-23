<?php

namespace App\Http\Controllers\Admin\Avaliador;

use App\Avaliador;
use App\Dado;
use App\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Avaliador\AvaliadorCreateFormRequest;
use App\Http\Requests\Admin\Avaliador\AvaliadorUpdateFormRequest;
use App\Projeto;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAvaliadorController extends Controller
{

    private $avaliador;

    use RegistersUsers;

    public function __construct(Avaliador $avaliador)
    {
        $this->avaliador = $avaliador;
    }

    public function index()
    {
        $avaliadores = Avaliador::orderBy('name', 'asc')
            ->paginate(10);
        return view("admin.avaliador.home", compact('avaliadores'));
    }

    public function create()
    {
        $titulo = 'Cadastrar avaliador';
        return view('admin.avaliador.cadastro', compact('titulo'));
    }

    public function store(AvaliadorCreateFormRequest $request)
    {
        $dataForm = $request->all() + ['tipoUser' => 'avaliador'];
        try {
            $user = User::create([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);

            $avaliador = Avaliador::create($dataForm + ['user_id' => $user->id]);

            $endereco = Endereco::create($dataForm + ['user_id' => $user->id]);

            Session::put('mensagem', "O avaliador " . $avaliador->name . " foi salvo com sucesso!");

            return redirect()->route("admin.avaliador");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function show($id)
    {
        try {
            $avaliador = Avaliador::find($id);
            return view("admin.avaliador.show", compact('avaliador'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function showAvaliadorDisponivel()
    {
        try {
            $avaliadores = Avaliador::all()->where('projetos', '<', '3');
            return view("admin.avaliador.avaliador-disponivel", compact('avaliadores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $avaliador = Avaliador::find($id);
            $titulo = 'Editar avaliador: ' . $avaliador->name;

            return view("admin.avaliador.cadastro", compact('avaliador', 'titulo'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function update(AvaliadorUpdateFormRequest $request, $id)
    {
        $dataForm = $request->all() + ['tipoUser' => 'avaliador'];
        try {
            $user = User::find($id);
            $user->update([
                'name' => $dataForm['name'],
                'username' => $dataForm['username'],
                'email' => $dataForm['email'],
                'password' => bcrypt($dataForm['password']),
                'tipoUser' => $dataForm['tipoUser'],
            ]);

            $avaliador = $user->avaliador;
            $avaliador->update($dataForm);

            $endereco = $user->endereco;
            $endereco->update($dataForm);

            Session::put('mensagem', "O avaliador " . $avaliador->name . " foi editado com sucesso!");

            $avaliadores = $this->avaliador->all();
            return redirect()->route("admin.avaliador", compact('avaliadores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function filtrar(Request $request)
    {
        $dataForm = $request->all();
        try {
            $avaliadores = null;
            if ($dataForm['tipo'] == 'id') {
                $avaliadores = Avaliador::where('id', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'nome') {
                $filtro = '%' . $dataForm['search'] . '%';
                $avaliadores = Avaliador::where('name', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'cpf') {
                $avaliadores = Avaliador::where('cpf', '=', $dataForm['search'])->paginate(10);
            } else if ($dataForm['tipo'] == 'sexo') {
                $filtro = '%' . $dataForm['search'] . '%';
                $avaliadores = Avaliador::where('sexo', 'like', $filtro)->paginate(10);
            } else if ($dataForm['tipo'] == 'projetos') {
                $avaliadores = Avaliador::where('projetos', '=', $dataForm['search'])->paginate(10);
            }
            return view('admin.avaliador.home', compact('avaliadores'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            $avaliador = Avaliador::find($id);
            $avaliador->user()->delete($id);

            Session::put('mensagem', "O avaliador " . $avaliador->name . " foi deletado com sucesso!");
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function atribuir($id)
    {
        try {
            $projetos = Projeto::where('ano', '=', '2018')
                ->where('tipo', '=', 'normal')
                ->where('avaliadores', '<', '3')
                ->paginate(10);
            $avaliador = Avaliador::find($id);

            return view('admin.avaliador.atribuir', compact('projetos', 'avaliador'));
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function atribui(Request $request)
    {
        dd('batata');
        $dataForm = $request->all();
        try {
            $projeto = Projeto::find($dataForm['projeto_id']);
            $avaliador = Avaliador::find($dataForm['avaliador_id']);
            $avaliador->projeto()->attach($projeto->id);
            $qnt = $projeto->avaliadores + 1;
            $projeto->update(['avaliadores' => $qnt]);

            return view('admin.avaliador.atribuir');
        } catch (\Exception $e) {
            return "ERRO: " . $e->getMessage();
        }
    }

    public function vincularProjetos($id){
        $avaliador = Avaliador::find($id);
        $educacao_infantil = Projeto::all()
            ->where('categoria_id', '=', '1')
            ->where('avaliadores', '<', '3')
            ->where('tipo', '=', 'normal');
        $emef1 = Projeto::all()
            ->where('categoria_id', '=', '2')
            ->where('avaliadores', '<', '3')
            ->where('tipo', '=', 'normal');
        $emef2 = Projeto::all()
            ->where('categoria_id', '=', '3')
            ->where('avaliadores', '<', '3')
            ->where('tipo', '=', 'normal');
        $emef3 = Projeto::all()
            ->where('categoria_id', '=', '4')
            ->where('avaliadores', '<', '3')
            ->where('tipo', '=', 'normal');
        $eja = Projeto::all()
            ->where('categoria_id', '=', '5')
            ->where('avaliadores', '<', '3')
            ->where('tipo', '=', 'normal');
        return view('admin.avaliador.vincular-projetos', compact('avaliador', 'educacao_infantil', 'emef1', 'emef2', 'emef3', 'eja'));
    }

}
