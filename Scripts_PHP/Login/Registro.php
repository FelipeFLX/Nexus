<?php
<<<<<<< HEAD
<<<<<<< HEAD
require("./Scripts/Conexao_Banco_de_Dados/Conexao_sql.php");
=======
require("./Scripts_PHP/Conexao_Banco_de_Dados/Conexao_sql.php");
>>>>>>> a109695 (.)

// Verifique se os campos existem no array $_POST
if (isset($_POST['nome'], $_POST['nick'], $_POST['email'], $_POST['senha'], $_POST['dataNasc'])) {
    // Os campos existem, então podemos acessá-los com segurança
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $nick = $mysqli->real_escape_string($_POST['nick']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $dataNasc = $mysqli->real_escape_string($_POST['dataNasc']);

    // Verifique se algum dos campos está vazio
    if (empty($nome) || empty($nick) || empty($email) || empty($senha) || empty($dataNasc)) {
        echo "<p style='color: red;>Por favor, preencha todos os campos do formulário.</p>";
    } else {
        // Todos os campos estão preenchidos, você pode processar os dados
        $sql_code = "INSERT INTO $nome_tabela (nomeUser, nickUser, emailUser, senhaUser, dataNascUser) VALUES ('$nome', '$nick', '$email', '$senha', '$dataNasc')";

        if (mysqli_query($mysqli, $sql_code)) {
            echo "Valores inseridos com sucesso!";
        } else {
            echo "Erro ao inserir valores: " . mysqli_error($mysqli);
        }
    }
} else {
    echo "Campos do formulário ausentes.";
}

mysqli_close($mysqli);
=======
require("./Scripts_PHP/Conexao_Banco_de_Dados/Conexao_sql.php");

if (isset($_POST['nome'], $_POST['nick'], $_POST['email'], $_POST['senha'], $_POST['dataNasc'])) {

$nome = $mysqli->real_escape_string($_POST['nome']);
$nick = $mysqli->real_escape_string($_POST['nick']);
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);
$dataNasc = $_POST['dataNasc'];

$sql_code = "INSERT INTO $nome_tabela (nomeUser, nickUser, emailUser, senhaUser, dataNascUser) VALUES ('$nome', '$nick', '$email', '$senha', '$dataNasc')";

if (mysqli_query($mysqli, $sql_code)) {
    echo "Valores inseridos com sucesso!<br>";
} else {
    echo "Erro ao inserir valores: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);

}
>>>>>>> cd4f1388227c6b713a93f60c01609ab24c07bd76
?>
