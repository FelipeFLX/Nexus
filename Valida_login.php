<?php
include("./Scripts/Conexao_Banco_de_Dados/ObtendoDados_sql.php");

// Recuperando os valores do formulário de login de forma segura
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

// Consulta SQL com a cláusula WHERE
$sql_code = "SELECT * FROM $nome_tabela WHERE emailUser = '$email' AND senhaUser = '$senha'";

$result = $mysqli->query($sql_code);

if (!$result) {
    die("Erro na consulta: " . $mysqli->error);
}

$row = $result->fetch_assoc();

session_start();

$usuario_autenticado = false;

if ($row) {
    // Usuário autenticado com sucesso
    $usuario_autenticado = true;
}

if ($usuario_autenticado) {
    $_SESSION['autenticado'] = true;
    header('Location: login.php?login=yes');
} else {
    $_SESSION['autenticado'] = false;
    header('Location: login.php?login=no');
}

$result->free();

$mysqli->close();
?>
