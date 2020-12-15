-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: crimes
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Robbery','2020-10-26 04:36:43','2020-10-26 04:36:43','Theft of physical property in an area.'),(2,'Arson','2020-11-06 10:42:39','2020-11-06 10:42:39','Fire related Crimes'),(3,'Burglary','2020-11-06 10:45:30','2020-11-06 10:45:30','Illegal entry of a building with intent to commit crime, especially theft'),(4,'Personal Crimes','2020-12-08 11:52:09','2020-12-08 11:52:09','Offenses against the Person. These are crimes that result in physical or mental harm to another person. They include; \r\n•	Assault \r\n•	Battery \r\n•	False Imprisonment \r\n•	Kidnapping \r\n•	Homicide – crimes such as first and second degree, murder, and involuntary manslaughter, and vehicular homicide \r\n•	Rape, statutory rape, sexual assault and other offenses of a sexual nature'),(5,'Property Crimes','2020-12-08 11:55:23','2020-12-08 11:55:23','Offenses against Property: These are crimes that do not necessarily involve harm to another person. Instead, they involve interference with another person\'s right to use or enjoy their property. Property crimes include:\r\n•	Larceny (theft) \r\n•	Robbery (theft by force) Note: this is also considered a personal crime since it results in physical and mental harm. \r\n•	Burglary (penalties for burglary) \r\n•	Arson\r\n•	Embezzlement\r\n•	Forgery\r\n•	False pretenses\r\n•	Receipt of stolen goods.'),(6,'Inchoate Crimes','2020-12-08 11:57:25','2020-12-08 11:57:25','“Inchoate” translates into “incomplete”, meaning crimes that were begun, but not completed. This requires that a person take a substantial step to complete a crime, as opposed to just “intend” to commit a crime. Inchoate crimes include: \r\n•	Attempt – any crime that is attempted like “attempted robbery” \r\n•	Solicitation \r\n•	Conspiracy'),(7,'Statutory Crimes','2020-12-08 11:58:35','2020-12-08 11:58:35','A violation of a specific state or federal statute and can involve either property offenses or personal offense. Statutory crimes include: \r\n•	Alcohol-related crimes such as drunk driving\r\n•	Selling alcohol to a minor.'),(8,'White-Collar Crimes','2020-12-08 12:00:22','2020-12-08 12:00:22','These are crimes performed by individuals with high status and occupation such as embezzling, tax evasion, inside trading, etc.'),(9,'Organized Crimes','2020-12-08 12:01:31','2020-12-08 12:01:31','This crime is performed by anonymous groups involving distributed illegal acts such as drug abuse, human trafficking, weapons smuggling, etc.'),(10,'Crime Against Morality','2020-12-08 12:02:59','2020-12-08 12:02:59','These kinds of crime can also be called victimless crimes since they are not offended by any victim but by the individual’s choice such as Prostitution, illegal gambling, drug abuse, etc.'),(11,'Hate Crimes','2020-12-08 12:04:01','2020-12-08 12:04:01','These kinds of crimes can have both property and personal damage due to prejudices such as race, religion, sexual orientation, etc.');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crimes`
--

DROP TABLE IF EXISTS `crimes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crimes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `crime_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catergory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reported_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_By` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crimes`
--

LOCK TABLES `crimes` WRITE;
/*!40000 ALTER TABLE `crimes` DISABLE KEYS */;
INSERT INTO `crimes` VALUES (1,'Stealing','1','Current Location','There were three unidentified men seen standing next to the fence of the community school.','admin@crimes.com',NULL,'admin@crimes.com','2020-10-26 04:37:46','2020-10-26 04:37:46'),(2,'Robery','1','Current Location','Stole my money','admin@crimes.com',NULL,'admin@crimes.com','2020-10-30 03:36:33','2020-10-30 03:36:33'),(3,'Murder','Robbery','Kampala','The woman has been murdered in Namanve','namanya.handler@gmail.com',NULL,'namanya.handler@gmail.com','2020-12-08 09:40:38','2020-12-08 09:40:38'),(4,'Human Trafficking','Organized Crimes','Kampala','There is a young girl that has been trafficked to a safe house in Namanve before she is transported to Saudi. She is dressed in black skirt with a long sleeved Tshirt.','mpirwejulius@gmail.com',NULL,'mpirwejulius@gmail.com','2020-12-08 12:26:35','2020-12-08 12:26:35'),(5,'Property damage','Property Crimes','Kampala','The building was destroyed here at Nakawa','mmtom@gmail.com',NULL,'mmtom@gmail.com','2020-12-10 09:36:51','2020-12-10 09:36:51'),(6,'Murder','Personal Crimes','Kampala','Someone has been murdered in Namanve.','namanya.handler@gmail.com',NULL,'namanya.handler@gmail.com','2020-12-10 10:08:23','2020-12-10 10:08:23'),(7,'Murder','Personal Crimes','Kampala','Someone has been murdered','namanya.handler@gmail.com',NULL,'namanya.handler@gmail.com','2020-12-10 10:55:11','2020-12-10 10:55:11'),(8,'Assault','Personal Crimes','Kampala Nakasero','Someone is being assaulted here at Nakasero Kampala.  She is wearing a red dress with a scarf in the neck.','namanya.handler@gmail.com',NULL,'namanya.handler@gmail.com','2020-12-15 09:43:22','2020-12-15 09:43:22');
/*!40000 ALTER TABLE `crimes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_ms`
--

DROP TABLE IF EXISTS `location_ms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location_ms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_ms`
--

LOCK TABLES `location_ms` WRITE;
/*!40000 ALTER TABLE `location_ms` DISABLE KEYS */;
INSERT INTO `location_ms` VALUES (1,'Kampala Nakasero','2020-12-15 07:08:18','2020-12-15 07:08:18');
/*!40000 ALTER TABLE `location_ms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_By` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','0.34264999628067','46.586990356445','testdeveloper@gmail.com','2020-11-05 13:44:55','2020-11-05 13:44:55'),(2,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','0.34264999628067','46.586990356445','testdeveloper@gmail.com','2020-11-05 13:56:57','2020-11-05 13:56:57'),(3,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','0.34264999628067','46.586990356445','testdeveloper@gmail.com','2020-11-05 13:57:05','2020-11-05 13:57:05'),(4,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','0.34264999628067','46.586990356445','testdeveloper@gmail.com','2020-11-05 17:13:06','2020-11-05 17:13:06'),(5,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','0.34264999628067','46.586990356445','testdeveloper@gmail.com','2020-11-05 17:46:03','2020-11-05 17:46:03'),(6,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','0.34264999628067','46.586990356445','testdeveloper@gmail.com','2020-11-05 17:47:51','2020-11-05 17:47:51'),(7,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','-74.0241367','40.8053731','testdeveloper@gmail.com','2020-11-06 10:39:21','2020-11-06 10:39:21'),(8,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','-74.0241367','40.8053731','admin@crimes.com','2020-11-06 10:41:07','2020-11-06 10:41:07'),(9,'Poitiers','France','Nouvelle-Aquitaine','109.223.139.1','-74.0241367','40.8053731','admin@crimes.com','2020-11-06 15:39:53','2020-11-06 15:39:53'),(10,'Kampala','Uganda','Central Region','102.223.139.1','-74.0241367','40.8053731','testdeveloper@gmail.com','2020-11-07 10:14:11','2020-11-07 10:14:11'),(11,'Kampala','Uganda','Central Region','102.80.17.65','-74.0241367','40.8053731','testdeveloper@gmail.com','2020-11-07 10:16:05','2020-11-07 10:16:05'),(12,'Campbell','United States','California','134.122.39.7','-74.0241367','40.8053731','testdeveloper@gmail.com','2020-11-07 10:29:49','2020-11-07 10:29:49'),(13,'Kampala','Uganda','Central Region','129.205.15.190','-74.0241367','40.8053731','admin@crimes.com','2020-11-08 07:20:46','2020-11-08 07:20:46'),(14,'Kampala','Uganda','Central Region','154.225.7.206','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-11-09 09:56:56','2020-11-09 09:56:56'),(15,'Kampala','Uganda','Central Region','154.226.85.59','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-11-11 05:30:48','2020-11-11 05:30:48'),(16,'Kampala','Uganda','Central Region','154.226.85.59','-74.0241367','40.8053731','admin@crimes.com','2020-11-11 05:34:20','2020-11-11 05:34:20'),(17,'Kampala','Uganda','Central Region','129.205.15.190','-74.0241367','40.8053731','admin@crimes.com','2020-11-13 13:17:37','2020-11-13 13:17:37'),(18,'Kampala','Uganda','Central Region','154.229.109.21','-74.0241367','40.8053731','admin@crimes.com','2020-12-08 09:33:17','2020-12-08 09:33:17'),(19,'Kampala','Uganda','Central Region','154.229.109.21','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-08 09:38:15','2020-12-08 09:38:15'),(20,'Kampala','Uganda','Central Region','154.229.109.21','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-08 09:43:31','2020-12-08 09:43:31'),(21,'Kampala','Uganda','Central Region','102.223.139.1','-74.0241367','40.8053731','testdeveloper@gmail.com','2020-12-08 10:31:09','2020-12-08 10:31:09'),(22,'Kampala','Uganda','Central Region','102.223.139.1','-74.0241367','40.8053731','admin@crimes.com','2020-12-08 10:31:28','2020-12-08 10:31:28'),(23,'Kampala','Uganda','Central Region','154.229.109.21','-74.0241367','40.8053731','admin@crimes.com','2020-12-08 11:19:12','2020-12-08 11:19:12'),(24,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','admin@crimes.com','2020-12-08 11:37:53','2020-12-08 11:37:53'),(25,'Kampala','Uganda','Central Region','154.229.109.21','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-08 12:10:34','2020-12-08 12:10:34'),(26,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mpirwejulius@gmail.com','2020-12-08 12:16:06','2020-12-08 12:16:06'),(27,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mpirwejulius@gmail.com','2020-12-08 12:32:20','2020-12-08 12:32:20'),(28,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mpirwejulius@gmail.com','2020-12-08 12:32:21','2020-12-08 12:32:21'),(29,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mpirwejulius@gmail.com','2020-12-08 12:32:22','2020-12-08 12:32:22'),(30,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mpirwejulius@gmail.com','2020-12-08 12:32:28','2020-12-08 12:32:28'),(31,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mpirwejulius@gmail.com','2020-12-08 12:42:33','2020-12-08 12:42:33'),(32,'Kampala','Uganda','Central Region','41.75.191.120','-74.0241367','40.8053731','admin@crimes.com','2020-12-08 17:34:22','2020-12-08 17:34:22'),(33,'Kampala','Uganda','Central Region','196.43.156.184','-74.0241367','40.8053731','admin@crimes.com','2020-12-09 04:00:03','2020-12-09 04:00:03'),(34,'Kampala','Uganda','Central Region','197.239.7.199','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-09 13:55:14','2020-12-09 13:55:14'),(35,'Kampala','Uganda','Central Region','197.239.7.199','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-09 13:55:29','2020-12-09 13:55:29'),(36,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-09 16:00:36','2020-12-09 16:00:36'),(37,'Kampala','Uganda','Central Region','196.43.156.184','-74.0241367','40.8053731','admin@crimes.com','2020-12-10 05:42:15','2020-12-10 05:42:15'),(38,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 05:59:41','2020-12-10 05:59:41'),(39,'Kampala','Uganda','Central Region','196.43.156.184','-74.0241367','40.8053731','ainemukamakaboyo@gmail.com','2020-12-10 06:30:58','2020-12-10 06:30:58'),(40,'Kampala','Uganda','Central Region','196.43.156.184','-74.0241367','40.8053731','ainemukamakaboyo@gmail.com','2020-12-10 06:33:10','2020-12-10 06:33:10'),(41,'Kampala','Uganda','Central Region','102.223.139.1','-74.0241367','40.8053731','admin@crimes.com','2020-12-10 07:59:03','2020-12-10 07:59:03'),(42,'Kampala','Uganda','Central Region','41.75.190.148','-74.0241367','40.8053731','admin@crimes.com','2020-12-10 08:00:37','2020-12-10 08:00:37'),(43,'Kampala','Uganda','Central Region','41.75.190.148','-74.0241367','40.8053731','kaweesandrew@gmail.com','2020-12-10 08:03:01','2020-12-10 08:03:01'),(44,'Kampala','Uganda','Central Region','41.75.190.148','-74.0241367','40.8053731','kaweesandrew@gmail.com','2020-12-10 08:03:45','2020-12-10 08:03:45'),(45,'Kampala','Uganda','Central Region','196.43.156.184','-74.0241367','40.8053731','ainemukamakaboyo@gmail.com','2020-12-10 08:14:50','2020-12-10 08:14:50'),(46,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mmtom@gmail.com','2020-12-10 09:33:55','2020-12-10 09:33:55'),(47,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mmtom@gmail.com','2020-12-10 09:38:36','2020-12-10 09:38:36'),(48,'Kampala','Uganda','Central Region','196.43.156.157','-74.0241367','40.8053731','mmtom@gmail.com','2020-12-10 09:39:57','2020-12-10 09:39:57'),(49,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 09:46:09','2020-12-10 09:46:09'),(50,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 09:49:31','2020-12-10 09:49:31'),(51,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 10:10:30','2020-12-10 10:10:30'),(52,'Kampala','Uganda','Central Region','196.43.156.184','-74.0241367','40.8053731','ainemukamakaboyo@gmail.com','2020-12-10 10:15:48','2020-12-10 10:15:48'),(53,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 10:52:30','2020-12-10 10:52:30'),(54,'Kampala','Uganda','Central Region','154.231.152.190','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 10:58:00','2020-12-10 10:58:00'),(55,'Kampala','Uganda','Central Region','154.228.30.136','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-10 15:56:39','2020-12-10 15:56:39'),(56,'Kampala','Uganda','Central Region','154.229.112.134','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-11 01:52:31','2020-12-11 01:52:31'),(57,'Kampala','Uganda','Central Region','154.229.112.134','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-11 01:53:09','2020-12-11 01:53:09'),(58,'Kampala','Uganda','Central Region','154.229.112.134','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-11 03:59:10','2020-12-11 03:59:10'),(59,'Kampala','Uganda','Central Region','154.229.112.134','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-11 04:00:08','2020-12-11 04:00:08'),(60,'Kampala','Uganda','Central Region','154.229.112.134','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-11 04:16:18','2020-12-11 04:16:18'),(61,'Kampala','Uganda','Central Region','154.229.112.134','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-11 09:34:06','2020-12-11 09:34:06'),(62,'Kampala','Uganda','Central Region','154.231.189.188','-74.0241367','40.8053731','nmercy@gmail.com','2020-12-11 11:38:09','2020-12-11 11:38:09'),(63,'Kampala','Uganda','Central Region','154.231.189.188','-74.0241367','40.8053731','nmercy@gmail.com','2020-12-11 11:38:51','2020-12-11 11:38:51'),(64,'Kampala','Uganda','Central Region','154.225.178.146','-74.0241367','40.8053731','joshmpaka@gmail.com','2020-12-11 12:51:30','2020-12-11 12:51:30'),(65,'Kampala','Uganda','Central Region','197.239.6.120','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-14 03:28:07','2020-12-14 03:28:07'),(66,'Kampala','Uganda','Central Region','102.223.139.1','-74.0241367','40.8053731','admin@crimes.com','2020-12-14 06:37:31','2020-12-14 06:37:31'),(67,'Kampala','Uganda','Central Region','197.239.4.54','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-14 12:57:49','2020-12-14 12:57:49'),(68,'Kampala','Uganda','Central Region','197.239.4.54','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-14 13:00:24','2020-12-14 13:00:24'),(69,'Kampala','Uganda','Central Region','41.75.190.175','-74.0241367','40.8053731','kaweesandrew@gmail.com','2020-12-15 05:10:15','2020-12-15 05:10:15'),(70,'Kampala','Uganda','Central Region','102.223.139.1','-74.0241367','40.8053731','admin@crimes.com','2020-12-15 07:07:55','2020-12-15 07:07:55'),(71,'Kampala','Uganda','Central Region','154.231.51.87','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-15 09:40:34','2020-12-15 09:40:34'),(72,'Kampala','Uganda','Central Region','154.231.51.87','-74.0241367','40.8053731','namanya.handler@gmail.com','2020-12-15 09:43:52','2020-12-15 09:43:52');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_10_08_185110_create_locations_table',1),(5,'2020_10_08_185152_create_crimes_table',1),(6,'2020_10_09_061501_create_categories_table',1),(7,'2020_10_09_071442_update_category_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@crimes.com','admin',NULL,'$2y$10$u2Bcs0CgHQdF7S4Amo4FeuPFfdU/GiKQB04WJ0BWBR2fhIGoH0OUC',NULL,'2020-10-24 09:05:59','2020-12-15 07:09:39'),(2,'Test Developer','testdeveloper@gmail.com','user',NULL,'$2y$10$u2Bcs0CgHQdF7S4Amo4FeuPFfdU/GiKQB04WJ0BWBR2fhIGoH0OUC',NULL,'2020-11-05 09:58:10','2020-11-05 09:58:10'),(3,'Namanya Ronald','namanya.handler@gmail.com','user',NULL,'$2y$10$Qud8W2YQnhQpiC6bDHFP8OFve0l1Nb5Q8/G3VMTlKT8l2mVE8CEVC',NULL,'2020-11-09 09:56:42','2020-11-09 09:56:42'),(4,'Julius Mpibwe','mpirwejulius@gmail.com','user',NULL,'$2y$10$.rO0cWIcDNkpvFRrJJWyVOXQ0EGpkRXDSh06WA7k9P4pcASeionyy',NULL,'2020-12-08 12:15:57','2020-12-08 12:15:57'),(5,'kaboyo','ainemukamakaboyo@gmail.com','user',NULL,'$2y$10$OyAWro/4LgrlTpsUjV4kVewpd9wRe4dJwjjgj.bhbf2n0.6Kkcb5q',NULL,'2020-12-10 06:30:50','2020-12-10 06:30:50'),(6,'Andrew Kaweesa','kaweesandrew@gmail.com','user',NULL,'$2y$10$fyRsA73xos6LEipsOERAuOezWdqesX8ACUUebDy0GlKrd/lnRZxfe',NULL,'2020-12-10 08:02:54','2020-12-10 08:02:54'),(7,'Tom Mugabe','mmtom@gmail.com','user',NULL,'$2y$10$EMq1O3c5Pe2L7EWvaLmA1OvnB1przQRKt16DGeGzOYQyDNiuM2mQy',NULL,'2020-12-10 09:33:50','2020-12-10 09:33:50'),(8,'Nassimbwa mercy','nmercy@gmail.com','user',NULL,'$2y$10$0DojFcqMN0vv.B34nBJqw.PusZp/ctHAjQfrlN3d/tmPGvDeBgfIG',NULL,'2020-12-11 11:38:01','2020-12-11 11:38:01'),(9,'Joshua Mpaka','joshmpaka@gmail.com','user',NULL,'$2y$10$OPOGytl0dGXBiuEegxq1FuNZySG0c92Xci.rgsTJlvUNvVuedB83G',NULL,'2020-12-11 12:51:21','2020-12-11 12:51:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-15 18:20:46
