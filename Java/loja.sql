-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2018 às 19:27
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CATEGORIA_CODIGO` int(10) UNSIGNED NOT NULL,
  `CATEGORIA_NOME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `PAGAMENTO_CODIGO` int(10) UNSIGNED NOT NULL,
  `PAGAMENTO_NOME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`PAGAMENTO_CODIGO`, `PAGAMENTO_NOME`) VALUES
(4, 'Boleto'),
(1, 'Grátis'),
(5, 'MoIp'),
(2, 'Pagseguro'),
(3, 'Paypal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `PRODUTO_CODIGO` int(10) UNSIGNED NOT NULL,
  `PRODUTO_CATEGORIA_CODIGO` int(10) UNSIGNED NOT NULL,
  `PRODUTO_NOME` varchar(100) NOT NULL,
  `PRODUTO_IMAGEM` varchar(70) DEFAULT NULL,
  `PRODUTO_PRECO` float NOT NULL,
  `PRODUTO_QUANTIDADE` tinyint(4) NOT NULL,
  `PRODUTO_DESCRICAO` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `USUARIO_CODIGO` int(10) UNSIGNED NOT NULL,
  `USUARIO_EMAIL` varchar(100) NOT NULL,
  `USUARIO_SENHA` varchar(70) NOT NULL,
  `USUARIO_NOME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`USUARIO_CODIGO`, `USUARIO_EMAIL`, `USUARIO_SENHA`, `USUARIO_NOME`) VALUES
(35, '345435', '4e0dd9c76902b1bfc5c7b3bb4b1db92', 'asas'),
(36, '345', 'c0b3da4ac402bd86191d959be081114', '345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `VENDA_CODIGO` int(10) UNSIGNED NOT NULL,
  `VENDA_PRODUTO_CODIGO` int(10) UNSIGNED NOT NULL,
  `VENDA_QUANTIDADE` tinyint(4) NOT NULL,
  `VENDA_ENDERECO` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `VENDA_TOTAL` float NOT NULL,
  `VENDA_USUARIO_CODIGO` int(10) UNSIGNED NOT NULL,
  `VENDA_PAGAMENTO_CODIGO` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CATEGORIA_CODIGO`),
  ADD UNIQUE KEY `CATEGORIA_CODIGO_UNIQUE` (`CATEGORIA_CODIGO`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`PAGAMENTO_CODIGO`),
  ADD UNIQUE KEY `PAGAMENTO_CODIGO_UNIQUE` (`PAGAMENTO_CODIGO`),
  ADD UNIQUE KEY `PAGAMENTO_NOME_UNIQUE` (`PAGAMENTO_NOME`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`PRODUTO_CODIGO`),
  ADD UNIQUE KEY `PRODUTO_CODIGO_UNIQUE` (`PRODUTO_CODIGO`),
  ADD UNIQUE KEY `PRODUTO_IMAGEM_UNIQUE` (`PRODUTO_IMAGEM`),
  ADD KEY `fk_produtos_categorias_idx` (`PRODUTO_CATEGORIA_CODIGO`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USUARIO_CODIGO`),
  ADD UNIQUE KEY `USUARIO_EMAIL_UNIQUE` (`USUARIO_EMAIL`),
  ADD UNIQUE KEY `USUARIO_CODIGO_UNIQUE` (`USUARIO_CODIGO`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`VENDA_CODIGO`),
  ADD UNIQUE KEY `VENDA_CODIGO_UNIQUE` (`VENDA_CODIGO`),
  ADD KEY `fk_vendas_produtos1_idx` (`VENDA_PRODUTO_CODIGO`),
  ADD KEY `fk_vendas_usuarios1_idx` (`VENDA_USUARIO_CODIGO`),
  ADD KEY `fk_vendas_pagamentos1_idx` (`VENDA_PAGAMENTO_CODIGO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CATEGORIA_CODIGO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `PAGAMENTO_CODIGO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `PRODUTO_CODIGO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USUARIO_CODIGO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `VENDA_CODIGO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_produtos_categorias` FOREIGN KEY (`PRODUTO_CATEGORIA_CODIGO`) REFERENCES `categorias` (`CATEGORIA_CODIGO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_vendas_pagamentos1` FOREIGN KEY (`VENDA_PAGAMENTO_CODIGO`) REFERENCES `pagamentos` (`PAGAMENTO_CODIGO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_produtos1` FOREIGN KEY (`VENDA_PRODUTO_CODIGO`) REFERENCES `produtos` (`PRODUTO_CODIGO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vendas_usuarios1` FOREIGN KEY (`VENDA_USUARIO_CODIGO`) REFERENCES `usuarios` (`USUARIO_CODIGO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
