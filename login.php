<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Nexus</title>
</head>

<body>
    <div class="form-container">
        <a href="index.php"><img src="IMAGENS/Logo/Nome-Logo.png" alt="imagem" width="200" height="auto" class="img-login"></a>
        <h3 class="titulo">Login</h3>
        <form action="./Valida_login.php" method="post">
        <div class="form-floating mb-3">
                <input type="email" class="form-control input" id="email" name="email" maxlength="100" required>
                <label for="email" class="label-texto">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control input" id="senha" name="senha" maxlength="35" required>
                <label for="senha" class="label-texto">Senha</label>
            </div>
            <button  class="botao" type="submit">Entrar</button>
        </form>
        <a class="link" href="cadastro.php">Não tem uma conta?</a>
    </div>
</body>

</html>