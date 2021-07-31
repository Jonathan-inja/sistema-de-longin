<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="corpo-form">
        
            <h2>Entrar</h2>
          
            <form method="$_POST"  action="login_sist.php">
                <input type="email"      name="email"    placeholder="Email"    maxlength="40">
                <input type="password"   name="senha"    placeholder="Senha"    maxlength="15">
                <input type="submit" value="login">
                <a href="cadastrar.php">Ainda não sou cadastrado!<strong> Cadastre-se.<strong</a>
            </form>
     
        </div>
    </body>

</html>