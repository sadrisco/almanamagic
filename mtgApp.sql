-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Nov-2022 às 21:45
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mtgApp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards`
--

CREATE TABLE `cards` (
  `name` varchar(80) DEFAULT NULL,
  `id` text DEFAULT NULL,
  `imageURL` varchar(255) NOT NULL,
  `artist` varchar(80) DEFAULT NULL,
  `colors` varchar(80) DEFAULT NULL,
  `power` varchar(11) DEFAULT NULL,
  `def` varchar(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `flavor_text` varchar(255) DEFAULT NULL,
  `type` varchar(80) DEFAULT NULL,
  `manaCost` varchar(80) DEFAULT NULL,
  `rarity` varchar(80) DEFAULT NULL,
  `cmc` varchar(80) DEFAULT NULL,
  `setName` varchar(80) DEFAULT NULL,
  `setType` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cards`
--

INSERT INTO `cards` (`name`, `id`, `imageURL`, `artist`, `colors`, `power`, `def`, `text`, `flavor_text`, `type`, `manaCost`, `rarity`, `cmc`, `setName`, `setType`) VALUES
('A-Fires of Invention', '24729f25-e900-4a71-a304-7346eb17990a', 'https://cards.scryfall.io/normal/front/2/4/24729f25-e900-4a71-a304-7346eb17990a.jpg?1649850189', 'Stanton Feng', NULL, '', '', 'You can cast spells only during your turn and you can cast no more than two spells each turn.\r\nYou may cast spells with mana value less than or equal to the number of lands you control without paying their mana costs.', '\"Just tell us how many you want and get out of the way.\"', 'Enchantment', '{4}{R}', 'rare', '5', 'Throne of Eldraine', 'expansion');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
