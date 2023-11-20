<?php
require_once(__DIR__ . "/../config/Conexao.php");

class JogoDao
{
    public static function insert($nome, $preco, $plataforma, $genero, $descricao, $dataLancamento, $subgenero, $desenvolvedora, $classificacao, $nota, $capaJogo, $logo)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbjogo (nomeJogo, precoJogo, plataformaJogo, generoPrincipalJogo, descJogo, dataLancamentoJogo, subgeneroJogo, desenvolvedoraJogo, classificacaoJogo, notaJogo, capaJogo, logoJogo) VALUES (:nome, :preco, :plataforma, :generoPrincipal, :descricao, :dataLancamento, :subgenero, :desenvolvedora, :classificacao, :nota, :capaJogo, :logo)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":plataforma", $plataforma);
        $stmt->bindParam(":generoPrincipal", $genero);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dataLancamento", $dataLancamento);
        $stmt->bindParam(":subgenero", $subgenero);
        $stmt->bindParam(":desenvolvedora", $desenvolvedora);
        $stmt->bindParam(":classificacao", $classificacao);
        $stmt->bindParam(":capaJogo", $capaJogo);
        $stmt->bindParam(":nota", $nota);
        $stmt->bindParam(":logo", $logo);

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

        $sql_code = "SELECT * FROM tbjogo";
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

        $sql_code = "SELECT * FROM tbjogo WHERE idJogo = :id";
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

        
        $sql_code = "SELECT * FROM tbjogo WHERE generoPrincipalJogo = :genero";
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
    public static function getClassificacao($classificacao)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT classificacao FROM tbclassificacao WHERE idClassificacao = :classificacao";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":classificacao", $classificacao);

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

        $sql_code = "SELECT nomePlataforma FROM tbplataforma WHERE idPlataforma = :plataforma";
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

        $sql_code = "UPDATE tbjogo SET nomeJogo = :nome, precoJogo = :preco, plataformaJogo = :plataforma, generoPrincipalJogo = :genero, descJogo = :descricao, dataLancamentoJogo = :dataLancamento, capaJogo = :capaJogo WHERE idJogo = :id";

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

        $sql_code = "UPDATE tbjogo SET nomeJogo = :nome, precoJogo = :preco, plataformaJogo = :plataforma, generoPrincipalJogo = :genero, descJogo = :descricao, dataLancamentoJogo = :dataLancamento WHERE idJogo = :id";

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

        $sql_code = "DELETE FROM tbjogo WHERE idJogo = :id";
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
