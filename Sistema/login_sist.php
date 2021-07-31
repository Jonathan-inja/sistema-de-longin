<?php
session_start();
include("conexao.php");

if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
	header("Location: login.php"); exit;
}


$email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST["senha"])));

$sql = "SELECT `id`, `nome` FROM `usuarios` WHERE (`email` = '".$email ."') AND (`senha` = '". sha1($senha) ."') LIMIT 1";

$query = mysqli_query($conexao, $sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o email não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // efetuar o login do email cadastrado
	  echo "Login efetuado!"; 
	  header("Location: painel.php");
	  
  }

