-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Out-2017 às 16:10
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdusuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`idcategoria` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nome`) VALUES
(120, 'categoria 0'),(121, 'categoria 1'),(122, 'categoria 2'),(123, 'categoria 3'),(124, 'categoria 4'),(125, 'categoria 5'),(126, 'categoria 6'),(127, 'categoria 7'),(128, 'categoria 8'),(129, 'categoria 9'),(130, 'categoria 10'),(131, 'categoria 11'),(132, 'categoria 12'),
(133, 'categoria 13'),(134, 'categoria 14'),(135, 'categoria 15'),(136, 'categoria 16'),(137, 'categoria 17'),(138, 'categoria 18'),(139, 'categoria 19'),(140, 'categoria 20'),(141, 'categoria 21'),(142, 'categoria 22'),(143, 'categoria 23'),(144, 'categoria 24'),(145, 'categoria 25'),(146, 'categoria 26'),(147, 'categoria 27'),(148, 'categoria 28'),(149, 'categoria 29'),(150, 'categoria 30'),(151, 'categoria 31'),(152, 'categoria 32'),(153, 'categoria 33'),(154, 'categoria 34'),(155, 'categoria 35'),(156, 'categoria 36'),(157, 'categoria 37'),(158, 'categoria 38'),(159, 'categoria 39'),(160, 'categoria 40'),(161, 'categoria 41'),(162, 'categoria 42'),(163, 'categoria 43'),(164, 'categoria 44'),(165, 'categoria 45'),(166, 'categoria 46'),(167, 'categoria 47'),(168, 'categoria 48'),
(169, 'categoria 49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`idcategoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=171;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
