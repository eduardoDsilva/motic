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

<div class="container section">
    <div class="card-panel">
        <div class="row">
            <h3 class="header center orange-text">Cadastrar aluno</h3>
            <div class="row">
                <p class="header col s12 light">- Os campos com ' * ' são de preenchimento obrigatório.</p>
            </div>
            <div class="divider"></div>

            <form @yield('form')>

                {{csrf_field()}}
                <div class="section">
                    <h5>Dados básicos</h5>
                    <div class="row">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input minlength="2" id="name" class="validate" type="text" name="name"
                                   value="{{$aluno->name or old('name')}}" required>
                            <label data-error="Insira um nome válido!" data-success="Ok" for="name">Nome do aluno *</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">today</i>
                            <input type="text" class="datepicker" name="nascimento"
                                   value="{{$aluno->nascimento or old('nascimento')}}">
                            <label for="nascimento">Nascimento</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">people</i>
                            <select name="sexo">
                                <option value="" disabled selected>Sexo</option>
                                <option value="feminino"
                                        @if(isset($aluno)) @if($aluno->sexo == 'feminino') selected @endif @endif>Feminino
                                </option>
                                <option value="masculino"
                                        @if(isset($aluno)) @if($aluno->sexo == 'masculino') selected @endif @endif>Masculino
                                </option>
                            </select>
                            <label>Sexo *</label>
                        </div>
                        @yield('campo-escola')

                    </div>

                    <div class="row">

                        @yield('campo-etapa')
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input minlength="2" id="turma" class="validate" type="text" name="turma"
                                   value="{{$aluno->turma or old('turma')}}" required>
                            <label data-error="Insira uma turma válida!" data-success="Ok" for="name">Turma *</label>
                        </div>

                    </div>
                    <div class="row">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">confirmation_number</i>
                            <select name="camisa">
                                <option value="" disabled selected>Tamanho...</option>
                                <option value="PP" @if(isset($aluno)) @if($aluno->camisa == 'PP')) required @endif @endif>PP</option>
                                <option value="P" @if(isset($aluno)) @if($aluno->camisa == 'P')) required @endif @endif>P</option>
                                <option value="M" @if(isset($aluno)) @if($aluno->camisa == 'M')) required @endif @endif>M</option>
                                <option value="G" @if(isset($aluno)) @if($aluno->camisa == 'G')) required @endif @endif>G</option>
                                <option value="GG" @if(isset($aluno)) @if($aluno->camisa == 'GG')) required @endif @endif>GG</option>
                            </select>
                            <label>Tamanho da camisa *</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input minlength="10" class='validate' id='email' type="email" name="email"
                                   value="{{$aluno->user->email or old('email')}}">
                            <label data-error="Insira um e-mail válido!" data-success="Ok"
                                   for="email">Email</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <input id="telefone" class="validate tooltipped" data-position="top" data-delay="50" data-tooltip="Somente números e no mínimo 8 números" type="number" name="telefone"
                                   data-length="16" value="{{$aluno->telefone or old('telefone')}}">
                            <label data-error="Insira um telefone válido!" data-success="Ok"
                                   for="telefone">Telefone</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="cpf" class="validate tooltipped" data-position="top" data-delay="50" data-tooltip="Somente números" type="number" name="cpf"
                                   data-length="11" value="{{$aluno->cpf or old('cpf')}}">
                            <label data-error="Insira um cpf válido!" data-success="Ok"
                                   for="cpf">CPF</label>
                        </div>

                    </div>
                </div>
                <div class="divider"></div>
                <div class="section">
                    <h5>Endereço</h5>

                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">explore</i>
                            <input id="cep" class="validate tooltipped" data-position="top" data-delay="50" data-tooltip="Somente números e no máximo 8 números" type="number" name="cep" data-length="8"
                                   value="{{$aluno->cep or old('cep')}}">
                            <label data-error="Insira um cep válido!" data-success="Ok"
                                   for="cep">CEP</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <input id="bairro" class="validate" type="text" name="bairro"
                                   value="{{$aluno->bairro or old('bairro')}}">
                            <label data-error="Insira um bairro válido!" data-success="Ok"
                                   for="bairro">Bairro</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <input class="validate" id="rua" type="text" name="rua"
                                   value="{{$aluno->rua or old('rua')}}">
                            <label data-error="Insira uma rua válida!" data-success="Ok"
                                   for="rua">Rua</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">filter_1</i>
                            <input class="validate" id="numero" type="number" name="numero"
                                   value="{{$aluno->numero or old('numero')}}">
                            <label data-error="Insir a um número válido!" data-success="Ok"
                                   for="numero">N°</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">home</i>
                            <input type="text" name="complemento"
                                   value="{{$aluno->complemento or old('complemento')}}">
                            <label for="complemento">Complemento</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="cidade" class="validate" type="text" name="cidade"
                                   value="São Leopoldo"
                                   value="{{$aluno->cidade or old('cidade')}}">
                            <label data-error="Insira uma cidade válida!" data-success="Ok"
                                   for="cidade">Cidade</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <input id="estado" class="validate" type="text" name="estado"
                                   value="Rio Grande do Sul"
                                   value="{{$aluno->estado or old('estado')}}">
                            <label data-error="Insira um estado válido!" data-success="Ok"
                                   for="estado">Estado</label>
                        </div>

                        <div class="input-field col s4">
                            <i class="material-icons prefix">location_city</i>
                            <input class="validate" id="pais" type="text" name="pais" value="Brasil"
                                   value="{{$aluno->pais or old('pais')}}">
                            <label data-error="Insira um país válido!" data-success="Ok"
                                   for="pais">País</label>
                        </div>
                    </div>
                </div>
                <div class="fixed-action-btn">
                    <button type="submit" class="btn-floating btn-large waves-effect waves-light red tooltipped  modal-trigger" data-position="top" data-delay="50" data-tooltip="Cadastrar"><i class="material-icons">add_circle_outline</i></button>
                </div>

            </form>
        </div>
    </div>
</div>