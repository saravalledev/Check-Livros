-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2021 às 02:16
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
(1, 'Eutesto2', 'teste2@teste2.com', 'bom'),
(2, 'Eutesto3', 'teste3@teste3.com', 'Acho que o Kaike come demais!'),
(3, 'Eutesto4', 'teste4@teste4.com', 'A YAS FALA DEMAIS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `titulo_livro` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `autor` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `editora` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ano_publicado` int(4) DEFAULT NULL,
  `img_href` varchar(50) COLLATE utf8_bin NOT NULL,
  `genero_livro` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo_livro`, `autor`, `editora`, `ano_publicado`, `img_href`, `genero_livro`) VALUES
(1, 'Pequeno Príncipe', 'Alguém', 'A melhor editora', 1999, 'foto.jpg', 'juven'),
(3, 'titulo2', 'autor2', 'editora2', 2, 'foto2.jpg', 'CE'),
(5, 'Natureza', 'Eu N', 'Eu E', 2021, '../img/capa_livro/img-pequeno-principe.jpg', 'bio'),
(6, 'A Matemática ', 'Math', 'Ma', 1999, 'fotomat.jpg', 'exat'),
(7, 'Pantanal', 'Jovam Pan', 'Pan Mérica', 2000, '../img/capa_livro/img-pequeno-principe.jpg', 'bio'),
(8, 'Arara', 'Joao', 'Jazira', 2001, '../img/capa_livro/img-pequeno-principe.jpg', 'bio'),
(9, 'Homem Primata', 'John', 'Oracle', 2012, 'fotoHuman.png', 'human');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenha`
--

CREATE TABLE `resenha` (
  `id_resenha` int(11) NOT NULL,
  `id_livro` int(11) DEFAULT NULL,
  `username` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `resenha` varchar(1000) COLLATE utf8_bin DEFAULT NULL
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

--
-- Extraindo dados da tabela `sugestoes_livros`
--

INSERT INTO `sugestoes_livros` (`id_sugestoes`, `nome`, `email`, `genero_livro`, `sugestoes`) VALUES
(1, 'Eutesto1', 'teste@teste.com', 'HQs', 'DC Origens'),
(2, 'Eutesto1', 'teste@teste.com', 'Autoajuda', 'Miranha'),
(3, 'Eutesto1', 'teste@teste.com', 'Autoajuda', 'Miranha'),
(4, 'Eutesto2', 'teste2@teste2.com', 'Ciências Biológicas', 'Procurando Nemo'),
(5, 'Eutesto2', 'teste2@teste2.com', 'Literatura Infantoju', 'Marcelinho'),
(6, 'Eutesto4', 'teste4@teste4.com', 'Ciências Biológicas', 'Bolinhas'),
(7, 'Eutesto4', 'teste4@teste4.com', 'Ciências Biológicas', 'Bolinhas'),
(8, 'Eutesto4', 'teste4@teste4.com', 'Ciências Biológicas', 'Bolinhas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `email`, `senha`) VALUES
(23, 'Eutesto1', 'teste@teste.com', 'e8ef061c45fbc6b42c1512e7eead4cb7'),
(24, 'Eutesto2', 'teste2@teste2.com', 'f5307bfce937fe1e76fb7153336ffffa'),
(25, 'Eutesto3', 'teste3@teste3.com', '327893a3bebce23991becf0b7c78bcbf'),
(26, 'Eutesto4', 'teste4@teste4.com', '2c51c7409829db0917f996c58ddec45f');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices para tabela `resenha`
--
ALTER TABLE `resenha`
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
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `resenha`
--
ALTER TABLE `resenha`
  MODIFY `id_resenha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sugestoes_livros`
--
ALTER TABLE `sugestoes_livros`
  MODIFY `id_sugestoes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
