<?php
require_once(__DIR__ . "/../config/Conexao.php");

class JogoDao
{
    public static function insert($nome, $preco, $plataforma, $genero, $descricao, $dataLancamento, $capaJogo)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbJogo (nomeJogo, precoJogo, plataformaJogo, generoJogo, descJogo, dataLancamentoJogo, capaJogo) VALUES (:nome, :preco, :plataforma, :genero, :descricao, :dataLancamento, :capaJogo)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":plataforma", $plataforma);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dataLancamento", $dataLancamento);
        $stmt->bindParam(":capaJogo", $capaJogo);

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

        $sql_code = "SELECT * FROM tbJogo";
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

        $sql_code = "SELECT * FROM tbJogo WHERE idJogo = :id";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }
    public static function getByGenero($genero)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        
        $sql_code = "SELECT * FROM tbJogo WHERE generoJogo = :genero";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":genero", $genero);
        $stmt->execute();


        $jogos = [];
        while ($row = $stmt->fetch()) {
            $jogos[] = $row;
        }

        return $jogos;

    }
    public static function getGenero($genero)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT nomeGenero FROM tbgenero WHERE idGenero = :genero";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":genero", $genero);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado['nomeGenero'];
    }
    public static function getPlataforma($plataforma)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT nomePlataforma FROM tbPlataforma WHERE idPlataforma = :plataforma";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":plataforma", $plataforma);

        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado['nomePlataforma'];
    }
    public static function update($id, $nome, $preco, $plataforma, $genero, $descricao, $dataLancamento, $capaJogo)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbJogo SET nomeJogo = :nome, precoJogo = :preco, plataformaJogo = :plataforma, generoJogo = :genero, descJogo = :descricao, dataLancamentoJogo = :dataLancamento, capaJogo = :capaJogo WHERE idJogo = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":plataforma", $plataforma);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dataLancamento", $dataLancamento);
        $stmt->bindParam(":capaJogo", $capaJogo);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores atualizados com sucesso!";
        } else {
            return "Erro na atualização de dados.";
        }
    }
    public static function updateSemCapa($id, $nome, $preco, $plataforma, $genero, $descricao, $dataLancamento)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbJogo SET nomeJogo = :nome, precoJogo = :preco, plataformaJogo = :plataforma, generoJogo = :genero, descJogo = :descricao, dataLancamentoJogo = :dataLancamento WHERE idJogo = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":plataforma", $plataforma);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dataLancamento", $dataLancamento);
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

        $sql_code = "DELETE FROM tbJogo WHERE idJogo = :id";
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
