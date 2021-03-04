<?php
//conecta-se ao banco de dados MySql
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'gestaotalentos';
//Caso algo tenha dado errado, exibirá uma mensagem de erro
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if($mysqli->connect_errno)

echo"Falha na conexão: (" .$mysqli->connect_errno.") ".$mysqli->connect_errno;

?>