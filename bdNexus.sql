-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2023 às 02:39
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
(3, 36, '655fa72e2e251.jpg'),
(4, 37, '6560d7f06dacf.jpg'),
(5, 37, '6560d7f06f96d.jpg'),
(6, 37, '6560d7f071085.jpg'),
(7, 4, '6560dfb042361.png'),
(8, 3, '6560e4c1051e9.jpg'),
(9, 3, '6560e4c106c26.jpg'),
(10, 3, '6560e4c107d8c.jpg'),
(11, 2, '6560e54fbd5f9.jpg'),
(12, 5, '6560e5c81625f.png'),
(13, 5, '6560e5c8178cc.png'),
(14, 5, '6560e5c81ecf4.jpg'),
(15, 7, '6560e66eafee1.png'),
(16, 7, '6560e66eb2eea.jpg'),
(17, 8, '6560e6bf6074d.jpg'),
(18, 8, '6560e6bf62163.jpg'),
(19, 8, '6560e6bf632ca.jpg'),
(20, 13, '6560e754053d6.png'),
(21, 13, '6560e7540671b.jpg'),
(22, 13, '6560e75407a4b.jpg'),
(23, 38, '65613c396faa0.jpg'),
(24, 38, '65613c3975685.jpeg'),
(25, 39, '6564d53845213.jpg'),
(26, 39, '6564d5384c1b9.jpg'),
(27, 40, '6572507e358df.jpg'),
(28, 41, '657251fe91402.jpg'),
(29, 41, '657251fe92321.jpg'),
(30, 41, '657251fe936c6.jpg'),
(31, 42, '6572536aa5ce9.jpg'),
(32, 43, '65725553c50fd.jpg'),
(33, 43, '65725553c5f99.jpg'),
(34, 43, '65725553c6e6f.jpg'),
(35, 44, '657256cfcfe9b.jpg'),
(36, 44, '657256cfd1b2c.jpg'),
(37, 44, '657256cfd28e8.jpg'),
(38, 45, '65725877746c4.jpg'),
(39, 46, '65725977e7392.jpg'),
(40, 46, '65725977e8308.jpg'),
(41, 46, '65725977ef564.jpg'),
(42, 47, '65725acc8786a.jpg'),
(43, 47, '65725acc88767.jpg'),
(44, 47, '65725acc89e2c.jpg'),
(45, 48, '65725bfd9e92e.jpg'),
(46, 48, '65725bfd9fdfe.jpg'),
(47, 48, '65725bfda0fb4.jpg'),
(48, 49, '65725dcc4cb07.jpg'),
(49, 50, '65725e8c11cf7.jpg'),
(50, 50, '65725e8c12e85.png'),
(51, 50, '65725e8c1410c.jpg'),
(52, 51, '657264bbab9af.png'),
(53, 52, '657265eb2471d.jpg'),
(54, 52, '657265eb25828.jpg'),
(55, 52, '657265eb27352.jpg'),
(56, 53, '65726777a87fd.jpg'),
(57, 54, '65726931067b0.jpg'),
(58, 54, '657269310925b.jpg'),
(59, 54, '657269310a87b.jpg'),
(60, 55, '65726a892f5bc.png'),
(61, 55, '65726a8930883.jpg'),
(62, 55, '65726a8936f49.jpg'),
(63, 56, '65726c188033a.jpg'),
(64, 57, '65726db002f0b.jpg'),
(65, 57, '65726db004049.jpg'),
(66, 57, '65726db006134.jpg');

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
(6, 1, 36, 'Jogo lixo!!!', 1, '2023-11-23 17:18:53'),
(7, 1, 2, 'Adoro anões!!!!', 5, '2023-11-24 15:15:59');

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
('Shooter', 20),
('', 21);

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
  `logoJogo` varchar(88) NOT NULL,
  `classificacaoJogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbjogo`
--

