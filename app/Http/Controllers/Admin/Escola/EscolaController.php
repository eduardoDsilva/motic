<?php

namespace App\Http\Controllers\Admin\Escola;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Usuario;
use App\Escola;
use App\Endereco;
use Illuminate\Support\Facades\DB;

class EscolaController extends Controller
{

    private $adminNomeController;
    private $adminUserController;
    private $adminEnderecoEscolaController;
    private $user;
    private $escola;
    private $endereco;

    public function __construct(AdminUserController $adminUserController, AdminNomeController $adminNomeController, AdminEnderecoEscolaController $adminEnderecoEscolaController)
    {
        $this->adminUserController = $adminUserController;
        $this->adminNomeController = $adminNomeController;
        $this->adminEnderecoEscolaController = $adminEnderecoEscolaController;
        $this->user = new User();
        $this->escola = new Escola();
        $this->endereco = new Endereco();
    }

    public function index(){
        return view('admin/escola/home');
    }

    public function paginaCadastrarEscola(){
        return view('admin/escola/cadastro/registro');
    }


    public function store(Request $req)
    {
        $request = $req->all() + ['tipoUser' => 'escola'];

        //cadastra o usuario da escola
        $idUser = $this->adminUserController->store($request);
        if(empty($idUser)) {
            return redirect()
                    ->back()
                    ->with('error', 'Falha ao inserir');
        }

        $request += ['user_id' => $idUser];

        //cadastra a escola em si
        $escola = $this->adminNomeController->store($request);
        if (!$escola){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }

        //cadastra o endereço da escola
        $create = $this->adminEnderecoEscolaController->store($request);
        if (!$create){
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
        }



        //se tudo for cadastrado
        return redirect()
            ->route('admin/escola/home')
            ->with('success', 'Escola cadastrada com sucesso!');

    }


    public function busca()
    {
        $escolas = Escola::all();
        return view('admin/escola/busca/buscar', compact('escolas'));

    }


}
