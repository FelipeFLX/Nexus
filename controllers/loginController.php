<?php
//inclussão do daoUser no código
require_once("../dao/userDao.php");

// Classe de controle de usuário

// Requisição POST do servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    switch ($_POST['option']) {
        case 'INSERT':
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
            if (isset($_SESSION['login'])) {
                header('Location: /Nexus/views/home/index.php');
            } else {
                // Redirecionando para a página de login
                header('Location: /Nexus/views/user/login.php');
            }

        case 'READ':
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        
            // Instanciando a classe do daoUser e incrementando dados no banco de dados
            $login = userDao::selectAccount($email, $senha);
        
            // Verificando se o usuário está autenticado
            if ($login) {
                session_start();
                $_SESSION['id'] = $login['idUser'];
                $_SESSION['nome'] = $login['nomeUser'];
                $_SESSION['sobrenome'] = $login['sobrenomeUser'];
                $_SESSION['nick'] = $login['nickUser'];
                $_SESSION['email'] = $login['emailUser'];
                $_SESSION['login'] = "yes";

                if ($_POST['link'] == 'cadastro.php') {
                    header('Location: /Nexus/views/home/index.php');
                } else {
                    header('Location: /Nexus/views/home/' . $_POST['link']);
                }
            } else {
                // Redirecionando para a página de login
                header('Location: /Nexus/views/user/login.php?login=no');
            }
            break;

        case 'LOGOUT':
            session_start(); 
            $_SESSION = array(); 
            session_destroy();

            $link = $_POST['link'];

            header('Location: /Nexus/views/home/' . $link);
        
        default:
            # code...
            break;
    }
    
}