INSERT INTO `tbjogo` (`idJogo`, `nomeJogo`, `precoJogo`, `generoPrincipalJogo`, `plataformaJogo`, `descJogo`, `capaJogo`, `dataLancamentoJogo`, `desenvolvedoraJogo`, `subgeneroJogo`, `logoJogo`, `classificacaoJogo`) VALUES
(2, 'The Lord of the Rings™: Return to Moria', 107.99, 1, 23, 'The Lord of the Rings: Return to Moria segue os Anões enquanto embarcam em uma nova aventura para recuperar Moria, a lendária casa sob as Montanhas da Névoa. Os jogadores unirão as forças para sobreviver, fabricar, construir e explorar as icônicas minas em expansão. Os aventureiros valentes precisarão ser vigilantes, pois diversos mistérios perigosos os aguardam.\r\nRecupere Moria, a terra natal dos anões\r\nConvocados para as Montanhas da Névoa pelo Lorde Gimli Lockbearer (Portador da Mecha), os jogadores assumem o controle de uma sociedade de Anões encarregada de recuperar os espólios perdidos nas profundezas da terra natal dos Anões de Moria — conhecida como Khazad-dûm ou Dwarrowdelf. A busca exigirá coragem, indo fundo nas Minas de Moria para recuperar as riquezas.\r\nSituado em um reino de Moria gerado de forma procedural, duas aventuras nunca serão iguais. Cada expedição pode ser feita a sós ou on-line com amigos. Os jogadores poderão extrair para criar equipamentos melhores e recursos, mas cuidado com a mineração: ela faz barulho, o que pode atrair perigos. Onde tem barulho, tem combate. Escave os mistérios dos três picos lendários, extraia metais preciosos e combata forças indescritíveis para aprender o segredo da Sombra que se espreita por dentro.\r\nCaracterísticas principais do jogo:\r\n- Sinta a Sociedade: vivencie a Sociedade dos Anões como nunca, com a rica tradição do icônico mundo da fantasia de J.R.R. Tolkien entrelaçado na própria estrutura de The Lord of the Rings: Return to Moria.\r\n- Sobreviva à escuridão: para sobreviver às traiçoeiras Minas de Moria, os jogadores devem poupar recursos, caçar e reunir-se para se alimentar, além de administrar o sono, a temperatura e os níveis de ruído. Devem utilizar sistemas de luz dinâmicos para segurança e para abrir um caminho ainda mais para a escuridão. Precisam combater males indescritíveis e sobreviver a hordas de monstruosos Orcs em combates sangrentos, enquanto desvendam o segredo da Sombra que espreita dentro da montanha.\r\n- Construção de base: encontre conforto da escuridão. Revele e desobstrua novos locais para criar uma arquitetura em grande escala. Use a criatividade e construa bases a partir do zero ou desenvolva sobre o ambiente existente. Cuidado com os males que procuram destruir o progresso dos Anões.\r\n- Restaure e reconfigure Moria: devolva a antiga glória ao reino há muito perdido de Khazad-dûm ao recuperar os marcos dos Anões conforme a história avança. Revitalize as antigas minas e retome o fogo de suas forjas para extrair seus recursos intocados.\r\n- Explore: vá até as profundezas das Minas de Moria. Os ambientes gerados de maneira procedural são abundantes em recursos e cheios de mistério e perigo, o que proporciona uma experiência única a cada vez.\r\n- Multijogador cooperativo: aventure-se sozinho ou com amigos no modo cooperativo multijogador on-line com até oito jogadores.\r\n- Fabrique ferramentas de anões, armas e mais: crie e saqueie armaduras, ferramentas, armas e estruturas anãs lendárias. Restaure antigas forjas para fortalecer, consertar e encantar equipamentos. Aprimore e desbloqueie novas tecnologias e máquinas fantásticas.\r\n- Descubra artefatos mágicos: descubra itens mágicos antigos, incluindo espadas que brilham quando há Orcs por perto, mapas de depósitos de Mithril, livros com esquemas de fabricação esquecidos e amuletos que dão força ou sabedoria.\r\n- Extraia minérios e pedras preciosas: estabeleça minas para explorar depósitos de recursos preciosos como ferro, ouro e quartzo; e materiais fantásticos, como o Mithril. Acesse estações de fabricação e forjas para converter minério em lingotes e aprimorar equipamentos. Mas prepare-se, a mineração é barulhenta e pode despertar o que se esconde na escuridão.\r\n- Construtor de Anão abrangente: os jogadores tornam-se parte da Lenda dos Anões ao criar seu próprio Anão no criador de personagens personalizado. Os Anões podem ser personalizados de várias maneiras para criar uma identidade única. Durante o jogo, os jogadores podem encontrar e fabricar armaduras e armas para aperfeiçoar ainda mais seu estilo único.\r\nⒸ 2022 Free Range Games. All rights reserved. Free Range Games and the Free Range Games logo are trademarks or service marks of Free Range Games.\r\nⒸ 2022 North Beach Games and associated logos and names are trademarks of Open Door Entertainment, LLC. All rights reserved.', '655cfa16290c8.jpg', '2023-10-24', 'Free Range Games', 2, '655be940f13ad.png', 3),
(3, 'The Last of Us: Part I', 249.99, 1, 23, 'Sobreviva a um apocalipse na Terra em The Last of Us, um título exclusivo para PlayStation 3 da Naughty Dog. Aqui você encontrará cidades abandonadas recuperadas pela natureza. Aqui está uma população dizimada por uma praga moderna. Aqui, há apenas sobreviventes matando uns aos outros por comida, armas ou qualquer coisa que possam encontrar. Aqui você não encontra esperança. Joel, um sobrevivente brutal, e Ellie, uma adolescente corajosa e sábia para a idade, devem trabalhar juntos se quiserem sobreviver à sua jornada pelos EUA.\r\n', '655cfa2a26b79.png', '2023-03-28', 'Naughty Dog', 2, '655beb6f6f6fa.png', 6),
(4, 'Honkai: Star Rail', 0.00, 1, 23, '3, 2, 1... iniciando Salto Hiperespacial! Uma Estação Espacial com Curios seladas, um planeta alienígena com um inverno eterno, uma nave estelar caçando abominações... Cada parada do Expresso Astral é uma visão única da galáxia! Explore mundos e civilizações bizarras, descubra mistérios além da imaginação e embarque em uma jornada incrível!\r\n□ Uma Experiência de RPG Fascinante – Uma aventura imersiva e incomparável além das estrelas\r\nEmbarque em uma aventura galáctica onde você molda sua própria história. Com tecnologia de ponta que renderiza cinemáticas de alta qualidade em tempo real, nosso inovador sistema de expressão facial transmite emoções autênticas, tudo aprimorado pela trilha sonora original da HOYO-MiX que define o cenário. Junte-se a nós agora e viaje por um universo conflitante e cooperativo, onde suas escolhas definirão o desfecho da história!\r\n□ Companheiros Maravilhosos – Embarque em uma exploração com novos amigos\r\nNeste oceano de estrelas, existem infinitos encontros e aventuras para viver. Prepare as passagens dos seus acompanhantes e embarquem juntos nesta maravilhosa jornada! Uma excêntrica e corajosa jovem com amnésia, um Guarda Crinalva nobre e de boa índole, um preguiçoso general dos Cavaleiros das Nuvens e até mesmo uma bela e misteriosa dama... Juntem-se para enfrentar a crise causada pelo Stellaron e construir seu passado, presente e futuro.\r\n□ Combates Táticos e Inovadores – Aproveite os pontos fracos e lute ao máximo\r\nPrepare-se para batalhas emocionantes e rápidas! Use um sistema de combate simples e estratégico totalmente novo, utilize Técnicas e elimine seus inimigos com diferentes Quebras de Fraqueza e, em seguida, termine a luta de maneira espetacular com uma Perícia Suprema. Nos labirintos gerados aleatoriamente do Universo Simulado, Eventos Aleatórios surpresa e cerca de 100 Bênçãos e Curios diferentes concederão a você um aumento incrível nas habilidades de seus personagens, permitindo que você desafie ambientes de combate ainda mais imprevisíveis.\r\n□ Dubladores Talentosos para uma Experiência Imersiva – Uma dublagem incrível disponível em vários idiomas\r\nQuando as palavras ganham vida, as histórias dão espaço para escolhas e os personagens possuem uma alma... Apresentamos a você dezenas de emoções, centenas de expressões faciais, milhares de conteúdo de histórias e um milhão de palavras que compõem o coração pulsante deste universo. Dublado em quatro idiomas, os personagens transcenderão suas existências virtuais e se tornarão seus companheiros reais, criando um capítulo novo nesta história com você.', '655cfa3337131.jfif', '2023-04-25', 'miHoYo', 3, '655bec39df7fe.png', 3),
(5, 'God of War', 50.00, 1, 2, 'Este jogo de ação/aventura/combate faz uso poderoso do mundo sombrio e imaginativo da mitologia da Grécia Antiga, onde os reinos do mortal e do divino colidem em uma atmosfera generalizada de força bruta e violência. Jogando como Kratos, ao longo do jogo os jogadores empunharão lâminas duplas presas ao seu corpo por longas correntes, armas que simbolizam este mundo cruel ao qual ele está preso e o destino do qual procura escapar. Apresentando uma hora de sequências cinematográficas e um sistema de combate profundo que incorpora ações sensíveis ao contexto e uma extensa gama de combos, GOD OF WAR leva os jogadores através de vários ambientes que os farão lutar contra inimigos ferozes, balançar em cordas, escalar penhascos de montanhas, nadar em rios. e deslizando pelas tirolesas. O resultado é uma aventura única e emocionante pela mitologia grega.', '655cfa3eb0fb1.jpg', '2005-05-22', 'SCE Santa Mônica', 2, '655bed07c7600.png', 6),
(7, 'The Legend of Zelda: Majora\'s Mask', 15.00, 1, 10, 'A nova aventura épica de Link o leva ao mundo místico de Termina, onde relógios sempre presentes contam as horas até que uma lua ameaçadora caia do céu. Quando seu cavalo e Ocarina são roubados por uma figura estranha e mascarada, Link embarca em uma missão urgente para resolver o mistério da lua, salvar o mundo da destruição e encontrar o caminho de volta à pacífica terra de Hyrule! * Link se transforma diante de seus olhos – Mais de 20 máscaras mágicas dão a Link poderes e habilidades que ele nunca teve antes! Veja-o se transformar em uma infeliz criança Deku, um poderoso herói Goron e um lendário guitarrista Zora. * Corrida contra o tempo - Personagens e eventos fluem com as horas do dia. Defina seu próprio horário e até altere o próprio tempo em uma corrida para parar a lua e salvar o mundo! * Ambientes panorâmicos! Batalhas de ação poderosas! Personagens e eventos totalmente interativos! Experimente lindas paisagens renderizadas, enxames de inimigos atacantes e um mundo profundo e envolvente de maravilhas com o poder do N64 Expansion Pak.', '655bf636b3b86.png', '2000-04-27', 'Nintendo EAD', 2, '655bf0399dd67.png', 1),
(8, 'The Binding of Isaac: Repentance', 68.00, 1, 23, 'Experimente o clássico moderno, The Binding of Isaac, como você nunca viu antes. É um jogo grande demais para ser chamado de sequência: Repentance leva Isaac a novos patamares de aventura em masmorras roguelike, enquanto o garoto corajoso desce ao porão para seu maior desafio até agora! A nova missão de Isaac leva-o a lugares desconhecidos onde ele nunca esteve, repletos de novos inimigos e chefes horríveis, combinações de armas com as quais você nunca sinergizou antes e itens que ele nunca viu... terrores profanos de seus sonhos mais loucos e piores pesadelos!', '655cfa578809e.jpg', '2021-03-31', 'Edmundo McMillen, Nicalis', 20, '655bf1f256cdc.png', 4),
(13, 'The Witcher III: Wild Hunt: Game of the Year Edition', 150.00, 1, 23, 'Play the most polished and complete version of the most awarded game of 2015 - The Witcher 3: Wild Hunt – Game of the Year Edition. Now available with all expansions and additional content. Become a professional monster slayer and embark on an adventure of epic proportions! Upon its release, The Witcher 3: Wild Hunt became an instant classic, claiming over 250 Game of the Year awards. Now you can enjoy this huge, over 100-hour long, open-world adventure along with both its story-driven expansions worth an extra 50 hours of gameplay. This edition includes all additional content - new weapons, armor, companion outfits, new game mode and side quests. Features: Play as a Highly Trained Monster Slayer for Hire Trained from early childhood and mutated to have superhuman skills, strength, and reflexes, witchers are a socially ostracized counterbalance to the monster-infested world in which they live. - Gruesomely destroy foes as a professional monster hunter armed with a range of upgradeable weapons, mutating potions, and combat magic. - Hunt down a wide variety of exotic monsters, from savage beasts prowling mountain passes to cunning supernatural predators lurking in the shadowy back alleys of densely populated cities. - Invest your rewards to upgrade your weaponry and buy custom armor, or spend them on horse races, card games, fist fighting and other pleasures life brings. Track Down the Child of Prophecy in a Morally Ambiguous Fantasy Open World - Built for endless adventure, the massive open world of The Witcher sets new standards in terms of size, depth and complexity. - Traverse a fantastical open world: explore forgotten ruins, caves and shipwrecks, trade with merchants and dwarven smiths in cities, and hunt across open plains, amidst mountains and at sea. - In a time of war, track down the child of prophecy, a living weapon of great power whose coming was foretold in ancient elven legends. Make choices that go beyond good and evil and face their far-reaching consequences. Game of the Year Edition The Witcher 3: Wild Hunt Game of the Year Edition brings together the base game and all the additional content released to date. - Includes the Hearts of Stone and Blood & Wine expansions, which offer a massive 50 hours of additional storytelling as well as new features and new areas that expand the explorable world by over a third! - Affords access to all additional content released so far, including weapons, armor, side quests, game modes and new GWENT cards! - Features all technical and visual updates as well as a new user interface completely redesigned on the basis of feedback from members of the Witcher Community.', '655d14b02d3b3.png', '2016-08-30', 'CD Projekt RED', 3, '655d14b02d3b8.png', 6),
(36, 'Fortnite', 0.00, 1, 23, 'Fortnite é um videogame online desenvolvido pela Epic Games e lançado em 2017. Ele está disponível em três versões distintas de modo de jogo que compartilham a mesma jogabilidade geral e mecanismo de jogo: Fortnite: Save the World, um jogo cooperativo de tiro e sobrevivência para até quatro jogadores para lutar contra criaturas parecidas com zumbis e defender objetos com fortificações que possam construir; Fortnite Battle Royale, um jogo Battle Royale gratuito em que até 100 jogadores lutam para ser a última pessoa sobrevivente; e Fortnite Creative, em que os jogadores têm total liberdade para criar mundos e arenas de batalha. Save the World e Battle Royale foram lançados em 2017 como títulos de acesso antecipado, enquanto Creative foi lançado em 6 de dezembro de 2018. [. . . ] Fortnite Battle Royale é um jogo jogador contra jogador para até 100 jogadores, permitindo que se jogue sozinho, em dupla ou em esquadrão (geralmente composto por três ou quatro jogadores). Jogadores desarmados são lançados de um \\\"ônibus de batalha\\\" que cruza o mapa do jogo. Ao pousar, eles devem procurar armas, itens, recursos e até veículos enquanto tentam permanecer vivos e atacar e eliminar outros jogadores. Ao longo de uma rodada, a área segura do mapa diminui de tamanho devido à chegada de uma tempestade tóxica; jogadores fora desse limite sofrem danos e podem ser eliminados se não conseguirem evacuar rapidamente. Isso força os jogadores restantes a espaços mais apertados e incentiva os encontros entre os jogadores. O último jogador, dupla ou esquadrão restante é o vencedor. Fortnite: Save the World é um jogo cooperativo jogador versus ambiente, com quatro jogadores colaborando para um objetivo comum em várias missões. O jogo se passa depois que uma tempestade aparece em toda a Terra, fazendo com que 98% da população desapareça e os sobreviventes sejam atacados por \\\"cascas\\\" semelhantes a zumbis. Os jogadores assumem o papel de comandantes de abrigos, coletando recursos, salvando sobreviventes e defendendo equipamentos que ajudam a coletar dados sobre a tempestade ou a rechaçá-la. Nas missões, os jogadores recebem uma série de itens do jogo, que incluem personagens heróis, esquemas de armas e armadilhas e sobreviventes, todos os quais podem ser aumentados através da experiência adquirida para melhorar seus atributos. Fortnite Creative é um modo de jogo sandbox, semelhante ao Minecraft, pois os jogadores têm total liberdade para gerar tudo o que está dentro do jogo em uma ilha e podem criar jogos como arenas de batalha, pistas de corrida, desafios de plataforma e muito mais.', '655fa72e1e2b5.png', '2017-07-25', 'Epic Games', 14, '655fa72e1e2b8.png', 3),
(37, 'The Elder Scrolls V: Skyrim: Special Edition', 0.00, 1, 23, 'Vencedor de mais de 200 prêmios de Jogo do Ano, Skyrim Special Edition dá vida à fantasia épica com detalhes impressionantes. A edição especial inclui o jogo aclamado pela crítica e complementos com recursos totalmente novos, como arte e efeitos remasterizados, raios divinos volumétricos, profundidade de campo dinâmica, reflexos no espaço da tela e muito mais.', '6560d7f06b448.png', '2016-10-27', 'Bethesda Game Studios', 3, '6560d7f06b44c.png', 6),
(38, 'The legend of Zelda: Ocarina of Time', 7.99, 1, 10, 'Ganondorf, o malvado Rei dos Ladrões, está em movimento, ameaçando a pacífica terra de Hyrule. Ele está determinado a roubar seu caminho para o lendário Reino Sagrado na esperança de aproveitar o poder da mítica Triforce. Como o jovem herói Link, é seu destino frustrar os esquemas malignos de Ganondorf. Navi, sua fada guardiã, irá guiá-lo enquanto você se aventura pelas muitas regiões de Hyrule, desde as cavernas vulcânicas da Montanha da Morte até as águas traiçoeiras do Domínio de Zora. Antes de completar esta missão épica, você mergulhará em masmorras mortais, coletará armas de grande poder e aprenderá os feitiços necessários para conquistar a força mais irresistível de todos os tempos. * O enredo imersivo e os ambientes atraem os jogadores para um incrível mundo 3D. * Viagem no tempo permite que você jogue como Link em diferentes fases de sua vida. * Novos recursos de jogabilidade incluem um sistema de segmentação exclusivo e perspectivas de 1ª e 3ª pessoa. * Até três jogos podem ser salvos simultaneamente na memória!\r\n', '65613cb4658b6.jpg', '1998-11-21', 'Nintendo EAD', 2, '65613c396e843.png', 1),
(39, 'Minecraft', 50.00, 1, 23, 'Uma versão do Minecraft: Pocket Edition que está disponível (gratuitamente) para todos os usuários existentes do Windows 10 que já possuem uma cópia do Minecraft padrão e também disponível para compra exclusivamente na Windows 10 App Store. Atualmente em Beta. Minecraft é um jogo sobre colocar blocos e embarcar em aventuras. Explore mundos gerados aleatoriamente e construa coisas incríveis, desde as casas mais simples até os castelos mais grandiosos. Jogue no Modo Criativo com recursos ilimitados ou explore profundamente no Modo Sobrevivência, criando armas e armaduras para afastar multidões perigosas. Faça tudo isso sozinho ou com amigos.', '6564d538440bb.jpg', '2009-11-18', 'Mojang', 14, '6564d538440bd.png', 2),
(41, 'Edel Ring', 200.00, 1, 23, 'O NOVO RPG DE AÇÃO DE FANTASIA. Levante-se, Manchado, e seja guiado pela graça para brandir o poder do Elden Ring e se tornar um Elden Lord nas Terras do Meio.', '657251fe8fd66.jpg', '2022-02-24', 'Bandai Namco Entertainment', 3, '657251fe8fd74.png', 6),
(42, 'NBA 2K21', 124.00, 6, 22, 'NBA 2K21 é um videogame de simulação de basquete desenvolvido pela Visual Concepts e publicado pela 2K Sports, com base na National Basketball Association (NBA). É a 22ª edição da franquia NBA 2K e a sucessora do NBA 2K20. O jogo foi lançado em 4 de setembro de 2020 para Microsoft Windows, Nintendo Switch, PlayStation 4, Xbox One, Stadia e posteriormente será lançado para PlayStation 5 e Xbox Series X e Series S.[2][3] O PS4, Switch, Xbox One e PC foram lançados com críticas mistas ou médias, com críticos criticando a falta de originalidade na jogabilidade, bem como microtransações e bugs, embora a simulação, o visual e os valores de produção tenham sido elogiados.', '6572536aa433d.jpg', '2020-11-03', 'Visual Concepts', 21, '6572536aa4341.png', 1),
(43, 'Diablo III', 89.00, 2, 23, 'O jogo se passa em Sanctuary, o mundo sombrio de fantasia da série Diablo. Este mundo foi salvo vinte anos antes por um punhado de heróis anônimos em Diablo II, tendo sobrevivido ao ataque trazido pelos exércitos do Inferno Ardente, que enlouqueceram com suas provações. Cabe a uma nova geração de heróis enfrentar as forças do mal que ameaçam o mundo de Sanctuary. Os jogadores terão a oportunidade de explorar ambientes familiares como Tristram. Os únicos NPCs confirmados são Deckard Cain, que apareceu nos dois jogos anteriores, e sua sobrinha, Leah, uma nova personagem que acompanha o herói em missões de tempos em tempos. A trama girará em torno de dois Lesser Evils sobreviventes, Azmodan e Belial, e um artefato conhecido como Black Soulstone. O mapa mundial de Diablo é composto principalmente por dois continentes principais com várias pequenas ilhas na região Noroeste. O mundo de Sanctuary mudou drasticamente com a destruição da Pedra do Mundo em Diablo II: Lord of Destruction.', '65725553c3a9b.jpg', '2012-05-15', 'Blizzard Entertainment', 3, '65725553c3aa3.png', 5),
(44, 'Monster Hunter Rise', 150.00, 1, 14, 'Experimente a ação single-player e multiplayer de Monster Hunter Rise e sua enorme expansão Monster Hunter Rise: Sunbreak nesta demo. Experimente os novos recursos do Sunbreak ao enfrentar Great Izuchi, Tetranadon, Astalos e Malzeno!', '657256cfced25.jpg', '2022-01-12', 'Capcom', 3, '657256cfced2a.png', 3),
(45, 'The Outlast Trials', 120.00, 10, 5, 'The Outlast Trials é um videogame de sobrevivência de terror psicológico em primeira pessoa desenvolvido e publicado pela Red Barrels. É o terceiro capítulo da série Outlast, servindo como uma prequela dos dois primeiros jogos e apresenta cobaias em um misterioso experimento da Guerra Fria. O jogo foi lançado em 18 de maio de 2023 via acesso antecipado para Microsoft Windows. Embora o jogo suporte multijogador cooperativo para quatro jogadores, os jogadores podem completar o jogo sozinhos. O jogador deve completar um conjunto de tarefas enquanto evita inimigos monstruosos. O jogo apresenta quatro classes de personagens e árvores de habilidades distintas. Cada classe possui uma habilidade única, permitindo aos jogadores realizar ações como ver através de paredes, curar outros jogadores, colocar minas e lançar um dispositivo para atordoar temporariamente os inimigos. O jogador tem acesso a um par de óculos de visão noturna, permitindo navegar em áreas mal iluminadas. Ele precisa ser recarregado regularmente com uma bateria escassa. Os jogadores podem pegar vários objetos úteis, como drogas antipsicóticas, gazuas e itens de cura, mas só podem carregar três itens de uma vez. O jogador não pode lutar diretamente contra os inimigos, e a furtividade é a forma preferida de progredir no jogo. Outlast 3 foi anunciado em dezembro de 2017, embora nenhum prazo ou plataforma alvo tenha sido confirmado. Durante este anúncio, Red Barrels disse que, como não foi possível adicionar facilmente conteúdo para download para Outlast 2 devido à sua estrutura, eles têm um projeto menor separado relacionado a Outlast que será lançado antes de Outlast 3. Red Barrels também descreveu o jogo como uma \\\"TV Series\\\". A equipe de desenvolvimento do jogo contava com cerca de 40 pessoas. The Outlast Trials foi lançado em outubro de 2019 e não é uma sequência direta de Outlast 2. Trata-se de cobaias para a Murkoff Corporation em um misterioso experimento da Guerra Fria que se passa no mesmo universo dos jogos anteriores. O cofundador do Red Barrels, David Chateauneuf, disse que \\\"a prova de conceito agora está completa e a equipe do jogo está agora em modo de desenvolvimento\\\". Em 4 de dezembro de 2019, a Red Barrels lançou uma imagem teaser do jogo. Em 13 de junho de 2020, um teaser trailer foi lançado, anunciando um lançamento para 2021. No entanto, foi anunciado em agosto de 2021 que o jogo foi adiado para 2022 devido à pandemia de COVID-19. Para ajudar a passar o tempo, o Red Barrels lançou uma série de vídeos “Behind The Scenes” em seu canal oficial no YouTube. Uma versão beta fechada do jogo esteve disponível de 28 de outubro a 1º de novembro de 2022. Embora o jogo tenha sido confirmado apenas para Microsoft Windows, o jogo também seria lançado para plataformas PlayStation não reveladas \\\"no futuro\\\". Apesar de atrasar o jogo para 2022, Red Barrels ainda não anunciou uma data de lançamento para a versão completa em 2023; mas em 10 de março de 2023 foi anunciado que o jogo seria lançado em acesso antecipado em 18 de maio.', '65725877733c2.jpg', '2023-05-18', 'Red Barrels', 21, '65725877733c6.png', 5),
(46, 'Resident Evil 4 (2023)', 225.00, 1, 23, 'A sobrevivência é apenas o início. Com jogabilidade melhorada, uma história reimaginada e grafismos detalhados, Resident Evil 4 é o renascer de um clássico. Volta a viver o pesadelo que revolucionou os jogos de terror e sobrevivência.', '65725977e5d2f.jpg', '2023-03-23', 'Capcom', 10, '65725977e5d5e.png', 6),
(47, 'Alan Wake 2', 225.00, 2, 1, 'Saga Anderson chega para investigar assassinatos ritualísticos em uma pequena cidade. Alan Wake escreve uma história sombria para moldar a realidade ao seu redor. Esses dois heróis estão de alguma forma conectados. Eles podem se tornar os heróis que precisam ser? Uma série de assassinatos ritualísticos ameaça Bright Falls, uma pequena comunidade cercada pela natureza selvagem do Noroeste do Pacífico. Saga Anderson, uma talentosa agente do FBI com reputação de resolver casos impossíveis, chega para investigar os assassinatos. O caso de Anderson se transforma em um pesadelo quando ela descobre páginas de uma história de terror que começa a se tornar realidade ao seu redor. Alan Wake, um escritor perdido preso em um pesadelo além do nosso mundo, escreve uma história sombria na tentativa de moldar a realidade ao seu redor e escapar de sua prisão. Com um terror sombrio o perseguindo, Wake está tentando manter sua sanidade e vencer o diabo em seu próprio jogo. Anderson e Wake são dois heróis em duas jornadas desesperadas em duas realidades distintas, conectados no coração de maneiras que nenhum deles consegue entender: refletindo um ao outro, ecoando um ao outro e afetando os mundos ao seu redor. Alimentada pela história de terror, a escuridão sobrenatural invade Bright Falls, corrompendo os habitantes locais e ameaçando os entes queridos de Anderson e Wake. A luz é a sua arma – e o seu porto seguro – contra a escuridão que enfrentam. Presos em uma sinistra história de terror onde só existem vítimas e monstros, eles conseguirão se tornar os heróis que precisam ser?', '65725acc86983.jpg', '2023-10-27', 'Remedy Entertainment', 10, '65725acc86988.png', 6),
(48, 'Pacify', 0.00, 10, 23, 'Há relatos de que há um mal dentro daquela casa. Algo sobre uma antiga funerária oferecendo uma última chance de conversar com seus entes queridos falecidos. Além de algo sobre luzes, risadas, uma garota, pessoas desaparecidas, etc... Você sabe as mesmas coisas que todo mundo afirma. Pegue uma equipe e confira o local.', '65725bfd9c553.jpg', '2019-02-22', 'Shawn Hitchcock', 4, '65725bfd9c55b.png', 5),
(49, 'Slender: The Arrival', 64.00, 10, 3, 'Você esta por sua conta. Ninguém para vir atrás de você. Ninguém para ajudá-lo. Ninguém para ouvir você gritar. Slender: The Arrival é a adaptação oficial para videogame de Slender Man.', '65725dcc4b56a.png', '2013-03-26', 'Blue Isle Studios', 21, '65725dcc4b570.png', 4),
(50, 'Dead by Daylight', 50.00, 1, 23, 'Dead by Daylight é um jogo de terror multijogador (4vs1) onde um jogador assume o papel do assassino selvagem e os outros quatro jogadores jogam como sobreviventes, tentando escapar do assassino e evitar serem capturados e mortos.', '65725e8c0fdde.jpg', '2016-06-14', 'Behaviour Interactive', 10, '65725e8c0fde3.png', 6),
(51, 'Wii Sports', 20.00, 6, 12, 'Isso é o que os videogames deveriam ser: diversão para todos. Wii Sports oferece cinco experiências desportivas distintas, cada uma utilizando o Comando Wii para proporcionar uma sensação natural, intuitiva e realista. Para jogar um jogo Wii Sports, tudo o que você precisa fazer é pegar um controle e se preparar para lançar, sacar ou fazer o gancho de direita. Se você já praticou algum desses esportes antes, está pronto para se divertir! Jogue tênis, beisebol, golfe, boliche e boxe no conforto da sua sala. Não há garotos correndo, não há óleo nos becos para sujar os jogadores e não há chuva para impedir que alguém passe um dia na quadra, no parque ou no campo. Use o Wii Remote para imitar as ações de balançar uma raquete, taco ou taco, rolar uma bola por um beco ou dar o golpe de esquerda. Os jogadores podem usar suas próprias caricaturas Mii no jogo e jogá-las contra os Miis de seus amigos para uma experiência mais personalizada. À medida que os jogadores melhoram, os níveis de habilidade dos seus Miis aumentam, para que possam ver exatamente o quanto se tornaram melhores. Pessoas de todos os níveis podem escolher e jogar qualquer um dos jogos do pacote Wii Sports sem precedentes, tornando este um título verdadeiramente para todos!', '657264bbaa759.jpg', '2006-11-19', 'Nintendo EAD', 21, '657264bbaa75d.png', 1),
(52, 'FIFA 22', 120.00, 6, 5, 'Powered by Football™, EA SPORTS™ FIFA 22 aproxima o jogo ainda mais da realidade com avanços fundamentais na jogabilidade e uma nova temporada de inovação em todos os modos.', '657265eb23247.jpg', '2021-10-01', 'Electronic Arts', 21, '657265eb2324e.png', 1),
(53, 'Gran Turismo 7: The Real Driving Simulator', 150.00, 5, 4, 'Experimente o simulador Real Driving completo… 25 anos em construção. Assuma o volante de mais de 400 carros desde o primeiro dia – com cada motor clássico e supercarro de última geração recriados com detalhes incomparáveis ​​– e navegue por mais de 90 rotas em condições climáticas dinâmicas. Com a reintrodução do lendário modo de simulação GT, você pode comprar, ajustar, correr e vender em uma campanha solo enquanto desbloqueia novos carros e desafios. E se você adora enfrentar os outros, aprimore suas habilidades e compita no modo GT Sport.', '657267779c6c4.png', '2022-03-04', 'Sony Interactive Entertainment', 6, '657267779c6ca.png', 1),
(54, 'DIRT 5', 299.90, 6, 5, 'DIRT 5 é uma experiência de corrida arcade off-road divertida e amplificada criada pela Codemasters. Abra caminho em rotas ao redor do mundo, cobrindo cascalho, gelo, neve e areia, com uma lista de carros que vão desde ícones de rally a caminhões, até heróis GT.', '65726931045f2.jpg', '2020-11-05', 'Codemasters', 8, '65726931045f9.png', 1),
(55, 'Tony Hawk\\\\\\\'s Pro Skater 1 + 2', 229.00, 6, 5, 'Quebre os limites do skate, mostre seu próprio estilo e faça parte da próxima geração de skatistas e criadores com Tony Hawk\\\\\\\\\\\\\\\'s™ Pro Skater™ 1 + 2. Volte com os jogos de skate mais icônicos já feitos. Jogue os jogos Tony Hawk\\\\\\\\\\\\\\\'s™ Pro Skater™ e Tony Hawk\\\\\\\\\\\\\\\'s™ Pro Skater™ 2 totalmente remasterizados em uma coleção épica, reconstruída do zero em incrível HD. • Ande de skate como o lendário Tony Hawk e todo o elenco profissional • Ande de skate ao som das músicas da trilha sonora que definiu uma época • Faça combos insanos com o manejo icônico da série Tony Hawk\\\\\\\\\\\\\\\'s™ Pro Skater™ • Jogue todos os modos de jogo originais e vá em frente Enfrente os modos locais para 2 jogadores • Mostre seu estilo e criatividade com os recursos atualizados Create-A-Park e Create-A-Skater • Faça suas sessões on-line e compita contra jogadores de todo o mundo nos modos Multiplayer e tabelas de classificação', '65726a892a55c.jpg', '2020-11-04', 'Vicarious Visions', 21, '65726a892a562.png', 3),
(56, 'Clash Royale', 0.00, 1, 26, 'Entre na Arena! Dos criadores de Clash of Clans chega um jogo multijogador em tempo real estrelado pelos Royales, seus personagens favoritos do Clash e muito, muito mais. Colete e atualize dezenas de cartas com as tropas, feitiços e defesas do Clash of Clans que você conhece e adora, bem como os Royales: Príncipes, Cavaleiros, Bebês Dragões e muito mais. Derrube o rei e as princesas inimigos de suas torres para derrotar seus oponentes e ganhar troféus, coroas e glória na Arena. Forme um clã para compartilhar cartas e construir sua própria comunidade de batalha. Leve a família Clash Royale à vitória!', '65726c187efa1.png', '2016-03-02', 'Supercell', 4, '65726c187efa8.png', 1),
(57, 'World of Warcraft', 75.00, 18, 23, 'World of Warcraft, muitas vezes referido como WoW, é um jogo de RPG online multijogador massivo (MMORPG) da Blizzard Entertainment, uma subsidiária da Activision Blizzard. É o quarto jogo lançado no universo de fantasia Warcraft, que foi introduzido pela primeira vez por Warcraft: Orcs & Humans em 1994. World of Warcraft se passa no mundo Warcraft de Azeroth, aproximadamente quatro anos após os eventos na conclusão do jogo anterior da Blizzard. Lançamento de Warcraft, Warcraft III: The Frozen Throne. Tal como acontece com outros MMORPGs, os jogadores controlam um avatar de personagem dentro de um mundo de jogo na visão de terceira ou primeira pessoa, explorando a paisagem, lutando contra vários monstros, completando missões e interagindo com personagens não-jogadores (NPCs) ou outros jogadores. Também semelhante a outros MMORPGs, World of Warcraft exige que o jogador pague por uma assinatura, seja comprando cartões de jogo pré-pagos por um período de tempo de jogo selecionado ou usando um cartão de crédito ou débito para pagar regularmente.', '65726db001b44.jpg', '2004-11-23', 'Blizzard Entertainment', 4, '65726db001b49.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnoticias`
--

CREATE TABLE `tbnoticias` (
  `idNoticia` int(11) NOT NULL,
  `tituloNoticia` varchar(200) NOT NULL,
  `textoNoticia` text NOT NULL,
  `dataLancNoticia` datetime NOT NULL,
  `dataModfcNoticia` datetime NOT NULL,
  `capaNoticia` varchar(255) NOT NULL,
  `temaNoticia` varchar(200) NOT NULL,
  `linkNoticia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbnoticias`
--

INSERT INTO `tbnoticias` (`idNoticia`, `tituloNoticia`, `textoNoticia`, `dataLancNoticia`, `dataModfcNoticia`, `capaNoticia`, `temaNoticia`, `linkNoticia`) VALUES
(1, 'BGS 2023 começa nesta quinta sem Xbox e PlayStation; veja passeio pelo evento', 'Brasil Game Show abre para o público geral a partir desta quinta-feira (12) e acontece no Expo Center Norte, em São Paulo, até o domingo (15) com jeito de começo do fim.', '2023-11-27 15:05:56', '2023-11-27 15:05:56', '6564da8461fdd.png', 'BGS', 'https://g1.globo.com/pop-arte/games/noticia/2023/10/12/bgs-2023-comeca-nesta-quinta-sem-xbox-e-playstation-veja-passeio-pelo-evento.ghtml'),
(2, 'Pokémon GO: jogadores se reúnem em encontros anos após o lançamento e amizade vira grande motor do jogo', 'Comunidade de jogadores do Ceará foi considerada mais engajada do Brasil em agosto pela empresa desenvolvedora do jogo.', '2023-11-27 15:09:41', '2023-11-27 15:09:41', '6564db65f374d.png', 'Pokémon', 'https://g1.globo.com/ce/ceara/noticia/2023/09/23/pokemon-go-jogadores-se-reunem-em-encontros-anos-apos-o-lancamento-e-amizade-vira-grande-motor-do-jogo.ghtml'),
(3, 'FC 24: 1º game pós-\'Fifa\' passa a usar partidas reais para recriar movimentos de jogadores', '\'Há alguns poucos anos não pensávamos que seria possível\', diz produtor Sam Rivera em entrevista ao g1. Jogo é lançado para público geral nesta sexta-feira (29).', '2023-11-27 16:56:31', '2023-11-27 17:10:15', '6564f46f784a1.png', 'FC 24', 'https://g1.globo.com/pop-arte/games/noticia/2023/09/29/fc-24-1o-game-pos-fifa-passa-a-usar-partidas-reais-para-recriar-movimentos-de-jogadores.ghtml');

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
  `tituloTrailer` varchar(255) NOT NULL,
  `linkTrailer` varchar(255) NOT NULL,
  `dataTrailer` date NOT NULL,
  `capaTrailer` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbtrailer`
--

INSERT INTO `tbtrailer` (`idTrailer`, `tituloTrailer`, `linkTrailer`, `dataTrailer`, `capaTrailer`) VALUES
(1, 'Jujutsu Kaisen Cursed Clash - Official Release Date Trailer', 'https://www.youtube.com/embed/ke83VI012jE', '2023-11-26', ''),
(3, 'LORDS OF THE FALLEN - Official Launch Trailer | Out October 13th on PC, PS5 & Xbox Series X|S', 'https://www.youtube.com/embed/Gkfip4T13bQ', '2023-11-26', ''),
(5, 'The Alters - All By Myselves | Official Game Trailer', 'https://www.youtube.com/embed/Xt1VEgUxTMQ', '2023-11-26', ''),
(6, 'Apex Legends - Official Kill Code Part 4 Trailer', 'https://www.youtube.com/embed/BCW7G_MOF-w', '2023-11-27', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(60) NOT NULL,
  `nickUser` varchar(35) DEFAULT NULL,
  `emailUser` varchar(100) NOT NULL,
  `senhaUser` varchar(35) NOT NULL,
  `dataNascUser` date NOT NULL,
  `sobrenomeUser` varchar(50) NOT NULL,
  `cpfUser` char(14) NOT NULL,
  `avatarUser` varchar(80) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `nickUser`, `emailUser`, `senhaUser`, `dataNascUser`, `sobrenomeUser`, `cpfUser`, `avatarUser`, `isAdmin`) VALUES
(1, 'Matheus', 'Tyran15', 'mh15122006@gmail.com', '1234rewqa', '2006-12-15', 'Henrique', '111.111.111-11', '656133eb1238a.jpg', 0),
(13, 'Edinaldo', NULL, 'edinaldo@edinaldo.com', '12', '1972-02-22', 'Pereira', '111.111.111-11', '6572325e36197.jpeg', 1);

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
  MODIFY `idBackgroud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `tbclassificacao`
--
ALTER TABLE `tbclassificacao`
  MODIFY `idClassificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tbjogo`
--
ALTER TABLE `tbjogo`
  MODIFY `idJogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `tbnoticias`
--
ALTER TABLE `tbnoticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbplataforma`
--
ALTER TABLE `tbplataforma`
  MODIFY `idPlataforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tbtrailer`
--
ALTER TABLE `tbtrailer`
  MODIFY `idTrailer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
