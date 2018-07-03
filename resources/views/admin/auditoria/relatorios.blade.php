@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/auditoria/home')}}}" class="breadcrumb">Alunos</a>
    <a href="{{{route ('admin/auditoria/relatorios')}}}" class="breadcrumb">Relatórios</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Relatórios</h1>
            <div class="row center">
                <h5 class="header col s12 light">Esses são os relatórios disponíveis para realizar auditoria do sistema!</h5>
            </div>
        </div>
    </div>

    <div class="section container col s12 m4 l8">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card red darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros do sistema</span>
                            <p>Para gerar um relatório de todos os registros do sistema.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin/auditoria/relatorios/todos')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card green darken-3 hoverable">
                        <div class="card-content white-text">
                            <span class="card-title">Registros por usuário</span>
                            <p>Para gerar um relatório de todos os registros de cada usuário.</p>
                        </div>
                        <div class="card-action">
                            <a class="btn" href="{{route ('admin/aluno/relatorios/escolaExibe')}}">Gerar relatório</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card blue darken-3 hoverable">
                        <form class="" method="post" enctype="multipart/form-data"
                              action="{{route('admin/aluno/relatorios/alunoExibe')}}">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Registros por usuário individual</span>
                                <p>Para gerar um relatório de todos os registros de um único usuário.</p>
                                    <div class="input-field col s12">
                                        <select id='id' name="id" required>
                                            <option value="" disabled selected>Selecione um usuário</option>
                                        @forelse($usuarios as $usuario)
                                                <option value="{{$usuario->id}}">{{$usuario->username}} - {{$usuario->name}}</option>
                                            @empty
                                                <option value="" disabled selected>Nenhum usuário cadastrado no sistema</option>
                                            @endforelse
                                        </select>
                                        <label data-error="Selecione um usuário válido!" data-success="Ok" for="id">Usuário</label>
                                    </div>
                            <br><br><br>
                            </div>
                            <div class="card-action">
                                <button class="btn" type="submit">Gerar relatório</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card purple darken-3 hoverable">
                        <form class="" method="post" enctype="multipart/form-data"
                              action="">
                            {{csrf_field()}}
                            <div class="card-content white-text">
                                <span class="card-title">Registros utilizando o filtro de data</span>
                                <p>Para gerar um relatório de todos os registros de um único usuário.</p>
                                <div class="input-field col s6">
                                    <input type="text" class="datepicker" name="nascimento">
                                    <label for="nascimento">Data inicial</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" class="datepicker" name="nascimento">
                                    <label for="nascimento">Data final</label>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="card-action">
                        <button class="btn" type="submit">Gerar relatório</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection