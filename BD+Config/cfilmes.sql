-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2019 às 12:00
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.32

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
(20, 'Leonardo DiCaprio'),
(21, 'Xuxa'),
(22, 'Jorge Fernando'),
(23, 'Fernanda Montenegro'),
(24, 'Quentin Tarantino'),
(25, 'Joselito '),
(26, 'The Rock');

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
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome_filme` varchar(200) NOT NULL,
  `nome_original` varchar(200) NOT NULL,
  `classificacao` int(11) NOT NULL,
  `imdb` varchar(18) NOT NULL,
  `lancamento` varchar(25) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ator` varchar(250) NOT NULL,
  `poster` varchar(250) NOT NULL,
  `img01` varchar(250) NOT NULL,
  `img02` varchar(250) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `nome_serie` varchar(200) NOT NULL,
  `nome_original` varchar(200) NOT NULL,
  `temporada_ep` varchar(100) NOT NULL,
  `classificacao` int(11) NOT NULL,
  `imdb` varchar(18) NOT NULL,
  `lancamento` varchar(25) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ator` varchar(250) NOT NULL,
  `poster` varchar(250) NOT NULL,
  `img01` varchar(250) NOT NULL,
  `img02` varchar(250) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `series`
--
ALTER TABLE `series`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
