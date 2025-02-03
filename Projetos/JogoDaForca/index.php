<?php
session_start();


$palavras = ["computador", "programacao", "desenvolvimento", "teclado", "javascript", "php"];

if (!isset($_SESSION['palavra'])) {
    $_SESSION['palavra'] = $palavras[array_rand($palavras)]; 
    $_SESSION['letras_corretas'] = [];
    $_SESSION['letras_erradas'] = [];
    $_SESSION['tentativas'] = 6; 
}

$palavra = $_SESSION['palavra'];
$palavra_array = str_split($palavra); 

if (isset($_POST['letra'])) {
    $letra = strtolower($_POST['letra']);   
    if (in_array($letra, $_SESSION['letras_corretas']) || in_array($letra, $_SESSION['letras_erradas'])) {
        $mensagem = "Você já tentou a letra '$letra'.";
    } else {
        if (in_array($letra, $palavra_array)) {
            $_SESSION['letras_corretas'][] = $letra;
        } else {
            $_SESSION['letras_erradas'][] = $letra;
            $_SESSION['tentativas']--;
        }
    }
}


$palavra_oculta = "";
$vitoria = true;

foreach ($palavra_array as $letra) {
    if (in_array($letra, $_SESSION['letras_corretas'])) {
        $palavra_oculta .= $letra . " ";
    } else {
        $palavra_oculta .= "_ ";
        $vitoria = false;
    }
}

if ($vitoria) {
    $mensagem = "Parabéns! Você venceu! A palavra era '<strong>$palavra</strong>'.";
    session_destroy();
} elseif ($_SESSION['tentativas'] <= 0) {
    $mensagem = "Fim de jogo! Você perdeu! A palavra era '<strong>$palavra</strong>'.";
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Forca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Jogo da Forca</h1>
    
    <p class="word"><?= $palavra_oculta; ?></p>
    
    <p>Tentativas restantes: <span class="attempts"><?= $_SESSION['tentativas']; ?></span></p>

    <p>Letras erradas: <span class="letter"><?= implode(" ", $_SESSION['letras_erradas']); ?></span></p>

    <?php if (isset($mensagem)) : ?>
        <p class="message"><?= $mensagem; ?></p>
        <a href="index.php">Jogar Novamente</a>
    <?php else : ?>
        <form method="POST">
            <label>Digite uma letra:</label>
            <input type="text" name="letra" maxlength="1" required>
            <button type="submit">Tentar</button>
        </form>
    <?php endif; ?>
</body>
</html>

