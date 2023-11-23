-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2023 às 21:33
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

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
-- Estrutura da tabela `tbbackground`
--

CREATE TABLE `tbbackground` (
  `idBackgroud` int(11) NOT NULL,
  `idJogo` int(11) NOT NULL,
  `pathBackground` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbbackground`
--

INSERT INTO `tbbackground` (`idBackgroud`, `idJogo`, `pathBackground`) VALUES
(1, 36, '655fa72e1f457.png'),
(2, 36, '655fa72e26434.png'),
(3, 36, '655fa72e2e251.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclassificacao`
--

CREATE TABLE `tbclassificacao` (
  `idClassificacao` int(11) NOT NULL,
  `classificacao` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbclassificacao`
--

INSERT INTO `tbclassificacao` (`idClassificacao`, `classificacao`) VALUES
(1, 'Livre'),
(2, '10'),
(3, '12'),
(4, '14'),
(5, '16'),
(6, '18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcomentario`
--

CREATE TABLE `tbcomentario` (
  `idComentario` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idJogo` int(11) NOT NULL,
  `comentarioUser` text NOT NULL,
  `notaUser` int(11) NOT NULL,
  `dataPostagem` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbcomentario`
--

INSERT INTO `tbcomentario` (`idComentario`, `idUser`, `idJogo`, `comentarioUser`, `notaUser`, `dataPostagem`) VALUES
(1, 1, 8, 'Melhor jogo de todos os tempos!!', 5, '2023-11-23 14:06:44'),
(2, 1, 3, 'Final lindo!!!', 5, '2023-11-23 14:17:53'),
(3, 1, 3, 'Adorei!!!!', 1, '2023-11-23 14:26:31'),
(4, 1, 5, 'gostei muito do jogo, gameplay nota 10/10', 5, '2023-11-23 14:33:33'),
(5, 1, 5, 'muito ruim', 1, '2023-11-23 14:34:06'),
(6, 1, 36, 'Jogo lixo!!!', 1, '2023-11-23 17:18:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

CREATE TABLE `tbgenero` (
  `nomeGenero` varchar(35) NOT NULL,
  `idGenero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbgenero`
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
('Casual', 19),
('Shooter', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogo`
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
-- Extraindo dados da tabela `tbjogo`
--

INSERT INTO `tbjogo` (`idJogo`, `nomeJogo`, `precoJogo`, `generoPrincipalJogo`, `plataformaJogo`, `descJogo`, `capaJogo`, `dataLancamentoJogo`, `desenvolvedoraJogo`, `subgeneroJogo`, `notaJogo`, `logoJogo`, `classificacaoJogo`) VALUES
(2, 'The Lord of the Rings™: Return to Moria', 107.99, 1, 23, 'The Lord of the Rings: Return to Moria segue os Anões enquanto embarcam em uma nova aventura para recuperar Moria, a lendária casa sob as Montanhas da Névoa. Os jogadores unirão as forças para sobreviver, fabricar, construir e explorar as icônicas minas em expansão. Os aventureiros valentes precisarão ser vigilantes, pois diversos mistérios perigosos os aguardam.\r\nRecupere Moria, a terra natal dos anões\r\nConvocados para as Montanhas da Névoa pelo Lorde Gimli Lockbearer (Portador da Mecha), os jogadores assumem o controle de uma sociedade de Anões encarregada de recuperar os espólios perdidos nas profundezas da terra natal dos Anões de Moria — conhecida como Khazad-dûm ou Dwarrowdelf. A busca exigirá coragem, indo fundo nas Minas de Moria para recuperar as riquezas.\r\nSituado em um reino de Moria gerado de forma procedural, duas aventuras nunca serão iguais. Cada expedição pode ser feita a sós ou on-line com amigos. Os jogadores poderão extrair para criar equipamentos melhores e recursos, mas cuidado com a mineração: ela faz barulho, o que pode atrair perigos. Onde tem barulho, tem combate. Escave os mistérios dos três picos lendários, extraia metais preciosos e combata forças indescritíveis para aprender o segredo da Sombra que se espreita por dentro.\r\nCaracterísticas principais do jogo:\r\n- Sinta a Sociedade: vivencie a Sociedade dos Anões como nunca, com a rica tradição do icônico mundo da fantasia de J.R.R. Tolkien entrelaçado na própria estrutura de The Lord of the Rings: Return to Moria.\r\n- Sobreviva à escuridão: para sobreviver às traiçoeiras Minas de Moria, os jogadores devem poupar recursos, caçar e reunir-se para se alimentar, além de administrar o sono, a temperatura e os níveis de ruído. Devem utilizar sistemas de luz dinâmicos para segurança e para abrir um caminho ainda mais para a escuridão. Precisam combater males indescritíveis e sobreviver a hordas de monstruosos Orcs em combates sangrentos, enquanto desvendam o segredo da Sombra que espreita dentro da montanha.\r\n- Construção de base: encontre conforto da escuridão. Revele e desobstrua novos locais para criar uma arquitetura em grande escala. Use a criatividade e construa bases a partir do zero ou desenvolva sobre o ambiente existente. Cuidado com os males que procuram destruir o progresso dos Anões.\r\n- Restaure e reconfigure Moria: devolva a antiga glória ao reino há muito perdido de Khazad-dûm ao recuperar os marcos dos Anões conforme a história avança. Revitalize as antigas minas e retome o fogo de suas forjas para extrair seus recursos intocados.\r\n- Explore: vá até as profundezas das Minas de Moria. Os ambientes gerados de maneira procedural são abundantes em recursos e cheios de mistério e perigo, o que proporciona uma experiência única a cada vez.\r\n- Multijogador cooperativo: aventure-se sozinho ou com amigos no modo cooperativo multijogador on-line com até oito jogadores.\r\n- Fabrique ferramentas de anões, armas e mais: crie e saqueie armaduras, ferramentas, armas e estruturas anãs lendárias. Restaure antigas forjas para fortalecer, consertar e encantar equipamentos. Aprimore e desbloqueie novas tecnologias e máquinas fantásticas.\r\n- Descubra artefatos mágicos: descubra itens mágicos antigos, incluindo espadas que brilham quando há Orcs por perto, mapas de depósitos de Mithril, livros com esquemas de fabricação esquecidos e amuletos que dão força ou sabedoria.\r\n- Extraia minérios e pedras preciosas: estabeleça minas para explorar depósitos de recursos preciosos como ferro, ouro e quartzo; e materiais fantásticos, como o Mithril. Acesse estações de fabricação e forjas para converter minério em lingotes e aprimorar equipamentos. Mas prepare-se, a mineração é barulhenta e pode despertar o que se esconde na escuridão.\r\n- Construtor de Anão abrangente: os jogadores tornam-se parte da Lenda dos Anões ao criar seu próprio Anão no criador de personagens personalizado. Os Anões podem ser personalizados de várias maneiras para criar uma identidade única. Durante o jogo, os jogadores podem encontrar e fabricar armaduras e armas para aperfeiçoar ainda mais seu estilo único.\r\nⒸ 2022 Free Range Games. All rights reserved. Free Range Games and the Free Range Games logo are trademarks or service marks of Free Range Games.\r\nⒸ 2022 North Beach Games and associated logos and names are trademarks of Open Door Entertainment, LLC. All rights reserved.', '655cfa16290c8.jpg', '2023-10-24', 'Free Range Games', 2, 4.4, '655be940f13ad.png', 3),
(3, 'The Last of Us: Part I', 249.99, 1, 23, 'Sobreviva a um apocalipse na Terra em The Last of Us, um título exclusivo para PlayStation 3 da Naughty Dog. Aqui você encontrará cidades abandonadas recuperadas pela natureza. Aqui está uma população dizimada por uma praga moderna. Aqui, há apenas sobreviventes matando uns aos outros por comida, armas ou qualquer coisa que possam encontrar. Aqui você não encontra esperança. Joel, um sobrevivente brutal, e Ellie, uma adolescente corajosa e sábia para a idade, devem trabalhar juntos se quiserem sobreviver à sua jornada pelos EUA.\r\n', '655cfa2a26b79.png', '2023-03-28', 'Naughty Dog', 2, 4.6, '655beb6f6f6fa.png', 6),
(4, 'Honkai: Star Rail', 0.00, 1, 23, '3, 2, 1... iniciando Salto Hiperespacial! Uma Estação Espacial com Curios seladas, um planeta alienígena com um inverno eterno, uma nave estelar caçando abominações... Cada parada do Expresso Astral é uma visão única da galáxia! Explore mundos e civilizações bizarras, descubra mistérios além da imaginação e embarque em uma jornada incrível!\r\n□ Uma Experiência de RPG Fascinante – Uma aventura imersiva e incomparável além das estrelas\r\nEmbarque em uma aventura galáctica onde você molda sua própria história. Com tecnologia de ponta que renderiza cinemáticas de alta qualidade em tempo real, nosso inovador sistema de expressão facial transmite emoções autênticas, tudo aprimorado pela trilha sonora original da HOYO-MiX que define o cenário. Junte-se a nós agora e viaje por um universo conflitante e cooperativo, onde suas escolhas definirão o desfecho da história!\r\n□ Companheiros Maravilhosos – Embarque em uma exploração com novos amigos\r\nNeste oceano de estrelas, existem infinitos encontros e aventuras para viver. Prepare as passagens dos seus acompanhantes e embarquem juntos nesta maravilhosa jornada! Uma excêntrica e corajosa jovem com amnésia, um Guarda Crinalva nobre e de boa índole, um preguiçoso general dos Cavaleiros das Nuvens e até mesmo uma bela e misteriosa dama... Juntem-se para enfrentar a crise causada pelo Stellaron e construir seu passado, presente e futuro.\r\n□ Combates Táticos e Inovadores – Aproveite os pontos fracos e lute ao máximo\r\nPrepare-se para batalhas emocionantes e rápidas! Use um sistema de combate simples e estratégico totalmente novo, utilize Técnicas e elimine seus inimigos com diferentes Quebras de Fraqueza e, em seguida, termine a luta de maneira espetacular com uma Perícia Suprema. Nos labirintos gerados aleatoriamente do Universo Simulado, Eventos Aleatórios surpresa e cerca de 100 Bênçãos e Curios diferentes concederão a você um aumento incrível nas habilidades de seus personagens, permitindo que você desafie ambientes de combate ainda mais imprevisíveis.\r\n□ Dubladores Talentosos para uma Experiência Imersiva – Uma dublagem incrível disponível em vários idiomas\r\nQuando as palavras ganham vida, as histórias dão espaço para escolhas e os personagens possuem uma alma... Apresentamos a você dezenas de emoções, centenas de expressões faciais, milhares de conteúdo de histórias e um milhão de palavras que compõem o coração pulsante deste universo. Dublado em quatro idiomas, os personagens transcenderão suas existências virtuais e se tornarão seus companheiros reais, criando um capítulo novo nesta história com você.', '655cfa3337131.jfif', '2023-04-25', 'miHoYo', 3, 4.6, '655bec39df7fe.png', 3),
(5, 'God of War', 50.00, 1, 2, 'Este jogo de ação/aventura/combate faz uso poderoso do mundo sombrio e imaginativo da mitologia da Grécia Antiga, onde os reinos do mortal e do divino colidem em uma atmosfera generalizada de força bruta e violência. Jogando como Kratos, ao longo do jogo os jogadores empunharão lâminas duplas presas ao seu corpo por longas correntes, armas que simbolizam este mundo cruel ao qual ele está preso e o destino do qual procura escapar. Apresentando uma hora de sequências cinematográficas e um sistema de combate profundo que incorpora ações sensíveis ao contexto e uma extensa gama de combos, GOD OF WAR leva os jogadores através de vários ambientes que os farão lutar contra inimigos ferozes, balançar em cordas, escalar penhascos de montanhas, nadar em rios. e deslizando pelas tirolesas. O resultado é uma aventura única e emocionante pela mitologia grega.', '655cfa3eb0fb1.jpg', '2005-05-22', 'SCE Santa Mônica', 2, 4.6, '655bed07c7600.png', 6),
(7, 'The Legend of Zelda: Majora\'s Mask', 15.00, 1, 10, 'A nova aventura épica de Link o leva ao mundo místico de Termina, onde relógios sempre presentes contam as horas até que uma lua ameaçadora caia do céu. Quando seu cavalo e Ocarina são roubados por uma figura estranha e mascarada, Link embarca em uma missão urgente para resolver o mistério da lua, salvar o mundo da destruição e encontrar o caminho de volta à pacífica terra de Hyrule! * Link se transforma diante de seus olhos – Mais de 20 máscaras mágicas dão a Link poderes e habilidades que ele nunca teve antes! Veja-o se transformar em uma infeliz criança Deku, um poderoso herói Goron e um lendário guitarrista Zora. * Corrida contra o tempo - Personagens e eventos fluem com as horas do dia. Defina seu próprio horário e até altere o próprio tempo em uma corrida para parar a lua e salvar o mundo! * Ambientes panorâmicos! Batalhas de ação poderosas! Personagens e eventos totalmente interativos! Experimente lindas paisagens renderizadas, enxames de inimigos atacantes e um mundo profundo e envolvente de maravilhas com o poder do N64 Expansion Pak.', '655bf636b3b86.png', '2000-04-27', 'Nintendo EAD', 2, 4.8, '655bf0399dd67.png', 1),
(8, 'The Binding of Isaac: Repentance', 68.00, 1, 23, 'Experimente o clássico moderno, The Binding of Isaac, como você nunca viu antes. É um jogo grande demais para ser chamado de sequência: Repentance leva Isaac a novos patamares de aventura em masmorras roguelike, enquanto o garoto corajoso desce ao porão para seu maior desafio até agora! A nova missão de Isaac leva-o a lugares desconhecidos onde ele nunca esteve, repletos de novos inimigos e chefes horríveis, combinações de armas com as quais você nunca sinergizou antes e itens que ele nunca viu... terrores profanos de seus sonhos mais loucos e piores pesadelos!', '655cfa578809e.jpg', '2021-03-31', 'Edmundo McMillen, Nicalis', 20, 4.3, '655bf1f256cdc.png', 4),
(13, 'The Witcher III: Wild Hunt: Game of the Year Editi', 150.00, 1, 23, 'Play the most polished and complete version of the most awarded game of 2015 - The Witcher 3: Wild Hunt – Game of the Year Edition. Now available with all expansions and additional content. Become a professional monster slayer and embark on an adventure of epic proportions! Upon its release, The Witcher 3: Wild Hunt became an instant classic, claiming over 250 Game of the Year awards. Now you can enjoy this huge, over 100-hour long, open-world adventure along with both its story-driven expansions worth an extra 50 hours of gameplay. This edition includes all additional content - new weapons, armor, companion outfits, new game mode and side quests. Features: Play as a Highly Trained Monster Slayer for Hire Trained from early childhood and mutated to have superhuman skills, strength, and reflexes, witchers are a socially ostracized counterbalance to the monster-infested world in which they live. - Gruesomely destroy foes as a professional monster hunter armed with a range of upgradeable weapons, mutating potions, and combat magic. - Hunt down a wide variety of exotic monsters, from savage beasts prowling mountain passes to cunning supernatural predators lurking in the shadowy back alleys of densely populated cities. - Invest your rewards to upgrade your weaponry and buy custom armor, or spend them on horse races, card games, fist fighting and other pleasures life brings. Track Down the Child of Prophecy in a Morally Ambiguous Fantasy Open World - Built for endless adventure, the massive open world of The Witcher sets new standards in terms of size, depth and complexity. - Traverse a fantastical open world: explore forgotten ruins, caves and shipwrecks, trade with merchants and dwarven smiths in cities, and hunt across open plains, amidst mountains and at sea. - In a time of war, track down the child of prophecy, a living weapon of great power whose coming was foretold in ancient elven legends. Make choices that go beyond good and evil and face their far-reaching consequences. Game of the Year Edition The Witcher 3: Wild Hunt Game of the Year Edition brings together the base game and all the additional content released to date. - Includes the Hearts of Stone and Blood & Wine expansions, which offer a massive 50 hours of additional storytelling as well as new features and new areas that expand the explorable world by over a third! - Affords access to all additional content released so far, including weapons, armor, side quests, game modes and new GWENT cards! - Features all technical and visual updates as well as a new user interface completely redesigned on the basis of feedback from members of the Witcher Community.', '655d14b02d3b3.png', '2016-08-30', 'CD Projekt RED', 3, 4.9, '655d14b02d3b8.png', 6),
(36, 'Fortnite', 0.00, 1, 23, 'Fortnite é um videogame online desenvolvido pela Epic Games e lançado em 2017. Ele está disponível em três versões distintas de modo de jogo que compartilham a mesma jogabilidade geral e mecanismo de jogo: Fortnite: Save the World, um jogo cooperativo de tiro e sobrevivência para até quatro jogadores para lutar contra criaturas parecidas com zumbis e defender objetos com fortificações que possam construir; Fortnite Battle Royale, um jogo Battle Royale gratuito em que até 100 jogadores lutam para ser a última pessoa sobrevivente; e Fortnite Creative, em que os jogadores têm total liberdade para criar mundos e arenas de batalha. Save the World e Battle Royale foram lançados em 2017 como títulos de acesso antecipado, enquanto Creative foi lançado em 6 de dezembro de 2018. [. . . ] Fortnite Battle Royale é um jogo jogador contra jogador para até 100 jogadores, permitindo que se jogue sozinho, em dupla ou em esquadrão (geralmente composto por três ou quatro jogadores). Jogadores desarmados são lançados de um \"ônibus de batalha\" que cruza o mapa do jogo. Ao pousar, eles devem procurar armas, itens, recursos e até veículos enquanto tentam permanecer vivos e atacar e eliminar outros jogadores. Ao longo de uma rodada, a área segura do mapa diminui de tamanho devido à chegada de uma tempestade tóxica; jogadores fora desse limite sofrem danos e podem ser eliminados se não conseguirem evacuar rapidamente. Isso força os jogadores restantes a espaços mais apertados e incentiva os encontros entre os jogadores. O último jogador, dupla ou esquadrão restante é o vencedor. Fortnite: Save the World é um jogo cooperativo jogador versus ambiente, com quatro jogadores colaborando para um objetivo comum em várias missões. O jogo se passa depois que uma tempestade aparece em toda a Terra, fazendo com que 98% da população desapareça e os sobreviventes sejam atacados por \"cascas\" semelhantes a zumbis. Os jogadores assumem o papel de comandantes de abrigos, coletando recursos, salvando sobreviventes e defendendo equipamentos que ajudam a coletar dados sobre a tempestade ou a rechaçá-la. Nas missões, os jogadores recebem uma série de itens do jogo, que incluem personagens heróis, esquemas de armas e armadilhas e sobreviventes, todos os quais podem ser aumentados através da experiência adquirida para melhorar seus atributos. Fortnite Creative é um modo de jogo sandbox, semelhante ao Minecraft, pois os jogadores têm total liberdade para gerar tudo o que está dentro do jogo em uma ilha e podem criar jogos como arenas de batalha, pistas de corrida, desafios de plataforma e muito mais.', '655fa72e1e2b5.png', '2017-07-25', 'Epic Games', 0, 3.0, '655fa72e1e2b8.png', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnoticias`
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
-- Extraindo dados da tabela `tbnoticias`
--

INSERT INTO `tbnoticias` (`idNoticia`, `tituloNoticia`, `textoNoticia`, `dataLancNoticia`, `dataModfcNoticia`, `capaNoticia`) VALUES
(1, 'Pokemon GO', 'Jogadores se reúnem anos após o lançamento e amizade vira grande motor de jogo\r\nPokemon GO\r\nComunidade de jogadores do Ceará foi considerada mais engajada do Brasil em agosto pela empresa desenvolvedora do jogo.', '2023-11-17 21:39:09', '2023-11-17 22:55:02', '6558197698072.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbplataforma`
--

CREATE TABLE `tbplataforma` (
  `idPlataforma` int(11) NOT NULL,
  `nomePlataforma` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbplataforma`
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
-- Estrutura da tabela `tbtrailer`
--

CREATE TABLE `tbtrailer` (
  `idTrailer` int(11) NOT NULL,
  `tituloTrailer` varchar(50) NOT NULL,
  `linkTrailer` varchar(255) NOT NULL,
  `dataTrailer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
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
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `nickUser`, `emailUser`, `senhaUser`, `dataNascUser`, `sobrenomeUser`, `cpfUser`) VALUES
(1, 'Matheus', 'Vuall_Platium', 'mh15122006@gmail.com', '1234rewqa', '2006-12-15', 'Henrique', '111.111.111-11'),
(2, 'Felaipe', 'fefeh_02', 'fefefzinho@hotmail.com.br', '14dontyodnaodjhr', '1970-01-01', 'Felaix', '154.789.620-31');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbbackground`
--
ALTER TABLE `tbbackground`
  ADD PRIMARY KEY (`idBackgroud`);

--
-- Índices para tabela `tbclassificacao`
--
ALTER TABLE `tbclassificacao`
  ADD PRIMARY KEY (`idClassificacao`);

--
-- Índices para tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD PRIMARY KEY (`idComentario`);

--
-- Índices para tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Índices para tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  ADD PRIMARY KEY (`idJogo`),
  ADD KEY `generoJogo` (`generoPrincipalJogo`),
  ADD KEY `plataformaJogo` (`plataformaJogo`),
  ADD KEY `capaJogo` (`capaJogo`);

--
-- Índices para tabela `tbnoticias`
--
ALTER TABLE `tbnoticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Índices para tabela `tbplataforma`
--
ALTER TABLE `tbplataforma`
  ADD PRIMARY KEY (`idPlataforma`);

--
-- Índices para tabela `tbtrailer`
--
ALTER TABLE `tbtrailer`
  ADD PRIMARY KEY (`idTrailer`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbbackground`
--
ALTER TABLE `tbbackground`
  MODIFY `idBackgroud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbclassificacao`
--
ALTER TABLE `tbclassificacao`
  MODIFY `idClassificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  MODIFY `idJogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
