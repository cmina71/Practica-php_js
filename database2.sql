-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: historia_clinica
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estratos`
--

DROP TABLE IF EXISTS `estratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estratos` (
  `estr_id` int(11) NOT NULL,
  `estr_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`estr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estratos`
--

LOCK TABLES `estratos` WRITE;
/*!40000 ALTER TABLE `estratos` DISABLE KEYS */;
INSERT INTO `estratos` VALUES (1,'Bajo-Bajo'),(2,'Bajo'),(3,'Medio-Bajo'),(4,'Medio'),(5,'Medio-Alto'),(6,'Alto');
/*!40000 ALTER TABLE `estratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generos` (
  `gen_nombre` varchar(30) NOT NULL,
  `gen_id` int(11) NOT NULL,
  PRIMARY KEY (`gen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES ('Masculino',1),('Femenino',2),('Otros',3);
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historias`
--

DROP TABLE IF EXISTS `historias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historias` (
  `hist_id` int(11) NOT NULL,
  `hist_motv` text DEFAULT NULL,
  `hist_esfod` varchar(50) NOT NULL,
  `hist_cilod` varchar(50) NOT NULL,
  `hist_ejeod` varchar(50) NOT NULL,
  `hist_esfoi` varchar(50) NOT NULL,
  `hist_ciloi` varchar(50) NOT NULL,
  `hist_ejeoi` varchar(50) NOT NULL,
  `hist_diaod` varchar(50) NOT NULL,
  `hist_diaoi` varchar(50) NOT NULL,
  `hist_recom` text DEFAULT NULL,
  `pac_id` int(11) NOT NULL,
  PRIMARY KEY (`hist_id`),
  KEY `pac_id` (`pac_id`),
  CONSTRAINT `historias_ibfk_1` FOREIGN KEY (`pac_id`) REFERENCES `paciente` (`pac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historias`
--

LOCK TABLES `historias` WRITE;
/*!40000 ALTER TABLE `historias` DISABLE KEYS */;
INSERT INTO `historias` VALUES (1,'Visita mensual','0.25','-0.25','75','N','-0.50','92','Lentes Sencillos','Neutro','Aplicar gotas en el ojo derecho cada 3 dias',1),(2,'Primera visita','-0.75','-0.25','18','-1.75','-0.75','70','Miope','Miope','Presenta miop?a leve, debe de usar gafas',2);
/*!40000 ALTER TABLE `historias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hobbies` (
  `hob_id` int(11) NOT NULL,
  `hob_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`hob_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobbies`
--

LOCK TABLES `hobbies` WRITE;
/*!40000 ALTER TABLE `hobbies` DISABLE KEYS */;
INSERT INTO `hobbies` VALUES (1,'Deporte'),(2,'Musica'),(3,'Cocina'),(4,'Cine'),(5,'Lectura');
/*!40000 ALTER TABLE `hobbies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `pac_id` int(11) NOT NULL,
  `pac_nombre` varchar(50) NOT NULL,
  `pac_apellido` varchar(50) NOT NULL,
  `pac_direccion` varchar(70) NOT NULL,
  `pac_telefono` bigint(20) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `estr_id` int(11) NOT NULL,
  PRIMARY KEY (`pac_id`),
  KEY `gen_id` (`gen_id`),
  KEY `estr_id` (`estr_id`),
  CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`gen_id`) REFERENCES `generos` (`gen_id`),
  CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`estr_id`) REFERENCES `estratos` (`estr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'Manolo','Perez','Cra 14 # 25 - 30',3105874569,1,4),(2,'Fernanda','Gomez','Calle 25 # 50 - 32',3158232356,2,2),(3,'Daniela','Alvarez','Cra 14 # 36 - 85',3102587496,3,3),(4,'Donaire Jesus','Cardona Dominguez','Calle 17 # 38 - 28',3158575896,1,5),(5,'Carlos Jesus','Ramirez Lopez','Calle 15 # 50 - 28',3158574596,1,3);
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente_hobbies`
--

DROP TABLE IF EXISTS `paciente_hobbies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente_hobbies` (
  `pac_hob_id` int(11) NOT NULL,
  `pac_id` int(11) NOT NULL,
  `hob_id` int(11) NOT NULL,
  PRIMARY KEY (`pac_hob_id`),
  KEY `pac_id` (`pac_id`),
  KEY `hob_id` (`hob_id`),
  CONSTRAINT `paciente_hobbies_ibfk_1` FOREIGN KEY (`pac_id`) REFERENCES `paciente` (`pac_id`),
  CONSTRAINT `paciente_hobbies_ibfk_2` FOREIGN KEY (`hob_id`) REFERENCES `hobbies` (`hob_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente_hobbies`
--

LOCK TABLES `paciente_hobbies` WRITE;
/*!40000 ALTER TABLE `paciente_hobbies` DISABLE KEYS */;
INSERT INTO `paciente_hobbies` VALUES (1,1,4),(2,2,5),(3,3,1);
/*!40000 ALTER TABLE `paciente_hobbies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Optometra');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_docum` int(11) NOT NULL,
  `usu_nombre` varchar(70) NOT NULL,
  `usu_clave` varchar(20) NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `rol_id` (`rol_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,1105535850,'Jesus Antonio Bolivar Cruz','1234abc',1),(2,1105748563,'Roxana Maria Velazques Ochoa','abc1234',2),(3,112578954,'Miranda Alexandra Gonzalez Matos','1a2b3c',2),(5,252525,'Leonardo Enrique Rojas Gil','????^?PU?}l???',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 22:06:07
