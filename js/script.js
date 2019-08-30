var form = $("#cad_projeto");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
    }
});

$(function(){
            $('#areas_projeto_id').change(function(){
                if( $(this).val() ) {
                    $('#id_sub_categoria').hide();
                    $('.carregando').show();
                    $.getJSON('subcategoria.php?search=',{areas_projeto_id: $(this).val(), ajax: 'true'}, function(j){
                        var options = '<option value="">Escolha Subcategoria</option>'; 
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].id + '">' + j[i].nome_subarea + '</option>';
                        }   
                        $('#id_sub_categoria').html(options).show();
                        $('.carregando').hide();
                    });
                } else {
                    $('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
                }
            });
        });

function duplicarCampos(){
    var clone = document.getElementById('coautor').cloneNode(true);
    var coautor2 = document.getElementById('coautor2');
    coautor2.appendChild (clone);
    
    var camposClonados = clone.getElementsByTagName('input');
    
    for(i=0; i<camposClonados.length;i++){
        camposClonados[i].value = '';
    }
    
    
    
}

function removerCampos(id){
    var node1 = document.getElementById('coautor2');
    node1.removeChild(node1.childNodes[0]);
}

function limparRadios( radioname ) {

        for( i = 0; i < document.form1[radioname].length; i++ )
        
        document.form1[radioname][i].checked = false;
    
}