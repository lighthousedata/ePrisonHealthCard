-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 07:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2021_primis_2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `head_quarters_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `fulname` varchar(150) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appeal_statuses`
--

CREATE TABLE `appeal_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) NOT NULL,
  `case_id` int(11) NOT NULL,
  `appeal_date` date NOT NULL,
  `appeal_against` varchar(120) NOT NULL,
  `general_remarks` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `art_history_at_entry`
--

CREATE TABLE `art_history_at_entry` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `HIV_status` varchar(50) NOT NULL,
  `on_ART` varchar(10) DEFAULT NULL,
  `current_ART_ID` varchar(50) DEFAULT NULL,
  `current_Regimen` varchar(50) DEFAULT NULL,
  `new_ART_ID` varchar(50) DEFAULT NULL,
  `new_Regimen` varchar(50) DEFAULT NULL,
  `DM` varchar(10) NOT NULL,
  `Hx_of_TB` varchar(10) NOT NULL,
  `Hx_of_STI` varchar(10) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `art_service`
--

CREATE TABLE `art_service` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `ART_Number` varchar(100) NOT NULL,
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint(20) UNSIGNED NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_values` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_body_checkups`
--

CREATE TABLE `basic_body_checkups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `service_date` datetime NOT NULL,
  `temperature_readings` double(10,2) NOT NULL,
  `systolic` int(11) NOT NULL,
  `dystolic` int(11) NOT NULL,
  `kg` double DEFAULT NULL,
  `bmi_muac` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `remarks` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batchings`
--

CREATE TABLE `batchings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `bag_number` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `belongings_and_personal__effects`
--

CREATE TABLE `belongings_and_personal__effects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `property_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `property_description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_presure`
--

CREATE TABLE `blood_presure` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `bdate` datetime NOT NULL,
  `blood_presure` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_lab_test`
--

CREATE TABLE `book_lab_test` (
  `id` int(11) NOT NULL,
  `lab_test_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `test_type` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Not Done',
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `service_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(111) NOT NULL,
  `details` varchar(333) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `characteristics`
--

CREATE TABLE `characteristics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `skin_color` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `head_abnormality_in_size_or_shape` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `eye_color` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `perforation` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `sight_defect` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `ear_defect` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `ear_perforation` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tooth_disorder` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `circumcision` varchar(255) CHARACTER SET utf8mb4 DEFAULT 'N/A',
  `hernia` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tatoo` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `marks_scars` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `others` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clinical_referral`
--

CREATE TABLE `clinical_referral` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `clinical_referral` varchar(50) NOT NULL,
  `hospital_name` varchar(150) NOT NULL,
  `outcome` varchar(50) NOT NULL,
  `app_date` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinical_services`
--

CREATE TABLE `clinical_services` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `cdate` date NOT NULL,
  `nature_of_request` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `action_taken` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `covid19`
--

CREATE TABLE `covid19` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `covid19_screening` varchar(50) NOT NULL,
  `type_of_test` varchar(50) NOT NULL,
  `covid19_test` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `covid19_test_type`
--

CREATE TABLE `covid19_test_type` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `death_and_causes`
--

CREATE TABLE `death_and_causes` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `causes` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `death_cause`
--

CREATE TABLE `death_cause` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `user_id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin` int(10) NOT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discharge_certificates`
--

CREATE TABLE `discharge_certificates` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `discharged_date` date NOT NULL,
  `sentence` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `prepared_by` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `approved_by` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `reason_for_discharge` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `code_number` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `critical_amount` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drug_dispensory`
--

CREATE TABLE `drug_dispensory` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dispensed_quantity` int(11) NOT NULL,
  `dispensed_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `action` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `edate` date NOT NULL,
  `money_in` double NOT NULL,
  `spent` double NOT NULL,
  `descr` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
  `employee_salary` double NOT NULL COMMENT 'employee salary',
  `employee_age` int(11) NOT NULL COMMENT 'employee age'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `name` varchar(255) NOT NULL COMMENT 'Employee Name',
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(16) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `salary` float(10,2) NOT NULL COMMENT 'employee salary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

-- --------------------------------------------------------

--
-- Table structure for table `external_contacts`
--

