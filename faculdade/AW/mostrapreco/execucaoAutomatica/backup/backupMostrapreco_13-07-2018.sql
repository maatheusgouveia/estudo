-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: u135429050_mp
-- ------------------------------------------------------
-- Server version 	5.5.5-10.1.29-MariaDB
-- Date: Fri, 13 Jul 2018 18:44:06 +0200

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alteracoesanuncio`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alteracoesanuncio` (
  `AlteracaoAnuncio` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idAnuncio` int(11) NOT NULL,
  `Tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AlteracaoAnuncio`),
  KEY `fk_Usuarios_has_Anuncios_Anuncios1_idx` (`idAnuncio`),
  KEY `fk_Usuarios_has_Anuncios_Usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_Usuarios_has_Anuncios_Anuncios1` FOREIGN KEY (`idAnuncio`) REFERENCES `anuncios` (`idAnuncio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuarios_has_Anuncios_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alteracoesanuncio`
--

LOCK TABLES `alteracoesanuncio` WRITE;
/*!40000 ALTER TABLE `alteracoesanuncio` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `alteracoesanuncio` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `anuncios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anuncios` (
  `idAnuncio` int(11) NOT NULL AUTO_INCREMENT,
  `idLoja` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `Ativado` tinyint(4) DEFAULT NULL,
  `DescricaoAnuncio` varchar(255) DEFAULT NULL,
  `Preco` float NOT NULL,
  `Desconto` float DEFAULT '0',
  `ValidoDe` date NOT NULL,
  `ValidoAte` date NOT NULL,
  PRIMARY KEY (`idAnuncio`),
  KEY `fk_Lojas_has_Produtos_Produtos1_idx` (`idProduto`),
  KEY `fk_Lojas_has_Produtos_Lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_Lojas_has_Produtos_Lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Lojas_has_Produtos_Produtos1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `anuncios` VALUES (3,37,5,NULL,'',4.339,0.2,'2018-05-10','2018-07-31'),(4,38,7,NULL,'',4.009,0.1,'2018-05-17','2018-07-31'),(9,38,3,NULL,'',5,0,'2018-05-17','2018-07-31'),(15,38,3,NULL,'',5,0.5,'2018-05-17','2018-07-31'),(17,38,3,NULL,'teste',4,2,'2018-05-17','2018-06-02'),(19,37,4,NULL,'aaaaaaaaaaaaaaa',2.999,0,'2018-07-09','2018-08-04');
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `avaliacao`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacao` (
  `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  `Nota` int(5) NOT NULL,
  `DataHota` datetime NOT NULL,
  PRIMARY KEY (`idAvaliacao`),
  KEY `fk_PessoasFisica_has_Lojas_Lojas3_idx` (`idLoja`),
  KEY `fk_PessoasFisica_has_Lojas_PessoasFisica3_idx` (`idPessoa`),
  CONSTRAINT `fk_PessoasFisica_has_Lojas_Lojas3` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PessoasFisica_has_Lojas_PessoasFisica3` FOREIGN KEY (`idPessoa`) REFERENCES `pessoafisica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao`
--

LOCK TABLES `avaliacao` WRITE;
/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `avaliacao` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `caracteristicas`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caracteristicas` (
  `idCaracteristica` int(11) NOT NULL AUTO_INCREMENT,
  `idSubCategoria` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  PRIMARY KEY (`idCaracteristica`),
  KEY `fk_Caracteristicas_SubCategorias1_idx` (`idSubCategoria`),
  CONSTRAINT `fk_Caracteristicas_SubCategorias1` FOREIGN KEY (`idSubCategoria`) REFERENCES `subcategorias` (`idSubCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristicas`
--

LOCK TABLES `caracteristicas` WRITE;
/*!40000 ALTER TABLE `caracteristicas` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `caracteristicas` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `caracteristicasprodutos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caracteristicasprodutos` (
  `idCaracteristica` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `Valor` varchar(20) NOT NULL,
  PRIMARY KEY (`idCaracteristica`,`idProduto`),
  KEY `fk_Caracteristicas_has_Produtos_Produtos1_idx` (`idProduto`),
  KEY `fk_Caracteristicas_has_Produtos_Caracteristicas1_idx` (`idCaracteristica`),
  CONSTRAINT `fk_Caracteristicas_has_Produtos_Caracteristicas1` FOREIGN KEY (`idCaracteristica`) REFERENCES `caracteristicas` (`idCaracteristica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Caracteristicas_has_Produtos_Produtos1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristicasprodutos`
--

LOCK TABLES `caracteristicasprodutos` WRITE;
/*!40000 ALTER TABLE `caracteristicasprodutos` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `caracteristicasprodutos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `categorias`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NomeCategoria` varchar(20) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `categorias` VALUES (1,'Alimentos'),(2,'Bebidas'),(3,'Limpeza'),(4,'Higiene Pessoal'),(7,'Perfumaria'),(10,'Combustíveis');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `comentarios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  `DataComentario` datetime NOT NULL,
  `ConteudoComentario` varchar(255) NOT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `fk_PessoasFisica_has_Lojas_Lojas1_idx` (`idLoja`),
  KEY `fk_PessoasFisica_has_Lojas_PessoasFisica1_idx` (`idPessoa`),
  CONSTRAINT `fk_PessoasFisica_has_Lojas_Lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PessoasFisica_has_Lojas_PessoasFisica1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoafisica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `comentarios` VALUES (39,31,37,'2018-05-18 15:18:14','a'),(40,31,37,'2018-05-18 15:18:58','s'),(41,31,37,'2018-05-18 15:21:50','a');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `comentariosdenunciados`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentariosdenunciados` (
  `idComentarioDenunciado` int(11) NOT NULL AUTO_INCREMENT,
  `idComentario` int(11) NOT NULL,
  `DataDenuncia` datetime DEFAULT CURRENT_TIMESTAMP,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idComentarioDenunciado`),
  KEY `fk_ComentariosDenunciados_Comentarios1_idx` (`idComentario`),
  KEY `fk_ComentariosDenunciados_Usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_ComentariosDenunciados_Comentarios1` FOREIGN KEY (`idComentario`) REFERENCES `comentarios` (`idComentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ComentariosDenunciados_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentariosdenunciados`
--

LOCK TABLES `comentariosdenunciados` WRITE;
/*!40000 ALTER TABLE `comentariosdenunciados` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `comentariosdenunciados` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `comentariosofensivos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentariosofensivos` (
  `idComentarioOfensivo` int(11) NOT NULL AUTO_INCREMENT,
  `ConteudoOfensivo` varchar(255) NOT NULL,
  PRIMARY KEY (`idComentarioOfensivo`),
  UNIQUE KEY `idComentarioOfensivo_UNIQUE` (`idComentarioOfensivo`),
  UNIQUE KEY `comentario_UNIQUE` (`ConteudoOfensivo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentariosofensivos`
--

LOCK TABLES `comentariosofensivos` WRITE;
/*!40000 ALTER TABLE `comentariosofensivos` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `comentariosofensivos` VALUES (2,'Seu viadinho'),(1,'Viado');
/*!40000 ALTER TABLE `comentariosofensivos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `emails`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `idEmail` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `TipoEmail` varchar(45) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`idEmail`),
  UNIQUE KEY `email_UNIQUE` (`Email`),
  KEY `fk_Emails_Pessoas1_idx` (`idPessoa`),
  CONSTRAINT `fk_Emails_Pessoas1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `emails` VALUES (2,26,'Login','matheus_oficina@hotmail.com'),(3,27,'Login','maahdiiasoficial@gmail.com'),(4,28,'Login','contato.mvtech@hotmail.com'),(5,29,'Login','teste@teste'),(7,31,'Login','matheus_guitarplayer@hotmail.com'),(8,32,'Login','matheeusguitarplayer@gmail.com'),(9,35,'Login','teste@teste.com'),(10,38,'Login','testeHash@hash'),(13,41,'Login','teste123@testeultimo');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `facilidades`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facilidades` (
  `idFacilidade` int(11) NOT NULL AUTO_INCREMENT,
  `NomeFacilidade` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idFacilidade`),
  UNIQUE KEY `idCortesia_UNIQUE` (`idFacilidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilidades`
--

LOCK TABLES `facilidades` WRITE;
/*!40000 ALTER TABLE `facilidades` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `facilidades` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `facilidadesdisponiveis`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facilidadesdisponiveis` (
  `idFacilidadeDisponivel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idLoja` int(11) NOT NULL,
  `idFacilidade` int(11) NOT NULL,
  PRIMARY KEY (`idFacilidadeDisponivel`),
  UNIQUE KEY `idcortesiasloja_UNIQUE` (`idFacilidadeDisponivel`),
  KEY `fk_cortesiasloja_lojas1_idx` (`idLoja`),
  KEY `fk_facilidadesdisponiveis_facilidades1_idx` (`idFacilidade`),
  CONSTRAINT `fk_cortesiasloja_lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_facilidadesdisponiveis_facilidades1` FOREIGN KEY (`idFacilidade`) REFERENCES `facilidades` (`idFacilidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilidadesdisponiveis`
--

LOCK TABLES `facilidadesdisponiveis` WRITE;
/*!40000 ALTER TABLE `facilidadesdisponiveis` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `facilidadesdisponiveis` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `favoritos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favoritos` (
  `idPessoa` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  `DataFavorito` datetime NOT NULL,
  PRIMARY KEY (`idPessoa`,`idLoja`),
  KEY `fk_PessoasFisica_has_Lojas_Lojas2_idx` (`idLoja`),
  KEY `fk_PessoasFisica_has_Lojas_PessoasFisica2_idx` (`idPessoa`),
  CONSTRAINT `fk_PessoasFisica_has_Lojas_Lojas2` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PessoasFisica_has_Lojas_PessoasFisica2` FOREIGN KEY (`idPessoa`) REFERENCES `pessoafisica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoritos`
--

LOCK TABLES `favoritos` WRITE;
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `favoritos` VALUES (31,37,'2018-05-18 00:57:41'),(31,38,'2018-07-04 20:38:09'),(31,39,'2018-07-04 20:38:10'),(31,40,'2018-07-04 20:38:11');
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `formasaceitas`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formasaceitas` (
  `idFormasAceitas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFormaDePagamento` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  PRIMARY KEY (`idFormasAceitas`),
  UNIQUE KEY `idFormasAceitas_UNIQUE` (`idFormasAceitas`),
  KEY `fk_formasaceitas_formasdepagamento1_idx` (`idFormaDePagamento`),
  KEY `fk_formasaceitas_lojas1_idx` (`idLoja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formasaceitas`
--

LOCK TABLES `formasaceitas` WRITE;
/*!40000 ALTER TABLE `formasaceitas` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `formasaceitas` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `formasdepagamento`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formasdepagamento` (
  `idFormaDePagamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NomeFormaPagamento` varchar(45) NOT NULL,
  PRIMARY KEY (`idFormaDePagamento`),
  UNIQUE KEY `idFormasDePagamento_UNIQUE` (`idFormaDePagamento`),
  UNIQUE KEY `NomeFormaPagamento_UNIQUE` (`NomeFormaPagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formasdepagamento`
--

LOCK TABLES `formasdepagamento` WRITE;
/*!40000 ALTER TABLE `formasdepagamento` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `formasdepagamento` VALUES (1,'À Vista'),(2,'Cartão de crédito'),(3,'Cartão de Débito'),(4,'Cheque');
/*!40000 ALTER TABLE `formasdepagamento` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `funcionarios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  `Ativo` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idFuncionario`,`idUsuario`),
  KEY `fk_Usuarios_has_Lojas_Lojas1_idx` (`idLoja`),
  KEY `fk_Usuarios_has_Lojas_Usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_Usuarios_has_Lojas_Lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuarios_has_Lojas_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `horariofuncionamento`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horariofuncionamento` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `HoraAbertura` time NOT NULL DEFAULT '00:00:00',
  `HoraFechamento` time NOT NULL DEFAULT '00:00:00',
  `DiaSemana` varchar(45) NOT NULL,
  `idLoja` int(11) NOT NULL,
  PRIMARY KEY (`idHorario`),
  UNIQUE KEY `idInfoAdicional_UNIQUE` (`idHorario`),
  KEY `fk_informacoesadicionaislojas_lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_informacoesadicionaislojas_lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horariofuncionamento`
--

LOCK TABLES `horariofuncionamento` WRITE;
/*!40000 ALTER TABLE `horariofuncionamento` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `horariofuncionamento` VALUES (180,'09:00:00','18:00:00','Segunda-Feira',37),(181,'09:00:00','18:00:00','Terça-Feira',37),(182,'09:00:00','18:00:00','Quarta-Feira',37),(183,'09:00:00','18:00:00','Quinta-Feira',37),(184,'09:00:00','18:00:00','Sexta-Feira',37),(185,'09:00:00','18:00:00','Sábado',37),(186,'09:00:00','18:00:00','Domingo',37),(187,'09:00:00','22:00:00','Segunda-Feira',38),(188,'09:00:00','22:00:00','Terça-Feira',38),(189,'09:00:00','22:00:00','Quarta-Feira',38),(190,'09:00:00','22:00:00','Quinta-Feira',38),(191,'09:00:00','22:00:00','Sexta-Feira',38),(192,'09:00:00','22:00:00','Sábado',38),(193,'09:00:00','22:00:00','Domingo',38),(194,'00:00:00','00:00:00','Segunda-Feira',39),(195,'00:00:00','00:00:00','Terça-Feira',39),(196,'00:00:00','00:00:00','Quarta-Feira',39),(197,'00:00:00','00:00:00','Quinta-Feira',39),(198,'00:00:00','00:00:00','Sexta-Feira',39),(199,'00:00:00','00:00:00','Sábado',39),(200,'00:00:00','00:00:00','Domingo',39),(201,'00:00:00','00:00:00','Segunda-Feira',40),(202,'00:00:00','00:00:00','Terça-Feira',40),(203,'00:00:00','00:00:00','Quarta-Feira',40),(204,'00:00:00','00:00:00','Quinta-Feira',40),(205,'00:00:00','00:00:00','Sexta-Feira',40),(206,'00:00:00','00:00:00','Sábado',40),(207,'00:00:00','00:00:00','Domingo',40);
/*!40000 ALTER TABLE `horariofuncionamento` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `imagensprodutos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagensprodutos` (
  `idImagemProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `idPessoa` int(11) DEFAULT NULL,
  `Caminho` varchar(255) NOT NULL DEFAULT 'padraoProdutos.jpeg',
  `Tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idImagemProduto`),
  KEY `fk_Imagens_Produtos1_idx` (`idProduto`),
  KEY `fk_Imagens_PessoasJuridica1_idx` (`idPessoa`),
  CONSTRAINT `fk_Imagens_PessoasJuridica1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoajuridica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Imagens_Produtos1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagensprodutos`
--

LOCK TABLES `imagensprodutos` WRITE;
/*!40000 ALTER TABLE `imagensprodutos` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `imagensprodutos` VALUES (8,5,28,'1526011332gasolina.jpg',NULL),(9,7,28,'1526531098Diesel-S10.jpg',NULL),(14,3,28,'1526568140coca-cola.jpg',NULL),(15,1,28,'',NULL),(16,1,28,'1526569754sinforoso.jpg',NULL),(17,1,28,'1526569791sinforoso.jpg',NULL),(18,1,28,'1526569809sinforoso.jpg',NULL),(19,4,28,'padraoProdutos.jpeg',NULL);
/*!40000 ALTER TABLE `imagensprodutos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `itensnutri`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itensnutri` (
  `idItemNutri` int(11) NOT NULL AUTO_INCREMENT,
  `NomeItemNutri` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idItemNutri`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itensnutri`
--

LOCK TABLES `itensnutri` WRITE;
/*!40000 ALTER TABLE `itensnutri` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `itensnutri` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `itenstabelasnutri`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itenstabelasnutri` (
  `idTabelaNutri` int(11) NOT NULL,
  `idItemNutri` int(11) NOT NULL,
  `Quantidade` varchar(20) DEFAULT NULL,
  `VD` float DEFAULT NULL,
  PRIMARY KEY (`idTabelaNutri`,`idItemNutri`),
  KEY `fk_TabelasNutris_has_ItensNutri_ItensNutri1_idx` (`idItemNutri`),
  KEY `fk_TabelasNutris_has_ItensNutri_TabelasNutris1_idx` (`idTabelaNutri`),
  CONSTRAINT `fk_TabelasNutris_has_ItensNutri_ItensNutri1` FOREIGN KEY (`idItemNutri`) REFERENCES `itensnutri` (`idItemNutri`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TabelasNutris_has_ItensNutri_TabelasNutris1` FOREIGN KEY (`idTabelaNutri`) REFERENCES `tabelasnutri` (`idTabelaNutri`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itenstabelasnutri`
--

LOCK TABLES `itenstabelasnutri` WRITE;
/*!40000 ALTER TABLE `itenstabelasnutri` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `itenstabelasnutri` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `listascompra`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listascompra` (
  `idListaCompra` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `NomeLista` varchar(45) NOT NULL,
  PRIMARY KEY (`idListaCompra`),
  KEY `fk_ListasCompra_PessoasFisica1_idx` (`idPessoa`),
  CONSTRAINT `fk_ListasCompra_PessoasFisica1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoafisica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listascompra`
--

LOCK TABLES `listascompra` WRITE;
/*!40000 ALTER TABLE `listascompra` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `listascompra` VALUES (1,31,'Compras do Mês'),(2,31,'Compras teste'),(3,31,'testando'),(4,31,'sadds');
/*!40000 ALTER TABLE `listascompra` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `logs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `idLog` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `Acao` varchar(255) NOT NULL,
  `DataHora` datetime NOT NULL,
  PRIMARY KEY (`idLog`),
  KEY `fk_Logs_Usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_Logs_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1017 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (320,14,'Saiu','2018-03-13 01:02:59'),(321,18,'Entrou','2018-03-13 01:13:35'),(322,18,'Entrou','2018-03-13 14:02:21'),(323,18,'Saiu','2018-03-13 14:02:41'),(324,17,'Entrou','2018-03-13 14:02:52'),(325,17,'Adicionou um produto à uma lista','2018-03-13 14:50:36'),(326,17,'Adicionou um produto à uma lista','2018-03-13 15:06:42'),(327,17,'Entrou','2018-03-14 13:34:38'),(328,17,'Entrou','2018-03-20 14:45:12'),(329,17,'Entrou','2018-03-21 10:25:37'),(330,17,'Saiu','2018-03-21 10:27:41'),(331,14,'Entrou','2018-03-21 10:28:03'),(332,14,'Cadastrou uma categoria','2018-03-21 11:03:42'),(333,14,'Cadastrou uma categoria','2018-03-21 13:58:01'),(334,14,'Adicionou Concorrente 1 aos favoritos','2018-03-21 14:27:23'),(335,14,'Adicionou Concorrente 2 aos favoritos','2018-03-21 14:27:30'),(336,14,'Saiu','2018-03-21 14:27:37'),(337,12,'Entrou','2018-03-21 14:27:43'),(338,12,'Adicionou Concorrente 1 aos favoritos','2018-03-21 14:28:10'),(339,12,'Saiu','2018-03-21 14:28:13'),(340,14,'Entrou','2018-03-21 14:28:25'),(341,14,'Saiu','2018-03-21 14:29:12'),(342,14,'Entrou','2018-03-21 14:29:17'),(343,14,'Entrou','2018-03-22 10:48:18'),(344,14,'Cadastrou uma categoria','2018-03-22 10:51:24'),(345,14,'Saiu','2018-03-22 16:16:03'),(346,12,'Entrou','2018-03-22 16:16:11'),(347,12,'Saiu','2018-03-22 16:24:27'),(348,14,'Entrou','2018-03-22 16:24:32'),(349,14,'Entrou','2018-03-23 14:06:37'),(350,23,'Se cadastrou','2018-03-24 14:01:41'),(351,17,'Entrou','2018-03-24 18:33:50'),(352,17,'Entrou','2018-03-25 16:34:44'),(353,17,'Entrou','2018-03-27 10:49:44'),(354,17,'Entrou','2018-03-28 14:13:48'),(355,17,'Saiu','2018-03-28 14:19:52'),(356,14,'Entrou','2018-03-28 14:19:58'),(357,14,'Saiu','2018-03-28 14:20:15'),(358,17,'Entrou','2018-03-28 14:20:20'),(359,17,'Saiu','2018-03-28 14:20:37'),(360,14,'Entrou','2018-03-28 16:06:35'),(361,14,'Entrou','2018-03-29 09:59:21'),(362,14,'Entrou','2018-03-30 11:10:59'),(363,17,'Entrou','2018-03-30 12:34:22'),(364,17,'Adicionou Concorrente 1 aos favoritos','2018-03-30 12:34:30'),(365,17,'Caiu no Dibre','2018-03-30 12:34:34'),(366,17,'Comentou no perfil de Concorrente 1','2018-03-30 12:34:35'),(367,17,'Caiu no Dibre','2018-03-30 12:34:38'),(368,17,'Comentou no perfil de Concorrente 1','2018-03-30 12:34:38'),(369,14,'Entrou','2018-03-30 12:37:53'),(370,14,'Saiu','2018-03-30 13:34:45'),(371,12,'Entrou','2018-03-30 13:34:52'),(372,14,'Entrou','2018-03-30 13:36:31'),(373,12,'Entrou','2018-03-30 13:39:18'),(374,14,'Entrou','2018-04-02 14:09:57'),(375,14,'Cadastrou uma loja','2018-04-02 15:09:59'),(376,14,'Cadastrou uma loja','2018-04-02 15:26:26'),(377,14,'Cadastrou uma loja','2018-04-02 15:30:29'),(378,14,'Cadastrou uma loja','2018-04-02 15:30:40'),(379,14,'Cadastrou uma loja','2018-04-02 15:30:54'),(380,14,'Editou as informações de ','2018-04-02 15:50:43'),(381,14,'Editou as informações de ','2018-04-02 15:50:50'),(382,14,'Saiu','2018-04-02 15:50:54'),(383,17,'Entrou','2018-04-02 15:51:02'),(384,17,'Saiu','2018-04-02 15:51:41'),(385,14,'Entrou','2018-04-02 15:51:48'),(386,14,'Editou as informações de Concorrente 11','2018-04-02 15:52:00'),(387,14,'Editou as informações de Concorrente 1','2018-04-02 15:52:08'),(388,14,'Saiu','2018-04-02 15:52:15'),(389,17,'Entrou','2018-04-02 15:52:20'),(390,17,'Saiu','2018-04-02 15:55:16'),(391,14,'Entrou','2018-04-02 15:55:22'),(392,14,'Saiu','2018-04-02 16:11:29'),(393,17,'Entrou','2018-04-02 16:11:35'),(394,17,'Saiu','2018-04-02 16:11:46'),(395,14,'Entrou','2018-04-02 16:11:54'),(396,14,'Entrou','2018-04-03 10:01:29'),(397,14,'Saiu','2018-04-03 10:12:37'),(398,17,'Entrou','2018-04-03 10:12:44'),(399,17,'Saiu','2018-04-03 10:13:07'),(400,14,'Entrou','2018-04-03 10:13:14'),(401,14,'Removeu Concorrente 2 dos favoritos','2018-04-03 10:24:06'),(402,14,'Adicionou Concorrente 2 aos favoritos','2018-04-03 10:24:08'),(403,14,'Saiu','2018-04-03 10:24:22'),(404,17,'Entrou','2018-04-03 10:24:34'),(405,17,'Adicionou Concorrente 1 aos favoritos','2018-04-03 10:24:40'),(406,17,'Saiu','2018-04-03 10:24:54'),(407,14,'Entrou','2018-04-03 10:24:58'),(408,14,'Editou as informações de Concorrente 11','2018-04-03 10:30:31'),(409,14,'Editou as informações de Concorrente 1','2018-04-03 10:30:40'),(410,14,'Saiu','2018-04-03 10:30:52'),(411,14,'Entrou','2018-04-03 10:32:16'),(412,17,'Entrou','2018-04-03 10:33:02'),(413,17,'Caiu no Dibre','2018-04-03 10:36:10'),(414,17,'Comentou no perfil de Concorrente 1','2018-04-03 10:36:10'),(415,17,'Caiu no Dibre','2018-04-03 10:36:15'),(416,17,'Comentou no perfil de Concorrente 1','2018-04-03 10:36:15'),(417,14,'Cadastrou uma loja','2018-04-03 11:36:41'),(418,14,'Cadastrou uma categoria','2018-04-03 14:58:58'),(419,14,'Editou um Anuncio','2018-04-03 15:31:13'),(420,14,'Editou um Anuncio','2018-04-03 15:31:39'),(421,14,'Editou um Anuncio','2018-04-03 15:31:52'),(422,14,'Editou um Anuncio','2018-04-03 15:32:02'),(423,14,'Editou um Anuncio','2018-04-03 15:32:12'),(424,14,'Saiu','2018-04-03 15:50:48'),(425,12,'Entrou','2018-04-03 15:57:20'),(426,12,'Saiu','2018-04-03 16:05:57'),(427,17,'Entrou','2018-04-03 16:06:02'),(428,17,'Criou uma Permissão de Adm','2018-04-03 16:06:27'),(429,14,'Entrou','2018-04-04 09:55:54'),(430,14,'Caiu no Dibre','2018-04-04 09:58:10'),(431,14,'Comentou no perfil de Concorrente 2','2018-04-04 09:58:11'),(432,17,'Entrou','2018-04-04 10:00:29'),(433,17,'Caiu no Dibre','2018-04-04 10:01:49'),(434,17,'Comentou no perfil de Concorrente 2','2018-04-04 10:01:49'),(435,17,'Removeu Concorrente 2 dos favoritos','2018-04-04 10:02:04'),(436,17,'Adicionou Concorrente 2 aos favoritos','2018-04-04 10:02:05'),(437,14,'Entrou','2018-04-04 11:05:47'),(438,12,'Entrou','2018-04-04 11:07:28'),(439,12,'Saiu','2018-04-04 11:07:40'),(440,17,'Entrou','2018-04-04 11:07:45'),(441,17,'Saiu','2018-04-04 11:09:08'),(442,14,'Entrou','2018-04-04 11:09:19'),(443,17,'Entrou','2018-04-05 10:26:02'),(444,17,'Adicionou um produto à uma lista','2018-04-05 10:29:24'),(445,17,'Adicionou um produto à uma lista','2018-04-05 10:30:09'),(446,17,'Adicionou um produto à uma lista','2018-04-05 10:49:36'),(447,17,'Saiu','2018-04-05 14:32:12'),(448,17,'Entrou','2018-04-05 14:38:08'),(449,17,'Entrou','2018-04-06 09:09:55'),(450,17,'Adicionou um produto à uma lista','2018-04-06 10:33:18'),(451,17,'Entrou','2018-04-06 14:34:22'),(452,17,'Entrou','2018-04-09 10:41:42'),(453,17,'Saiu','2018-04-09 11:05:33'),(454,14,'Entrou','2018-04-09 11:05:43'),(455,14,'Cadastrou um Anúncio','2018-04-09 15:17:26'),(456,14,'Cadastrou um Anúncio','2018-04-09 15:19:54'),(457,14,'Cadastrou um Anúncio','2018-04-09 15:22:03'),(458,14,'Cadastrou um Anúncio','2018-04-09 15:22:23'),(459,17,'Entrou','2018-04-12 15:00:31'),(460,17,'Entrou','2018-04-14 14:36:56'),(461,17,'Saiu','2018-04-14 14:37:04'),(462,14,'Entrou','2018-04-14 14:37:58'),(463,14,'Saiu','2018-04-14 14:38:46'),(464,14,'Entrou','2018-04-14 14:38:49'),(465,17,'Entrou','2018-04-17 13:23:10'),(466,17,'Saiu','2018-04-17 13:25:41'),(467,14,'Entrou','2018-04-17 13:25:45'),(468,14,'Cadastrou um Anúncio','2018-04-17 15:59:37'),(469,14,'Cadastrou um Anúncio','2018-04-17 16:04:15'),(470,14,'Cadastrou um Anúncio','2018-04-17 16:05:40'),(471,14,'Cadastrou um Anúncio','2018-04-17 16:21:56'),(472,14,'Cadastrou um Anúncio','2018-04-17 16:29:23'),(473,14,'Excluiu uma anuncio','2018-04-17 16:38:22'),(474,17,'Entrou','2018-04-17 16:59:59'),(475,14,'Entrou','2018-04-18 00:43:22'),(476,14,'Cadastrou um Anúncio','2018-04-18 00:44:11'),(477,14,'Cadastrou um Anúncio','2018-04-18 00:45:34'),(478,14,'Cadastrou um Anúncio','2018-04-18 00:47:25'),(479,14,'Cadastrou um Anúncio','2018-04-18 00:49:27'),(480,14,'Cadastrou um Anúncio','2018-04-18 00:49:58'),(481,14,'Entrou','2018-04-19 01:00:02'),(482,14,'Entrou','2018-04-19 14:28:51'),(483,14,'Saiu','2018-04-19 15:29:22'),(484,17,'Entrou','2018-04-19 15:29:30'),(485,17,'Saiu','2018-04-19 15:42:13'),(486,14,'Entrou','2018-04-19 15:42:19'),(487,14,'Saiu','2018-04-19 15:42:46'),(488,17,'Entrou','2018-04-19 15:42:53'),(489,17,'Removeu Concorrente 2 dos favoritos','2018-04-19 15:42:58'),(490,17,'Adicionou Concorrente 2 aos favoritos','2018-04-19 15:43:00'),(491,17,'Caiu no Dibre','2018-04-19 15:43:08'),(492,17,'Comentou no perfil de Concorrente 2','2018-04-19 15:43:08'),(493,14,'Entrou','2018-04-19 15:44:15'),(494,14,'Entrou','2018-04-20 00:43:33'),(495,14,'Editou um Anuncio','2018-04-20 01:17:23'),(496,14,'Editou um Anuncio','2018-04-20 01:18:41'),(497,14,'Editou um Anuncio','2018-04-20 01:19:12'),(498,14,'Editou um Anuncio','2018-04-20 01:21:34'),(499,14,'Editou um Anuncio','2018-04-20 01:22:06'),(500,14,'Editou um Anuncio','2018-04-20 01:24:55'),(501,14,'Editou um Anuncio','2018-04-20 01:24:56'),(502,14,'Entrou','2018-04-20 13:49:20'),(503,14,'Editou um Anuncio','2018-04-20 13:57:15'),(504,14,'Editou um Anuncio','2018-04-20 14:01:06'),(505,14,'Editou um Anuncio','2018-04-20 14:01:29'),(506,14,'Editou um Anuncio','2018-04-20 14:03:23'),(507,14,'Editou um Anuncio','2018-04-20 14:03:25'),(508,14,'Editou um Anuncio','2018-04-20 14:03:34'),(509,14,'Editou um Anuncio','2018-04-20 14:03:35'),(510,14,'Editou um Anuncio','2018-04-20 14:03:36'),(511,14,'Editou um Anuncio','2018-04-20 14:03:36'),(512,14,'Editou um Anuncio','2018-04-20 14:03:36'),(513,14,'Editou um Anuncio','2018-04-20 14:14:05'),(514,14,'Editou um Anuncio','2018-04-20 14:17:44'),(515,14,'Editou um Anuncio','2018-04-20 14:42:52'),(516,14,'denunciou um comentario no perfil de Concorrente 2','2018-04-20 14:55:38'),(517,14,'Saiu','2018-04-20 14:55:43'),(520,14,'Entrou','2018-04-20 15:47:12'),(521,17,'Entrou','2018-04-21 00:42:30'),(522,14,'Entrou','2018-04-24 13:44:16'),(523,14,'Editou um Anuncio','2018-04-24 14:00:20'),(524,14,'Editou um Anuncio','2018-04-24 14:00:39'),(525,14,'Editou um Anuncio','2018-04-24 14:01:01'),(526,14,'Entrou','2018-04-25 00:25:59'),(527,14,'Entrou','2018-04-25 10:24:22'),(528,14,'Saiu','2018-04-25 10:59:24'),(529,17,'Entrou','2018-04-25 10:59:31'),(530,17,'Cadastrou uma Pagina','2018-04-25 11:00:02'),(531,17,'Criou uma Permissão de Adm','2018-04-25 11:00:19'),(532,17,'Saiu','2018-04-25 12:29:48'),(533,14,'Entrou','2018-04-25 13:02:29'),(534,14,'Cadastrou uma loja','2018-04-25 13:10:18'),(535,14,'Cadastrou uma loja','2018-04-25 13:22:42'),(536,14,'Entrou','2018-04-26 00:34:25'),(537,14,'Entrou','2018-04-26 12:17:36'),(538,14,'Editou as informações de Concorrente 1','2018-04-26 15:21:51'),(539,14,'Editou as informações de testeH','2018-04-26 15:22:15'),(540,14,'Cadastrou uma loja','2018-04-26 15:48:58'),(541,17,'Entrou','2018-04-26 17:03:05'),(542,14,'Entrou','2018-04-27 00:31:04'),(543,14,'Cadastrou uma loja','2018-04-27 00:55:55'),(544,14,'Cadastrou uma loja','2018-04-27 01:11:02'),(545,14,'Entrou','2018-04-27 12:37:03'),(546,17,'Entrou','2018-05-04 11:34:45'),(547,17,'Entrou','2018-05-04 13:27:47'),(548,17,'Entrou','2018-05-04 13:27:53'),(549,17,'Entrou','2018-05-04 13:27:59'),(550,17,'Entrou','2018-05-04 13:57:53'),(551,17,'Entrou','2018-05-04 14:59:56'),(552,17,'Entrou','2018-05-04 16:39:53'),(553,14,'Entrou','2018-05-07 14:49:52'),(554,17,'Entrou','2018-05-08 01:21:43'),(555,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 01:26:02'),(556,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 01:26:04'),(557,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 01:26:40'),(558,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 01:26:42'),(559,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 01:27:51'),(560,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 01:27:55'),(561,14,'Entrou','2018-05-08 10:39:01'),(562,17,'Entrou','2018-05-08 10:44:09'),(563,17,'Comentou no perfil de Concorrente 1','2018-05-08 10:44:35'),(564,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 10:45:56'),(565,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 10:46:57'),(566,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 10:46:58'),(567,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 10:46:58'),(568,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 10:46:59'),(569,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 10:46:59'),(570,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 10:47:44'),(571,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 10:47:45'),(572,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-08 10:51:10'),(573,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 11:12:12'),(574,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 11:12:12'),(585,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:17:18'),(586,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:17:22'),(587,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:18:00'),(588,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 13:18:02'),(589,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:18:04'),(590,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:19:03'),(591,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:24:58'),(592,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:25:02'),(593,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 13:27:57'),(594,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 13:27:59'),(595,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 14:27:39'),(596,17,'Entrou','2018-05-08 15:17:08'),(597,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 15:17:17'),(598,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 15:18:15'),(599,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 15:18:18'),(600,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 15:18:19'),(601,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 15:20:06'),(602,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 15:20:07'),(603,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 15:20:41'),(604,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 15:20:42'),(605,17,'Adicionou Concorrente 1 aos favoritos','2018-05-08 15:20:43'),(606,17,'Removeu Concorrente 1 dos favoritos','2018-05-08 15:20:43'),(607,17,'Saiu','2018-05-08 15:48:49'),(608,17,'Entrou','2018-05-08 15:50:58'),(609,17,'Entrou','2018-05-09 00:25:34'),(610,17,'Adicionou Concorrente 1 aos favoritos','2018-05-09 00:29:31'),(611,17,'Removeu Concorrente 1 dos favoritos','2018-05-09 00:29:43'),(612,14,'Entrou','2018-05-10 10:38:32'),(613,14,'Cadastrou uma loja','2018-05-10 10:42:25'),(614,14,'Editou as informações de Concorrente 2','2018-05-10 10:42:53'),(615,14,'Editou as informações de Concorrente 2','2018-05-10 10:46:38'),(616,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 10:56:56'),(617,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 10:56:58'),(618,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:00:57'),(619,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 11:00:59'),(620,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:01:00'),(621,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 11:01:01'),(622,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:02:46'),(623,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:02:55'),(624,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:09:10'),(625,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:09:12'),(626,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 11:09:16'),(627,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:09:18'),(628,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 11:09:19'),(629,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:13:00'),(630,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:13:04'),(631,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:13:07'),(632,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:14:33'),(633,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:16:16'),(634,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:16:26'),(635,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:20:17'),(636,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:20:20'),(637,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:20:42'),(638,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:20:43'),(639,14,'Saiu','2018-05-10 11:22:27'),(640,17,'Entrou','2018-05-10 11:22:35'),(641,17,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:22:48'),(642,17,'Removeu Concorrente 1 dos favoritos','2018-05-10 11:22:51'),(643,17,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:22:56'),(644,17,'Removeu Concorrente 2 dos favoritos','2018-05-10 11:22:59'),(645,17,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:23:04'),(646,17,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:23:06'),(647,17,'Removeu Concorrente 1 dos favoritos','2018-05-10 11:26:17'),(648,17,'Removeu Concorrente 2 dos favoritos','2018-05-10 11:26:19'),(649,17,'Adicionou Concorrente 1 aos favoritos','2018-05-10 11:26:30'),(650,17,'Adicionou Concorrente 2 aos favoritos','2018-05-10 11:26:33'),(651,17,'Saiu','2018-05-10 11:26:53'),(652,14,'Entrou','2018-05-10 11:27:09'),(653,14,'Editou as informações de Concorrente 2','2018-05-10 11:51:14'),(654,14,'Editou as informações de Concorrente 2','2018-05-10 11:52:58'),(655,14,'Editou as informações de Concorrente 2','2018-05-10 11:54:54'),(656,14,'Editou as informações de Concorrente 2','2018-05-10 11:56:43'),(657,14,'Editou as informações de Concorrente 2','2018-05-10 12:07:51'),(658,14,'Editou as informações de Concorrente 1','2018-05-10 12:08:37'),(659,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 13:35:10'),(660,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 13:35:19'),(661,14,'Cadastrou um Anúncio','2018-05-10 13:45:58'),(662,14,'Cadastrou um Anúncio','2018-05-10 13:52:39'),(663,14,'Cadastrou um Anúncio','2018-05-10 14:32:16'),(664,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 16:09:07'),(665,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:09:11'),(666,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:10:19'),(667,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:13:50'),(668,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 16:13:53'),(669,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:14:46'),(670,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 16:14:48'),(671,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:15:59'),(672,14,'Adicionou Concorrente 2 aos favoritos','2018-05-10 16:16:01'),(673,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:18:02'),(674,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:18:03'),(675,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:18:41'),(676,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:18:42'),(677,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:18:49'),(678,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:18:50'),(679,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:19:45'),(680,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:19:55'),(681,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:17'),(682,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:19'),(683,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:20'),(684,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:20'),(685,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:21'),(686,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:21'),(687,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:22'),(688,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:22'),(689,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:23'),(690,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:24'),(691,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:25'),(692,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:25'),(693,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:26'),(694,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:27'),(695,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:27'),(696,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:29'),(697,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:43'),(698,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:55'),(699,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:56'),(700,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:57'),(701,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:20:58'),(702,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:20:59'),(703,14,'Removeu Concorrente 1 dos favoritos','2018-05-10 16:21:00'),(704,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:21:02'),(705,14,'Adicionou Concorrente 1 aos favoritos','2018-05-10 16:21:18'),(706,14,'Entrou','2018-05-11 01:01:35'),(707,14,'Editou um Anuncio','2018-05-11 01:02:12'),(708,14,'Entrou','2018-05-11 11:18:14'),(709,14,'Saiu','2018-05-11 14:39:40'),(710,17,'Entrou','2018-05-11 14:39:47'),(711,14,'Entrou','2018-05-12 00:46:44'),(712,14,'Cadastrou links de redes sociais','2018-05-12 01:04:01'),(713,14,'Cadastrou links de redes sociais','2018-05-12 01:15:15'),(714,14,'Entrou','2018-05-12 18:01:33'),(715,14,'Entrou','2018-05-12 19:23:12'),(716,14,'Entrou','2018-05-12 22:31:12'),(717,14,'Cadastrou telefones de contato','2018-05-13 00:12:23'),(718,14,'Entrou','2018-05-14 12:59:23'),(719,14,'Saiu','2018-05-14 13:02:34'),(720,17,'Entrou','2018-05-14 13:02:44'),(721,17,'Saiu','2018-05-14 13:25:28'),(722,17,'Entrou','2018-05-15 15:29:37'),(723,17,'Cadastrou uma Pagina','2018-05-15 15:30:47'),(724,17,'Criou uma Permissão de Adm','2018-05-15 15:31:07'),(725,17,'Entrou','2018-05-16 01:03:58'),(726,17,'Adicionou um produto à uma lista','2018-05-16 01:41:42'),(727,17,'Entrou','2018-05-16 10:54:11'),(728,17,'Adicionou um produto à uma lista','2018-05-16 12:40:24'),(729,17,'Entrou','2018-05-16 15:45:40'),(730,17,'Entrou','2018-05-17 00:56:40'),(731,17,'Saiu','2018-05-17 01:18:10'),(732,14,'Entrou','2018-05-17 01:18:19'),(733,14,'Entrou','2018-05-17 10:31:46'),(734,14,'Editou dados pessoais','2018-05-17 11:28:02'),(735,14,'Cadastrou um Anúncio','2018-05-17 11:36:29'),(736,14,'Editou um Anuncio','2018-05-17 11:38:37'),(737,14,'Editou um Anuncio','2018-05-17 11:38:55'),(738,14,'Editou um Anuncio','2018-05-17 11:42:21'),(739,14,'Cadastrou um Anúncio','2018-05-17 11:50:37'),(740,14,'Cadastrou um Anúncio','2018-05-17 12:10:09'),(741,14,'Saiu','2018-05-17 14:43:46'),(742,14,'Entrou','2018-05-17 14:43:48'),(743,14,'Saiu','2018-05-17 14:45:02'),(744,17,'Entrou','2018-05-17 14:45:11'),(745,17,'Caiu no Dibre','2018-05-17 14:47:57'),(746,17,'Comentou no perfil de Concorrente 1','2018-05-17 14:47:58'),(747,17,'Caiu no Dibre','2018-05-17 14:48:33'),(748,17,'Comentou no perfil de Concorrente 1','2018-05-17 14:48:33'),(749,17,'Caiu no Dibre','2018-05-17 14:48:38'),(750,17,'Comentou no perfil de Concorrente 1','2018-05-17 14:48:38'),(751,17,'Caiu no Dibre','2018-05-17 14:49:13'),(752,17,'Comentou no perfil de Concorrente 1','2018-05-17 14:49:13'),(753,17,'Caiu no Dibre','2018-05-17 14:49:17'),(754,17,'Comentou no perfil de Concorrente 1','2018-05-17 14:49:17'),(755,17,'Saiu','2018-05-17 14:50:30'),(756,14,'Entrou','2018-05-17 14:50:44'),(757,14,'Cadastrou uma loja','2018-05-17 14:53:30'),(758,14,'Editou as informações de teste','2018-05-17 14:59:29'),(759,14,'Editou as informações de teste','2018-05-17 14:59:58'),(760,14,'Editou as informações de teste','2018-05-17 15:03:41'),(761,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:05:43'),(762,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:05:48'),(763,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:05:48'),(764,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:05:57'),(765,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:05:59'),(766,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:06:00'),(767,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:06:00'),(768,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:06:02'),(769,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:06:02'),(770,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:07:47'),(771,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:07:47'),(772,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:07:48'),(773,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:07:49'),(774,14,'Adicionou Concorrente 1 aos favoritos','2018-05-17 15:51:07'),(775,14,'Removeu Concorrente 1 dos favoritos','2018-05-17 15:51:07'),(776,17,'Entrou','2018-05-18 00:54:15'),(777,17,'Removeu Concorrente 1 dos favoritos','2018-05-18 00:54:24'),(778,17,'Removeu Concorrente 2 dos favoritos','2018-05-18 00:54:26'),(779,17,'Adicionou Concorrente 1 aos favoritos','2018-05-18 00:55:00'),(780,17,'Adicionou Concorrente 2 aos favoritos','2018-05-18 00:55:06'),(781,17,'Removeu Concorrente 1 dos favoritos','2018-05-18 00:55:23'),(782,17,'Adicionou Concorrente 1 aos favoritos','2018-05-18 00:57:41'),(783,17,'Removeu Concorrente 2 dos favoritos','2018-05-18 00:57:43'),(784,17,'Entrou','2018-05-18 11:28:35'),(785,17,'Caiu no Dibre','2018-05-18 11:31:32'),(786,17,'Comentou no perfil de Concorrente 2','2018-05-18 11:31:32'),(787,17,'Excluiu um comentario no perfil de Concorrente 2','2018-05-18 11:46:30'),(788,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 11:47:20'),(789,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 11:47:23'),(790,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 11:47:25'),(791,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 11:47:28'),(792,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 11:47:30'),(793,17,'Caiu no Dibre','2018-05-18 11:57:32'),(794,17,'Comentou no perfil de Concorrente 1','2018-05-18 11:57:32'),(795,17,'Caiu no Dibre','2018-05-18 13:02:41'),(796,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:02:42'),(797,17,'Caiu no Dibre','2018-05-18 13:03:52'),(798,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:03:52'),(799,17,'Caiu no Dibre','2018-05-18 13:04:11'),(800,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:04:11'),(801,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:04:18'),(802,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:04:19'),(803,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:04:20'),(804,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:04:21'),(805,17,'Caiu no Dibre','2018-05-18 13:08:17'),(806,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:08:17'),(807,17,'Caiu no Dibre','2018-05-18 13:08:21'),(808,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:08:21'),(809,17,'Caiu no Dibre','2018-05-18 13:10:52'),(810,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:10:52'),(811,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:10:52'),(812,17,'Caiu no Dibre','2018-05-18 13:11:03'),(813,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:11:03'),(814,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:11:03'),(815,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:11:03'),(816,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:11:03'),(817,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:08'),(818,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:14'),(819,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:17'),(820,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:18'),(821,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:19'),(822,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:20'),(823,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:21'),(824,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:13:22'),(825,17,'Caiu no Dibre','2018-05-18 13:20:38'),(826,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:20:38'),(827,17,'Caiu no Dibre','2018-05-18 13:20:49'),(828,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:20:49'),(829,17,'Caiu no Dibre','2018-05-18 13:22:20'),(830,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:22:20'),(831,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:30:00'),(832,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:30:00'),(833,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 13:30:02'),(834,17,'Caiu no Dibre','2018-05-18 13:30:11'),(835,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:30:11'),(836,17,'Caiu no Dibre','2018-05-18 13:34:28'),(837,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:34:28'),(838,17,'Caiu no Dibre','2018-05-18 13:34:30'),(839,17,'Comentou no perfil de Concorrente 1','2018-05-18 13:34:30'),(840,17,'Caiu no Dibre','2018-05-18 15:09:22'),(841,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:09:22'),(842,17,'Caiu no Dibre','2018-05-18 15:09:25'),(843,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:09:25'),(844,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:09:31'),(845,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:09:32'),(846,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:09:33'),(847,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:09:34'),(848,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:09:36'),(849,17,'Caiu no Dibre','2018-05-18 15:09:40'),(850,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:09:40'),(851,17,'Caiu no Dibre','2018-05-18 15:09:42'),(852,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:09:43'),(853,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:10:16'),(854,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:10:17'),(855,17,'Caiu no Dibre','2018-05-18 15:10:22'),(856,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:10:22'),(857,17,'Caiu no Dibre','2018-05-18 15:10:26'),(858,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:10:26'),(859,17,'Caiu no Dibre','2018-05-18 15:10:55'),(860,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:10:55'),(861,17,'Caiu no Dibre','2018-05-18 15:10:59'),(862,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:10:59'),(863,17,'Caiu no Dibre','2018-05-18 15:11:10'),(864,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:11:10'),(865,17,'Caiu no Dibre','2018-05-18 15:11:12'),(866,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:11:12'),(867,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:11:15'),(868,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:11:16'),(869,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:11:16'),(870,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:11:17'),(871,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:11:18'),(872,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:11:19'),(873,17,'Caiu no Dibre','2018-05-18 15:15:30'),(874,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:15:30'),(875,17,'Caiu no Dibre','2018-05-18 15:15:33'),(876,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:15:33'),(877,17,'Caiu no Dibre','2018-05-18 15:16:58'),(878,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:16:59'),(879,17,'Caiu no Dibre','2018-05-18 15:17:03'),(880,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:17:03'),(881,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:17:05'),(882,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:17:06'),(883,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:17:07'),(884,17,'Excluiu um comentario no perfil de Concorrente 1','2018-05-18 15:17:07'),(885,17,'Caiu no Dibre','2018-05-18 15:18:14'),(886,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:18:14'),(887,17,'Caiu no Dibre','2018-05-18 15:18:58'),(888,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:18:58'),(889,17,'Caiu no Dibre','2018-05-18 15:21:50'),(890,17,'Comentou no perfil de Concorrente 1','2018-05-18 15:21:50'),(891,17,'Entrou','2018-05-23 00:29:35'),(892,17,'Entrou','2018-05-30 18:10:37'),(893,17,'Editou dados pessoais','2018-05-30 18:11:58'),(894,17,'Entrou','2018-06-06 22:36:38'),(895,17,'Entrou','2018-06-14 16:02:30'),(896,17,'Entrou','2018-07-04 00:59:03'),(897,17,'Entrou','2018-07-04 13:45:38'),(898,17,'Entrou','2018-07-04 15:51:58'),(899,17,'Saiu','2018-07-04 15:52:33'),(900,17,'Entrou','2018-07-04 18:45:09'),(901,17,'Entrou','2018-07-04 18:45:30'),(902,17,'Saiu','2018-07-04 18:47:59'),(908,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 18:58:22'),(909,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 18:59:31'),(910,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:00:08'),(911,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:00:21'),(912,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:00:58'),(913,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:01:06'),(914,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:01:54'),(915,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:04:14'),(916,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-04 19:04:20'),(917,17,'Entrou','2018-07-04 19:05:57'),(918,17,'Editou dados pessoais','2018-07-04 20:25:23'),(919,17,'Editou dados pessoais','2018-07-04 20:28:21'),(920,17,'Adicionou Concorrente 2 aos favoritos','2018-07-04 20:38:09'),(921,17,'Adicionou teste aos favoritos','2018-07-04 20:38:10'),(922,17,'Adicionou teste aos favoritos','2018-07-04 20:38:11'),(923,17,'Saiu','2018-07-04 21:08:27'),(924,17,'Entrou','2018-07-04 21:08:31'),(925,17,'Entrou','2018-07-04 21:16:12'),(926,17,'Saiu','2018-07-04 21:19:16'),(927,17,'Entrou','2018-07-04 21:19:17'),(928,17,'Se cadastrou','2018-07-04 22:58:08'),(935,24,'Se cadastrou','2018-07-04 23:30:53'),(936,25,'Se cadastrou','2018-07-04 23:33:15'),(937,26,'Se cadastrou','2018-07-04 23:36:41'),(938,27,'Se cadastrou','2018-07-04 23:37:39'),(940,28,'Se cadastrou','2018-07-04 23:39:34'),(941,29,'Se cadastrou','2018-07-04 23:39:53'),(942,30,'Se cadastrou','2018-07-04 23:40:08'),(943,31,'Se cadastrou','2018-07-04 23:40:24'),(944,32,'Se cadastrou','2018-07-04 23:46:24'),(945,17,'Entrou','2018-07-04 23:46:43'),(946,17,'Entrou','2018-07-04 23:54:16'),(947,17,'Entrou','2018-07-04 23:56:12'),(948,17,'Entrou','2018-07-04 23:58:48'),(949,17,'Entrou','2018-07-05 00:00:21'),(950,17,'Entrou','2018-07-05 00:00:50'),(951,17,'Saiu','2018-07-05 00:20:33'),(952,12,'Tentativa de login com senha incorreta no email matheus_oficina@hotmail.com','2018-07-05 00:43:18'),(953,12,'Entrou','2018-07-05 00:44:00'),(954,12,'Saiu','2018-07-05 00:52:45'),(955,14,'Tentativa de login com senha incorreta no email contato.mvtech@hotmail.com','2018-07-05 00:52:52'),(956,12,'Entrou','2018-07-05 00:52:57'),(957,12,'Saiu','2018-07-05 00:53:00'),(958,14,'Tentativa de login com senha incorreta no email contato.mvtech@hotmail.com','2018-07-05 00:53:07'),(959,14,'Código de redefinição de senha enviado','2018-07-05 01:03:33'),(960,17,'Entrou','2018-07-05 14:00:02'),(961,17,'Saiu','2018-07-05 14:18:18'),(962,17,'Código de redefinição de senha enviado','2018-07-05 14:18:37'),(963,18,'Código de redefinição de senha enviado','2018-07-05 14:27:38'),(964,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-05 14:47:00'),(965,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-05 14:47:04'),(966,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-05 14:47:30'),(967,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-05 14:47:34'),(968,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-05 14:59:08'),(969,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-05 14:59:49'),(970,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-06 12:54:14'),(971,17,'Entrou','2018-07-07 11:21:12'),(972,17,'Saiu','2018-07-07 12:26:28'),(973,17,'Código de redefinição de senha enviado','2018-07-07 12:26:45'),(974,17,'Código de redefinição de senha enviado','2018-07-07 12:28:03'),(975,17,'Código de redefinição de senha enviado','2018-07-07 12:28:46'),(976,17,'Código de redefinição de senha enviado','2018-07-07 12:32:26'),(977,17,'Código de redefinição de senha enviado','2018-07-07 12:32:47'),(978,17,'Código de redefinição de senha enviado','2018-07-07 12:34:58'),(979,17,'Código de redefinição de senha enviado','2018-07-07 12:35:10'),(980,17,'Código de redefinição de senha enviado','2018-07-07 12:35:30'),(981,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-07 12:37:09'),(982,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-07 12:43:46'),(983,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-07 12:44:10'),(984,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-07 12:44:14'),(985,17,'Código de redefinição de senha enviado','2018-07-07 12:45:02'),(986,17,'Código de redefinição de senha enviado','2018-07-07 12:46:53'),(987,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-07 12:50:01'),(988,17,'Entrou','2018-07-07 12:54:06'),(989,17,'Entrou','2018-07-07 12:54:50'),(990,17,'Saiu','2018-07-07 12:54:52'),(991,17,'Código de redefinição de senha enviado','2018-07-07 12:55:02'),(992,17,'Entrou','2018-07-07 12:55:46'),(993,17,'Tentativa de login com senha incorreta no email matheus_guitarplayer@hotmail.com','2018-07-07 12:56:06'),(994,17,'Entrou','2018-07-07 12:56:13'),(995,17,'Editou dados pessoais','2018-07-07 15:20:10'),(996,17,'Editou dados pessoais','2018-07-07 15:21:21'),(997,17,'Editou dados pessoais','2018-07-07 15:21:37'),(998,17,'Entrou','2018-07-08 11:48:09'),(999,17,'Saiu','2018-07-08 11:48:29'),(1000,14,'Entrou','2018-07-08 11:48:40'),(1001,14,'Entrou','2018-07-08 17:42:39'),(1002,17,'Entrou','2018-07-09 02:19:12'),(1003,14,'Entrou','2018-07-09 02:23:58'),(1004,14,'Cadastrou um Anúncio','2018-07-09 02:24:49'),(1005,17,'Entrou','2018-07-09 13:19:12'),(1006,17,'Cadastrou uma Pagina','2018-07-09 13:20:06'),(1007,17,'Criou uma Permissão de Adm','2018-07-09 13:20:21'),(1008,17,'Entrou','2018-07-09 16:37:09'),(1009,17,'Entrou','2018-07-09 18:18:04'),(1010,17,'Entrou','2018-07-10 20:23:16'),(1011,17,'Saiu','2018-07-10 20:29:31'),(1012,14,'Entrou','2018-07-10 20:29:38'),(1013,17,'Entrou','2018-07-12 16:04:47'),(1014,17,'Saiu','2018-07-12 16:09:25'),(1015,14,'Entrou','2018-07-12 16:10:06'),(1016,14,'Entrou','2018-07-13 10:55:49');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `lojas`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lojas` (
  `idLoja` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `NomeLoja` varchar(45) NOT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `Logradouro` varchar(45) DEFAULT NULL,
  `Numero` varchar(6) DEFAULT NULL,
  `Cidade` varchar(45) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `Bairro` varchar(45) DEFAULT NULL,
  `ImagemLoja` varchar(255) DEFAULT NULL,
  `TipoLoja` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idLoja`),
  KEY `fk_Lojas_Pessoas1_idx` (`idPessoa`),
  KEY `fk_Lojas_TiposLoja1_idx` (`TipoLoja`),
  CONSTRAINT `fk_Lojas_Pessoas1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoajuridica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Lojas_TiposLoja1` FOREIGN KEY (`TipoLoja`) REFERENCES `tiposloja` (`idTipoLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lojas`
--

LOCK TABLES `lojas` WRITE;
/*!40000 ALTER TABLE `lojas` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `lojas` VALUES (37,28,'Concorrente 1','18701-480','Rua Maneco Dionísio','123','Avaré','SP','Vila Martins II','1525964916dicas_posto_combustivel-770x400.jpg',4),(38,28,'Concorrente 2','18701-480','Rua Maneco Dionísio','2222','Avaré','SP','Vila Martins II','1525964871posto2.jpeg',4),(39,28,'teste','18701-480','Rua Maneco Dionísio','666','Avaré','SP','Vila Martins II','15265802211526532253coca-cola.jpg',1),(40,28,'teste','18701-480','Rua Maneco Dionísio','666','Avaré','SP','Vila Martins II','1526579610sinforoso.jpg',1);
/*!40000 ALTER TABLE `lojas` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `marcas`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `NomeMarca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `marcas` VALUES (1,'Coca - Cola'),(2,'Pepsi'),(3,'Ypê'),(4,'Bombril'),(5,'Friboi'),(6,'Tang'),(7,'Nestlé'),(8,'Shell'),(9,'Petrobrás');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `notificacoes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacoes` (
  `idNotificacao` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `TituloNotificacao` varchar(150) NOT NULL,
  `ConteudoNotificacao` text,
  `Lida` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`idNotificacao`),
  KEY `fk_Notificacoes_Usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_Notificacoes_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacoes`
--

LOCK TABLES `notificacoes` WRITE;
/*!40000 ALTER TABLE `notificacoes` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `notificacoes` VALUES (1,17,'Teste de Notificação','Teste de notificação para o usuário',0);
/*!40000 ALTER TABLE `notificacoes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `paineladministrativo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paineladministrativo` (
  `idPagina` int(11) NOT NULL AUTO_INCREMENT,
  `NomePagina` varchar(50) NOT NULL,
  `NomeExibicaoMenu` varchar(50) NOT NULL,
  PRIMARY KEY (`idPagina`),
  UNIQUE KEY `NomePagina_UNIQUE` (`NomePagina`),
  UNIQUE KEY `idPagina_UNIQUE` (`idPagina`),
  UNIQUE KEY `NomeExibicaoMenu_UNIQUE` (`NomeExibicaoMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paineladministrativo`
--

LOCK TABLES `paineladministrativo` WRITE;
/*!40000 ALTER TABLE `paineladministrativo` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `paineladministrativo` VALUES (1,'permissoes.php','Permissões'),(2,'cadastraAnuncio.php','Cadastrar anúncio'),(3,'cadastraPagina.php','Cadastrar página'),(4,'cadastraProduto.php','Cadastrar produto'),(5,'cadastraCategoria.php','Cadastrar categorias'),(7,'cadastraFuncionario.php','Cadastrar colaboradores'),(8,'cadastraLoja.php','Cadastrar loja'),(9,'cadastraMarca.php','Cadastrar marca'),(11,'cadastraSubCategoria.php','Cadastrar subcategoria'),(12,'controleDeUsuarios.php','Usuários'),(13,'cadastraListaCompras.php','Minhas listas de compras'),(14,'moderacao.php','Moderação'),(15,'logs.php','Logs'),(16,'feedback.php','Feedback'),(17,'perfil.php','Meu perfil'),(18,'favoritos.php','Favoritos'),(19,'cadastraTipoTelefone.php','Tipos de telefone'),(20,'doacao.php','Nos apoie'),(21,'configuracoes.php','Configurações'),(22,'paginaLinks.php','links úteis');
/*!40000 ALTER TABLE `paineladministrativo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `permissoes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissoes` (
  `idPermissao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UsuarioPermissao` varchar(15) NOT NULL,
  `idPagina` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPermissao`),
  UNIQUE KEY `idPermissao_UNIQUE` (`idPermissao`),
  KEY `fk_Permissoes_PainelAdministrativo1_idx` (`idPagina`),
  CONSTRAINT `fk_Permissoes_PainelAdministrativo1` FOREIGN KEY (`idPagina`) REFERENCES `paineladministrativo` (`idPagina`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissoes`
--

LOCK TABLES `permissoes` WRITE;
/*!40000 ALTER TABLE `permissoes` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `permissoes` VALUES (1,'Adm',1),(2,'Organização',2),(3,'Adm',3),(4,'Adm',5),(5,'Adm',15),(6,'Adm',9),(7,'Adm',4),(8,'Adm',12),(10,'Cliente',13),(11,'Organização',7),(12,'Organização',16),(13,'Adm',11),(14,'Adm',17),(15,'Organização',17),(16,'Cliente',17),(17,'Cliente',18),(18,'Adm',18),(19,'Organização',8),(20,'Adm',19),(21,'Adm',13),(22,'Adm',20),(23,'Adm',21),(24,'Adm',22);
/*!40000 ALTER TABLE `permissoes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `pesquisasusuarios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesquisasusuarios` (
  `idPesquisasUsuarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Termo` varchar(100) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `Cidade` varchar(50) DEFAULT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPesquisasUsuarios`),
  UNIQUE KEY `idPesquisasUsuarios_UNIQUE` (`idPesquisasUsuarios`),
  KEY `fk_pesquisasusuarios_usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_pesquisasusuarios_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesquisasusuarios`
--

LOCK TABLES `pesquisasusuarios` WRITE;
/*!40000 ALTER TABLE `pesquisasusuarios` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `pesquisasusuarios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `pessoafisica`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoafisica` (
  `idPessoa` int(11) NOT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`idPessoa`),
  KEY `fk_PessoFisica_Pessoa_idx` (`idPessoa`),
  CONSTRAINT `fk_PessoFisica_Pessoa` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoafisica`
--

LOCK TABLES `pessoafisica` WRITE;
/*!40000 ALTER TABLE `pessoafisica` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pessoafisica` VALUES (23,'463.404.078-62'),(24,'111.111.111-11'),(25,'111.111.111-11'),(26,'111.111.111-11'),(27,'122.222.222-22'),(31,'463.404.078-62'),(32,'111.111.222-22'),(33,'111.111.222-22'),(34,'111.111.222-22'),(35,'111.111.111-11'),(36,'111.111.111-11'),(37,'111.111.111-11'),(38,'121.234.354-35'),(39,'121.234.354-35'),(40,'121.234.354-35'),(41,'798.798.798-78'),(42,'798.798.798-78'),(43,'798.798.798-78'),(44,'798.798.798-78'),(45,'798.798.798-78'),(46,'798.798.798-78');
/*!40000 ALTER TABLE `pessoafisica` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `pessoajuridica`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoajuridica` (
  `idPessoa` int(11) NOT NULL,
  `CNPJ` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`idPessoa`),
  KEY `fk_PessoaJuridica_Pessoa1_idx` (`idPessoa`),
  CONSTRAINT `fk_PessoaJuridica_Pessoa1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoajuridica`
--

LOCK TABLES `pessoajuridica` WRITE;
/*!40000 ALTER TABLE `pessoajuridica` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pessoajuridica` VALUES (28,'11.111.222/2222-22'),(29,'11.234.546/6666-66');
/*!40000 ALTER TABLE `pessoajuridica` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `pessoas`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoas` (
  `idPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `NomeRazaoSocial` varchar(45) DEFAULT NULL,
  `TipoPessoa` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`idPessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `pessoas` VALUES (23,'Matheus Gouveia','CPF'),(24,'Matheus Gouveia','CPF'),(25,'Matheus Gouveia','CPF'),(26,'Matheus Gouveia','CPF'),(27,'Bátima','CPF'),(28,'MV - Tech','CNPJ'),(29,'teste','CNPJ'),(30,'outroteste','CNPJ'),(31,'Matheus Gouveia','CPF'),(32,'Matheus Gmail','CPF'),(33,'Matheus Gmail','CPF'),(34,'Matheus Gmail','CPF'),(35,'teste','CPF'),(36,'teste','CPF'),(37,'teste','CPF'),(38,'testeHash','CPF'),(39,'testeHash','CPF'),(40,'testeHash','CPF'),(41,'ultimoTeste','CPF'),(42,'ultimoTeste','CPF'),(43,'ultimoTeste','CPF'),(44,'ultimoTeste','CPF'),(45,'ultimoTeste','CPF'),(46,'ultimoTeste','CPF');
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `produtos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idSubCategoria` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `NomeProduto` varchar(45) NOT NULL,
  `DescricaoProduto` varchar(255) DEFAULT NULL,
  `QuantidadeProduto` float DEFAULT NULL,
  `idUnidadeMedida` int(11) NOT NULL,
  `CodBarras` varchar(15) DEFAULT NULL,
  `Imposto` float DEFAULT '0',
  PRIMARY KEY (`idProduto`),
  KEY `fk_Produtos_SubCategorias1_idx` (`idSubCategoria`),
  KEY `fk_Produtos_Marcas1_idx` (`idMarca`),
  KEY `fk_Produtos_UnidadesMedida1_idx` (`idUnidadeMedida`),
  CONSTRAINT `fk_Produtos_Marcas1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produtos_SubCategorias1` FOREIGN KEY (`idSubCategoria`) REFERENCES `subcategorias` (`idSubCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produtos_UnidadesMedida1` FOREIGN KEY (`idUnidadeMedida`) REFERENCES `unidadesmedida` (`idUnidadeMedida`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `produtos` VALUES (1,6,7,'Barra de chocolate','barra de chocolate',100,1,'13215641231',0.05),(3,9,1,'Refrigerante de cola','Refrigerante sabor cola',2,2,NULL,0.45),(4,9,4,'Refrigerante de cola','Refrigerante de Cola',2,2,NULL,0.45),(5,10,9,'Gasolina Aditivada','Gasolina Aditivada',1,2,NULL,0.44),(6,10,8,'Etanol','Etanol',1,2,NULL,0.24),(7,10,9,'Gasolina comum','Gasolina comum',1,2,NULL,0.44);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `produtoslista`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtoslista` (
  `idProdutoLista` int(11) NOT NULL AUTO_INCREMENT,
  `idListaCompra` int(11) NOT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `idAnuncio` int(11) NOT NULL,
  PRIMARY KEY (`idProdutoLista`),
  KEY `fk_ListasCompra_has_Anuncios_ListasCompra1_idx` (`idListaCompra`),
  KEY `fk_ProdutosLista_Anuncios1_idx` (`idAnuncio`),
  CONSTRAINT `fk_ListasCompra_has_Anuncios_ListasCompra1` FOREIGN KEY (`idListaCompra`) REFERENCES `listascompra` (`idListaCompra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProdutosLista_Anuncios1` FOREIGN KEY (`idAnuncio`) REFERENCES `anuncios` (`idAnuncio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtoslista`
--

LOCK TABLES `produtoslista` WRITE;
/*!40000 ALTER TABLE `produtoslista` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `produtoslista` VALUES (1,1,21,3),(2,1,1,3);
/*!40000 ALTER TABLE `produtoslista` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `promocoes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocoes` (
  `idPromocao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DiaPromocao` varchar(45) NOT NULL,
  `NomePromocao` varchar(100) NOT NULL,
  `DescricaoPromocao` tinytext,
  `idLoja` int(11) NOT NULL,
  PRIMARY KEY (`idPromocao`),
  UNIQUE KEY `idPromocao_UNIQUE` (`idPromocao`),
  KEY `fk_promocoes_lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_promocoes_lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocoes`
--

LOCK TABLES `promocoes` WRITE;
/*!40000 ALTER TABLE `promocoes` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `promocoes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `rankings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rankings` (
  `idRanking` int(11) NOT NULL AUTO_INCREMENT,
  `idLoja` int(11) NOT NULL,
  `Posicao` int(11) NOT NULL,
  PRIMARY KEY (`idRanking`),
  KEY `fk_Rankings_Lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_Rankings_Lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rankings`
--

LOCK TABLES `rankings` WRITE;
/*!40000 ALTER TABLE `rankings` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `rankings` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `redessociais`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redessociais` (
  `idRedeSocial` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Facebook` text,
  `Twitter` text,
  `Instagram` text,
  `Linkedin` text,
  `Youtube` text,
  `idLoja` int(11) NOT NULL,
  `EmailContato` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idRedeSocial`),
  KEY `fk_redessociais_lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_redessociais_lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redessociais`
--

LOCK TABLES `redessociais` WRITE;
/*!40000 ALTER TABLE `redessociais` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `redessociais` VALUES (6,'www.facebook.com.br','www.twitter.com.br','www.instagram.com.br','www.linkedin.com.br','www.youtube.com.br',37,'matheus_teste@hotmail.com'),(7,'https://www.facebook.com/SmartTechBr/',NULL,NULL,NULL,NULL,38,NULL);
/*!40000 ALTER TABLE `redessociais` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `subcategorias`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategorias` (
  `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL,
  `NomeSubCategoria` varchar(20) NOT NULL,
  PRIMARY KEY (`idSubCategoria`),
  KEY `fk_SubCategorias_Categorias1_idx` (`idCategoria`),
  CONSTRAINT `fk_SubCategorias_Categorias1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategorias`
--

LOCK TABLES `subcategorias` WRITE;
/*!40000 ALTER TABLE `subcategorias` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `subcategorias` VALUES (1,1,'Legumes'),(2,1,'Verduras'),(3,1,'Grãos'),(4,1,'Massas'),(5,1,'Frutas'),(6,1,'Doces'),(7,1,'Carnes'),(8,1,'Ovos'),(9,2,'Refrigerantes'),(10,10,'Combustíveis');
/*!40000 ALTER TABLE `subcategorias` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `tabelasnutri`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabelasnutri` (
  `idTabelaNutri` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `Porcao` varchar(45) NOT NULL,
  PRIMARY KEY (`idTabelaNutri`),
  KEY `fk_TabelasNutris_Produtos1_idx` (`idProduto`),
  CONSTRAINT `fk_TabelasNutris_Produtos1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabelasnutri`
--

LOCK TABLES `tabelasnutri` WRITE;
/*!40000 ALTER TABLE `tabelasnutri` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `tabelasnutri` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `telefones`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefones` (
  `idTelefone` int(11) NOT NULL AUTO_INCREMENT,
  `idLoja` int(11) NOT NULL,
  `FIxo` varchar(15) DEFAULT NULL,
  `Celular` varchar(16) DEFAULT NULL,
  `Whatsapp` varchar(16) DEFAULT NULL,
  `Ramal` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idTelefone`),
  KEY `fk_Telefones_Lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_Telefones_Lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefones`
--

LOCK TABLES `telefones` WRITE;
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `telefones` VALUES (1,37,'(14) 2222-2222','(11) 11111-1111','(22) 22222-2222','');
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `tiposloja`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiposloja` (
  `idTipoLoja` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TipoLoja` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoLoja`),
  UNIQUE KEY `idTiposLoja_UNIQUE` (`idTipoLoja`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposloja`
--

LOCK TABLES `tiposloja` WRITE;
/*!40000 ALTER TABLE `tiposloja` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tiposloja` VALUES (1,'Supermercado'),(2,'Açougue'),(3,'Farmácia'),(4,'Posto de Combustível');
/*!40000 ALTER TABLE `tiposloja` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `ultimalocalizacao`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ultimalocalizacao` (
  `idUsuario` int(11) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_ultimalocalizacao_usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_ultimalocalizacao_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ultimalocalizacao`
--

LOCK TABLES `ultimalocalizacao` WRITE;
/*!40000 ALTER TABLE `ultimalocalizacao` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `ultimalocalizacao` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `unidadesmedida`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidadesmedida` (
  `idUnidadeMedida` int(11) NOT NULL AUTO_INCREMENT,
  `NomeUnidadeMedida` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idUnidadeMedida`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidadesmedida`
--

LOCK TABLES `unidadesmedida` WRITE;
/*!40000 ALTER TABLE `unidadesmedida` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `unidadesmedida` VALUES (1,'Gramas(g)'),(2,'Litros(l)'),(3,'Quilos(Kg)'),(4,'Unidade(Un)'),(5,'Caixa(Cx)'),(6,'Pacote(Pct)');
/*!40000 ALTER TABLE `unidadesmedida` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `usuarios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `TipoUsuario` varchar(20) NOT NULL,
  `DataTermos` datetime DEFAULT NULL,
  `CodAtivacao` varchar(255) DEFAULT NULL,
  `DataAtivacao` datetime DEFAULT NULL,
  `FotoPerfil` varchar(255) DEFAULT 'padraoUsuarios.png',
  `NomeExibicao` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_Pessoa1_idx` (`idPessoa`),
  CONSTRAINT `fk_Usuario_Pessoa1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoas` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `usuarios` VALUES (9,23,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-01-27 00:44:01',NULL,'2018-02-01 22:38:50','padraoUsuarios.png','Senhor Supremo do Universo'),(10,24,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-01-27 00:51:45',NULL,'2018-02-01 22:38:50','padraoUsuarios.png','Matheus Gouveia'),(11,25,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-01-27 00:52:50',NULL,'2018-02-01 22:38:50','padraoUsuarios.png','Matheus Gouveia'),(12,26,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-01-27 00:58:24',NULL,'2018-02-01 22:38:50','padraoUsuarios.png','Matheus Gouveia'),(13,27,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-01-31 14:09:18',NULL,'2018-02-01 22:38:50','padraoUsuarios.png','Bruce Wayne'),(14,28,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Organização','2018-01-31 14:41:05',NULL,'2018-02-01 22:38:50','1526567080sinforoso.jpg','MV - Tech'),(15,29,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Organização','2018-01-31 23:42:06',NULL,'2018-02-01 22:38:50','padraoUsuarios.png','teste'),(17,31,'$2y$10$WHC3nIh0Z.jlIE2HwpAVmeDiJoQPayxFaK7eRRmxhIxXVRsRrAxcq','Adm','2018-02-02 14:54:26',NULL,'2018-02-02 14:55:00','1530987610depositphotos_123013306-stock-illustration-avatar-man-cartoon.jpg','Senhor Supremo do Universo'),(18,32,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-03-13 01:09:48',NULL,'2018-03-13 00:00:00','padraoUsuarios.png','Matheus Gmail 1'),(19,33,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-03-13 01:10:44',NULL,'2018-03-13 00:00:00','padraoUsuarios.png','Matheus Gmail'),(20,34,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-03-13 01:11:49',NULL,'2018-03-13 00:00:00','padraoUsuarios.png','Matheus Gmail'),(21,35,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-03-24 13:55:03','4c780a4b281a1ae8837220abd3ad731a',NULL,'padraoUsuarios.png','123456'),(22,36,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-03-24 13:55:51','21a599a4252192f36a1cf6884c3f6f10',NULL,'padraoUsuarios.png','123456'),(23,37,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-03-24 13:57:21','ae7b5605b971f1d818546d6b5192db36',NULL,'padraoUsuarios.png','123456'),(24,38,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:30:51','b2e97c9b6157779d7bf0e6b41da8c046',NULL,'padraoUsuarios.png','testeHash'),(25,39,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:33:14','71bc27289612afc1e4a4a4d20a41c116',NULL,'padraoUsuarios.png','testeHash'),(26,40,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:36:40','e277f4a01cbfac0004a5f6d37e409251',NULL,'padraoUsuarios.png',''),(27,41,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:37:37','7e5d2b056093d3d22ac35f7cc6b32f19',NULL,'padraoUsuarios.png','UltimoTeste'),(28,42,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:39:33','78539d40cd42391e7371025b98538ff0',NULL,'padraoUsuarios.png','UltimoTeste'),(29,43,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:39:52','9054c7997f73645ec75c1d45df088614',NULL,'padraoUsuarios.png','UltimoTeste'),(30,44,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:40:07','12ed22ab98711da21c0004577c8fac74',NULL,'padraoUsuarios.png','UltimoTeste'),(31,45,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:40:23','6c132279ddb9a1bb512419dcb2c9334f',NULL,'padraoUsuarios.png','UltimoTeste'),(32,46,'$2y$10$HlXTNi5CEGckh0s6dmaNzecIVtjEXsM5Gi.xUMTi2ttygkdYLTEAG','Cliente','2018-07-04 23:46:23','cfbf65911131f44bd766d318d42a8f89',NULL,'padraoUsuarios.png','UltimoTeste');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `visualizacoesperfil`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visualizacoesperfil` (
  `idVisualizacaoPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `DataVisualizacao` datetime NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  PRIMARY KEY (`idVisualizacaoPerfil`),
  UNIQUE KEY `idVisualizacaoPerfil_UNIQUE` (`idVisualizacaoPerfil`),
  KEY `fk_VisualizacaoPerfil_Usuarios1_idx` (`idUsuario`),
  KEY `fk_VisualizacoesPerfil_Lojas1_idx` (`idLoja`),
  CONSTRAINT `fk_VisualizacaoPerfil_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_VisualizacoesPerfil_Lojas1` FOREIGN KEY (`idLoja`) REFERENCES `lojas` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visualizacoesperfil`
--

LOCK TABLES `visualizacoesperfil` WRITE;
/*!40000 ALTER TABLE `visualizacoesperfil` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `visualizacoesperfil` VALUES (41,'2018-04-27 01:15:06',14,37),(42,'2018-04-27 01:17:57',14,37),(43,'2018-04-27 01:19:17',14,37),(44,'2018-05-08 01:22:45',17,37),(45,'2018-05-08 01:24:23',17,37),(46,'2018-05-08 01:24:25',17,37),(47,'2018-05-08 01:25:46',17,37),(48,'2018-05-08 01:25:59',17,37),(49,'2018-05-08 01:26:38',17,37),(50,'2018-05-08 01:26:40',17,37),(51,'2018-05-08 01:26:43',17,37),(52,'2018-05-08 01:27:50',17,37),(53,'2018-05-08 01:27:54',17,37),(54,'2018-05-08 10:44:16',17,37),(55,'2018-05-08 10:44:37',17,37),(56,'2018-05-08 10:46:55',17,37),(57,'2018-05-08 10:47:00',17,37),(58,'2018-05-08 10:51:10',17,37),(59,'2018-05-08 10:53:35',17,37),(60,'2018-05-08 11:08:37',17,37),(61,'2018-05-08 11:08:45',17,37),(62,'2018-05-08 11:08:53',17,37),(63,'2018-05-08 11:10:34',17,37),(64,'2018-05-08 11:10:38',17,37),(65,'2018-05-08 11:11:04',17,37),(66,'2018-05-08 11:15:38',17,37),(67,'2018-05-08 12:52:07',17,37),(68,'2018-05-08 13:04:53',17,37),(69,'2018-05-09 00:29:41',17,37),(70,'2018-05-09 00:31:26',17,37),(71,'2018-05-09 00:42:27',17,37),(72,'2018-05-10 11:14:35',14,38),(73,'2018-05-10 11:16:17',14,37),(74,'2018-05-10 11:20:17',14,37),(75,'2018-05-10 11:22:49',17,37),(76,'2018-05-10 11:22:57',17,38),(77,'2018-05-10 16:14:08',14,37),(78,'2018-05-10 16:16:07',14,37),(79,'2018-05-10 16:18:01',14,37),(80,'2018-05-10 16:18:41',14,37),(81,'2018-05-10 16:18:48',14,37),(82,'2018-05-10 16:19:43',14,37),(83,'2018-05-10 16:19:53',14,37),(84,'2018-05-10 16:20:16',14,37),(85,'2018-05-10 16:20:23',14,37),(86,'2018-05-10 16:20:42',14,37),(87,'2018-05-10 16:20:54',14,37),(88,'2018-05-10 16:21:16',14,37),(89,'2018-05-11 01:03:59',14,37),(90,'2018-05-11 01:04:11',14,38),(91,'2018-05-11 01:06:23',14,37),(92,'2018-05-11 01:11:16',14,37),(93,'2018-05-11 01:12:55',14,37),(94,'2018-05-11 01:13:56',14,37),(95,'2018-05-11 01:14:21',14,37),(96,'2018-05-11 01:14:58',14,37),(97,'2018-05-11 01:16:23',14,37),(98,'2018-05-12 22:37:07',14,38),(99,'2018-05-12 22:47:02',14,38),(100,'2018-05-12 22:47:09',14,38),(101,'2018-05-12 22:49:21',14,38),(102,'2018-05-12 23:03:50',14,38),(103,'2018-05-12 23:03:52',14,38),(104,'2018-05-12 23:03:56',14,37),(105,'2018-05-12 23:04:40',14,37),(106,'2018-05-12 23:05:02',14,37),(107,'2018-05-12 23:05:09',14,37),(108,'2018-05-12 23:07:45',14,37),(109,'2018-05-12 23:09:55',14,37),(110,'2018-05-12 23:10:07',14,37),(111,'2018-05-12 23:11:02',14,37),(112,'2018-05-12 23:12:24',14,37),(113,'2018-05-12 23:12:43',14,37),(114,'2018-05-12 23:43:02',14,37),(115,'2018-05-12 23:47:14',14,37),(116,'2018-05-12 23:51:12',14,37),(117,'2018-05-12 23:53:07',14,38),(118,'2018-05-12 23:55:12',14,38),(119,'2018-05-13 00:14:10',14,37),(120,'2018-05-13 00:18:43',14,37),(121,'2018-05-13 00:19:29',14,37),(122,'2018-05-13 00:25:26',14,37),(123,'2018-05-13 00:28:51',14,37),(124,'2018-05-13 00:30:59',14,37),(125,'2018-05-13 00:31:49',14,37),(126,'2018-05-13 00:33:49',14,37),(127,'2018-05-14 13:00:38',14,37),(128,'2018-05-14 13:00:52',14,38),(129,'2018-05-14 13:02:47',17,37),(130,'2018-05-14 13:04:41',17,37),(131,'2018-05-15 16:06:13',17,37),(132,'2018-05-15 16:29:24',17,37),(133,'2018-05-17 01:17:54',17,37),(134,'2018-05-17 14:01:45',14,38),(135,'2018-05-17 14:21:07',14,38),(136,'2018-05-17 14:43:52',14,38),(137,'2018-05-17 14:45:17',17,37),(138,'2018-05-17 14:45:34',17,37),(139,'2018-05-17 14:47:35',17,37),(140,'2018-05-17 14:48:03',17,37),(141,'2018-05-17 14:48:35',17,37),(142,'2018-05-17 14:49:07',17,37),(143,'2018-05-17 14:49:11',17,37),(144,'2018-05-17 14:49:19',17,37),(145,'2018-05-17 15:06:23',14,37),(146,'2018-05-18 11:31:27',17,38),(147,'2018-05-18 11:41:09',17,38),(148,'2018-05-18 11:41:40',17,38),(149,'2018-05-18 11:41:42',17,38),(150,'2018-05-18 11:43:29',17,38),(151,'2018-05-18 11:43:29',17,38),(152,'2018-05-18 11:43:30',17,38),(153,'2018-05-18 11:43:34',17,38),(154,'2018-05-18 11:45:40',17,38),(155,'2018-05-18 11:45:42',17,38),(156,'2018-05-18 11:45:48',17,38),(157,'2018-05-18 11:46:30',17,38),(158,'2018-05-18 11:47:07',17,37),(159,'2018-05-18 11:47:20',17,37),(160,'2018-05-18 11:47:23',17,37),(161,'2018-05-18 11:47:25',17,37),(162,'2018-05-18 11:47:28',17,37),(163,'2018-05-18 11:47:30',17,37),(164,'2018-05-18 11:51:29',17,37),(165,'2018-05-18 11:55:44',17,37),(166,'2018-05-18 11:55:53',17,37),(167,'2018-05-18 11:56:14',17,37),(168,'2018-05-18 11:56:18',17,37),(169,'2018-05-18 11:57:29',17,37),(170,'2018-05-18 11:57:29',17,37),(171,'2018-05-18 11:57:34',17,37),(172,'2018-05-18 13:02:31',17,37),(173,'2018-05-18 13:02:36',17,37),(174,'2018-05-18 13:03:49',17,37),(175,'2018-05-18 13:04:13',17,37),(176,'2018-05-18 13:04:18',17,37),(177,'2018-05-18 13:04:19',17,37),(178,'2018-05-18 13:04:20',17,37),(179,'2018-05-18 13:04:21',17,37),(180,'2018-05-18 13:08:19',17,37),(181,'2018-05-18 13:10:49',17,37),(182,'2018-05-18 13:10:56',17,37),(183,'2018-05-18 13:11:04',17,37),(184,'2018-05-18 13:13:03',17,37),(185,'2018-05-18 13:13:08',17,37),(186,'2018-05-18 13:13:14',17,37),(187,'2018-05-18 13:13:17',17,37),(188,'2018-05-18 13:13:18',17,37),(189,'2018-05-18 13:13:19',17,37),(190,'2018-05-18 13:13:20',17,37),(191,'2018-05-18 13:13:21',17,37),(192,'2018-05-18 13:13:22',17,37),(193,'2018-05-18 13:20:36',17,37),(194,'2018-05-18 13:22:18',17,37),(195,'2018-05-18 13:29:56',17,37),(196,'2018-05-18 13:30:00',17,37),(197,'2018-05-18 13:30:00',17,37),(198,'2018-05-18 13:30:02',17,37),(199,'2018-05-18 13:31:55',17,37),(200,'2018-05-18 13:33:21',17,37),(201,'2018-05-18 13:34:03',17,37),(202,'2018-05-18 13:34:25',17,37),(203,'2018-05-18 14:44:50',17,37),(204,'2018-05-18 14:44:55',17,37),(205,'2018-05-18 14:45:22',17,37),(206,'2018-05-18 14:46:48',17,37),(207,'2018-05-18 14:48:25',17,37),(208,'2018-05-18 14:57:39',17,37),(209,'2018-05-18 15:00:49',17,37),(210,'2018-05-18 15:01:06',17,37),(211,'2018-05-18 15:01:25',17,37),(212,'2018-05-18 15:08:49',17,37),(213,'2018-05-18 15:09:01',17,37),(214,'2018-05-18 15:09:19',17,37),(215,'2018-05-18 15:09:28',17,37),(216,'2018-05-18 15:09:31',17,37),(217,'2018-05-18 15:09:32',17,37),(218,'2018-05-18 15:09:33',17,37),(219,'2018-05-18 15:09:34',17,37),(220,'2018-05-18 15:09:36',17,37),(221,'2018-05-18 15:10:14',17,37),(222,'2018-05-18 15:10:17',17,37),(223,'2018-05-18 15:10:17',17,37),(224,'2018-05-18 15:10:20',17,37),(225,'2018-05-18 15:10:50',17,37),(226,'2018-05-18 15:11:13',17,37),(227,'2018-05-18 15:11:15',17,37),(228,'2018-05-18 15:11:16',17,37),(229,'2018-05-18 15:11:17',17,37),(230,'2018-05-18 15:11:17',17,37),(231,'2018-05-18 15:11:18',17,37),(232,'2018-05-18 15:11:19',17,37),(233,'2018-05-18 15:12:46',17,37),(234,'2018-05-18 15:12:49',17,37),(235,'2018-05-18 15:14:04',17,37),(236,'2018-05-18 15:14:15',17,37),(237,'2018-05-18 15:15:04',17,37),(238,'2018-05-18 15:15:06',17,37),(239,'2018-05-18 15:15:22',17,37),(240,'2018-05-18 15:15:35',17,37),(241,'2018-05-18 15:16:56',17,37),(242,'2018-05-18 15:17:01',17,37),(243,'2018-05-18 15:17:05',17,37),(244,'2018-05-18 15:17:06',17,37),(245,'2018-05-18 15:17:07',17,37),(246,'2018-05-18 15:17:07',17,37),(247,'2018-05-18 15:17:08',17,37),(248,'2018-05-18 15:18:43',17,37),(249,'2018-05-18 15:18:53',17,37),(250,'2018-05-18 15:19:20',17,37),(251,'2018-05-18 15:19:31',17,37),(252,'2018-05-18 15:19:45',17,37),(253,'2018-05-18 15:19:53',17,37),(254,'2018-05-18 15:21:41',17,37),(255,'2018-05-18 15:21:46',17,37),(256,'2018-05-18 15:21:52',17,37),(257,'2018-05-18 15:28:29',17,37),(258,'2018-07-07 15:20:19',17,38),(259,'2018-07-12 16:17:41',14,39);
/*!40000 ALTER TABLE `visualizacoesperfil` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

--
-- Table structure for table `visualizados`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visualizados` (
  `idVisualizado` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) NOT NULL,
  `idAnuncio` int(11) NOT NULL,
  `DataVisualizado` datetime NOT NULL,
  PRIMARY KEY (`idVisualizado`),
  KEY `fk_PessoasFisica_has_Anuncios_Anuncios1_idx` (`idAnuncio`),
  KEY `fk_PessoasFisica_has_Anuncios_PessoasFisica1_idx` (`idPessoa`),
  CONSTRAINT `fk_PessoasFisica_has_Anuncios_Anuncios1` FOREIGN KEY (`idAnuncio`) REFERENCES `anuncios` (`idAnuncio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_PessoasFisica_has_Anuncios_PessoasFisica1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoafisica` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visualizados`
--

LOCK TABLES `visualizados` WRITE;
/*!40000 ALTER TABLE `visualizados` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `visualizados` VALUES (1,31,3,'2018-05-15 15:57:35'),(2,31,3,'2018-05-15 16:01:09'),(3,31,3,'2018-05-15 16:02:59'),(4,31,3,'2018-05-16 12:14:02'),(5,31,3,'2018-05-16 13:48:05'),(6,31,3,'2018-05-17 01:18:00'),(7,31,4,'2018-05-18 11:47:00'),(9,31,4,'2018-07-07 12:23:54');
/*!40000 ALTER TABLE `visualizados` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Fri, 13 Jul 2018 18:44:06 +0200
