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
            <h3 class="center-align">Editar Avaliador</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ url("/admin/avaliador/".$avaliador->id) }}">

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome</label>
                            <input type="text" name="name" required value="{{$avaliador->user->dado->name}}">
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <label for="nascimento">Nascimento</label>
                            <input type="text" class="datepicker" name="nascimento" required value="{{$avaliador->user->dado->nascimento}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled>Sexo</option>
                                <option value="masculino"  <?php if($avaliador->user->dado->sexo=='feminino'){ echo 'selected';} ?>>Feminino</option>
                                <option value="feminino" <?php if($avaliador->user->dado->sexo=='masculino'){ echo 'selected';} ?>>Masculino</option>
                            </select>
                            <label>Sexo</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">book</i>
                            <select name="grauDeInstrucao">
                                <option value="" disabled>Grau de Instrução</option>
                                <option value="Ensino Fundamental" <?php if($avaliador->user->dado->grauDeInstrucao=='Ensino Fundamental'){ echo 'selected';} ?>>Ensino Fundamental</option>
                                <option value="Ensino Médio" <?php if($avaliador->user->dado->grauDeInstrucao=='Ensino Médio'){ echo 'selected';}?>>Ensino Médio</option>
                                <option value="Ensino Superior"  <?php if($avaliador->user->dado->grauDeInstrucao=='Ensino Superior'){ echo 'selected';}?>>Ensino Superior</option>
                            </select>
                            <label>Grau de Instrução</label>
                        </div>

                    </div>
                    <div class="row">

                        <div class="input-field col s4">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email</label>
                            <input type="email" name="email" required  value="{{$avaliador->user->email}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" required  value="{{$avaliador->user->dado->telefone}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF</label>
                            <input type="number" name="cpf" value="{{$avaliador->user->dado->cpf}}">
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" required  value="{{$avaliador->user->endereco->cep}}">
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" required  value="{{$avaliador->user->endereco->bairro}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" required value="{{$avaliador->user->endereco->rua}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" required value="{{$avaliador->user->endereco->numero}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" required value="{{$avaliador->user->endereco->complemento}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" required value="{{$avaliador->user->endereco->cidade}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" required value="{{$avaliador->user->endereco->estado}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" required value="{{$avaliador->user->endereco->pais}}">
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" required value="{{$avaliador->user->username}}">
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Senha</label>
                            <input type="password" name="password" required value="{{$avaliador->user->password}}">
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" name="password_confirmation" required value="{{$avaliador->user->password}}">
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
