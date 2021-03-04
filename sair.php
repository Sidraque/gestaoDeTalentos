<?php
	// SAIR DA SESSÃO
	
	session_start();
	// session_destroy();// DESTROI TODAS AS VARIAVEIS GLOBAIS DESDE SITE

	unset(
		$_SESSION['usuarioId'],
		$_SESSION['nome'],
		$_SESSION['usuarioNiveisAcessoId'],
		$_SESSION['usuarioEmail'],
		$_SESSION['usuarioSenha']
	);

	// REDIRECIONAR PARA LOGIN
	header('Location: index.php');
	exit();

