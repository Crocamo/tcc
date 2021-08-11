<?php
include("../Class/ClassCrud.php");
include("../Includes/Variaveis.php");
//faz atualizações nas aulas assistidas pelo aluno
$Crud = new ClassCrud();
$aula = $p;
$Crud->updateDB(
    "andamentoaula",
    "assistida=?",
    "id_Aluno=?",
    array(
        $aula,
        $id
    )

);
//envia para a mesma pg onde estava mais agora com aula completa
echo "<script>window.location = '../aula.php?p=" . $aula . "'</script>";
