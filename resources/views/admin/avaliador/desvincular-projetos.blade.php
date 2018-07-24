@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.avaliador')}}" class="breadcrumb">Avaliador</a>
    <a href="" class="breadcrumb">Desvincular avaliador</a>
@endsection

@section('content')

@section('titulo-header', 'Desvincular avaliador')

@section('conteudo-header', 'Esses são os projetos vinculados ao avaliador '.$avaliador->name)

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <div class="row">
            {{\Illuminate\Support\Facades\Session::put('id', $avaliador->id)}}
            <table class="centered responsive-table highlight bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Escola</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($avaliador->projeto as $projeto)
                    <tr>
                        <td>{{$projeto->id}}</td>
                        <td>{{$projeto->titulo}}</td>
                        <td>{{$projeto->escola->name}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                               data-tooltip="Desvincular" href="{{route ('admin.avaliador.desvincula-projetos', $projeto->id)}}"><i class="small material-icons">remove_circle</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
