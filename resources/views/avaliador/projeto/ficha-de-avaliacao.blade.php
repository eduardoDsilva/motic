@extends('_layouts._app')

@section('titulo','Motic Avaliador')

@section('breadcrumb')
    <a href="{{route ('avaliador')}}" class="breadcrumb">Home</a>
    <a href="{{route ('avaliador.projeto')}}" class="breadcrumb">Projetos</a>
    <a href="" class="breadcrumb">Avaliação</a>
@endsection

@section('content')

    @if(Session::get('mensagem'))
        @include('_layouts._mensagem-erro')
    @endif

@section('titulo-header', 'Avaliação')

@section('conteudo-header', 'Esta é a página de availiação do projeto '.$projeto->titulo)

@includeIf('_layouts._sub-titulo')
<form>
    <div class="section container col s12 m6 l8">
        <div class="card-panel">
            <div class="row">
                <ul class="collection with-header col s12 m12 l12">
                    <li class="collection-header"><h4 class="center-align">Projeto</h4></li>
                    <li class="collection-item">Título: {{$projeto->titulo}}</li>
                    <li class="collection-item">Área: {{$projeto->area}}</li>
                    @if(Auth::user()->tipoUser == 'admin')
                        <li class="collection-item">Estande: {{$projeto->estande}}</li>
                    @endif
                    <li class="collection-item">Resumo: {{$projeto->resumo}}</li>
                    <li class="collection-item">Escola: {{$projeto->escola->name}}</li>
                    <li class="collection-item">Categoria: {{$projeto->categoria->categoria}}</li>
                </ul>
                <ul class="collection with-header col s12 m12 l6">
                    <li class="collection-header"><h4 class="center-align">Alunos</h4></li>
                    @foreach($projeto->aluno as $aluno)
                        <li class="collection-item">{{$aluno->name}}</li>
                    @endforeach
                </ul>
                <ul class="collection with-header col s12 m12 l6">
                    <li class="collection-header"><h4 class="center-align">Professores</h4></li>
                    @foreach($projeto->professor as $professor)
                        <li class="collection-item">{{$professor->name}} - {{$professor->tipo}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="row">
                <div class="divider"></div>

                <h3 class="center-align">Avaliação</h3>

                <div class="section">
                    <h5 class="center-align">Pensamento Cientifico (10 pontos)</h5>

                    <blockquote>
                        O trabalho apresenta as etapas do método científico: justificativa, problema, hipótese,
                        objetivos,
                        referencial teórico.
                        metodologia, resultados, análise de dados e conclusões?
                    </blockquote>
                    <div class="row">
                        <div class="input-field col s12">
                            <select>
                                @include('_layouts._avaliacao.select-avaliacao')
                            </select>
                            <label>Uso adequado da metodologia científica</label>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="section">
                    <h5 class="center-align">Relevância Científica e/ou Sociocultura (10 pontos)</h5>

                    <blockquote>
                        O tema do trabalho é relevante para a comunidade e os resultados e/ou conclusões contribuem para
                        o
                        seu
                        desenvolvimento e/ou de seus pesquisadores?
                    </blockquote>
                    <div class="row">
                        <div class="input-field col s12">
                            <select>
                                @include('_layouts._avaliacao.select-avaliacao')
                            </select>
                            <label>Relevância do projeto</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>

            <div class="section">
                <h5 class="center-align">Registro da pesquisa (20 pontos)</h5>

                <blockquote>
                    O trabalho tem caderno de campo (diário de bordo) e/ou outros registros, como pasta de documentos?
                    Esse(s)
                    material(is) evidenciam a coleta de dados ao longo da pesquisa?
                </blockquote>
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            @include('_layouts._avaliacao.select-avaliacao')
                        </select>
                        <label>Registros da realização da pesquisa</label>
                    </div>
                </div>
                <blockquote>
                    O resumo expressa adequadamente o trabalho desenvolvido, em linguagem apropriada, e está coerente
                    com a
                    pesquisa apresentada pelo projeto?
                </blockquote>
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            @include('_layouts._avaliacao.select-avaliacao')
                        </select>
                        <label>Clareza e adequação do resumo</label>
                    </div>
                </div>
            </div>
            <div class="divider"></div>

            <div class="section">
                <h5 class="center-align">Clareza e Habilidade (20 pontos)</h5>

                <blockquote>
                    Os/as alunos/as demonstram segurança e domínio do assunto, no manuseio dos equipamentos e/ou na
                    exposição dos cartazes e folhetos? Eles/as respondem adequadamente aos questionamentos feitos?
                </blockquote>
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            @include('_layouts._avaliacao.select-avaliacao')
                        </select>
                        <label>Desempenho na apresentação do projeto</label>
                    </div>
                </div>

                <blockquote>
                    Há relação adequada entre a apresentação oral e os registros de pesquisa?
                </blockquote>
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            @include('_layouts._avaliacao.select-avaliacao')
                        </select>
                        <label>Relação da apresentação oral com o projeto</label>
                    </div>
                </div>
            </div>
            <div class="divider"></div>

            <div class="section">
                <h5 class="center-align">Capacidade Criativa (10 pontos)</h5>

                <blockquote>
                    O estande do projeto encontra-se organizado e limpo? O trabalho exposto apresenta clareza nos textos
                    e
                    criatividade no seu planejamento e/ou execução?
                </blockquote>
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            @include('_layouts._avaliacao.select-avaliacao')
                        </select>
                        <label>Apresentação visual do estande do
                            projeto</label>
                    </div>
                </div>
            </div>
            <div class="center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</form>
@endsection