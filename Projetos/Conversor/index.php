<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Conversor de Arquivos</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo" required><br><br>
        <label for="converter_para">Converter para:</label>
        <select name="converter_para" required>
            <option value="pdf">TXT → PDF</option>
            <option value="json">CSV → JSON</option>
            <option value="webp">JPG/PNG → WEBP</option>
        </select><br><br>
        <button type="submit">Converter</button>
    </form>
</body>
    <footer>
        <p>&copy; <?php echo date('Y');?> João Ribeiro - Conversor de Arquivos</p>
    </footer>
</html>

<?php
require('fpdf186/fpdf.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["arquivo"])) {
    $arquivo = $_FILES["arquivo"];
    $nomeArquivo = $arquivo["name"];
    $tmpArquivo = $arquivo["tmp_name"];
    $extensaoArquivo = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $converterPara = $_POST["converter_para"];

    switch ($extensaoArquivo) {
        case "txt":
            if ($converterPara == "pdf") {
                converterTxtParaPdf($tmpArquivo, "output.pdf");
            } else {
                echo "Formato de conversão inválido.";
            }
            break;

        case "csv":
            if ($converterPara == "json") {
                converterCsvParaJson($tmpArquivo, "output.json");
            } else {
                echo "Formato de conversão inválido.";
            }
            break;

        case "jpg":
        case "jpeg":
        case "png":
            if ($converterPara == "webp") {
                converterImagemParaWebp($tmpArquivo, "output.webp");
            } else {
                echo "Formato de conversão inválido.";
            }
            break;

        default:
            echo "Formato não suportado.";
    }
}

function converterTxtParaPdf($arquivoTxt, $arquivoSaida) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    $conteudo = file($arquivoTxt);
    foreach ($conteudo as $linha) {
        $pdf->Cell(0, 10, utf8_decode($linha), 0, 1);
    }

    $pdf->Output("D", $arquivoSaida); // Força o download do PDF
}

function converterCsvParaJson($arquivoCsv, $arquivoSaida) {
    $csv = array_map("str_getcsv", file($arquivoCsv));
    $cabecalhos = array_shift($csv);
    $dadosJson = [];

    foreach ($csv as $linha) {
        $dadosJson[] = array_combine($cabecalhos, $linha);
    }

    file_put_contents($arquivoSaida, json_encode($dadosJson, JSON_PRETTY_PRINT));
    header('Content-Type: application/json');
    header('Content-Disposition: attachment; filename="output.json"');
    readfile($arquivoSaida);
}

function converterImagemParaWebp($arquivoImagem, $arquivoSaida) {
    $info = getimagesize($arquivoImagem);
    if ($info['mime'] == 'image/jpeg') {
        $imagem = imagecreatefromjpeg($arquivoImagem);
    } elseif ($info['mime'] == 'image/png') {
        $imagem = imagecreatefrompng($arquivoImagem);
    } else {
        echo "Formato de imagem não suportado.";
        return;
    }

    imagewebp($imagem, $arquivoSaida, 80);
    imagedestroy($imagem);

    header('Content-Type: image/webp');
    header('Content-Disposition: attachment; filename="output.webp"');
    readfile($arquivoSaida);
}
?>
