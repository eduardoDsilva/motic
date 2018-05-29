
@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if(session('success'))
        {{session('success')}}
    @endif

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>

    <div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Projetos</h1>
        <div class="row center">
            <h5 class="header col s12 light">Essas são os projetos cadastrados no sistema!</h5>
        </div>
        <br>
    </div>
</div>

<div class="container">
    <div class="col s12 m4 l8">

        <table class="centered responsive-table highlight bordered">
            <thead>
            <tr>
                <th>Título</th>
                <th>Área</th>
                <th>Estande</th>
                <th>Resumo</th>
                <th>Status</th>
                <th>Categoria</th>
                <th>Escola</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($projetos as $projeto)
                <tr>
                    <td>{{$projeto->titulo}}</td>
                    <td>{{$projeto->area}}</td>
                    <td>{{$projeto->estande == null ? 'Estande não definida' : $projeto->estande}}</td>
                    <td>{{$projeto->resumo}}</td>
                    <td>{{$projeto->status}}</td>
                    <td>{{$projeto->categoria->categoria}}</td>
                    <td>{{$projeto->escola->name}}</td>
                    <td>
                        <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar"  href="{{ url("/admin/escola/update/".$projeto."/editar") }}"><i class="small material-icons">edit</i></a>
                        <a data-target="modal1" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar"  href="#modal1"> <i class="small material-icons">delete</i></a>
                    </td>
                </tr>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Deletar</h4>
                        <p>Você tem certeza que deseja deletar essa escola?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url("admin/escola/deletar/".$projeto."/excluir") }}" class="btn red">Sim</a>
                    </div>
                </div>
            @empty
                <tr>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                    <td>Nenhuma escola encontrada</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <br><br>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Adicionar Escola" href="{{route ('admin/projeto/cadastro/registro')}}"><i class="material-icons">add</i></a>
        </div>

        <br><br>

        <br><br>

    </div>
</div>

@endsection
