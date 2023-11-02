-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/11/2023 às 12:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `tbtipoperfil`
--

CREATE TABLE `tbtipoperfil` (
  `idTipo` int(11) NOT NULL,
  `TipoConta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtipoperfil`
--

INSERT INTO `tbtipoperfil` (`idTipo`, `TipoConta`) VALUES
(1, 'Mãe Convencional '),
(2, 'Gestante'),
(3, 'Tentante'),
(4, 'Mãe Solo'),
(5, 'Nenhum dos anteriores');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
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
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbtipoperfil`
--
ALTER TABLE `tbtipoperfil`
  ADD PRIMARY KEY (`idTipo`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `unique_emailUsuario` (`emailUsuario`),
  ADD UNIQUE KEY `unique_senhaUsuario` (`senhaUsuario`),
  ADD UNIQUE KEY `unique_telefoneUsuario` (`telefoneUsuario`),
  ADD KEY `tipoConta` (`tipoConta`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbtipoperfil`
--
ALTER TABLE `tbtipoperfil`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD CONSTRAINT `tbusuario_ibfk_1` FOREIGN KEY (`tipoConta`) REFERENCES `tbtipoperfil` (`idTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
