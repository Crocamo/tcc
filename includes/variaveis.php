<?php
//faz tratamentos de infos enviadas via POST ou GET
//e sao encapsuladas em suas devidas variaveis
if(isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['Acao'])){ $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }
if(isset($_POST['id'])){ $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['id'])){ $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $id=0; }
if(isset($_POST['nome'])){ $nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['nome'])){ $nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $nome=""; }
if(isset($_POST['email'])){ $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['email'])){ $email=filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $email=""; }
if(isset($_POST['senha'])){ $senha=filter_input(INPUT_POST,'senha',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['senha'])){ $senha=filter_input(INPUT_GET,'senha',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $senha=""; }
if(isset($_POST['p'])){ $p=filter_input(INPUT_POST,'p',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['p'])){ $p=filter_input(INPUT_GET,'p',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $p="1"; }
?>