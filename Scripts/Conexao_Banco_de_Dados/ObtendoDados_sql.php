<?php
include("./Conexao_sql.php");

// Acessando dados do banco de dados

$email = $mysqli->real_escape_string($_SESSION['email']);
$senha = $mysqli->real_escape_string($_SESSION['senha']);

$sql_code = "SELECT * FROM $nome_tabela WHERE emailUser = '$email' AND senhaUser = '$senha'";

$result = $mysqli->query($sql_code);

if (!$result) {
    die("Erro na consulta: " . $mysqli->error);
}

$row = $result->fetch_assoc();

?>
