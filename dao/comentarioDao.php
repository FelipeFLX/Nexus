<?php
require_once(__DIR__ . "/../config/Conexao.php");

class ComentarioDao{
    public static function insert($idUser, $idJogo, $comentario, $nota, $data)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbcomentario (idUser, idJogo, comentarioUser, notaUser, dataPostagem) VALUES (:idUser, :idJogo, :comentario, :nota, :data)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":idUser", $idUser);
        $stmt->bindParam(":idJogo", $idJogo);
        $stmt->bindParam(":comentario", $comentario);
        $stmt->bindParam(":nota", $nota);
        $stmt->bindParam(":data", $data);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores inseridos com sucesso!";
        } else {
            return "Erro na inserção de dados.";
        }
    }
    public static function getAll($idJogo){
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT * FROM tbcomentario WHERE idJogo = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $idJogo);

        $stmt->execute();

        $comentario = [];
        while ($row = $stmt->fetch()) {
            $comentario[] = $row;
        }

        return $comentario;
    }

}
?>
