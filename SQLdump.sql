-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: CMS
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

CREATE DATABASE CMS;

USE CMS;
--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Article1','<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</h5>','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</p>','2022-06-30'),(2,'Article2','<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</h5>','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</p>','2022-07-01'),(3,'Article3','<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</h5>','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</p>','2022-07-01'),(4,'Article4','<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</h5>','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</p>','2022-07-02'),(5,'Article5','<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</h5>','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</p>','2022-07-02'),(6,'Article6','<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</h5>','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus, ipsa cum aspernatur quasi perferendis qui distinctio rerum eum earum deserunt explicabo perspiciatis porro, sed omnis sit dolore quisquam cumque.</p>','2022-07-03');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-04 13:57:15
