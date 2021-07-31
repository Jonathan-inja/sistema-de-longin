<?php
define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("DB", "sistema_login");

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);   /*or die ("Erro ao se conectar");*/

?>