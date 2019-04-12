-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 192.168.10.10    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'2019-04-11 23:48:23','2019-04-11 23:48:29','Remy','LeBeau','gambit@test.com','123456789','1949-01-10','777 Brockton Avenue','Abington','MA','2351'),(2,'2019-04-11 23:48:29','2019-04-12 04:51:56','Bruce','Wayne','batman@test.com','5553216547','2013-02-01','601 Frank Stottile Blvd','Kingston','NY','12401'),(3,'2019-04-12 00:06:52','2019-04-12 04:04:26','Barry','Allen','flash@test.com','1234356980','2018-12-10','540 West Bypass','Andalusia','AL','36420'),(4,'2019-04-12 00:09:58','2019-04-12 03:57:03','Diana','Prince','wonderwoman@test.com','1234356980','1945-12-10','15 Polo Run','Mickelton','NJ','08056'),(5,'2019-04-12 00:10:55','2019-04-12 04:28:39','Bobby','Drake','iceman@test.com','1234356980','1945-12-10','15979 Kilowatt Rd','Elmendorf','TX','78112'),(6,'2019-04-12 04:48:56','2019-04-12 04:51:05','Dick','Grayson','robin@test.com','5553216547','1970-01-01','23702 Turtle Cove','Laguna Niguel','CA','92677'),(7,'2019-04-12 04:57:10','2019-04-12 04:57:10','Scott','Summers','cyclops@gmail.com','1234567890','1900-01-31','930 Berkshire Drive','North Salt Lake','Utah','84054'),(8,'2019-04-12 05:01:03','2019-04-12 17:53:08','Logan','Howlett','wolverine@oldtest.com','0987654321','1999-12-04','1041 Eagle Ridge Trail','Stillwater','MN','55082'),(9,'2019-04-12 18:20:04','2019-04-12 18:25:03','Col','Mustard','clue@test.com','5553216547','2018-12-21','1600 Pennsylvania Ave','Washington','DC','20500'),(10,'2019-04-12 18:44:33','2019-04-12 18:44:33','Robo','Cop','robocop@test.com','1234567890','2018-12-18','22502 Chase','Aliso Viejo','California','92656'),(11,'2019-04-12 18:52:37','2019-04-12 18:52:37','Clark','Kent','superman@test.com','5553216547','1970-01-01','244 Whippoorwill Ln','Ormond Beach','FL','32174'),(12,'2019-04-12 18:56:50','2019-04-12 18:56:50','Bruce','Banner','hulk@test.com','5553216547','2018-12-06','430 E Washington Ave','Salem','SD','57058'),(13,'2019-04-12 19:10:06','2019-04-12 19:15:54','Martian','Manhunter','martian@test.com','5553216547','1970-01-03','3729 Courtney Huntsville Rd','Yadkinville','NC','27055'),(14,'2019-04-12 19:26:13','2019-04-12 19:26:13','Charles','Xavier','professorx@gmail.com','5553216547','2018-12-15','329 Trout Creek Rd','Iola','WI','54945'),(18,'2019-04-12 20:50:26','2019-04-12 20:50:26','Omega','Red','comrade@mailtest.com','0987654321','2018-12-21','1900 Gordon Ave','Yazoo City','MS','39194');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-12 15:18:52
