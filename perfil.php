<?php
include('controllers/verifica_login.php');
include("Class/ClassCrud.php");
include("includes/auxPerfil.php");
include("Includes/variaveisPF.php");
?>
<?php include("Includes/Reader.php"); ?>

<!--barra de navegação-->
<?php include('includes/menu.php'); ?>
 
  <main>
        <br>
        <section id="cadastro" class="section">
            <div class="w3-container w3-center w3-opacity">
                <i class="fa fa-edit"></i>
                <h2>perfil</h2>
                <!--
                se $ret(retorno) vinda de variaveis/php
                for diferente de ""(vazio) escrava-a

                nestas linhas 
                < ?php if($var_nome!=0){echo $var_nome;}?>"  
                se var_nome existe o escreva
                < ?php if($var_nome==0){echo "placeholder='insira seu objeto'";}
                se nao existir crie sua placeholder
                -->
                <div class="Resultado"><?php if($return!=""){echo $return;}?> </div>
                <form class="w3-container" name="FormPerfil" id="FormPerfil" method="post" action="Controllers/ControllerPerfil.php">
                    <input name="pId" type="hidden" value="<?php echo $id;?>" />

                    <label class="w3-label" >Nome:
                        <input class="w3-input w3-border" name="pNome" id="pNome" type="text" value="<?php echo $nome;?>" />
                    </label>

                    <label class="w3-label" >E-mail:
                        <input class="w3-input w3-border" name="pEmail" id="pEmail" type="text" value="<?php echo $email;?>" />
                    </label>

                    <label class="w3-label" >Senha:
                        <input class="w3-input w3-border" name="pPass" id="pPass" type="password" value="" placeholder="insira a nova senha!" />
                    </label>

                    <label class="w3-label" >Confirmar Senha:
                        <input class="w3-input w3-border" name="pconfirmPass" id="pconfirmPass" type="password" value="" placeholder="insira novamente a nova senha!" />
                    </label>

                    <label class="w3-label" >CPF:
                        <input class="w3-input w3-border" name="pCpf" id="pCpf" type="text" value="<?php if($cpf!=0){echo $cpf;}?>" <?php if($cpf==0){echo "placeholder='insira seu cpf'";}?> />
                    </label>

                    <label class="w3-label" >Data de Nascimento:
                        <input class="w3-input w3-border" name="D_nasc" id="D_nasc" type="date" value="<?php if($nasc!=0){echo $nasc;}?>" <?php if($nasc==0){echo "placeholder='insira sua data de nascimento'";}?> />
                    </label>

                    <label class="w3-label">Telefone:
                        <input class="w3-input w3-border" name="cTel" id="cTel" type="text" value="<?php if($tel!=0){echo $tel;}?>" <?php if($tel==0){echo "placeholder='insira seu telefone'";}?> />
                    </label>

                    <label class="w3-label" >Profissão:
                        <input class="w3-input w3-border" name="pProff" id="pProff" type="text" value="<?php if($profissao!="0"){echo $profissao;}?>" <?php if($profissao=="0"){echo "placeholder='insira sua profissao'";}?> />
                    </label>

                    <label class="w3-label">Bairro:
                        <input class="w3-input w3-border" name="pBairro" id="pBairro" type="text" value="<?php if($bairro!="0"){echo $bairro;}?>" <?php if($bairro=="0"){echo "placeholder='insira seu bairro'";}?> />
                    </label>

                    <label class="w3-label" >Cidade:
                        <input class="w3-input w3-border" name="pCity" id="pCity" type="text" value="<?php if($cidade!="0"){echo $cidade;}?>" <?php if($cidade=="0"){echo "placeholder='insira sua cidade'";}?> />
                    </label>

                    <label class="w3-label" >Endereço:
                        <input class="w3-input w3-border" name="pEnd" id="pEnd" type="text" value="<?php if($endereco!="0"){echo $endereco;}?>" <?php if($endereco=="0"){echo "placeholder='insira sua rua'";}?> />
                    </label>
          
                    <label class="w3-label" >Estado:
                        <input class="w3-input w3-border" name="pEstado" id="pEstado" type="text" value="<?php if($estado!="0"){echo $estado;}?>" <?php if($estado=="0"){echo "placeholder='insira seu estado'";}?>/>
                    </label>

                    <label class="w3-label" >Numero:
                        <input class="w3-input w3-border" name="pNum" id="pNum" type="text" value="<?php if($num!=0){echo $num;}?>" <?php if($num==0){echo "placeholder='insira o numero de sua residencia'";}?> />
                    </label>

                    <label class="w3-label" >CEP:
                        <input class="w3-input w3-border" name="pCep" id="pCep" type="text" value="<?php if($cep!=0){echo $cep;}?>" <?php if($cep==0){echo "placeholder='insira seu cep'";}?> />
                    </label>

                    <label class="w3-label" >Complemento:
                        <input class="w3-input w3-border" name="pComple" id="pComple" type="text" value="<?php if($complemento!="0"){echo $complemento;}?>" <?php if($complemento=="0"){echo "placeholder='complemento'";}?> />
                    </label>
               
                    <button id="btnPerfil" name="btnPerfil" class="w3-button w3-center w3-dark-grey">Entrar</button>
                </form>

            </div>
        </section>
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
    //Get the DIV with overlay effect//
    //var overlayBg = document.getElementById("myOverlay");
</script>
        <!--Rodapé-->
        <footer class="w3-black w3-padding-small w3-center">
        <p>TCC GRUPO 8 &copy; 2021</p>
        </footer>  
        
    </body>
</html>