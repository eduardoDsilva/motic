@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>

    <section class="container">
        <div class="row">
            <h3 class="center-align">Cadastrar projeto</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/projeto/cadastro/registro') }}">

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Título</label>
                            <input type="text" name="titulo" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Área</label>
                            <input type="text" name="area" required>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment</i>
                            <textarea name="resumo" id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Resumo</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment</i>
                            <select multiple name="disciplina_id[]">
                                <option value="" disabled selected>Selecione as disciplinas</option>
                                @forelse ($disciplinas as $disciplina)
                                    <option value="{{$disciplina->id}}">{{$disciplina->name}}</option>
                                @empty
                                    <option value="">Nenhuma disciplina cadastrada no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Disciplinas</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select name="escola_id">
                                <option disabled selected>Selecione a escola</option>
                                @forelse ($escolas as $escola)
                                    <option value="{{$escola->id}}">{{$escola->name}}</option>
                                @empty
                                    <option value="">Nenhuma escola cadastrada no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Escola</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">school</i>
                            <select name="categoria_id" required>
                                <option value="" disabled selected>Categoria...</option>
                                @forelse($categorias as $categoria)
                                    <option value="{{$categoria->id}}" @if (isset($projeto) && in_array($categoria->id, $categoria_escola)) selected @endif>{{$categoria->categoria}}</option>
                                @empty
                                    <option value="">Nenhuma categoria cadastrada no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Categorias</label>
                        </div>
                    </div>

                    <p class="center-align">
                        <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar</button>
                    </p>

                </form>

            </article>
        </div>
    </section>

@endsection
