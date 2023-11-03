<?php
require_once("../config/Conexao.php");

class JogoDao
{
    public static function insert($nome, $preco, $plataforma, $genero, $descricao, $dataLancamento)
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbJogo (nomeJogo, precoJogo, plataformaJogo, generoJogo, descJogo, dataLancamentoJogo) VALUES (:nome, :preco, :plataforma, :genero, :descricao, :dataLancamento)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":plataforma", $plataforma);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dataLancamento", $dataLancamento);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores inseridos com sucesso!";
        } else {
            echo "Erro na inserção de dados.";
        }
    }
}
