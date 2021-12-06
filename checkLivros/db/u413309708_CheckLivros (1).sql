-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Dez-2021 às 00:15
-- Versão do servidor: 10.5.12-MariaDB-cll-lve
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u413309708_CheckLivros`
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
(12, 'Ana Coraline', 'flower.ana@gmail.com', 'Amei o site. Está simplesmente esplendido!'),
(13, 'Joao Vitor ', 'joaovitor@gmail.com', 'Site mol bom mano'),
(14, 'Joao Vitor ', 'joaovitor@gmail.com', 'Site mol bom mano'),
(15, 'Joao Vitor ', 'joaovitor@gmail.com', 'Site mol bom mano'),
(16, 'Joao Vitor ', 'joaovitor@gmail.com', 'Site mol bom mano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `titulo_livro` longtext COLLATE utf8_bin DEFAULT NULL,
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
(65, 'Dom Quixote', 'Miguel de Cervantes', 'Penguin-Companhia', 2012, '../img/capa_livro/capa-dom-quixote.jpg', 'literaturaestrangeira'),
(67, 'Star Wars: A Fuga', 'Kieron Gillen', 'Panini; 1ª edição (23 maio 202', 2020, '../img/capa_livro/capa-star-wars-a-fuga.jpg', 'hqsemangas'),
(68, 'Superman: Para O Alto E Avante', 'Tom King', 'Panini', 2020, '../img/capa_livro/capa-superman.jpg', 'hqsemangas'),
(69, 'Venha Comigo', ' Alexandro Gruber', 'NOVOS TALENTOS', 2013, '../img/capa_livro/capa-venha-comigo.jpg', 'literaturanacional'),
(70, 'Dom Casmurro', 'Machado de Assis', 'FTD Educação', 2010, '../img/capa_livro/capa-dom-casmurro.jpg', 'literaturanacional'),
(71, 'Batman en Barcelona: El caballero del dragón', 'Mark Waid', ' ECC Ediciones', 2014, '../img/capa_livro/capa-el-caballero-del-dragon.jpg', 'hqsemangas'),
(72, 'Os quatro compromissos', 'Don Miguel Ruiz ', 'Best Seller', 2005, '../img/capa_livro/capa-os-quatro-compromissos.jpg', 'autoajuda'),
(73, 'O poder da autorresponsabilidade', 'Paulo Vieira', 'Gente', 2018, '../img/capa_livro/capa-o-poder-da-auto-responsabilidade.jpg', 'autoajuda'),
(74, 'A legião estrangeira', 'Clarice Lispector', 'Rocco', 1999, '../img/capa_livro/capa-a-legiao-estrangeira.jpg', 'literaturanacional'),
(75, 'A Sutil Arte de Ligar o F*da-Se: Uma estratégia inusitada para uma vida melhor', 'Mark Manson', 'Intrínseca', 2017, '../img/capa_livro/capa-a-sutil-arte-de-ligar-o-foda-se.jpg', 'autoajuda'),
(76, 'A coragem de ser imperfeito ', 'Brené Brown', '‎ Editora Sextante', 2016, '../img/capa_livro/capa-a-coragem-de-ser-imperfeito.jpg', 'autoajuda'),
(77, 'Diário de um banana 12: apertem os cintos', 'Jeff Kinney', 'VR Editora', 2017, '../img/capa_livro/capa-diario-de-um-banana.jpg', 'literaturainfantojuvenil'),
(78, 'Alice no País das Maravilhas Por Monteiro Lobato', 'Lewis Carroll ', 'Editora Lafonte', 2021, '../img/capa_livro/capa-alice-no-pais-das-maravilhas.jpg', 'literaturainfantojuvenil'),
(79, 'O Cortiço', 'Aluísio Azevedo', 'Edições câmara', 2019, '../img/capa_livro/capa-o-cortiço-novo.jpg', 'literaturanacional'),
(80, 'O Livro Dos Humanos - A História De Como Nos Tornamos Quem Somos', 'Adam Rutherford ', 'Record ', 2020, '../img/capa_livro/O Livro Dos Humanos - A História De Como Nos Tornamos Quem Somos.jpg', 'cienciasbiologicas'),
(81, 'Como se Faz Uma Tese ', 'Umberto Eco', 'Perspectiva; 23ª edição ', 2010, '../img/capa_livro/capa-como-faz-tese.jpg', 'cienciashumanas'),
(82, 'Estatística: O que é, para que serve, como funciona', 'Charles Wheelan', 'Zahar', 2016, '../img/capa_livro/capa-estatistica.jpg', 'cienciasexatas'),
(83, 'Guyton e Hall Tratado de Fisiologia Médica', 'John E. John E. Hall', 'GEN Guanabara Koogan', 2017, '../img/capa_livro/capa-fisiologia.jpg', 'cienciasbiologicas'),
(84, 'O livro da matemática', 'Vários', 'Globo Livros', 2020, '../img/capa_livro/capa-livro-matematica.jpg', 'cienciasexatas'),
(85, 'Memórias póstumas de Brás Cubas', 'Machado de Assis', 'Principis', 2019, '../img/capa_livro/capa-memorias-bras.jpg', 'literaturanacional'),
(86, 'Mundo Animal ', 'Geneviève Warnau', ' Girassol', 2019, '../img/capa_livro/capa-mundo-animal.jpg', 'cienciasbiologicas'),
(87, 'Sou péssimo em matemática: como desvendar os mistérios dos números com histórias fascinantes e dicas infalíveis', 'Rafael Procopio ', 'HarperCollins', 2019, '../img/capa_livro/capa-pessimo-matematica.jpg', 'cienciasexatas'),
(88, 'Sociedade do cansaço', 'Byung-Chul Han', ' Editora Vozes', 2015, '../img/capa_livro/capa-sociedade.jpg', 'cienciashumanas'),
(89, 'A vida secreta das árvores', 'Peter Wohlleben', ' Editora Sextante', 2017, '../img/capa_livro/capa-vida-arvores.jpg', 'cienciasbiologicas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenhas`
--

