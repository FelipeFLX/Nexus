<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../public/css/login.css">
    <script src="../../public/js/script.js"></script>
    <title>Nexus</title>
</head>
<body>
    <div class="form-container">
    <button style="background-color: transparent; border: none; display: block; margin: 0 auto;"><a href="/Nexus/views/home/index.php"><img src="/Nexus/public/img/Logo/Nome-Logo.png" alt="imagem" width="200" height="auto" class="img-login"></a></button>
        <h3 class="titulo">Cadastro</h3>
        <form action="../../controllers/loginController.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <input type="hidden" name="option" value="INSERT">
            <div class="form-linha">
                <div class="form-grupo">
                    <div class="form-flutuante">
                        <input type="text" class="form-controle inputs" id="name" name="nome" maxlength="60" required>
                        <label for="name" class="label-texto">Nome</label>
                    </div>
                </div>
                <div class="form-grupo">
                    <div class="form-flutuante">
                        <input type="text" class="form-controle inputs" id="sobrenome" name="sobrenome" maxlength="60" required>
                        <label for="sobrenome" class="label-texto">Sobrenome</label>
                    </div>
                </div>
            </div>
            <div class="form-flutuante">
                <input type="text" class="form-controle inputs" id="nick" name="nick" maxlength="35" required>
                <label for="nick" class="label-texto">Nome de Usuario</label>
            </div>
            <div class="form-flutuante mb-1">
                <input type="text" class="form-controle inputs" id="cpf" name="cpf" maxlength="35" required>
                <label for="cpf" class="label-texto">CPF</label>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Por que pedimos o seu CPF?
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">O CPF pode ser usado como parte do processo de verificação de identidade para ajudar a prevenir atividades fraudulentas, como compras não autorizadas ou uso indevido de informações de pagamento.</div>
                    </div>
                </div>
            </div>
            <div class="form-flutuante">
                <input type="text" class="form-controle inputs" id="dtnasc" name="dtnasc" required>
                <label for="dtnasc" class="label-texto">Data de Nascimento</label>
            </div>
            <div class="form-linha">
                <div class="form-grupo-email">
                    <div class="form-flutuante">
                        <input type="email" class="form-controle inputs" id="email" name="email" maxlength="100" required>
                        <label for="email" class="label-texto">Email</label>
                    </div>
                </div>
                <div class="form-grupo-senha">
                    <div class="form-flutuante">
                        <input type="password" class="form-controle inputs" id="senha" name="senha" maxlength="35" required>
                        <label for="senha" class="label-texto">Senha</label>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                $('#dtnasc').mask('00/00/0000');
                });

                $(document).ready(function() {
                $('#cpf').mask('000.000.000-00');
                });
            </script>
            <button type="button" class="botao mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Prosseguir</button>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #111113;">
                    <div class="modal-header" style="background-color: #111113;">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white;">Mostre sua identidade gamer!</h1>
                        <button type="button" class="btn-close d-flex align-items-center" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="background-color: #111113;">
                    <div class="mb-3 text-center">
                        <h5 style="color: white;">Selecione uma imagem:</h5>
                        <label for="imagem" style="display: block;"><img id="imagem-preview" src="../../public/img/Logo/camera.png" alt="Preview da imagem" style="max-width: 100%; max-height: 200px; border-radius: 50%;"></label>
                        <input type="file" id="imagem" name="imagem" accept="image/*" style="display: none;" onchange="previewImage()">
                        <label for="imagem" id="imagem-label" class="btn mt-3" style="color: white; background-color: #a926f1; border-color: #a926f1;">Escolher Imagem</label>
                    </div>
                    </div>
                    <div class="modal-footer" style="background-color: #111113;">
                        <button class="botao" type="submit">Cadastrar</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
        <a class="link" href="./login.php">Já tem uma conta?</a>
    </div>
    <script src="./validacaoCampos.js"></script>
    
</body>

</html>
    <script src="./validacaoCampos.js"></script>
</body>
</html>
