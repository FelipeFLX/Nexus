<?php
    session_start();
    if (isset($_SESSION['login'])) {
        header('Location: /Nexus/views/home/index.php');
    } 
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../public/css/login.css">
    <title>Nexus</title>
</head>

<body>
    <div class="form-container2">
    <button style="background-color: transparent; border: none; display: block; margin: 0 auto;"><a href="/Nexus/views/home/index.php"><img src="/Nexus/public/img/Logo/Nome-Logo.png" alt="imagem" width="200" height="auto" class="img-login"></a></button>
        <h3 class="titulo">Login</h3>
        <form action="../../controllers/loginController.php" method="post">
         <input type="hidden" name="option" value="READ">
        <div class="form-flutuante">
                <input type="email" class="form-controle inputs" id="email" name="email" maxlength="100" required>
                <label for="email" class="label-texto">Email</label>
            </div>
            <div class="form-flutuante">
                <input type="password" class="form-controle inputs" id="senha" name="senha" maxlength="35" required>
                <label for="senha" class="label-texto">Senha</label>
            </div>
            <button  class="botao mb-3" type="submit">Entrar</button>
        </form>
        <a class="link" href="./cadastro.php">Não tem uma conta?</a><br>
    </div>
</body>

</html>