-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2021 às 17:28
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_sala`
--

CREATE TABLE `agenda_sala` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_sala` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agenda_sala`
--

INSERT INTO `agenda_sala` (`id`, `nome`, `nome_sala`, `data`, `horario`) VALUES
(106, 'teste0004', 'teste', '2222-02-02', '11:11:00'),
(107, 'teste123', 'teste', '2222-02-02', '11:01:00'),
(108, 'teste1234', 'teste', '2222-02-02', '11:11:00'),
(109, 'onze', 'onze', '2222-02-02', '11:11:00'),
(110, 'leklke', 'aaa', '2222-02-02', '11:11:00'),
(111, 'leklke', 'aaa', '2222-02-02', '11:11:00'),
(112, 'flor e ', 'beija flor', '2222-02-02', '11:11:00'),
(113, 'testemanha', 'data', '2021-01-01', '11:11:00'),
(114, 'teste', 'testaaa', '2021-01-01', '11:11:00'),
(115, 'vai', 'vai', '2021-01-01', '11:11:00'),
(116, 'vamodal', 'vamo', '2021-01-01', '11:11:00'),
(117, 'iooooooooooo', 'ooooooo', '2021-01-01', '11:11:00'),
(118, 'iooooooooooo', 'ooooooo', '2021-01-01', '11:11:00'),
(119, 'ooooooooo', 'oooooo', '2021-01-01', '11:11:00'),
(120, 'ooooooooo', 'oooooo', '2021-01-01', '11:11:00'),
(121, 'ooooooooo', 'oooooo', '2021-01-01', '11:11:00'),
(122, 'ooooooooo', 'oooooo', '2021-01-01', '11:11:00'),
(123, 'ooooooooo', 'oooooo', '2021-01-01', '11:11:00'),
(124, 'masjao', 'ahsdjas', '2021-01-01', '11:11:00'),
(125, '', '', '0000-00-00', '00:00:00'),
(126, 'masjao', 'ahsdjas', '2021-01-01', '11:11:00'),
(127, 'masjao', 'ahsdjas', '0000-00-00', '11:11:00'),
(128, 'vini', 'teste', '2021-01-01', '11:11:00'),
(129, '', '', '0000-00-00', '00:00:00'),
(130, 'vini', 'teste', '2021-01-01', '11:11:00'),
(131, 'Vini', 'teste', '2021-01-01', '11:11:00'),
(132, 'Vini', 'teste', '2021-01-01', '11:11:00'),
(133, 'Vini', 'teste', '2021-01-01', '11:11:00'),
(134, 'Vini', 'teste', '2021-01-01', '11:11:00'),
(135, 'Vini', 'teste', '2021-01-01', '11:11:00'),
(136, '', '', '0000-00-00', '00:00:00'),
(137, 'Vini', 'teste', '2021-01-01', '11:11:00'),
(138, 'Vini', 'teste', '2021-01-01', '11:11:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda_sala`
--
ALTER TABLE `agenda_sala`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda_sala`
--
ALTER TABLE `agenda_sala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
