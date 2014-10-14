/*
SQLyog Ultimate v8.61 
MySQL - 5.5.16 : Database - prueba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prueba` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prueba`;

/*Table structure for table `alumnos_grupo` */

DROP TABLE IF EXISTS `alumnos_grupo`;

CREATE TABLE `alumnos_grupo` (
  `id_alumno` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumnos_grupo` */

insert  into `alumnos_grupo`(`id_alumno`,`id_grupo`) values (3,2),(8,3),(5,2);

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Avatar` varchar(100) DEFAULT NULL,
  `Orden` varchar(50) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`Id`,`Nombre`,`Avatar`,`Orden`,`Estatus`) values (1,'TIC-71',NULL,NULL,1),(2,'TIC-72',NULL,NULL,1),(3,'TIC-73',NULL,NULL,1);

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id_maestro` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  KEY `id_maestro` (`id_maestro`),
  CONSTRAINT `maestro_materia_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `usuario` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`id_maestro`,`id_materia`) values (1,2);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `Idm` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Avatar` varchar(100) DEFAULT NULL,
  `Orden` varchar(50) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`Idm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`Idm`,`Nombre`,`Avatar`,`Orden`,`Estatus`) values (1,'Base de Datos',NULL,NULL,1),(2,'Ingles',NULL,NULL,1);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(15) DEFAULT NULL,
  `ApellidoPaterno` varchar(15) DEFAULT NULL,
  `ApellidoMaterno` char(10) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `calle` int(5) DEFAULT NULL,
  `num_ext` int(5) DEFAULT NULL,
  `num_int` int(11) DEFAULT NULL,
  `colonia` varchar(70) DEFAULT NULL,
  `municipio` varchar(70) DEFAULT NULL,
  `estado` varchar(70) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `Nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`Id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`telefono`,`calle`,`num_ext`,`num_int`,`colonia`,`municipio`,`estado`,`cp`,`correo`,`usuario`,`contraseña`,`status`,`Nivel`) values (1,'.Nancy.','.Garcia.','.Garcia.','7223908186',0,4,0,'0','0','0',52050,'0','nan','12345',1,2),(2,'NAYELI','PERÉZ','GARCÍA','7225193865',0,5,0,'0','0','0',63918,'0','naye','123',1,1),(5,'Yessica','Huerta','Mtz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yes','12',1,3),(6,'Yesi','Tufiño','Flores',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2),(7,'.ivonne.','.flores.','.t.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2),(8,'.araceli.','.jimenez.','.allende.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,3),(13,'.gfdnhb.','.hgbtr.','.thbfty.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
