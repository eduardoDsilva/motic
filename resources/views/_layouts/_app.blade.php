<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css">
    <link type="text/css" rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"
          media="screen,projection"/>

    @if(Auth::guest())

    @else

        <link rel="stylesheet" href="<?php echo asset('css/motic.css')?>" type="text/css">
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('titulo')</title>

</head>

<body class="grey lighten-2">

<header>
    @include('_layouts._nav')
</header>

<main>
    @yield('content')
</main>

<footer class="page-footer blue darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Prefeitura Municipal de São Leopoldo</h5>
                <p class="grey-text text-lighten-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua."
                </p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Sobre</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Desenvolvido por <a class="orange-text text-lighten-3" href="">Eduardo da Silva</a>
        </div>
    </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script src="<?php echo asset('js/projeto_ajax.js')?>" type="text/javascript"></script>

<script type="text/javascript">
    eval(function (p, a, c, k, e, r) {
        e = function (c) {
            return c.toString(a)
        };
        if (!''.replace(/^/, String)) {
            while (c--) r[e(c)] = k[c] || e(c);
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(b).9(\'d\',\'#f\',h(){$(\'#4\').1(\'\');$(\'#4\').2($(3).0(\'a\'));$(\'#5\').1(\'\');$(\'#5\').2($(3).0(\'c\'));$(\'#6\').1(\'\');$(\'#6\').2($(3).0(\'e\'));$(\'#7\').1(\'\');$(\'#7\').2($(3).0(\'g\'));$(\'#8\').1(\'\');$(\'#8\').2($(3).0(\'i\'))});', 19, 19, 'data|html|append|this|id_auditoria|tipo_auditoria|descricao_auditoria|usuario_auditoria|responsavel_auditoria|on|id|document|tipo|click|descricao|auditoria|user_id|function|nome_usuario'.split('|'), 0, {}))
</script>

<script type="text/javascript">
    eval(function (p, a, c, k, e, r) {
        e = function (c) {
            return c.toString(a)
        };
        if (!''.replace(/^/, String)) {
            while (c--) r[e(c)] = k[c] || e(c);
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(e).7(\'d\',\'.9-8\',5(){$(\'#6\').0($(2).1(\'a\'));$(\'#b\').0($(2).1(\'c\'));$(\'#4\').0($(2).1(\'4\'));$(\'#3\').0($(2).1(\'3\'))});', 15, 15, 'val|data|this|tipo|projeto|function|id_delete|on|trigger|modal|id|name_delete|name|click|document'.split('|'), 0, {}))
    $('.modal-footer').on('click', '.delete', function () {
        id = $('#id_delete').val();
        projeto = $('#projeto').val();
        tipo = $('#tipo').val();
        console.log(id);
        if (tipo == 'escola') {
            $.ajax({
                type: 'GET',
                url: 'escola/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'projeto') {
            $.ajax({
                type: 'GET',
                url: 'projeto/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'aluno') {
            $.ajax({
                type: 'GET',
                url: 'aluno/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'professor') {
            $.ajax({
                type: 'GET',
                url: 'professor/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'suplente') {
            $.ajax({
                type: 'GET',
                url: 'destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'avaliador') {
            $.ajax({
                type: 'GET',
                url: 'avaliador/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        } else if (tipo == 'disciplina') {
            $.ajax({
                type: 'GET',
                url: 'disciplina/destroy/' + id,
                success: function (data) {
                    location.reload();
                }
            });
        }
    });
</script>

<script type="text/javascript">


    $('.carousel.carousel-slider').carousel({fullWidth: true});


    eval(function (p, a, c, k, e, r) {
        e = function (c) {
            return c.toString(a)
        };
        if (!''.replace(/^/, String)) {
            while (c--) r[e(c)] = k[c] || e(c);
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(f).b(5(){$(\'#0\').g(5(a){c 0=$(\'#0\').d();6(0.7==3){$("#1").2("4",e)}8 6(0.7>3){$("#1").2("4",9);h("i j kál 3 0")}8{$("#1").2("4",9)}})});', 22, 22, 'alunos|envia|prop||disabled|function|if|length|else|true|event|ready|var|val|false|document|change|alert|Selecione|no|m|ximo'.split('|'), 0, {}))

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(1).2(3(){$(\'4.0\').0({5:6})});', 7, 7, 'tabs|document|ready|function|ul|swipeable|true'.split('|'), 0, {}))

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(1).2(3(){$(\'.0\').0()});', 4, 4, 'sidenav|document|ready|function'.split('|'), 0, {}))

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(0).1(2(){$(\'.3\').4({5:6})});', 7, 7, 'document|ready|function|tooltipped|tooltip|delay|50'.split('|'), 0, {}))

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(0).1(2(){$(\'3\').4()});', 5, 5, 'document|ready|function|select|material_select'.split('|'), 0, {}))

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(1).2(3(){$(\'.0\').0()});', 4, 4, 'modal|document|ready|function'.split('|'), 0, {}))

    @yield('modal')

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(".0-1").0();', 2, 2, 'dropdown|button'.split('|'), 0, {}))

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(".0-1").2();', 3, 3, 'button|collapse|sideNav'.split('|'), 0, {}))

    $('.datepicker').pickadate({
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        weekdaysLetter: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Pronto',
        labelMonthNext: 'Próximo mês',
        labelMonthPrev: 'Mês anterior',
        labelMonthSelect: 'Selecione um mês',
        labelYearSelect: 'Selecione um ano',
        selectMonths: true,
        selectYears: 100,
        max: undefined,
        format: 'dd-mm-yyyy'
    });

    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Limpar', // text for clear-button
        canceltext: 'Cancelar', // Text for cancel-button,
        container: undefined, // ex. 'body' will append picker to body
        autoclose: false, // automatic close timepicker
        ampmclickable: false, // make AM PM clickable
        aftershow: function () {
        } //Function for after opening timepicker
    });

    eval(function (p, a, c, k, e, r) {
        e = String;
        if (!''.replace(/^/, String)) {
            while (c--) r[c] = k[c] || c;
            k = [function (e) {
                return r[e]
            }];
            e = function () {
                return '\\w+'
            };
            c = 1
        }
        ;
        while (c--) if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('$(0).1(2(){$(\'.3-4\').5()});', 6, 6, 'document|ready|function|modal|trigger|leanModal'.split('|'), 0, {}))

</script>

</body>

</html>