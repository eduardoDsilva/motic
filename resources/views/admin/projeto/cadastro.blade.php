@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('admin')}}" class="breadcrumb">Home</a>
    <a href="{{route ('admin.projeto')}}" class="breadcrumb">Projetos</a>
    <a href="{{route ('admin.projeto.create')}}" class="breadcrumb">Cadastro</a>
@endsection

@section('content')

    <section class="section container">
        <div class="card-panel">
            <div class="row">
                <h3 class="header center orange-text">Cadastrar projeto</h3>
                <div class="row">
                    <p class="header col s12 light">- Os campos com ' * ' são de preenchimento obrigatório.</p>
                    <p class="header col s12 light">- Deve-se selecionar exatamente 3 alunos.</p>
                </div>
                <div class="divider"></div>
                <article class="col s12">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.projeto.store') }}">

                        <h5>Dados básicos</h5>

                        <div class="row">
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">perm_identity</i>
                                <label for="nome">Título *</label>
                                <input type="text" name="titulo" required>
                            </div>
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">perm_identity</i>
                                <label for="nome">Área *</label>
                                <input type="text" name="area" required>
                            </div>
                        </div>

                        <div class='row'>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">assignment</i>
                                <textarea name="resumo" id="textarea1" data-length="240"
                                          class="materialize-textarea"></textarea>
                                <label for="textarea1">Resumo *</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">assignment</i>
                                <select multiple name="disciplina_id[]">
                                    <option value="" disabled selected>Selecione as disciplinas</option>
                                    @forelse ($disciplinas as $disciplina)
                                        <option value="{{$disciplina->id}}">{{$disciplina->name}}</option>
                                    @empty
                                        <option value="">Nenhuma disciplina cadastrada no sistema! Entre em contato com
                                            o administrador.
                                        </option>
                                    @endforelse
                                </select>
                                <label>Disciplinas *</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">assignment</i>
                                <select name="escola_id" id="escolaprojeto">
                                    <option disabled selected>Escola</option>
                                    @forelse ($escolas as $escola)
                                        <option value="{{$escola->id}}">{{$escola->name}}</option>
                                    @empty
                                        <option value="">Nenhuma escola cadastrada no sistema! Entre em contato com o
                                            administrador.
                                        </option>
                                    @endforelse
                                </select>
                                <label>Escola *</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">assignment</i>
                                <select name="categoria_id" id="categorias" required>
                                </select>
                                <label>Categoria *</label>
                            </div>

                            <div class="input-field col s12 m12 l6">
                                <i class="material-icons prefix">assignment</i>
                                <select multiple name="aluno_id[]" id="alunos" required>
                                </select>
                                <label>Alunos *</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">assignment</i>
                                <select name="orientador" id="orientador" required>
                                </select>
                                <label>Orientador *</label>
                            </div>

                            <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">assignment</i>
                                <select name="coorientador" id="coorientador" required>
                                </select>
                                <label>Coorientador</label>
                            </div>

                        </div>

                        {{csrf_field()}}

                        <div class="fixed-action-btn">
                            <button disabled id="envia" type="submit"
                                    class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger"
                                    data-position="top" data-delay="50" data-tooltip="Cadastrar"><i
                                        class="material-icons">add_circle_outline</i></button>
                        </div>

                    </form>

                </article>
            </div>
        </div>
    </section>

@endsection


























