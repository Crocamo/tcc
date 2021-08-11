<?php
include('controllers/verifica_login.php');
include("Class/ClassCrud.php");

$Crud = new ClassCrud();
//recupera nome e id da global $_SESSION
$nome = $_SESSION["usuario"][0];
$id = $_SESSION["usuario"][1];

//pesquisa no BD se existe andamento do curso para id do usuario
$BFetch = $Crud->selectDB("*", "andamentoaula", "where id_Aluno=?", array($id));
$Fetch = $BFetch->rowCount();

//se existir informações na tabela ligadas ao id do usuario
if ($Fetch == 1) {
    //busca info de quantas aulas foram assistidas e/ou nota pontuada
    $row = $BFetch->fetchAll(PDO::FETCH_ASSOC)[0];
    // as colocam nestas variaveis, $aula = aulas assistidas, $nota = nota da prova  
    $aula = $row['assistida'];
    $nota = $row['nota'];

    //se aula diferente de 10, grava info da variavel $aula em $p e o envia para aula'$p'
    if ($aula != 10 ) {
        $p = $aula;
        echo "<script>window.location = 'aula.php?p=" . $p . "'</script>";
    }
    // se nota for 7 ou menos, o envia para prova enviando aviso de acesso negado a esta pg
    // e  
    if ($nota <= 7 ){
        $ret = "acesso negado";
        echo "<script>window.location = 'prova.php?ret=" . $ret . "'</script>";
    }
}
?>

<?php include('Includes/Reader.php'); ?>
<!--barra de navegação-->
        <br>
        <!--Seção do conteúdo do curso-->
            <section class="certificado">
                <div class="w3-container w3-center">
                <h2>CERTIFICADO DE CONCLUSÃO DE CURSO</h2>
                <br>
                <h2 href="#" class="w3-animate-opacity"><?php echo $nome?></h2>
                <br>
                <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit </h2>
                <h2> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</h2>
                <br>
                <h2>São Paulo, <?php echo date('d/m/Y');?> </h2>
                <br>
                <h2 href="#" > *Logo Escola </h2>
                <i class="fa fa-institution w3-xxxlarge"></i>
                </div>
            </section>

         <!--Imprimir Certificado-->
        <section>
            <div class="w3-container w3-center">
                <br> <br> <br> <br>
                <button href="#" class="w3-button w3-red w3-large w3-opacity w3-right" value="Print this page" onClick="window.print()">Imprimir</button> 
            </div>
            <br>
        </section>

        </main>

        <script>
            function navFunction() {
                var x = document.getElementById("nav");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } 
                else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>

        
    </body>
</html>