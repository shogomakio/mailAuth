-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ppjob
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.29-MariaDB

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
-- Table structure for table `m_administrator_accounts`
--

DROP TABLE IF EXISTS `m_administrator_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_administrator_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `m_administrator_accounts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_administrator_accounts`
--

LOCK TABLES `m_administrator_accounts` WRITE;
/*!40000 ALTER TABLE `m_administrator_accounts` DISABLE KEYS */;
INSERT INTO `m_administrator_accounts` VALUES (2,'admin name','2222222','admin@admin.com','$2y$10$ukSZaZmAWkYaUF2JoUInTeYVzRklU1OzabePubSHWufV5A.TD.0ou','4f3tZbCgxX2vrmpP0sD1G87gAesrYUwtOjATYmmYbpLc3q5xZ6CdNcIOKgoA','2018-02-09 08:56:29','2018-02-09 08:56:29');
/*!40000 ALTER TABLE `m_administrator_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_companies`
--

DROP TABLE IF EXISTS `m_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `business_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headquarters_number` int(11) DEFAULT NULL,
  `headquarters_address1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headquarters_address2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headquarters_address3` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headquarters_address_romaji` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` double(8,2) DEFAULT NULL,
  `foundation_date` date DEFAULT NULL,
  `employees_quantity` int(11) DEFAULT NULL,
  `homepage` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_zipcode` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address3` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officec_address_romaji` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_fax` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_staff_last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_staff_first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_staff_department` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_staff_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_staff_telephone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_staff_email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline_end_of_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline_assigned_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_end_of_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_assigned_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill_notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_companies`
--

