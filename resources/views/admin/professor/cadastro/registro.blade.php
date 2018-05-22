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


    <section class="container">
        <div class="row">
            <h3 class="center-align">{{$titulo}}</h3>
            <article class="col s12">
                @if(isset($professor))
                    <form method="POST" enctype="multipart/form-data" action="{{ url("/admin/professor/".$professor->user->id) }}">
                @else
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin/professor/cadastro/registro') }}">
                @endif

                {{csrf_field()}}

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome</label>
                            <input type="text" name="name" value="{{$professor->user->dado->name or old('name')}}" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <label for="nascimento">Nascimento</label>
                            <input type="text" class="datepicker" name="nascimento" value="{{$professor->user->dado->nascimento or old('nascimento')}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled>Sexo</option>
                                <option value="masculino"  <?php if(isset($professor) && $professor->user->dado->sexo=='feminino'){ echo 'selected';} ?>>Feminino</option>
                                <option value="feminino"   <?php if(isset($professor) && $professor->user->dado->sexo=='masculino'){ echo 'selected';} ?>>Masculino</option>
                            </select>
                            <label>Sexo</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">book</i>
                            <select name="grauDeInstrucao">
                                <option value="" disabled selected>Grau de Instrução</option>
                                <option value="Ensino Fundamental"  <?php if(isset($professor) && $professor->user->dado->grauDeInstrucao=='Ensino Fundamental'){ echo 'selected';} ?>>Ensino Fundamental</option>
                                <option value="Ensino Médio"        <?php if(isset($professor) && $professor->user->dado->grauDeInstrucao=='Ensino Médio'){ echo 'selected';}?>>Ensino Médio</option>
                                <option value="Ensino Superior"     <?php if(isset($professor) && $professor->user->dado->grauDeInstrucao=='Ensino Superior'){ echo 'selected';}?>>Ensino Superior</option>
                            </select>
                            <label>Grau de Instrição</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">people</i>
                            <select name="escola_id">
                                <option value="" disabled selected>Selecione a escola</option>
                            @forelse ($escolas as $escola)
                                 <option value="{{$escola->id}}" @if ($escola->id == $professor->escola_id) selected @endif>{{$escola->name}}</option>
                            @empty
                                 <option value="">Nenhuma escola cadastrada no sistema! Entre em contato com o administrador.</option>
                            @endforelse
                            </select>
                            <label>Escola</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="matricula">Matrícula</label>
                            <input type="number" name="matricula" value="{{$professor->matricula or old('matricula')}}"  required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$professor->user->dado->email or old('email')}}" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" value="{{$professor->user->dado->telefone or old('telefone')}}" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF</label>
                            <input type="number" name="cpf" value="{{$professor->user->dado->cpf or old('cpf')}}" required>
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" value="{{$professor->user->endereco->cep or old('cep')}}" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" value="{{$professor->user->endereco->bairro or old('bairro')}}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" value="{{$professor->user->endereco->rua or old('rua')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" value="{{$professor->user->endereco->numero or old('numero')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento"value="{{$professor->user->endereco->complemento or old('complemento')}}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" value="São Leopoldo" value="{{$professor->user->endereco->cidade or old('cidade')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" value="Rio Grande do Sul" value="{{$professor->user->endereco->estado or old('estado')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" value="Brasil" value="{{$professor->user->endereco->pais or old('pais')}}" required>
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" value="{{$professor->user->username or old('username')}}"required>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Senha</label>
                            <input type="password" name="password" value="{{$professor->user->password or old('password')}}"required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" name="password_confirmation" value="{{$professor->user->password or old('password')}}"required>
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
