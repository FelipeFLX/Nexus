<?php
  require_once('../../../dao/jogoDao.php');
  $idJogo = $_POST['idJogo'];
  $jogo = jogoDao::getById($idJogo);
  $nomeDoArquivo = basename($jogo['capaJogo']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
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
            <input type="hidden" name="option" value="UPDATE">
            <input type="hidden" name="idJogo" value="<?php echo $idJogo ?>">
            <input type="hidden" name="capaJogo" value="<?php echo $capaJogo ?>">
            <div class="card-header">
              <strong>INFORMAÇÕES DO JOGO</strong>
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2 text-center">
                <div class="bg-white rounded img-fluid">
                  <img id="imagemPreview" src="../../../public/img/capajogos/<?php echo $nomeDoArquivo ?>" alt="" class="img-fluid">
                </div>
              </div>
              <div class=" col-md-9">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <label for="nome" class="col-form-label">Nome do Jogo:</label>
                    <input type="text" class="form-control" name="nomeJogo" value="<?php echo $jogo['nomeJogo'] ?>" maxlength="50">
                  </div>
                  <div class="col-md-1 mb-3">
                    <label for="sobrenome" class="col-form-label">Preço:</label>
                    <input type="number" class="form-control" name="preco" value="<?php echo $jogo['precoJogo'] ?>" maxlength="50">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">Plataforma:</label>
                    <select class="form-select" name="plataforma" aria-label="Default select example">
                    <?php
                      $plataformaSelecionada = $jogo['plataformaJogo'];

                      $plataformas = [
                          1 => "PlayStation",
                          2 => "PlayStation 2",
                          3 => "PlayStation 3",
                          4 => "PlayStation 4",
                          5 => "PlayStation 5",
                          6 => "PlayStation Vita",
                          7 => "PSP",
                          8 => "NES",
                          9 => "SNES",
                          10 => "Nintendo 64",
                          11 => "Nintendo GameCube",
                          12 => "Nintendo Wii",
                          13 => "Nintendo Wii U",
                          14 => "Nintendo Switch",
                          15 => "Nintendo Game Boy",
                          16 => "Nintendo Game Boy Advance",
                          17 => "Nintendo DS",
                          18 => "Nintendo 3DS",
                          19 => "Xbox Clássico",
                          20 => "Xbox 360",
                          21 => "Xbox One",
                          22 => "Xbox Series X/S",
                          23 => "Windows",
                          24 => "Linux",
                          25 => "Mac OS",
                          26 => "Android",
                          27 => "iOS",
                      ];

                      foreach ($plataformas as $value => $plataforma) {
                          $selected = ($plataformaSelecionada == $value) ? 'selected' : '';
                          echo "<option value=\"$value\" $selected>$plataforma</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col-md-3 mb-4">
                    <label for="nome" class="col-form-label">Desenvolvedora:</label>
                    <input type="text" class="form-control" name="desenvolvedora" value="<?php echo $jogo['desenvolvedoraJogo'] ?>" maxlength="50">
                  </div>
                  <div class="col-md-1 mb-4">
                    <label for="nome" class="col-form-label">Nota:</label>
                    <input type="text" class="form-control" name="nota" value="<?php echo $jogo['notaJogo'] ?>" maxlength="50">
                  </div>
                  <div class="col-md-6">
                    <label for="floatingTextarea2">Descrição do Jogo:</label>
                    <textarea class="form-control" name="descJogo" id="floatingTextarea2" style="height: 100px"><?php echo $jogo['descJogo'] ?></textarea>
                  </div>
                  <div class="col-md-2">
                    <label for="nasc" class="col-form-label">Genero:</label>
                    <select class="form-select" name="genero" aria-label="Default select example">
                    <?php
                      $generoSelecionado = $jogo['generoJogo']; 

                      $generos = [
                          1 => "Ação",
                          2 => "Aventura",
                          3 => "RPG",
                          4 => "Estratégia",
                          5 => "Simulação",
                          6 => "Esportes",
                          7 => "Quebra-cabeças",
                          8 => "Corrida",
                          9 => "Luta",
                          10 => "Terror",
                          11 => "Jogo de ritmo",
                          12 => "Card-Games",
                          13 => "Sandbox",
                          14 => "FPS",
                          15 => "Plataforma",
                          16 => "Visual Novel",
                          17 => "Roguelike",
                          18 => "MMORPG",
                      ];

                      foreach ($generos as $value => $genero) {
                          $selected = ($generoSelecionado == $value) ? 'selected' : '';
                          echo "<option value=\"$value\" $selected>$genero</option>";
                      }
                    ?>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="nasc" class="col-form-label">Tipo:</label>
                    <select class="form-select" name="tipo" aria-label="Default select example">
                    <?php
                      $generoSelecionado = $jogo['subgeneroJogo']; 

                      $generos = [
                          1 => "Ação",
                          2 => "Aventura",
                          3 => "RPG",
                          4 => "Estratégia",
                          5 => "Simulação",
                          6 => "Esportes",
                          7 => "Quebra-cabeças",
                          8 => "Corrida",
                          9 => "Luta",
                          10 => "Terror",
                          11 => "Jogo de ritmo",
                          12 => "Card-Games",
                          13 => "Sandbox",
                          14 => "FPS",
                          15 => "Plataforma",
                          16 => "Visual Novel",
                          17 => "Roguelike",
                          18 => "MMORPG",
                      ];

                      foreach ($generos as $value => $genero) {
                          $selected = ($generoSelecionado == $value) ? 'selected' : '';
                          echo "<option value=\"$value\" $selected>$genero</option>";
                      }
                    ?>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="nasc" class="col-form-label">Classificaçao:</label>
                    <select class="form-select" name="classificacao" aria-label="Default select example">
                    <?php
                      $generoSelecionado = $jogo['classificacaoJogo'];

                      $generos = [
                          1 => "Livre",
                          2 => "10 anos",
                          3 => "12 anos",
                          4 => "14 anos",
                          5 => "16 anos",
                          6 => "18 anos",
                      ];

                      foreach ($generos as $value => $genero) {
                          $selected = ($generoSelecionado == $value) ? 'selected' : '';
                          echo "<option value=\"$value\" $selected>$genero</option>";
                      }
                    ?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="email" class="col-form-label">Data de lançamento:</label>
                    <input type="date" class="form-control" name="dataLancamento" maxlength="100" value="<?php echo $jogo['dataLancamentoJogo'] ?>" id="email" required>
                  </div>

                </div>
                <div class="row mt-5">
                  <div class="col-md-3">
                    <input type="file" id="imagemInput" name="capaJogo" accept="image/* " class="custom-file-input">
                  </div>
                  <div class="col-md-3">
                    <input type="file" id="imagemInput" name="logoJogo" accept="image/* " class="custom-file-input">
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
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script>
    // Obtém os elementos do input de imagem e da pré-visualização
    var imagemInput = document.getElementById('imagemInput');
    var imagemPreview = document.getElementById('imagemPreview');

    // Adiciona um ouvinte de eventos para o input de imagem
    imagemInput.addEventListener('change', function() {
      var file = imagemInput.files[0];

      // Verifica se um arquivo foi selecionado
      if (file) {
        var reader = new FileReader();

        // Define uma função para executar quando o arquivo for lido
        reader.onload = function(e) {
          imagemPreview.src = e.target.result;
          imagemPreview.style.display = 'block'; // Exibe a pré-visualização
        };

        // Lê o arquivo como uma URL de dados
        reader.readAsDataURL(file);
      } else {
        // Se nenhum arquivo for selecionado, esconde a pré-visualização
        imagemPreview.style.display = 'none';
      }
    });
  </script>

</body>

</html>