@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if(session('success'))
        {{session('success')}}
    @endif

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Alunos</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os alunos cadastrados no sistema!</h5>
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
                    <th>Escola</th>
                    <th>Equipe</th>
                    <th>Projeto</th>
                    <th>Ações</th>
                </tr>
                </thead>
                @forelse ($alunos as $aluno)
                    <tbody>
                    <tr>
                        <td>{{$aluno->user->dado->name}}</td>
                        <td>{{$aluno->user->username}}</td>
                        <td>{{$aluno->escola->name}}</td>
                        <td>{{( $aluno->equipe ? $aluno->equipe->id : "Aluno ainda sem equipe" )}}</td>
                        <td>{{( $aluno->equipe ? $aluno->equipe->projeto->id ? $aluno->equipe->projeto->titulo : "Aluno ainda sem projeto" : "Aluno ainda sem projeto" )}}</td>
                        <td>
                            <a class="btn deep-orange modal-trigger" href="{{ url("/admin/aluno/update/".$aluno->id."/editar") }}">Editar</a>
                            <a data-target="modal1" class="btn red modal-trigger" href="#modal1">Deletar</a>
                        </td>
                    </tr>
                    </tbody>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Deletar</h4>
                            <p>Você tem certeza que deseja deletar o aluno?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url("/admin/aluno/deletar/".$aluno->id."/excluir") }}" class="btn red">Sim</a>
                        </div>
                    </div>
                @empty
                    <tbody>
                    <tr>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Nenhum avaliador encontrado</td>
                        <td>Aluno sem nenhuma equipe</td>
                        <td>Aluno sem nenhum projeto</td>
                        <td>Nenhum avaliador encontrado</td>
                    </tr>
                    </tbody>
                @endforelse
            </table>

            <br><br>

            <a class="btn blue" href="{{route ('admin/aluno/cadastro/registro')}}">Adicionar Aluno</a>
            <br><br>

            <br><br>




        </div>
    </div>

@endsection
