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
            <h3 class="header center orange-text">Cadastrar professor</h3>
            <div class="row">
                <p class="header col s12 light">- Os campos com ' * ' são de preenchimento obrigatório.</p>
            </div>
            <div class="divider"></div>
            <article class="col s12">
                <form @yield('form') >
                    {{csrf_field()}}

                    <h5>Dados básicos</h5>

                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input minlength="2" id="name" class="validate" type="text" name="name"
                                   value="{{$professor->name or old('name')}}" required>
                            <label data-error="Insira um nome válido!" data-success="Ok" for="name">Nome do professor
                                *</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">today</i>
                            <input type="text" class="datepicker" name="nascimento"
                                   value="{{$professor->nascimento or old('nascimento')}}" required>
                            <label for="nascimento">Nascimento *</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled>Sexo</option>
                                <option value="feminino"
                                        @if(isset($professor))@if($professor->sexo == 'feminino') selected @endif @endif>
                                    Feminino
                                </option>
                                <option value="masculino"
                                        @if (isset($professor)) @if($professor->sexo == 'masculino') selected @endif @endif>
                                    Masculino
                                </option>
                            </select>
                            <label>Sexo *</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">book</i>
                            <select name="grauDeInstrucao">
                                <option value="" disabled selected>Grau de Instrução</option>
                                <option value="Ensino Médio"
                                        @if (isset($professor) && $professor->grauDeInstrucao == 'Ensino Médio') selected @endif>
                                    Ensino Médio
                                </option>
                                <option value="Ensino Superior"
                                        @if (isset($professor) && $professor->grauDeInstrucao == 'Ensino Superior') selected @endif>
                                    Ensino Superior
                                </option>
                            </select>
                            <label>Grau de Instrição *</label>
                        </div>

                    </div>

                    <div class="row">

                        @yield('campo-escola')

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">confirmation_number</i>
                            <select name="camisa">
                                <option value="" disabled selected>Tamanho...</option>
                                <option value="PP" @if(isset($professor)) @if($professor->camisa == 'PP'))
                                        required @endif @endif>PP
                                </option>
                                <option value="P" @if(isset($professor)) @if($professor->camisa == 'P'))
                                        required @endif @endif>P
                                </option>
                                <option value="M" @if(isset($professor)) @if($professor->camisa == 'M'))
                                        required @endif @endif>M
                                </option>
                                <option value="G" @if(isset($professor)) @if($professor->camisa == 'G'))
                                        required @endif @endif>G
                                </option>
                                <option value="GG" @if(isset($professor)) @if($professor->camisa == 'GG'))
                                        required @endif @endif>GG
                                </option>
                            </select>
                            <label>Tamanho da camisa *</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input minlength="2" id="matricula" class="validate" type="text" name="matricula"
                                   value="{{$professor->matricula or old('matricula')}}" required>
                            <label data-error="Insira uma matricula válida!" data-success="Ok"
                                   for="matricula">Matrícula *</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">email</i>
                            <input minlength="10" class='validate' id='email' type="email" name="email"
                                   value="{{$professor->user->email or old('email')}}" required>
                            <label data-error="Insira um e-mail válido!" data-success="Ok"
                                   for="email">Email *</label>
                        </div>

                    </div>

                    <div class="row">

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">local_phone</i>
                            <label for="telefone">Telefone *</label>
                            <input type="text" name="telefone" data-length="16"
                                   value="{{$professor->telefone or old('telefone')}}" required>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <label for="cpf">CPF *</label>
                            <input type="number" name="cpf" data-length="11" value="{{$professor->cpf or old('cpf')}}"
                                   required>
                        </div>
                    </div>

                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">explore</i>
                            <input id="cep" class="validate tooltipped" data-position="top" data-delay="50"
                                   data-tooltip="Somente números e no máximo 8 números" type="number" name="cep"
                                   data-length="8"
                                   value="{{$professor->cep or old('cep')}}">
                            <label data-error="Insira um cep válido!" data-success="Ok"
                                   for="cep">CEP</label>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">business</i>
                            <input id="bairro" class="validate" type="text" name="bairro"
                                   value="{{$professor->bairro or old('bairro')}}">
                            <label data-error="Insira um bairro válido!" data-success="Ok"
                                   for="bairro">Bairro</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m12 l4">
                            <i class="material-icons prefix">home</i>
                            <input class="validate" id="rua" type="text" name="rua"
                                   value="{{$professor->rua or old('rua')}}">
                            <label data-error="Insira uma rua válida!" data-success="Ok"
                                   for="rua">Rua</label>
                        </div>

                        <div class="input-field col s12 m6 l4">
                            <i class="material-icons prefix">filter_1</i>
                            <input class="validate" id="numero" type="number" name="numero"
                                   value="{{$professor->numero or old('numero')}}">
                            <label data-error="Insir a um número válido!" data-success="Ok"
                                   for="numero">N°</label>
                        </div>

                        <div class="input-field col s12 m6 l4">
                            <i class="material-icons prefix">home</i>
                            <input type="text" name="complemento"
                                   value="{{$professor->complemento or old('complemento')}}">
                            <label for="complemento">Complemento</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m12 l4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="cidade" class="validate" type="text" name="cidade"
                                   value="São Leopoldo"
                                   value="{{$professor->cidade or old('cidade')}}">
                            <label data-error="Insira uma cidade válida!" data-success="Ok"
                                   for="cidade">Cidade</label>
                        </div>

                        <div class="input-field col s12 m6 l4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="estado" class="validate" type="text" name="estado"
                                   value="Rio Grande do Sul"
                                   value="{{$professor->estado or old('estado')}}">
                            <label data-error="Insira um estado válido!" data-success="Ok"
                                   for="estado">Estado</label>
                        </div>

                        <div class="input-field col s12 m6 l4">
                            <i class="material-icons prefix">location_city</i>
                            <input class="validate" id="pais" type="text" name="pais" value="Brasil"
                                   value="{{$professor->pais or old('pais')}}">
                            <label data-error="Insira um país válido!" data-success="Ok"
                                   for="pais">País</label>
                        </div>
                    </div>

                    <h5>Usuário</h5>

                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">person</i>
                        <label for="username">Usuário *</label>
                        <input type="text" name="username" value="{{$professor->user->username or old('username')}}"
                               required>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password">Senha *</label>
                            <input type="password" name="password" value="{{old('password')}}" required>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">lock</i>
                            <label for="password_confirmation">Confirmar senha *</label>
                            <input type="password" name="password_confirmation" value="{{old('password')}}" required>
                        </div>
                    </div>

                    <div class="fixed-action-btn">
                        <button type="submit"
                                class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger"
                                data-position="top" data-delay="50" data-tooltip="Cadastrar"><i class="material-icons">add_circle_outline</i>
                        </button>
                    </div>

                </form>

            </article>
        </div>
    </div>
</section>
