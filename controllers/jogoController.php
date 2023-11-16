<?php
require_once("../dao/jogoDao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['option']) {
        case 'CREATE':
            $nomeJogo = $_POST['nomeJogo'];
            $preco = $_POST['preco'];
            $plataforma = $_POST['plataforma'];
            $genero = $_POST['genero'];
            $descJogo = $_POST['descJogo'];
            $dataLancamento = $_POST['dataLancamento'];
            $formattedDataLancamento = date('Y-m-d', strtotime(str_replace('/', '-', $dataLancamento)));
            $capaJogo = $_FILES['capaJogo'];
        
            $extencao = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
            $nome = uniqid();
            $imgName = $nome . "." . $extencao;
            $diretorio = 'C:\xampp\htdocs\Nexus\public\img\capaJogos\ ' . $imgName;
                
            $upload = move_uploaded_file($capaJogo["tmp_name"], $diretorio);
        
            if($upload){
                JogoDao::insert($nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $diretorio);
            }

            header("Location: /Nexus/views/admin/jogos/resgister.php");
            break;

            case 'UPDATE':
                $idJogo = $_POST['idJogo'];
                $nomeJogo = $_POST['nomeJogo'];
                $preco = $_POST['preco'];
                $plataforma = $_POST['plataforma'];
                $genero = $_POST['genero'];
                $descJogo = $_POST['descJogo'];
                $dataLancamento = $_POST['dataLancamento'];
                $formattedDataLancamento = date('Y-m-d', strtotime(str_replace('/', '-', $dataLancamento)));
                $capaJogo = $_FILES['capaJogo'];
                
                // Verifica se o arquivo foi enviado corretamente
                if ($capaJogo['error'] == UPLOAD_ERR_OK) {
                    $diretorio = 'C:\xampp\htdocs\Nexus\public\img\capaJogos\ ';
                    
                    $extensao = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
                    $nome = uniqid();
                    $imgName = $nome . "." . $extensao;
                    $diretorioCompleto = $diretorio . $imgName;
            
                    $upload = move_uploaded_file($capaJogo["tmp_name"], $diretorioCompleto);
            
                    if ($upload) {
                        JogoDao::update($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $diretorioCompleto);
                    }
                } else {
                    JogoDao::update($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $diretorioCompleto);
                }
                
                header("Location: /Nexus/views/admin/jogos/index.php");
                break;
        case 'DELETE':
                $idJogo = $_POST['idJogo'];
                var_dump($idJogo);
                jogoDao::delete($idJogo);

                header("Location: /Nexus/views/admin/jogos/index.php");
            break;
        default:

            break;
    }
}