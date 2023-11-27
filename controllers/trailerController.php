<?php
//inclussão do daoUser no código
require_once("../dao/trailerDao.php");

// Classe de controle de usuário

// Requisição POST do servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $TrailerDao = new TrailerDao;
    
    switch ($_POST['option']) {
        case 'INSERT':
            $titulo = addslashes($_POST['titulo']); //addslashes
            $link = addslashes($_POST['link']);

            $timezone = new DateTimeZone('America/Sao_Paulo');
            $date = new DateTime('now', $timezone);
            $datetime = $date->format('Y-m-d');                
            $TrailerDao->insert($titulo, $link, $datetime);

            header("Location: /Nexus/views/admin/trailers/index.php");

            break;

        case 'UPDATE':
            $id = addslashes($_POST['id']);
            $titulo = addslashes($_POST['titulo']);
            $link = addslashes($_POST['link']);

            $timezone = new DateTimeZone('America/Sao_Paulo');
            $date = new DateTime('now', $timezone);
            $datetime = $date->format('Y-m-d');     

            $capa = $_FILES['capa'];

            $TrailerDao->update($id, $titulo, $link, $datetime);
            
            header("Location: /Nexus/views/admin/trailers/index.php");

             break;

            case 'DELETE':
                $id = addslashes($_POST['id']);
                $TrailerDao->delete($id);

                header("Location: /Nexus/views/admin/trailers/index.php");
                break;

        default:
                header("Location: /Nexus/views/admin/trailers/index.php");
            break;
    }
    
}