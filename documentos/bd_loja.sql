-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2017 às 00:08
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `categoria`, `preco`) VALUES
(1, 'Alface Crespa', 'Hortaliça', '10.00'),
(2, 'Beringela', 'Legume', '100.00'),
(3, 'Tangerina', 'Fruta', '100.00'),
(4, 'Maçã', 'Fruta', '2.87'),
(5, 'Manga', 'Fruta', '100.00'),
(6, 'Tomate', 'Fruta', '1.48'),
(7, 'Cebola', 'Hortaliça', '100.00'),
(8, 'Couve', 'Hortaliça', '100.00'),
(9, 'Couve-flor', 'Hortaliça', '101.00'),
(16, 'Abóbora', 'Fruta', '3.25'),
(17, 'Abóbora', 'Fruta', '3.25'),
(18, 'Amendoim', 'Fruta', '1.35'),
(19, 'Repolho', 'Hortaliça', '8.00'),
(20, 'titulo', 'categoria', '0.00'),
(21, 'Laranja', 'Fruta', '3.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
