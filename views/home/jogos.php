<?php
  require_once('../../dao/jogoDao.php');
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
    <?php
    include '../componentes/cabecalho.php';
    ?>

    <?php
    include '../componentes/carroselAcao.php';
    ?>
    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="aventura" class="titulo">Aventura</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev2"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next2"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel2">
            <div>
                <img src="/Nexus/public/img/Jogos/mortal-kombat1.jpeg" alt="Imagem 1">
                <p class="game-title">Mortal Kombat 1</p>
                <p class="game-price">R$ 279,90</p>
            </div>
            <?php foreach(jogoDao::getByGenero(2) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="rpg" class="titulo">RPG</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev3"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next3"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel3">
            <div>
                <img src="/Nexus/public/img/Jogos/lof.jpeg" alt="Imagem 1">
                <p class="game-title">Lords of the Fallen</p>
                <p class="game-price">R$ 249,00</p>
            </div>
            <?php foreach(jogoDao::getByGenero(3) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    
    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="terror" class="titulo">Terror</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev4"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next4"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel4">
            <div>
                <img src="/Nexus/public/img/Jogos/tew.jpeg" alt="Imagem 1">
                <p class="game-title">The Evil Within</p>
                <p class="game-price">R$ 85,99</p>
            </div>
            <?php foreach(jogoDao::getByGenero(10) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="esportes" class="titulo">Esporte</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev5"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next5"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel5">
            <div>
                <img src="/Nexus/public/img/Jogos/ibm23.jpg" alt="Imagem 1">
                <p class="game-title">International Basketball Manager 23</p>
                <p class="game-price">R$ 66,99</p>
            </div>
            <?php foreach(jogoDao::getByGenero(6) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="estrategia" class="titulo">Estratégia</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev6"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next6"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel6">
            <div>
                <img src="/Nexus/public/img/Jogos/dungeons4.png" alt="Imagem 1">
                <p class="game-title">Dungeons 4</p>
                <p class="game-price">R$ 219,00</p>
            </div>
            <?php foreach(jogoDao::getByGenero(4) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="casual" class="titulo">Casual</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev7"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next7"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel7">
            <div>
                <img src="/Nexus/public/img/Jogos/sfk.png" alt="Imagem 1">
                <p class="game-title">StrikeForce Kitty</p>
                <p class="game-price">R$ 16,19</p>
            </div>
            <?php foreach(jogoDao::getByGenero(19) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="carousel-container">
        <div class="titulos-botaos">
            <div class="titulos-carrosel">
                <h1 id="simulacao" class="titulo">Simulação</h1>
            </div>
            <div class="button-container">
                <button class="carousel-button prev8"><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></button>
                <button class="carousel-button next8"><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <div class="carousel8">
            <div>
                <img src="/Nexus/public/img/Jogos/wrc.jpeg" alt="Imagem 1">
                <p class="game-title">EA SPORTS™ WRC</p>
                <p class="game-price">R$ 249,00</p>
            </div>
            <?php foreach(jogoDao::getByGenero(5) as $jogo): ?>
            <div onclick="abrirPagina(this)" data-url="../componentes/descJogos.php" style="cursor: pointer;">
            <img src="../../public/img/capajogos/<?php echo basename($jogo['capaJogo']); ?>" alt="Imagem 1" >
                <p class="game-title"><?php echo $jogo['nomeJogo']; ?></p>
                <p class="game-price">R$ <?php echo $jogo['precoJogo']; ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php
    include '../componentes/rodape.php';
    ?>
</body>
</html>