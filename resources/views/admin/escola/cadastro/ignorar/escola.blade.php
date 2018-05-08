@extends('layout.site')

@section('titulo','Motic Admin')

@section('conteudo')

    <section class="container">
        <div class="row">
            <h3 class="center-align">Cadastrar escola</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/escola/salvar') }}">
                    {{ csrf_field() }}
                    <h5>Dados básicos</h5>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">perm_identity</i>
                            <label for="nome">Nome da escola</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input-field col s12">
                        <select name="tipo" class="browser-default">
                            <option value="" disabled selected>Tipo</option>
                            <option value="publica">Pública</option>
                            <option value="privada">Privada</option>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">local_phone</i>
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" required>
                    </div>

                    <p class="center-align">
                        <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>próximo</button>
                    </p>

                </form>

            </article>
        </div>
    </section>

@endsection
