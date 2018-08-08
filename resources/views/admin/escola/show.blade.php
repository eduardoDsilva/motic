@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.escola')}}" class="breadcrumb">Escolas</a>
    <a href="" class="breadcrumb">{{$escola->name}}</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">{{$escola->name}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados da escola {{$escola->name}}!</h5>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="col s12 m12 l12">
            <div class="card-panel hoverable">
                <div class="row">
                    <div class="card-content">
                        <ul class="collection with-header col s12 m12 l6">
                            <li class="collection-header"><h4 class="center-align">Dados da escola</h4></li>
                            <li class="collection-item">Nome: {{$escola->name}}</li>
                            <li class="collection-item">Usuário: {{$escola->user->username}}</li>
                            <li class="collection-item">E-mail: {{$escola->user->email}}</li>
                            <li class="collection-item">Telefone: {{$escola->telefone}}</li>
                            <li class="collection-item">N° de trabalhos: {{count($escola->projeto)}}</li>
                            <li class="collection-item">N° de alunos: {{count($escola->aluno)}}</li>
                            <li class="collection-item">N° de professores: {{count($escola->professor)}}</li>
                            <li class="collection-item">
                                Categorias: @forelse($escola->categoria as $categoria){{$categoria->categoria.", "}}
                                @empty
                                    Categorias: Escola sem categorias! Contate o administrador do sistema!
                                @endforelse
                            </li>
                        </ul>
                        <ul class="collection with-header col s12 m12 l6">
                            <li class="collection-header"><h4 class="center-align">Endereço</h4></li>
                            <li class="collection-item">Rua: {{$escola->user->endereco->rua}}</li>
                            <li class="collection-item">Número: {{$escola->user->endereco->numero}}</li>
                            <li class="collection-item">Bairro: {{$escola->user->endereco->bairro}}</li>
                            <li class="collection-item">Complemento: {{$escola->user->endereco->complemento}}</li>
                            <li class="collection-item">CEP: {{$escola->user->endereco->cep}}</li>
                            <li class="collection-item">Cidade: {{$escola->user->endereco->cidade}}</li>
                            <li class="collection-item">Estado: {{$escola->user->endereco->estado}}</li>
                            <li class="collection-item">País: {{$escola->user->endereco->pais}}</li>
                        </ul>
                        <ul class="collection with-header col s12 m12 l12">
                            <li class="collection-header"><h4 class="center-align">Projetos</h4></li>
                            @foreach($escola->projeto as $projeto)
                                <li class="collection-header"><h5 class="center-align">{{$projeto->titulo}}</h5></li>
                                @foreach($projeto->aluno as $alunos)
                                <li class="collection-item">Alunos: {{$alunos->name}}</li>
                                @endforeach
                                @foreach($projeto->professor as $professor)
                                <li class="collection-item">Professor: {{$professor->name}} - {{$professor->tipo}}</li>
                                @endforeach
                                <li class="collection-item">Categoria: {{$projeto->categoria->categoria}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
