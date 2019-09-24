# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: jameswaves
# Generation Time: 2019-09-23 15:44:21 +0000
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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `pleasantness` varchar(255) NOT NULL DEFAULT '',
  `genuine` tinyint(1) DEFAULT NULL,
  `wavepivot` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `jameswaves` WRITE;
/*!40000 ALTER TABLE `jameswaves` DISABLE KEYS */;

INSERT INTO `jameswaves` (`id`, `name`, `pleasantness`, `genuine`, `wavepivot`)
VALUES
	(1,'The Queen','7.0',NULL,'wrist'),
	(2,'The Toddler','8.0',NULL,'wrist'),
	(3,'The Drowner','3.0',NULL,'shoulder'),
	(4,'The Patroniser','1.0',NULL,'wrist'),
	(5,'The Smiler','10.0',NULL,'elbow'),
	(6,'The Attention Seeker','2.5',NULL,'elbow'),
	(7,'The Microwave','10',NULL,'finger');

/*!40000 ALTER TABLE `jameswaves` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
