<?php
//inclussão do daoUser no código
require_once("../dao/userDao.php");
require_once("../views/user/login.php");

// Classe de controle de usuário

// Requisição POST do servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Cadastro de usuário

    // Variaveis do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Instanciando a classe do daoUser e incrementando dados no banco de dados
    $login = userDao::selectAccount($email, $senha);

    // Verificando se o usuário está autenticado
    if ($login) {
        header('Location: ../../Nexus/controllers/loginController.php?login=yes');
    } else {
        // Redirecionando para a página de login
        header('Location: ../../Nexus/controllers/loginController.php?login=no');
    }
}
