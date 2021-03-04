<?php

    // VALIDAR UMA SESSÃO
    session_start();
    if(!$_SESSION['usuarioEmail']){
        header('Location: index.php');
        exit();
    }