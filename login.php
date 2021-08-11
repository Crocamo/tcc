<?php
include("Class/ClassCrud.php");
include("Includes/variaveis.php");
session_start();
//confere se usuario esta logado, se sim envia para index.php
if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"]))
{
    echo "<script>window.location = 'index.php'</script>";
}
?>
<?php include('Includes/Reader.php'); ?>
   <!--barra de navegação-->
   <div class="w3-top">
        <div class="w3-bar w3-black">
            <span class="w3-bar-item w3-mobile"><i class="fa fa-globe"></i> EAD WEB SITE</span>
            <span class="w3-right w3-mobile">
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-red"><i class="fa fa-home"></i> HOME</a>
                <!--<a href="#perfil" class="w3-bar-item w3-button w3-mobile w3-hover-red">PERFIL</a> -->
                <a href="#sobre" class="w3-bar-item w3-button w3-mobile w3-hover-red"><i class="fa fa-cog"></i> SOBRE</a>
                <!--<a href="#cadastro" class="w3-bar-item w3-button w3-mobile w3-hover-red">CADASTRO</a> -->
            </span>
        </div>
    </div>
    <!-- principal-->
    <section class="showcase">
        <div class="w3-container w3-center">
            <h1 class="w3-text-shadow w3-animate-opacity">CURSO ONLINE</h1>
            <hr>
            <br>
            <p class="w3-animate-opacity w3-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
            <br>
            <button  onclick="document.getElementById('start-modal').style.display='block'"  class="w3-button w3-red w3-large w3-opacity">LOGIN</button>
            <button  onclick="document.getElementById('start-modal1').style.display='block'"  class="w3-button w3-red w3-large w3-opacity">CADASTRE</button>
        </div>
    </section>

    <!--Sobre-->
    <section id="sobre" class="section w3-opacity w3-red">
        <div class="w3-container w3-center">
            <i class="fa fa-cog"></i>
            <h2>SOBRE</h2>
            <p class="w3-animate-opacity">TRABALHO DE TCC DO CURSO TÉCNICO DE DESENVOLVIMENTO DE SISTEMAS</p>
            <p class="w3-animate-opacity"> EADTEC CENTRO PAULA SOUZA </p>
            <p class="w3-animate-opacity"> TURMA 2021 </p>
        </div>

        <div class="w3-container w3-center">
        <i class="fa fa-bug"></i>
        <p class="w3-animate-opacity"> TIME: André Crocamo - Juliana Agutoli - Denis Matos - Giovanni Delfino - Márcia Alapanian</p>
        <br>
        </div>
    </section>

<!--Modal-->
<div id="start-modal" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-red">
        <span onclick="document.getElementById('start-modal').style.display='none'" class="w3-closebtn">&times;</span>
        <h2>LOGIN</h2>
        </header>
        <!-- retorno de controllerLogin -->
        <div class="Resultado"> </div>


        <div class="w3-container">
            <form name="FormLogin" id="FormLogin" action="Controllers/ControllerLogin.php" method="post">
                <div class="w3-section">
                <label>E-mail</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" id="email" name="email" placeholder="Entre com seu E-mail">
                <label>Senha</label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" name="senha" id="senha" placeholder="Entre com sua senha">
                <button class="w3-black w3-btn-block w3-section w3-padding" id="btnEntrar">Entrar</button>
            
                </div>
            </form>
        </div>
    </div>
 </div>

<!--Modal1-->
<div id="start-modal1" class="w3-modal">
    <div class="w3-modal-content">
        <header class="w3-container w3-red">
        <span onclick="document.getElementById('start-modal1').style.display='none'" class="w3-closebtn">&times;</span>
        <h2>CADASTRE</h2>
        </header>
         <!-- retorno de controllerCadastrar -->
        <div class="Resultado"> </div>


        <div class="w3-container">
        <form name="FormCadastro" id="FormCadastro" action="Controllers/ControllerCadastrar.php" method="post">
                <label >Nome:</label>
                <input class="w3-input w3-border w3-margin-bottom" name="nome" id="nome" type="text" placeholder="Entre com seu Nome" />
                <label >E-mail:</label>
                <input class="w3-input w3-border w3-margin-bottom" name="email" id="email" type="text" placeholder="Entre com seu E-mail" />
                <label >Senha:</label>
                <input class="w3-input w3-border w3-margin-bottom" name="senha" id="senha" type="password" placeholder="Entre com sua Senha" />
                <button class="w3-black w3-btn-block w3-section w3-padding" value="cadastro">Cadastrar</button>
            </form>
        </div>
    </div>
 </div>


<!--Rodapé somente do Login-->
<footer class="w3-black w3-padding-small w3-center">
        <p>TCC GRUPO 8 &copy; 2021</p>
</footer>  

<script src="Js/zepto.min.js"></script>
<script src="Js/javascript.js"></script>
</body>
</html>
