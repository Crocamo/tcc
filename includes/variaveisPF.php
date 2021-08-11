<?php
//tratamentos de infos enviadas via POST ou GET para perfil (PF)
//e sao encapsuladas em suas devidas variaveis
if(isset($_POST['pId'])){ $pId=filter_input(INPUT_POST,'pId',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pId'])){ $pId=filter_input(INPUT_GET,'pId',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pId=""; }
if(isset($_POST['pNome'])){ $pNome=filter_input(INPUT_POST,'pNome',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pNome'])){ $pNome=filter_input(INPUT_GET,'pNome',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pNome=""; }
if(isset($_POST['pEmail'])){ $pEmail=filter_input(INPUT_POST,'pEmail',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pEmail'])){ $pEmail=filter_input(INPUT_GET,'pEmail',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pEmail=""; }
if(isset($_POST['pPass'])){ $pPass=filter_input(INPUT_POST,'pPass',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pPass'])){ $pPass=filter_input(INPUT_GET,'pPass',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pPass=""; }
if(isset($_POST['pconfirmPass'])){ $pconfirmPass=filter_input(INPUT_POST,'pconfirmPass',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pconfirmPass'])){ $pconfirmPass=filter_input(INPUT_GET,'pconfirmPass',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pconfirmPass=""; }
if(isset($_POST['pCpf'])){ $pCpf=filter_input(INPUT_POST,'pCpf',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pCpf'])){ $pCpf=filter_input(INPUT_GET,'pCpf',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pCpf=""; }
if(isset($_POST['D_nasc'])){ $D_nasc=filter_input(INPUT_POST,'D_nasc',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['D_nasc'])){ $D_nasc=filter_input(INPUT_GET,'D_nasc',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $D_nasc=""; }
if(isset($_POST['cTel'])){ $cTel=filter_input(INPUT_POST,'cTel',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['cTel'])){ $cTel=filter_input(INPUT_GET,'cTel',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $cTel=""; }
if(isset($_POST['pProff'])){ $pProff=filter_input(INPUT_POST,'pProff',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pProff'])){ $pProff=filter_input(INPUT_GET,'pProff',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pProff=""; }
if(isset($_POST['pBairro'])){ $pBairro=filter_input(INPUT_POST,'pBairro',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pBairro'])){ $pBairro=filter_input(INPUT_GET,'pBairro',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pBairro=""; }
if(isset($_POST['pCity'])){ $pCity=filter_input(INPUT_POST,'pCity',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pCity'])){ $pCity=filter_input(INPUT_GET,'pCity',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pCity=""; }
if(isset($_POST['pEnd'])){ $pEnd=filter_input(INPUT_POST,'pEnd',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pEnd'])){ $pEnd=filter_input(INPUT_GET,'pEnd',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pEnd=""; }
if(isset($_POST['pEstado'])){ $pEstado=filter_input(INPUT_POST,'pEstado',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pEstado'])){ $pEstado=filter_input(INPUT_GET,'pEstado',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pEstado=""; }
if(isset($_POST['pNum'])){ $pNum=filter_input(INPUT_POST,'pNum',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pNum'])){ $pNum=filter_input(INPUT_GET,'pNum',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pNum=""; }
if(isset($_POST['pCep'])){ $pCep=filter_input(INPUT_POST,'pCep',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pCep'])){ $pCep=filter_input(INPUT_GET,'pCep',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pCep=""; }
if(isset($_POST['pComple'])){ $pComple=filter_input(INPUT_POST,'pComple',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['pComple'])){ $pComple=filter_input(INPUT_GET,'pComple',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $pComple=""; }
if(isset($_POST['return'])){ $return=filter_input(INPUT_POST,'return',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['return'])){ $return=filter_input(INPUT_GET,'return',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $return=""; }

?>
