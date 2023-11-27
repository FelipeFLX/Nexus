<?php
  require_once('../../../dao/noticiasDao.php');
  $idNoticia = $_POST['idNoticia'];
  $Noticia = NoticiasDao::getById($idNoticia);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notícias - Adm</title>
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
        <form method="post" enctype="multipart/form-data" action="../../../controllers/noticiasController.php" class="needs-validation" novalidate>
          <input type="hidden" name="option" value="UPDATE">
          <input type="hidden" name="idNoticia" value="<?php echo $idNoticia?>">
            <div class="card-header">
              <strong>INFORMAÇÕES DA NOTÍCIA</strong>
            </div>
            <div class="card-body row justify-content-center align-items-center">
              <div class="col-md-2 text-center">
                <div class="bg-white rounded img-fluid">
                  <img id="imagemPreview" src="../../../public/img/capaNoticias/ <?php echo basename($Noticia['capaNoticia']) ?>" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class=" col-md-9">
                <div class="row">
                <div class="col-md-5 mb-4">
                    <label for="nome" class="col-form-label">Titulo notícia:</label>
                    <input type="text" class="form-control" value="<?php echo $Noticia['tituloNoticia'] ?>"  name="titulo" maxlength="200">
                  </div>
                  <div class="col-md-3 mb-4">
                    <label for="nome" class="col-form-label">Tema:</label>
                    <input type="text" class="form-control" name="tema" value="<?php echo $Noticia['temaNoticia'] ?>" maxlength="200">
                  </div>
                  <div class="col-md-8">
                    <label for="floatingTextarea2">Texto:</label>
                    <textarea class="form-control" name="texto" id="floatingTextarea2" style="height: 100px"><?php echo $Noticia['textoNoticia'] ?></textarea>
                  </div>

                </div>
                <div class="row mt-5">
                  <div class="col-md-3">
                    <input type="file" id="imagemInput" name="capaNoticia" accept="image/* " class="custom-file-input">
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