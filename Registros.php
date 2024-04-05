<?php
session_start();
if($_SESSION['teste'] == FALSE){
    header('location: login.php');
}
if(isset($_POST['CadMoto'])){
    $arquivo = fopen('motos.txt', 'r');
    echo "Motos:"."</br>";
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."</br>";
    }
    fclose($arquivo);
}
if(isset($_POST['Cadcarro'])){
    $arquivo = fopen('Carros.txt', 'r');
    echo "Carros:"."</br>";
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."</br>";
    }
    fclose($arquivo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registros</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">  
                <input type="submit" name="Cadcarro" value="Cegistro dos carros"><br>
                <input type="submit" name="CadMoto" value="Registro das motos"></br>
            </form>
            <a href="login.php">Logout</a>
        </div>
    </div>
</body>
</html>

