<?php
require_once(__DIR__ . "/../config/Conexao.php");
class UserDao
{
    public static function insert($nome, $nick, $email, $senha, $dataNasc, $sobrenome, $cpf, $avatar, $isAdmin)
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        if ($isAdmin) {
            $sql_code = "INSERT INTO tbuser (nomeUser, nickUser, emailUser, senhaUser, dataNascUser, sobrenomeUser, cpfUser, avatarUser, isAdmin) VALUES (:nome, :nick, :email, :senha, :dataNasc, :sobrenome, :cpf, :avatar, 1)";
        } else {
            $sql_code = "INSERT INTO tbuser (nomeUser, nickUser, emailUser, senhaUser, dataNascUser, sobrenomeUser, cpfUser, avatarUser) VALUES (:nome, :nick, :email, :senha, :dataNasc, :sobrenome, :cpf, :avatar)";
        }

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":nick", $nick);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":dataNasc", $dataNasc);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":avatar", $avatar);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores inseridos com sucesso!";
        } else {
            echo "Erro na inserção de dados.";
        }
    }


    public static function selectAll()
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT * FROM tbuser";
        $stmt = $pdo->prepare($sql_code);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public static function selectId($id)
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT * FROM tbuser WHERE idUser = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public static function selectAccount($email, $senha)
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT * FROM tbuser WHERE emailUser = :email AND senhaUser = :senha";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public static function contAll()
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT COUNT(*) FROM tbuser";
        $stmt = $pdo->prepare($sql_code);
        $stmt->execute();

        $total = $stmt->fetchColumn();

        return $total !== false ? $total : false;
    }

    public static function update($id, $username)
    {
    }

    public static function delete($id)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "DELETE FROM tbuser WHERE idUser = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $sql_code = "DELETE FROM tbcomentario WHERE idUser = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
