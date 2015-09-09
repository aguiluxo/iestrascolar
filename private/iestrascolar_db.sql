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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`iestrascolar_db` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `iestrascolar_db`;

/*Table structure for table `activities` */

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `objetivos` varchar(250) CHARACTER SET utf8 NOT NULL,
  `trimestre` enum('1','2','3') CHARACTER SET utf8 NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `financiacion` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `activities` */

insert  into `activities`(`id`,`nombre`,`objetivos`,`trimestre`,`fecha`,`hora_ini`,`hora_fin`,`financiacion`) values (1,'Actividad de prueba Cáke ñññ','asdasdasd','1',NULL,NULL,NULL,0),(2,'actividad de prueba 2','asdljkasd','1',NULL,NULL,NULL,0),(3,'asdasd','aasd','1',NULL,NULL,NULL,0),(4,'sdfsdfsdf','asdasd','1',NULL,NULL,NULL,0),(5,'Visita al Jardin Botánico','Visita educativa al Jardín Botánico','2','2015-03-10','10:15:00','14:15:00',1),(6,'Seguridad Vial','Charla en el salón de actos sobre seguridad vial','3',NULL,NULL,NULL,0),(7,'Excursion al campo','Excursión al campo con los alumnos de 1º de ESO','2','2015-02-20','09:15:00','14:15:00',1),(8,'Viaje a Madrid','Visita a Madrid.\r\nMusical del rey León.','2','2015-02-17',NULL,NULL,1),(9,'Luces de Bohemia','Asistencia a la obra de teatro: \"Luces de Bohemia\"','2','2015-02-23',NULL,NULL,1),(10,'Visita al Jardin Botánico','Visita educativa al Jardín Botánico','2','2015-03-10','10:15:00','14:15:00',1),(11,'Seguridad Vial','Charla en el salón de actos sobre seguridad vial','3',NULL,NULL,NULL,0),(12,'Excursion al campo','Excursión al campo con los alumnos de 1º de ESO','2','2015-02-20','09:15:00','14:15:00',1),(13,'Viaje a Madrid','Visita a Madrid.\r\nMusical del rey León.','2','2015-02-17',NULL,NULL,1),(14,'Luces de Bohemia','Asistencia a la obra de teatro: \"Luces de Bohemia\"','2','2015-02-23',NULL,NULL,1);

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `alumnos` int(2) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `letra` varchar(1) CHARACTER SET utf8 NOT NULL,
  `enseñanza` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `courses` */

insert  into `courses`(`nombre`,`alumnos`,`id`,`letra`,`enseñanza`) values ('1º BACH',20,1,'',''),('1º ESO',20,2,'',''),('2º ESO',20,3,'',''),('3º ESO',20,4,'',''),('4º ESO',20,5,'','');

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `id` tinyint(2) NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `departments` */

insert  into `departments`(`id`,`nombre`) values (1,'Informática'),(2,'Matemáticas'),(3,'Lengua'),(4,'Geografía');

/*Table structure for table `evaluations` */

DROP TABLE IF EXISTS `evaluations`;

CREATE TABLE `evaluations` (
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

/*Data for the table `evaluations` */

/*Table structure for table `funders` */

DROP TABLE IF EXISTS `funders`;

CREATE TABLE `funders` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `funders` */

insert  into `funders`(`id`,`nombre`) values (1,'Centro'),(2,'Alumno'),(3,'Ayuntamiento'),(4,'Banco');

/*Table structure for table `funding` */

DROP TABLE IF EXISTS `funding`;

CREATE TABLE `funding` (
  `idact` int(11) NOT NULL,
  `idfinan` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idact`,`idfinan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `funding` */

insert  into `funding`(`idact`,`idfinan`,`cantidad`) values (1,1,100.00),(3,2,5.00),(4,1,50.00),(5,2,3.00);

/*Table structure for table `organization` */

DROP TABLE IF EXISTS `organization`;

CREATE TABLE `organization` (
  `idact` int(11) NOT NULL,
  `dniprof` varchar(9) NOT NULL,
  `rol` enum('responsable','participante') NOT NULL,
  PRIMARY KEY (`idact`,`dniprof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `organization` */

insert  into `organization`(`idact`,`dniprof`,`rol`) values (1,'12345678A','responsable'),(2,'23456789B','responsable'),(2,'56789123F','participante'),(3,'34567891C','responsable'),(4,'56789123F','responsable'),(5,'12345678A','participante'),(5,'45678912D','responsable');

/*Table structure for table `participation` */

DROP TABLE IF EXISTS `participation`;

CREATE TABLE `participation` (
  `idact` int(11) NOT NULL,
  `idcurso` varchar(20) CHARACTER SET utf8 NOT NULL,
  `participan` int(2) DEFAULT NULL,
  PRIMARY KEY (`idact`,`idcurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `participation` */

insert  into `participation`(`idact`,`idcurso`,`participan`) values (1,'1º ESO',20),(1,'2º ESO',20),(2,'4º ESO',20),(3,'1º ESO',20),(4,'4º ESO',7),(5,'1º BACH',20);

/*Table structure for table `teachers` */

DROP TABLE IF EXISTS `teachers`;

CREATE TABLE `teachers` (
  `dni` varchar(9) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefono` int(9) DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `imagen` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dept` tinyint(2) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `teachers` */

insert  into `teachers`(`dni`,`nombre`,`apellidos`,`telefono`,`username`,`imagen`,`password`,`dept`) values ('12345678A','Antonio Jesús','Calvo Morales',NULL,'acalvo@iestrascolar.es','img/f1.jpg','acalvo',1),('23456789B','Mari Luz','Sánchez Rubio',NULL,'msanchez@iestrascolar.es','img/avatar.png','msanchez',3),('34567891C','Pedro','Jiménez Latorre',NULL,'pjimenez@iestrascolar.es','img/f2.jpg','pjimenez',3),('45678912D','Salvador','Pérez Jorge',NULL,'sperez@iestrascolar.es','img/salvatore.jpg','sperez',2),('56789123F','Herminio','Ludeña Serna',NULL,'hludena@iestrascolar.es','img/minion.jpg','hludena',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
