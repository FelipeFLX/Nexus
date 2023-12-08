<?php
require_once(__DIR__ . "/../config/Conexao.php");

class NoticiasDao
{
    public static function insert($titulo, $tema, $texto, $dataLanc, $capa, $link)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbnoticias (tituloNoticia, temaNoticia, textoNoticia, dataLancNoticia, dataModfcNoticia, capaNoticia, linkNoticia) VALUES (:titulo, :tema, :texto, :dataLanc, :dataModfc, :capa, :link)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":tema", $tema);
        $stmt->bindParam(":texto", $texto);
        $stmt->bindParam(":dataLanc", $dataLanc);
        $stmt->bindParam(":dataModfc", $dataLanc);
        $stmt->bindParam(":capa", $capa);
        $stmt->bindParam(":link", $link);

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

        $sql_code = "SELECT * FROM tbnoticias ORDER BY idNoticia DESC";
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

        $sql_code = "SELECT * FROM tbnoticias WHERE idNoticia = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }
    public static function contAll()
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT COUNT(*) FROM tbnoticias";
        $stmt = $pdo->prepare($sql_code);
        $stmt->execute();

        $total = $stmt->fetchColumn();

        // Retorne o total, ou false se não houver registros
        return $total !== false ? $total : false;
    }
    public static function update($id, $titulo, $tema, $texto, $dataModfc, $capa)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbnoticias SET tituloNoticia = :titulo, temaNoticia = :tema, textoNoticia = :texto, dataModfcNoticia = :dataModfc, capaNoticia = :capa WHERE idNoticia = :id";
        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":tema", $tema);
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
    public static function updateSemCapa($id, $titulo, $tema, $texto, $dataModfc)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbnoticias SET tituloNoticia = :titulo, temaNoticia = :tema, textoNoticia = :texto, dataModfcNoticia = :dataModfc WHERE idNoticia = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":tema", $tema);
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

        $sql_code = "DELETE FROM tbnoticias WHERE idNoticia = :id";
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
