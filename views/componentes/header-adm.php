<?php
    session_start();
    if ($_SESSION['isAdmin'] != 1) {
      header('Location: /Nexus/views/home/index.php');
    }
    ?>
<head>
  <link rel="stylesheet" type="text/css" href="/Nexus/public/css/cabecalho.css">
  <script src="/Nexus/public/js/script.js"></script>
</head>
<header class="p-3 border-bottom bg-dark text-white shadow" style="height: 10vh">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="../../home/index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="/Nexus/public/img/Logo/Logo Nexus Icone.png" width="auto" height="50" class="d-inline-block align-top" alt="">
      </a>
      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-3 fw-bold">
      </div>
      <div class="lado3">
        <div class="dropdown">
          <div class="profile-img">
           <img src="/Nexus/public/img/avatarUser/<?php echo $_SESSION['avatar']; ?>" alt="Imagem" class="dropdown-image">
          </div>
          <div class="dropdown-content">
            <form action="../../../controllers/loginController.php" method="post">
              <input type="hidden" name="link" value="<?php echo basename($_SERVER['PHP_SELF']) ?>">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <p><button style="background-color: transparent; border: none; color: white;" type="submit" name="option" value="LOGOUT">Sair</button></p>
            </form>   

          </div>
        </div>
      </div>
    </div>
  </div>
</header>