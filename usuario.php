<?php
    session_start();
    if($_SESSION['teste'] == FALSE){
        header('location: login.php');
    }
    if(isset( $_POST['Carro']))
        {
            $file_name = 'carros.txt';
            if($_POST['nome'] != '' and $_POST['ra'] != '' and $_POST['placa'] != ''){
                if(!file_exists('carros.txt')){
                    $arquivo = fopen('carros.txt', 'w');
                }else{
                    $arquivo = fopen('carros.txt', 'a');
                }
                fwrite($arquivo, $_POST['nome'].'-->'.$_POST['ra'].'-->'.$_POST['placa']."\n");
                fflush($arquivo);
                fclose($arquivo);
            }
        }
    else if(isset($_POST['Motos']))
        {
            $file_name = 'Motos.txt';
            if($_POST['nome'] != '' and $_POST['ra'] != '' and $_POST['placa'] != ''){
                if(!file_exists('Motos.txt')){
                    $arquivo = fopen('Motos.txt', 'w');
                }else{
                    $arquivo = fopen('Motos.txt', 'a');
                }
                fwrite($arquivo, $_POST['nome'].'-->'.$_POST['ra'].'-->'.$_POST['placa']."\n");
                fflush($arquivo);
                fclose($arquivo);
                
        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Usuário</title>
</head>
<body>
<div class="container">
        <div class="login">
            <form action="" method="post">
                <label for="">Nome do Aluno</label><br>
                <input type="text" name="nome"><br>
                <label for="">RA do Aluno</label><br>
                <input type="text" name="ra"><br>
                <label for="">Placa do carro/moto</label><br>
                <input type="text" name="placa"><br>
                <input type="submit" name="Carro" value="Carro">
                <input type="submit" name="Motos" value="Moto"><br><br>
                <a href="login.php">Logout</a><br>
                <a href="Registros.php">Verificar registros</a>
            </form>
        </div>
    </div>
</body>
</html>