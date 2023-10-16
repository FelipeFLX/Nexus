<?php
include("./Conexao_Banco_de_Dados/Conexao_sql.php");

if(isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error']){
        die("Falha ao enviar o arquivo");
    }

    if($arquivo['size'] > 5242880) { // maior que 5MB
        die('Arquivo muito grande: max: 5MB');
    }

    $pasta = "Arquivos/Imagens/";
    $imagem_name = $arquivo['name'];
    $imagem_bdName = uniqid();
    $extencao = strtolower(pathinfo($imagem_name, PATHINFO_EXTENSION));

    if($extencao != "jpg" && $extencao != "png"){
        die("Tipo de arquivo inválido!");
    }

    $path = "$pasta". "$imagem_bdName" . "." . "$extencao";
    $upload = move_uploaded_file($arquivo["tmp_name"], $path);
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("Y-m-d H:i:s");

    if ($upload) {
        $mysqli->query("INSERT INTO $tabela_imagens (nomeImagem, pathImagem, dataUpload) VALUES ('$imagem_name', '$path', '$data')") or die($mysqli->error);
        echo "Imagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a imagem.";
    }
}
?>
