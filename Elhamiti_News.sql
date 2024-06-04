-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: bbdd.server.elhamiti.local    Database: elhamiti_news
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Noticias`
--

DROP TABLE IF EXISTS `Noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Noticias` (
  `ID_noticia` int NOT NULL AUTO_INCREMENT,
  `Contenido_noticia` text,
  `Fecha_noticia` date DEFAULT NULL,
  `ID_seccion` int DEFAULT NULL,
  `Titulo_noticia` char(100) DEFAULT NULL,
  `Contenido_noticia_en` text,
  `Titulo_noticia_en` char(100) DEFAULT NULL,
  `urlImg` text,
  PRIMARY KEY (`ID_noticia`),
  KEY `ID_seccion` (`ID_seccion`),
  CONSTRAINT `Noticias_ibfk_1` FOREIGN KEY (`ID_seccion`) REFERENCES `Secciones` (`ID_seccion`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Noticias`
--

LOCK TABLES `Noticias` WRITE;
/*!40000 ALTER TABLE `Noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `Noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Secciones`
--

DROP TABLE IF EXISTS `Secciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Secciones` (
  `ID_seccion` int NOT NULL AUTO_INCREMENT,
  `Seccion_noticia` enum('Ciberseguridad','Tecnologia','IA','Hardware','Software','Todos') DEFAULT NULL,
  `Seccion_noticia_en` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_seccion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Secciones`
--

LOCK TABLES `Secciones` WRITE;
/*!40000 ALTER TABLE `Secciones` DISABLE KEYS */;
INSERT INTO `Secciones` VALUES (1,'Ciberseguridad','Cybersecurity'),(2,'Tecnologia','Technology'),(3,'IA','AI'),(4,'Hardware','Hardware'),(5,'Software','Software'),(6,'Todos','All');
/*!40000 ALTER TABLE `Secciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redactores`
--

DROP TABLE IF EXISTS `redactores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `redactores` (
  `idRedactor` int NOT NULL AUTO_INCREMENT,
  `usuario` char(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idRedactor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redactores`
--

LOCK TABLES `redactores` WRITE;
/*!40000 ALTER TABLE `redactores` DISABLE KEYS */;
INSERT INTO `redactores` VALUES (1,'alfonso','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),(2,'irene','1234'),(3,'admin','1234');
/*!40000 ALTER TABLE `redactores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-22 17:47:37
