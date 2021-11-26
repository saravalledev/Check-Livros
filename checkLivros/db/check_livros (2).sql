-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2021 às 00:06
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `check_livros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nome` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `feedback_site` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nome`, `email`, `feedback_site`) VALUES
(7, 'Eutesto2', 'teste2@teste2.com', 'a'),
(8, 'Eutesto1', 'teste@teste.com', 'Falta alguma coisa...'),
(9, 'Eutesto1', 'teste@teste.com', 'Falta alguma coisa...'),
(10, 'Eutesto2', 'teste2@teste2.com', 'hhhhhhhhhhhhug');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `titulo_livro` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `autor` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `editora` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ano_publicado` int(4) DEFAULT NULL,
  `img_href` varchar(1000) COLLATE utf8_bin NOT NULL,
  `genero_livro` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `titulo_livro`, `autor`, `editora`, `ano_publicado`, `img_href`, `genero_livro`) VALUES
(1, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Pé da letra', 1943, '../img/capa_livro/img-pequeno-principe.jpg', 'literaturainfantojuvenil'),
(10, 'A menina que roubava livros', 'Markus Zusak', 'Presença', 2005, '../img/capa_livro/capa-a-menina-que-roubava-livros.png', 'literaturaestrangeira'),
(16, 'A Arte da Sabedoria', 'Baltasar Gracián', 'Editora Novo Século', 2020, '../img/capa_livro/capa-a-arte-da-sabedoria.jpg', 'cienciashumanas'),
(65, 'Dom Quixote', 'Miguel de Cervantes', 'Penguin-Companhia', 2012, '../img/capa_livro/capa-dom-quixote.jpg', 'literaturaestrangeira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenhas`
--

CREATE TABLE `resenhas` (
  `id_resenha` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `resenha` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestoes_livros`
--

CREATE TABLE `sugestoes_livros` (
  `id_sugestoes` int(100) NOT NULL,
  `nome` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `genero_livro` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `sugestoes` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_conta` varchar(20) COLLATE utf8_bin NOT NULL,
  `username` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `tipo_conta`, `username`, `email`, `senha`) VALUES
(59, 'adm', 'Eutesto1', 'teste@teste.com', 'e8ef061c45fbc6b42c1512e7eead4cb7'),
(60, '', 'Eutesto2', 'teste2@teste2.com', 'f5307bfce937fe1e76fb7153336ffffa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices para tabela `resenhas`
--
ALTER TABLE `resenhas`
  ADD PRIMARY KEY (`id_resenha`);

--
-- Índices para tabela `sugestoes_livros`
--
ALTER TABLE `sugestoes_livros`
  ADD PRIMARY KEY (`id_sugestoes`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `resenhas`
--
ALTER TABLE `resenhas`
  MODIFY `id_resenha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `sugestoes_livros`
--
ALTER TABLE `sugestoes_livros`
  MODIFY `id_sugestoes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
