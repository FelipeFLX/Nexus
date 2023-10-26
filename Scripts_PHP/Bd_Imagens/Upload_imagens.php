<?php
include("./Scripts_PHP/Conexao_Banco_de_Dados/Conexao_sql.php");

// Obtém os valores das variáveis
$nomeJogo = $_POST['nomeJogo'];
$preco = $_POST['preco'];
$plataforma = $_POST['plataforma'];
$genero = $_POST['genero'];
$descJogo = $_POST['descJogo'];
$dataLancamento = $_POST['dataLancamento'];

// Verifica se os campos não estão vazios
if (empty($nomeJogo) || empty($preco) || empty($plataforma) || empty($genero) || empty($descJogo) || empty($dataLancamento)) {
    echo "Erro: Você deve preencher todos os campos.";
    exit();
}

// Usar declarações preparadas para evitar SQL Injection
$sql = "INSERT INTO tbJogo (nomeJogo, precoJogo, generoJogo, plataformaJogo, descJogo, dataLancamentoJogo)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($mysqli, $sql);

// Vincula os parâmetros da declaração preparada aos valores do usuário
mysqli_stmt_bind_param($stmt, "ssssss", $nomeJogo, $preco, $genero, $plataforma, $descJogo, $dataLancamento);

// Executa a declaração preparada
mysqli_stmt_execute($stmt);

// Verifica se a consulta foi executada com sucesso
if (mysqli_stmt_error($stmt)) {
    echo "Erro ao inserir valores: " . mysqli_stmt_error($stmt);
} else {
    echo "Valores inseridos com sucesso!";
}

// Fecha a declaração preparada
mysqli_stmt_close($stmt);

// Fecha a conexão
mysqli_close($mysqli);

var_dump($nomeJogo, $preco, $plataforma, $genero, $descJogo, $dataLancamento);
?>
