<?php
$hostname = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "bdNexus";
$nome_tabela = "tbUser";

$mysqli = new mysqli($hostname, $usuario, $senha, $banco_de_dados);

if ($mysqli->connect_errno) {
    die("Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
?>
