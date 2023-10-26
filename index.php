<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="Script JS/script.js"></script>
    <title>Nexus</title>
</head>
<body>
    <?php
    include 'Componentes/cabecalho.php';
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
            <img src="IMAGENS/Logo/Foto-Home.png" alt="Imagem Home" width="400" height="auto" class="imagem-home">
            <img src="IMAGENS/Logo/Foto-Texto.png" alt="Imagem Texto" width="380" height="auto" class="imagem-texto">
        </div>
        <h1 id="destaques" class="titulo">Destaques</h1>
            <?php 
            include 'Componentes/carrosel.php'
            ?>
        <h1 id="noticias" class="titulo">Notícias</h1>
        <div class="noticias">
            <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
            <img src="IMAGENS/Noticias/BGS.png" class="card-img-top" alt="Imagem Noticia">
                <div class="card-body">
                    <h5 class="card-title t-cor">Evento começa nesta quinta; Veja o passeio pelo evento</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">BGS 2023</h6>
                    <p class="card-text t-cor">Brasil Game Show abre para o público geral a partir desta quinta-feira (12) e acontece no Expo Center Norte, em São Paulo, até o domingo (15) com jeito de começo do fim.</p>
                    <a href="https://g1.globo.com/pop-arte/games/noticia/2023/10/12/bgs-2023-comeca-nesta-quinta-sem-xbox-e-playstation-veja-passeio-pelo-evento.ghtml" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                </div>
            </div>
            <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
            <img src="IMAGENS/Noticias/Pokemon.png" class="card-img-top" alt="Imagem Noticia">
                <div class="card-body">
                    <h5 class="card-title t-cor">Jogadores se reúnem anos após o lançamento e amizade vira grande motor de jogo  </h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Pokemon GO</h6>
                    <p class="card-text t-cor">Comunidade de jogadores do Ceará foi considerada mais engajada do Brasil em agosto pela empresa desenvolvedora do jogo.</p>
                    <a href="https://g1.globo.com/ce/ceara/noticia/2023/09/23/pokemon-go-jogadores-se-reunem-em-encontros-anos-apos-o-lancamento-e-amizade-vira-grande-motor-do-jogo.ghtml" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                </div>
            </div>
            <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
            <img src="IMAGENS/Noticias/FC24.png" class="card-img-top" alt="Imagem Noticia">
                <div class="card-body">
                    <h5 class="card-title t-cor">1° Game pós-'Fifa' passa a usar partidas reais para recriar movimentos de jogadores</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary t-cor" style="color: white;">FC 24</h6>
                    <p class="card-text t-cor">'Há alguns poucos anos não pensávamos que seria possível', diz produtor Sam Rivera em entrevista ao g1. Jogo é lançado para público geral nesta sexta-feira (29).</p>
                    <a href="https://g1.globo.com/pop-arte/games/noticia/2023/09/29/fc-24-1o-game-pos-fifa-passa-a-usar-partidas-reais-para-recriar-movimentos-de-jogadores.ghtml" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                </div>
            </div>
            <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
            <img src="IMAGENS/Noticias/terror.png" class="card-img-top" alt="Imagem Noticia">
                <div class="card-body">
                    <h5 class="card-title t-cor">7 Filmes de terror que ganharam versões para videogame</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Jogos</h6>
                    <p class="card-text t-cor">São muitos os filmes de terror que fizeram história no cinema. Seja por apresentarem um enredo repleto de sustos e violência, ou por mostrarem ao mundo vilões icônicos, dos quais basta olhar para eles que o medo aparece.</p>
                    <a href="https://www.tecmundo.com.br/voxel/269265-filmes-terror-ganharam-versoes-videogame.htm" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                </div>
            </div>
            <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
            <img src="IMAGENS/Noticias/mk1.jpg" class="card-img-top" alt="Imagem Noticia">
                <div class="card-body">
                    <h5 class="card-title t-cor">Mortal Kombat 1 ganha atualização com melhorias e correções no Switch</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Mortal Kombat</h6>
                    <p class="card-text t-cor">O jogo de luta Mortal Kombat 1 finalmente ganhou uma atualização de grande porte para a plataforma Nintendo Switch, trazendo uma série de mudanças no título.</p>
                    <a href="https://www.tecmundo.com.br/voxel/272648-mortal-kombat-1-ganha-atualizacao-melhorias-correcoes-switch.htm" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                </div>
            </div>
            <div class="card cards" style="width: 20rem; background-color: rgba(12,12,12, 0.50);">
            <img src="IMAGENS/Noticias/nitendo.jpg" class="card-img-top" alt="Imagem Noticia">
                <div class="card-body">
                    <h5 class="card-title t-cor">Nintendo quer localizar todos os jogos em PT-BR futuramente</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Nintendo</h6>
                    <p class="card-text t-cor">O passado da Nintendo mostra que a empresa sempre teve uma proximidade com o público brasileiro.</p>
                    <a href="https://g1.globo.com/ce/ceara/noticia/2023/09/23/pokemon-go-jogadores-se-reunem-em-encontros-anos-apos-o-lancamento-e-amizade-vira-grande-motor-do-jogo.ghtml" target="_blank" class="card-link" style="color: #a926f1;">Leia mais</a>
                </div>
            </div>
        </div>
        <h1 id="novidades" class="titulo">Novidades</h1>
        <div class="container-trailer">
            <div class="trailers">
                <a href="https://www.youtube.com/watch?v=o604zywV14Q&t" target="_blank"><img src="IMAGENS/Trailers/jujutsu.jpg" alt="Título do Vídeo" width="380" height="auto"></a>
                <p class="t-trailer">Jujutsu Kaisen Cursed Clash - Official Release Date Trailer</p>
            </div>
            <div class="trailers">
                <a href="https://www.youtube.com/watch?v=Xt1VEgUxTMQ" target="_blank"><img src="IMAGENS/Trailers/aders.jpg" alt="Título do Vídeo" width="380" height="auto"></a>
                <p class="t-trailer">The Alters - All By Myselves | Official Game Trailer</p>
            </div>
            <div class="trailers">
                <a href="https://www.youtube.com/watch?v=Gkfip4T13bQ" target="_blank"><img src="IMAGENS/Trailers/lof.jpg" alt="Título do Vídeo" width="380" height="auto"></a>
                <p class="t-trailer">LORDS OF THE FALLEN - Official Launch Trailer | Out October 13th on PC, PS5 & Xbox Series X|S</p>
            </div>
        </div>
    </div>
    <?php
    include 'Componentes/rodape.php';
    ?>
</body>
</html>