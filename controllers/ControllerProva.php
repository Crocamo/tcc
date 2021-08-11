<?php
include "../Class/ClassCrud.php";
include "../Includes/VariaveisP.php";
include "../Includes/Variaveis.php";
include '../controllers/verifica_login.php';

//confere se respostas enviadas pro prova estao vazias
//não pode haver nenhuma resposta em branco
if ($resp[1] == "" || $resp[2] == "" || $resp[3] == "" || $resp[4] == "" || $resp[5] == "" || $resp[6] == "" || $resp[7] == "" || $resp[8] == "" || $resp[9] == "" || $resp[10] == "") {

    // se alguma $resp[] vazia redireciona
    // usuario para prova avisando dos campos em branco
    $ret = "Preencha corretamente os campos";
    echo "<script>window.location = '../prova.php?ret=" . $ret . "'</script>";
} else {
    //se $resp[] estiverem preenchidas
    $Crud = new ClassCrud();
    // consulta tabela resultado(respostas da prova)
    $BFetch = $Crud->selectDB(" *", " resultado", "where idResp=?", array("1"));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);

    // acertos
    $ac = 0;

    for ($i = 1; $i <= 10; $i++) {
        // $resp[] = (resposta do usuario)
        // $Fetch['resp'] = (resposta do gabarito em tabela resultado)
        // "for" confere todas as respostas se certas
        // incrementa 1 em $ac para cada acerto
        if ($resp[($i)] == $Fetch['resp' . $i]) {
            $ac++;
        }
    }
    // grava no DB o acerto ($ac) total do usuario
    $Crud->updateDB(
        "andamentoaula",
        "nota=?",
        "id_Aluno=?",
        array($ac, $prova)
    );

    // se acerto for igual ou menor que 8
    // redireciona usuario para aprovar.php com txt de retorno($ret)
    if ($ac >= 8) {
        $ret = "prova concluida você acertou " . $ac . ".";
        echo "<script>window.location = '../aprovar.php?ret=" . $ret . "'</script>";
   
    // se acerto for 7 ou menos redireciona usuario para
    // prova.php com txt de retorno($ret) 
    // com aviso de quantos acertos usuario teve
    } else {
        $ret = "tente novamente, você acertou " . $ac . ".";
        echo "<script>window.location = '../prova.php?ret=" . $ret . "'</script>";
    }
}
