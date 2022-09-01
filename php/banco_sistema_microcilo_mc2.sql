-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: banco_sistema_microcilo
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `mc2`
--

DROP TABLE IF EXISTS `mc2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mc2` (
  `idmc1_a1` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `data_incio` date NOT NULL,
  `data_final` date NOT NULL,
  `volume_tratado` decimal(10,0) NOT NULL,
  `alvo1_17` decimal(10,0) NOT NULL,
  `volume_producao1` decimal(10,0) NOT NULL,
  `volume_producao1_total` decimal(10,0) NOT NULL,
  `alvo1_0201` decimal(10,0) NOT NULL,
  `volume_producao2` decimal(10,0) NOT NULL,
  `volume_prodcao2_total` decimal(10,0) NOT NULL,
  `alvo1_bg1` decimal(10,0) NOT NULL,
  `qtd_vezes` int NOT NULL,
  `volume_producao3_total` decimal(10,0) NOT NULL,
  `volume_producao3` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idmc1_a1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mc2`
--

LOCK TABLES `mc2` WRITE;
/*!40000 ALTER TABLE `mc2` DISABLE KEYS */;
/*!40000 ALTER TABLE `mc2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-07 10:47:46
