@extends('_layouts._app')

@section('titulo','Motic Admin')

@section('breadcrumb')
    <a href="{{route ('escola')}}" class="breadcrumb">Home</a>
    <a href="{{route ('escola.config.alterar-senha')}}" class="breadcrumb">Alterar senha</a>
@endsection

@section('content')

@section('titulo-header', 'Alterar senha')

@section('conteudo-header', 'Aqui você pode alterar a senha da sua conta de escola.')

@includeIf('_layouts._sub-titulo')

<div class="section container">
    <div class="card-panel">
        @if(Session::get('mensagem'))
            @include('_layouts._mensagem-sucesso')
        @endif
        @includeIf('_layouts._mensagem-erro')
        <div class="col s12 m4 l8">

            <blockquote>Atenção! Para alterar a sua senha, você deve ter em mãos a senha atual. Caso não consiga acessar
                após mudar a senha, tente utilizar o mecanismo
                de
                'esqueci minha senha' na tela de login. Quaisquer dúvidas entre em contato com a gerencia da MOTIC.
            </blockquote>

            <form method="POST" enctype="multipart/form-data"
                  action="{{route ('escola.config.altera-senha')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">lock</i>
                        <input id="senha_atual" class="validate tooltipped" data-position="top" data-delay="50"
                               data-tooltip="Insira a senha atual" type="password"
                               name="senha_atual" required>
                        <label data-error="Insira uma senha válida!" data-success="Ok"
                               for="password">Senha atual *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" class="validate tooltipped" data-position="top" data-delay="50"
                               data-tooltip="Insira uma senha com no mínimo 6 caracteres" type="password"
                               name="password" required>
                        <label data-error="Insira uma senha válida!" data-success="Ok"
                               for="password">Nova senha *</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">lock</i>
                        <input class="validate tooltipped" data-position="top" data-delay="50"
                               data-tooltip="Confirme sua senha" id="password_confirmation" type="password"
                               name="password_confirmation" required>
                        <label data-error="Insira uma senha válida!" data-success="Ok"
                               for="password_confirmation">Confirmar nova senha *</label>
                    </div>
                </div>

                <button class="waves-effect waves-light btn" type="submit"><i
                            class="material-icons right">send</i>salvar
                </button>

            </form>

        </div>
    </div>
</div>

@endsection