@extends('layout.site')

@section('titulo','Motic Admin')

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
            <h1 class="header center orange-text">Avaliadores</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os avaliadores cadastrados no sistema!</h5>
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
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($avaliadores as $avaliador)
                    <tr>
                        <td>{{$avaliador->user->name}}</td>
                        <td>{{$avaliador->user->username}}</td>
                        <td>{{$avaliador->user->email}}</td>
                        <td>{{$avaliador->telefone}}</td>
                        <td>{{$avaliador->user->endereco->rua}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/avaliador/update/".$avaliador->id."edita") }}"><i class="small material-icons">edit</i></a>
                            <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar"  href="#modal1"> <i class="small material-icons">delete</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Adicionar avaliador" href="{{route ('admin/avaliador/cadastro/registro')}}"><i class="material-icons">add</i></a>
            </div>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Deletar</h4>
                    <p>Você tem certeza que deseja deletar o avaliador?</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ url("/admin/avaliador/deletar/excluir") }}" class="btn red">Sim</a>
                </div>
            </div>

        </div>
        </div>
    </div>

@endsection
