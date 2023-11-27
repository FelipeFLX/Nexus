<?php
require_once(__DIR__ . "/../config/Conexao.php");

class TrailerDao
{
    public static function insert($titulo, $link, $data)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbtrailer (tituloTrailer, linkTrailer, dataTrailer) VALUES (:titulo, :link, :data)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":link", $link);
        $stmt->bindParam(":data", $data);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores inseridos com sucesso!";
        } else {
            return "Erro na inserção de dados.";
        }
    }

    public static function getAll()
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT * FROM tbtrailer";
        $stmt = $pdo->prepare($sql_code);
        $stmt->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public static function getById($id)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT * FROM tbtrailer WHERE idTrailer = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }
    
    public static function update($id, $titulo, $link, $data)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbtrailer SET tituloTrailer = :titulo, linkTrailer = :link, dataTrailer = :data WHERE idTrailer = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":link", $link);
        $stmt->bindParam(":data", $data);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores atualizados com sucesso!";
        } else {
            return "Erro na atualização de dados.";
        }
    }

    public static function delete($id)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "DELETE FROM tbtrailer WHERE idTrailer = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Registro excluído com sucesso!";
        } else {
            return "Erro na exclusão de dados.";
        }
    }
}
