<?php
  require_once('../../dao/jogoDao.php');

  $Jogos = jogoDao::getAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Nexus/public/css/style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/Nexus/public/js/script.js"></script>
    <title>Nexus</title>
</head>
<body>
    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="destaques" class="titulo">Destaques</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel">
        <?php foreach($Jogos as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php?id=<?php echo $jogo['idJogo'] ?>" style="cursor: pointer;">
            <img src="../../public/img/capajogos/ <?php echo $jogo['capaJogo']; ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price"><?php if($jogo['precoJogo'] == 0.00){echo 'Gratuito';} else {echo 'R$ ' . str_replace('.', ',', $jogo['precoJogo']); }?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>