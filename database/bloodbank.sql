-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: bloodbank
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `adminbloodrequest`
--

DROP TABLE IF EXISTS `adminbloodrequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminbloodrequest` (
  `sno` int DEFAULT NULL,
  `requestid` double DEFAULT NULL,
  `patientname` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(20) DEFAULT NULL,
  `unit` varchar(40) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminbloodrequest`
--

LOCK TABLES `adminbloodrequest` WRITE;
/*!40000 ALTER TABLE `adminbloodrequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `adminbloodrequest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminlogin` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlogin`
--

LOCK TABLES `adminlogin` WRITE;
/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` VALUES ('Tony','Tony@gmail.com','12345','223311'),('Dev','dev@gmail.com','123','88998778');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donationreq`
--

DROP TABLE IF EXISTS `donationreq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donationreq` (
  `sno` int DEFAULT NULL,
  `donationid` double DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donationreq`
--

LOCK TABLES `donationreq` WRITE;
/*!40000 ALTER TABLE `donationreq` DISABLE KEYS */;
/*!40000 ALTER TABLE `donationreq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donationrequest`
--

DROP TABLE IF EXISTS `donationrequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donationrequest` (
  `sno` int DEFAULT NULL,
  `donationid` double DEFAULT NULL,
  `donorname` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(20) DEFAULT NULL,
  `unit` varchar(40) DEFAULT NULL,
  `disease` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donationrequest`
--

LOCK TABLES `donationrequest` WRITE;
/*!40000 ALTER TABLE `donationrequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `donationrequest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donor` (
  `sno` int DEFAULT NULL,
  `donorid` int DEFAULT NULL,
  `donorname` varchar(50) DEFAULT NULL,
  `donoremail` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` VALUES (1,101,'arun','arun@gmail.com','999911100'),(2,102,'aditya','aditya@gmail.com','999233344'),(3,103,'ansh','ansh@gmail.com','999232100'),(4,104,'amit','amit@gmail.com','991341340'),(5,105,'adarsh','adarsh@gmail.com','9913446322');
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donorlogin`
--

DROP TABLE IF EXISTS `donorlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donorlogin` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donorlogin`
--

LOCK TABLES `donorlogin` WRITE;
/*!40000 ALTER TABLE `donorlogin` DISABLE KEYS */;
INSERT INTO `donorlogin` VALUES ('arun kumar','arun@gamil.com','123456','223344');
/*!40000 ALTER TABLE `donorlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientlist`
--

DROP TABLE IF EXISTS `patientlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientlist` (
  `sno` int DEFAULT NULL,
  `patientid` double DEFAULT NULL,
  `patientname` varchar(50) DEFAULT NULL,
  `patientemail` varchar(50) DEFAULT NULL,
  `mobileno` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientlist`
--

LOCK TABLES `patientlist` WRITE;
/*!40000 ALTER TABLE `patientlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientlogin`
--

DROP TABLE IF EXISTS `patientlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientlogin` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientlogin`
--

LOCK TABLES `patientlogin` WRITE;
/*!40000 ALTER TABLE `patientlogin` DISABLE KEYS */;
INSERT INTO `patientlogin` VALUES ('Thor','thor@gmail.com','12345','112233'),('monu','m@gamil.com','2233','1232456');
/*!40000 ALTER TABLE `patientlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientreq`
--

DROP TABLE IF EXISTS `patientreq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientreq` (
  `sno` int DEFAULT NULL,
  `requestid` double DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientreq`
--

LOCK TABLES `patientreq` WRITE;
/*!40000 ALTER TABLE `patientreq` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientreq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientrequest`
--

DROP TABLE IF EXISTS `patientrequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patientrequest` (
  `sno` int DEFAULT NULL,
  `requestid` double DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patientrequest`
--

LOCK TABLES `patientrequest` WRITE;
/*!40000 ALTER TABLE `patientrequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `patientrequest` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-06 20:32:41
