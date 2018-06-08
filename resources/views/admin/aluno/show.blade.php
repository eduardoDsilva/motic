@extends('layout.site')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/aluno/home')}}}" class="breadcrumb">Alunos</a>
    <a href="" class="breadcrumb">{{$aluno->name}}</a>
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
            <h1 class="header center orange-text">{{$aluno->name}}</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são todos os dados do aluno {{$aluno->name}}!</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Aluno</span>
                    <p>ID: {{$aluno->id}}</p>
                    <p>Nome: {{$aluno->name}}</p>
                    <p>Ano letivo: {{$aluno->anoLetivo}}</p>
                    <p>Turma: {{$aluno->turma}}</p>
                    <p>Nascimento: {{$aluno->nascimento}}</p>
                    <p>Sexo: {{$aluno->sexo}}</p>
                    <p>E-mail: {{($aluno->email == null ? "Aluno sem e-mail" : $aluno->email)}}</p>
                    <p>Telefone: {{($aluno->telefone == null ? "Aluno sem telefone" : $aluno->telefone)}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Endereço</span>
                    <p>Rua: {{$aluno->rua}}</p>
                    <p>Número: {{$aluno->numero}}</p>
                    <p>Bairro: {{$aluno->bairro}}</p>
                    <p>Complemento: {{$aluno->complemento}}</p>
                    <p>CEP: {{$aluno->cep}}</p>
                    <p>Cidade: {{$aluno->cidade}}</p>
                    <p>Estado: {{$aluno->estado}}</p>
                    <p>País: {{$aluno->pais}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Escola</span>
                    <p>ID: {{$aluno->escola->id}}</p>
                    <p>Escola: {{$aluno->escola->name}}</p>
                    <p>Rua: {{$aluno->escola->user->endereco->rua}}</p>
                    <p>Bairro: {{$aluno->escola->user->endereco->bairro}}</p>
                    <p>Número: {{$aluno->escola->user->endereco->numero}}</p>
                    <p>Categoria: {{$aluno->escola->user->endereco->numero}}</p>
                    <p>Telefone: {{$aluno->escola->telefone}}</p>
                    <p>Número de projetos: {{$aluno->escola->projetos}}</p>
                </div>
            </div>
        </div>
        <div class="col s12 m12">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title">Projeto</span>
                    @if($aluno->projeto_id == null)
                        <p>O aluno ainda está sem projeto.</p>
                    @else
                        <p>Título do projeto:   {{$aluno->projeto->titulo}}</p>
                        <p>Área do projeto:     {{$aluno->projeto->area}}</p>
                        <p>Estande:             {{$aluno->projeto->estande}}</p>
                        <p>Status:              {{$aluno->projeto->status}}</p>
                        <p>Resumo:              {{$aluno->projeto->resumo}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
