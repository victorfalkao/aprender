-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2021 às 20:58
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `std`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `1_av`
--

CREATE TABLE `1_av` (
  `id` int(100) NOT NULL,
  `port` float NOT NULL,
  `l_est` float NOT NULL,
  `mat` float NOT NULL,
  `qui` float NOT NULL,
  `fis` float NOT NULL,
  `bio` float NOT NULL,
  `his` float NOT NULL,
  `geo` float NOT NULL,
  `fil` float NOT NULL,
  `soc` float NOT NULL,
  `art` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `1_av`
--

INSERT INTO `1_av` (`id`, `port`, `l_est`, `mat`, `qui`, `fis`, `bio`, `his`, `geo`, `fil`, `soc`, `art`) VALUES
(1, 2.5, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1),
(2, 10, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `1_rec`
--

CREATE TABLE `1_rec` (
  `id` int(100) NOT NULL,
  `port` float NOT NULL,
  `l_est` float NOT NULL,
  `mat` float NOT NULL,
  `qui` float NOT NULL,
  `fis` float NOT NULL,
  `bio` float NOT NULL,
  `his` float NOT NULL,
  `geo` float NOT NULL,
  `fil` float NOT NULL,
  `soc` float NOT NULL,
  `art` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `1_rec`
--

INSERT INTO `1_rec` (`id`, `port`, `l_est`, `mat`, `qui`, `fis`, `bio`, `his`, `geo`, `fil`, `soc`, `art`) VALUES
(2, 5, 6, 5, 6, 5, 6, 5, 6, 5, 6, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `2_av`
--

CREATE TABLE `2_av` (
  `id` int(100) NOT NULL,
  `port` float NOT NULL,
  `l_est` float NOT NULL,
  `mat` float NOT NULL,
  `qui` float NOT NULL,
  `fis` float NOT NULL,
  `bio` float NOT NULL,
  `his` float NOT NULL,
  `geo` float NOT NULL,
  `fil` float NOT NULL,
  `soc` float NOT NULL,
  `art` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `2_av`
--

INSERT INTO `2_av` (`id`, `port`, `l_est`, `mat`, `qui`, `fis`, `bio`, `his`, `geo`, `fil`, `soc`, `art`) VALUES
(2, 7, 6, 5, 6, 5, 6, 5, 6, 5, 6, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `3_av`
--

CREATE TABLE `3_av` (
  `id` int(100) NOT NULL,
  `port` float NOT NULL,
  `l_est` float NOT NULL,
  `mat` float NOT NULL,
  `qui` float NOT NULL,
  `fis` float NOT NULL,
  `bio` float NOT NULL,
  `his` float NOT NULL,
  `geo` float NOT NULL,
  `fil` float NOT NULL,
  `soc` float NOT NULL,
  `art` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `3_av`
--

INSERT INTO `3_av` (`id`, `port`, `l_est`, `mat`, `qui`, `fis`, `bio`, `his`, `geo`, `fil`, `soc`, `art`) VALUES
(2, 5, 6, 5, 6, 5, 6, 5, 6, 5, 6, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `4_av`
--

CREATE TABLE `4_av` (
  `id` int(100) NOT NULL,
  `port` float NOT NULL,
  `l_est` float NOT NULL,
  `mat` float NOT NULL,
  `qui` float NOT NULL,
  `fis` float NOT NULL,
  `bio` float NOT NULL,
  `his` float NOT NULL,
  `geo` float NOT NULL,
  `fil` float NOT NULL,
  `soc` float NOT NULL,
  `art` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `4_av`
--

INSERT INTO `4_av` (`id`, `port`, `l_est`, `mat`, `qui`, `fis`, `bio`, `his`, `geo`, `fil`, `soc`, `art`) VALUES
(2, 5, 6, 5, 6, 5, 6, 5, 6, 5, 6, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `turma` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `turma`) VALUES
(1, 'VICTOR FALCAO DA VERA CRUZ', 'M2MR01'),
(2, 'AMANDA PINHEIRO FALCAO', 'M2MR01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rec_final`
--

CREATE TABLE `rec_final` (
  `id` int(100) NOT NULL,
  `port` float NOT NULL,
  `l_est` float NOT NULL,
  `mat` float NOT NULL,
  `qui` float NOT NULL,
  `fis` float NOT NULL,
  `bio` float NOT NULL,
  `his` float NOT NULL,
  `geo` float NOT NULL,
  `fil` float NOT NULL,
  `soc` float NOT NULL,
  `art` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rec_final`
--

INSERT INTO `rec_final` (`id`, `port`, `l_est`, `mat`, `qui`, `fis`, `bio`, `his`, `geo`, `fil`, `soc`, `art`) VALUES
(2, 5, 6, 5, 6, 5, 6, 5, 6, 5, 6, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `1_av`
--
ALTER TABLE `1_av`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `1_rec`
--
ALTER TABLE `1_rec`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `2_av`
--
ALTER TABLE `2_av`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `3_av`
--
ALTER TABLE `3_av`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `4_av`
--
ALTER TABLE `4_av`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rec_final`
--
ALTER TABLE `rec_final`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `1_av`
--
ALTER TABLE `1_av`
  ADD CONSTRAINT `1_av_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`);

--
-- Limitadores para a tabela `1_rec`
--
ALTER TABLE `1_rec`
  ADD CONSTRAINT `1_rec_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`);

--
-- Limitadores para a tabela `2_av`
--
ALTER TABLE `2_av`
  ADD CONSTRAINT `2_av_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`);

--
-- Limitadores para a tabela `3_av`
--
ALTER TABLE `3_av`
  ADD CONSTRAINT `3_av_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`);

--
-- Limitadores para a tabela `4_av`
--
ALTER TABLE `4_av`
  ADD CONSTRAINT `4_av_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`);

--
-- Limitadores para a tabela `rec_final`
--
ALTER TABLE `rec_final`
  ADD CONSTRAINT `rec_final_ibfk_1` FOREIGN KEY (`id`) REFERENCES `alunos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
