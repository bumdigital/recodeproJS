-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: amigaopet
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id_pedidos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_do_cliente` varchar(45) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `nome_do_produto` varchar(45) DEFAULT NULL,
  `valor_unitario` decimal(10,0) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valor_total` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_pedidos`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'Afonso Lira','Rua: Curva do Horizonte, nº99 Programalina-SP','11 99999 9999','Gato adulto',500,2,500),(2,'João Firmino','Rua: Alpha Lascante, nº 333 Tshurulandia-SP','11 99999 9999','Gato filhote',250,1,250),(3,'José Leão','Rua: Omega Trepante, nº 77 Tshurulandia-SP','11 96666 6666','Cachorro filhote',250,1,250),(4,'Fernanda Catacliesma','Rua: Tonhonhoim, nº 66 Tshurulandia-SP','11 95555 5555','Cachorro adulto',250,1,250),(5,'Eslebão da Cunha','Rua: Estrela Dalva, nº 05 Tshurulandia-SP','11 94444 4444','Cachorro adulto',250,1,250),(6,'Anibal Vicente','Rua:Meteóro de Pegasus, nº03 Tshurulandia-SP','11 93333 3333','Cachorro filhote',250,1,250),(7,'Renata de Melo','Rua:Colera do Dragão, nº02 Tshurulandia-SP','11 92222 2222','Cachorro filhote',250,1,250),(8,'Dolores de Barriga','Rua: Shiriu, nº 92 Tshurulandia-SP','11 97777 2222','Cachorro filhote',250,1,250);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-24 23:50:45
