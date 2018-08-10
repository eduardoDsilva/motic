@extends('_layouts._app')

@section('titulo','MOTIC - Login')

@section('breadcrumb')
    <a href="{{{route ('home')}}}" class="breadcrumb">Home</a>
    <a href="{{{route ('login')}}}" class="breadcrumb">Login</a>
@endsection

@section('content')

    <div class="section container">
        <div class="card-panel">
            <h1 class="header center orange-text">Login</h1>
        </div>
    </div>

    <div class="container">
        <div class="section">
            <div class="col s12 z-depth-4 card-panel">
                @if(Session::get('mensagem'))
                    <div class="center-align">
                        <div class="chip red">
                            {{Session::get('mensagem')}}
                            <i class="close material-icons">close</i>
                        </div>
                    </div>
                    {{Session::forget('mensagem')}}
                @endif
                @includeIf('_layouts._mensagem-erro')
                <div class="row">
                    <form action="{{route('login')}}" method="post">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="email" required value="{{old('email')}}">
                            <label>Usuário/E-mail</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" name="password" required>
                            <label>Senha</label>
                        </div>
                        {{csrf_field()}}
                        <div class="row">
                            <div class="input-field col s12 m4 l4">
                                {!! Form::captcha() !!}
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <div class="row">

                                </div>
                                <div class="row">
                                    <p class="margin center-align medium-small"><a href="">Esqueceu sua senha?</a></p>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {!! Captcha::script() !!}
@endsection