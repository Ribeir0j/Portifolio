<?php 
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>
<body>
    <h1>Bem vindo!!!</h1>
    <p><b>O LOGIN FOI BEM SUCEDIDO!</b></p>
</body>
</html>
