<?php
require_once("../dao/noticiasDao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['option']) {
        case 'CREATE':
            $titulo = $_POST['titulo'];
            $tema = $_POST['tema'];
            $texto = $_POST['texto'];

            $timezone = new DateTimeZone('America/Sao_Paulo');
            $date = new DateTime('now', $timezone);
            $datetime = $date->format('Y-m-d H:i:s');

            $capa = $_FILES['capaNoticia'];
        
            $extencao = pathinfo($capa['name'], PATHINFO_EXTENSION);
            $nome = uniqid();
            $imgName = $nome . "." . $extencao;
            $diretorio = 'C:\xampp\htdocs\Nexus\public\img\capaNoticias\ ' . $imgName;
                
            $upload = move_uploaded_file($capa["tmp_name"], $diretorio);
        
            if($upload){
                NoticiasDao::insert($titulo, $tema, $texto, $datetime, $imgName);
            }

            header("Location: /Nexus/views/admin/noticias/index.php");
            break;

            case 'UPDATE':
                $id = $_POST['idNoticia'];
                $titulo = $_POST['titulo'];
                $tema = $_POST['tema'];
                $texto = $_POST['texto'];
    
                $timezone = new DateTimeZone('America/Sao_Paulo');
                $date = new DateTime('now', $timezone);
                $datetime = $date->format('Y-m-d H:i:s');

                $capa = $_FILES['capaNoticia'];

                if ($capa['name'] == '' || $capa['name'] == null) {
                    NoticiasDao::updateSemCapa($id, $titulo, $tema, $texto, $datetime);
                } else {
                    $diretorio = 'C:\xampp\htdocs\Nexus\public\img\capaNoticias\ ';
                    
                    $extensao = pathinfo($capa['name'], PATHINFO_EXTENSION);
                    $nome = uniqid();
                    $imgName = $nome . "." . $extensao;
                    $diretorioCompleto = $diretorio . $imgName;
            
                    $upload = move_uploaded_file($capa["tmp_name"], $diretorioCompleto);
            
                    if ($upload) {
                    NoticiasDao::update($id, $titulo, $tema, $texto, $datetime, $imgName);
                    }
                
                }
                
                header("Location: /Nexus/views/admin/noticias/index.php");
                break;
        case 'DELETE':
                $idNoticia = $_POST['idNoticia'];
                NoticiasDao::delete($idNoticia);

                header("Location: /Nexus/views/admin/noticias/index.php");
            break;
        default:

            break;
    }
}