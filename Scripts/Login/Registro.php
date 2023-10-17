<?php
require("./Scripts/Conexao_Banco_de_Dados/Conexao_sql.php");

// Inserir os valores
$nome = $mysqli->real_escape_string($_POST['nome']);
$nick = $mysqli->real_escape_string($_POST['nick']);
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);
$dataNasc = $_POST['dataNasc'];

$sql_code = "INSERT INTO $nome_tabela (nomeUser, nickUser, emailUser, senhaUser, dataNascUser) VALUES ('$nome', '$nick', '$email', '$senha', '$dataNasc')";

if (mysqli_query($mysqli, $sql_code)) {
    echo "Valores inseridos com sucesso!";
} else {
    echo "Erro ao inserir valores: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>
