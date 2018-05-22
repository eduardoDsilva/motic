@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if( isset($errors) && count($errors) > 0 )
        <div class="center-align">
            @foreach( $errors->all() as $error )
                <div class="chip red">
                    {{$error}}
                    <i class="close material-icons">close</i>
                </div>
            @endforeach
        </div>
    @endif

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Disciplinas</h1>
            <div class="row center">
                <h5 class="header col s12 light">Essas são as disciplinas cadastradas no sistema!</h5>
            </div>
            <br>
        </div>
    </div>

    <div class="container">
        <div class="col s12 m4 l8">

            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Ações</th>
                </tr>
                </thead>
                @forelse ($disciplinas as $disciplina)
                    <tbody>
                    <tr>
                        <td>{{$disciplina->id}}</td>
                        <td>{{$disciplina->name}}</td>
                        <td>{{$disciplina->descricao}}</td>
                        <td>
                            <a class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Editar" href="{{ url("/admin/disciplinas/update/".$disciplina->id."/editar") }}"><i class="small material-icons">edit</i></a>
                            <a {{session()->put('id', $disciplina->id)}}data-target="modal2" class="modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Deletar" href="#modal2"><i class="small material-icons">delete</i></a>
                        </td>
                    </tr>
                    </tbody>
                @empty
                    <tbody>
                    <tr>
                        <td>Nenhuma disciplina encontrada</td>
                        <td>Nenhuma disciplina encontrada</td>
                        <td>Nenhuma disciplina encontrada</td>
                        <td>Nenhuma disciplina encontrada</td>
                    </tr>
                    </tbody>
                @endforelse
            </table>

            <br><br>

            <!-- Modal Structure -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Deletar</h4>
                    <p>Você tem certeza que deseja deletar essa disciplina?</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ url("admin/disciplinas/deletar/".session()->get('id')."/excluir") }}" class="btn red">Sim</a>
                </div>
            </div>

            <a data-target="modal3"  class="btn blue modal-trigger" href="#modal3">Adicionar disciplina</a>

            <!-- Modal Structure -->
            <div id="modal3" class="modal">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/disciplinas/cadastro/registro') }}">
                    <div class="modal-content">
                        <h4>Adicionar disciplina</h4>

                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                        <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">book</i>
                                    <label for="nome">Nome</label>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">assignment</i>
                                    <textarea name="descricao" data-length="240" id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Descrição</label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar</button>
                    </div>
                </form>
            </div>

            <br><br>

            <br><br>

        </div>
    </div>

@endsection
