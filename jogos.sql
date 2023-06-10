-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2023 às 16:52
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
-- Banco de dados: `jogos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `breve`
--

CREATE TABLE `breve` (
  `Nome` varchar(50) NOT NULL,
  `Descricao` text NOT NULL,
  `Data` date NOT NULL,
  `Id_Jogo` int(11) NOT NULL,
  `Imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `breve`
--

INSERT INTO `breve` (`Nome`, `Descricao`, `Data`, `Id_Jogo`, `Imagem`) VALUES
('The Legend of Zelda', 'Num mundo mais sombrio e destruído, Link tem a espada mais poderosa do Universo despedaçada: a Master Sword. E agora, precisa lutar com Zelda para vencer a ameaça de Ganondorf.', '2023-09-22', 6, './img/breve/produto6.jpg'),
('Pokémon Legends: Arceus', 'Prepare-se para uma nova grande aventura Pokémon em Pokémon™ Legends: Arceus, um jogo totalmente novo da Game Freak que combina ação e exploração com as raízes de RPG da série Pokémon. Embarque em missões de pesquisa na antiga região de Hisui. ', '2024-02-02', 7, './img/breve/produto7.jpg'),
('Mario Kart™ 8 Deluxe', 'Queime o asfalto nas pistas do Reino Cogumelo! Debaixo d\'água, no céu, no espaço ou de cabeça para baixo a caminho da vitória! Acelere no modo multijogador local, em torneios online, no modo de batalha renovado e muito mais!', '2024-08-02', 8, './img/breve/produto8.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `Nome` varchar(50) NOT NULL,
  `Imagem` varchar(50) NOT NULL,
  `Descricao` text NOT NULL,
  `Baixado` int(11) NOT NULL,
  `Visto` int(11) NOT NULL,
  `Preco` double NOT NULL,
  `Id_Jogo` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `So_m` text NOT NULL,
  `So_r` text NOT NULL,
  `Processador_m` text NOT NULL,
  `Processador_r` text NOT NULL,
  `Memoria_m` int(11) NOT NULL,
  `Memoria_r` int(11) NOT NULL,
  `Placa_m` text NOT NULL,
  `Placa_r` text NOT NULL,
  `Armazenamento_m` int(11) NOT NULL,
  `Armazenamento_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`Nome`, `Imagem`, `Descricao`, `Baixado`, `Visto`, `Preco`, `Id_Jogo`, `Tipo`, `So_m`, `So_r`, `Processador_m`, `Processador_r`, `Memoria_m`, `Memoria_r`, `Placa_m`, `Placa_r`, `Armazenamento_m`, `Armazenamento_r`) VALUES
('Grand Theft Auto V', './img/jogos/produto1.jpg', 'Grand Theft Auto V para PC oferece aos jogadores a opção de explorar o gigantesco e premiado mundo de Los Santos e Blaine County em resoluções de até 4K e além, assim como a chance de experimentar o jogo rodando a 60 FPS (quadros por segundo).', 1500, 15000, 82, 1, 'Mundo Aberto', 'Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1, Windows Vista 64 Bit Service Pack 2* (*placa de vídeo NVIDIA recomendada para o Vista)\r\n', 'Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1\r\n', 'Intel Core 2 Quad CPU Q6600 com 2.40 GHz (4 CPUs) / AMD Phenom 9850 Quad-Core (4 CPUs) com 2.5 GHz\r\n', 'Intel Core i5 3470 com 3.2GHZ (4 CPUs) / AMD X8 FX-8350 com 4GHZ (8 CPUs)\r\n', 4, 8, 'NVIDIA 9800 GT 1 GB / AMD HD 4870 1 GB (DX 10, 10.1, 11)\r\n', 'NVIDIA GTX 660 2GB / AMD HD7870 2GB', 90, 90),
('FIFA 23', './img/jogos/produto2.jpg', 'FIFA 23 traz o Jogo de Todo Mundo aos gramados com a tecnologia HyperMotion2, a FIFA World Cup™ masculina e feminina (lançamento durante a temporada), times femininos, recursos de crossplay* e muito mais.', 5000, 20000, 349, 2, 'Esporte', 'Windows 10 de 64 bits\r\n', 'Windows 10 de 64 bits\r\n', 'Ryzen 5 1600, Core i5 6600k\r\n', 'Ryzen 7 2700X, Core i7 6700\r\n', 8, 12, 'Radeon RX 570, GeForce GTX 1050 Ti\r\n', 'Radeon RX 5600 XT, GeForce GTX 1660\r\n', 100, 100),
('Hogwarts Legacy', './img/jogos/produto3.jpg', 'Hogwarts Legacy é um RPG de ação imersivo de mundo aberto. Agora você pode assumir o controle da ação e estar no centro de sua própria aventura no mundo bruxo.', 1000, 8000, 600, 3, 'Fantasia', 'Windows 10\r\n', 'Windows 10\r\n', 'Intel Core i5-8400 ou AMD Ryzen 5 2600\r\n', 'Intel Core i7-8700 ou AMD Ryzen 5 3600\r\n', 8, 16, 'NVIDIA GeForce GTX 1070 ou AMD RX VEGA 56\r\n', 'NVIDIA GeForce 1080 Ti ou AMD RX 5700 XT\r\n', 85, 85),
('Outlast', './img/jogos/produto4.jpg', 'Hell is an experiment you can\'t survive in Outlast, a first-person survival horror game developed by veterans of some of the biggest game franchises in history. As investigative journalist Miles Upshur, explore Mount Massive Asylum and try to survive long enough to discover its terrible secret... if you dare.', 2000, 9800, 122, 4, 'Terror', 'Windows XP/Vista/7/8 de 64 bits *\r\n', 'Windows Vista/7/8 de 64 bits\r\n', 'CPU Dual Core de 2,2 GHz\r\n', 'CPU Quad Core de 2,8 GHz\r\n', 2, 3, 'NVIDIA GeForce 9800GTX de 512 MB/ATI Radeon HD 3xxx series\r\n', 'NVIDIA GTX 460 de 1 GB/ATI Radeon HD 6850 ou superior\r\n', 5, 5),
('God Of War', './img/jogos/produto5.jpg', 'Com a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho a fazer o mesmo.', 10000, 54000, 77, 5, 'Ação', 'Windows 10 de 64 bits\r\n', 'Windows 10 de 64 bits\r\n', 'Intel i5-2500k (4 núcleos, 3,3 GHz) ou AMD Ryzen 3 1200 (4 núcleos, 3,1 GHz)\r\n', 'Intel i5-6600k (4 núcleos, 3,5 GHz) ou AMD Ryzen 5 2400 G (4 núcleos, 3,6 GHz)\r\n', 8, 8, 'NVIDIA GTX 960 (4 GB) ou AMD R9 290X (4 GB)\r\n', 'NVIDIA GTX 1060 (6 GB) ou AMD RX 570 (4 GB)\r\n', 70, 70);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `breve`
--
ALTER TABLE `breve`
  ADD PRIMARY KEY (`Id_Jogo`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`Id_Jogo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
