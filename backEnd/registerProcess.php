<?php
session_start();
include("conexaoBD.php");
$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaVerificacao = $_POST['senhaVerificacao'];
$tipoUser = $_POST['tipoUser'];

if ($tipoUser <> 1 or 2) {
    $_SESSION['msgTipoUser'] = "Selecione o tipo de usuário.";
    header("Location: ../register.php");
}

if ('tipoUser' <> 1 and 2) {
    $_SESSION['msgTipoUser'] = "Selecione o tipo de usuário.";
    header("Location: ../register.php");
} else {
    $tipoUser = $_POST['tipoUser'];
}


if ($senha == $senhaVerificacao) {
    $result_usuario = "INSERT INTO usuario (nomeCompleto, email, senha, tipoUser) VALUES ('$nomeCompleto', '$email', '$senha', $tipoUser)";
    $resultado_usuario = mysqli_query($mysqli, $result_usuario);
} else {
    $_SESSION['msgSenha'] = "Usuário ou Senha inválido.";
    header("Location: ../register.php");
}

if (mysqli_insert_id($mysqli)) {
    $_SESSION['msg'] = "<p class='center'> Cadastro realizado com sucesso. </p>";
    header("Location: ../index.php");
}
