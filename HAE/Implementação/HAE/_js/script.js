function limpar_campos(){
  $("#login").val("");
  $("#senha").val("");
}

function submete_form_contato(){
    
    $.ajax({
        url : "php/login.php",
        type : 'post',
        data : {
            login : $("#login").val(),
            senha : $("#senha").val(),
        },
        beforeSend : function(){}
    })
    .done(function(msg){
        alert("Bem vindo ao sistema !!!");
        limpar_campos();
    })
    .fail(function(jqXHR, textStatus){
        alert("Erro, digite senha e login novamente");
        limpar_campos();
    });

}