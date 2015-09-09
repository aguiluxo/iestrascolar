/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.42 : Database - iestrascolar_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `actividad` */

DROP TABLE IF EXISTS `actividad`;

CREATE TABLE `actividad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `objetivos` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `fecha_ini` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `financiacion` tinyint(1) NOT NULL,
  `esta_evaluada` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attachment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `actividad` */

LOCK TABLES `actividad` WRITE;

insert  into `actividad`(`id`,`titulo`,`objetivos`,`fecha_ini`,`fecha_fin`,`financiacion`,`esta_evaluada`,`attachment`,`attachment_dir`,`created`,`modified`) values (1,'Actividad de prueba Cáke ñññ','asdasdasd',NULL,NULL,0,0,NULL,NULL,NULL,NULL),(2,'actividad de prueba 2','asdljkasd',NULL,NULL,0,0,NULL,NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `actividad_profesor` */

DROP TABLE IF EXISTS `actividad_profesor`;

CREATE TABLE `actividad_profesor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `actividad_id` int(11) unsigned NOT NULL,
  `profesor_id` int(11) unsigned NOT NULL,
  `rol` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `actividad_profesor` */

LOCK TABLES `actividad_profesor` WRITE;

insert  into `actividad_profesor`(`id`,`actividad_id`,`profesor_id`,`rol`,`created`,`modified`) values (1,1,12345678,1,NULL,NULL),(2,2,23456789,1,NULL,NULL),(3,2,56789123,2,NULL,NULL),(4,3,34567891,1,NULL,NULL),(5,4,56789123,1,NULL,NULL),(6,5,12345678,2,NULL,NULL),(7,5,45678912,1,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `activities_funders` */

DROP TABLE IF EXISTS `activities_funders`;

CREATE TABLE `activities_funders` (
  `idact` int(11) NOT NULL,
  `idfinan` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `activities_funders` */

LOCK TABLES `activities_funders` WRITE;

insert  into `activities_funders`(`idact`,`idfinan`,`cantidad`,`id`) values (1,1,100.00,1),(3,2,5.00,2),(4,1,50.00,3),(5,2,3.00,4);

UNLOCK TABLES;

/*Table structure for table `curso` */

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tutor_id` int(11) unsigned NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `letra` varchar(1) CHARACTER SET utf8 NOT NULL,
  `alumnos` int(2) NOT NULL,
  PRIMARY KEY (`id`,`tutor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `curso` */

LOCK TABLES `curso` WRITE;

insert  into `curso`(`id`,`tutor_id`,`nombre`,`letra`,`alumnos`) values (1,0,'1º BACH','',20),(2,0,'1º ESO','',20),(3,0,'2º ESO','',20),(4,0,'3º ESO','',20),(5,0,'4º ESO','',20);

UNLOCK TABLES;

/*Table structure for table `departmento` */

DROP TABLE IF EXISTS `departmento`;

CREATE TABLE `departmento` (
  `id` tinyint(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `departmento` */

LOCK TABLES `departmento` WRITE;

insert  into `departmento`(`id`,`nombre`,`created`,`modified`) values (1,'Informática',NULL,NULL),(2,'Matemáticas',NULL,NULL),(3,'Lengua',NULL,NULL),(4,'Geografía',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `evaluations (borrar)` */

DROP TABLE IF EXISTS `evaluations (borrar)`;

CREATE TABLE `evaluations (borrar)` (
  `id_actividad` int(11) NOT NULL,
  `participacion` int(11) NOT NULL,
  `objetivos` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `valoracion` int(1) DEFAULT NULL,
  `repetir` tinyint(1) NOT NULL DEFAULT '0',
  `mejoras` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `incidencias` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `evaluations (borrar)` */

LOCK TABLES `evaluations (borrar)` WRITE;

UNLOCK TABLES;

/*Table structure for table `financiador` */

DROP TABLE IF EXISTS `financiador`;

CREATE TABLE `financiador` (
  `id` int(11) unsigned NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `financiador` */

LOCK TABLES `financiador` WRITE;

insert  into `financiador`(`id`,`nombre`,`created`,`modified`) values (1,'Centro',NULL,NULL),(2,'Alumno',NULL,NULL),(3,'Ayuntamiento',NULL,NULL),(4,'Banco',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `participation` */

DROP TABLE IF EXISTS `participation`;

CREATE TABLE `participation` (
  `idact` int(11) NOT NULL,
  `idcurso` varchar(20) CHARACTER SET utf8 NOT NULL,
  `participan` int(2) DEFAULT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `participation` */

LOCK TABLES `participation` WRITE;

insert  into `participation`(`idact`,`idcurso`,`participan`,`id`) values (1,'1º ESO',20,1),(1,'2º ESO',20,2),(2,'4º ESO',20,3),(3,'1º ESO',20,4),(4,'4º ESO',7,5),(5,'1º BACH',20,6);

UNLOCK TABLES;

/*Table structure for table `profesor` */

DROP TABLE IF EXISTS `profesor`;

CREATE TABLE `profesor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `departamento_id` int(11) unsigned NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8 NOT NULL,
  `telefono` int(9) DEFAULT NULL,
  `imagen_dir` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `profesor` */

LOCK TABLES `profesor` WRITE;

insert  into `profesor`(`id`,`departamento_id`,`nombre`,`apellidos`,`telefono`,`imagen_dir`,`imagen`,`created`,`modified`) values (1,2,'Antonio Jesús','Calvo Morales',NULL,'',NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

UNLOCK TABLES;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

LOCK TABLES `usuario` WRITE;

insert  into `usuario`(`id`,`username`,`password`,`role`,`created`,`modified`) values (1,'admin','9882a25c3c400cc8bc57ffad9b91d5590ccb3485','admin','2015-06-02 06:45:24','2015-06-02 06:45:24');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
