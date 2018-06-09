@extends('layout.site')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/escola/home')}}}" class="breadcrumb">Escolas</a>
    <a href="" class="breadcrumb">{{$escola->name}}</a>
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
            <h1 class="header center orange-text">{{$escola->name}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados da escola {{$escola->name}}!</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Escola</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Nº max de projetos</th>
                            <th>Categorias</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$escola->id}}</td>
                                <td>{{$escola->name}}</td>
                                <td>{{$escola->user->username}}</td>
                                <td>{{$escola->user->email}}</td>
                                <td>{{$escola->telefone}}</td>
                                <td>{{$escola->projetos}}</td>
                                <td>@forelse($escola->categoria as $categoria){{$categoria->categoria.", "}}
                                @empty
                                    Categorias: Escola sem categorias! Contate o administrador do sistema!
                                @endforelse
                                <td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Endereço</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>Rua</th>
                            <th>Número</th>
                            <th>Bairro</th>
                            <th>CEP</th>
                            <th>Complemento</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>País</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$escola->user->endereco->rua}}</td>
                            <td>{{$escola->user->endereco->numero}}</td>
                            <td>{{$escola->user->endereco->bairro}}</td>
                            <td>{{$escola->user->endereco->cep}}</td>
                            <td>{{$escola->user->endereco->complemento}}</td>
                            <td>{{$escola->user->endereco->cidade}}</td>
                            <td>{{$escola->user->endereco->estado}}</td>
                            <td>{{$escola->user->endereco->pais}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Alunos</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Ano Letivo</th>
                            <th>Turma</th>
                            <th>Projeto</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->name}}</td>
                                <td>{{$aluno->anoLetivo}}</td>
                                <td>{{$aluno->turma}}</td>
                                <td>{{($aluno->projeto_id == null ? "Aluno sem projeto" : $aluno->projeto->titulo)}}</td>

                            </tr>
                        @empty
                            <tr>
                                <td>Nenhum aluno encontrado</td>
                                <td>Nenhum aluno encontrado</td>
                                <td>Nenhum aluno encontrado</td>
                                <td>Nenhum aluno encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$alunos->links()}}
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Professores</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>Projeto</th>
                            <th>Tipo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($professores as $professor)
                            <tr>
                                <td>{{$professor->name}}</td>
                                <td>{{$professor->user->username}}</td>
                                <td>{{($professor->projeto_id == null ? "Professor sem projeto" : $professor->projeto->titulo )}}</td>
                                <td>{{($professor->projeto_id == null ? "Professor sem projeto" : $professor->tipo )}}</td>
                            </tr>

                        @empty
                            <tr>
                                <td>Nenhum professor encontrado</td>
                                <td>Nenhum professor encontrado</td>
                                <td>Nenhum professor encontrado</td>
                                <td>Nenhum professor encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$professores->links()}}
                </div>
            </div>
        </div>
        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Projetos</span>
                    <table class="centered responsive-table highlight bordered">
                        <thead>
                        <tr>
                            <th>Título</th>
                            <th>Área</th>
                            <th>Status</th>
                            <th>Categoria</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($projetos as $projeto)
                            <tr>
                                <td>{{$projeto->titulo}}</td>
                                <td>{{$projeto->area}}</td>
                                <td>{{$projeto->status}}</td>
                                <td>{{$projeto->categoria->categoria}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>Nenhum projeto encontrado</td>
                                <td>Nenhum projeto encontrado</td>
                                <td>Nenhum projeto encontrado</td>
                                <td>Nenhum projeto encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$projetos->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
