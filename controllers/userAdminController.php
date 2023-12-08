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
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $dtnasc = addslashes($_POST['nasc']);
            $formattedDtnasc = date('Y-m-d', strtotime(str_replace('/', '-', $dtnasc)));
            $fotoPerfil = $_FILES['foto'];
            $isAdmin = isset($_POST['admin']) ? 1 : 0; // Verifica se o checkbox 'admin' foi marcado

            $extensao = pathinfo($fotoPerfil['name'], PATHINFO_EXTENSION);
            $nomeAvatar = uniqid();
            $avatarName = $nomeAvatar . "." . $extensao;
            $diretorioAvatar = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/avatarUser/' . $avatarName;

            // Instanciando a classe do daoUser e incrementando dados no banco de dados
            if (move_uploaded_file($fotoPerfil["tmp_name"], $diretorioAvatar)) {
                $UserDao->insert($nome, null, $email, $senha, $formattedDtnasc, $sobrenome, $cpf, $avatarName, $isAdmin);
            }

            // Verificando se o usuário está autenticado
            if (isset($_SESSION['login'])) {
                header('Location: /Nexus/views/admin/user');
            } else {
                // Redirecionando para a página de login
                header('Location: /Nexus/views/admin/user');
            }

            break;

        case 'READ':
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            // Instanciando a classe do daoUser e incrementando dados no banco de dados
            $login = $UserDao->selectAccount($email, $senha);

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

                // Verificar se o checkbox "lembrar de mim" está marcado
                if (isset($_POST['lembrarDeMim'])) {

                    // Criar um cookie com o nome de usuário e senha
                    setcookie('lembrar_de_mim', 'yes', time() + 3600, '/');
                    setcookie('email', $_SESSION['email'], time() + 3600, '/');
                    setcookie('senha', $senha, time() + 3600, '/');
                    setcookie('id', $_SESSION['id'], time() + 3600, '/');
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

            header('Location: /Nexus/views/home/index.php');

            break;

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