CREATE TABLE `external_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `edate` date NOT NULL,
  `letter_in_or_out` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone_in_out` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Adress` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `stations_id` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `regions_id` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `prisoners_no` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_remarks`
--

CREATE TABLE `general_remarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `gdate` date NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_quarters`
--

CREATE TABLE `head_quarters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `head_quarters`
--

INSERT INTO `head_quarters` (`id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'headquarters', 'Zomba', '2021-05-22 17:01:23', '2021-05-22 17:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `action` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `ldate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hiv_test`
--

CREATE TABLE `hiv_test` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `eligible_for_test` varchar(10) NOT NULL,
  `type_of_test` varchar(50) NOT NULL,
  `HIV_test` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hiv_test_type`
--

CREATE TABLE `hiv_test_type` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalisation_and_transfers`
--

CREATE TABLE `hospitalisation_and_transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `referral_date` date NOT NULL,
  `hospital` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_name`
--

CREATE TABLE `hospital_name` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `information_provisions`
--

CREATE TABLE `information_provisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `idate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_grievances_requests`
--

CREATE TABLE `inspection_grievances_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `idate` date NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `report_to` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `recommendation` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `follow_up` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventeries`
--

CREATE TABLE `inventeries` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `code_number` varchar(222) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE `lab_tests` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `screening` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Not Done',
  `test_type` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Not Done',
  `results` varchar(50) NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `service_date` date NOT NULL,
  `treatment` int(11) NOT NULL DEFAULT 0 COMMENT '1 = Treatment, 2 = Completed Treatment',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_type`
--

CREATE TABLE `lab_test_type` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malaria`
--

CREATE TABLE `malaria` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `testing` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Not Done',
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_screenings`
--

CREATE TABLE `medical_screenings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `visible_injuries` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `prior_ill_treatment` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `mental_condition` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `general_physique` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `brief_desc` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_treatments`
--

CREATE TABLE `medical_treatments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `treatment` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_regimen`
--

CREATE TABLE `new_regimen` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `regimen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offences`
--

