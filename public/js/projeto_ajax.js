$('#escolaAluno').on('change', function(e) {
    console.log(e);
    var escola_id = e.target.value;

    $.get('/json-ano?escola_id=' + escola_id, function (data) {
        console.log(data);
        $('#anoLetivo').empty()
        $('#anoLetivo').append('<option disabled selected>Ano letivo</option>');
        $('select').material_select();
        $.each(data, function (index, anoObj) {
            console.log(anoObj);
            $('#anoLetivo').append('<option value="' + anoObj + '">' + anoObj + '</option>');
            $('select').material_select();
        })
    });
})
$('#escola').on('change', function(e){
    console.log(e);
    var escola_id = e.target.value;
    $.get('/json-categorias?escola_id=' + escola_id,function(data) {
        console.log(data);
        $('#categorias').empty()
        $('#categorias').append('<option disabled selected>Categoria</option>');
        $('select').material_select();
        $.each(data, function(index, categoriasObj){
            console.log(categoriasObj);
            $('#categorias').append('<option value="'+ categoriasObj.id +'">'+ categoriasObj.categoria +'</option>');
            $('select').material_select();
        })
    });

    $.get('/json-professores?escola_id=' + escola_id,function(data) {
        console.log(data);
        $('#orientador').empty()
        $('#orientador').append('<option disabled selected>Orientador</option>');
        $('#coorientador').empty()
        $('#coorientador').append('<option disabled selected>Coorientador</option>');
        $('select').material_select();
        $.each(data, function(index, professoresObj){
            $('#orientador').append('<option value="'+ professoresObj.id +'">'+ professoresObj.name +'</option>');
            $('select').material_select();
        })
        $.each(data, function(index, professoresObj){
            $('#coorientador').append('<option value="'+ professoresObj.id +'">'+ professoresObj.name +'</option>');
            $('select').material_select();
        })
    });
});
$('#categorias').on('change', function(e){
    console.log(e);
    var categoria_id = e.target.value;
    $.get('/json-alunos?categoria_id=' + categoria_id,function(data) {
        console.log(data);
        $('#alunos').empty()
        $('#alunos').append('<option disabled selected>Selecione os alunos...</option>');
        $('select').material_select();
        $.each(data, function(index, alunosObj){
            $('#alunos').append('<option value="'+ alunosObj.id +'">'+ alunosObj.name +'</option>');
            $('select').material_select();
        })
    });
});
$('#categoria').on('change', function(e){
    console.log(e);
    var categoria_id = e.target.value;
    $.get('/json-aluno?categoria_id=' + categoria_id,function(data) {
        console.log(data);
        $('#alunos').empty()
        $('#alunos').append('<option disabled selected>Selecione os alunos...</option>');
        $('select').material_select();
        $.each(data, function(index, alunosObj){
            $('#alunos').append('<option value="'+ alunosObj.id +'">'+ alunosObj.name +'</option>');
            $('select').material_select();
        })
    });
});
