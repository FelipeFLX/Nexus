<?php
  require_once('../../../dao/jogoDao.php');
  $Jogos = jogoDao::getAll();
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      require_once('../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      require_once('../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10 p-4 borber">
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Lista de Usuário
          </div>
          <div class="col text-end ">
            <a class="btn btn-success px-3" role="button" aria-disabled="true" href="resgister.php"><i
                class="fas fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="col-md-1">ID</th>
                <th class="col-md-3">Nome Jogo</th>
                <th class="col-md-1">Preço</th>
                <th class="col-md-2">Plataforma</th>
                <th class="col-md-2">Gênero</th>
                <th class="col-md-2">Tipo</th>
                <th class="col-md-2">Data Lançamento</th>
                <th class="text-center col-md-1">Alterar</th>
                <th class="text-center col-md-1">Excluir</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($Jogos as $jogo): ?>
                <tr>
                  <td class="align-middle"><?php echo $jogo['idJogo']; ?></td>
                  <td class="align-middle"><?php echo $jogo['nomeJogo']; ?></td>
                  <td class="align-middle"><?php if($jogo['precoJogo'] == 0.00){echo 'Gratuito';} else {echo 'R$ ' . str_replace('.', ',', $jogo['precoJogo']); }?></td>
                  <td class="align-middle"><?php echo jogoDao::getPlataforma($jogo['plataformaJogo']); ?></td>
                  <td class="align-middle"><?php echo jogoDao::getGenero($jogo['generoPrincipalJogo']); ?></td>
                  <td class="align-middle"><?php echo jogoDao::getGenero($jogo['subgeneroJogo']); ?></td>
                  <td class="align-middle"><?php echo date('d/m/Y', strtotime($jogo['dataLancamentoJogo'])); ?></td>
                  <td class="align-middle text-center">
                    <form action="./update.php" method="POST">
                      <input type="hidden" name="idJogo" value="<?php echo $jogo['idJogo'];?>">
                      <input type="hidden" value="UPDATE" name="option">
                      <button type="submit" class="dropdown-item"><i class="fas fa-edit fa-lg text-secondary"></i></button>
                    </form>
                  </td>
                  <td class="text-center align-middle">
                    <button class="dropdown-item" onclick="confirmarExclusao(<?php echo $jogo['idJogo']; ?>, '<?php echo $jogo['nomeJogo']; ?>')">
                      <i class="fas fa-trash-alt fa-lg text-danger"></i>
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalExcluir" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Jogo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../../controllers/jogoController.php" method="post">
            <input type="hidden" class="form-control" id="idDeletar" name="option" value="DELETE">
            <input type="hidden" id="idJogoExcluir" name="idJogo" value="">
            <p>Tem certeza que deseja excluir o <span id="nomeJogoExcluir"></span>?</p>
            <div class="text-end">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-primary ms-3" value="DELETE" name="option">Sim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?= require './../../Componentes/modal.php'?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src='../../js/personalizar.js'></script>

  <script>
    function confirmarExclusao(idJogo, nomeJogo) {
      // Preenche os campos no modal
      document.getElementById('idDeletar').value = idJogo;
      document.getElementById('idJogoExcluir').value = idJogo;
      document.getElementById('nomeJogoExcluir').innerText = nomeJogo;

      // Abre o modal de exclusão
      var modal = new bootstrap.Modal(document.getElementById('modalExcluir'));
      modal.show();
    }
  </script>
</body>

</html>
