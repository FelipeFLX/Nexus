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
    $capaJogo = $_FILES['capaJogo'];

    $extencao = pathinfo($capaJogo['name'], PATHINFO_EXTENSION);
    $nome = uniqid();
    $imgName = $nome . "." . $extencao;
    $diretorio = 'C:\xampp\htdocs\Nexus\public\img\capaJogos\ ' . $imgName;

    echo $diretorio;

    $upload = move_uploaded_file($capaJogo["tmp_name"], $diretorio);

    if($upload){
        JogoDao::insert($nomeJogo, $preco, $plataforma, $genero, $descJogo, $formattedDataLancamento, $diretorio);
    }
}