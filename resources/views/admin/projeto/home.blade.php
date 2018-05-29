@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Administrador</h1>
        <div class="row center">
            <h5 class="header col s12 light">Bem vindo, {{ Auth::user()->name }}!</h5>
        </div>
        <br>

    </div>
</div>

<div class="container">
    <div class="col s12 m4 l8">

        <div class="row">
            <a href="{{route ('admin/projeto/cadastro/registro')}}">
                <div class="col s12 m6">
                    <div class="card red darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">border_color</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Cadastrar projeto</span>

                            <p>Clique aqui para cadastrar um projeto no sistema.</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route ('admin/projeto/busca/buscar')}}">
                <div class="col s12 m6">
                    <div class="card blue darken-2">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">bookmark_border</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Listar projetos</span>

                            <p>Clique aqui para listar os projetos.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection

