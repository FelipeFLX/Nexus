<?php
//inclussão do daoUser no código
require_once("../dao/comentarioDao.php");

// Classe de controle de usuário

// Requisição POST do servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ComentarioDao = new ComentarioDao;

    switch ($_POST['option']) {
        case 'INSERT':
            session_start();
            if (!isset($_SESSION['login']) || $_SESSION['login'] == '') {
                header('Location: /Nexus/views/user/login.php');
                die();
            } 

            $idUser = addslashes($_POST['idUser']);
            $idJogo = addslashes($_POST['idJogo']);
            $comentario = addslashes($_POST['comentario']);
            $nota = addslashes($_POST['nota']);

            date_default_timezone_set('America/Sao_Paulo');
            $dataPostagem = new DateTime('now');
            $data = $dataPostagem->format('Y-m-d H:i:s');
        
            // Instanciando a classe do daoUser e incrementando dados no banco de dados
            $ComentarioDao->insert($idUser, $idJogo, $comentario, $nota, $data);
            
            header('Location: /Nexus/views/componentes/descJogos.php?id=' . $idJogo);

            break;

        case 'LOGOUT':
            session_start(); 
            $_SESSION = array(); 
            session_destroy();

            $link = addslashes($_POST['link']);

            header('Location: /Nexus/views/home/' . $link);
        
        default:
            # code...
            break;
    }
    
}