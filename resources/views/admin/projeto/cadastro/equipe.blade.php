@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    <a class="btn green" href="{{url()->previous()}}">Voltar</a>

    <section class="container">
        <div class="row">
            <h3 class="center-align">Cadastrar equipe do projeto {{$projeto->titulo}}</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data">

                {{csrf_field()}}
                    <h5>Orientador e Coorientador</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select id="userRequest_activity" name="orientador" required>
                                <option value="" disabled selected>Selecione o Orientador</option>
                                @forelse ($professores as $professor)
                                    <option value="{{$professor->id}}">{{$professor->user->dado->name}}</option>
                                @empty
                                    <option value="">Nenhum professor dessa escola cadastrado no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Orientador</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <select multiple id="userRequest_activity" name="coorientador">
                                <option value="" disabled selected>Selecione o Coorientador</option>
                                @forelse ($professores as $professor)
                                    <option value="{{$professor->id}}">{{$professor->user->dado->name}}</option>
                                @empty
                                    <option value="">Nenhum professor dessa escola cadastrado no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Coorientador</label>
                        </div>
                    </div>

                    <h5>Alunos</h5>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">assignment</i>
                        <select multiple name="escola" required>
                            <option value="" id="userRequest_activity" disabled selected>Selecione os alunos</option>
                            @forelse ($alunos as $aluno)
                                <option value="{{$aluno->id}}">{{$aluno->name}}</option>
                            @empty
                                <option value="">Nenhum aluno dessa escola cadastrado no sistema! Entre em contato com o administrador.</option>
                            @endforelse
                        </select>
                        <label>Alunos</label>
                    </div>

                    <p class="center-align">
                        <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>salvar</button>
                    </p>

                </form>

            </article>
        </div>
    </section>

@endsection
