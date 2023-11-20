<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/Nexus/public/css/styleJogos.css">
    <link rel="shortcut icon" href="/Nexus/public/img/Logo/Logo Nexus Icone.png"/>
    <script src="/Nexus/public/js/script.js"></script>
    <title>Nexus</title>
</head>

<body>
    <?php
    include '../componentes/cabecalho.php';
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
        <h1 class="titu-jogos">Assassin's Creed Mirage: Edição Deluxe</h1>
        <div class="ficTec">
            <p class="borderText">Ação e Aventura</p>
            <p class="borderText">Avaliações: 4.4</p>
            <p>Classificação indicativa: 16 anos</p> 
        </div>
        <div class="ladoAlado">
            <div class="carrosel">
                <div id="carouselExampleSlidesOnly" class="carousel slide carrosel-container" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/Nexus/public/img/Banners/mirage2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/Nexus/public/img/Banners/mirage1.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/Nexus/public/img/Banners/mirage3.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/Nexus/public/img/Banners/mirage4.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="/Nexus/public/img/Banners/mirage5.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="textDesc">
                    <p>A Edição Deluxe inclui um traje inspirado em Prince of Persia, visuais de águia e montaria, armas e mais! Vivencie a história de Basim, um astucioso ladino de rua que está em busca de respostas e de justiça enquanto percorre as ruas agitadas da Bagdá do século IX, se tornando um Mestre Assassino mortal e transformando seu destino de maneiras que ele jamais imaginou.</p>
                </div>
            </div>
            <div class="compraJogo">
                <img src="/Nexus/public/img/nomeJogos/mirageLogo.webp" alt="..." width="180" height="auto">
                <p class="textPreco">R$ 249,99</p>
                <button class="botaoCompra"><p>Comprar <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i></p></button>
                <button class="botaoFav"><p>Lista de desejos <i class="fa-regular fa-bookmark" style="color: #ffffff;"></i></p></button>
                <div class="descText bordaBottom first">
                    <p>Desenvolvedor</p>
                    <p>Ubisoft</p>
                </div>
                <div class="descText bordaBottom mt-3">
                    <p>Data de lançamento</p>
                    <p>05/10/2023</p>
                </div>
                <div class="descText mt-3">
                    <p>Plataforma</p>
                    <p>Windows</p>
                </div>
            </div>
        </div>
        <div class="formAva">
            <h3 class="subTitu">Jogue e compartilhe! Sua avaliação é valiosa para outros jogadores.</h3>
            <form>
                <div class="ladoAlado2">
                    <div>
                        <p class="textAva">Avaliação:</p>
                    </div>
                    <div class="avaliacao">
                        <input type="radio" id="estrela5" name="estrela" value="5">
                        <label for="estrela5">&#9733;</label>
                        <input type="radio" id="estrela4" name="estrela" value="4">
                        <label for="estrela4">&#9733;</label>
                        <input type="radio" id="estrela3" name="estrela" value="3">
                        <label for="estrela3">&#9733;</label>
                        <input type="radio" id="estrela2" name="estrela" value="2">
                        <label for="estrela2">&#9733;</label>
                        <input type="radio" id="estrela1" name="estrela" value="1">
                        <label for="estrela1">&#9733;</label>
                    </div>
                </div>
                <p class="textAva">Comentário:</p>
                <textarea id="mensagem" name="mensagem" rows="4"  required></textarea>
            </form>
        </div>
        <section id="testimonials">
            <div class="testimonial-box-container">
                <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="/Nexus/public/img/Perfil/mhPerfil.jpg" />
                            </div>
                            <div class="name-user">
                                <strong>Matheus Henrique</strong>
                                <span>@tyran15</span>
                            </div>
                        </div>
                        <div class="reviews">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="client-comment">
                        <p>Muito legal o joguinho, gostei muito, parabens aos desenvolvedores, jogarei mais vezes, recomendarei aos meus amigos❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️</p>
                    </div>
                </div>
            </div>
    </div>
    <?php
    include '../componentes/rodape.php';
    ?>
</body>

</html>