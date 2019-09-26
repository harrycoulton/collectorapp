# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: jameswaves
# Generation Time: 2019-09-26 14:49:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table jameswaves
# ------------------------------------------------------------

CREATE TABLE `jameswaves` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `pleasantness` int(2) NOT NULL,
  `genuine` varchar(3) NOT NULL DEFAULT '',
  `wavepivot` varchar(255) NOT NULL DEFAULT '',
  `feeling` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `jameswaves` WRITE;
/*!40000 ALTER TABLE `jameswaves` DISABLE KEYS */;

INSERT INTO `jameswaves` (`id`, `name`, `pleasantness`, `genuine`, `wavepivot`, `feeling`)
VALUES
	(1,'The Queen',7,'No','wrist','Motivated'),
	(2,'The Toddler',3,'Yes','knuckle','Uncomfortable'),
	(3,'The Drowner',3,'Yes','shoulder','Happiest I\'ve been in a long time'),
	(4,'The Patroniser',1,'No','wrist','Disturbed'),
	(5,'The Smiler',10,'Yes','elbow','Horny'),
	(6,'The Attention Seeker',3,'Yes','elbow','Disturbed & horny'),
	(7,'The Microwave',10,'Yes','finger','I had to call my mum'),
	(113,'The Impostor',3,'no','shoulder','upset');

/*!40000 ALTER TABLE `jameswaves` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
