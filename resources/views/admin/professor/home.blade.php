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
            <h1 class="header center orange-text">Professores</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os professores cadastrados no sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container">
        <div class="card-panel">
        <div class="col s12 m4 l8">

            <table class="centered responsive-table highlight bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Escola</th>
                    <th>Projeto</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($professores as $professor)
                    <tr>
                        <td>{{$professor->name}}</td>
                        <td>{{$professor->user->username}}</td>
                        <td>{{$professor->escola->name}}</td>
                        <td>{{($professor->projeto_id == null ? "Professor sem projeto" : $professor->projeto->titulo )}}</td>
                        <td>{{($professor->projeto_id == null ? "Professor sem projeto" : $professor->tipo )}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/professor/update/".$professor->id."edita") }}"><i class="small material-icons">edit</i></a>
                            <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar"  href="#modal1"> <i class="small material-icons">delete</i></a>
                        </td>
                    </tr>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Deletar</h4>
                            <p>Você tem certeza que deseja deletar o aluno?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url("/admin/professor/deletar/".$professor->user->id."/excluir") }}" class="btn red">Sim</a>
                        </div>
                    </div>
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
                <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Adicionar professor" href="{{route ('admin/professor/cadastro/registro')}}"><i class="material-icons">add</i></a>
            </div>

        </div>
        </div>
    </div>

@endsection
