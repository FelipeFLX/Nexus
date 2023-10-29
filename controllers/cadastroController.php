<?php
//inclussão do daoUser no código
require_once("../dao/userDao.php");
require_once("../views/user/cadastro.php");

// Classe de controle de usuário

// Requisição POST do servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Cadastro de usuário

    // Variaveis do formulário de cadastro
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nick = $_POST['nick'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dtnasc = $_POST['dtnasc'];
    $formattedDtnasc = date('Y-m-d', strtotime(str_replace('/', '-', $dtnasc)));

    // Instanciando a classe do daoUser e incrementando dados no banco de dados
    userDao::insert($nome, $nick, $email, $senha, $formattedDtnasc, $sobrenome, $cpf);

    // Verificando se o usuário está autenticado
    if (isset($_SESSION['usuario'])) {
        header('Location: ../../Nexus/controllers/cadastroController.php');
    } else {
        // Redirecionando para a página de login
        header('Location: ../../Nexus/controllers/cadastroController.php');
    }
}
