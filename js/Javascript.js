//envia pedido via ajax para ControllerCadastrar.php
//e retorna resposta para login.php
$("#FormCadastro").on('submit',function(event){
    event.preventDefault();
    var Dados=$(this).serialize();

    $.ajax({
        url: 'Controllers/ControllerCadastrar.php',
        type: 'post',
        dataType: 'html',
        data: Dados,
        success: function (Dados) {
            $ ('.Resultado').show().html(Dados);
        }
    })
});

//envia pedido via ajax para ControllerLogin.php
//e retorna resposta para login.php
$("#FormLogin").on('submit',function(event){
    event.preventDefault();
    var Dados=$(this).serialize();

    $.ajax({
        url: 'Controllers/ControllerLogin.php',
        type: 'post',
        dataType: 'html',
        data: Dados,
        success: function (Dados) {
            $ ('.Resultado').show().html(Dados);
        }
    })
});

/* Confirmar antes de deletar os dados */
$('.Deletar').on('click',function(event){
    event.preventDefault();

    var Link=$(this).attr('href');

    if(confirm("Deseja mesmo apagar esse dado?")){
        window.location.href=Link;
    }else{
        return false;
    }
});