<?php
require_once(__DIR__ . "/../config/Conexao.php");

class JogoDao
{
    public static function insert($nome, $preco, $plataforma, $genero, $descricao, $dataLancamento, $subgenero, $desenvolvedora, $classificacao, $capaJogo, $logo)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbjogo (nomeJogo, precoJogo, plataformaJogo, generoPrincipalJogo, descJogo, dataLancamentoJogo, subgeneroJogo, desenvolvedoraJogo, classificacaoJogo, capaJogo, logoJogo) VALUES (:nome, :preco, :plataforma, :generoPrincipal, :descricao, :dataLancamento, :subgenero, :desenvolvedora, :classificacao, :capaJogo, :logo)";

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
        $stmt->bindParam(":logo", $logo);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores inseridos com sucesso!";
        } else {
            return "Erro na inserção de dados.";
        }
    }
    public static function insertBackground($id, $background)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "INSERT INTO tbbackground (idJogo, pathBackground) VALUES (:id, :background)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":background", $background);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Valores inseridos com sucesso!";
        } else {
            return "Erro na inserção de dados.";
        }
    }
    public static function updateBackground($id, $background)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbbackground SET pathBackground = :background WHERE idJogo = :id)";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":background", $background);

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

        $sql_code = "SELECT * FROM tbjogo ORDER BY idJogo DESC";
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
    public static function contAll()
    {
        try {
            $conexao = new conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT COUNT(*) FROM tbjogo";
        $stmt = $pdo->prepare($sql_code);
        $stmt->execute();

        $total = $stmt->fetchColumn();

        // Retorne o total, ou false se não houver registros
        return $total !== false ? $total : false;
    }
    public static function getByIdByName($nome)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "SELECT idJogo FROM tbjogo WHERE nomeJogo = :nome";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":nome", $nome);
        $stmt->execute();

        $idJogo = $stmt->fetch(PDO::FETCH_COLUMN, 0);

        return $idJogo;
    }
    
    public static function getByGenero($genero)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        
        $sql_code = "SELECT * FROM tbjogo WHERE generoPrincipalJogo = :genero OR subgeneroJogo = :subgenero ORDER BY idJogo DESC";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":subgenero", $genero);
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

        return $resultado['nomeGenero'] ;
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

        return $resultado['classificacao'];
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
    public static function getBackgrounds($id)
    {
        $backgroundImages = [];

        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();

            $sql_code = "SELECT pathBackground FROM tbbackground WHERE idJogo = :id";
            $stmt = $pdo->prepare($sql_code);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $backgroundImages[] = $row['pathBackground'];
            }
        } catch (PDOException $e) {
            echo "Error connecting to database: " . $e->getMessage();
        }

        return $backgroundImages;
    }
    public static function update($id, $nome, $preco, $plataforma, $genero, $descricao, $dataLancamento, $subgenero, $desenvolvedora, $classificacao, $capaJogo, $logo)
    {
        try {
            $conexao = new Conexao();
            $pdo = $conexao->getPDO();
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }

        $sql_code = "UPDATE tbjogo SET nomeJogo = :nome, precoJogo = :preco, plataformaJogo = :plataforma, generoPrincipalJogo = :genero, descJogo = :descricao, dataLancamentoJogo = :dataLancamento";

        // Condição 1: capaJogo e logo estão preenchidos
        if (!empty($capaJogo) && !empty($logo)) {
            $sql_code .= ", capaJogo = :capaJogo, logoJogo = :logo";
        }
        // Condição 2: Somente capaJogo está preenchido
        elseif (!empty($capaJogo) && empty($logo)) {
            $sql_code .= ", capaJogo = :capaJogo";
        }
        // Condição 3: Somente logo está preenchido
        elseif (empty($capaJogo) && !empty($logo)) {
            $sql_code .= ", logoJogo = :logo";
        }
        
        $sql_code .= ", subgeneroJogo = :subgenero, desenvolvedoraJogo = :desenvolvedora, classificacaoJogo = :classificacao WHERE idJogo = :id";

        $stmt = $pdo->prepare($sql_code);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":plataforma", $plataforma);
        $stmt->bindParam(":genero", $genero);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":dataLancamento", $dataLancamento);
        $stmt->bindParam(":subgenero", $subgenero);
        $stmt->bindParam(":desenvolvedora", $desenvolvedora);
        $stmt->bindParam(":classificacao", $classificacao);

        // Condição 1: capaJogo e logo estão preenchidos
        if (!empty($capaJogo) && !empty($logo)) {
            $stmt->bindParam(":capaJogo", $capaJogo);
            $stmt->bindParam(":logo", $logo);
        }
        // Condição 2: Somente capaJogo está preenchido
        elseif (!empty($capaJogo) && empty($logo)) {
            $stmt->bindParam(":capaJogo", $capaJogo);
        }
        // Condição 3: Somente logo está preenchido
        elseif (empty($capaJogo) && !empty($logo)) {
            $stmt->bindParam(":logo", $logo);
        }

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
