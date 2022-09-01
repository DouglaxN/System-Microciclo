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
-- Table structure for table `mc1_a1`
--

DROP TABLE IF EXISTS `mc1_a1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mc1_a1` (
  `idmc1_a1` int NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `data_incio` date NOT NULL,
  `data_final` date NOT NULL,
  `alvo1_e7` decimal(10,0) NOT NULL,
  `volume_producao1` decimal(10,0) NOT NULL,
  `volume_producao1_total` decimal(10,0) NOT NULL,
  `alvo1_24` decimal(10,0) NOT NULL,
  `volume_producao2` decimal(10,0) NOT NULL,
  `volume_prodcao2_total` decimal(10,0) NOT NULL,
  `alvo1_cb13` decimal(10,0) NOT NULL,
  `volume_producao3` decimal(10,0) NOT NULL,
  `volume_producao3_total` decimal(10,0) NOT NULL,
  `alvo1_bg1` decimal(10,0) NOT NULL,
  `volume_prducao4` decimal(10,0) NOT NULL,
  `volume_prducao4_total` decimal(10,0) NOT NULL,
  `qtd_vezes` varchar(45) NOT NULL,
  PRIMARY KEY (`idmc1_a1`)
);