LOCK TABLES `m_companies` WRITE;
/*!40000 ALTER TABLE `m_companies` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_company_accounts`
--

DROP TABLE IF EXISTS `m_company_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_company_accounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miss_count` int(11) NOT NULL,
  `locked` tinyint(1) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_company_accounts`
--

LOCK TABLES `m_company_accounts` WRITE;
/*!40000 ALTER TABLE `m_company_accounts` DISABLE KEYS */;
INSERT INTO `m_company_accounts` VALUES (1,132132,'2018-02-09 08:55:34','2018-02-09 08:55:34',NULL,'company@company.com','$2y$10$UcMBAtjZnA6AQPcIeawbouLLFBjg.HUtN3tx93rGIjuTxff5lGwb6',0,0,'ok','2naurnPflh1tiyFTQ6m5aHnW9GXqew9CEgxxM4ERhwfbGNCodjgham3dDtxf');
/*!40000 ALTER TABLE `m_company_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_user_accounts`
--

DROP TABLE IF EXISTS `m_user_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_user_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `m_user_accounts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user_accounts`
--

LOCK TABLES `m_user_accounts` WRITE;
/*!40000 ALTER TABLE `m_user_accounts` DISABLE KEYS */;
INSERT INTO `m_user_accounts` VALUES (1,'shogo','user@user.com','$2y$10$9L5XqL/XzciBFXBIiJtxBOEyCNm3ql5gUQArVSD3MmegLe4pAC0Gy','lpczneG6pQaZpAKoLgzgfhZEjIXEiXHYgHGBjoKZ30Nw2Hu3YNnXYqHh8DJH','2018-02-13 02:59:04','2018-02-13 02:59:04'),(2,'raiden','raiden@raiden.com','$2y$10$km8TLGt/NcCBkRkIb1.bQujw4QKVHeXp8wMwUKzBt8sLBUOdCtd/a','Z3Ql9mQdCfG19f7Jvhm7AOH27IwJ3cUhf1i7cLA1v2nsoKIB0sBypY4sOYeU','2018-02-14 03:14:19','2018-02-14 03:14:19');
/*!40000 ALTER TABLE `m_user_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_02_08_103343_create_master_company_table',1),(4,'2017_12_12_081539_create_products_table',2),(5,'2017_12_19_071447_add_col_admin',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `t_messages`
--

DROP TABLE IF EXISTS `t_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `receiver_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `read_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `subject` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `requirement` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `notification_level` char(191) COLLATE utf8_unicode_ci NOT NULL,
  `send_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_messages`
--

LOCK TABLES `t_messages` WRITE;
/*!40000 ALTER TABLE `t_messages` DISABLE KEYS */;
INSERT INTO `t_messages` VALUES (1,'A_2','U_1','testing first message to user 1',1,0,'job_1','$request->requirement','2','2018-02-16 05:01:29'),(2,'A_2','U_1','testing first message to user 1',1,1,'job_1','$request->requirement','2','2018-02-16 05:02:02'),(3,'A_2','U_1','testing number 2',1,0,'Re:$request->subject','$request->requirement','2','2018-02-16 06:04:50'),(4,'A_2','U_1','asdasd',1,1,'Re:$request->subject','$request->requirement','2','2018-02-16 06:53:38'),(5,'A_2','U_1','testing sample 4',1,1,'Re:$request->subject','$request->requirement','2','2018-02-16 06:53:48'),(6,'A_2','U_1','testing sample 5\r\nokay?',1,1,'Re:$request->subject','$request->requirement','2','2018-02-16 06:54:45'),(7,'U_1','A_2','asdasdasdasdasdasd a',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 01:00:38'),(8,'U_1','A_2','test 02-19',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:39:40'),(9,'U_1','A_2','test 02-19 13:42',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:43:01'),(10,'U_1','A_2','test 02-19 13:42',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:43:32'),(11,'U_1','A_2','test 02-19 13:42',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:44:08'),(12,'U_1','A_2','test 02-19 13:42',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:46:31'),(13,'U_1','A_2','test 02-19 13:42',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:47:24'),(14,'U_1','A_2','test 02-19 13:42',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:48:30'),(15,'U_1','A_2','test 02-19 13:42 asd',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:50:03'),(16,'U_1','A_2','aasdasdsadsdad nnmnm',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:50:58'),(17,'U_1','A_2','sssssssssssssssssss',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:51:46'),(18,'U_1','A_2','qqqqqqqqqqqq',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:52:11'),(19,'U_1','A_2','eeeeeee',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:52:43'),(20,'U_1','A_2','eeeeeeea',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:52:55'),(21,'U_1','A_2','eeeeeeeaqqq',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:53:42'),(22,'U_1','A_2','asdasdasd',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:55:25'),(23,'U_1','A_2','asdasdasd',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:57:40'),(24,'U_1','A_2','asdasdasd',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 04:57:53'),(25,'U_1','A_2','<br>',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 05:11:08'),(26,'U_1','A_2','asdqqwe',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 05:25:34'),(27,'U_1','A_2','qweqwe',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 05:28:20'),(28,'A_2','U_1','testing 1',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 06:08:51'),(29,'A_2','U_1','2',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 06:09:04'),(30,'A_2','U_1','3',1,0,'Re:$request->subject','$request->requirement','2','2018-02-19 06:09:11'),(31,'A_2','U_1','4',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 06:09:18'),(32,'A_2','U_1','5',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 06:09:28'),(33,'U_1','A_2','1',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 06:10:09'),(34,'U_1','A_2','testing requeriment2',1,1,'Re:$request->subject','$request->requirement','2','2018-02-19 06:13:29'),(35,'U_1','A_2','testing 2 requi222',0,1,'Re:User','requi222','2','2018-02-19 06:14:44'),(36,'A_2','U_1','from admin 2',0,1,'Re:','requi222','2','2018-02-19 06:34:51'),(37,'A_2','U_1','admin test 3',0,1,'Re:Admin','requi222','2','2018-02-19 06:35:53'),(38,'A_2','U_1','test 4',0,1,'Re:Admin','requi222','2','2018-02-19 06:36:03'),(39,'A_2','U_1','test5',0,1,'Re:Admin','requi222','2','2018-02-19 06:36:15'),(40,'A_2','U_1','test 6',0,1,'Re:Admin','requi222','2','2018-02-19 06:36:23'),(41,'C_1','U_1','testing 2 requi222',0,1,'Re:Company','req3','2','2018-02-19 06:14:44');
/*!40000 ALTER TABLE `t_messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-19 18:07:58
