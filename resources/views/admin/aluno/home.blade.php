@extends('layout.site')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Alunos</a>
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
            <h1 class="header center orange-text">Alunos</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os alunos cadastrados no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">
        <div class="col s12 m4 l8">

            <table class="centered responsive-table highlight bordered">

                <form method="POST" enctype="multipart/form-data" action="{{ url("admin/escola/show") }}">
                    <div class="input-field">
                        <input id="search" type="search">
                        <label for="search"><i class="material-icons">search</i></label>
                    </div>
                    {{csrf_field()}}
                </form>

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ano Letivo</th>
                    <th>Turma</th>
                    <th>Escola</th>
                    <th>Projeto</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->id}}</td>
                        <td>{{$aluno->name}}</td>
                        <td>{{$aluno->anoLetivo}}</td>
                        <td>{{$aluno->turma}}</td>
                        <td>{{$aluno->escola->name}}</td>
                        <td>{{($aluno->projeto_id == null ? "Aluno sem projeto" : $aluno->projeto->titulo)}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/aluno/update/".$aluno->id."/edita") }}"><i class="small material-icons">edit</i></a>
                            <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar"  href="#modal1" data-id="{{$aluno->id}}" data-name="{{$aluno->name}}"> <i class="small material-icons">delete</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                        <td>Nenhum aluno encontrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Adicionar aluno" href="{{route ('admin/aluno/cadastro/registro')}}"><i class="material-icons">add</i></a>
            </div>

        </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Deletar</h4>
            <p>Você tem certeza que deseja deletar o aluno abaixo?</p>
                <div class="row">
                    <label for="id_delete">ID</label>
                    <div class="input-field col s12">
                        <input disabled class="validate" type="number" id="id_delete">
                    </div>
                </div>
                <div class="row">
                    <label for="name_delete">Nome do aluno</label>
                    <div class="input-field col s12">
                        <input disabled class="validate" type="text" id="name_delete">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <a class="btn red delete">Sim</a>
        </div>
    </div>

@endsection
