@extends('_layouts._app')

@section('titulo','Motic Escola')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', 'Escola')

@section('conteudo-header', 'Bem vindo, '.Auth::user()->name)

@includeIf('_layouts._sub-titulo')

<div class="section container col s12 m6 l8">
    <div class="card-panel">
        <div class="center-align">
            <div class="chip red">
                Atenção! O cadastro de projetos terminará no dia: {{date('d-m-Y', strtotime($dia->data_fim))}}
                <i class="close material-icons">close</i>
            </div>
        </div>
        <div class="row">
            <a href="{{route ('escola.projeto')}}">
                <div class="col s12 m6 l6">
                    <div class="card hoverable blue darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">library_add</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Projetos</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('escola.aluno')}}">
                <div class="col s12 m6 l6">
                    <div class="card hoverable purple darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">person</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Alunos</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('escola.professor')}}">
                <div class="col s12 m6 l6">
                    <div class="card hoverable green darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">person</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Professores</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route ('escola.suplente')}}">
                <div class="col s12 m6 l6">
                    <div class="card hoverable red darken-4">
                        <div class="card-content black-text center-align">
                            <i class="large material-icons">library_add</i>
                        </div>
                        <div class="card-action white-text">
                            <span class="card-title">Suplentes</span>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large blue darken-4 pulse tooltipped" data-position="top" data-delay="50"
       data-tooltip="Ajuda">
        <i class="large material-icons">help</i>
    </a>
    <ul>
        <li class="show-on-medium-and-down waves-effect waves-light"><a href="#!" class="tooltipped" data-position="top"
                                                                        data-delay="50"
                                                                        data-tooltip="Tutoriais">Tutoriais -></a></li>
        <li class="hide-on-med-and-down waves-effect waves-light"><a target="_blank" href="" class="tooltipped" data-position="top"
                                                                     data-delay="50"
                                                                     data-tooltip="Tutoriais">Tutoriais -></a></li>
        <li class="waves-effect waves-light"><a target="_blank" href="{{url('storage/tutoriais/Manual de utilização do sistema da MOTIC das funções de alunos.pdf')}}" class="tooltipped" data-position="top" data-delay="50"
                                                data-tooltip="Ajuda com alunos">Alunos</a></li>
        <li class="waves-effect waves-light"><a target="_blank" href="{{url('storage/tutoriais/Manual de utilização do sistema da MOTIC das funções de professores.pdf')}}" class="tooltipped" data-position="top" data-delay="50"
                                                data-tooltip="Ajuda com professores">Professores</a></li>
        <li class="waves-effect waves-light"><a target="_blank" href="{{url('storage/tutoriais/Manual de utilização do sistema da MOTIC das funções de projetos.pdf')}}" class="tooltipped" data-position="top" data-delay="50"
                                                data-tooltip="Ajuda com projetos">Projetos</a></li>
    </ul>
</div>

@endsection