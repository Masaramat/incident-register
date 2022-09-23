-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: incidents_register
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `attending_staff`
--

DROP TABLE IF EXISTS `attending_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attending_staff` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `sno_UNIQUE` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attending_staff`
--

LOCK TABLES `attending_staff` WRITE;
/*!40000 ALTER TABLE `attending_staff` DISABLE KEYS */;
INSERT INTO `attending_staff` VALUES (2,'Jonathan Chikan'),(3,'MTN'),(4,'Hyga Technologies'),(5,'Infonet'),(6,'Mangut Innocent');
/*!40000 ALTER TABLE `attending_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branches` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `sno_UNIQUE` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branches`
--

LOCK TABLES `branches` WRITE;
/*!40000 ALTER TABLE `branches` DISABLE KEYS */;
INSERT INTO `branches` VALUES (1,'Head Office'),(2,'Gindiri'),(3,'COCIN Headquarters');
/*!40000 ALTER TABLE `branches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `devices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  `memory` varchar(10) DEFAULT NULL,
  `hdd` varchar(10) DEFAULT NULL,
  `branch` varchar(25) DEFAULT NULL,
  `architecture` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `domain` varchar(45) DEFAULT NULL,
  `memory_type` varchar(8) DEFAULT NULL,
  `device_type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
INSERT INTO `devices` VALUES (1,'ITPC-4','Mangut Innocent','Windows 10 x64','4 GIG','500GIG','Head Office','x64','Active','Lightmfb.com (192.168.1.7)','DDR4','VM'),(2,'ITPC-1','Samuel James','Windows 10 pro x64','4GB','1TB','COCIN Headquarters','x64','Active','Lightmfb.com(192.168.1.7)','DDR4','Physical');
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domain`
--

DROP TABLE IF EXISTS `domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `domain_name` varchar(20) DEFAULT NULL,
  `domain_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domain`
--

LOCK TABLES `domain` WRITE;
/*!40000 ALTER TABLE `domain` DISABLE KEYS */;
INSERT INTO `domain` VALUES (1,'Lightmfb.com','192.168.1.7');
/*!40000 ALTER TABLE `domain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incidents`
--

DROP TABLE IF EXISTS `incidents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `incidents` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `incident` varchar(40) DEFAULT NULL,
  `reported_by` varchar(45) DEFAULT NULL,
  `attended_by` varchar(45) DEFAULT NULL,
  `reporting_date` date DEFAULT NULL,
  `reporting_time` time DEFAULT NULL,
  `priority` varchar(12) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `res_time` time DEFAULT NULL,
  `action` text,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `sno_UNIQUE` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incidents`
--

LOCK TABLES `incidents` WRITE;
/*!40000 ALTER TABLE `incidents` DISABLE KEYS */;
INSERT INTO `incidents` VALUES (7,'Broken Mouse','Godiya Jerome','Mangut Innocent','2022-09-15','09:38:00','medium','Replaced','Hardware','Head Office','2022-09-15','09:38:00','Rplaced'),(8,'Network connectivity ','Blessing Danboyi','Mangut Innocent','2022-09-15','09:10:00','medium','Fixed','Network','Head Office','2022-09-15','09:15:00','Reconnected the network cable'),(9,'Network connectivity ','Bisalla David','Mangut Innocent','2022-09-15','11:35:00','medium','pending','Network','Gindiri',NULL,NULL,NULL);
/*!40000 ALTER TABLE `incidents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `os`
--

DROP TABLE IF EXISTS `os`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `os` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `sno_UNIQUE` (`sno`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `os`
--

LOCK TABLES `os` WRITE;
/*!40000 ALTER TABLE `os` DISABLE KEYS */;
INSERT INTO `os` VALUES (1,'Windows 10 pro x64');
/*!40000 ALTER TABLE `os` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporting_staff`
--

DROP TABLE IF EXISTS `reporting_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reporting_staff` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `branch` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `sno_UNIQUE` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporting_staff`
--

LOCK TABLES `reporting_staff` WRITE;
/*!40000 ALTER TABLE `reporting_staff` DISABLE KEYS */;
INSERT INTO `reporting_staff` VALUES (1,'Mangut Innocent',''),(4,'Joy Gana','Head Office'),(5,'Blessing Danboyi','Head Office'),(6,'James Lengkat','Head Office'),(7,'Alex Tampi','Head Office'),(8,'Godiya Jerome','Head Office'),(9,'Bisalla David','Gindiri');
/*!40000 ALTER TABLE `reporting_staff` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-23 14:22:07
