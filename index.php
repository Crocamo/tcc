<?php
include('controllers/verifica_login.php');
include("Class/ClassCrud.php");

$Crud = new ClassCrud();
//recebe globais nome e id
$nome = $_SESSION["usuario"][0];
$id = $_SESSION["usuario"][1];

$BFetch = $Crud->selectDB("*", "andamentoaula", "where id_Aluno=?", array($id));
$Fetch = $BFetch->rowCount();
if ($Fetch == 1) {
    //busca info de quantas aulas foram assistidas e/ou nota pontuada
    $row = $BFetch->fetchAll(PDO::FETCH_ASSOC)[0];
    $aula = $row['assistida'];
    $nota = $row['nota'];
} else {
    $row = "";
}

?>
<?php include("Includes/Reader.php"); ?>
<!--barra de navegação-->
<?php include('includes/menu.php'); ?>

<!--Seção do conteúdo do curso-->
<section id="conteudo" class="section w3-opacity w3-red">
    <div class="w3-container w3-center">
        <br>
        <i class="fa fa-book"></i>
        <h2>CONTEÚDO DO CURSO</h2>
    </div>
</section>

<!--Seção do conteúdo do curso-->
<section class="section">
    <!-- Overlay effect when opening sidebar on small screens 
            <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
            </div>-->
</section>
<section class="index">
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <!--imprime botao para aula 1-->
                <a href="aula.php?p=1">
                    <h2 class="w3-hover-opacity w3-content w3-center"> AULA 1</h2>
                </a>
            </div>
        </div>

        <?php
        // se $row for diferente de zero faça loop
        if ($row != "") {
            //loop abre sequencia de botoes aulas igual a aulas assistidas
            for ($i = 2; $i <= $aula; $i++) {
                // se loop igual a 5 quebra de linha
                if ($i == 5) {
                    echo "</div>
                    <div class='w3-row-padding w3-margin-bottom'>";
                    // se loop igual a 9 quebra de linha
                } elseif ($i == 9) {
                    echo "</div>
                    <div class='w3-row-padding w3-margin-bottom'>";
                }
                //imprime botao para aula($i) começando da aula2
                echo "
                    <div class='w3-quarter'>
                        <div class='w3-container w3-red w3-padding-16'>
                            <a href='aula.php?p=" . ($i) . "'><h2 class='w3-hover-opacity w3-content w3-center'> AULA " . ($i) . "</h2></a>
                        </div>
                    </div>";
                //se loop igual a aula imprime botão aula+1
                if($i==$aula && $i<=9){
                    if (($i+1) == 5) {
                        echo "</div>
                        <div class='w3-row-padding w3-margin-bottom'>";
                        // se loop igual a 9 quebra de linha
                    } elseif (($i+1) == 9) {
                        echo "</div>
                        <div class='w3-row-padding w3-margin-bottom'>";
                    }
                    echo "
                    <div class='w3-quarter'>
                        <div class='w3-container w3-red w3-padding-16'>
                            <a href='aula.php?p=" . ($i+1) . "'><h2 class='w3-hover-opacity w3-content w3-center'> AULA " . ($i+1) . "</h2></a>
                        </div>
                    </div>";
                }
            }
            // se aula igual a 10 abre botao prova
            if ($aula == 10) {
                echo
                "<div class='w3-quarter'>
                    <div class='w3-container w3-red w3-padding-16'>
                        <a href='prova.php'><h2 class='w3-hover-opacity w3-content w3-center'>PROVA</h2></a>
                    </div>
                </div>";
            }
            //se nota igual ou maior que 8 e aula igual a 10 libera botao certificado
            if ($nota >= 8 && $aula == 10) {
                echo
                "<div class='w3-quarter'>
                    <div class='w3-container w3-red w3-padding-16'>
                        <a href='certificado.php'><h2 class='w3-hover-opacity w3-content w3-center'>CERTIFICADO</h2></a>
                    </div>
                </div>";
            }
        }
        ?>


</section>

<script>
    function navFunction() {
        var x = document.getElementById("nav");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    //Get the DIV with overlay effect//
    //var overlayBg = document.getElementById("myOverlay");
</script>

<?php include("Includes/Footer.php"); ?>