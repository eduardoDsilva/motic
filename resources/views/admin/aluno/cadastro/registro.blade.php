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
            <h3 class="center-align">Cadastrar Aluno</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/aluno/cadastro/registro') }}">

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <label for="nascimento">Nascimento</label>
                            <input type="text" class="datepicker" name="nascimento" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled selected>Sexo</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                            <label>Sexo</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">book</i>
                            <select name="grauDeInstrucao">
                                <option value="" disabled selected>Grau de Instrução</option>
                                <option value="Ensino Fundamental">Ensino Fundamental</option>
                                <option value="Ensino Médio">Ensino Médio</option>
                                <option value="Ensino Superior">Ensino Superior</option>
                            </select>
                            <label>Grau de Instrição</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="escola_id">
                                <option value="" disabled selected>Selecione a escola</option>
                            @forelse ($escolas as $escola)
                                    <option value="{{$escola->id}}">{{$escola->name}}</option>
                                @empty
                                    <option value="">Nenhuma escola cadastrada no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Escola</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="turma">Turma</label>
                            <input type="text" name="turma" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col s4">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email</label>
                            <input type="email" name="email">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF</label>
                            <input type="number" name="cpf">
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep">
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais">
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" required>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Senha</label>
                            <input type="password" name="password" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" name="password_confirmation" required>
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
