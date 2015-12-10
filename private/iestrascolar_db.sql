/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.17 : Database - iestrascolar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`iestrascolar` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

/*Table structure for table `actividad` */

DROP TABLE IF EXISTS `actividad`;

CREATE TABLE `actividad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_ini` timestamp NULL DEFAULT NULL,
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `trimestre` tinyint(3) DEFAULT NULL,
  `financiacion` tinyint(1) NOT NULL DEFAULT '0',
  `esta_evaluada` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attachment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `destacada` tinyint(1) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `actividad` */

insert  into `actividad`(`id`,`user_id`,`titulo`,`descripcion`,`fecha_ini`,`fecha_fin`,`trimestre`,`financiacion`,`esta_evaluada`,`attachment`,`attachment_dir`,`direccion`,`destacada`,`created`,`modified`) values (92,2,'asdasdasd','','2015-12-01 12:00:00','2015-03-12 01:00:00',NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:12:40','2015-12-03 00:47:07'),(93,2,'frdd','','2015-12-23 01:00:00','2015-12-23 01:00:00',NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:12:48','2015-12-02 18:37:55'),(94,2,'rerefferf','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:12:56','2015-11-02 16:12:56'),(95,2,'frefreferfer','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:13:05','2015-11-02 16:13:05'),(96,2,'frefreferferfdsgvxcvcvb','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:13:18','2015-11-02 16:13:18'),(97,2,'frefreferferasdasdasd','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:14:24','2015-11-02 16:14:24'),(98,2,'frefreferferasdasddfgdfgdfgdfgasd','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:16:30','2015-11-02 16:16:30'),(99,2,'frefreferferasdasddfgdfgdfgdfgasdssdasd','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:17:56','2015-11-02 16:17:56'),(100,2,'frefreferferasdasddfgdfgdfgdfgasdssdasdsadasd','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:18:50','2015-11-02 16:18:50'),(101,2,'frefreferferasdasddfgdfgdfgdfgafdgfgdfgdfrgvsdssdasdsadasd','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:18:57','2015-11-02 16:18:57'),(102,2,'frefreferferasdasddfgdfgdfgdfgafdgfgdfgdfgbfgbfrgvsdssdasdsadasd','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:19:15','2015-11-02 16:19:15'),(103,2,'tyjhgffgh','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 16:20:46','2015-11-02 16:20:46'),(104,2,'vvvdfgftgffgfg','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 20:12:07','2015-11-02 20:12:07'),(105,2,'porobando cosas','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 20:15:33','2015-11-02 20:15:33'),(106,2,'porobando cccccccosas','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 20:16:16','2015-11-02 20:16:16'),(107,2,'probando','asdasd','2015-11-04 01:00:00','2015-11-21 01:00:00',1,1,0,NULL,NULL,NULL,1,'2015-11-02 20:25:27','2015-11-02 20:25:27'),(108,2,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 20:27:44','2015-11-02 20:27:44'),(109,2,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssaaaaa','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 20:28:01','2015-11-02 20:28:01'),(110,2,'aaaaaaaaadfdfaaaaaaaaaaaaaaaaaaaaaaaaaaasssaaaaa','',NULL,NULL,NULL,0,0,NULL,NULL,NULL,0,'2015-11-02 20:28:16','2015-11-02 20:28:16'),(111,2,'tercer trimestre','','2015-04-09 02:00:00','2015-11-20 01:00:00',3,0,0,NULL,NULL,NULL,0,'2015-11-06 17:53:52','2015-11-06 17:53:52'),(112,2,'segundo','','2016-03-22 01:00:00','2016-03-23 01:00:00',3,0,0,NULL,NULL,NULL,0,'2015-11-06 17:55:52','2015-11-06 17:55:52'),(113,2,'segundaa','a','2016-03-22 01:00:00',NULL,2,0,0,NULL,NULL,NULL,0,'2015-11-06 17:56:54','2015-11-06 17:56:54'),(114,2,'sdfsdfsdf','','2015-11-20 01:00:00',NULL,1,0,0,NULL,NULL,NULL,1,'2015-11-06 17:58:57','2015-11-06 17:58:57'),(115,2,'fsfsdfsdfvgfdv','',NULL,NULL,2,0,0,NULL,NULL,NULL,0,'2015-12-02 16:08:42','2015-12-02 16:12:05');

/*Table structure for table `actividad_curso` */

DROP TABLE IF EXISTS `actividad_curso`;

CREATE TABLE `actividad_curso` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `actividad_id` int(11) unsigned NOT NULL,
  `curso_id` int(11) unsigned NOT NULL,
  `participacion` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividad_id` (`actividad_id`),
  KEY `curso_id` (`curso_id`),
  CONSTRAINT `actividad_curso_ibfk_1` FOREIGN KEY (`actividad_id`) REFERENCES `actividad` (`id`),
  CONSTRAINT `actividad_curso_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `actividad_curso` */

insert  into `actividad_curso`(`id`,`actividad_id`,`curso_id`,`participacion`) values (43,92,1,NULL),(44,93,1,NULL),(45,94,1,NULL),(46,95,1,NULL),(47,96,1,NULL),(48,97,1,NULL),(49,98,1,NULL),(50,99,1,NULL),(51,100,1,NULL),(52,101,1,NULL),(53,102,1,NULL),(54,103,1,NULL),(55,104,1,NULL),(56,105,1,NULL),(57,106,1,NULL),(58,107,1,NULL),(59,108,1,NULL),(60,109,1,NULL),(61,110,1,NULL),(62,114,1,NULL),(63,114,2,NULL);

/*Table structure for table `actividad_profesor` */

DROP TABLE IF EXISTS `actividad_profesor`;

CREATE TABLE `actividad_profesor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `actividad_id` int(11) unsigned DEFAULT NULL,
  `profesor_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividad_id` (`actividad_id`),
  KEY `profesor_id` (`profesor_id`),
  CONSTRAINT `actividad_profesor_ibfk_1` FOREIGN KEY (`actividad_id`) REFERENCES `actividad` (`id`),
  CONSTRAINT `actividad_profesor_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `actividad_profesor` */

insert  into `actividad_profesor`(`id`,`actividad_id`,`profesor_id`,`created`,`modified`) values (1,107,1,'2015-11-02 20:25:27','2015-11-02 20:25:27'),(2,107,2,'2015-11-02 20:25:27','2015-11-02 20:25:27');

/*Table structure for table `curso` */

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alumnos` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `curso` */

insert  into `curso`(`id`,`nombre`,`alumnos`) values (1,'1º BACH',20),(2,'1º ESO',20),(3,'2º ESO',20),(4,'3º ESO',20),(5,'4º ESO',20);

/*Table structure for table `curso_profesor` */

DROP TABLE IF EXISTS `curso_profesor`;

CREATE TABLE `curso_profesor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) unsigned DEFAULT NULL,
  `profesor_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_id` (`curso_id`),
  KEY `profesor_id` (`profesor_id`),
  CONSTRAINT `curso_profesor_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`),
  CONSTRAINT `curso_profesor_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `curso_profesor` */

insert  into `curso_profesor`(`id`,`curso_id`,`profesor_id`) values (1,1,1),(2,2,1);

/*Table structure for table `departamento` */

DROP TABLE IF EXISTS `departamento`;

CREATE TABLE `departamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `departamento` */

insert  into `departamento`(`id`,`nombre`,`created`,`modified`) values (1,'Informática',NULL,NULL),(2,'Matemáticas',NULL,NULL),(3,'Lengua',NULL,NULL),(4,'Geografía',NULL,NULL);

/*Table structure for table `destacado` */

DROP TABLE IF EXISTS `destacado`;

CREATE TABLE `destacado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actividad_id` int(11) unsigned NOT NULL,
  `icono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `destacado_actividad_pk` (`actividad_id`),
  CONSTRAINT `destacado_actividad_pk` FOREIGN KEY (`actividad_id`) REFERENCES `actividad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `destacado` */

insert  into `destacado`(`id`,`actividad_id`,`icono`,`created`,`modified`) values (1,114,'fa fa-laptop',NULL,NULL);

/*Table structure for table `profesor` */

DROP TABLE IF EXISTS `profesor`;

CREATE TABLE `profesor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `departamento_id` int(11) unsigned DEFAULT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `imagen_dir` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `departamento_id` (`departamento_id`),
  CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `profesor` */

insert  into `profesor`(`id`,`departamento_id`,`nombre`,`email`,`password`,`role`,`telefono`,`imagen_dir`,`imagen`,`created`,`modified`) values (1,2,'Antonio Jesús Calvo Morales','acalvo@iestrascolar.com','',NULL,NULL,'','',NULL,'2015-12-03 01:27:23'),(2,1,'Alvaro','admin@admin.com','$2y$10$evfizl7AO86QnTCcM4PfC.FtD9Yy9XQdUeJf1gqu6YqY1CunPCGHK','superadmin',691266522,'1df685a2-f7af-4b3d-b180-77b3ee3bf0cd','10930940_921636427857745_2258740314249333315_o.jpg','2015-10-31 02:12:09','2015-11-01 21:08:32');

/*Table structure for table `trimestre` */

DROP TABLE IF EXISTS `trimestre`;

CREATE TABLE `trimestre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trimestre` tinyint(3) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

/*Data for the table `trimestre` */

insert  into `trimestre`(`id`,`trimestre`,`fecha_inicio`,`fecha_fin`) values (1,1,'2015-09-15','2015-12-22'),(2,2,'2016-01-07','2016-03-23'),(3,3,'2016-03-24','2016-06-20');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
