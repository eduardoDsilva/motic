@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.categoria')}}" class="breadcrumb">Categorias</a>
@endsection

@section('content')

@section('titulo-header', 'Categorias')

@section('conteudo-header', "Essas são as categorias cadastradas no sistema!")

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">

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
                <th>Categoria</th>
                <th>Descricao</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->categoria}}</td>
                    <td>{{$categoria->descricao}}</td>
                    <td>
                        <a class="modal-trigger tooltipped" data-position="top" data-delay="50"
                           data-tooltip="Editar" href="{{route ('admin.categoria.edit', $categoria->id)}}"><i class="small material-icons">edit</i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Nenhum registro encontrado</td>
                    <td>Nenhum registro encontrado</td>
                    <td>Nenhum registro encontrado</td>
                    <td>Nenhum registro encontrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a data-target="modal3" data-target="modal3"
               class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger"
               data-position="top" data-delay="50" data-tooltip="Adicionar categoria" href="#modal3"><i
                        class="material-icons">add</i></a>
        </div>

        <!-- Modal Structure -->
        <div id="modal3" class="modal">
            <form method="POST" enctype="multipart/form-data" action="{{route ('admin.categoria.store')}}">
                <div class="modal-content">
                    <h4>Adicionar categoria</h4>

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"/>

                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">book</i>
                            <label for="categoria">Categoria</label>
                            <input type="text" name="categoria" required>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">assignment</i>
                            <textarea name="descricao" data-length="240" id="textarea1"
                                      class="materialize-textarea"></textarea>
                            <label for="textarea1">Descrição</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="waves-effect waves-light btn" type="submit"><i
                                class="material-icons right">send</i>salvar
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>

@endsection
