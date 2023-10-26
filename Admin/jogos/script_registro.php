<?php

// Conexão com o banco de dados
include("./Scripts_PHP/Conexao_Banco_de_Dados/Conexao_sql.php");

// Obtém os valores das variáveis
$nomeJogo = $mysqli->real_escape_string($_POST['nomeJogo']);
$preco = $mysqli->real_escape_string($_POST['preco']);
$plataforma = $_POST['plataforma'];
$genero = $_POST['genero'];
$descJogo = $mysqli->real_escape_string($_POST['descJogo']);
$dataLancamento = $_POST['dataLancamento'];

// Insere os valores no banco de dados
$sql_code = "INSERT INTO tbJogo (nomeJogo, precoJogo, generoJogo, plataformaJogo, descJogo, dataLancamentoJogo)VALUES ('$nomeJogo', '$preco', '$genero', '$plataforma', '$descJogo', '$dataLancamento')";

if ($mysqli->query($sql_code)) {
    echo "Valores inseridos com sucesso!";
} else {
    echo "Erro ao inserir valores: " . mysqli_error($mysqli);
}

// Fecha a conexão com o banco de dados
$mysqli->close();

echo "Hello, World!";

?>
