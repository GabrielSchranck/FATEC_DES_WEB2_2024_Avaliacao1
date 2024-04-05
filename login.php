<?php

session_start();

$login_correto = 'portaria';
$senha_correta = 'FatecAraras';

if(isset($_POST['login']) && isset($_POST['senha']))
{

    $login_digitado = $_POST['login'];
    $senha_digitada = $_POST['senha'];

    if($login_digitado != $login_correto || $senha_digitada != $senha_correta)
    {
        echo 'Usuário ou senha incorretos'.'<br>';
    }
    else
    {
        $_SESSION['teste'] = TRUE;
        header('location: usuario.php');
        exit;
    }
}
else
{
    echo 'Digite um usuário e senha'.'<br>';
}

?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <label for="">Login</label><br>
                <input type="text" name="login"><br>
                <label for="">Senha</label><br>
                <input type="password" name="senha"><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>

