@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/professor/home')}}}" class="breadcrumb">Professores</a>
    <a href="" class="breadcrumb">{{$professor->name}}</a>
@endsection

@section('content')

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
            <h1 class="header center orange-text">{{$professor->name}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados do professor {{$professor->name}}!</h5>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Professor</span>
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
                            <th>Matrícula</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$professor->id}}</td>
                                <td>{{$professor->name}}</td>
                                <td>{{$professor->user->username}}</td>
                                <td>{{$professor->nascimento}}</td>
                                <td>{{$professor->sexo}}</td>
                                <td>{{($professor->email == null ? "Professor sem e-mail" : $professor->email)}}</td>
                                <td>{{($professor->telefone == null ? "Professor sem telefone" : $professor->telefone)}}</td>
                                <td>{{$professor->grauDeInstrucao}}</td>
                                <td>{{$professor->cpf}}</td>
                                <td>{{$professor->matricula}}</td>
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
                                <td>{{($professor->user->endereco->rua == null ? "Professor sem rua" : $professor->user->endereco->rua)}}</td>
                                <td>{{($professor->user->endereco->numero == null ? "Professor sem número" : $professor->user->endereco->numero)}}</td>
                                <td>{{($professor->user->endereco->bairro == null ? "Professor sem bairro" : $professor->user->endereco->bairro)}}</td>
                                <td>{{($professor->user->endereco->complemento == null ? "Professor sem complemento" : $professor->user->endereco->omplemento)}}</td>
                                <td>{{($professor->user->endereco->cep == null ? "Professor sem CEP" : $professor->user->endereco->cep)}}</td>
                                <td>{{($professor->user->endereco->cidade == null ? "Professor sem cidade" : $professor->user->endereco->cidade)}}</td>
                                <td>{{($professor->user->endereco->estado == null ? "Professor sem estado" : $professor->user->endereco->estado)}}</td>
                                <td>{{($professor->user->endereco->pais == null ? "Professor sem país" : $professor->user->endereco->pais)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Escola</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Escola</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$professor->escola->id}}</td>
                            <td>{{$professor->escola->name}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="col s12 m8">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center-align">Projeto</span>
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
                        <tr>
                            <td>{{(isset($professor->projeto->id)  == null ? "Professor sem projeto" : $professor->projeto->id)}}</td>
                            <td>{{(isset($professor->projeto->titulo)  == null ? "Professor sem projeto" : $professor->projeto->titulo)}}</td>
                            <td>{{(isset($professor->projeto->area)  == null ? "Professor sem projeto" : $professor->projeto->area)}}</td>
                            <td>{{(isset($professor->projeto->estande) == null ? "Professor sem projeto" : $professor->projeto->estande)}}</td>
                            <td>{{(isset($professor->projeto->status)  == null ? "Professor sem projeto" : $professor->projeto->status)}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
