<?php
//inclussão do daoUser no código
require_once("../dao/userDao.php");

// Classe de controle de usuário

// Requisição POST do servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $UserDao = new UserDao;

    switch ($_POST['option']) {
        case 'INSERT':
            $nome = addslashes($_POST['nome']);
            $sobrenome = addslashes($_POST['sobrenome']);
            $nick = addslashes($_POST['nick']);
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $dtnasc = addslashes($_POST['dtnasc']);
            $formattedDtnasc = date('Y-m-d', strtotime(str_replace('/', '-', $dtnasc)));
            $fotoPerfil = $_FILES['imagem'];

            $extensao = pathinfo($fotoPerfil['name'], PATHINFO_EXTENSION);
            $nomeAvatar = uniqid();
            $avatarName = $nomeAvatar . "." . $extensao;
            $diretorioAvatar = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/avatarUser/' . $avatarName;

            // Instanciando a classe do daoUser e incrementando dados no banco de dados
            if (move_uploaded_file($fotoPerfil["tmp_name"], $diretorioAvatar)) {
                $UserDao->insert($nome, $nick, $email, $senha, $formattedDtnasc, $sobrenome, $cpf, $avatarName);
            }

            // Verificando se o usuário está autenticado
            if (isset($_SESSION['login'])) {
                header('Location: /Nexus/views/home/index.php');
            } else {
                // Redirecionando para a página de login
                header('Location: /Nexus/views/user/login.php');
            }

        case 'READ':
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            // Instanciando a classe do daoUser e incrementando dados no banco de dados
            $login = $UserDao->selectAccount($email, $senha) ;

            // Verificando se o usuário está autenticado
            if ($login) {
                // Inicia a sessão se ainda não estiver iniciada
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['id'] = $login['idUser'];
                $_SESSION['nome'] = $login['nomeUser'];
                $_SESSION['sobrenome'] = $login['sobrenomeUser'];
                $_SESSION['nick'] = $login['nickUser'];
                $_SESSION['email'] = $login['emailUser'];
                $_SESSION['avatar'] = $login['avatarUser'];
                $_SESSION['login'] = "yes";

                if (isset($_POST['lembrarDeMim'])) {
                    $tempoExpiracao = time() + 30 * 24 * 60 * 60;
                    setcookie('lembrar_de_mim', 'yes', $tempoExpiracao, '/');
                    setcookie('email', $email, $tempoExpiracao, '/');
                    setcookie('senha', $senha, $tempoExpiracao, '/');
                }

                if ($_POST['link'] == 'cadastro.php') {
                    header('Location: /Nexus/views/home/index.php');
                } else {
                    if ($_POST['link'] == 'descJogos.php') {
                        header('Location: /Nexus/views/home/index.php');
                    } else {
                        header('Location: /Nexus/views/home/' . $_POST['link']);
                    }
                }
            } else {
                $erro_mensagem = "Credenciais inválidas. Tente novamente.";
                header('Location: /Nexus/views/user/login.php?mensagem=' . urlencode($erro_mensagem));
            }
            break;

        case 'LOGOUT':
            session_start();
            $_SESSION = array();
            session_destroy();

            if ($_POST['link'] == 'descJogos.php') {
                header('Location: /Nexus/views/home/index.php');
            } else {
                header('Location: /Nexus/views/home/' . $_POST['link']);
            }

        case 'DELETE':
            $id = addslashes($_POST['idUser']);
            $UserDao->delete($id);

            header("Location: /Nexus/views/admin/user/index.php");
            break;

        default:
            # code...
            break;
    }
}
