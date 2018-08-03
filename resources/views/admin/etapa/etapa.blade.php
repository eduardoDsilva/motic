@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.etapa')}}" class="breadcrumb">Etapas</a>
@endsection

@section('content')

@section('titulo-header', 'Etapas')

@section('conteudo-header', "Essas são as etapas cadastradas no sistema!")

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        <form method="POST" enctype="multipart/form-data" action="{{route ('admin.etapa.store')}}">
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">perm_identity</i>
                    <input minlength="2" id="etapa" class="validate" type="text" name="etapa" required>
                    <label data-error="Insira uma etapa válida!" data-success="Ok" for="etapa">Etapa*</label>
                </div>
                <div class="input-field col s10 m5 l5">
                    <i class="material-icons prefix">people</i>
                    <select name="categoria_id">
                        <option value="" disabled selected>Selecione a categoria</option>
                        @forelse ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                        @empty
                            <option value="">Nenhuma categoria cadastrada no sistema!
                            </option>
                        @endforelse
                    </select>
                    <label>Categoria *</label>
                </div>
                {{csrf_field()}}
                <div class="input-field col s1 m1 l1">
                    <button type="submit" class="btn-floating tooltipped" data-position="top" data-delay="50"
                            data-tooltip="Cadastrar etapa"><i class="material-icons">add</i></button>
                </div>
            </div>
        </form>
        <div class="col s12 m4 l8">
            @if(Session::get('mensagem'))
                @include('_layouts._mensagem-sucesso')
            @endif
            @include('_layouts._mensagem-erro')
        </div>

        <table class="centered responsive-table highlight bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Etapa</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($etapas as $etapa)
                <tr>
                    <td>{{$etapa->id}}</td>
                    <td>{{$etapa->etapa}}</td>
                    <td>{{$etapa->categoria->categoria}}</td>
                    <td>
                        <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                           data-tooltip="Editar" href="{{route('admin.etapa.edit', $etapa->id)}}"><i class="small material-icons">edit</i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Nenhum registro encontrado</td>
                    <td>Nenhum registro encontrado</td>
                    <td>Nenhum registro encontrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>

    </div>
</div>
</div>

@endsection
