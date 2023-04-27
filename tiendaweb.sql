# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     tiendaweb
# Server version:               5.5.16-log
# Server OS:                    Win64
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2023-02-26 15:44:24
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'tiendaweb'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "tiendaweb" /*!40100 DEFAULT CHARACTER SET utf8 */;

USE "tiendaweb";


#
# Table structure for table 'productos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "productos" (
  "idPROD" tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  "dscPROD" varchar(20) NOT NULL,
  "pcioPROD" varchar(20) NOT NULL,
  "idMARCA_PROD" tinyint(20) NOT NULL,
  "idCAT_PROD" tinyint(20) NOT NULL,
  "idTIENDA_PROD" tinyint(20) NOT NULL,
  PRIMARY KEY ("idPROD"),
  UNIQUE KEY "idPROD" ("idPROD"),
  KEY "idPROD_2" ("idPROD","dscPROD","pcioPROD","idMARCA_PROD","idCAT_PROD","idTIENDA_PROD")
) AUTO_INCREMENT=55;



#
# Dumping data for table 'productos'
#

LOCK TABLES "productos" WRITE;
/*!40000 ALTER TABLE "productos" DISABLE KEYS;*/
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(1,'D5300','600',1,1,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(2,'D810','980',1,1,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(3,'D5300','600',1,1,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(4,'D810','980',1,1,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(5,'D5300','600',1,1,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(6,'D810','980',1,1,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(7,'D5300','600',1,2,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(8,'D810','980',1,2,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(9,'D5300','600',1,2,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(10,'D810','980',1,2,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(11,'D5300','600',1,2,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(12,'D810','980',1,2,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(13,'D5300','600',1,3,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(14,'D810','980',1,3,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(15,'D5300','600',1,3,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(16,'D810','980',1,3,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(17,'D5300','600',1,3,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(18,'D810','980',1,3,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(19,'T3i','400',2,1,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(20,'T7i','500',2,1,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(21,'T3i','400',2,1,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(22,'T7i','500',2,1,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(23,'T3i','400',2,1,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(24,'T7i','500',2,1,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(25,'T3i','400',2,2,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(26,'T7i','500',2,2,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(27,'T3i','400',2,2,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(28,'T7i','500',2,2,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(29,'T3i','400',2,2,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(30,'T7i','500',2,2,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(31,'T3i','400',2,3,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(32,'T7i','500',2,3,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(33,'T3i','400',2,3,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(34,'T7i','500',2,3,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(35,'T3i','400',2,3,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(36,'T7i','500',2,3,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(37,'A7ii','1700',3,1,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(38,'a7r','2500',3,1,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(39,'A7ii','1700',3,1,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(40,'a7r','2500',3,1,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(41,'A7ii','1700',3,1,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(42,'a7r','2500',3,1,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(43,'A7ii','1700',3,2,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(44,'a7r','2500',3,2,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(45,'A7ii','1700',3,2,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(46,'a7r','2500',3,2,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(47,'A7ii','1700',3,2,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(48,'a7r','2500',3,2,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(49,'A7ii','1700',3,3,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(50,'a7r','2500',3,3,1);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(51,'A7ii','1700',3,3,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(52,'a7r','2500',3,3,2);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(53,'A7ii','1700',3,3,3);
REPLACE INTO "productos" ("idPROD", "dscPROD", "pcioPROD", "idMARCA_PROD", "idCAT_PROD", "idTIENDA_PROD") VALUES
	(54,'a7r','2500',3,3,3);
/*!40000 ALTER TABLE "productos" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
