<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="Script JS/script.js"></script>
    <title>Nexus</title>
</head>

<body>
    <div class="form-container">
        <a href="index.php"><img src="IMAGENS/Logo/Nome-Logo.png" alt="imagem" width="200" height="auto" class="img-login"></a>
        <h3 class="titulo">Cadastro</h3>
        <form action="./Scripts_PHP/Login/Registro.php  " method="post" class="needs-validation" novalidate>
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="name" name="nome" maxlength="60" required>
                <label for="name" class="label-texto">Nome Completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="nick" name="nick" maxlength="35" required>
                <label for="nick" class="label-texto">Nome de Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control input" id="dtnasc" name="dtnasc" required>
                <label for="dtnasc" class="label-texto">Data de Nascimento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control input" id="email" name="email" maxlength="100" required>
                <label for="email" class="label-texto">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control input" id="senha" name="senha" maxlength="35" required>
                <label for="senha" class="label-texto">Senha</label>
            </div>
            <script>
                $(document).ready(function() {
                $('#dtnasc').mask('00/00/0000');
                });
            </script>
            <button class="botao" type="submit">Cadastrar</button>
        </form>
        <a class="link" href="login.php">Já tem uma conta?</a>
    </div>
    <?php
    //require('./Scripts/Login/Registro.php')
    ?>
    <script src="./validacaoCampos.js"></script>
</body>

</html>
