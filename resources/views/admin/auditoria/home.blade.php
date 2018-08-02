@extends('_layouts._app')

@section('titulo','Motic Admin - Auditoria')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.auditoria')}}" class="breadcrumb">Auditoria</a>
@endsection

@section('content')

    @section('titulo-header', 'Auditoria')

    @section('conteudo-header', 'Essas são os registros do sistema!')

    @includeIf('_layouts._sub-titulo')

    <div class="section container">
        <div class="card-panel">
            <div class="col s12 m4 l8">
                <form method="POST" enctype="multipart/form-data" action="{{ route("admin.auditoria.filtrar") }}">
                    @includeIf('_layouts._auditoria._filtro-auditoria')
                </form>
            </div>
            <div class="row">
                @includeIf('_layouts._auditoria._tabela-auditoria')
            </div>
        </div>
    </div>

@endsection
