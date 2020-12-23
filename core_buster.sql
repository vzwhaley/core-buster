# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: core_buster
# Generation Time: 2020-03-30 17:18:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

CREATE TABLE `migrations` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table movies
# ------------------------------------------------------------

CREATE TABLE `movies` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `price_code_id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL DEFAULT '',
    `format` varchar(255) DEFAULT NULL,
    `created_at` datetime NOT NULL,
    `created_by` int(11) NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    `updated_by` int(11) DEFAULT NULL,
    `deleted_at` datetime DEFAULT NULL,
    `deleted_by` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;

INSERT INTO `movies` (`id`, `price_code_id`, `name`, `format`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES (1,3,'Back to the Future','Blu-Ray','2020-03-29 16:37:04',1,NULL,NULL,NULL,NULL),(2,1,'Office Space','DVD','2020-03-29 16:42:47',1,NULL,NULL,NULL,NULL),(3,2,'The Big Lebowski','VHS','2020-03-29 16:44:50',1,NULL,NULL,NULL,NULL),(4,4,'Star Wars: Episode V - The Empire Strikes Back','4K Blu-Ray','2020-03-29 16:45:34',1,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

# Dump of table price_codes
# ------------------------------------------------------------

CREATE TABLE `price_codes` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `code_name` varchar(255) NOT NULL DEFAULT '',
    `created_at` datetime NOT NULL,
    `created_by` int(11) NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    `updated_by` int(11) DEFAULT NULL,
    `deleted_at` datetime DEFAULT NULL,
    `deleted_by` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `price_codes` WRITE;
/*!40000 ALTER TABLE `price_codes` DISABLE KEYS */;

INSERT INTO `price_codes` (`id`, `code_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES (1,'REGULAR','2020-03-29 15:17:47',1,NULL,NULL,NULL,NULL),(2,'NEW_RELEASE','2020-03-29 15:19:36',1,NULL,NULL,NULL,NULL),(3,'CHILDRENS','2020-03-29 15:19:49',1,NULL,NULL,NULL,NULL),(4,'SCI_FI','2020-03-29 15:20:04',1,NULL,NULL,NULL,NULL);


/*!40000 ALTER TABLE `price_codes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rentals
# ------------------------------------------------------------

CREATE TABLE `rentals` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `movie_id` int(11) NOT NULL,
    `rented_at` datetime NOT NULL,
    `rented_by` int(11) NOT NULL,
    `duration` float(5,2) DEFAULT NULL,
    `created_at` datetime NOT NULL,
    `created_by` int(11) NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    `updated_by` int(11) DEFAULT NULL,
    `deleted_at` datetime DEFAULT NULL,
    `deleted_by` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

LOCK TABLES `rentals` WRITE;
/*!40000 ALTER TABLE `rentals` DISABLE KEYS */;

INSERT INTO `rentals` (`id`, `movie_id`, `rented_at`, `rented_by`, `duration`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES (1,1,'2020-03-26 16:37:04',5,1.00,'2020-03-26 16:37:04',1,NULL,NULL,NULL,NULL),(2,1,'2020-03-27 17:37:04',5,1.00,'2020-03-27 15:37:04',1,NULL,NULL,NULL,NULL),(3,1,'2020-03-28 18:37:04',5,1.00,'2020-03-28 18:37:04',1,NULL,NULL,NULL,NULL),(5,2,'2020-03-26 16:37:04',5,1.50,'2020-03-26 16:37:04',1,NULL,NULL,NULL,NULL),(6,2,'2020-03-27 16:37:04',5,0.50,'2020-03-27 16:37:04',1,NULL,NULL,NULL,NULL),(7,2,'2020-03-28 16:37:04',5,1.00,'2020-03-28 16:37:04',1,NULL,NULL,NULL,NULL),(8,3,'2020-03-26 16:37:04',5,1.00,'2020-03-26 16:37:04',1,NULL,NULL,NULL,NULL),(9,3,'2020-03-27 16:37:04',5,1.00,'2020-03-26 16:37:04',1,NULL,NULL,NULL,NULL),(10,3,'2020-03-28 16:37:04',5,1.00,'2020-03-28 16:37:04',1,NULL,NULL,NULL,NULL),(11,3,'2020-03-29 16:37:04',5,1.00,'2020-03-29 16:37:04',1,NULL,NULL,NULL,NULL),(12,3,'2020-03-30 16:37:04',5,1.00,'2020-03-30 16:37:04',1,NULL,NULL,NULL,NULL),(13,1,'2020-03-28 18:37:04',5,1.00,'2020-03-28 18:37:04',1,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `rentals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
    `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `active` tinyint(1) NOT NULL DEFAULT '0',
    `renter_points` int(10) DEFAULT NULL,
    `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `renter_points`, `api_token`)
VALUES
	(1,'Admin','',NULL,'admin@corebuster.com','$2y$10$6iV6lDyRWOCfnYkJ9.v8SeuO5YOy0vF/AnXeV21icJW9pQNBZ7PEy',
     'OQUHLVqoWbyNPtG3DYPV5Ue3UqNWfyQ4i6vPRYm5ef4pmMD5LG4sCNnL0i4Z','2020-12-21 16:51:06','2020-12-21 16:51:06',1,4,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
