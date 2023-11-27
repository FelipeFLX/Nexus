<?php

class Conexao
{
    private $pdo;

    public function __construct()
    {
        $hostname = "localhost";
        $usuario = "root";
        $senha = "";
        $banco_de_dados = "bdNexus";

        $this->pdo = new PDO("mysql:host=$hostname;dbname=$banco_de_dados", $usuario, $senha);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function getPDO(){
        return $this->pdo;
    }
}
