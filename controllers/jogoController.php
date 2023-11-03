<?php
require_once("../dao/jogoDao.php");
require_once("../views/admin/jogos/resgister.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomeJogo = $_POST['nomeJogo'];
    $preco = $_POST['preco'];
    $plataforma = $_POST['plataforma'];
    $genero = $_POST['genero'];
    $descJogo = $_POST['descJogo'];
    $dataLancamento = $_POST['dataLancamento'];
    $formattedDataLancamento = date('Y-m-d', strtotime(str_replace('/', '-', $dataLancamento)));

    JogoDao::insert($nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento);

}
