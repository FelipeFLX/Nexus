<?php
    require_once('../../dao/jogoDao.php');
    require_once('../../dao/comentarioDao.php');
    require_once('../../dao/userDao.php');

    $id = $_GET['id'];
    if ($id == null) {
        header("Location: /Nexus/views/home/index.php");
    } 
    if (JogoDao::getById($id) == null) {
        header("Location: /Nexus/views/home/index.php");
    }

    $jogo = JogoDao::getById($id);
    $comentarios = ComentarioDao::getAll($id);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/Nexus/public/css/styleJogos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title><?php echo $jogo['nomeJogo']; ?></title>
</head>

<body>  
    <?php
    session_start();
    if (!isset($_SESSION['login']) || $_SESSION['login'] == '') {
        include '../componentes/headerNotLog.php';
    } else {
        include '../componentes/headerLog.php';
    }
    ?>
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
    <div class="jogos-container">
        <h1 class="titu-jogos"><?php echo $jogo['nomeJogo'] ?></h1>
        <div class="ficTec">
            <p class="borderText"><?php echo JogoDao::getGenero($jogo['generoPrincipalJogo']); ?> <?php if (!$jogo['subgeneroJogo'] == 0) { echo "e " . $jogo['subgeneroJogo']; } echo JogoDao::getGenero($jogo['subgeneroJogo']); ?></p>
            <p class="borderText">Avaliações: <?php echo $jogo['notaJogo'] ?></p>
            <p>Classificação indicativa: <?php if($jogo['classificacaoJogo'] == "1"){echo 'Livre';} else {echo JogoDao::getClassificacao($jogo['classificacaoJogo']) . " anos"; }?></p> 
        </div>
        <div class="ladoAlado">
            <div class="carrosel">
                <div id="carouselExampleSlidesOnly" class="carousel slide carrosel-container" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <?php $firstImage = true; ?>
                    <?php foreach (JogoDao::getBackgrounds($id) as $backgroundImage): ?>
                        <div class="carousel-item <?php echo $firstImage ? 'active' : ''; ?>">
                            <img src="../../public/img/backgroundJogos/<?php echo $backgroundImage; ?>" class="d-block w-100" alt="...">
                        </div>
                        <?php $firstImage = false; ?>
                    <?php endforeach; ?>
                    </div>
                </div>
                <div class="textDesc">
                    <p><?php echo $jogo['descJogo'] ?></p>
                </div>
            </div>
            <div class="compraJogo">
                <img src="../../public/img/logoJogos/<?php echo $jogo['logoJogo']; ?>" alt="..." width="250" height="auto">
                <p class="textPreco"><?php if($jogo['precoJogo'] == 0.00){echo 'Gratuito';} else {echo 'R$ ' . str_replace('.', ',', $jogo['precoJogo']); }?></p>
                <button class="botaoCompra"><p>Comprar <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></p></button>
                <button class="botaoFav"><p>Lista de desejos <i class="fa-regular fa-bookmark" style="color: #ffffff;"></i></p></button>
                <div class="descText bordaBottom first">
                    <p>Desenvolvedor</p>
                    <p><?php  echo $jogo['desenvolvedoraJogo']?></p>
                </div>
                <div class="descText bordaBottom mt-3">
                    <p>Data de lançamento</p>
                    <p><?php echo date('d/m/Y', strtotime($jogo['dataLancamentoJogo'])); ?></p>
                </div>
                <div class="descText mt-3">
                    <p>Plataforma</p>
                    <p><?php echo JogoDao::getPlataforma($jogo['plataformaJogo']); ?></p>
                </div>
            </div>
        </div>
        <div class="formAva">
            <h3 class="subTitu">Jogue e compartilhe! Sua avaliação é valiosa para outros jogadores.</h3>
            <form action="../../controllers/comentarioController.php" method="POST" >
                <input type="hidden" name="idJogo" value="<?php echo $id ?>">
                <input type="hidden" name="idUser" value="<?php if ( !isset($_SESSION['id'])) { echo "";} else echo $_SESSION['id'] ?>">
                <div class="ladoAlado2">
                    <div>
                        <p class="textAva">Avaliação:</p>
                    </div>
                    <div class="avaliacao">
                        <input type="radio" id="estrela5" name="nota" value="5">
                        <label for="estrela5">&#9733;</label>
                        <input type="radio" id="estrela4" name="nota" value="4">
                        <label for="estrela4">&#9733;</label>
                        <input type="radio" id="estrela3" name="nota" value="3">
                        <label for="estrela3">&#9733;</label>
                        <input type="radio" id="estrela2" name="nota" value="2">
                        <label for="estrela2">&#9733;</label>
                        <input type="radio" id="estrela1" name="nota" value="1">
                        <label for="estrela1">&#9733;</label>
                    </div>
                </div>
                    <p class="textAva">Comentário:</p>
                    <textarea id="mensagem" name="comentario" rows="4" maxlength="100" required></textarea>
                    <button type="submit" class="botaoEnviar" name="option" value="INSERT">Enviar</button>
                </form>
        </div>
        <h3 class="subTitu2">Comentarios</h3>
        <section id="testimonials">
            <?php if ($comentarios == null) {
                echo "<br><h1>Sem comentários...</h1>";
                echo '<h5>Seja o primeiro(a) a comentar!</h5><br>';
            } ?>
            <?php foreach($comentarios as $comentario): ?>
            <?php $userInfo = UserDao::selectId($comentario['idUser']); ?>
            <div class="testimonial-box-container">
                    <div class="testimonial-box">
                        <div class="box-top">
                            <div class="profile">
                                <div class="profile-img">
                                    <img src="/Nexus/public/img/Perfil/mhPerfil.jpg" />
                                </div>
                                <div class="name-user">
                                    <strong><?php echo $userInfo['nomeUser'] . " " . $userInfo['sobrenomeUser'];  ?></strong>
                                    <span>@<?php echo $userInfo['nickUser'] ?></span>
                                </div>
                            </div>
                            <div class="reviews">
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        $classeEstrela = ($i <= $comentario['notaUser']) ? 'fas fa-star' : 'far fa-star';
                                        echo '<i class="' . $classeEstrela . ' fa-star"></i>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="client-comment">
                            <p><?php echo $comentario['comentarioUser'] ?></p>
                        </div>
                        <div class="name-user">
                            <span><?php echo date('d/m/Y H:i', strtotime($comentario['dataPostagem'])); ?></span>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        new bootstrap.Carousel(document.getElementById('carouselExampleSlidesOnly'), {
                            interval: 2000 // Adjust the interval as needed
                        });
                    });
                </script>
            <?php endforeach?>
    </div>
    <?php
    include '../componentes/rodape.php';
    ?>
</body>

</html>