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
        $request = $request + ['user_id' => $this->adminUserController->store($request)];

        //cadastra a escola em si
        $idEscola = $this->adminNomeController->store($request);

        //cadastra o endereço da escola
        $idEndereco = $this->adminEnderecoEscolaController->store($request);

        $teste = DB::table('escolas')
            ->where('id', $idEscola)
            ->update(['endereco_id' => $idEndereco]);

        //dd($teste);

       // $pessoa->update($request->all());

       // Escola::where('id', $idEscola)->update($endereco_id	);

    }

}
