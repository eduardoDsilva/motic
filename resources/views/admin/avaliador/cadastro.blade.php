@extends('layouts.app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{{route ('admin/home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('admin/avaliador/home')}}}" class="breadcrumb">Avaliador</a>
    @if(isset($avaliador))
        <a href="" class="breadcrumb">Editar</a>
    @else
        <a href="{{{route ('admin/avaliador/registro')}}}" class="breadcrumb">Cadastro</a>
    @endif
@endsection

@section('content')

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

    <section class="section container">
        <div class="card-panel">
        <div class="row">
            <h3 class="center-align">{{$titulo}}</h3>
            <article class="col s12">
                    <form method="POST" enctype="multipart/form-data" action="@if(isset($avaliador)) {{ url("/admin/avaliador/".$avaliador->user->id) }} @else {{ route('admin/avaliador/registro') }}"@endif>
                {{csrf_field()}}

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome *</label>
                            <input type="text" name="name" value="{{$avaliador->name or old('name')}}"required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <label for="nascimento">Nascimento</label>
                            <input type="text" class="datepicker" name="nascimento" value="{{$avaliador->nascimento or old('nascimento')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled selected>Sexo</option>
                                <option value="feminino"
                                        @if(isset($avaliador)) @if($avaliador->sexo == 'feminino') selected @endif @endif>Feminino
                                </option>
                                <option value="masculino"
                                        @if(isset($avaliador)) @if($avaliador->sexo == 'masculino') selected @endif @endif>Masculino
                                </option>
                            </select>
                            <label>Sexo *</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">book</i>
                            <select name="grauDeInstrucao">
                                <option value="" disabled selected>Grau de Instrução</option>
                                <option value="Técnico"        <?php if(isset($avaliador)  && $avaliador->grauDeInstrucao=='Técnico'){ echo 'selected';}?>>Técnico</option>
                                <option value="Graduado"     <?php if(isset($avaliador) && $avaliador->grauDeInstrucao=='Graduado'){ echo 'selected';}?>>Graduado</option>
                                <option value="Mestrado"     <?php if(isset($avaliador) && $avaliador->grauDeInstrucao=='Mestrado'){ echo 'selected';}?>>Mestrado</option>
                                <option value="Doutorado"     <?php if(isset($avaliador) && $avaliador->grauDeInstrucao=='Doutorado'){ echo 'selected';}?>>Doutorado</option>
                            </select>
                            <label>Grau de Instrição</label>
                        </div>

                    </div>
                    <div class="row">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email *</label>
                            <input type="email" name="email" value="{{$avaliador->user->email or old('email')}}"required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" data-length="16" value="{{$avaliador->telefone or old('telefone')}}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="instituicao">Instituição *</label>
                            <input type="text" name="instituicao" value="{{$avaliador->instituicao or old('instituicao')}}"required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF *</label>
                            <input type="number" name="cpf" data-length="11" value="{{$avaliador->cpf or old('cpf')}}"required>
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" data-length="8" value="{{$avaliador->user->endereco->cep or old('cep')}}">
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" value="{{$avaliador->user->endereco->bairro or old('bairro')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" value="{{$avaliador->user->endereco->rua or old('rua')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" value="{{$avaliador->user->endereco->numero or old('numero')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" value="{{$avaliador->user->endereco->complemento or old('complemento')}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" value="São Leopoldo" readonly="true" value="{{$avaliador->user->endereco->cidade or old('cidade')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" value="Rio Grande do Sul" readonly="true" value="{{$avaliador->user->endereco->estado or old('estado')}}">
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" value="Brasil" readonly="true" value="{{$avaliador->user->endereco->pais or old('pais')}}">
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário *</label>
                        <input type="text" name="username" value="{{$avaliador->user->username or old('username')}}"required>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Senha *</label>
                            <input type="password" name="password" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password_confirmation">Confirmar senha *</label>
                            <input type="password" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="fixed-action-btn">
                        <button type="submit" class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Cadastrar"><i class="material-icons">add_circle_outline</i></button>
                    </div>

                </form>

            </article>
        </div>
        </div>
    </section>

@endsection
