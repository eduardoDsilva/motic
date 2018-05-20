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
            <h3 class="center-align">Cadastrar escola</h3>
            <article class="col s12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin/escola/cadastro/registro') }}">

                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="name">Nome da escola</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">school</i>
                            <select multiple name="categoria_id[]">
                                <option value="" disabled selected>Categoria...</option>
                                <?php
                                foreach($categorias as $categoria){
                                 echo "<option value=".$categoria->id.">".$categoria->categoria."</option>";
                                }
                                ?>
                            </select>
                            <label>Categorias</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" required>
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <label for="numero">N°</label>
                            <input type="number" name="numero" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" required>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <label for="pais">País</label>
                            <input type="text" name="pais" required>
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <label for="usuario">Usuário</label>
                        <input type="text" name="username" required>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <label for="password">Senha</label>
                            <input type="password" name="password" required>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <label for="password_confirmation">Confirmar senha</label>
                            <input type="password" name="password_confirmation" required>
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
