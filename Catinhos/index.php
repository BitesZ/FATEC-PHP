<?php
    $url = "https://api.thecatapi.com/v1/images/search?limit=10";
    $imagens = json_decode(file_get_contents($url));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="logo">
        <img src="img/logo.png">
    </div>
    <div class="flexbox">
    <?php
        foreach ($imagens as $imagem){
            $urlImagem = $imagem->url;
            echo '<img src="'. $urlImagem . '" alt="Gatos" class="imgsz"">';
        }
    ?>
    </div>
    <div class="sobrepor">
        <img src="img/cats.png" alt="Imagem sobreposta">
    </div>
    <div class="footer-text" title="Desenvolvimento de Software Multiplataforma - Fatec"><p>Site criado por Pedro Ricardo da Silva Tavares do Segundo Ciclo de DSM</p></div>
</body>
</html>