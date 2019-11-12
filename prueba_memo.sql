-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: prueba_memo
-- ------------------------------------------------------
-- Server version	5.7.27-log

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
-- Table structure for table `listado`
--

DROP TABLE IF EXISTS `listado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `listado` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Item` varchar(50) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Id_tipo` varchar(4) NOT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Item` (`Item`),
  KEY `Id_tipo` (`Id_tipo`),
  CONSTRAINT `listado_ibfk_1` FOREIGN KEY (`Id_tipo`) REFERENCES `stado` (`Id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listado`
--

LOCK TABLES `listado` WRITE;
/*!40000 ALTER TABLE `listado` DISABLE KEYS */;
INSERT INTO `listado` VALUES (1,'sacar la basura','sacar la basura mañana','st3','2019-09-21');
/*!40000 ALTER TABLE `listado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `recordatorio`
--

DROP TABLE IF EXISTS `recordatorio`;
/*!50001 DROP VIEW IF EXISTS `recordatorio`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `recordatorio` AS SELECT 
 1 AS `Id`,
 1 AS `Item`,
 1 AS `Descripcion`,
 1 AS `fecha`,
 1 AS `Tipo`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `stado`
--

DROP TABLE IF EXISTS `stado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stado` (
  `Id_tipo` varchar(4) NOT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stado`
--

LOCK TABLES `stado` WRITE;
/*!40000 ALTER TABLE `stado` DISABLE KEYS */;
INSERT INTO `stado` VALUES ('st1','no importante'),('st2','importante'),('st3','urgente'),('st4','Completada');
/*!40000 ALTER TABLE `stado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `recordatorio`
--

/*!50001 DROP VIEW IF EXISTS `recordatorio`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `recordatorio` AS select `r`.`Id` AS `Id`,`r`.`Item` AS `Item`,`r`.`Descripcion` AS `Descripcion`,`r`.`Fecha` AS `fecha`,`s`.`Tipo` AS `Tipo` from (`listado` `r` join `stado` `s` on((`s`.`Id_tipo` = `r`.`Id_tipo`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-11 20:47:13
