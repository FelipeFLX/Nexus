<?php
  require_once('../../../dao/userDao.php');

  $users = UserDao::selectAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuário - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../Componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../Componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Lista de Usuários
          </div>
          <div class="col text-end ">
            <a class="btn btn-success px-3" role="button" aria-disabled="true" href="register.php"><i
                class="fas fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class=" row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="text-center col-md-1">Avatar</th>
                <th class="text-center col-md-1">ID</th>
                <th class="col-md-2">Nome</th>
                <th class="col-md-2">Nick</th>
                <th class="col-md-2">E-mail</th>
                <th class="col-md-2">CPF</th>
                <th class="col-md-3">Data de nascimento</th>
                <th class="text-center col-md-3">Excluir</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td class="align-middle text-center"><img src="../../../public/img/avatarUser/<?php echo $user['avatarUser'] ?>" alt="" srcset="" width="100" style="border-radius: 50px;"></td>
                  <td class="text-center align-middle"><?php echo $user['idUser']; ?></td>
                  <td class="align-middle"><?php echo $user['nomeUser'] . " " . $user['sobrenomeUser']; ?></td>
                  <td class="align-middle"><?php echo $user['nickUser']; ?></td>
                  <td class="align-middle"><?php echo $user['emailUser']; ?></td>
                  <td class="align-middle"><?php echo $user['cpfUser']; ?></td>
                  <td class="align-middle"><?php echo date('d/m/Y', strtotime($user['dataNascUser'])); ?></td>
                  <td class="text-center align-middle">
                    <button class="dropdown-item" onclick="confirmarExclusao(<?php echo $user['idUser']; ?>, '<?php echo $user['nomeUser']; ?>')">
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Usuário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../../controllers/loginController.php" method="post">
            <input type="hidden" class="form-control" name="option" value="DELETE">
            <input type="hidden" name="idUser" id="idUserDeletar" value="">
            <p id="nomeUsuario"> </p>
            <div class="text-end">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-primary ms-3">Sim</button>
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
    function confirmarExclusao(idUser, nomeUsuario) {
      // Preenche o campo de idDeletar no modal
      document.getElementById('idUserDeletar').value = idUser;

      // Define dinamicamente o nome do usuário no modal
      document.getElementById('nomeUsuario').innerText = 'Tem certeza que deseja excluir ' + nomeUsuario + '?';

      // Abre o modal de exclusão
      var modal = new bootstrap.Modal(document.getElementById('modalExcluir'));
      modal.show();
    }
  </script>
</body>

</html>
 