
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
            <h1 class="header center orange-text">Escolas</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são as escolas cadastradas no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">
        <table class="centered responsive-table highlight bordered">
            <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Usuário</th>
                        <th>Ações</th>
                    </tr>
                </thead>
            <tbody>
            @forelse ($escolas as $escola)
                    <tr>
                        <td>{{$escola->name}}</td>
                        <td>{{$escola->telefone}}</td>
                        <td>{{$escola->user->endereco->rua}}</td>
                        <td>{{$escola->user->email}}</td>
                        <td>{{$escola->user->username}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/escola/update/".$escola->id."/edita") }}"><i class="small material-icons">edit</i></a>
                            <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar" href="#modal1"> <i class="small material-icons">delete</i></a>
                        </td>
                    </tr>
                @empty
                        <tr>
                            <td>Nenhuma escola encontrada</td>
                            <td>Nenhuma escola encontrada</td>
                            <td>Nenhuma escola encontrada</td>
                            <td>Nenhuma escola encontrada</td>
                            <td>Nenhuma escola encontrada</td>
                            <td>Nenhuma escola encontrada</td>
                        </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Deletar</h4>
                <p>Você tem certeza que deseja deletar essa escola?</p>
            </div>
            <div class="modal-footer">
                <a href="{{ url("admin/escola/deletar/"."/excluir") }}" class="btn red">Sim</a>
            </div>
        </div>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Adicionar Escola" href="{{route ('admin/escola/cadastro/registro')}}"><i class="material-icons">add</i></a>
            </div>
            </div>

    </div>

@endsection
