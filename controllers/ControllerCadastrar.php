<?php
include("../Class/ClassCrud.php");
include("../Includes/Variaveis.php");

$Crud=new ClassCrud();
//confere se email de usuario ja existe
$BFetch=$Crud->selectDB(" id "," user","where email=?",array($email));
$Fetch=$BFetch->rowCount();

//confere campos vazios
if ($nome==""|| $email=="" || $senha==""){
   echo "Preencha corretamente os campos";
}else{
    // se nao existir tabela a cria tranformando 
    //senha em md5 e demais infos de cadastro
    if ($Fetch === 0){
        $mdPass = md5($senha);
        $Crud->insertDB(
            "user",
            "?,?,?,?, NOW()",
            array(
                $id,
                $nome,
                $email,
                $mdPass,
            )
        );
        //captura id e nome do novo user e 
        //insere em $_SESSION id e nome do usuario
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        session_start();
            $_SESSION["usuario"] = array($Fetch["nome"],$Fetch["id"]);
            if($_SESSION["usuario"]){
                echo "<script>window.location = 'index.php'</script>";
            }
    }
    else
    {
        echo "Email já existe!";
    }
}
