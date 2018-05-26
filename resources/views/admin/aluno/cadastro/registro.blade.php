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
                    <form method="POST" enctype="multipart/form-data" action="{{ url("/admin/aluno/".$aluno->id) }}">
                @else
                    <form method="POST" enctype="multipart/form-data" action="{{ route('admin/aluno/cadastro/registro') }}">
                @endif
                    {{csrf_field()}}
                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome</label>
                            <input type="text" name="name" value="{{$aluno->name or old('name')}}" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <label for="nascimento">Nascimento</label>
                            <input type="text" class="datepicker" name="nascimento" value="{{$aluno->nascimento or old('nascimento')}}"  required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled>Sexo</option>
                                <option value="masculino"  <?php if(isset($aluno) && $aluno->sexo=='feminino'){ echo 'selected';} ?>>Feminino</option>
                                <option value="feminino"   <?php if(isset($aluno) && $aluno->sexo=='masculino'){ echo 'selected';} ?>>Masculino</option>
                            </select>
                            <label>Sexo</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">book</i>
                            <select name="anoLetivo">
                                <option value="" disabled selected>Ano Letivo</option>
                                <option value="Educação Infantil" <?php if(isset($aluno) && $aluno->anoLetivo=='Educação Infantil'){ echo 'selected';} ?>>Educação Infantil</option>
                                <option value="	1° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='1° ANO'){ echo 'selected';} ?>>1° ANO</option>
                                <option value="2° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='2° ANO'){ echo 'selected';} ?>>2° ANO</option>
                                <option value="3° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='3° ANO'){ echo 'selected';} ?>>3° ANO</option>
                                <option value="4° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='4° ANO'){ echo 'selected';} ?>>4° ANO</option>
                                <option value="5° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='5° ANO'){ echo 'selected';} ?>>5° ANO</option>
                                <option value="6° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='6° ANO'){ echo 'selected';} ?>>6° ANO</option>
                                <option value="7° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='7° ANO'){ echo 'selected';} ?>>7° ANO</option>
                                <option value="8° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='8° ANO'){ echo 'selected';} ?>>8° ANO</option>
                                <option value="9° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='9° ANO'){ echo 'selected';} ?>>9° ANO</option>
                                <option value="9° ANO" <?php if(isset($aluno) && $aluno->anoLetivo=='9° ANO'){ echo 'selected';} ?>>EJA</option>
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
                            <input type="email" name="email" value="{{$aluno->email or old('email')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" data-length="16" value="{{$aluno->telefone or old('telefone')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF</label>
                            <input type="number" name="cpf" data-length="11" value="{{$aluno->cpf or old('cpf')}}">
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" data-length="8" value="{{$aluno->cep or old('cep')}}">
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" value="{{$aluno->bairro or old('bairro')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" value="{{$aluno->rua or old('rua')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" value="{{$aluno->numero or old('numero')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" value="{{$aluno->complemento or old('complemento')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" value="São Leopoldo" value="{{$aluno->cidade or old('cidade')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" value="Rio Grande do Sul" value="{{$aluno->estado or old('estado')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" value="Brasil" value="{{$aluno->pais or old('pais')}}" required>
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
