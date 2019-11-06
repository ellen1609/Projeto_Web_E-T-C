<?php
    //Insiar sessão
    session_start();
    //Destruindo as variaveis
    unset($_SESSION['Usuario']);
    unset($_SESSION['senha']);
    //destruir a sessão
    session_destroy();
    //Direcionando para a pagina index.html
    header("location:../index.html"); 
    exit;
?>