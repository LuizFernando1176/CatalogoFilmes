-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2019 às 04:23
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cfilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE `ator` (
  `id` int(11) NOT NULL,
  `ator` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ator`
--

INSERT INTO `ator` (`id`, `ator`) VALUES
(1, 'Marlon Brando'),
(2, 'Laurence Olivier'),
(3, 'Al Pacino'),
(4, 'Robert De Niro'),
(5, 'Dustin Hoffman'),
(6, 'Jack Nicholson'),
(7, 'George C. Scott'),
(8, 'Anthony Hopkins'),
(9, 'Gene Hackman'),
(13, 'Max von Sydow'),
(14, 'Tom Hanks'),
(15, 'Morgan Freeman'),
(16, 'Charles Chaplin'),
(17, 'Sidney Poitier'),
(18, 'Sean Connery'),
(19, 'Christian Bale'),
(20, 'Leonardo DiCaprio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Ação'),
(2, 'Comedia'),
(3, 'Terror'),
(4, 'Suspense'),
(5, 'Ficção'),
(6, 'Documentario'),
(7, 'Drama'),
(8, '+18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `urlsistema`
--

CREATE TABLE `urlsistema` (
  `id` int(11) NOT NULL,
  `url` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `urlsistema`
--

INSERT INTO `urlsistema` (`id`, `url`) VALUES
(1, 'http://localhost/catalogoFilmes/pictures/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(35) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `idade`) VALUES
(1, 'Luiz Fernando', 'nando1176', 30);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ator`
--
ALTER TABLE `ator`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `urlsistema`
--
ALTER TABLE `urlsistema`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ator`
--
ALTER TABLE `ator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `urlsistema`
--
ALTER TABLE `urlsistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
