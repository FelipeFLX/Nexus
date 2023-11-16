-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/11/2023 às 01:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdnexus`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbgenero`
--

CREATE TABLE `tbgenero` (
  `nomeGenero` varchar(35) NOT NULL,
  `idGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbgenero`
--

INSERT INTO `tbgenero` (`nomeGenero`, `idGenero`) VALUES
('Ação', 1),
('Aventura', 2),
('RPG', 3),
('Estratégia', 4),
('Simulaçao', 5),
('Esportes', 6),
('Quebra-cabeças', 7),
('Corrida', 8),
('Luta', 9),
('Terror', 10),
('Ritmo', 11),
('Card-games', 12),
('FPS', 13),
('Sandbox', 14),
('Plataforma', 15),
('Visual novel', 16),
('Roguelike', 17),
('MMORPG', 18);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbjogo`
--

CREATE TABLE `tbjogo` (
  `idJogo` int(11) NOT NULL,
  `nomeJogo` varchar(75) NOT NULL,
  `precoJogo` decimal(10,2) NOT NULL,
  `generoJogo` int(11) NOT NULL,
  `plataformaJogo` int(11) NOT NULL,
  `descJogo` text NOT NULL,
  `capaJogo` varchar(150) NOT NULL,
  `dataLancamentoJogo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnoticias`
--

CREATE TABLE `tbnoticias` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(50) NOT NULL,
  `textoNoticia` text NOT NULL,
  `dataLancNoticia` datetime NOT NULL,
  `dataModfcNoticia` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbplataforma`
--

CREATE TABLE `tbplataforma` (
  `idPlataforma` int(11) NOT NULL,
  `nomePlataforma` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbplataforma`
--

INSERT INTO `tbplataforma` (`idPlataforma`, `nomePlataforma`) VALUES
(1, 'PlayStation'),
(2, 'PlayStation 2'),
(3, 'PlayStation 3'),
(4, 'PlayStation 4'),
(5, 'PlayStation 5'),
(6, 'PlayStation Vita'),
(7, 'PSP'),
(8, 'NES'),
(9, 'SNES'),
(10, 'Nintendo 64'),
(11, 'Nintendo GameCube'),
(12, 'Nintendo Wii'),
(13, 'Nintendo Wii U'),
(14, 'Nintendo Switch'),
(15, 'Nintendo Game Boy '),
(16, 'Nintendo Game Boy Advence'),
(17, 'Nintendo DS'),
(18, 'Nintendo 3DS'),
(19, 'Xbox Clássico'),
(20, 'Xbox 350'),
(21, 'Xbox One'),
(22, 'Xbox Series X/S'),
(23, 'Windows'),
(24, 'Linux'),
(25, 'Mac OS'),
(26, 'Android'),
(27, 'IOS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtrailer`
--

CREATE TABLE `tbtrailer` (
  `idTrailer` int(11) NOT NULL,
  `tituloTrailer` varchar(50) NOT NULL,
  `linkTrailer` varchar(255) NOT NULL,
  `dataTrailer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(60) NOT NULL,
  `nickUser` varchar(35) NOT NULL,
  `emailUser` varchar(100) NOT NULL,
  `senhaUser` varchar(35) NOT NULL,
  `dataNascUser` date NOT NULL,
  `sobrenomeUser` varchar(50) NOT NULL,
  `cpfUser` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `nickUser`, `emailUser`, `senhaUser`, `dataNascUser`, `sobrenomeUser`, `cpfUser`) VALUES
(1, 'Matheus', 'Vuall_Platium', 'mh15122006@gmail.com', '1234rewqa', '2006-12-15', 'Henrique', '111.111.111-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Índices de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  ADD PRIMARY KEY (`idJogo`),
  ADD KEY `generoJogo` (`generoJogo`),
  ADD KEY `plataformaJogo` (`plataformaJogo`),
  ADD KEY `capaJogo` (`capaJogo`);

--
-- Índices de tabela `tbnoticias`
--
ALTER TABLE `tbnoticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Índices de tabela `tbplataforma`
--
ALTER TABLE `tbplataforma`
  ADD PRIMARY KEY (`idPlataforma`);

--
-- Índices de tabela `tbtrailer`
--
ALTER TABLE `tbtrailer`
  ADD PRIMARY KEY (`idTrailer`);

--
-- Índices de tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  MODIFY `idJogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbnoticias`
--
ALTER TABLE `tbnoticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbplataforma`
--
ALTER TABLE `tbplataforma`
  MODIFY `idPlataforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tbtrailer`
--
ALTER TABLE `tbtrailer`
  MODIFY `idTrailer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
