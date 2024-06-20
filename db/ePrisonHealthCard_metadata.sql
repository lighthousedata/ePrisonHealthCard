CREATE DATABASE  IF NOT EXISTS `id2021_primis_2022` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `id2021_primis_2022`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 192.168.7.19    Database: id2021_primis_2022
-- ------------------------------------------------------
-- Server version	8.0.37-0ubuntu0.22.04.3

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `head_quarters_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `fulname` varchar(150) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appeal_statuses`
--

DROP TABLE IF EXISTS `appeal_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appeal_statuses` (
  `id` bigint unsigned NOT NULL,
  `prisoners_no` varchar(255) NOT NULL,
  `case_id` int NOT NULL,
  `appeal_date` date NOT NULL,
  `appeal_against` varchar(120) NOT NULL,
  `general_remarks` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appeal_statuses`
--

LOCK TABLES `appeal_statuses` WRITE;
/*!40000 ALTER TABLE `appeal_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `appeal_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_history_at_entry`
--

DROP TABLE IF EXISTS `art_history_at_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `art_history_at_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `HIV_status` varchar(50) NOT NULL,
  `on_ART` varchar(10) DEFAULT NULL,
  `ART_init_Date` date DEFAULT NULL,
  `current_ART_ID` varchar(50) DEFAULT NULL,
  `current_Regimen` varchar(50) DEFAULT NULL,
  `new_ART_ID` varchar(50) DEFAULT NULL,
  `new_Regimen` varchar(50) DEFAULT NULL,
  `DM` varchar(10) NOT NULL,
  `Hx_of_TB` varchar(10) NOT NULL,
  `Hx_of_STI` varchar(10) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_history_at_entry`
--

LOCK TABLES `art_history_at_entry` WRITE;
/*!40000 ALTER TABLE `art_history_at_entry` DISABLE KEYS */;
INSERT INTO `art_history_at_entry` VALUES (1,2,2,'58','1',NULL,'Prev Positive','Yes',NULL,'ETYS','15A',NULL,NULL,'No','No','No','                                ','2024-04-08 08:55:31','2024-04-08 08:55:31'),(2,2,2,'59','1',NULL,'Prev Positive','Yes',NULL,'ETYS','15A',NULL,NULL,'No','No','No','gdgd','2024-04-08 08:58:58','2024-04-08 08:58:58'),(3,2,2,'61','1',NULL,'Prev Positive','Yes','2021-04-03','ARV123','15A',NULL,NULL,'No','No','No','Test','2024-04-08 10:31:06','2024-04-08 10:31:06'),(4,2,2,'61','1',NULL,'Prev Positive','Yes','2022-04-09','art002','15A',NULL,NULL,'No','No','No','                                    ','2024-04-08 14:16:04','2024-04-08 14:16:04'),(5,2,2,'54','1',NULL,'Prev Positive','Yes','2009-04-09','art006','15A',NULL,NULL,'No','No','No','                                    ','2024-04-15 09:45:51','2024-04-15 09:45:51'),(6,2,2,'5','2',NULL,'Prev Positive','Yes','2003-04-05','art0067','15A',NULL,NULL,'Yes','No','No','                                    ','2024-04-15 15:43:08','2024-04-15 15:43:08'),(8,2,2,'20','1',NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                                    ','2024-04-18 11:58:08','2024-04-18 11:58:08'),(9,2,2,'62','1',NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                                    ','2024-04-19 09:43:46','2024-04-19 09:43:46'),(10,2,2,'63',NULL,NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                ','2024-04-23 12:00:03','2024-04-23 12:00:03'),(11,2,2,'64',NULL,NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','Yes','                ','2024-04-26 10:19:43','2024-04-26 10:19:43'),(12,2,2,'65',NULL,NULL,'Prev Negative',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                ','2024-05-16 10:52:52','2024-05-16 10:52:52'),(13,2,2,'65',NULL,NULL,'Prev Negative',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                ','2024-05-16 11:27:44','2024-05-16 11:27:44'),(14,2,2,'66',NULL,NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                ','2024-06-04 09:05:23','2024-06-04 09:05:23'),(15,2,2,'67',NULL,NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                ','2024-06-04 10:43:36','2024-06-04 10:43:36'),(16,2,2,'38',NULL,NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','Yes','Yes','                ','2024-06-04 11:21:24','2024-06-04 11:21:24'),(17,2,2,'69',NULL,NULL,'Never Tested',NULL,NULL,NULL,NULL,NULL,NULL,'No','No','No','                ','2024-06-06 09:14:40','2024-06-06 09:14:40'),(18,2,2,'70',NULL,NULL,'Prev Positive','Yes','2019-05-30','ART234',NULL,NULL,NULL,'Yes','Yes','No','                ','2024-06-14 14:14:15','2024-06-14 14:14:15');
/*!40000 ALTER TABLE `art_history_at_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `art_service`
--

DROP TABLE IF EXISTS `art_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `art_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `ART_Number` varchar(100) NOT NULL,
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `art_service`
--

LOCK TABLES `art_service` WRITE;
/*!40000 ALTER TABLE `art_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `art_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audits`
--

DROP TABLE IF EXISTS `audits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audits` (
  `id` bigint unsigned NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint unsigned NOT NULL,
  `old_values` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `new_values` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audits_auditable_type_auditable_id_index` (`auditable_type`(191),`auditable_id`),
  KEY `audits_user_id_user_type_index` (`user_id`,`user_type`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audits`
--

LOCK TABLES `audits` WRITE;
/*!40000 ALTER TABLE `audits` DISABLE KEYS */;
/*!40000 ALTER TABLE `audits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `basic_body_checkups`
--

DROP TABLE IF EXISTS `basic_body_checkups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `basic_body_checkups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `service_date` datetime NOT NULL,
  `temperature_readings` double(10,2) NOT NULL,
  `systolic` int NOT NULL,
  `dystolic` int NOT NULL,
  `kg` double DEFAULT NULL,
  `bmi_muac` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basic_body_checkups`
--

LOCK TABLES `basic_body_checkups` WRITE;
/*!40000 ALTER TABLE `basic_body_checkups` DISABLE KEYS */;
/*!40000 ALTER TABLE `basic_body_checkups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batchings`
--

DROP TABLE IF EXISTS `batchings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `batchings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `date` date NOT NULL,
  `item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bag_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batchings`
--

LOCK TABLES `batchings` WRITE;
/*!40000 ALTER TABLE `batchings` DISABLE KEYS */;
/*!40000 ALTER TABLE `batchings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `belongings_and_personal__effects`
--

DROP TABLE IF EXISTS `belongings_and_personal__effects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `belongings_and_personal__effects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `pdate` date NOT NULL,
  `property_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `property_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `belongings_and_personal__effects`
--

LOCK TABLES `belongings_and_personal__effects` WRITE;
/*!40000 ALTER TABLE `belongings_and_personal__effects` DISABLE KEYS */;
/*!40000 ALTER TABLE `belongings_and_personal__effects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blood_presure`
--

DROP TABLE IF EXISTS `blood_presure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blood_presure` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `bdate` datetime NOT NULL,
  `blood_presure` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood_presure`
--

LOCK TABLES `blood_presure` WRITE;
/*!40000 ALTER TABLE `blood_presure` DISABLE KEYS */;
/*!40000 ALTER TABLE `blood_presure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_lab_test`
--

DROP TABLE IF EXISTS `book_lab_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_lab_test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lab_test_id` int NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `test_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Done',
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `service_date` date NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_lab_test`
--

LOCK TABLES `book_lab_test` WRITE;
/*!40000 ALTER TABLE `book_lab_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `book_lab_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(111) NOT NULL,
  `details` varchar(333) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characteristics`
--

DROP TABLE IF EXISTS `characteristics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `characteristics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `skin_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `head_abnormality_in_size_or_shape` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `eye_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `perforation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sight_defect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ear_defect` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ear_perforation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tooth_disorder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `circumcision` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'N/A',
  `hernia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tatoo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `marks_scars` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `others` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characteristics`
--

LOCK TABLES `characteristics` WRITE;
/*!40000 ALTER TABLE `characteristics` DISABLE KEYS */;
/*!40000 ALTER TABLE `characteristics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinical_referral`
--

DROP TABLE IF EXISTS `clinical_referral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clinical_referral` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `clinical_referral` varchar(50) NOT NULL,
  `hospital_name` varchar(150) DEFAULT NULL,
  `outcome` varchar(50) DEFAULT NULL,
  `outcome_date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `voided` int NOT NULL DEFAULT '0',
  `voided_by` int DEFAULT NULL,
  `voided_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinical_referral`
--

LOCK TABLES `clinical_referral` WRITE;
/*!40000 ALTER TABLE `clinical_referral` DISABLE KEYS */;
INSERT INTO `clinical_referral` VALUES (1,'9','Entry','2024-04-15','Yes','Test Type 1','Escape','2024-04-10','                          ','2024-04-15 12:06:46','2024-04-15 12:06:46',0,NULL,NULL),(2,'5','Entry','2024-04-09','Yes','Urine LAM','Transfered','2024-04-15','                          ','2024-04-15 15:47:24','2024-04-15 15:47:24',0,NULL,NULL),(3,'64','Entry','2024-03-26','Yes','Test Type 1','Released','2024-04-26','                          ','2024-04-26 10:27:16','2024-04-26 10:27:16',0,NULL,NULL),(4,'20','Entry','2024-05-24','No',NULL,NULL,NULL,'                          ','2024-05-24 10:10:53','2024-05-24 10:10:53',0,NULL,NULL),(5,'38','Entry','2024-04-09','Yes','QECH',NULL,NULL,'            ','2024-06-04 11:32:57','2024-06-04 11:32:57',0,NULL,NULL),(6,'38','Entry','2024-05-04','Yes','Kamuzu Central Hospital',NULL,NULL,'            ','2024-06-04 12:55:40','2024-06-04 12:55:40',1,2,'2024-06-04 00:00:00'),(7,'70','Entry','2024-06-14','Yes','Kamuzu Central Hospital',NULL,NULL,'','2024-06-14 14:24:46','2024-06-14 14:24:46',0,NULL,NULL);
/*!40000 ALTER TABLE `clinical_referral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinical_services`
--

DROP TABLE IF EXISTS `clinical_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clinical_services` (
  `id` int NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinical_services`
--

LOCK TABLES `clinical_services` WRITE;
/*!40000 ALTER TABLE `clinical_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `clinical_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaints` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cdate` date NOT NULL,
  `nature_of_request` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `action_taken` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `contact_id` int NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `covid19`
--

DROP TABLE IF EXISTS `covid19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `covid19` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `covid19_screening` varchar(50) NOT NULL,
  `type_of_test` varchar(50) DEFAULT NULL,
  `covid19_test` varchar(50) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `voided` int DEFAULT '0',
  `voided_by` int DEFAULT NULL,
  `voided_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `covid19`
--

LOCK TABLES `covid19` WRITE;
/*!40000 ALTER TABLE `covid19` DISABLE KEYS */;
INSERT INTO `covid19` VALUES (1,'54','Entry','2024-04-15','Presumptive','New Test','Negative','2024-05-15','                          ','2024-04-15 10:44:19','2024-04-15 10:44:19',0,NULL,NULL),(2,'63','Entry','2024-05-23','Presumptive','New Test','Negative','2024-06-23','Testing','2024-05-23 11:29:17','2024-05-23 11:29:17',1,2,'2024-05-23 00:00:00'),(3,'63','Entry','2024-05-23','Presumptive','New Test','Negative','2024-06-23','Test','2024-05-23 11:49:17','2024-05-23 11:49:17',1,2,'2024-05-23 00:00:00'),(4,'38','Entry','2024-05-04','Not Presumptive',NULL,NULL,'2024-06-04','','2024-06-04 11:31:03','2024-06-04 11:31:03',0,NULL,NULL),(5,'38','Stay','2024-06-04','Presumptive','Re-Test','Negative','2024-07-04','','2024-06-04 11:31:21','2024-06-04 11:31:21',1,2,'2024-06-04 00:00:00'),(6,'70','Entry','2024-06-14','Not Presumptive',NULL,NULL,'2024-07-14','','2024-06-14 14:23:55','2024-06-14 14:23:55',0,NULL,NULL);
/*!40000 ALTER TABLE `covid19` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `covid19_test_type`
--

DROP TABLE IF EXISTS `covid19_test_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `covid19_test_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `covid19_test_type`
--

LOCK TABLES `covid19_test_type` WRITE;
/*!40000 ALTER TABLE `covid19_test_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `covid19_test_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `death_and_causes`
--

DROP TABLE IF EXISTS `death_and_causes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `death_and_causes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `causes` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `death_and_causes`
--

LOCK TABLES `death_and_causes` WRITE;
/*!40000 ALTER TABLE `death_and_causes` DISABLE KEYS */;
/*!40000 ALTER TABLE `death_and_causes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `death_cause`
--

DROP TABLE IF EXISTS `death_cause`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `death_cause` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `death_cause`
--

LOCK TABLES `death_cause` WRITE;
/*!40000 ALTER TABLE `death_cause` DISABLE KEYS */;
/*!40000 ALTER TABLE `death_cause` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail` (
  `user_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` int DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin` int NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail`
--

LOCK TABLES `detail` WRITE;
/*!40000 ALTER TABLE `detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developers`
--

DROP TABLE IF EXISTS `developers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `developers` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developers`
--

LOCK TABLES `developers` WRITE;
/*!40000 ALTER TABLE `developers` DISABLE KEYS */;
/*!40000 ALTER TABLE `developers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diagnosis`
--

DROP TABLE IF EXISTS `diagnosis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diagnosis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diagnosis`
--

LOCK TABLES `diagnosis` WRITE;
/*!40000 ALTER TABLE `diagnosis` DISABLE KEYS */;
/*!40000 ALTER TABLE `diagnosis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discharge_certificates`
--

DROP TABLE IF EXISTS `discharge_certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discharge_certificates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discharged_date` date NOT NULL,
  `sentence` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prepared_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `approved_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reason_for_discharge` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discharge_certificates`
--

LOCK TABLES `discharge_certificates` WRITE;
/*!40000 ALTER TABLE `discharge_certificates` DISABLE KEYS */;
/*!40000 ALTER TABLE `discharge_certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `district` (
  `district_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `region_id` int NOT NULL DEFAULT '0',
  `creator` int NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `retired` tinyint(1) NOT NULL DEFAULT '0',
  `retired_by` int DEFAULT NULL,
  `date_retired` datetime DEFAULT NULL,
  `retire_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district`
--

LOCK TABLES `district` WRITE;
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
INSERT INTO `district` VALUES (1,'Chitipa',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(2,'Kasungu',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(3,'Mangochi',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(4,'Karonga',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(5,'Machinga',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(6,'Nkhotakota ',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(7,'Nkhata-bay',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(8,'Ntchisi',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(9,'Zomba',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(10,'Zomba City',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(11,'Chiradzulu',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(12,'Dowa ',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(13,'Rumphi',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(14,'Blantyre',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(15,'Mzimba',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(16,'Salima',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(17,'Likoma',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(18,'Lilongwe',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(19,'Mwanza',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(20,'Mchinji',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(21,'Mzuzu City',2,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(22,'Thyolo',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(23,'Dedza',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(24,'Mulanje',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(25,'Ntcheu',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(26,'Phalombe',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(27,'Chikwawa',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(28,'Lilongwe City',1,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(29,'Nsanje ',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(30,'Balaka',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(31,'Neno',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL),(32,'Blantyre City',3,1,'2011-07-27 12:17:25',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `district` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drug_dispensory`
--

DROP TABLE IF EXISTS `drug_dispensory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drug_dispensory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `drug_id` int NOT NULL,
  `prescription_id` int NOT NULL,
  `user_id` int NOT NULL,
  `dispensed_quantity` int NOT NULL,
  `dispensed_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `action` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drug_dispensory`
--

LOCK TABLES `drug_dispensory` WRITE;
/*!40000 ALTER TABLE `drug_dispensory` DISABLE KEYS */;
/*!40000 ALTER TABLE `drug_dispensory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drugs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `catId` int NOT NULL,
  `code_number` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `critical_amount` int NOT NULL,
  `unit` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugs`
--

LOCK TABLES `drugs` WRITE;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `earnings`
--

DROP TABLE IF EXISTS `earnings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `earnings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `edate` date NOT NULL,
  `money_in` double NOT NULL,
  `spent` double NOT NULL,
  `descr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `earnings`
--

LOCK TABLES `earnings` WRITE;
/*!40000 ALTER TABLE `earnings` DISABLE KEYS */;
/*!40000 ALTER TABLE `earnings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
  `employee_salary` double NOT NULL COMMENT 'employee salary',
  `employee_age` int NOT NULL COMMENT 'employee age',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `name` varchar(255) NOT NULL COMMENT 'Employee Name',
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(16) DEFAULT NULL,
  `address` text,
  `salary` float(10,2) NOT NULL COMMENT 'employee salary',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entry_status`
--

DROP TABLE IF EXISTS `entry_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entry_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entry_status`
--

LOCK TABLES `entry_status` WRITE;
/*!40000 ALTER TABLE `entry_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `entry_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `external_contacts`
--

DROP TABLE IF EXISTS `external_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `external_contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `edate` date NOT NULL,
  `letter_in_or_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_in_out` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `external_contacts`
--

LOCK TABLES `external_contacts` WRITE;
/*!40000 ALTER TABLE `external_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `external_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `stations_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `regions_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prisoners_no` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `caption` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_remarks`
--

DROP TABLE IF EXISTS `general_remarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `general_remarks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gdate` date NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_remarks`
--

LOCK TABLES `general_remarks` WRITE;
/*!40000 ALTER TABLE `general_remarks` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_remarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `head_quarters`
--

DROP TABLE IF EXISTS `head_quarters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `head_quarters` (
  `id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `head_quarters`
--

LOCK TABLES `head_quarters` WRITE;
/*!40000 ALTER TABLE `head_quarters` DISABLE KEYS */;
INSERT INTO `head_quarters` VALUES (1,'headquarters','Zomba','2021-05-22 17:01:23','2021-05-22 17:01:23');
/*!40000 ALTER TABLE `head_quarters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_log`
--

DROP TABLE IF EXISTS `history_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `action` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ldate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_log`
--

LOCK TABLES `history_log` WRITE;
/*!40000 ALTER TABLE `history_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hiv_test`
--

DROP TABLE IF EXISTS `hiv_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hiv_test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) DEFAULT NULL,
  `visit_date` date NOT NULL,
  `eligible_for_test` varchar(10) NOT NULL,
  `type_of_test` varchar(50) DEFAULT NULL,
  `HIV_test` varchar(50) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `voided` varchar(45) NOT NULL DEFAULT '0',
  `voided_at` datetime DEFAULT NULL,
  `voided_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hiv_test`
--

LOCK TABLES `hiv_test` WRITE;
/*!40000 ALTER TABLE `hiv_test` DISABLE KEYS */;
INSERT INTO `hiv_test` VALUES (1,'61','Entry','2024-04-08','Yes','Urine LAM','Negative','2024-05-08','Testing','2024-04-08 13:50:47',0,'2024-04-08 13:50:47',NULL,'1','2024-05-02 00:00:00',2),(2,'54','Entry','2024-03-15','Yes','Urine LAM','Negative','2024-04-15','                          ','2024-04-15 09:37:27',0,'2024-04-15 09:37:27',NULL,'0',NULL,NULL),(3,'5','Entry','2024-04-15','Yes','Urine LAM','Negative','2024-04-15','                          ','2024-04-15 13:40:36',0,'2024-04-15 13:40:36',NULL,'0',NULL,NULL),(4,'5','Entry','2024-03-15','Yes','Urine LAM','Negative','2024-04-15','                          ','2024-04-15 13:42:18',0,'2024-04-15 13:42:18',NULL,'0',NULL,NULL),(5,'63','Entry','2024-04-23','No',NULL,NULL,'2024-05-23','                          ','2024-04-23 12:15:13',0,'2024-04-23 12:15:13',NULL,'0',NULL,NULL),(6,'63','Entry','2024-04-02','No',NULL,NULL,'2024-04-23','                          ','2024-04-23 13:48:04',0,'2024-04-23 13:48:04',NULL,'1','2024-05-23 00:00:00',2),(7,'62','Entry','2024-03-26','Yes','Test Type 1','Negative','2024-04-26','                          ','2024-04-26 08:01:08',0,'2024-04-26 08:01:08',NULL,'1','2024-05-03 00:00:00',2),(8,'62','Entry','2024-02-26','No',NULL,NULL,'2024-03-26','shsh','2024-04-26 08:08:31',0,'2024-04-26 08:08:31',NULL,'1','2024-05-02 00:00:00',2),(9,'1','Entry','2024-04-08','Yes','Urine LAM','Negative','2024-05-08','Test','2024-04-26 09:31:11',0,'2024-04-26 09:31:11',NULL,'0',NULL,NULL),(13,'64','Entry','2024-04-08','Yes','Urine LAM','Negative','2024-05-08','Testing','2024-04-26 10:26:14',0,'2024-04-26 10:26:14',NULL,'0',NULL,NULL),(14,'62','Entry','2024-05-03','Yes','Test Type 2','Negative','2024-06-09','','2024-05-03 14:50:10',2,'2024-05-03 14:54:18',2,'0',NULL,NULL),(15,'65','Entry','2023-09-29','Yes','15A','Negative','2024-04-02','            ','2024-05-16 11:14:20',5,'2024-05-16 11:14:20',NULL,'0',NULL,NULL),(16,'20','Entry','2024-05-24','No',NULL,NULL,'2024-06-24','            ','2024-05-24 09:16:25',2,'2024-05-24 09:16:25',NULL,'1','2024-05-24 00:00:00',2),(17,'65','Entry','2023-10-02','Yes','Rapid test','Negative','2024-04-02','','2024-06-03 14:20:35',5,'2024-06-03 14:20:35',NULL,'0',NULL,NULL),(18,'38','Entry','2024-06-04','No',NULL,NULL,'2024-07-04','','2024-06-04 11:22:30',2,'2024-06-04 11:22:30',NULL,'0',NULL,NULL),(19,'38','Entry','2024-05-04','Yes','DNA PCR','Negative','2024-06-04','            ','2024-06-04 11:24:08',2,'2024-06-04 11:24:08',NULL,'0',NULL,NULL),(20,'69','Entry','2024-04-13','Yes','Rapid test','Negative','2024-08-13','HEP B NEG','2024-06-06 09:16:58',5,'2024-06-06 09:29:31',5,'0',NULL,NULL),(21,'69','Stay','2024-08-13','Yes','Rapid test','Negative','2024-02-13','','2024-06-06 09:34:07',5,'2024-06-06 09:34:07',NULL,'0',NULL,NULL),(22,'70','Entry','2024-06-14','Yes','DNA PCR','Positive','2024-07-14','Comments','2024-06-14 14:21:24',2,'2024-06-14 14:21:24',NULL,'0',NULL,NULL),(23,'70','Entry','2024-05-14','No',NULL,NULL,'2024-06-14','','2024-06-14 14:22:11',2,'2024-06-14 14:22:11',NULL,'0',NULL,NULL);
/*!40000 ALTER TABLE `hiv_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hiv_test_type`
--

DROP TABLE IF EXISTS `hiv_test_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hiv_test_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hiv_test_type`
--

LOCK TABLES `hiv_test_type` WRITE;
/*!40000 ALTER TABLE `hiv_test_type` DISABLE KEYS */;
INSERT INTO `hiv_test_type` VALUES (1,2,2,'Rapid test','2024-04-04 07:43:10','2024-04-04 07:43:10'),(2,2,2,'DNA PCR','2024-04-04 08:51:23','2024-04-04 08:51:23');
/*!40000 ALTER TABLE `hiv_test_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital_name`
--

DROP TABLE IF EXISTS `hospital_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospital_name` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital_name`
--

LOCK TABLES `hospital_name` WRITE;
/*!40000 ALTER TABLE `hospital_name` DISABLE KEYS */;
INSERT INTO `hospital_name` VALUES (1,2,2,'Kamuzu Central Hospital','2024-04-08 11:36:01','2024-04-08 11:36:01'),(2,2,2,'Mzuzu Central Hospital','2024-04-12 11:58:58','2024-04-12 11:58:58'),(3,2,2,'QECH','2024-04-12 12:27:44','2024-04-12 12:27:44'),(4,2,2,'ZCH','2024-04-12 13:37:23','2024-04-12 13:37:23');
/*!40000 ALTER TABLE `hospital_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospitalisation_and_transfers`
--

DROP TABLE IF EXISTS `hospitalisation_and_transfers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitalisation_and_transfers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `referral_date` date NOT NULL,
  `hospital` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospitalisation_and_transfers`
--

LOCK TABLES `hospitalisation_and_transfers` WRITE;
/*!40000 ALTER TABLE `hospitalisation_and_transfers` DISABLE KEYS */;
/*!40000 ALTER TABLE `hospitalisation_and_transfers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `information_provisions`
--

DROP TABLE IF EXISTS `information_provisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `information_provisions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `information_provisions`
--

LOCK TABLES `information_provisions` WRITE;
/*!40000 ALTER TABLE `information_provisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `information_provisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspection_grievances_requests`
--

DROP TABLE IF EXISTS `inspection_grievances_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspection_grievances_requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `idate` date NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `report_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recommendation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `follow_up` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspection_grievances_requests`
--

LOCK TABLES `inspection_grievances_requests` WRITE;
/*!40000 ALTER TABLE `inspection_grievances_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `inspection_grievances_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventeries`
--

DROP TABLE IF EXISTS `inventeries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inventeries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `catId` int NOT NULL,
  `code_number` varchar(222) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventeries`
--

LOCK TABLES `inventeries` WRITE;
/*!40000 ALTER TABLE `inventeries` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventeries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lab_test_type`
--

DROP TABLE IF EXISTS `lab_test_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lab_test_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_test_type`
--

LOCK TABLES `lab_test_type` WRITE;
/*!40000 ALTER TABLE `lab_test_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `lab_test_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lab_tests`
--

DROP TABLE IF EXISTS `lab_tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lab_tests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `screening` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Done',
  `test_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Done',
  `results` varchar(50) NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `service_date` date NOT NULL,
  `treatment` int NOT NULL DEFAULT '0' COMMENT '1 = Treatment, 2 = Completed Treatment',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_tests`
--

LOCK TABLES `lab_tests` WRITE;
/*!40000 ALTER TABLE `lab_tests` DISABLE KEYS */;
/*!40000 ALTER TABLE `lab_tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `letters`
--

DROP TABLE IF EXISTS `letters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `letters` (
  `id` bigint unsigned NOT NULL,
  `prisoners_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `letters`
--

LOCK TABLES `letters` WRITE;
/*!40000 ALTER TABLE `letters` DISABLE KEYS */;
/*!40000 ALTER TABLE `letters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `malaria`
--

DROP TABLE IF EXISTS `malaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `malaria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `testing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Done',
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `malaria`
--

LOCK TABLES `malaria` WRITE;
/*!40000 ALTER TABLE `malaria` DISABLE KEYS */;
/*!40000 ALTER TABLE `malaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_history`
--

DROP TABLE IF EXISTS `medical_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(50) NOT NULL,
  `currently_ill` varchar(50) NOT NULL,
  `fainted` varchar(50) NOT NULL,
  `live_with_someone_have_deficiency_of_immune` varchar(50) NOT NULL,
  `deficincy_of_immune` varchar(50) NOT NULL,
  `pregnant_posibility` varchar(50) NOT NULL,
  `currently_fever` varchar(50) NOT NULL,
  `anticoagulation_medications` varchar(50) NOT NULL,
  `thymus_disorder` varchar(50) NOT NULL,
  `blood_transfusion_or_Immune_globulin` varchar(50) NOT NULL,
  `surgical_procedure` varchar(50) NOT NULL,
  `allergy` varchar(50) NOT NULL,
  `service_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_history`
--

LOCK TABLES `medical_history` WRITE;
/*!40000 ALTER TABLE `medical_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `medical_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_screenings`
--

DROP TABLE IF EXISTS `medical_screenings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_screenings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `visible_injuries` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prior_ill_treatment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mental_condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `general_physique` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `brief_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_screenings`
--

LOCK TABLES `medical_screenings` WRITE;
/*!40000 ALTER TABLE `medical_screenings` DISABLE KEYS */;
/*!40000 ALTER TABLE `medical_screenings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_treatments`
--

DROP TABLE IF EXISTS `medical_treatments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_treatments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `start_date` date NOT NULL,
  `treatment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_treatments`
--

LOCK TABLES `medical_treatments` WRITE;
/*!40000 ALTER TABLE `medical_treatments` DISABLE KEYS */;
/*!40000 ALTER TABLE `medical_treatments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `member_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nationality`
--

DROP TABLE IF EXISTS `nationality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nationality` (
  `nationality_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`nationality_id`),
  UNIQUE KEY `nationality_id_UNIQUE` (`nationality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nationality`
--

LOCK TABLES `nationality` WRITE;
/*!40000 ALTER TABLE `nationality` DISABLE KEYS */;
INSERT INTO `nationality` VALUES (1,'Algerian'),(2,'Angolan'),(3,'Beninese'),(4,'Batswan'),(5,'Burkinabe'),(6,'Burundi'),(7,'Cape Verdean'),(8,'Cameroonian'),(9,'Central African'),(10,'Chadian'),(11,'Comorian'),(12,'Congolese'),(13,'Ivoirian'),(14,'Djiboutian'),(15,'Egyptian'),(16,'Equatorial Guinean'),(17,'Eritrean'),(18,'Swazi'),(19,'Ethiopian'),(20,'Gabonese'),(21,'Gambian'),(22,'Ghanaian'),(23,'Guinean'),(24,'Kenyan'),(25,'Basotho'),(26,'Liberian'),(27,'Libyan'),(28,'Malagasy'),(29,'Malawian'),(30,'Malian'),(31,'Mauritanian'),(32,'Mauritian'),(33,'Morocian'),(34,'Mozambican'),(35,'Namibian'),(36,'Nigerian'),(37,'Nigerien'),(38,'Rwandan'),(39,'Senegalese'),(40,'Seychellois'),(41,'Sierra Leonean'),(42,'Somalian'),(43,'South Sudanese'),(44,'Sudanese'),(45,'Tanzanian'),(46,'Togolese'),(47,'Tunisian'),(48,'Ugandan'),(49,'Zambian'),(50,'Zimbabwean'),(51,'South African');
/*!40000 ALTER TABLE `nationality` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_regimen`
--

DROP TABLE IF EXISTS `new_regimen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `new_regimen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `regimen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_regimen`
--

LOCK TABLES `new_regimen` WRITE;
/*!40000 ALTER TABLE `new_regimen` DISABLE KEYS */;
INSERT INTO `new_regimen` VALUES (1,2,2,'','2024-04-04 08:51:23','2024-04-04 08:51:23'),(2,2,2,'15A','2024-04-04 13:42:18','2024-04-04 13:42:18');
/*!40000 ALTER TABLE `new_regimen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `next_of_kin`
--

DROP TABLE IF EXISTS `next_of_kin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `next_of_kin` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `next_of_kin`
--

LOCK TABLES `next_of_kin` WRITE;
/*!40000 ALTER TABLE `next_of_kin` DISABLE KEYS */;
/*!40000 ALTER TABLE `next_of_kin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offences`
--

DROP TABLE IF EXISTS `offences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoner_case_id` int NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `case_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sentence` double NOT NULL,
  `type` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offences`
--

LOCK TABLES `offences` WRITE;
/*!40000 ALTER TABLE `offences` DISABLE KEYS */;
/*!40000 ALTER TABLE `offences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outcomes`
--

DROP TABLE IF EXISTS `outcomes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outcomes` (
  `outcome_id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` int NOT NULL,
  `outcome` varchar(45) DEFAULT NULL,
  `outcome_date` date DEFAULT NULL,
  `updated_by` int NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`outcome_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outcomes`
--

LOCK TABLES `outcomes` WRITE;
/*!40000 ALTER TABLE `outcomes` DISABLE KEYS */;
INSERT INTO `outcomes` VALUES (1,61,'Transfered','2024-05-31',2,'2024-05-31 11:18:08'),(2,38,'Transfered','2024-06-04',2,'2024-06-04 15:16:30');
/*!40000 ALTER TABLE `outcomes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outpatient_department`
--

DROP TABLE IF EXISTS `outpatient_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outpatient_department` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(50) NOT NULL,
  `patient_narration` text NOT NULL,
  `diagnosis_action` varchar(100) NOT NULL,
  `service_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outpatient_department`
--

LOCK TABLES `outpatient_department` WRITE;
/*!40000 ALTER TABLE `outpatient_department` DISABLE KEYS */;
/*!40000 ALTER TABLE `outpatient_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phones` (
  `id` bigint unsigned NOT NULL,
  `prisoners_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `call` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pre_hts_survey`
--

DROP TABLE IF EXISTS `pre_hts_survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pre_hts_survey` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tested_for_hiv` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `diagnosed_with_hiv` varchar(50) NOT NULL,
  `documentation_available` varchar(50) NOT NULL,
  `on_ART` varchar(11) NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Gone for HIV Test',
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pre_hts_survey`
--

LOCK TABLES `pre_hts_survey` WRITE;
/*!40000 ALTER TABLE `pre_hts_survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `pre_hts_survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescriptions`
--

DROP TABLE IF EXISTS `prescriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prescriptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(255) NOT NULL,
  `diagnosed_of` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `duration` int NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `service_date` date NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescriptions`
--

LOCK TABLES `prescriptions` WRITE;
/*!40000 ALTER TABLE `prescriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `prescriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prison_issuances`
--

DROP TABLE IF EXISTS `prison_issuances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prison_issuances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `quantity_and_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_issued` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prison_issuances`
--

LOCK TABLES `prison_issuances` WRITE;
/*!40000 ALTER TABLE `prison_issuances` DISABLE KEYS */;
/*!40000 ALTER TABLE `prison_issuances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prisoner_cases`
--

DROP TABLE IF EXISTS `prisoner_cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prisoner_cases` (
  `id` int NOT NULL AUTO_INCREMENT,
  `case_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prisoners_no` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `admission_date` date NOT NULL,
  `commital_date` date NOT NULL,
  `security_risk` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `court` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `conviction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentence_confirmation` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `scdate` date DEFAULT NULL,
  `scndate` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `case_no` (`case_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prisoner_cases`
--

LOCK TABLES `prisoner_cases` WRITE;
/*!40000 ALTER TABLE `prisoner_cases` DISABLE KEYS */;
/*!40000 ALTER TABLE `prisoner_cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prisoner_childrens`
--

DROP TABLE IF EXISTS `prisoner_childrens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prisoner_childrens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `near_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prisoner_childrens`
--

LOCK TABLES `prisoner_childrens` WRITE;
/*!40000 ALTER TABLE `prisoner_childrens` DISABLE KEYS */;
/*!40000 ALTER TABLE `prisoner_childrens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prisoner_incidents`
--

DROP TABLE IF EXISTS `prisoner_incidents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prisoner_incidents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `udate` date NOT NULL,
  `incident` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `utime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `investigating_body` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recommendation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `follow_up` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prisoner_incidents`
--

LOCK TABLES `prisoner_incidents` WRITE;
/*!40000 ALTER TABLE `prisoner_incidents` DISABLE KEYS */;
/*!40000 ALTER TABLE `prisoner_incidents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prisoners`
--

DROP TABLE IF EXISTS `prisoners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prisoners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `stations_id` bigint DEFAULT NULL,
  `regions_id` bigint DEFAULT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `cell` varchar(20) DEFAULT NULL,
  `home_district` varchar(100) DEFAULT NULL,
  `home_ta` varchar(100) DEFAULT NULL,
  `home_village` varchar(100) DEFAULT NULL,
  `next_of_kin_name` varchar(100) DEFAULT NULL,
  `next_of_kin_contact` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) NOT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `residential_district` varchar(255) DEFAULT NULL,
  `residential_ta` varchar(255) DEFAULT NULL,
  `residential_village` varchar(255) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `denomination` varchar(255) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `entry_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NOT NULL,
  `updated_by` int DEFAULT NULL,
  `voided` int NOT NULL DEFAULT '0',
  `voided_by` int DEFAULT NULL,
  `voided_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prisoners_no` (`prisoners_no`),
  UNIQUE KEY `prisoners_no_2` (`prisoners_no`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prisoners`
--

LOCK TABLES `prisoners` WRITE;
/*!40000 ALTER TABLE `prisoners` DISABLE KEYS */;
INSERT INTO `prisoners` VALUES (1,'HQ/2022/0001',32,5,'Mbilinya','Kamchacha','Bengo','Male','1994-02-16','CL-1234','Vundula','Katutula','Mzimba','Bazuka Beleya','Nangozo Beleya','Malawian','MW-MNPCENC34XN','MW-PSS-1234','MW-DR-1234','Business','Diploma','Christianity','CCAP','1','2024-04-05','2022-02-01 01:08:30','2022-02-25 01:08:30',1,NULL,0,NULL,NULL),(2,'HQ/2022/0002',32,5,'Mbenjere','Bulukutu','Mwamwaya','Male','1980-05-01','CL-65','Mwasikanda','Kyungu','Karonga','Bulukutu','Nyambenjere','Malawian','MW-OHOHWDOUW','PSS-MW-23','DR-223','Student','Secondary Education','Islam','Mosque','1','2024-04-05','2022-01-25 05:05:19','2022-02-25 05:05:19',1,NULL,0,NULL,NULL),(3,'HQ/2022/0003',32,5,'Baluti','Mwakimbwala','Chenje','Female','2000-10-01','Cl-89','Chemusa','Mbelewe','Blantyre','Mbunduliza','Nyawuyu','Malawian','N-6734OIGLIYLDIY','PASS-U8','DR-7667','PRO','Short-cycle Tertiary Education','Atheist','PHA','2','2024-04-05','2022-02-10 05:23:52','2022-02-25 05:23:52',1,NULL,0,NULL,NULL),(4,'HQ/2022/0004',32,5,'Martha','Lodi','','Female','1995-01-12','5','Lunzu','Kapeni','Blantyre','','','Malawian','','','','',NULL,'Christianity','','1','2024-04-05','2022-02-25 05:50:06','2022-02-25 05:50:06',1,NULL,0,NULL,NULL),(5,'HQ/2022/0005',32,5,'Saul','Chirwa','','Male','1996-04-15','','Senzani','Lundu','Blantyre','','','Malawian','','','','',NULL,'Islam','','2','2024-04-05','2022-02-25 05:52:12','2022-02-25 05:52:12',1,NULL,0,NULL,NULL),(6,'HQ/2022/0006',32,5,'Goerge','George','','Male','1980-01-01','NA','NA','NA','Balaka','NA','NA','Malawian','NA','NA','NA','NA','Primary Education','N/A','NA','2','2024-04-05','2022-02-25 06:19:09','2022-02-25 06:19:09',1,NULL,0,NULL,NULL),(9,'HQ/2022/0007',32,5,'Mwayi','Mwayi','','Male','1981-01-01','5','NA','NA','Blantyre','NA','NA','Malawian','NA','NA','NA','NA','Primary Education','N/A','NA','2','2024-04-05','2022-02-25 06:20:38','2022-02-25 06:20:38',1,NULL,0,NULL,NULL),(11,'HQ/2022/0008',32,5,'James','James','','Male','1982-01-31','','Lilongwe','NA','Blantyre','','','Malawian','NA','','','NA','Diploma','N/A','NA','1','2024-04-05','2022-02-25 06:22:58','2022-02-25 06:22:58',1,NULL,0,NULL,NULL),(13,'HQ/2022/0009',32,5,'James','James','','Male','2000-01-01','7','Lilongwe','NA','Blantyre','','NA','Malawian','NA','NA','NA','NA','Diploma','N/A','NA','1','2024-04-05','2022-02-25 06:24:15','2022-02-25 06:24:15',1,NULL,0,NULL,NULL),(15,'HQ/2022/0010',32,5,'James ','Njala','Jemo','Male','2023-04-13','','Mzimba','Manzo','Chiradzulu','Noses','Martha','Beninese','00000001','','','Farmer','Secondary Education','Atheist','Chanco','1','2024-04-05','2022-02-25 06:25:09','2022-02-25 06:25:09',1,NULL,0,NULL,NULL),(16,'HQ/2022/0011',32,5,'Test','Prisoner','Test','Male','1997-06-10','','Area 25','Chimutu','Blantyre','','','Malawian','','','','','Primary Education','Christianity','','2','2024-04-05','2022-02-25 06:27:37','2022-02-25 06:27:37',1,NULL,0,NULL,NULL),(17,'HQ/2022/0012',32,5,'Test','Convict','Convict','Male','1993-05-10','','Area 25','Chimutu','Chiradzulu','','','Angolan','','','','','Secondary Education','Christianity','','1','2024-04-05','2022-02-25 06:28:51','2022-02-25 06:28:51',1,NULL,0,NULL,NULL),(18,'HQ/2022/0013',32,5,'Mark','Logan','','Male','1996-04-22','','Blantyre','Blantyre','Blantyre','','','Malawian','','','','',NULL,'Christianity','','1','2024-04-05','2022-02-25 06:31:37','2022-02-25 06:31:37',1,NULL,0,NULL,NULL),(19,'HQ/2022/0014',32,5,'Richard','Luke','Testing','Male','2004-01-01','5','Karonga','Karonga','Mzimba','Moses','Mercy','Angolan','VBQ2022','AN20225','NA','Mechanic','Short-cycle Tertiary Education','Atheist','NA','1','2024-04-05','2022-02-28 13:20:33','2022-02-28 13:20:33',1,NULL,0,NULL,NULL),(20,'PRV123',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-05','2','Zomba','Malemia','Msangeni','Test Test','0999778721','Malawian','','Lilongwe City','Area 49','Bagidadi Houses','Secondary Education','2','CCAP','Remandee','2024-04-05','2024-03-26 10:09:29','2024-03-26 10:09:29',1,NULL,0,NULL,NULL),(23,'PRV123s',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-13','2','1','2','2','Test','Test','Malawian','t6eu6uw','5','2','2','Secondary Education','Christianity','CCAP','1','2024-04-05','2024-03-26 10:17:39','2024-03-26 10:17:39',1,NULL,0,NULL,NULL),(24,'PRV1234',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-13','2','Kasungu','Nthalire','Mbilima','Test','Test','Malawian','t6eu6uw','Mangochi','Nthalire','4','Diploma','Christianity','CCAP','1','2024-04-05','2024-03-26 11:41:59','2024-03-26 11:41:59',1,NULL,0,NULL,NULL),(25,'PRV12344',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-05','2','Mangochi','Nthalire','Maligumu','Test','Test','Malawian','t6eu6uw','Kasungu','Mwenemisuku','2','Short-cycle Tertiary Education','Christianity','CCAP','1','2024-04-05','2024-03-26 11:47:28','2024-03-26 11:47:28',1,NULL,0,NULL,NULL),(37,'PRV123234',2,2,'Pachawo','Bisani','HDJ','Female','1998-03-14','2','3','206','21864','Test','0999554321','2','t6eu6uw','3','206','21863','Secondary Education','4','CCAP','1','2024-04-05','2024-03-27 14:14:30','2024-03-27 14:14:30',1,NULL,0,NULL,NULL),(38,'PRV123212',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-06','2','2','66','5581','Test','0999554321','Malawian','','28','122','16513','Primary Education','2','CCAP','Convict','2024-04-05','2024-03-27 14:17:15','2024-03-27 14:17:15',1,NULL,0,NULL,NULL),(39,'PRV123223',2,2,'Pachawo','Bisani','HDJ','Female','1992-03-13','2','2','66','5581','Test','0999554321','2','t6eu6uw','3','205','21685','Secondary Education','4','CCAP','1','2024-04-05','2024-03-27 14:20:15','2024-03-27 14:20:15',1,NULL,0,NULL,NULL),(40,'PRV12389',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-13','2','2','66','5581','Test','0999554321','4','t6eu6uw','5','215','22769','Secondary Education','4','CCAP','2','2024-04-05','2024-03-27 14:21:44','2024-03-27 14:21:44',1,NULL,0,NULL,NULL),(41,'PRV1231',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-13','2','3','206','21863','Test','0999554321','2','t6eu6uw','3','205','21687','Short-cycle Tertiary Education','19','CCAP','1','2024-04-05','2024-03-27 14:23:09','2024-03-27 14:23:09',1,NULL,0,NULL,NULL),(43,'PRV123345',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-07','2','2','66','5581','Test','0999554321','2','t6eu6uw','3','206','21864','Secondary Education','4','CCAP','1','2024-04-05','2024-03-28 07:41:20','2024-03-28 07:41:20',1,NULL,0,NULL,NULL),(44,'PRV123s4',2,2,'Pachawo','Bisani','HDJ','Male','1990-03-13','2','2','66','5580','','','2','t6eu6uw','3','205','21686','Secondary Education','4','CCAP','1','2024-04-05','2024-03-28 08:06:29','2024-03-28 08:06:29',1,NULL,0,NULL,NULL),(45,'PRV123s234',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-04','2','2','66','5581','Test','0999554321','2','t6eu6uw','2','66','5581','Secondary Education','4','CCAP','1','2024-04-05','2024-03-28 08:08:53','2024-03-28 08:08:53',1,NULL,0,NULL,NULL),(46,'PRV123s444',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-06','2','2','66','5581','Test','0999554321','2','t6eu6uw','1','1','2','Short-cycle Tertiary Education','4','CCAP','1','2024-04-05','2024-03-28 08:10:17','2024-03-28 08:10:17',1,NULL,0,NULL,NULL),(47,'1234',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-05','2','1','2','205','Test','0999554321','1','t6eu6uw','2','66','5581','Short-cycle Tertiary Education','4','CCAP','1','2024-04-05','2024-03-28 08:11:34','2024-03-28 08:11:34',1,NULL,0,NULL,NULL),(48,'4565',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-08','2','1','2','206','Test','0999554321','2','t6eu6uw','2','67','5727','Short-cycle Tertiary Education','13','CCAP','1','2024-04-05','2024-03-28 08:16:26','2024-03-28 08:16:26',1,NULL,0,NULL,NULL),(49,'PRV123ssa',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-13','2','2','66','5581','Test','0999554321','25','t6eu6uw','4','8','611','Secondary Education','4','CCAP','1','2024-04-05','2024-03-28 08:26:10','2024-03-28 08:26:10',1,NULL,0,NULL,NULL),(50,'PRV123w',2,2,'Pachawo','Bisani','HDJ','Female','1990-03-07','2','2','66','5581','Test','0999554321','2','t6eu6uw','2','66','5581','Short-cycle Tertiary Education','4','CCAP','1','2024-04-05','2024-03-28 08:30:45','2024-03-28 08:30:45',1,NULL,0,NULL,NULL),(51,'64374re',2,2,'Pachalo','Tembo','Pachalo','Male','1990-02-27','2','4','1758','45282','Chawa','0999554321','2','t6eu6uw','2','67','5727','Secondary Education','2','CCAP','1','2024-04-05','2024-03-28 09:47:51','2024-03-28 09:47:51',1,NULL,0,NULL,NULL),(52,'PRV123123',2,2,'Pachalo','Bisani','Pachalo','Male','1997-02-08','2','3','206','21862','Test','0999554321','4','t6eu6uw','3','206','21863','Secondary Education','4','CCAP','2','2024-04-05','2024-03-28 10:26:53','2024-03-28 10:26:53',1,NULL,0,NULL,NULL),(53,'PRV123444',2,2,'Pachawo','Tembo','HDJ','Female','1998-03-07','2','1','2','205','Chawa','0999554321','2','t6eu6uw','2','66','5581','Short-cycle Tertiary Education','13','CCAP','1','2024-04-05','2024-03-28 10:28:38','2024-03-28 10:28:38',1,NULL,0,NULL,NULL),(54,'64762',2,2,'Test','Test','Test','Female','1990-04-03','2','28','121','16505','Test','0999554321','29','t6eu6uw','28','121','16505','Secondary Education','2','CCAP','1','2024-04-05','2024-04-02 06:26:04','2024-04-02 06:26:04',1,NULL,0,NULL,NULL),(56,'PRV123123e',2,2,'Pachawo','Bisani','HDJ','Male','1990-04-04','2','2','66','5581','Chawa','0999554321','29','t6eu6uw','3','204','21673','Secondary Education','2','CCAP','2','2024-04-05','2024-04-02 08:20:46','2024-04-02 08:20:46',1,NULL,0,NULL,NULL),(57,'PRV12312311',2,2,'Pachawo','Bisani','HDJ','Female','1990-04-02','2','2','66','5581','Test','0999554321','29','t6eu6uw','3','205','21686','Secondary Education','2','CCAP','1','2024-04-05','2024-04-02 08:24:24','2024-04-02 08:24:24',1,NULL,0,NULL,NULL),(58,'PRV123sw',2,2,'Pachawo','Bisani','HDJ','Female','1990-04-02','2','2','67','5726','Chawa','0999554321','29','t6eu6uw','4','9','633','Secondary Education','2','CCAP','1','2024-04-05','2024-04-02 08:27:32','2024-04-02 08:27:32',1,NULL,0,NULL,NULL),(59,'PRV12311',2,2,'Pachawo','Bisani','HDJ','Female','1990-04-03','2','2','66','5581','Test','0999554321','29','t6eu6uw','9','233','25281','Secondary Education','2','CCAP','1','2024-04-05','2024-04-02 08:31:28','2024-04-02 08:31:28',1,NULL,0,NULL,NULL),(60,'PRV1231233',2,2,'Pachalo','Tembo','Pachalo','Female','1990-04-05','2','28','121','16505','Chawa','0999554321','29','t6eu6uw','28','121','16505','Short-cycle Tertiary Education','2','CCAP','1','2024-04-05','2024-04-05 12:56:39','2024-04-05 12:56:39',1,NULL,0,NULL,NULL),(61,'PR0001',2,2,'John','Doe','John','Male','1990-04-04','2','28','121','16505','Jane Doe','0999554321','29','567gdr2','28','122','16512','Doctors','1','','1','2024-04-08','2024-04-08 08:28:58','2024-04-08 08:28:58',1,NULL,0,NULL,NULL),(62,'MAULA123',2,2,'John','Hudson','Joe','Male','1990-04-12','23','28','120','16498','Jame Hudson','0999554321','29','453fgs','28','162','16749','Doctors','2','CCAP','1','2024-04-19','2024-04-19 07:23:51','2024-04-19 07:23:51',1,NULL,0,NULL,NULL),(63,'MAULA111',2,2,'Joseph','Manda','Jose','Male','1990-04-23','234','28','121','16505','James Manda','0999554321','29','567gdr2','18','114','13808','Secondary Education','2','CCAP','1','2022-04-23','2024-04-23 09:56:17','2024-04-23 09:56:17',1,NULL,0,NULL,NULL),(64,'MAULA1234',2,2,'Jane','Doe','Jane','Female','1990-04-02','567','23','186','18793','John Doe','0999554321','29','345667','28','165','16782','Secondary Education','2','CCAP','1','2024-01-30','2024-04-26 08:17:24','2024-04-26 08:17:24',1,NULL,0,NULL,NULL),(65,'230410512302',2,2,'kondwani','katchere','','Male','1999-01-23','0986879417','12','93','10248','','0986879417','29','','12','93','10248','Primary Education','2','','2','2023-09-29','2024-05-16 08:43:54','2024-05-16 08:43:54',1,NULL,0,NULL,NULL),(66,'123',2,2,'Jane','Doe','Jane','Female','1998-05-01','123',NULL,NULL,NULL,'James Doe','0999887625','Algerian','','28','121','16505','Diploma','2','CCAP','2','2024-06-04','2024-06-04 07:04:55','2024-06-04 07:04:55',1,NULL,0,NULL,NULL),(67,'23041051122',2,2,'MCDONARD','MAUNDE','','Male','1986-12-25','6 HL','3','209','22238','','','Malawian','','3','993','36924','Secondary Education',NULL,'','1','2023-08-24','2024-06-04 08:41:53','2024-06-04 08:41:53',1,NULL,0,NULL,NULL),(69,'2304/10514185',2,2,'PETER','CHALUSA','','Male','1993-04-23','2R','Ntcheu','Kwataine','Manjawila','','','Malawian','',NULL,NULL,NULL,NULL,NULL,'','Remandee','2023-04-12','2024-06-06 07:13:15','2024-06-06 07:13:15',5,NULL,0,NULL,NULL),(70,'PR123',NULL,NULL,'Pittry','Doe','Pittry','Male','1990-05-31','0999887467','Kasungu','TA Chilowamatambe','CHIWENDENI  ESTATE','Jane Doe','0888765789','Malawian','vby456','Lilongwe City','Area 2 (Old town)','Bwalolanjovu Trading Centre','Bachelors','Christianity','','Convict','2024-06-14','2024-06-14 12:11:31','2024-06-14 12:11:31',2,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `prisoners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professional_visits`
--

DROP TABLE IF EXISTS `professional_visits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professional_visits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `vdate` date NOT NULL,
  `consular_officer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `legal_practitioner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `private_medical_doctor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `special_service_provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional_visits`
--

LOCK TABLES `professional_visits` WRITE;
/*!40000 ALTER TABLE `professional_visits` DISABLE KEYS */;
/*!40000 ALTER TABLE `professional_visits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions_and_reductions`
--

DROP TABLE IF EXISTS `promotions_and_reductions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotions_and_reductions` (
  `id` bigint unsigned NOT NULL,
  `prisoners_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions_and_reductions`
--

LOCK TABLES `promotions_and_reductions` WRITE;
/*!40000 ALTER TABLE `promotions_and_reductions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions_and_reductions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referral_department`
--

DROP TABLE IF EXISTS `referral_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `referral_department` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `referral_date` date NOT NULL,
  `send_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `feedback` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referral_department`
--

LOCK TABLES `referral_department` WRITE;
/*!40000 ALTER TABLE `referral_department` DISABLE KEYS */;
/*!40000 ALTER TABLE `referral_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Northern Region Office','Mzuzu','2021-05-22 21:01:23','2021-05-22 21:01:23'),(2,'Central Region Office','Lilongwe','2021-05-22 21:01:23','2021-05-22 21:01:23'),(3,'Eastern Region Office','Zomba','2021-05-22 21:01:23','2021-05-22 21:01:23'),(4,'Southern Region Office','Blantyre','2021-05-22 21:01:23','2021-05-22 21:01:23'),(5,'Head Quarters','Zomba','2021-07-12 20:26:26','2021-07-12 20:26:26');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rehabilitation`
--

DROP TABLE IF EXISTS `rehabilitation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rehabilitation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `special_needs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rehabilitation_needs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vocational_training_skills_development_activity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `psycho_social_support` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `purposeful_work_for_reintegration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type_of_work` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rdate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rehabilitation`
--

LOCK TABLES `rehabilitation` WRITE;
/*!40000 ALTER TABLE `rehabilitation` DISABLE KEYS */;
/*!40000 ALTER TABLE `rehabilitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `religion`
--

DROP TABLE IF EXISTS `religion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `religion` (
  `religion_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`religion_id`),
  UNIQUE KEY `religion_id_UNIQUE` (`religion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `religion`
--

LOCK TABLES `religion` WRITE;
/*!40000 ALTER TABLE `religion` DISABLE KEYS */;
INSERT INTO `religion` VALUES (1,'N/A'),(2,'Christianity'),(3,'Islam'),(4,'Atheist'),(5,'Hinduism'),(6,'Buddhism'),(7,'Chinese Traditional Religion'),(8,'Ethnic Religions'),(9,'African Traditional Religions'),(10,'Sikhism'),(11,'Spiritism'),(12,'Judaism'),(13,'Baha`i`'),(14,'Jainism'),(15,'Shinto'),(16,'Cao Dai'),(17,'Zoroastrianism'),(18,'Tenrikyo'),(19,'Animism'),(20,'Neo-Paganism'),(21,'Unitarian Universalism');
/*!40000 ALTER TABLE `religion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `remandees`
--

DROP TABLE IF EXISTS `remandees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `remandees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `stations_id` bigint unsigned NOT NULL,
  `regions_id` bigint unsigned NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `aliase` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `cell` varchar(20) DEFAULT NULL,
  `block` varchar(20) DEFAULT NULL,
  `home_location` varchar(100) NOT NULL,
  `chief` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) NOT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `driving_license_id` varchar(255) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `past_occupation` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `denomination` varchar(255) DEFAULT NULL,
  `rcno` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prisoners_no` (`prisoners_no`),
  UNIQUE KEY `prisoners_no_2` (`prisoners_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remandees`
--

LOCK TABLES `remandees` WRITE;
/*!40000 ALTER TABLE `remandees` DISABLE KEYS */;
/*!40000 ALTER TABLE `remandees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `risk_assessments`
--

DROP TABLE IF EXISTS `risk_assessments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `risk_assessments` (
  `id` bigint unsigned NOT NULL,
  `prisoners_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_convictions` int NOT NULL,
  `on_admission` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `6_months` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1year` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `4years` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7years` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `risk_assessments`
--

LOCK TABLES `risk_assessments` WRITE;
/*!40000 ALTER TABLE `risk_assessments` DISABLE KEYS */;
/*!40000 ALTER TABLE `risk_assessments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanctions`
--

DROP TABLE IF EXISTS `sanctions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sanctions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `odate` date NOT NULL,
  `offence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sanction_imposed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `by_whom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `awarded_date` date NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `oc_remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `oc_remark_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanctions`
--

LOCK TABLES `sanctions` WRITE;
/*!40000 ALTER TABLE `sanctions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanctions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sold`
--

DROP TABLE IF EXISTS `sold`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sold` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `name` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `item` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `userId` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sold`
--

LOCK TABLES `sold` WRITE;
/*!40000 ALTER TABLE `sold` DISABLE KEYS */;
/*!40000 ALTER TABLE `sold` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spounces`
--

DROP TABLE IF EXISTS `spounces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spounces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spounces`
--

LOCK TABLES `spounces` WRITE;
/*!40000 ALTER TABLE `spounces` DISABLE KEYS */;
/*!40000 ALTER TABLE `spounces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stage_leaders`
--

DROP TABLE IF EXISTS `stage_leaders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stage_leaders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stage_leaders`
--

LOCK TABLES `stage_leaders` WRITE;
/*!40000 ALTER TABLE `stage_leaders` DISABLE KEYS */;
/*!40000 ALTER TABLE `stage_leaders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `regions_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stations`
--

LOCK TABLES `stations` WRITE;
/*!40000 ALTER TABLE `stations` DISABLE KEYS */;
INSERT INTO `stations` VALUES (1,1,'Chitipa Prison','Chitipa','CP','2021-05-22 23:01:23','2021-05-22 23:01:23'),(2,1,'Karonga Prison','Kalonga','KA','2021-05-22 23:01:23','2021-05-22 23:01:23'),(3,1,'Rumphi Prison','Rumphi','RU','2021-05-22 23:01:23','2021-05-22 23:01:23'),(4,1,'Mzuzu Central Prison','Mzuzu','MZU','2021-05-22 23:01:23','2021-05-22 23:01:23'),(5,1,'Nkhatabay Prison','Nkhatabay','NB','2021-05-22 23:01:23','2021-05-22 23:01:23'),(6,1,'Mzimba Prison','Mzimba','MZ','2021-05-22 23:01:23','2021-05-22 23:01:23'),(7,2,'Kasungu Prison','Kasungu','KU','2021-05-22 23:01:23','2021-05-22 23:01:23'),(8,2,'Nkhotakota Prison','Nkhotakota','KK','2021-05-22 23:01:23','2021-05-22 23:01:23'),(9,2,'Byanzi Prison','Dowa','BYA','2021-05-22 23:01:23','2021-05-22 23:01:23'),(10,2,'Kachere Prison','Lilongwe','KC','2021-05-22 23:01:23','2021-05-22 23:01:23'),(11,2,'Lilongwe Central Prison','Lilongwe','LL','2021-05-22 23:01:23','2021-05-22 23:01:23'),(12,2,'Dedza Prison','Dedza','DZ','2021-05-22 23:01:23','2021-05-22 23:01:23'),(13,3,'Ntcheu Prison','Ntchewu','NU','2021-05-22 23:01:23','2021-05-22 23:01:23'),(14,3,'Balaka Prison','Balaka','BLK','2021-05-22 23:01:23','2021-05-22 23:01:23'),(15,3,'Mangochi Prison','Mangochi','MH','2021-05-22 23:01:23','2021-05-22 23:01:23'),(16,3,'Domasi Prison','Domasi','DO','2021-05-22 23:01:23','2021-05-22 23:01:23'),(17,3,'Mpyupsyu  Prison','Zomba','MPY','2021-05-22 23:01:23','2021-05-22 23:01:23'),(18,3,'Mikuyu 1 Prison','Zomba','MKY1','2021-05-22 23:01:23','2021-05-22 23:01:23'),(19,3,'Mikuyu 2 Prison','Zomba','MKY2','2021-05-22 23:01:23','2021-05-22 23:01:23'),(20,3,'Zomba Central Prison','Zomba','ZA','2021-05-22 23:01:23','2021-05-22 23:01:23'),(21,4,'Mwanza Prison','Mwanza','MN','2021-05-22 23:01:23','2021-05-22 23:01:23'),(22,4,'Luwani Prison','Nneno','LW','2021-05-22 23:01:23','2021-05-22 23:01:23'),(23,4,'Nsanje Prison','Nsanje','NE','2021-05-22 23:01:23','2021-05-22 23:01:23'),(24,4,'Bangula Prison','Nsanje','BG','2021-05-22 23:01:23','2021-05-22 23:01:23'),(25,4,'Chikhwawa Prison','Chikwawa','CK','2021-05-22 23:01:23','2021-05-22 23:01:23'),(26,4,'Blantyre Prison','Blantyre','BT','2021-05-22 23:01:23','2021-05-22 23:01:23'),(27,4,'Bvumbwe Prison','Thyolo','BV','2021-05-22 23:01:23','2021-05-22 23:01:23'),(28,4,'Thyolo Prison','Thyolo','TO','2021-05-22 23:01:23','2021-05-22 23:01:23'),(29,4,'Makande Prison','Thyolo','MKN','2021-05-22 23:01:23','2021-05-22 23:01:23'),(30,4,'Mulanje Prison','Mulanje','MJ','2021-05-22 23:01:23','2021-05-22 23:01:23'),(31,4,'Malawi Prison Training College','Blantyre','MPC','2021-07-12 21:37:33','2021-07-12 21:37:33'),(32,5,'Head Quarters','Zomba','HQ','2021-07-12 22:21:40','2021-07-12 22:21:40'),(33,1,'Northern Region Office','Mzuzu','NRO','2021-07-13 19:34:53','2021-07-13 19:34:53'),(34,2,'Central Region Office','Lilongwe','CRO','2021-07-13 19:37:10','2021-07-13 19:37:10'),(35,3,'Eastern Region Office','Zomba','ERO','2021-07-13 19:38:04','2021-07-13 19:38:04'),(36,4,'Southern Region Office','Blantyre','SRO','2021-07-13 19:38:42','2021-07-13 19:38:42');
/*!40000 ALTER TABLE `stations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `step`
--

DROP TABLE IF EXISTS `step`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `step` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` int NOT NULL,
  `address` text NOT NULL,
  `school` varchar(122) NOT NULL,
  `home` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `step`
--

LOCK TABLES `step` WRITE;
/*!40000 ALTER TABLE `step` DISABLE KEYS */;
/*!40000 ALTER TABLE `step` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sti_category`
--

DROP TABLE IF EXISTS `sti_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sti_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sti_category`
--

LOCK TABLES `sti_category` WRITE;
/*!40000 ALTER TABLE `sti_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `sti_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sti_type`
--

DROP TABLE IF EXISTS `sti_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sti_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sti_type`
--

LOCK TABLES `sti_type` WRITE;
/*!40000 ALTER TABLE `sti_type` DISABLE KEYS */;
INSERT INTO `sti_type` VALUES (1,2,2,'Test Type 1','2024-04-08 11:36:01','2024-04-08 11:36:01'),(2,2,2,'Urine LAM','2024-04-12 11:58:58','2024-04-12 11:58:58'),(3,2,2,'Test Type 2','2024-04-12 12:27:44','2024-04-12 12:27:44'),(4,2,2,'Test Typeee','2024-04-12 13:37:23','2024-04-12 13:37:23');
/*!40000 ALTER TABLE `sti_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stis_service`
--

DROP TABLE IF EXISTS `stis_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stis_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int DEFAULT NULL,
  `stations_id` int DEFAULT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) DEFAULT NULL,
  `visit_date` date NOT NULL,
  `sti_screening` varchar(50) DEFAULT NULL,
  `sti_test` varchar(50) DEFAULT NULL,
  `type_of_test` varchar(50) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voided` int NOT NULL DEFAULT '0',
  `voided_at` datetime DEFAULT NULL,
  `voided_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stis_service`
--

LOCK TABLES `stis_service` WRITE;
/*!40000 ALTER TABLE `stis_service` DISABLE KEYS */;
INSERT INTO `stis_service` VALUES (1,2,2,'54','Entry','2024-04-15','Presumptive','Negative','3','2024-05-15','                          ','2024-04-15 10:14:28','2024-04-15 10:14:28',0,NULL,NULL),(2,2,2,'63','Entry','2024-05-23','Presumptive','Negative','Test Typeee','2024-06-23','                          ','2024-05-23 10:21:33','2024-05-23 10:21:33',1,'2024-05-23 00:00:00',2),(3,2,2,'63','Entry','2024-05-23','Presumptive','Negative','Test Typeee','2024-06-23','Test comment','2024-05-23 10:31:45','2024-05-23 10:31:45',0,NULL,NULL),(4,NULL,NULL,'38','Entry','2024-05-04','Not Presumptive',NULL,NULL,'2024-06-04','','2024-06-04 11:29:39','2024-06-04 11:29:39',0,NULL,NULL),(5,NULL,NULL,'38','Stay','2024-06-04','Presumptive','Negative','Test Type 2','2024-07-04','','2024-06-04 11:30:02','2024-06-04 11:30:02',1,'2024-06-04 00:00:00',2),(6,NULL,NULL,'69','Entry','2024-04-13','Not Presumptive',NULL,NULL,'2024-08-13','','2024-06-06 09:21:12','2024-06-06 09:21:12',0,NULL,NULL),(7,NULL,NULL,'69','Stay','2024-06-06','Done','Positive',NULL,'2024-11-06','            ','2024-06-06 09:38:04','2024-06-06 09:38:04',1,'2024-06-06 00:00:00',5),(8,NULL,NULL,'70','Entry','2024-06-14','Not Done',NULL,NULL,'2024-07-14','','2024-06-14 14:23:40','2024-06-14 14:23:40',0,NULL,NULL);
/*!40000 ALTER TABLE `stis_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `id` int NOT NULL DEFAULT '0',
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `class` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `mark` int NOT NULL DEFAULT '0',
  `gender` varchar(6) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'male'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `cnic` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_settings`
--

DROP TABLE IF EXISTS `system_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `system_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_settings`
--

LOCK TABLES `system_settings` WRITE;
/*!40000 ALTER TABLE `system_settings` DISABLE KEYS */;
INSERT INTO `system_settings` VALUES (1,4,'ePrisonHealthCard','mokacodes@gmail.com','+265881995633','Blantyre, Malawi','');
/*!40000 ALTER TABLE `system_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb`
--

DROP TABLE IF EXISTS `tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `screening` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Done',
  `testing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Done',
  `app_date` date DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb`
--

LOCK TABLES `tb` WRITE;
/*!40000 ALTER TABLE `tb` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_test`
--

DROP TABLE IF EXISTS `tb_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `tb_screening` varchar(50) NOT NULL,
  `test_criteria` varchar(50) DEFAULT NULL,
  `tb_test` varchar(50) DEFAULT NULL,
  `type_of_test` varchar(50) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `voided` int DEFAULT '0',
  `voided_at` datetime DEFAULT NULL,
  `voided_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_test`
--

LOCK TABLES `tb_test` WRITE;
/*!40000 ALTER TABLE `tb_test` DISABLE KEYS */;
INSERT INTO `tb_test` VALUES (1,'54','Entry','2024-04-15','Presumptive','New Test','Negative','3','2024-05-15','                      ','2024-04-15 08:47:23','2024-04-15 08:47:23',NULL,NULL,NULL,NULL,NULL),(2,'54','Entry','2024-03-15','Presumptive','New Test','Negative','2','2024-04-15','                      ','2024-04-15 09:35:09','2024-04-15 09:35:09',NULL,NULL,NULL,NULL,NULL),(3,'5','Entry','2024-04-15','Presumptive','New Test','Negative','4','2024-05-15','                      ','2024-04-15 13:44:18','2024-04-15 13:44:18',NULL,NULL,NULL,NULL,NULL),(4,'5','Entry','2024-04-15','Presumptive','New Test','Negative','2','2024-05-15','                      ','2024-04-15 13:46:52','2024-04-15 13:46:52',NULL,NULL,NULL,NULL,NULL),(5,'5','Entry','2024-02-15','Presumptive','New Test','Negative','4','2024-03-15','                      ','2024-04-15 13:47:32','2024-04-15 13:47:32',NULL,NULL,NULL,NULL,NULL),(6,'5','Entry','2024-01-15','Not Presumptive','New Test','Unknown','Test Type 2','2024-01-30','                      ','2024-04-15 13:52:08','2024-04-15 13:52:08',NULL,NULL,NULL,NULL,NULL),(7,'47','Entry','2024-04-15','Presumptive','New Test','Unknown','Test Type 2','2024-05-15','                      ','2024-04-15 15:14:24','2024-04-15 15:14:24',NULL,NULL,NULL,NULL,NULL),(8,'47','Entry','2024-04-08','Presumptive','New Test','Unknown','Test Typeee','2024-05-10','                      ','2024-04-15 15:15:58','2024-04-15 15:15:58',NULL,NULL,NULL,NULL,NULL),(9,'61','Entry','2024-04-02','Not Presumptive','New Test','Negative','Test Type 1','2024-05-02','                      ','2024-05-02 10:19:45','2024-05-02 10:19:45',NULL,NULL,NULL,NULL,NULL),(10,'62','Entry','2024-05-02','Not Presumptive','New Test','Negative','Test Type 1','2024-05-02','                      ','2024-05-02 14:25:26','2024-05-02 14:25:26',NULL,NULL,1,'2024-05-02 00:00:00',2),(11,'62','Entry','2024-05-02','Not Presumptive','New Test','Negative','Test Type 1','2024-05-02','                      ','2024-05-02 14:38:16','2024-05-02 14:38:16',NULL,NULL,0,NULL,NULL),(12,'63','Entry','2024-05-23','Not Presumptive','New Test','Unknown','Test Typeee','2024-06-23','                      ','2024-05-23 10:02:12','2024-05-23 10:02:12',NULL,NULL,1,'2024-05-23 00:00:00',2),(13,'63','Entry','2024-05-23','Not Presumptive',NULL,NULL,NULL,'2024-06-23','Next visit          ','2024-05-23 10:39:32','2024-05-23 10:39:32',NULL,NULL,0,NULL,NULL),(14,'63','Entry','2024-04-23','Presumptive','New Test','Negative','Test Type 1','2024-05-23','Test comment','2024-05-23 10:56:21','2024-05-23 10:56:21',NULL,NULL,0,NULL,NULL),(15,'65','Entry','2023-10-02','Not Presumptive',NULL,NULL,NULL,'2024-04-02','VV','2024-06-03 14:19:08','2024-06-03 14:19:08',NULL,NULL,0,NULL,NULL),(16,'38','Entry','2024-06-04','Not Presumptive',NULL,NULL,NULL,'2024-07-04','','2024-06-04 11:24:38','2024-06-04 11:24:38',NULL,NULL,0,NULL,NULL),(17,'38','Stay','2024-05-04','Not Presumptive',NULL,NULL,NULL,'2024-06-04','','2024-06-04 11:25:00','2024-06-04 11:25:00',NULL,NULL,0,NULL,NULL),(18,'69','Entry','2024-04-13','Not Presumptive',NULL,NULL,NULL,'2024-08-13','','2024-06-06 09:17:40','2024-06-06 09:17:40',NULL,NULL,0,NULL,NULL),(19,'70','Entry','2024-06-14','Presumptive','New Test','Negative','Test Type 1','2024-07-14','','2024-06-14 14:23:14','2024-06-14 14:23:14',NULL,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `tb_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_test_type`
--

DROP TABLE IF EXISTS `tb_test_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_test_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_test_type`
--

LOCK TABLES `tb_test_type` WRITE;
/*!40000 ALTER TABLE `tb_test_type` DISABLE KEYS */;
INSERT INTO `tb_test_type` VALUES (1,2,2,'Test Type 1','2024-04-08 11:36:01','2024-04-08 11:36:01'),(2,2,2,'Urine LAM','2024-04-12 11:58:58','2024-04-12 11:58:58'),(3,2,2,'Test Type 2','2024-04-12 12:27:44','2024-04-12 12:27:44'),(4,2,2,'Test Typeee','2024-04-12 13:37:23','2024-04-12 13:37:23');
/*!40000 ALTER TABLE `tb_test_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testing` (
  `id` int DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testing`
--

LOCK TABLES `testing` WRITE;
/*!40000 ALTER TABLE `testing` DISABLE KEYS */;
/*!40000 ALTER TABLE `testing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traditional_authority`
--

DROP TABLE IF EXISTS `traditional_authority`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `traditional_authority` (
  `traditional_authority_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `district_id` int NOT NULL DEFAULT '0',
  `creator` int NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `retired` tinyint(1) NOT NULL DEFAULT '0',
  `retired_by` int DEFAULT NULL,
  `date_retired` datetime DEFAULT NULL,
  `retire_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`traditional_authority_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2672 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traditional_authority`
--

LOCK TABLES `traditional_authority` WRITE;
/*!40000 ALTER TABLE `traditional_authority` DISABLE KEYS */;
INSERT INTO `traditional_authority` VALUES (1,'Mwabulambya',1,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(2,'Mwenemisuku',1,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(3,'Mwenewenya',1,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(4,'Nthalire',1,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(5,'Kameme',1,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(6,'Chitipa Boma',1,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(7,'Kilipula',4,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(8,'Mwakaboko',4,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(9,'Kyungu',4,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(10,'Wasambo',4,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(11,'Mwirang\'ombe',4,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(12,'Karonga Town',4,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(13,'Kabunduli',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(14,'Fukamapiri',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(15,'Malenga Mzoma',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(16,'S/C Malanda',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(17,'S/C Zilakoma',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(18,' Mankhambira',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(19,'S/C Fukamalaza',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(20,'S/C Mkumbira',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(21,'Musisya',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(22,'S/C Nyaluwanga',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(23,'S/C Mkondowe',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(24,'Timbiri',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(25,'Boghoyo',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(26,'Nkhata-bay Boma',7,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(27,'Chikulamayembe',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(28,'Mwamlowe',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(29,'S/C Mwahenga',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(30,'S/C Mwalweni',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(31,'S/C Kachulu',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(32,'S/C Chapinduka',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(33,'S/C Mwankhunikira',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(34,'Katumbi',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(35,'S/C Zolokere',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(36,'Nyika National Park (A)',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(37,'Rumphi Boma',13,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(38,'M\'mbelwa',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(39,'Mtwalo',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(40,'S/C Kampingo Sibande',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(41,'S/C Jaravikuba Munthali',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(42,'Chindi',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(43,'Mzikubola',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(44,'Mabulabo',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(45,'S/C Khosolo Gwaza Jere',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(46,'Mpherembe',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(47,'Mzukuzuku',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(48,'Mzimba Boma',15,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(49,'Nkhorongo Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(50,'Lupaso Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(51,'Zolozolo Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(52,'Chiputula Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(53,'Mchengautuwa Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(54,'Katoto Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(55,'Jombo Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(56,'Mzilawayingwe Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(57,'Chasefu Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(58,'Katawa Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(59,'Masasa Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(60,'Kaning\'ina Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(61,'Vipya Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(62,'Msongwe Ward',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(63,'New Airport Site',21,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(64,'Mkumpha',17,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(65,'Kasungu Boma',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(66,'TA Chilowamatambe',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(67,'TA Chisikwa',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(68,'TA Chulu',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(69,'TA Kaluluma',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(70,'TA Kaomba',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(71,'TA Kapelula',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(72,'TA Kawamba',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(73,'S/C Lukwa',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(74,'S/C Mnyanja',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(75,'S/C Njombwa',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(76,'TA Santhe',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(77,'S/C Simlemba',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(78,'TA Wimbe',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(79,'Kasungu National Park',2,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(80,'TA Kanyenda',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(81,'SC Kafuzila',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(82,'TA Malengachanzi',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(83,'STA Mphonde',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(84,'TA Mwadzama',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(85,'TA Mwansambo',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(86,'Nkhotakota Boma',6,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(87,'Ta Kasakula',8,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(88,'TA Chikho',8,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(89,'S/C Nthondo',8,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(90,'TA Kalumo',8,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(91,'S/C Chilooko',8,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(92,'Ntchisi Boma',8,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(93,'TA Dzoole',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(94,'S/C Chakhadza',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(95,'TA Kayembe',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(96,'TA Chiwere',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(97,'SC Mkukula',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(98,'TA Msakambewa',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(99,'TA Mponela',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(100,'Mponela Urban',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(101,'Dowa Boma',12,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(102,'Maganga',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(103,'Kalonga',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(104,'Pemba',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(105,'SC Kambwiri',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(106,'Ndindi',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(107,'SC Kambalame',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(108,'Khombedza',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(109,'SC Mwanza',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(110,'Kuluunda',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(111,'SC Msosa',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(112,'Salima Boma',16,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(113,'Chadza',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(114,'Kalolo',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(115,'Chiseka',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(116,'Mazengera',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(117,'Chitekwere',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(118,'Khongoni',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(119,'Chimutu',18,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(120,'Area 1 (Falls)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(121,'Area 2 (Old town)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(122,'Area 3',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(123,'Area 4',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(124,'Area 5',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(125,'Area 6',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(126,'Area 7 (Kawale)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(127,'Area 8 (Biwi)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(128,'Area 9',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(129,'Area 10',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(130,'Area 11',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(131,'Area 12',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(132,'Area 13',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(133,'Area 14 ',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(134,'Area 15',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(135,'Area 16',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(136,'Area 17',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(137,'Area 18',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(138,'Area 19',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(139,'Area 20 (Chilinde 1)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(140,'Area 21 (Chilinde)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(141,'Area 22',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(142,'Area 23',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(143,'Area 24',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(144,'Area 25',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(145,'Area 26 (Manyenje)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(146,'Area 27 (Liwewe)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(147,'Area 28',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(148,'Area 29 (Kanengo)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(149,'Area 30',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(150,'Area 31',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(151,'Area 32',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(152,'Area 33',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(153,'Area 34',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(154,'Area 35',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(155,'Area 36',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(156,'Area 37',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(157,'Area 38 (Chimutu)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(158,'Area 39 (Chatata)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(159,'Area 40',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(160,'Area 41',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(161,'Area 42',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(162,'Area 43',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(163,'Area 44',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(164,'Area 45 (Katete)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(165,'Area 46 (Njewa)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(166,'Area 47',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(167,'Area 48',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(168,'Area 49',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(169,'Area 50 (Senti)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(170,'Area 51 (M\'gona)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(171,'Area 52 (Lumbadzi TC)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(172,'Area 53 (Lumbadzi)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(173,'Area 54',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(174,'Area 55 (Chitukula)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(175,'Area 56 (Ntandire)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(176,'Area 57(Chinsapo)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(177,'Area 58 (Likuni)',28,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(178,'Mchinji Boma',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(179,'Mduwa',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(180,'Mkanda',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(181,'Dambe',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(182,'Mavwere',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(183,'Mlonyeni',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(184,'Zulu',20,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(185,'Dedza Town',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(186,'Kamenya Gwaza',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(187,'Kaphuka',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(188,'Pemba',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(189,'Chauma',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(190,'Kachindamoto',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(191,'Chilikumwendo',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(192,'Kasumbu',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(193,'Tambala',23,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(194,'Ntcheu Boma',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(195,'Chakhumbira',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(196,'Champiti',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(197,'Goodson Ganya',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(198,'Kwataine',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(199,'Makwangwala',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(200,'Masasa',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(201,'Mpando',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(202,'Njolomole',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(203,'Phambala',25,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(204,'Mangochi Boma',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(205,'Chimwala',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(206,'Jalasi',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(207,'Makanjila',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(208,'Mponda',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(209,'Nankumba',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(210,'Lake Malawi National Park',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(211,'Chowe',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(212,'Katuli',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(213,'Mbwananyambi',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(214,'Namabvi',3,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(215,'Liwonde National Park',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(216,'Machinga Boma',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(217,'Chamba',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(218,'Chiwalo',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(219,'Liwonde',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(220,'Mposa',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(221,'Nyambi',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(222,'Liwonde Town',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(223,'Chikweo',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(224,'Kawinga',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(225,'Mlomba',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(226,'Ngokwe',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(227,'Sitola',5,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(228,'Mbiza',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(229,'Kuntumanji',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(230,'Mkumbira',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(231,'Mwambo',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(232,'Chikowi',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(233,'Malemia',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(234,'Mlumbe',9,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(235,'Chambo Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(236,'Chhikamveka Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(237,'Chilunga East Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(238,'Likangala Central Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(239,'Masongola Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(240,'Mtiya Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(241,'Zakazaka Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(242,'Chikamveka North Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(243,'Chirunga Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(244,'Likangala South Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(245,'Likangala North Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(246,'Mbedza Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(247,'Sadzi Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(248,'Zomba Central Ward',10,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(249,'Chitera',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(250,'Kadewere',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(251,'Likoswe',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(252,'Mchema',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(253,'Nkalo',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(254,'Mpama',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(255,'Chiradzulu Boma',11,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(256,'Kuntaja',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(257,'Lunzu TPA',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(258,'Nkula TPA',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(259,'Kapeni',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(260,'Lundu',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(261,'Makata',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(262,'Somba',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(263,'Chigaru',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(264,'Kunthembwe',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(265,'Machinjili',14,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(266,'Bangwe Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(267,'Blantyre West Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(268,'Chigumula Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(269,'Likhubula Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(270,'Limbe Central Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(271,'Mapanga Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(272,'Misesa Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(273,'Mzedi Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(274,'Nancholi Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(275,'Ndirande South Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(276,'Nkolokoti Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(277,'Soche East Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(278,'South Lunzu Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(279,'Soche West Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(280,'Nyambadwe Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(281,'Ndirande West Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(282,'Ndirande North Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(283,'Namiyango Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(284,'Msamba Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(285,'Michiru Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(286,'Limbe East Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(287,'Limbe West Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(288,'Chilomoni Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(289,'Chichiri Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(290,'Blantrye East Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(291,'Blantrye Central Ward',32,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(292,'Kanduku',19,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(293,'Nthache',19,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(294,'Mwanza Boma',19,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(295,'Khwethemule',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(296,'Kapichi',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(297,'Chimaliro',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(298,'Changata',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(299,'Bvumbwe',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(300,'Thukuta',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(301,'Mbawela',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(302,'Luchenza Town',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(303,'Mphuka',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(304,'Nsabwe',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(305,'Thyolo Boma',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(306,'Nchilamwela',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(307,'Thomasi',22,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(308,'Mulanje Boma',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(309,'Mulanje Mountain',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(310,'Chikumbu',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(311,'Juma',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(312,'Njema',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(313,'Laston Njema',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(314,'Mabuka',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(315,'Nkanda',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(316,'Nthiramanja',24,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(317,'Phalombe Boma',26,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(318,'Chiwalo',26,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(319,'Mkhumba',26,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(320,'Nazombe',26,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(321,'Chapananga',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(322,'Kasisi',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(323,'Katunga',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(324,'Lundu',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(325,'Makhuwira',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(326,'Maseya',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(327,'Ngabu',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(328,'Chikwawa Boma',27,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(329,'Mwabvi Game Reserve',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(330,'Nsanje Boma',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(331,'Chimombo',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(332,'Malemia',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(333,'Mlolo',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(334,'Nyachikadza',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(335,'Ngabu',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(336,'Makoko',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(337,'Mbenje',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(338,'Ndamera',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(339,'Tengani',29,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(340,'Balaka Boma',30,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(341,'Kalembo',30,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(342,'Nsamala',30,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(343,'Dambe',31,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(344,'Mlauli',31,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(345,'Neno Boma',31,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(346,'Ngozi',31,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(347,'Symon',31,1,'2011-09-27 00:00:00',0,NULL,NULL,NULL),(348,'Somba',14,270,'2019-04-29 10:08:57',0,NULL,NULL,NULL),(349,'Mkan',24,94,'2019-04-29 10:43:36',0,NULL,NULL,NULL),(350,'Mkanda',24,94,'2019-04-29 10:43:54',0,NULL,NULL,NULL),(351,'Njewa',18,94,'2019-04-29 11:07:58',0,NULL,NULL,NULL),(352,'Other',18,271,'2019-04-30 11:18:41',0,NULL,NULL,NULL),(353,'Malili',18,271,'2019-04-30 11:18:55',0,NULL,NULL,NULL),(354,'Masula',18,324,'2019-04-30 15:44:30',0,NULL,NULL,NULL),(355,'Gomani',18,324,'2019-04-30 15:44:45',0,NULL,NULL,NULL),(356,'Tsabango',28,324,'2019-05-02 10:56:10',0,NULL,NULL,NULL),(357,'Kauma',28,364,'2019-05-03 08:44:32',0,NULL,NULL,NULL),(358,'Kaliyeka',28,94,'2019-05-03 11:03:14',0,NULL,NULL,NULL),(359,'Chinsapo 1',28,364,'2019-05-03 12:55:24',0,NULL,NULL,NULL),(360,'Kalumbu',18,94,'2019-05-04 09:52:18',0,NULL,NULL,NULL),(361,'Mstiliza',28,324,'2019-05-06 08:43:29',0,NULL,NULL,NULL),(362,'Mphanyama',23,94,'2019-05-06 11:43:46',0,NULL,NULL,NULL),(363,'Chamvula',15,270,'2019-05-07 09:11:53',0,NULL,NULL,NULL),(364,'Chipasula',28,179,'2019-05-07 14:33:58',0,NULL,NULL,NULL),(365,'Tsabango',18,271,'2019-05-08 09:27:08',0,NULL,NULL,NULL),(366,'Chitipi',28,94,'2019-05-08 10:33:53',0,NULL,NULL,NULL),(367,'Pondamali',28,364,'2019-05-08 13:51:47',0,NULL,NULL,NULL),(368,'Amidu',30,271,'2019-05-09 10:42:05',0,NULL,NULL,NULL),(369,'Nyoka',20,94,'2019-05-09 12:01:40',0,NULL,NULL,NULL),(370,'Kalumba',18,303,'2019-05-09 14:21:51',0,NULL,NULL,NULL),(371,'Chimkulula',18,303,'2019-05-09 14:22:42',0,NULL,NULL,NULL),(372,'Njolomole',23,364,'2019-05-09 16:36:26',0,NULL,NULL,NULL),(373,'Simphasi',20,179,'2019-05-10 10:16:48',0,NULL,NULL,NULL),(374,'Chizula',18,364,'2019-05-10 13:44:33',0,NULL,NULL,NULL),(375,'Chinsapo 2',28,364,'2019-05-10 15:25:47',0,NULL,NULL,NULL),(376,'Kachere',28,364,'2019-05-13 09:11:30',0,NULL,NULL,NULL),(377,'Magaza',14,270,'2019-05-13 11:59:23',0,NULL,NULL,NULL),(378,'Kalumba',28,271,'2019-05-13 13:15:21',0,NULL,NULL,NULL),(379,'Kalembo',3,303,'2019-05-13 14:33:42',0,NULL,NULL,NULL),(380,'Mtwalo',21,94,'2019-05-13 15:03:55',0,NULL,NULL,NULL),(381,'Sawale',30,179,'2019-05-15 07:35:06',0,NULL,NULL,NULL),(382,'C',30,365,'2019-05-15 11:45:25',0,NULL,NULL,NULL),(383,'Chathudya',30,365,'2019-05-15 11:45:45',0,NULL,NULL,NULL),(384,'Ntamba',11,270,'2019-05-15 15:49:41',0,NULL,NULL,NULL),(385,'Mchesi',28,94,'2019-05-15 16:59:46',0,NULL,NULL,NULL),(386,'Six miles',28,270,'2019-05-16 08:31:41',0,NULL,NULL,NULL),(387,'Majola',14,179,'2019-05-16 12:01:43',0,NULL,NULL,NULL),(388,'Bunduli',15,94,'2019-05-16 14:29:21',0,NULL,NULL,NULL),(389,'Mbwana',7,365,'2019-05-17 08:08:32',0,NULL,NULL,NULL),(390,'Tsiliza',28,365,'2019-05-17 08:09:25',0,NULL,NULL,NULL),(391,'Kachele',23,364,'2019-05-17 11:39:04',0,NULL,NULL,NULL),(392,'Chigwirizano',28,94,'2019-05-17 13:25:41',0,NULL,NULL,NULL),(393,'Mkanda',18,94,'2019-05-17 14:59:31',0,NULL,NULL,NULL),(394,'Nchilamwera',24,94,'2019-05-20 12:06:51',0,NULL,NULL,NULL),(395,'Nathenje',28,94,'2019-05-20 12:14:05',0,NULL,NULL,NULL),(396,'Msabwe',22,329,'2019-05-20 13:41:52',0,NULL,NULL,NULL),(397,'Kabudula',18,94,'2019-05-22 12:30:07',0,NULL,NULL,NULL),(398,'Mtsiliza',28,94,'2019-05-22 12:31:05',0,NULL,NULL,NULL),(399,'Nsokonezi',18,364,'2019-05-23 09:51:59',0,NULL,NULL,NULL),(400,'Jinja',29,364,'2019-05-24 08:55:40',0,NULL,NULL,NULL),(401,'Nambuma',28,270,'2019-05-24 10:14:42',0,NULL,NULL,NULL),(402,'Chideza village',28,270,'2019-05-24 10:15:12',0,NULL,NULL,NULL),(403,'Kayembe',18,270,'2019-05-24 10:15:56',0,NULL,NULL,NULL),(404,'Chitukula',18,270,'2019-05-27 10:53:03',0,NULL,NULL,NULL),(405,'Kulamula',18,270,'2019-05-27 10:53:19',0,NULL,NULL,NULL),(406,'Msanama',5,94,'2019-05-28 08:13:33',0,NULL,NULL,NULL),(407,'Mangaka',5,94,'2019-05-28 08:13:46',0,NULL,NULL,NULL),(408,'Malangalanga',28,94,'2019-05-28 08:14:36',0,NULL,NULL,NULL),(409,'Makwira',29,365,'2019-05-28 10:22:30',0,NULL,NULL,NULL),(410,'Mtema',18,365,'2019-05-28 11:12:06',0,NULL,NULL,NULL),(411,'Masumbankhunda',18,364,'2019-05-29 07:48:10',0,NULL,NULL,NULL),(412,'Mwadzama',16,270,'2019-05-29 11:22:29',0,NULL,NULL,NULL),(413,'Mtandire',28,94,'2019-05-30 12:00:57',0,NULL,NULL,NULL),(414,'Bunda',28,270,'2019-05-30 14:37:52',0,NULL,NULL,NULL),(415,'Beselemu',28,270,'2019-05-30 14:38:12',0,NULL,NULL,NULL),(416,'Chiseka',28,270,'2019-05-30 14:38:36',0,NULL,NULL,NULL),(417,'Kalolo',23,365,'2019-05-31 10:43:37',0,NULL,NULL,NULL),(418,'Kalumbu',6,364,'2019-06-01 08:56:13',0,NULL,NULL,NULL),(419,'Mbavi',28,364,'2019-06-01 08:56:55',0,NULL,NULL,NULL),(420,'Mwenera',28,270,'2019-06-03 11:14:58',0,NULL,NULL,NULL),(421,'Lete 1 village',18,270,'2019-06-03 11:31:18',0,NULL,NULL,NULL),(422,'Mbota',15,270,'2019-06-03 12:13:26',0,NULL,NULL,NULL),(423,'Moses',27,329,'2019-06-03 15:00:03',0,NULL,NULL,NULL),(424,'Chadza',28,355,'2019-06-03 15:42:47',0,NULL,NULL,NULL),(425,'Chiyendausiku',30,329,'2019-06-04 09:17:15',0,NULL,NULL,NULL),(426,'Bwaila fistula',28,94,'2019-06-04 12:56:20',0,NULL,NULL,NULL),(427,'Ngwenya',28,364,'2019-06-04 15:27:29',0,NULL,NULL,NULL),(428,'Mtamba',16,270,'2019-06-04 15:31:13',0,NULL,NULL,NULL),(429,'Nsakambewa',12,364,'2019-06-04 15:58:40',0,NULL,NULL,NULL),(430,'Chiyendausiku',16,365,'2019-06-07 11:24:24',0,NULL,NULL,NULL),(431,'Malingunde',18,329,'2019-06-07 12:42:41',0,NULL,NULL,NULL),(432,'Mbwidi',18,365,'2019-06-07 13:31:15',0,NULL,NULL,NULL),(433,'Wembe',2,364,'2019-06-07 16:51:03',0,NULL,NULL,NULL),(434,'Kaphiri',28,364,'2019-06-07 16:51:28',0,NULL,NULL,NULL),(435,'Mlilima',27,365,'2019-06-10 09:24:43',0,NULL,NULL,NULL),(436,'Malenga',8,364,'2019-06-10 12:36:00',0,NULL,NULL,NULL),(437,'Thiramanja',22,365,'2019-06-11 10:23:37',0,NULL,NULL,NULL),(438,'Mbelwa',21,179,'2019-06-12 12:06:08',0,NULL,NULL,NULL),(439,'Bwatalika',18,365,'2019-06-12 12:54:25',0,NULL,NULL,NULL),(440,'Mbukumbera',7,94,'2019-06-12 13:20:52',0,NULL,NULL,NULL),(441,'Jenala',26,94,'2019-06-12 14:06:31',0,NULL,NULL,NULL),(442,'Vanduli',18,94,'2019-06-13 09:54:42',0,NULL,NULL,NULL),(443,'Chamba',9,364,'2019-06-13 11:21:31',0,NULL,NULL,NULL),(444,'Kachikho',18,94,'2019-06-13 12:35:27',0,NULL,NULL,NULL),(445,'Kakhomba',23,365,'2019-06-14 15:12:17',0,NULL,NULL,NULL),(446,'Maluku',9,364,'2019-06-17 10:02:15',0,NULL,NULL,NULL),(447,'Mganya',25,329,'2019-06-17 11:05:50',0,NULL,NULL,NULL),(448,'Msiliza',28,329,'2019-06-17 11:07:06',0,NULL,NULL,NULL),(449,'Nambuma',18,329,'2019-06-17 11:24:15',0,NULL,NULL,NULL),(450,'Mbabvi',18,329,'2019-06-17 12:04:32',0,NULL,NULL,NULL),(451,'Chisovya',13,364,'2019-06-17 12:13:04',0,NULL,NULL,NULL),(452,'Nkoola',5,365,'2019-06-17 16:04:25',0,NULL,NULL,NULL),(453,'Nsalu',28,364,'2019-06-19 09:55:12',0,NULL,NULL,NULL),(454,'Gulumula',2,364,'2019-06-19 10:13:32',0,NULL,NULL,NULL),(455,'Mpakaka',5,329,'2019-06-19 10:49:42',0,NULL,NULL,NULL),(456,'Nkhoma',18,364,'2019-06-19 11:49:27',0,NULL,NULL,NULL),(457,'Chauwa',18,364,'2019-06-19 11:50:04',0,NULL,NULL,NULL),(458,'Mwenekondo',28,364,'2019-06-19 12:15:13',0,NULL,NULL,NULL),(459,'Kaphaizi',2,364,'2019-06-19 12:40:14',0,NULL,NULL,NULL),(460,'Kawale2',28,364,'2019-06-20 08:20:16',0,NULL,NULL,NULL),(461,'Area 84',28,364,'2019-06-20 09:07:04',0,NULL,NULL,NULL),(462,'Novu',27,94,'2019-06-20 11:23:58',0,NULL,NULL,NULL),(463,'Zintambila',2,94,'2019-06-20 12:33:07',0,NULL,NULL,NULL),(464,'Kalumba',23,271,'2019-06-21 11:57:14',0,NULL,NULL,NULL),(465,'Tambala',18,364,'2019-06-24 08:51:21',0,NULL,NULL,NULL),(466,'Kalolo',20,364,'2019-06-24 09:06:40',0,NULL,NULL,NULL),(467,'Lundu',29,365,'2019-06-24 12:34:33',0,NULL,NULL,NULL),(468,'Ngongoliwa',22,329,'2019-06-24 12:48:02',0,NULL,NULL,NULL),(469,'Nkolokosa',22,329,'2019-06-24 12:49:03',0,NULL,NULL,NULL),(470,'Masula',28,94,'2019-06-24 13:35:21',0,NULL,NULL,NULL),(471,'Chilombo',26,94,'2019-06-24 16:36:00',0,NULL,NULL,NULL),(472,'Katondo',28,94,'2019-06-24 16:40:25',0,NULL,NULL,NULL),(473,'Kakhotamadzi',18,364,'2019-06-25 10:47:26',0,NULL,NULL,NULL),(474,'Mgabu',27,270,'2019-06-26 09:12:16',0,NULL,NULL,NULL),(475,'Ganamba',27,270,'2019-06-26 09:12:27',0,NULL,NULL,NULL),(476,'Nayere',28,270,'2019-06-27 08:37:55',0,NULL,NULL,NULL),(477,'Chilinde 2',28,364,'2019-06-27 11:59:10',0,NULL,NULL,NULL),(478,'Kaduya',26,376,'2019-06-28 07:34:06',0,NULL,NULL,NULL),(479,'Kandi',7,270,'2019-06-28 12:45:45',0,NULL,NULL,NULL),(480,'Ntcheche',28,329,'2019-07-01 09:28:02',0,NULL,NULL,NULL),(481,'Ncheche',28,329,'2019-07-01 09:28:24',0,NULL,NULL,NULL),(482,'Mbwatalika',18,94,'2019-07-01 12:08:08',0,NULL,NULL,NULL),(483,'Mwamadi',5,94,'2019-07-01 12:37:15',0,NULL,NULL,NULL),(484,'Guzani',28,94,'2019-07-01 12:50:04',0,NULL,NULL,NULL),(485,'Chimaliro',24,365,'2019-07-01 14:45:31',0,NULL,NULL,NULL),(486,'Masache',27,270,'2019-07-02 13:00:18',0,NULL,NULL,NULL),(487,'Mitengo',28,364,'2019-07-03 13:24:31',0,NULL,NULL,NULL),(488,'Chitedze',18,364,'2019-07-04 14:58:17',0,NULL,NULL,NULL),(489,'Chilowa',18,364,'2019-07-09 09:13:06',0,NULL,NULL,NULL),(490,'Govati',19,270,'2019-07-09 13:38:36',0,NULL,NULL,NULL),(491,'Nteme',18,179,'2019-07-09 16:42:55',0,NULL,NULL,NULL),(492,'Mponda',30,94,'2019-07-10 14:30:37',0,NULL,NULL,NULL),(493,'Thete',23,329,'2019-07-12 13:23:08',0,NULL,NULL,NULL),(494,'Sitola',9,270,'2019-07-12 13:24:57',0,NULL,NULL,NULL),(495,'Bibikuluunda',16,329,'2019-07-15 12:20:40',0,NULL,NULL,NULL),(496,'Kawomba',2,355,'2019-07-15 15:43:49',0,NULL,NULL,NULL),(497,'Belere',2,355,'2019-07-15 15:44:15',0,NULL,NULL,NULL),(498,'M\'bang\'ombe',18,364,'2019-07-18 09:49:02',0,NULL,NULL,NULL),(499,'Kasiyafumbi',18,364,'2019-07-18 10:04:13',0,NULL,NULL,NULL),(500,'Kwaloza',20,364,'2019-07-19 12:38:14',0,NULL,NULL,NULL),(501,'Mkukula',18,270,'2019-07-19 14:47:17',0,NULL,NULL,NULL),(502,'Chilipa',3,270,'2019-07-22 09:08:41',0,NULL,NULL,NULL),(503,'Mafunga',22,355,'2019-07-22 15:19:55',0,NULL,NULL,NULL),(504,'Phwetekele',28,329,'2019-07-22 15:33:07',0,NULL,NULL,NULL),(505,'Nsalu',18,329,'2019-07-22 16:04:44',0,NULL,NULL,NULL),(506,'Mwambo',18,329,'2019-07-22 16:05:00',0,NULL,NULL,NULL),(507,'Nyangu',18,179,'2019-07-26 10:51:23',0,NULL,NULL,NULL),(508,'Kapeni',32,329,'2019-07-26 13:25:36',0,NULL,NULL,NULL),(509,'Makanjira',16,364,'2019-07-29 09:38:00',0,NULL,NULL,NULL),(510,'Kawale 1',28,364,'2019-07-29 11:16:37',0,NULL,NULL,NULL),(511,'Kilipula',13,179,'2019-07-29 14:40:30',0,NULL,NULL,NULL),(512,'Mtambira',28,270,'2019-07-31 08:00:50',0,NULL,NULL,NULL),(513,'Ngona',28,364,'2019-07-31 12:06:17',0,NULL,NULL,NULL),(514,'Chimphangu',28,270,'2019-08-01 12:54:01',0,NULL,NULL,NULL),(515,'Chilipa',30,94,'2019-08-06 10:11:23',0,NULL,NULL,NULL),(516,'Gomani',20,270,'2019-08-06 10:39:50',0,NULL,NULL,NULL),(517,'Symon',30,179,'2019-08-08 15:32:27',0,NULL,NULL,NULL),(518,'Kapoloma',5,94,'2019-08-09 11:19:28',0,NULL,NULL,NULL),(519,'Mfuti',16,94,'2019-08-12 12:00:19',0,NULL,NULL,NULL),(520,'Linthipe 1',28,270,'2019-08-12 13:19:54',0,NULL,NULL,NULL),(521,'Linthipe 1',23,270,'2019-08-12 13:20:32',0,NULL,NULL,NULL),(522,'Chimoka',28,270,'2019-08-12 17:14:28',0,NULL,NULL,NULL),(523,'Bypass',28,94,'2019-08-13 14:41:20',0,NULL,NULL,NULL),(524,'Area 25a',28,94,'2019-08-15 09:25:49',0,NULL,NULL,NULL),(525,'Madika',28,94,'2019-08-15 11:59:23',0,NULL,NULL,NULL),(526,'Mponela',18,94,'2019-08-16 09:46:01',0,NULL,NULL,NULL),(527,'Nkula',5,270,'2019-08-16 13:01:17',0,NULL,NULL,NULL),(528,'Mwambuli',4,270,'2019-08-20 12:41:52',0,NULL,NULL,NULL),(529,'Kachenga',30,356,'2019-08-20 14:53:08',0,NULL,NULL,NULL),(530,'Nkaya',30,365,'2019-08-21 11:37:01',0,NULL,NULL,NULL),(531,'Chidzuma',2,356,'2019-08-22 11:38:44',0,NULL,NULL,NULL),(532,'Katantha',28,356,'2019-08-23 11:43:51',0,NULL,NULL,NULL),(533,'Machinjili',32,356,'2019-08-23 13:04:41',0,NULL,NULL,NULL),(534,'Mpunga',11,365,'2019-08-26 10:35:22',0,NULL,NULL,NULL),(535,'Piasani',28,179,'2019-08-26 12:36:55',0,NULL,NULL,NULL),(536,'Nsamala',5,364,'2019-08-27 10:41:07',0,NULL,NULL,NULL),(537,'Kuthindi',23,179,'2019-08-28 12:12:45',0,NULL,NULL,NULL),(538,'Nsapira',20,365,'2019-08-29 12:33:24',0,NULL,NULL,NULL),(539,'Sapali',9,364,'2019-08-30 14:22:02',0,NULL,NULL,NULL),(540,'Kamwana',18,94,'2019-09-02 12:52:02',0,NULL,NULL,NULL),(541,'Msundwe',28,364,'2019-09-02 12:56:27',0,NULL,NULL,NULL),(542,'Nampala',23,364,'2019-09-03 08:21:34',0,NULL,NULL,NULL),(543,'Chibwinje',18,364,'2019-09-03 14:36:25',0,NULL,NULL,NULL),(544,'Zumbira',24,306,'2019-09-04 11:33:06',0,NULL,NULL,NULL),(545,'Misoli',24,179,'2019-09-05 11:04:49',0,NULL,NULL,NULL),(546,'Area23',28,364,'2019-09-05 12:43:29',0,NULL,NULL,NULL),(547,'Chinamwali',9,171,'2019-09-05 14:59:05',0,NULL,NULL,NULL),(548,'Msumbankhunda',18,364,'2019-09-06 10:29:22',0,NULL,NULL,NULL),(549,'Msalaza',20,397,'2019-09-06 12:30:16',0,NULL,NULL,NULL),(550,'Misomali',24,109,'2019-09-06 14:59:06',0,NULL,NULL,NULL),(551,'Siyasiya',16,179,'2019-09-09 13:46:37',0,NULL,NULL,NULL),(552,'Njoka',28,364,'2019-09-09 13:47:23',0,NULL,NULL,NULL),(553,'Masambankhunda',28,364,'2019-09-09 13:47:37',0,NULL,NULL,NULL),(554,'Tsabango',23,396,'2019-09-10 09:21:14',0,NULL,NULL,NULL),(555,'Mhesi',28,396,'2019-09-10 09:34:38',0,NULL,NULL,NULL),(556,'Chimwala',28,94,'2019-09-10 12:03:17',0,NULL,NULL,NULL),(557,'Mphomwa',2,364,'2019-09-11 12:03:19',0,NULL,NULL,NULL),(558,'',26,130,'2019-09-11 14:14:29',0,NULL,NULL,NULL),(559,'Unit six',28,94,'2019-09-12 10:01:26',0,NULL,NULL,NULL),(560,'Kaduya',24,179,'2019-09-12 13:20:14',0,NULL,NULL,NULL),(561,'Nkuhuwe',22,179,'2019-09-12 15:45:04',0,NULL,NULL,NULL),(562,'Mawala',22,179,'2019-09-12 15:45:12',0,NULL,NULL,NULL),(563,'Doko',12,217,'2019-09-13 08:03:21',0,NULL,NULL,NULL),(564,'Mwawungulu',4,217,'2019-09-13 08:52:32',0,NULL,NULL,NULL),(565,'Mdeka',14,329,'2019-09-13 11:40:03',0,NULL,NULL,NULL),(566,'Mphanda',18,364,'2019-09-13 11:44:29',0,NULL,NULL,NULL),(567,'Ntchema',11,179,'2019-09-16 10:00:00',0,NULL,NULL,NULL),(568,'Kapeni',25,396,'2019-09-16 11:54:06',0,NULL,NULL,NULL),(569,'Malili',28,109,'2019-09-17 12:05:32',0,NULL,NULL,NULL),(570,'Symon',19,217,'2019-09-18 09:04:19',0,NULL,NULL,NULL),(571,'Mtawali',4,364,'2019-09-19 11:47:52',0,NULL,NULL,NULL),(572,'Tsikulamowa',25,217,'2019-09-20 09:37:20',0,NULL,NULL,NULL),(573,'Mgwata',18,364,'2019-09-20 10:45:27',0,NULL,NULL,NULL),(574,'Area36',28,364,'2019-09-20 11:39:19',0,NULL,NULL,NULL),(575,'Chiweza',18,130,'2019-09-21 08:55:59',0,NULL,NULL,NULL),(576,'A46',18,396,'2019-09-21 13:01:25',0,NULL,NULL,NULL),(577,'Chutsa',18,324,'2019-09-23 10:09:45',0,NULL,NULL,NULL),(578,'Chullu',20,364,'2019-09-23 12:37:59',0,NULL,NULL,NULL),(579,'Chulu',20,364,'2019-09-23 12:38:10',0,NULL,NULL,NULL),(580,'Chikwati',23,271,'2019-09-23 13:47:09',0,NULL,NULL,NULL),(581,'Nanjiri',28,271,'2019-09-23 14:03:43',0,NULL,NULL,NULL),(582,'Dzenza',28,364,'2019-09-24 08:09:26',0,NULL,NULL,NULL),(583,'Majuyi',3,364,'2019-09-24 10:22:24',0,NULL,NULL,NULL),(584,'Area22',28,364,'2019-09-24 11:30:26',0,NULL,NULL,NULL),(585,'Mberwa',15,397,'2019-09-25 09:05:32',0,NULL,NULL,NULL),(586,'Lingalaweni',15,397,'2019-09-25 09:06:00',0,NULL,NULL,NULL),(587,'Gologolo',16,364,'2019-09-25 11:17:48',0,NULL,NULL,NULL),(588,'Maja',25,365,'2019-09-25 15:05:55',0,NULL,NULL,NULL),(589,'Msamala',30,217,'2019-09-26 10:22:27',0,NULL,NULL,NULL),(590,'Mpinga',30,217,'2019-09-26 10:23:05',0,NULL,NULL,NULL),(591,'Kachere',23,365,'2019-09-26 13:39:06',0,NULL,NULL,NULL),(592,'Nkhongoni',18,217,'2019-09-27 09:18:41',0,NULL,NULL,NULL),(593,'Tsabango',2,397,'2019-09-27 15:29:59',0,NULL,NULL,NULL),(594,'Bwaila sec school',28,398,'2019-09-28 09:08:52',0,NULL,NULL,NULL),(595,'Shekusheku',31,364,'2019-09-30 11:29:53',0,NULL,NULL,NULL),(596,'Chidzanja',23,364,'2019-09-30 14:49:09',0,NULL,NULL,NULL),(597,'Gulliver',28,364,'2019-10-01 10:22:02',0,NULL,NULL,NULL),(598,'Chinyama',2,364,'2019-10-01 10:52:15',0,NULL,NULL,NULL),(599,'Nanseta',22,365,'2019-10-02 11:53:43',0,NULL,NULL,NULL),(600,'Mphonde',23,364,'2019-10-03 09:42:26',0,NULL,NULL,NULL),(601,'Mthiramanja',24,217,'2019-10-03 10:38:06',0,NULL,NULL,NULL),(602,'Airwing',18,270,'2019-10-03 11:36:28',0,NULL,NULL,NULL),(603,'Kusangala',9,329,'2019-10-03 12:48:52',0,NULL,NULL,NULL),(604,'Kapalamula',23,364,'2019-10-04 09:57:57',0,NULL,NULL,NULL),(605,'Malindima',23,364,'2019-10-04 11:04:19',0,NULL,NULL,NULL),(606,'Mwanera',18,270,'2019-10-04 12:38:52',0,NULL,NULL,NULL),(607,'Mwenera',18,270,'2019-10-04 12:39:00',0,NULL,NULL,NULL),(608,'Nguluwe',18,396,'2019-10-05 12:45:10',0,NULL,NULL,NULL),(609,'Kalolo',2,396,'2019-10-06 11:21:45',0,NULL,NULL,NULL),(610,'Ccdc',28,270,'2019-10-07 12:03:52',0,NULL,NULL,NULL),(611,'Masuku',3,109,'2019-10-07 15:45:31',0,NULL,NULL,NULL),(612,'Chapola',3,217,'2019-10-08 08:31:42',0,NULL,NULL,NULL),(613,'Mpopo',32,109,'2019-10-09 11:00:10',0,NULL,NULL,NULL),(614,'Mwamadi',32,217,'2019-10-09 11:55:22',0,NULL,NULL,NULL),(615,'Mchezi',18,270,'2019-10-11 10:31:19',0,NULL,NULL,NULL),(616,'Mwambo',10,397,'2019-10-11 15:15:20',0,NULL,NULL,NULL),(617,'Kaduya',14,179,'2019-10-12 10:10:51',0,NULL,NULL,NULL),(618,'Nkhumba',26,324,'2019-10-14 07:57:03',0,NULL,NULL,NULL),(619,'Ntchema',14,324,'2019-10-14 12:28:11',0,NULL,NULL,NULL),(620,'Magalamula',28,364,'2019-10-16 07:31:47',0,NULL,NULL,NULL),(621,'Nkalo',22,364,'2019-10-16 10:16:02',0,NULL,NULL,NULL),(622,'Chilembwe',22,179,'2019-10-16 11:02:00',0,NULL,NULL,NULL),(623,'Podamali mitundu',18,365,'2019-10-17 09:26:04',0,NULL,NULL,NULL),(624,'Chamama',2,270,'2019-10-17 16:27:35',0,NULL,NULL,NULL),(625,'Gokho',23,365,'2019-10-18 11:39:39',0,NULL,NULL,NULL),(626,'Mwenemuchanya',1,365,'2019-10-21 11:40:46',0,NULL,NULL,NULL),(627,'Kwinza',23,365,'2019-10-22 14:09:23',0,NULL,NULL,NULL),(628,'Spoon',27,217,'2019-10-23 09:17:42',0,NULL,NULL,NULL),(629,'Nkukula',12,217,'2019-10-23 14:10:05',0,NULL,NULL,NULL),(630,'Kauma',18,396,'2019-10-25 16:42:00',0,NULL,NULL,NULL),(631,'Chisikha',22,94,'2019-10-26 08:11:36',0,NULL,NULL,NULL),(632,'Chisephere',2,179,'2019-10-28 12:21:47',0,NULL,NULL,NULL),(633,'Nkala',18,364,'2019-10-29 09:57:22',0,NULL,NULL,NULL),(634,'William',14,94,'2019-10-29 15:01:49',0,NULL,NULL,NULL),(635,'Kalembo',5,364,'2019-10-29 15:24:11',0,NULL,NULL,NULL),(636,'Kachere',25,364,'2019-10-30 10:06:33',0,NULL,NULL,NULL),(637,'Ngwayi',18,364,'2019-10-30 10:56:25',0,NULL,NULL,NULL),(638,'Phambala',30,364,'2019-10-30 11:29:36',0,NULL,NULL,NULL),(639,'Mbingwa',28,324,'2019-11-01 11:13:08',0,NULL,NULL,NULL),(640,'Kaumbu',18,217,'2019-11-01 12:25:11',0,NULL,NULL,NULL),(641,'Dzaleka',12,179,'2019-11-05 10:58:15',0,NULL,NULL,NULL),(642,'Malasa',6,364,'2019-11-05 13:14:56',0,NULL,NULL,NULL),(643,'Chingala',18,270,'2019-11-06 10:23:52',0,NULL,NULL,NULL),(644,'Mgona',28,270,'2019-11-07 07:52:13',0,NULL,NULL,NULL),(645,'Kapondo',20,179,'2019-11-07 10:46:40',0,NULL,NULL,NULL),(646,'Mberewere',14,109,'2019-11-07 10:52:00',0,NULL,NULL,NULL),(647,'Chikumbu',22,94,'2019-11-07 11:32:21',0,NULL,NULL,NULL),(648,'Kalumba',2,397,'2019-11-08 14:47:45',0,NULL,NULL,NULL),(649,'Dinde',3,217,'2019-11-11 10:15:12',0,NULL,NULL,NULL),(650,'Kaunika',5,365,'2019-11-11 11:07:38',0,NULL,NULL,NULL),(651,'Mulenda',7,94,'2019-11-12 10:44:29',0,NULL,NULL,NULL),(652,'Mchanthundu',18,179,'2019-11-13 09:55:18',0,NULL,NULL,NULL),(653,'Kapesi',23,365,'2019-11-14 09:07:59',0,NULL,NULL,NULL),(654,'Chikwita',25,365,'2019-11-14 11:20:03',0,NULL,NULL,NULL),(655,'Chitedze',28,364,'2019-11-18 08:00:50',0,NULL,NULL,NULL),(656,'Libali',4,179,'2019-11-18 09:25:14',0,NULL,NULL,NULL),(657,'Nkhwangwa',18,217,'2019-11-18 11:47:30',0,NULL,NULL,NULL),(658,'Taoneka',22,365,'2019-11-18 17:52:26',0,NULL,NULL,NULL),(659,'Chaphuka',14,365,'2019-11-19 12:59:13',0,NULL,NULL,NULL),(660,'Chitipi',18,270,'2019-11-20 11:03:50',0,NULL,NULL,NULL),(661,'Mchere',14,396,'2019-11-20 13:47:12',0,NULL,NULL,NULL),(662,'Kuntaja',32,217,'2019-11-21 09:58:48',0,NULL,NULL,NULL),(663,'Mkola',5,217,'2019-11-21 10:47:24',0,NULL,NULL,NULL),(664,'Mwenyera',28,324,'2019-11-21 11:14:42',0,NULL,NULL,NULL),(665,'Ndakwela',27,356,'2019-11-21 12:13:02',0,NULL,NULL,NULL),(666,'Chiwoko',28,94,'2019-11-21 13:05:41',0,NULL,NULL,NULL),(667,'Ng\'ombe',27,364,'2019-11-22 09:50:50',0,NULL,NULL,NULL),(668,'Mwenda',18,364,'2019-11-22 11:40:21',0,NULL,NULL,NULL),(669,'Kozalendo',22,365,'2019-11-23 10:45:13',0,NULL,NULL,NULL),(670,'Chitukula',32,397,'2019-11-25 12:44:35',0,NULL,NULL,NULL),(671,'Masankhawa',18,109,'2019-11-26 11:12:27',0,NULL,NULL,NULL),(672,'Masula',2,109,'2019-11-26 11:20:40',0,NULL,NULL,NULL),(673,'Lupanga',30,324,'2019-11-26 12:29:11',0,NULL,NULL,NULL),(674,'Area 24',9,329,'2019-11-29 11:15:41',0,NULL,NULL,NULL),(675,'Dambe',19,364,'2019-11-29 11:54:11',0,NULL,NULL,NULL),(676,'Kulumba',18,396,'2019-11-30 11:10:33',0,NULL,NULL,NULL),(677,'Mwera',18,396,'2019-12-01 12:31:20',0,NULL,NULL,NULL),(678,'Saimon',14,365,'2019-12-02 09:54:48',0,NULL,NULL,NULL),(679,'Somisomi',14,365,'2019-12-02 09:55:03',0,NULL,NULL,NULL),(680,'Chingadze',18,397,'2019-12-02 10:46:33',0,NULL,NULL,NULL),(681,'Makwangwala',30,364,'2019-12-02 11:12:05',0,NULL,NULL,NULL),(682,'Mbera',30,397,'2019-12-02 14:55:36',0,NULL,NULL,NULL),(683,'Tambalale',28,217,'2019-12-03 08:07:41',0,NULL,NULL,NULL),(684,'Kandikole',28,364,'2019-12-04 08:34:50',0,NULL,NULL,NULL),(685,'Chikanda',12,364,'2019-12-04 11:23:46',0,NULL,NULL,NULL),(686,'Ngwenya',18,364,'2019-12-04 11:56:48',0,NULL,NULL,NULL),(687,'Chimutu',2,396,'2019-12-04 13:31:43',0,NULL,NULL,NULL),(688,'Chekucheku',31,364,'2019-12-05 10:41:45',0,NULL,NULL,NULL),(689,'Mwenegamba',1,364,'2019-12-05 11:45:51',0,NULL,NULL,NULL),(690,'Kamelu',23,364,'2019-12-06 10:24:09',0,NULL,NULL,NULL),(691,'Masamba',25,364,'2019-12-07 10:05:33',0,NULL,NULL,NULL),(692,'Katsakaminga',23,303,'2019-12-09 15:52:45',0,NULL,NULL,NULL),(693,'Sogoje',9,364,'2019-12-10 09:23:43',0,NULL,NULL,NULL),(694,'Chilembwe',12,364,'2019-12-10 09:52:23',0,NULL,NULL,NULL),(695,'Naphungo',24,365,'2019-12-11 10:28:52',0,NULL,NULL,NULL),(696,'Chingwaru',26,324,'2019-12-12 11:13:13',0,NULL,NULL,NULL),(697,'Kunthulu',18,109,'2019-12-12 12:05:08',0,NULL,NULL,NULL),(698,'Sabwe',14,420,'2019-12-13 10:47:08',0,NULL,NULL,NULL),(699,'Limbe',2,270,'2019-12-13 12:22:09',0,NULL,NULL,NULL),(700,'Chipondeni',29,94,'2019-12-14 07:53:44',0,NULL,NULL,NULL),(701,'Zo',15,303,'2019-12-16 13:57:27',0,NULL,NULL,NULL),(702,'Zolokere',15,303,'2019-12-16 13:57:44',0,NULL,NULL,NULL),(703,'Chindamba',9,397,'2019-12-17 09:17:14',0,NULL,NULL,NULL),(704,'Chikanda',9,364,'2019-12-17 09:29:17',0,NULL,NULL,NULL),(705,'Mawera',22,364,'2019-12-17 10:35:09',0,NULL,NULL,NULL),(706,'Mnthobwa',18,397,'2019-12-18 09:20:40',0,NULL,NULL,NULL),(707,'Majolo',22,365,'2019-12-19 09:47:22',0,NULL,NULL,NULL),(708,'Nsaluzao',23,324,'2019-12-19 17:40:05',0,NULL,NULL,NULL),(709,'Londa',18,324,'2019-12-20 14:16:07',0,NULL,NULL,NULL),(710,'Maomazoma',7,365,'2019-12-24 09:22:22',0,NULL,NULL,NULL),(711,'Chiuwa',14,365,'2019-12-27 11:21:37',0,NULL,NULL,NULL),(712,'Katema',3,217,'2020-01-02 10:50:25',0,NULL,NULL,NULL),(713,'Mkaya',9,365,'2020-01-03 11:20:31',0,NULL,NULL,NULL),(714,'Matapa',18,397,'2020-01-06 09:31:13',0,NULL,NULL,NULL),(715,'Mwasambo',4,270,'2020-01-06 14:05:57',0,NULL,NULL,NULL),(716,'Mwandovi',4,270,'2020-01-06 14:06:13',0,NULL,NULL,NULL),(717,'Kambali',24,324,'2020-01-06 15:54:12',0,NULL,NULL,NULL),(718,'Mpakulamtanda',25,94,'2020-01-07 14:35:02',0,NULL,NULL,NULL),(719,'Mwase',2,179,'2020-01-08 11:17:38',0,NULL,NULL,NULL),(720,'Makwangwala',9,179,'2020-01-08 11:24:10',0,NULL,NULL,NULL),(721,'Thekerani',22,270,'2020-01-11 11:20:53',0,NULL,NULL,NULL),(722,'Mputeni',22,365,'2020-01-13 08:42:24',0,NULL,NULL,NULL),(723,'Chimwala',30,365,'2020-01-14 10:12:58',0,NULL,NULL,NULL),(724,'Kandidi',16,365,'2020-01-14 11:15:02',0,NULL,NULL,NULL),(725,'Area 18 b',28,270,'2020-01-14 13:04:00',0,NULL,NULL,NULL),(726,'Matipwiri',24,365,'2020-01-16 09:54:28',0,NULL,NULL,NULL),(727,'Chapata',16,365,'2020-01-16 10:02:58',0,NULL,NULL,NULL),(728,'Chiwere',16,324,'2020-01-17 10:45:45',0,NULL,NULL,NULL),(729,'Khokwe',5,270,'2020-01-17 12:50:57',0,NULL,NULL,NULL),(730,'Buluzi',28,179,'2020-01-17 13:50:40',0,NULL,NULL,NULL),(731,'Kameza',32,217,'2020-01-20 09:24:44',0,NULL,NULL,NULL),(732,'Nan',18,303,'2020-01-20 11:14:34',0,NULL,NULL,NULL),(733,'Namasalima',9,365,'2020-01-20 12:23:31',0,NULL,NULL,NULL),(734,'Nsanama',5,94,'2020-01-21 09:24:13',0,NULL,NULL,NULL),(735,'Ntcholera',23,94,'2020-01-21 09:32:23',0,NULL,NULL,NULL),(736,'Mphimbi',30,365,'2020-01-23 09:45:23',0,NULL,NULL,NULL),(737,'Gomani',25,270,'2020-01-23 12:33:19',0,NULL,NULL,NULL),(738,'Ngomani',28,270,'2020-01-23 13:19:34',0,NULL,NULL,NULL),(739,'Kapalamula',30,270,'2020-01-24 11:54:08',0,NULL,NULL,NULL),(740,'Nkhokwe',5,324,'2020-01-27 08:26:35',0,NULL,NULL,NULL),(741,'Phambala',23,365,'2020-01-27 15:34:41',0,NULL,NULL,NULL),(742,'Maloweka',9,270,'2020-01-28 12:45:45',0,NULL,NULL,NULL),(743,'',18,270,'2020-01-28 13:00:54',0,NULL,NULL,NULL),(744,'Euthini',15,270,'2020-01-29 12:57:48',0,NULL,NULL,NULL),(745,'Kuweruza',22,217,'2020-01-29 15:17:28',0,NULL,NULL,NULL),(746,'Mpelembe',21,217,'2020-02-05 10:31:24',0,NULL,NULL,NULL),(747,'Kapichi',25,364,'2020-02-06 08:08:19',0,NULL,NULL,NULL),(748,'Nkungula',18,364,'2020-02-06 08:21:05',0,NULL,NULL,NULL),(749,'Kandiyani',28,364,'2020-02-06 11:06:37',0,NULL,NULL,NULL),(750,'Chukula',18,217,'2020-02-06 11:33:29',0,NULL,NULL,NULL),(751,'Ta  dzoole',8,270,'2020-02-06 12:43:12',0,NULL,NULL,NULL),(752,'Matapira',18,217,'2020-02-10 11:09:56',0,NULL,NULL,NULL),(753,'N\'jambe',14,324,'2020-02-10 11:50:59',0,NULL,NULL,NULL),(754,'Vuso jere',8,365,'2020-02-11 11:35:09',0,NULL,NULL,NULL),(755,'Gowola',5,364,'2020-02-11 15:53:23',0,NULL,NULL,NULL),(756,'Nkumbira',7,217,'2020-02-12 09:04:26',0,NULL,NULL,NULL),(757,'Mbwatalika',28,397,'2020-02-12 09:24:42',0,NULL,NULL,NULL),(758,'Chigojo',32,410,'2020-02-12 12:14:15',0,NULL,NULL,NULL),(759,'Chikulamayembe',15,132,'2020-02-13 10:58:55',0,NULL,NULL,NULL),(760,'Ndache',19,270,'2020-02-13 11:53:46',0,NULL,NULL,NULL),(761,'Unknown',24,132,'2020-02-14 09:04:01',0,NULL,NULL,NULL),(762,'Kantunda',24,396,'2020-02-14 11:05:40',0,NULL,NULL,NULL),(763,'Malemia',27,365,'2020-02-14 14:25:37',0,NULL,NULL,NULL),(764,'Benje',27,365,'2020-02-17 11:34:15',0,NULL,NULL,NULL),(765,'New guilliver',28,270,'2020-02-18 10:16:11',0,NULL,NULL,NULL),(766,'Kwethemule',22,179,'2020-02-18 14:12:49',0,NULL,NULL,NULL),(767,'Maliseni',29,365,'2020-02-19 08:09:55',0,NULL,NULL,NULL),(768,'Ta  somba',14,236,'2020-02-19 10:14:05',0,NULL,NULL,NULL),(769,'Area 36',18,236,'2020-02-19 10:15:16',0,NULL,NULL,NULL),(770,'Ta tsabango',18,236,'2020-02-19 10:16:17',0,NULL,NULL,NULL),(771,'Kapeni',27,356,'2020-02-19 11:32:47',0,NULL,NULL,NULL),(772,'Lumbadzi',18,179,'2020-02-19 13:29:41',0,NULL,NULL,NULL),(773,'Area38',18,236,'2020-02-20 10:42:26',0,NULL,NULL,NULL),(774,'Kaphiri',18,236,'2020-02-20 13:46:09',0,NULL,NULL,NULL),(775,'Chinsapo',18,236,'2020-02-20 14:36:42',0,NULL,NULL,NULL),(776,'Mtsabango',18,217,'2020-02-21 09:17:11',0,NULL,NULL,NULL),(777,'Area25',18,236,'2020-02-21 09:24:18',0,NULL,NULL,NULL),(778,'Vingula',13,364,'2020-02-24 11:10:04',0,NULL,NULL,NULL),(779,'Chinyamunyamu',2,236,'2020-02-25 11:07:32',0,NULL,NULL,NULL),(780,'Kaponda',20,365,'2020-02-27 08:18:17',0,NULL,NULL,NULL),(781,'Mkhumba',22,94,'2020-02-27 10:11:22',0,NULL,NULL,NULL),(782,'Chiwamba',18,236,'2020-02-27 10:35:22',0,NULL,NULL,NULL),(783,'Masula',23,365,'2020-02-27 12:48:39',0,NULL,NULL,NULL),(784,'Mitundu',28,364,'2020-02-29 11:28:08',0,NULL,NULL,NULL),(785,'Malili',16,365,'2020-03-02 17:42:00',0,NULL,NULL,NULL),(786,'Nanjiri',18,364,'2020-03-04 11:58:57',0,NULL,NULL,NULL),(787,'Sawali',30,132,'2020-03-04 14:30:17',0,NULL,NULL,NULL),(788,'Chikundu',3,270,'2020-03-05 09:41:06',0,NULL,NULL,NULL),(789,'Mitengo',18,130,'2020-03-05 10:10:00',0,NULL,NULL,NULL),(790,'Kuntaja',22,179,'2020-03-05 10:23:59',0,NULL,NULL,NULL),(791,'6 miles',28,94,'2020-03-05 11:02:12',0,NULL,NULL,NULL),(792,'Katunga',14,270,'2020-03-05 12:45:10',0,NULL,NULL,NULL),(793,'Selengo',22,303,'2020-03-06 13:02:31',0,NULL,NULL,NULL),(794,'Chiphangu',18,365,'2020-03-09 16:13:42',0,NULL,NULL,NULL),(795,'Machakaza',18,396,'2020-03-10 09:37:34',0,NULL,NULL,NULL),(796,'Area 51',18,396,'2020-03-10 09:43:24',0,NULL,NULL,NULL),(797,'Kambuka',23,396,'2020-03-10 09:52:45',0,NULL,NULL,NULL),(798,'Kauma',23,396,'2020-03-10 10:10:07',0,NULL,NULL,NULL),(799,'Jalasi',5,179,'2020-03-10 10:23:28',0,NULL,NULL,NULL),(800,'Chikutu',18,396,'2020-03-10 10:29:03',0,NULL,NULL,NULL),(801,'Masaula',9,356,'2020-03-10 12:39:15',0,NULL,NULL,NULL),(802,'Salakoma',7,396,'2020-03-11 09:49:16',0,NULL,NULL,NULL),(803,'Motolosi',18,396,'2020-03-11 09:58:02',0,NULL,NULL,NULL),(804,'Padoko',14,303,'2020-03-11 11:50:48',0,NULL,NULL,NULL),(805,'Iu',2,303,'2020-03-13 12:30:19',0,NULL,NULL,NULL),(806,'Manduwe',25,365,'2020-03-13 12:34:39',0,NULL,NULL,NULL),(807,'',25,365,'2020-03-13 12:34:44',0,NULL,NULL,NULL),(808,'Nyezelera',24,365,'2020-03-13 12:55:21',0,NULL,NULL,NULL),(809,'Chiuzira',28,324,'2020-03-16 12:31:10',0,NULL,NULL,NULL),(810,'Ts',22,303,'2020-03-16 13:53:41',0,NULL,NULL,NULL),(811,'Phalula',30,179,'2020-03-16 14:16:40',0,NULL,NULL,NULL),(812,'Chensomba',14,270,'2020-03-17 12:51:30',0,NULL,NULL,NULL),(813,'Area24',18,236,'2020-03-18 09:44:32',0,NULL,NULL,NULL),(814,'Mulumbe',9,236,'2020-03-18 11:20:23',0,NULL,NULL,NULL),(815,'Chitukula',23,179,'2020-03-18 13:48:43',0,NULL,NULL,NULL),(816,'Mtumanje',9,236,'2020-03-19 09:03:03',0,NULL,NULL,NULL),(817,'Likuni works',28,270,'2020-03-19 11:21:34',0,NULL,NULL,NULL),(818,'Airwing',28,270,'2020-03-19 12:09:14',0,NULL,NULL,NULL),(819,'Kamoyo',18,236,'2020-03-20 10:25:56',0,NULL,NULL,NULL),(820,'Msiska',7,396,'2020-03-23 09:56:07',0,NULL,NULL,NULL),(821,'Nsinje',18,396,'2020-03-23 10:14:17',0,NULL,NULL,NULL),(822,'Nsinje',28,396,'2020-03-23 10:14:43',0,NULL,NULL,NULL),(823,'Matindi',18,364,'2020-03-23 10:30:33',0,NULL,NULL,NULL),(824,'Chambwe',18,396,'2020-03-23 14:21:38',0,NULL,NULL,NULL),(825,'Chembela',30,303,'2020-03-23 15:49:05',0,NULL,NULL,NULL),(826,'Samson',31,270,'2020-03-24 09:59:22',0,NULL,NULL,NULL),(827,'Singano',14,270,'2020-03-24 12:52:33',0,NULL,NULL,NULL),(828,'Sosola',30,396,'2020-03-25 09:07:08',0,NULL,NULL,NULL),(829,'Mphunzi village',18,270,'2020-03-26 10:25:58',0,NULL,NULL,NULL),(830,'Malembo',3,396,'2020-03-26 11:15:28',0,NULL,NULL,NULL),(831,'Chimwaye',14,270,'2020-03-26 13:02:47',0,NULL,NULL,NULL),(832,'Khaolera',24,179,'2020-03-30 09:24:47',0,NULL,NULL,NULL),(833,'Chowa',18,396,'2020-03-30 09:25:23',0,NULL,NULL,NULL),(834,'Chisapo',28,397,'2020-03-30 12:01:23',0,NULL,NULL,NULL),(835,'Njerwa',28,397,'2020-03-30 15:33:40',0,NULL,NULL,NULL),(836,'Maulawo',15,397,'2020-03-31 10:07:12',0,NULL,NULL,NULL),(837,'State house',28,324,'2020-03-31 12:19:42',0,NULL,NULL,NULL),(838,'Khonde',18,270,'2020-03-31 13:15:40',0,NULL,NULL,NULL),(839,'Kawazamaghe',13,365,'2020-03-31 14:53:31',0,NULL,NULL,NULL),(840,'Kilupula',4,397,'2020-04-01 14:16:17',0,NULL,NULL,NULL),(841,'Nalikule',18,397,'2020-04-01 15:09:48',0,NULL,NULL,NULL),(842,'Cholokoto',16,179,'2020-04-01 15:46:12',0,NULL,NULL,NULL),(843,'Mkagula',9,397,'2020-04-02 10:38:45',0,NULL,NULL,NULL),(844,'Buluzi',2,365,'2020-04-02 13:23:09',0,NULL,NULL,NULL),(845,'Mgwawuta',28,365,'2020-04-02 13:38:17',0,NULL,NULL,NULL),(846,'Mavwele',18,410,'2020-04-03 09:30:15',0,NULL,NULL,NULL),(847,'Chigunda',18,410,'2020-04-03 09:30:31',0,NULL,NULL,NULL),(848,'Area49',28,410,'2020-04-03 09:33:57',0,NULL,NULL,NULL),(849,'Mwambele',9,410,'2020-04-03 11:47:30',0,NULL,NULL,NULL),(850,'Msana',28,94,'2020-04-03 13:12:56',0,NULL,NULL,NULL),(851,'Gundadzuwa',23,132,'2020-04-03 13:51:17',0,NULL,NULL,NULL),(852,'Jalasi',9,132,'2020-04-03 14:03:16',0,NULL,NULL,NULL),(853,'Namwera',9,132,'2020-04-03 14:03:26',0,NULL,NULL,NULL),(854,'Mtsinje',18,94,'2020-04-06 12:28:57',0,NULL,NULL,NULL),(855,'Juma',11,320,'2020-04-07 09:24:27',0,NULL,NULL,NULL),(856,'Mbowoya',7,365,'2020-04-07 11:00:31',0,NULL,NULL,NULL),(857,'Chitukula',16,365,'2020-04-09 08:47:21',0,NULL,NULL,NULL),(858,'Zundu',22,435,'2020-04-09 10:55:30',0,NULL,NULL,NULL),(859,'Chitewere',32,435,'2020-04-14 15:56:59',0,NULL,NULL,NULL),(860,'Mlatha',24,324,'2020-04-16 10:10:20',0,NULL,NULL,NULL),(861,'Nkhulambe',24,324,'2020-04-17 11:43:53',0,NULL,NULL,NULL),(862,'Dzoole',18,365,'2020-04-17 15:06:37',0,NULL,NULL,NULL),(863,'Kapasule',27,179,'2020-04-27 09:47:47',0,NULL,NULL,NULL),(864,'Kunthanguo',24,359,'2020-04-27 11:28:27',0,NULL,NULL,NULL),(865,'Petulo',18,436,'2020-04-27 11:50:26',0,NULL,NULL,NULL),(866,'Chimaliro',14,179,'2020-04-28 07:39:02',0,NULL,NULL,NULL),(867,'Kumtaja',14,397,'2020-05-04 10:06:47',0,NULL,NULL,NULL),(868,'Chazima',9,130,'2020-05-06 10:21:56',0,NULL,NULL,NULL),(869,'Bona',26,435,'2020-05-06 11:06:01',0,NULL,NULL,NULL),(870,'Nyanyala',30,130,'2020-05-06 11:18:05',0,NULL,NULL,NULL),(871,'Nkhulambe',26,132,'2020-05-12 09:35:26',0,NULL,NULL,NULL),(872,'Mkuwira',18,435,'2020-05-15 08:32:07',0,NULL,NULL,NULL),(873,'Gwangwa',18,396,'2020-05-15 09:28:59',0,NULL,NULL,NULL),(874,'Tanga',3,365,'2020-05-15 13:00:27',0,NULL,NULL,NULL),(875,'Mkaya',30,435,'2020-05-15 15:36:31',0,NULL,NULL,NULL),(876,'Mphangu',18,364,'2020-05-18 10:10:45',0,NULL,NULL,NULL),(877,'Bwemba',20,428,'2020-05-18 15:34:22',0,NULL,NULL,NULL),(878,'Kabunthu',3,179,'2020-05-20 11:46:01',0,NULL,NULL,NULL),(879,'Thyokoma',9,270,'2020-05-25 09:32:38',0,NULL,NULL,NULL),(880,'Kachulu',23,364,'2020-05-26 10:02:54',0,NULL,NULL,NULL),(881,'Pwapwapa',15,179,'2020-05-29 08:36:43',0,NULL,NULL,NULL),(882,'Nkhumbulani',27,94,'2020-05-29 13:35:55',0,NULL,NULL,NULL),(883,'Mchilamwera',22,236,'2020-06-01 09:53:10',0,NULL,NULL,NULL),(884,'Kadewere',14,94,'2020-06-03 08:22:07',0,NULL,NULL,NULL),(885,'Chimbavi',15,428,'2020-06-08 10:45:58',0,NULL,NULL,NULL),(886,'M\'bwatalika',18,132,'2020-06-08 11:44:44',0,NULL,NULL,NULL),(887,'Mchesi',18,132,'2020-06-11 10:25:04',0,NULL,NULL,NULL),(888,'Chipasula',18,132,'2020-06-12 10:37:57',0,NULL,NULL,NULL),(889,'Kamphata',18,132,'2020-06-12 12:05:32',0,NULL,NULL,NULL),(890,'Kunsauka',18,132,'2020-06-12 12:06:00',0,NULL,NULL,NULL),(891,'Minyanga',2,270,'2020-06-17 14:07:44',0,NULL,NULL,NULL),(892,'Namanya',27,271,'2020-06-22 11:01:53',0,NULL,NULL,NULL),(893,'Chakhoma',28,271,'2020-06-22 11:12:31',0,NULL,NULL,NULL),(894,'Area24',28,364,'2020-06-23 10:24:46',0,NULL,NULL,NULL),(895,'Mboni zayehova',28,94,'2020-06-24 14:00:58',0,NULL,NULL,NULL),(896,'Mlima',9,179,'2020-06-25 11:08:07',0,NULL,NULL,NULL),(897,'Lulanga',3,396,'2020-06-26 15:08:34',0,NULL,NULL,NULL),(898,'Mpeni',14,428,'2020-06-30 12:50:44',0,NULL,NULL,NULL),(899,'Kachocho',20,94,'2020-07-02 09:14:46',0,NULL,NULL,NULL),(900,'Manyombe',30,271,'2020-07-02 09:43:44',0,NULL,NULL,NULL),(901,'Songa',18,94,'2020-07-02 10:22:10',0,NULL,NULL,NULL),(902,'Changunyuka',15,94,'2020-07-02 13:02:32',0,NULL,NULL,NULL),(903,'Ekwenden',15,109,'2020-07-03 14:46:57',0,NULL,NULL,NULL),(904,'Mkumbu',24,364,'2020-07-07 09:27:57',0,NULL,NULL,NULL),(905,'Chikumbu',18,364,'2020-07-07 09:29:00',0,NULL,NULL,NULL),(906,'Jalavikuwa',13,132,'2020-07-07 09:57:33',0,NULL,NULL,NULL),(907,'Chawamba',2,364,'2020-07-07 11:27:06',0,NULL,NULL,NULL),(908,'Mlambe',26,364,'2020-07-07 11:43:24',0,NULL,NULL,NULL),(909,'Nathenje',18,364,'2020-07-07 11:58:58',0,NULL,NULL,NULL),(910,'Mazengera',23,364,'2020-07-07 12:41:31',0,NULL,NULL,NULL),(911,'Mankhuwira',27,397,'2020-07-08 11:56:06',0,NULL,NULL,NULL),(912,'Kachilili',20,365,'2020-07-13 09:28:27',0,NULL,NULL,NULL),(913,'Kaigwazanga',20,365,'2020-07-13 09:28:52',0,NULL,NULL,NULL),(914,'Mkula',5,94,'2020-07-20 10:15:43',0,NULL,NULL,NULL),(915,'Senjere',6,94,'2020-07-20 11:37:30',0,NULL,NULL,NULL),(916,'Mponda',23,130,'2020-07-20 11:39:58',0,NULL,NULL,NULL),(917,'Area9',28,428,'2020-07-20 14:29:50',0,NULL,NULL,NULL),(918,'Mwangwebo',4,94,'2020-07-22 09:22:38',0,NULL,NULL,NULL),(919,'Nkumba',26,364,'2020-07-22 09:23:07',0,NULL,NULL,NULL),(920,'Petani',22,270,'2020-07-22 17:31:25',0,NULL,NULL,NULL),(921,'Mwasisya',7,364,'2020-07-23 12:14:00',0,NULL,NULL,NULL),(922,'Tchoyo village',28,270,'2020-07-24 13:15:43',0,NULL,NULL,NULL),(923,'Ntaja',19,179,'2020-07-27 11:51:28',0,NULL,NULL,NULL),(924,'Thowole',7,364,'2020-07-29 15:06:00',0,NULL,NULL,NULL),(925,'Pigu',28,365,'2020-07-31 11:17:49',0,NULL,NULL,NULL),(926,'Njati',23,428,'2020-07-31 11:50:23',0,NULL,NULL,NULL),(927,'Nthambala',23,410,'2020-07-31 14:27:48',0,NULL,NULL,NULL),(928,'Kang\'oma',28,364,'2020-08-07 11:09:53',0,NULL,NULL,NULL),(929,'Area  36',28,364,'2020-08-07 11:20:36',0,NULL,NULL,NULL),(930,'Makanjira',5,130,'2020-08-07 12:28:33',0,NULL,NULL,NULL),(931,'Kitanda',30,179,'2020-08-08 12:45:07',0,NULL,NULL,NULL),(932,'Chishembe',2,359,'2020-08-10 11:25:21',0,NULL,NULL,NULL),(933,'Salute',14,94,'2020-08-12 10:59:53',0,NULL,NULL,NULL),(934,'Chioko',23,359,'2020-08-12 12:54:03',0,NULL,NULL,NULL),(935,'Chapananga',19,410,'2020-08-13 09:22:57',0,NULL,NULL,NULL),(936,'Tawanga',26,359,'2020-08-13 10:18:40',0,NULL,NULL,NULL),(937,'Kafoteka',14,365,'2020-08-17 09:29:59',0,NULL,NULL,NULL),(938,'Magalasi',24,270,'2020-08-19 15:55:13',0,NULL,NULL,NULL),(939,'Nanjiki',29,270,'2020-08-20 16:44:09',0,NULL,NULL,NULL),(940,'Njoka',16,179,'2020-08-24 13:29:03',0,NULL,NULL,NULL),(941,'Zankutu',28,359,'2020-08-27 11:51:05',0,NULL,NULL,NULL),(942,'Zantuku',28,359,'2020-08-27 11:51:13',0,NULL,NULL,NULL),(943,'Siphasi',20,94,'2020-08-28 09:31:00',0,NULL,NULL,NULL),(944,'Mchambo',20,94,'2020-08-28 09:31:27',0,NULL,NULL,NULL),(945,'Malingunde',28,359,'2020-08-28 12:32:48',0,NULL,NULL,NULL),(946,'Kalubi',29,365,'2020-09-05 09:39:59',0,NULL,NULL,NULL),(947,'Chitowe',18,179,'2020-09-07 09:51:10',0,NULL,NULL,NULL),(948,'Mapanda',14,236,'2020-09-08 08:26:04',0,NULL,NULL,NULL),(949,'Mayenje',12,179,'2020-09-08 14:47:48',0,NULL,NULL,NULL),(950,'Phangwa',6,324,'2020-09-09 14:35:17',0,NULL,NULL,NULL),(951,'Sitola',30,359,'2020-09-10 14:02:19',0,NULL,NULL,NULL),(952,'Saidi',16,179,'2020-09-11 09:29:24',0,NULL,NULL,NULL),(953,'Naseta',22,355,'2020-09-14 14:42:11',0,NULL,NULL,NULL),(954,'Khulunga',16,364,'2020-09-17 11:58:48',0,NULL,NULL,NULL),(955,'Sitola',3,324,'2020-09-21 16:06:48',0,NULL,NULL,NULL),(956,'Kaiche',3,324,'2020-09-21 16:07:18',0,NULL,NULL,NULL),(957,'Solomoni',31,359,'2020-09-25 11:41:09',0,NULL,NULL,NULL),(958,'Nelesani',31,359,'2020-09-25 11:41:28',0,NULL,NULL,NULL),(959,'Bwemba ',28,270,'2020-10-01 18:41:01',0,NULL,NULL,NULL),(960,'Mbera',23,179,'2020-10-05 16:41:34',0,NULL,NULL,NULL),(961,'Mlolo',22,270,'2020-10-08 10:50:31',0,NULL,NULL,NULL),(962,'Mulolo',22,303,'2020-10-08 12:32:47',0,NULL,NULL,NULL),(963,'Ndzonzo',25,364,'2020-10-12 15:50:23',0,NULL,NULL,NULL),(964,'Tomasi',22,364,'2020-10-19 08:17:16',0,NULL,NULL,NULL),(965,'Tsoka',22,364,'2020-10-19 08:17:22',0,NULL,NULL,NULL),(966,'Chatata',18,364,'2020-10-21 09:08:26',0,NULL,NULL,NULL),(967,'Yotamuziba',15,179,'2020-10-21 09:12:43',0,NULL,NULL,NULL),(968,'Naele',28,364,'2020-10-21 09:56:25',0,NULL,NULL,NULL),(969,'Gaduya',26,179,'2020-10-21 10:50:37',0,NULL,NULL,NULL),(970,'Samson',22,179,'2020-10-21 12:05:47',0,NULL,NULL,NULL),(971,'Kat',9,303,'2020-10-21 14:42:29',0,NULL,NULL,NULL),(972,'Katule',9,303,'2020-10-21 14:42:44',0,NULL,NULL,NULL),(973,'James',29,270,'2020-10-21 17:17:22',0,NULL,NULL,NULL),(974,'Muona',29,270,'2020-10-21 17:17:48',0,NULL,NULL,NULL),(975,'Mwanamanga',28,270,'2020-10-26 15:31:33',0,NULL,NULL,NULL),(976,'Majamanda',25,271,'2020-10-28 11:53:41',0,NULL,NULL,NULL),(977,'Matukuta',16,94,'2020-10-28 15:02:30',0,NULL,NULL,NULL),(978,'Bwananyambi',5,359,'2020-10-29 12:32:41',0,NULL,NULL,NULL),(979,'Kanyerere',8,270,'2020-10-29 12:33:02',0,NULL,NULL,NULL),(980,'Mponera',28,270,'2020-10-29 12:33:26',0,NULL,NULL,NULL),(981,'Khwentemule',14,94,'2020-10-29 15:36:36',0,NULL,NULL,NULL),(982,'Nkhumba',24,467,'2020-10-30 12:29:59',0,NULL,NULL,NULL),(983,'Kadundula',18,94,'2020-11-02 12:48:00',0,NULL,NULL,NULL),(984,'Chitukula',22,364,'2020-11-05 12:43:03',0,NULL,NULL,NULL),(985,'Chamthunya',30,359,'2020-11-06 10:06:55',0,NULL,NULL,NULL),(986,'Mabuka',22,365,'2020-11-06 13:49:12',0,NULL,NULL,NULL),(987,'Kachere',3,179,'2020-11-11 08:41:09',0,NULL,NULL,NULL),(988,'Mateyu',18,94,'2020-11-16 09:50:02',0,NULL,NULL,NULL),(989,'Kaphuka',18,365,'2020-11-16 10:58:06',0,NULL,NULL,NULL),(990,'Gundadzuwa',18,365,'2020-11-16 10:58:17',0,NULL,NULL,NULL),(991,'Thole',29,303,'2020-11-16 11:33:45',0,NULL,NULL,NULL),(992,'Zamkutu',28,94,'2020-11-17 10:58:32',0,NULL,NULL,NULL),(993,'Nakumba',3,410,'2020-11-18 10:22:00',0,NULL,NULL,NULL),(994,'Kambala',23,410,'2020-11-18 10:33:06',0,NULL,NULL,NULL),(995,'Kangala',23,410,'2020-11-18 10:33:22',0,NULL,NULL,NULL),(996,'Nkanda',14,303,'2020-11-18 11:14:03',0,NULL,NULL,NULL),(997,'Kao',28,303,'2020-11-18 11:14:40',0,NULL,NULL,NULL),(998,'Kaondo',28,303,'2020-11-18 11:15:12',0,NULL,NULL,NULL),(999,'Mchadza',18,410,'2020-11-18 14:11:49',0,NULL,NULL,NULL),(1000,'Mwanamanga',18,94,'2020-11-23 11:01:48',0,NULL,NULL,NULL),(1001,'Mwase',23,94,'2020-11-23 11:47:38',0,NULL,NULL,NULL),(1002,'Chikuse',23,94,'2020-11-23 11:47:47',0,NULL,NULL,NULL),(1003,'Chibula',15,467,'2020-11-23 12:27:53',0,NULL,NULL,NULL),(1004,'Chits',18,303,'2020-11-23 12:36:04',0,NULL,NULL,NULL),(1005,'Chitseka',18,303,'2020-11-23 12:36:17',0,NULL,NULL,NULL),(1006,'Amamkwira',27,396,'2020-11-23 14:19:43',0,NULL,NULL,NULL),(1007,'Area18',18,396,'2020-11-27 11:04:03',0,NULL,NULL,NULL),(1008,'Maele',29,94,'2020-11-27 12:19:15',0,NULL,NULL,NULL),(1009,'Nsathe',2,364,'2020-12-01 11:19:36',0,NULL,NULL,NULL),(1010,'Longwe',2,364,'2020-12-01 11:19:50',0,NULL,NULL,NULL),(1011,'Area49',18,396,'2020-12-03 09:23:02',0,NULL,NULL,NULL),(1012,'Mtandire',18,217,'2020-12-07 08:59:34',0,NULL,NULL,NULL),(1013,'Biwi',18,217,'2020-12-07 09:18:31',0,NULL,NULL,NULL),(1014,'Mpingu',28,364,'2020-12-07 09:20:14',0,NULL,NULL,NULL),(1015,'Bwanali',3,324,'2020-12-09 08:20:56',0,NULL,NULL,NULL),(1016,'Mlumbe',22,303,'2020-12-09 12:28:33',0,NULL,NULL,NULL),(1017,'Chaza',18,303,'2020-12-09 14:21:30',0,NULL,NULL,NULL),(1018,'Mbwana',9,94,'2020-12-10 09:44:35',0,NULL,NULL,NULL),(1019,'Khula',5,94,'2020-12-10 12:22:07',0,NULL,NULL,NULL),(1020,'Ntonda',3,179,'2020-12-10 13:15:30',0,NULL,NULL,NULL),(1021,'Ntchindi',15,324,'2020-12-11 10:40:31',0,NULL,NULL,NULL),(1022,'Mwasambo',6,313,'2020-12-14 14:04:17',0,NULL,NULL,NULL),(1023,'Mtambira',18,271,'2020-12-15 08:42:44',0,NULL,NULL,NULL),(1024,'Ndanga',24,270,'2020-12-16 07:46:12',0,NULL,NULL,NULL),(1025,'Mawale',16,236,'2020-12-16 10:09:16',0,NULL,NULL,NULL),(1026,'Mtema',28,364,'2020-12-16 11:44:35',0,NULL,NULL,NULL),(1027,'Mwingiso',14,324,'2020-12-16 13:48:10',0,NULL,NULL,NULL),(1028,'Zalewa',14,324,'2020-12-16 13:48:21',0,NULL,NULL,NULL),(1029,'Kalonga',18,364,'2020-12-16 15:01:18',0,NULL,NULL,NULL),(1030,'Malemia',18,236,'2020-12-22 08:40:00',0,NULL,NULL,NULL),(1031,'Malemiya',28,236,'2020-12-22 08:40:47',0,NULL,NULL,NULL),(1032,'Njerwa',18,467,'2020-12-22 10:08:39',0,NULL,NULL,NULL),(1033,'Asuya',14,303,'2020-12-22 13:05:20',0,NULL,NULL,NULL),(1034,'Nyaka',14,132,'2020-12-23 08:33:02',0,NULL,NULL,NULL),(1035,'Mponda',20,132,'2020-12-23 09:17:42',0,NULL,NULL,NULL),(1036,'Mayani',23,132,'2020-12-23 09:30:27',0,NULL,NULL,NULL),(1037,'Chikutula',18,132,'2020-12-23 09:42:31',0,NULL,NULL,NULL),(1038,'Masambankhunda',18,364,'2020-12-23 10:45:04',0,NULL,NULL,NULL),(1039,'Chale',18,303,'2020-12-23 13:35:28',0,NULL,NULL,NULL),(1040,'Nkagula',9,410,'2020-12-29 11:50:08',0,NULL,NULL,NULL),(1041,'Tsabwe',22,303,'2020-12-29 12:00:23',0,NULL,NULL,NULL),(1042,'Tsomba',14,303,'2020-12-29 13:23:24',0,NULL,NULL,NULL),(1043,'Chikho',16,303,'2020-12-29 14:19:21',0,NULL,NULL,NULL),(1044,'Milopa',30,271,'2020-12-30 08:09:25',0,NULL,NULL,NULL),(1045,'Salima',28,364,'2020-12-30 13:35:34',0,NULL,NULL,NULL),(1046,'Malingachadzi',6,132,'2021-01-04 08:51:37',0,NULL,NULL,NULL),(1047,'Mbodye',25,132,'2021-01-04 09:00:16',0,NULL,NULL,NULL),(1048,'Chikowi',22,270,'2021-01-04 10:18:55',0,NULL,NULL,NULL),(1049,'Njera',30,270,'2021-01-04 11:00:01',0,NULL,NULL,NULL),(1050,'Kwaila',24,365,'2021-01-04 13:13:10',0,NULL,NULL,NULL),(1051,'Faluku',3,270,'2021-01-05 12:43:35',0,NULL,NULL,NULL),(1052,'Baluku',3,270,'2021-01-05 12:44:02',0,NULL,NULL,NULL),(1053,'Mwavwere',20,329,'2021-01-05 14:13:08',0,NULL,NULL,NULL),(1054,'Nakwawa',18,329,'2021-01-07 10:37:05',0,NULL,NULL,NULL),(1055,'Chibaya',14,94,'2021-01-11 10:52:21',0,NULL,NULL,NULL),(1056,'Ndalama',22,94,'2021-01-13 11:56:26',0,NULL,NULL,NULL),(1057,'Wakawaka',28,94,'2021-01-14 09:46:37',0,NULL,NULL,NULL),(1058,'Nandaya',23,359,'2021-01-18 09:21:57',0,NULL,NULL,NULL),(1059,'Police lines',28,179,'2021-01-20 10:03:14',0,NULL,NULL,NULL),(1060,'Mthwalo',15,359,'2021-01-20 12:22:50',0,NULL,NULL,NULL),(1061,'Area6',28,329,'2021-01-25 08:20:34',0,NULL,NULL,NULL),(1062,'Unknown',28,329,'2021-01-25 08:22:28',0,NULL,NULL,NULL),(1063,'Chilota',18,270,'2021-01-25 11:07:26',0,NULL,NULL,NULL),(1064,'Chitekesa',26,270,'2021-01-25 12:22:42',0,NULL,NULL,NULL),(1065,'Mpondasi',3,364,'2021-01-26 10:03:34',0,NULL,NULL,NULL),(1066,'Mwenje',23,364,'2021-01-29 08:46:59',0,NULL,NULL,NULL),(1067,'Mulolo',29,356,'2021-02-01 12:31:31',0,NULL,NULL,NULL),(1068,'Mtukula',12,94,'2021-02-05 09:36:12',0,NULL,NULL,NULL),(1069,'Kaluluma',28,94,'2021-02-05 10:17:38',0,NULL,NULL,NULL),(1070,'Chadzala',18,397,'2021-02-08 09:02:42',0,NULL,NULL,NULL),(1071,'Malilani',23,364,'2021-02-08 10:46:13',0,NULL,NULL,NULL),(1072,'Nduwa',20,397,'2021-02-09 09:28:28',0,NULL,NULL,NULL),(1073,'Mwangata',9,397,'2021-02-09 10:18:29',0,NULL,NULL,NULL),(1074,'Mwekalowo',1,364,'2021-02-09 13:16:40',0,NULL,NULL,NULL),(1075,'Kachindamoto',16,329,'2021-02-10 13:28:46',0,NULL,NULL,NULL),(1076,'Mkando',25,397,'2021-02-10 14:21:25',0,NULL,NULL,NULL),(1077,'Machinjili',24,397,'2021-02-11 10:50:17',0,NULL,NULL,NULL),(1078,'Sambulata',24,397,'2021-02-11 11:01:18',0,NULL,NULL,NULL),(1079,'Kakondo',20,365,'2021-02-11 15:33:23',0,NULL,NULL,NULL),(1080,'Khanzi',20,365,'2021-02-11 15:33:36',0,NULL,NULL,NULL),(1081,'Makondo',20,365,'2021-02-11 15:33:44',0,NULL,NULL,NULL),(1082,'Gwaza',25,94,'2021-02-16 10:20:02',0,NULL,NULL,NULL),(1083,'Area 25c',28,94,'2021-02-17 10:10:08',0,NULL,NULL,NULL),(1084,'Tongole',28,94,'2021-02-18 11:47:50',0,NULL,NULL,NULL),(1085,'Chimaliro',30,270,'2021-02-23 10:39:13',0,NULL,NULL,NULL),(1086,'Ngolowido',16,365,'2021-02-23 11:30:42',0,NULL,NULL,NULL),(1087,'Kamunoyo',13,365,'2021-02-23 14:39:03',0,NULL,NULL,NULL),(1088,'Zalenga',18,365,'2021-02-25 10:25:27',0,NULL,NULL,NULL),(1089,'Ntande',18,179,'2021-03-01 09:56:23',0,NULL,NULL,NULL),(1090,'Gumbi',18,179,'2021-03-01 10:04:05',0,NULL,NULL,NULL),(1091,'Mtambo',26,270,'2021-03-02 09:34:34',0,NULL,NULL,NULL),(1092,'Khanyiwa',24,324,'2021-03-02 15:08:32',0,NULL,NULL,NULL),(1093,'Nseka',18,397,'2021-03-04 10:16:21',0,NULL,NULL,NULL),(1094,'Migowi',26,397,'2021-03-05 11:05:36',0,NULL,NULL,NULL),(1095,'Tumbwe',28,364,'2021-03-08 11:33:48',0,NULL,NULL,NULL),(1096,'Chitanthamapiri',2,397,'2021-03-08 12:48:37',0,NULL,NULL,NULL),(1097,'Kalinde',30,364,'2021-03-08 12:44:29',0,NULL,NULL,NULL),(1098,'Nkosa',5,270,'2021-03-11 11:00:20',0,NULL,NULL,NULL),(1099,'Ng\'ambo',9,324,'2021-03-15 11:13:34',0,NULL,NULL,NULL),(1100,'Mphamba',25,397,'2021-03-19 12:23:53',0,NULL,NULL,NULL),(1101,'Mphambala',25,397,'2021-03-19 12:24:16',0,NULL,NULL,NULL),(1102,'Nkonda',3,364,'2021-03-23 10:03:27',0,NULL,NULL,NULL),(1103,'Ntambi',20,397,'2021-03-25 08:57:18',0,NULL,NULL,NULL),(1104,'Matama',18,397,'2021-03-29 08:26:50',0,NULL,NULL,NULL),(1105,'Area 49',18,236,'2021-04-01 08:34:53',0,NULL,NULL,NULL),(1106,'Kapangwa',9,364,'2021-04-01 10:03:24',0,NULL,NULL,NULL),(1107,'Kayinga',5,364,'2021-04-07 13:22:24',0,NULL,NULL,NULL),(1108,'Kaole',28,324,'2021-04-07 14:48:52',0,NULL,NULL,NULL),(1109,'Katuya',26,324,'2021-04-08 14:31:40',0,NULL,NULL,NULL),(1110,'Chigalu',22,365,'2021-04-13 17:38:00',0,NULL,NULL,NULL),(1111,'Tambala',25,270,'2021-04-14 14:18:00',0,NULL,NULL,NULL),(1112,'Kamwendo',5,130,'2021-04-15 11:16:04',0,NULL,NULL,NULL),(1113,'Gundani',29,130,'2021-04-15 12:43:29',0,NULL,NULL,NULL),(1114,'Chibidza',9,397,'2021-04-19 09:55:13',0,NULL,NULL,NULL),(1115,'Kapsepse',14,397,'2021-04-20 09:20:59',0,NULL,NULL,NULL),(1116,'Mwajama',6,364,'2021-04-20 09:57:04',0,NULL,NULL,NULL),(1117,'Zidyana',6,364,'2021-04-20 09:57:16',0,NULL,NULL,NULL),(1118,'Thukuso',14,364,'2021-04-20 10:09:37',0,NULL,NULL,NULL),(1119,'Chukhutu',18,397,'2021-04-22 10:16:57',0,NULL,NULL,NULL),(1120,'Chikhutu',18,397,'2021-04-22 10:17:09',0,NULL,NULL,NULL),(1121,'Mpukula',12,397,'2021-04-23 09:57:11',0,NULL,NULL,NULL),(1122,'Machilinga',9,329,'2021-04-23 12:48:23',0,NULL,NULL,NULL),(1123,'Mthalire',1,130,'2021-04-26 11:13:11',0,NULL,NULL,NULL),(1124,'Mthalire',13,130,'2021-04-26 11:13:35',0,NULL,NULL,NULL),(1125,'Mthalire',1,130,'2021-04-26 11:13:04',0,NULL,NULL,NULL),(1126,'Mthalire',13,130,'2021-04-26 11:13:38',0,NULL,NULL,NULL),(1127,'Chikamapiri',7,397,'2021-05-04 09:30:13',0,NULL,NULL,NULL),(1128,'Thom',27,270,'2021-05-04 16:36:43',0,NULL,NULL,NULL),(1129,'Nkhuwi',18,365,'2021-05-05 13:34:31',0,NULL,NULL,NULL),(1130,'Mwachande',14,324,'2021-05-08 10:44:32',0,NULL,NULL,NULL),(1131,'Somba',27,271,'2021-05-10 09:38:54',0,NULL,NULL,NULL),(1132,'Kamenyagwaza',25,397,'2021-05-10 10:11:51',0,NULL,NULL,NULL),(1133,'Likoswe',14,397,'2021-05-12 08:46:08',0,NULL,NULL,NULL),(1134,'Chiramwera',22,329,'2021-05-12 13:19:10',0,NULL,NULL,NULL),(1135,'Mbelengwa',25,179,'2021-05-12 14:11:58',0,NULL,NULL,NULL),(1136,'Mulonyeni',20,397,'2021-05-13 09:07:11',0,NULL,NULL,NULL),(1137,'Chigoneka',18,397,'2021-05-13 09:07:38',0,NULL,NULL,NULL),(1138,'Tembe',20,270,'2021-05-24 10:17:10',0,NULL,NULL,NULL),(1139,'Kandikole',18,270,'2021-05-24 11:24:15',0,NULL,NULL,NULL),(1140,'Mtira',5,270,'2021-05-25 08:43:43',0,NULL,NULL,NULL),(1141,'Nsabango',18,270,'2021-05-25 13:06:30',0,NULL,NULL,NULL),(1142,'Chinthebe',22,359,'2021-05-26 10:59:22',0,NULL,NULL,NULL),(1143,'Kwasawali',30,364,'2021-05-28 09:43:22',0,NULL,NULL,NULL),(1144,'Konzekani',20,270,'2021-06-03 09:27:00',0,NULL,NULL,NULL),(1145,'Mirambo',26,324,'2021-06-03 10:40:29',0,NULL,NULL,NULL),(1146,'Chakhala',12,270,'2021-06-08 11:15:37',0,NULL,NULL,NULL),(1147,'Ganya',3,364,'2021-06-09 11:15:32',0,NULL,NULL,NULL),(1148,'Kasisi',29,270,'2021-06-09 12:21:02',0,NULL,NULL,NULL),(1149,'Mlumbe',11,270,'2021-06-15 08:55:05',0,NULL,NULL,NULL),(1150,'Chioko',2,179,'2021-06-17 10:22:08',0,NULL,NULL,NULL),(1151,'Mlangeni',25,270,'2021-06-19 11:46:48',0,NULL,NULL,NULL),(1152,'Njuchi',18,364,'2021-06-23 11:34:33',0,NULL,NULL,NULL),(1153,'Sikita',24,467,'2021-06-23 13:00:46',0,NULL,NULL,NULL),(1154,'Nalimaka',9,467,'2021-06-25 11:54:45',0,NULL,NULL,NULL),(1155,'Chisapo 2',28,467,'2021-06-25 11:55:58',0,NULL,NULL,NULL),(1156,'Nchimbuza',5,364,'2021-06-26 09:20:44',0,NULL,NULL,NULL),(1157,'Ningwa',5,364,'2021-06-26 09:20:56',0,NULL,NULL,NULL),(1158,'Bwaila maternity',28,364,'2021-06-28 14:52:59',0,NULL,NULL,NULL),(1159,'Salijeni',22,329,'2021-06-30 12:29:01',0,NULL,NULL,NULL),(1160,'Chintheche',7,270,'2021-07-02 11:50:54',0,NULL,NULL,NULL),(1161,'Themba',13,364,'2021-07-02 13:20:10',0,NULL,NULL,NULL),(1162,'Mulomba',5,329,'2021-07-07 10:08:28',0,NULL,NULL,NULL),(1163,'Majawa',3,364,'2021-07-08 12:07:48',0,NULL,NULL,NULL),(1164,'Kabango',23,94,'2021-07-09 12:13:49',0,NULL,NULL,NULL),(1165,'Senifali',3,171,'2021-07-12 15:37:52',0,NULL,NULL,NULL),(1166,'Katsabango',30,467,'2021-07-14 11:18:54',0,NULL,NULL,NULL),(1167,'Ngomano',22,467,'2021-07-14 12:44:06',0,NULL,NULL,NULL),(1168,'Chikwina',7,467,'2021-07-14 14:44:44',0,NULL,NULL,NULL),(1169,'Chibwebwe',29,422,'2021-07-16 11:23:32',0,NULL,NULL,NULL),(1170,'Matako',8,365,'2021-07-17 10:56:52',0,NULL,NULL,NULL),(1171,'Kapeni',18,364,'2021-07-21 11:16:07',0,NULL,NULL,NULL),(1172,'Changata',14,365,'2021-07-23 14:26:41',0,NULL,NULL,NULL),(1173,'Tapanyama',22,179,'2021-07-26 11:45:42',0,NULL,NULL,NULL),(1174,'Nchesi',28,467,'2021-07-28 12:39:59',0,NULL,NULL,NULL),(1175,'Chizuula',8,364,'2021-07-28 14:14:13',0,NULL,NULL,NULL),(1176,'Kalumbu',28,467,'2021-07-30 13:01:14',0,NULL,NULL,NULL),(1177,'Chiseka',25,365,'2021-08-02 10:19:39',0,NULL,NULL,NULL),(1178,'Stola',5,397,'2021-08-02 13:18:50',0,NULL,NULL,NULL),(1179,'Kayuni',7,365,'2021-08-09 11:42:44',0,NULL,NULL,NULL),(1180,'Ngwena',16,94,'2021-08-10 11:49:45',0,NULL,NULL,NULL),(1181,'Kawanga',16,467,'2021-08-10 12:50:34',0,NULL,NULL,NULL),(1182,'Mgomwa',30,270,'2021-08-10 13:08:49',0,NULL,NULL,NULL),(1183,'Chigoneka',28,364,'2021-08-16 10:48:13',0,NULL,NULL,NULL),(1184,'Phweleme',26,364,'2021-08-16 11:59:32',0,NULL,NULL,NULL),(1185,'Talumba',18,397,'2021-08-16 12:19:39',0,NULL,NULL,NULL),(1186,'Dibi',23,364,'2021-08-17 13:40:39',0,NULL,NULL,NULL),(1187,'Kamuzu baracks',28,270,'2021-08-19 10:20:34',0,NULL,NULL,NULL),(1188,'Mbang\'ombe',18,396,'2021-08-19 14:39:27',0,NULL,NULL,NULL),(1189,'Mban\'gombe',18,396,'2021-08-19 14:39:53',0,NULL,NULL,NULL),(1190,'Kasungu',28,364,'2021-08-20 13:45:18',0,NULL,NULL,NULL),(1191,'Makalanji',9,364,'2021-08-23 12:00:26',0,NULL,NULL,NULL),(1192,'Nthache',31,467,'2021-08-23 14:18:18',0,NULL,NULL,NULL),(1193,'Magwero',18,295,'2021-08-24 14:14:41',0,NULL,NULL,NULL),(1194,'Nkutumula',25,467,'2021-08-25 12:43:00',0,NULL,NULL,NULL),(1195,'Tuthuwa',24,467,'2021-08-27 11:26:18',0,NULL,NULL,NULL),(1196,'Kamilala',9,270,'2021-08-30 10:07:10',0,NULL,NULL,NULL),(1197,'Mpoza',9,270,'2021-08-30 10:07:31',0,NULL,NULL,NULL),(1198,'Chiwamba',28,364,'2021-09-01 14:07:04',0,NULL,NULL,NULL),(1199,'Mponda',25,364,'2021-09-14 10:55:01',0,NULL,NULL,NULL),(1200,'Kanjerengwa',20,428,'2021-09-15 11:47:35',0,NULL,NULL,NULL),(1201,'Kanjerengo',20,428,'2021-09-15 11:48:47',0,NULL,NULL,NULL),(1202,'Majawa',25,364,'2021-09-16 09:22:11',0,NULL,NULL,NULL),(1203,'Area 23',18,484,'2021-09-16 11:11:42',0,NULL,NULL,NULL),(1204,'Malenya',30,270,'2021-09-20 08:24:09',0,NULL,NULL,NULL),(1205,'Msosa',9,130,'2021-09-28 09:48:40',0,NULL,NULL,NULL),(1206,'Lirangwe',14,365,'2021-09-28 11:30:14',0,NULL,NULL,NULL),(1207,'Chingalu ',14,365,'2021-09-28 11:30:30',0,NULL,NULL,NULL),(1208,'Ngwenjemule',22,365,'2021-09-30 10:16:06',0,NULL,NULL,NULL),(1209,'Khongoni',2,364,'2021-10-01 09:31:12',0,NULL,NULL,NULL),(1210,'Chitukula',12,270,'2021-10-01 12:20:42',0,NULL,NULL,NULL),(1211,'Saimoni',31,365,'2021-10-04 08:33:10',0,NULL,NULL,NULL),(1212,'Symon',14,179,'2021-10-06 09:07:28',0,NULL,NULL,NULL),(1213,'Muyaya',16,329,'2021-10-06 15:08:08',0,NULL,NULL,NULL),(1214,'Munyanya',2,329,'2021-10-06 15:22:14',0,NULL,NULL,NULL),(1215,'Kachindamoto',25,364,'2021-10-07 14:22:20',0,NULL,NULL,NULL),(1216,'Namkumba',3,179,'2021-10-11 09:20:33',0,NULL,NULL,NULL),(1217,'Maweru',16,130,'2021-10-11 10:40:03',0,NULL,NULL,NULL),(1218,'Nkanda',20,270,'2021-10-13 14:12:10',0,NULL,NULL,NULL),(1219,'Area 25b',28,94,'2021-10-18 06:52:04',0,NULL,NULL,NULL),(1220,'Nkhombedza',16,94,'2021-10-18 07:00:09',0,NULL,NULL,NULL),(1221,'Mchezi',28,94,'2021-10-18 07:08:46',0,NULL,NULL,NULL),(1222,'Magombo',24,94,'2021-10-18 07:18:21',0,NULL,NULL,NULL),(1223,'Kamenge 2',6,365,'2021-10-18 10:12:40',0,NULL,NULL,NULL),(1224,'Malemia',2,270,'2021-10-18 11:36:17',0,NULL,NULL,NULL),(1225,'Mulambiya',1,365,'2021-10-18 11:45:57',0,NULL,NULL,NULL),(1226,'Kahere',23,365,'2021-10-18 11:49:14',0,NULL,NULL,NULL),(1227,'Jali',9,270,'2021-10-18 12:30:03',0,NULL,NULL,NULL),(1228,'Nrc',28,94,'2021-10-18 12:41:34',0,NULL,NULL,NULL),(1229,'Elizabeth',8,324,'2021-10-18 14:53:25',0,NULL,NULL,NULL),(1230,'Toleza',30,324,'2021-10-18 15:49:42',0,NULL,NULL,NULL),(1231,'Mitondo',27,324,'2021-10-18 15:53:25',0,NULL,NULL,NULL),(1232,'Kanyimbo',25,94,'2021-10-19 07:46:53',0,NULL,NULL,NULL),(1233,'Mwela',16,94,'2021-10-19 08:50:22',0,NULL,NULL,NULL),(1234,'Matola',30,94,'2021-10-19 09:53:21',0,NULL,NULL,NULL),(1235,'Mthenda',29,365,'2021-10-19 09:55:35',0,NULL,NULL,NULL),(1236,'Area 53',18,314,'2021-10-19 10:46:15',0,NULL,NULL,NULL),(1237,'Kabudula',2,329,'2021-10-19 13:42:41',0,NULL,NULL,NULL),(1238,'Chaola',8,270,'2021-10-19 14:34:28',0,NULL,NULL,NULL),(1239,'Phuka',25,94,'2021-10-20 06:49:35',0,NULL,NULL,NULL),(1240,'Kulera',18,94,'2021-10-20 09:11:17',0,NULL,NULL,NULL),(1241,'Twalo',13,179,'2021-10-20 11:22:22',0,NULL,NULL,NULL),(1242,'Malengachazi',18,94,'2021-10-20 12:13:05',0,NULL,NULL,NULL),(1243,'Chalagha',28,94,'2021-10-21 08:37:13',0,NULL,NULL,NULL),(1244,'Chalendewa',18,510,'2021-10-21 12:03:29',0,NULL,NULL,NULL),(1245,'Kansonga',8,324,'2021-10-21 14:25:10',0,NULL,NULL,NULL),(1246,'Mkatipukwa',8,324,'2021-10-21 14:25:21',0,NULL,NULL,NULL),(1247,'Ngowi',27,324,'2021-10-21 17:00:54',0,NULL,NULL,NULL),(1248,'Chambwe vg',28,270,'2021-10-22 06:40:37',0,NULL,NULL,NULL),(1249,'Kamadenga',23,323,'2021-10-22 08:54:16',0,NULL,NULL,NULL),(1250,'Nsanje',28,364,'2021-10-22 08:56:46',0,NULL,NULL,NULL),(1251,'Nsabwe',9,364,'2021-10-22 09:46:59',0,NULL,NULL,NULL),(1252,'Payele',28,364,'2021-10-22 10:01:13',0,NULL,NULL,NULL),(1253,'Gologota',28,364,'2021-10-22 10:55:01',0,NULL,NULL,NULL),(1254,'Mazengera',28,364,'2021-10-22 10:59:57',0,NULL,NULL,NULL),(1255,'Nthiramwera',22,365,'2021-10-22 11:10:58',0,NULL,NULL,NULL),(1256,'Beluko',22,365,'2021-10-22 11:11:05',0,NULL,NULL,NULL),(1257,'Mandwe',8,365,'2021-10-22 11:13:35',0,NULL,NULL,NULL),(1258,'Njale',30,365,'2021-10-22 11:29:01',0,NULL,NULL,NULL),(1259,'Mapata',3,364,'2021-10-22 12:41:56',0,NULL,NULL,NULL),(1260,'Mwansambo',4,364,'2021-10-22 12:57:24',0,NULL,NULL,NULL),(1261,'Chaja',18,324,'2021-10-22 14:53:15',0,NULL,NULL,NULL),(1262,'Chipembere',2,324,'2021-10-22 16:58:10',0,NULL,NULL,NULL),(1263,'Mwangolera',4,324,'2021-10-22 18:15:35',0,NULL,NULL,NULL),(1264,'Vunguti',28,323,'2021-10-23 08:15:40',0,NULL,NULL,NULL),(1265,'Chiotcha',20,94,'2021-10-23 10:28:01',0,NULL,NULL,NULL),(1266,'Mambo',9,94,'2021-10-23 10:31:32',0,NULL,NULL,NULL),(1267,'Galasi',3,364,'2021-10-25 07:21:29',0,NULL,NULL,NULL),(1268,'Kavwere',28,364,'2021-10-25 07:46:45',0,NULL,NULL,NULL),(1269,'Kavwere',20,364,'2021-10-25 07:47:03',0,NULL,NULL,NULL),(1270,'Kanyindula',20,364,'2021-10-25 07:47:22',0,NULL,NULL,NULL),(1271,'Kalazi',16,364,'2021-10-25 12:16:53',0,NULL,NULL,NULL),(1272,'Mtalimanja',3,365,'2021-10-25 15:10:25',0,NULL,NULL,NULL),(1273,'Sapangwa',9,364,'2021-10-26 07:23:34',0,NULL,NULL,NULL),(1274,'Mwamulowe',1,270,'2021-10-26 09:09:15',0,NULL,NULL,NULL),(1275,'Sanda',24,364,'2021-10-26 09:44:04',0,NULL,NULL,NULL),(1276,'Mdekha',30,94,'2021-10-26 10:00:47',0,NULL,NULL,NULL),(1277,'Lawela',22,364,'2021-10-26 10:10:02',0,NULL,NULL,NULL),(1278,'Mpondamali',28,94,'2021-10-26 10:28:50',0,NULL,NULL,NULL),(1279,'Kagunduri',7,271,'2021-10-26 11:13:09',0,NULL,NULL,NULL),(1280,'Gausi',15,271,'2021-10-26 12:15:59',0,NULL,NULL,NULL),(1281,'Nkuta',24,364,'2021-10-26 12:31:47',0,NULL,NULL,NULL),(1282,'Area 56',18,484,'2021-10-26 13:36:40',0,NULL,NULL,NULL),(1283,'Kudiza',9,364,'2021-10-27 06:36:25',0,NULL,NULL,NULL),(1284,'Kachisengwere',23,364,'2021-10-27 06:40:43',0,NULL,NULL,NULL),(1285,'Chibwana',7,94,'2021-10-27 09:53:28',0,NULL,NULL,NULL),(1286,'Chiwaula',11,324,'2021-10-27 10:37:28',0,NULL,NULL,NULL),(1287,'Pazigayo',28,364,'2021-10-27 12:21:55',0,NULL,NULL,NULL),(1288,'Chimbiya',23,364,'2021-10-27 12:23:43',0,NULL,NULL,NULL),(1289,'Tambala',3,364,'2021-10-27 12:29:28',0,NULL,NULL,NULL),(1290,'Katema',2,365,'2021-10-27 15:06:00',0,NULL,NULL,NULL),(1291,'Chilomoni',25,271,'2021-10-28 10:07:34',0,NULL,NULL,NULL),(1292,'Msokoneza',28,324,'2021-10-28 10:37:17',0,NULL,NULL,NULL),(1293,'Kalolo',28,94,'2021-10-28 10:41:28',0,NULL,NULL,NULL),(1294,'Mpama',2,94,'2021-10-28 10:59:27',0,NULL,NULL,NULL),(1295,'Chisumbu',23,271,'2021-10-28 11:39:35',0,NULL,NULL,NULL),(1296,'Mkanda',11,94,'2021-10-28 15:48:59',0,NULL,NULL,NULL),(1297,'Kabwiri',16,365,'2021-10-28 17:01:03',0,NULL,NULL,NULL),(1298,'Nsundwe',18,364,'2021-10-29 06:41:19',0,NULL,NULL,NULL),(1299,'Ntukula',18,364,'2021-10-29 13:01:33',0,NULL,NULL,NULL),(1300,'Mzondo',18,365,'2021-10-29 13:24:49',0,NULL,NULL,NULL),(1301,'Ben',18,364,'2021-10-30 11:07:19',0,NULL,NULL,NULL),(1302,'Maduka',24,324,'2021-11-01 07:19:16',0,NULL,NULL,NULL),(1303,'Mvula',5,271,'2021-11-01 08:25:42',0,NULL,NULL,NULL),(1304,'Maganga',28,271,'2021-11-01 09:26:58',0,NULL,NULL,NULL),(1305,'Dzonzi',25,271,'2021-11-01 10:22:47',0,NULL,NULL,NULL),(1306,'Chiwere',18,179,'2021-11-01 11:09:19',0,NULL,NULL,NULL),(1307,'Mulauli',19,365,'2021-11-02 11:49:20',0,NULL,NULL,NULL),(1308,'Mweneulambya',1,179,'2021-11-03 08:10:14',0,NULL,NULL,NULL),(1309,'Njonja',23,179,'2021-11-04 08:33:12',0,NULL,NULL,NULL),(1310,'Nthangatang\'a',1,179,'2021-11-05 12:31:15',0,NULL,NULL,NULL),(1311,'Chakhandwe',28,94,'2021-11-05 14:55:06',0,NULL,NULL,NULL),(1312,'Chikulamatambe',2,179,'2021-11-05 15:57:19',0,NULL,NULL,NULL),(1313,'Mtunthama',28,120,'2021-11-06 08:57:52',0,NULL,NULL,NULL),(1314,'Namazoma',24,324,'2021-11-06 09:00:40',0,NULL,NULL,NULL),(1315,'Mkusa',22,324,'2021-11-06 09:54:57',0,NULL,NULL,NULL),(1316,'Samalini',23,365,'2021-11-08 06:43:31',0,NULL,NULL,NULL),(1317,'Samalani',23,365,'2021-11-08 06:43:41',0,NULL,NULL,NULL),(1318,'Kumbukani',12,365,'2021-11-08 07:47:04',0,NULL,NULL,NULL),(1319,'Chiponda',28,94,'2021-11-08 09:22:35',0,NULL,NULL,NULL),(1320,'Kadewere',26,94,'2021-11-08 09:51:06',0,NULL,NULL,NULL),(1321,'Ngubo',18,364,'2021-11-08 14:07:00',0,NULL,NULL,NULL),(1322,'Chinamwela',22,397,'2021-11-08 14:03:53',0,NULL,NULL,NULL),(1323,'Chiwale',2,364,'2021-11-08 15:14:48',0,NULL,NULL,NULL),(1324,'Fourways',28,364,'2021-11-08 16:10:02',0,NULL,NULL,NULL),(1325,'Msosa',3,365,'2021-11-09 11:09:58',0,NULL,NULL,NULL),(1326,'Chavukuka',7,94,'2021-11-09 11:10:02',0,NULL,NULL,NULL),(1327,'Mbenje',27,364,'2021-11-09 15:56:51',0,NULL,NULL,NULL),(1328,'Jack',3,364,'2021-11-09 16:01:14',0,NULL,NULL,NULL),(1329,'Chatama',30,365,'2021-11-10 08:19:08',0,NULL,NULL,NULL),(1330,'Mbewe',9,94,'2021-11-10 09:30:52',0,NULL,NULL,NULL),(1331,'Kasumbankhunda',18,364,'2021-11-10 14:41:37',0,NULL,NULL,NULL),(1332,'Mwampesapo',18,364,'2021-11-10 15:14:01',0,NULL,NULL,NULL),(1333,'Wanje',25,364,'2021-11-10 18:10:31',0,NULL,NULL,NULL),(1334,'Hebu',26,270,'2021-11-11 09:27:25',0,NULL,NULL,NULL),(1335,'Kapoko',15,270,'2021-11-11 09:52:10',0,NULL,NULL,NULL),(1336,'Malomo',8,270,'2021-11-11 14:58:37',0,NULL,NULL,NULL),(1337,'Kabango',14,270,'2021-11-11 15:09:51',0,NULL,NULL,NULL),(1338,'Saimoni',18,365,'2021-11-12 07:33:09',0,NULL,NULL,NULL),(1339,'Bongela',20,314,'2021-11-12 10:19:27',0,NULL,NULL,NULL),(1340,'Kadambo',25,94,'2021-11-12 10:50:05',0,NULL,NULL,NULL),(1341,'Kabudula',28,271,'2021-11-12 14:54:29',0,NULL,NULL,NULL),(1342,'Nyaza',2,271,'2021-11-12 15:00:26',0,NULL,NULL,NULL),(1343,'Simon',31,364,'2021-11-12 17:28:37',0,NULL,NULL,NULL),(1344,'Nginji',16,364,'2021-11-15 07:20:24',0,NULL,NULL,NULL),(1345,'Kalonga',23,270,'2021-11-15 09:32:39',0,NULL,NULL,NULL),(1346,'Mphalira',22,270,'2021-11-15 09:40:05',0,NULL,NULL,NULL),(1347,'Chingwala',20,364,'2021-11-15 10:25:05',0,NULL,NULL,NULL),(1348,'Nyasulu',7,270,'2021-11-15 10:38:10',0,NULL,NULL,NULL),(1349,'Tumani',9,364,'2021-11-15 11:26:57',0,NULL,NULL,NULL),(1350,'Kachiwanda',18,270,'2021-11-15 11:32:29',0,NULL,NULL,NULL),(1351,'Malembo',30,364,'2021-11-15 12:04:45',0,NULL,NULL,NULL),(1352,'Mwamalopa',4,270,'2021-11-16 08:49:09',0,NULL,NULL,NULL),(1353,'Chisoso',8,270,'2021-11-16 08:54:07',0,NULL,NULL,NULL),(1354,'Kuntumanji',26,270,'2021-11-16 11:49:12',0,NULL,NULL,NULL),(1355,'Gunda',26,365,'2021-11-16 14:53:04',0,NULL,NULL,NULL),(1356,'Wanyemba',25,270,'2021-11-17 08:59:02',0,NULL,NULL,NULL),(1357,'Chilumba',25,364,'2021-11-17 09:35:42',0,NULL,NULL,NULL),(1358,'Nzilakoma',7,364,'2021-11-17 10:25:45',0,NULL,NULL,NULL),(1359,'Area 2c',28,364,'2021-11-17 11:29:19',0,NULL,NULL,NULL),(1360,'Ccap campus',28,364,'2021-11-17 11:29:43',0,NULL,NULL,NULL),(1361,'Nkumba 2',17,270,'2021-11-18 07:05:03',0,NULL,NULL,NULL),(1362,'Livimbo',28,364,'2021-11-18 08:58:35',0,NULL,NULL,NULL),(1363,'Kanyandule',28,364,'2021-11-18 10:04:42',0,NULL,NULL,NULL),(1364,'Mphanga',1,270,'2021-11-18 10:06:41',0,NULL,NULL,NULL),(1365,'Kulanje',26,270,'2021-11-18 10:21:09',0,NULL,NULL,NULL),(1366,'Kumbweza',28,270,'2021-11-19 07:55:46',0,NULL,NULL,NULL),(1367,'Temba',23,270,'2021-11-19 08:59:29',0,NULL,NULL,NULL),(1368,'Lupembe',4,270,'2021-11-19 09:49:15',0,NULL,NULL,NULL),(1369,'Ngwenya',25,364,'2021-11-20 08:34:44',0,NULL,NULL,NULL),(1370,'Walilanji',20,364,'2021-11-20 10:18:18',0,NULL,NULL,NULL),(1371,'Boko',23,94,'2021-11-20 11:09:02',0,NULL,NULL,NULL),(1372,'Kunkhoma',9,364,'2021-11-20 11:12:43',0,NULL,NULL,NULL),(1373,'Kalulu',9,364,'2021-11-20 11:13:07',0,NULL,NULL,NULL),(1374,'Katapwitu',3,94,'2021-11-20 11:31:20',0,NULL,NULL,NULL),(1375,'Phalula',25,94,'2021-11-20 12:40:44',0,NULL,NULL,NULL),(1376,'Lindi',16,323,'2021-11-22 08:27:39',0,NULL,NULL,NULL),(1377,'Lilongwe City',28,323,'2021-11-22 09:49:20',0,NULL,NULL,NULL),(1378,'Kapala',9,324,'2021-11-22 11:16:33',0,NULL,NULL,NULL),(1379,'Chilinga',26,179,'2021-11-22 13:15:38',0,NULL,NULL,NULL),(1380,'',13,270,'2021-11-23 10:55:57',0,NULL,NULL,NULL),(1381,'Msewa2',28,270,'2021-11-23 11:07:41',0,NULL,NULL,NULL),(1382,'Kafira',7,270,'2021-11-23 11:19:23',0,NULL,NULL,NULL),(1383,'Pachifira',7,270,'2021-11-23 11:19:53',0,NULL,NULL,NULL),(1384,'Njukuju',16,270,'2021-11-23 11:24:21',0,NULL,NULL,NULL),(1385,'Nkaona',18,270,'2021-11-23 11:35:50',0,NULL,NULL,NULL),(1386,'Nakhumba',27,179,'2021-11-23 17:12:52',0,NULL,NULL,NULL),(1387,'Piyasani',28,270,'2021-11-24 09:48:32',0,NULL,NULL,NULL),(1388,'',28,270,'2021-11-24 09:48:33',0,NULL,NULL,NULL),(1389,'Tumbiri',9,270,'2021-11-24 10:45:39',0,NULL,NULL,NULL),(1390,'Mabaleka',15,179,'2021-11-24 15:14:13',0,NULL,NULL,NULL),(1391,'Kabondo',20,364,'2021-11-25 07:16:07',0,NULL,NULL,NULL),(1392,'Chaphuka',23,364,'2021-11-25 09:40:28',0,NULL,NULL,NULL),(1393,'Fulezala',23,364,'2021-11-25 09:40:35',0,NULL,NULL,NULL),(1394,'Kapoloma',3,323,'2021-11-25 10:08:06',0,NULL,NULL,NULL),(1395,'Kavalero',19,94,'2021-11-25 10:49:20',0,NULL,NULL,NULL),(1396,'Ahaji',3,323,'2021-11-25 11:48:30',0,NULL,NULL,NULL),(1397,'Kapeni',20,179,'2021-11-25 13:55:24',0,NULL,NULL,NULL),(1398,'Kasese',16,179,'2021-11-25 14:38:28',0,NULL,NULL,NULL),(1399,'Maseya',22,179,'2021-11-25 14:58:06',0,NULL,NULL,NULL),(1400,'Kapalamula',20,179,'2021-11-25 15:03:58',0,NULL,NULL,NULL),(1401,'Kandeu',25,323,'2021-11-26 07:41:52',0,NULL,NULL,NULL),(1402,'Manondo',23,323,'2021-11-26 11:44:59',0,NULL,NULL,NULL),(1403,'Gaga',28,94,'2021-11-27 10:51:55',0,NULL,NULL,NULL),(1404,'Makwangwara',23,94,'2021-11-27 11:06:40',0,NULL,NULL,NULL),(1405,'Mchacha',29,324,'2021-11-29 11:07:34',0,NULL,NULL,NULL),(1406,'Mtunduwala',2,270,'2021-11-29 13:21:50',0,NULL,NULL,NULL),(1407,'Sangeni',9,270,'2021-11-29 17:26:31',0,NULL,NULL,NULL),(1408,'Kasiyafumbi',28,504,'2021-11-30 08:45:12',0,NULL,NULL,NULL),(1409,'Yohane jere',15,179,'2021-11-30 09:37:53',0,NULL,NULL,NULL),(1410,'Kafulakapiri',7,270,'2021-11-30 13:50:17',0,NULL,NULL,NULL),(1411,'Boader',20,324,'2021-12-01 07:05:11',0,NULL,NULL,NULL),(1412,'Timote',25,324,'2021-12-01 07:20:08',0,NULL,NULL,NULL),(1413,'Mwenentete',4,324,'2021-12-01 10:41:00',0,NULL,NULL,NULL),(1414,'Chisiyo',28,324,'2021-12-02 08:26:41',0,NULL,NULL,NULL),(1415,'Nkhache',19,324,'2021-12-02 10:55:48',0,NULL,NULL,NULL),(1416,'Kawiliza',19,324,'2021-12-02 10:56:04',0,NULL,NULL,NULL),(1417,'Mwamadi',24,324,'2021-12-02 11:20:50',0,NULL,NULL,NULL),(1418,'Nembe',29,324,'2021-12-02 11:32:36',0,NULL,NULL,NULL),(1419,'Napwanga',9,324,'2021-12-02 11:49:33',0,NULL,NULL,NULL),(1420,'Janakazi',13,324,'2021-12-02 12:02:52',0,NULL,NULL,NULL),(1421,'Chinyama',24,179,'2021-12-03 08:24:39',0,NULL,NULL,NULL),(1422,'Mposa',9,364,'2021-12-03 10:17:47',0,NULL,NULL,NULL),(1423,'Machaka',22,323,'2021-12-03 11:12:58',0,NULL,NULL,NULL),(1424,'Namasalima',24,364,'2021-12-03 14:56:38',0,NULL,NULL,NULL),(1425,'Mwazama',6,364,'2021-12-03 15:07:14',0,NULL,NULL,NULL),(1426,'Nkweche',8,364,'2021-12-03 15:13:57',0,NULL,NULL,NULL),(1427,'Nkumba',24,270,'2021-12-03 16:21:58',0,NULL,NULL,NULL),(1428,'Tchukabalaza',7,270,'2021-12-03 16:39:59',0,NULL,NULL,NULL),(1429,'Mawawa',2,323,'2021-12-04 10:18:01',0,NULL,NULL,NULL),(1430,'Ndonda',25,270,'2021-12-06 07:00:56',0,NULL,NULL,NULL),(1431,'Nkhoma',28,94,'2021-12-06 09:59:39',0,NULL,NULL,NULL),(1432,'Mbengwa',18,94,'2021-12-06 10:02:36',0,NULL,NULL,NULL),(1433,'Tambala',22,364,'2021-12-06 10:20:30',0,NULL,NULL,NULL),(1434,'Area 38',18,364,'2021-12-06 10:22:34',0,NULL,NULL,NULL),(1435,'Nkumba',22,364,'2021-12-07 08:47:27',0,NULL,NULL,NULL),(1436,'Chamera',22,364,'2021-12-07 09:32:23',0,NULL,NULL,NULL),(1437,'Tambala',24,364,'2021-12-07 09:49:25',0,NULL,NULL,NULL),(1438,'Masambanjati',22,94,'2021-12-07 10:07:59',0,NULL,NULL,NULL),(1439,'Nchotseni',19,324,'2021-12-07 17:29:47',0,NULL,NULL,NULL),(1440,'Area44',28,306,'2021-12-08 09:12:30',0,NULL,NULL,NULL),(1441,'Kamwamba',25,94,'2021-12-08 11:34:49',0,NULL,NULL,NULL),(1442,'Mpama',30,270,'2021-12-09 06:28:33',0,NULL,NULL,NULL),(1443,'Mzirakoma',7,270,'2021-12-09 06:31:30',0,NULL,NULL,NULL),(1444,'Fusojere',8,270,'2021-12-09 08:21:06',0,NULL,NULL,NULL),(1445,'Chilota',28,94,'2021-12-09 09:04:31',0,NULL,NULL,NULL),(1446,'null',15,468,'2021-12-09 09:14:24',0,NULL,NULL,NULL),(1447,'Makalani',9,94,'2021-12-09 10:10:43',0,NULL,NULL,NULL),(1448,'Nasowa',9,94,'2021-12-09 10:10:51',0,NULL,NULL,NULL),(1449,'Chakachadza',23,270,'2021-12-09 10:31:37',0,NULL,NULL,NULL),(1450,'Chigala',18,94,'2021-12-09 11:25:26',0,NULL,NULL,NULL),(1451,'Zingwangwa',14,270,'2021-12-09 12:32:07',0,NULL,NULL,NULL),(1452,'Matope',14,324,'2021-12-09 14:06:13',0,NULL,NULL,NULL),(1453,'Mwakasungula',4,324,'2021-12-09 15:07:46',0,NULL,NULL,NULL),(1454,'Mambo',3,270,'2021-12-10 09:26:25',0,NULL,NULL,NULL),(1455,'Chinyama',28,270,'2021-12-10 09:59:04',0,NULL,NULL,NULL),(1456,'Masasa',3,270,'2021-12-10 12:48:24',0,NULL,NULL,NULL),(1457,'Chimowa',25,324,'2021-12-10 13:14:15',0,NULL,NULL,NULL),(1458,'Pondamale',18,324,'2021-12-10 15:19:11',0,NULL,NULL,NULL),(1459,'Mponda',14,324,'2021-12-10 15:53:28',0,NULL,NULL,NULL),(1460,'Mpita',5,364,'2021-12-11 10:22:26',0,NULL,NULL,NULL),(1461,'Kandiuze',28,324,'2021-12-13 08:08:49',0,NULL,NULL,NULL),(1462,'Chiwaya',18,324,'2021-12-13 08:55:06',0,NULL,NULL,NULL),(1463,'Benito',28,94,'2021-12-13 09:33:35',0,NULL,NULL,NULL),(1464,'Magwere',20,364,'2021-12-13 09:54:56',0,NULL,NULL,NULL),(1465,'Ntambo',25,364,'2021-12-13 10:06:34',0,NULL,NULL,NULL),(1466,'Kapeni',23,364,'2021-12-13 10:09:09',0,NULL,NULL,NULL),(1467,'Malata',28,364,'2021-12-13 10:25:23',0,NULL,NULL,NULL),(1468,'Mtchoka',28,324,'2021-12-15 10:56:12',0,NULL,NULL,NULL),(1469,'Mitawa',23,333,'2021-12-16 10:38:51',0,NULL,NULL,NULL),(1470,'Masula',20,365,'2021-12-16 17:23:04',0,NULL,NULL,NULL),(1471,'Mangwalangwa',2,270,'2021-12-17 14:25:00',0,NULL,NULL,NULL),(1472,'Muzikuola',15,365,'2021-12-17 14:42:18',0,NULL,NULL,NULL),(1473,'Nsomanje',9,365,'2021-12-20 10:07:38',0,NULL,NULL,NULL),(1474,'Maliyala',24,323,'2021-12-20 11:38:42',0,NULL,NULL,NULL),(1475,'other',20,468,'2021-12-20 12:08:07',0,NULL,NULL,NULL),(1476,'Chilindaunyolo',20,468,'2021-12-20 12:08:45',0,NULL,NULL,NULL),(1477,'Mwaza',16,365,'2021-12-20 12:49:11',0,NULL,NULL,NULL),(1478,'Chabwera',20,365,'2021-12-20 13:15:25',0,NULL,NULL,NULL),(1479,'Chalendewa',28,94,'2021-12-20 15:41:34',0,NULL,NULL,NULL),(1480,'Chitanjiru',28,323,'2021-12-21 08:31:24',0,NULL,NULL,NULL),(1481,'Mwirasambo',4,94,'2021-12-21 13:33:46',0,NULL,NULL,NULL),(1482,'Namalaka',9,94,'2021-12-21 13:58:49',0,NULL,NULL,NULL),(1483,'Malowo',5,94,'2021-12-22 15:41:06',0,NULL,NULL,NULL),(1484,'Chikusire',25,365,'2021-12-23 09:40:09',0,NULL,NULL,NULL),(1485,'Mwamadi',22,365,'2021-12-23 13:10:20',0,NULL,NULL,NULL),(1486,'Takumana 4',18,270,'2021-12-23 13:14:02',0,NULL,NULL,NULL),(1487,'Kabichi',22,94,'2021-12-23 13:30:54',0,NULL,NULL,NULL),(1488,'Mwachipha',28,94,'2021-12-23 14:58:44',0,NULL,NULL,NULL),(1489,'Kunjata',14,94,'2021-12-29 08:47:43',0,NULL,NULL,NULL),(1490,'Mposa',15,270,'2021-12-29 10:03:04',0,NULL,NULL,NULL),(1491,'Maulambya',1,94,'2021-12-29 11:43:32',0,NULL,NULL,NULL),(1492,'Chilipula',4,365,'2021-12-29 12:05:08',0,NULL,NULL,NULL),(1493,'Kapondamali',28,94,'2021-12-29 12:09:01',0,NULL,NULL,NULL),(1494,'Nsomera',11,94,'2021-12-29 12:13:30',0,NULL,NULL,NULL),(1495,'Kanyenda',23,94,'2021-12-30 09:55:21',0,NULL,NULL,NULL),(1496,'Dzalanyama',28,179,'2021-12-30 10:50:27',0,NULL,NULL,NULL),(1497,'Manjaawira',25,270,'2021-12-31 07:20:29',0,NULL,NULL,NULL),(1498,'Panje',16,365,'2022-01-04 06:54:25',0,NULL,NULL,NULL),(1499,'Kawalika',18,365,'2022-01-04 07:45:13',0,NULL,NULL,NULL),(1500,'Mulongolola',19,179,'2022-01-04 08:55:08',0,NULL,NULL,NULL),(1501,'Tsabango',32,329,'2022-01-04 13:40:54',0,NULL,NULL,NULL),(1502,'Mphalire',1,324,'2022-01-05 09:45:09',0,NULL,NULL,NULL),(1503,'Chikulamlaza',7,365,'2022-01-05 11:58:52',0,NULL,NULL,NULL),(1504,'Kaledzela',26,365,'2022-01-06 09:22:12',0,NULL,NULL,NULL),(1505,'Mangwasi',2,179,'2022-01-06 09:38:05',0,NULL,NULL,NULL),(1506,'Chawala',23,179,'2022-01-06 10:05:37',0,NULL,NULL,NULL),(1507,'Chingale',9,365,'2022-01-06 12:44:08',0,NULL,NULL,NULL),(1508,'Mzingo',20,130,'2022-01-07 08:56:22',0,NULL,NULL,NULL),(1509,'Katingosiwenje',15,179,'2022-01-07 09:17:20',0,NULL,NULL,NULL),(1510,'Egezeni',15,365,'2022-01-07 12:34:56',0,NULL,NULL,NULL),(1511,'namuthokani',11,392,'2022-01-08 08:39:28',0,NULL,NULL,NULL),(1512,'Sayenda',24,179,'2022-01-10 15:24:31',0,NULL,NULL,NULL),(1513,'',4,179,'2022-01-10 16:24:41',0,NULL,NULL,NULL),(1514,'Khumba',4,179,'2022-01-10 16:24:50',0,NULL,NULL,NULL),(1515,'Nkanda',26,270,'2022-01-11 06:28:41',0,NULL,NULL,NULL),(1516,'C',12,270,'2022-01-11 08:24:42',0,NULL,NULL,NULL),(1517,'Mwafilaso',4,270,'2022-01-11 08:51:39',0,NULL,NULL,NULL),(1518,'Mbingwa',18,270,'2022-01-12 11:43:28',0,NULL,NULL,NULL),(1519,'Njema',11,270,'2022-01-12 12:30:37',0,NULL,NULL,NULL),(1520,'mbwindi',28,375,'2022-01-13 08:38:32',0,NULL,NULL,NULL),(1521,'Ngalande',25,324,'2022-01-14 10:00:44',0,NULL,NULL,NULL),(1522,'John 2',24,270,'2022-01-14 11:53:17',0,NULL,NULL,NULL),(1523,'Thuuli',7,324,'2022-01-14 11:55:17',0,NULL,NULL,NULL),(1524,'Chimera',18,434,'2022-01-14 12:32:12',0,NULL,NULL,NULL),(1525,'Chivuti',7,323,'2022-01-14 14:50:29',0,NULL,NULL,NULL),(1526,'Kapichi',9,270,'2022-01-18 09:17:24',0,NULL,NULL,NULL),(1527,'Chembe',3,364,'2022-01-19 11:39:31',0,NULL,NULL,NULL),(1528,'Mukumbira',7,365,'2022-01-20 11:12:02',0,NULL,NULL,NULL),(1529,'Kabwazi',23,273,'2022-01-20 14:07:06',0,NULL,NULL,NULL),(1530,'Kalumbu',23,273,'2022-01-20 14:07:19',0,NULL,NULL,NULL),(1531,'Makalula',11,364,'2022-01-21 11:14:42',0,NULL,NULL,NULL),(1532,'Makumbila',25,364,'2022-01-21 11:32:07',0,NULL,NULL,NULL),(1533,'Chigunga',25,364,'2022-01-21 11:32:35',0,NULL,NULL,NULL),(1534,'Nsanthe',30,364,'2022-01-22 11:20:42',0,NULL,NULL,NULL),(1535,'Vukamalaza',7,364,'2022-01-22 11:41:43',0,NULL,NULL,NULL),(1536,'Chigwembere',24,323,'2022-01-24 08:19:41',0,NULL,NULL,NULL),(1537,'Nsamala',25,329,'2022-01-24 11:29:23',0,NULL,NULL,NULL),(1538,'Chawola',7,323,'2022-01-24 11:57:16',0,NULL,NULL,NULL),(1539,'Nkhomba',20,364,'2022-01-24 14:41:29',0,NULL,NULL,NULL),(1540,'Makhanamba',26,329,'2022-01-25 10:59:27',0,NULL,NULL,NULL),(1541,'Beta',25,323,'2022-01-26 08:42:44',0,NULL,NULL,NULL),(1542,'Kokamalazi',7,323,'2022-01-26 09:21:24',0,NULL,NULL,NULL),(1543,'Bwaila tb ward',28,323,'2022-01-26 10:13:52',0,NULL,NULL,NULL),(1544,'Mbwilangombe',4,323,'2022-01-26 11:34:43',0,NULL,NULL,NULL),(1545,'Sadrack',23,364,'2022-01-26 13:50:48',0,NULL,NULL,NULL),(1546,'Makwale',24,171,'2022-01-26 13:57:48',0,NULL,NULL,NULL),(1547,'Mtuwa',3,270,'2022-01-26 14:30:45',0,NULL,NULL,NULL),(1548,'Chalaunde',7,236,'2022-01-27 09:04:24',0,NULL,NULL,NULL),(1549,'Ntenje',3,364,'2022-01-27 14:00:11',0,NULL,NULL,NULL),(1550,'Suga',27,365,'2022-01-27 15:48:28',0,NULL,NULL,NULL),(1551,'Chikumbu',9,364,'2022-01-27 18:11:31',0,NULL,NULL,NULL),(1552,'Nsanga',28,270,'2022-01-28 08:08:05',0,NULL,NULL,NULL),(1553,'Namitete',18,365,'2022-01-28 11:13:10',0,NULL,NULL,NULL),(1554,'Ntchola',28,364,'2022-01-29 07:56:08',0,NULL,NULL,NULL),(1555,'Kabango',18,364,'2022-01-29 09:35:47',0,NULL,NULL,NULL),(1556,'Chibwe',18,364,'2022-01-29 10:26:14',0,NULL,NULL,NULL),(1557,'Namulenga',24,364,'2022-01-29 10:30:33',0,NULL,NULL,NULL),(1558,'Kalombo',5,364,'2022-01-31 09:52:34',0,NULL,NULL,NULL),(1559,'Mizondwe',8,364,'2022-02-01 08:25:42',0,NULL,NULL,NULL),(1560,'Cholooko',8,364,'2022-02-01 08:26:15',0,NULL,NULL,NULL),(1561,'Chikhumbi',7,179,'2022-02-01 10:13:07',0,NULL,NULL,NULL),(1562,'Near roadblock',23,364,'2022-02-02 10:10:13',0,NULL,NULL,NULL),(1563,'Nazombe',24,179,'2022-02-03 10:29:41',0,NULL,NULL,NULL),(1564,'Matope',11,364,'2022-02-04 06:53:20',0,NULL,NULL,NULL),(1565,'Mwamulowe',4,270,'2022-02-07 13:18:56',0,NULL,NULL,NULL),(1566,'Masasa',18,323,'2022-02-10 10:55:42',0,NULL,NULL,NULL),(1567,'Kalumpha',5,270,'2022-02-10 14:47:17',0,NULL,NULL,NULL),(1568,'Ttc',28,270,'2022-02-14 07:46:32',0,NULL,NULL,NULL),(1569,'Kampingo',21,179,'2022-02-14 15:04:22',0,NULL,NULL,NULL),(1570,'Sitola',24,270,'2022-02-15 07:51:20',0,NULL,NULL,NULL),(1571,'Bonongwe',9,364,'2022-02-15 10:15:43',0,NULL,NULL,NULL),(1572,'Jamiton',25,365,'2022-02-15 11:30:11',0,NULL,NULL,NULL),(1573,'Nkondowe',7,270,'2022-02-16 08:29:55',0,NULL,NULL,NULL),(1574,'Nsona',24,270,'2022-02-16 12:21:22',0,NULL,NULL,NULL),(1575,'Ncesi',28,428,'2022-02-16 12:59:12',0,NULL,NULL,NULL),(1576,'Mwinjitsa',31,179,'2022-02-16 14:56:42',0,NULL,NULL,NULL),(1577,'Kuchila',3,179,'2022-02-16 14:59:38',0,NULL,NULL,NULL),(1578,'Chambwe',2,179,'2022-02-16 15:36:00',0,NULL,NULL,NULL),(1579,'Semu',31,270,'2022-02-18 12:23:03',0,NULL,NULL,NULL),(1580,'Chamba',23,179,'2022-02-18 13:21:12',0,NULL,NULL,NULL),(1581,'Kasuzulo gondwe',15,179,'2022-02-18 13:48:50',0,NULL,NULL,NULL),(1582,'Kesa',25,324,'2022-02-18 16:04:20',0,NULL,NULL,NULL),(1583,'Chalinda',12,324,'2022-02-21 07:55:39',0,NULL,NULL,NULL),(1584,'Chiunda',3,330,'2022-02-21 09:40:15',0,NULL,NULL,NULL),(1585,'Chinkhokwe',12,430,'2022-02-21 11:36:58',0,NULL,NULL,NULL),(1586,'Aliya',12,430,'2022-02-21 11:43:37',0,NULL,NULL,NULL),(1587,'Dede',28,143,'2022-02-21 11:47:00',0,NULL,NULL,NULL),(1588,'Kwatani',11,365,'2022-02-21 17:24:00',0,NULL,NULL,NULL),(1589,'Layton',27,324,'2022-02-22 06:54:00',0,NULL,NULL,NULL),(1590,'Ntumbwindo',5,270,'2022-02-22 10:34:51',0,NULL,NULL,NULL),(1591,'Kamwendo',25,430,'2022-02-24 09:51:26',0,NULL,NULL,NULL),(1592,'Lundu',32,430,'2022-02-24 10:01:39',0,NULL,NULL,NULL),(1593,'Namboya',25,513,'2022-02-24 12:06:14',0,NULL,NULL,NULL),(1594,'Mzikuola',15,330,'2022-02-24 12:29:41',0,NULL,NULL,NULL),(1595,'Kawale 2',18,481,'2022-02-24 13:28:14',0,NULL,NULL,NULL),(1596,'Kamwendo',20,324,'2022-02-25 12:17:47',0,NULL,NULL,NULL),(1597,'Chingala',12,270,'2022-02-28 09:11:12',0,NULL,NULL,NULL),(1598,'Katete',18,323,'2022-02-28 11:48:36',0,NULL,NULL,NULL),(1599,'Chinkhwamba',18,428,'2022-03-02 13:02:47',0,NULL,NULL,NULL),(1600,'Ntambila',28,364,'2022-03-02 15:19:52',0,NULL,NULL,NULL),(1601,'Chimwala',23,365,'2022-03-04 06:41:47',0,NULL,NULL,NULL),(1602,'Kadaya',22,365,'2022-03-04 07:58:26',0,NULL,NULL,NULL),(1603,'Ina',14,397,'2022-03-07 11:55:29',0,NULL,NULL,NULL),(1604,'Mpinganjira',3,364,'2022-03-08 09:00:32',0,NULL,NULL,NULL),(1605,'Mtemanjila',3,364,'2022-03-08 09:00:42',0,NULL,NULL,NULL),(1606,'Chimoto',23,364,'2022-03-08 10:14:36',0,NULL,NULL,NULL),(1607,'Chikhaza',20,364,'2022-03-09 09:20:59',0,NULL,NULL,NULL),(1608,'Gideon',18,364,'2022-03-09 09:37:57',0,NULL,NULL,NULL),(1609,'Mikundi',24,364,'2022-03-09 11:10:45',0,NULL,NULL,NULL),(1610,'Sitima',9,324,'2022-03-09 13:48:27',0,NULL,NULL,NULL),(1611,'Kwataine',30,364,'2022-03-10 07:50:28',0,NULL,NULL,NULL),(1612,'Chigwamowa',25,365,'2022-03-10 10:03:49',0,NULL,NULL,NULL),(1613,'Nkukula',18,270,'2022-03-10 12:17:08',0,NULL,NULL,NULL),(1614,'Golomoti',23,364,'2022-03-11 12:57:35',0,NULL,NULL,NULL),(1615,'Area25',28,41,'2022-03-13 10:26:31',0,NULL,NULL,NULL),(1616,'Makwangwala',18,367,'2022-03-14 10:38:07',0,NULL,NULL,NULL),(1617,'Njewa',25,367,'2022-03-14 10:39:13',0,NULL,NULL,NULL),(1618,'Tumali',27,179,'2022-03-14 11:40:39',0,NULL,NULL,NULL),(1619,'Kanyada',23,333,'2022-03-14 12:22:40',0,NULL,NULL,NULL),(1620,'Gaga',23,333,'2022-03-14 15:24:46',0,NULL,NULL,NULL),(1621,'Changala',18,270,'2022-03-14 15:34:40',0,NULL,NULL,NULL),(1622,'Njale',12,324,'2022-03-15 12:51:42',0,NULL,NULL,NULL),(1623,'Adamison',22,324,'2022-03-16 09:13:12',0,NULL,NULL,NULL),(1624,'Malika',28,324,'2022-03-17 07:47:40',0,NULL,NULL,NULL),(1625,'Nnema',16,364,'2022-03-17 10:29:19',0,NULL,NULL,NULL),(1626,'Kalindiza',23,324,'2022-03-17 10:31:38',0,NULL,NULL,NULL),(1627,'Muligo',28,333,'2022-03-17 14:31:39',0,NULL,NULL,NULL),(1628,'Kachala',28,333,'2022-03-17 14:42:02',0,NULL,NULL,NULL),(1629,'Gibison',24,365,'2022-03-22 10:33:55',0,NULL,NULL,NULL),(1630,'Anuwu',18,323,'2022-03-23 10:24:37',0,NULL,NULL,NULL),(1631,'Area50',18,481,'2022-03-24 12:28:35',0,NULL,NULL,NULL),(1632,'Area 50',18,481,'2022-03-24 12:32:34',0,NULL,NULL,NULL),(1633,'Kameza',14,270,'2022-03-24 13:46:09',0,NULL,NULL,NULL),(1634,'Sambwe',22,397,'2022-03-25 09:03:58',0,NULL,NULL,NULL),(1635,'Sayimon',31,397,'2022-03-25 10:55:50',0,NULL,NULL,NULL),(1636,'Mulauli',31,365,'2022-03-28 10:30:17',0,NULL,NULL,NULL),(1637,'Area15',28,314,'2022-03-28 14:22:26',0,NULL,NULL,NULL),(1638,'Milonje',24,428,'2022-03-29 09:01:12',0,NULL,NULL,NULL),(1639,'Nkanda',18,270,'2022-03-29 09:10:44',0,NULL,NULL,NULL),(1640,'Mavwiri',20,428,'2022-03-29 12:57:59',0,NULL,NULL,NULL),(1641,'Mwadzama',18,236,'2022-03-29 14:53:15',0,NULL,NULL,NULL),(1642,'Khombe',12,270,'2022-04-01 07:51:21',0,NULL,NULL,NULL),(1643,'Chikowe',9,364,'2022-04-02 07:55:30',0,NULL,NULL,NULL),(1644,'Kalima',25,364,'2022-04-04 09:40:19',0,NULL,NULL,NULL),(1645,'Area 47 sector 4',28,236,'2022-04-04 12:09:39',0,NULL,NULL,NULL),(1646,'Kasumbu',20,364,'2022-04-04 15:44:21',0,NULL,NULL,NULL),(1647,'Gundo',14,179,'2022-04-06 12:25:24',0,NULL,NULL,NULL),(1648,'Tchale',27,323,'2022-04-09 10:47:33',0,NULL,NULL,NULL),(1649,'Khungwa',18,428,'2022-04-11 13:39:23',0,NULL,NULL,NULL),(1650,'Fungwe',12,324,'2022-04-13 09:12:19',0,NULL,NULL,NULL),(1651,'Chigalu',32,397,'2022-04-14 10:48:01',0,NULL,NULL,NULL),(1652,'Kankhumba',3,364,'2022-04-14 14:15:42',0,NULL,NULL,NULL),(1653,'Ntukula',12,364,'2022-04-14 16:03:36',0,NULL,NULL,NULL),(1654,'Gomani',9,364,'2022-04-15 07:11:15',0,NULL,NULL,NULL),(1655,'Chabuka',26,364,'2022-04-19 09:53:45',0,NULL,NULL,NULL),(1656,'Gilibeya',26,364,'2022-04-19 09:53:55',0,NULL,NULL,NULL),(1657,'Kazizira',18,364,'2022-04-19 12:54:15',0,NULL,NULL,NULL),(1658,'Phangala',24,270,'2022-04-20 15:54:22',0,NULL,NULL,NULL),(1659,'Chawuma',23,397,'2022-04-21 12:12:54',0,NULL,NULL,NULL),(1660,'Mtagaluka',9,324,'2022-04-29 10:50:20',0,NULL,NULL,NULL),(1661,'Cheusi',14,364,'2022-05-05 11:20:27',0,NULL,NULL,NULL),(1662,'Mkombozi',18,397,'2022-05-06 09:12:56',0,NULL,NULL,NULL),(1663,'Chisapo1',28,396,'2022-05-09 10:52:52',0,NULL,NULL,NULL),(1664,'Masola',18,132,'2022-05-11 08:46:25',0,NULL,NULL,NULL),(1665,'Mwagunikila',13,365,'2022-05-12 09:13:55',0,NULL,NULL,NULL),(1666,'Chigumbuli',7,364,'2022-05-13 11:36:34',0,NULL,NULL,NULL),(1667,'Chabwera',23,364,'2022-05-17 12:05:43',0,NULL,NULL,NULL),(1668,'Chikwende',8,365,'2022-05-17 15:31:06',0,NULL,NULL,NULL),(1669,'Kamphuka',23,329,'2022-05-18 13:14:00',0,NULL,NULL,NULL),(1670,'Chakhamatete',7,236,'2022-05-19 10:50:11',0,NULL,NULL,NULL),(1671,'Chimutu',12,270,'2022-05-25 11:33:33',0,NULL,NULL,NULL),(1672,'Nkuluwunda',16,270,'2022-05-25 11:56:13',0,NULL,NULL,NULL),(1673,'Njovu yalema',9,270,'2022-05-25 12:02:35',0,NULL,NULL,NULL),(1674,'Njovu yalema',30,270,'2022-05-25 12:03:15',0,NULL,NULL,NULL),(1675,'Area43',18,518,'2022-05-25 13:40:55',0,NULL,NULL,NULL),(1676,'Area43',28,518,'2022-05-25 13:41:43',0,NULL,NULL,NULL),(1677,'Kunsiya',9,428,'2022-05-27 10:26:27',0,NULL,NULL,NULL),(1678,'Mwenemisuku',13,324,'2022-05-30 14:13:24',0,NULL,NULL,NULL),(1679,'Kapeni',22,270,'2022-05-31 13:11:36',0,NULL,NULL,NULL),(1680,'Masasa',2,364,'2022-06-01 07:44:03',0,NULL,NULL,NULL),(1681,'Mtema',12,428,'2022-06-02 13:27:03',0,NULL,NULL,NULL),(1682,'Mwambo',24,428,'2022-06-03 13:24:29',0,NULL,NULL,NULL),(1683,'Kwanjana',22,236,'2022-06-06 12:22:08',0,NULL,NULL,NULL),(1684,'Masanjala',24,236,'2022-06-08 11:42:46',0,NULL,NULL,NULL),(1685,'Nchitanjiru',28,324,'2022-06-10 07:13:12',0,NULL,NULL,NULL),(1686,'Kabwanzi',14,365,'2022-06-13 14:00:24',0,NULL,NULL,NULL),(1687,'Msakambewa',8,428,'2022-06-14 14:16:28',0,NULL,NULL,NULL),(1688,'Hamid',30,428,'2022-06-14 14:55:08',0,NULL,NULL,NULL),(1689,'6miles',18,359,'2022-06-15 14:11:57',0,NULL,NULL,NULL),(1690,'Simon',19,179,'2022-06-17 09:19:47',0,NULL,NULL,NULL),(1691,'Fukamapili',6,364,'2022-06-17 12:56:03',0,NULL,NULL,NULL),(1692,'Amidu',5,324,'2022-06-20 12:35:11',0,NULL,NULL,NULL),(1693,'Maliri',18,130,'2022-06-21 10:28:17',0,NULL,NULL,NULL),(1694,'Chimwala',16,270,'2022-07-07 12:03:14',0,NULL,NULL,NULL),(1695,'Kalunda',30,179,'2022-07-07 14:44:06',0,NULL,NULL,NULL),(1696,'Chipeni',14,236,'2022-07-12 14:08:21',0,NULL,NULL,NULL),(1697,'Chinzukira',14,236,'2022-07-12 14:08:29',0,NULL,NULL,NULL),(1698,'Tsangano',25,365,'2022-07-14 10:38:49',0,NULL,NULL,NULL),(1699,'Ntonga',4,364,'2022-07-14 17:25:25',0,NULL,NULL,NULL),(1700,'Munyamba',11,364,'2022-07-20 10:27:51',0,NULL,NULL,NULL),(1701,'Mwandenga',4,364,'2022-07-21 12:41:27',0,NULL,NULL,NULL),(1702,'Kuthembwe',32,329,'2022-07-27 12:48:58',0,NULL,NULL,NULL),(1703,'Area 25',18,323,'2022-07-29 08:51:22',0,NULL,NULL,NULL),(1704,'Chiphangu',28,329,'2022-08-01 11:14:12',0,NULL,NULL,NULL),(1705,'Jelemani',7,364,'2022-08-22 14:01:41',0,NULL,NULL,NULL),(1706,'Mulenganzoma',7,396,'2022-08-23 14:06:01',0,NULL,NULL,NULL),(1707,'Thangata',22,94,'2022-08-25 10:03:18',0,NULL,NULL,NULL),(1708,'Mdunga',2,364,'2022-08-31 12:41:46',0,NULL,NULL,NULL),(1709,'Masumbankhunda',28,364,'2022-09-02 09:23:36',0,NULL,NULL,NULL),(1710,'Kamundi',28,236,'2022-09-05 09:16:41',0,NULL,NULL,NULL),(1711,'Makhuwila',27,284,'2022-09-06 13:48:41',0,NULL,NULL,NULL),(1712,'Chawoma',23,270,'2022-09-07 09:26:43',0,NULL,NULL,NULL),(1713,'Kamomomunthali',15,270,'2022-09-20 10:37:22',0,NULL,NULL,NULL),(1714,'Mponda',9,364,'2022-10-03 12:09:42',0,NULL,NULL,NULL),(1715,'Mpama',29,364,'2022-10-04 08:36:13',0,NULL,NULL,NULL),(1716,'Nankumba',24,284,'2022-10-05 13:52:39',0,NULL,NULL,NULL),(1717,'Mtukula',5,270,'2022-10-06 13:02:18',0,NULL,NULL,NULL),(1718,'Kamala',23,364,'2022-10-11 11:00:18',0,NULL,NULL,NULL),(1719,'Ara22',28,504,'2022-10-19 14:07:58',0,NULL,NULL,NULL),(1720,'Chimbiri',7,365,'2022-10-20 12:33:14',0,NULL,NULL,NULL),(1721,'Unknown',25,330,'2022-10-21 13:54:38',0,NULL,NULL,NULL),(1722,'Kafisi',25,236,'2022-10-21 13:56:46',0,NULL,NULL,NULL),(1723,'Siwali',5,94,'2022-10-24 07:55:56',0,NULL,NULL,NULL),(1724,'Chimbowa',18,132,'2022-10-25 08:44:09',0,NULL,NULL,NULL),(1725,'Are 23',28,504,'2022-10-25 11:40:47',0,NULL,NULL,NULL),(1726,'Chikuse',27,396,'2022-10-28 11:55:23',0,NULL,NULL,NULL),(1727,'Machowe',3,270,'2022-10-31 14:19:59',0,NULL,NULL,NULL),(1728,'Mlenga',22,179,'2022-11-02 08:47:00',0,NULL,NULL,NULL),(1729,'muzu',18,295,'2022-11-03 10:25:16',0,NULL,NULL,NULL),(1730,'Area 1',18,321,'2022-11-08 11:20:15',0,NULL,NULL,NULL),(1731,'Nkundaphiri',3,236,'2022-11-08 12:07:09',0,NULL,NULL,NULL),(1732,'Nzukuola',15,94,'2022-11-10 15:04:39',0,NULL,NULL,NULL),(1733,'Sitola',22,179,'2022-11-16 15:51:17',0,NULL,NULL,NULL),(1734,'nkhukwa',18,295,'2022-11-17 14:23:58',0,NULL,NULL,NULL),(1735,'Area21',28,365,'2022-11-21 07:43:25',0,NULL,NULL,NULL),(1737,'Kampani',23,236,'2022-11-22 08:36:27',0,NULL,NULL,NULL),(1738,'Kuluwina',23,94,'2022-11-23 08:23:51',0,NULL,NULL,NULL),(1739,'Area50',28,321,'2022-11-23 09:16:53',0,NULL,NULL,NULL),(1740,'Mtsiliza',18,284,'2022-11-28 12:08:34',0,NULL,NULL,NULL),(1741,'Waluma',26,324,'2022-11-29 10:11:16',0,NULL,NULL,NULL),(1742,'Bwaila ward',28,365,'2022-11-29 15:58:06',0,NULL,NULL,NULL),(1743,'Khongoni',28,365,'2022-12-02 14:58:06',0,NULL,NULL,NULL),(1744,'Sunthani',27,270,'2022-12-03 10:18:48',0,NULL,NULL,NULL),(1745,'Njirambo',24,270,'2022-12-07 13:24:13',0,NULL,NULL,NULL),(1746,'Area47',28,321,'2022-12-09 09:06:28',0,NULL,NULL,NULL),(1747,'Momberwa',15,321,'2022-12-09 11:36:25',0,NULL,NULL,NULL),(1748,'Pendadzuwa',25,270,'2022-12-13 07:41:42',0,NULL,NULL,NULL),(1749,'Magulugul',29,270,'2022-12-16 11:58:21',0,NULL,NULL,NULL),(1750,'Kalimanjira',6,270,'2022-12-17 07:24:02',0,NULL,NULL,NULL),(1751,'Karonga',16,284,'2022-12-19 14:12:13',0,NULL,NULL,NULL),(1752,'Mabvwere',20,179,'2022-12-19 15:18:17',0,NULL,NULL,NULL),(1753,'nduwa',28,295,'2022-12-21 14:26:11',0,NULL,NULL,NULL),(1754,'Mbozi',14,321,'2022-12-29 12:32:32',0,NULL,NULL,NULL),(1755,'Thondwe',9,321,'2023-01-03 11:00:21',0,NULL,NULL,NULL),(1756,'Ntepelera',7,270,'2023-01-06 12:45:33',0,NULL,NULL,NULL),(1757,'Hola',25,270,'2023-01-11 11:03:11',0,NULL,NULL,NULL),(1758,'Maziru',4,270,'2023-01-12 11:57:54',0,NULL,NULL,NULL),(1759,'Mtima',17,324,'2023-01-13 14:14:55',0,NULL,NULL,NULL),(1760,'Chiko',8,271,'2023-01-14 07:59:34',0,NULL,NULL,NULL),(1761,'Nyumwenyumwe',5,179,'2023-01-24 09:26:54',0,NULL,NULL,NULL),(1762,'Chakhaza',12,321,'2023-02-03 11:35:59',0,NULL,NULL,NULL),(1763,'Mulombe',9,284,'2023-02-06 12:59:02',0,NULL,NULL,NULL),(1764,'Area 24',18,284,'2023-02-07 13:58:22',0,NULL,NULL,NULL),(1765,'Area  25',28,321,'2023-02-10 07:29:56',0,NULL,NULL,NULL),(1766,'Khutembwe',14,271,'2023-02-11 11:12:58',0,NULL,NULL,NULL),(1767,'Ntema',18,321,'2023-02-13 13:05:32',0,NULL,NULL,NULL),(1768,'Bwaila maternity shelter',18,321,'2023-02-13 13:07:25',0,NULL,NULL,NULL),(1769,'Galiver',28,321,'2023-02-13 13:18:35',0,NULL,NULL,NULL),(1770,'Chigalu',14,284,'2023-02-22 11:47:17',0,NULL,NULL,NULL),(1771,'A47',18,284,'2023-02-22 12:51:33',0,NULL,NULL,NULL),(1772,'Chiuzi',23,94,'2023-02-27 09:14:12',0,NULL,NULL,NULL),(1773,'Nkula',9,365,'2023-03-08 13:30:22',0,NULL,NULL,NULL),(1774,'Unknown',5,330,'2023-03-08 13:57:53',0,NULL,NULL,NULL),(1775,'Mtsiliza',8,179,'2023-03-13 10:04:24',0,NULL,NULL,NULL),(1776,'Upper falls',28,270,'2023-03-14 09:31:53',0,NULL,NULL,NULL),(1777,'Misanjo',24,271,'2023-03-14 10:51:19',0,NULL,NULL,NULL),(1778,'Mbabvi',28,271,'2023-03-15 08:37:42',0,NULL,NULL,NULL),(1779,'Kongoni',18,271,'2023-03-15 08:42:37',0,NULL,NULL,NULL),(1780,'Maziro',7,271,'2023-03-16 09:48:13',0,NULL,NULL,NULL),(1781,'Kamonga',23,179,'2023-03-24 10:39:34',0,NULL,NULL,NULL),(1782,'Unknown',11,284,'2023-03-31 12:43:53',0,NULL,NULL,NULL),(1783,'Gumba',20,329,'2023-04-04 14:33:56',0,NULL,NULL,NULL),(1784,'Area  25c',28,94,'2023-04-27 09:10:12',0,NULL,NULL,NULL),(1785,'Chisupuli',9,284,'2023-04-27 12:34:28',0,NULL,NULL,NULL),(1786,'Mulumbe',14,284,'2023-04-28 11:57:06',0,NULL,NULL,NULL),(1787,'Kachala',18,236,'2023-04-29 14:33:23',0,NULL,NULL,NULL),(1788,'Unknown',14,284,'2023-05-02 13:17:12',0,NULL,NULL,NULL),(1789,'Mpukha',22,271,'2023-05-04 08:54:21',0,NULL,NULL,NULL),(1790,'Chikodzombe',20,271,'2023-05-11 09:32:22',0,NULL,NULL,NULL),(1791,'Saimon',30,271,'2023-05-13 10:45:52',0,NULL,NULL,NULL),(1792,'Naminga',5,270,'2023-05-16 09:04:35',0,NULL,NULL,NULL),(1793,'Kumtumanji',9,94,'2023-05-22 12:07:24',0,NULL,NULL,NULL),(1794,'kawale 1',18,236,'2023-05-25 10:10:35',0,NULL,NULL,NULL),(1795,'Mkalo',11,306,'2023-05-29 10:49:08',0,NULL,NULL,NULL),(1796,'Kapusule',27,324,'2023-06-01 10:17:35',0,NULL,NULL,NULL),(1797,'Malili',7,271,'2023-06-03 11:46:29',0,NULL,NULL,NULL),(1798,'Area  9',28,270,'2023-06-12 17:43:02',0,NULL,NULL,NULL),(1799,'Malii',18,236,'2023-06-13 11:06:46',0,NULL,NULL,NULL),(1800,'Unknown',18,284,'2023-06-21 13:17:45',0,NULL,NULL,NULL),(1801,'Ngwelero',9,284,'2023-07-03 13:13:53',0,NULL,NULL,NULL),(1802,'Makwangwala',22,179,'2023-07-13 07:26:03',0,NULL,NULL,NULL),(1803,'Suza',2,94,'2023-07-17 12:29:11',0,NULL,NULL,NULL),(1804,'Chimowa',9,94,'2023-07-19 12:11:34',0,NULL,NULL,NULL),(1805,'Unknown',20,329,'2023-07-25 12:20:59',0,NULL,NULL,NULL),(1806,'Genda',23,270,'2023-07-26 11:38:48',0,NULL,NULL,NULL),(1807,'Area  24',28,270,'2023-07-27 09:54:57',0,NULL,NULL,NULL),(1808,'Mitusi',5,365,'2023-07-29 08:23:55',0,NULL,NULL,NULL),(1809,'Area 6',18,271,'2023-08-07 15:03:48',0,NULL,NULL,NULL),(1810,'Malangalanga',18,571,'2023-08-17 11:07:19',0,NULL,NULL,NULL),(1811,'Somba',3,385,'2023-08-17 11:27:30',0,NULL,NULL,NULL),(1814,'Mtsiriza',28,385,'2023-08-17 12:02:11',0,NULL,NULL,NULL),(1815,'MTSIRIZA',28,385,'2023-08-17 12:02:17',0,NULL,NULL,NULL),(1816,'Nkangamila',28,569,'2023-08-18 09:45:21',0,NULL,NULL,NULL),(1817,'Che mponda',3,565,'2023-08-18 09:48:33',0,NULL,NULL,NULL),(1818,'Chiwele',12,572,'2023-08-18 10:08:26',0,NULL,NULL,NULL),(1819,'By pass',18,565,'2023-08-18 10:09:25',0,NULL,NULL,NULL),(1820,'Kadamanja',12,572,'2023-08-18 10:11:41',0,NULL,NULL,NULL),(1821,'Kang\'oma',18,572,'2023-08-18 10:25:16',0,NULL,NULL,NULL),(1822,'Mtema',20,572,'2023-08-18 11:24:45',0,NULL,NULL,NULL),(1823,'Kampheko',25,582,'2023-08-18 11:26:40',0,NULL,NULL,NULL),(1824,'Area12',28,572,'2023-08-18 11:35:28',0,NULL,NULL,NULL),(1825,'Chisomba',16,573,'2023-08-18 12:09:10',0,NULL,NULL,NULL),(1826,'Langwani',18,573,'2023-08-18 12:20:10',0,NULL,NULL,NULL),(1827,'Lidala',11,572,'2023-08-21 09:42:16',0,NULL,NULL,NULL),(1828,'Kumanje',9,572,'2023-08-21 09:52:45',0,NULL,NULL,NULL),(1829,'Chin\'gulu',18,572,'2023-08-21 10:13:37',0,NULL,NULL,NULL),(1830,'Liwewe',18,572,'2023-08-21 10:14:05',0,NULL,NULL,NULL),(1831,'Malemnya',10,563,'2023-08-21 10:14:57',0,NULL,NULL,NULL),(1832,'Mlowera',5,571,'2023-08-21 10:44:06',0,NULL,NULL,NULL),(1833,'Mchita',28,563,'2023-08-21 10:46:01',0,NULL,NULL,NULL),(1836,'Naluso',24,571,'2023-08-21 11:05:31',0,NULL,NULL,NULL),(1841,'Tchoyo',18,572,'2023-08-21 12:28:20',0,NULL,NULL,NULL),(1842,'Chaona',18,572,'2023-08-21 12:34:16',0,NULL,NULL,NULL),(1843,'Kaphuka',28,571,'2023-08-21 12:45:59',0,NULL,NULL,NULL),(1844,'Ta njerwa',28,565,'2023-08-21 13:17:05',0,NULL,NULL,NULL),(1845,'Mtekateka',23,571,'2023-08-21 14:30:30',0,NULL,NULL,NULL),(1847,'Munthu',23,581,'2023-08-22 11:50:56',0,NULL,NULL,NULL),(1848,'View',12,581,'2023-08-22 11:53:46',0,NULL,NULL,NULL),(1849,'Bypass36',18,571,'2023-08-22 12:25:24',0,NULL,NULL,NULL),(1850,'Ta tsabango',28,565,'2023-08-22 14:54:16',0,NULL,NULL,NULL),(1851,'Kadewere',32,565,'2023-08-22 15:05:33',0,NULL,NULL,NULL),(1852,'Chikulolere',23,571,'2023-08-23 10:14:44',0,NULL,NULL,NULL),(1853,'Mpilisi',5,562,'2023-08-23 10:40:20',0,NULL,NULL,NULL),(1854,'Nsambwe',22,385,'2023-08-23 11:02:45',0,NULL,NULL,NULL),(1855,'Mukhoma',18,385,'2023-08-23 11:15:42',0,NULL,NULL,NULL),(1856,'Mponera',12,579,'2023-08-23 12:35:47',0,NULL,NULL,NULL),(1857,'Masasa',22,179,'2023-08-24 08:29:07',0,NULL,NULL,NULL),(1858,'Mwerang\'ombe',4,571,'2023-08-24 10:18:53',0,NULL,NULL,NULL),(1859,'A56',28,571,'2023-08-24 11:08:51',0,NULL,NULL,NULL),(1860,'A56',28,571,'2023-08-24 11:09:01',0,NULL,NULL,NULL),(1861,'A56Njewa',28,571,'2023-08-24 11:09:23',0,NULL,NULL,NULL),(1862,'Area46',28,571,'2023-08-24 11:41:16',0,NULL,NULL,NULL),(1863,'Area36',23,572,'2023-08-24 12:34:47',0,NULL,NULL,NULL),(1864,'Mbule',4,575,'2023-08-24 12:38:39',0,NULL,NULL,NULL),(1865,'Chikhombero',25,572,'2023-08-24 12:52:16',0,NULL,NULL,NULL),(1866,'Ntandire',18,572,'2023-08-24 12:57:29',0,NULL,NULL,NULL),(1867,'Nyamula',29,564,'2023-08-25 08:04:11',0,NULL,NULL,NULL),(1868,'Chigwiza',18,567,'2023-08-25 09:32:13',0,NULL,NULL,NULL),(1873,'Unknown',23,458,'2023-08-25 09:36:30',0,NULL,NULL,NULL),(1874,'Unknown',16,573,'2023-08-25 09:36:59',0,NULL,NULL,NULL),(1875,'Phumba',18,573,'2023-08-25 09:43:33',0,NULL,NULL,NULL),(1876,'Therere',27,579,'2023-08-25 09:47:43',0,NULL,NULL,NULL),(1877,'Chingala',28,571,'2023-08-25 09:54:10',0,NULL,NULL,NULL),(1878,'Maligude',18,579,'2023-08-25 09:54:21',0,NULL,NULL,NULL),(1879,'Chimphangu',18,566,'2023-08-25 10:05:37',0,NULL,NULL,NULL),(1880,'Katongo',7,572,'2023-08-25 10:08:40',0,NULL,NULL,NULL),(1881,'KATONGO',7,572,'2023-08-25 10:08:41',0,NULL,NULL,NULL),(1882,'Nyenje',5,573,'2023-08-25 10:09:07',0,NULL,NULL,NULL),(1883,'James',30,566,'2023-08-25 10:40:39',0,NULL,NULL,NULL),(1884,'Chibiya',23,579,'2023-08-25 11:10:37',0,NULL,NULL,NULL),(1885,'Chibiya',23,579,'2023-08-25 11:10:37',0,NULL,NULL,NULL),(1886,'Chibiya',23,579,'2023-08-25 11:10:37',0,NULL,NULL,NULL),(1887,'A36',18,583,'2023-08-25 11:10:49',0,NULL,NULL,NULL),(1888,'Al12',28,566,'2023-08-25 11:13:04',0,NULL,NULL,NULL),(1889,'Simulemba',2,571,'2023-08-25 11:38:18',0,NULL,NULL,NULL),(1890,'Lobi',23,571,'2023-08-25 11:49:19',0,NULL,NULL,NULL),(1891,'Namera',29,577,'2023-08-25 11:56:52',0,NULL,NULL,NULL),(1892,'Chagomerana',25,577,'2023-08-25 12:09:04',0,NULL,NULL,NULL),(1893,'Ta/tsabango',28,578,'2023-08-25 14:02:51',0,NULL,NULL,NULL),(1894,'Namwera',3,566,'2023-08-27 09:26:52',0,NULL,NULL,NULL),(1895,'Makanjira',3,566,'2023-08-27 09:45:19',0,NULL,NULL,NULL),(1896,'Area38',28,571,'2023-08-28 09:27:57',0,NULL,NULL,NULL),(1897,'Tomboniwa',24,583,'2023-08-28 09:36:46',0,NULL,NULL,NULL),(1898,'Mgabu',29,385,'2023-08-28 09:53:32',0,NULL,NULL,NULL),(1899,'Kaumba',2,583,'2023-08-28 10:01:55',0,NULL,NULL,NULL),(1900,'Machinjiri',14,583,'2023-08-28 10:09:36',0,NULL,NULL,NULL),(1901,'Pinji',23,565,'2023-08-28 10:16:25',0,NULL,NULL,NULL),(1903,' Maliri',18,577,'2023-08-28 11:54:32',0,NULL,NULL,NULL),(1904,'Area 22',18,567,'2023-08-28 11:54:44',0,NULL,NULL,NULL),(1905,'AREA 22',18,567,'2023-08-28 11:54:45',0,NULL,NULL,NULL),(1906,'Chimphowamwale',18,385,'2023-08-28 12:29:54',0,NULL,NULL,NULL),(1907,'Kaphinda',12,579,'2023-08-28 12:42:44',0,NULL,NULL,NULL),(1908,'Chiputula',18,579,'2023-08-28 12:44:13',0,NULL,NULL,NULL),(1909,'Chikoza',23,573,'2023-08-28 13:06:00',0,NULL,NULL,NULL),(1910,'Kanyama',22,565,'2023-08-28 13:13:55',0,NULL,NULL,NULL),(1911,'Mankhuma',3,385,'2023-08-28 13:25:33',0,NULL,NULL,NULL),(1912,'Chioza',26,385,'2023-08-28 13:39:12',0,NULL,NULL,NULL),(1913,'Nsalu',26,385,'2023-08-28 13:39:35',0,NULL,NULL,NULL),(1914,'Chiuza',18,385,'2023-08-28 13:40:56',0,NULL,NULL,NULL),(1915,'Nachikungwa',6,385,'2023-08-28 13:49:46',0,NULL,NULL,NULL),(1916,'Gwamb',2,385,'2023-08-29 09:28:15',0,NULL,NULL,NULL),(1917,'Mvumbwe',22,584,'2023-08-29 09:57:38',0,NULL,NULL,NULL),(1918,'Area56',18,583,'2023-08-29 10:23:17',0,NULL,NULL,NULL),(1919,'Nkhwanga',18,583,'2023-08-29 10:38:11',0,NULL,NULL,NULL),(1920,'Kalumbuna',28,565,'2023-08-29 11:05:10',0,NULL,NULL,NULL),(1921,'Njobwa',2,563,'2023-08-29 11:46:00',0,NULL,NULL,NULL),(1922,'Fatima',29,565,'2023-08-30 10:09:11',0,NULL,NULL,NULL),(1923,'Njolomole',28,564,'2023-08-30 10:31:57',0,NULL,NULL,NULL),(1924,'Chiseka',23,575,'2023-08-30 10:39:00',0,NULL,NULL,NULL),(1925,'Nkokha',20,584,'2023-08-30 10:56:00',0,NULL,NULL,NULL),(1926,'Kalumbe',28,565,'2023-08-30 11:08:46',0,NULL,NULL,NULL),(1927,'Mwambo',28,565,'2023-08-30 11:22:09',0,NULL,NULL,NULL),(1928,'Kwachoka',28,565,'2023-08-30 11:28:57',0,NULL,NULL,NULL),(1929,'Kaduya',28,565,'2023-08-30 11:34:03',0,NULL,NULL,NULL),(1930,'Chiwelo',28,565,'2023-08-30 11:44:58',0,NULL,NULL,NULL),(1931,'Kalembo',28,565,'2023-08-30 11:57:17',0,NULL,NULL,NULL),(1932,'Tsabango',18,271,'2023-08-31 09:08:38',0,NULL,NULL,NULL),(1933,'Tsabango',18,271,'2023-08-31 09:08:39',0,NULL,NULL,NULL),(1934,'Mwakhiwa',24,571,'2023-08-31 10:27:12',0,NULL,NULL,NULL),(1935,'Mlumbe',10,562,'2023-08-31 10:49:41',0,NULL,NULL,NULL),(1936,'A41',18,562,'2023-08-31 10:51:31',0,NULL,NULL,NULL),(1937,'A41',18,562,'2023-08-31 10:51:44',0,NULL,NULL,NULL),(1938,'A41kauma',18,562,'2023-08-31 10:52:07',0,NULL,NULL,NULL),(1939,'Ntaja',5,565,'2023-08-31 10:52:50',0,NULL,NULL,NULL),(1940,'Kachimbwe',12,584,'2023-08-31 11:03:22',0,NULL,NULL,NULL),(1941,'Kaomba',2,361,'2023-08-31 11:17:45',0,NULL,NULL,NULL),(1942,'Mpoya',11,579,'2023-08-31 11:41:30',0,NULL,NULL,NULL),(1943,'Kawondo',18,579,'2023-08-31 11:48:37',0,NULL,NULL,NULL),(1944,'Mazengele',28,564,'2023-08-31 14:36:59',0,NULL,NULL,NULL),(1945,'Kaponda',3,565,'2023-09-01 10:35:59',0,NULL,NULL,NULL),(1946,'Senzani',25,565,'2023-09-01 10:40:20',0,NULL,NULL,NULL),(1947,'Chipojola',25,270,'2023-09-01 10:47:51',0,NULL,NULL,NULL),(1948,'Kapiri',22,565,'2023-09-01 10:48:42',0,NULL,NULL,NULL),(1949,'Mkanda',26,565,'2023-09-01 10:57:51',0,NULL,NULL,NULL),(1950,'Chilondola',23,585,'2023-09-01 12:51:46',0,NULL,NULL,NULL),(1951,'Mgoma',30,563,'2023-09-04 08:30:40',0,NULL,NULL,NULL),(1952,'Nyambi',20,565,'2023-09-04 09:00:29',0,NULL,NULL,NULL),(1953,'Malwndi',13,585,'2023-09-04 10:36:39',0,NULL,NULL,NULL),(1960,'Ngoneka',28,563,'2023-09-04 10:50:57',0,NULL,NULL,NULL),(1961,'Kakhota',23,565,'2023-09-04 10:59:27',0,NULL,NULL,NULL),(1962,'Kabuka',24,458,'2023-09-04 11:04:33',0,NULL,NULL,NULL),(1963,'Kalombo',30,563,'2023-09-04 14:33:34',0,NULL,NULL,NULL),(1964,'Ngolongoliwa',22,567,'2023-09-05 11:02:38',0,NULL,NULL,NULL),(1965,'Chalindiwa',18,567,'2023-09-05 11:03:28',0,NULL,NULL,NULL),(1966,'CHALINDIWA',18,567,'2023-09-05 11:03:36',0,NULL,NULL,NULL),(1967,'Tambala',12,585,'2023-09-05 11:25:34',0,NULL,NULL,NULL),(1968,'TAMBALA',12,585,'2023-09-05 11:25:35',0,NULL,NULL,NULL),(1980,'Mtmema',28,563,'2023-09-05 12:36:05',0,NULL,NULL,NULL),(1981,'Njewa',20,577,'2023-09-06 08:32:19',0,NULL,NULL,NULL),(1982,'Mkanda',28,565,'2023-09-06 08:45:28',0,NULL,NULL,NULL),(1983,'Chiseka',28,565,'2023-09-06 08:53:30',0,NULL,NULL,NULL),(1984,'Chiseka',28,565,'2023-09-06 08:53:46',0,NULL,NULL,NULL),(1985,'Chalumba',18,584,'2023-09-06 09:56:38',0,NULL,NULL,NULL),(1987,'Katengeza ',16,575,'2023-09-06 11:42:52',0,NULL,NULL,NULL),(1988,'Mponda',16,575,'2023-09-06 11:58:50',0,NULL,NULL,NULL),(1989,'Thilamanja',24,575,'2023-09-06 12:46:20',0,NULL,NULL,NULL),(1990,'Chifwinya',12,586,'2023-09-06 13:07:01',0,NULL,NULL,NULL),(1994,'Msomba',14,583,'2023-09-06 13:43:33',0,NULL,NULL,NULL),(1995,'Malumbe',9,586,'2023-09-06 14:08:24',0,NULL,NULL,NULL),(1996,'M\'gabu',27,586,'2023-09-06 14:29:01',0,NULL,NULL,NULL),(1997,'Tchali',23,586,'2023-09-06 15:03:05',0,NULL,NULL,NULL),(1998,'Kajawo',27,94,'2023-09-07 07:41:50',0,NULL,NULL,NULL),(1999,'Gomanje',3,584,'2023-09-07 09:44:15',0,NULL,NULL,NULL),(2000,'Mwakawoko',4,565,'2023-09-07 09:51:25',0,NULL,NULL,NULL),(2001,'Kapichira',2,574,'2023-09-07 09:52:35',0,NULL,NULL,NULL),(2002,'Unknown',22,584,'2023-09-07 10:08:15',0,NULL,NULL,NULL),(2003,'Unknown',3,575,'2023-09-07 10:11:05',0,NULL,NULL,NULL),(2004,'Malili',20,563,'2023-09-07 10:12:36',0,NULL,NULL,NULL),(2005,'Tsakanga',12,584,'2023-09-07 10:13:30',0,NULL,NULL,NULL),(2006,'Chphangu chinsapo',28,563,'2023-09-07 10:13:40',0,NULL,NULL,NULL),(2007,'Makhwangala',25,563,'2023-09-07 10:18:02',0,NULL,NULL,NULL),(2008,'January',28,563,'2023-09-07 10:18:43',0,NULL,NULL,NULL),(2020,'Malengamuzoma',7,565,'2023-09-07 11:27:06',0,NULL,NULL,NULL),(2021,'Mugwede',15,584,'2023-09-07 11:47:12',0,NULL,NULL,NULL),(2022,'Mugwede',18,584,'2023-09-07 11:50:01',0,NULL,NULL,NULL),(2023,'Chigwiri',18,567,'2023-09-07 11:56:38',0,NULL,NULL,NULL),(2024,'Chigande',15,565,'2023-09-07 12:01:36',0,NULL,NULL,NULL),(2025,'Chidaya',28,563,'2023-09-07 12:39:16',0,NULL,NULL,NULL),(2026,'Phondongosi',18,586,'2023-09-07 13:34:10',0,NULL,NULL,NULL),(2027,'Kongoni',23,586,'2023-09-07 14:08:22',0,NULL,NULL,NULL),(2028,'Kangoni',18,586,'2023-09-07 14:23:23',0,NULL,NULL,NULL),(2029,'Mang\'umbi',23,574,'2023-09-08 09:22:51',0,NULL,NULL,NULL),(2030,'Area 30',18,575,'2023-09-08 09:41:04',0,NULL,NULL,NULL),(2031,'Mkomba',14,575,'2023-09-08 10:10:30',0,NULL,NULL,NULL),(2032,'Tsabongo',28,563,'2023-09-08 10:13:58',0,NULL,NULL,NULL),(2033,'Chimombo',16,563,'2023-09-08 10:31:33',0,NULL,NULL,NULL),(2034,'Makatani kauma',28,563,'2023-09-08 10:32:19',0,NULL,NULL,NULL),(2035,'Unknown',30,458,'2023-09-08 10:38:35',0,NULL,NULL,NULL),(2036,'Mtsilza',28,585,'2023-09-08 11:10:12',0,NULL,NULL,NULL),(2037,'Mwamulowe',13,575,'2023-09-08 11:20:53',0,NULL,NULL,NULL),(2038,'Nganya',25,575,'2023-09-08 11:29:30',0,NULL,NULL,NULL),(2039,'Unknown',12,584,'2023-09-08 11:57:10',0,NULL,NULL,NULL),(2044,'Namasi',3,585,'2023-09-11 11:20:24',0,NULL,NULL,NULL),(2045,'Vumbwe',14,409,'2023-09-11 11:37:07',0,NULL,NULL,NULL),(2046,'Nkanda',24,585,'2023-09-11 11:52:25',0,NULL,NULL,NULL),(2047,'Are9',28,585,'2023-09-11 12:03:40',0,NULL,NULL,NULL),(2048,'Kaduku',13,584,'2023-09-11 13:08:16',0,NULL,NULL,NULL),(2049,'Baluwo',18,586,'2023-09-11 13:27:19',0,NULL,NULL,NULL),(2050,'Kaphuka',23,586,'2023-09-11 13:42:02',0,NULL,NULL,NULL),(2051,'Bafelo',23,579,'2023-09-11 13:50:41',0,NULL,NULL,NULL),(2052,'Unknown',18,586,'2023-09-11 14:11:45',0,NULL,NULL,NULL),(2053,'Cerlo',11,585,'2023-09-11 14:48:59',0,NULL,NULL,NULL),(2054,'Ntsiliza',28,409,'2023-09-12 09:58:08',0,NULL,NULL,NULL),(2055,'Mwaulambia',1,409,'2023-09-12 10:24:44',0,NULL,NULL,NULL),(2056,'Kotaine',25,582,'2023-09-12 11:34:13',0,NULL,NULL,NULL),(2057,'Chisapo',18,582,'2023-09-12 11:35:19',0,NULL,NULL,NULL),(2061,'Msiliza',18,581,'2023-09-12 11:52:42',0,NULL,NULL,NULL),(2062,'Gawachifu',16,582,'2023-09-12 12:07:11',0,NULL,NULL,NULL),(2063,'Molambiya',1,581,'2023-09-12 12:17:35',0,NULL,NULL,NULL),(2064,'Chibalala',25,586,'2023-09-12 13:11:12',0,NULL,NULL,NULL),(2065,'Mnonyeni',20,586,'2023-09-12 13:48:06',0,NULL,NULL,NULL),(2066,'Chakwanira',18,583,'2023-09-12 14:38:24',0,NULL,NULL,NULL),(2067,'Njewa',29,583,'2023-09-12 14:48:48',0,NULL,NULL,NULL),(2068,'Msundwe',18,583,'2023-09-12 14:59:22',0,NULL,NULL,NULL),(2069,'Area46',18,583,'2023-09-12 15:00:13',0,NULL,NULL,NULL),(2070,'Msakambewa',19,270,'2023-09-13 08:54:32',0,NULL,NULL,NULL),(2071,'Chithankhwa',23,587,'2023-09-13 09:23:17',0,NULL,NULL,NULL),(2072,'Unknown',2,435,'2023-09-13 09:25:42',0,NULL,NULL,NULL),(2073,'Unknown',8,584,'2023-09-13 09:51:21',0,NULL,NULL,NULL),(2074,'Unknown',1,586,'2023-09-13 10:04:28',0,NULL,NULL,NULL),(2075,'Ara49',28,585,'2023-09-13 10:07:52',0,NULL,NULL,NULL),(2076,'Chiwamba',25,586,'2023-09-13 10:08:39',0,NULL,NULL,NULL),(2077,'A30',28,458,'2023-09-13 10:56:21',0,NULL,NULL,NULL),(2078,'A30',28,458,'2023-09-13 10:56:28',0,NULL,NULL,NULL),(2079,'A30',28,458,'2023-09-13 10:56:36',0,NULL,NULL,NULL),(2080,'Kalulu',18,584,'2023-09-13 11:24:12',0,NULL,NULL,NULL),(2081,'Ara36',28,585,'2023-09-13 11:27:48',0,NULL,NULL,NULL),(2082,'Tchekutcheku',31,584,'2023-09-13 11:38:21',0,NULL,NULL,NULL),(2083,'Area49',28,585,'2023-09-13 11:42:51',0,NULL,NULL,NULL),(2084,'Mwadzama',6,583,'2023-09-13 11:44:44',0,NULL,NULL,NULL),(2085,'A/36',28,581,'2023-09-14 08:54:09',0,NULL,NULL,NULL),(2086,'A/36',28,581,'2023-09-14 08:54:22',0,NULL,NULL,NULL),(2087,'A/47',28,409,'2023-09-14 09:06:41',0,NULL,NULL,NULL),(2088,'A/47',28,409,'2023-09-14 09:06:51',0,NULL,NULL,NULL),(2089,'A/47',28,409,'2023-09-14 09:06:57',0,NULL,NULL,NULL),(2096,'Somba',32,581,'2023-09-14 09:38:49',0,NULL,NULL,NULL),(2097,'Wakawaka',18,581,'2023-09-14 09:39:47',0,NULL,NULL,NULL),(2099,'Mulilima',27,435,'2023-09-14 12:45:05',0,NULL,NULL,NULL),(2100,'Mpama',14,574,'2023-09-14 14:30:45',0,NULL,NULL,NULL),(2101,'Kafere',28,563,'2023-09-15 08:50:43',0,NULL,NULL,NULL),(2102,'Malowa',3,587,'2023-09-15 09:18:29',0,NULL,NULL,NULL),(2103,'Namikungulu',24,569,'2023-09-15 09:30:01',0,NULL,NULL,NULL),(2104,'Jalavikuwa',15,562,'2023-09-15 11:09:24',0,NULL,NULL,NULL),(2105,'Nsomekera',23,409,'2023-09-15 11:22:07',0,NULL,NULL,NULL),(2106,'Mkukula',28,570,'2023-09-15 11:45:51',0,NULL,NULL,NULL),(2107,'Unknown',9,587,'2023-09-15 12:12:28',0,NULL,NULL,NULL),(2108,'Malengachaza',7,563,'2023-09-15 12:17:59',0,NULL,NULL,NULL),(2115,'Unknown',26,572,'2023-09-18 12:02:42',0,NULL,NULL,NULL),(2116,'Kachenga',30,572,'2023-09-18 12:40:32',0,NULL,NULL,NULL),(2117,'Masasa',9,579,'2023-09-18 13:02:57',0,NULL,NULL,NULL),(2118,'Kumtaja',32,435,'2023-09-19 08:27:23',0,NULL,NULL,NULL),(2119,'A/44',28,568,'2023-09-19 08:52:11',0,NULL,NULL,NULL),(2120,'A/44',28,568,'2023-09-19 08:52:21',0,NULL,NULL,NULL),(2121,'A/44',28,568,'2023-09-19 08:52:28',0,NULL,NULL,NULL),(2122,'A/24',28,573,'2023-09-19 09:09:27',0,NULL,NULL,NULL),(2123,'Sefasi',23,435,'2023-09-19 09:23:48',0,NULL,NULL,NULL),(2125,'Wimba',2,563,'2023-09-19 10:05:57',0,NULL,NULL,NULL),(2126,'Kaembe',12,563,'2023-09-19 10:21:59',0,NULL,NULL,NULL),(2127,'Gombe',28,563,'2023-09-19 10:40:12',0,NULL,NULL,NULL),(2128,'Mutholowa',9,458,'2023-09-19 11:10:48',0,NULL,NULL,NULL),(2129,'Kalumbo',28,563,'2023-09-19 11:28:56',0,NULL,NULL,NULL),(2130,'Mchesi',20,582,'2023-09-19 11:29:47',0,NULL,NULL,NULL),(2132,'Malili',18,581,'2023-09-19 11:35:20',0,NULL,NULL,NULL),(2133,'Mthalo',15,409,'2023-09-19 11:46:53',0,NULL,NULL,NULL),(2134,'T/a malili',28,385,'2023-09-19 11:48:31',0,NULL,NULL,NULL),(2135,'A/12',28,435,'2023-09-19 11:56:03',0,NULL,NULL,NULL),(2136,'Gwengwe',16,458,'2023-09-19 12:18:18',0,NULL,NULL,NULL),(2138,'Mlauli',19,581,'2023-09-19 12:34:15',0,NULL,NULL,NULL),(2140,'Mwahimba',4,562,'2023-09-19 13:54:59',0,NULL,NULL,NULL),(2146,'Chadza',20,568,'2023-09-20 09:17:42',0,NULL,NULL,NULL),(2147,'Nkalolo',18,573,'2023-09-20 09:55:08',0,NULL,NULL,NULL),(2148,'Chamba',14,571,'2023-09-20 10:19:51',0,NULL,NULL,NULL),(2149,'Chamba',14,571,'2023-09-20 10:20:15',0,NULL,NULL,NULL),(2150,'Makanjiram',3,577,'2023-09-20 10:40:34',0,NULL,NULL,NULL),(2153,'Mkokola',12,584,'2023-09-20 11:03:27',0,NULL,NULL,NULL),(2154,'Chapiti',25,570,'2023-09-20 11:03:51',0,NULL,NULL,NULL),(2155,'Msampha',18,570,'2023-09-20 11:30:54',0,NULL,NULL,NULL),(2156,'Kalomba',18,570,'2023-09-20 11:35:40',0,NULL,NULL,NULL),(2157,'Bwemba',18,583,'2023-09-20 13:13:16',0,NULL,NULL,NULL),(2158,'Gogoda',18,583,'2023-09-20 13:37:43',0,NULL,NULL,NULL),(2159,'Ngwangwa',28,563,'2023-09-21 10:04:54',0,NULL,NULL,NULL),(2162,'Manyenje',5,573,'2023-09-21 10:42:21',0,NULL,NULL,NULL),(2163,'Bunda',18,435,'2023-09-21 11:23:53',0,NULL,NULL,NULL),(2164,'Lumbazi',12,458,'2023-09-21 11:25:54',0,NULL,NULL,NULL),(2165,'Kwataine',23,570,'2023-09-21 11:35:29',0,NULL,NULL,NULL),(2166,'Area  23',28,385,'2023-09-21 11:55:47',0,NULL,NULL,NULL),(2167,'Madzumbi',18,573,'2023-09-21 11:59:21',0,NULL,NULL,NULL),(2168,'Mkaro',11,458,'2023-09-21 12:40:54',0,NULL,NULL,NULL),(2169,'Mankhambira',8,562,'2023-09-21 12:50:13',0,NULL,NULL,NULL),(2170,'Katambala',9,571,'2023-09-21 13:12:13',0,NULL,NULL,NULL),(2171,'Zimkambani',28,563,'2023-09-22 09:43:19',0,NULL,NULL,NULL),(2172,'Kayembe',9,575,'2023-09-22 10:14:20',0,NULL,NULL,NULL),(2173,'Kachindamoto',24,574,'2023-09-22 10:43:47',0,NULL,NULL,NULL),(2174,'Mferanji',15,573,'2023-09-22 11:29:01',0,NULL,NULL,NULL),(2175,'Chikulamayembe',21,563,'2023-09-22 11:34:03',0,NULL,NULL,NULL),(2176,'Amanu',30,581,'2023-09-22 12:19:56',0,NULL,NULL,NULL),(2177,'Mzinga',18,573,'2023-09-22 12:35:17',0,NULL,NULL,NULL),(2178,'Mdzinga',18,573,'2023-09-22 12:40:13',0,NULL,NULL,NULL),(2179,'Kanyoni',18,581,'2023-09-22 13:03:31',0,NULL,NULL,NULL),(2180,'Makwinja',30,587,'2023-09-22 13:51:52',0,NULL,NULL,NULL),(2181,'Chimwalira',16,587,'2023-09-25 08:59:10',0,NULL,NULL,NULL),(2182,'Sindemba',2,587,'2023-09-25 09:11:20',0,NULL,NULL,NULL),(2183,'Biliati',28,563,'2023-09-25 09:59:12',0,NULL,NULL,NULL),(2184,'Manyolo',32,270,'2023-09-25 10:31:19',0,NULL,NULL,NULL),(2185,'Manyolo',14,270,'2023-09-25 10:32:25',0,NULL,NULL,NULL),(2186,'Mnthwalo',15,586,'2023-09-25 10:39:10',0,NULL,NULL,NULL),(2187,'Khongono',18,586,'2023-09-25 10:43:32',0,NULL,NULL,NULL),(2188,'Kawoleza',28,564,'2023-09-25 11:02:13',0,NULL,NULL,NULL),(2189,'Kwenje',10,569,'2023-09-25 11:18:03',0,NULL,NULL,NULL),(2190,'Ngambi',5,586,'2023-09-25 11:21:53',0,NULL,NULL,NULL),(2191,'Chipungu',24,409,'2023-09-25 11:24:11',0,NULL,NULL,NULL),(2192,'Mwase',18,586,'2023-09-25 11:33:39',0,NULL,NULL,NULL),(2193,'N\'kukula',18,586,'2023-09-25 11:56:31',0,NULL,NULL,NULL),(2194,'Kapeni',30,575,'2023-09-25 11:57:43',0,NULL,NULL,NULL),(2195,'Falls',18,458,'2023-09-25 13:32:05',0,NULL,NULL,NULL),(2196,'Chakhumbira',15,458,'2023-09-25 13:36:21',0,NULL,NULL,NULL),(2197,'Unknown',6,435,'2023-09-25 15:23:33',0,NULL,NULL,NULL),(2198,'Kambalame',3,573,'2023-09-26 09:31:08',0,NULL,NULL,NULL),(2202,'Fukamapili',15,575,'2023-09-26 11:16:20',0,NULL,NULL,NULL),(2203,'Masaka',14,570,'2023-09-26 11:40:03',0,NULL,NULL,NULL),(2204,'Mchinguza',5,435,'2023-09-26 11:42:43',0,NULL,NULL,NULL),(2205,'Msomali',30,570,'2023-09-26 11:47:53',0,NULL,NULL,NULL),(2206,'Maduwa',20,575,'2023-09-26 12:05:37',0,NULL,NULL,NULL),(2207,'Mwavilambo',13,573,'2023-09-26 12:12:48',0,NULL,NULL,NULL),(2210,'Makhuwira',29,435,'2023-09-27 08:06:35',0,NULL,NULL,NULL),(2211,'Ny\'oka',20,582,'2023-09-27 09:01:57',0,NULL,NULL,NULL),(2212,'Mvululo',18,409,'2023-09-27 09:26:12',0,NULL,NULL,NULL),(2213,'Kalumo',18,568,'2023-09-27 09:32:01',0,NULL,NULL,NULL),(2214,'Malolo',29,573,'2023-09-28 08:58:03',0,NULL,NULL,NULL),(2215,'Mzengela',18,568,'2023-09-28 09:15:29',0,NULL,NULL,NULL),(2216,'Kiyungu',4,568,'2023-09-28 09:22:34',0,NULL,NULL,NULL),(2217,'Chilembedwe',18,586,'2023-09-28 09:50:07',0,NULL,NULL,NULL),(2218,'Chitekere',18,586,'2023-09-28 10:57:14',0,NULL,NULL,NULL),(2219,'Chiloko',8,586,'2023-09-28 11:09:36',0,NULL,NULL,NULL),(2220,'Chankhoma',18,586,'2023-09-28 11:10:36',0,NULL,NULL,NULL),(2223,'Mazombe',26,584,'2023-09-28 11:49:07',0,NULL,NULL,NULL),(2225,'Somanje',14,435,'2023-09-28 12:47:15',0,NULL,NULL,NULL),(2226,'Chigunika',28,563,'2023-09-29 09:23:46',0,NULL,NULL,NULL),(2227,'Chimwe',15,584,'2023-09-29 09:36:45',0,NULL,NULL,NULL),(2228,'Mkamwana',30,583,'2023-09-29 10:08:38',0,NULL,NULL,NULL),(2229,'Khula',9,584,'2023-09-29 11:43:00',0,NULL,NULL,NULL),(2230,'Kambuladye',5,584,'2023-09-29 11:56:03',0,NULL,NULL,NULL),(2231,'Manyenje',23,365,'2023-09-29 15:10:08',0,NULL,NULL,NULL),(2232,'Kalumbu',25,582,'2023-10-02 10:11:49',0,NULL,NULL,NULL),(2237,'Khulungura',23,458,'2023-10-03 10:40:08',0,NULL,NULL,NULL),(2238,'Khulungila',23,458,'2023-10-03 10:40:27',0,NULL,NULL,NULL),(2239,'Katunga',29,585,'2023-10-03 10:50:58',0,NULL,NULL,NULL),(2240,'Kandiuze',23,584,'2023-10-03 11:49:47',0,NULL,NULL,NULL),(2241,'A33',28,409,'2023-10-03 11:58:09',0,NULL,NULL,NULL),(2242,'A33',28,409,'2023-10-03 11:58:21',0,NULL,NULL,NULL),(2243,'A33',28,409,'2023-10-03 11:58:31',0,NULL,NULL,NULL),(2244,'A33',28,409,'2023-10-03 11:58:38',0,NULL,NULL,NULL),(2245,'Masumba khunda',2,584,'2023-10-03 12:10:02',0,NULL,NULL,NULL),(2246,'Mphambachulu',24,365,'2023-10-04 08:50:21',0,NULL,NULL,NULL),(2247,'Machula',18,584,'2023-10-04 09:35:43',0,NULL,NULL,NULL),(2248,'Mkoko',18,584,'2023-10-04 09:40:29',0,NULL,NULL,NULL),(2249,'Yendayenda',25,586,'2023-10-04 10:04:58',0,NULL,NULL,NULL),(2250,'Goliati',22,570,'2023-10-04 10:42:10',0,NULL,NULL,NULL),(2251,'Chigalu',9,570,'2023-10-04 10:56:32',0,NULL,NULL,NULL),(2252,'Katantha',18,570,'2023-10-04 10:57:12',0,NULL,NULL,NULL),(2253,'Kanyoni',23,570,'2023-10-04 11:11:48',0,NULL,NULL,NULL),(2254,'Jelasi',3,570,'2023-10-04 11:22:37',0,NULL,NULL,NULL),(2255,'Unknown',4,570,'2023-10-05 11:27:45',0,NULL,NULL,NULL),(2256,'Kawole',18,570,'2023-10-05 11:44:48',0,NULL,NULL,NULL),(2257,'Mtsabango',28,579,'2023-10-05 11:56:42',0,NULL,NULL,NULL),(2258,'Mlowiyeni',25,570,'2023-10-05 11:57:03',0,NULL,NULL,NULL),(2259,'Bvumbwe',14,584,'2023-10-05 12:07:45',0,NULL,NULL,NULL),(2260,'Kasukula',8,409,'2023-10-05 12:09:34',0,NULL,NULL,NULL),(2261,'Mnyehele',15,570,'2023-10-05 12:14:44',0,NULL,NULL,NULL),(2262,'Chikwewo',5,579,'2023-10-05 12:31:24',0,NULL,NULL,NULL),(2263,'Chikwewo',5,579,'2023-10-05 12:31:31',0,NULL,NULL,NULL),(2264,'Chikwewo',5,579,'2023-10-05 12:31:31',0,NULL,NULL,NULL),(2265,'Mtabango',18,579,'2023-10-05 12:40:23',0,NULL,NULL,NULL),(2266,'Mtendere',30,458,'2023-10-05 14:10:16',0,NULL,NULL,NULL),(2267,'MTENDERE',30,458,'2023-10-05 14:10:48',0,NULL,NULL,NULL),(2268,'MTENDERE',30,458,'2023-10-05 14:11:19',0,NULL,NULL,NULL),(2269,'MTENDERE',30,458,'2023-10-05 14:11:28',0,NULL,NULL,NULL),(2270,'MTENDERE',30,458,'2023-10-05 14:11:38',0,NULL,NULL,NULL),(2271,'MTENDERE',30,458,'2023-10-05 14:11:46',0,NULL,NULL,NULL),(2272,'Fisa',30,458,'2023-10-05 14:12:41',0,NULL,NULL,NULL),(2273,'Lizulu',25,567,'2023-10-06 10:05:25',0,NULL,NULL,NULL),(2274,'Mkalo',14,409,'2023-10-06 10:50:21',0,NULL,NULL,NULL),(2275,'Binya',25,585,'2023-10-06 11:08:26',0,NULL,NULL,NULL),(2276,'Ligombe',22,94,'2023-10-06 12:02:38',0,NULL,NULL,NULL),(2280,'Santhe',16,270,'2023-10-07 11:21:54',0,NULL,NULL,NULL),(2281,'Jenala',9,587,'2023-10-09 08:54:51',0,NULL,NULL,NULL),(2282,'Unknown',18,586,'2023-10-09 09:59:43',0,NULL,NULL,NULL),(2283,'Chilimampunga',18,586,'2023-10-09 09:59:54',0,NULL,NULL,NULL),(2284,'Unknown',18,586,'2023-10-09 10:04:30',0,NULL,NULL,NULL),(2285,'Chilibola',15,585,'2023-10-09 11:28:33',0,NULL,NULL,NULL),(2286,'Chalavikuwa',15,585,'2023-10-09 11:43:49',0,NULL,NULL,NULL),(2287,'Unknown',29,586,'2023-10-09 11:44:26',0,NULL,NULL,NULL),(2288,'Chikowi',9,586,'2023-10-09 11:55:17',0,NULL,NULL,NULL),(2289,'Mtepera',7,571,'2023-10-09 11:56:58',0,NULL,NULL,NULL),(2290,'Kanjedza',23,583,'2023-10-09 12:05:58',0,NULL,NULL,NULL),(2291,'Mansumbankhunda',18,575,'2023-10-09 12:07:30',0,NULL,NULL,NULL),(2292,'Banda',23,570,'2023-10-09 12:14:14',0,NULL,NULL,NULL),(2293,'Unknown',32,458,'2023-10-09 12:14:58',0,NULL,NULL,NULL),(2294,'Nakumba',18,570,'2023-10-09 12:15:09',0,NULL,NULL,NULL),(2295,'Kasumbu',18,570,'2023-10-09 12:21:48',0,NULL,NULL,NULL),(2296,'Matewere',16,582,'2023-10-09 12:32:31',0,NULL,NULL,NULL),(2297,'Unknown',15,458,'2023-10-09 12:37:35',0,NULL,NULL,NULL),(2298,'Genala',26,570,'2023-10-09 12:38:19',0,NULL,NULL,NULL),(2299,'Nsomba',32,458,'2023-10-09 12:55:49',0,NULL,NULL,NULL),(2300,'Singano',24,587,'2023-10-09 13:47:39',0,NULL,NULL,NULL),(2301,'Namkumba',18,575,'2023-10-09 14:05:59',0,NULL,NULL,NULL),(2302,'A/38',28,565,'2023-10-09 14:15:42',0,NULL,NULL,NULL),(2303,'A/38',28,565,'2023-10-09 14:15:54',0,NULL,NULL,NULL),(2304,'Mzomale',18,572,'2023-10-09 15:18:56',0,NULL,NULL,NULL),(2305,'Thomas',9,585,'2023-10-10 09:12:51',0,NULL,NULL,NULL),(2306,'A/23',28,575,'2023-10-10 09:24:06',0,NULL,NULL,NULL),(2307,'Matumbi',9,565,'2023-10-10 09:37:04',0,NULL,NULL,NULL),(2308,'Chikanje',24,565,'2023-10-10 09:41:18',0,NULL,NULL,NULL),(2309,'Chitukula',25,565,'2023-10-10 09:45:54',0,NULL,NULL,NULL),(2310,'Chinguwo',5,94,'2023-10-10 10:15:16',0,NULL,NULL,NULL),(2311,'Ntemwa',25,409,'2023-10-10 10:22:53',0,NULL,NULL,NULL),(2312,'Chig',5,567,'2023-10-10 10:23:08',0,NULL,NULL,NULL),(2313,'Chiguza',5,567,'2023-10-10 10:23:21',0,NULL,NULL,NULL),(2314,'Masesa',25,565,'2023-10-10 10:31:15',0,NULL,NULL,NULL),(2315,'Mpama',9,409,'2023-10-10 10:36:37',0,NULL,NULL,NULL),(2316,'Apemba',16,570,'2023-10-10 11:33:10',0,NULL,NULL,NULL),(2317,'Bango',6,585,'2023-10-10 11:37:24',0,NULL,NULL,NULL),(2318,'Mbeza',12,567,'2023-10-11 10:13:43',0,NULL,NULL,NULL),(2319,'Makwacha',30,409,'2023-10-11 10:21:55',0,NULL,NULL,NULL),(2320,'Chilela wana',7,581,'2023-10-11 10:41:06',0,NULL,NULL,NULL),(2321,'Kanduku',14,570,'2023-10-11 10:45:41',0,NULL,NULL,NULL),(2322,'Chilowoko',8,570,'2023-10-11 10:52:01',0,NULL,NULL,NULL),(2323,'Chilowokoka',8,570,'2023-10-11 10:52:09',0,NULL,NULL,NULL),(2324,'Payere',18,578,'2023-10-11 11:00:32',0,NULL,NULL,NULL),(2325,'Nkumira',11,587,'2023-10-11 11:16:33',0,NULL,NULL,NULL),(2326,'Chikongola',15,587,'2023-10-11 12:06:18',0,NULL,NULL,NULL),(2327,'Katambika',2,571,'2023-10-11 13:21:22',0,NULL,NULL,NULL),(2328,'Sukuma',20,584,'2023-10-12 08:19:26',0,NULL,NULL,NULL),(2329,'Kaluchi',18,435,'2023-10-12 08:50:27',0,NULL,NULL,NULL),(2330,'Kalumbu',2,435,'2023-10-12 08:51:03',0,NULL,NULL,NULL),(2331,'Kanyezi',23,584,'2023-10-12 09:06:42',0,NULL,NULL,NULL),(2332,'Njaiti',24,584,'2023-10-12 10:15:51',0,NULL,NULL,NULL),(2333,'Chikumbu',14,385,'2023-10-12 10:47:19',0,NULL,NULL,NULL),(2334,'Mazika',18,581,'2023-10-12 12:51:21',0,NULL,NULL,NULL),(2335,'Baluka',3,581,'2023-10-12 13:09:07',0,NULL,NULL,NULL),(2336,'Makwawa',25,581,'2023-10-12 13:32:16',0,NULL,NULL,NULL),(2337,'Tsalamanja',24,581,'2023-10-12 13:42:41',0,NULL,NULL,NULL),(2338,'Masanza',25,581,'2023-10-12 13:47:42',0,NULL,NULL,NULL),(2339,'Kamtukule',18,581,'2023-10-12 14:04:48',0,NULL,NULL,NULL),(2340,'Kambale',23,584,'2023-10-13 09:29:32',0,NULL,NULL,NULL),(2341,'Ganja',25,565,'2023-10-13 10:01:53',0,NULL,NULL,NULL),(2342,'Katumba',18,584,'2023-10-13 10:43:35',0,NULL,NULL,NULL),(2343,'Moyale',21,526,'2023-10-13 13:46:34',0,NULL,NULL,NULL),(2344,'Mzolokele',13,271,'2023-10-17 10:09:18',0,NULL,NULL,NULL),(2345,'Mponda',5,570,'2023-10-17 13:01:12',0,NULL,NULL,NULL),(2346,'Malili',23,582,'2023-10-17 13:01:58',0,NULL,NULL,NULL),(2347,'Chitekwele',2,570,'2023-10-17 13:11:16',0,NULL,NULL,NULL),(2348,'Kunthebwe',32,570,'2023-10-17 13:28:42',0,NULL,NULL,NULL),(2349,'Salama',30,592,'2023-10-17 13:35:15',0,NULL,NULL,NULL),(2350,'Chilinde',18,567,'2023-10-18 09:32:33',0,NULL,NULL,NULL),(2351,'Kachulu',18,409,'2023-10-18 10:13:35',0,NULL,NULL,NULL),(2356,'Mkomba',20,565,'2023-10-18 12:34:25',0,NULL,NULL,NULL),(2357,'Mchiramwera',22,571,'2023-10-18 14:10:35',0,NULL,NULL,NULL),(2358,'Mtonda',3,571,'2023-10-18 14:16:26',0,NULL,NULL,NULL),(2359,'Kachule',18,584,'2023-10-19 09:03:31',0,NULL,NULL,NULL),(2360,'Masese',30,565,'2023-10-19 09:10:39',0,NULL,NULL,NULL),(2361,'Masakhala',16,565,'2023-10-19 09:14:00',0,NULL,NULL,NULL),(2362,'Mlolo',18,565,'2023-10-19 09:38:26',0,NULL,NULL,NULL),(2363,'Ntandile',28,592,'2023-10-19 10:22:50',0,NULL,NULL,NULL),(2364,'Mwimba',18,583,'2023-10-19 11:34:00',0,NULL,NULL,NULL),(2365,'Ganda',24,584,'2023-10-19 11:50:09',0,NULL,NULL,NULL),(2369,'Ndunga',2,385,'2023-10-19 12:32:32',0,NULL,NULL,NULL),(2370,'Nyamuka',25,571,'2023-10-19 13:38:28',0,NULL,NULL,NULL),(2373,'Mpata',3,571,'2023-10-19 14:22:00',0,NULL,NULL,NULL),(2374,'Kumbalame',16,567,'2023-10-19 14:50:41',0,NULL,NULL,NULL),(2375,'Njewai',18,583,'2023-10-20 09:24:25',0,NULL,NULL,NULL),(2376,'Mkukula',16,587,'2023-10-20 09:38:56',0,NULL,NULL,NULL),(2377,'Chafa',22,565,'2023-10-20 09:46:42',0,NULL,NULL,NULL),(2378,'Area27',28,585,'2023-10-20 10:01:00',0,NULL,NULL,NULL),(2379,'Mbweso',5,565,'2023-10-20 10:11:55',0,NULL,NULL,NULL),(2380,'Chapata',18,583,'2023-10-20 10:13:17',0,NULL,NULL,NULL),(2381,'Mwenyekondo',28,324,'2023-10-20 11:20:49',0,NULL,NULL,NULL),(2382,'Chimombo',14,571,'2023-10-20 14:53:29',0,NULL,NULL,NULL),(2383,'Mphando',23,565,'2023-10-23 09:28:47',0,NULL,NULL,NULL),(2384,'Mulawuli',19,565,'2023-10-23 09:33:43',0,NULL,NULL,NULL),(2385,'Suza',18,94,'2023-10-23 09:36:28',0,NULL,NULL,NULL),(2386,'Kapingoswale',18,565,'2023-10-23 09:51:10',0,NULL,NULL,NULL),(2387,'A/22',28,270,'2023-10-23 11:02:25',0,NULL,NULL,NULL),(2388,'A/22',28,270,'2023-10-23 11:02:36',0,NULL,NULL,NULL),(2389,'A22',18,270,'2023-10-23 11:03:49',0,NULL,NULL,NULL),(2390,'Zakutu',18,570,'2023-10-23 11:32:26',0,NULL,NULL,NULL),(2391,'kawinga',5,564,'2023-10-23 11:37:34',0,NULL,NULL,NULL),(2392,'Katatha',18,570,'2023-10-23 11:43:14',0,NULL,NULL,NULL),(2393,'Bulumbe',9,570,'2023-10-23 11:55:46',0,NULL,NULL,NULL),(2394,'Tambala',30,584,'2023-10-23 12:03:58',0,NULL,NULL,NULL),(2395,'Samala',18,584,'2023-10-23 12:04:46',0,NULL,NULL,NULL),(2396,'Mbilima',23,584,'2023-10-23 12:11:47',0,NULL,NULL,NULL),(2397,'Katsache',23,582,'2023-10-23 12:40:08',0,NULL,NULL,NULL),(2398,'Namkumba',23,582,'2023-10-23 12:40:50',0,NULL,NULL,NULL),(2399,'Tambala',19,565,'2023-10-23 12:52:37',0,NULL,NULL,NULL),(2400,'Ngolowindi',16,565,'2023-10-23 12:55:32',0,NULL,NULL,NULL),(2401,'A/49',28,592,'2023-10-24 09:15:49',0,NULL,NULL,NULL),(2402,'A/49',28,592,'2023-10-24 09:15:55',0,NULL,NULL,NULL),(2403,'A/49',28,592,'2023-10-24 09:15:59',0,NULL,NULL,NULL),(2404,'Nakhumba',3,592,'2023-10-24 09:41:47',0,NULL,NULL,NULL),(2407,'Kapingo',15,565,'2023-10-24 10:51:10',0,NULL,NULL,NULL),(2408,'Kapingo siwande',15,565,'2023-10-24 10:52:11',0,NULL,NULL,NULL),(2409,'Kathewera',2,94,'2023-10-24 10:52:56',0,NULL,NULL,NULL),(2410,'Kutacha',9,570,'2023-10-24 11:10:52',0,NULL,NULL,NULL),(2411,'Khongonde',18,570,'2023-10-24 11:21:25',0,NULL,NULL,NULL),(2412,'Mbawelo',22,565,'2023-10-24 11:35:14',0,NULL,NULL,NULL),(2413,'Makwangwala',28,365,'2023-10-24 17:08:03',0,NULL,NULL,NULL),(2414,'Chikumbu',3,270,'2023-10-25 09:08:11',0,NULL,NULL,NULL),(2417,'Kafwafwa',23,592,'2023-10-25 09:37:42',0,NULL,NULL,NULL),(2418,'Taduya',26,567,'2023-10-25 10:36:19',0,NULL,NULL,NULL),(2419,'Nyanji',2,592,'2023-10-25 10:36:42',0,NULL,NULL,NULL),(2420,'Kanenda',6,569,'2023-10-25 11:17:27',0,NULL,NULL,NULL),(2421,'Kanyenga',6,569,'2023-10-25 11:17:51',0,NULL,NULL,NULL),(2422,'Tsabwe',14,409,'2023-10-25 11:18:18',0,NULL,NULL,NULL),(2423,'Phatha',18,570,'2023-10-25 11:29:01',0,NULL,NULL,NULL),(2424,'Mzukubola',15,94,'2023-10-25 11:35:42',0,NULL,NULL,NULL),(2425,'Mwenemunsuku',1,575,'2023-10-26 10:20:06',0,NULL,NULL,NULL),(2426,'Chiseka',20,563,'2023-10-26 10:24:52',0,NULL,NULL,NULL),(2427,'A/51',28,383,'2023-10-26 14:31:37',0,NULL,NULL,NULL),(2428,'A/51',28,383,'2023-10-26 14:31:42',0,NULL,NULL,NULL),(2429,'Wasambo',10,592,'2023-10-27 09:45:54',0,NULL,NULL,NULL),(2430,'Mazioola',15,565,'2023-10-27 10:29:43',0,NULL,NULL,NULL),(2431,'Kwungu',4,566,'2023-10-27 10:43:27',0,NULL,NULL,NULL),(2432,'Chisabwe',22,570,'2023-10-27 10:52:00',0,NULL,NULL,NULL),(2433,'Zolo',20,575,'2023-10-27 10:53:16',0,NULL,NULL,NULL),(2434,'Bzyolo',20,575,'2023-10-27 10:53:47',0,NULL,NULL,NULL),(2437,'Halasi',3,570,'2023-10-30 08:57:31',0,NULL,NULL,NULL),(2438,'Lukasi',18,570,'2023-10-30 09:02:10',0,NULL,NULL,NULL),(2439,'Malema',18,570,'2023-10-30 09:04:47',0,NULL,NULL,NULL),(2440,'Mbiwi',7,584,'2023-10-30 09:08:47',0,NULL,NULL,NULL),(2441,'Chitola',5,570,'2023-10-30 09:12:48',0,NULL,NULL,NULL),(2442,'Kululuma',2,587,'2023-10-30 09:22:58',0,NULL,NULL,NULL),(2443,'Unknown',19,435,'2023-10-30 09:41:52',0,NULL,NULL,NULL),(2444,'Kayabwa',28,592,'2023-10-30 10:04:54',0,NULL,NULL,NULL),(2445,'Nkaro',24,458,'2023-10-30 10:56:42',0,NULL,NULL,NULL),(2447,'Mafale',27,179,'2023-10-30 11:43:40',0,NULL,NULL,NULL),(2448,'Namafi',3,584,'2023-10-30 12:00:28',0,NULL,NULL,NULL),(2449,'Khunguni',18,584,'2023-10-30 12:43:45',0,NULL,NULL,NULL),(2450,'Kalazi',25,575,'2023-10-31 08:28:32',0,NULL,NULL,NULL),(2451,'Kwataine',18,575,'2023-10-31 08:51:08',0,NULL,NULL,NULL),(2452,'Bwanayambi',3,409,'2023-10-31 10:05:14',0,NULL,NULL,NULL),(2453,'Sanama',3,409,'2023-10-31 10:08:27',0,NULL,NULL,NULL),(2454,'A/18',28,566,'2023-10-31 10:40:57',0,NULL,NULL,NULL),(2455,'A/18',28,566,'2023-10-31 10:41:05',0,NULL,NULL,NULL),(2456,'A/18',28,566,'2023-10-31 10:41:09',0,NULL,NULL,NULL),(2457,'Chileka',14,435,'2023-10-31 10:50:52',0,NULL,NULL,NULL),(2458,'Chithebe',14,584,'2023-10-31 10:57:18',0,NULL,NULL,NULL),(2459,'Nkhwetemole',22,570,'2023-10-31 11:08:10',0,NULL,NULL,NULL),(2460,'Nazombe',14,585,'2023-10-31 12:23:19',0,NULL,NULL,NULL),(2461,'Chauyauya',11,592,'2023-11-01 10:26:35',0,NULL,NULL,NULL),(2462,'Nalingula',26,570,'2023-11-01 11:56:04',0,NULL,NULL,NULL),(2463,'Njerwa',20,570,'2023-11-01 12:09:44',0,NULL,NULL,NULL),(2464,'Mtsabango',12,584,'2023-11-01 12:31:19',0,NULL,NULL,NULL),(2465,'Tsabango',20,565,'2023-11-02 08:45:24',0,NULL,NULL,NULL),(2466,'Kholombizo',18,570,'2023-11-02 09:12:37',0,NULL,NULL,NULL),(2467,'Kawole',23,570,'2023-11-02 09:16:23',0,NULL,NULL,NULL),(2468,'Bwana',20,592,'2023-11-02 10:12:46',0,NULL,NULL,NULL),(2469,'Jaro',12,592,'2023-11-02 10:41:46',0,NULL,NULL,NULL),(2470,'Tsabango',3,570,'2023-11-02 11:03:16',0,NULL,NULL,NULL),(2471,'Mtwana',3,581,'2023-11-02 11:12:02',0,NULL,NULL,NULL),(2472,'A/9',28,592,'2023-11-02 11:23:40',0,NULL,NULL,NULL),(2473,'A/9',28,592,'2023-11-02 11:23:45',0,NULL,NULL,NULL),(2474,'A/9',28,592,'2023-11-02 11:23:51',0,NULL,NULL,NULL),(2475,'Buluzi',18,581,'2023-11-02 11:23:58',0,NULL,NULL,NULL),(2476,'A/9',28,592,'2023-11-02 11:23:58',0,NULL,NULL,NULL),(2477,'Chiripa',5,458,'2023-11-03 09:47:08',0,NULL,NULL,NULL),(2478,'Maliri',28,575,'2023-11-03 10:23:38',0,NULL,NULL,NULL),(2479,'Malenga',29,563,'2023-11-03 11:05:21',0,NULL,NULL,NULL),(2489,'Zulu',28,563,'2023-11-03 12:46:32',0,NULL,NULL,NULL),(2490,'Kamoto',23,587,'2023-11-06 09:10:05',0,NULL,NULL,NULL),(2491,'Kamoto',23,587,'2023-11-06 09:10:05',0,NULL,NULL,NULL),(2492,'Lemwe',18,570,'2023-11-06 09:16:37',0,NULL,NULL,NULL),(2493,'Kambani',23,584,'2023-11-06 09:16:40',0,NULL,NULL,NULL),(2494,'Katuma',16,584,'2023-11-06 09:41:16',0,NULL,NULL,NULL),(2495,'Mbonekera',5,563,'2023-11-06 10:44:54',0,NULL,NULL,NULL),(2496,'Chimwala',18,570,'2023-11-06 11:14:41',0,NULL,NULL,NULL),(2497,'Kwacha',6,570,'2023-11-06 11:20:47',0,NULL,NULL,NULL),(2498,'Nicola',19,567,'2023-11-06 11:51:21',0,NULL,NULL,NULL),(2499,'Area8',28,567,'2023-11-06 12:19:58',0,NULL,NULL,NULL),(2500,'Unknown',7,570,'2023-11-07 09:01:16',0,NULL,NULL,NULL),(2501,'Chapannga',27,583,'2023-11-07 09:07:35',0,NULL,NULL,NULL),(2502,'Komba',23,570,'2023-11-07 09:12:29',0,NULL,NULL,NULL),(2503,'Tumbwe',18,565,'2023-11-07 09:20:06',0,NULL,NULL,NULL),(2504,'Sipuni',24,584,'2023-11-07 09:26:09',0,NULL,NULL,NULL),(2505,'Sambo',18,584,'2023-11-07 09:31:30',0,NULL,NULL,NULL),(2506,'Malechunde',18,575,'2023-11-07 10:09:12',0,NULL,NULL,NULL),(2507,'Mlombe',9,583,'2023-11-07 10:42:45',0,NULL,NULL,NULL),(2508,'Chankoma',8,565,'2023-11-07 10:52:44',0,NULL,NULL,NULL),(2509,'Kombedza',16,584,'2023-11-07 11:29:48',0,NULL,NULL,NULL),(2510,'Kunthengule',14,565,'2023-11-08 10:40:30',0,NULL,NULL,NULL),(2511,'Kantaja',14,409,'2023-11-08 11:10:27',0,NULL,NULL,NULL),(2512,'Kapota',22,567,'2023-11-08 11:13:41',0,NULL,NULL,NULL),(2513,'Simbota',30,592,'2023-11-08 11:16:50',0,NULL,NULL,NULL),(2519,'Dzulu',20,570,'2023-11-08 11:46:01',0,NULL,NULL,NULL),(2520,'Malinika',9,435,'2023-11-08 14:35:37',0,NULL,NULL,NULL),(2521,'Kaluma',28,563,'2023-11-09 09:13:47',0,NULL,NULL,NULL),(2522,'Chimutu',23,570,'2023-11-09 10:04:15',0,NULL,NULL,NULL),(2523,'Phwetemule',22,570,'2023-11-09 11:08:10',0,NULL,NULL,NULL),(2524,'Maluwa',3,584,'2023-11-09 11:25:47',0,NULL,NULL,NULL),(2525,'Chemasi',5,575,'2023-11-10 09:00:01',0,NULL,NULL,NULL),(2526,'Khungula',12,567,'2023-11-10 09:51:33',0,NULL,NULL,NULL),(2527,'Rombe',23,567,'2023-11-10 09:58:25',0,NULL,NULL,NULL),(2528,'Unknown',27,458,'2023-11-10 10:12:53',0,NULL,NULL,NULL),(2529,'Area15',18,568,'2023-11-10 10:13:45',0,NULL,NULL,NULL),(2530,'Njini',23,571,'2023-11-10 10:47:48',0,NULL,NULL,NULL),(2531,'Thiramanje',24,572,'2023-11-10 11:20:37',0,NULL,NULL,NULL),(2532,'Mazengera',25,572,'2023-11-10 11:28:53',0,NULL,NULL,NULL),(2533,'Njolomole',18,586,'2023-11-13 08:51:32',0,NULL,NULL,NULL),(2534,'Kaembe',18,586,'2023-11-13 08:54:22',0,NULL,NULL,NULL),(2535,'Kaloto',18,586,'2023-11-13 09:00:49',0,NULL,NULL,NULL),(2536,'Kaliyeka',18,567,'2023-11-13 09:18:18',0,NULL,NULL,NULL),(2537,'Nsawale',30,566,'2023-11-13 09:41:06',0,NULL,NULL,NULL),(2538,'Mtonya',30,567,'2023-11-13 09:50:02',0,NULL,NULL,NULL),(2539,'A44',18,567,'2023-11-13 09:56:58',0,NULL,NULL,NULL),(2540,'A44',18,567,'2023-11-13 09:57:03',0,NULL,NULL,NULL),(2541,'Kafuzira',7,566,'2023-11-13 10:25:28',0,NULL,NULL,NULL),(2542,'Chikula',28,566,'2023-11-13 10:30:36',0,NULL,NULL,NULL),(2543,'Kafula',28,564,'2023-11-13 10:39:33',0,NULL,NULL,NULL),(2544,'Kalikokha',2,570,'2023-11-13 11:19:19',0,NULL,NULL,NULL),(2545,'Katonga',27,570,'2023-11-13 12:22:49',0,NULL,NULL,NULL),(2546,'Kalumbu',8,570,'2023-11-13 12:28:08',0,NULL,NULL,NULL),(2547,'Kapeni',24,458,'2023-11-13 13:49:27',0,NULL,NULL,NULL),(2548,'Chowe',5,565,'2023-11-14 09:28:10',0,NULL,NULL,NULL),(2549,'Mdundu',27,579,'2023-11-14 10:03:58',0,NULL,NULL,NULL),(2550,'Unknown',27,579,'2023-11-14 10:04:05',0,NULL,NULL,NULL),(2551,'Chukhumbira',25,435,'2023-11-14 11:28:18',0,NULL,NULL,NULL),(2552,'Chuye',23,584,'2023-11-14 11:43:07',0,NULL,NULL,NULL),(2553,'Chiputula',27,584,'2023-11-14 11:50:02',0,NULL,NULL,NULL),(2554,'Ndazadala',22,570,'2023-11-14 12:05:13',0,NULL,NULL,NULL),(2555,'Chikapa',14,570,'2023-11-14 12:16:31',0,NULL,NULL,NULL),(2556,'Mvura',23,570,'2023-11-14 12:34:35',0,NULL,NULL,NULL),(2557,'Chisera',23,566,'2023-11-15 10:39:15',0,NULL,NULL,NULL),(2558,'Manjimsingo',15,566,'2023-11-15 10:52:15',0,NULL,NULL,NULL),(2559,'Masasa',8,570,'2023-11-15 11:06:22',0,NULL,NULL,NULL),(2560,'Mulumbi',9,570,'2023-11-15 11:29:54',0,NULL,NULL,NULL),(2561,'Sipasi',20,570,'2023-11-15 11:54:28',0,NULL,NULL,NULL),(2562,'Ara46',28,585,'2023-11-15 12:28:05',0,NULL,NULL,NULL),(2563,'Area  51',28,578,'2023-11-15 13:17:47',0,NULL,NULL,NULL),(2564,'Trilamanja',24,563,'2023-11-16 09:23:14',0,NULL,NULL,NULL),(2565,'Kazombe',23,567,'2023-11-17 09:45:25',0,NULL,NULL,NULL),(2566,'Satama',3,570,'2023-11-20 11:17:58',0,NULL,NULL,NULL),(2567,'Kasonga',8,565,'2023-11-20 11:57:18',0,NULL,NULL,NULL),(2568,'Chituta',11,592,'2023-11-20 12:12:10',0,NULL,NULL,NULL),(2569,'Mlamba',9,587,'2023-11-21 08:55:15',0,NULL,NULL,NULL),(2570,'Nankhumba',3,564,'2023-11-21 09:01:13',0,NULL,NULL,NULL),(2571,'Chamanja',24,564,'2023-11-21 09:11:27',0,NULL,NULL,NULL),(2572,'Khalula',30,400,'2023-11-21 09:26:08',0,NULL,NULL,NULL),(2573,'Chungu',4,582,'2023-11-21 10:52:05',0,NULL,NULL,NULL),(2574,'Kalolo',4,458,'2023-11-22 10:58:10',0,NULL,NULL,NULL),(2575,'Mbawa',25,570,'2023-11-22 11:12:54',0,NULL,NULL,NULL),(2576,'Chakumbila',25,570,'2023-11-22 11:25:38',0,NULL,NULL,NULL),(2577,'Kutaja',14,570,'2023-11-22 11:35:04',0,NULL,NULL,NULL),(2578,'Chinkho',8,570,'2023-11-22 11:37:44',0,NULL,NULL,NULL),(2579,'Gundphiri',3,577,'2023-11-23 10:11:41',0,NULL,NULL,NULL),(2580,'Gundaphiri',3,577,'2023-11-23 10:12:12',0,NULL,NULL,NULL),(2581,'Chirinji',22,458,'2023-11-23 10:21:20',0,NULL,NULL,NULL),(2582,'Mwakafule',1,570,'2023-11-23 10:39:40',0,NULL,NULL,NULL),(2583,'Winde',2,570,'2023-11-23 11:10:32',0,NULL,NULL,NULL),(2584,'Kahenga',30,577,'2023-11-23 13:47:05',0,NULL,NULL,NULL),(2585,'Area9',18,575,'2023-11-24 09:57:24',0,NULL,NULL,NULL),(2586,'M\'bwana',7,592,'2023-11-27 10:15:00',0,NULL,NULL,NULL),(2587,'Asafu',23,400,'2023-11-27 10:35:33',0,NULL,NULL,NULL),(2588,'Kamwendo',23,400,'2023-11-27 10:43:01',0,NULL,NULL,NULL),(2589,'Mpemba',9,567,'2023-11-27 11:00:20',0,NULL,NULL,NULL),(2590,'Chakwanila',28,179,'2023-11-27 11:03:41',0,NULL,NULL,NULL),(2591,'Nantunga',5,400,'2023-11-27 11:12:41',0,NULL,NULL,NULL),(2592,'Ndindi',29,577,'2023-11-27 11:52:11',0,NULL,NULL,NULL),(2593,'Ndindi',29,577,'2023-11-27 11:52:11',0,NULL,NULL,NULL),(2594,'Kachule',28,563,'2023-11-27 12:10:44',0,NULL,NULL,NULL),(2595,'Mwambu',9,563,'2023-11-27 12:15:17',0,NULL,NULL,NULL),(2596,'Chankhoma',28,563,'2023-11-27 12:15:44',0,NULL,NULL,NULL),(2597,'Chiuzila',18,271,'2023-11-28 10:53:33',0,NULL,NULL,NULL),(2598,'.kalembo',30,568,'2023-11-28 11:21:07',0,NULL,NULL,NULL),(2599,'Maulambiya',1,572,'2023-11-28 11:42:38',0,NULL,NULL,NULL),(2600,'Mvubwe',14,572,'2023-11-28 11:50:16',0,NULL,NULL,NULL),(2601,'Lugwa',2,572,'2023-11-28 12:06:38',0,NULL,NULL,NULL),(2602,'Mlengamzyma',7,577,'2023-11-29 10:31:18',0,NULL,NULL,NULL),(2603,'Samati',30,435,'2023-11-29 10:49:31',0,NULL,NULL,NULL),(2604,'Salura',16,570,'2023-11-30 10:55:09',0,NULL,NULL,NULL),(2605,'SALURA',16,570,'2023-11-30 10:55:14',0,NULL,NULL,NULL),(2606,'Chilikumwendo',18,566,'2023-11-30 11:42:05',0,NULL,NULL,NULL),(2607,'Sakambewa',2,400,'2023-12-01 10:08:13',0,NULL,NULL,NULL),(2608,'Chikanga',28,236,'2023-12-02 10:47:45',0,NULL,NULL,NULL),(2609,'Chikanga',18,236,'2023-12-02 10:48:15',0,NULL,NULL,NULL),(2610,'Chioko',8,400,'2023-12-04 09:17:12',0,NULL,NULL,NULL),(2611,'Dzole',12,400,'2023-12-04 10:22:52',0,NULL,NULL,NULL),(2612,'Kapundu',20,567,'2023-12-04 10:47:25',0,NULL,NULL,NULL),(2613,'Nkando',24,284,'2023-12-04 11:30:20',0,NULL,NULL,NULL),(2614,'Sauya',3,284,'2023-12-04 11:34:30',0,NULL,NULL,NULL),(2615,'Labani',22,365,'2023-12-04 11:55:30',0,NULL,NULL,NULL),(2616,'Kambuli',18,567,'2023-12-04 12:04:36',0,NULL,NULL,NULL),(2617,'Kasina',23,570,'2023-12-04 12:23:42',0,NULL,NULL,NULL),(2618,'Sabwe',24,567,'2023-12-04 12:25:56',0,NULL,NULL,NULL),(2619,'Mwese',18,574,'2023-12-04 13:57:17',0,NULL,NULL,NULL),(2620,'Chitukula',20,574,'2023-12-04 13:57:54',0,NULL,NULL,NULL),(2621,'Area  44',28,270,'2023-12-04 14:16:58',0,NULL,NULL,NULL),(2622,'Kawenga',5,400,'2023-12-05 10:15:50',0,NULL,NULL,NULL),(2623,'Kayenda',6,567,'2023-12-05 10:41:43',0,NULL,NULL,NULL),(2624,'Kamwendo',14,567,'2023-12-05 11:01:22',0,NULL,NULL,NULL),(2625,'Chidamoto',23,400,'2023-12-05 11:20:30',0,NULL,NULL,NULL),(2626,'Makawoko',4,582,'2023-12-05 11:28:18',0,NULL,NULL,NULL),(2627,'Guziwa',26,582,'2023-12-05 12:08:31',0,NULL,NULL,NULL),(2628,'Ara9',28,585,'2023-12-05 12:10:11',0,NULL,NULL,NULL),(2629,'Kayiya',25,400,'2023-12-06 09:28:06',0,NULL,NULL,NULL),(2630,'Chinsapo',9,586,'2023-12-06 10:47:30',0,NULL,NULL,NULL),(2631,'Tsabango',28,324,'2023-12-06 11:12:49',0,NULL,NULL,NULL),(2632,'Chikulamayembe',23,565,'2023-12-07 10:02:16',0,NULL,NULL,NULL),(2633,'Muhango',28,400,'2023-12-07 10:16:59',0,NULL,NULL,NULL),(2634,'Kalombe',18,592,'2023-12-07 10:37:25',0,NULL,NULL,NULL),(2635,'Chimkole',27,565,'2023-12-07 10:42:14',0,NULL,NULL,NULL),(2636,'Mangisa',11,565,'2023-12-08 09:38:19',0,NULL,NULL,NULL),(2637,'Ngowe',27,400,'2023-12-08 10:15:10',0,NULL,NULL,NULL),(2638,'Namadidi',9,582,'2023-12-08 11:15:03',0,NULL,NULL,NULL),(2639,'Nsamala',14,581,'2023-12-08 11:35:54',0,NULL,NULL,NULL),(2640,'Namichenga',24,565,'2023-12-08 11:47:25',0,NULL,NULL,NULL),(2641,'Chithunzi',22,565,'2023-12-08 12:09:49',0,NULL,NULL,NULL),(2642,'Chiwaula',18,400,'2023-12-11 11:03:48',0,NULL,NULL,NULL),(2643,'Mulunga',5,565,'2023-12-11 11:06:59',0,NULL,NULL,NULL),(2644,'Nakhumba',23,567,'2023-12-11 11:36:25',0,NULL,NULL,NULL),(2645,'Chimpiti',25,400,'2023-12-11 12:22:29',0,NULL,NULL,NULL),(2646,'Elwasambo',4,435,'2023-12-13 11:49:26',0,NULL,NULL,NULL),(2647,'Chombwe',16,570,'2023-12-13 11:59:44',0,NULL,NULL,NULL),(2648,'Kabuthu',24,584,'2023-12-14 11:22:22',0,NULL,NULL,NULL),(2649,'Sent',18,392,'2023-12-16 11:11:59',0,NULL,NULL,NULL),(2650,'Are49',18,392,'2023-12-16 11:15:00',0,NULL,NULL,NULL),(2651,'Kwachauheni',7,270,'2023-12-19 15:10:48',0,NULL,NULL,NULL),(2652,'Ta kalumba',28,329,'2023-12-21 10:21:37',0,NULL,NULL,NULL),(2653,'Mtsiliza',16,284,'2023-12-27 12:42:15',0,NULL,NULL,NULL),(2654,'N rc',28,94,'2024-01-02 09:31:13',0,NULL,NULL,NULL),(2655,'Chipoka',16,291,'2024-01-10 08:22:54',0,NULL,NULL,NULL),(2656,'Mlonyeni',18,291,'2024-01-10 14:25:54',0,NULL,NULL,NULL),(2657,'AreTSABANGOa 38 (Chimutu)',28,577,'2024-01-17 11:01:19',0,NULL,NULL,NULL),(2658,'Kapeni',3,284,'2024-01-24 11:55:03',0,NULL,NULL,NULL),(2659,'Mabuka',26,458,'2024-01-26 10:34:06',0,NULL,NULL,NULL),(2660,'Kaunga',5,270,'2024-01-27 10:16:04',0,NULL,NULL,NULL),(2661,'Chempira',14,324,'2024-01-29 10:46:52',0,NULL,NULL,NULL),(2662,'M\'manga',5,94,'2024-01-30 14:56:14',0,NULL,NULL,NULL),(2663,'25 sungwi',28,324,'2024-02-06 13:07:05',0,NULL,NULL,NULL),(2664,'Mbaula',22,94,'2024-02-12 10:57:03',0,NULL,NULL,NULL),(2665,'Chiphala',16,284,'2024-02-12 13:22:58',0,NULL,NULL,NULL),(2666,'Mzuzu',21,270,'2024-02-13 14:45:17',0,NULL,NULL,NULL),(2667,'Chifenthe',31,324,'2024-02-22 07:30:29',0,NULL,NULL,NULL),(2668,'Mwadenje',18,270,'2024-03-01 09:28:55',0,NULL,NULL,NULL),(2669,'Deya',28,270,'2024-03-09 13:37:25',0,NULL,NULL,NULL),(2670,'Chipula',25,365,'2024-03-18 11:10:45',0,NULL,NULL,NULL),(2671,'Saimoni',19,365,'2024-03-20 10:31:13',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `traditional_authority` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit_list`
--

DROP TABLE IF EXISTS `unit_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unit_list` (
  `id` int NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit_list`
--

LOCK TABLES `unit_list` WRITE;
/*!40000 ALTER TABLE `unit_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `unit_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upload_files`
--

DROP TABLE IF EXISTS `upload_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `upload_files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `download` varchar(200) NOT NULL,
  `timers` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upload_files`
--

LOCK TABLES `upload_files` WRITE;
/*!40000 ALTER TABLE `upload_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `upload_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `head_quarters_id` int NOT NULL DEFAULT '1',
  `regions_id` int DEFAULT NULL,
  `stations_id` int DEFAULT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '3' COMMENT '1 = admin, 2 = Officers, 3 = Receptionist, 4 = Health, 5 = Regional Officers',
  `avatar` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,5,32,'Moses','Kaira','moka.codes@mps.gov.mw','5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8',1,'1637155500_MOSES KAIRA.png','2021-11-17 15:19:01'),(2,1,2,2,'Charles','Fodya','charles.fodya@mps.gov.mw','5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8',1,'','2022-01-07 10:12:19'),(3,1,5,32,'Lighthouse','User','lhhealth.officer@mps.gov.mw','5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8',4,'1642379220_WIN_20220111_15_41_39_Pro.jpg','2022-01-17 02:27:09'),(4,1,2,11,'Dumisani','Ndhlovu','dumi_ndhlovu@lighthouse.org.mw','45c571a156ddcef41351a713bcddee5ba7e95460',4,'1711365120_Screenshot 2024-03-01 034051.png','2024-03-25 13:12:41'),(5,1,2,2,'Jonathan','Makoza','jmakoza@lighthouse.org.mw','5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8',4,'1711365120_Screenshot 2024-03-01 034051.png','2024-03-25 13:12:41'),(6,1,2,14,'Pachawo','Bisani','phbisan@gmail.com','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3',1,NULL,'2024-05-31 12:12:44'),(7,1,5,11,'Agness','Thawani','athawani@lighthouse.org.mw','732e9daed0822be0734067dfb60db59150de3f28',1,NULL,'2024-06-14 13:49:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccination`
--

DROP TABLE IF EXISTS `vaccination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaccination` (
  `id` int NOT NULL AUTO_INCREMENT,
  `regions_id` int NOT NULL,
  `stations_id` int NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `vaccination_name` varchar(100) NOT NULL,
  `adminstered_date` date NOT NULL,
  `remarks` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccination`
--

LOCK TABLES `vaccination` WRITE;
/*!40000 ALTER TABLE `vaccination` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaccination_list`
--

DROP TABLE IF EXISTS `vaccination_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaccination_list` (
  `id` int NOT NULL,
  `stations_id` int NOT NULL,
  `regions_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaccination_list`
--

LOCK TABLES `vaccination_list` WRITE;
/*!40000 ALTER TABLE `vaccination_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaccination_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `village`
--

DROP TABLE IF EXISTS `village`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `village` (
  `village_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `traditional_authority_id` int NOT NULL DEFAULT '0',
  `creator` int NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `retired` tinyint(1) NOT NULL DEFAULT '0',
  `retired_by` int DEFAULT NULL,
  `date_retired` datetime DEFAULT NULL,
  `retire_reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`village_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `village`
--

LOCK TABLES `village` WRITE;
/*!40000 ALTER TABLE `village` DISABLE KEYS */;
INSERT INTO `village` VALUES (47675,'Mpingu',1005,581,'2023-09-22 11:23:25',0,NULL,NULL,NULL),(47676,'Matola',1234,385,'2023-09-22 11:26:09',0,NULL,NULL,NULL),(47677,'Shawa',2174,573,'2023-09-22 11:29:20',0,NULL,NULL,NULL),(47678,'Khumbanyiwa',567,179,'2023-09-22 11:31:07',0,NULL,NULL,NULL),(47679,'Muchande',193,581,'2023-09-22 11:31:08',0,NULL,NULL,NULL),(47680,'Hoho',2175,563,'2023-09-22 11:34:23',0,NULL,NULL,NULL),(47681,'Padenga',356,563,'2023-09-22 11:34:59',0,NULL,NULL,NULL),(47682,'Jumpha',157,563,'2023-09-22 11:38:36',0,NULL,NULL,NULL),(47683,'Kauma',1824,574,'2023-09-22 11:39:19',0,NULL,NULL,NULL),(47684,'Mgunda',232,581,'2023-09-22 11:42:14',0,NULL,NULL,NULL),(47685,'Ndongo1',304,581,'2023-09-22 11:52:50',0,NULL,NULL,NULL),(47686,'Kaole',569,573,'2023-09-22 11:57:53',0,NULL,NULL,NULL),(47687,'Kaphiri',1896,574,'2023-09-22 12:00:18',0,NULL,NULL,NULL),(47688,'Kutsanja',391,573,'2023-09-22 12:03:11',0,NULL,NULL,NULL),(47689,'Nguludi',251,385,'2023-09-22 12:05:44',0,NULL,NULL,NULL),(47690,'Nkhaka',298,574,'2023-09-22 12:10:03',0,NULL,NULL,NULL),(47691,'Malizani',333,385,'2023-09-22 12:11:34',0,NULL,NULL,NULL),(47692,'Masamba',1172,581,'2023-09-22 12:11:58',0,NULL,NULL,NULL),(47693,'Zefinati',353,573,'2023-09-22 12:15:11',0,NULL,NULL,NULL),(47694,'Mdala',259,581,'2023-09-22 12:16:04',0,NULL,NULL,NULL),(47695,'Amanu',2176,581,'2023-09-22 12:20:18',0,NULL,NULL,NULL),(47696,'Mofati',353,581,'2023-09-22 12:25:39',0,NULL,NULL,NULL),(47697,'Chakhadza',72,573,'2023-09-22 12:25:58',0,NULL,NULL,NULL),(47698,'Manomba',1037,581,'2023-09-22 12:30:05',0,NULL,NULL,NULL),(47699,'Mkuwatha',370,385,'2023-09-22 12:33:19',0,NULL,NULL,NULL),(47700,'Masimbo',518,581,'2023-09-22 12:35:26',0,NULL,NULL,NULL),(47701,'Chimeza',2177,573,'2023-09-22 12:35:42',0,NULL,NULL,NULL),(47702,'Kachule',464,385,'2023-09-22 12:40:08',0,NULL,NULL,NULL),(47703,'Chimeza',2178,573,'2023-09-22 12:40:26',0,NULL,NULL,NULL),(47704,'Mwanang\'ombe',1100,581,'2023-09-22 12:43:06',0,NULL,NULL,NULL),(47705,'Area 21',356,385,'2023-09-22 12:50:36',0,NULL,NULL,NULL),(47706,'Chioza',119,573,'2023-09-22 12:51:09',0,NULL,NULL,NULL),(47707,'Mnilo',1799,385,'2023-09-22 12:55:16',0,NULL,NULL,NULL),(47708,'Chimasula',1669,581,'2023-09-22 13:02:45',0,NULL,NULL,NULL),(47709,'Chimutu',2179,581,'2023-09-22 13:03:46',0,NULL,NULL,NULL),(47710,'Nambeya',1762,574,'2023-09-22 13:25:27',0,NULL,NULL,NULL),(47711,'Chembe',176,574,'2023-09-22 13:40:06',0,NULL,NULL,NULL),(47712,'Dailesi',2180,587,'2023-09-22 13:52:06',0,NULL,NULL,NULL),(47713,'Lobeni',310,587,'2023-09-22 14:04:11',0,NULL,NULL,NULL),(47714,'Paere',929,571,'2023-09-22 14:08:29',0,NULL,NULL,NULL),(47715,'Chisuse',814,571,'2023-09-22 14:25:41',0,NULL,NULL,NULL),(47716,'Chadza',2146,324,'2023-09-22 15:33:06',0,NULL,NULL,NULL),(47717,'Matchichi',2132,324,'2023-09-23 10:36:23',0,NULL,NULL,NULL),(47718,'Muombe',350,179,'2023-09-25 08:40:13',0,NULL,NULL,NULL),(47719,'Malijani',404,587,'2023-09-25 08:49:50',0,NULL,NULL,NULL),(47720,'Sankumba',193,587,'2023-09-25 08:53:26',0,NULL,NULL,NULL),(47721,'Kulamula',171,587,'2023-09-25 08:56:49',0,NULL,NULL,NULL),(47722,'Simaiwa',2181,587,'2023-09-25 08:59:22',0,NULL,NULL,NULL),(47723,'Salamba',2182,587,'2023-09-25 09:11:32',0,NULL,NULL,NULL),(47724,'Choko',157,587,'2023-09-25 09:15:15',0,NULL,NULL,NULL),(47725,'Magombo',875,574,'2023-09-25 09:15:29',0,NULL,NULL,NULL),(47726,'Mazonda',447,587,'2023-09-25 09:18:19',0,NULL,NULL,NULL),(47727,'Mbuka',2085,271,'2023-09-25 09:25:07',0,NULL,NULL,NULL),(47728,'Kamphinda',1762,587,'2023-09-25 09:31:39',0,NULL,NULL,NULL),(47729,'Chisangu',197,584,'2023-09-25 09:33:20',0,NULL,NULL,NULL),(47730,'Nsanamira',96,574,'2023-09-25 09:39:42',0,NULL,NULL,NULL),(47731,'Kabudula',1613,587,'2023-09-25 09:43:41',0,NULL,NULL,NULL),(47732,'Velo',799,587,'2023-09-25 09:46:56',0,NULL,NULL,NULL),(47733,'Patsankhuli',397,458,'2023-09-25 09:49:46',0,NULL,NULL,NULL),(47734,'Chimwaye',198,563,'2023-09-25 09:55:30',0,NULL,NULL,NULL),(47735,'Mwayiyatsa',202,409,'2023-09-25 09:55:48',0,NULL,NULL,NULL),(47736,'Chitani',356,563,'2023-09-25 09:55:58',0,NULL,NULL,NULL),(47737,'Mthese',360,435,'2023-09-25 09:57:55',0,NULL,NULL,NULL),(47738,'Mchere',508,563,'2023-09-25 09:58:53',0,NULL,NULL,NULL),(47739,'Ackim',165,563,'2023-09-25 09:59:39',0,NULL,NULL,NULL),(47740,'Chimtumbira',179,570,'2023-09-25 10:01:45',0,NULL,NULL,NULL),(47741,'Mwase',360,587,'2023-09-25 10:01:53',0,NULL,NULL,NULL),(47742,'Chilobwe',1994,586,'2023-09-25 10:03:05',0,NULL,NULL,NULL),(47743,'Nkhale',116,409,'2023-09-25 10:04:06',0,NULL,NULL,NULL),(47744,'Chikwanule',434,409,'2023-09-25 10:05:03',0,NULL,NULL,NULL),(47745,'Wavyulu',34,435,'2023-09-25 10:18:06',0,NULL,NULL,NULL),(47746,'Makwaule',1560,564,'2023-09-25 10:24:18',0,NULL,NULL,NULL),(47747,'Mtisunge',115,586,'2023-09-25 10:26:30',0,NULL,NULL,NULL),(47748,'Manyolo',2185,270,'2023-09-25 10:32:33',0,NULL,NULL,NULL),(47749,'Mitengo',1819,574,'2023-09-25 10:35:07',0,NULL,NULL,NULL),(47750,'Bekisa',2186,586,'2023-09-25 10:39:36',0,NULL,NULL,NULL),(47751,'Katuli',993,586,'2023-09-25 10:50:50',0,NULL,NULL,NULL),(47752,'Nankugo',311,564,'2023-09-25 10:56:11',0,NULL,NULL,NULL),(47753,'Kaondo',2183,564,'2023-09-25 10:56:39',0,NULL,NULL,NULL),(47754,'Mchitanjiru',791,505,'2023-09-25 11:00:25',0,NULL,NULL,NULL),(47755,'Mchitanjiru',1833,505,'2023-09-25 11:00:53',0,NULL,NULL,NULL),(47756,'Chibowamwali',1903,586,'2023-09-25 11:00:58',0,NULL,NULL,NULL),(47757,'Chimbowamwali',1903,586,'2023-09-25 11:01:33',0,NULL,NULL,NULL),(47758,'Kathumba',1254,564,'2023-09-25 11:01:52',0,NULL,NULL,NULL),(47759,'Kawoleza',2188,564,'2023-09-25 11:02:44',0,NULL,NULL,NULL),(47760,'Mkanda',1005,569,'2023-09-25 11:05:25',0,NULL,NULL,NULL),(47761,'Sinosi',373,574,'2023-09-25 11:17:59',0,NULL,NULL,NULL),(47762,'Songwe',761,435,'2023-09-25 11:21:02',0,NULL,NULL,NULL),(47763,'Mwaliwondo',2190,586,'2023-09-25 11:22:11',0,NULL,NULL,NULL),(47764,'Mabuka',2191,409,'2023-09-25 11:24:26',0,NULL,NULL,NULL),(47765,'Unknown',310,586,'2023-09-25 11:28:37',0,NULL,NULL,NULL),(47766,'Mwase',743,586,'2023-09-25 11:29:09',0,NULL,NULL,NULL),(47767,'Jimu',168,587,'2023-09-25 11:29:20',0,NULL,NULL,NULL),(47768,'Muwiza',1711,409,'2023-09-25 11:30:59',0,NULL,NULL,NULL),(47769,'Mauzu',1921,586,'2023-09-25 11:33:17',0,NULL,NULL,NULL),(47770,'Chisapo',2192,586,'2023-09-25 11:33:56',0,NULL,NULL,NULL),(47771,'Ndaje',853,587,'2023-09-25 11:40:04',0,NULL,NULL,NULL),(47772,'Ndadzadala',396,583,'2023-09-25 11:40:26',0,NULL,NULL,NULL),(47773,'Nkhwani',2038,586,'2023-09-25 11:48:19',0,NULL,NULL,NULL),(47774,'Moses',351,573,'2023-09-25 11:49:09',0,NULL,NULL,NULL),(47775,'Chidule',843,575,'2023-09-25 11:55:01',0,NULL,NULL,NULL),(47776,'Bango',2193,586,'2023-09-25 11:56:44',0,NULL,NULL,NULL),(47777,'Chindikiti',2194,575,'2023-09-25 11:58:02',0,NULL,NULL,NULL),(47778,'Mkalibwe',27,586,'2023-09-25 12:00:12',0,NULL,NULL,NULL),(47779,'Tomali',475,573,'2023-09-25 12:02:05',0,NULL,NULL,NULL),(47780,'Luka',1996,270,'2023-09-25 12:07:43',0,NULL,NULL,NULL),(47781,'Kumtanja',264,582,'2023-09-25 12:11:38',0,NULL,NULL,NULL),(47782,'Milamba',116,582,'2023-09-25 12:19:37',0,NULL,NULL,NULL),(47783,'Kapesi',653,575,'2023-09-25 12:20:17',0,NULL,NULL,NULL),(47784,'Pilutu',1143,582,'2023-09-25 12:26:44',0,NULL,NULL,NULL),(47785,'Kazombo',982,284,'2023-09-25 12:45:29',0,NULL,NULL,NULL),(47786,'Area22',1388,374,'2023-09-25 13:00:32',0,NULL,NULL,NULL),(47787,'Falls',2195,458,'2023-09-25 13:32:17',0,NULL,NULL,NULL),(47788,'Chithira',1060,458,'2023-09-25 13:37:13',0,NULL,NULL,NULL),(47789,'Chilobwe',2096,284,'2023-09-25 13:44:33',0,NULL,NULL,NULL),(47790,'Galeta',1211,458,'2023-09-25 13:51:40',0,NULL,NULL,NULL),(47791,'Nthunga',397,458,'2023-09-25 13:55:10',0,NULL,NULL,NULL),(47792,'Unknown',2072,458,'2023-09-25 13:58:14',0,NULL,NULL,NULL),(47793,'Nayipi',1052,284,'2023-09-25 14:20:30',0,NULL,NULL,NULL),(47794,'Unknown',2197,435,'2023-09-25 15:23:50',0,NULL,NULL,NULL),(47795,'Mandala',632,435,'2023-09-26 08:09:51',0,NULL,NULL,NULL),(47796,'Malula',589,435,'2023-09-26 08:55:50',0,NULL,NULL,NULL),(47797,'There',1371,570,'2023-09-26 09:01:20',0,NULL,NULL,NULL),(47798,'Kaluma',206,573,'2023-09-26 09:03:22',0,NULL,NULL,NULL),(47799,'Kaondo',2085,374,'2023-09-26 09:11:35',0,NULL,NULL,NULL),(47800,'Kaphiri',397,573,'2023-09-26 09:12:32',0,NULL,NULL,NULL),(47801,'Katontha',2126,568,'2023-09-26 09:17:01',0,NULL,NULL,NULL),(47802,'Area 36',2086,284,'2023-09-26 09:17:32',0,NULL,NULL,NULL),(47803,'Nandolo',298,568,'2023-09-26 09:23:49',0,NULL,NULL,NULL),(47804,'Chinkhota',93,573,'2023-09-26 09:25:29',0,NULL,NULL,NULL),(47805,'Lije',341,385,'2023-09-26 09:27:30',0,NULL,NULL,NULL),(47806,'Lijela',341,385,'2023-09-26 09:27:41',0,NULL,NULL,NULL),(47807,'Tholo',375,385,'2023-09-26 09:28:26',0,NULL,NULL,NULL),(47808,'Kapana',378,435,'2023-09-26 09:29:53',0,NULL,NULL,NULL),(47809,'Kambalame',2198,573,'2023-09-26 09:32:12',0,NULL,NULL,NULL),(47810,'Laundi',224,568,'2023-09-26 09:32:23',0,NULL,NULL,NULL),(47811,'Bango',1425,583,'2023-09-26 09:39:48',0,NULL,NULL,NULL),(47812,'Chiphaka',424,568,'2023-09-26 09:41:50',0,NULL,NULL,NULL),(47813,'Chphaka',424,568,'2023-09-26 09:42:27',0,NULL,NULL,NULL),(47814,'Tsabango',769,583,'2023-09-26 09:48:02',0,NULL,NULL,NULL),(47815,'Katengeza',114,571,'2023-09-26 09:52:48',0,NULL,NULL,NULL),(47816,'Chenguwo',311,179,'2023-09-26 09:57:06',0,NULL,NULL,NULL),(47817,'Chisoso',1762,571,'2023-09-26 09:59:14',0,NULL,NULL,NULL),(47818,'CHISOSO',1762,571,'2023-09-26 09:59:15',0,NULL,NULL,NULL),(47819,'Kachidutsi',356,563,'2023-09-26 10:00:52',0,NULL,NULL,NULL),(47820,'Liwonde',406,435,'2023-09-26 10:01:15',0,NULL,NULL,NULL),(47825,'Nkula',231,179,'2023-09-26 10:15:36',0,NULL,NULL,NULL),(47826,'Milion',354,435,'2023-09-26 10:23:32',0,NULL,NULL,NULL),(47827,'Mbuna',1038,574,'2023-09-26 10:29:16',0,NULL,NULL,NULL),(47828,'Mkaika',1022,571,'2023-09-26 10:33:22',0,NULL,NULL,NULL),(47829,'Maliwa',734,179,'2023-09-26 10:43:20',0,NULL,NULL,NULL),(47830,'Mbembeza',353,571,'2023-09-26 10:52:56',0,NULL,NULL,NULL),(47831,'Kang\'oma',404,571,'2023-09-26 10:57:06',0,NULL,NULL,NULL),(47832,'Chalendewa',1176,563,'2023-09-26 11:00:30',0,NULL,NULL,NULL),(47833,'Area 49',174,571,'2023-09-26 11:04:48',0,NULL,NULL,NULL),(47834,'Kasese',360,573,'2023-09-26 11:13:05',0,NULL,NULL,NULL),(47835,'Zembani',113,571,'2023-09-26 11:14:15',0,NULL,NULL,NULL),(47836,'Khombi',2202,575,'2023-09-26 11:16:36',0,NULL,NULL,NULL),(47837,'Phunduma',618,573,'2023-09-26 11:23:26',0,NULL,NULL,NULL),(47838,'Chinamwela',1322,571,'2023-09-26 11:26:44',0,NULL,NULL,NULL),(47839,'Dauya',190,574,'2023-09-26 11:29:17',0,NULL,NULL,NULL),(47840,'Nkhalamba',2203,570,'2023-09-26 11:40:33',0,NULL,NULL,NULL),(47841,'Kalibonge',585,569,'2023-09-26 11:41:49',0,NULL,NULL,NULL),(47842,'Kalibonge',585,569,'2023-09-26 11:41:56',0,NULL,NULL,NULL),(47843,'Chisapo2',1693,570,'2023-09-26 11:43:12',0,NULL,NULL,NULL),(47844,'Chinguwo',2204,435,'2023-09-26 11:43:37',0,NULL,NULL,NULL),(47845,'Funachina',89,575,'2023-09-26 11:44:04',0,NULL,NULL,NULL),(47846,'Majo',2205,570,'2023-09-26 11:48:06',0,NULL,NULL,NULL),(47847,'Palamuleni',754,571,'2023-09-26 11:48:54',0,NULL,NULL,NULL),(47848,'Nthenga',103,573,'2023-09-26 11:53:05',0,NULL,NULL,NULL),(47849,'Nyondo',192,573,'2023-09-26 12:00:06',0,NULL,NULL,NULL),(47850,'Nyondo',192,573,'2023-09-26 12:00:13',0,NULL,NULL,NULL),(47851,'Kalumbu',1788,385,'2023-09-26 12:03:53',0,NULL,NULL,NULL),(47852,'Area23',770,570,'2023-09-26 12:04:52',0,NULL,NULL,NULL),(47853,'Buluzi',523,574,'2023-09-26 12:05:05',0,NULL,NULL,NULL),(47854,'Mkangala',2206,575,'2023-09-26 12:05:52',0,NULL,NULL,NULL),(47855,'Area49',1032,575,'2023-09-26 12:06:16',0,NULL,NULL,NULL),(47856,'Kabondo',165,563,'2023-09-26 12:07:02',0,NULL,NULL,NULL),(47857,'Jaenda',1322,570,'2023-09-26 12:08:15',0,NULL,NULL,NULL),(47858,'Chiwoza',776,575,'2023-09-26 12:09:33',0,NULL,NULL,NULL),(47859,'Chioza',776,575,'2023-09-26 12:09:52',0,NULL,NULL,NULL),(47860,'Tembenu',883,435,'2023-09-26 12:12:41',0,NULL,NULL,NULL),(47861,'Ndili',1762,575,'2023-09-26 12:12:52',0,NULL,NULL,NULL),(47862,'Chibambo',2207,573,'2023-09-26 12:13:14',0,NULL,NULL,NULL),(47863,'Sulila',232,575,'2023-09-26 12:17:57',0,NULL,NULL,NULL),(47864,'Nsenje',397,573,'2023-09-26 12:19:40',0,NULL,NULL,NULL),(47865,'Mwapemba',591,570,'2023-09-26 12:20:11',0,NULL,NULL,NULL),(47866,'Mulauzi',351,570,'2023-09-26 12:20:43',0,NULL,NULL,NULL),(47867,'Mwakhumbi',360,574,'2023-09-26 13:30:32',0,NULL,NULL,NULL),(47868,'Nembele',232,574,'2023-09-26 13:39:54',0,NULL,NULL,NULL),(47869,'Chisapo',835,574,'2023-09-26 13:40:28',0,NULL,NULL,NULL),(47870,'Mchesi',770,562,'2023-09-26 13:44:06',0,NULL,NULL,NULL),(47871,'Kamanya',192,562,'2023-09-26 14:20:14',0,NULL,NULL,NULL),(47872,'Chawatha',1032,572,'2023-09-26 14:39:02',0,NULL,NULL,NULL),(47873,'Zankutu',2085,324,'2023-09-27 07:51:03',0,NULL,NULL,NULL),(47874,'Nyangu',2210,435,'2023-09-27 08:07:00',0,NULL,NULL,NULL),(47875,'Ndumila',1038,435,'2023-09-27 08:29:49',0,NULL,NULL,NULL),(47876,'Mgalima',2211,582,'2023-09-27 09:02:12',0,NULL,NULL,NULL),(47877,'Kapichi',993,582,'2023-09-27 09:08:16',0,NULL,NULL,NULL),(47881,'Mwenje',1392,409,'2023-09-27 09:14:42',0,NULL,NULL,NULL),(47882,'Mwenje',1392,409,'2023-09-27 09:14:42',0,NULL,NULL,NULL),(47883,'Mvululo',648,409,'2023-09-27 09:25:39',0,NULL,NULL,NULL),(47884,'MVULULO',648,409,'2023-09-27 09:25:43',0,NULL,NULL,NULL),(47885,'Komba',2213,568,'2023-09-27 09:32:31',0,NULL,NULL,NULL),(47886,'Mwambimbi',1762,583,'2023-09-27 10:07:18',0,NULL,NULL,NULL),(47887,'Chatsika',769,583,'2023-09-27 10:07:49',0,NULL,NULL,NULL),(47888,'Misanje',225,458,'2023-09-27 10:10:59',0,NULL,NULL,NULL),(47889,'Chithumba',1752,583,'2023-09-27 10:17:25',0,NULL,NULL,NULL),(47890,'Area2',1800,583,'2023-09-27 10:18:13',0,NULL,NULL,NULL),(47891,'Mban\'gombe',404,179,'2023-09-27 10:18:46',0,NULL,NULL,NULL),(47892,'Mlanga',234,179,'2023-09-27 10:52:23',0,NULL,NULL,NULL),(47893,'Mazoni',165,435,'2023-09-27 12:59:43',0,NULL,NULL,NULL),(47894,'Balaza',1651,435,'2023-09-27 13:03:47',0,NULL,NULL,NULL),(47895,'Chintheche',19,284,'2023-09-27 13:36:16',0,NULL,NULL,NULL),(47896,'Unknown',1874,284,'2023-09-27 13:40:11',0,NULL,NULL,NULL),(47897,'Mbewe',875,365,'2023-09-27 13:53:40',0,NULL,NULL,NULL),(47898,'Langisoni',391,572,'2023-09-27 15:07:54',0,NULL,NULL,NULL),(47899,'Makota',82,365,'2023-09-27 17:37:53',0,NULL,NULL,NULL),(47900,'Mzumazi',501,324,'2023-09-28 07:20:50',0,NULL,NULL,NULL),(47901,'Makhasha',1752,179,'2023-09-28 07:24:17',0,NULL,NULL,NULL),(47902,'Zidyana',736,324,'2023-09-28 08:26:55',0,NULL,NULL,NULL),(47903,'Mchacha',2214,573,'2023-09-28 08:59:00',0,NULL,NULL,NULL),(47904,'Kunyinda',474,435,'2023-09-28 09:07:51',0,NULL,NULL,NULL),(47905,'Chakwawa',189,570,'2023-09-28 09:10:53',0,NULL,NULL,NULL),(47906,'Kanjila',404,568,'2023-09-28 09:11:01',0,NULL,NULL,NULL),(47907,'Chaphazi',113,570,'2023-09-28 09:11:38',0,NULL,NULL,NULL),(47908,'Kumbakamwa',1967,575,'2023-09-28 09:12:36',0,NULL,NULL,NULL),(47909,'Mazengela',2215,568,'2023-09-28 09:15:52',0,NULL,NULL,NULL),(47910,'Chikaola',433,575,'2023-09-28 09:16:57',0,NULL,NULL,NULL),(47911,'Chimdima',1060,587,'2023-09-28 09:18:17',0,NULL,NULL,NULL),(47912,'Sinkhukuza',404,573,'2023-09-28 09:18:43',0,NULL,NULL,NULL),(47913,'Mwenechilanga',2216,568,'2023-09-28 09:22:58',0,NULL,NULL,NULL),(47914,'Kapite',211,570,'2023-09-28 09:27:02',0,NULL,NULL,NULL),(47915,'Siinda',482,587,'2023-09-28 09:30:28',0,NULL,NULL,NULL),(47916,'Kapiti',211,573,'2023-09-28 09:31:22',0,NULL,NULL,NULL),(47917,'Jacob',13,586,'2023-09-28 09:34:09',0,NULL,NULL,NULL),(47918,'Changadeya',591,587,'2023-09-28 09:37:59',0,NULL,NULL,NULL),(47919,'Chingaza',482,587,'2023-09-28 09:41:34',0,NULL,NULL,NULL),(47920,'Namadidi',814,586,'2023-09-28 09:42:10',0,NULL,NULL,NULL),(47921,'Katundu',1903,586,'2023-09-28 09:43:03',0,NULL,NULL,NULL),(47922,'Mlamba',2217,586,'2023-09-28 09:50:30',0,NULL,NULL,NULL),(47923,'Madzi',482,587,'2023-09-28 10:13:21',0,NULL,NULL,NULL),(47924,'Chindausi',342,586,'2023-09-28 10:24:57',0,NULL,NULL,NULL),(47925,'Kaole',1933,586,'2023-09-28 10:25:51',0,NULL,NULL,NULL),(47926,'Chimwaza',569,435,'2023-09-28 10:30:53',0,NULL,NULL,NULL),(47927,'Mponya',490,324,'2023-09-28 10:55:27',0,NULL,NULL,NULL),(47928,'Chipse',2218,586,'2023-09-28 10:57:32',0,NULL,NULL,NULL),(47929,'Chokapayere',2086,430,'2023-09-28 10:59:01',0,NULL,NULL,NULL),(47930,'Chipasula',770,573,'2023-09-28 11:05:08',0,NULL,NULL,NULL),(47931,'Kambale',2219,586,'2023-09-28 11:10:11',0,NULL,NULL,NULL),(47932,'Chankhoma',1933,586,'2023-09-28 11:11:15',0,NULL,NULL,NULL),(47933,'Amidu',886,435,'2023-09-28 11:14:02',0,NULL,NULL,NULL),(47934,'Msomo',327,573,'2023-09-28 11:20:14',0,NULL,NULL,NULL),(47935,'Chikwela',370,584,'2023-09-28 11:23:59',0,NULL,NULL,NULL),(47936,'Chipatula',447,573,'2023-09-28 11:28:49',0,NULL,NULL,NULL),(47937,'Chizongwe',1425,573,'2023-09-28 11:32:42',0,NULL,NULL,NULL),(47938,'Chisapo1',1693,573,'2023-09-28 11:33:40',0,NULL,NULL,NULL),(47939,'Pelete',360,584,'2023-09-28 11:35:42',0,NULL,NULL,NULL),(47940,'Gomba',180,573,'2023-09-28 11:36:50',0,NULL,NULL,NULL),(47941,'Chaphutula',360,584,'2023-09-28 11:42:14',0,NULL,NULL,NULL),(47942,'Tsabango',743,573,'2023-09-28 11:42:33',0,NULL,NULL,NULL),(47943,'Kaphiri',1800,573,'2023-09-28 11:50:32',0,NULL,NULL,NULL),(47944,'Mpalume',443,584,'2023-09-28 11:53:05',0,NULL,NULL,NULL),(47945,'Siliza',1800,573,'2023-09-28 11:54:31',0,NULL,NULL,NULL),(47946,'Khanga',1762,584,'2023-09-28 11:58:21',0,NULL,NULL,NULL),(47947,'Chikudo',591,435,'2023-09-28 12:00:01',0,NULL,NULL,NULL),(47948,'Majiga',20,435,'2023-09-28 12:09:26',0,NULL,NULL,NULL),(47949,'Chankhandwe',176,435,'2023-09-28 12:48:46',0,NULL,NULL,NULL),(47950,'Nanthengwa',985,458,'2023-09-28 14:17:28',0,NULL,NULL,NULL),(47951,'Chikhwaya',985,458,'2023-09-28 14:21:33',0,NULL,NULL,NULL),(47952,'Khuguwe',298,179,'2023-09-29 07:04:12',0,NULL,NULL,NULL),(47953,'Unknown',737,586,'2023-09-29 09:02:06',0,NULL,NULL,NULL),(47954,'Chinangwa',1933,586,'2023-09-29 09:02:54',0,NULL,NULL,NULL),(47955,'Kaphojola',299,584,'2023-09-29 09:10:29',0,NULL,NULL,NULL),(47956,'Dauya',2050,430,'2023-09-29 09:14:26',0,NULL,NULL,NULL),(47957,'Amudzu',1032,584,'2023-09-29 09:22:59',0,NULL,NULL,NULL),(47958,'Chekika',224,563,'2023-09-29 09:23:25',0,NULL,NULL,NULL),(47959,'Makhalira',2226,563,'2023-09-29 09:24:00',0,NULL,NULL,NULL),(47960,'Kadembo',360,584,'2023-09-29 09:28:51',0,NULL,NULL,NULL),(47961,'Napinga',478,584,'2023-09-29 09:32:33',0,NULL,NULL,NULL),(47962,'Mchepa',404,575,'2023-09-29 09:35:02',0,NULL,NULL,NULL),(47963,'Edward',2227,584,'2023-09-29 09:36:55',0,NULL,NULL,NULL),(47964,'Velu',591,587,'2023-09-29 09:53:13',0,NULL,NULL,NULL),(47965,'Maoni',205,584,'2023-09-29 09:53:15',0,NULL,NULL,NULL),(47966,'Mtunji',212,584,'2023-09-29 09:56:30',0,NULL,NULL,NULL),(47967,'Area21',776,584,'2023-09-29 09:56:55',0,NULL,NULL,NULL),(47968,'Mdyapasi',1762,583,'2023-09-29 10:01:09',0,NULL,NULL,NULL),(47969,'Kuzinda',116,584,'2023-09-29 10:06:33',0,NULL,NULL,NULL),(47970,'Yohane',439,584,'2023-09-29 10:07:35',0,NULL,NULL,NULL),(47971,'Kusanya',2228,583,'2023-09-29 10:09:18',0,NULL,NULL,NULL),(47972,'Kaphiri',1434,583,'2023-09-29 10:09:56',0,NULL,NULL,NULL),(47973,'Mtandire',1787,584,'2023-09-29 10:16:43',0,NULL,NULL,NULL),(47974,'Kowera',254,179,'2023-09-29 10:53:09',0,NULL,NULL,NULL),(47975,'Area45',370,584,'2023-09-29 10:57:45',0,NULL,NULL,NULL),(47976,'Kunomba',113,575,'2023-09-29 11:25:53',0,NULL,NULL,NULL),(47977,'Unknown',1665,435,'2023-09-29 11:27:30',0,NULL,NULL,NULL),(47978,'Kuchipande',360,584,'2023-09-29 11:29:20',0,NULL,NULL,NULL),(47979,'Chiluzu',192,584,'2023-09-29 11:38:00',0,NULL,NULL,NULL),(47980,'Mdele',2229,584,'2023-09-29 11:43:15',0,NULL,NULL,NULL),(47981,'Abuzili',509,584,'2023-09-29 11:47:23',0,NULL,NULL,NULL),(47982,'Kambuladye',2230,584,'2023-09-29 11:56:30',0,NULL,NULL,NULL),(47983,'Kaundu',391,584,'2023-09-29 12:11:32',0,NULL,NULL,NULL),(47984,'Senjere',208,575,'2023-09-29 12:16:09',0,NULL,NULL,NULL),(47985,'Chitondo',261,584,'2023-09-29 12:18:40',0,NULL,NULL,NULL),(47986,'Lifuwu',591,435,'2023-09-29 12:42:31',0,NULL,NULL,NULL),(47987,'Chaphepete',356,435,'2023-09-29 12:43:02',0,NULL,NULL,NULL),(47988,'John',2231,365,'2023-09-29 15:10:16',0,NULL,NULL,NULL),(47989,'Mkazomba',354,365,'2023-10-02 09:23:49',0,NULL,NULL,NULL),(47990,'Chemusa',1900,365,'2023-10-02 09:33:49',0,NULL,NULL,NULL),(47991,'Lidia',1009,365,'2023-10-02 09:46:24',0,NULL,NULL,NULL),(47992,'Mpachika',466,385,'2023-10-02 10:16:21',0,NULL,NULL,NULL),(47993,'Area 47',123,385,'2023-10-02 10:23:24',0,NULL,NULL,NULL),(47994,'Mwangwela',9,385,'2023-10-02 10:34:12',0,NULL,NULL,NULL),(47995,'6 miles',356,385,'2023-10-02 10:39:38',0,NULL,NULL,NULL),(47996,'Milala',1297,435,'2023-10-02 10:50:19',0,NULL,NULL,NULL),(47997,'Bowa',498,574,'2023-10-02 11:24:52',0,NULL,NULL,NULL),(47998,'Mbenje',1898,385,'2023-10-02 11:56:48',0,NULL,NULL,NULL),(48002,'Mtonda',1101,570,'2023-10-02 12:13:04',0,NULL,NULL,NULL),(48003,'Mthiko',482,94,'2023-10-02 12:14:16',0,NULL,NULL,NULL),(48004,'Mwasangu',436,435,'2023-10-02 12:37:21',0,NULL,NULL,NULL),(48005,'Area 46',569,571,'2023-10-02 13:00:17',0,NULL,NULL,NULL),(48006,'Nkhoma',1762,571,'2023-10-02 13:17:57',0,NULL,NULL,NULL),(48007,'Kaphiri',569,571,'2023-10-02 13:43:33',0,NULL,NULL,NULL),(48008,'Chamverema',1209,575,'2023-10-02 13:56:44',0,NULL,NULL,NULL),(48009,'Yazuza',585,571,'2023-10-02 14:13:57',0,NULL,NULL,NULL),(48010,'Chayamba',90,270,'2023-10-02 15:13:30',0,NULL,NULL,NULL),(48011,'Makhwala',219,94,'2023-10-03 08:23:00',0,NULL,NULL,NULL),(48012,'Unknown',782,435,'2023-10-03 08:57:50',0,NULL,NULL,NULL),(48013,'Ngolowola',391,570,'2023-10-03 09:34:41',0,NULL,NULL,NULL),(48014,'Kombeta',1693,570,'2023-10-03 09:40:14',0,NULL,NULL,NULL),(48015,'Kwambeta',1693,570,'2023-10-03 09:40:55',0,NULL,NULL,NULL),(48016,'Thunya',993,435,'2023-10-03 09:42:49',0,NULL,NULL,NULL),(48017,'Robertson',814,570,'2023-10-03 09:47:20',0,NULL,NULL,NULL),(48018,'Nenula',1825,570,'2023-10-03 09:52:25',0,NULL,NULL,NULL),(48019,'Bodzole',589,586,'2023-10-03 09:57:46',0,NULL,NULL,NULL),(48020,'Kaondo',1933,586,'2023-10-03 09:58:16',0,NULL,NULL,NULL),(48021,'Unknown',255,458,'2023-10-03 09:59:20',0,NULL,NULL,NULL),(48022,'Chalaswa',1752,586,'2023-10-03 10:06:13',0,NULL,NULL,NULL),(48023,'Mdumbu',742,570,'2023-10-03 10:06:15',0,NULL,NULL,NULL),(48024,'Mphere',1795,582,'2023-10-03 10:06:30',0,NULL,NULL,NULL),(48025,'Kakhomba',1392,458,'2023-10-03 10:07:39',0,NULL,NULL,NULL),(48026,'Chafela',183,94,'2023-10-03 10:09:08',0,NULL,NULL,NULL),(48027,'Phwetekere',353,583,'2023-10-03 10:14:24',0,NULL,NULL,NULL),(48028,'Miyenda',199,586,'2023-10-03 10:14:50',0,NULL,NULL,NULL),(48029,'Njewa',629,579,'2023-10-03 10:14:59',0,NULL,NULL,NULL),(48030,'Chilutsi',365,575,'2023-10-03 10:15:32',0,NULL,NULL,NULL),(48031,'Chebauti',189,458,'2023-10-03 10:19:17',0,NULL,NULL,NULL),(48032,'Mwalala',1762,94,'2023-10-03 10:19:36',0,NULL,NULL,NULL),(48033,'Tonny maizemill',413,94,'2023-10-03 10:20:20',0,NULL,NULL,NULL),(48034,'Kapesi',1530,575,'2023-10-03 10:31:20',0,NULL,NULL,NULL),(48035,'Msampha',1762,575,'2023-10-03 10:37:58',0,NULL,NULL,NULL),(48036,'Maunde',2238,458,'2023-10-03 10:40:53',0,NULL,NULL,NULL),(48037,'Mkwelera',1693,570,'2023-10-03 10:43:42',0,NULL,NULL,NULL),(48038,'Mpokutula',2239,585,'2023-10-03 10:51:28',0,NULL,NULL,NULL),(48039,'Mulola',310,574,'2023-10-03 11:00:07',0,NULL,NULL,NULL),(48040,'Njobvu',431,575,'2023-10-03 11:08:19',0,NULL,NULL,NULL),(48041,'Mtuweni',1763,570,'2023-10-03 11:19:08',0,NULL,NULL,NULL),(48042,'Area22',770,570,'2023-10-03 11:20:08',0,NULL,NULL,NULL),(48043,'Baghdad',1725,574,'2023-10-03 11:26:33',0,NULL,NULL,NULL),(48044,'Kadzuwa',1643,575,'2023-10-03 11:26:52',0,NULL,NULL,NULL),(48045,'Mbonekera',2039,435,'2023-10-03 11:27:24',0,NULL,NULL,NULL),(48046,'Patola',189,570,'2023-10-03 11:37:12',0,NULL,NULL,NULL),(48047,'Manyamula',585,570,'2023-10-03 11:45:55',0,NULL,NULL,NULL),(48048,'Area49',1800,570,'2023-10-03 11:46:28',0,NULL,NULL,NULL),(48049,'Mazengera',360,409,'2023-10-03 11:47:24',0,NULL,NULL,NULL),(48050,'Kandiuze',2240,584,'2023-10-03 11:50:08',0,NULL,NULL,NULL),(48051,'Kawoma',404,570,'2023-10-03 11:55:49',0,NULL,NULL,NULL),(48052,'A33',1388,409,'2023-10-03 11:59:16',0,NULL,NULL,NULL),(48053,'A33',1388,409,'2023-10-03 11:59:28',0,NULL,NULL,NULL),(48054,'Kachila',187,584,'2023-10-03 12:02:00',0,NULL,NULL,NULL),(48055,'A30',2077,409,'2023-10-03 12:02:57',0,NULL,NULL,NULL),(48056,'Malekanu',1693,570,'2023-10-03 12:04:08',0,NULL,NULL,NULL),(48057,'Kawiri',2245,584,'2023-10-03 12:10:25',0,NULL,NULL,NULL),(48058,'Kaphaka',116,409,'2023-10-03 12:11:00',0,NULL,NULL,NULL),(48059,'Chibwana',104,574,'2023-10-03 12:41:53',0,NULL,NULL,NULL),(48060,'Chenga',678,570,'2023-10-03 12:44:30',0,NULL,NULL,NULL),(48061,'Makalaundi',310,329,'2023-10-03 14:26:15',0,NULL,NULL,NULL),(48062,'Chayanika',261,270,'2023-10-03 14:35:14',0,NULL,NULL,NULL),(48063,'Kaipa',397,571,'2023-10-03 14:51:17',0,NULL,NULL,NULL),(48064,'Area21',356,571,'2023-10-03 14:52:19',0,NULL,NULL,NULL),(48065,'Makuluni',1793,571,'2023-10-03 14:55:42',0,NULL,NULL,NULL),(48066,'Sandibwa',2246,365,'2023-10-04 08:50:33',0,NULL,NULL,NULL),(48067,'Unknown',304,435,'2023-10-04 09:01:43',0,NULL,NULL,NULL),(48068,'Chigodi',200,582,'2023-10-04 09:09:31',0,NULL,NULL,NULL),(48069,'Matsimbe',2247,584,'2023-10-04 09:35:58',0,NULL,NULL,NULL),(48070,'Unknown',94,586,'2023-10-04 09:40:12',0,NULL,NULL,NULL),(48071,'Mkoko',2248,584,'2023-10-04 09:40:37',0,NULL,NULL,NULL),(48072,'Beta',1933,586,'2023-10-04 09:40:56',0,NULL,NULL,NULL),(48073,'Dalamponda',734,409,'2023-10-04 09:42:57',0,NULL,NULL,NULL),(48074,'Asomo',221,586,'2023-10-04 09:44:38',0,NULL,NULL,NULL),(48075,'Saiwa',202,584,'2023-10-04 09:44:50',0,NULL,NULL,NULL),(48076,'Mtondo',351,583,'2023-10-04 09:47:30',0,NULL,NULL,NULL),(48077,'Chamusi',776,435,'2023-10-04 09:48:44',0,NULL,NULL,NULL),(48078,'Chibwana',177,435,'2023-10-04 09:49:25',0,NULL,NULL,NULL),(48079,'Chaluta',351,586,'2023-10-04 10:01:39',0,NULL,NULL,NULL),(48080,'Yendayenda',199,586,'2023-10-04 10:06:11',0,NULL,NULL,NULL),(48081,'Lewu',193,570,'2023-10-04 10:07:59',0,NULL,NULL,NULL),(48082,'Mtungambela',1903,586,'2023-10-04 10:12:29',0,NULL,NULL,NULL),(48083,'Mundundu',74,435,'2023-10-04 10:30:40',0,NULL,NULL,NULL),(48084,'Manombe',370,586,'2023-10-04 10:31:35',0,NULL,NULL,NULL),(48085,'Goliati',2250,570,'2023-10-04 10:42:24',0,NULL,NULL,NULL),(48086,'Likuni',1693,570,'2023-10-04 10:42:47',0,NULL,NULL,NULL),(48087,'Katsache',193,584,'2023-10-04 10:47:20',0,NULL,NULL,NULL),(48088,'Kaponda',719,586,'2023-10-04 10:49:30',0,NULL,NULL,NULL),(48089,'Nkhata',1693,570,'2023-10-04 10:50:28',0,NULL,NULL,NULL),(48090,'Mwenda',623,582,'2023-10-04 10:52:41',0,NULL,NULL,NULL),(48091,'Bolongwe',411,584,'2023-10-04 10:53:41',0,NULL,NULL,NULL),(48092,'Area50',1032,584,'2023-10-04 10:54:09',0,NULL,NULL,NULL),(48093,'Bakasala',2251,570,'2023-10-04 10:56:47',0,NULL,NULL,NULL),(48094,'Kandikole',2252,570,'2023-10-04 10:57:24',0,NULL,NULL,NULL),(48095,'Tondela',369,584,'2023-10-04 10:57:55',0,NULL,NULL,NULL),(48096,'Maudzu',993,570,'2023-10-04 11:00:07',0,NULL,NULL,NULL),(48097,'Chakachadza',554,582,'2023-10-04 11:04:40',0,NULL,NULL,NULL),(48098,'Kadambo',2056,570,'2023-10-04 11:06:46',0,NULL,NULL,NULL),(48099,'Chigwiri',1693,570,'2023-10-04 11:07:09',0,NULL,NULL,NULL),(48100,'Kalumba',2253,570,'2023-10-04 11:11:56',0,NULL,NULL,NULL),(48101,'6miles',1693,570,'2023-10-04 11:12:28',0,NULL,NULL,NULL),(48102,'Area38',602,584,'2023-10-04 11:12:33',0,NULL,NULL,NULL),(48103,'Katimo',1009,584,'2023-10-04 11:16:20',0,NULL,NULL,NULL),(48104,'Kantchele',728,570,'2023-10-04 11:19:21',0,NULL,NULL,NULL),(48105,'Ganya',199,584,'2023-10-04 11:22:27',0,NULL,NULL,NULL),(48106,'Matukuta',2254,570,'2023-10-04 11:22:47',0,NULL,NULL,NULL),(48107,'Mbayisa',254,585,'2023-10-04 11:23:33',0,NULL,NULL,NULL),(48108,'Sunday',1194,570,'2023-10-04 11:26:09',0,NULL,NULL,NULL),(48109,'Mtila',227,584,'2023-10-04 11:26:11',0,NULL,NULL,NULL),(48110,'Julias',103,582,'2023-10-04 11:28:59',0,NULL,NULL,NULL),(48111,'JULIAS',103,582,'2023-10-04 11:29:07',0,NULL,NULL,NULL),(48112,'Chimowa',261,584,'2023-10-04 11:32:00',0,NULL,NULL,NULL),(48113,'Njerwa',2107,570,'2023-10-04 11:37:07',0,NULL,NULL,NULL),(48114,'Chiutula',206,575,'2023-10-04 11:53:18',0,NULL,NULL,NULL),(48115,'Mtenje',424,94,'2023-10-04 12:01:52',0,NULL,NULL,NULL),(48116,'Katora',360,435,'2023-10-04 12:19:15',0,NULL,NULL,NULL),(48117,'Master',1218,365,'2023-10-04 12:59:37',0,NULL,NULL,NULL),(48118,'Sangala',1178,585,'2023-10-04 13:09:06',0,NULL,NULL,NULL),(48119,'Liumga',193,585,'2023-10-04 13:16:22',0,NULL,NULL,NULL),(48120,'Mikayere',589,571,'2023-10-04 15:04:28',0,NULL,NULL,NULL),(48121,'Kaudzu',1178,572,'2023-10-05 09:41:18',0,NULL,NULL,NULL),(48122,'Chikhole',323,572,'2023-10-05 09:58:06',0,NULL,NULL,NULL),(48123,'Namonde',1571,584,'2023-10-05 10:00:30',0,NULL,NULL,NULL),(48124,'Nondola',360,584,'2023-10-05 10:05:37',0,NULL,NULL,NULL),(48125,'Mbinda',993,572,'2023-10-05 10:05:43',0,NULL,NULL,NULL),(48126,'Ngozi',106,584,'2023-10-05 10:09:34',0,NULL,NULL,NULL),(48127,'Chadza',1932,365,'2023-10-05 10:10:26',0,NULL,NULL,NULL),(48128,'Galang\'ombe',24,584,'2023-10-05 10:12:37',0,NULL,NULL,NULL),(48129,'Matapira',116,575,'2023-10-05 10:19:25',0,NULL,NULL,NULL),(48130,'Chisusu',2001,569,'2023-10-05 10:20:31',0,NULL,NULL,NULL),(48131,'Fukamapira',26,572,'2023-10-05 10:22:26',0,NULL,NULL,NULL),(48132,'Chikho',2219,569,'2023-10-05 10:24:34',0,NULL,NULL,NULL),(48133,'Chibagala',259,569,'2023-10-05 10:46:00',0,NULL,NULL,NULL),(48134,'Chibagala',259,569,'2023-10-05 10:46:00',0,NULL,NULL,NULL),(48135,'Kulemeka',186,569,'2023-10-05 11:00:14',0,NULL,NULL,NULL),(48136,'Mngongonda',351,409,'2023-10-05 11:04:41',0,NULL,NULL,NULL),(48137,'Chiweza',770,569,'2023-10-05 11:10:36',0,NULL,NULL,NULL),(48138,'Manjono',2046,569,'2023-10-05 11:13:24',0,NULL,NULL,NULL),(48139,'Mitole',1795,435,'2023-10-05 11:18:09',0,NULL,NULL,NULL),(48140,'Nasadi',299,569,'2023-10-05 11:21:12',0,NULL,NULL,NULL),(48141,'Mwambuli',2255,570,'2023-10-05 11:27:56',0,NULL,NULL,NULL),(48142,'Gwenyenga',199,435,'2023-10-05 11:28:50',0,NULL,NULL,NULL),(48143,'Dulani',314,584,'2023-10-05 11:36:54',0,NULL,NULL,NULL),(48144,'Mwalukayi',9,585,'2023-10-05 11:37:36',0,NULL,NULL,NULL),(48145,'Kositenala',591,570,'2023-10-05 11:39:13',0,NULL,NULL,NULL),(48146,'Njerwa',482,570,'2023-10-05 11:39:38',0,NULL,NULL,NULL),(48147,'Mwerangombe',9,585,'2023-10-05 11:41:43',0,NULL,NULL,NULL),(48148,'Simokela',113,570,'2023-10-05 11:44:30',0,NULL,NULL,NULL),(48149,'Area36',2256,570,'2023-10-05 11:45:32',0,NULL,NULL,NULL),(48150,'Jonatani',193,584,'2023-10-05 11:48:48',0,NULL,NULL,NULL),(48151,'Ndazadala',1634,584,'2023-10-05 11:52:40',0,NULL,NULL,NULL),(48152,'Mero',93,570,'2023-10-05 11:53:35',0,NULL,NULL,NULL),(48153,'Chirimba',265,409,'2023-10-05 11:54:39',0,NULL,NULL,NULL),(48154,'Veru',591,579,'2023-10-05 11:55:24',0,NULL,NULL,NULL),(48155,'Jombo',208,585,'2023-10-05 11:55:33',0,NULL,NULL,NULL),(48156,'Kapito',572,584,'2023-10-05 11:56:20',0,NULL,NULL,NULL),(48157,'Katantha',2257,579,'2023-10-05 11:56:54',0,NULL,NULL,NULL),(48158,'Kandusu',2258,570,'2023-10-05 11:57:16',0,NULL,NULL,NULL),(48159,'Chiphedzu',360,570,'2023-10-05 12:01:09',0,NULL,NULL,NULL),(48160,'Motola',982,584,'2023-10-05 12:04:03',0,NULL,NULL,NULL),(48161,'Area44',776,584,'2023-10-05 12:04:33',0,NULL,NULL,NULL),(48162,'Kakhomba',1033,584,'2023-10-05 12:08:34',0,NULL,NULL,NULL),(48163,'Masanji',2260,409,'2023-10-05 12:09:52',0,NULL,NULL,NULL),(48164,'Area10',404,570,'2023-10-05 12:11:16',0,NULL,NULL,NULL),(48165,'Mwaganda',2216,579,'2023-10-05 12:12:09',0,NULL,NULL,NULL),(48166,'Chiyembe',404,585,'2023-10-05 12:14:40',0,NULL,NULL,NULL),(48167,'Munyehele',2261,570,'2023-10-05 12:15:53',0,NULL,NULL,NULL),(48168,'Zembera',105,584,'2023-10-05 12:18:05',0,NULL,NULL,NULL),(48169,'Kazembe',107,579,'2023-10-05 12:19:57',0,NULL,NULL,NULL),(48170,'Area47',835,385,'2023-10-05 12:21:37',0,NULL,NULL,NULL),(48171,'Phambaya',502,435,'2023-10-05 12:28:06',0,NULL,NULL,NULL),(48172,'Chalama',368,570,'2023-10-05 12:28:53',0,NULL,NULL,NULL),(48173,'Liwera',119,409,'2023-10-05 12:30:17',0,NULL,NULL,NULL),(48174,'Masapi',2264,579,'2023-10-05 12:31:44',0,NULL,NULL,NULL),(48175,'Lusekero',2216,570,'2023-10-05 12:33:08',0,NULL,NULL,NULL),(48176,'Area46',776,584,'2023-10-05 12:36:15',0,NULL,NULL,NULL),(48177,'Chiwoko',776,579,'2023-10-05 12:40:46',0,NULL,NULL,NULL),(48178,'Chipasula',174,570,'2023-10-05 12:40:53',0,NULL,NULL,NULL),(48179,'Kameta',1664,584,'2023-10-05 12:41:01',0,NULL,NULL,NULL),(48180,'Maliwo',1483,385,'2023-10-05 12:44:02',0,NULL,NULL,NULL),(48181,'Amkomba',589,584,'2023-10-05 12:50:39',0,NULL,NULL,NULL),(48182,'Kutama',324,435,'2023-10-05 12:50:45',0,NULL,NULL,NULL),(48183,'Unknown',180,284,'2023-10-05 12:56:21',0,NULL,NULL,NULL),(48184,'Kuchiunda',2050,270,'2023-10-05 13:01:34',0,NULL,NULL,NULL),(48185,'Chembe',404,270,'2023-10-05 13:08:24',0,NULL,NULL,NULL),(48186,'Phanga',1503,585,'2023-10-05 13:16:27',0,NULL,NULL,NULL),(48187,'Chiliman',1178,585,'2023-10-05 13:27:29',0,NULL,NULL,NULL),(48188,'Nkhwisa',342,270,'2023-10-05 13:49:08',0,NULL,NULL,NULL),(48189,'Mtendere',2272,458,'2023-10-05 14:12:53',0,NULL,NULL,NULL),(48190,'Chinsapo',750,571,'2023-10-05 14:15:49',0,NULL,NULL,NULL),(48191,'Mseche',183,571,'2023-10-05 14:35:30',0,NULL,NULL,NULL),(48192,'Kaphikule',2219,365,'2023-10-06 07:43:10',0,NULL,NULL,NULL),(48193,'Ngothi',116,574,'2023-10-06 08:53:58',0,NULL,NULL,NULL),(48194,'Kananji',589,365,'2023-10-06 09:15:19',0,NULL,NULL,NULL),(48195,'Kawale',1595,567,'2023-10-06 09:29:18',0,NULL,NULL,NULL),(48196,'Visambo',1760,567,'2023-10-06 09:50:21',0,NULL,NULL,NULL),(48197,'Chiumba',113,586,'2023-10-06 09:50:55',0,NULL,NULL,NULL),(48198,'Simalamba',1254,578,'2023-10-06 10:02:28',0,NULL,NULL,NULL),(48199,'Robi',591,586,'2023-10-06 10:03:01',0,NULL,NULL,NULL),(48200,'Boloma',2273,567,'2023-10-06 10:05:49',0,NULL,NULL,NULL),(48201,'Chadika',119,578,'2023-10-06 10:06:33',0,NULL,NULL,NULL),(48208,'Sabuni',2274,409,'2023-10-06 10:50:46',0,NULL,NULL,NULL),(48209,'Majekete',177,585,'2023-10-06 10:53:12',0,NULL,NULL,NULL),(48210,'Area44',2052,586,'2023-10-06 10:53:27',0,NULL,NULL,NULL),(48211,'Mahuza',1060,574,'2023-10-06 11:00:47',0,NULL,NULL,NULL),(48212,'Kuphaka',202,578,'2023-10-06 11:04:00',0,NULL,NULL,NULL),(48213,'Mwima',914,585,'2023-10-06 11:13:40',0,NULL,NULL,NULL),(48214,'Ajawa',929,574,'2023-10-06 11:20:59',0,NULL,NULL,NULL),(48215,'Nyanga',1005,575,'2023-10-06 11:39:38',0,NULL,NULL,NULL),(48216,'Katawazika',38,385,'2023-10-06 11:43:33',0,NULL,NULL,NULL),(48217,'Msambachikho',1807,574,'2023-10-06 11:43:48',0,NULL,NULL,NULL),(48218,'Khanyabuwa',2276,94,'2023-10-06 12:02:55',0,NULL,NULL,NULL),(48219,'Sikedi',116,385,'2023-10-06 12:08:53',0,NULL,NULL,NULL),(48220,'Kumadzi',370,94,'2023-10-06 12:11:48',0,NULL,NULL,NULL),(48221,'Camp',103,584,'2023-10-06 12:12:38',0,NULL,NULL,NULL),(48222,'Mbilizi',353,385,'2023-10-06 12:16:40',0,NULL,NULL,NULL),(48223,'MBILIZI',353,385,'2023-10-06 12:16:44',0,NULL,NULL,NULL),(48224,'Tembwe',182,585,'2023-10-06 12:19:30',0,NULL,NULL,NULL),(48225,'Unknown',2255,585,'2023-10-06 12:36:26',0,NULL,NULL,NULL),(48226,'Mayela',208,571,'2023-10-06 13:42:52',0,NULL,NULL,NULL),(48227,'Kachande',182,585,'2023-10-06 13:59:32',0,NULL,NULL,NULL),(48228,'Zindowapatsala',886,571,'2023-10-06 14:13:03',0,NULL,NULL,NULL),(48229,'Chinkhombwe',73,571,'2023-10-06 14:28:06',0,NULL,NULL,NULL),(48230,'Funde',1006,270,'2023-10-06 16:21:44',0,NULL,NULL,NULL),(48231,'Moleni',2116,270,'2023-10-07 11:16:03',0,NULL,NULL,NULL),(48232,'Santhe',103,270,'2023-10-07 11:22:22',0,NULL,NULL,NULL),(48233,'Simbi 1',993,270,'2023-10-09 06:58:17',0,NULL,NULL,NULL),(48234,'Zuwa',2281,587,'2023-10-09 08:55:03',0,NULL,NULL,NULL),(48235,'Chindingo',165,587,'2023-10-09 08:56:45',0,NULL,NULL,NULL),(48236,'CHINDINGO',165,587,'2023-10-09 08:56:47',0,NULL,NULL,NULL),(48237,'Chiponda',119,587,'2023-10-09 09:05:08',0,NULL,NULL,NULL),(48238,'Area 44',770,574,'2023-10-09 09:06:02',0,NULL,NULL,NULL),(48239,'Mkwaira',397,585,'2023-10-09 09:36:38',0,NULL,NULL,NULL),(48240,'Katondo',1896,574,'2023-10-09 09:37:50',0,NULL,NULL,NULL),(48241,'Sululu',443,583,'2023-10-09 09:45:54',0,NULL,NULL,NULL),(48242,'Nakuba',311,585,'2023-10-09 09:54:17',0,NULL,NULL,NULL),(48243,'Chipwaila',375,585,'2023-10-09 09:55:13',0,NULL,NULL,NULL),(48244,'Salala',1123,270,'2023-10-09 09:58:10',0,NULL,NULL,NULL),(48245,'Nakuba',567,585,'2023-10-09 09:59:10',0,NULL,NULL,NULL),(48246,'Bukutu',298,586,'2023-10-09 09:59:27',0,NULL,NULL,NULL),(48247,'Mathiya',396,586,'2023-10-09 10:04:16',0,NULL,NULL,NULL),(48248,'Lambala',1793,586,'2023-10-09 10:09:41',0,NULL,NULL,NULL),(48249,'Swalela',1903,586,'2023-10-09 10:10:22',0,NULL,NULL,NULL),(48250,'Unknown',1752,583,'2023-10-09 10:13:00',0,NULL,NULL,NULL),(48251,'Magantha',1762,458,'2023-10-09 10:19:31',0,NULL,NULL,NULL),(48252,'Yendayenda',635,585,'2023-10-09 10:20:06',0,NULL,NULL,NULL),(48253,'Chiluzi',447,571,'2023-10-09 10:20:08',0,NULL,NULL,NULL),(48254,'Ngao',206,586,'2023-10-09 10:21:31',0,NULL,NULL,NULL),(48255,'Tomasi',365,586,'2023-10-09 10:22:03',0,NULL,NULL,NULL),(48256,'Area45',1799,583,'2023-10-09 10:24:12',0,NULL,NULL,NULL),(48257,'Unknown',1065,586,'2023-10-09 10:30:46',0,NULL,NULL,NULL),(48258,' malambo',465,586,'2023-10-09 10:31:34',0,NULL,NULL,NULL),(48259,'Ng\'ozo',293,409,'2023-10-09 10:34:21',0,NULL,NULL,NULL),(48260,'Unknown',201,586,'2023-10-09 10:37:08',0,NULL,NULL,NULL),(48261,'Chimutu',416,435,'2023-10-09 10:38:33',0,NULL,NULL,NULL),(48262,'Kaluzi',370,586,'2023-10-09 10:42:47',0,NULL,NULL,NULL),(48263,'Makhanamba',478,586,'2023-10-09 10:52:06',0,NULL,NULL,NULL),(48264,'Waiyatsa',1211,409,'2023-10-09 10:57:26',0,NULL,NULL,NULL),(48265,'Muzomba',350,571,'2023-10-09 10:57:47',0,NULL,NULL,NULL),(48266,'Chilunga',797,567,'2023-10-09 11:01:14',0,NULL,NULL,NULL),(48267,'Chilunga',521,567,'2023-10-09 11:01:57',0,NULL,NULL,NULL),(48268,'Kamjenda',193,586,'2023-10-09 11:09:36',0,NULL,NULL,NULL),(48269,'Chinthonje',436,458,'2023-10-09 11:17:21',0,NULL,NULL,NULL),(48270,'Kanyerere',353,581,'2023-10-09 11:20:05',0,NULL,NULL,NULL),(48271,'Chinguwo',356,571,'2023-10-09 11:24:35',0,NULL,NULL,NULL),(48272,'Area36',1518,581,'2023-10-09 11:26:42',0,NULL,NULL,NULL),(48273,'Kaikhomele',2285,585,'2023-10-09 11:28:57',0,NULL,NULL,NULL),(48274,'Kumitengo',575,458,'2023-10-09 11:29:49',0,NULL,NULL,NULL),(48275,'Unknown',1903,586,'2023-10-09 11:39:08',0,NULL,NULL,NULL),(48276,'Jedeni',530,409,'2023-10-09 11:40:00',0,NULL,NULL,NULL),(48277,'Gimichoni',1693,570,'2023-10-09 11:40:20',0,NULL,NULL,NULL),(48278,'Kayabwa',424,581,'2023-10-09 11:42:09',0,NULL,NULL,NULL),(48279,'Samuelnkhoswe',2286,585,'2023-10-09 11:44:12',0,NULL,NULL,NULL),(48280,'Unknown',2287,586,'2023-10-09 11:44:48',0,NULL,NULL,NULL),(48281,'Chibonjola',1693,570,'2023-10-09 11:47:14',0,NULL,NULL,NULL),(48282,'Pengapenga',199,575,'2023-10-09 11:47:54',0,NULL,NULL,NULL),(48283,'Kaselema',2107,570,'2023-10-09 11:51:13',0,NULL,NULL,NULL),(48284,'Chibunde',47,94,'2023-10-09 11:54:48',0,NULL,NULL,NULL),(48285,'Chonde',1530,570,'2023-10-09 11:54:52',0,NULL,NULL,NULL),(48286,'Chilombo',1643,586,'2023-10-09 11:56:40',0,NULL,NULL,NULL),(48287,'Mgodi',2289,571,'2023-10-09 11:57:10',0,NULL,NULL,NULL),(48288,'Kabian',1693,586,'2023-10-09 11:57:10',0,NULL,NULL,NULL),(48289,'Likuni',1800,570,'2023-10-09 12:03:08',0,NULL,NULL,NULL),(48290,'Njuchi',2290,583,'2023-10-09 12:06:15',0,NULL,NULL,NULL),(48291,'Gilimichoni',1693,570,'2023-10-09 12:07:03',0,NULL,NULL,NULL),(48292,'Malingunde',2291,575,'2023-10-09 12:07:55',0,NULL,NULL,NULL),(48293,'Nangumi',2002,570,'2023-10-09 12:10:31',0,NULL,NULL,NULL),(48294,'Unknown',2292,570,'2023-10-09 12:14:43',0,NULL,NULL,NULL),(48295,'Unknown',2293,458,'2023-10-09 12:15:11',0,NULL,NULL,NULL),(48296,'Area36',2294,570,'2023-10-09 12:15:19',0,NULL,NULL,NULL),(48297,'Saulos',1799,585,'2023-10-09 12:16:24',0,NULL,NULL,NULL),(48298,'Makatani',2295,570,'2023-10-09 12:22:03',0,NULL,NULL,NULL),(48299,'Khwalala',589,583,'2023-10-09 12:26:40',0,NULL,NULL,NULL),(48300,'Zamkutu',353,583,'2023-10-09 12:27:19',0,NULL,NULL,NULL),(48301,'Chsapo2',1693,570,'2023-10-09 12:31:51',0,NULL,NULL,NULL),(48302,'Kasadzira',115,586,'2023-10-09 12:32:58',0,NULL,NULL,NULL),(48303,'Kanyoni',2296,582,'2023-10-09 12:33:02',0,NULL,NULL,NULL),(48304,'Unknown',2297,458,'2023-10-09 12:37:45',0,NULL,NULL,NULL),(48305,'Mkomela',2298,570,'2023-10-09 12:38:35',0,NULL,NULL,NULL),(48306,'Chapulumuka',353,571,'2023-10-09 12:43:39',0,NULL,NULL,NULL),(48307,'Alufeyo',728,570,'2023-10-09 12:44:57',0,NULL,NULL,NULL),(48308,'Chiuza',2166,270,'2023-10-09 12:50:58',0,NULL,NULL,NULL),(48309,'Nsomba',2299,458,'2023-10-09 12:56:01',0,NULL,NULL,NULL),(48310,'Area 44',116,575,'2023-10-09 12:56:33',0,NULL,NULL,NULL),(48311,'Andrea',200,586,'2023-10-09 12:57:29',0,NULL,NULL,NULL),(48312,'Luka',359,587,'2023-10-09 12:58:51',0,NULL,NULL,NULL),(48313,'Luka',359,587,'2023-10-09 12:58:51',0,NULL,NULL,NULL),(48314,'Kazizira',115,575,'2023-10-09 13:01:15',0,NULL,NULL,NULL),(48315,'Yafeti',424,582,'2023-10-09 13:07:49',0,NULL,NULL,NULL),(48316,'Kanyamula',835,582,'2023-10-09 13:08:58',0,NULL,NULL,NULL),(48317,'Nkumba',213,324,'2023-10-09 13:15:39',0,NULL,NULL,NULL),(48318,'Kaole',2085,324,'2023-10-09 13:16:49',0,NULL,NULL,NULL),(48319,'Kanjala',1693,582,'2023-10-09 13:19:26',0,NULL,NULL,NULL),(48320,'Mtandire',1800,582,'2023-10-09 13:19:46',0,NULL,NULL,NULL),(48321,'Ngoni',929,585,'2023-10-09 13:21:54',0,NULL,NULL,NULL),(48322,'Kaapweto',205,582,'2023-10-09 13:23:07',0,NULL,NULL,NULL),(48323,'Sabuni',1795,571,'2023-10-09 13:29:46',0,NULL,NULL,NULL),(48324,'Chidothi',1178,571,'2023-10-09 13:41:03',0,NULL,NULL,NULL),(48325,'Nandeta',93,585,'2023-10-09 13:45:16',0,NULL,NULL,NULL),(48326,'Kumpala',2300,587,'2023-10-09 13:48:02',0,NULL,NULL,NULL),(48327,'Mwanamakoka',231,575,'2023-10-09 13:57:46',0,NULL,NULL,NULL),(48328,'Chinongo',1072,575,'2023-10-09 14:01:48',0,NULL,NULL,NULL),(48329,'Chamba',2301,575,'2023-10-09 14:06:31',0,NULL,NULL,NULL),(48330,'Mkhwangwa',1693,575,'2023-10-09 14:07:17',0,NULL,NULL,NULL),(48331,'Matale',198,565,'2023-10-09 14:07:22',0,NULL,NULL,NULL),(48332,'Area 3',569,571,'2023-10-09 14:11:22',0,NULL,NULL,NULL),(48333,'6 miles',365,575,'2023-10-09 14:11:55',0,NULL,NULL,NULL),(48334,'Namacha',871,565,'2023-10-09 14:20:21',0,NULL,NULL,NULL),(48335,'Chiwamba',108,565,'2023-10-09 14:24:42',0,NULL,NULL,NULL),(48336,'A/44',356,565,'2023-10-09 14:25:25',0,NULL,NULL,NULL),(48337,'A/44',356,565,'2023-10-09 14:25:36',0,NULL,NULL,NULL),(48338,'A/44',356,565,'2023-10-09 14:25:58',0,NULL,NULL,NULL),(48339,'A/44',356,565,'2023-10-09 14:25:58',0,NULL,NULL,NULL),(48340,'Mdoka',814,565,'2023-10-09 14:35:36',0,NULL,NULL,NULL),(48341,'Mtingala',570,565,'2023-10-09 14:39:57',0,NULL,NULL,NULL),(48342,'Lusi',41,565,'2023-10-09 14:57:22',0,NULL,NULL,NULL),(48343,'Kadzidzi',1254,565,'2023-10-09 15:01:58',0,NULL,NULL,NULL),(48344,'Thengoliweta',569,565,'2023-10-09 15:05:30',0,NULL,NULL,NULL),(48345,'Kampala',348,572,'2023-10-09 15:07:08',0,NULL,NULL,NULL),(48346,'Kampala',348,572,'2023-10-09 15:07:08',0,NULL,NULL,NULL),(48347,'Njombwa',1921,324,'2023-10-09 15:10:28',0,NULL,NULL,NULL),(48348,'Pim',250,572,'2023-10-09 15:11:29',0,NULL,NULL,NULL),(48349,'Wilison',1019,578,'2023-10-09 15:11:31',0,NULL,NULL,NULL),(48350,'Chiuzira',424,572,'2023-10-09 15:15:14',0,NULL,NULL,NULL),(48351,'Chiuzira',113,572,'2023-10-09 15:16:11',0,NULL,NULL,NULL),(48352,'Masamba',2304,572,'2023-10-09 15:19:29',0,NULL,NULL,NULL),(48353,'Shuga',310,587,'2023-10-10 08:14:35',0,NULL,NULL,NULL),(48354,'A/36',1850,381,'2023-10-10 08:31:38',0,NULL,NULL,NULL),(48355,'A/36',1850,381,'2023-10-10 08:31:54',0,NULL,NULL,NULL),(48356,'Singano',231,583,'2023-10-10 08:49:14',0,NULL,NULL,NULL),(48357,'Mwenyekondo',353,583,'2023-10-10 08:50:15',0,NULL,NULL,NULL),(48358,'Ngomani',1800,435,'2023-10-10 08:50:44',0,NULL,NULL,NULL),(48359,'Nzazi',116,587,'2023-10-10 08:52:26',0,NULL,NULL,NULL),(48360,'Duwa',814,571,'2023-10-10 08:57:07',0,NULL,NULL,NULL),(48361,'M\'bobo',1560,567,'2023-10-10 09:01:55',0,NULL,NULL,NULL),(48362,'Chiholo',27,270,'2023-10-10 09:10:43',0,NULL,NULL,NULL),(48363,'Saidi',591,587,'2023-10-10 09:12:21',0,NULL,NULL,NULL),(48364,'Jeremiah',2305,585,'2023-10-10 09:13:06',0,NULL,NULL,NULL),(48365,'Chikoya',29,435,'2023-10-10 09:16:55',0,NULL,NULL,NULL),(48366,'Chinsapo',1038,565,'2023-10-10 09:17:32',0,NULL,NULL,NULL),(48367,'Chituwe',233,565,'2023-10-10 09:21:18',0,NULL,NULL,NULL),(48368,'Magombo',737,270,'2023-10-10 09:25:05',0,NULL,NULL,NULL),(48369,'Area 23',593,575,'2023-10-10 09:26:08',0,NULL,NULL,NULL),(48370,'Kachulu',220,587,'2023-10-10 09:28:20',0,NULL,NULL,NULL),(48371,'KACHULU',220,587,'2023-10-10 09:28:25',0,NULL,NULL,NULL),(48372,'Kaphamtengo',1254,565,'2023-10-10 09:29:39',0,NULL,NULL,NULL),(48373,'Chiuzeni',108,574,'2023-10-10 09:30:24',0,NULL,NULL,NULL),(48374,'Chikandwe',193,585,'2023-10-10 09:33:45',0,NULL,NULL,NULL),(48375,'Jumba',719,409,'2023-10-10 09:34:29',0,NULL,NULL,NULL),(48376,'Matumbi',2307,565,'2023-10-10 09:37:29',0,NULL,NULL,NULL),(48377,'Chikanje',2308,565,'2023-10-10 09:41:47',0,NULL,NULL,NULL),(48378,'Mayenje',411,409,'2023-10-10 09:45:26',0,NULL,NULL,NULL),(48379,'Chitukula',2309,565,'2023-10-10 09:46:27',0,NULL,NULL,NULL),(48380,'Phuzi',1709,565,'2023-10-10 09:51:31',0,NULL,NULL,NULL),(48381,'Mayenje',1038,409,'2023-10-10 09:53:23',0,NULL,NULL,NULL),(48382,'Mphonje',397,94,'2023-10-10 09:56:44',0,NULL,NULL,NULL),(48383,'Chimwala',1391,565,'2023-10-10 09:57:27',0,NULL,NULL,NULL),(48384,'Phomolo',190,565,'2023-10-10 10:02:06',0,NULL,NULL,NULL),(48385,'Masangano',812,565,'2023-10-10 10:06:31',0,NULL,NULL,NULL),(48386,'Khongoni',499,587,'2023-10-10 10:07:15',0,NULL,NULL,NULL),(48387,'Kanyindula',1752,571,'2023-10-10 10:10:18',0,NULL,NULL,NULL),(48388,'Ulongwe',360,583,'2023-10-10 10:10:22',0,NULL,NULL,NULL),(48389,'Mtema',351,571,'2023-10-10 10:10:46',0,NULL,NULL,NULL),(48390,'Mbedza',1799,585,'2023-10-10 10:12:43',0,NULL,NULL,NULL),(48391,'Kandikole',2085,94,'2023-10-10 10:15:53',0,NULL,NULL,NULL),(48392,'Nyombe',1392,565,'2023-10-10 10:17:44',0,NULL,NULL,NULL),(48393,'Tidyenawo',360,409,'2023-10-10 10:18:09',0,NULL,NULL,NULL),(48394,'Matope',478,565,'2023-10-10 10:21:56',0,NULL,NULL,NULL),(48395,'Khwangwi',2311,409,'2023-10-10 10:23:30',0,NULL,NULL,NULL),(48396,'Chinguwo',2313,567,'2023-10-10 10:23:43',0,NULL,NULL,NULL),(48397,'Bypass',353,583,'2023-10-10 10:23:46',0,NULL,NULL,NULL),(48398,'Tsabango',929,567,'2023-10-10 10:25:58',0,NULL,NULL,NULL),(48399,'Kachipeso',260,587,'2023-10-10 10:28:30',0,NULL,NULL,NULL),(48400,'Tandile',2314,565,'2023-10-10 10:31:44',0,NULL,NULL,NULL),(48401,'Chimtendere',1234,585,'2023-10-10 10:36:14',0,NULL,NULL,NULL),(48402,'Malemia',2315,409,'2023-10-10 10:36:54',0,NULL,NULL,NULL),(48403,'Malle',233,583,'2023-10-10 10:37:22',0,NULL,NULL,NULL),(48404,'Kilon',113,565,'2023-10-10 10:39:19',0,NULL,NULL,NULL),(48405,'Makanya',1530,94,'2023-10-10 10:41:04',0,NULL,NULL,NULL),(48406,'Daniel',1580,409,'2023-10-10 10:41:04',0,NULL,NULL,NULL),(48407,'Magomero',1449,409,'2023-10-10 10:46:43',0,NULL,NULL,NULL),(48408,'Kilon',378,565,'2023-10-10 10:55:01',0,NULL,NULL,NULL),(48409,'Msosa',1178,571,'2023-10-10 11:00:06',0,NULL,NULL,NULL),(48410,'Jakalasi',356,565,'2023-10-10 11:07:31',0,NULL,NULL,NULL),(48411,'Mazobwe',2316,570,'2023-10-10 11:33:33',0,NULL,NULL,NULL),(48412,'Bango',1022,585,'2023-10-10 11:38:18',0,NULL,NULL,NULL),(48413,'N\'thinda',199,570,'2023-10-10 11:43:58',0,NULL,NULL,NULL),(48414,'Kawere',199,565,'2023-10-10 11:46:36',0,NULL,NULL,NULL),(48415,'Jasten',106,570,'2023-10-10 11:48:01',0,NULL,NULL,NULL),(48416,'Zalengela1',447,565,'2023-10-10 11:51:34',0,NULL,NULL,NULL),(48417,'Kalindima',495,565,'2023-10-10 11:54:36',0,NULL,NULL,NULL),(48418,'Napira',298,570,'2023-10-10 11:54:45',0,NULL,NULL,NULL),(48419,'Chiwiza',447,570,'2023-10-10 11:57:32',0,NULL,NULL,NULL),(48420,'Pajoni',232,458,'2023-10-10 12:00:36',0,NULL,NULL,NULL),(48421,'Kadakana',397,570,'2023-10-10 12:01:10',0,NULL,NULL,NULL),(48422,'Kawadza',370,570,'2023-10-10 12:04:53',0,NULL,NULL,NULL),(48423,'Jiya',812,565,'2023-10-10 12:07:42',0,NULL,NULL,NULL),(48424,'Mbembeza',1693,570,'2023-10-10 12:08:17',0,NULL,NULL,NULL),(48425,'Wilson',867,585,'2023-10-10 12:10:04',0,NULL,NULL,NULL),(48426,'Area41',1800,570,'2023-10-10 12:11:47',0,NULL,NULL,NULL),(48427,'Noah',1516,575,'2023-10-10 12:14:47',0,NULL,NULL,NULL),(48428,'A/49',1032,575,'2023-10-10 12:15:35',0,NULL,NULL,NULL),(48429,'A/49',1032,575,'2023-10-10 12:15:45',0,NULL,NULL,NULL),(48430,'Kayoni',360,565,'2023-10-10 12:18:00',0,NULL,NULL,NULL),(48431,'Kayoni',378,565,'2023-10-10 12:18:53',0,NULL,NULL,NULL),(48432,'Chikafupa',115,565,'2023-10-10 12:22:29',0,NULL,NULL,NULL),(48433,'Taiza',353,571,'2023-10-10 12:26:32',0,NULL,NULL,NULL),(48434,'Chiwoko',1026,565,'2023-10-10 12:36:44',0,NULL,NULL,NULL),(48435,'Kambalawira',187,575,'2023-10-10 12:39:46',0,NULL,NULL,NULL),(48436,'Kapondo',1762,565,'2023-10-10 12:41:34',0,NULL,NULL,NULL),(48437,'Mkhwalala',589,575,'2023-10-10 12:44:02',0,NULL,NULL,NULL),(48438,'Msisi',310,587,'2023-10-10 12:44:07',0,NULL,NULL,NULL),(48439,'Kachilele',1693,575,'2023-10-10 12:46:34',0,NULL,NULL,NULL),(48440,'Kandevu',1214,458,'2023-10-10 13:19:33',0,NULL,NULL,NULL),(48441,'likuni',356,381,'2023-10-10 13:51:37',0,NULL,NULL,NULL),(48442,'Issah',1793,458,'2023-10-10 14:13:52',0,NULL,NULL,NULL),(48443,'Nankunda',234,458,'2023-10-10 14:22:22',0,NULL,NULL,NULL),(48444,'Majiga',1725,567,'2023-10-10 15:36:00',0,NULL,NULL,NULL),(48445,'Likungwi',189,324,'2023-10-10 17:46:48',0,NULL,NULL,NULL),(48446,'Chikumba',1394,270,'2023-10-11 07:51:15',0,NULL,NULL,NULL),(48447,'Mulera',350,571,'2023-10-11 09:21:40',0,NULL,NULL,NULL),(48448,'Mpinganjira',176,574,'2023-10-11 09:29:20',0,NULL,NULL,NULL),(48449,'Msiwa',1762,586,'2023-10-11 09:37:25',0,NULL,NULL,NULL),(48450,'Misozo',341,587,'2023-10-11 09:37:54',0,NULL,NULL,NULL),(48451,'Area 21',1933,586,'2023-10-11 09:38:12',0,NULL,NULL,NULL),(48452,'Kukungwa',232,570,'2023-10-11 09:41:06',0,NULL,NULL,NULL),(48453,'Bwemba',360,458,'2023-10-11 09:43:38',0,NULL,NULL,NULL),(48454,'Nzuzi',411,574,'2023-10-11 09:44:18',0,NULL,NULL,NULL),(48455,'Njolomole',1923,409,'2023-10-11 09:47:37',0,NULL,NULL,NULL),(48456,'Machinjiri',533,435,'2023-10-11 09:52:14',0,NULL,NULL,NULL),(48457,'Chinseu',175,574,'2023-10-11 09:58:13',0,NULL,NULL,NULL),(48458,'Chikwati',2165,570,'2023-10-11 09:59:32',0,NULL,NULL,NULL),(48459,'Kalimbe',193,570,'2023-10-11 10:02:43',0,NULL,NULL,NULL),(48460,'Area38',770,570,'2023-10-11 10:05:55',0,NULL,NULL,NULL),(48461,'Chisoti',1046,567,'2023-10-11 10:06:06',0,NULL,NULL,NULL),(48462,'Malere',250,570,'2023-10-11 10:09:36',0,NULL,NULL,NULL),(48463,'Matchikazi',1767,409,'2023-10-11 10:11:43',0,NULL,NULL,NULL),(48464,'Mongoya',341,581,'2023-10-11 10:13:59',0,NULL,NULL,NULL),(48465,'Mbeza',2318,567,'2023-10-11 10:14:07',0,NULL,NULL,NULL),(48466,'Ng\'omambi',39,581,'2023-10-11 10:18:34',0,NULL,NULL,NULL),(48467,'Ndoya',2319,409,'2023-10-11 10:22:10',0,NULL,NULL,NULL),(48468,'Lipongo',1178,585,'2023-10-11 10:22:18',0,NULL,NULL,NULL),(48469,'Mboselo',529,581,'2023-10-11 10:22:44',0,NULL,NULL,NULL),(48470,'Kamba',2002,435,'2023-10-11 10:24:35',0,NULL,NULL,NULL),(48471,'Tchetche',1800,567,'2023-10-11 10:24:36',0,NULL,NULL,NULL),(48472,'Nkhuzi',1216,409,'2023-10-11 10:25:12',0,NULL,NULL,NULL),(48473,'Nyezelera',478,581,'2023-10-11 10:25:48',0,NULL,NULL,NULL),(48474,'Chamadenga',397,570,'2023-10-11 10:26:33',0,NULL,NULL,NULL),(48475,'Kabando',1800,570,'2023-10-11 10:29:55',0,NULL,NULL,NULL),(48476,'Kuchenga',370,581,'2023-10-11 10:30:08',0,NULL,NULL,NULL),(48477,'Kawamba',1941,291,'2023-10-11 10:38:08',0,NULL,NULL,NULL),(48478,'Kachere prison',356,291,'2023-10-11 10:39:17',0,NULL,NULL,NULL),(48479,'Kamwadi',24,570,'2023-10-11 10:39:26',0,NULL,NULL,NULL),(48480,'Vizala',2320,581,'2023-10-11 10:41:19',0,NULL,NULL,NULL),(48481,'Kaambo',589,570,'2023-10-11 10:42:15',0,NULL,NULL,NULL),(48482,'Ziyaya',2321,570,'2023-10-11 10:45:59',0,NULL,NULL,NULL),(48483,'Katangala',2323,570,'2023-10-11 10:52:19',0,NULL,NULL,NULL),(48484,'Chiwilira',91,585,'2023-10-11 10:54:13',0,NULL,NULL,NULL),(48485,'Zabuloni',74,271,'2023-10-11 10:54:53',0,NULL,NULL,NULL),(48486,'Kawomba',1800,570,'2023-10-11 10:56:46',0,NULL,NULL,NULL),(48487,'Lihilo',1795,435,'2023-10-11 10:57:39',0,NULL,NULL,NULL),(48488,'Kasadzu',447,581,'2023-10-11 10:58:56',0,NULL,NULL,NULL),(48489,'Sunday',1073,570,'2023-10-11 10:59:29',0,NULL,NULL,NULL),(48490,'Namondwe',533,585,'2023-10-11 11:04:11',0,NULL,NULL,NULL),(48491,'Lombwa',1762,565,'2023-10-11 11:10:34',0,NULL,NULL,NULL),(48492,'Luzi',184,458,'2023-10-11 11:11:11',0,NULL,NULL,NULL),(48493,'A36',353,458,'2023-10-11 11:11:55',0,NULL,NULL,NULL),(48494,'A36',353,458,'2023-10-11 11:12:03',0,NULL,NULL,NULL),(48495,'Andinyaza',766,435,'2023-10-11 11:14:50',0,NULL,NULL,NULL),(48496,'Nkumira',2325,587,'2023-10-11 11:16:42',0,NULL,NULL,NULL),(48497,'Dzama',1037,565,'2023-10-11 11:19:01',0,NULL,NULL,NULL),(48498,'Kachere',536,565,'2023-10-11 11:25:45',0,NULL,NULL,NULL),(48499,'Msipu',370,565,'2023-10-11 11:29:30',0,NULL,NULL,NULL),(48500,'Mitengo',1203,565,'2023-10-11 11:30:46',0,NULL,NULL,NULL),(48501,'Chisitu',314,458,'2023-10-11 11:31:00',0,NULL,NULL,NULL),(48502,'Mulere',310,291,'2023-10-11 11:35:40',0,NULL,NULL,NULL),(48503,'Chiledeluka',193,585,'2023-10-11 11:36:43',0,NULL,NULL,NULL),(48504,'Nthache',1032,565,'2023-10-11 11:37:04',0,NULL,NULL,NULL),(48505,'Akunena',341,565,'2023-10-11 11:43:29',0,NULL,NULL,NULL),(48506,'Mkhwaya',115,565,'2023-10-11 11:47:18',0,NULL,NULL,NULL),(48507,'Mbewa',410,565,'2023-10-11 11:51:26',0,NULL,NULL,NULL),(48508,'Nambuma parish',397,565,'2023-10-11 11:52:23',0,NULL,NULL,NULL),(48509,'Gija',2326,587,'2023-10-11 12:06:51',0,NULL,NULL,NULL),(48510,'Gulule',608,578,'2023-10-11 12:08:50',0,NULL,NULL,NULL),(48511,'Kuguwe',301,270,'2023-10-11 12:10:21',0,NULL,NULL,NULL),(48512,'Nrc',569,585,'2023-10-11 12:19:28',0,NULL,NULL,NULL),(48513,'NRC',569,585,'2023-10-11 12:19:32',0,NULL,NULL,NULL),(48514,'Nkwaso',502,578,'2023-10-11 12:19:36',0,NULL,NULL,NULL),(48515,'Sauti banda',44,587,'2023-10-11 12:20:15',0,NULL,NULL,NULL),(48516,'Madyeratu',985,571,'2023-10-11 12:36:10',0,NULL,NULL,NULL),(48517,'Area3',165,571,'2023-10-11 12:51:43',0,NULL,NULL,NULL),(48518,'Kamphindo',87,571,'2023-10-11 13:18:06',0,NULL,NULL,NULL),(48519,'STATE HOUSE',2119,546,'2023-10-11 14:20:04',0,NULL,NULL,NULL),(48520,'Mulonyeni',2328,584,'2023-10-12 08:19:40',0,NULL,NULL,NULL),(48521,'Ndatani',360,584,'2023-10-12 08:26:38',0,NULL,NULL,NULL),(48522,'Sinyala',1033,365,'2023-10-12 08:30:28',0,NULL,NULL,NULL),(48523,'Milosi',1067,584,'2023-10-12 08:42:02',0,NULL,NULL,NULL),(48524,'Kauma',776,584,'2023-10-12 08:42:22',0,NULL,NULL,NULL),(48525,'Chingwenje',2330,435,'2023-10-12 08:51:22',0,NULL,NULL,NULL),(48526,'Kanyezi',2331,584,'2023-10-12 09:07:15',0,NULL,NULL,NULL),(48527,'Velu',1873,585,'2023-10-12 09:14:23',0,NULL,NULL,NULL),(48528,'Chatonda',27,585,'2023-10-12 09:28:50',0,NULL,NULL,NULL),(48529,'Fikira',814,270,'2023-10-12 09:56:29',0,NULL,NULL,NULL),(48530,'Chinsomba',1220,270,'2023-10-12 10:10:59',0,NULL,NULL,NULL),(48531,'Gumani',2332,584,'2023-10-12 10:16:08',0,NULL,NULL,NULL),(48532,'Kapundu',2288,270,'2023-10-12 10:20:42',0,NULL,NULL,NULL),(48533,'Mangani',1032,584,'2023-10-12 10:26:33',0,NULL,NULL,NULL),(48534,'Somanje',348,584,'2023-10-12 10:29:42',0,NULL,NULL,NULL),(48535,'Sanama',1162,584,'2023-10-12 10:33:34',0,NULL,NULL,NULL),(48536,'Kachele',191,584,'2023-10-12 10:37:46',0,NULL,NULL,NULL),(48537,'Bauleni',354,585,'2023-10-12 10:42:07',0,NULL,NULL,NULL),(48538,'Million',2333,385,'2023-10-12 10:47:37',0,NULL,NULL,NULL),(48539,'Area 46',124,435,'2023-10-12 10:52:01',0,NULL,NULL,NULL),(48540,'Chawatha',2039,385,'2023-10-12 10:59:54',0,NULL,NULL,NULL),(48541,'Misomali',1143,435,'2023-10-12 11:05:52',0,NULL,NULL,NULL),(48542,'Mkundi',16,585,'2023-10-12 11:09:22',0,NULL,NULL,NULL),(48543,'Jula',314,585,'2023-10-12 11:21:07',0,NULL,NULL,NULL),(48544,'John',474,270,'2023-10-12 11:30:59',0,NULL,NULL,NULL),(48545,'Fight',1100,585,'2023-10-12 11:33:23',0,NULL,NULL,NULL),(48546,'Kalumba',776,579,'2023-10-12 11:38:32',0,NULL,NULL,NULL),(48547,'Chapata',776,579,'2023-10-12 11:42:03',0,NULL,NULL,NULL),(48548,'Masula',2265,579,'2023-10-12 11:42:41',0,NULL,NULL,NULL),(48549,'Mchipeta',1006,568,'2023-10-12 11:45:01',0,NULL,NULL,NULL),(48550,'Pawilo',206,571,'2023-10-12 12:42:24',0,NULL,NULL,NULL),(48551,'Mdzulo',2334,581,'2023-10-12 12:51:36',0,NULL,NULL,NULL),(48552,'Chilima',1032,581,'2023-10-12 12:56:22',0,NULL,NULL,NULL),(48553,'Kumtibwa',113,581,'2023-10-12 13:05:28',0,NULL,NULL,NULL),(48554,'Petulo',2335,581,'2023-10-12 13:10:04',0,NULL,NULL,NULL),(48555,'Sanikonda',72,571,'2023-10-12 13:13:30',0,NULL,NULL,NULL),(48556,'Jelemani',591,581,'2023-10-12 13:13:31',0,NULL,NULL,NULL),(48557,'Mphuzi',591,571,'2023-10-12 13:16:36',0,NULL,NULL,NULL),(48558,'Mwavu',193,581,'2023-10-12 13:20:17',0,NULL,NULL,NULL),(48559,'Mtupila',403,571,'2023-10-12 13:21:20',0,NULL,NULL,NULL),(48560,'Zambo',119,581,'2023-10-12 13:27:58',0,NULL,NULL,NULL),(48561,'Chimango',360,571,'2023-10-12 13:39:31',0,NULL,NULL,NULL),(48562,'Chonde',2337,581,'2023-10-12 13:43:04',0,NULL,NULL,NULL),(48563,'Kampanikiza',2338,581,'2023-10-12 13:48:06',0,NULL,NULL,NULL),(48564,'Muwonjeza',250,571,'2023-10-12 13:51:06',0,NULL,NULL,NULL),(48565,'Kachule',370,581,'2023-10-12 13:52:34',0,NULL,NULL,NULL),(48566,'Chiputu',411,571,'2023-10-12 13:55:26',0,NULL,NULL,NULL),(48567,'Mingu',365,581,'2023-10-12 13:57:00',0,NULL,NULL,NULL),(48568,'Tsabango',2339,581,'2023-10-12 14:07:02',0,NULL,NULL,NULL),(48569,'Chigwala',397,571,'2023-10-12 14:13:26',0,NULL,NULL,NULL),(48570,'Salimoni',391,568,'2023-10-12 14:14:35',0,NULL,NULL,NULL),(48571,'Manje',812,324,'2023-10-12 14:24:23',0,NULL,NULL,NULL),(48572,'Chakhoma',2085,324,'2023-10-12 14:24:52',0,NULL,NULL,NULL),(48573,'Malota',350,365,'2023-10-13 07:37:21',0,NULL,NULL,NULL),(48574,'Kapindura',719,435,'2023-10-13 08:34:20',0,NULL,NULL,NULL),(48575,'Katatha',776,584,'2023-10-13 08:56:45',0,NULL,NULL,NULL),(48576,'Chilawawo',207,584,'2023-10-13 09:12:07',0,NULL,NULL,NULL),(48577,'Unknown',197,585,'2023-10-13 09:20:05',0,NULL,NULL,NULL),(48578,'Kayendekeza',397,584,'2023-10-13 09:26:57',0,NULL,NULL,NULL),(48579,'Nthandiza',113,585,'2023-10-13 09:30:05',0,NULL,NULL,NULL),(48580,'Kamadenga',1392,565,'2023-10-13 09:35:15',0,NULL,NULL,NULL),(48581,'Mbawera',1159,565,'2023-10-13 09:39:27',0,NULL,NULL,NULL),(48582,'Wilson',301,585,'2023-10-13 09:40:22',0,NULL,NULL,NULL),(48583,'Kwansi',116,584,'2023-10-13 09:40:43',0,NULL,NULL,NULL),(48584,'Apilingali',2340,584,'2023-10-13 09:47:18',0,NULL,NULL,NULL),(48585,'Ngombe',116,565,'2023-10-13 09:47:51',0,NULL,NULL,NULL),(48586,'Nkangawise',197,585,'2023-10-13 09:49:23',0,NULL,NULL,NULL),(48587,'Malisero',1725,585,'2023-10-13 09:50:01',0,NULL,NULL,NULL),(48588,'Makhanyula',618,270,'2023-10-13 10:00:03',0,NULL,NULL,NULL),(48589,'Midume',314,585,'2023-10-13 10:00:18',0,NULL,NULL,NULL),(48590,'Tambalale',1440,585,'2023-10-13 10:01:10',0,NULL,NULL,NULL),(48591,'Gwaza',2341,565,'2023-10-13 10:02:56',0,NULL,NULL,NULL),(48592,'Njekete',304,579,'2023-10-13 10:03:24',0,NULL,NULL,NULL),(48593,'Thavite',1220,270,'2023-10-13 10:06:02',0,NULL,NULL,NULL),(48594,'Kwaya',404,565,'2023-10-13 10:06:09',0,NULL,NULL,NULL),(48595,'Chiseka',370,565,'2023-10-13 10:07:47',0,NULL,NULL,NULL),(48596,'Chigu',591,579,'2023-10-13 10:18:01',0,NULL,NULL,NULL),(48597,'Kalimwini',776,579,'2023-10-13 10:18:44',0,NULL,NULL,NULL),(48598,'Chawo',191,435,'2023-10-13 10:24:54',0,NULL,NULL,NULL),(48599,'Dimusa',232,566,'2023-10-13 10:36:18',0,NULL,NULL,NULL),(48600,'Nsambachikho',1725,566,'2023-10-13 10:37:05',0,NULL,NULL,NULL),(48601,'Area38',2342,584,'2023-10-13 10:43:46',0,NULL,NULL,NULL),(48602,'Kapasani',259,566,'2023-10-13 10:46:46',0,NULL,NULL,NULL),(48603,'Kaliza',353,579,'2023-10-13 10:55:51',0,NULL,NULL,NULL),(48604,'Nyanje',370,584,'2023-10-13 10:56:29',0,NULL,NULL,NULL),(48605,'Makanda',1702,435,'2023-10-13 10:57:56',0,NULL,NULL,NULL),(48606,'Aphunyu',518,565,'2023-10-13 11:17:20',0,NULL,NULL,NULL),(48607,'Manyowa',530,365,'2023-10-13 11:18:22',0,NULL,NULL,NULL),(48608,'Sambuka',2288,592,'2023-10-13 11:45:28',0,NULL,NULL,NULL),(48609,'Tembetembe',1075,365,'2023-10-13 11:46:31',0,NULL,NULL,NULL),(48610,'Chipatala',342,365,'2023-10-13 11:58:00',0,NULL,NULL,NULL),(48611,'Unknown',247,435,'2023-10-13 12:03:39',0,NULL,NULL,NULL),(48612,'Kazembe',200,571,'2023-10-13 12:27:47',0,NULL,NULL,NULL),(48613,'Buteya',1762,571,'2023-10-13 12:41:58',0,NULL,NULL,NULL),(48614,'BUTEYA',1762,571,'2023-10-13 12:42:04',0,NULL,NULL,NULL),(48615,'Gaga',1896,526,'2023-10-13 12:45:36',0,NULL,NULL,NULL),(48616,'Chemdera',529,571,'2023-10-13 12:47:00',0,NULL,NULL,NULL),(48617,'Mlandula',589,526,'2023-10-13 13:39:31',0,NULL,NULL,NULL),(48618,'Unknown',44,585,'2023-10-13 13:40:11',0,NULL,NULL,NULL),(48619,'Unknown',299,526,'2023-10-13 13:44:49',0,NULL,NULL,NULL),(48620,'Moyale',2343,526,'2023-10-13 13:46:49',0,NULL,NULL,NULL),(48621,'Madziangati',197,571,'2023-10-13 14:11:08',0,NULL,NULL,NULL),(48622,'Utale',875,571,'2023-10-13 14:15:15',0,NULL,NULL,NULL),(48623,'Sayiti',233,571,'2023-10-13 14:24:33',0,NULL,NULL,NULL),(48624,'Mchacha',474,270,'2023-10-14 08:17:56',0,NULL,NULL,NULL),(48625,'Sanjika',814,270,'2023-10-14 09:11:29',0,NULL,NULL,NULL),(48626,'Muzu',1799,585,'2023-10-17 09:38:46',0,NULL,NULL,NULL),(48627,'Muzu',353,585,'2023-10-17 09:39:28',0,NULL,NULL,NULL),(48628,'Unknown',249,435,'2023-10-17 09:49:00',0,NULL,NULL,NULL),(48629,'Ndulamu',221,585,'2023-10-17 09:57:00',0,NULL,NULL,NULL),(48630,'Chitungulu',2344,271,'2023-10-17 10:09:29',0,NULL,NULL,NULL),(48631,'Nakutepa',353,585,'2023-10-17 10:26:29',0,NULL,NULL,NULL),(48632,'Kumidzu',1842,585,'2023-10-17 10:37:00',0,NULL,NULL,NULL),(48633,'Wilisoni',360,587,'2023-10-17 10:40:14',0,NULL,NULL,NULL),(48634,'Chinunda',2211,271,'2023-10-17 10:43:38',0,NULL,NULL,NULL),(48635,'Mutabali',297,271,'2023-10-17 11:08:32',0,NULL,NULL,NULL),(48636,'Kutonda',107,570,'2023-10-17 11:56:09',0,NULL,NULL,NULL),(48637,'Likoloma',1526,570,'2023-10-17 12:01:44',0,NULL,NULL,NULL),(48638,'Joggi',814,570,'2023-10-17 12:18:35',0,NULL,NULL,NULL),(48639,'Airwing',1032,570,'2023-10-17 12:19:06',0,NULL,NULL,NULL),(48640,'Kaweche',1693,570,'2023-10-17 12:24:56',0,NULL,NULL,NULL),(48641,'Nsipu',2132,324,'2023-10-17 12:27:26',0,NULL,NULL,NULL),(48642,'Mwase',1693,570,'2023-10-17 12:28:09',0,NULL,NULL,NULL),(48643,'Mtsiliza ',398,271,'2023-10-17 12:40:29',0,NULL,NULL,NULL),(48644,'Area41',404,570,'2023-10-17 12:40:35',0,NULL,NULL,NULL),(48645,'Maphonela',1721,570,'2023-10-17 12:44:07',0,NULL,NULL,NULL),(48646,'Kamitengo',370,570,'2023-10-17 12:44:37',0,NULL,NULL,NULL),(48647,'Kuweni',2288,592,'2023-10-17 12:47:38',0,NULL,NULL,NULL),(48648,'Bunyenga',198,582,'2023-10-17 12:49:42',0,NULL,NULL,NULL),(48649,'Nachiphi',482,271,'2023-10-17 12:51:06',0,NULL,NULL,NULL),(48650,'Njolo',757,271,'2023-10-17 12:51:30',0,NULL,NULL,NULL),(48651,'Ngwenya',2122,284,'2023-10-17 12:55:30',0,NULL,NULL,NULL),(48652,'Kasakula',1425,570,'2023-10-17 12:56:58',0,NULL,NULL,NULL),(48653,'Katenje',1009,284,'2023-10-17 12:58:35',0,NULL,NULL,NULL),(48654,'Unknown',2345,570,'2023-10-17 13:01:52',0,NULL,NULL,NULL),(48655,'Bokosi',1435,585,'2023-10-17 13:02:27',0,NULL,NULL,NULL),(48656,'Kaphiri',2346,582,'2023-10-17 13:03:08',0,NULL,NULL,NULL),(48657,'Gwaladi',589,570,'2023-10-17 13:04:55',0,NULL,NULL,NULL),(48658,'Kapalaza',1786,570,'2023-10-17 13:08:00',0,NULL,NULL,NULL),(48659,'Samson',2347,570,'2023-10-17 13:11:27',0,NULL,NULL,NULL),(48660,'Mavu',993,582,'2023-10-17 13:21:33',0,NULL,NULL,NULL),(48661,'Area 49',404,592,'2023-10-17 13:23:11',0,NULL,NULL,NULL),(48662,'Mwanali',227,570,'2023-10-17 13:24:56',0,NULL,NULL,NULL),(48663,'Jekete',2100,582,'2023-10-17 13:25:20',0,NULL,NULL,NULL),(48664,'Malingunde',354,566,'2023-10-17 13:26:53',0,NULL,NULL,NULL),(48665,'Ntala',2107,434,'2023-10-17 13:28:21',0,NULL,NULL,NULL),(48666,'Gwadani',2348,570,'2023-10-17 13:29:16',0,NULL,NULL,NULL),(48667,'Pusadala',199,582,'2023-10-17 13:29:16',0,NULL,NULL,NULL),(48668,'Solomon',370,570,'2023-10-17 13:29:44',0,NULL,NULL,NULL),(48669,'Chiti',369,582,'2023-10-17 13:36:16',0,NULL,NULL,NULL),(48670,'Ngwele',190,570,'2023-10-17 13:36:34',0,NULL,NULL,NULL),(48671,'Mkwende',113,570,'2023-10-17 13:36:55',0,NULL,NULL,NULL),(48672,'Chikadya',447,570,'2023-10-17 13:38:32',0,NULL,NULL,NULL),(48673,'Julani',2349,592,'2023-10-17 13:40:15',0,NULL,NULL,NULL),(48674,'Khola',189,458,'2023-10-17 14:07:23',0,NULL,NULL,NULL),(48675,'Mwimira',78,566,'2023-10-17 14:14:06',0,NULL,NULL,NULL),(48676,'Kabanja',2050,592,'2023-10-17 14:28:08',0,NULL,NULL,NULL),(48677,'Tumbwe',1933,592,'2023-10-17 14:38:01',0,NULL,NULL,NULL),(48678,'Area 38',1933,592,'2023-10-17 14:54:04',0,NULL,NULL,NULL),(48679,'Janasa',919,365,'2023-10-18 08:22:44',0,NULL,NULL,NULL),(48680,'Phindwe',397,587,'2023-10-18 09:09:17',0,NULL,NULL,NULL),(48681,'Kakwetsi',370,584,'2023-10-18 09:16:10',0,NULL,NULL,NULL),(48682,'Chambala',1341,570,'2023-10-18 09:17:31',0,NULL,NULL,NULL),(48683,'Doka',74,435,'2023-10-18 09:19:07',0,NULL,NULL,NULL),(48684,'Magalamura',770,570,'2023-10-18 09:23:22',0,NULL,NULL,NULL),(48685,'Mawa',368,566,'2023-10-18 09:23:40',0,NULL,NULL,NULL),(48686,'Mujidi',193,385,'2023-10-18 09:24:12',0,NULL,NULL,NULL),(48687,'Maphuka',1101,570,'2023-10-18 09:27:15',0,NULL,NULL,NULL),(48688,'Namali',193,584,'2023-10-18 09:28:30',0,NULL,NULL,NULL),(48689,'Kankosi',1762,585,'2023-10-18 09:28:35',0,NULL,NULL,NULL),(48690,'Kuwala',2050,365,'2023-10-18 09:37:03',0,NULL,NULL,NULL),(48691,'Elia chintengo',1669,409,'2023-10-18 09:43:27',0,NULL,NULL,NULL),(48692,'Sumeri',312,409,'2023-10-18 09:53:42',0,NULL,NULL,NULL),(48693,'Masasa',1216,583,'2023-10-18 09:56:32',0,NULL,NULL,NULL),(48694,'Unknown',2039,435,'2023-10-18 10:09:32',0,NULL,NULL,NULL),(48695,'Chaudza',113,565,'2023-10-18 10:09:45',0,NULL,NULL,NULL),(48696,'Malingunde',2351,409,'2023-10-18 10:13:54',0,NULL,NULL,NULL),(48697,'Misoya',914,565,'2023-10-18 10:31:15',0,NULL,NULL,NULL),(48698,'Mtalala',812,585,'2023-10-18 10:40:50',0,NULL,NULL,NULL),(48699,'Chinsapo',365,565,'2023-10-18 10:45:09',0,NULL,NULL,NULL),(48700,'Mbagaja',1994,583,'2023-10-18 10:46:31',0,NULL,NULL,NULL),(48701,'6miles',1896,435,'2023-10-18 10:49:16',0,NULL,NULL,NULL),(48702,'Kasonda',227,565,'2023-10-18 10:49:37',0,NULL,NULL,NULL),(48703,'Chisangwi',1392,565,'2023-10-18 10:59:28',0,NULL,NULL,NULL),(48704,'Chisambo',314,583,'2023-10-18 11:01:09',0,NULL,NULL,NULL),(48705,'Nachuma',1133,575,'2023-10-18 11:05:40',0,NULL,NULL,NULL),(48706,'A/9',1032,565,'2023-10-18 11:08:13',0,NULL,NULL,NULL),(48707,'A/9',1032,565,'2023-10-18 11:08:24',0,NULL,NULL,NULL),(48708,'Hangalawe',9,565,'2023-10-18 11:13:45',0,NULL,NULL,NULL),(48709,'Ngana',1655,565,'2023-10-18 11:18:04',0,NULL,NULL,NULL),(48710,'Magadi',1178,585,'2023-10-18 11:25:59',0,NULL,NULL,NULL),(48711,'Mtaja',342,575,'2023-10-18 11:27:16',0,NULL,NULL,NULL),(48712,'Kachindamoto',190,565,'2023-10-18 11:31:33',0,NULL,NULL,NULL),(48713,'Chingale',814,585,'2023-10-18 11:35:57',0,NULL,NULL,NULL),(48714,'Chagwa',429,570,'2023-10-18 11:47:23',0,NULL,NULL,NULL),(48715,'Kamphanthengo',353,570,'2023-10-18 11:48:03',0,NULL,NULL,NULL),(48716,'Mphompha',27,565,'2023-10-18 11:49:05',0,NULL,NULL,NULL),(48717,'Kudemela',1392,565,'2023-10-18 11:52:55',0,NULL,NULL,NULL),(48718,'Mwakhimba',9,575,'2023-10-18 11:53:22',0,NULL,NULL,NULL),(48719,'Kasya',592,585,'2023-10-18 11:55:43',0,NULL,NULL,NULL),(48720,'Zengereza',1392,565,'2023-10-18 11:56:07',0,NULL,NULL,NULL),(48721,'Msoko',93,575,'2023-10-18 12:00:00',0,NULL,NULL,NULL),(48722,'Ngwata',370,570,'2023-10-18 12:03:15',0,NULL,NULL,NULL),(48723,'Kunthulu',365,570,'2023-10-18 12:03:45',0,NULL,NULL,NULL),(48724,'Chenyenje',663,570,'2023-10-18 12:08:15',0,NULL,NULL,NULL),(48725,'Area44',1676,585,'2023-10-18 12:08:45',0,NULL,NULL,NULL),(48726,'Majuli',206,575,'2023-10-18 12:10:58',0,NULL,NULL,NULL),(48727,'Mbambaya',518,570,'2023-10-18 12:12:57',0,NULL,NULL,NULL),(48728,'Jelemani',360,565,'2023-10-18 12:13:43',0,NULL,NULL,NULL),(48729,'Jalachituwa',1126,565,'2023-10-18 12:17:45',0,NULL,NULL,NULL),(48730,'Msuzi',1038,570,'2023-10-18 12:31:31',0,NULL,NULL,NULL),(48731,'Mvunguti',629,585,'2023-10-18 12:32:23',0,NULL,NULL,NULL),(48732,'Chisaka',2356,565,'2023-10-18 12:34:43',0,NULL,NULL,NULL),(48733,'Guzani',365,565,'2023-10-18 12:35:14',0,NULL,NULL,NULL),(48734,'6miles',365,565,'2023-10-18 12:45:00',0,NULL,NULL,NULL),(48735,'Chonkholoni',2210,570,'2023-10-18 12:50:08',0,NULL,NULL,NULL),(48736,'Area9',835,570,'2023-10-18 12:50:55',0,NULL,NULL,NULL),(48737,'Daudi',2138,565,'2023-10-18 12:57:46',0,NULL,NULL,NULL),(48738,'Misoli',871,570,'2023-10-18 13:01:35',0,NULL,NULL,NULL),(48739,'Unknown',1491,435,'2023-10-18 13:01:46',0,NULL,NULL,NULL),(48740,'Nsabwe',305,571,'2023-10-18 13:04:04',0,NULL,NULL,NULL),(48741,'Mpalume',1786,284,'2023-10-18 13:05:01',0,NULL,NULL,NULL),(48742,'Njiwa',1032,284,'2023-10-18 13:05:39',0,NULL,NULL,NULL),(48743,'Kumchema',254,565,'2023-10-18 13:09:26',0,NULL,NULL,NULL),(48744,'Chonde',457,571,'2023-10-18 13:11:53',0,NULL,NULL,NULL),(48745,'Nukhaludzu',591,570,'2023-10-18 13:18:37',0,NULL,NULL,NULL),(48746,'Namatetule',867,565,'2023-10-18 13:27:52',0,NULL,NULL,NULL),(48747,'Mphanda',370,565,'2023-10-18 13:51:27',0,NULL,NULL,NULL),(48748,'Mwatoko',2357,571,'2023-10-18 14:10:57',0,NULL,NULL,NULL),(48749,'Ng\'ambani',2358,571,'2023-10-18 14:16:41',0,NULL,NULL,NULL),(48750,'Mulanda',195,571,'2023-10-18 14:33:39',0,NULL,NULL,NULL),(48751,'Minama',1178,435,'2023-10-19 08:47:27',0,NULL,NULL,NULL),(48752,'Kabuthu',1752,575,'2023-10-19 08:57:13',0,NULL,NULL,NULL),(48753,'Malingunde',2359,584,'2023-10-19 09:03:54',0,NULL,NULL,NULL),(48754,'Sambewa',99,584,'2023-10-19 09:08:35',0,NULL,NULL,NULL),(48755,'Mbera',2360,565,'2023-10-19 09:11:02',0,NULL,NULL,NULL),(48756,'Evelesi',115,584,'2023-10-19 09:13:24',0,NULL,NULL,NULL),(48757,'Nusu',2361,565,'2023-10-19 09:14:12',0,NULL,NULL,NULL),(48758,'Tambala',206,584,'2023-10-19 09:16:03',0,NULL,NULL,NULL),(48759,'Chigwe',2084,271,'2023-10-19 09:21:13',0,NULL,NULL,NULL),(48760,'Tsamba',93,565,'2023-10-19 09:22:27',0,NULL,NULL,NULL),(48761,'Kanyeramolo',2362,565,'2023-10-19 09:38:52',0,NULL,NULL,NULL),(48762,'Kabanda',181,565,'2023-10-19 09:42:29',0,NULL,NULL,NULL),(48763,'Gulaye',1784,587,'2023-10-19 09:52:28',0,NULL,NULL,NULL),(48764,'Gulaye',1784,587,'2023-10-19 09:52:28',0,NULL,NULL,NULL),(48765,'Mazengera',99,587,'2023-10-19 09:55:12',0,NULL,NULL,NULL),(48766,'MAZENGERA',99,587,'2023-10-19 09:55:15',0,NULL,NULL,NULL),(48767,'Mpeta',80,271,'2023-10-19 10:04:44',0,NULL,NULL,NULL),(48768,'Kamtunda',601,575,'2023-10-19 10:05:15',0,NULL,NULL,NULL),(48769,'Charengera',197,271,'2023-10-19 10:11:58',0,NULL,NULL,NULL),(48770,'Chimutu',615,567,'2023-10-19 10:13:46',0,NULL,NULL,NULL),(48771,'Makata',1178,583,'2023-10-19 10:18:59',0,NULL,NULL,NULL),(48772,'Chimoto',413,592,'2023-10-19 10:23:54',0,NULL,NULL,NULL),(48773,'Juwawo',175,592,'2023-10-19 10:29:02',0,NULL,NULL,NULL),(48774,'Chikasamoyo',192,592,'2023-10-19 10:32:45',0,NULL,NULL,NULL),(48775,'Siliya',1795,566,'2023-10-19 10:39:46',0,NULL,NULL,NULL),(48776,'Bypass',2086,566,'2023-10-19 10:40:06',0,NULL,NULL,NULL),(48777,'Mdoka',719,592,'2023-10-19 10:46:41',0,NULL,NULL,NULL),(48778,'Kadambe',113,583,'2023-10-19 10:54:32',0,NULL,NULL,NULL),(48779,'Nsewa',886,566,'2023-10-19 10:57:02',0,NULL,NULL,NULL),(48780,'Chigwamula',198,565,'2023-10-19 11:29:09',0,NULL,NULL,NULL),(48781,'Chigwamowa',198,565,'2023-10-19 11:29:29',0,NULL,NULL,NULL),(48782,'Sokoneza',2364,583,'2023-10-19 11:34:10',0,NULL,NULL,NULL),(48783,'Katete',365,583,'2023-10-19 11:34:55',0,NULL,NULL,NULL),(48784,'Mlenga',410,567,'2023-10-19 11:35:39',0,NULL,NULL,NULL),(48785,'Nkumphira',192,385,'2023-10-19 11:48:40',0,NULL,NULL,NULL),(48786,'Chizeze',370,565,'2023-10-19 11:49:39',0,NULL,NULL,NULL),(48787,'Mulomba',2365,584,'2023-10-19 11:50:26',0,NULL,NULL,NULL),(48788,'Kawale2',2003,583,'2023-10-19 11:55:23',0,NULL,NULL,NULL),(48789,'Achuta',316,584,'2023-10-19 11:55:47',0,NULL,NULL,NULL),(48790,'Kampangiza',200,565,'2023-10-19 11:56:52',0,NULL,NULL,NULL),(48791,'Tank',2306,324,'2023-10-19 12:01:18',0,NULL,NULL,NULL),(48792,'Kachikho',776,584,'2023-10-19 12:02:09',0,NULL,NULL,NULL),(48793,'Nantindi',814,565,'2023-10-19 12:04:12',0,NULL,NULL,NULL),(48794,'Mitanda',360,385,'2023-10-19 12:07:03',0,NULL,NULL,NULL),(48795,'Daudi',1659,565,'2023-10-19 12:11:52',0,NULL,NULL,NULL),(48796,'Malindima',1178,385,'2023-10-19 12:12:29',0,NULL,NULL,NULL),(48797,'Mulamba',188,435,'2023-10-19 12:15:10',0,NULL,NULL,NULL),(48798,'Bowa',114,584,'2023-10-19 12:16:12',0,NULL,NULL,NULL),(48799,'Makoloma',314,385,'2023-10-19 12:16:57',0,NULL,NULL,NULL),(48800,'Mpoko',114,435,'2023-10-19 12:29:56',0,NULL,NULL,NULL),(48801,'Kasengwa',113,565,'2023-10-19 12:32:21',0,NULL,NULL,NULL),(48802,'Mawere',2369,385,'2023-10-19 12:32:45',0,NULL,NULL,NULL),(48803,'Mawere',2369,385,'2023-10-19 12:32:56',0,NULL,NULL,NULL),(48804,'Chelunga',193,585,'2023-10-19 12:54:32',0,NULL,NULL,NULL),(48805,'Chinkwiri',1516,571,'2023-10-19 13:34:44',0,NULL,NULL,NULL),(48806,'Sela',2370,571,'2023-10-19 13:38:36',0,NULL,NULL,NULL),(48807,'Mphetsankhuli',397,571,'2023-10-19 13:47:37',0,NULL,NULL,NULL),(48808,'Mponda',1709,571,'2023-10-19 14:04:19',0,NULL,NULL,NULL),(48809,'Maganja',591,585,'2023-10-19 14:05:27',0,NULL,NULL,NULL),(48810,'Kalombola',867,571,'2023-10-19 14:13:38',0,NULL,NULL,NULL),(48811,'Sauya',2373,571,'2023-10-19 14:22:11',0,NULL,NULL,NULL),(48812,'Chituwire',2374,567,'2023-10-19 14:51:07',0,NULL,NULL,NULL),(48813,'Mbaluku',1652,578,'2023-10-20 09:07:11',0,NULL,NULL,NULL),(48814,'Mtsiliza',2375,583,'2023-10-20 09:24:56',0,NULL,NULL,NULL),(48815,'Kasaula',1752,592,'2023-10-20 09:33:09',0,NULL,NULL,NULL),(48816,'Nkhozombe',396,583,'2023-10-20 09:36:03',0,NULL,NULL,NULL),(48817,'Kanthumdzanja',1425,587,'2023-10-20 09:43:02',0,NULL,NULL,NULL),(48818,'Mathotho',1789,566,'2023-10-20 09:43:26',0,NULL,NULL,NULL),(48819,'Changata',2377,565,'2023-10-20 09:47:00',0,NULL,NULL,NULL),(48820,'Makanda',1752,592,'2023-10-20 09:47:08',0,NULL,NULL,NULL),(48821,'Hassan',190,583,'2023-10-20 09:48:41',0,NULL,NULL,NULL),(48822,'Jamu',929,585,'2023-10-20 09:50:48',0,NULL,NULL,NULL),(48823,'Kapinula',186,565,'2023-10-20 09:55:58',0,NULL,NULL,NULL),(48824,'Kantibinya',369,592,'2023-10-20 09:56:43',0,NULL,NULL,NULL),(48825,'Chikumba',116,566,'2023-10-20 09:57:07',0,NULL,NULL,NULL),(48826,'Zikondeyani',73,585,'2023-10-20 10:00:44',0,NULL,NULL,NULL),(48827,'Area27',2378,585,'2023-10-20 10:01:22',0,NULL,NULL,NULL),(48828,'Changata',456,566,'2023-10-20 10:03:57',0,NULL,NULL,NULL),(48829,'Chileka',812,565,'2023-10-20 10:08:28',0,NULL,NULL,NULL),(48830,'Kamulepu',175,592,'2023-10-20 10:10:11',0,NULL,NULL,NULL),(48831,'Tsabango',2379,565,'2023-10-20 10:12:22',0,NULL,NULL,NULL),(48832,'Mbweso',2379,565,'2023-10-20 10:13:13',0,NULL,NULL,NULL),(48833,'Kaondo',2380,583,'2023-10-20 10:13:42',0,NULL,NULL,NULL),(48834,'Balasi',206,565,'2023-10-20 10:21:30',0,NULL,NULL,NULL),(48835,'Kalongo',1067,592,'2023-10-20 10:25:09',0,NULL,NULL,NULL),(48836,'Nsundwe',482,585,'2023-10-20 10:25:25',0,NULL,NULL,NULL),(48837,'Magona',202,592,'2023-10-20 10:32:34',0,NULL,NULL,NULL),(48838,'Gaga',2303,592,'2023-10-20 10:38:10',0,NULL,NULL,NULL),(48839,'Mgoniwa',253,585,'2023-10-20 10:42:27',0,NULL,NULL,NULL),(48840,'Motsasa',341,572,'2023-10-20 10:55:49',0,NULL,NULL,NULL),(48841,'Maula',1061,574,'2023-10-20 10:59:27',0,NULL,NULL,NULL),(48842,'Chamba',1216,583,'2023-10-20 11:00:15',0,NULL,NULL,NULL),(48843,'Nyalombe',1711,584,'2023-10-20 11:07:28',0,NULL,NULL,NULL),(48844,'Makiyi',360,572,'2023-10-20 11:10:09',0,NULL,NULL,NULL),(48845,'Manjomo',350,574,'2023-10-20 11:10:39',0,NULL,NULL,NULL),(48846,'Dzole',1693,572,'2023-10-20 11:13:41',0,NULL,NULL,NULL),(48847,'Ndamanya',251,324,'2023-10-20 11:20:14',0,NULL,NULL,NULL),(48848,'Makungula',843,567,'2023-10-20 11:20:53',0,NULL,NULL,NULL),(48849,'Kaponda',643,572,'2023-10-20 11:20:58',0,NULL,NULL,NULL),(48850,'Madzianyanja',439,574,'2023-10-20 11:27:43',0,NULL,NULL,NULL),(48851,'Unknown',1562,572,'2023-10-20 11:31:15',0,NULL,NULL,NULL),(48852,'Mulingama',322,324,'2023-10-20 11:32:17',0,NULL,NULL,NULL),(48853,'Payere',2085,330,'2023-10-20 11:35:48',0,NULL,NULL,NULL),(48854,'Chikosi',498,572,'2023-10-20 11:39:57',0,NULL,NULL,NULL),(48855,'Chinsapo2',353,582,'2023-10-20 11:49:50',0,NULL,NULL,NULL),(48856,'Ng\'omba',897,584,'2023-10-20 12:03:50',0,NULL,NULL,NULL),(48857,'Mazuma',321,584,'2023-10-20 12:13:40',0,NULL,NULL,NULL),(48858,'Powder',546,585,'2023-10-20 12:18:35',0,NULL,NULL,NULL),(48859,'Unknown',2002,585,'2023-10-20 12:43:51',0,NULL,NULL,NULL),(48860,'Noah',357,585,'2023-10-20 12:57:26',0,NULL,NULL,NULL),(48861,'Pemba',883,94,'2023-10-20 13:00:29',0,NULL,NULL,NULL),(48862,'Mpalume',914,567,'2023-10-20 13:51:55',0,NULL,NULL,NULL),(48863,'Chimaliro',589,567,'2023-10-20 14:45:33',0,NULL,NULL,NULL),(48864,'Dubai',1105,567,'2023-10-20 14:46:04',0,NULL,NULL,NULL),(48865,'Zidala',2382,571,'2023-10-20 14:53:43',0,NULL,NULL,NULL),(48866,'Chanika',1693,571,'2023-10-20 15:18:57',0,NULL,NULL,NULL),(48867,'Ngabu',397,94,'2023-10-20 16:46:36',0,NULL,NULL,NULL),(48868,'Chiweza',114,94,'2023-10-23 07:24:15',0,NULL,NULL,NULL),(48869,'Potani',814,563,'2023-10-23 09:13:12',0,NULL,NULL,NULL),(48870,'Kachewele',757,563,'2023-10-23 09:13:55',0,NULL,NULL,NULL),(48871,'Malire',814,270,'2023-10-23 09:20:43',0,NULL,NULL,NULL),(48872,'Potani',1763,563,'2023-10-23 09:27:55',0,NULL,NULL,NULL),(48873,'Chiwaya',2383,565,'2023-10-23 09:29:39',0,NULL,NULL,NULL),(48874,'Kalindo',2384,565,'2023-10-23 09:33:54',0,NULL,NULL,NULL),(48875,'Chazima',2385,94,'2023-10-23 09:36:42',0,NULL,NULL,NULL),(48876,'Jamu',623,592,'2023-10-23 09:38:37',0,NULL,NULL,NULL),(48877,'Manamanga',177,592,'2023-10-23 09:39:21',0,NULL,NULL,NULL),(48878,'Katalama',2122,592,'2023-10-23 09:46:09',0,NULL,NULL,NULL),(48879,'Zamezame',2386,565,'2023-10-23 09:51:26',0,NULL,NULL,NULL),(48880,'ZAMEZAME',2386,565,'2023-10-23 09:51:31',0,NULL,NULL,NULL),(48881,'Dombolera',2192,565,'2023-10-23 09:55:39',0,NULL,NULL,NULL),(48882,'Chikhawo',482,565,'2023-10-23 09:58:55',0,NULL,NULL,NULL),(48883,'Kafumbi',193,435,'2023-10-23 10:03:17',0,NULL,NULL,NULL),(48884,'Mkwena',2107,570,'2023-10-23 10:46:40',0,NULL,NULL,NULL),(48885,'Area49',1137,570,'2023-10-23 10:47:10',0,NULL,NULL,NULL),(48886,'Chimzimu',1693,570,'2023-10-23 10:58:03',0,NULL,NULL,NULL),(48887,'Sector 1',1807,435,'2023-10-23 11:00:05',0,NULL,NULL,NULL),(48888,'Area 22',2388,270,'2023-10-23 11:03:08',0,NULL,NULL,NULL),(48889,'Area 22',2387,270,'2023-10-23 11:03:32',0,NULL,NULL,NULL),(48890,'Chisoyi',119,565,'2023-10-23 11:03:37',0,NULL,NULL,NULL),(48891,'William',2003,570,'2023-10-23 11:06:29',0,NULL,NULL,NULL),(48892,'Nsana',143,587,'2023-10-23 11:06:55',0,NULL,NULL,NULL),(48893,'6miles',113,565,'2023-10-23 11:08:14',0,NULL,NULL,NULL),(48894,'Msanga',1693,570,'2023-10-23 11:11:48',0,NULL,NULL,NULL),(48895,'Area 22',2389,272,'2023-10-23 11:14:51',0,NULL,NULL,NULL),(48896,'Puwele',373,584,'2023-10-23 11:17:37',0,NULL,NULL,NULL),(48897,'Kumbuziwakumwala',770,570,'2023-10-23 11:17:56',0,NULL,NULL,NULL),(48898,'Chauma',404,570,'2023-10-23 11:22:36',0,NULL,NULL,NULL),(48899,'Kumayani',1518,584,'2023-10-23 11:24:14',0,NULL,NULL,NULL),(48900,'Madzino',1693,570,'2023-10-23 11:25:42',0,NULL,NULL,NULL),(48901,'Kayera',715,570,'2023-10-23 11:32:06',0,NULL,NULL,NULL),(48902,'Ganizani',2390,570,'2023-10-23 11:32:36',0,NULL,NULL,NULL),(48903,'Kachala',2085,284,'2023-10-23 11:33:30',0,NULL,NULL,NULL),(48904,'Harry',474,584,'2023-10-23 11:33:34',0,NULL,NULL,NULL),(48905,'Chibwana',755,564,'2023-10-23 11:36:43',0,NULL,NULL,NULL),(48906,'Mkamila',90,564,'2023-10-23 11:40:32',0,NULL,NULL,NULL),(48907,'Area36',2392,570,'2023-10-23 11:43:30',0,NULL,NULL,NULL),(48908,'Jusi',1136,584,'2023-10-23 11:51:28',0,NULL,NULL,NULL),(48909,'Tubwe',116,570,'2023-10-23 11:51:39',0,NULL,NULL,NULL),(48910,'Tubwe',116,570,'2023-10-23 11:51:45',0,NULL,NULL,NULL),(48911,'Mulumbe',1785,584,'2023-10-23 11:55:16',0,NULL,NULL,NULL),(48912,'Chiganga',2393,570,'2023-10-23 11:56:00',0,NULL,NULL,NULL),(48913,'Kakwembe',1899,584,'2023-10-23 11:58:24',0,NULL,NULL,NULL),(48914,'Achowi',2003,570,'2023-10-23 11:59:19',0,NULL,NULL,NULL),(48915,'Chelusani',1774,570,'2023-10-23 12:02:39',0,NULL,NULL,NULL),(48916,'Kwacha',2394,584,'2023-10-23 12:04:10',0,NULL,NULL,NULL),(48917,'Area21',2395,584,'2023-10-23 12:04:56',0,NULL,NULL,NULL),(48918,'Sitima',2080,570,'2023-10-23 12:09:44',0,NULL,NULL,NULL),(48919,'Chauma',2396,584,'2023-10-23 12:11:57',0,NULL,NULL,NULL),(48920,'Mtenje',1046,94,'2023-10-23 12:13:51',0,NULL,NULL,NULL),(48921,'Zanyila',208,570,'2023-10-23 12:24:23',0,NULL,NULL,NULL),(48922,'Lali',224,584,'2023-10-23 12:27:04',0,NULL,NULL,NULL),(48923,'Chinthodo',95,582,'2023-10-23 12:31:03',0,NULL,NULL,NULL),(48924,'Area36',360,570,'2023-10-23 12:35:11',0,NULL,NULL,NULL),(48925,'Timoti',354,582,'2023-10-23 12:36:27',0,NULL,NULL,NULL),(48926,'Mchele',107,570,'2023-10-23 12:38:33',0,NULL,NULL,NULL),(48927,'Kaphinda',404,584,'2023-10-23 12:40:20',0,NULL,NULL,NULL),(48928,'Katsache',2398,582,'2023-10-23 12:41:24',0,NULL,NULL,NULL),(48929,'Chapata',1220,582,'2023-10-23 12:45:29',0,NULL,NULL,NULL),(48930,'Chagaga',115,582,'2023-10-23 12:46:02',0,NULL,NULL,NULL),(48931,'Ntanda',429,565,'2023-10-23 12:47:08',0,NULL,NULL,NULL),(48932,'Malemusa',250,584,'2023-10-23 12:47:50',0,NULL,NULL,NULL),(48933,'Ntanja',2399,565,'2023-10-23 12:52:49',0,NULL,NULL,NULL),(48934,'Kaphatenga',2400,565,'2023-10-23 12:55:46',0,NULL,NULL,NULL),(48935,' area  4',123,365,'2023-10-23 13:49:16',0,NULL,NULL,NULL),(48936,'Khola',219,365,'2023-10-23 14:11:53',0,NULL,NULL,NULL),(48937,'Ngona',211,365,'2023-10-23 15:12:27',0,NULL,NULL,NULL),(48938,'Mussa',220,270,'2023-10-24 07:46:13',0,NULL,NULL,NULL),(48939,'Chipojora',775,567,'2023-10-24 08:33:53',0,NULL,NULL,NULL),(48940,'Tambalale',1203,400,'2023-10-24 08:39:13',0,NULL,NULL,NULL),(48941,'Kavumba',391,435,'2023-10-24 08:40:45',0,NULL,NULL,NULL),(48942,'Chenamale',1634,567,'2023-10-24 08:47:07',0,NULL,NULL,NULL),(48943,'Chilikundi2',814,566,'2023-10-24 09:08:08',0,NULL,NULL,NULL),(48944,'Soda',2083,592,'2023-10-24 09:14:49',0,NULL,NULL,NULL),(48945,'SODA',2083,592,'2023-10-24 09:14:51',0,NULL,NULL,NULL),(48946,'Area 49',351,566,'2023-10-24 09:20:30',0,NULL,NULL,NULL),(48947,'Chipopo',1899,435,'2023-10-24 09:21:17',0,NULL,NULL,NULL),(48948,'Mwatse',1989,592,'2023-10-24 09:26:10',0,NULL,NULL,NULL),(48949,'Mchacha',1854,270,'2023-10-24 09:32:12',0,NULL,NULL,NULL),(48950,'Robi',391,592,'2023-10-24 09:33:19',0,NULL,NULL,NULL),(48951,'Kantande',193,587,'2023-10-24 09:35:58',0,NULL,NULL,NULL),(48952,'Makunganya',205,568,'2023-10-24 09:38:29',0,NULL,NULL,NULL),(48953,'Mwayuweyu',1858,587,'2023-10-24 09:41:04',0,NULL,NULL,NULL),(48954,'Nakhumba',2404,592,'2023-10-24 09:42:15',0,NULL,NULL,NULL),(48955,'Tsiliza',2075,592,'2023-10-24 09:51:06',0,NULL,NULL,NULL),(48956,'Maluwa',439,592,'2023-10-24 10:04:56',0,NULL,NULL,NULL),(48957,'Area 38',365,566,'2023-10-24 10:13:48',0,NULL,NULL,NULL),(48958,'Ngwenya',2303,592,'2023-10-24 10:14:01',0,NULL,NULL,NULL),(48959,'Nguma',354,566,'2023-10-24 10:19:50',0,NULL,NULL,NULL),(48960,'Mkanda',181,565,'2023-10-24 10:26:58',0,NULL,NULL,NULL),(48961,'Chelifa',1770,435,'2023-10-24 10:27:49',0,NULL,NULL,NULL),(48962,'Tusida',474,566,'2023-10-24 10:28:25',0,NULL,NULL,NULL),(48963,'Akufunde',770,570,'2023-10-24 10:33:11',0,NULL,NULL,NULL),(48964,'Ntandire',2363,270,'2023-10-24 10:36:06',0,NULL,NULL,NULL),(48965,'Unknown',187,435,'2023-10-24 10:39:58',0,NULL,NULL,NULL),(48966,'Mitepela',396,570,'2023-10-24 10:42:33',0,NULL,NULL,NULL),(48967,'Majingo',119,565,'2023-10-24 10:44:46',0,NULL,NULL,NULL),(48968,'Kanjuwale',719,270,'2023-10-24 10:45:11',0,NULL,NULL,NULL),(48969,'Ziphonje',1489,584,'2023-10-24 10:46:58',0,NULL,NULL,NULL),(48970,'Siwande',2407,565,'2023-10-24 10:51:25',0,NULL,NULL,NULL),(48971,'Zamizami',2408,565,'2023-10-24 10:52:28',0,NULL,NULL,NULL),(48972,'Chimera',536,584,'2023-10-24 10:52:45',0,NULL,NULL,NULL),(48973,'Kathewera',2409,94,'2023-10-24 10:53:07',0,NULL,NULL,NULL),(48974,'Chilimani',682,565,'2023-10-24 10:59:21',0,NULL,NULL,NULL),(48975,'Lufaneti',1989,435,'2023-10-24 11:00:22',0,NULL,NULL,NULL),(48976,'Kundazuwa',554,570,'2023-10-24 11:02:06',0,NULL,NULL,NULL),(48977,'Area3',1032,584,'2023-10-24 11:02:33',0,NULL,NULL,NULL),(48978,'Chimwala',1800,570,'2023-10-24 11:02:40',0,NULL,NULL,NULL),(48979,'Kamphanga',91,570,'2023-10-24 11:06:15',0,NULL,NULL,NULL),(48980,'Kanthawire',297,587,'2023-10-24 11:06:31',0,NULL,NULL,NULL),(48981,'Mwenyama',351,94,'2023-10-24 11:10:43',0,NULL,NULL,NULL),(48982,'Nalihonga',2410,570,'2023-10-24 11:11:14',0,NULL,NULL,NULL),(48983,'Area36',113,570,'2023-10-24 11:11:32',0,NULL,NULL,NULL),(48984,'Matemba',580,570,'2023-10-24 11:14:29',0,NULL,NULL,NULL),(48985,'Njoka',1111,270,'2023-10-24 11:15:23',0,NULL,NULL,NULL),(48986,'Bongwe',1038,435,'2023-10-24 11:15:43',0,NULL,NULL,NULL),(48987,'Kambenje',350,587,'2023-10-24 11:16:36',0,NULL,NULL,NULL),(48988,'Sache',259,567,'2023-10-24 11:20:20',0,NULL,NULL,NULL),(48989,'Tsilo',2411,570,'2023-10-24 11:21:44',0,NULL,NULL,NULL),(48990,'Yeneya',209,587,'2023-10-24 11:26:00',0,NULL,NULL,NULL),(48991,'Ndekha',113,570,'2023-10-24 11:26:07',0,NULL,NULL,NULL),(48992,'Mpondamwali',1800,570,'2023-10-24 11:26:51',0,NULL,NULL,NULL),(48993,'Sikelo',180,584,'2023-10-24 11:28:31',0,NULL,NULL,NULL),(48994,'Mkokoko',464,565,'2023-10-24 11:32:08',0,NULL,NULL,NULL),(48995,'Mchacha',2412,565,'2023-10-24 11:35:43',0,NULL,NULL,NULL),(48996,'Kunyungwi',1036,565,'2023-10-24 11:39:01',0,NULL,NULL,NULL),(48997,'Msanga',155,587,'2023-10-24 11:39:24',0,NULL,NULL,NULL),(48998,'Kadzanja',1762,571,'2023-10-24 14:52:01',0,NULL,NULL,NULL),(48999,'Area 23',770,571,'2023-10-24 14:52:38',0,NULL,NULL,NULL),(49000,'Gologota',770,571,'2023-10-24 15:22:13',0,NULL,NULL,NULL),(49001,'George',591,571,'2023-10-24 15:24:47',0,NULL,NULL,NULL),(49002,'Waterboard',2306,365,'2023-10-24 17:06:19',0,NULL,NULL,NULL),(49003,'Chihana',585,270,'2023-10-25 08:40:00',0,NULL,NULL,NULL),(49004,'Nkhumbo',66,270,'2023-10-25 08:50:55',0,NULL,NULL,NULL),(49005,'Chikumbu',1289,270,'2023-10-25 09:07:42',0,NULL,NULL,NULL),(49006,'Tambala',2414,270,'2023-10-25 09:08:23',0,NULL,NULL,NULL),(49007,'Bashilo',398,284,'2023-10-25 09:17:54',0,NULL,NULL,NULL),(49008,'Kadzombo',618,566,'2023-10-25 09:26:21',0,NULL,NULL,NULL),(49009,'Chibongo',114,570,'2023-10-25 09:33:15',0,NULL,NULL,NULL),(49010,'Chisapo1',114,570,'2023-10-25 09:33:43',0,NULL,NULL,NULL),(49011,'Unknown',379,570,'2023-10-25 09:42:17',0,NULL,NULL,NULL),(49012,'Majawa',218,569,'2023-10-25 09:53:47',0,NULL,NULL,NULL),(49013,'Sibu',218,592,'2023-10-25 09:53:57',0,NULL,NULL,NULL),(49014,'Chemalola',251,270,'2023-10-25 09:54:52',0,NULL,NULL,NULL),(49015,'Katatha',2086,592,'2023-10-25 10:01:51',0,NULL,NULL,NULL),(49016,'Chimwaza',1693,569,'2023-10-25 10:09:03',0,NULL,NULL,NULL),(49017,'Kang\'aza',1903,592,'2023-10-25 10:10:24',0,NULL,NULL,NULL),(49018,'Jonas',1096,435,'2023-10-25 10:10:59',0,NULL,NULL,NULL),(49019,'Mbelwa',585,567,'2023-10-25 10:12:44',0,NULL,NULL,NULL),(49020,'Njerwa',413,592,'2023-10-25 10:17:41',0,NULL,NULL,NULL),(49021,'Khungwa',74,569,'2023-10-25 10:30:26',0,NULL,NULL,NULL),(49022,'Nalingula',2418,567,'2023-10-25 10:36:38',0,NULL,NULL,NULL),(49023,'Khungwa',2419,592,'2023-10-25 10:36:58',0,NULL,NULL,NULL),(49024,'Mponda',1012,567,'2023-10-25 10:37:09',0,NULL,NULL,NULL),(49025,'Mwase',1155,592,'2023-10-25 10:37:33',0,NULL,NULL,NULL),(49026,'Khwisa',2349,409,'2023-10-25 10:40:22',0,NULL,NULL,NULL),(49027,'Kaijele',208,570,'2023-10-25 10:45:41',0,NULL,NULL,NULL),(49028,'Mgwayi',1032,592,'2023-10-25 10:49:38',0,NULL,NULL,NULL),(49029,'Chipangu',770,570,'2023-10-25 10:49:51',0,NULL,NULL,NULL),(49030,'Nankhoma',260,570,'2023-10-25 10:53:02',0,NULL,NULL,NULL),(49031,'Chizimba',370,570,'2023-10-25 10:53:33',0,NULL,NULL,NULL),(49032,'White2',502,570,'2023-10-25 10:56:19',0,NULL,NULL,NULL),(49033,'Ambemba',370,570,'2023-10-25 10:56:39',0,NULL,NULL,NULL),(49034,'Chekucheku',688,584,'2023-10-25 10:57:29',0,NULL,NULL,NULL),(49035,'Sitolo',1693,570,'2023-10-25 10:59:00',0,NULL,NULL,NULL),(49036,'Tsinje',1800,570,'2023-10-25 10:59:40',0,NULL,NULL,NULL),(49037,'Chiwamba',770,409,'2023-10-25 11:01:24',0,NULL,NULL,NULL),(49038,'Area30',1032,584,'2023-10-25 11:02:26',0,NULL,NULL,NULL),(49044,'Mpondamwala',429,566,'2023-10-25 11:07:24',0,NULL,NULL,NULL),(49045,'Maleule',333,582,'2023-10-25 11:10:20',0,NULL,NULL,NULL),(49046,'Njilasowe',193,570,'2023-10-25 11:13:17',0,NULL,NULL,NULL),(49047,'Lobi',1873,582,'2023-10-25 11:15:19',0,NULL,NULL,NULL),(49048,'Kasonga',2422,409,'2023-10-25 11:18:40',0,NULL,NULL,NULL),(49049,'Chimbowa',1693,570,'2023-10-25 11:20:49',0,NULL,NULL,NULL),(49050,'Otungambela',1693,570,'2023-10-25 11:21:24',0,NULL,NULL,NULL),(49051,'Enukweni',1060,569,'2023-10-25 11:24:25',0,NULL,NULL,NULL),(49052,'Kangwanda',411,270,'2023-10-25 11:25:39',0,NULL,NULL,NULL),(49053,'Kachele',1693,570,'2023-10-25 11:25:58',0,NULL,NULL,NULL),(49054,'Kangwanda',354,270,'2023-10-25 11:26:09',0,NULL,NULL,NULL),(49055,'Chipala',1774,582,'2023-10-25 11:28:12',0,NULL,NULL,NULL),(49056,'Unknown',2423,570,'2023-10-25 11:29:51',0,NULL,NULL,NULL),(49057,'Chasesa',1636,582,'2023-10-25 11:32:47',0,NULL,NULL,NULL),(49058,'Nkhoma',360,409,'2023-10-25 11:33:31',0,NULL,NULL,NULL),(49059,'Jenda',2424,94,'2023-10-25 11:36:07',0,NULL,NULL,NULL),(49060,'Biscop',1218,409,'2023-10-25 11:41:28',0,NULL,NULL,NULL),(49061,'Zammimba',536,409,'2023-10-25 11:47:11',0,NULL,NULL,NULL),(49062,'Nkuna',319,566,'2023-10-25 12:03:18',0,NULL,NULL,NULL),(49063,'Sunda',645,567,'2023-10-25 12:19:47',0,NULL,NULL,NULL),(49064,'Sunga',877,567,'2023-10-25 12:20:25',0,NULL,NULL,NULL),(49065,'Chata',1203,567,'2023-10-25 12:25:20',0,NULL,NULL,NULL),(49066,'Mpaya',118,458,'2023-10-25 13:50:29',0,NULL,NULL,NULL),(49067,'Misowe',211,458,'2023-10-25 13:55:29',0,NULL,NULL,NULL),(49068,'Kwataine',199,458,'2023-10-25 14:01:10',0,NULL,NULL,NULL),(49069,'Natowa',250,365,'2023-10-25 14:03:37',0,NULL,NULL,NULL),(49070,'Kamtedza',113,458,'2023-10-25 14:19:18',0,NULL,NULL,NULL),(49071,'Mwase',76,571,'2023-10-25 14:53:22',0,NULL,NULL,NULL),(49072,'Kagwanda',2132,94,'2023-10-26 07:06:05',0,NULL,NULL,NULL),(49073,'Chilopam',251,565,'2023-10-26 08:22:14',0,NULL,NULL,NULL),(49074,'Chimaliro',883,329,'2023-10-26 08:23:28',0,NULL,NULL,NULL),(49075,'Chioko',2085,329,'2023-10-26 08:25:20',0,NULL,NULL,NULL),(49076,'Kumbale',370,270,'2023-10-26 08:54:59',0,NULL,NULL,NULL),(49077,'Lupunga',1218,270,'2023-10-26 09:48:48',0,NULL,NULL,NULL),(49078,'Gawani',398,585,'2023-10-26 09:59:11',0,NULL,NULL,NULL),(49079,'Mwenera',413,585,'2023-10-26 10:11:51',0,NULL,NULL,NULL),(49080,'Masiyano',1038,575,'2023-10-26 10:24:57',0,NULL,NULL,NULL),(49081,'Nill',2426,563,'2023-10-26 10:25:05',0,NULL,NULL,NULL),(49082,'Nill',416,563,'2023-10-26 10:26:35',0,NULL,NULL,NULL),(49083,'Koneliwa',1795,565,'2023-10-26 10:32:02',0,NULL,NULL,NULL),(49084,'Nili',416,563,'2023-10-26 10:33:37',0,NULL,NULL,NULL),(49085,'Malabwe',209,385,'2023-10-26 10:40:20',0,NULL,NULL,NULL),(49086,'Mlangeni',447,575,'2023-10-26 10:46:07',0,NULL,NULL,NULL),(49087,'Manyowe',867,585,'2023-10-26 10:47:13',0,NULL,NULL,NULL),(49088,'Menya',1038,385,'2023-10-26 10:59:28',0,NULL,NULL,NULL),(49089,'Nanjili',360,584,'2023-10-26 11:16:54',0,NULL,NULL,NULL),(49090,'Kapita',370,584,'2023-10-26 11:22:04',0,NULL,NULL,NULL),(49091,'Nchisi',365,584,'2023-10-26 11:25:18',0,NULL,NULL,NULL),(49092,'Maliwa',719,270,'2023-10-26 11:37:03',0,NULL,NULL,NULL),(49093,'Area50',2302,314,'2023-10-26 11:37:20',0,NULL,NULL,NULL),(49094,'Kaluzi',98,365,'2023-10-26 12:51:47',0,NULL,NULL,NULL),(49095,'Saiwa',2007,365,'2023-10-26 13:36:44',0,NULL,NULL,NULL),(49096,'Kachakwala',867,458,'2023-10-26 14:29:01',0,NULL,NULL,NULL),(49097,'Zamkutu',769,458,'2023-10-26 14:37:44',0,NULL,NULL,NULL),(49098,'Kawaza',1101,458,'2023-10-26 14:41:32',0,NULL,NULL,NULL),(49099,'Bulikumwendo',179,458,'2023-10-26 14:51:14',0,NULL,NULL,NULL),(49100,'Maliwa',404,571,'2023-10-26 15:09:17',0,NULL,NULL,NULL),(49101,'Gulule',115,270,'2023-10-27 08:09:19',0,NULL,NULL,NULL),(49102,'Chawuwu',370,435,'2023-10-27 08:19:30',0,NULL,NULL,NULL),(49103,'Mchocho',108,565,'2023-10-27 08:27:27',0,NULL,NULL,NULL),(49104,'Chimwaye',257,565,'2023-10-27 09:10:50',0,NULL,NULL,NULL),(49105,'Bongwe',2107,435,'2023-10-27 09:23:07',0,NULL,NULL,NULL),(49106,'Chitete',98,585,'2023-10-27 09:36:50',0,NULL,NULL,NULL),(49107,'Chiphinga',2429,592,'2023-10-27 09:46:10',0,NULL,NULL,NULL),(49108,'Gaga',2306,592,'2023-10-27 09:47:21',0,NULL,NULL,NULL),(49109,'Guya',200,566,'2023-10-27 09:57:43',0,NULL,NULL,NULL),(49110,'Nampantha',880,592,'2023-10-27 09:57:44',0,NULL,NULL,NULL),(49111,'Jumbe',102,565,'2023-10-27 09:59:04',0,NULL,NULL,NULL),(49112,'Njerwa',175,566,'2023-10-27 09:59:30',0,NULL,NULL,NULL),(49113,'Unknown',212,435,'2023-10-27 10:00:13',0,NULL,NULL,NULL),(49114,'Chagogo',581,566,'2023-10-27 10:14:07',0,NULL,NULL,NULL),(49115,'Masula',397,566,'2023-10-27 10:29:31',0,NULL,NULL,NULL),(49116,'Yakhenjani',2430,565,'2023-10-27 10:30:07',0,NULL,NULL,NULL),(49117,'Katsekaminga',391,566,'2023-10-27 10:35:55',0,NULL,NULL,NULL),(49118,'Mponela',1762,94,'2023-10-27 10:36:47',0,NULL,NULL,NULL),(49119,'Kalumba',576,570,'2023-10-27 10:43:32',0,NULL,NULL,NULL),(49120,'Chesteven',1643,385,'2023-10-27 10:44:52',0,NULL,NULL,NULL),(49121,'Chisewe',2431,566,'2023-10-27 10:45:26',0,NULL,NULL,NULL),(49122,'New shire',1032,565,'2023-10-27 10:46:00',0,NULL,NULL,NULL),(49123,'Nakambale',198,458,'2023-10-27 10:46:40',0,NULL,NULL,NULL),(49124,'Mphande',2432,570,'2023-10-27 10:52:13',0,NULL,NULL,NULL),(49125,'Kutonya',193,435,'2023-10-27 10:52:51',0,NULL,NULL,NULL),(49126,'Gomani',2434,575,'2023-10-27 10:54:10',0,NULL,NULL,NULL),(49127,'Zalengela2',447,584,'2023-10-27 10:57:20',0,NULL,NULL,NULL),(49128,'Masamba',1032,570,'2023-10-27 11:05:29',0,NULL,NULL,NULL),(49129,'Nkwanangwe',189,570,'2023-10-27 11:11:48',0,NULL,NULL,NULL),(49130,'Unknown',770,570,'2023-10-27 11:12:27',0,NULL,NULL,NULL),(49131,'Chowa',116,584,'2023-10-27 11:13:18',0,NULL,NULL,NULL),(49132,'Nakwichi',113,570,'2023-10-27 11:15:47',0,NULL,NULL,NULL),(49133,'Chikanga',1693,570,'2023-10-27 11:20:47',0,NULL,NULL,NULL),(49134,'Benito',2166,270,'2023-10-27 11:21:43',0,NULL,NULL,NULL),(49135,'Filimon',370,565,'2023-10-27 11:22:33',0,NULL,NULL,NULL),(49136,'Kandinyaza',298,575,'2023-10-27 11:23:31',0,NULL,NULL,NULL),(49137,'Muyimwa',304,270,'2023-10-27 11:56:15',0,NULL,NULL,NULL),(49138,'Tisungane',1793,565,'2023-10-27 11:57:19',0,NULL,NULL,NULL),(49139,'Maputa',341,458,'2023-10-27 12:02:49',0,NULL,NULL,NULL),(49140,'MAPUTA',341,458,'2023-10-27 12:02:56',0,NULL,NULL,NULL),(49141,'Pcm',359,94,'2023-10-27 12:04:33',0,NULL,NULL,NULL),(49142,'Dinda',116,458,'2023-10-27 12:08:44',0,NULL,NULL,NULL),(49143,'Chimombo',165,270,'2023-10-27 12:17:14',0,NULL,NULL,NULL),(49144,'Iyamba',1491,575,'2023-10-27 12:17:33',0,NULL,NULL,NULL),(49145,'Mphezi',1218,270,'2023-10-27 12:21:13',0,NULL,NULL,NULL),(49146,'Unknown',233,585,'2023-10-27 13:42:33',0,NULL,NULL,NULL),(49147,'Goman',232,585,'2023-10-27 14:09:52',0,NULL,NULL,NULL),(49148,'Nzanga',102,575,'2023-10-27 14:42:38',0,NULL,NULL,NULL),(49149,'Nchinji',202,409,'2023-10-27 14:49:12',0,NULL,NULL,NULL),(49150,'Mastimarry',198,409,'2023-10-27 14:59:06',0,NULL,NULL,NULL),(49151,'Chitipi',439,409,'2023-10-27 15:09:56',0,NULL,NULL,NULL),(49152,'Sogoja',816,324,'2023-10-28 09:30:18',0,NULL,NULL,NULL),(49153,'Matekenya',618,587,'2023-10-30 08:18:04',0,NULL,NULL,NULL),(49154,'Chiutula',2437,570,'2023-10-30 08:57:40',0,NULL,NULL,NULL),(49155,'Kalichela',593,570,'2023-10-30 09:01:52',0,NULL,NULL,NULL),(49156,'Unknown',2438,570,'2023-10-30 09:02:20',0,NULL,NULL,NULL),(49157,'Kachule',189,584,'2023-10-30 09:02:36',0,NULL,NULL,NULL),(49158,'Kawole',2439,570,'2023-10-30 09:05:02',0,NULL,NULL,NULL),(49159,'Miti',95,584,'2023-10-30 09:06:11',0,NULL,NULL,NULL),(49160,'Ntiyana',253,570,'2023-10-30 09:08:43',0,NULL,NULL,NULL),(49161,'Mbiwi',2440,584,'2023-10-30 09:09:07',0,NULL,NULL,NULL),(49162,'Gubu',776,584,'2023-10-30 09:11:47',0,NULL,NULL,NULL),(49163,'Msosa',2441,570,'2023-10-30 09:13:06',0,NULL,NULL,NULL),(49164,'Kapesi',193,570,'2023-10-30 09:16:52',0,NULL,NULL,NULL),(49165,'Adam',187,584,'2023-10-30 09:20:57',0,NULL,NULL,NULL),(49166,'Katema',2442,587,'2023-10-30 09:23:09',0,NULL,NULL,NULL),(49167,'Kandama',1032,270,'2023-10-30 09:32:18',0,NULL,NULL,NULL),(49168,'Chimutu',2306,592,'2023-10-30 09:35:41',0,NULL,NULL,NULL),(49169,'Chipoka',98,587,'2023-10-30 09:38:34',0,NULL,NULL,NULL),(49170,'Kamwamba',2443,435,'2023-10-30 09:42:17',0,NULL,NULL,NULL),(49171,'Fulajira',2007,592,'2023-10-30 09:45:55',0,NULL,NULL,NULL),(49172,'Chivandule',434,592,'2023-10-30 09:46:50',0,NULL,NULL,NULL),(49173,'Saidi',360,566,'2023-10-30 09:48:24',0,NULL,NULL,NULL),(49174,'Mthiko',254,565,'2023-10-30 09:49:49',0,NULL,NULL,NULL),(49175,'Unknown',1060,585,'2023-10-30 09:53:25',0,NULL,NULL,NULL),(49176,'Chaza',2444,592,'2023-10-30 10:05:08',0,NULL,NULL,NULL),(49177,'Chitseka',1005,409,'2023-10-30 10:23:08',0,NULL,NULL,NULL),(49178,'Njundwe',114,409,'2023-10-30 10:35:46',0,NULL,NULL,NULL),(49179,'Nsanthe',1009,458,'2023-10-30 10:51:56',0,NULL,NULL,NULL),(49180,'Naute',502,409,'2023-10-30 10:54:26',0,NULL,NULL,NULL),(49181,'Mtamba',2445,458,'2023-10-30 10:57:00',0,NULL,NULL,NULL),(49182,'Nansunganya',314,409,'2023-10-30 10:57:07',0,NULL,NULL,NULL),(49183,'Tongondeya',321,565,'2023-10-30 10:57:44',0,NULL,NULL,NULL),(49184,'Chigwira',14,435,'2023-10-30 11:06:39',0,NULL,NULL,NULL),(49185,'Maheya',1067,409,'2023-10-30 11:14:41',0,NULL,NULL,NULL),(49186,'Matimba',373,571,'2023-10-30 11:17:27',0,NULL,NULL,NULL),(49187,'Mkazomba',643,458,'2023-10-30 11:20:37',0,NULL,NULL,NULL),(49188,'Mzeweza',113,570,'2023-10-30 11:24:10',0,NULL,NULL,NULL),(49189,'Gribate',114,570,'2023-10-30 11:30:59',0,NULL,NULL,NULL),(49190,'Onkhwankhwa',189,570,'2023-10-30 11:35:33',0,NULL,NULL,NULL),(49191,'Akadzwa',396,570,'2023-10-30 11:38:02',0,NULL,NULL,NULL),(49192,'Chankhwa',116,571,'2023-10-30 11:42:21',0,NULL,NULL,NULL),(49193,'Chankhwa',116,571,'2023-10-30 11:42:30',0,NULL,NULL,NULL),(49194,'Misili',1762,409,'2023-10-30 11:43:23',0,NULL,NULL,NULL),(49195,'Katande',927,570,'2023-10-30 11:43:45',0,NULL,NULL,NULL),(49196,'Mgona',2447,179,'2023-10-30 11:43:47',0,NULL,NULL,NULL),(49197,'Alengamani',1693,570,'2023-10-30 11:44:12',0,NULL,NULL,NULL),(49198,'Kaluba',33,571,'2023-10-30 11:48:35',0,NULL,NULL,NULL),(49199,'Tsabango',1516,570,'2023-10-30 11:50:21',0,NULL,NULL,NULL),(49200,'Mtalika',884,385,'2023-10-30 11:51:38',0,NULL,NULL,NULL),(49201,'Mwala',315,270,'2023-10-30 11:52:00',0,NULL,NULL,NULL),(49202,'Chauluka',447,571,'2023-10-30 11:52:37',0,NULL,NULL,NULL),(49203,'Nakutuwa',1425,570,'2023-10-30 11:53:35',0,NULL,NULL,NULL),(49204,'Mwanela',1032,570,'2023-10-30 11:54:00',0,NULL,NULL,NULL),(49205,'Msozi',187,570,'2023-10-30 11:56:50',0,NULL,NULL,NULL),(49206,'Chumutu',1693,570,'2023-10-30 11:57:14',0,NULL,NULL,NULL),(49207,'Ntambemfiti',186,409,'2023-10-30 11:58:54',0,NULL,NULL,NULL),(49208,'Makanjira',2448,584,'2023-10-30 12:00:41',0,NULL,NULL,NULL),(49209,'Chafumbuluka',531,570,'2023-10-30 12:03:13',0,NULL,NULL,NULL),(49210,'Chisapo1',1032,570,'2023-10-30 12:07:00',0,NULL,NULL,NULL),(49211,'Chibwana',1693,570,'2023-10-30 12:11:41',0,NULL,NULL,NULL),(49212,'Jonas',119,571,'2023-10-30 12:15:47',0,NULL,NULL,NULL),(49213,'Bypass',1693,571,'2023-10-30 12:17:10',0,NULL,NULL,NULL),(49214,'Area 50',835,385,'2023-10-30 12:20:12',0,NULL,NULL,NULL),(49215,'James',97,571,'2023-10-30 12:25:45',0,NULL,NULL,NULL),(49216,'Mussa',814,385,'2023-10-30 12:27:23',0,NULL,NULL,NULL),(49217,'Chiphwi',187,570,'2023-10-30 12:33:14',0,NULL,NULL,NULL),(49218,'Chiphwi',187,570,'2023-10-30 12:33:14',0,NULL,NULL,NULL),(49219,'Kuvinda',231,585,'2023-10-30 12:40:12',0,NULL,NULL,NULL),(49220,'Kafuche',187,571,'2023-10-30 12:41:09',0,NULL,NULL,NULL),(49221,'Mapenda',2449,584,'2023-10-30 12:43:57',0,NULL,NULL,NULL),(49222,'Chimutu',1693,570,'2023-10-30 12:47:06',0,NULL,NULL,NULL),(49223,'Makhiwa',314,584,'2023-10-30 12:54:38',0,NULL,NULL,NULL),(49224,'Cikoloka',373,585,'2023-10-30 12:58:10',0,NULL,NULL,NULL),(49225,'Sande',447,570,'2023-10-30 13:00:07',0,NULL,NULL,NULL),(49226,'Aea23',770,570,'2023-10-30 13:00:35',0,NULL,NULL,NULL),(49227,'Namlekule',250,585,'2023-10-30 13:00:56',0,NULL,NULL,NULL),(49228,'Ndaonazino',200,584,'2023-10-30 13:01:17',0,NULL,NULL,NULL),(49229,'Mapira',191,585,'2023-10-30 13:03:21',0,NULL,NULL,NULL),(49230,'Chituwi',1933,365,'2023-10-30 13:04:24',0,NULL,NULL,NULL),(49231,'Chalemba',80,385,'2023-10-30 13:05:24',0,NULL,NULL,NULL),(49232,'Kadango',1762,584,'2023-10-30 13:08:02',0,NULL,NULL,NULL),(49233,'Kadzuwa',1342,585,'2023-10-30 13:12:55',0,NULL,NULL,NULL),(49234,'Ndewere',119,385,'2023-10-30 13:20:13',0,NULL,NULL,NULL),(49235,'Samuel',1594,571,'2023-10-30 13:22:23',0,NULL,NULL,NULL),(49236,'Kabuthu',1962,571,'2023-10-30 13:39:55',0,NULL,NULL,NULL),(49237,'Nkhwangwa',474,571,'2023-10-30 13:52:03',0,NULL,NULL,NULL),(49238,'Maliseni',2215,571,'2023-10-30 14:14:31',0,NULL,NULL,NULL),(49239,'Suman',217,571,'2023-10-30 14:25:35',0,NULL,NULL,NULL),(49240,'Tchauya',591,365,'2023-10-30 14:47:49',0,NULL,NULL,NULL),(49241,'Mmwala',349,575,'2023-10-30 14:54:30',0,NULL,NULL,NULL),(49242,'Area 18',157,571,'2023-10-30 15:09:33',0,NULL,NULL,NULL),(49243,'Kapalanga',1762,270,'2023-10-31 07:51:35',0,NULL,NULL,NULL),(49244,'Mgwala',1578,575,'2023-10-31 08:44:09',0,NULL,NULL,NULL),(49245,'Mingola',2451,575,'2023-10-31 08:51:42',0,NULL,NULL,NULL),(49246,'Akefa',341,435,'2023-10-31 08:58:42',0,NULL,NULL,NULL),(49247,'Fumbe',174,454,'2023-10-31 09:06:59',0,NULL,NULL,NULL),(49248,'Petrol',398,566,'2023-10-31 09:38:47',0,NULL,NULL,NULL),(49249,'Misinjala',95,566,'2023-10-31 09:46:29',0,NULL,NULL,NULL),(49250,'Donda',2122,566,'2023-10-31 09:47:00',0,NULL,NULL,NULL),(49251,'Libetele',315,585,'2023-10-31 09:47:26',0,NULL,NULL,NULL),(49252,'Kadziyo',439,409,'2023-10-31 09:50:00',0,NULL,NULL,NULL),(49253,'Swale',1155,566,'2023-10-31 09:52:59',0,NULL,NULL,NULL),(49254,'Kilumanjalo',198,409,'2023-10-31 09:54:21',0,NULL,NULL,NULL),(49255,'Fufumimba',95,409,'2023-10-31 09:57:02',0,NULL,NULL,NULL),(49256,'Chimangasasa',1032,566,'2023-10-31 09:58:08',0,NULL,NULL,NULL),(49257,'Mgombe',304,568,'2023-10-31 10:00:27',0,NULL,NULL,NULL),(49258,'Ngononda',186,270,'2023-10-31 10:01:09',0,NULL,NULL,NULL),(49259,'Woso',103,409,'2023-10-31 10:01:16',0,NULL,NULL,NULL),(49260,'Makwesela',297,566,'2023-10-31 10:03:36',0,NULL,NULL,NULL),(49261,'Phwetekele',2086,566,'2023-10-31 10:04:51',0,NULL,NULL,NULL),(49262,'Nkumba',2452,409,'2023-10-31 10:05:28',0,NULL,NULL,NULL),(49263,'Ussi',2453,409,'2023-10-31 10:08:45',0,NULL,NULL,NULL),(49264,'Kaluzu',314,587,'2023-10-31 10:11:57',0,NULL,NULL,NULL),(49265,'AnMtare',351,583,'2023-10-31 10:12:11',0,NULL,NULL,NULL),(49266,'Chimwanaso',1984,566,'2023-10-31 10:12:30',0,NULL,NULL,NULL),(49267,'Mwakiomnja',840,458,'2023-10-31 10:15:33',0,NULL,NULL,NULL),(49268,'Azele',360,583,'2023-10-31 10:21:32',0,NULL,NULL,NULL),(49269,'Kapota',1342,565,'2023-10-31 10:22:42',0,NULL,NULL,NULL),(49270,'Masi',2391,566,'2023-10-31 10:25:04',0,NULL,NULL,NULL),(49271,'Kabwili',2363,566,'2023-10-31 10:25:49',0,NULL,NULL,NULL),(49272,'Chiofya',39,585,'2023-10-31 10:26:18',0,NULL,NULL,NULL),(49273,'Nkusa',87,458,'2023-10-31 10:26:56',0,NULL,NULL,NULL),(49274,'Chioloko',91,570,'2023-10-31 10:28:02',0,NULL,NULL,NULL),(49275,'Mtengula',218,592,'2023-10-31 10:28:49',0,NULL,NULL,NULL),(49276,'Madzi',391,570,'2023-10-31 10:30:59',0,NULL,NULL,NULL),(49277,'Kuzingo',231,270,'2023-10-31 10:33:57',0,NULL,NULL,NULL),(49278,'Joseph',202,570,'2023-10-31 10:40:30',0,NULL,NULL,NULL),(49279,'Chidothi',1818,566,'2023-10-31 10:40:31',0,NULL,NULL,NULL),(49280,'Luwis',1032,570,'2023-10-31 10:40:46',0,NULL,NULL,NULL),(49281,'Area 18b',119,592,'2023-10-31 10:41:27',0,NULL,NULL,NULL),(49282,'Kambalame',2456,566,'2023-10-31 10:41:53',0,NULL,NULL,NULL),(49283,'Mzang\'ana',1693,570,'2023-10-31 10:43:47',0,NULL,NULL,NULL),(49284,'Mziyang\'ana',1693,570,'2023-10-31 10:44:13',0,NULL,NULL,NULL),(49285,'Kajan',66,584,'2023-10-31 10:53:19',0,NULL,NULL,NULL),(49286,'Mteche',2061,570,'2023-10-31 10:57:30',0,NULL,NULL,NULL),(49287,'Nchenga',784,592,'2023-10-31 10:57:37',0,NULL,NULL,NULL),(49288,'Chithebe',2458,584,'2023-10-31 10:57:40',0,NULL,NULL,NULL),(49289,'Masula',591,575,'2023-10-31 10:57:50',0,NULL,NULL,NULL),(49290,'Kalimbuka',2288,566,'2023-10-31 10:58:28',0,NULL,NULL,NULL),(49291,'Mankhwata',202,570,'2023-10-31 10:59:59',0,NULL,NULL,NULL),(49292,'Chimkhwawa',867,575,'2023-10-31 11:03:43',0,NULL,NULL,NULL),(49293,'Mandala',1693,570,'2023-10-31 11:05:45',0,NULL,NULL,NULL),(49294,'Musanji',1032,584,'2023-10-31 11:07:57',0,NULL,NULL,NULL),(49295,'Suweni',665,385,'2023-10-31 11:08:06',0,NULL,NULL,NULL),(49296,'Mafunga',2459,570,'2023-10-31 11:08:23',0,NULL,NULL,NULL),(49297,'Muluso',197,585,'2023-10-31 11:11:46',0,NULL,NULL,NULL),(49298,'Falls',770,570,'2023-10-31 11:12:37',0,NULL,NULL,NULL),(49299,'Nkambuwa',250,587,'2023-10-31 11:34:20',0,NULL,NULL,NULL),(49300,'Mnjumwa',618,568,'2023-10-31 11:45:46',0,NULL,NULL,NULL),(49301,'Mnjumwa',618,568,'2023-10-31 11:45:46',0,NULL,NULL,NULL),(49302,'Kumbani',1895,484,'2023-10-31 11:51:27',0,NULL,NULL,NULL),(49303,'A/7 Kawale',356,454,'2023-10-31 12:03:01',0,NULL,NULL,NULL),(49304,'Nazombe',2460,585,'2023-10-31 12:23:47',0,NULL,NULL,NULL),(49305,'Mwanzira',1762,585,'2023-10-31 12:31:40',0,NULL,NULL,NULL),(49306,'Chimombo',591,458,'2023-10-31 12:34:29',0,NULL,NULL,NULL),(49307,'Mbodzi',259,585,'2023-10-31 12:46:04',0,NULL,NULL,NULL),(49308,'Barracks',163,458,'2023-10-31 12:55:42',0,NULL,NULL,NULL),(49309,'Mazembe',14,585,'2023-10-31 12:57:36',0,NULL,NULL,NULL),(49310,'Malawi',1188,435,'2023-10-31 13:39:10',0,NULL,NULL,NULL),(49311,'Chikhwasa',787,365,'2023-10-31 16:49:59',0,NULL,NULL,NULL),(49312,'Matapira',447,587,'2023-11-01 08:33:47',0,NULL,NULL,NULL),(49313,'Chathu',315,324,'2023-11-01 08:51:18',0,NULL,NULL,NULL),(49314,'Mchathu',315,324,'2023-11-01 08:52:31',0,NULL,NULL,NULL),(49315,'Mwimba',207,584,'2023-11-01 09:09:37',0,NULL,NULL,NULL),(49316,'Masadi',297,584,'2023-11-01 09:25:41',0,NULL,NULL,NULL),(49317,'Chimpeni',404,409,'2023-11-01 09:30:59',0,NULL,NULL,NULL),(49318,'Masukwa',1032,584,'2023-11-01 09:36:42',0,NULL,NULL,NULL),(49319,'Kadammanja',447,409,'2023-11-01 09:37:04',0,NULL,NULL,NULL),(49320,'Kapemberwa',39,270,'2023-11-01 09:38:54',0,NULL,NULL,NULL),(49321,'M1 centre point',155,270,'2023-11-01 09:39:46',0,NULL,NULL,NULL),(49322,'Phwetekele',1933,566,'2023-11-01 09:52:09',0,NULL,NULL,NULL),(49323,'Ginisoni',186,270,'2023-11-01 09:52:52',0,NULL,NULL,NULL),(49324,'Chigombelo',353,592,'2023-11-01 09:58:21',0,NULL,NULL,NULL),(49325,'Kazonda',1009,592,'2023-11-01 10:16:33',0,NULL,NULL,NULL),(49326,'Namidzi',2461,592,'2023-11-01 10:26:56',0,NULL,NULL,NULL),(49327,'Lutele',1807,592,'2023-11-01 10:27:38',0,NULL,NULL,NULL),(49328,'Singini',2104,270,'2023-11-01 10:42:34',0,NULL,NULL,NULL),(49329,'Kasinjeni',198,435,'2023-11-01 11:37:14',0,NULL,NULL,NULL),(49330,'Mafunga',766,435,'2023-11-01 11:38:56',0,NULL,NULL,NULL),(49331,'Mulangali',464,570,'2023-11-01 11:49:53',0,NULL,NULL,NULL),(49332,'Chiunda',814,565,'2023-11-01 11:52:03',0,NULL,NULL,NULL),(49333,'Nalingula',2462,570,'2023-11-01 11:56:11',0,NULL,NULL,NULL),(49334,'Gibeson',186,565,'2023-11-01 12:02:36',0,NULL,NULL,NULL),(49335,'Kumalawi',106,570,'2023-11-01 12:03:32',0,NULL,NULL,NULL),(49336,'Chipesu',1032,570,'2023-11-01 12:03:59',0,NULL,NULL,NULL),(49337,'Area47',1032,584,'2023-11-01 12:05:23',0,NULL,NULL,NULL),(49338,'Unknown',447,570,'2023-11-01 12:07:09',0,NULL,NULL,NULL),(49339,'Madzi',2463,570,'2023-11-01 12:09:50',0,NULL,NULL,NULL),(49340,'Jumpha',1032,570,'2023-11-01 12:10:05',0,NULL,NULL,NULL),(49341,'Kazambeta',1518,584,'2023-11-01 12:11:08',0,NULL,NULL,NULL),(49342,'Piyasani',1032,570,'2023-11-01 12:12:21',0,NULL,NULL,NULL),(49343,'Makangata',589,570,'2023-11-01 12:28:12',0,NULL,NULL,NULL),(49344,'Chiwala',397,570,'2023-11-01 12:30:54',0,NULL,NULL,NULL),(49345,'Mtsabango',2464,584,'2023-11-01 12:31:31',0,NULL,NULL,NULL),(49346,'Malingunde',1903,270,'2023-11-01 12:33:22',0,NULL,NULL,NULL),(49347,'Chikutu',770,570,'2023-11-01 12:46:07',0,NULL,NULL,NULL),(49348,'Chikwawe',1762,270,'2023-11-01 12:48:53',0,NULL,NULL,NULL),(49349,'Mphuju',1762,584,'2023-11-01 12:59:14',0,NULL,NULL,NULL),(49350,'Gomba',629,284,'2023-11-01 13:20:38',0,NULL,NULL,NULL),(49351,'Yesaya',776,365,'2023-11-01 14:27:12',0,NULL,NULL,NULL),(49352,'Tambanjoka',17,365,'2023-11-01 14:50:43',0,NULL,NULL,NULL),(49353,'Zingwa',360,324,'2023-11-02 07:01:26',0,NULL,NULL,NULL),(49354,'Songolo',527,270,'2023-11-02 08:29:04',0,NULL,NULL,NULL),(49355,'Chinkuyu',2465,565,'2023-11-02 08:45:43',0,NULL,NULL,NULL),(49356,'CHINKUYU',2465,565,'2023-11-02 08:45:50',0,NULL,NULL,NULL),(49357,'Muva',321,587,'2023-11-02 08:58:40',0,NULL,NULL,NULL),(49358,'Chaima',396,570,'2023-11-02 09:02:56',0,NULL,NULL,NULL),(49359,'Kazambeta',1693,570,'2023-11-02 09:03:21',0,NULL,NULL,NULL),(49360,'Mkonkhela',360,570,'2023-11-02 09:08:50',0,NULL,NULL,NULL),(49361,'Mkonkhelat',360,570,'2023-11-02 09:08:55',0,NULL,NULL,NULL),(49362,'Mkokhela',360,570,'2023-11-02 09:09:19',0,NULL,NULL,NULL),(49363,'Zenje',474,570,'2023-11-02 09:12:22',0,NULL,NULL,NULL),(49364,'Unknown',2466,570,'2023-11-02 09:12:47',0,NULL,NULL,NULL),(49365,'Dion',429,568,'2023-11-02 09:15:45',0,NULL,NULL,NULL),(49366,'Unknown',2467,570,'2023-11-02 09:16:33',0,NULL,NULL,NULL),(49367,'Wakawaka',769,458,'2023-11-02 09:18:56',0,NULL,NULL,NULL),(49368,'Chisangwi',187,570,'2023-11-02 09:20:10',0,NULL,NULL,NULL),(49369,'Luka',1854,324,'2023-11-02 09:20:39',0,NULL,NULL,NULL),(49370,'Chawara',518,570,'2023-11-02 09:22:31',0,NULL,NULL,NULL),(49371,'William',298,587,'2023-11-02 09:23:19',0,NULL,NULL,NULL),(49372,'Saweta',1669,562,'2023-11-02 09:23:25',0,NULL,NULL,NULL),(49373,'Mathambo',304,587,'2023-11-02 09:25:29',0,NULL,NULL,NULL),(49374,'Nkaona',142,587,'2023-11-02 09:33:19',0,NULL,NULL,NULL),(49375,'Sagawa',2165,592,'2023-11-02 09:47:22',0,NULL,NULL,NULL),(49376,'Tubwe',2085,592,'2023-11-02 09:48:00',0,NULL,NULL,NULL),(49377,'Bedi',591,575,'2023-11-02 09:55:40',0,NULL,NULL,NULL),(49378,'Nony\'ola',2432,592,'2023-11-02 09:58:19',0,NULL,NULL,NULL),(49379,'Chiutsi',2085,592,'2023-11-02 09:58:48',0,NULL,NULL,NULL),(49380,'Matchaka',2468,592,'2023-11-02 10:13:24',0,NULL,NULL,NULL),(49381,'Chinkutu',434,592,'2023-11-02 10:14:28',0,NULL,NULL,NULL),(49382,'Balani',354,284,'2023-11-02 10:15:39',0,NULL,NULL,NULL),(49383,'Chibale',1101,566,'2023-11-02 10:34:54',0,NULL,NULL,NULL),(49384,'Siphasi',396,592,'2023-11-02 10:36:21',0,NULL,NULL,NULL),(49385,'Phwetekele',2085,592,'2023-11-02 10:37:11',0,NULL,NULL,NULL),(49386,'Msakambewa',2469,592,'2023-11-02 10:42:04',0,NULL,NULL,NULL),(49387,'Bwanali',234,566,'2023-11-02 10:51:26',0,NULL,NULL,NULL),(49388,'Unknown',2470,570,'2023-11-02 11:03:27',0,NULL,NULL,NULL),(49389,'Debeni',404,570,'2023-11-02 11:06:48',0,NULL,NULL,NULL),(49390,'Chitukule',357,592,'2023-11-02 11:08:00',0,NULL,NULL,NULL),(49391,'Mtwana',2471,581,'2023-11-02 11:12:15',0,NULL,NULL,NULL),(49392,'Kaweche',1392,565,'2023-11-02 11:17:39',0,NULL,NULL,NULL),(49393,'Kakhome',113,566,'2023-11-02 11:23:17',0,NULL,NULL,NULL),(49394,'Changawe',2475,581,'2023-11-02 11:24:09',0,NULL,NULL,NULL),(49395,'Chikongola',648,563,'2023-11-02 11:29:55',0,NULL,NULL,NULL),(49396,'Miliyoni',339,566,'2023-11-02 11:30:22',0,NULL,NULL,NULL),(49397,'Kum\'bweza',365,566,'2023-11-02 11:31:13',0,NULL,NULL,NULL),(49398,'Zweta',27,587,'2023-11-02 11:36:29',0,NULL,NULL,NULL),(49399,'Chingagwe',69,592,'2023-11-02 11:43:40',0,NULL,NULL,NULL),(49400,'Chinsapo',1862,562,'2023-11-02 11:49:22',0,NULL,NULL,NULL),(49401,'Tiasani',1032,565,'2023-11-02 12:04:10',0,NULL,NULL,NULL),(49402,'Nkando',2445,324,'2023-11-02 12:15:39',0,NULL,NULL,NULL),(49403,'Soma',530,330,'2023-11-02 12:29:20',0,NULL,NULL,NULL),(49404,'Kalima',256,284,'2023-11-02 12:34:07',0,NULL,NULL,NULL),(49405,'Kumbalume',256,284,'2023-11-02 12:48:01',0,NULL,NULL,NULL),(49406,'Jonasi',591,365,'2023-11-02 12:59:29',0,NULL,NULL,NULL),(49407,'Nkoke',1067,587,'2023-11-02 13:27:04',0,NULL,NULL,NULL),(49408,'Stambo',118,587,'2023-11-02 13:30:20',0,NULL,NULL,NULL),(49409,'STAMBO',118,587,'2023-11-02 13:30:22',0,NULL,NULL,NULL),(49410,'Chinama',315,592,'2023-11-03 09:05:55',0,NULL,NULL,NULL),(49411,'Thiga',113,587,'2023-11-03 09:06:28',0,NULL,NULL,NULL),(49412,'Sopani',91,592,'2023-11-03 09:21:28',0,NULL,NULL,NULL),(49413,'Kalikuni',1444,592,'2023-11-03 09:31:03',0,NULL,NULL,NULL),(49414,'Kazayuka',19,324,'2023-11-03 09:36:10',0,NULL,NULL,NULL),(49415,'Binali',2477,458,'2023-11-03 09:47:21',0,NULL,NULL,NULL),(49416,'Mangansalu',304,458,'2023-11-03 09:58:21',0,NULL,NULL,NULL),(49417,'Chiwira',189,565,'2023-11-03 10:18:31',0,NULL,NULL,NULL),(49418,'Mtambo',452,575,'2023-11-03 10:22:43',0,NULL,NULL,NULL),(49419,'Area    2',2478,575,'2023-11-03 10:24:20',0,NULL,NULL,NULL),(49420,'Salimoni',993,365,'2023-11-03 10:31:51',0,NULL,NULL,NULL),(49421,'Chimoka',1800,435,'2023-11-03 10:35:14',0,NULL,NULL,NULL),(49422,'Mapopo',2479,563,'2023-11-03 11:05:35',0,NULL,NULL,NULL),(49423,'Mitengo',231,563,'2023-11-03 11:27:10',0,NULL,NULL,NULL),(49424,'Matindi',259,587,'2023-11-03 11:35:39',0,NULL,NULL,NULL),(49425,'Chapondapo',71,435,'2023-11-03 11:37:20',0,NULL,NULL,NULL),(49426,'Mtola',157,563,'2023-11-03 11:37:34',0,NULL,NULL,NULL),(49427,'M\'bwana',260,435,'2023-11-03 11:47:09',0,NULL,NULL,NULL),(49428,'Makwacha',356,563,'2023-11-03 12:05:25',0,NULL,NULL,NULL),(49429,'Bawi',116,435,'2023-11-03 12:28:31',0,NULL,NULL,NULL),(49430,'Ngwena',370,587,'2023-11-03 12:30:22',0,NULL,NULL,NULL),(49431,'Kanyemba',2050,324,'2023-11-03 12:34:15',0,NULL,NULL,NULL),(49432,'Katera',91,565,'2023-11-03 12:35:07',0,NULL,NULL,NULL),(49433,'Kudzala',356,563,'2023-11-03 12:40:18',0,NULL,NULL,NULL),(49434,'Muligowe',2489,563,'2023-11-03 12:46:48',0,NULL,NULL,NULL),(49435,'Saidsan',682,435,'2023-11-03 13:49:45',0,NULL,NULL,NULL),(49436,'Muli',682,435,'2023-11-03 13:51:47',0,NULL,NULL,NULL),(49437,'Zibweze',1784,270,'2023-11-03 16:52:38',0,NULL,NULL,NULL),(49438,'Kusila',370,324,'2023-11-04 07:51:07',0,NULL,NULL,NULL),(49439,'Lobi',2491,587,'2023-11-06 09:10:27',0,NULL,NULL,NULL),(49440,'Lemwe',1039,570,'2023-11-06 09:17:10',0,NULL,NULL,NULL),(49441,'Chiuye',2493,584,'2023-11-06 09:17:25',0,NULL,NULL,NULL),(49442,'Msampha',1464,365,'2023-11-06 09:19:37',0,NULL,NULL,NULL),(49443,'Bentchauya',198,570,'2023-11-06 09:19:59',0,NULL,NULL,NULL),(49444,'Kasikili',404,570,'2023-11-06 09:23:10',0,NULL,NULL,NULL),(49445,'Area5',1800,582,'2023-11-06 09:24:13',0,NULL,NULL,NULL),(49446,'Bisayi',1530,582,'2023-11-06 09:28:59',0,NULL,NULL,NULL),(49447,'Tambala',2494,584,'2023-11-06 09:41:29',0,NULL,NULL,NULL),(49448,'Joe',365,584,'2023-11-06 09:42:31',0,NULL,NULL,NULL),(49449,'Juma',2259,592,'2023-11-06 10:09:26',0,NULL,NULL,NULL),(49450,'Njale',629,592,'2023-11-06 10:19:46',0,NULL,NULL,NULL),(49451,'Chazama',397,567,'2023-11-06 10:20:06',0,NULL,NULL,NULL),(49452,'Zgathika',1060,592,'2023-11-06 10:29:14',0,NULL,NULL,NULL),(49453,'Teweza',93,567,'2023-11-06 10:31:07',0,NULL,NULL,NULL),(49454,'Thole',1135,592,'2023-11-06 10:40:02',0,NULL,NULL,NULL),(49455,'Mikomba',2495,563,'2023-11-06 10:45:09',0,NULL,NULL,NULL),(49456,'Chigila',365,365,'2023-11-06 10:48:02',0,NULL,NULL,NULL),(49457,'Chatama',929,563,'2023-11-06 10:49:14',0,NULL,NULL,NULL),(49458,'Penyepenye',1764,592,'2023-11-06 10:52:55',0,NULL,NULL,NULL),(49459,'Nambilikita',591,583,'2023-11-06 10:58:56',0,NULL,NULL,NULL),(49460,'Ngongoliwa',468,567,'2023-11-06 11:09:02',0,NULL,NULL,NULL),(49461,'Maloni',319,526,'2023-11-06 11:09:28',0,NULL,NULL,NULL),(49462,'Unknown',2496,570,'2023-11-06 11:14:46',0,NULL,NULL,NULL),(49463,'Mndesi',90,570,'2023-11-06 11:18:03',0,NULL,NULL,NULL),(49464,'Chungu',1693,570,'2023-11-06 11:18:24',0,NULL,NULL,NULL),(49465,'Chikhonje',2497,570,'2023-11-06 11:21:09',0,NULL,NULL,NULL),(49466,'Chikutu',774,567,'2023-11-06 11:24:08',0,NULL,NULL,NULL),(49467,'Chibondo',1199,563,'2023-11-06 11:27:32',0,NULL,NULL,NULL),(49468,'Chigoneka',165,563,'2023-11-06 11:28:01',0,NULL,NULL,NULL),(49469,'Buluzi',1693,570,'2023-11-06 11:30:47',0,NULL,NULL,NULL),(49470,'Unknown',115,570,'2023-11-06 11:31:12',0,NULL,NULL,NULL),(49471,'Are 12',357,563,'2023-11-06 11:31:21',0,NULL,NULL,NULL),(49472,'Mtola',187,563,'2023-11-06 11:33:46',0,NULL,NULL,NULL),(49473,'Changoli',187,570,'2023-11-06 11:34:11',0,NULL,NULL,NULL),(49474,'Myoyo',193,567,'2023-11-06 11:39:38',0,NULL,NULL,NULL),(49475,'Khuleya',365,586,'2023-11-06 11:42:51',0,NULL,NULL,NULL),(49476,'Gwagwa',103,563,'2023-11-06 11:44:22',0,NULL,NULL,NULL),(49477,'Malingala',356,563,'2023-11-06 11:47:44',0,NULL,NULL,NULL),(49478,'Unknown',198,586,'2023-11-06 11:50:41',0,NULL,NULL,NULL),(49479,'Unknown',2498,567,'2023-11-06 11:52:24',0,NULL,NULL,NULL),(49480,'Banda',2057,567,'2023-11-06 11:59:44',0,NULL,NULL,NULL),(49481,'Chioko vlg',365,592,'2023-11-06 12:06:24',0,NULL,NULL,NULL),(49482,'Kamtukule',2299,567,'2023-11-06 12:08:04',0,NULL,NULL,NULL),(49483,'Chioko',1434,567,'2023-11-06 12:08:31',0,NULL,NULL,NULL),(49484,'Payele',769,567,'2023-11-06 12:14:34',0,NULL,NULL,NULL),(49485,'Akida',225,365,'2023-11-06 12:15:12',0,NULL,NULL,NULL),(49486,'Chisawa',249,592,'2023-11-06 12:27:27',0,NULL,NULL,NULL),(49487,'Kachitamanje',1341,567,'2023-11-06 12:33:17',0,NULL,NULL,NULL),(49488,'Mchola',769,567,'2023-11-06 12:54:04',0,NULL,NULL,NULL),(49489,'Dole',769,567,'2023-11-06 13:39:47',0,NULL,NULL,NULL),(49490,'Area36',1850,284,'2023-11-06 14:18:56',0,NULL,NULL,NULL),(49491,'Nkhoma',1800,583,'2023-11-06 14:35:18',0,NULL,NULL,NULL),(49492,'Balaza',1770,570,'2023-11-07 08:46:48',0,NULL,NULL,NULL),(49493,'Unknown',206,570,'2023-11-07 08:49:42',0,NULL,NULL,NULL),(49494,'Kalimanjila',199,570,'2023-11-07 08:52:53',0,NULL,NULL,NULL),(49495,'Kamatu',95,583,'2023-11-07 09:00:50',0,NULL,NULL,NULL),(49496,'Unknown',2500,570,'2023-11-07 09:01:21',0,NULL,NULL,NULL),(49497,'Tsabango',2500,570,'2023-11-07 09:01:41',0,NULL,NULL,NULL),(49498,'Msankhani',450,575,'2023-11-07 09:06:31',0,NULL,NULL,NULL),(49499,'Mutumbili',814,570,'2023-11-07 09:10:49',0,NULL,NULL,NULL),(49500,'Nkhwangwa',482,587,'2023-11-07 09:12:17',0,NULL,NULL,NULL),(49501,'Gwanya',2502,570,'2023-11-07 09:12:38',0,NULL,NULL,NULL),(49502,'Matosa',206,575,'2023-11-07 09:13:40',0,NULL,NULL,NULL),(49503,'Katemetsa',397,583,'2023-11-07 09:20:01',0,NULL,NULL,NULL),(49504,'Masakhano',365,570,'2023-11-07 09:20:20',0,NULL,NULL,NULL),(49505,'A/36',2503,565,'2023-11-07 09:20:29',0,NULL,NULL,NULL),(49506,'Masakhano',770,570,'2023-11-07 09:20:35',0,NULL,NULL,NULL),(49507,'Mkunda',766,584,'2023-11-07 09:20:38',0,NULL,NULL,NULL),(49508,'Phezi',113,570,'2023-11-07 09:24:50',0,NULL,NULL,NULL),(49509,'Chikuse',589,575,'2023-11-07 09:25:03',0,NULL,NULL,NULL),(49510,'January',298,324,'2023-11-07 09:25:43',0,NULL,NULL,NULL),(49511,'Mujeleme',2504,584,'2023-11-07 09:26:31',0,NULL,NULL,NULL),(49512,'Kayembe',98,570,'2023-11-07 09:30:23',0,NULL,NULL,NULL),(49513,'Nguluwe',2505,584,'2023-11-07 09:31:52',0,NULL,NULL,NULL),(49514,'NGULUWE',2505,584,'2023-11-07 09:31:56',0,NULL,NULL,NULL),(49515,'Chibisa',608,584,'2023-11-07 09:32:52',0,NULL,NULL,NULL),(49516,'Mwaulambia',2055,583,'2023-11-07 09:58:00',0,NULL,NULL,NULL),(49517,'Unknown',1693,575,'2023-11-07 10:01:07',0,NULL,NULL,NULL),(49518,'Mvula',190,575,'2023-11-07 10:04:33',0,NULL,NULL,NULL),(49519,'Gumbu',589,583,'2023-11-07 10:06:44',0,NULL,NULL,NULL),(49520,'Masumba',2506,575,'2023-11-07 10:09:23',0,NULL,NULL,NULL),(49521,'Mchitanjiru',773,585,'2023-11-07 10:14:43',0,NULL,NULL,NULL),(49522,'Milale',789,592,'2023-11-07 10:16:17',0,NULL,NULL,NULL),(49523,'Khumbi',14,575,'2023-11-07 10:16:56',0,NULL,NULL,NULL),(49524,'Abudu',601,587,'2023-11-07 10:17:56',0,NULL,NULL,NULL),(49525,'ABUDU',601,587,'2023-11-07 10:17:58',0,NULL,NULL,NULL),(49526,'Pepuchi',206,583,'2023-11-07 10:22:06',0,NULL,NULL,NULL),(49527,'Matola',74,566,'2023-11-07 10:31:31',0,NULL,NULL,NULL),(49528,'Issa',2507,583,'2023-11-07 10:43:02',0,NULL,NULL,NULL),(49529,'Chingoli',1392,565,'2023-11-07 10:43:19',0,NULL,NULL,NULL),(49530,'Kammwamba',1343,566,'2023-11-07 10:44:00',0,NULL,NULL,NULL),(49531,'C-company',365,565,'2023-11-07 10:53:52',0,NULL,NULL,NULL),(49532,'Nanja',1392,565,'2023-11-07 10:56:51',0,NULL,NULL,NULL),(49533,'Chigwirizano',353,565,'2023-11-07 10:57:31',0,NULL,NULL,NULL),(49534,'Chamadenga',2050,94,'2023-11-07 11:02:06',0,NULL,NULL,NULL),(49535,'Jamisoni',113,458,'2023-11-07 11:02:51',0,NULL,NULL,NULL),(49536,'Kuchata',546,585,'2023-11-07 11:04:50',0,NULL,NULL,NULL),(49537,'Linya',1964,583,'2023-11-07 11:10:17',0,NULL,NULL,NULL),(49538,'Kaiza',353,458,'2023-11-07 11:16:41',0,NULL,NULL,NULL),(49539,'Tsibwi',2509,584,'2023-11-07 11:30:14',0,NULL,NULL,NULL),(49540,'Area9',1032,584,'2023-11-07 11:39:37',0,NULL,NULL,NULL),(49541,'Mulangali',70,585,'2023-11-07 11:44:12',0,NULL,NULL,NULL),(49542,'Mitekete',321,584,'2023-11-07 11:56:13',0,NULL,NULL,NULL),(49543,'Mkanda',443,585,'2023-11-07 11:56:40',0,NULL,NULL,NULL),(49544,'Thambozi',360,571,'2023-11-07 12:27:14',0,NULL,NULL,NULL),(49545,'Cimpuza',197,585,'2023-11-07 12:30:01',0,NULL,NULL,NULL),(49546,'Mayani',2050,179,'2023-11-07 16:31:44',0,NULL,NULL,NULL),(49547,'Chagomela',2084,324,'2023-11-08 07:46:54',0,NULL,NULL,NULL),(49548,'Area 36',2465,571,'2023-11-08 09:28:29',0,NULL,NULL,NULL),(49549,'Chisanje',360,583,'2023-11-08 09:35:50',0,NULL,NULL,NULL),(49550,'Mwambo',1751,570,'2023-11-08 09:38:00',0,NULL,NULL,NULL),(49551,'Mwimba',1693,570,'2023-11-08 09:38:18',0,NULL,NULL,NULL),(49552,'Lozanyama',193,567,'2023-11-08 09:38:57',0,NULL,NULL,NULL),(49553,'Tambalare',113,570,'2023-11-08 09:41:02',0,NULL,NULL,NULL),(49554,'Mkwandala',202,567,'2023-11-08 09:43:52',0,NULL,NULL,NULL),(49555,'Kadyamaliro',1924,570,'2023-11-08 09:44:10',0,NULL,NULL,NULL),(49556,'Kachere',653,583,'2023-11-08 09:46:02',0,NULL,NULL,NULL),(49557,'Kandondo',116,566,'2023-11-08 09:53:21',0,NULL,NULL,NULL),(49558,'Chipokolo',66,567,'2023-11-08 09:55:18',0,NULL,NULL,NULL),(49559,'Unknown',339,592,'2023-11-08 09:59:31',0,NULL,NULL,NULL),(49560,'Nteu',1584,566,'2023-11-08 10:04:28',0,NULL,NULL,NULL),(49561,'Lembe',1584,567,'2023-11-08 10:06:09',0,NULL,NULL,NULL),(49562,'Mwenela',420,567,'2023-11-08 10:06:44',0,NULL,NULL,NULL),(49563,'Unknown',557,592,'2023-11-08 10:08:09',0,NULL,NULL,NULL),(49564,'Lackson',321,583,'2023-11-08 10:10:01',0,NULL,NULL,NULL),(49565,'Kaondo',353,583,'2023-11-08 10:10:42',0,NULL,NULL,NULL),(49566,'Phonde',1227,566,'2023-11-08 10:22:51',0,NULL,NULL,NULL),(49567,'Abuduh',193,567,'2023-11-08 10:23:54',0,NULL,NULL,NULL),(49568,'Milambo',207,585,'2023-11-08 10:26:44',0,NULL,NULL,NULL),(49569,'Devason',411,566,'2023-11-08 10:29:18',0,NULL,NULL,NULL),(49570,'Mikunji',179,566,'2023-11-08 10:37:16',0,NULL,NULL,NULL),(49571,'Kuitana',116,585,'2023-11-08 10:38:44',0,NULL,NULL,NULL),(49572,'Chasika',929,585,'2023-11-08 10:39:05',0,NULL,NULL,NULL),(49573,'Jumbe',2510,565,'2023-11-08 10:40:43',0,NULL,NULL,NULL),(49574,'Ntsinje',1807,587,'2023-11-08 10:43:28',0,NULL,NULL,NULL),(49575,'Semani',875,566,'2023-11-08 10:44:40',0,NULL,NULL,NULL),(49576,'Area 47',835,566,'2023-11-08 10:45:36',0,NULL,NULL,NULL),(49577,'Macheso',234,458,'2023-11-08 10:48:13',0,NULL,NULL,NULL),(49578,'Mwanjasi',1492,566,'2023-11-08 10:54:22',0,NULL,NULL,NULL),(49579,'Kachitsa',1751,567,'2023-11-08 10:54:45',0,NULL,NULL,NULL),(49580,'Malizani',2457,566,'2023-11-08 11:03:26',0,NULL,NULL,NULL),(49581,'Ishimeli',411,592,'2023-11-08 11:07:00',0,NULL,NULL,NULL),(49582,'Mkata',2511,409,'2023-11-08 11:10:39',0,NULL,NULL,NULL),(49583,'Thenda',2512,567,'2023-11-08 11:13:59',0,NULL,NULL,NULL),(49584,'Mkondenji',572,566,'2023-11-08 11:15:22',0,NULL,NULL,NULL),(49585,'Kamwala',14,571,'2023-11-08 11:16:33',0,NULL,NULL,NULL),(49586,'Unknown',2513,592,'2023-11-08 11:17:11',0,NULL,NULL,NULL),(49587,'Kampote',434,587,'2023-11-08 11:24:23',0,NULL,NULL,NULL),(49588,'Kampote',434,587,'2023-11-08 11:24:24',0,NULL,NULL,NULL),(49589,'Mputeni',1693,570,'2023-11-08 11:27:18',0,NULL,NULL,NULL),(49590,'Nyemba',1111,571,'2023-11-08 11:27:33',0,NULL,NULL,NULL),(49591,'Njamba',219,409,'2023-11-08 11:33:59',0,NULL,NULL,NULL),(49592,'Chaonoga',360,570,'2023-11-08 11:36:42',0,NULL,NULL,NULL),(49593,'Nanthambwe',360,571,'2023-11-08 11:39:25',0,NULL,NULL,NULL),(49594,'Mposela',529,570,'2023-11-08 11:41:10',0,NULL,NULL,NULL),(49595,'Kajumi',41,584,'2023-11-08 11:44:42',0,NULL,NULL,NULL),(49596,'Chaphuka',2519,570,'2023-11-08 11:46:09',0,NULL,NULL,NULL),(49597,'Chambo',770,570,'2023-11-08 11:48:49',0,NULL,NULL,NULL),(49598,'Malovu',397,409,'2023-11-08 11:51:57',0,NULL,NULL,NULL),(49599,'Ndongo',360,584,'2023-11-08 11:59:24',0,NULL,NULL,NULL),(49600,'Kamwatima',875,570,'2023-11-08 12:00:27',0,NULL,NULL,NULL),(49601,'Jungeya',190,584,'2023-11-08 12:04:51',0,NULL,NULL,NULL),(49602,'Dukeya',190,584,'2023-11-08 12:05:16',0,NULL,NULL,NULL),(49603,'Gunda dzuwa',193,324,'2023-11-08 12:11:37',0,NULL,NULL,NULL),(49604,'Tengatenga',356,563,'2023-11-08 12:22:51',0,NULL,NULL,NULL),(49605,'Tengatenga',356,563,'2023-11-08 12:22:53',0,NULL,NULL,NULL),(49606,'Zulu',1032,570,'2023-11-08 12:30:24',0,NULL,NULL,NULL),(49607,'Nchombo',165,563,'2023-11-08 12:32:41',0,NULL,NULL,NULL),(49608,'Nakhunda',814,570,'2023-11-08 12:32:43',0,NULL,NULL,NULL),(49609,'Ndundunya',919,570,'2023-11-08 12:36:19',0,NULL,NULL,NULL),(49610,'Chipawila',1693,570,'2023-11-08 12:36:50',0,NULL,NULL,NULL),(49611,'Mpago',341,563,'2023-11-08 12:40:06',0,NULL,NULL,NULL),(49612,'Msekeni',190,563,'2023-11-08 12:43:20',0,NULL,NULL,NULL),(49613,'Kwanjena',883,563,'2023-11-08 12:46:18',0,NULL,NULL,NULL),(49614,'Chana',1297,587,'2023-11-08 14:13:23',0,NULL,NULL,NULL),(49615,'Tepani',1024,324,'2023-11-09 08:43:49',0,NULL,NULL,NULL),(49616,'Zilambilani',1009,365,'2023-11-09 09:12:22',0,NULL,NULL,NULL),(49617,'Mbemba',378,563,'2023-11-09 09:12:26',0,NULL,NULL,NULL),(49618,'Baluwa',482,575,'2023-11-09 09:12:41',0,NULL,NULL,NULL),(49619,'Mbemba',2521,563,'2023-11-09 09:14:12',0,NULL,NULL,NULL),(49620,'Malenya',360,570,'2023-11-09 09:22:38',0,NULL,NULL,NULL),(49621,'Matali',1101,570,'2023-11-09 09:25:41',0,NULL,NULL,NULL),(49622,'Mbwebwi',404,570,'2023-11-09 09:35:25',0,NULL,NULL,NULL),(49623,'Mwamadi',589,570,'2023-11-09 09:37:32',0,NULL,NULL,NULL),(49624,'Chisanjire',74,583,'2023-11-09 09:37:56',0,NULL,NULL,NULL),(49625,'Tuliche',231,409,'2023-11-09 09:38:28',0,NULL,NULL,NULL),(49626,'Tungwe',1764,567,'2023-11-09 09:41:56',0,NULL,NULL,NULL),(49627,'Kawa',339,570,'2023-11-09 09:44:42',0,NULL,NULL,NULL),(49628,'Malembe',189,409,'2023-11-09 09:47:16',0,NULL,NULL,NULL),(49629,'Valauzu',360,570,'2023-11-09 09:48:07',0,NULL,NULL,NULL),(49630,'Kheleng\'enda',396,570,'2023-11-09 09:51:02',0,NULL,NULL,NULL),(49631,'Chipwenkha',1068,570,'2023-11-09 09:53:35',0,NULL,NULL,NULL),(49632,'Kalulu',2057,567,'2023-11-09 09:58:18',0,NULL,NULL,NULL),(49633,'Chirazulu',1133,570,'2023-11-09 10:01:12',0,NULL,NULL,NULL),(49634,'Bwanje',199,583,'2023-11-09 10:01:16',0,NULL,NULL,NULL),(49635,'Manyinji',2522,570,'2023-11-09 10:04:22',0,NULL,NULL,NULL),(49636,'Nkhata',836,409,'2023-11-09 10:07:43',0,NULL,NULL,NULL),(49637,'Bongakanyama',202,570,'2023-11-09 10:09:30',0,NULL,NULL,NULL),(49638,'Ngoni',1767,409,'2023-11-09 10:10:33',0,NULL,NULL,NULL),(49639,'Baton',202,583,'2023-11-09 10:18:01',0,NULL,NULL,NULL),(49640,'Meke',93,571,'2023-11-09 10:27:03',0,NULL,NULL,NULL),(49641,'Akumitawa',193,575,'2023-11-09 10:45:08',0,NULL,NULL,NULL),(49642,'Mpochera',1133,458,'2023-11-09 10:48:06',0,NULL,NULL,NULL),(49643,'Mandanda',478,570,'2023-11-09 10:50:59',0,NULL,NULL,NULL),(49644,'Visanza',1751,585,'2023-11-09 10:51:05',0,NULL,NULL,NULL),(49645,'Sagawa',1437,570,'2023-11-09 10:53:14',0,NULL,NULL,NULL),(49646,'Lucia',233,592,'2023-11-09 10:57:13',0,NULL,NULL,NULL),(49647,'Bonongwe',397,585,'2023-11-09 11:00:18',0,NULL,NULL,NULL),(49648,'Bnongwe',397,585,'2023-11-09 11:00:46',0,NULL,NULL,NULL),(49649,'Mtungambela',370,570,'2023-11-09 11:01:42',0,NULL,NULL,NULL),(49650,'Unknown',202,570,'2023-11-09 11:05:06',0,NULL,NULL,NULL),(49651,'Makwalala',2523,570,'2023-11-09 11:08:23',0,NULL,NULL,NULL),(49652,'Mtema',1392,585,'2023-11-09 11:15:04',0,NULL,NULL,NULL),(49653,'Saiti',1692,284,'2023-11-09 11:21:24',0,NULL,NULL,NULL),(49654,'Mulelemba',1563,458,'2023-11-09 11:24:41',0,NULL,NULL,NULL),(49655,'Mussa',2524,584,'2023-11-09 11:26:18',0,NULL,NULL,NULL),(49656,'Whayo',508,585,'2023-11-09 11:28:15',0,NULL,NULL,NULL),(49657,'Mulengwe',93,458,'2023-11-09 11:36:36',0,NULL,NULL,NULL),(49658,'Dungunya',1379,571,'2023-11-09 11:37:52',0,NULL,NULL,NULL),(49659,'Chalinyana',298,570,'2023-11-09 11:37:53',0,NULL,NULL,NULL),(49660,'Kuyabwa',770,570,'2023-11-09 11:44:04',0,NULL,NULL,NULL),(49661,'Mtsinje',770,570,'2023-11-09 11:44:28',0,NULL,NULL,NULL),(49662,'Six mile',776,584,'2023-11-09 11:45:00',0,NULL,NULL,NULL),(49663,'Six miles',776,584,'2023-11-09 11:45:12',0,NULL,NULL,NULL),(49664,'Kang\'oma',365,592,'2023-11-09 11:45:48',0,NULL,NULL,NULL),(49665,'Kamphula',1803,584,'2023-11-09 11:53:34',0,NULL,NULL,NULL),(49666,'Makhanga',115,570,'2023-11-09 11:53:52',0,NULL,NULL,NULL),(49667,'Chisambiro',75,571,'2023-11-09 11:55:18',0,NULL,NULL,NULL),(49668,'Unknown',97,585,'2023-11-09 12:03:24',0,NULL,NULL,NULL),(49669,'Munthali',1752,458,'2023-11-09 12:05:32',0,NULL,NULL,NULL),(49670,'Manjomo',349,284,'2023-11-09 12:16:36',0,NULL,NULL,NULL),(49671,'Kanengo',157,571,'2023-11-09 12:28:29',0,NULL,NULL,NULL),(49672,'Kantepete',1671,571,'2023-11-09 12:37:33',0,NULL,NULL,NULL),(49673,'Mustmary',198,585,'2023-11-09 12:41:45',0,NULL,NULL,NULL),(49674,'Khumulike',1056,458,'2023-11-09 13:14:22',0,NULL,NULL,NULL),(49675,'Chikwangula',1762,592,'2023-11-10 08:28:18',0,NULL,NULL,NULL),(49676,'Chipuza',197,365,'2023-11-10 08:39:04',0,NULL,NULL,NULL),(49677,'Unit 6',2132,94,'2023-11-10 08:47:24',0,NULL,NULL,NULL),(49678,'Unit 6',1903,94,'2023-11-10 08:47:48',0,NULL,NULL,NULL),(49679,'Kafwafwa',465,575,'2023-11-10 08:51:14',0,NULL,NULL,NULL),(49680,'Mozo',370,565,'2023-11-10 08:53:20',0,NULL,NULL,NULL),(49681,'Njuchi',752,575,'2023-11-10 08:57:21',0,NULL,NULL,NULL),(49682,'Timvezina',78,435,'2023-11-10 08:59:18',0,NULL,NULL,NULL),(49683,'Stola',2525,575,'2023-11-10 09:00:27',0,NULL,NULL,NULL),(49684,'Chemasi',1178,575,'2023-11-10 09:00:49',0,NULL,NULL,NULL),(49685,'Mwamsowoya',365,586,'2023-11-10 09:08:56',0,NULL,NULL,NULL),(49686,'Mwanza',2126,586,'2023-11-10 09:14:13',0,NULL,NULL,NULL),(49687,'Chimalisire',365,586,'2023-11-10 09:15:01',0,NULL,NULL,NULL),(49688,'Kasatsi',397,586,'2023-11-10 09:21:31',0,NULL,NULL,NULL),(49689,'Taliyani',1764,568,'2023-11-10 09:45:57',0,NULL,NULL,NULL),(49690,'Khono',2526,567,'2023-11-10 09:51:58',0,NULL,NULL,NULL),(49691,'Airwing',835,567,'2023-11-10 09:52:43',0,NULL,NULL,NULL),(49692,'Kapundu',77,583,'2023-11-10 09:55:39',0,NULL,NULL,NULL),(49693,'KAPUNDU',77,583,'2023-11-10 09:55:42',0,NULL,NULL,NULL),(49694,'Chavula',2527,567,'2023-11-10 09:58:55',0,NULL,NULL,NULL),(49695,'Mthyola',353,583,'2023-11-10 10:02:19',0,NULL,NULL,NULL),(49696,'Unknown',2528,458,'2023-11-10 10:13:02',0,NULL,NULL,NULL),(49697,'Unknown',2529,568,'2023-11-10 10:13:59',0,NULL,NULL,NULL),(49698,'Kuotcha',223,583,'2023-11-10 10:15:41',0,NULL,NULL,NULL),(49699,'Mkwinya',1762,568,'2023-11-10 10:18:04',0,NULL,NULL,NULL),(49700,'Unknown',70,585,'2023-11-10 10:26:31',0,NULL,NULL,NULL),(49701,'Mnembe',193,568,'2023-11-10 10:33:44',0,NULL,NULL,NULL),(49702,'Ntchema',255,571,'2023-11-10 10:34:21',0,NULL,NULL,NULL),(49703,'Asikalazi',354,567,'2023-11-10 10:34:31',0,NULL,NULL,NULL),(49704,'Chinguwo',1434,568,'2023-11-10 10:41:17',0,NULL,NULL,NULL),(49705,'Nailuwa',589,592,'2023-11-10 10:42:04',0,NULL,NULL,NULL),(49706,'Likangala',2530,571,'2023-11-10 10:48:03',0,NULL,NULL,NULL),(49707,'Katambo',1751,592,'2023-11-10 10:48:45',0,NULL,NULL,NULL),(49708,'Kaisi',227,572,'2023-11-10 11:07:32',0,NULL,NULL,NULL),(49709,'Fumbe',404,571,'2023-11-10 11:11:49',0,NULL,NULL,NULL),(49710,'Davis',810,572,'2023-11-10 11:15:23',0,NULL,NULL,NULL),(49711,'Chinyanga',397,565,'2023-11-10 11:16:30',0,NULL,NULL,NULL),(49712,'Wasi',316,572,'2023-11-10 11:21:11',0,NULL,NULL,NULL),(49713,'Kampanje',83,458,'2023-11-10 11:25:42',0,NULL,NULL,NULL),(49714,'Chadzuma',165,458,'2023-11-10 11:26:15',0,NULL,NULL,NULL),(49715,'Kamwana',2532,572,'2023-11-10 11:29:06',0,NULL,NULL,NULL),(49716,'Chibalala',198,571,'2023-11-10 11:35:06',0,NULL,NULL,NULL),(49717,'Chambeni',318,572,'2023-11-10 11:41:51',0,NULL,NULL,NULL),(49718,'Mafikeni',411,571,'2023-11-10 11:44:49',0,NULL,NULL,NULL),(49719,'Matope',1795,572,'2023-11-10 11:45:06',0,NULL,NULL,NULL),(49720,'Ntandire',835,572,'2023-11-10 11:48:16',0,NULL,NULL,NULL),(49721,'Senza1',351,571,'2023-11-10 11:54:07',0,NULL,NULL,NULL),(49722,'Ozamba',601,583,'2023-11-10 11:55:54',0,NULL,NULL,NULL),(49723,'Mwenyemasi',914,458,'2023-11-10 11:56:02',0,NULL,NULL,NULL),(49724,'Luwanga',29,583,'2023-11-10 12:09:34',0,NULL,NULL,NULL),(49725,'Mbengwa',569,587,'2023-11-10 14:03:10',0,NULL,NULL,NULL),(49726,'Mbingwa',2132,179,'2023-11-10 15:03:03',0,NULL,NULL,NULL),(49727,'Wavikadza',1123,300,'2023-11-10 16:07:39',0,NULL,NULL,NULL),(49728,'Selenje',618,179,'2023-11-11 10:00:18',0,NULL,NULL,NULL),(49729,'Chibwabwa',365,586,'2023-11-13 08:35:03',0,NULL,NULL,NULL),(49730,'Chisale',198,586,'2023-11-13 08:46:55',0,NULL,NULL,NULL),(49731,'Ackim',351,586,'2023-11-13 08:47:52',0,NULL,NULL,NULL),(49732,'Kalitsiro',2533,586,'2023-11-13 08:51:57',0,NULL,NULL,NULL),(49733,'Nyongani',2534,586,'2023-11-13 08:54:43',0,NULL,NULL,NULL),(49734,'Nyanda',2449,586,'2023-11-13 08:58:24',0,NULL,NULL,NULL),(49735,'Mtambo',365,586,'2023-11-13 09:01:35',0,NULL,NULL,NULL),(49736,'Mtondowani',360,586,'2023-11-13 09:04:41',0,NULL,NULL,NULL),(49737,'Bikoni',115,570,'2023-11-13 09:04:54',0,NULL,NULL,NULL),(49738,'Kalare',233,570,'2023-11-13 09:07:56',0,NULL,NULL,NULL),(49739,'Mdolo',1060,586,'2023-11-13 09:09:13',0,NULL,NULL,NULL),(49740,'Udaya',1218,586,'2023-11-13 09:13:55',0,NULL,NULL,NULL),(49741,'James',219,567,'2023-11-13 09:17:43',0,NULL,NULL,NULL),(49742,'Unknown',165,592,'2023-11-13 09:22:04',0,NULL,NULL,NULL),(49743,'Kacholo',113,566,'2023-11-13 09:22:18',0,NULL,NULL,NULL),(49744,'Kuthembwe',115,567,'2023-11-13 09:22:54',0,NULL,NULL,NULL),(49745,'Malambazuka',71,592,'2023-11-13 09:25:27',0,NULL,NULL,NULL),(49746,'Unknown',682,566,'2023-11-13 09:29:59',0,NULL,NULL,NULL),(49747,'Makawa',1216,179,'2023-11-13 09:32:53',0,NULL,NULL,NULL),(49748,'Chalunda',1361,409,'2023-11-13 09:34:33',0,NULL,NULL,NULL),(49749,'Nguluwe',1799,567,'2023-11-13 09:35:07',0,NULL,NULL,NULL),(49750,'Galamuka',501,409,'2023-11-13 09:38:13',0,NULL,NULL,NULL),(49751,'Ntoleza',2537,566,'2023-11-13 09:41:28',0,NULL,NULL,NULL),(49752,'Mkatasi',695,567,'2023-11-13 09:44:56',0,NULL,NULL,NULL),(49753,'Mwangosi',840,592,'2023-11-13 09:48:30',0,NULL,NULL,NULL),(49754,'Mtonda',2538,567,'2023-11-13 09:50:20',0,NULL,NULL,NULL),(49755,'Malowalowa',77,458,'2023-11-13 09:57:01',0,NULL,NULL,NULL),(49756,'Kantiki',177,458,'2023-11-13 09:57:58',0,NULL,NULL,NULL),(49757,'Nyamakondo',198,566,'2023-11-13 09:58:00',0,NULL,NULL,NULL),(49758,'Nkhukwa',378,566,'2023-11-13 10:06:52',0,NULL,NULL,NULL),(49759,'Stiven',205,566,'2023-11-13 10:12:49',0,NULL,NULL,NULL),(49760,'Kawinga',452,179,'2023-11-13 10:17:09',0,NULL,NULL,NULL),(49761,'Kanyangala',99,567,'2023-11-13 10:17:28',0,NULL,NULL,NULL),(49762,'Kaluchi',191,435,'2023-11-13 10:22:59',0,NULL,NULL,NULL),(49763,'Mbiwi',2541,566,'2023-11-13 10:26:07',0,NULL,NULL,NULL),(49764,'Kabango',1101,567,'2023-11-13 10:29:32',0,NULL,NULL,NULL),(49765,'Kayivi',404,566,'2023-11-13 10:30:08',0,NULL,NULL,NULL),(49766,'Mtumba',527,592,'2023-11-13 10:30:37',0,NULL,NULL,NULL),(49767,'Ntandile',174,566,'2023-11-13 10:31:06',0,NULL,NULL,NULL),(49768,'Njerwa',370,584,'2023-11-13 10:37:03',0,NULL,NULL,NULL),(49769,'Naliwe',234,564,'2023-11-13 10:39:13',0,NULL,NULL,NULL),(49770,'Ndiwo',1178,566,'2023-11-13 10:39:37',0,NULL,NULL,NULL),(49771,'Kafula',2543,564,'2023-11-13 10:39:50',0,NULL,NULL,NULL),(49772,'KAFULA',2543,564,'2023-11-13 10:39:53',0,NULL,NULL,NULL),(49773,'Mabwinja',1762,584,'2023-11-13 10:52:35',0,NULL,NULL,NULL),(49774,'Chiphwaila',1663,567,'2023-11-13 10:52:58',0,NULL,NULL,NULL),(49775,'Chavira',1434,567,'2023-11-13 10:57:23',0,NULL,NULL,NULL),(49776,'Chithuza',367,587,'2023-11-13 11:00:26',0,NULL,NULL,NULL),(49777,'Disi',1017,566,'2023-11-13 11:00:45',0,NULL,NULL,NULL),(49778,'Kawale',1794,567,'2023-11-13 11:06:01',0,NULL,NULL,NULL),(49779,'Stenala',591,458,'2023-11-13 11:08:49',0,NULL,NULL,NULL),(49780,'Chilaka',1022,570,'2023-11-13 11:10:52',0,NULL,NULL,NULL),(49781,'Mzimbeni',2544,570,'2023-11-13 11:19:36',0,NULL,NULL,NULL),(49782,'Chinawa',993,570,'2023-11-13 11:22:18',0,NULL,NULL,NULL),(49783,'Awali',209,587,'2023-11-13 11:22:30',0,NULL,NULL,NULL),(49784,'Awali',209,587,'2023-11-13 11:22:38',0,NULL,NULL,NULL),(49785,'Awali',209,587,'2023-11-13 11:22:38',0,NULL,NULL,NULL),(49786,'Matandika',370,570,'2023-11-13 11:24:30',0,NULL,NULL,NULL),(49787,'Mtondo',1899,365,'2023-11-13 11:26:48',0,NULL,NULL,NULL),(49788,'Silani',1693,570,'2023-11-13 11:27:48',0,NULL,NULL,NULL),(49789,'Chiongolero',787,579,'2023-11-13 11:32:19',0,NULL,NULL,NULL),(49790,'Mphambe',250,592,'2023-11-13 11:38:52',0,NULL,NULL,NULL),(49791,'Mwansambo',429,458,'2023-11-13 11:39:32',0,NULL,NULL,NULL),(49792,'Biliati',356,571,'2023-11-13 11:48:33',0,NULL,NULL,NULL),(49793,'Lola',350,584,'2023-11-13 11:49:57',0,NULL,NULL,NULL),(49794,'Chimwala',396,570,'2023-11-13 11:52:28',0,NULL,NULL,NULL),(49795,'Mpanje',2509,570,'2023-11-13 11:54:43',0,NULL,NULL,NULL),(49796,'Chulicha',231,570,'2023-11-13 11:56:46',0,NULL,NULL,NULL),(49797,'Mfungula',591,458,'2023-11-13 11:57:08',0,NULL,NULL,NULL),(49798,'Kambadula',195,570,'2023-11-13 11:59:32',0,NULL,NULL,NULL),(49799,'Girimu',632,585,'2023-11-13 12:00:02',0,NULL,NULL,NULL),(49800,'Maseya',304,568,'2023-11-13 12:03:40',0,NULL,NULL,NULL),(49801,'Kawole',1693,570,'2023-11-13 12:05:07',0,NULL,NULL,NULL),(49802,'Makina',1643,584,'2023-11-13 12:06:00',0,NULL,NULL,NULL),(49803,'Chizeze',199,458,'2023-11-13 12:09:30',0,NULL,NULL,NULL),(49804,'Macheso',1643,584,'2023-11-13 12:10:13',0,NULL,NULL,NULL),(49805,'Chiphazi',1530,584,'2023-11-13 12:16:28',0,NULL,NULL,NULL),(49806,'Mchita',776,570,'2023-11-13 12:19:47',0,NULL,NULL,NULL),(49807,'Muchita',770,570,'2023-11-13 12:20:16',0,NULL,NULL,NULL),(49808,'Chapananga',2545,570,'2023-11-13 12:22:58',0,NULL,NULL,NULL),(49809,'Mawili',2546,570,'2023-11-13 12:28:15',0,NULL,NULL,NULL),(49810,'Mkwende',370,570,'2023-11-13 12:34:50',0,NULL,NULL,NULL),(49811,'Mgubwi',569,385,'2023-11-13 12:37:51',0,NULL,NULL,NULL),(49812,'Kapambwafu',1544,571,'2023-11-13 12:45:21',0,NULL,NULL,NULL),(49813,'Ngombengo',429,584,'2023-11-13 12:48:28',0,NULL,NULL,NULL),(49814,'Kajedani',370,570,'2023-11-13 12:50:31',0,NULL,NULL,NULL),(49815,'KAJEDANI',370,570,'2023-11-13 12:50:46',0,NULL,NULL,NULL),(49816,'Lazo',474,385,'2023-11-13 12:52:20',0,NULL,NULL,NULL),(49817,'Wofeni',198,570,'2023-11-13 12:55:48',0,NULL,NULL,NULL),(49818,'Dindano',18,570,'2023-11-13 12:58:10',0,NULL,NULL,NULL),(49819,'Matapa',1693,570,'2023-11-13 12:58:32',0,NULL,NULL,NULL),(49820,'Katolokoso',2204,570,'2023-11-13 13:01:06',0,NULL,NULL,NULL),(49821,'Mtendere',814,385,'2023-11-13 13:01:32',0,NULL,NULL,NULL),(49822,'Tseka',1743,458,'2023-11-13 13:06:10',0,NULL,NULL,NULL),(49823,'Chinakanaka',2547,458,'2023-11-13 13:49:41',0,NULL,NULL,NULL),(49824,'Chapata',115,324,'2023-11-13 13:52:15',0,NULL,NULL,NULL),(49825,'Chikwekwe',193,324,'2023-11-13 14:05:40',0,NULL,NULL,NULL),(49826,'Mawelo',354,585,'2023-11-13 14:17:49',0,NULL,NULL,NULL),(49827,'Chafuta',964,365,'2023-11-14 08:50:56',0,NULL,NULL,NULL),(49828,'Akim',351,567,'2023-11-14 08:53:16',0,NULL,NULL,NULL),(49829,'Mphenje',1210,581,'2023-11-14 08:55:04',0,NULL,NULL,NULL),(49830,'Kaufulu',353,571,'2023-11-14 09:01:40',0,NULL,NULL,NULL),(49831,'Msokonezi',403,581,'2023-11-14 09:02:57',0,NULL,NULL,NULL),(49832,'Kamzati',196,567,'2023-11-14 09:04:35',0,NULL,NULL,NULL),(49833,'Mpindo',370,566,'2023-11-14 09:06:23',0,NULL,NULL,NULL),(49834,'6 miles',378,566,'2023-11-14 09:07:17',0,NULL,NULL,NULL),(49835,'Msiliza',569,568,'2023-11-14 09:08:58',0,NULL,NULL,NULL),(49836,'Mbangala',531,566,'2023-11-14 09:20:01',0,NULL,NULL,NULL),(49837,'Mwandevu',114,571,'2023-11-14 09:25:00',0,NULL,NULL,NULL),(49838,'Valamaja',1425,585,'2023-11-14 09:26:47',0,NULL,NULL,NULL),(49839,'Kazimu',2548,565,'2023-11-14 09:28:24',0,NULL,NULL,NULL),(49840,'Mdala',1770,179,'2023-11-14 09:29:21',0,NULL,NULL,NULL),(49841,'Petani',766,579,'2023-11-14 09:30:07',0,NULL,NULL,NULL),(49842,'Michael',116,579,'2023-11-14 09:35:57',0,NULL,NULL,NULL),(49843,'Kampalio',365,579,'2023-11-14 09:36:29',0,NULL,NULL,NULL),(49844,'Chembe',1693,579,'2023-11-14 09:47:04',0,NULL,NULL,NULL),(49845,'CHEMBE',1693,579,'2023-11-14 09:47:11',0,NULL,NULL,NULL),(49846,'Changame',370,579,'2023-11-14 09:52:29',0,NULL,NULL,NULL),(49847,'CHANGAME',370,579,'2023-11-14 09:52:34',0,NULL,NULL,NULL),(49848,'Chale3',447,435,'2023-11-14 09:59:21',0,NULL,NULL,NULL),(49849,'Unknown',2549,579,'2023-11-14 10:04:15',0,NULL,NULL,NULL),(49850,'Njati',1751,409,'2023-11-14 10:12:25',0,NULL,NULL,NULL),(49851,'Cholowera',1053,409,'2023-11-14 10:19:57',0,NULL,NULL,NULL),(49852,'Matapa',165,435,'2023-11-14 10:20:19',0,NULL,NULL,NULL),(49853,'Liphava',1537,585,'2023-11-14 10:22:08',0,NULL,NULL,NULL),(49854,'Piyasani',398,284,'2023-11-14 10:28:37',0,NULL,NULL,NULL),(49855,'Piasani',413,585,'2023-11-14 10:42:34',0,NULL,NULL,NULL),(49856,'Chimkanda',98,585,'2023-11-14 10:56:58',0,NULL,NULL,NULL),(49857,'Unknown',1288,592,'2023-11-14 11:06:07',0,NULL,NULL,NULL),(49858,'Mtonda',392,458,'2023-11-14 11:08:49',0,NULL,NULL,NULL),(49859,'A 36',2085,284,'2023-11-14 11:11:37',0,NULL,NULL,NULL),(49860,'A 36',2085,284,'2023-11-14 11:11:42',0,NULL,NULL,NULL),(49861,'A 36',2085,284,'2023-11-14 11:11:48',0,NULL,NULL,NULL),(49862,'Makunje',719,458,'2023-11-14 11:27:17',0,NULL,NULL,NULL),(49863,'Nkwizi',366,435,'2023-11-14 11:29:29',0,NULL,NULL,NULL),(49864,'NKWIZI',366,435,'2023-11-14 11:29:31',0,NULL,NULL,NULL),(49865,'Thakiwa',1424,585,'2023-11-14 11:36:11',0,NULL,NULL,NULL),(49866,'Malenga',2165,584,'2023-11-14 11:36:35',0,NULL,NULL,NULL),(49867,'Salimu',814,570,'2023-11-14 11:38:13',0,NULL,NULL,NULL),(49868,'Mayani',2552,584,'2023-11-14 11:43:20',0,NULL,NULL,NULL),(49869,'Balalika',2553,584,'2023-11-14 11:50:14',0,NULL,NULL,NULL),(49870,'Ngongonda',770,570,'2023-11-14 11:53:00',0,NULL,NULL,NULL),(49871,'Nangalimbo',396,570,'2023-11-14 12:01:47',0,NULL,NULL,NULL),(49872,'Kankhuku',2554,570,'2023-11-14 12:06:51',0,NULL,NULL,NULL),(49873,'Mkomela',187,584,'2023-11-14 12:09:49',0,NULL,NULL,NULL),(49874,'Chipondamwali',382,570,'2023-11-14 12:10:43',0,NULL,NULL,NULL),(49875,'Kumwenda',404,570,'2023-11-14 12:11:10',0,NULL,NULL,NULL),(49876,'Chikhata',2555,570,'2023-11-14 12:16:43',0,NULL,NULL,NULL),(49877,'Kamandolo',1023,570,'2023-11-14 12:21:36',0,NULL,NULL,NULL),(49878,'Kachisa',1297,584,'2023-11-14 12:23:19',0,NULL,NULL,NULL),(49879,'Chepa',198,585,'2023-11-14 12:34:45',0,NULL,NULL,NULL),(49880,'Jobu',2556,570,'2023-11-14 12:34:49',0,NULL,NULL,NULL),(49881,'Unknown',1782,385,'2023-11-14 12:40:11',0,NULL,NULL,NULL),(49882,'Mambo',814,385,'2023-11-14 12:47:24',0,NULL,NULL,NULL),(49883,'Kasumba',193,570,'2023-11-14 12:55:17',0,NULL,NULL,NULL),(49884,'Kazachi',193,570,'2023-11-14 12:57:41',0,NULL,NULL,NULL),(49885,'Zawone',232,365,'2023-11-15 09:06:06',0,NULL,NULL,NULL),(49886,'Chiphanga',119,592,'2023-11-15 09:12:21',0,NULL,NULL,NULL),(49887,'Kalimba',814,329,'2023-11-15 09:26:27',0,NULL,NULL,NULL),(49888,'Machika',801,284,'2023-11-15 09:30:04',0,NULL,NULL,NULL),(49889,'Nkhokwe',115,270,'2023-11-15 09:49:42',0,NULL,NULL,NULL),(49890,'Mbachundu',373,592,'2023-11-15 09:49:42',0,NULL,NULL,NULL),(49891,'Sitimapoint',814,270,'2023-11-15 09:57:34',0,NULL,NULL,NULL),(49892,'Ngokwe',115,270,'2023-11-15 09:58:38',0,NULL,NULL,NULL),(49893,'Msenda',378,566,'2023-11-15 10:02:23',0,NULL,NULL,NULL),(49894,'Entelera',42,587,'2023-11-15 10:11:16',0,NULL,NULL,NULL),(49895,'ENTELERA',42,587,'2023-11-15 10:11:17',0,NULL,NULL,NULL),(49896,'Akumilambe',341,270,'2023-11-15 10:13:17',0,NULL,NULL,NULL),(49897,'Tsiliza',569,400,'2023-11-15 10:17:48',0,NULL,NULL,NULL),(49898,'Mwera',116,585,'2023-11-15 10:22:01',0,NULL,NULL,NULL),(49899,'Mwavi',396,400,'2023-11-15 10:25:22',0,NULL,NULL,NULL),(49900,'Mwabvi',396,400,'2023-11-15 10:25:50',0,NULL,NULL,NULL),(49901,'Chisera',2557,566,'2023-11-15 10:39:32',0,NULL,NULL,NULL),(49902,'Chabinda',1663,566,'2023-11-15 10:40:34',0,NULL,NULL,NULL),(49903,'Unknown',27,592,'2023-11-15 10:45:15',0,NULL,NULL,NULL),(49904,'Mwafongo',2431,400,'2023-11-15 10:51:52',0,NULL,NULL,NULL),(49905,'Njalavikuwa',2558,566,'2023-11-15 10:52:36',0,NULL,NULL,NULL),(49906,'Mgwena',1530,329,'2023-11-15 10:58:26',0,NULL,NULL,NULL),(49907,'Chivadule',1434,566,'2023-11-15 10:59:33',0,NULL,NULL,NULL),(49908,'Masasa',2559,570,'2023-11-15 11:06:33',0,NULL,NULL,NULL),(49909,'Sinoa',370,570,'2023-11-15 11:09:31',0,NULL,NULL,NULL),(49913,'Kabangu',370,570,'2023-11-15 11:19:15',0,NULL,NULL,NULL),(49914,'Unknown',2560,570,'2023-11-15 11:30:16',0,NULL,NULL,NULL),(49915,'Chinsolo',99,592,'2023-11-15 11:43:40',0,NULL,NULL,NULL),(49916,'Unknown',261,458,'2023-11-15 11:44:06',0,NULL,NULL,NULL),(49917,'Chakhaza',397,570,'2023-11-15 11:44:36',0,NULL,NULL,NULL),(49918,'Kazakawo',73,570,'2023-11-15 11:47:00',0,NULL,NULL,NULL),(49919,'Zanja',2561,570,'2023-11-15 11:54:35',0,NULL,NULL,NULL),(49920,'Malasheka',93,584,'2023-11-15 11:55:35',0,NULL,NULL,NULL),(49921,'Unknown',527,585,'2023-11-15 12:08:27',0,NULL,NULL,NULL),(49922,'Chingwalu',413,458,'2023-11-15 12:09:52',0,NULL,NULL,NULL),(49923,'Unknown',108,458,'2023-11-15 12:23:04',0,NULL,NULL,NULL),(49924,'Area46',2562,585,'2023-11-15 12:28:44',0,NULL,NULL,NULL),(49925,'Chiuzira',2166,270,'2023-11-15 12:34:32',0,NULL,NULL,NULL),(49926,'Ngauma',2288,270,'2023-11-15 12:43:53',0,NULL,NULL,NULL),(49927,'Samson',2351,458,'2023-11-15 13:04:18',0,NULL,NULL,NULL),(49928,'Chintcheto',78,571,'2023-11-15 13:13:45',0,NULL,NULL,NULL),(49929,'Mkhwinjiwa',250,329,'2023-11-15 13:17:01',0,NULL,NULL,NULL),(49930,'Donbosco',2166,324,'2023-11-15 13:21:40',0,NULL,NULL,NULL),(49931,'Kapudzama',118,571,'2023-11-15 13:21:47',0,NULL,NULL,NULL),(49932,'Mumtalika',24,578,'2023-11-15 13:49:15',0,NULL,NULL,NULL),(49933,'Namkumba',213,571,'2023-11-15 14:52:37',0,NULL,NULL,NULL),(49934,'Area18',157,571,'2023-11-15 14:55:38',0,NULL,NULL,NULL),(49935,'Natwatwa',314,365,'2023-11-16 08:17:20',0,NULL,NULL,NULL),(49936,'Mpezeni',787,567,'2023-11-16 09:08:48',0,NULL,NULL,NULL),(49937,'Mkolondo',1429,563,'2023-11-16 09:10:47',0,NULL,NULL,NULL),(49938,'Nakudze',1477,435,'2023-11-16 09:18:09',0,NULL,NULL,NULL),(49939,'Dimba',356,563,'2023-11-16 09:19:43',0,NULL,NULL,NULL),(49940,'Chaoneka',766,567,'2023-11-16 09:20:42',0,NULL,NULL,NULL),(49941,'Kautunda',2564,563,'2023-11-16 09:23:31',0,NULL,NULL,NULL),(49942,'Senti',2454,365,'2023-11-16 10:27:59',0,NULL,NULL,NULL),(49943,'Kumpelembe',82,284,'2023-11-16 10:45:54',0,NULL,NULL,NULL),(49944,'Mayiwa',370,179,'2023-11-16 11:02:56',0,NULL,NULL,NULL),(49945,'Midland',2306,329,'2023-11-16 11:38:25',0,NULL,NULL,NULL),(49946,'Suza',1803,592,'2023-11-16 13:50:49',0,NULL,NULL,NULL),(49947,'Namwini',2391,324,'2023-11-16 14:11:15',0,NULL,NULL,NULL),(49948,'Kanyola',812,179,'2023-11-17 08:10:42',0,NULL,NULL,NULL),(49949,'Makwinja',318,365,'2023-11-17 08:33:50',0,NULL,NULL,NULL),(49950,'Chimwembere',113,567,'2023-11-17 09:30:13',0,NULL,NULL,NULL),(49951,'Liziza',391,567,'2023-11-17 09:45:56',0,NULL,NULL,NULL),(49952,'Nkhave',296,567,'2023-11-17 09:55:32',0,NULL,NULL,NULL),(49953,'Cheloman',1793,582,'2023-11-17 10:40:12',0,NULL,NULL,NULL),(49954,'Makaloni',165,564,'2023-11-17 10:45:00',0,NULL,NULL,NULL),(49955,'Kasese',356,564,'2023-11-17 10:45:50',0,NULL,NULL,NULL),(49956,'Mhango',569,564,'2023-11-17 10:56:33',0,NULL,NULL,NULL),(49957,'Kandeu',2038,179,'2023-11-17 11:07:52',0,NULL,NULL,NULL),(49958,'Banda',569,563,'2023-11-17 11:15:03',0,NULL,NULL,NULL),(49959,'Chiphe',391,568,'2023-11-17 11:31:27',0,NULL,NULL,NULL),(49960,'Nathenje',1176,568,'2023-11-17 11:34:43',0,NULL,NULL,NULL),(49961,'Mpondasi',206,592,'2023-11-17 14:10:00',0,NULL,NULL,NULL),(49962,'A49',2403,321,'2023-11-18 07:13:42',0,NULL,NULL,NULL),(49963,'Buluzi',1689,321,'2023-11-18 10:13:46',0,NULL,NULL,NULL),(49964,'Chimbende',1895,518,'2023-11-18 11:14:22',0,NULL,NULL,NULL),(49965,'Kalonjela',1178,324,'2023-11-20 07:48:28',0,NULL,NULL,NULL),(49966,'Belo',373,270,'2023-11-20 09:30:46',0,NULL,NULL,NULL),(49967,'Saulosi',95,592,'2023-11-20 09:39:36',0,NULL,NULL,NULL),(49968,'Lumbazi',119,592,'2023-11-20 09:47:15',0,NULL,NULL,NULL),(49969,'Njerwa',351,592,'2023-11-20 09:53:55',0,NULL,NULL,NULL),(49970,'Chisapo',757,592,'2023-11-20 09:54:27',0,NULL,NULL,NULL),(49971,'Gumila',1067,566,'2023-11-20 10:04:07',0,NULL,NULL,NULL),(49972,'Tabiya',443,566,'2023-11-20 10:06:56',0,NULL,NULL,NULL),(49973,'Ngunga',443,400,'2023-11-20 10:09:56',0,NULL,NULL,NULL),(49974,'Khangwala',198,566,'2023-11-20 10:15:40',0,NULL,NULL,NULL),(49975,'Khwangwala',198,566,'2023-11-20 10:15:56',0,NULL,NULL,NULL),(49976,'Unknown',234,592,'2023-11-20 10:27:03',0,NULL,NULL,NULL),(49977,'Chingwe',193,565,'2023-11-20 10:53:09',0,NULL,NULL,NULL),(49978,'Chingwo',193,565,'2023-11-20 10:53:16',0,NULL,NULL,NULL),(49979,'Mbaluku',211,565,'2023-11-20 10:57:17',0,NULL,NULL,NULL),(49980,'Chakhoma',465,565,'2023-11-20 10:57:50',0,NULL,NULL,NULL),(49981,'Kajiso shaba',1060,592,'2023-11-20 11:04:53',0,NULL,NULL,NULL),(49982,'Kalakhwinya',93,565,'2023-11-20 11:10:21',0,NULL,NULL,NULL),(49983,'Petulo',227,570,'2023-11-20 11:12:53',0,NULL,NULL,NULL),(49997,'Elinde',219,570,'2023-11-20 11:15:41',0,NULL,NULL,NULL),(49998,'Khwethemule ',295,565,'2023-11-20 11:16:09',0,NULL,NULL,NULL),(49999,'Chilore',2566,570,'2023-11-20 11:18:06',0,NULL,NULL,NULL),(50000,'Timoti',474,565,'2023-11-20 11:22:33',0,NULL,NULL,NULL),(50001,'Mtata',2359,570,'2023-11-20 11:23:27',0,NULL,NULL,NULL),(50002,'Mkwichi',495,570,'2023-11-20 11:27:25',0,NULL,NULL,NULL),(50003,'Dankeni',1751,565,'2023-11-20 11:28:43',0,NULL,NULL,NULL),(50004,'Msape',1693,570,'2023-11-20 11:35:31',0,NULL,NULL,NULL),(50005,'Namijingu',310,570,'2023-11-20 11:41:50',0,NULL,NULL,NULL),(50006,'Pasankhomo',115,570,'2023-11-20 11:48:21',0,NULL,NULL,NULL),(50007,'Kawiza',496,570,'2023-11-20 11:53:43',0,NULL,NULL,NULL),(50008,'Saulosi',2567,565,'2023-11-20 11:57:34',0,NULL,NULL,NULL),(50009,'Chituta',534,592,'2023-11-20 12:12:55',0,NULL,NULL,NULL),(50010,'Mjanike',34,592,'2023-11-20 12:23:04',0,NULL,NULL,NULL),(50011,'Chimwenye',193,94,'2023-11-20 12:46:03',0,NULL,NULL,NULL),(50012,'Ngo\'zo',370,526,'2023-11-20 12:58:19',0,NULL,NULL,NULL),(50013,'Malokolo',211,575,'2023-11-21 08:01:05',0,NULL,NULL,NULL),(50014,'Mtambire',397,575,'2023-11-21 08:04:11',0,NULL,NULL,NULL),(50015,'Chapata',2220,575,'2023-11-21 08:07:46',0,NULL,NULL,NULL),(50016,'Chimwamadzi',1518,270,'2023-11-21 08:09:40',0,NULL,NULL,NULL),(50017,'Tambo',2569,587,'2023-11-21 08:55:24',0,NULL,NULL,NULL),(50018,'Msongo',2570,564,'2023-11-21 09:01:38',0,NULL,NULL,NULL),(50019,'Sumbi',569,564,'2023-11-21 09:02:07',0,NULL,NULL,NULL),(50020,'Mwale',174,564,'2023-11-21 09:06:04',0,NULL,NULL,NULL),(50021,'Unknown',24,592,'2023-11-21 09:06:47',0,NULL,NULL,NULL),(50022,'Namwera',1254,564,'2023-11-21 09:09:00',0,NULL,NULL,NULL),(50023,'Kuliya',2571,564,'2023-11-21 09:11:43',0,NULL,NULL,NULL),(50024,'Kabwiri',165,564,'2023-11-21 09:21:40',0,NULL,NULL,NULL),(50025,'Masoko',349,564,'2023-11-21 09:24:28',0,NULL,NULL,NULL),(50026,'Masoko',349,564,'2023-11-21 09:24:32',0,NULL,NULL,NULL),(50027,'Malifa',2572,400,'2023-11-21 09:26:23',0,NULL,NULL,NULL),(50028,'Kandikole',353,583,'2023-11-21 09:32:47',0,NULL,NULL,NULL),(50029,'Zakalia',2050,270,'2023-11-21 09:39:44',0,NULL,NULL,NULL),(50030,'Mako',1762,585,'2023-11-21 09:40:17',0,NULL,NULL,NULL),(50031,'Mulotho',231,458,'2023-11-21 09:42:42',0,NULL,NULL,NULL),(50032,'Malanglanga',353,583,'2023-11-21 09:46:07',0,NULL,NULL,NULL),(50033,'Nyondo',116,583,'2023-11-21 09:49:39',0,NULL,NULL,NULL),(50034,'Malangalanga',353,583,'2023-11-21 09:50:23',0,NULL,NULL,NULL),(50035,'Sukwasukwa',591,582,'2023-11-21 09:56:24',0,NULL,NULL,NULL),(50036,'Chapata',353,583,'2023-11-21 10:00:26',0,NULL,NULL,NULL),(50037,'Chimwaye1',116,585,'2023-11-21 10:03:31',0,NULL,NULL,NULL),(50038,'Mwaulunge',11,324,'2023-11-21 10:16:25',0,NULL,NULL,NULL),(50039,'Kameme',1491,582,'2023-11-21 10:19:33',0,NULL,NULL,NULL),(50040,'Nsumbi',1216,582,'2023-11-21 10:31:31',0,NULL,NULL,NULL),(50041,'Kamwana',370,582,'2023-11-21 10:32:03',0,NULL,NULL,NULL),(50042,'Mkuka',354,582,'2023-11-21 10:34:10',0,NULL,NULL,NULL),(50043,'Mloloma',104,400,'2023-11-21 10:34:54',0,NULL,NULL,NULL),(50044,'Kanyoni',593,582,'2023-11-21 10:37:27',0,NULL,NULL,NULL),(50045,'Kumatipa',189,582,'2023-11-21 10:39:52',0,NULL,NULL,NULL),(50046,'Balanga',1917,409,'2023-11-21 10:52:18',0,NULL,NULL,NULL),(50047,'Mwatifwa',2573,582,'2023-11-21 10:52:19',0,NULL,NULL,NULL),(50048,'Kabwiti',342,582,'2023-11-21 10:57:43',0,NULL,NULL,NULL),(50049,'Mdela',529,409,'2023-11-21 11:02:24',0,NULL,NULL,NULL),(50050,'Tsiru',751,582,'2023-11-21 11:05:42',0,NULL,NULL,NULL),(50051,'Luwanda',1900,94,'2023-11-21 13:18:38',0,NULL,NULL,NULL),(50052,'Kampini',165,94,'2023-11-21 13:51:31',0,NULL,NULL,NULL),(50053,'Maliki',1900,94,'2023-11-21 16:36:22',0,NULL,NULL,NULL),(50054,'Mtsiliza',2036,270,'2023-11-22 07:39:51',0,NULL,NULL,NULL),(50055,'Chimatira',85,324,'2023-11-22 08:07:10',0,NULL,NULL,NULL),(50056,'Mitengo',342,563,'2023-11-22 08:49:44',0,NULL,NULL,NULL),(50057,'Njale',589,592,'2023-11-22 09:07:45',0,NULL,NULL,NULL),(50058,'Langisi',325,571,'2023-11-22 09:33:19',0,NULL,NULL,NULL),(50059,'Chimwamadzi',365,586,'2023-11-22 09:41:58',0,NULL,NULL,NULL),(50060,'Gundamavu',95,458,'2023-11-22 09:43:59',0,NULL,NULL,NULL),(50061,'Chatata',174,571,'2023-11-22 09:52:44',0,NULL,NULL,NULL),(50062,'Mphanga',200,458,'2023-11-22 09:55:47',0,NULL,NULL,NULL),(50063,'Unknown',193,592,'2023-11-22 10:01:57',0,NULL,NULL,NULL),(50064,'Binisoni',68,458,'2023-11-22 10:07:31',0,NULL,NULL,NULL),(50065,'Ntaya',791,458,'2023-11-22 10:08:01',0,NULL,NULL,NULL),(50066,'Katengeza',80,592,'2023-11-22 10:08:31',0,NULL,NULL,NULL),(50067,'Chauwa',629,587,'2023-11-22 10:20:59',0,NULL,NULL,NULL),(50068,'Jojimakoza',391,586,'2023-11-22 10:39:54',0,NULL,NULL,NULL),(50069,'Area49',489,570,'2023-11-22 10:43:32',0,NULL,NULL,NULL),(50070,'Malema2',9,592,'2023-11-22 10:49:49',0,NULL,NULL,NULL),(50071,'Pulika',1162,570,'2023-11-22 10:50:26',0,NULL,NULL,NULL),(50072,'Chidothi',1762,586,'2023-11-22 10:57:22',0,NULL,NULL,NULL),(50073,'Boza',113,570,'2023-11-22 10:57:27',0,NULL,NULL,NULL),(50074,'Nthawanthu',193,585,'2023-11-22 10:59:03',0,NULL,NULL,NULL),(50075,'Mitochi',1828,586,'2023-11-22 11:06:31',0,NULL,NULL,NULL),(50076,'Kapelura',624,458,'2023-11-22 11:11:20',0,NULL,NULL,NULL),(50077,'Kapepusa',2575,570,'2023-11-22 11:13:04',0,NULL,NULL,NULL),(50078,'Chioza',770,570,'2023-11-22 11:16:17',0,NULL,NULL,NULL),(50079,'Nkhokomo',770,570,'2023-11-22 11:18:41',0,NULL,NULL,NULL),(50080,'Phonje',116,570,'2023-11-22 11:20:49',0,NULL,NULL,NULL),(50081,'Mkwaila',165,458,'2023-11-22 11:22:06',0,NULL,NULL,NULL),(50082,'Hauya',2576,570,'2023-11-22 11:25:46',0,NULL,NULL,NULL),(50083,'Chazima',814,570,'2023-11-22 11:27:44',0,NULL,NULL,NULL),(50084,'Mponda',224,570,'2023-11-22 11:30:28',0,NULL,NULL,NULL),(50085,'Samama',2577,570,'2023-11-22 11:35:11',0,NULL,NULL,NULL),(50086,'Mbulavu',2578,570,'2023-11-22 11:37:55',0,NULL,NULL,NULL),(50087,'Chakhazdza',1516,570,'2023-11-22 11:40:07',0,NULL,NULL,NULL),(50088,'Mpasala',234,592,'2023-11-22 12:08:49',0,NULL,NULL,NULL),(50089,'Mpasala',234,592,'2023-11-22 12:08:49',0,NULL,NULL,NULL),(50090,'Msepe',196,571,'2023-11-22 12:40:09',0,NULL,NULL,NULL),(50091,'Joseph',198,592,'2023-11-22 12:45:05',0,NULL,NULL,NULL),(50092,'Mugin',193,585,'2023-11-22 12:51:29',0,NULL,NULL,NULL),(50093,'Kanyamula',1807,585,'2023-11-22 12:52:02',0,NULL,NULL,NULL),(50094,'Mkwezadzira',1040,566,'2023-11-22 14:18:17',0,NULL,NULL,NULL),(50095,'Nthunduwala',496,270,'2023-11-23 07:50:30',0,NULL,NULL,NULL),(50096,'Njovu',1101,270,'2023-11-23 08:30:42',0,NULL,NULL,NULL),(50097,'Chalwe',1491,585,'2023-11-23 08:37:02',0,NULL,NULL,NULL),(50098,'Mpulura',814,571,'2023-11-23 08:42:29',0,NULL,NULL,NULL),(50099,'Kawaphika',184,270,'2023-11-23 08:45:22',0,NULL,NULL,NULL),(50100,'Chabzera',386,270,'2023-11-23 08:46:25',0,NULL,NULL,NULL),(50101,'Nyalugwe',234,592,'2023-11-23 08:47:14',0,NULL,NULL,NULL),(50102,'Nkhwiyape',113,577,'2023-11-23 09:11:41',0,NULL,NULL,NULL),(50103,'Mpamba',351,583,'2023-11-23 09:18:17',0,NULL,NULL,NULL),(50104,'Chikhosi',116,592,'2023-11-23 09:18:26',0,NULL,NULL,NULL),(50105,'Chatchuka',447,592,'2023-11-23 09:28:12',0,NULL,NULL,NULL),(50106,'Unknown',335,585,'2023-11-23 09:28:55',0,NULL,NULL,NULL),(50107,'Masoafwile',1858,583,'2023-11-23 09:32:16',0,NULL,NULL,NULL),(50108,'Kayimayima',198,592,'2023-11-23 09:44:10',0,NULL,NULL,NULL),(50109,'Samwayila',370,400,'2023-11-23 09:46:14',0,NULL,NULL,NULL),(50110,'Area50',1800,583,'2023-11-23 09:46:44',0,NULL,NULL,NULL),(50111,'Mtunthama',1800,583,'2023-11-23 10:09:31',0,NULL,NULL,NULL),(50112,'Chomba',2580,577,'2023-11-23 10:12:27',0,NULL,NULL,NULL),(50113,'Katama',862,400,'2023-11-23 10:12:55',0,NULL,NULL,NULL),(50114,'Dines',2581,458,'2023-11-23 10:21:27',0,NULL,NULL,NULL),(50115,'Hara',557,324,'2023-11-23 10:22:03',0,NULL,NULL,NULL),(50116,'Kamzaza',1803,400,'2023-11-23 10:23:25',0,NULL,NULL,NULL),(50117,'Kamana',356,577,'2023-11-23 10:27:32',0,NULL,NULL,NULL),(50118,'Helemani',478,592,'2023-11-23 10:29:16',0,NULL,NULL,NULL),(50119,'Chinsapo 2',353,592,'2023-11-23 10:37:29',0,NULL,NULL,NULL),(50120,'Mwakafule',2582,570,'2023-11-23 10:40:00',0,NULL,NULL,NULL),(50121,'Masakamika',1693,577,'2023-11-23 10:45:29',0,NULL,NULL,NULL),(50122,'MASAKAMIKA',1693,577,'2023-11-23 10:45:31',0,NULL,NULL,NULL),(50123,'Chimbayo',1693,577,'2023-11-23 10:45:58',0,NULL,NULL,NULL),(50124,'Dondo',447,570,'2023-11-23 10:47:36',0,NULL,NULL,NULL),(50125,'Mwenela',1566,570,'2023-11-23 10:48:35',0,NULL,NULL,NULL),(50126,'Lazaki',1101,570,'2023-11-23 10:51:01',0,NULL,NULL,NULL),(50127,'Chimutu',1516,570,'2023-11-23 10:53:31',0,NULL,NULL,NULL),(50128,'Jalasi',208,570,'2023-11-23 10:59:23',0,NULL,NULL,NULL),(50129,'Chibalayathu',199,570,'2023-11-23 11:05:01',0,NULL,NULL,NULL),(50130,'Nkhwanya',193,570,'2023-11-23 11:08:04',0,NULL,NULL,NULL),(50131,'Kalenga',2583,570,'2023-11-23 11:10:40',0,NULL,NULL,NULL),(50132,'Mbawela',396,570,'2023-11-23 11:15:07',0,NULL,NULL,NULL),(50133,'Chipeta',1216,584,'2023-11-23 11:15:33',0,NULL,NULL,NULL),(50134,'Suzi',502,570,'2023-11-23 11:17:33',0,NULL,NULL,NULL),(50135,'Jevesi',396,570,'2023-11-23 11:20:00',0,NULL,NULL,NULL),(50136,'Malanda 1',1022,330,'2023-11-23 11:26:47',0,NULL,NULL,NULL),(50137,'Chimonjo',1220,571,'2023-11-23 11:28:16',0,NULL,NULL,NULL),(50138,'Nkhuki',1751,592,'2023-11-23 11:28:46',0,NULL,NULL,NULL),(50139,'Namalikwawo',591,570,'2023-11-23 11:44:09',0,NULL,NULL,NULL),(50140,'Matipili',1751,570,'2023-11-23 11:46:12',0,NULL,NULL,NULL),(50141,'Teula',2577,570,'2023-11-23 11:53:03',0,NULL,NULL,NULL),(50142,'Chemg\'ombe',529,577,'2023-11-23 13:47:34',0,NULL,NULL,NULL),(50143,'Nkubana',629,270,'2023-11-24 08:58:22',0,NULL,NULL,NULL),(50144,'Taiza',1693,577,'2023-11-24 09:07:19',0,NULL,NULL,NULL),(50145,'Chigowo',1693,577,'2023-11-24 09:07:59',0,NULL,NULL,NULL),(50146,'Unknown',1062,400,'2023-11-24 09:27:49',0,NULL,NULL,NULL),(50147,'Kayiche',1216,575,'2023-11-24 09:28:39',0,NULL,NULL,NULL),(50148,'Kampote',113,458,'2023-11-24 09:33:13',0,NULL,NULL,NULL),(50149,'Unknown',766,435,'2023-11-24 09:37:22',0,NULL,NULL,NULL),(50150,'Area 9',1032,575,'2023-11-24 09:38:25',0,NULL,NULL,NULL),(50151,'Chembiya',875,458,'2023-11-24 09:53:13',0,NULL,NULL,NULL),(50152,'Kalewelewe',74,583,'2023-11-24 09:56:23',0,NULL,NULL,NULL),(50153,'Chimwendo',1762,585,'2023-11-24 10:18:56',0,NULL,NULL,NULL),(50154,'Chisapo',2478,577,'2023-11-24 10:33:42',0,NULL,NULL,NULL),(50155,'Zindutsala',353,583,'2023-11-24 10:52:15',0,NULL,NULL,NULL),(50156,'Bunda',416,571,'2023-11-24 11:02:13',0,NULL,NULL,NULL),(50157,'Likwakwanda',1322,571,'2023-11-24 11:12:39',0,NULL,NULL,NULL),(50158,'Chizungu',202,583,'2023-11-24 11:26:46',0,NULL,NULL,NULL),(50159,'Kalembera',108,585,'2023-11-24 11:27:50',0,NULL,NULL,NULL),(50160,'Solobala',232,585,'2023-11-24 12:03:18',0,NULL,NULL,NULL),(50161,'Payere',353,583,'2023-11-24 12:24:47',0,NULL,NULL,NULL),(50162,'Hambose',46,94,'2023-11-24 16:39:20',0,NULL,NULL,NULL),(50163,'Wakawaka',1887,94,'2023-11-24 16:40:05',0,NULL,NULL,NULL),(50164,'Tchema',250,324,'2023-11-25 10:42:26',0,NULL,NULL,NULL),(50165,'Chikwakwa',1861,94,'2023-11-27 07:24:52',0,NULL,NULL,NULL),(50166,'Yobe',1762,592,'2023-11-27 08:46:31',0,NULL,NULL,NULL),(50167,'Mwalala',108,577,'2023-11-27 08:59:11',0,NULL,NULL,NULL),(50168,'MWALALA',108,577,'2023-11-27 08:59:13',0,NULL,NULL,NULL),(50169,'Ng\'omba',1425,592,'2023-11-27 09:00:02',0,NULL,NULL,NULL),(50170,'Nchombwe',353,592,'2023-11-27 09:28:14',0,NULL,NULL,NULL),(50171,'Chidzuma',397,400,'2023-11-27 09:31:02',0,NULL,NULL,NULL),(50172,'Bypass',470,400,'2023-11-27 09:31:48',0,NULL,NULL,NULL),(50173,'Ngomba',2084,179,'2023-11-27 09:38:53',0,NULL,NULL,NULL),(50174,'Nthathwe',2084,179,'2023-11-27 09:50:40',0,NULL,NULL,NULL),(50175,'Kapili',1596,400,'2023-11-27 09:51:16',0,NULL,NULL,NULL),(50176,'Kawale 2',365,592,'2023-11-27 10:03:06',0,NULL,NULL,NULL),(50177,'Kuwa',211,567,'2023-11-27 10:18:08',0,NULL,NULL,NULL),(50178,'KUWA',211,567,'2023-11-27 10:18:11',0,NULL,NULL,NULL),(50179,'Muluwila',843,581,'2023-11-27 10:20:10',0,NULL,NULL,NULL),(50180,'MULUWILA',843,581,'2023-11-27 10:20:15',0,NULL,NULL,NULL),(50181,'Muluwila',843,581,'2023-11-27 10:20:21',0,NULL,NULL,NULL),(50182,'Nawanga',193,400,'2023-11-27 10:29:00',0,NULL,NULL,NULL),(50183,'Kalimwini',769,567,'2023-11-27 10:29:29',0,NULL,NULL,NULL),(50184,'Chapata',1689,581,'2023-11-27 10:34:30',0,NULL,NULL,NULL),(50185,'Magomelo',2587,400,'2023-11-27 10:36:08',0,NULL,NULL,NULL),(50186,'Kaole',769,567,'2023-11-27 10:42:39',0,NULL,NULL,NULL),(50187,'Kanyezi',2588,400,'2023-11-27 10:43:12',0,NULL,NULL,NULL),(50188,'Maukawiri',193,567,'2023-11-27 10:47:49',0,NULL,NULL,NULL),(50189,'Bwese',75,400,'2023-11-27 10:49:15',0,NULL,NULL,NULL),(50190,'Chikutika',199,567,'2023-11-27 10:53:55',0,NULL,NULL,NULL),(50191,'Chaza',1434,567,'2023-11-27 10:54:24',0,NULL,NULL,NULL),(50192,'Chatenga',115,400,'2023-11-27 10:54:47',0,NULL,NULL,NULL),(50193,'Mateketa',2589,567,'2023-11-27 11:00:33',0,NULL,NULL,NULL),(50194,'Joliji',324,400,'2023-11-27 11:00:59',0,NULL,NULL,NULL),(50195,'Maxwel',351,567,'2023-11-27 11:01:24',0,NULL,NULL,NULL),(50196,'Bypass',2590,179,'2023-11-27 11:03:48',0,NULL,NULL,NULL),(50197,'Kasitomu',368,567,'2023-11-27 11:06:02',0,NULL,NULL,NULL),(50198,'Natole',221,567,'2023-11-27 11:11:49',0,NULL,NULL,NULL),(50199,'Kaphata',1762,179,'2023-11-27 11:12:53',0,NULL,NULL,NULL),(50200,'Kaliwanje',2591,400,'2023-11-27 11:13:07',0,NULL,NULL,NULL),(50201,'Tomasi',1807,400,'2023-11-27 11:14:01',0,NULL,NULL,NULL),(50202,'Nalera',301,592,'2023-11-27 11:15:46',0,NULL,NULL,NULL),(50203,'Yombwe',69,562,'2023-11-27 11:16:04',0,NULL,NULL,NULL),(50204,'Kasakula',353,592,'2023-11-27 11:19:09',0,NULL,NULL,NULL),(50205,'Nasoni',116,566,'2023-11-27 11:20:43',0,NULL,NULL,NULL),(50206,'Galang\'ombe',592,562,'2023-11-27 11:29:31',0,NULL,NULL,NULL),(50207,'Kabano',1770,581,'2023-11-27 11:35:20',0,NULL,NULL,NULL),(50208,'Zangaya',474,584,'2023-11-27 11:37:16',0,NULL,NULL,NULL),(50209,'Chitofu',1762,584,'2023-11-27 11:41:52',0,NULL,NULL,NULL),(50210,'Loti',585,592,'2023-11-27 11:49:55',0,NULL,NULL,NULL),(50211,'Ndindi',2593,577,'2023-11-27 11:52:37',0,NULL,NULL,NULL),(50212,'NDINDI',2593,577,'2023-11-27 11:52:37',0,NULL,NULL,NULL),(50213,'Alove2',1516,585,'2023-11-27 12:08:45',0,NULL,NULL,NULL),(50214,'Mkonde',2594,563,'2023-11-27 12:10:57',0,NULL,NULL,NULL),(50215,'Katsamba',569,563,'2023-11-27 12:11:42',0,NULL,NULL,NULL),(50216,'Mbatata',2595,563,'2023-11-27 12:15:29',0,NULL,NULL,NULL),(50217,'Area 36',2596,563,'2023-11-27 12:16:12',0,NULL,NULL,NULL),(50218,'Chimkwezule',914,571,'2023-11-27 12:17:46',0,NULL,NULL,NULL),(50219,'Area9',351,571,'2023-11-27 12:18:33',0,NULL,NULL,NULL),(50220,'Chibisa',356,563,'2023-11-27 12:29:42',0,NULL,NULL,NULL),(50221,'Chamwavi',66,563,'2023-11-27 12:32:44',0,NULL,NULL,NULL),(50222,'Chapondima',411,571,'2023-11-27 12:49:06',0,NULL,NULL,NULL),(50223,'Kanjanja',592,585,'2023-11-27 13:07:03',0,NULL,NULL,NULL),(50224,'Kajanga',118,585,'2023-11-27 13:32:19',0,NULL,NULL,NULL),(50225,'Msosa',1762,571,'2023-11-27 13:45:24',0,NULL,NULL,NULL),(50226,'Seyani',197,585,'2023-11-27 13:55:19',0,NULL,NULL,NULL),(50227,'Mgomo',187,435,'2023-11-27 14:03:31',0,NULL,NULL,NULL),(50228,'Bwanali',80,587,'2023-11-27 14:30:50',0,NULL,NULL,NULL),(50229,'Mponde',203,587,'2023-11-27 14:37:33',0,NULL,NULL,NULL),(50230,'Kadambo',2002,435,'2023-11-27 15:07:52',0,NULL,NULL,NULL),(50231,'Chiganga',529,94,'2023-11-28 08:33:59',0,NULL,NULL,NULL),(50232,'Mwachisoti',28,592,'2023-11-28 08:43:50',0,NULL,NULL,NULL),(50233,'Kusafali',368,584,'2023-11-28 08:50:33',0,NULL,NULL,NULL),(50234,'Chilinde',770,584,'2023-11-28 08:50:57',0,NULL,NULL,NULL),(50235,'Njoka1',1038,584,'2023-11-28 08:57:00',0,NULL,NULL,NULL),(50236,'Nandombo',234,271,'2023-11-28 09:02:26',0,NULL,NULL,NULL),(50237,'Nsenda',370,584,'2023-11-28 09:07:55',0,NULL,NULL,NULL),(50238,'Ndilande',265,565,'2023-11-28 09:11:33',0,NULL,NULL,NULL),(50239,'A/25',1032,565,'2023-11-28 09:12:00',0,NULL,NULL,NULL),(50240,'A/25',1032,565,'2023-11-28 09:12:07',0,NULL,NULL,NULL),(50241,'A/25',1032,565,'2023-11-28 09:12:12',0,NULL,NULL,NULL),(50242,'A/25',1032,565,'2023-11-28 09:12:19',0,NULL,NULL,NULL),(50243,'Unknown',1534,584,'2023-11-28 09:15:12',0,NULL,NULL,NULL),(50244,'Dzaleka',1121,584,'2023-11-28 09:18:47',0,NULL,NULL,NULL),(50245,'Mthumbidwa',1312,565,'2023-11-28 09:19:55',0,NULL,NULL,NULL),(50246,'Chigwirizno',1693,577,'2023-11-28 09:22:00',0,NULL,NULL,NULL),(50247,'Chembe',360,584,'2023-11-28 09:23:20',0,NULL,NULL,NULL),(50248,'Misiyasi',232,565,'2023-11-28 09:23:21',0,NULL,NULL,NULL),(50249,'Nsimpha',191,565,'2023-11-28 09:28:34',0,NULL,NULL,NULL),(50250,'Chijachi',404,179,'2023-11-28 09:32:34',0,NULL,NULL,NULL),(50251,'Chawanje',447,575,'2023-11-28 09:37:51',0,NULL,NULL,NULL),(50252,'Njedza',1297,585,'2023-11-28 09:41:32',0,NULL,NULL,NULL),(50253,'Undi',1669,575,'2023-11-28 09:50:12',0,NULL,NULL,NULL),(50254,'Kandulu',2391,270,'2023-11-28 09:50:26',0,NULL,NULL,NULL),(50255,'Mtambira',773,567,'2023-11-28 09:53:34',0,NULL,NULL,NULL),(50256,'Kalombe',27,571,'2023-11-28 10:09:25',0,NULL,NULL,NULL),(50257,'Chidula',391,435,'2023-11-28 10:16:15',0,NULL,NULL,NULL),(50258,'Mchocho',2509,435,'2023-11-28 10:44:53',0,NULL,NULL,NULL),(50259,'Lundu',1770,568,'2023-11-28 10:49:09',0,NULL,NULL,NULL),(50260,'Chiuzila',770,271,'2023-11-28 10:54:12',0,NULL,NULL,NULL),(50261,'Mpale',649,568,'2023-11-28 11:01:55',0,NULL,NULL,NULL),(50262,'Kalimiramoto',867,584,'2023-11-28 11:05:04',0,NULL,NULL,NULL),(50263,'Ngononda',193,572,'2023-11-28 11:05:15',0,NULL,NULL,NULL),(50264,'Kapangaziwiri',591,570,'2023-11-28 11:07:33',0,NULL,NULL,NULL),(50265,'Futsani',570,572,'2023-11-28 11:09:49',0,NULL,NULL,NULL),(50266,'Mtajampang',663,570,'2023-11-28 11:11:39',0,NULL,NULL,NULL),(50267,'Kwamvululu',370,584,'2023-11-28 11:11:43',0,NULL,NULL,NULL),(50268,'Area23',1203,570,'2023-11-28 11:12:00',0,NULL,NULL,NULL),(50269,'Muchoseni',293,570,'2023-11-28 11:14:56',0,NULL,NULL,NULL),(50270,'Guzani',360,584,'2023-11-28 11:18:28',0,NULL,NULL,NULL),(50271,'Misowa',2598,568,'2023-11-28 11:21:32',0,NULL,NULL,NULL),(50272,'Chilowa',465,570,'2023-11-28 11:22:19',0,NULL,NULL,NULL),(50273,'Chmbalanga',232,577,'2023-11-28 11:29:08',0,NULL,NULL,NULL),(50274,'Unknown',199,570,'2023-11-28 11:34:25',0,NULL,NULL,NULL),(50275,'Mwenelufita',2599,572,'2023-11-28 11:42:48',0,NULL,NULL,NULL),(50276,'Chagomo',2600,572,'2023-11-28 11:50:31',0,NULL,NULL,NULL),(50277,'Namone',341,572,'2023-11-28 11:54:34',0,NULL,NULL,NULL),(50278,'Nangantani',1083,271,'2023-11-28 11:55:23',0,NULL,NULL,NULL),(50279,'Phwayi',250,572,'2023-11-28 11:56:58',0,NULL,NULL,NULL),(50280,'Cimbeta',375,585,'2023-11-28 12:02:55',0,NULL,NULL,NULL),(50281,'Kayese',2601,572,'2023-11-28 12:06:46',0,NULL,NULL,NULL),(50282,'Pezeni',221,584,'2023-11-28 12:09:08',0,NULL,NULL,NULL),(50283,'Kadzamira',199,526,'2023-11-28 12:10:18',0,NULL,NULL,NULL),(50284,'Kasamba',353,584,'2023-11-28 12:12:16',0,NULL,NULL,NULL),(50285,'Kamwamba',1900,365,'2023-11-28 12:53:41',0,NULL,NULL,NULL),(50286,'Mzinga',353,585,'2023-11-28 13:18:32',0,NULL,NULL,NULL),(50287,'Damson',2007,562,'2023-11-28 13:46:57',0,NULL,NULL,NULL),(50288,'Mapala',1022,324,'2023-11-29 09:52:40',0,NULL,NULL,NULL),(50289,'Mwabulambo',840,571,'2023-11-29 09:55:01',0,NULL,NULL,NULL),(50290,'Saulosi',353,585,'2023-11-29 09:55:44',0,NULL,NULL,NULL),(50291,'Chinkombelo',2165,563,'2023-11-29 09:56:36',0,NULL,NULL,NULL),(50292,'Masasa',193,578,'2023-11-29 09:59:57',0,NULL,NULL,NULL),(50293,'Nyoke',199,563,'2023-11-29 10:00:04',0,NULL,NULL,NULL),(50294,'Thotho',836,571,'2023-11-29 10:26:22',0,NULL,NULL,NULL),(50295,'Thothotho',836,571,'2023-11-29 10:26:44',0,NULL,NULL,NULL),(50296,'Kamwala',2602,577,'2023-11-29 10:31:44',0,NULL,NULL,NULL),(50297,'Mpemba',1994,585,'2023-11-29 10:32:48',0,NULL,NULL,NULL),(50298,'Sela',198,577,'2023-11-29 10:40:39',0,NULL,NULL,NULL),(50299,'SELA',198,577,'2023-11-29 10:40:42',0,NULL,NULL,NULL),(50300,'Unknown',2603,435,'2023-11-29 10:49:42',0,NULL,NULL,NULL),(50301,'Kachimangasasa',165,585,'2023-11-29 11:01:46',0,NULL,NULL,NULL),(50302,'Mpingo',1178,270,'2023-11-29 11:08:49',0,NULL,NULL,NULL),(50303,'Lifizi',106,570,'2023-11-29 11:10:02',0,NULL,NULL,NULL),(50304,'Nankuyu',1795,577,'2023-11-29 11:13:27',0,NULL,NULL,NULL),(50305,'NANKUYU',1795,577,'2023-11-29 11:13:27',0,NULL,NULL,NULL),(50306,'Vyanda',2359,570,'2023-11-29 11:16:41',0,NULL,NULL,NULL),(50307,'Chaluma',1530,584,'2023-11-29 11:19:38',0,NULL,NULL,NULL),(50308,'Malingunde',1693,577,'2023-11-29 11:20:03',0,NULL,NULL,NULL),(50309,'Malingunde',1693,577,'2023-11-29 11:20:13',0,NULL,NULL,NULL),(50310,'Malingunde',1693,577,'2023-11-29 11:20:13',0,NULL,NULL,NULL),(50311,'Biliyati',770,570,'2023-11-29 11:25:58',0,NULL,NULL,NULL),(50312,'Mitawa',1469,584,'2023-11-29 11:42:34',0,NULL,NULL,NULL),(50313,'Kuthebwe',265,584,'2023-11-29 11:48:19',0,NULL,NULL,NULL),(50314,'Yowasi',429,584,'2023-11-29 11:51:09',0,NULL,NULL,NULL),(50315,'Walani',219,570,'2023-11-29 11:54:09',0,NULL,NULL,NULL),(50316,'Chigalu',66,270,'2023-11-29 11:59:53',0,NULL,NULL,NULL),(50317,'Kunthulu',1693,570,'2023-11-29 12:03:54',0,NULL,NULL,NULL),(50318,'Khotola',1762,571,'2023-11-29 12:05:20',0,NULL,NULL,NULL),(50319,'Tseka',190,585,'2023-11-29 12:06:54',0,NULL,NULL,NULL),(50320,'Chevuti',221,584,'2023-11-29 12:08:42',0,NULL,NULL,NULL),(50321,'Unknown',589,570,'2023-11-29 12:08:49',0,NULL,NULL,NULL),(50322,'Chibade',2288,270,'2023-11-29 12:13:25',0,NULL,NULL,NULL),(50323,'Chiutsa',370,584,'2023-11-29 12:15:00',0,NULL,NULL,NULL),(50324,'Kampheni',191,577,'2023-11-29 12:27:21',0,NULL,NULL,NULL),(50325,'KAMPHENI',191,577,'2023-11-29 12:27:22',0,NULL,NULL,NULL),(50326,'Mchokera',322,270,'2023-11-29 12:36:49',0,NULL,NULL,NULL),(50327,'Thula',1762,571,'2023-11-29 12:48:32',0,NULL,NULL,NULL),(50328,'Kachela',97,365,'2023-11-29 12:59:31',0,NULL,NULL,NULL),(50329,'Kanyenje',365,592,'2023-11-29 13:11:37',0,NULL,NULL,NULL),(50330,'KANYENJE',365,592,'2023-11-29 13:11:38',0,NULL,NULL,NULL),(50331,'Kandiweni',113,577,'2023-11-29 13:41:43',0,NULL,NULL,NULL),(50332,'KANDIWENI',113,577,'2023-11-29 13:41:45',0,NULL,NULL,NULL),(50333,'Kalembedera',116,435,'2023-11-29 13:44:11',0,NULL,NULL,NULL),(50334,'Chimombo',116,577,'2023-11-29 13:46:04',0,NULL,NULL,NULL),(50335,'CHIMOMBO',116,577,'2023-11-29 13:46:06',0,NULL,NULL,NULL),(50336,'Mtadire',351,577,'2023-11-29 13:50:13',0,NULL,NULL,NULL),(50337,'MTADIRE',351,577,'2023-11-29 13:50:14',0,NULL,NULL,NULL),(50338,'4Area 7',351,577,'2023-11-29 13:50:55',0,NULL,NULL,NULL),(50339,'4AREA 7',351,577,'2023-11-29 13:50:56',0,NULL,NULL,NULL),(50340,'Sewa',1903,365,'2023-11-29 16:41:14',0,NULL,NULL,NULL),(50341,'Nkokamasa',2050,270,'2023-11-30 07:27:57',0,NULL,NULL,NULL),(50342,'Mwenewenya',3,562,'2023-11-30 08:34:39',0,NULL,NULL,NULL),(50343,'Kuchipal',1693,577,'2023-11-30 08:39:03',0,NULL,NULL,NULL),(50344,'Kuchipala',1693,577,'2023-11-30 08:39:13',0,NULL,NULL,NULL),(50345,'Shemu',719,585,'2023-11-30 08:39:38',0,NULL,NULL,NULL),(50346,'Mzungu',1634,409,'2023-11-30 09:17:53',0,NULL,NULL,NULL),(50347,'Chasika',769,567,'2023-11-30 09:19:40',0,NULL,NULL,NULL),(50348,'Kadisi',342,400,'2023-11-30 09:23:18',0,NULL,NULL,NULL),(50349,'Magodi',115,585,'2023-11-30 09:35:11',0,NULL,NULL,NULL),(50350,'Mwase',375,585,'2023-11-30 09:45:17',0,NULL,NULL,NULL),(50351,'Penyenye',1807,585,'2023-11-30 10:06:17',0,NULL,NULL,NULL),(50352,'Salura',2604,570,'2023-11-30 10:55:21',0,NULL,NULL,NULL),(50353,'Masula',353,584,'2023-11-30 10:56:16',0,NULL,NULL,NULL),(50354,'Fodya',1795,584,'2023-11-30 11:15:57',0,NULL,NULL,NULL),(50355,'Tsabango',1932,270,'2023-11-30 11:18:47',0,NULL,NULL,NULL),(50356,'Tongole',1893,270,'2023-11-30 11:19:34',0,NULL,NULL,NULL),(50357,'Kwipululu',1643,584,'2023-11-30 11:22:07',0,NULL,NULL,NULL),(50358,'Gilathowa',380,385,'2023-11-30 11:24:18',0,NULL,NULL,NULL),(50359,'Thofa',1189,584,'2023-11-30 11:26:57',0,NULL,NULL,NULL),(50360,'Kulupakwa',719,270,'2023-11-30 11:45:29',0,NULL,NULL,NULL),(50361,'Makungula',1793,365,'2023-11-30 13:37:59',0,NULL,NULL,NULL),(50362,'Chigaule',1594,365,'2023-11-30 14:49:21',0,NULL,NULL,NULL),(50363,'Chikadza',353,566,'2023-12-01 07:53:41',0,NULL,NULL,NULL),(50364,'Mkamba',183,585,'2023-12-01 08:54:38',0,NULL,NULL,NULL),(50365,'Chiphepo',1767,400,'2023-12-01 09:40:16',0,NULL,NULL,NULL),(50366,'Chasiyaphanje',591,400,'2023-12-01 09:53:12',0,NULL,NULL,NULL),(50367,'Masoko',190,574,'2023-12-01 09:53:21',0,NULL,NULL,NULL),(50368,'Zondo',304,400,'2023-12-01 09:59:05',0,NULL,NULL,NULL),(50369,'Kakowa',2607,400,'2023-12-01 10:08:35',0,NULL,NULL,NULL),(50370,'Chimphangu',391,400,'2023-12-01 10:14:59',0,NULL,NULL,NULL),(50371,'Sumbo',217,574,'2023-12-01 10:16:44',0,NULL,NULL,NULL),(50372,'Malinda',102,400,'2023-12-01 10:25:49',0,NULL,NULL,NULL),(50373,'Jolomasi',1874,400,'2023-12-01 10:32:17',0,NULL,NULL,NULL),(50374,'Masunda',1101,568,'2023-12-01 10:45:10',0,NULL,NULL,NULL),(50375,'Nkutumula',2007,179,'2023-12-01 11:24:22',0,NULL,NULL,NULL),(50376,'Nkondachawo',381,574,'2023-12-01 11:28:09',0,NULL,NULL,NULL),(50377,'Ndelere',116,571,'2023-12-01 11:34:21',0,NULL,NULL,NULL),(50378,'Ngomba',1220,585,'2023-12-01 11:38:07',0,NULL,NULL,NULL),(50379,'Homba',2598,365,'2023-12-01 15:58:21',0,NULL,NULL,NULL),(50380,'Thavita',109,365,'2023-12-01 16:00:06',0,NULL,NULL,NULL),(50381,'m\'chanjiru',886,554,'2023-12-02 09:51:38',0,NULL,NULL,NULL),(50382,'m\'chitanjiru',886,554,'2023-12-02 09:52:06',0,NULL,NULL,NULL),(50383,'Area 18',2456,132,'2023-12-02 10:04:17',0,NULL,NULL,NULL),(50384,'Buluzi',2475,132,'2023-12-02 10:09:37',0,NULL,NULL,NULL),(50385,'Chikanga',2608,236,'2023-12-02 10:48:00',0,NULL,NULL,NULL),(50386,'Chikanga',2609,236,'2023-12-02 10:48:28',0,NULL,NULL,NULL),(50387,'Zamkutu',1933,132,'2023-12-02 10:50:20',0,NULL,NULL,NULL),(50388,'Ngalamba',327,365,'2023-12-02 11:18:25',0,NULL,NULL,NULL),(50389,'Chipasula',1933,132,'2023-12-02 11:27:13',0,NULL,NULL,NULL),(50390,'kawale',1933,554,'2023-12-02 14:10:08',0,NULL,NULL,NULL),(50391,'Area 23',2032,236,'2023-12-02 14:19:06',0,NULL,NULL,NULL),(50392,'Chitekwere',1220,585,'2023-12-04 08:24:42',0,NULL,NULL,NULL),(50393,'Ngayiyayi',1635,400,'2023-12-04 09:03:05',0,NULL,NULL,NULL),(50394,'Chakhoma',1009,567,'2023-12-04 09:16:28',0,NULL,NULL,NULL),(50395,'Chikowa',2610,400,'2023-12-04 09:17:37',0,NULL,NULL,NULL),(50396,'Njomvuyalema',474,400,'2023-12-04 09:28:11',0,NULL,NULL,NULL),(50397,'Nawati',232,567,'2023-12-04 09:34:30',0,NULL,NULL,NULL),(50398,'Mcmons',231,585,'2023-12-04 09:37:49',0,NULL,NULL,NULL),(50399,'Elizaeti',323,592,'2023-12-04 09:38:06',0,NULL,NULL,NULL),(50400,'Mtengo',249,271,'2023-12-04 09:40:58',0,NULL,NULL,NULL),(50401,'Gilibati',1873,400,'2023-12-04 09:57:45',0,NULL,NULL,NULL),(50402,'Robert4',184,585,'2023-12-04 10:04:43',0,NULL,NULL,NULL),(50403,'Khairaoyera',119,567,'2023-12-04 10:08:56',0,NULL,NULL,NULL),(50404,'Msampha',1449,587,'2023-12-04 10:18:16',0,NULL,NULL,NULL),(50405,'Malifu',350,577,'2023-12-04 10:18:35',0,NULL,NULL,NULL),(50406,'Gonthi',80,284,'2023-12-04 10:18:38',0,NULL,NULL,NULL),(50407,'Chimoka',351,577,'2023-12-04 10:19:02',0,NULL,NULL,NULL),(50408,'Mpeni',766,179,'2023-12-04 10:19:18',0,NULL,NULL,NULL),(50409,'Chimbalame bridge',413,284,'2023-12-04 10:19:52',0,NULL,NULL,NULL),(50410,'Soko',2611,400,'2023-12-04 10:23:11',0,NULL,NULL,NULL),(50411,'Unknown',2007,284,'2023-12-04 10:23:15',0,NULL,NULL,NULL),(50412,'Nthumbo',2007,284,'2023-12-04 10:24:22',0,NULL,NULL,NULL),(50413,'Chisapo',482,567,'2023-12-04 10:33:52',0,NULL,NULL,NULL),(50414,'Kachigwada area 38',365,592,'2023-12-04 10:38:30',0,NULL,NULL,NULL),(50415,'Kapundu',2612,567,'2023-12-04 10:48:02',0,NULL,NULL,NULL),(50416,'Chitekwele',1800,400,'2023-12-04 10:48:16',0,NULL,NULL,NULL),(50417,'Dausi',114,567,'2023-12-04 10:55:34',0,NULL,NULL,NULL),(50418,'Malili',791,567,'2023-12-04 11:04:15',0,NULL,NULL,NULL),(50419,'Kumbanyiwa',2045,577,'2023-12-04 11:23:17',0,NULL,NULL,NULL),(50420,'Kunlora',2613,284,'2023-12-04 11:30:36',0,NULL,NULL,NULL),(50421,'Sauya',2614,284,'2023-12-04 11:34:45',0,NULL,NULL,NULL),(50422,'Kafandikhale',1751,570,'2023-12-04 11:40:18',0,NULL,NULL,NULL),(50423,'Mpakasa',327,592,'2023-12-04 11:41:48',0,NULL,NULL,NULL),(50424,'Kapini',1189,570,'2023-12-04 11:43:18',0,NULL,NULL,NULL),(50425,'Chiwoko',591,585,'2023-12-04 11:47:00',0,NULL,NULL,NULL),(50426,'Abani',2615,365,'2023-12-04 11:55:38',0,NULL,NULL,NULL),(50427,'Namilazi',112,570,'2023-12-04 12:00:37',0,NULL,NULL,NULL),(50428,'Msiliza',2616,567,'2023-12-04 12:04:54',0,NULL,NULL,NULL),(50429,'Donsi',1693,570,'2023-12-04 12:08:13',0,NULL,NULL,NULL),(50430,'Bandawe',33,570,'2023-12-04 12:10:51',0,NULL,NULL,NULL),(50431,'Kadede',197,570,'2023-12-04 12:13:36',0,NULL,NULL,NULL),(50432,'Ngoniwa',250,385,'2023-12-04 12:15:25',0,NULL,NULL,NULL),(50433,'Ndechele',232,570,'2023-12-04 12:15:54',0,NULL,NULL,NULL),(50434,'Khambo',200,570,'2023-12-04 12:18:35',0,NULL,NULL,NULL),(50435,'Gwaza',42,592,'2023-12-04 12:20:04',0,NULL,NULL,NULL),(50436,'Chiwoza',2617,570,'2023-12-04 12:23:56',0,NULL,NULL,NULL),(50437,'Chipho',2618,567,'2023-12-04 12:26:09',0,NULL,NULL,NULL),(50438,'Lakalaka',589,385,'2023-12-04 12:31:44',0,NULL,NULL,NULL),(50439,'Mwazama',260,585,'2023-12-04 12:33:26',0,NULL,NULL,NULL),(50440,'Mhabi',47,592,'2023-12-04 12:34:35',0,NULL,NULL,NULL),(50441,'MHABI',47,592,'2023-12-04 12:34:35',0,NULL,NULL,NULL),(50442,'Mtema',1032,570,'2023-12-04 12:39:37',0,NULL,NULL,NULL),(50443,'Masha',224,385,'2023-12-04 12:39:53',0,NULL,NULL,NULL),(50444,'Katemela',113,585,'2023-12-04 12:46:46',0,NULL,NULL,NULL),(50445,'Kanyama',589,385,'2023-12-04 12:47:16',0,NULL,NULL,NULL),(50446,'Katemela',424,585,'2023-12-04 12:47:31',0,NULL,NULL,NULL),(50447,'Kalumba',397,330,'2023-12-04 12:48:44',0,NULL,NULL,NULL),(50448,'Sandram',116,270,'2023-12-04 12:49:29',0,NULL,NULL,NULL),(50449,'Chiganga',814,585,'2023-12-04 13:21:12',0,NULL,NULL,NULL),(50450,'Pyoli',341,284,'2023-12-04 13:43:56',0,NULL,NULL,NULL),(50451,'Njewa',2052,486,'2023-12-04 13:45:44',0,NULL,NULL,NULL),(50452,'Unknown',814,585,'2023-12-04 13:46:14',0,NULL,NULL,NULL),(50453,'Area33',1062,574,'2023-12-04 13:46:46',0,NULL,NULL,NULL),(50454,'Mwese',2619,574,'2023-12-04 13:57:28',0,NULL,NULL,NULL),(50455,'Area 25',2620,574,'2023-12-04 13:58:15',0,NULL,NULL,NULL),(50456,'Chipoka',724,571,'2023-12-04 14:15:03',0,NULL,NULL,NULL),(50457,'Tambalale',2621,270,'2023-12-04 14:17:03',0,NULL,NULL,NULL),(50458,'Mbinda',256,365,'2023-12-05 07:30:25',0,NULL,NULL,NULL),(50459,'Nkalo',527,592,'2023-12-05 09:12:15',0,NULL,NULL,NULL),(50460,'Shame',836,592,'2023-12-05 09:38:26',0,NULL,NULL,NULL),(50461,'Chikhwasa',381,400,'2023-12-05 09:51:24',0,NULL,NULL,NULL),(50462,'Bazale',76,567,'2023-12-05 10:04:46',0,NULL,NULL,NULL),(50463,'Namwini',2622,400,'2023-12-05 10:16:06',0,NULL,NULL,NULL),(50464,'Thaki',1425,567,'2023-12-05 10:16:10',0,NULL,NULL,NULL),(50465,'Kachikoka',187,400,'2023-12-05 10:23:05',0,NULL,NULL,NULL),(50466,'Chengo',1308,400,'2023-12-05 10:29:26',0,NULL,NULL,NULL),(50467,'Dzuwa',360,567,'2023-12-05 10:34:55',0,NULL,NULL,NULL),(50468,'Mpunga',231,400,'2023-12-05 10:36:00',0,NULL,NULL,NULL),(50469,'Aaron',2623,567,'2023-12-05 10:41:52',0,NULL,NULL,NULL),(50470,'Muyala',351,585,'2023-12-05 10:47:10',0,NULL,NULL,NULL),(50471,'Shemu',1009,400,'2023-12-05 10:48:02',0,NULL,NULL,NULL),(50472,'Mfili',436,400,'2023-12-05 11:01:34',0,NULL,NULL,NULL),(50473,'Mpombe',2624,567,'2023-12-05 11:01:37',0,NULL,NULL,NULL),(50474,'Chapata',102,567,'2023-12-05 11:07:24',0,NULL,NULL,NULL),(50475,'Simphasi',304,571,'2023-12-05 11:08:02',0,NULL,NULL,NULL),(50476,'Alasala 2',2007,567,'2023-12-05 11:13:07',0,NULL,NULL,NULL),(50477,'Kasewe',2626,582,'2023-12-05 11:28:28',0,NULL,NULL,NULL),(50478,'Chitundu',207,581,'2023-12-05 11:32:47',0,NULL,NULL,NULL),(50479,'Gawaza',1101,582,'2023-12-05 11:33:16',0,NULL,NULL,NULL),(50480,'Chioko',1458,567,'2023-12-05 11:41:04',0,NULL,NULL,NULL),(50481,'Chipojola',447,582,'2023-12-05 11:44:00',0,NULL,NULL,NULL),(50482,'Chilombo',1060,582,'2023-12-05 11:48:12',0,NULL,NULL,NULL),(50483,'Chitseka',2627,582,'2023-12-05 12:08:40',0,NULL,NULL,NULL),(50484,'Kamkoo',89,585,'2023-12-05 12:09:55',0,NULL,NULL,NULL),(50485,'Area9',2628,585,'2023-12-05 12:10:23',0,NULL,NULL,NULL),(50486,'Kalulu',466,584,'2023-12-05 12:24:10',0,NULL,NULL,NULL),(50487,'Kalulu',466,584,'2023-12-05 12:24:18',0,NULL,NULL,NULL),(50488,'Daniel',119,385,'2023-12-05 12:25:37',0,NULL,NULL,NULL),(50489,'Kuzomba',1162,271,'2023-12-05 12:50:01',0,NULL,NULL,NULL),(50490,'Chimzakadzi',1791,585,'2023-12-05 13:15:48',0,NULL,NULL,NULL),(50491,'Kapusa',224,270,'2023-12-05 14:27:19',0,NULL,NULL,NULL),(50492,'Kumadzi',523,324,'2023-12-06 06:56:44',0,NULL,NULL,NULL),(50493,'Madula',197,179,'2023-12-06 08:02:29',0,NULL,NULL,NULL),(50494,'Kalimiramoto',1489,567,'2023-12-06 09:01:48',0,NULL,NULL,NULL),(50495,'Chitsanya',200,400,'2023-12-06 09:04:17',0,NULL,NULL,NULL),(50496,'Duluzi',116,179,'2023-12-06 09:17:46',0,NULL,NULL,NULL),(50497,'Unknown',2629,400,'2023-12-06 09:28:31',0,NULL,NULL,NULL),(50498,'mchezi',404,454,'2023-12-06 09:36:06',0,NULL,NULL,NULL),(50499,'Nalama',1693,574,'2023-12-06 09:42:42',0,NULL,NULL,NULL),(50500,'MCHEZI',174,454,'2023-12-06 09:47:28',0,NULL,NULL,NULL),(50501,'MCHEZI',174,454,'2023-12-06 09:47:35',0,NULL,NULL,NULL),(50502,'MCHEZI',174,454,'2023-12-06 09:47:42',0,NULL,NULL,NULL),(50503,'Tgfrg',1583,423,'2023-12-06 09:41:01',0,NULL,NULL,NULL),(50504,'Mazira',482,571,'2023-12-06 09:59:49',0,NULL,NULL,NULL),(50505,'Unknown',292,585,'2023-12-06 10:10:07',0,NULL,NULL,NULL),(50506,'Mbabvi',351,586,'2023-12-06 10:39:17',0,NULL,NULL,NULL),(50507,'Mahekeya',80,586,'2023-12-06 10:44:03',0,NULL,NULL,NULL),(50508,'Kagwa',2083,504,'2023-12-06 10:44:59',0,NULL,NULL,NULL),(50509,'Kagwa',2075,504,'2023-12-06 10:47:14',0,NULL,NULL,NULL),(50510,'Chinsapo',2630,586,'2023-12-06 10:48:34',0,NULL,NULL,NULL),(50511,'Chinsapo',2630,586,'2023-12-06 10:48:36',0,NULL,NULL,NULL),(50512,'Chinsapo',2630,586,'2023-12-06 10:48:37',0,NULL,NULL,NULL),(50513,'Mchitanjiru',2257,504,'2023-12-06 11:08:57',0,NULL,NULL,NULL),(50514,'Tangaze',2050,179,'2023-12-06 11:10:30',0,NULL,NULL,NULL),(50515,'Likhudze',871,179,'2023-12-06 11:33:18',0,NULL,NULL,NULL),(50516,'Santhe',356,585,'2023-12-06 12:06:24',0,NULL,NULL,NULL),(50517,'Kossam',2038,324,'2023-12-06 12:11:45',0,NULL,NULL,NULL),(50518,'Kossam',2038,324,'2023-12-06 12:11:45',0,NULL,NULL,NULL),(50519,'Kossam',2038,324,'2023-12-06 12:11:45',0,NULL,NULL,NULL),(50520,'Chibwana',1136,585,'2023-12-06 12:35:22',0,NULL,NULL,NULL),(50521,'Titi',42,270,'2023-12-06 14:08:19',0,NULL,NULL,NULL),(50522,'Mikanda',342,270,'2023-12-06 14:59:25',0,NULL,NULL,NULL),(50523,'Chikhota',193,270,'2023-12-06 17:26:43',0,NULL,NULL,NULL),(50524,'Sector3',1746,574,'2023-12-07 08:40:35',0,NULL,NULL,NULL),(50525,'Zenko',1693,586,'2023-12-07 08:48:05',0,NULL,NULL,NULL),(50526,'Kaiche',1216,585,'2023-12-07 08:57:42',0,NULL,NULL,NULL),(50527,'Kuntenjera',310,574,'2023-12-07 08:57:51',0,NULL,NULL,NULL),(50528,'Mnimbo',353,458,'2023-12-07 09:11:44',0,NULL,NULL,NULL),(50529,'Pa zigayo',1807,574,'2023-12-07 09:13:37',0,NULL,NULL,NULL),(50530,'Chazula',182,586,'2023-12-07 09:15:48',0,NULL,NULL,NULL),(50531,'Chibwana',875,458,'2023-12-07 09:23:54',0,NULL,NULL,NULL),(50532,'Mulodza',770,571,'2023-12-07 09:31:03',0,NULL,NULL,NULL),(50533,'Emoyeni',1060,577,'2023-12-07 09:34:52',0,NULL,NULL,NULL),(50534,'Tunthuwa',320,565,'2023-12-07 09:46:05',0,NULL,NULL,NULL),(50535,'Chimkombero',1693,577,'2023-12-07 09:53:27',0,NULL,NULL,NULL),(50536,'Kabwanzi',2632,565,'2023-12-07 10:02:39',0,NULL,NULL,NULL),(50537,'Kudu',370,400,'2023-12-07 10:04:53',0,NULL,NULL,NULL),(50538,'Chauya',2632,565,'2023-12-07 10:06:01',0,NULL,NULL,NULL),(50539,'Khalamaunda',643,400,'2023-12-07 10:09:43',0,NULL,NULL,NULL),(50540,'Chembe',1751,565,'2023-12-07 10:10:17',0,NULL,NULL,NULL),(50541,'Msampha',1752,571,'2023-12-07 10:30:45',0,NULL,NULL,NULL),(50542,'Chipochela',1143,400,'2023-12-07 10:31:50',0,NULL,NULL,NULL),(50543,'Chingadza',478,565,'2023-12-07 10:31:51',0,NULL,NULL,NULL),(50544,'Mtiza',2118,587,'2023-12-07 10:33:21',0,NULL,NULL,NULL),(50545,'Nanjili',2156,592,'2023-12-07 10:38:25',0,NULL,NULL,NULL),(50546,'Bango',1392,565,'2023-12-07 10:39:13',0,NULL,NULL,NULL),(50547,'Ishumael',370,400,'2023-12-07 10:40:59',0,NULL,NULL,NULL),(50548,'Phindo',378,400,'2023-12-07 10:41:48',0,NULL,NULL,NULL),(50549,'Mphindo',378,592,'2023-12-07 10:42:04',0,NULL,NULL,NULL),(50550,'Chimkole',323,565,'2023-12-07 10:42:41',0,NULL,NULL,NULL),(50551,'Chinyama',1188,565,'2023-12-07 10:48:27',0,NULL,NULL,NULL),(50552,'Chinyama',1189,565,'2023-12-07 10:49:12',0,NULL,NULL,NULL),(50553,'Dailesi',379,400,'2023-12-07 10:51:13',0,NULL,NULL,NULL),(50554,'Bwindi',615,574,'2023-12-07 10:51:43',0,NULL,NULL,NULL),(50555,'Area  56',835,400,'2023-12-07 10:51:50',0,NULL,NULL,NULL),(50556,'Kauma',98,565,'2023-12-07 10:53:15',0,NULL,NULL,NULL),(50557,'Ntuwakale',450,574,'2023-12-07 10:57:59',0,NULL,NULL,NULL),(50558,'Landa',39,565,'2023-12-07 11:02:58',0,NULL,NULL,NULL),(50559,'Magona',347,458,'2023-12-07 11:05:05',0,NULL,NULL,NULL),(50560,'Tsabango',2306,504,'2023-12-07 11:11:33',0,NULL,NULL,NULL),(50561,'Chipeni',297,565,'2023-12-07 11:11:42',0,NULL,NULL,NULL),(50562,'Kudovu',1659,458,'2023-12-07 11:14:50',0,NULL,NULL,NULL),(50563,'Mbunda',209,565,'2023-12-07 11:16:26',0,NULL,NULL,NULL),(50564,'Jumbe',198,565,'2023-12-07 11:23:31',0,NULL,NULL,NULL),(50565,'Jini',741,365,'2023-12-07 11:28:01',0,NULL,NULL,NULL),(50566,'Kachipewa',591,565,'2023-12-07 11:51:35',0,NULL,NULL,NULL),(50567,'Asela',482,565,'2023-12-07 11:54:28',0,NULL,NULL,NULL),(50568,'Mzembwe',370,565,'2023-12-07 11:58:23',0,NULL,NULL,NULL),(50569,'Chimwembwe',370,565,'2023-12-07 11:59:07',0,NULL,NULL,NULL),(50570,'Kazimete',93,584,'2023-12-07 12:03:21',0,NULL,NULL,NULL),(50571,'Mitundu',1800,581,'2023-12-07 12:06:14',0,NULL,NULL,NULL),(50572,'Kambuku',1215,565,'2023-12-07 12:16:03',0,NULL,NULL,NULL),(50573,'Bembe',591,574,'2023-12-07 13:23:49',0,NULL,NULL,NULL),(50574,'Msomani',961,586,'2023-12-08 08:46:11',0,NULL,NULL,NULL),(50575,'Chalasa',410,584,'2023-12-08 08:51:15',0,NULL,NULL,NULL),(50576,'Ndingule',530,565,'2023-12-08 08:53:52',0,NULL,NULL,NULL),(50577,'Chinkhunda',609,585,'2023-12-08 08:57:55',0,NULL,NULL,NULL),(50578,'Chenga',436,584,'2023-12-08 08:59:15',0,NULL,NULL,NULL),(50579,'Mtata',1146,584,'2023-12-08 09:08:02',0,NULL,NULL,NULL),(50580,'Mononga',1770,400,'2023-12-08 09:25:00',0,NULL,NULL,NULL),(50581,'Fidesi',217,571,'2023-12-08 09:25:03',0,NULL,NULL,NULL),(50582,'Simoni',836,574,'2023-12-08 09:33:53',0,NULL,NULL,NULL),(50583,'Ndalama',953,458,'2023-12-08 09:37:19',0,NULL,NULL,NULL),(50584,'Mangisa',2636,565,'2023-12-08 09:38:46',0,NULL,NULL,NULL),(50585,'Mbeta',176,458,'2023-12-08 09:45:54',0,NULL,NULL,NULL),(50586,'Dzumala',835,400,'2023-12-08 09:46:17',0,NULL,NULL,NULL),(50587,'Mujuma',27,574,'2023-12-08 09:53:16',0,NULL,NULL,NULL),(50588,'Madeya',1763,400,'2023-12-08 09:57:57',0,NULL,NULL,NULL),(50589,'Bauleni',391,400,'2023-12-08 10:04:48',0,NULL,NULL,NULL),(50590,'A/18',365,565,'2023-12-08 10:08:51',0,NULL,NULL,NULL),(50591,'A/18',365,565,'2023-12-08 10:08:58',0,NULL,NULL,NULL),(50592,'A/18',365,565,'2023-12-08 10:09:03',0,NULL,NULL,NULL),(50593,'A/18',365,565,'2023-12-08 10:09:06',0,NULL,NULL,NULL),(50594,'A/18',365,565,'2023-12-08 10:09:36',0,NULL,NULL,NULL),(50595,'Ndongo',2637,400,'2023-12-08 10:15:21',0,NULL,NULL,NULL),(50596,'Malizani',1425,577,'2023-12-08 10:16:38',0,NULL,NULL,NULL),(50597,'Nsikidzi',209,565,'2023-12-08 10:20:54',0,NULL,NULL,NULL),(50598,'Izi',191,571,'2023-12-08 10:40:53',0,NULL,NULL,NULL),(50599,'Kamanga',891,582,'2023-12-08 11:02:34',0,NULL,NULL,NULL),(50600,'Mgochi',2638,582,'2023-12-08 11:15:45',0,NULL,NULL,NULL),(50601,'Mbota',728,584,'2023-12-08 11:24:37',0,NULL,NULL,NULL),(50602,'Kusangwi',193,365,'2023-12-08 11:28:39',0,NULL,NULL,NULL),(50603,'Mbamusi',870,582,'2023-12-08 11:30:32',0,NULL,NULL,NULL),(50604,'Maganga',2639,581,'2023-12-08 11:37:38',0,NULL,NULL,NULL),(50605,'Namichenga',310,565,'2023-12-08 11:48:25',0,NULL,NULL,NULL),(50606,'Mulukumya',618,585,'2023-12-08 11:50:34',0,NULL,NULL,NULL),(50607,'Thekerani',2641,565,'2023-12-08 12:10:17',0,NULL,NULL,NULL),(50608,'Mchilasanje',233,581,'2023-12-08 12:13:56',0,NULL,NULL,NULL),(50609,'Chani',1043,565,'2023-12-08 12:22:13',0,NULL,NULL,NULL),(50610,'Jumbega',585,565,'2023-12-08 12:37:33',0,NULL,NULL,NULL),(50611,'Nsangu',193,365,'2023-12-08 13:19:27',0,NULL,NULL,NULL),(50612,'Chimwendo',2359,270,'2023-12-11 07:15:31',0,NULL,NULL,NULL),(50613,'Unknown',591,592,'2023-12-11 08:46:08',0,NULL,NULL,NULL),(50614,'Manyungwa',1040,592,'2023-12-11 09:46:29',0,NULL,NULL,NULL),(50615,'Mwamadi',1793,567,'2023-12-11 09:47:44',0,NULL,NULL,NULL),(50616,'Sixmiles',365,577,'2023-12-11 09:55:14',0,NULL,NULL,NULL),(50617,'Zankutu',353,567,'2023-12-11 10:02:24',0,NULL,NULL,NULL),(50618,'Mwabachila',206,400,'2023-12-11 10:08:44',0,NULL,NULL,NULL),(50619,'Chakumodzi',370,567,'2023-12-11 10:14:24',0,NULL,NULL,NULL),(50620,'Chakumodzi',378,400,'2023-12-11 10:15:16',0,NULL,NULL,NULL),(50621,'Diwa',200,581,'2023-12-11 10:26:31',0,NULL,NULL,NULL),(50622,'Mpinji',1392,435,'2023-12-11 10:26:32',0,NULL,NULL,NULL),(50623,'Stephano',378,435,'2023-12-11 10:27:38',0,NULL,NULL,NULL),(50624,'Apinji',591,385,'2023-12-11 11:02:06',0,NULL,NULL,NULL),(50625,'Kastom',2642,400,'2023-12-11 11:04:03',0,NULL,NULL,NULL),(50626,'Mbavi',835,400,'2023-12-11 11:04:37',0,NULL,NULL,NULL),(50627,'Kam\'mata',259,385,'2023-12-11 11:06:19',0,NULL,NULL,NULL),(50628,'Katema',1162,565,'2023-12-11 11:07:15',0,NULL,NULL,NULL),(50629,'Ngundazuwa',187,567,'2023-12-11 11:07:54',0,NULL,NULL,NULL),(50630,'Mundadzuwa',187,400,'2023-12-11 11:09:32',0,NULL,NULL,NULL),(50631,'Msakambewa',1762,571,'2023-12-11 11:20:17',0,NULL,NULL,NULL),(50632,'Kachipande',1762,565,'2023-12-11 11:21:17',0,NULL,NULL,NULL),(50633,'Kachipande',1762,565,'2023-12-11 11:21:18',0,NULL,NULL,NULL),(50634,'Msiliza',351,567,'2023-12-11 11:21:31',0,NULL,NULL,NULL),(50635,'Nsungwi',1765,270,'2023-12-11 11:35:44',0,NULL,NULL,NULL),(50636,'Makuta',116,585,'2023-12-11 11:36:14',0,NULL,NULL,NULL),(50637,'Kaundikiza',2644,567,'2023-12-11 11:37:02',0,NULL,NULL,NULL),(50638,'Chiseka ',114,565,'2023-12-11 11:37:34',0,NULL,NULL,NULL),(50639,'A/47',1032,565,'2023-12-11 11:38:12',0,NULL,NULL,NULL),(50640,'A/47',1032,565,'2023-12-11 11:38:18',0,NULL,NULL,NULL),(50641,'A/47',1032,565,'2023-12-11 11:38:25',0,NULL,NULL,NULL),(50642,'Jailos',591,385,'2023-12-11 11:42:15',0,NULL,NULL,NULL),(50643,'Chimonjo',1017,567,'2023-12-11 11:45:40',0,NULL,NULL,NULL),(50644,'Ndande',314,400,'2023-12-11 11:47:40',0,NULL,NULL,NULL),(50645,'Area4',165,577,'2023-12-11 11:48:02',0,NULL,NULL,NULL),(50646,'Mayambo',1751,567,'2023-12-11 11:51:34',0,NULL,NULL,NULL),(50647,'Mphamba1',835,385,'2023-12-11 11:52:12',0,NULL,NULL,NULL),(50648,'Buli',1032,385,'2023-12-11 11:59:28',0,NULL,NULL,NULL),(50649,'Swali',332,567,'2023-12-11 12:05:29',0,NULL,NULL,NULL),(50650,'Lufu',1021,400,'2023-12-11 12:06:18',0,NULL,NULL,NULL),(50651,'Kululanga',814,585,'2023-12-11 12:21:13',0,NULL,NULL,NULL),(50652,'Kafwafwa',2417,585,'2023-12-11 12:53:31',0,NULL,NULL,NULL),(50653,'Kazawe',1136,179,'2023-12-11 13:15:59',0,NULL,NULL,NULL),(50654,'Mgombe 2',1750,284,'2023-12-11 13:21:42',0,NULL,NULL,NULL),(50655,'Sanjiko',113,577,'2023-12-11 13:48:39',0,NULL,NULL,NULL),(50656,'Kawulungu',1750,270,'2023-12-12 07:46:24',0,NULL,NULL,NULL),(50657,'Ngo\'na',116,270,'2023-12-12 08:24:59',0,NULL,NULL,NULL),(50658,'Tank',2166,94,'2023-12-12 10:03:43',0,NULL,NULL,NULL),(50659,'Kawale',2257,504,'2023-12-12 10:24:40',0,NULL,NULL,NULL),(50660,'Zgabalabata',451,592,'2023-12-12 11:00:54',0,NULL,NULL,NULL),(50661,'Southeran bottlers',2306,284,'2023-12-12 11:04:41',0,NULL,NULL,NULL),(50662,'Akuitana',116,584,'2023-12-12 11:41:56',0,NULL,NULL,NULL),(50663,'Aliwunga',193,584,'2023-12-12 11:50:03',0,NULL,NULL,NULL),(50664,'Mulelemba',914,584,'2023-12-12 11:53:35',0,NULL,NULL,NULL),(50665,'Kamoto',1024,584,'2023-12-12 12:09:13',0,NULL,NULL,NULL),(50666,'Mtonga',1751,570,'2023-12-12 12:09:25',0,NULL,NULL,NULL),(50667,'Zebera',585,582,'2023-12-12 12:10:19',0,NULL,NULL,NULL),(50668,'Chitanje',1693,570,'2023-12-12 12:12:09',0,NULL,NULL,NULL),(50669,'Makha',213,584,'2023-12-12 12:19:07',0,NULL,NULL,NULL),(50670,'Malenya',474,584,'2023-12-12 12:23:06',0,NULL,NULL,NULL),(50671,'Mzengereza',1392,579,'2023-12-12 12:25:14',0,NULL,NULL,NULL),(50672,'Eliyasi',529,584,'2023-12-12 12:29:02',0,NULL,NULL,NULL),(50673,'Chiweza',1689,579,'2023-12-12 12:31:08',0,NULL,NULL,NULL),(50674,'Mtandilre',2061,570,'2023-12-12 12:43:32',0,NULL,NULL,NULL),(50675,'Ofesi',648,570,'2023-12-12 12:51:10',0,NULL,NULL,NULL),(50676,'Nkhukumila',1793,570,'2023-12-12 12:54:12',0,NULL,NULL,NULL),(50677,'Area46',1693,570,'2023-12-12 12:54:39',0,NULL,NULL,NULL),(50678,'Maoni',1795,570,'2023-12-12 13:04:24',0,NULL,NULL,NULL),(50679,'Ntsekwe',108,284,'2023-12-12 13:07:00',0,NULL,NULL,NULL),(50680,'Mwanja',119,94,'2023-12-13 09:55:01',0,NULL,NULL,NULL),(50681,'Kachenjeramanja',232,271,'2023-12-13 10:30:54',0,NULL,NULL,NULL),(50682,'M\'manga',589,94,'2023-12-13 10:36:32',0,NULL,NULL,NULL),(50683,'Makapa',723,584,'2023-12-13 10:55:37',0,NULL,NULL,NULL),(50684,'Mlodza',1203,284,'2023-12-13 10:57:05',0,NULL,NULL,NULL),(50685,'Chomba',205,581,'2023-12-13 10:59:46',0,NULL,NULL,NULL),(50686,'CHOMBA',205,581,'2023-12-13 10:59:53',0,NULL,NULL,NULL),(50687,'Masasa',194,94,'2023-12-13 11:03:28',0,NULL,NULL,NULL),(50688,'Chikhawu',776,584,'2023-12-13 11:19:47',0,NULL,NULL,NULL),(50689,'Kadzakaminga',186,271,'2023-12-13 11:24:22',0,NULL,NULL,NULL),(50690,'Kombozi',776,584,'2023-12-13 11:29:14',0,NULL,NULL,NULL),(50691,'Maingwe',190,570,'2023-12-13 11:40:13',0,NULL,NULL,NULL),(50692,'Area3',353,584,'2023-12-13 11:44:13',0,NULL,NULL,NULL),(50693,'Unknown',2646,435,'2023-12-13 11:49:35',0,NULL,NULL,NULL),(50694,'Makongwe',211,584,'2023-12-13 11:51:06',0,NULL,NULL,NULL),(50695,'Mkangazule',370,570,'2023-12-13 11:51:47',0,NULL,NULL,NULL),(50696,'Mtsinje',1432,584,'2023-12-13 11:54:49',0,NULL,NULL,NULL),(50697,'Akuyu',2647,570,'2023-12-13 11:59:58',0,NULL,NULL,NULL),(50698,'Bisai',187,284,'2023-12-13 13:01:30',0,NULL,NULL,NULL),(50699,'Juma',66,270,'2023-12-14 07:41:36',0,NULL,NULL,NULL),(50700,'Bakolo',436,270,'2023-12-14 09:23:53',0,NULL,NULL,NULL),(50701,'Saiwala',199,586,'2023-12-14 09:55:06',0,NULL,NULL,NULL),(50702,'Malungunda',211,586,'2023-12-14 10:00:27',0,NULL,NULL,NULL),(50703,'Chitukula',1516,586,'2023-12-14 10:05:01',0,NULL,NULL,NULL),(50704,'Mtsiliza',174,454,'2023-12-14 10:40:03',0,NULL,NULL,NULL),(50705,'Butawo',265,586,'2023-12-14 10:55:27',0,NULL,NULL,NULL),(50706,'Mphimbi',1032,584,'2023-12-14 11:03:02',0,NULL,NULL,NULL),(50707,'mtsiriza',116,454,'2023-12-14 11:09:12',0,NULL,NULL,NULL),(50708,'Mtsiriza',2540,454,'2023-12-14 11:09:49',0,NULL,NULL,NULL),(50709,'Mandeza',1594,584,'2023-12-14 11:10:23',0,NULL,NULL,NULL),(50710,'Kazakalowa',202,584,'2023-12-14 11:20:01',0,NULL,NULL,NULL),(50711,'Misomali',2648,584,'2023-12-14 11:22:57',0,NULL,NULL,NULL),(50712,'Kasina',2122,365,'2023-12-14 11:25:36',0,NULL,NULL,NULL),(50713,'Mthumbo',66,584,'2023-12-14 11:25:47',0,NULL,NULL,NULL),(50714,'MPINGU',404,454,'2023-12-14 11:31:01',0,NULL,NULL,NULL),(50715,'MPINGU',404,454,'2023-12-14 11:31:07',0,NULL,NULL,NULL),(50716,'Khasu',200,570,'2023-12-14 11:31:08',0,NULL,NULL,NULL),(50717,'Ngomwa',342,179,'2023-12-14 13:22:29',0,NULL,NULL,NULL),(50718,'Gabriel',814,270,'2023-12-15 07:13:25',0,NULL,NULL,NULL),(50719,'Six miles',929,270,'2023-12-15 07:14:00',0,NULL,NULL,NULL),(50720,'Susani',199,270,'2023-12-15 09:15:52',0,NULL,NULL,NULL),(50721,'Chikwavu',360,270,'2023-12-15 10:22:04',0,NULL,NULL,NULL),(50722,'Mtandire',2401,94,'2023-12-15 10:37:40',0,NULL,NULL,NULL),(50723,'Banda ',398,284,'2023-12-15 10:51:45',0,NULL,NULL,NULL),(50724,'Domwe',261,284,'2023-12-15 11:17:54',0,NULL,NULL,NULL),(50725,'Kayimayima',197,94,'2023-12-15 12:45:36',0,NULL,NULL,NULL),(50726,'Chilinde',2350,392,'2023-12-16 08:22:41',0,NULL,NULL,NULL),(50727,'A49',2455,392,'2023-12-16 09:49:40',0,NULL,NULL,NULL),(50728,'A49',2455,392,'2023-12-16 09:49:51',0,NULL,NULL,NULL),(50729,'Mtemakhaya',343,271,'2023-12-16 10:06:54',0,NULL,NULL,NULL),(50730,'Area46',2069,392,'2023-12-16 11:06:48',0,NULL,NULL,NULL),(50731,'Area 46',1903,392,'2023-12-16 11:07:30',0,NULL,NULL,NULL),(50732,'Sent',776,392,'2023-12-16 11:12:31',0,NULL,NULL,NULL),(50733,'Area49',365,392,'2023-12-16 11:15:24',0,NULL,NULL,NULL),(50734,'Mtandire',2257,392,'2023-12-16 11:23:23',0,NULL,NULL,NULL),(50735,'Mtandire',776,392,'2023-12-16 11:24:03',0,NULL,NULL,NULL),(50736,'Area25',776,392,'2023-12-16 11:29:52',0,NULL,NULL,NULL),(50737,'Mtsiliza',776,392,'2023-12-16 11:32:46',0,NULL,NULL,NULL),(50738,'Pondamali',1984,236,'2023-12-16 11:33:20',0,NULL,NULL,NULL),(50739,'Mtsiliza',770,392,'2023-12-16 12:03:30',0,NULL,NULL,NULL),(50740,'Mtiliza',770,392,'2023-12-16 12:04:16',0,NULL,NULL,NULL),(50741,'Area25',365,392,'2023-12-16 12:32:47',0,NULL,NULL,NULL),(50742,'Area46',365,392,'2023-12-16 13:18:07',0,NULL,NULL,NULL),(50743,'Area23',1893,392,'2023-12-16 13:30:54',0,NULL,NULL,NULL),(50744,'State house',356,236,'2023-12-16 13:23:02',0,NULL,NULL,NULL),(50745,'Kauma',165,132,'2023-12-16 13:57:08',0,NULL,NULL,NULL),(50746,'Malili',1903,270,'2023-12-16 14:20:01',0,NULL,NULL,NULL),(50747,'Chitsamila',232,179,'2023-12-18 10:16:51',0,NULL,NULL,NULL),(50748,'Chimbalame',353,592,'2023-12-18 10:50:28',0,NULL,NULL,NULL),(50749,'Tank mai busa amason',546,284,'2023-12-18 12:40:09',0,NULL,NULL,NULL),(50750,'Chibaka',357,284,'2023-12-18 14:54:12',0,NULL,NULL,NULL),(50751,'Mchacha',961,148,'2023-12-19 07:58:00',0,NULL,NULL,NULL),(50752,'Nchacha',962,179,'2023-12-19 08:03:13',0,NULL,NULL,NULL),(50753,'Chinganula',1038,179,'2023-12-19 08:57:37',0,NULL,NULL,NULL),(50754,'Nkhandwe',75,592,'2023-12-19 09:50:37',0,NULL,NULL,NULL),(50755,'Unknown',116,592,'2023-12-19 10:40:17',0,NULL,NULL,NULL),(50756,'Kachere',410,365,'2023-12-19 11:18:03',0,NULL,NULL,NULL),(50757,'Chigwaja',518,324,'2023-12-19 13:29:33',0,NULL,NULL,NULL),(50758,'Chitukula',2651,270,'2023-12-19 15:11:04',0,NULL,NULL,NULL),(50759,'Sikukuza',119,365,'2023-12-20 07:51:42',0,NULL,NULL,NULL),(50760,'Chipumi',780,571,'2023-12-20 09:50:40',0,NULL,NULL,NULL),(50761,'Kambuye',398,365,'2023-12-20 11:25:19',0,NULL,NULL,NULL),(50762,'Chitanjiru',1932,179,'2023-12-20 11:47:41',0,NULL,NULL,NULL),(50763,'Mputeni',177,179,'2023-12-21 08:10:10',0,NULL,NULL,NULL),(50764,'Chizukila',812,179,'2023-12-21 09:46:02',0,NULL,NULL,NULL),(50765,'Kamphulusa',1401,435,'2023-12-21 10:54:18',0,NULL,NULL,NULL),(50766,'Gologota',2166,179,'2023-12-21 11:39:23',0,NULL,NULL,NULL),(50767,'Makumbucha',113,271,'2023-12-21 12:24:55',0,NULL,NULL,NULL),(50768,'Durban',357,284,'2023-12-21 12:31:34',0,NULL,NULL,NULL),(50769,'Unknown',404,284,'2023-12-21 12:33:28',0,NULL,NULL,NULL),(50770,'William',1789,365,'2023-12-22 09:37:32',0,NULL,NULL,NULL),(50771,'Nankumba',341,324,'2023-12-22 09:57:53',0,NULL,NULL,NULL),(50772,'Mujiwa',312,324,'2023-12-22 11:11:03',0,NULL,NULL,NULL),(50773,'Chakuza',47,365,'2023-12-22 11:34:14',0,NULL,NULL,NULL),(50774,'Area 20',791,271,'2023-12-26 09:24:30',0,NULL,NULL,NULL),(50775,'Area24',2631,271,'2023-12-26 09:33:28',0,NULL,NULL,NULL),(50776,'Chilota',1903,271,'2023-12-26 10:13:20',0,NULL,NULL,NULL),(50777,'Senti',1254,271,'2023-12-26 10:17:26',0,NULL,NULL,NULL),(50778,'Area23',2631,271,'2023-12-26 10:29:04',0,NULL,NULL,NULL),(50779,'Dubai',157,271,'2023-12-26 12:40:30',0,NULL,NULL,NULL),(50780,'Benthu',118,324,'2023-12-27 07:50:52',0,NULL,NULL,NULL),(50781,'Kwenenda',219,324,'2023-12-27 09:59:58',0,NULL,NULL,NULL),(50782,'Gologota',2306,270,'2023-12-27 10:24:00',0,NULL,NULL,NULL),(50783,'Chikhasu',199,324,'2023-12-27 10:30:48',0,NULL,NULL,NULL),(50784,'Muntiyala',1817,270,'2023-12-27 10:32:32',0,NULL,NULL,NULL),(50785,'Chelowa',314,270,'2023-12-27 10:57:27',0,NULL,NULL,NULL),(50786,'Nalikule',841,324,'2023-12-27 12:37:48',0,NULL,NULL,NULL),(50787,'Muzu primary shool',2653,284,'2023-12-27 12:42:34',0,NULL,NULL,NULL),(50788,'Muzu primary school,mponda plot',398,284,'2023-12-27 12:44:00',0,NULL,NULL,NULL),(50789,'Chindimbo',165,284,'2023-12-27 12:47:40',0,NULL,NULL,NULL),(50790,'Namayise',192,94,'2023-12-27 14:07:28',0,NULL,NULL,NULL),(50791,'Tchale',94,295,'2023-12-28 11:48:42',0,NULL,NULL,NULL),(50792,'Area36',2631,329,'2023-12-28 11:53:29',0,NULL,NULL,NULL),(50793,'Chindeka',261,284,'2023-12-28 11:54:56',0,NULL,NULL,NULL),(50794,'Mlore',18,59,'2023-12-28 13:06:59',0,NULL,NULL,NULL),(50795,'Dzuwa',618,270,'2023-12-29 09:54:17',0,NULL,NULL,NULL),(50796,'Mapango',591,94,'2023-12-29 12:57:17',0,NULL,NULL,NULL),(50797,'Kambalame',2050,179,'2023-12-30 09:50:48',0,NULL,NULL,NULL),(50798,'Mgundamavu',113,94,'2024-01-02 07:06:56',0,NULL,NULL,NULL),(50799,'Ntongole',208,179,'2024-01-02 10:36:45',0,NULL,NULL,NULL),(50800,'Kataza',591,94,'2024-01-02 12:17:15',0,NULL,NULL,NULL),(50801,'Matseketa',98,526,'2024-01-02 12:17:41',0,NULL,NULL,NULL),(50802,'Njichi',191,365,'2024-01-02 13:02:22',0,NULL,NULL,NULL),(50803,'Godfrey',301,365,'2024-01-02 14:16:00',0,NULL,NULL,NULL),(50804,'Mteche',231,94,'2024-01-03 07:53:44',0,NULL,NULL,NULL),(50805,'Mwawa',368,179,'2024-01-03 08:30:50',0,NULL,NULL,NULL),(50806,'Chikwera',1903,94,'2024-01-03 08:53:03',0,NULL,NULL,NULL),(50807,'Mitundu',119,435,'2024-01-03 09:18:37',0,NULL,NULL,NULL),(50808,'Tachira clinc',375,94,'2024-01-03 09:24:03',0,NULL,NULL,NULL),(50809,'AREA3',2257,537,'2024-01-03 15:25:18',0,NULL,NULL,NULL),(50810,'Majiga',2166,179,'2024-01-04 10:00:43',0,NULL,NULL,NULL),(50811,'Yatibu',206,324,'2024-01-04 10:52:02',0,NULL,NULL,NULL),(50812,'Mphameya',310,324,'2024-01-04 15:28:03',0,NULL,NULL,NULL),(50813,'Sawa',403,592,'2024-01-05 08:58:03',0,NULL,NULL,NULL),(50814,'Kauma',1187,568,'2024-01-05 10:00:00',0,NULL,NULL,NULL),(50815,'Mwadenje',404,179,'2024-01-05 10:13:14',0,NULL,NULL,NULL),(50816,'Mbera',2050,179,'2024-01-05 10:38:24',0,NULL,NULL,NULL),(50817,'Bua 1',75,94,'2024-01-05 11:42:22',0,NULL,NULL,NULL),(50818,'Tap no 9',413,94,'2024-01-05 12:30:33',0,NULL,NULL,NULL),(50819,'Masambase',589,270,'2024-01-06 10:04:27',0,NULL,NULL,NULL),(50820,'Mtowere',1443,270,'2024-01-08 09:38:41',0,NULL,NULL,NULL),(50821,'Beki',396,592,'2024-01-08 09:52:16',0,NULL,NULL,NULL),(50822,'Nsewa',2132,271,'2024-01-08 10:48:27',0,NULL,NULL,NULL),(50823,'Phalula',2598,270,'2024-01-08 11:16:14',0,NULL,NULL,NULL),(50824,'Njokaluzi',116,270,'2024-01-08 11:35:30',0,NULL,NULL,NULL),(50825,'Size',2039,284,'2024-01-08 11:47:30',0,NULL,NULL,NULL),(50826,'Nkhoswe resthouse',398,284,'2024-01-08 11:48:23',0,NULL,NULL,NULL),(50827,'Kawole',569,270,'2024-01-08 12:10:05',0,NULL,NULL,NULL),(50828,'Area 36',569,270,'2024-01-08 12:11:52',0,NULL,NULL,NULL),(50829,'Chibisa banda',2408,270,'2024-01-08 12:23:51',0,NULL,NULL,NULL),(50830,'Mdziononga',2256,330,'2024-01-08 13:17:58',0,NULL,NULL,NULL),(50831,'Mchitanjilu',2122,284,'2024-01-08 14:59:27',0,NULL,NULL,NULL),(50832,'Kaninde',1659,284,'2024-01-09 11:43:15',0,NULL,NULL,NULL),(50833,'Malombodza',360,270,'2024-01-09 15:11:26',0,NULL,NULL,NULL),(50834,'Kachere prison',1850,291,'2024-01-10 08:08:37',0,NULL,NULL,NULL),(50835,'Mikuju',2655,291,'2024-01-10 08:23:03',0,NULL,NULL,NULL),(50836,'Kachere prison',365,291,'2024-01-10 08:23:31',0,NULL,NULL,NULL),(50837,'Kanyungwi',203,291,'2024-01-10 08:30:24',0,NULL,NULL,NULL),(50838,'Chiondo',116,291,'2024-01-10 08:39:39',0,NULL,NULL,NULL),(50839,'Mphande',759,592,'2024-01-10 08:59:31',0,NULL,NULL,NULL),(50840,'Mphande',27,94,'2024-01-10 09:27:47',0,NULL,NULL,NULL),(50841,'Siyani',116,291,'2024-01-10 14:16:29',0,NULL,NULL,NULL),(50842,'Kachere prison',1932,291,'2024-01-10 14:17:03',0,NULL,NULL,NULL),(50843,'Zandani',2656,291,'2024-01-10 14:26:07',0,NULL,NULL,NULL),(50844,'Mabuka',2050,94,'2024-01-11 07:27:41',0,NULL,NULL,NULL),(50845,'Sos',1807,94,'2024-01-11 07:28:16',0,NULL,NULL,NULL),(50846,'Kachere prison',593,291,'2024-01-11 07:56:06',0,NULL,NULL,NULL),(50847,'Chiwela',78,291,'2024-01-11 08:10:29',0,NULL,NULL,NULL),(50848,'Kachere prison',770,291,'2024-01-11 08:10:54',0,NULL,NULL,NULL),(50849,'Trading centre',1288,270,'2024-01-11 11:06:00',0,NULL,NULL,NULL),(50850,'Tanga',1903,365,'2024-01-11 12:18:04',0,NULL,NULL,NULL),(50851,'Chiuzira',2306,94,'2024-01-13 08:31:08',0,NULL,NULL,NULL),(50852,'Bagdad',2075,321,'2024-01-13 09:00:42',0,NULL,NULL,NULL),(50853,'Bagdad',2083,321,'2024-01-13 09:02:05',0,NULL,NULL,NULL),(50854,'Njerwa',1844,270,'2024-01-13 09:56:58',0,NULL,NULL,NULL),(50855,'Kawale',2631,94,'2024-01-13 10:42:38',0,NULL,NULL,NULL),(50856,'Area18a',2455,258,'2024-01-13 10:56:54',0,NULL,NULL,NULL),(50857,'Chin\'ganga',351,321,'2024-01-13 11:28:09',0,NULL,NULL,NULL),(50858,'Kayabwa',115,271,'2024-01-15 08:29:30',0,NULL,NULL,NULL),(50859,'Machinjiri',2149,271,'2024-01-15 08:33:28',0,NULL,NULL,NULL),(50860,'Kaphuka',2050,321,'2024-01-15 08:46:40',0,NULL,NULL,NULL),(50861,'Donbosco',2306,321,'2024-01-15 09:09:37',0,NULL,NULL,NULL),(50862,'Mbabvi',1903,271,'2024-01-15 09:24:26',0,NULL,NULL,NULL),(50863,'Jodi',116,324,'2024-01-15 10:14:58',0,NULL,NULL,NULL),(50864,'Jodi',1254,324,'2024-01-15 10:15:14',0,NULL,NULL,NULL),(50865,'Chalahala',1243,270,'2024-01-15 13:29:53',0,NULL,NULL,NULL),(50866,'Manondo',416,324,'2024-01-15 13:33:27',0,NULL,NULL,NULL),(50867,'Nchesi',2631,321,'2024-01-15 13:53:46',0,NULL,NULL,NULL),(50868,'Kachikho',351,94,'2024-01-16 09:43:39',0,NULL,NULL,NULL),(50869,'Nakhale',1893,270,'2024-01-16 10:15:13',0,NULL,NULL,NULL),(50870,'Thyona',342,270,'2024-01-16 10:37:35',0,NULL,NULL,NULL),(50871,'Jusi',1752,435,'2024-01-16 11:54:51',0,NULL,NULL,NULL),(50872,'Yesaya',1762,577,'2024-01-17 10:59:54',0,NULL,NULL,NULL),(50873,'Banda',682,270,'2024-01-17 11:07:34',0,NULL,NULL,NULL),(50874,'Old airwing',1032,270,'2024-01-17 11:20:35',0,NULL,NULL,NULL),(50875,'New prison /chitedze',482,270,'2024-01-17 12:44:47',0,NULL,NULL,NULL),(50876,'Zumbira',312,324,'2024-01-17 15:10:41',0,NULL,NULL,NULL),(50877,'Matenje',1900,324,'2024-01-17 15:17:04',0,NULL,NULL,NULL),(50878,'Ndole',370,270,'2024-01-18 06:42:46',0,NULL,NULL,NULL),(50879,'Ndole village',370,270,'2024-01-18 06:43:09',0,NULL,NULL,NULL),(50880,'Daniel',884,270,'2024-01-18 07:35:24',0,NULL,NULL,NULL),(50881,'Mchesi',1850,284,'2024-01-18 07:57:42',0,NULL,NULL,NULL),(50882,'Mphwaphwa',2073,284,'2024-01-18 08:00:50',0,NULL,NULL,NULL),(50883,'Muluma',530,270,'2024-01-18 11:34:18',0,NULL,NULL,NULL),(50884,'Katewe',191,94,'2024-01-18 12:59:50',0,NULL,NULL,NULL),(50885,'Nsundwe',2052,284,'2024-01-18 13:04:24',0,NULL,NULL,NULL),(50886,'Maluwa',2132,94,'2024-01-18 14:12:21',0,NULL,NULL,NULL),(50887,'Mchitanji',369,94,'2024-01-18 15:45:12',0,NULL,NULL,NULL),(50888,'Futhi',2046,270,'2024-01-19 10:35:13',0,NULL,NULL,NULL),(50889,'Mchenga',871,270,'2024-01-19 11:02:39',0,NULL,NULL,NULL),(50890,'Ng\'omba',572,94,'2024-01-19 11:27:22',0,NULL,NULL,NULL),(50891,'Mkutu',2050,270,'2024-01-19 12:04:04',0,NULL,NULL,NULL),(50892,'Nzewe',254,324,'2024-01-20 11:31:38',0,NULL,NULL,NULL),(50893,'Sapulayi',2642,324,'2024-01-22 07:44:04',0,NULL,NULL,NULL),(50894,'Chamahomwa',27,324,'2024-01-22 10:06:08',0,NULL,NULL,NULL),(50895,'Near cbo',140,324,'2024-01-22 10:06:36',0,NULL,NULL,NULL),(50896,'Njobvu',304,284,'2024-01-22 10:33:14',0,NULL,NULL,NULL),(50897,'Mputeni',1613,284,'2024-01-22 10:33:50',0,NULL,NULL,NULL),(50898,'Molele',745,435,'2024-01-22 10:36:59',0,NULL,NULL,NULL),(50899,'Domoka',787,592,'2024-01-22 10:44:57',0,NULL,NULL,NULL),(50900,'Tsegula',1761,179,'2024-01-22 13:35:51',0,NULL,NULL,NULL),(50901,'Kampula',327,179,'2024-01-22 15:39:19',0,NULL,NULL,NULL),(50902,'Aleveni',209,324,'2024-01-23 06:55:21',0,NULL,NULL,NULL),(50903,'Mwanga',441,592,'2024-01-23 11:28:48',0,NULL,NULL,NULL),(50904,'Kaburazi',202,365,'2024-01-23 11:35:14',0,NULL,NULL,NULL),(50905,'Chibwanamsamala',2598,94,'2024-01-23 11:51:28',0,NULL,NULL,NULL),(50906,'Nkuchila',2658,284,'2024-01-24 11:55:27',0,NULL,NULL,NULL),(50907,'Mtsinje',1850,284,'2024-01-24 11:59:55',0,NULL,NULL,NULL),(50908,'Balasi',316,585,'2024-01-24 12:44:50',0,NULL,NULL,NULL),(50909,'Balasa',601,271,'2024-01-24 13:30:11',0,NULL,NULL,NULL),(50910,'Dubai',2083,179,'2024-01-24 13:42:45',0,NULL,NULL,NULL),(50911,'Mkwatire',102,324,'2024-01-25 09:59:25',0,NULL,NULL,NULL),(50912,'Biwi',2499,324,'2024-01-25 10:00:05',0,NULL,NULL,NULL),(50913,'Pembeleka',2007,365,'2024-01-25 10:44:32',0,NULL,NULL,NULL),(50914,'Kwa ma 2 thousand',165,270,'2024-01-26 07:56:22',0,NULL,NULL,NULL),(50915,'Unknown',2659,458,'2024-01-26 10:34:33',0,NULL,NULL,NULL),(50916,'Kwakomula',2659,270,'2024-01-26 11:06:37',0,NULL,NULL,NULL),(50917,'Kaponda',688,179,'2024-01-26 14:43:48',0,NULL,NULL,NULL),(50918,'Ziphonje',935,270,'2024-01-27 09:14:15',0,NULL,NULL,NULL),(50919,'Nyambi',2660,270,'2024-01-27 10:16:11',0,NULL,NULL,NULL),(50920,'Sinkodi',177,324,'2024-01-29 07:51:11',0,NULL,NULL,NULL),(50921,'Katsukunya',429,324,'2024-01-29 08:10:10',0,NULL,NULL,NULL),(50922,'Akimu',1040,324,'2024-01-29 08:32:12',0,NULL,NULL,NULL),(50923,'Kampote',365,324,'2024-01-29 08:45:11',0,NULL,NULL,NULL),(50924,'Nazombe',2661,324,'2024-01-29 10:47:05',0,NULL,NULL,NULL),(50925,'Kachiwawa',1762,270,'2024-01-29 10:51:13',0,NULL,NULL,NULL),(50926,'Kachenga',787,526,'2024-01-29 13:54:43',0,NULL,NULL,NULL),(50927,'Chimbiya',2050,518,'2024-01-29 14:29:36',0,NULL,NULL,NULL),(50928,'Mwala oyera',197,324,'2024-01-30 09:18:00',0,NULL,NULL,NULL),(50929,'Gunira',119,270,'2024-01-30 09:49:40',0,NULL,NULL,NULL),(50930,'Katete',1598,526,'2024-01-30 11:18:34',0,NULL,NULL,NULL),(50931,'Chungu',1903,94,'2024-01-30 12:56:22',0,NULL,NULL,NULL),(50932,'Midland',1203,270,'2024-01-30 14:53:03',0,NULL,NULL,NULL),(50933,'M\'manga',217,94,'2024-01-30 14:56:59',0,NULL,NULL,NULL),(50934,'Kawanga',341,270,'2024-01-30 15:34:43',0,NULL,NULL,NULL),(50935,'Mundeyi',27,365,'2024-01-31 10:58:44',0,NULL,NULL,NULL),(50936,'Khache',629,324,'2024-01-31 12:29:06',0,NULL,NULL,NULL),(50937,'Kwatani',534,94,'2024-01-31 17:40:39',0,NULL,NULL,NULL),(50938,'Kapila',314,324,'2024-02-01 06:36:17',0,NULL,NULL,NULL),(50939,'Tomasi',2459,270,'2024-02-01 07:37:58',0,NULL,NULL,NULL),(50940,'Lameckmzovu',1732,270,'2024-02-01 08:02:22',0,NULL,NULL,NULL),(50941,'Gulumba',351,592,'2024-02-01 10:37:50',0,NULL,NULL,NULL),(50942,'Kamundi',1005,324,'2024-02-01 12:02:23',0,NULL,NULL,NULL),(50943,'Dyton village',929,270,'2024-02-01 14:00:02',0,NULL,NULL,NULL),(50944,'Maguza',39,270,'2024-02-02 09:10:19',0,NULL,NULL,NULL),(50945,'Mangwere',1530,270,'2024-02-02 10:04:57',0,NULL,NULL,NULL),(50946,'An\'gongo',2050,324,'2024-02-02 10:43:04',0,NULL,NULL,NULL),(50947,'Matewele',1793,324,'2024-02-02 10:55:59',0,NULL,NULL,NULL),(50948,'Kainja',1210,324,'2024-02-02 11:21:08',0,NULL,NULL,NULL),(50949,'Goke',2050,324,'2024-02-02 13:49:52',0,NULL,NULL,NULL),(50950,'Kanyemba',139,270,'2024-02-03 09:41:01',0,NULL,NULL,NULL),(50951,'Thom',314,270,'2024-02-03 10:18:23',0,NULL,NULL,NULL),(50952,'Safali',69,270,'2024-02-03 10:38:57',0,NULL,NULL,NULL),(50953,'Chamba',1580,270,'2024-02-03 11:16:08',0,NULL,NULL,NULL),(50954,'Kumayano',2050,324,'2024-02-05 07:44:14',0,NULL,NULL,NULL),(50955,'Chilambula',2050,324,'2024-02-05 07:56:39',0,NULL,NULL,NULL),(50956,'Matapa',1903,324,'2024-02-05 11:24:47',0,NULL,NULL,NULL),(50957,'Kachulu',110,271,'2024-02-05 13:04:52',0,NULL,NULL,NULL),(50958,'Tomasi',295,271,'2024-02-05 13:29:03',0,NULL,NULL,NULL),(50959,'Mitengo',2086,271,'2024-02-05 13:29:56',0,NULL,NULL,NULL),(50960,'Fazema',2099,94,'2024-02-05 14:02:14',0,NULL,NULL,NULL),(50961,'Kambiya',1799,271,'2024-02-05 14:02:53',0,NULL,NULL,NULL),(50962,'Liganga',104,271,'2024-02-05 14:32:30',0,NULL,NULL,NULL),(50963,'Mtokota',1255,365,'2024-02-06 09:53:30',0,NULL,NULL,NULL),(50964,'Chikapita',2598,365,'2024-02-06 10:39:28',0,NULL,NULL,NULL),(50965,'Unknown',1251,592,'2024-02-06 10:54:07',0,NULL,NULL,NULL),(50966,'Machansi',2306,324,'2024-02-06 12:53:28',0,NULL,NULL,NULL),(50967,'Mothera',2050,324,'2024-02-06 13:06:26',0,NULL,NULL,NULL),(50968,'Sungwi',2663,324,'2024-02-06 13:07:22',0,NULL,NULL,NULL),(50969,'Kahumbi',202,94,'2024-02-06 14:35:41',0,NULL,NULL,NULL),(50970,'Mataka',2050,179,'2024-02-06 15:25:36',0,NULL,NULL,NULL),(50971,'Chiseka',375,272,'2024-02-07 10:57:01',0,NULL,NULL,NULL),(50972,'Mgodi',224,435,'2024-02-07 11:36:20',0,NULL,NULL,NULL),(50973,'Kamunoli',2344,365,'2024-02-08 14:45:21',0,NULL,NULL,NULL),(50974,'Mwachikanga',4,365,'2024-02-08 14:47:59',0,NULL,NULL,NULL),(50975,'Hapalikusala',332,365,'2024-02-09 10:01:48',0,NULL,NULL,NULL),(50976,'Tomato makwakwa',46,94,'2024-02-09 14:38:29',0,NULL,NULL,NULL),(50977,'Kasimu',228,94,'2024-02-09 15:51:30',0,NULL,NULL,NULL),(50978,'Sande',198,571,'2024-02-12 10:35:25',0,NULL,NULL,NULL),(50979,'Mchacha',2664,94,'2024-02-12 10:57:22',0,NULL,NULL,NULL),(50980,'Unknown',2665,284,'2024-02-12 13:23:09',0,NULL,NULL,NULL),(50981,'Msimba',212,435,'2024-02-12 13:30:30',0,NULL,NULL,NULL),(50982,'Kajiya',812,324,'2024-02-13 09:01:04',0,NULL,NULL,NULL),(50983,'Chivungu',16,435,'2024-02-13 10:08:46',0,NULL,NULL,NULL),(50984,'Nkhalango',569,563,'2024-02-13 10:10:16',0,NULL,NULL,NULL),(50985,'Bondo',225,324,'2024-02-13 11:36:17',0,NULL,NULL,NULL),(50986,'Nkwani 2',447,284,'2024-02-13 12:30:15',0,NULL,NULL,NULL),(50987,'Chitseka',397,284,'2024-02-13 12:33:31',0,NULL,NULL,NULL),(50988,'Thonyiwa',396,365,'2024-02-13 12:55:16',0,NULL,NULL,NULL),(50989,'Mzuzu',2666,270,'2024-02-13 14:45:29',0,NULL,NULL,NULL),(50990,'Mvera',1762,583,'2024-02-14 10:01:50',0,NULL,NULL,NULL),(50991,'Ntandire',1866,270,'2024-02-14 11:44:52',0,NULL,NULL,NULL),(50992,'Kumbo',184,365,'2024-02-14 15:53:29',0,NULL,NULL,NULL),(50993,'Mambo',1895,179,'2024-02-15 07:46:27',0,NULL,NULL,NULL),(50994,'Chaguga',351,324,'2024-02-15 08:46:49',0,NULL,NULL,NULL),(50995,'Mangeni',1770,179,'2024-02-15 09:07:18',0,NULL,NULL,NULL),(50996,'Ngwata',569,572,'2024-02-15 09:09:22',0,NULL,NULL,NULL),(50997,'Wadi',341,585,'2024-02-15 10:22:19',0,NULL,NULL,NULL),(50998,'Matiya',341,324,'2024-02-15 11:17:57',0,NULL,NULL,NULL),(50999,'Nkolowiko',397,284,'2024-02-15 13:20:02',0,NULL,NULL,NULL),(51000,'Kaphiri',1062,572,'2024-02-16 11:17:24',0,NULL,NULL,NULL),(51001,'Mpambachulu',919,324,'2024-02-16 11:22:20',0,NULL,NULL,NULL),(51002,'Likoswe',1900,179,'2024-02-16 11:32:40',0,NULL,NULL,NULL),(51003,'Kawecha',180,324,'2024-02-16 11:32:51',0,NULL,NULL,NULL),(51004,'Area49',1062,572,'2024-02-16 12:37:35',0,NULL,NULL,NULL),(51005,'Mtima',1793,271,'2024-02-16 13:26:37',0,NULL,NULL,NULL),(51006,'Phaso',13,592,'2024-02-19 09:37:47',0,NULL,NULL,NULL),(51007,'Kaphazo',13,365,'2024-02-19 09:47:52',0,NULL,NULL,NULL),(51008,'Nachipi',1693,365,'2024-02-19 10:05:23',0,NULL,NULL,NULL),(51009,'Nachipi',1903,365,'2024-02-19 10:05:51',0,NULL,NULL,NULL),(51010,'Chilembwe',397,592,'2024-02-19 10:18:08',0,NULL,NULL,NULL),(51011,'Mizinga',212,365,'2024-02-19 11:46:52',0,NULL,NULL,NULL),(51012,'Ajuma',299,271,'2024-02-19 12:03:26',0,NULL,NULL,NULL),(51013,'Malindima',2050,271,'2024-02-19 12:19:33',0,NULL,NULL,NULL),(51014,'Koneko',378,270,'2024-02-19 12:46:49',0,NULL,NULL,NULL),(51015,'Machemba',1584,324,'2024-02-20 09:31:44',0,NULL,NULL,NULL),(51016,'Masinja',397,324,'2024-02-20 09:56:14',0,NULL,NULL,NULL),(51017,'Chiwoza',68,324,'2024-02-20 10:45:32',0,NULL,NULL,NULL),(51018,'Kaludzu',198,270,'2024-02-20 14:40:04',0,NULL,NULL,NULL),(51019,'Nankhwere',304,270,'2024-02-20 15:53:54',0,NULL,NULL,NULL),(51020,'Kwela',682,365,'2024-02-21 08:38:22',0,NULL,NULL,NULL),(51021,'Mwenelufita',2055,324,'2024-02-21 09:05:52',0,NULL,NULL,NULL),(51022,'Nankumba',219,324,'2024-02-21 09:20:08',0,NULL,NULL,NULL),(51023,'Chikumbuso',478,324,'2024-02-21 10:28:12',0,NULL,NULL,NULL),(51024,'Mnkhanje',252,324,'2024-02-21 11:19:25',0,NULL,NULL,NULL),(51025,'Mthukuso',332,270,'2024-02-21 13:12:04',0,NULL,NULL,NULL),(51026,'Kakhomba',80,270,'2024-02-21 17:34:30',0,NULL,NULL,NULL),(51027,'Chifenthe',2667,324,'2024-02-22 07:30:43',0,NULL,NULL,NULL),(51028,'Mbingwa',375,526,'2024-02-22 11:49:20',0,NULL,NULL,NULL),(51029,'Maluwa',300,270,'2024-02-22 12:39:40',0,NULL,NULL,NULL),(51030,'Kambuzi',2050,365,'2024-02-23 07:50:17',0,NULL,NULL,NULL),(51031,'Kandikila',264,365,'2024-02-23 08:05:48',0,NULL,NULL,NULL),(51032,'Gumbu',523,365,'2024-02-23 11:09:31',0,NULL,NULL,NULL),(51033,'Santhe',1932,324,'2024-02-23 11:32:28',0,NULL,NULL,NULL),(51034,'Mbedza',1818,324,'2024-02-23 12:19:23',0,NULL,NULL,NULL),(51035,'Mbedz',1306,270,'2024-02-23 13:29:01',0,NULL,NULL,NULL),(51036,'Mbedza',1306,270,'2024-02-23 13:29:09',0,NULL,NULL,NULL),(51037,'Somanje',80,270,'2024-02-23 13:52:09',0,NULL,NULL,NULL),(51038,'Nkundadzuwa',2050,324,'2024-02-24 09:33:01',0,NULL,NULL,NULL),(51039,'Ninga',113,94,'2024-02-26 09:04:43',0,NULL,NULL,NULL),(51040,'Masaula',1763,270,'2024-02-26 11:24:28',0,NULL,NULL,NULL),(51041,'Ngochera',814,270,'2024-02-26 11:36:30',0,NULL,NULL,NULL),(51042,'Mgola',397,270,'2024-02-26 12:02:50',0,NULL,NULL,NULL),(51043,'Area 46',2562,270,'2024-02-26 12:04:06',0,NULL,NULL,NULL),(51044,'Chimgonera',411,284,'2024-02-26 13:14:23',0,NULL,NULL,NULL),(51045,'Kachepa',772,284,'2024-02-26 13:18:27',0,NULL,NULL,NULL),(51046,'Kimile',2007,324,'2024-02-26 16:32:15',0,NULL,NULL,NULL),(51047,'Area 18 a',2454,270,'2024-02-27 07:55:50',0,NULL,NULL,NULL),(51048,'Rabson',378,270,'2024-02-27 08:07:53',0,NULL,NULL,NULL),(51049,'Masambabisi',2621,270,'2024-02-27 08:32:20',0,NULL,NULL,NULL),(51050,'Msutu nkhambule',39,270,'2024-02-27 09:49:30',0,NULL,NULL,NULL),(51051,'Mwezi',411,270,'2024-02-27 10:38:58',0,NULL,NULL,NULL),(51052,'Kaliko',392,94,'2024-02-27 10:53:31',0,NULL,NULL,NULL),(51053,'Chilambula',1032,270,'2024-02-27 11:40:25',0,NULL,NULL,NULL),(51054,'Nathambwe',373,270,'2024-02-28 07:02:50',0,NULL,NULL,NULL),(51055,'Chilunda',1038,435,'2024-02-28 11:10:09',0,NULL,NULL,NULL),(51056,'Isaa',234,94,'2024-02-29 07:42:59',0,NULL,NULL,NULL),(51057,'Chimkoka',113,270,'2024-02-29 08:14:56',0,NULL,NULL,NULL),(51058,'Fumbe',168,270,'2024-02-29 08:16:47',0,NULL,NULL,NULL),(51059,'Sector 9',2663,270,'2024-02-29 08:34:08',0,NULL,NULL,NULL),(51060,'Chimutu village',386,270,'2024-02-29 11:10:53',0,NULL,NULL,NULL),(51061,'Nakuwawa',1903,270,'2024-03-01 06:29:45',0,NULL,NULL,NULL),(51062,'Chiyani',397,270,'2024-03-01 08:46:34',0,NULL,NULL,NULL),(51063,'Kuntenjera',2668,270,'2024-03-01 09:30:22',0,NULL,NULL,NULL),(51064,'Mbununu',1932,270,'2024-03-01 10:49:23',0,NULL,NULL,NULL),(51065,'Ngondo',2623,270,'2024-03-01 11:13:21',0,NULL,NULL,NULL),(51066,'George gwaza',814,179,'2024-03-05 08:23:22',0,NULL,NULL,NULL),(51067,'Chamila',1854,365,'2024-03-05 09:14:10',0,NULL,NULL,NULL),(51068,'Mkulera',629,270,'2024-03-05 11:03:04',0,NULL,NULL,NULL),(51069,'Khwayi',251,179,'2024-03-05 11:38:50',0,NULL,NULL,NULL),(51070,'Bimphi',429,329,'2024-03-05 11:41:50',0,NULL,NULL,NULL),(51071,'Area 38b',2631,284,'2024-03-05 14:22:25',0,NULL,NULL,NULL),(51072,'Chipala',1691,329,'2024-03-05 14:42:47',0,NULL,NULL,NULL),(51073,'Mwanamanga',2132,284,'2024-03-05 14:45:22',0,NULL,NULL,NULL),(51074,'Mumba',719,284,'2024-03-05 14:57:03',0,NULL,NULL,NULL),(51075,'Unknown',569,284,'2024-03-05 14:57:55',0,NULL,NULL,NULL),(51076,'Kalinde',618,179,'2024-03-06 07:12:09',0,NULL,NULL,NULL),(51077,'Delifu',186,179,'2024-03-06 08:36:08',0,NULL,NULL,NULL),(51078,'Liyaya',116,179,'2024-03-06 08:47:57',0,NULL,NULL,NULL),(51079,'Magalamula',2166,179,'2024-03-06 10:44:30',0,NULL,NULL,NULL),(51080,'Alonda',482,365,'2024-03-06 11:07:42',0,NULL,NULL,NULL),(51081,'Chatikomera',106,179,'2024-03-06 11:56:49',0,NULL,NULL,NULL),(51082,'Malembo',830,284,'2024-03-06 12:24:31',0,NULL,NULL,NULL),(51083,'Land',2621,284,'2024-03-06 12:48:48',0,NULL,NULL,NULL),(51084,'Unknown',189,284,'2024-03-06 12:51:34',0,NULL,NULL,NULL),(51085,'Davis',1854,94,'2024-03-06 14:47:12',0,NULL,NULL,NULL),(51086,'Kayolamwazisi',27,270,'2024-03-06 15:12:43',0,NULL,NULL,NULL),(51087,'Changala',370,270,'2024-03-06 15:25:06',0,NULL,NULL,NULL),(51088,'Mpondadzuwa',2050,179,'2024-03-07 06:51:01',0,NULL,NULL,NULL),(51089,'Khooke',2050,365,'2024-03-07 08:14:46',0,NULL,NULL,NULL),(51090,'Benito',2306,284,'2024-03-07 12:16:07',0,NULL,NULL,NULL),(51091,'Chinamwali',2107,284,'2024-03-07 12:17:50',0,NULL,NULL,NULL),(51092,'Pamtengo',357,284,'2024-03-07 12:29:26',0,NULL,NULL,NULL),(51093,'Dyeratu',333,324,'2024-03-07 12:52:42',0,NULL,NULL,NULL),(51094,'Sodza',314,324,'2024-03-07 13:15:57',0,NULL,NULL,NULL),(51095,'Choma',1060,324,'2024-03-07 13:24:30',0,NULL,NULL,NULL),(51096,'Chilanga',1941,179,'2024-03-08 06:42:20',0,NULL,NULL,NULL),(51097,'Nsambachikho',356,284,'2024-03-08 09:19:20',0,NULL,NULL,NULL),(51098,'Buwoza',191,179,'2024-03-08 10:19:06',0,NULL,NULL,NULL),(51099,'Chamba',1046,324,'2024-03-08 13:54:13',0,NULL,NULL,NULL),(51100,'Chindumozi',27,324,'2024-03-08 15:47:18',0,NULL,NULL,NULL),(51101,'Kaphiri',2322,324,'2024-03-08 15:51:27',0,NULL,NULL,NULL),(51102,'Mphwaila',1006,324,'2024-03-08 17:19:42',0,NULL,NULL,NULL),(51103,'Bangwe',1900,365,'2024-03-09 13:11:12',0,NULL,NULL,NULL),(51104,'Masasa',2338,270,'2024-03-09 13:35:43',0,NULL,NULL,NULL),(51105,'Deya',2669,270,'2024-03-09 13:37:33',0,NULL,NULL,NULL),(51106,'Chibwe',1556,270,'2024-03-09 14:29:45',0,NULL,NULL,NULL),(51107,'Sibwimba',118,324,'2024-03-11 07:52:49',0,NULL,NULL,NULL),(51108,'Matepe',478,585,'2024-03-11 11:21:19',0,NULL,NULL,NULL),(51109,'Mbeba',198,365,'2024-03-11 17:14:25',0,NULL,NULL,NULL),(51110,'Msokoneza',2132,324,'2024-03-12 10:22:54',0,NULL,NULL,NULL),(51111,'Chintolo',118,324,'2024-03-12 10:57:37',0,NULL,NULL,NULL),(51112,'Kachepasonga',113,435,'2024-03-12 12:02:20',0,NULL,NULL,NULL),(51113,'Sokelele',113,324,'2024-03-13 07:56:23',0,NULL,NULL,NULL),(51114,'Mzochi',5,324,'2024-03-13 08:06:21',0,NULL,NULL,NULL),(51115,'Chapusa',2391,324,'2024-03-13 08:35:09',0,NULL,NULL,NULL),(51116,'Misomali',787,572,'2024-03-13 09:31:29',0,NULL,NULL,NULL),(51117,'Mitawa',232,324,'2024-03-13 12:03:51',0,NULL,NULL,NULL),(51118,'Kabudza',193,365,'2024-03-13 12:41:23',0,NULL,NULL,NULL),(51119,'Mbendela',411,365,'2024-03-13 13:25:47',0,NULL,NULL,NULL),(51120,'Kalumba',427,365,'2024-03-13 13:26:04',0,NULL,NULL,NULL),(51121,'Benga11',2084,324,'2024-03-14 08:45:19',0,NULL,NULL,NULL),(51122,'Kombe',301,270,'2024-03-14 10:32:18',0,NULL,NULL,NULL),(51123,'Chipoka',1376,324,'2024-03-14 10:39:02',0,NULL,NULL,NULL),(51124,'Mgwaya',165,324,'2024-03-14 10:56:22',0,NULL,NULL,NULL),(51125,'Dailesi',2598,167,'2024-03-14 10:56:54',0,NULL,NULL,NULL),(51126,'Majiga',505,167,'2024-03-14 11:13:59',0,NULL,NULL,NULL),(51127,'Shire',2083,167,'2024-03-14 11:14:45',0,NULL,NULL,NULL),(51128,'Kuba',341,324,'2024-03-14 11:30:47',0,NULL,NULL,NULL),(51129,'Mwase',911,324,'2024-03-14 11:57:26',0,NULL,NULL,NULL),(51130,'Chakomba',100,329,'2024-03-14 16:23:09',0,NULL,NULL,NULL),(51131,'Mandele village',1903,270,'2024-03-15 08:20:07',0,NULL,NULL,NULL),(51132,'Chawala',436,270,'2024-03-15 09:38:03',0,NULL,NULL,NULL),(51133,'Chitedze',234,365,'2024-03-15 13:51:55',0,NULL,NULL,NULL),(51134,'Kadawuma',1803,554,'2024-03-15 14:27:03',0,NULL,NULL,NULL),(51135,'Sitola',227,365,'2024-03-15 16:16:14',0,NULL,NULL,NULL),(51136,'Area 51',2563,365,'2024-03-15 16:16:55',0,NULL,NULL,NULL),(51137,'Ngomani',1703,270,'2024-03-16 09:55:31',0,NULL,NULL,NULL),(51138,'Area b',2454,485,'2024-03-16 13:06:22',0,NULL,NULL,NULL),(51139,'Lilongwe',1377,324,'2024-03-16 13:19:03',0,NULL,NULL,NULL),(51140,'Sitifano',370,179,'2024-03-18 08:16:15',0,NULL,NULL,NULL),(51141,'Chipula',2670,365,'2024-03-18 11:10:54',0,NULL,NULL,NULL),(51142,'Nkhwerepa',250,179,'2024-03-18 11:31:25',0,NULL,NULL,NULL),(51143,'Kamanyawuli',40,270,'2024-03-18 12:54:44',0,NULL,NULL,NULL),(51144,'Iiwoko',260,179,'2024-03-18 13:54:35',0,NULL,NULL,NULL),(51145,'Njonja',1873,284,'2024-03-18 14:23:55',0,NULL,NULL,NULL),(51146,'Ng\'ozo',424,284,'2024-03-18 14:25:01',0,NULL,NULL,NULL),(51147,'Unknown',2073,284,'2024-03-18 14:28:26',0,NULL,NULL,NULL),(51148,'Magombo',9,365,'2024-03-19 07:26:05',0,NULL,NULL,NULL),(51149,'Kalanguluka',119,179,'2024-03-19 08:52:41',0,NULL,NULL,NULL),(51150,'Galima',1596,179,'2024-03-19 11:28:03',0,NULL,NULL,NULL),(51151,'Nkhongo',1037,270,'2024-03-19 14:45:21',0,NULL,NULL,NULL),(51152,'Naweta',193,324,'2024-03-20 08:21:12',0,NULL,NULL,NULL),(51153,'Chitenga',260,365,'2024-03-20 08:57:21',0,NULL,NULL,NULL),(51154,'Mwaiyatsa',2671,365,'2024-03-20 10:31:27',0,NULL,NULL,NULL),(51155,'Madziaphepo',186,365,'2024-03-20 11:17:57',0,NULL,NULL,NULL),(51156,'Msana',786,270,'2024-03-20 13:25:17',0,NULL,NULL,NULL),(51157,'Chikungu',1932,270,'2024-03-20 14:31:05',0,NULL,NULL,NULL),(51158,'Chiramwera',314,365,'2024-03-21 07:46:28',0,NULL,NULL,NULL),(51159,'Mzikuola',1594,365,'2024-03-21 08:58:35',0,NULL,NULL,NULL),(51160,'Wisiki',1900,365,'2024-03-21 10:36:03',0,NULL,NULL,NULL),(51161,'Zuze',198,365,'2024-03-22 09:17:49',0,NULL,NULL,NULL),(51162,'Ngombrngo',591,324,'2024-03-22 10:41:54',0,NULL,NULL,NULL),(51163,'Ngombengo',391,324,'2024-03-22 10:42:23',0,NULL,NULL,NULL),(51164,'Machokero',404,365,'2024-03-22 12:10:36',0,NULL,NULL,NULL),(51165,'Mtandile',145,329,'2024-03-23 07:53:18',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `village` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visits_by_proffessionals`
--

DROP TABLE IF EXISTS `visits_by_proffessionals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visits_by_proffessionals` (
  `id` bigint unsigned NOT NULL,
  `prisoners_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visits_by_proffessionals`
--

LOCK TABLES `visits_by_proffessionals` WRITE;
/*!40000 ALTER TABLE `visits_by_proffessionals` DISABLE KEYS */;
/*!40000 ALTER TABLE `visits_by_proffessionals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vitals`
--

DROP TABLE IF EXISTS `vitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vitals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `weight` double(10,2) DEFAULT NULL,
  `height` int DEFAULT NULL,
  `bmi_muac` double(10,2) DEFAULT NULL,
  `temperature` double(10,2) DEFAULT NULL,
  `systolic` int DEFAULT NULL,
  `diastolic` int DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_by` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voided` int NOT NULL DEFAULT '0',
  `voided_at` datetime DEFAULT NULL,
  `voided_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vitals`
--

LOCK TABLES `vitals` WRITE;
/*!40000 ALTER TABLE `vitals` DISABLE KEYS */;
INSERT INTO `vitals` VALUES (1,'61','Entry','2024-04-08',56.00,156,23.01,39.00,120,80,'                          ',0,'2024-04-08 11:16:18',NULL,'2024-04-08 11:16:18',1,'2024-05-02 00:00:00',2),(3,'54','Entry','2024-03-15',56.00,134,31.19,34.00,118,78,'                          ',0,'2024-04-15 09:40:53',NULL,'2024-04-15 09:40:53',0,NULL,NULL),(4,'54','Entry','2024-04-15',57.00,134,31.74,38.00,116,78,'                          ',0,'2024-04-15 09:42:04',NULL,'2024-04-15 09:42:04',0,NULL,NULL),(5,'20','Entry','2024-04-18',57.00,156,23.42,37.00,123,78,'                          ',0,'2024-04-18 11:58:56',NULL,'2024-04-18 11:58:56',1,'2024-05-24 00:00:00',2),(6,'20','Entry','2024-03-18',67.00,145,31.87,40.00,112,77,'                          ',0,'2024-04-18 12:01:32',NULL,'2024-04-18 12:01:32',1,'2024-05-24 00:00:00',2),(7,'63','Entry','2024-04-23',55.00,256,8.39,39.00,117,78,'Edited',0,'2024-04-23 12:00:48',2,'2024-05-23 09:47:25',0,NULL,NULL),(8,'62','Entry','2024-04-23',56.00,156,23.01,39.00,120,87,'Notes',0,'2024-04-23 15:14:02',NULL,'2024-04-23 15:14:02',1,'2024-05-03 00:00:00',2),(9,'64','Entry','2024-03-26',59.00,156,24.24,39.00,120,80,'                          ',0,'2024-04-26 10:22:25',NULL,'2024-04-26 10:22:25',0,NULL,NULL),(10,'20','Entry','2024-01-01',58.00,167,20.80,38.00,120,78,'            ',0,'2024-04-26 11:53:19',NULL,'2024-04-26 11:53:19',1,'2024-05-24 00:00:00',2),(11,'61','Entry','2024-05-02',78.00,156,32.05,38.00,118,78,'            ',2,'2024-05-02 11:39:40',NULL,'2024-05-02 11:39:40',1,'2024-05-02 00:00:00',2),(12,'61','Entry','2024-05-02',79.00,156,32.46,38.00,113,78,'            ',2,'2024-05-02 11:57:10',NULL,'2024-05-02 11:57:10',1,'2024-05-02 00:00:00',2),(13,'61','Entry','2024-05-02',69.00,156,28.35,38.00,118,78,'            ',2,'2024-05-02 12:30:28',2,'2024-05-02 12:30:28',0,NULL,NULL),(14,'62','Entry','2024-05-02',76.00,160,29.69,38.00,117,89,'            ',2,'2024-05-02 13:18:47',2,'2024-05-02 13:18:47',1,'2024-05-03 00:00:00',2),(15,'62','Entry','2024-05-03',56.00,148,25.57,37.00,112,59,'            ',2,'2024-05-03 14:32:02',2,'2024-05-03 14:45:58',0,NULL,NULL),(16,'62','Entry','2024-04-03',57.00,158,22.83,38.00,119,78,'            ',2,'2024-05-03 14:41:01',2,'2024-05-03 14:45:14',0,NULL,NULL),(17,'65','Entry','2023-09-30',51.00,150,22.67,37.50,115,80,'            ',5,'2024-05-16 10:49:40',NULL,'2024-05-16 10:49:40',0,NULL,NULL),(18,'20','Entry','2024-05-24',78.00,167,27.97,NULL,NULL,NULL,'            ',2,'2024-05-24 09:45:37',NULL,'2024-05-24 09:45:37',1,'2024-05-24 00:00:00',2),(19,'20','Entry','2024-05-24',78.00,167,27.97,45.00,NULL,NULL,NULL,2,'2024-05-24 09:50:03',NULL,'2024-05-24 09:50:03',1,'2024-05-24 00:00:00',2),(20,'20','Entry','2024-05-24',67.00,167,24.02,34.00,NULL,NULL,'            ',2,'2024-05-24 09:55:58',NULL,'2024-05-24 09:55:58',1,'2024-05-24 00:00:00',2),(21,'20','Entry','2024-05-24',67.00,178,21.15,34.00,NULL,NULL,'            ',2,'2024-05-24 09:56:40',NULL,'2024-05-24 09:56:40',1,'2024-05-24 00:00:00',2),(22,'38','Stay','2024-06-04',56.00,NULL,NULL,NULL,NULL,NULL,'            ',2,'2024-06-04 11:21:57',NULL,'2024-06-04 11:21:57',0,NULL,NULL),(23,'69','Entry','2024-04-13',66.00,174,21.80,NULL,NULL,NULL,'            ',5,'2024-06-06 09:16:11',NULL,'2024-06-06 09:16:11',0,NULL,NULL),(24,'69','Stay','2023-07-25',64.00,NULL,NULL,NULL,120,82,NULL,5,'2024-06-06 09:32:21',NULL,'2024-06-06 09:32:21',0,NULL,NULL),(25,'70','Entry','2024-06-14',56.00,156,23.01,37.00,110,90,'            ',2,'2024-06-14 14:17:50',2,'2024-06-14 14:18:23',0,NULL,NULL);
/*!40000 ALTER TABLE `vitals` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-20 12:06:11