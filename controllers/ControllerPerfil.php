<?php
include("../Includes/variaveisPF.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();
//confere se campos obrigatorios estão preenchidos
//se nao retona a pg com aviso de campos vazios
if($pNome=="" || $pEmail=="" || $pCpf=="" ||$D_nasc==""){
    $return= "Preencha corretamente os campos";
//confere se senha e confirmar estao corretos
//se nao retona a pg com aviso de senha e confirmar senha não batem
}elseif($pPass!=$pconfirmPass){
    $return= "Preencha senha e confirmar senha corretamente";
}else{
    //se campos preenchidos corretamente
    //confere se senha e confirmar estao vazias
    //se estiver faz update do nome e email do usuario
    if($pPass==false && $pconfirmPass==false){
        $Crud->updateDB(
            "user",
            "nome=?,email=?",
            "id=?",
            array(
                $pNome,$pEmail,
                $pId
            )
        );
    //confere se senha e confirmar existem
    //se existir faz update do nome, email e senha do usuario
    }elseif(isset($pPass)==isset($pconfirmPass)){
       //altera senha para segurança md5
        $mdPass = md5($pPass);
        $Crud->updateDB(
            "user",
            "nome=?,email=?,senha=?",
            "id=?",
            array(
                $pNome,$pEmail,$mdPass,
                $pId
            )
        );
    }

    //faz update das infos para tabela perfil
    $Crud->updateDB(
        "perfil",
        "cpf=?,d_nasc=?,profissao=?,tel=?",
        "id_user=?",
        array(
            $pCpf, $D_nasc, $pProff, $cTel,
            $pId
        )
    );
    //faz update das infos para tabela endereco
    $Crud->updateDB(
        "endereco",
        "endereco=?,num=?,bairro=?,cidade=?,estado=?,cep=?,complemento=?",
        "idUser=?",
        array(
            $pEnd, $pNum, $pBairro, $pCity, $pEstado, $pCep, $pComple,
            $pId
        )
    );
    //retorna info de att bem sucedida
    $return= "Atualização bem sucedida!";

}
//redireciona novamente para a pg perfil
header('location: ../perfil.php?return='.$return.'');
?>