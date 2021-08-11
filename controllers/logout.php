<?php
    //desconecta usuario
    session_start();
    session_destroy();

    echo "<script>window.location = '../login.php'</script>";
?>