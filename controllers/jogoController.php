<?php
require_once("../dao/jogoDao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['option']) {
        case 'CREATE':
            $nomeJogo = $_POST['nomeJogo'];
            $preco = $_POST['preco'];
            $plataforma = $_POST['plataforma'];
            $desenvolvedora = $_POST['desenvolvedora'];
            $descJogo = $_POST['descJogo'];
            $genero = $_POST['genero'];
            $tipo = $_POST['tipo'];
            $classificacao = $_POST['classificacao'];
            $dataLancamento = $_POST['dataLancamento'];
            $formattedDataLancamento = date('Y-m-d', strtotime(str_replace('/', '-', $dataLancamento)));
            $capaJogo = $_FILES['capaJogo'];
            $logoJogo = $_FILES['logoJogo'];
        
            $extensaoCapa = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
            $nomeCapa = uniqid();
            $capaName = $nomeCapa . "." . $extensaoCapa;
            $diretorioCapa = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/capaJogos/' . $capaName;

            // Adicione esta linha para obter a extensão do logoJogo
            $extensaoLogo = pathinfo($logoJogo['name'], PATHINFO_EXTENSION);
            $nomeLogo = uniqid();
            $logoName = $nomeLogo . "." . $extensaoLogo;
            $diretorioLogo = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/logoJogos/' . $logoName;


            if (!is_dir(dirname($diretorioLogo))) {
                echo "O diretório de destino não é válido.";
                echo $diretorioCapa;
            } else {
                if (move_uploaded_file($capaJogo["tmp_name"], $diretorioCapa) && move_uploaded_file($logoJogo["tmp_name"], $diretorioLogo)) {
                    JogoDao::insert($nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $tipo, $desenvolvedora, $classificacao, $capaName, $logoName);
                } else {
                    echo "Erro ao mover o arquivo.";
                    echo "<pre>";
                    print_r(error_get_last());
                    echo "</pre>";

                    echo $diretorioCapa . "<br>";
                    echo $diretorioLogo;
                }
            }

            if (!empty($_FILES['backgroundJogo']['name'][0])) {
                $files = $_FILES['backgroundJogo'];
        
                // Itera sobre cada arquivo
                for ($i = 0; $i < count($files['name']); $i++) {
                    $fileName = $files['name'][$i];
                    $fileTmpName = $files['tmp_name'][$i];
                    $fileType = $files['type'][$i];
                    $fileSize = $files['size'][$i];
                    $fileError = $files['error'][$i];
        
                    // Aqui você pode processar e salvar cada arquivo como necessário
                    $extensaoLogo = pathinfo( $files['name'][$i], PATHINFO_EXTENSION);
                    $nomeBackground = uniqid();
                    $backgroundName = $nomeBackground . "." . $extensaoLogo;
                    $diretorioBackground = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/backgroundJogos/' . $backgroundName;

                    if (move_uploaded_file($fileTmpName, $diretorioBackground)) {
                        JogoDao::insertBackground(JogoDao::getByIdByName($nomeJogo), $backgroundName);
                        header("Location: /Nexus/views/admin/jogos/index.php");
                    }
                    
                }
            }

            break;

            case 'UPDATE':
                $idJogo = $_POST['idJogo'];
                $nomeJogo = $_POST['nomeJogo'];
                $preco = $_POST['preco'];
                $plataforma = $_POST['plataforma'];
                $desenvolvedora = $_POST['desenvolvedora'];
                $descJogo = $_POST['descJogo'];
                $genero = $_POST['genero'];
                $tipo = $_POST['tipo'];
                $classificacao = $_POST['classificacao'];
                $dataLancamento = $_POST['dataLancamento'];
                $formattedDataLancamento = date('Y-m-d', strtotime(str_replace('/', '-', $dataLancamento)));
                $capaJogo = $_FILES['capaJogo'];
                $logoJogo = $_FILES['logoJogo'];
            
                // Condição 1: capaJogo e logo estão preenchidos
                if (!empty($capaJogo['name']) && !empty($logoJogo['name'])) {
                    $extensaoCapa = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
                    $nomeCapa = uniqid();
                    $capaName = $nomeCapa . "." . $extensaoCapa;
                    $diretorioCapa = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/capaJogos/' . $capaName;
            
                    $extensaoLogo = pathinfo($logoJogo['name'], PATHINFO_EXTENSION);
                    $nomeLogo = uniqid();
                    $logoName = $nomeLogo . "." . $extensaoLogo;
                    $diretorioLogo = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/logoJogos/' . $logoName;
            
                    if (!is_dir(dirname($diretorioLogo))) {
                        echo "O diretório de destino não é válido.";
                        echo $diretorioCapa;
                    } else {
                        if (move_uploaded_file($capaJogo["tmp_name"], $diretorioCapa) && move_uploaded_file($logoJogo["tmp_name"], $diretorioLogo)) {
                            JogoDao::update($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $tipo, $desenvolvedora, $classificacao, $capaName, $logoName);
                            header("Location: /Nexus/views/admin/jogos/index.php");
                        } else {
                            echo "Erro ao mover os arquivos.";
                            echo "<pre>";
                            print_r(error_get_last());
                            echo "</pre>";
            
                            echo $diretorioCapa . "<br>";
                            echo $diretorioLogo;
                        }
                    }
                }
                // Condição 2: Somente capaJogo está preenchido
                elseif (!empty($capaJogo['name']) && empty($logoJogo['name'])) {
                    $extensaoCapa = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
                    $nomeCapa = uniqid();
                    $capaName = $nomeCapa . "." . $extensaoCapa;
                    $diretorioCapa = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/capaJogos/' . $capaName;
            
                    if (!is_dir(dirname($diretorioCapa))) {
                        echo "O diretório de destino não é válido.";
                        echo $diretorioCapa;
                    } else {
                        if (move_uploaded_file($capaJogo["tmp_name"], $diretorioCapa)) {
                            JogoDao::update($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $tipo, $desenvolvedora, $classificacao, $capaName, null);
                            header("Location: /Nexus/views/admin/jogos/index.php");
                        } else {
                            echo "Erro ao mover o arquivo.";
                            echo "<pre>";
                            print_r(error_get_last());
                            echo "</pre>";
            
                            echo $diretorioCapa;
                        }
                    }
                }
                // Condição 3: Somente logo está preenchido
                elseif (empty($capaJogo['name']) && !empty($logoJogo['name'])) {
                    $extensaoLogo = pathinfo($logoJogo['name'], PATHINFO_EXTENSION);
                    $nomeLogo = uniqid();
                    $logoName = $nomeLogo . "." . $extensaoLogo;
                    $diretorioLogo = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/logoJogos/' . $logoName;
            
                    if (!is_dir(dirname($diretorioLogo))) {
                        echo "O diretório de destino não é válido.";
                        echo $diretorioLogo;
                    } else {
                        if (move_uploaded_file($logoJogo["tmp_name"], $diretorioLogo)) {
                            JogoDao::update($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $tipo, $desenvolvedora, $classificacao, null, $logoName);
                            header("Location: /Nexus/views/admin/jogos/index.php");
                        } else {
                            echo "Erro ao mover o arquivo.";
                            echo "<pre>";
                            print_r(error_get_last());
                            echo "</pre>";
            
                            echo $diretorioLogo;
                        }
                    }
                }
                // Condição 4: Nenhum está preenchido
                else {
                    JogoDao::update($idJogo, $nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $tipo, $desenvolvedora, $classificacao, null, null);
                    header("Location: /Nexus/views/admin/jogos/index.php");
                }

                if (!empty($_FILES['backgroundJogo']['name'][0])) {
                    $files = $_FILES['backgroundJogo'];
            
                    // Itera sobre cada arquivo
                    for ($i = 0; $i < count($files['name']); $i++) {
                        $fileName = $files['name'][$i];
                        $fileTmpName = $files['tmp_name'][$i];
                        $fileType = $files['type'][$i];
                        $fileSize = $files['size'][$i];
                        $fileError = $files['error'][$i];
            
                        // Aqui você pode processar e salvar cada arquivo como necessário
                        $extensaoLogo = pathinfo( $files['name'][$i], PATHINFO_EXTENSION);
                        $nomeBackground = uniqid();
                        $backgroundName = $nomeBackground . "." . $extensaoLogo;
                        $diretorioBackground = $_SERVER['DOCUMENT_ROOT'] . '/Nexus/public/img/backgroundJogos/' . $backgroundName;
    
                        if (move_uploaded_file($fileTmpName, $diretorioBackground)) {
                            JogoDao::insertBackground(JogoDao::getByIdByName($nomeJogo), $backgroundName);
                            header("Location: /Nexus/views/admin/jogos/index.php");
                        }
                        
                    }
                }

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