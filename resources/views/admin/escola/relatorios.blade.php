@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.escola')}}" class="breadcrumb">Escolas</a>
    <a href="{{route ('admin.escola.relatorios')}}" class="breadcrumb">Gerar relatórios</a>
@endsection

@section('content')

    @section('titulo-header', 'Relatórios escolas')

    @section('conteudo-header', 'Esses são os relatórios das escolas disponíveis no sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card small red darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title flow text">Todas escolas</span>
                            <p>Para gerar um relatório completo de todas escolas do sistema.</p>
                            <li>Dados da escola</li>
                            <li>Endereço da escola</li>
                            <li>Professores, alunos e projetos</li>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin.escola.relatorios.todas.escolas')}}">Gerar
                                relatório</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small pink darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title flow text">Alunos da escola</span>
                            <p>Para gerar um relatório de todos os alunos da escola.</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled href="">Gerar relatório</button>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small indigo darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title flow text">Escola específica</span>
                            <p>Para gerar um relatório com os dados de uma escola específica.</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled href="">Gerar relatório</button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small blue darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title flow text">Projetos da escola</span>
                            <p>Para gerar um relatório de todos os projetos da escola.</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled href="">Gerar relatório</button>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small green darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title flow text">Professores da escola</span>
                            <p>Para gerar um relatório de todos os professores da escola.</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled href="">Gerar relatório</button>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card small purple darken-4 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title flow text">Avaliadores da escola</span>
                            <p>Para gerar um relatório de todos os avaliadores vinculados à escola.</p>
                        </div>
                        <div class="card-action">
                            <button class="btn" disabled href="">Gerar relatório</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection