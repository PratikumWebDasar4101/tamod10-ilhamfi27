/*
SQLyog Enterprise v12.5.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - ta_webdas-9
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ta_webdas-9` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ta_webdas-9`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) DEFAULT NULL,
  `nama_depan` varchar(30) DEFAULT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `wisata_favorit` varchar(255) DEFAULT NULL,
  `genre_film_favorit` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`nim`,`nama_depan`,`nama_belakang`,`kelas`,`tanggal_lahir`,`hobby`,`wisata_favorit`,`genre_film_favorit`) values 
(1,'nim','Sherli','Yualinda','D3MI-41-01','1999-11-11','Bersepeda, Futsal, Membaca, Travelling','Dago, Surabaya','Action, Comedy'),
(2,'6701170137','Ilham Fadhilah','Ibadurrohman','D3MI-41-01','1998-01-27','Bersepeda, Membaca, Camping','Dago, Surabaya, Bali','Action, Comedy');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_depan` varchar(30) DEFAULT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`nama_depan`,`nama_belakang`,`jenis_kelamin`,`tanggal_lahir`,`foto`,`email`) values 
(1,'ilhamfi','6535007c9347a7c63b4423d2163165e3','Ilham ','Fadhilah','L','2018-10-01',NULL,'ilham@mailinator.com'),
(2,'sherli','e918e272ab950dc4a386bf5b0c0f898a',NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `user_details` */

DROP TABLE IF EXISTS `user_details`;

/*!50001 DROP VIEW IF EXISTS `user_details` */;
/*!50001 DROP TABLE IF EXISTS `user_details` */;

/*!50001 CREATE TABLE  `user_details`(
 `id` int(3) ,
 `username` varchar(30) ,
 `password` varchar(32) ,
 `CONCAT(
    ``nama_depan``,
    ' ',
    ``nama_belakang``
  )` varchar(61) ,
 `jenis_kelamin` varchar(1) ,
 `tanggal_lahir` date ,
 `foto` varchar(255) ,
 `email` varchar(50) 
)*/;

/*View structure for view user_details */

/*!50001 DROP TABLE IF EXISTS `user_details` */;
/*!50001 DROP VIEW IF EXISTS `user_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_details` AS select `user`.`id` AS `id`,`user`.`username` AS `username`,`user`.`password` AS `password`,concat(`user`.`nama_depan`,' ',`user`.`nama_belakang`) AS `CONCAT(
    ``nama_depan``,
    ' ',
    ``nama_belakang``
  )`,`user`.`jenis_kelamin` AS `jenis_kelamin`,`user`.`tanggal_lahir` AS `tanggal_lahir`,`user`.`foto` AS `foto`,`user`.`email` AS `email` from `user` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
