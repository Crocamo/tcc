<?php
//tratamentos de infos enviadas via POST ou GET para prova (P)
//e sao encapsuladas em suas devidas variaveis
if(isset($_POST['prova'])){ $prova=filter_input(INPUT_POST,'prova',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['prova'])){ $prova=filter_input(INPUT_GET,'prova',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $prova=0; }
if(isset($_POST['ret'])){ $ret=filter_input(INPUT_POST,'ret',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['ret'])){ $ret=filter_input(INPUT_GET,'ret',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $ret=0; }
for($i=1;$i<=10;$i++){
    if(isset($_POST['resp'.$i])){
        $resp[$i]=filter_input(INPUT_POST,'resp'.$i,FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['resp'.$i])){
        $resp[$i]=filter_input(INPUT_GET,'resp'.$i,FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{
        $resp[$i]="";
    }
};
?>