<?php
include('controllers/verifica_login.php');
include("Class/ClassCrud.php");
//recebe get "p" e a incrementa em $p
include("Includes/Variaveis.php");

$Crud = new ClassCrud();
//recebe globais nome e id
$nome = $_SESSION["usuario"][0];
$idUser = $_SESSION["usuario"][1];
$Id = 0;
//confere se existe tabela andamentoaula ligada ao id de usuario.
$BFetch = $Crud->selectDB("*", "andamentoaula", "where id_Aluno=?", array($idUser));
$Fetch = $BFetch->rowCount();
//se não existe cria uma nova linha para o id do usuario
if ($Fetch != true) {
    $aulas = 1;
    $Crud->insertDB(
        "andamentoaula",
        "?,?,?,?",
        array(
            $Id,
            '1',
            $idUser,
            '0'
        )
    );
}
//pega info aulas assistidas em "assistida" ligada ao id aluno 
$BFetch = $Crud->selectDB(" assistida", "andamentoaula", "where id_Aluno=?", array($idUser));
$row = $BFetch->fetch(PDO::FETCH_ASSOC);

//se existir $row['assistida']) introduza-a na variavel $aulas
if (isset($row['assistida'])) {
    $aulas = $row['assistida'];
    
}
//compara $p vinda de variaveis.php com $aulas e cria
//resposta corespondende em if else;
//se $p menor ou igual a $aula encapsula resposta 
//em $resp e $p dentro de $p1
if ($p <= $aulas) {
    $resp = "aula " . $p . " OK</br>";
    $p1 = $p;

//se $p é maior que $aulas encapsula resposta
//em $resp e $aulas+1 em $p1
} elseif ($p > $aulas) {
    $p1 = ($aulas + 1);
    $resp = "clique aqui para concluir a aula " . $p1 . " ok";
    $p = ($aulas + 1);
}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>SALA DE AULA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <!--barra de navegação-->
    <?php include 'includes/menu.php'; ?>


    <!--Aulas--futuramente inserir progressão aqui -->
    <section class="aula w3-content">
        <div class="w3-container w3-center">
            <h1 class="w3-text-shadow w3-center w3-animate-opacity">AULA <?php echo $p1; ?></h1>
            <hr>
            <div>
                <iframe class="iframe" width="854" height="480" src="https://www.youtube.com/embed/b9giR5rKJdI" frameborder="0"></iframe>
            </div>
        </div>
        <br>
        <div class="w3-light-grey w3-round w3-center">
            <!--imprime a % de aulas concluidas-->
            <div class="w3-container w3-round w3-blue" style="width:<?php echo $aulas;?>0%"> <?php echo $aulas;?>0% </div>
        </div>
    </section>

    <!--Controles de navegação de aula-->
    <section class="controle">
        <div class="w3-container w3-center">
            <p class="w3-animate-opacity">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            <hr>

            <?php
            //imprime resposta
            echo $resp;
            //botoes dinamicos, dependendem de $p enviada via POST
            // se $p menor que $aulas mostra btn concluir aula
            if ($p > $aulas) {
                echo "<a href='controllers/ControllerAula.php?p=" . $p1 . "&id=" . $idUser . "'><button>concluir aula</button></a></br>";
            }
            // se $p identico a 1 mostra btn prox aula
            if ($p == 1) {
                echo
                "<a href='aula.php?p=" . ($p + 1) . "'><button>prox aula</button></a>";
            // se $p identico a 10 mostra btn aula anterior e btn prova
            } elseif ($p == 10) {
                echo  " <a href='aula.php?p=" . ($p - 1) . "'><button>aula anterior</button></a>
                            <a href='prova.php'><button>prova</button></a>";
             // se não mostra btn aula anterior e btn proxima aula
            } else {
                echo  " <a href='aula.php?p=" . ($p - 1) . "'><button>aula anterior</button></a>
                            <a href='aula.php?p=" . ($p + 1) . "'><button>prox aula</button></a>";
            }
            ?>
        </div>
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
    </script>

    <!--Rodapé-->
    <footer class="w3-black w3-padding-small w3-center">
        <p>TCC GRUPO 8 &copy; 2021</p>
    </footer>

</body>

</html>