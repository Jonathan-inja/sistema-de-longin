<?php
session_start();
include("conexao.php");

	if (!empty($_POST) AND (empty($_POST['nome_completo']) OR empty($_POST['nome_usuario']) OR empty($_POST['email']) OR empty($_POST['senha']))) {
		header("Location: cadastrar.php"); exit;
	}

	$nome_comoleto = mysqli_real_escape_string($conexao, trim($_POST["nome_completo"]));
	$nome_usuario = mysqli_real_escape_string($conexao, trim($_POST["nome_usuario"]));
	$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
	$senha = mysqli_real_escape_string($conexao, trim(md5($_POST["senha"])));

	if($conexao->connect_error){
		die("Erro na conexão ".$conexao->connect_error);
	} else {
		echo "Conexão realizada.";

			$sql = "INSERT INTO usuario (nome_completo, nome_usuario, email, senha) VALUES
			('$nome_comoleto', '$nome_usuario', '$email', '$senha')";	

			if($conexao->query($sql)){
					echo "Usuário inserido.";
					header("Location: login.php");
				}
			 else {
				echo $conexao->error;
			}
	}

?>