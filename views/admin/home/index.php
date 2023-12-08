<?php
  require_once('../../../dao/jogoDao.php');
  require_once('../../../dao/noticiasDao.php');
  require_once('../../../dao/trailerDao.php');
  require_once('../../../dao/userDao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/dashbord.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php
  include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Dashboard - Home
          </div>
          <div class="d-flex justify-content-center mt-5">
            <div class="card text-center" id="card" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title">Usuários</h3>
                <h1> <i class="bi bi-people-fill"></i></h1>
                <p class="card-text"><?php echo UserDao::contAll() ?></p>
              </div>
            </div>
            <div class="card text-center" id="card" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title">Jogos</h3>
                <h1><i class="bi bi-controller"></i></h1>
                <p class="card-text"><?php echo JogoDao::contAll() ?></p>
              </div>
            </div>
            <div class="card text-center" id="card" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title">Notícias</h3>
                <h1><i class="bi bi-newspaper"></i></h1>
                <p class="card-text"><?php echo NoticiasDao::contAll() ?></p>
              </div>
            </div>
            <div class="card text-center" id="card" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title">Trailers</h3>
                <h1><i class="bi bi-film"></i></h1>
                <p class="card-text"><?php echo TrailerDao::contAll() ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class=" row">

        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>