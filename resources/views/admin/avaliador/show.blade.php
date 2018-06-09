@extends('layout.site')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/professor/home')}}}" class="breadcrumb">Avaliadores</a>
    <a href="" class="breadcrumb">{{$avaliador->name}}</a>
@endsection

@section('conteudo')

    @if(Session::get('mensagem'))
        <div class="center-align">
            <div class="chip green">
                {{Session::get('mensagem')}}
                <i class="close material-icons">close</i>
            </div>
        </div>
        {{Session::forget('mensagem')}}
    @endif

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">{{$avaliador->name}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados do avaliador {{$avaliador->name}}!</h5>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Avaliador</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>Nascimento</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Grau de Instrução</th>
                            <th>CPF</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$avaliador->id}}</td>
                                <td>{{$avaliador->name}}</td>
                                <td>{{$avaliador->user->username}}</td>
                                <td>{{$avaliador->nascimento}}</td>
                                <td>{{$avaliador->sexo}}</td>
                                <td>{{$avaliador->user->email}}</td>
                                <td>{{$avaliador->telefone}}</td>
                                <td>{{$avaliador->grauDeInstrucao}}</td>
                                <td>{{$avaliador->cpf}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Endereço</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>Rua</th>
                            <th>Número</th>
                            <th>Bairro</th>
                            <th>Complemento</th>
                            <th>CEP</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>País</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{($avaliador->user->endereco->rua == null ? "Professor sem rua" : $avaliador->user->endereco->rua)}}</td>
                                <td>{{($avaliador->user->endereco->numero == null ? "Professor sem número" : $avaliador->user->endereco->numero)}}</td>
                                <td>{{($avaliador->user->endereco->bairro == null ? "Professor sem bairro" : $avaliador->user->endereco->bairro)}}</td>
                                <td>{{($avaliador->user->endereco->complemento == null ? "Professor sem complemento" : $avaliador->user->endereco->omplemento)}}</td>
                                <td>{{($avaliador->user->endereco->cep == null ? "Professor sem CEP" : $avaliador->user->endereco->cep)}}</td>
                                <td>{{($avaliador->user->endereco->cidade == null ? "Professor sem cidade" : $avaliador->user->endereco->cidade)}}</td>
                                <td>{{($avaliador->user->endereco->estado == null ? "Professor sem estado" : $avaliador->user->endereco->estado)}}</td>
                                <td>{{($avaliador->user->endereco->pais == null ? "Professor sem país" : $avaliador->user->endereco->pais)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Projetos</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Projeto</th>
                                <th>Área</th>
                                <th>Estande</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($avaliador->projeto() as $projeto)
                            <tr>
                                <td>{{(isset($projeto->id)  == null ? "Avaliador sem projeto" : $projeto->id)}}</td>
                                <td>{{(isset($projeto->titulo)  == null ? "Avaliador sem projeto" : $projeto->titulo)}}</td>
                                <td>{{(isset($projeto->area)  == null ? "Avaliador sem projeto" : $projeto->area)}}</td>
                                <td>{{(isset($projeto->estande) == null ? "Avaliador sem projeto" : $projeto->estande)}}</td>
                                <td>{{(isset($projeto->status)  == null ? "Avaliador sem projeto" : $projeto->status)}}</td>
                            </tr>
                        </tbody>
                        @empty
                            <tr>
                                <td>Avaliador sem projeto</td>
                                <td>Avaliador sem projeto</td>
                                <td>Avaliador sem projeto</td>
                                <td>Avaliador sem projeto</td>
                                <td>Avaliador sem projeto</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