CREATE TABLE `offences` (
  `id` int(11) NOT NULL,
  `prisoner_case_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `case_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `sentence` double NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outpatient_department`
--

CREATE TABLE `outpatient_department` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(50) NOT NULL,
  `patient_narration` text NOT NULL,
  `diagnosis_action` varchar(100) NOT NULL,
  `service_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `call` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(255) NOT NULL,
  `diagnosed_of` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `service_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pre_hts_survey`
--

CREATE TABLE `pre_hts_survey` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `tested_for_hiv` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `diagnosed_with_hiv` varchar(50) NOT NULL,
  `documentation_available` varchar(50) NOT NULL,
  `on_ART` varchar(11) NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Gone for HIV Test',
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `stations_id` bigint(20) UNSIGNED NOT NULL,
  `regions_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
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
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prisoners`
--

INSERT INTO `prisoners` (`id`, `prisoners_no`, `stations_id`, `regions_id`, `fname`, `lname`, `alias`, `gender`, `dob`, `cell`, `block`, `home_location`, `chief`, `district`, `village`, `father_name`, `mother_name`, `nationality`, `national_id`, `passport_no`, `driving_license_id`, `education_level`, `profession`, `past_occupation`, `religion`, `denomination`, `rcno`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HQ/2022/0001', 32, 5, 'Mbilinya', 'Kamchacha', 'Bengo', 'Male', '1994-02-16', 'CL-1234', 'BL-02B', 'Vundula', 'Katutula', 'Mzimba', 'Kamwaza', 'Bazuka Beleya', 'Nangozo Beleya', 'Malawian', 'MW-MNPCENC34XN', 'MW-PSS-1234', 'MW-DR-1234', 'Diploma', 'Business', 'Kabaza', 'Christianity', 'CCAP', 'MW-RC-1234', 1, '2022-02-01 01:08:30', '2022-02-25 01:08:30'),
(2, 'HQ/2022/0002', 32, 5, 'Mbenjere', 'Bulukutu', 'Mwamwaya', 'Male', '1980-05-01', 'CL-65', 'BL-8767', 'Mwasikanda', 'Kyungu', 'Karonga', 'Mwamalema', 'Bulukutu', 'Nyambenjere', 'Malawian', 'MW-OHOHWDOUW', 'PSS-MW-23', 'DR-223', 'Secondary Education', 'Student', 'Student', 'Islam', 'Mosque', 'RC-8uU', 1, '2022-01-25 05:05:19', '2022-02-25 05:05:19'),
(3, 'HQ/2022/0003', 32, 5, 'Baluti', 'Mwakimbwala', 'Chenje', 'Female', '2000-10-01', 'Cl-89', 'B-87', 'Chemusa', 'Mbelewe', 'Blantyre', 'Kachindamoto', 'Mbunduliza', 'Nyawuyu', 'Malawian', 'N-6734OIGLIYLDIY', 'PASS-U8', 'DR-7667', 'Short-cycle Tertiary Education', 'PRO', 'Business', 'Atheist', 'PHA', 'RC-JH8', 2, '2022-02-10 05:23:52', '2022-02-25 05:23:52'),
(4, 'HQ/2022/0004', 32, 5, 'Martha', 'Lodi', '', 'Female', '1995-01-12', '5', 'A', 'Lunzu', 'Kapeni', 'Blantyre', 'Lunzu', '', '', 'Malawian', '', '', '', NULL, '', '', 'Christianity', '', '', 1, '2022-02-25 05:50:06', '2022-02-25 05:50:06'),
(5, 'HQ/2022/0005', 32, 5, 'Saul', 'Chirwa', '', 'Male', '1996-04-15', '', '', 'Senzani', 'Lundu', 'Blantyre', 'Senzani', '', '', 'Malawian', '', '', '', NULL, '', '', 'Islam', '', '', 2, '2022-02-25 05:52:12', '2022-02-25 05:52:12'),
(6, 'HQ/2022/0006', 32, 5, 'Goerge', 'George', '', 'Male', '1980-01-01', 'NA', '3R', 'NA', 'NA', 'Balaka', 'NA', 'NA', 'NA', 'Malawian', 'NA', 'NA', 'NA', 'Primary Education', 'NA', 'NA', 'N/A', 'NA', 'NA', 2, '2022-02-25 06:19:09', '2022-02-25 06:19:09'),
(9, 'HQ/2022/0007', 32, 5, 'Mwayi', 'Mwayi', '', 'Male', '1981-01-01', '5', '3R', 'NA', 'NA', 'Blantyre', 'NA', 'NA', 'NA', 'Malawian', 'NA', 'NA', 'NA', 'Primary Education', 'NA', 'NA', 'N/A', 'NA', 'NA', 2, '2022-02-25 06:20:38', '2022-02-25 06:20:38'),
(11, 'HQ/2022/0008', 32, 5, 'James', 'James', '', 'Male', '1982-01-31', '', '2', 'Lilongwe', 'NA', 'Blantyre', 'Nanthenge', '', '', 'Malawian', 'NA', '', '', 'Diploma', 'NA', 'NA', 'N/A', 'NA', '', 1, '2022-02-25 06:22:58', '2022-02-25 06:22:58'),
(13, 'HQ/2022/0009', 32, 5, 'James', 'James', '', 'Male', '2000-01-01', '7', '2', 'Lilongwe', 'NA', 'Blantyre', 'Nanthenge', '', 'NA', 'Malawian', 'NA', 'NA', 'NA', 'Diploma', 'NA', 'NA', 'N/A', 'NA', 'NA', 1, '2022-02-25 06:24:15', '2022-02-25 06:24:15'),
(15, 'HQ/2022/0010', 32, 5, 'James ', 'Njala', 'Jemo', 'Male', '2023-04-13', '', '', 'Mzimba', 'Manzo', 'Chiradzulu', 'Mzima street', 'Noses', 'Martha', 'Beninese', '00000001', '', '', 'Secondary Education', 'Farmer', '', 'Atheist', 'Chanco', '', 1, '2022-02-25 06:25:09', '2022-02-25 06:25:09'),
(16, 'HQ/2022/0011', 32, 5, 'Test', 'Prisoner', 'Test', 'Male', '1997-06-10', '', '', 'Area 25', 'Chimutu', 'Blantyre', 'Area 25', '', '', 'Malawian', '', '', '', 'Primary Education', '', '', 'Christianity', '', '', 2, '2022-02-25 06:27:37', '2022-02-25 06:27:37'),
(17, 'HQ/2022/0012', 32, 5, 'Test', 'Convict', 'Convict', 'Male', '1993-05-10', '', '', 'Area 25', 'Chimutu', 'Chiradzulu', 'Area 25', '', '', 'Angolan', '', '', '', 'Secondary Education', '', '', 'Christianity', '', '', 1, '2022-02-25 06:28:51', '2022-02-25 06:28:51'),
(18, 'HQ/2022/0013', 32, 5, 'Mark', 'Logan', '', 'Male', '1996-04-22', '', '', 'Blantyre', 'Blantyre', 'Blantyre', 'Sunny Side', '', '', 'Malawian', '', '', '', NULL, '', '', 'Christianity', '', '', 1, '2022-02-25 06:31:37', '2022-02-25 06:31:37'),
(19, 'HQ/2022/0014', 32, 5, 'Richard', 'Luke', 'Testing', 'Male', '2004-01-01', '5', 'HARD LABOUR', 'Karonga', 'Karonga', 'Mzimba', 'Karonga', 'Moses', 'Mercy', 'Angolan', 'VBQ2022', 'AN20225', 'NA', 'Short-cycle Tertiary Education', 'Mechanic', 'Merchanic', 'Atheist', 'NA', 'NA', 1, '2022-02-28 13:20:33', '2022-02-28 13:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_cases`
--

CREATE TABLE `prisoner_cases` (
  `id` int(11) NOT NULL,
  `case_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `prisoners_no` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `admission_date` date NOT NULL,
  `commital_date` date NOT NULL,
  `security_risk` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `court` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `conviction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentence_confirmation` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `scdate` date DEFAULT NULL,
  `scndate` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_childrens`
--

CREATE TABLE `prisoner_childrens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `near_home` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_incidents`
--

CREATE TABLE `prisoner_incidents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `udate` date NOT NULL,
  `incident` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `utime` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `investigating_body` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `recommendation` text CHARACTER SET utf8mb4 NOT NULL,
  `follow_up` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prison_issuances`
--

CREATE TABLE `prison_issuances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `quantity_and_description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date_issued` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_visits`
--

CREATE TABLE `professional_visits` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `vdate` date NOT NULL,
  `consular_officer` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `legal_practitioner` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `private_medical_doctor` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `special_service_provider` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotions_and_reductions`
--

CREATE TABLE `promotions_and_reductions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_department`
--

CREATE TABLE `referral_department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `referral_date` date NOT NULL,
  `send_to` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `feedback` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Northern Region Office', 'Mzuzu', '2021-05-22 21:01:23', '2021-05-22 21:01:23'),
(2, 'Central Region Office', 'Lilongwe', '2021-05-22 21:01:23', '2021-05-22 21:01:23'),
(3, 'Eastern Region Office', 'Zomba', '2021-05-22 21:01:23', '2021-05-22 21:01:23'),
(4, 'Southern Region Office', 'Blantyre', '2021-05-22 21:01:23', '2021-05-22 21:01:23'),
(5, 'Head Quarters', 'Zomba', '2021-07-12 20:26:26', '2021-07-12 20:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitation`
--

CREATE TABLE `rehabilitation` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `special_needs` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `rehabilitation_needs` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `education` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `vocational_training_skills_development_activity` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `psycho_social_support` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `purposeful_work_for_reintegration` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `type_of_work` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `rdate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remandees`
--

CREATE TABLE `remandees` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `stations_id` bigint(20) UNSIGNED NOT NULL,
  `regions_id` bigint(20) UNSIGNED NOT NULL,
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
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `risk_assessments`
--

CREATE TABLE `risk_assessments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_convictions` int(11) NOT NULL,
  `on_admission` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `6_months` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1year` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `4years` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7years` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanctions`
--

CREATE TABLE `sanctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `odate` date NOT NULL,
  `offence` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `sanction_imposed` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `by_whom` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `awarded_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `oc_remark` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `oc_remark_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `item` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spounces`
--

CREATE TABLE `spounces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stage_leaders`
--

CREATE TABLE `stage_leaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regions_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `code` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `regions_id`, `name`, `location`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chitipa Prison', 'Chitipa', 'CP', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(2, 1, 'Karonga Prison', 'Kalonga', 'KA', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(3, 1, 'Rumphi Prison', 'Rumphi', 'RU', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(4, 1, 'Mzuzu Central Prison', 'Mzuzu', 'MZU', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(5, 1, 'Nkhatabay Prison', 'Nkhatabay', 'NB', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(6, 1, 'Mzimba Prison', 'Mzimba', 'MZ', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(7, 2, 'Kasungu Prison', 'Kasungu', 'KU', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(8, 2, 'Nkhotakota Prison', 'Nkhotakota', 'KK', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(9, 2, 'Byanzi Prison', 'Dowa', 'BYA', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(10, 2, 'Kachere Prison', 'Lilongwe', 'KC', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(11, 2, 'Lilongwe Central Prison', 'Lilongwe', 'LL', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(12, 2, 'Dedza Prison', 'Dedza', 'DZ', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(13, 3, 'Ntcheu Prison', 'Ntchewu', 'NU', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(14, 3, 'Balaka Prison', 'Balaka', 'BLK', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(15, 3, 'Mangochi Prison', 'Mangochi', 'MH', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(16, 3, 'Domasi Prison', 'Domasi', 'DO', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(17, 3, 'Mpyupsyu  Prison', 'Zomba', 'MPY', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(18, 3, 'Mikuyu 1 Prison', 'Zomba', 'MKY1', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(19, 3, 'Mikuyu 2 Prison', 'Zomba', 'MKY2', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(20, 3, 'Zomba Central Prison', 'Zomba', 'ZA', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(21, 4, 'Mwanza Prison', 'Mwanza', 'MN', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(22, 4, 'Luwani Prison', 'Nneno', 'LW', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(23, 4, 'Nsanje Prison', 'Nsanje', 'NE', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(24, 4, 'Bangula Prison', 'Nsanje', 'BG', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(25, 4, 'Chikhwawa Prison', 'Chikwawa', 'CK', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(26, 4, 'Blantyre Prison', 'Blantyre', 'BT', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(27, 4, 'Bvumbwe Prison', 'Thyolo', 'BV', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(28, 4, 'Thyolo Prison', 'Thyolo', 'TO', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(29, 4, 'Makande Prison', 'Thyolo', 'MKN', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(30, 4, 'Mulanje Prison', 'Mulanje', 'MJ', '2021-05-22 23:01:23', '2021-05-22 23:01:23'),
(31, 4, 'Malawi Prison Training College', 'Blantyre', 'MPC', '2021-07-12 21:37:33', '2021-07-12 21:37:33'),
(32, 5, 'Head Quarters', 'Zomba', 'HQ', '2021-07-12 22:21:40', '2021-07-12 22:21:40'),
(33, 1, 'Northern Region Office', 'Mzuzu', 'NRO', '2021-07-13 19:34:53', '2021-07-13 19:34:53'),
(34, 2, 'Central Region Office', 'Lilongwe', 'CRO', '2021-07-13 19:37:10', '2021-07-13 19:37:10'),
(35, 3, 'Eastern Region Office', 'Zomba', 'ERO', '2021-07-13 19:38:04', '2021-07-13 19:38:04'),
(36, 4, 'Southern Region Office', 'Blantyre', 'SRO', '2021-07-13 19:38:42', '2021-07-13 19:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` text NOT NULL,
  `school` varchar(122) NOT NULL,
  `home` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stis_service`
--

CREATE TABLE `stis_service` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `sti_screening` varchar(50) NOT NULL,
  `sti_test` varchar(50) NOT NULL,
  `type_of_test` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sti_category`
--

CREATE TABLE `sti_category` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sti_type`
--

CREATE TABLE `sti_type` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(2) NOT NULL DEFAULT 0,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `class` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mark` int(3) NOT NULL DEFAULT 0,
  `gender` varchar(6) CHARACTER SET utf8 NOT NULL DEFAULT 'male'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `cnic` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `regions_id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 4, 'PRIMIS', 'mokacodes@gmail.com', '+265881995633', 'Blantyre, Malawi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE `tb` (
  `id` int(11) NOT NULL,
  `prisoners_no` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `screening` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Not Done',
  `testing` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Not Done',
  `remarks` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `service_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `tb_screening` varchar(50) NOT NULL,
  `test_criteria` varchar(50) NOT NULL,
  `tb_test` varchar(50) NOT NULL,
  `type_of_test` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_type`
--

CREATE TABLE `tb_test_type` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(11) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit_list`
--

CREATE TABLE `unit_list` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `download` varchar(200) NOT NULL,
  `timers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `head_quarters_id` int(10) NOT NULL DEFAULT 1,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1 = admin, 2 = Officers, 3 = Receptionist, 4 = Health, 5 = Regional Officers',
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `head_quarters_id`, `regions_id`, `stations_id`, `firstname`, `lastname`, `email`, `password`, `type`, `avatar`, `date_created`) VALUES
(1, 1, 5, 32, 'Moses', 'Kaira', 'moka.codes@mps.gov.mw', '5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8', 4, '1637155500_MOSES KAIRA.png', '2021-11-17 15:19:01'),
(2, 1, 5, 32, 'Charles', 'Fodya', 'charles.fodya@mps.gov.mw', '5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8', 4, '', '2022-01-07 10:12:19'),
(3, 1, 5, 32, 'Lighthouse', 'User', 'lhhealth.officer@mps.gov.mw', '5c0c4bca918bf7f9005be33a9d28fbf7f4fbf9f8', 4, '1642379220_WIN_20220111_15_41_39_Pro.jpg', '2022-01-17 02:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `vaccination_name` varchar(100) NOT NULL,
  `adminstered_date` date NOT NULL,
  `remarks` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_list`
--

CREATE TABLE `vaccination_list` (
  `id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visits_by_proffessionals`
--

CREATE TABLE `visits_by_proffessionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prisoners_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `stations_id` int(11) NOT NULL,
  `prisoners_no` varchar(100) NOT NULL,
  `resident_status` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `weight` double(10,2) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `bmi_muac` double(10,2) DEFAULT NULL,
  `temperature` double(10,2) DEFAULT NULL,
  `systolic` int(11) DEFAULT NULL,
  `diastolic` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_history_at_entry`
--
ALTER TABLE `art_history_at_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_service`
--
ALTER TABLE `art_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`(191),`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`(191));

--
-- Indexes for table `basic_body_checkups`
--
ALTER TABLE `basic_body_checkups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batchings`
--
ALTER TABLE `batchings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belongings_and_personal__effects`
--
ALTER TABLE `belongings_and_personal__effects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_presure`
--
ALTER TABLE `blood_presure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_lab_test`
--
ALTER TABLE `book_lab_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinical_referral`
--
ALTER TABLE `clinical_referral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `covid19`
--
ALTER TABLE `covid19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid19_test_type`
--
ALTER TABLE `covid19_test_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death_and_causes`
--
ALTER TABLE `death_and_causes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death_cause`
--
ALTER TABLE `death_cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discharge_certificates`
--
ALTER TABLE `discharge_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug_dispensory`
--
ALTER TABLE `drug_dispensory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_contacts`
--
ALTER TABLE `external_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_remarks`
--
ALTER TABLE `general_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiv_test`
--
ALTER TABLE `hiv_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiv_test_type`
--
ALTER TABLE `hiv_test_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalisation_and_transfers`
--
ALTER TABLE `hospitalisation_and_transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_name`
--
ALTER TABLE `hospital_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_provisions`
--
ALTER TABLE `information_provisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection_grievances_requests`
--
ALTER TABLE `inspection_grievances_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventeries`
--
ALTER TABLE `inventeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test_type`
--
ALTER TABLE `lab_test_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malaria`
--
ALTER TABLE `malaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_screenings`
--
ALTER TABLE `medical_screenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_treatments`
--
ALTER TABLE `medical_treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `new_regimen`
--
ALTER TABLE `new_regimen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offences`
--
ALTER TABLE `offences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outpatient_department`
--
ALTER TABLE `outpatient_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_hts_survey`
--
ALTER TABLE `pre_hts_survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prisoners_no` (`prisoners_no`),
  ADD UNIQUE KEY `prisoners_no_2` (`prisoners_no`);

--
-- Indexes for table `prisoner_cases`
--
ALTER TABLE `prisoner_cases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_no` (`case_no`);

--
-- Indexes for table `prisoner_childrens`
--
ALTER TABLE `prisoner_childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoner_incidents`
--
ALTER TABLE `prisoner_incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prison_issuances`
--
ALTER TABLE `prison_issuances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_visits`
--
ALTER TABLE `professional_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_department`
--
ALTER TABLE `referral_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rehabilitation`
--
ALTER TABLE `rehabilitation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remandees`
--
ALTER TABLE `remandees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prisoners_no` (`prisoners_no`),
  ADD UNIQUE KEY `prisoners_no_2` (`prisoners_no`);

--
-- Indexes for table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spounces`
--
ALTER TABLE `spounces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stage_leaders`
--
ALTER TABLE `stage_leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `stis_service`
--
ALTER TABLE `stis_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sti_category`
--
ALTER TABLE `sti_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sti_type`
--
ALTER TABLE `sti_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb`
--
ALTER TABLE `tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_test_type`
--
ALTER TABLE `tb_test_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `art_history_at_entry`
--
ALTER TABLE `art_history_at_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `art_service`
--
ALTER TABLE `art_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_body_checkups`
--
ALTER TABLE `basic_body_checkups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batchings`
--
ALTER TABLE `batchings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belongings_and_personal__effects`
--
ALTER TABLE `belongings_and_personal__effects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_presure`
--
ALTER TABLE `blood_presure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_lab_test`
--
ALTER TABLE `book_lab_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinical_referral`
--
ALTER TABLE `clinical_referral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `covid19`
--
ALTER TABLE `covid19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `covid19_test_type`
--
ALTER TABLE `covid19_test_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `death_and_causes`
--
ALTER TABLE `death_and_causes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `death_cause`
--
ALTER TABLE `death_cause`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discharge_certificates`
--
ALTER TABLE `discharge_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drug_dispensory`
--
ALTER TABLE `drug_dispensory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key';

--
-- AUTO_INCREMENT for table `external_contacts`
--
ALTER TABLE `external_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_remarks`
--
ALTER TABLE `general_remarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiv_test`
--
ALTER TABLE `hiv_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiv_test_type`
--
ALTER TABLE `hiv_test_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitalisation_and_transfers`
--
ALTER TABLE `hospitalisation_and_transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_name`
--
ALTER TABLE `hospital_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information_provisions`
--
ALTER TABLE `information_provisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_grievances_requests`
--
ALTER TABLE `inspection_grievances_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventeries`
--
ALTER TABLE `inventeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_tests`
--
ALTER TABLE `lab_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_test_type`
--
ALTER TABLE `lab_test_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malaria`
--
ALTER TABLE `malaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_screenings`
--
ALTER TABLE `medical_screenings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_treatments`
--
ALTER TABLE `medical_treatments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_regimen`
--
ALTER TABLE `new_regimen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offences`
--
ALTER TABLE `offences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outpatient_department`
--
ALTER TABLE `outpatient_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_hts_survey`
--
ALTER TABLE `pre_hts_survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisoners`
--
ALTER TABLE `prisoners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `prisoner_cases`
--
ALTER TABLE `prisoner_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisoner_childrens`
--
ALTER TABLE `prisoner_childrens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisoner_incidents`
--
ALTER TABLE `prisoner_incidents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prison_issuances`
--
ALTER TABLE `prison_issuances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_visits`
--
ALTER TABLE `professional_visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_department`
--
ALTER TABLE `referral_department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rehabilitation`
--
ALTER TABLE `rehabilitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remandees`
--
ALTER TABLE `remandees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spounces`
--
ALTER TABLE `spounces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stage_leaders`
--
ALTER TABLE `stage_leaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stis_service`
--
ALTER TABLE `stis_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sti_category`
--
ALTER TABLE `sti_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sti_type`
--
ALTER TABLE `sti_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb`
--
ALTER TABLE `tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_test_type`
--
ALTER TABLE `tb_test_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
