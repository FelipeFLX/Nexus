<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="/Nexus/public/css/cabecalho.css">
  <script src="/Nexus/public/js/script.js"></script>
  <title>Nexus</title>
</head>

<body>
  <header>
    <div class="ladoAlado3">
      <div class="ladoAladoHeader">
        <button style="background-color: transparent; border: none;"><a href="/Nexus/views/home/index.php"><img src="/Nexus/public/img/Logo/Logo Nexus Icone.png" alt="Logo" width="70" height="alto" class="imagem"></a></button>
        <div class="menu">
          <ul>
            <li><a href="/Nexus/views/home/jogos.php">Loja de Jogos</a></li>
            <li><a href="/Nexus/views/home/contato.php">Suporte</a></li>
            <li><a href="/Nexus/views/home/sobre.php">Sobre</a></li>
          </ul>
        </div>'
      </div>
      <div class="lado3">
        <form action="/Nexus/views/user/login.php" method="post">
          <input type="hidden" name="link" value="<?php echo basename($_SERVER['PHP_SELF']) ?>">
          <div class="profile-img">
            <button style="background-color: transparent; border: none"><a href="/Nexus/views/user/login.php"><img src="/Nexus/public/img/Perfil/perfil.png" alt="Imagem" class="dropdown-image"></a></button>
          </div>
        </form>
        <div class="profile-img ms-2">
          <button style="background-color: transparent; border: none;"><a href="/Nexus/views/user/login.php"><img src="/Nexus/public/img/Logo/carrinho.png" alt="Imagem" class="dropdown-image"></a></button>
        </div>
      </div>
    </div>
  </header>
</body>

</html>