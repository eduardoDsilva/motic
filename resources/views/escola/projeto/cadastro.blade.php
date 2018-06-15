@extends('layout.site')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('escola/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('escola/projeto/home')}}}" class="breadcrumb">Projetos</a>
    <a href="{{{route ('escola/projeto/cadastro/registro')}}}" class="breadcrumb">Cadastro</a>
@endsection

@section('conteudo')

    <section class="section container">
        <div class="card-panel">
        <div class="row">
            <h3 class="center-align">Cadastrar projeto</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('escola/projeto/cadastro/registro') }}">

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

                        <div class="input-field col s12">
                            <i class="material-icons prefix">assignment</i>
                                <input type="text" name="escola_id" value="{{$escola->name or old('name')}}" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select id='categoria' name="categoria_id" required>
                                @forelse ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                @empty
                                    <option value="">Nenhuma categoria cadastrada no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Categoria</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select multiple name="aluno_id[]" id="alunos" required>
                            </select>
                            <label>Alunos</label>
                        </div>
                    </div>

                    <div class="row">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select name="orientador" id="orientador" required>
                                <option value="" disable selected>Escolha um orientador...</option>
                                @forelse ($professores as $professor)
                                    <option value="{{$professor->id}}">{{$professor->name}}</option>
                                @empty
                                    <option value="">Nenhum professor cadastrada no sistema.</option>
                                @endforelse
                            </select>
                            <label>Orientador</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select name="coorientador" id="coorientador">
                            <option value="" disable selected>Escolha um coorientador...</option>
                            @forelse ($professores as $professor)
                                    <option value="{{$professor->id}}">{{$professor->name}}</option>
                                @empty
                                    <option value="">Nenhum professor cadastrada no sistema.</option>
                                @endforelse
                            </select>
                            <label>Coorientador</label>
                        </div>

                    </div>

                    {{csrf_field()}}

                    <p class="center-align">
                        <button class="waves-effect waves-light btn" id="envia" disabled type="submit"><i class="material-icons right">send</i>salvar</button>
                    </p>

                </form>

            </article>
        </div>
        </div>
    </section>
@endsection


























