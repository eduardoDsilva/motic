@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if(session('success'))
        {{session('success')}}
    @endif

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Avaliadores</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os avaliadores cadastrados no sistema!</h5>
            </div>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="col s12 m4 l8">

            <table>
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
                @forelse ($avaliadores as $avaliador)
                    <tbody>
                    <tr>
                        <td>{{$avaliador->user->dados_pessoais->name}}</td>
                        <td>{{$avaliador->user->username}}</td>
                        <td>{{$avaliador->user->email}}</td>
                        <td>{{$avaliador->user->dados_pessoais->telefone}}</td>
                        <td>{{$avaliador->user->endereco->rua}}</td>
                        <td>
                            <a class="btn deep-orange modal-trigger" href="{{ url("/admin/avaliador/update/".$avaliador->user->id."/editar") }}">Editar</a>
                            <a data-target="modal1" class="btn red modal-trigger" href="#modal1">Deletar</a>
                        </td>
                    </tr>
                    </tbody>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Deletar</h4>
                            <p>Você tem certeza que deseja deletar o avaliador?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url("/admin/avaliador/deletar/".$avaliador->user->id."/excluir") }}" class="btn red">Sim</a>
                        </div>
                    </div>
                @empty
                    <tbody>
                    <tr>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                    </tr>
                    </tbody>
                @endforelse
            </table>

            <br><br>

            <a class="btn blue" href="{{route ('admin/avaliador/cadastro/registro')}}">Adicionar Avaliador</a>
            <br><br>

            <br><br>




        </div>
    </div>

@endsection
