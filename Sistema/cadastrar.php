<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="corpo-form-cad">
        
            <h2>Cadastrar</h2>
          
            <form method="POST" action="cadastro.php">
                <input type="text"      name="nome_completo"  placeholder="Nome Completo:"     axlength="40">
                <input type="text"      name="nome_usuario"   placeholder="Nome de Usuario:"   maxlength="30">
                <input type="email"     name="email"          placeholder="Email:"             maxlength="40">
                <input type="password"  name="senha"          placeholder="Senha:"             maxlength="15">
                
               
                <input type="submit"    value="Cadastrar">
                <a href="login.php">Já sou cadastrado!<strong> Login.<strong</a>
            </form>
     
        </div>

    </body>

</html>