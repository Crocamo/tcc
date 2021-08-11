<?php
include('controllers/verifica_login.php');
include("Class/ClassCrud.php");
include("Includes/variaveisP.php");
include("Includes/Variaveis.php");

$Crud = new ClassCrud();
//recebe globais nome e id
$nome = $_SESSION["usuario"][0];
$idUser = $_SESSION["usuario"][1];

//pesquisa no BD se existe aula assistida da
//tabela andamentoaula para id deste usuario
$BFetch = $Crud->selectDB(" assistida", "andamentoaula", "where id_Aluno=?", array($idUser));
$row = $BFetch->fetch(PDO::FETCH_ASSOC);
//se existir $row['assistida'] incrementa $aula c infos desta $row
if (isset($row['assistida'])) {
    $aulas = $row['assistida'];
}
//se $aula for diferente de 10 o envia para pagina aula"$p"
if ($aulas != 10 ) {
    $p = $aulas;
    header('location: aula.php?p='.$p.'');
}

?>

<?php include('Includes/Reader.php'); ?>
<!--barra de navegação-->
<?php include('includes/menu.php'); ?>
    <main>
  
        <br>
        <h1 class="w3-center"> PROVA FINAL </h1> 
            <div class="w3-center">
                <?php   
                //se $ret(retorno) vinda de variaveis/php
                // for diferente de 0 escrava-a
                if($ret!= "0"){ echo $ret; }; ?>
            </div>
        <br>
        <form name="FormProva" id="FormProva" method="post" action="Controllers/ControllerProva.php">

            <div id="formulario" class="w3-container w3-center w3-card-3">
                <?php
                echo "<input name='prova' id='prova' type='hidden' value='".$idUser."' />";
                //1º for imprime chamada da questao
                for($i=1; $i<=10; $i++){
                    echo "<div id='pergunta'>
                    <h3>".$i." - Questão: </h3>";
                    // 2º for imprime 5 radios de respostas
                    for($ii=1; $ii<=5; $ii++){
                        echo "<input type='radio' id='resp".$ii."' name='resp".$i."' value='".$ii."'>
                        <label for='resp".$ii."'>resposta".$ii."</label><br>";
                    };
                    echo "</div>";
                };
                ?>
                <input type="submit" value="prova">
                <!--<button onclick="document.getElementById('start-modal').style.display='block'" class="w3-button w3-right w3-red w3-large w3-opacity"> Avaliar </button>
                --><br>
        </form>
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

        <!--Rodapé-->
        <footer class="w3-black w3-padding-small w3-center">
            <p>TCC GRUPO 8 &copy; 2021</p>
        </footer>  
    </body>
</html>