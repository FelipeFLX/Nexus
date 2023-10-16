<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Nexus</title>
</head>
<body>
    <div class="form-container">
        <img src="IMAGENS/Nome-Logo.png" alt="imagem" width="150" height="auto" class="img-login">
        <h3 class="titulo">Cadastro</h3>
        <form>
        <div class="form-floating mb-3">
            <input type="text" class="form-control input" id="floatingName" placeholder="Seu nome completo">
            <label for="floatingName" class="label-texto">Nome Completo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control input" id="floatingUsername" placeholder="Nome de Usuario">
            <label for="floatingUsername">Nome de Usuario</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control input" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control input" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
        </div>
        </form>
    </div>
</body>
</html>