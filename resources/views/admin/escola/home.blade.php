@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>
    @if(session('success'))
        <div class="center-align">
            <div class="chip green">
                {{session('success')}}
                <i class="close material-icons">close</i>
            </div>
        </div>
    @endif

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Escolas</h1>
            <div class="row center">
                <h5 class="header col s12 light">Bem vindo ao menu de escolas!</h5>
            </div>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="col s12 m4 l8">

            <div class="row">
                <a href="{{route ('admin/escola/cadastro/registro')}}">
                    <div class="col s12 m6">
                        <div class="card hoverable red darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">school</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Cadastrar escolas</span>

                                <p>Clique aqui para entrar nas opções da escola no sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{route ('admin/escola/busca/buscar')}}">
                    <div class="col s12 m6">
                        <div class="card hoverable blue darken-2">
                            <div class="card-content black-text center-align">
                                <i class="large material-icons">library_add</i>
                            </div>
                            <div class="card-action white-text">
                                <span class="card-title">Verificar escolas</span>

                                <p>Clique aqui para verificar as escolas cadastradas no sistema.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection