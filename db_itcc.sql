/*
SQLyog Ultimate v11.33 (32 bit)
MySQL - 10.1.28-MariaDB : Database - db_itcc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_itcc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_itcc`;

/*Table structure for table `admin_massages` */

DROP TABLE IF EXISTS `admin_massages`;

CREATE TABLE `admin_massages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin_massages` */

/*Table structure for table `admin_message_temporaries` */

DROP TABLE IF EXISTS `admin_message_temporaries`;

CREATE TABLE `admin_message_temporaries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin_message_temporaries` */

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competition_id` tinyint(4) DEFAULT NULL,
  `privilege` enum('lomba','sekre','humas','juri') COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`id`,`fullname`,`competition_id`,`privilege`,`username`,`password`,`email`,`is_login`,`last_login_at`,`created_at`,`updated_at`,`remember_token`) values (1,'admin',4,'lomba','admin1','$2y$10$L5sy82N18RaRj.MnZxAC..fe8rC/eDdi91Js4uSRBKmQASCTou.5q','admin@gmail.com',NULL,NULL,NULL,NULL,'e1nk6LWm36BCcCz7l1TL4mzKpZGr6u29kxN4ExkG5kYcE5TgxcbKu33U3JKF');

/*Table structure for table `competitions` */

DROP TABLE IF EXISTS `competitions`;

CREATE TABLE `competitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `short_name` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regist_cost` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `competitions` */

insert  into `competitions`(`id`,`short_name`,`long_name`,`regist_cost`,`description`,`created_at`,`updated_at`) values (1,'PROG','Pemrograman',0,'',NULL,NULL),(2,'WEB','Desain Web',0,'',NULL,NULL),(3,'LCC','Cerdas Cermat',0,'',NULL,NULL),(4,'IDEA','Pengembangan Ide Bisnis TIK',50000,'Pengembangan Ide Bisnis TIK merupakan salah satu perlombaan yang diselenggarakan pada kegiatan ITCC 2017 untuk mengajak masyarakat Indonesia mengembangkan bisnis melalui produk TIK. Lomba ini diperuntukkan untuk umum (maksimal umur 24 tahun) dengan cara membuat proposal bisnis serta prototype produk.',NULL,'2018-05-20 11:28:33'),(5,'SI','Sistem Informasi',0,'',NULL,NULL);

/*Table structure for table `detail_score_lists` */

DROP TABLE IF EXISTS `detail_score_lists`;

CREATE TABLE `detail_score_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score_list_id` int(11) DEFAULT NULL,
  `part` enum('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_score_lists` */

insert  into `detail_score_lists`(`id`,`score_list_id`,`part`,`score`,`created_at`,`updated_at`) values (1,1,'a',2,'2018-05-20 18:41:25','2018-05-20 18:42:03'),(2,1,'b',2,'2018-05-20 18:41:25','2018-05-20 18:42:03'),(3,1,'c',2,'2018-05-20 18:41:25','2018-05-20 18:42:03'),(4,1,'d',2,'2018-05-20 18:41:25','2018-05-20 18:42:03'),(5,1,'e',2,'2018-05-20 18:41:26','2018-05-20 18:42:04'),(6,1,'f',2,'2018-05-20 18:41:26','2018-05-20 18:42:04'),(7,1,'g',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(8,1,'h',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(9,1,'i',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(10,1,'j',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(11,1,'k',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(12,1,'l',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(13,1,'m',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(14,1,'n',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(15,1,'o',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(16,1,'p',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(17,1,'q',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(18,1,'r',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(19,1,'s',1,'2018-05-20 18:41:26','2018-05-20 18:41:26'),(20,1,'t',1,'2018-05-20 18:41:26','2018-05-20 18:41:26');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `etc` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `files` */

insert  into `files`(`id`,`group_id`,`title`,`link`,`etc`,`status`,`created_at`,`updated_at`) values (3,1,'Aplikasi Satu','berkas_1.pdf','Aplikasi satu dua tiga','N','2018-05-19 16:04:42','2018-05-19 16:04:42'),(4,1,'Aplikasi Dua','berkas_1.pdf','Aplikasi dua dari tim','N','2018-05-24 10:49:51','2018-05-24 10:49:51');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_email` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `competition_id` tinyint(4) NOT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `verifying_admin` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `groups` */

insert  into `groups`(`id`,`group_name`,`institution`,`username`,`password`,`verified_email`,`email_token`,`email`,`u_token`,`online`,`last_login_at`,`competition_id`,`verified`,`verified_at`,`verifying_admin`,`created_at`,`updated_at`,`remember_token`) values (1,'Team Red','Undira','tom123','$2y$10$L5sy82N18RaRj.MnZxAC..fe8rC/eDdi91Js4uSRBKmQASCTou.5q',1,'e581275f31974ab2c487e23d1422c30ab5860dcdfc186009f0aae951d764','aguskun150@gmail.com',NULL,NULL,NULL,4,1,'2018-05-19 16:00:30',1,'2018-05-18 00:05:08','2018-05-19 16:00:30','PESdOyf6dTam9U5NqgJDN85jJg3BS92quWu8mXA3LXuLNJCAiFeFzTXf5kHX'),(3,'Team Green','Undira','tommy12','$2y$10$3BH8VRdeYu/FX3P0S1dmzuFJ8xt5UxrmQGuEfHtFnx2TTyBJcWWku',1,'2e912206e2073fcb3dddc4d6d91689641dc2813618ba8d3c973e8c344d8f','baguspramana17@gmail.com',NULL,NULL,NULL,4,NULL,NULL,NULL,'2018-05-19 16:11:14','2018-05-19 16:15:12','eu6rM6i1tjZ1FCrJaeDC7djXMCaeKz6ZiFePPpXbAM9Wkx4aEqy7KVnCeMpq');

/*Table structure for table `juries` */

DROP TABLE IF EXISTS `juries`;

CREATE TABLE `juries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competition_id` tinyint(4) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `juries` */

insert  into `juries`(`id`,`fullname`,`competition_id`,`username`,`password`,`email`,`is_login`,`last_login_at`,`created_at`,`updated_at`,`remember_token`) values (1,'Juri',4,'juri1','$2y$10$L5sy82N18RaRj.MnZxAC..fe8rC/eDdi91Js4uSRBKmQASCTou.5q','juri@gmail.com',NULL,NULL,NULL,NULL,'N5wmeZWsHyrqAUS8wfQfr15ZOwk8OJoKc7fx9QeZfE70LAepFZn16HpMiWRI');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (33,'2018_05_16_180745_create_users_activations_table',1),(102,'2014_10_12_100000_create_password_resets_table',2),(103,'2018_04_02_075657_create_group_table',2),(104,'2018_04_02_082006_create_competition_table',2),(105,'2018_04_02_082545_create_participant_table',2),(106,'2018_04_02_083616_create_admins_table',2),(107,'2018_04_13_165314_create_juries_table',2),(108,'2018_04_21_041722_create_verified_reqs_table',2),(109,'2018_04_21_105812_create_shirts_table',2),(110,'2018_04_27_023156_create_objects_table',2),(111,'2018_04_27_024116_create_score_lists_table',2),(112,'2018_04_27_031814_create_detail_score_lists_table',2),(113,'2018_05_05_000424_create_score_reqs_table',2),(114,'2018_05_08_180356_create_user_massages_table',2),(115,'2018_05_08_181702_create_admin_massages_table',2),(116,'2018_05_09_034857_create_user_message_temporaries_table',2),(117,'2018_05_09_120559_create_admin_message_temporaries_table',2),(118,'2018_05_17_100237_create_files_table',2),(119,'2018_05_17_102016_change_score_req_column',2),(120,'2018_05_17_102037_rename_score_req_column',2),(122,'2018_05_17_220339_add_email_verification_to_user_table',3),(123,'2018_05_17_200906_add_verif_req_column',4),(124,'2018_05_18_235651_add_competition_cost',5),(125,'2018_05_19_104440_add_competition_desc',5);

/*Table structure for table `objects` */

DROP TABLE IF EXISTS `objects`;

CREATE TABLE `objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `etc` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `objects` */

/*Table structure for table `participants` */

DROP TABLE IF EXISTS `participants`;

CREATE TABLE `participants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `captain` tinyint(1) NOT NULL,
  `group_id` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `vegetarian` tinyint(1) NOT NULL,
  `buy_shirt` tinyint(1) NOT NULL,
  `size` enum('XS','S','M','L','XL','XXL') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `participants` */

insert  into `participants`(`id`,`captain`,`group_id`,`code`,`full_name`,`birthdate`,`email`,`contact`,`photo`,`active`,`vegetarian`,`buy_shirt`,`size`,`created_at`,`updated_at`) values (1,1,1,'IDEA_01','Tom','2018-05-23','aguskun150@gmail.com','123456789','4_Tom.jpg',NULL,0,0,NULL,'2018-05-18 00:05:17','2018-05-19 16:00:30'),(2,0,1,'IDEA_02','Anggota 1','2018-05-08','anggota1@gmail.com','1234567890','_Anggota 1.jpg',NULL,0,0,NULL,'2018-05-19 14:41:09','2018-05-19 16:00:30'),(3,1,2,NULL,'Tommy','2018-05-02','baguspramana17@gmail.com','1235465789','4_Tommy.jpeg',NULL,0,0,NULL,'2018-05-19 14:58:49','2018-05-19 14:58:49'),(4,1,3,NULL,'Tommy','2018-05-15','baguspramana17@gmail.com','123456789','4_Tommy.jpg',NULL,0,0,NULL,'2018-05-19 16:11:25','2018-05-19 16:11:25'),(5,0,3,NULL,'Anggota 1','2018-05-08','anggota1@gmail.com','124579','_Anggota 1.jpg',NULL,0,0,NULL,'2018-05-19 16:18:58','2018-05-19 16:18:58'),(6,0,3,NULL,'Anggota 2','2018-05-09','anggota2@gmail.com','123456789','_Anggota 2.jpg',NULL,0,0,NULL,'2018-05-19 16:20:28','2018-05-19 16:20:28');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `score_lists` */

DROP TABLE IF EXISTS `score_lists`;

CREATE TABLE `score_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score_req_id` int(11) NOT NULL,
  `stage` enum('elemination','final') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `score_lists` */

insert  into `score_lists`(`id`,`score_req_id`,`stage`,`created_at`,`updated_at`) values (1,3,'elemination','2018-05-20 18:41:25','2018-05-20 18:41:25');

/*Table structure for table `score_reqs` */

DROP TABLE IF EXISTS `score_reqs`;

CREATE TABLE `score_reqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `jury_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `score_reqs` */

insert  into `score_reqs`(`id`,`file_id`,`jury_id`,`created_at`,`updated_at`,`status`) values (3,3,1,'2018-05-19 16:04:42','2018-05-20 18:40:28','1'),(4,4,1,'2018-05-24 10:49:51','2018-05-24 10:53:31','0');

/*Table structure for table `shirts` */

DROP TABLE IF EXISTS `shirts`;

CREATE TABLE `shirts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `shirts` */

insert  into `shirts`(`id`,`size`,`price`,`created_at`,`updated_at`) values (1,'s',50000,NULL,NULL);

/*Table structure for table `user_massages` */

DROP TABLE IF EXISTS `user_massages`;

CREATE TABLE `user_massages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_massages` */

/*Table structure for table `user_message_temporaries` */

DROP TABLE IF EXISTS `user_message_temporaries`;

CREATE TABLE `user_message_temporaries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_message_temporaries` */

/*Table structure for table `users_activations` */

DROP TABLE IF EXISTS `users_activations`;

CREATE TABLE `users_activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users_activations` */

insert  into `users_activations`(`id`,`group_id`,`token`,`create_at`) values (1,1,'N6tO4kuqjuL9OJO93mXUiYcpsaTphc','2018-05-16 21:33:53'),(2,2,'lAnYoBZOjhxhjfRpSFWYlgc4qLh318','2018-05-16 22:22:07'),(3,3,'igN721CSrUWAfgipAwLdtQrnR2lk4s','2018-05-16 22:22:54');

/*Table structure for table `verified_reqs` */

DROP TABLE IF EXISTS `verified_reqs`;

CREATE TABLE `verified_reqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `request_at` datetime NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `verified_reqs` */

insert  into `verified_reqs`(`id`,`group_id`,`request_at`,`filename`,`note`,`created_at`,`updated_at`) values (1,1,'2018-05-19 15:58:01','verif_1.jpeg','request pembayaran','2018-05-19 15:58:01','2018-05-19 15:58:01');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
