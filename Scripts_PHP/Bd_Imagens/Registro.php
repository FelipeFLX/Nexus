<?php
include("../../Scripts_PHP/Conexao_Banco_de_Dados/Conexao_sql.php");

$nome = $_POST['nomeJogo'];
$preco = $_POST['preco'];
$plataforma = $_POST['plataforma'];
$genero = $_POST['genero'];
$descJogo = $_POST['descJogo'];
$dataLancamento = $_POST['dataLancamento'];

if (isset($_FILES['capaJogo'])) {
    $arquivo = $_FILES['capaJogo'];

    if ($arquivo['error']) {
        die("Falha ao enviar o arquivo");
    }

    if ($arquivo['size'] > 5242880) { // maior que 5MB
        die('Arquivo muito grande: max: 5MB');
    }
    
    $pasta = "bd_imagens/capa_jogo/";
    $imagem_name = $arquivo['name'];
    $imagem_bdName = uniqid();
    $extensao = strtolower(pathinfo($imagem_name, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png") {
        die("Tipo de arquivo inválido!");
    }

    $path = "$pasta" . "$imagem_bdName" . "." . "$extensao";
    $upload = move_uploaded_file($arquivo["tmp_name"], $path);
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("Y-m-d H:i:s");

    if ($upload) {
        $mysqli->query("INSERT INTO tbCapaJogo (nomeCapaJogo, pathCapaJogo, dataUpload) VALUES ('$imagem_name', '$path', '$data')") or die($mysqli->error);
    } else {
        echo "Erro ao enviar a imagem.";
    }

    $sql = "INSERT INTO tbJogo (nomeJogo, precoJogo, plataformaJogo, generoJogo, descJogo, dataLancamentoJogo) VALUES ('$nome', '$preco', '$plataforma', '$genero', '$descJogo', '$dataLancamento')";
    $mysqli->query($sql);

    if ($mysqli->affected_rows > 0) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $mysqli->error;
    }
}
?>
