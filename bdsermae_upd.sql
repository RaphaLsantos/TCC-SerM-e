-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2023 às 09:23
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdsermae_upd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacao`
--

CREATE TABLE `tbpublicacao` (
  `idPublicacao` int(11) NOT NULL,
  `legendaPublicacao` text NOT NULL,
  `imgPublicacao` text NOT NULL,
  `dataPublicacao` datetime NOT NULL,
  `numCurtidasPublicacao` int(11) NOT NULL,
  `numCompartPublicacao` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbpublicacao`
--

INSERT INTO `tbpublicacao` (`idPublicacao`, `legendaPublicacao`, `imgPublicacao`, `dataPublicacao`, `numCurtidasPublicacao`, `numCompartPublicacao`, `idAdmin`, `idUser`) VALUES
(7, 'Meus filhos são maravilhosos...', '6539e172457cdpost-1.jpeg', '2023-10-26 00:48:02', 0, 0, 0, 8),
(8, 'lindios', '6539e507b4363post-4.png', '2023-10-26 01:03:19', 0, 0, 0, 8),
(9, 'Gata', '6539ea6ae1c94post-4.png', '2023-10-26 01:26:18', 0, 0, 0, 6),
(10, 'kkk', '6539eabe740e6post-2.png', '2023-10-26 01:27:42', 0, 0, 0, 2),
(11, 'Minha filha dodói da cabeça kk', '653a1041842bcpost-6.png', '2023-10-26 04:07:45', 0, 0, 0, 8),
(12, '', '653a108a3209365282cc4a5d24Perfil.png', '2023-10-26 04:08:58', 0, 0, 0, 6),
(13, '', '653a10ce1514d65357550cb95f20200429130419108238i.png', '2023-10-26 04:10:06', 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `apelidoUsuario` varchar(30) DEFAULT NULL,
  `emailUsuario` varchar(125) NOT NULL,
  `telefoneUsuario` varchar(22) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL,
  `bioUsuario` varchar(125) NOT NULL DEFAULT 'Olá, eu sou novo no SerMãe!',
  `nascUsuario` date NOT NULL,
  `fotoUsuario` text NOT NULL,
  `capaUsuario` text DEFAULT 'capaPadrão.jpg',
  `statusConta` int(10) NOT NULL DEFAULT 1,
  `nivelConta` int(10) NOT NULL DEFAULT 1,
  `tipoConta` int(10) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `apelidoUsuario`, `emailUsuario`, `telefoneUsuario`, `senhaUsuario`, `bioUsuario`, `nascUsuario`, `fotoUsuario`, `capaUsuario`, `statusConta`, `nivelConta`, `tipoConta`) VALUES
(1, 'Vania de Santis', '@Cuidado6539d89aafc5d', 'vania.escoteira@gmail.com', '11953271031', '$2y$10$TU5bAK8eGbNaKowcFQCXueMKTkFhtfRLRcgQf0mqFC8vc413HJnse', 'Olá, eu sou novo no SerMãe!', '2000-11-10', '6539d8a153ff8Captura de tela 2023-10-12 223120.png', 'capaPadrão.jpg', 1, 1, 2),
(2, 'Neusa Cabral', '@Laço6539d999ce04f', 'neusa@gmail.com', '11948881078', '$2y$10$RqHEQ2KwgNN5F/g2PIT7ROPy5ZjAu16grQE5VY/30r/fcZLG09sVK', 'Olá, eu sou novo no SerMãe!', '2000-11-10', '6539d99f574eaCaptura de tela 2023-10-12 210150.png', 'capaPadrão.jpg', 1, 1, 3),
(4, 'Antonio Junior', '@Esperança6539da7e6f49c', 'inocenciopedro200@gmail.com', '(11) 95327-1031', '$2y$10$tpO6dI3e4r6KlWNBN5jUMe2ITI65ZZPt1U03dv/uH50B6QmlBagAy', 'Olá, eu sou novo no SerMãe!', '2012-10-20', '6539da81bf760WhatsApp Image 2023-10-10 at 23.44.33.jpeg', 'capaPadrão.jpg', 1, 1, 4),
(6, 'Vitor Pinto', '@Alegria6539dcefd9be1', 'inocencio@gmail.com', '(11) 94888-1078', '$2y$10$kjIltJiHs6I3awce0ivr3ODNjj8u2mXypzUP6gdu7r4zJkjO0yfUS', 'Olá, eu sou novo no SerMãe!', '2000-10-20', '6539dcf51de3dlogo-horizontal-colorido.png', 'capaPadrão.jpg', 1, 1, 1),
(8, 'Virginia Fonseca', '@Alegria6539e1209b4b2', 'virginia@gmail.com', '1199999999', '$2y$10$GcKuBI4xwHWMw5KqwXEieuxc9ZwIqmlgPh8X3/Xkx78AVb2vHYV8.', 'Olá, eu sou novo no SerMãe!', '2000-11-10', '6539e12390c53foto-perfil.png', 'capaPadrão.jpg', 1, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD PRIMARY KEY (`idPublicacao`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `unique_emailUsuario` (`emailUsuario`),
  ADD UNIQUE KEY `unique_senhaUsuario` (`senhaUsuario`),
  ADD UNIQUE KEY `unique_telefoneUsuario` (`telefoneUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
