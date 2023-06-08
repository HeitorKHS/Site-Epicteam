-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/06/2023 às 21:18
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

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `breve`
--
ALTER TABLE `breve`
  ADD PRIMARY KEY (`Id_Jogo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
