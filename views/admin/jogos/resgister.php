<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="/Nexus/public/css/css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php
  require_once("../../componentes/header-adm.php");
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php
      require_once("../../componentes/menu-adm.php");
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" enctype="multipart/form-data" action="../../../controllers/jogoController.php" class="needs-validation" novalidate>
            <input type="hidden" name="option" value="CREATE">
            <div class="card-header">
              <strong>INFORMAÇÕES DO JOGO</strong>
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2 text-center">
                <div class="bg-white rounded img-fluid">
                  <img id="imagemPreview" src="../../img/user/padrao.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class=" col-md-9">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <label for="nome" class="col-form-label">Nome do Jogo:</label>
                    <input type="text" class="form-control" name="nomeJogo" maxlength="50">
                  </div>
                  <div class="col-md-1 mb-3">
                    <label for="sobrenome" class="col-form-label">Preço:</label>
                    <input type="number" class="form-control" name="preco" maxlength="50">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">Plataforma:</label>
                    <select class="form-select" name="plataforma" aria-label="Default select example">
                      <option value="1">PlayStation</option>
                      <option value="2">PlayStation 2</option>
                      <option value="3">PlayStation 3</option>
                      <option value="4">PlayStation 4</option>
                      <option value="5">PlayStation 5</option>
                      <option value="6">PlayStation Vita</option>
                      <option value="7">PSP</option>
                      <option value="8">NES</option>
                      <option value="9">SNES</option>
                      <option value="10">Nintendo 64</option>
                      <option value="11">Nintendo GameCube</option>
                      <option value="12">Nintendo Wii</option>
                      <option value="13">Nintendo Wii U</option>
                      <option value="14">Nintendo Switch</option>
                      <option value="15">Nintendo Game Boy</option>
                      <option value="16">Nintendo Game Boy Advance</option>
                      <option value="17">Nintendo DS</option>
                      <option value="18">Nintendo 3DS</option>
                      <option value="19">Xbox Clássico</option>
                      <option value="20">Xbox 360</option>
                      <option value="21">Xbox One</option>
                      <option value="22">Xbox Series X/S</option>
                      <option value="23">Windows</option>
                      <option value="24">Linux</option>
                      <option value="25">Mac OS</option>
                      <option value="26">Android</option>
                      <option value="27">iOS</option>
                    </select>
                  </div>                 
                  <div class="col-md-3 mb-4">
                    <label for="nome" class="col-form-label">Desenvolvedora:</label>
                    <input type="text" class="form-control" name="desenvolvedora" maxlength="50">
                  </div>
                  <div class="col-md-6">
                    <label for="floatingTextarea2">Descrição do Jogo:</label>
                    <textarea class="form-control" name="descJogo" id="floatingTextarea2" style="height: 100px"></textarea>
                  </div>
                  <div class="col-md-2">
                    <label for="nasc" class="col-form-label">Genero:</label>
                    <select class="form-select" name="genero" aria-label="Default select example">
                      <option value="1">Ação</option>
                      <option value="2">Aventura</option>
                      <option value="3">RPG</option>
                      <option value="4">Estratégia</option>
                      <option value="5">Simulação</option>
                      <option value="6">Esportes</option>
                      <option value="7">Quebra-cabeças</option>
                      <option value="8">Corrida</option>
                      <option value="9">Luta</option>
                      <option value="10">Terror</option>
                      <option value="11">Jogo de ritmo</option>
                      <option value="12">Card-Games</option>
                      <option value="13">Sandbox</option>
                      <option value="14">FPS</option>
                      <option value="15">Plataforma</option>
                      <option value="16">Visual Novel</option>
                      <option value="17">Roguelike</option>
                      <option value="18">MMORPG</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="nasc" class="col-form-label">Tipo:</label>
                    <select class="form-select" name="tipo" aria-label="Default select example">
                      <option value="1">Ação</option>
                      <option value="2">Aventura</option>
                      <option value="3">RPG</option>
                      <option value="4">Estratégia</option>
                      <option value="5">Simulação</option>
                      <option value="6">Esportes</option>
                      <option value="7">Quebra-cabeças</option>
                      <option value="8">Corrida</option>
                      <option value="9">Luta</option>
                      <option value="10">Terror</option>
                      <option value="11">Jogo de ritmo</option>
                      <option value="12">Card-Games</option>
                      <option value="13">Sandbox</option>
                      <option value="14">FPS</option>
                      <option value="15">Plataforma</option>
                      <option value="16">Visual Novel</option>
                      <option value="17">Roguelike</option>
                      <option value="18">MMORPG</option>
                      <option value="19">Casual</option>
                      <option value="20">Shooter</option>
                      <option value="21">Nenhuma das opções</option>

                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="nasc" class="col-form-label">Classificação:</label>
                    <select class="form-select" name="classificacao" aria-label="Default select example">
                      <option value="1">Livre</option>
                      <option value="2">10</option>
                      <option value="3">12</option>
                      <option value="4">14</option>
                      <option value="5">16</option>
                      <option value="6">18</option>
                    </select>
                </div>
                  <div class="col-md-3">
                    <label for="email" class="col-form-label">Data de lançamento:</label>
                    <input type="date" class="form-control" name="dataLancamento" maxlength="100" id="email" required>
                  </div> 
                  <div>
                    <input type="file" id="backgroundJogo" name="backgroundJogo[]" accept="image/jpeg, image/png">
                    <input type="file" id="backgroundJogo" name="backgroundJogo[]" accept="image/jpeg, image/png">
                    <input type="file" id="backgroundJogo" name="backgroundJogo[]" accept="image/jpeg, image/png"> 
                  </div>
                  <div class=" col-md-9">
                  <div class="row mt-5">
                    <div class="col-md-3">
                      <input type="file" id="imagemInputCapa" name="capaJogo" accept="image/* " class="custom-file-input">
                    </div>
                    <div class="col-md-3">
                      <input type="file" id="imagemInputLogo" name="logoJogo" accept="image/* " class="custom-file-input">
                    </div>
                  </div>
                <div class=" text-end p-3">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar" name="acao">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script> 
</body>

</html>