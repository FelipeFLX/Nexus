-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2023 às 20:26
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
('MMORPG', 18),
('Casual', 19);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbjogo`
--

CREATE TABLE `tbjogo` (
  `idJogo` int(11) NOT NULL,
  `nomeJogo` varchar(75) NOT NULL,
  `precoJogo` decimal(10,2) NOT NULL,
  `generoPrincipalJogo` int(11) NOT NULL,
  `plataformaJogo` int(11) NOT NULL,
  `descJogo` text NOT NULL,
  `capaJogo` varchar(150) NOT NULL,
  `dataLancamentoJogo` date NOT NULL,
  `desenvolvedoraJogo` varchar(80) NOT NULL,
  `subgeneroJogo` int(11) NOT NULL,
  `notaJogo` decimal(10,1) NOT NULL,
  `logoJogo` varchar(88) NOT NULL,
  `classificacaoJogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbjogo`
--

INSERT INTO `tbjogo` (`idJogo`, `nomeJogo`, `precoJogo`, `generoPrincipalJogo`, `plataformaJogo`, `descJogo`, `capaJogo`, `dataLancamentoJogo`, `desenvolvedoraJogo`, `subgeneroJogo`, `notaJogo`, `logoJogo`, `classificacaoJogo`) VALUES
(2, 'The Lord of the Rings™: Return to Moria', 107.99, 1, 23, 'The Lord of the Rings: Return to Moria segue os Anões enquanto embarcam em uma nova aventura para recuperar Moria, a lendária casa sob as Montanhas da Névoa. Os jogadores unirão as forças para sobreviver, fabricar, construir e explorar as icônicas minas em expansão. Os aventureiros valentes precisarão ser vigilantes, pois diversos mistérios perigosos os aguardam.\r\nRecupere Moria, a terra natal dos anões\r\nConvocados para as Montanhas da Névoa pelo Lorde Gimli Lockbearer (Portador da Mecha), os jogadores assumem o controle de uma sociedade de Anões encarregada de recuperar os espólios perdidos nas profundezas da terra natal dos Anões de Moria — conhecida como Khazad-dûm ou Dwarrowdelf. A busca exigirá coragem, indo fundo nas Minas de Moria para recuperar as riquezas.\r\nSituado em um reino de Moria gerado de forma procedural, duas aventuras nunca serão iguais. Cada expedição pode ser feita a sós ou on-line com amigos. Os jogadores poderão extrair para criar equipamentos melhores e recursos, mas cuidado com a mineração: ela faz barulho, o que pode atrair perigos. Onde tem barulho, tem combate. Escave os mistérios dos três picos lendários, extraia metais preciosos e combata forças indescritíveis para aprender o segredo da Sombra que se espreita por dentro.\r\nCaracterísticas principais do jogo:\r\n- Sinta a Sociedade: vivencie a Sociedade dos Anões como nunca, com a rica tradição do icônico mundo da fantasia de J.R.R. Tolkien entrelaçado na própria estrutura de The Lord of the Rings: Return to Moria.\r\n- Sobreviva à escuridão: para sobreviver às traiçoeiras Minas de Moria, os jogadores devem poupar recursos, caçar e reunir-se para se alimentar, além de administrar o sono, a temperatura e os níveis de ruído. Devem utilizar sistemas de luz dinâmicos para segurança e para abrir um caminho ainda mais para a escuridão. Precisam combater males indescritíveis e sobreviver a hordas de monstruosos Orcs em combates sangrentos, enquanto desvendam o segredo da Sombra que espreita dentro da montanha.\r\n- Construção de base: encontre conforto da escuridão. Revele e desobstrua novos locais para criar uma arquitetura em grande escala. Use a criatividade e construa bases a partir do zero ou desenvolva sobre o ambiente existente. Cuidado com os males que procuram destruir o progresso dos Anões.\r\n- Restaure e reconfigure Moria: devolva a antiga glória ao reino há muito perdido de Khazad-dûm ao recuperar os marcos dos Anões conforme a história avança. Revitalize as antigas minas e retome o fogo de suas forjas para extrair seus recursos intocados.\r\n- Explore: vá até as profundezas das Minas de Moria. Os ambientes gerados de maneira procedural são abundantes em recursos e cheios de mistério e perigo, o que proporciona uma experiência única a cada vez.\r\n- Multijogador cooperativo: aventure-se sozinho ou com amigos no modo cooperativo multijogador on-line com até oito jogadores.\r\n- Fabrique ferramentas de anões, armas e mais: crie e saqueie armaduras, ferramentas, armas e estruturas anãs lendárias. Restaure antigas forjas para fortalecer, consertar e encantar equipamentos. Aprimore e desbloqueie novas tecnologias e máquinas fantásticas.\r\n- Descubra artefatos mágicos: descubra itens mágicos antigos, incluindo espadas que brilham quando há Orcs por perto, mapas de depósitos de Mithril, livros com esquemas de fabricação esquecidos e amuletos que dão força ou sabedoria.\r\n- Extraia minérios e pedras preciosas: estabeleça minas para explorar depósitos de recursos preciosos como ferro, ouro e quartzo; e materiais fantásticos, como o Mithril. Acesse estações de fabricação e forjas para converter minério em lingotes e aprimorar equipamentos. Mas prepare-se, a mineração é barulhenta e pode despertar o que se esconde na escuridão.\r\n- Construtor de Anão abrangente: os jogadores tornam-se parte da Lenda dos Anões ao criar seu próprio Anão no criador de personagens personalizado. Os Anões podem ser personalizados de várias maneiras para criar uma identidade única. Durante o jogo, os jogadores podem encontrar e fabricar armaduras e armas para aperfeiçoar ainda mais seu estilo único.\r\nⒸ 2022 Free Range Games. All rights reserved. Free Range Games and the Free Range Games logo are trademarks or service marks of Free Range Games.\r\nⒸ 2022 North Beach Games and associated logos and names are trademarks of Open Door Entertainment, LLC. All rights reserved.', '6557ac110098b.jpg', '2023-10-24', '', 0, 0.0, '', 0),
(3, 'The Last of Us: Part I', 249.99, 1, 1, 'Sobreviva a um apocalipse na Terra em The Last of Us, um título exclusivo para PlayStation 3 da Naughty Dog. Aqui você encontrará cidades abandonadas recuperadas pela natureza. Aqui está uma população dizimada por uma praga moderna. Aqui, há apenas sobreviventes matando uns aos outros por comida, armas ou qualquer coisa que possam encontrar. Aqui você não encontra esperança. Joel, um sobrevivente brutal, e Ellie, uma adolescente corajosa e sábia para a idade, devem trabalhar juntos se quiserem sobreviver à sua jornada pelos EUA.\r\n', '65566c8dd8d5b.png', '2023-03-28', '', 0, 0.0, '', 0),
(4, 'Honkai: Star Rail', 0.00, 1, 23, '3, 2, 1... iniciando Salto Hiperespacial! Uma Estação Espacial com Curios seladas, um planeta alienígena com um inverno eterno, uma nave estelar caçando abominações... Cada parada do Expresso Astral é uma visão única da galáxia! Explore mundos e civilizações bizarras, descubra mistérios além da imaginação e embarque em uma jornada incrível!\r\n□ Uma Experiência de RPG Fascinante – Uma aventura imersiva e incomparável além das estrelas\r\nEmbarque em uma aventura galáctica onde você molda sua própria história. Com tecnologia de ponta que renderiza cinemáticas de alta qualidade em tempo real, nosso inovador sistema de expressão facial transmite emoções autênticas, tudo aprimorado pela trilha sonora original da HOYO-MiX que define o cenário. Junte-se a nós agora e viaje por um universo conflitante e cooperativo, onde suas escolhas definirão o desfecho da história!\r\n□ Companheiros Maravilhosos – Embarque em uma exploração com novos amigos\r\nNeste oceano de estrelas, existem infinitos encontros e aventuras para viver. Prepare as passagens dos seus acompanhantes e embarquem juntos nesta maravilhosa jornada! Uma excêntrica e corajosa jovem com amnésia, um Guarda Crinalva nobre e de boa índole, um preguiçoso general dos Cavaleiros das Nuvens e até mesmo uma bela e misteriosa dama... Juntem-se para enfrentar a crise causada pelo Stellaron e construir seu passado, presente e futuro.\r\n□ Combates Táticos e Inovadores – Aproveite os pontos fracos e lute ao máximo\r\nPrepare-se para batalhas emocionantes e rápidas! Use um sistema de combate simples e estratégico totalmente novo, utilize Técnicas e elimine seus inimigos com diferentes Quebras de Fraqueza e, em seguida, termine a luta de maneira espetacular com uma Perícia Suprema. Nos labirintos gerados aleatoriamente do Universo Simulado, Eventos Aleatórios surpresa e cerca de 100 Bênçãos e Curios diferentes concederão a você um aumento incrível nas habilidades de seus personagens, permitindo que você desafie ambientes de combate ainda mais imprevisíveis.\r\n□ Dubladores Talentosos para uma Experiência Imersiva – Uma dublagem incrível disponível em vários idiomas\r\nQuando as palavras ganham vida, as histórias dão espaço para escolhas e os personagens possuem uma alma... Apresentamos a você dezenas de emoções, centenas de expressões faciais, milhares de conteúdo de histórias e um milhão de palavras que compõem o coração pulsante deste universo. Dublado em quatro idiomas, os personagens transcenderão suas existências virtuais e se tornarão seus companheiros reais, criando um capítulo novo nesta história com você.', '655677127df28.jfif', '2023-04-25', '', 0, 0.0, '', 0),
(5, 'God of War', 50.00, 1, 2, 'Este jogo de ação/aventura/combate faz uso poderoso do mundo sombrio e imaginativo da mitologia da Grécia Antiga, onde os reinos do mortal e do divino colidem em uma atmosfera generalizada de força bruta e violência. Jogando como Kratos, ao longo do jogo os jogadores empunharão lâminas duplas presas ao seu corpo por longas correntes, armas que simbolizam este mundo cruel ao qual ele está preso e o destino do qual procura escapar. Apresentando uma hora de sequências cinematográficas e um sistema de combate profundo que incorpora ações sensíveis ao contexto e uma extensa gama de combos, GOD OF WAR leva os jogadores através de vários ambientes que os farão lutar contra inimigos ferozes, balançar em cordas, escalar penhascos de montanhas, nadar em rios. e deslizando pelas tirolesas. O resultado é uma aventura única e emocionante pela mitologia grega.', '6557ba96c58fa.jpg', '2005-05-22', '', 0, 0.0, '', 0),
(6, 'Super Mario Bros. 3', 15.00, 15, 8, 'Lute contra monstros e mini-chefes, evite fantasmas e o sol escaldante. Faça o seu caminho através da água e da areia movediça. Desvie de bolas de canhão e balas e resgate a varinha do rei! Em Super Mario Bros. 3 há mais warps, mais chances de vidas extras e novos trajes especiais! O traje de guaxinim permite voar e derrubar blocos. O traje de sapo ajuda você a nadar mais que os peixes mortais. Há ternos para todas as ocasiões! Guarde flores e cogumelos para usar mais tarde. Jogue rodadas de bônus do tipo game show! Volte para a última tela e pegue um cogumelo! Faça uma pausa para fazer uma pausa e continue de onde parou! Super Mario Bros. 3 é divertido de jogar sozinho ou em equipe com um amigo para prolongar a aventura!', '6557ab02a7a83.jpg', '1988-10-23', '', 0, 0.0, '', 0),
(7, 'The Legend of Zelda: Majora\'s Mask', 20.00, 2, 10, 'A nova aventura épica de Link o leva ao mundo místico de Termina, onde relógios sempre presentes contam as horas até que uma lua ameaçadora caia do céu. Quando seu cavalo e Ocarina são roubados por uma figura estranha e mascarada, Link embarca em uma missão urgente para resolver o mistério da lua, salvar o mundo da destruição e encontrar o caminho de volta à pacífica terra de Hyrule! * Link se transforma diante de seus olhos – Mais de 20 máscaras mágicas dão a Link poderes e habilidades que ele nunca teve antes! Veja-o se transformar em uma infeliz criança Deku, um poderoso herói Goron e um lendário guitarrista Zora. * Corrida contra o tempo - Personagens e eventos fluem com as horas do dia. Defina seu próprio horário e até altere o próprio tempo em uma corrida para parar a lua e salvar o mundo! * Ambientes panorâmicos! Batalhas de ação poderosas! Personagens e eventos totalmente interativos! Experimente lindas paisagens renderizadas, enxames de inimigos atacantes e um mundo profundo e envolvente de maravilhas com o poder do N64 Expansion Pak.', '6557ab9b016d2.jpg', '2000-04-27', '', 0, 0.0, '', 0),
(8, 'The Binding of Isaac: Repentance', 68.00, 1, 23, 'Experimente o clássico moderno, The Binding of Isaac, como você nunca viu antes. É um jogo grande demais para ser chamado de sequência: Repentance leva Isaac a novos patamares de aventura em masmorras roguelike, enquanto o garoto corajoso desce ao porão para seu maior desafio até agora! A nova missão de Isaac leva-o a lugares desconhecidos onde ele nunca esteve, repletos de novos inimigos e chefes horríveis, combinações de armas com as quais você nunca sinergizou antes e itens que ele nunca viu... terrores profanos de seus sonhos mais loucos e piores pesadelos!', '6557acf74d74a.jpg', '2021-03-31', '', 0, 0.0, '', 0),
(12, 'The legend of Zelda:Ocarina of time', 0.00, 1, 10, 'Ganondorf, o malvado Rei dos Ladrões, está em movimento, ameaçando a pacífica terra de Hyrule. Ele está determinado a roubar seu caminho para o lendário Reino Sagrado na esperança de aproveitar o poder da mítica Triforce. Como o jovem herói Link, é seu destino frustrar os esquemas malignos de Ganondorf. Navi, sua fada guardiã, irá guiá-lo enquanto você se aventura pelas muitas regiões de Hyrule, desde as cavernas vulcânicas da Montanha da Morte até as águas traiçoeiras do Domínio de Zora. Antes de completar esta missão épica, você mergulhará em masmorras mortais, coletará armas de grande poder e aprenderá os feitiços necessários para conquistar a força mais irresistível de todos os tempos. * O enredo imersivo e os ambientes atraem os jogadores para um incrível mundo 3D. * Viagem no tempo permite que você jogue como Link em diferentes fases de sua vida. * Novos recursos de jogabilidade incluem um sistema de segmentação exclusivo e perspectivas de 1ª e 3ª pessoa. * Até três jogos podem ser salvos simultaneamente na memória!', '655ba8adde7ff.jpg', '1998-11-21', 'Nintendo EAD', 2, 4.4, '655ba8adde808.png', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnoticias`
--