CREATE TABLE `resenhas` (
  `id_resenha` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `resenha` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `resenhas`
--

INSERT INTO `resenhas` (`id_resenha`, `id_livro`, `username`, `resenha`) VALUES
(5, 81, 'JoaoVitor', 'De acordo com o usuário Paulo Guimarães, da plataforma \'Amazon\' a respeito do livro Como se Faz uma Tese : <br> <br>\r\n\r\n\"Gostei muito do livro, trouxe as técnicas da escrita de teses de maneira organizada, prática, e fez pensar sobre os mecanismos da pesquisa e da escrita. Além disso, tem algumas passagens de humor que deixam o texto mais leve e interessante, como se você estivesse mesmo conversando com o autor.\"'),
(9, 85, 'JoaoVitor', 'De acordo com o usuário Leila de Carvalho Gonçalves, da plataforma \'Amazon\' sobre o livro Memórias Póstumas de Brás cubas:\r\n\r\n\"Machado de Assis é realmente genial e esse romance comprova tal afirmação. Considerado uma obra-prima da literatura, representa um marco na sua extensa bibliografia: foi a partir daí, que o autor foi alçado ao posto máximo dentro de nossa ficção. Portanto, peço perdão, muito jovem não tive capacidade para compreender a fina ironia, as severas críticas e o alcance de seu talento. A narrativa inaugura sua fase realista, assim como introduz o romance psicológico no Brasil. Representa uma verdadeira revolução de ideias e formas, a medida que aprofunda o desprezo pelas idealizações românticas num enredo alienar com estilo direto e sem floreios. Também apresenta uma singularidade: tem um defunto como narrador que, pessimista e indiferente, expõe sua vida com desdém, tendo como cenário o Rio de Janeiro do século XIX.\"'),
(10, 80, 'Isabelle S', 'De acordo com o usuário João Baptista Freire, da palataforma \'Amazon\', sobre o livro \'O livro dos humanos: A história de como nos tornamos quem somos\':<br> <br> \"Todo livro de divulgação científica é igual, no sentido de tratar-se de um especialista falando de maneira simples sobre um tema complexo e/ou profundo. Os exemplos que o autor escolheu são as melhores coisas no livro, especialmente os da primeira parte (que é menos opinativa que a segunda). Vale a leitura\" '),
(11, 85, 'JoaoVitor', 'De acordo com o usuário Leila de Carvalho Gonçalves da plataforma \'Amazon\' sobre o livro Memórias Póstumas de Brás cubas:<br> <br>\r\n\r\n\"Machado de Assis é realmente genial e esse romance comprova tal afirmação. Considerado uma obra-prima da literatura, representa um marco na sua extensa bibliografia: foi a partir daí, que o autor foi alçado ao posto máximo dentro de nossa ficção. Portanto, peço perdão, muito jovem não tive capacidade para compreender a fina ironia, as severas críticas e o alcance de seu talento. A narrativa inaugura sua fase realista, assim como introduz o romance psicológico no Brasil. Representa uma verdadeira revolução de ideias e formas, a medida que aprofunda o desprezo pelas idealizações românticas num enredo alienar com estilo direto e sem floreios. Também apresenta uma singularidade: tem um defunto como narrador que, pessimista e indiferente, expõe sua vida com desdém, tendo como cenário o Rio de Janeiro do século XIX.\"'),
(12, 85, 'Isabelle S', 'De acordo com o usuário Sebastião Bicalho da plataforma \'Amazon\' soobre o livro Memórias Póstumas de Brás Cubas:<br><br>\r\n \"Por incrível que pareça, só conhecia Machado de Assis por algumas leituras feitas no ensino fundamental, o que só me gerou antipatia não apenas pelos livros dele como de resto de todos os outros autores brasileiros do século XIX. Esse livro, entretanto, serviu para que pudesse acabar com o preconceito que tinha. Muito boa história e narrativa. A edição também ajuda com as notas de rodapé explicando as particularidades de expressões e palavras da época. Enfim, vale muito a pena.\" '),
(13, 85, 'Ana Corali', 'De acordo com o usuário Jonathan Rissardo da plataforma \'Amazon\' sobre o livro Memórias Póstumas de Brás Cubas: <br><br> \"Memórias Póstumas de Brás Cubas é um livro sensacional. Havia tentado ler este livro com 15 anos de idade, não consegui pelas muitas palavras difíceis e a necessidade de um dicionário ao lado. Hoje, 14 anos depois, tentei novamente a leitura, por algumas vezes tive que recorrer ao Google para identificar o significado de algumas palavras e surpreendi-me com esta obra prima da literatura brasileira ! Fenomenal ! Nesta edição, no rodapé da página existem diversas explicações de termos utilizados, o que também facilita a compreensão. Indico a todos como uma leitura para a vida!\" '),
(14, 80, 'Ana Corali', 'De acordo com o usuário Isadora Souza da plataforma \'Amazon\' sobre o livro \'O livro dos humanos: A história de como nos tornamos quem somos\': <br><br> \"Leitura muito agradável e fácil de ter, o autor é muito didático e explica muito bem o que quer transmitir no livro. Excelente leitura para quem tem curiosidades sobre nossa evolução e biologia e como (e se) nos diferenciamos dos outros animais na natureza.\r\nAs partes em que ele discorre sobre a importância das ferramentas e fala em nossa evolução, foram as minha preferidas num livro todo incrível.\r\nRecomendo demais!!!!\" ');

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
(16, 'Ana Coraline', 'flower.ana@gmail.com', 'cienciasexatas', 'O Mundo Numa Casca De Nozes'),
(17, 'Joao Vitor', 'joao@gmail.com', 'autoajuda', 'Como fazer amigos e influenciar pessoas');

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
(64, 'adm', 'Ana Corali', 'flower.ana@gmail.com', 'e8ef061c45fbc6b42c1512e7eead4cb7'),
(65, '', 'Jack Lion', 'extreme.boss@gmail.com', 'f5307bfce937fe1e76fb7153336ffffa'),
(66, '', 'PaulaMaria', 'ppp@gmail.com', '400a4770ed610c5cdf4b1b5edf072c9e'),
(67, '', 'Mat_Felix', 'felix@gmail.com', '1160296c598ddf3b6946b7a122770b0b'),
(70, '', 'brenda__pr', 'saravalleprocopio@gmail.com', 'a5903a3804db0059520ae9378c523112'),
(71, '', 'Xxxxxx', 'xxxxxx@gmail.com', '0b8aaf39ad13ecf9c2c74f7d61489808'),
(72, '', 'Usuario1', 'kaike@gmail.com', '0b8aaf39ad13ecf9c2c74f7d61489808'),
(73, '', 'MathuesFel', 'mf@gmail.com', '1160296c598ddf3b6946b7a122770b0b'),
(74, '', 'JoaoVitor', 'joao@gmail.com', '1dd66aeb46e9437a92d81d2b08f6709c'),
(75, '', 'Isabelle S', 'Isabelle@gmail.com', '797fc5b2dc1eea31fdaecd040dc3df32');

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
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `resenhas`
--
ALTER TABLE `resenhas`
  MODIFY `id_resenha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `sugestoes_livros`
--
ALTER TABLE `sugestoes_livros`
  MODIFY `id_sugestoes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
