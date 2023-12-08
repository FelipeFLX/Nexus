<?php
require_once('../../dao/noticiasDao.php');
require_once('../../dao/trailerDao.php');

$Noticias = NoticiasDao::getAll();
$trailers = TrailerDao::getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/Nexus/public/css/style.css">
    <script src="../Nexus/public/js/slide.js" defer></script>
    <title>Nexus</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['login'])) {
        include '../componentes/headerLog.php';
    } else {
        include '../componentes/headerNotLog.php';
    }
    ?>
    <div class="container-all">
        <div class="navbar2">
            <div class="pesquisar">
                <div class="input-group">
                    <input type="text" class="form-control rounded-pill" placeholder="Pesquisar...">
                </div>
            </div>
            <div class="ancoras">
                <a class="ancora" href="#destaques">Destaques</a>
                <a class="ancora" href="#noticias">Notícias</a>
                <a class="ancora" href="#novidades">Novidades</a>
            </div>
        </div>
        <div class="container-imagem">
            <img src="/Nexus/public/img/Logo/Foto-Home.png" alt="Imagem Home" width="400" height="auto" class="imagem-home">
            <img src="/Nexus/public/img/Logo/Foto-Texto.png" alt="Imagem Texto" width="380" height="auto" class="imagem-texto">
        </div>
        <?php
        include '../componentes/carrosel.php'
        ?>
        <h1 id="noticias" class="titulo">Notícias</h1>
        <div class="noticias">
            <?php foreach ($Noticias as $noticia) : ?>
                <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
                    <img src="/Nexus/public/img/capaNoticias/ <?php echo $noticia['capaNoticia'] ?>" class="card-img-top" alt="Imagem Noticia">
                    <div class="card-body">
                        <h5 class="card-title t-cor"><?php echo $noticia['tituloNoticia'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $noticia['temaNoticia'] ?></h6>
                        <?php
                        // Divide o textoNoticia em palavras
                        $palavras = explode(' ', $noticia['textoNoticia']);

                        // Seleciona apenas as primeiras 20 palavras
                        $textoLimitado = implode(' ', array_slice($palavras, 0, 40));
                        ?>
                        <p class="card-text t-cor"><?php echo $textoLimitado; ?></p>
                        <p class="card-text t-cor"><?php echo date('d/m/Y H:i', strtotime($noticia['dataModfcNoticia'])); ?></p>
                        <a href="<?php echo $noticia['linkNoticia'] ?>" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <h1 id="novidades" class="titulo">Novidades</h1>
        <div class="container-trailer">
            <?php foreach ($trailers as $trailer) : ?>
                <div class="trailers">
                    <?php
                    $larguraOriginal = 1280;
                    $alturaOriginal = 720;
                    ?>
                    <iframe width="380" height="<?php echo 380 * ($alturaOriginal / $larguraOriginal); ?>" src="<?php echo str_replace("\\", "", $trailer['linkTrailer']) ?>" frameborder="0" allowfullscreen></iframe>
                    <p class="t-trailer"><?php echo $trailer['tituloTrailer']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    include '../componentes/rodape.php';
    ?>
</body>

</html>