-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versi:               7.0.0.4389
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for knn
DROP DATABASE IF EXISTS `knn`;
CREATE DATABASE IF NOT EXISTS `knn` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `knn`;


-- Dumping structure for table knn.knn_class_subjects
DROP TABLE IF EXISTS `knn_class_subjects`;
CREATE TABLE IF NOT EXISTS `knn_class_subjects` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table knn.knn_class_subjects: ~5 rows (approximately)
/*!40000 ALTER TABLE `knn_class_subjects` DISABLE KEYS */;
INSERT INTO `knn_class_subjects` (`id`, `subject`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Math', '2020-04-04 21:57:48', '2020-04-04 21:59:17', NULL),
	(2, 'Science', '2020-04-04 21:57:48', '2020-04-04 21:59:25', NULL),
	(3, 'Socials', '2020-04-04 21:57:48', '2020-04-04 21:59:28', NULL),
	(4, 'Indonesian', '2020-04-04 21:57:48', '2020-04-04 21:59:30', NULL),
	(5, 'English', '2020-04-04 21:57:48', '2020-04-04 21:59:32', NULL);
/*!40000 ALTER TABLE `knn_class_subjects` ENABLE KEYS */;


-- Dumping structure for table knn.knn_result_class
DROP TABLE IF EXISTS `knn_result_class`;
CREATE TABLE IF NOT EXISTS `knn_result_class` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `std_id` int(10) DEFAULT NULL,
  `next_class` varchar(10) DEFAULT NULL,
  `ipa_percentage` decimal(30,2) DEFAULT NULL,
  `ips_percentage` decimal(30,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table knn.knn_result_class: ~13 rows (approximately)
/*!40000 ALTER TABLE `knn_result_class` DISABLE KEYS */;
INSERT INTO `knn_result_class` (`id`, `std_id`, `next_class`, `ipa_percentage`, `ips_percentage`) VALUES
	(11, 47, 'IPA', 100.00, 0.00),
	(12, 48, 'IPA', 66.67, 33.33),
	(13, 49, 'IPS', 0.00, 100.00),
	(14, 50, 'IPA', 100.00, 0.00),
	(15, 51, 'IPS', 33.33, 66.67),
	(16, 52, 'IPS', 33.33, 66.67),
	(17, 53, 'IPS', 33.33, 66.67),
	(18, 54, 'IPS', 0.00, 100.00),
	(19, 55, 'IPS', 0.00, 100.00),
	(20, 56, 'IPS', 0.00, 100.00),
	(21, 57, 'IPA', 100.00, 0.00),
	(22, 58, 'IPA', 100.00, 0.00),
	(23, 59, 'IPA', 100.00, 0.00),
	(24, 60, 'IPA', 100.00, 0.00),
	(25, 61, 'IPS', 33.33, 66.67),
	(26, 62, 'IPS', 33.33, 66.67),
	(27, 63, 'IPS', 33.33, 66.67);
/*!40000 ALTER TABLE `knn_result_class` ENABLE KEYS */;


-- Dumping structure for table knn.knn_score_definitions
DROP TABLE IF EXISTS `knn_score_definitions`;
CREATE TABLE IF NOT EXISTS `knn_score_definitions` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `assignment_score` decimal(30,0) NOT NULL,
  `mid_test_score` decimal(30,0) NOT NULL,
  `final_test_score` decimal(30,0) NOT NULL,
  `subject_id` int(6) NOT NULL,
  `group` int(2) DEFAULT NULL,
  `recommended_class` varchar(5) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Dumping data for table knn.knn_score_definitions: ~50 rows (approximately)
/*!40000 ALTER TABLE `knn_score_definitions` DISABLE KEYS */;
INSERT INTO `knn_score_definitions` (`id`, `assignment_score`, `mid_test_score`, `final_test_score`, `subject_id`, `group`, `recommended_class`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 100, 100, 100, 1, 1, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:00:47', NULL),
	(2, 100, 100, 100, 2, 1, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:00:49', NULL),
	(3, 100, 100, 100, 3, 1, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:00:56', NULL),
	(4, 100, 100, 100, 4, 1, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:00:57', NULL),
	(5, 100, 100, 100, 5, 1, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:00:59', NULL),
	(6, 95, 95, 95, 1, 2, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:00', NULL),
	(7, 95, 95, 95, 2, 2, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:03', NULL),
	(8, 95, 95, 95, 3, 2, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:04', NULL),
	(9, 95, 95, 95, 4, 2, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:05', NULL),
	(10, 95, 95, 95, 5, 2, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:07', NULL),
	(11, 90, 90, 90, 1, 3, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:10', NULL),
	(12, 90, 90, 90, 2, 3, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:11', NULL),
	(13, 90, 90, 90, 3, 3, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:12', NULL),
	(14, 90, 90, 90, 4, 3, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:13', NULL),
	(15, 90, 90, 90, 5, 3, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:14', NULL),
	(16, 85, 85, 85, 1, 4, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:16', NULL),
	(17, 85, 85, 85, 2, 4, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:17', NULL),
	(18, 85, 85, 85, 3, 4, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:26', NULL),
	(19, 85, 85, 85, 4, 4, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:27', NULL),
	(20, 85, 85, 85, 5, 4, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:29', NULL),
	(21, 80, 80, 80, 1, 5, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:30', NULL),
	(22, 80, 80, 80, 2, 5, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:31', NULL),
	(23, 80, 80, 80, 3, 5, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:32', NULL),
	(24, 80, 80, 80, 4, 5, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:33', NULL),
	(25, 80, 80, 80, 5, 5, 'IPA', '2020-04-04 22:03:06', '2020-04-11 14:01:35', NULL),
	(26, 78, 78, 78, 1, 6, 'IPA', '2020-04-11 17:15:33', '2020-04-11 21:46:49', NULL),
	(27, 78, 78, 78, 2, 6, 'IPA', '2020-04-11 17:15:33', '2020-04-11 21:46:51', NULL),
	(28, 78, 78, 78, 3, 6, 'IPA', '2020-04-11 17:15:33', '2020-04-11 21:46:53', NULL),
	(29, 78, 78, 78, 4, 6, 'IPA', '2020-04-11 17:15:33', '2020-04-11 21:46:56', NULL),
	(30, 78, 78, 78, 5, 6, 'IPA', '2020-04-11 17:15:33', '2020-04-11 21:47:07', NULL),
	(31, 70, 70, 70, 1, 7, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(32, 70, 70, 70, 2, 7, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(33, 70, 70, 70, 3, 7, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(34, 70, 70, 70, 4, 7, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(35, 70, 70, 70, 5, 7, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(36, 65, 65, 65, 1, 8, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(37, 65, 65, 65, 2, 8, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(38, 65, 65, 65, 3, 8, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(39, 65, 65, 65, 4, 8, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(40, 65, 65, 65, 5, 8, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(41, 55, 55, 55, 1, 9, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(42, 55, 55, 55, 2, 9, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(43, 55, 55, 55, 3, 9, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(44, 55, 55, 55, 4, 9, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(45, 55, 55, 55, 5, 9, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(46, 48, 48, 48, 1, 10, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(47, 48, 48, 48, 2, 10, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(48, 48, 48, 48, 3, 10, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(49, 48, 48, 48, 4, 10, 'IPS', '2020-04-11 17:15:33', NULL, NULL),
	(50, 48, 48, 48, 5, 10, 'IPS', '2020-04-11 17:15:33', NULL, NULL);
/*!40000 ALTER TABLE `knn_score_definitions` ENABLE KEYS */;


-- Dumping structure for table knn.knn_std_score
DROP TABLE IF EXISTS `knn_std_score`;
CREATE TABLE IF NOT EXISTS `knn_std_score` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `std_id` int(10) NOT NULL,
  `assignment_score` decimal(30,0) NOT NULL,
  `mid_test_score` decimal(30,0) NOT NULL,
  `final_test_score` decimal(30,0) NOT NULL,
  `subject_id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- Dumping data for table knn.knn_std_score: ~60 rows (approximately)
/*!40000 ALTER TABLE `knn_std_score` DISABLE KEYS */;
INSERT INTO `knn_std_score` (`id`, `std_id`, `assignment_score`, `mid_test_score`, `final_test_score`, `subject_id`) VALUES
	(6, 47, 90, 90, 90, 1),
	(7, 47, 90, 90, 90, 2),
	(8, 47, 90, 90, 90, 3),
	(9, 47, 90, 90, 90, 4),
	(10, 47, 90, 90, 90, 5),
	(11, 48, 57, 57, 75, 1),
	(12, 48, 75, 75, 75, 2),
	(13, 48, 75, 75, 75, 3),
	(14, 48, 75, 75, 75, 4),
	(15, 48, 75, 75, 75, 5),
	(16, 49, 80, 80, 80, 1),
	(17, 49, 50, 50, 50, 2),
	(18, 49, 50, 50, 50, 3),
	(19, 49, 50, 50, 50, 4),
	(20, 49, 50, 50, 50, 5),
	(21, 50, 80, 80, 80, 1),
	(22, 50, 80, 80, 80, 2),
	(23, 50, 80, 80, 80, 3),
	(24, 50, 80, 80, 80, 4),
	(25, 50, 80, 80, 80, 5),
	(26, 51, 70, 70, 70, 1),
	(27, 51, 70, 70, 70, 2),
	(28, 51, 70, 70, 70, 3),
	(29, 51, 70, 70, 70, 4),
	(30, 51, 70, 70, 70, 5),
	(31, 52, 70, 70, 70, 1),
	(32, 52, 70, 70, 70, 2),
	(33, 52, 70, 70, 70, 3),
	(34, 52, 70, 70, 70, 4),
	(35, 52, 70, 70, 70, 5),
	(36, 53, 70, 70, 70, 1),
	(37, 53, 70, 70, 70, 2),
	(38, 53, 70, 70, 70, 3),
	(39, 53, 70, 70, 70, 4),
	(40, 53, 70, 70, 70, 5),
	(41, 54, 55, 55, 55, 1),
	(42, 54, 55, 55, 55, 2),
	(43, 54, 55, 55, 55, 3),
	(44, 54, 55, 55, 55, 4),
	(45, 54, 55, 55, 55, 5),
	(46, 56, 55, 55, 55, 1),
	(47, 56, 55, 55, 55, 2),
	(48, 56, 55, 55, 55, 3),
	(49, 56, 55, 55, 55, 4),
	(50, 56, 55, 55, 55, 5),
	(51, 57, 80, 80, 80, 1),
	(52, 57, 88, 98, 98, 2),
	(53, 57, 98, 98, 98, 3),
	(54, 57, 98, 98, 98, 4),
	(55, 57, 98, 98, 98, 5),
	(56, 58, 98, 87, 87, 1),
	(57, 58, 87, 87, 87, 2),
	(58, 58, 87, 87, 87, 3),
	(59, 58, 87, 87, 87, 4),
	(60, 58, 87, 87, 87, 5),
	(61, 59, 98, 87, 87, 1),
	(62, 59, 87, 87, 87, 2),
	(63, 59, 87, 87, 87, 3),
	(64, 59, 87, 87, 87, 4),
	(65, 59, 87, 87, 87, 5),
	(66, 60, 98, 90, 8, 1),
	(67, 60, 98, 98, 98, 2),
	(68, 60, 9, 80, 89, 3),
	(69, 60, 89, 89, 89, 4),
	(70, 60, 89, 98, 98, 5),
	(71, 61, 60, 70, 65, 1),
	(72, 61, 80, 88, 67, 2),
	(73, 61, 80, 78, 70, 3),
	(74, 61, 60, 70, 78, 4),
	(75, 61, 70, 70, 70, 5),
	(76, 62, 70, 70, 70, 1),
	(77, 62, 70, 70, 70, 2),
	(78, 62, 70, 70, 70, 3),
	(79, 62, 70, 70, 70, 4),
	(80, 62, 70, 70, 70, 5),
	(81, 63, 70, 70, 70, 1),
	(82, 63, 70, 70, 70, 2),
	(83, 63, 70, 70, 70, 3),
	(84, 63, 70, 70, 70, 4),
	(85, 63, 70, 70, 70, 5);
/*!40000 ALTER TABLE `knn_std_score` ENABLE KEYS */;


-- Dumping structure for table knn.knn_student
DROP TABLE IF EXISTS `knn_student`;
CREATE TABLE IF NOT EXISTS `knn_student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `std_nisn` varchar(6) DEFAULT NULL,
  `std_name` varchar(50) DEFAULT NULL,
  `std_class` varchar(20) DEFAULT NULL,
  `std_interest` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

-- Dumping data for table knn.knn_student: ~13 rows (approximately)
/*!40000 ALTER TABLE `knn_student` DISABLE KEYS */;
INSERT INTO `knn_student` (`id`, `std_nisn`, `std_name`, `std_class`, `std_interest`) VALUES
	(47, NULL, 'Irwan Rosyadi', 'XI A', NULL),
	(48, NULL, 'Halida', 'XI F', NULL),
	(49, NULL, 'Johan', 'XI A', NULL),
	(50, NULL, 'ADIT', 'XI E', NULL),
	(51, '1234', 'ada', 'XI D', NULL),
	(52, '1234', 'ada', 'XI D', NULL),
	(53, '1234', 'ada', 'XI D', NULL),
	(54, '5678', 'AAA', 'XI A', NULL),
	(55, NULL, NULL, NULL, NULL),
	(56, '5678', 'AAA', 'XI A', NULL),
	(57, '1234', 'Amel', 'XI B', NULL),
	(58, '1234', 'junika', 'XI A', NULL),
	(59, '1234', 'junika', 'XI A', 'IPA'),
	(60, '1234', 'Lucinta', 'XI C', NULL),
	(61, '2341', 'Piere', 'XI B', NULL),
	(62, '1234', 'abi', 'XI E', NULL),
	(63, '5656', 'leah', 'XI B', 'IPS');
/*!40000 ALTER TABLE `knn_student` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
