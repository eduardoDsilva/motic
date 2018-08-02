@extends('_layouts._app')

@section('titulo','Motic Admin - Auditoria')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.auditoria')}}" class="breadcrumb">Auditoria</a>
    <a href="{{route ('admin.auditoria.usuarios')}}" class="breadcrumb">Usuários</a>
@endsection

@section('content')

@section('titulo-header', 'Login Usuários')

@section('conteudo-header', 'Essas são os registros de login dos usuários do sistema!')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="col s12 m4 l8">
            <form method="POST" enctype="multipart/form-data" action="{{ route("admin.auditoria.filtrar") }}">
                @includeIf('_layouts._auditoria._filtro-auditoria')
            </form>
        </div>
        <div class="row">
            @includeIf('_layouts._auditoria._tabela-auditoria-usuarios')
        </div>
    </div>
</div>

@endsection
