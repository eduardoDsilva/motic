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
            <h3 class="center-align">Cadastrar Aluno</h3>
            <article class="col s12">
                @if(isset($aluno))
                    <form method="POST" enctype="multipart/form-data" action="{{ url("/admin/aluno/".$aluno->user->id) }}">
                @else
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin/aluno/cadastro/registro') }}">
                @endif
                    {{csrf_field()}}
                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome</label>
                            <input type="text" name="name" value="{{$aluno->user->dado->name or old('name')}}" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <label for="nascimento">Nascimento</label>
                            <input type="text" class="datepicker" name="nascimento" value="{{$aluno->user->dado->nascimento or old('nascimento')}}"  required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled>Sexo</option>
                                <option value="masculino"  <?php if(isset($aluno) && $aluno->user->dado->sexo=='feminino'){ echo 'selected';} ?>>Feminino</option>
                                <option value="feminino"   <?php if(isset($aluno) && $aluno->user->dado->sexo=='masculino'){ echo 'selected';} ?>>Masculino</option>
                            </select>
                            <label>Sexo</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">book</i>
                            <select name="anoLetivo">
                                <option value="" disabled selected>Ano Letivo</option>
                                <option value="1° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='1° ANO'){ echo 'selected';} ?>>1° ANO</option>
                                <option value="2° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='2° ANO'){ echo 'selected';} ?>>2° ANO</option>
                                <option value="3° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='3° ANO'){ echo 'selected';} ?>>3° ANO</option>
                                <option value="4° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='4° ANO'){ echo 'selected';} ?>>4° ANO</option>
                                <option value="5° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='5° ANO'){ echo 'selected';} ?>>5° ANO</option>
                                <option value="6° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='6° ANO'){ echo 'selected';} ?>>6° ANO</option>
                                <option value="7° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='7° ANO'){ echo 'selected';} ?>>7° ANO</option>
                                <option value="8° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='8° ANO'){ echo 'selected';} ?>>8° ANO</option>
                                <option value="9° ANO" <?php if(isset($aluno) && $aluno->user->dado->ANOLetivo=='9° ANO'){ echo 'selected';} ?>>9° ANO</option>
                            </select>
                            <label>Ano Letivo</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="escola_id">
                                <option value="" disabled selected>Selecione a escola</option>
                                @forelse ($escolas as $escola)
                                    <option value="{{$escola->id}}" @if (isset($aluno) && $escola->id == $aluno->escola_id) selected @endif>{{$escola->name}}</option>
                                @empty
                                    <option value="">Nenhuma escola cadastrada no sistema! Entre em contato com o administrador.</option>
                                @endforelse
                            </select>
                            <label>Escola</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="turma">Turma</label>
                            <input type="text" name="turma" value="{{$aluno->turma or old('turma')}}" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col s4">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$aluno->user->dado->email or old('email')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" data-length="16" value="{{$aluno->user->dado->telefone or old('telefone')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF</label>
                            <input type="number" name="cpf" data-length="11" value="{{$aluno->user->dado->cpf or old('cpf')}}">
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" data-length="8" value="{{$aluno->user->endereco->cep or old('cep')}}">
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" value="{{$aluno->user->endereco->bairro or old('bairro')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" value="{{$aluno->user->endereco->rua or old('rua')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" value="{{$aluno->user->endereco->numero or old('numero')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" value="{{$aluno->user->endereco->complemento or old('complemento')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" value="São Leopoldo" value="{{$aluno->user->endereco->cidade or old('cidade')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" value="Rio Grande do Sul" value="{{$aluno->user->endereco->estado or old('estado')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" value="Brasil" value="{{$aluno->user->endereco->pais or old('pais')}}" required>
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" value="{{$aluno->user->username or old('username')}}"required>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Senha</label>
                            <input type="password" name="password" value="{{old('password')}}"required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" name="password_confirmation" value="{{old('password')}}"required>
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
