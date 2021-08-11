<?php 
$Crud = new ClassCrud();
//recebe globais nome e id
$nome = $_SESSION["usuario"][0];
$id = $_SESSION["usuario"][1];

//confere email deste id na tabela user
$FetchU=$Crud->selectDB(" * "," user","where id=?",array($id));
$Fetch=$FetchU->fetch(PDO::FETCH_ASSOC);
$email= $Fetch["email"];

//confere se existe linha ligada ao id em tabela perfil
//se nao existir a cria sem valores reais
$PFetchP = $Crud->selectDB("*", "perfil", "where id_User=?", array($id));
$FetchP = $PFetchP->rowCount();
if ($FetchP != true) {
    $idPerf = 0;
    $Crud->insertDB("perfil","?,?,?,?,?,?", array($idPerf,'0','0','0','0',$id));
}
//confere se existe linha ligada ao id em tabela endereço
//se nao existir a cria sem valores reais
$EFetchE = $Crud->selectDB("*", "endereco", "where idUser=?", array($id));
$FetchE = $EFetchE->rowCount();
if ($FetchE != true) {
    $idEnd = 0;
    $Crud->insertDB("endereco","?,?,?,?,?,?,?,?,?", array($idEnd,'0','0','0','0','0','0','0',$id));
}

//le todas infos de perfil ligadas ao id.
$PFetchP = $Crud->selectDB("*", "perfil", "where id_User=?", array($id));
$rowP = $PFetchP->fetch(PDO::FETCH_ASSOC);
$tel = $rowP['tel'];
$cpf = $rowP['cpf'];
$nasc = $rowP['d_nasc'];
$profissao = $rowP['profissao'];

//le todas infos de endereço ligadas ao id.
$EFetchE = $Crud->selectDB("*", "endereco", "where idUser=?", array($id));
$rowE = $EFetchE->fetch(PDO::FETCH_ASSOC);
$endereco = $rowE['endereco'];
$num = $rowE['num'];
$bairro = $rowE['bairro'];
$cidade = $rowE['cidade'];
$estado = $rowE['estado'];
$cep = $rowE['cep'];
$complemento = $rowE['complemento'];
