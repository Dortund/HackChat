-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hackchatdb
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `backend_user`
--

DROP TABLE IF EXISTS `backend_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backend_user` (
  `username` varchar(32) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `is_admin` bit(1) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backend_user`
--

LOCK TABLES `backend_user` WRITE;
/*!40000 ALTER TABLE `backend_user` DISABLE KEYS */;
INSERT INTO `backend_user` VALUES ('admin','$2y$13$pmLBEtwbetkGP7OTtYvi.ef2Y4lYN.4xwqvJ0njHonZ2ysiTnETUm','',23),('wouter','$2y$13$J1a/0qHoYUI2hs31u3vaGer/D6KKVLfTng6x0Fm5Lt7TjfP7y6Way','\0',24),('matthijs','$2y$13$1qLPP6mylGnWiHzDdDYyIuXEfpmOA2uubQRejoMKs.3c0utsvZU9m','\0',25),('wouter2','$2y$13$7IoYyrFWruiBreW7p9kLBefW9Q9rPI/cmPQ8piz4uljQnWlbWn87i','\0',26);
/*!40000 ALTER TABLE `backend_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(1024) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `is_visible` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (10,'2016-01-04 23:31:47','<b>Ik ben niet dik</b>',23,''),(11,'2016-01-04 23:34:14','<i>Ikke wel</i>',25,''),(12,'2016-01-04 23:55:05','Right...',23,''),(13,'2016-01-04 23:01:20','srsly.. guys..',23,''),(14,'2016-01-04 23:06:21','0 for effort',23,''),(15,'2016-01-04 23:06:39','0 for effort',23,''),(16,'2016-01-04 23:08:07','0 for effort',23,''),(17,'2016-01-04 23:32:13','wait.. testing',23,'\0'),(18,'2016-01-04 23:09:45','test3',23,''),(19,'2016-01-04 23:10:00','ok, this works',23,''),(20,'2016-01-05 00:10:04','asdfasdfasdf',23,''),(21,'2016-01-05 00:10:11','asdfafrwadasdf asdfg vad vfa',23,''),(22,'2016-01-05 00:12:30','Here\'s our logo (hover to see the title text):\r\n\r\nInline-style: \r\n![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png \"Logo Title Text 1\")\r\n\r\nReference-style: \r\n![alt text][logo]\r\n\r\n[logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png \"Logo Title Text 2\"\r\n',24,''),(23,'2016-01-05 00:12:55','<a href=\"http://www.youtube.com/watch?feature=player_embedded&v=YOUTUBE_VIDEO_ID_HERE\r\n\" target=\"_blank\"><img src=\"http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg\" \r\nalt=\"IMAGE ALT TEXT HERE\" width=\"240\" height=\"180\" border=\"10\" /></a>',24,''),(24,'2016-01-05 00:13:20','[![IMAGE ALT TEXT HERE](http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg)](http://www.youtube.com/watch?v=YOUTUBE_VIDEO_ID_HERE)',24,''),(25,'2016-01-05 00:22:22','is mijn naam gvd al geclaimt :(',26,''),(26,'2016-01-05 00:30:19','LOLZ XD',24,'');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-05  1:49:32
