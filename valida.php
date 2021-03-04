<?php
	session_start();	
	
	include("backEnd/conexaoBD.php");	

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$email = mysqli_real_escape_string($mysqli, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string ($mysqli, $_POST['senha']);
		// $senha = md5($senha);

		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * from usuario where email = '$email' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($mysqli, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['idUsuario'];
			$_SESSION['nome'] = $resultado['nomeCompleto'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['tipoUser'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			
				if($_SESSION['usuarioNiveisAcessoId'] == "1"){
					header("Location: inicio.php");

				}else if($_SESSION['usuarioNiveisAcessoId'] == "2"){
					header("Location: rh.php");
				}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}

	exit();
























	//--------------------- CODIGO ANTIGO -----------------------------------------



	// if(empty($_POST['email']) || empty($_POST['senha'])){
	// 	header('Location: index.php');

	// }

	// $email = mysqli_real_escape_string($mysqli, $_POST['email']);
	// $senha = mysqli_real_escape_string ($mysqli, $_POST['senha']);
		
	// $query = "select tipoUser, idUsuario, email from usuario where email = '{$email}' and senha = '{$senha}'";
	// $resultado['tipoUser'];

	// $result = mysqli_query($mysqli, $query);
		
	// $row = mysqli_num_rows($result);
	

	// if($row == 1 && $result == 1){
	// 	$_SESSION['email'] = $email;
	// 	header('Location: inicio.php');
	// }else if($row == 1 && $result == 2){
	// 	header('Location: rh.html');
	// }
	// else{
	// 	header('Location: index.php');
	// 	exit();
	// }

 