CREATE TABLE `tbnoticias` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(50) NOT NULL,
  `textoNoticia` text NOT NULL,
  `dataLancNoticia` datetime NOT NULL,
  `dataModfcNoticia` datetime NOT NULL,
  `capaNoticia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbnoticias`
--

INSERT INTO `tbnoticias` (`idNoticia`, `tituloNoticia`, `textoNoticia`, `dataLancNoticia`, `dataModfcNoticia`, `capaNoticia`) VALUES
(1, 'Pokemon GO', 'Jogadores se reúnem anos após o lançamento e amizade vira grande motor de jogo\r\nPokemon GO\r\nComunidade de jogadores do Ceará foi considerada mais engajada do Brasil em agosto pela empresa desenvolvedora do jogo.', '2023-11-17 21:39:09', '2023-11-17 22:55:02', '6558197698072.jpg');

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
(1, 'Matheus', 'Vuall_Platium', 'mh15122006@gmail.com', '1234rewqa', '2006-12-15', 'Henrique', '111.111.111-11'),
(2, 'Felaipe', 'fefeh_02', 'fefefzinho@hotmail.com.br', '14dontyodnaodjhr', '1970-01-01', 'Felaix', '154.789.620-31');

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
  ADD KEY `generoJogo` (`generoPrincipalJogo`),
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
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  MODIFY `idJogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbnoticias`
--
ALTER TABLE `tbnoticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
