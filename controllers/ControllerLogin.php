<?php
include("../Class/ClassCrud.php");
include("../Includes/variaveis.php");

$Crud=new ClassCrud();
// confere infos da tabela user
$BFetch=$Crud->selectDB(" id "," user","where email=?",array($email));
$Fetch=$BFetch->rowCount();
// se email ou senha vazios retorna aviso
// para preencher corretamente os campos
if ($email=="" || $senha==""){
    echo "Preencha corretamente os campos";
}else{
    if ($Fetch === 1){
        //passa senha para segurança md5
        $mdPass = md5($senha);
        $BFetch=$Crud->selectDB(" *"," user","where email=?",array($email));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        //se senha e mdpass sao iguais
        if($Fetch["senha"]===$mdPass){
            //inicia sessao criando global $_SESSION com nome e id
            session_start();
            $_SESSION["usuario"] = array($Fetch["nome"],$Fetch["id"]);
            if($_SESSION["usuario"]){
                //redireciona para index.php
                echo "<script>window.location = 'index.php'</script>";
            }
        }else{
            //mensagem de retorno para login.php
            echo"E-mail ou senha não coincidem";
        }
    }
    else
    {
        //mensagem de retorno para login.php
        echo "Email não existe!";
    }
}  