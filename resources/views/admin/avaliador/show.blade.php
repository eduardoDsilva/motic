@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.avaliador')}}" class="breadcrumb">Avaliadores</a>
    <a href="" class="breadcrumb">{{$avaliador->name}}</a>
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
            <h1 class="header center orange-text">{{$avaliador->name}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados do avaliador {{$avaliador->name}}!</h5>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="col s12 m12 l12">
            <div class="card-panel hoverable">
                <div class="row">
                    <div class="card-content">
                        <ul class="collection with-header col s12 m12 l6">
                            <li class="collection-header"><h4 class="center-align">Dados pessoais</h4></li>
                            <li class="collection-item">Nome: {{$avaliador->name}}</li>
                            <li class="collection-item">Nascimento: {{$avaliador->nascimento}}</li>
                            <li class="collection-item">Sexo: {{$avaliador->sexo}}</li>
                            <li class="collection-item">E-mail: {{$avaliador->user->email}}</li>
                            <li class="collection-item">Telefone: {{$avaliador->telefone}}</li>
                            <li class="collection-item">Grau de Instrução: {{$avaliador->grauDeInstrucao}}</li>
                            <li class="collection-item">CPF: {{$avaliador->cpf}}</li>
                            <li class="collection-item">Usuário: {{$avaliador->user->username}}</li>
                        </ul>
                        <ul class="collection with-header col s12 m12 l6">
                            <li class="collection-header"><h4 class="center-align">Endereço</h4></li>
                            <li class="collection-item">
                                Rua: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->rua}}@endif</li>
                            <li class="collection-item">
                                Número: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->numero}}@endif</li>
                            <li class="collection-item">
                                Bairro: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->bairro}}@endif</li>
                            <li class="collection-item">
                                Complemento: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->complemento}}@endif</li>
                            <li class="collection-item">
                                CEP: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->cep}}@endif</li>
                            <li class="collection-item">
                                Cidade: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->cidade}}@endif</li>
                            <li class="collection-item">
                                Estado: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->estado}}@endif</li>
                            <li class="collection-item">
                                País: @if(isset($avaliador->user->endereco->id)){{$avaliador->user->endereco->pais}}@endif</li>
                        </ul>
                        <ul class="collection with-header col s12 m12 l12">
                            <li class="collection-header"><h4 class="center-align">Projetos</h4></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
