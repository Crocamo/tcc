<?php
include('controllers/verifica_login.php');
include("Class/ClassCrud.php");
include("Includes/variaveisP.php");
$Crud = new ClassCrud();

//recebe globais nome e id
$nome = $_SESSION["usuario"][0];
$idUser = $_SESSION["usuario"][1];

//confere qual é a nota na tabela andamento aula ligada ao id de usuario.
$BFetch = $Crud->selectDB(" nota", "andamentoaula", "where id_Aluno=?", array($idUser));
$Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);

//se nota menor ou igual a 7 envia usuario para
// pagina prova com aviso de acesso negado
if ($Fetch['nota']<= 7 ){
    $ret = "acesso negado";
    echo "<script>window.location = 'prova.php?ret=" . $ret . "'</script>";
}
?>

<html>

<?php include('Includes/Reader.php'); ?>
<!--barra de navegação-->
<?php include('includes/menu.php'); ?>
    <main>
    
        <br>
        <h1 class="w3-center"> PROVA FINAL </h1> 
         <div class="w3-center">
            <!-- imprime aviso de prova.php informando
            sobre a conclusao da prova -->
            <?php  echo $ret; ?>
            <a href='certificado.php'><button>certificado</button></a>
         </div>

    </main>

    <script>
        function navFunction() {
            var x = document.getElementById("nav");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
</body>

<?php include("Includes/Footer.php"); ?>