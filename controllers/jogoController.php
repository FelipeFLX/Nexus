<?php
require_once("../dao/jogoDao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['option']) {
        case 'CREATE':
            $nomeJogo = $_POST['nomeJogo'];
            $preco = $_POST['preco'];
            $plataforma = $_POST['plataforma'];
            $desenvolvedora = $_POST['desenvolvedora'];
            $nota = $_POST['nota'];
            $descJogo = $_POST['descJogo'];
            $genero = $_POST['genero'];
            $tipo = $_POST['tipo'];
            $classificacao = $_POST['classificacao'];
            $dataLancamento = $_POST['dataLancamento'];
            $formattedDataLancamento = date('Y-m-d', strtotime(str_replace('/', '-', $dataLancamento)));
            $capaJogo = $_FILES['capaJogo'];
            $logoJogo = $_FILES['logoJogo'];
        
            $extencao = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
            $nome = uniqid();
            $capaName = $nome . "." . $extencao;
            $diretorioCapa = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/capaJogos/' . $capaName;

            $extencao = pathinfo($logoJogo['name'], PATHINFO_EXTENSION);
            $nome = uniqid();
            $logoName = $nome . "." . $extencao;
            $diretorioLogo = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/logoJogos/' . $logoName;

            if (!is_dir(dirname($diretorioLogo))) {
                echo "O diretório de destino não é válido.";
                echo $diretorioCapa;
            } else {
                if (move_uploaded_file($capaJogo["tmp_name"], $diretorioCapa) && move_uploaded_file($logoJogo["tmp_name"], $diretorioLogo)) {
                    JogoDao::insert($nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $tipo, $desenvolvedora, $classificacao, $nota, $capaName, $logoName);
                    header("Location: /Nexus/views/admin/jogos/index.php");
                } else {
                    echo "Erro ao mover o arquivo.";
                    echo "<pre>";
                    print_r(error_get_last());
                    echo "</pre>";
                }
            }

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

                var_dump($capaJogo);

                if ($capaJogo['name'] == '' || $capaJogo['name'] == null) {
                    JogoDao::updateSemCapa($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento);
                } else {
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