@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    <section class="container">
        <div class="row">
            <h3 class="center-align">Cadastrar escola</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/user/salvar') }}">
                    {{ csrf_field() }}
                    <h5>Criar usuário da escola</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">perm_identity</i>
                        <label for="nome">Nome da escola</label>
                        <input type="text" name="name" required>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" required>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email">
                        <label>E-mail</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <label for="password">Senha</label>
                            <input type="text" name="password" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="text" name="password_confirmation" required>
                        </div>
                    </div>

                    <p class="center-align">
                        <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>próximo</button>
                    </p>

                </form>

            </article>
        </div>
    </section>

@endsection
