<?php
require_once(__DIR__ . "/../config/Conexao.php");

class NoticiasDao
{
    public static function insert($titulo, $texto, $dataLanc, $capa)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbNoticias (tituloNoticia, textoNoticia, dataLancNoticia, dataModfcNoticia, capaNoticia) VALUES (:titulo, :texto, :dataLanc, :dataModfc, :capa)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":texto", $texto);
        $stmt->bindParam(":dataLanc", $dataLanc);
        $stmt->bindParam(":dataModfc", $dataLanc);
        $stmt->bindParam(":capa", $capa);

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

        $sql_code = "SELECT * FROM tbNoticias";
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

        $sql_code = "SELECT * FROM tbNoticias WHERE idNoticia = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }
    public static function update($id, $titulo, $texto, $dataModfc, $capa)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbNoticias SET tituloNoticia = :titulo, textoNoticia = :texto, dataModfcNoticia = :dataModfc, capaNoticia = :capa WHERE idNoticia = :id";
        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":texto", $texto);
        $stmt->bindParam(":dataModfc", $dataModfc);
        $stmt->bindParam(":capa", $capa);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores atualizados com sucesso!";
        } else {
            return "Erro na atualização de dados.";
        }
    }
    public static function updateSemCapa($id, $titulo, $texto, $dataModfc)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbNoticias SET tituloNoticia = :titulo, textoNoticia = :texto, dataModfcNoticia = :dataModfc WHERE idNoticia = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":texto", $texto);
        $stmt->bindParam(":dataModfc", $dataModfc);

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

        $sql_code = "DELETE FROM tbNoticias WHERE idNoticia = :id";
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
?>
