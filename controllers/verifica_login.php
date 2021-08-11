<?php
session_start();
//confere se esta logado na sessão se nao joga para pg login.php
if(!isset($_SESSION["usuario"]) && !is_array($_SESSION["usuario"])){
  echo "<script>window.location = 'login.php'</script>";
}