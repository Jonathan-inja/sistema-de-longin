<?php
include('conexao.php');

$query = "select * from usuario";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($result->num_rows > 0){
    echo 'Usúarios:';
    echo '<br>';
    while($linha = $result->fetch_assoc()){
        echo '<hr>';
     
        echo 'Nome_completo: ',$linha['nome_completo']; 
        echo '<br>';
        
        echo 'nome_usuario:  ',$linha['nome_usuario'];
        
        echo '<br>';
        echo 'email:         ',$linha['email'];     
        echo '<br>';

        echo '<hr>';
    }
}
?>