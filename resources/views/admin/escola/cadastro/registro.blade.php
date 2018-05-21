@extends('layout.site')

@section('titulo', $titulo)

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
            @if(isset($escola))
                 <form method="POST" enctype="multipart/form-data" action="{{ url("/admin/escola/".$escola->user->id) }}">
            @else
                 <form method="POST" enctype="multipart/form-data" action="{{ route('admin/escola/cadastro/registro') }}">
            @endif
                    {{csrf_field()}}
                    <h5>Dados básicos</h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="name">Nome da escola</label>
                            <input type="text" name="name" value="{{$escola->name or old('name')}}" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">school</i>
                            <select multiple name="categoria_id[]" required>
                                <option value="" disabled selected>Categoria...</option>
                                @foreach($categorias as $categoria)
                                 <option value="{{$categoria->id}}" @if (isset($escola) && in_array($categoria->id, $categoria_escola)) selected @endif>{{$categoria->categoria}}</option>
                                @endforeach
                            </select>
                            <label>Categorias</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{$escola->user->email or old('email')}}" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" maxlength="15" value="{{$escola->telefone or old('telefone')}}" required>
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" maxlength="8" value="{{$escola->user->endereco->cep or old('cep')}}" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" value="{{$escola->user->endereco->bairro or old('bairro')}}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" value="{{$escola->user->endereco->rua or old('rua')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" value="{{$escola->user->endereco->numero or old('numero')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento"  value="{{$escola->user->endereco->complemento or old('complemento')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" value="São Leopoldo" readonly="true" value="{{$escola->user->endereco->cidade or old('cidade')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado"  value="Rio Grande do Sul" readonly="true" value="{{$escola->user->endereco->estado or old('estado')}}" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" value="Brasil" readonly="true" value="{{$escola->user->endereco->pais or old('pais')}}" required>
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" value="{{$escola->user->username or old('usuario')}}" required>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <label for="password">Senha</label>
                            <input type="password" name="password" value="{{$avaliador->user->password or old('password')}}"required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" name="password_confirmation" value="{{$avaliador->user->password or old('password')}}"required>
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
