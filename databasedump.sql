-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: vegifresh
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredient` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `county` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredient`
--

LOCK TABLES `ingredient` WRITE;
/*!40000 ALTER TABLE `ingredient` DISABLE KEYS */;
INSERT INTO `ingredient` VALUES (1,'Chantenay Carrot','Somerset'),(2,'Salad Tomato','Powys'),(3,'Cherry tomato','Stirling');
/*!40000 ALTER TABLE `ingredient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `nationality` varchar(35) NOT NULL,
  `instructions` varchar(5000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Vegetarian` int(1) NOT NULL DEFAULT '0',
  `Vegan` int(1) NOT NULL DEFAULT '0',
  `Dairy` int(1) NOT NULL DEFAULT '0',
  `Eggs` int(1) NOT NULL DEFAULT '0',
  `Wheat` int(1) NOT NULL DEFAULT '0',
  `TreeNuts` int(1) NOT NULL DEFAULT '0',
  `Peanuts` int(1) NOT NULL DEFAULT '0',
  `Shellfish` int(1) NOT NULL DEFAULT '0',
  `Soy` int(1) NOT NULL DEFAULT '0',
  `Fish` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipe`
--

LOCK TABLES `recipe` WRITE;
/*!40000 ALTER TABLE `recipe` DISABLE KEYS */;
INSERT INTO `recipe` VALUES (1,'Chicken Adobo','Philippines','Ingredients 1\r\nIngredient 2 \r\nSome more ingredient stuff \r\nSome extra stuff \r\n\r\nPreparation:\r\nLorem ipsum dolor sit amet consectetur adipiscing elit, praesent class et turpis fermentum quisque, fames dis maecenas augue ac ridiculus. Taciti morbi etiam iaculis id augue gravida enim, netus rutrum nam curabitur pulvinar cras, placerat varius tincidunt libero nulla laoreet. Fermentum commodo fames et felis nisi non curae at ultricies habitasse ut euismod, lectus habitant aliquam elementum augue dictumst turpis potenti parturient posuere.\r\n\r\nCooking instruction:\r\nEleifend justo quisque massa pellentesque vitae nam etiam integer fringilla, elementum augue diam per lacinia congue ridiculus aptent, quis aliquam blandit nibh urna facilisi consequat nec. Proin quam a sem magnis eu natoque senectus magna, nisl pretium at primis habitant aenean cursus, torquent vulputate dapibus vitae varius justo auctor. Ac morbi facilisis per himenaeos at ultricies nulla, fusce fermentum platea mollis proin natoque, torquent odio nisl tincidunt taciti a.','chicken-adobo.jpg',0,0,0,0,0,0,0,0,1,0),(2,'Vegetable Ricotta Lasagne','Italy','Vegis and cheese and stuffs herp a derp	','Vegetable-Ricotta-Lasagne.jpg',1,0,0,1,1,0,0,0,0,0),(3,'Toad in the Hole','UK','Sausages and gravy and batter, oh my','toad-in-the-hole.jpg',0,0,0,1,1,0,0,0,0,0),(4,'Enchilada Casserole','Mexico','Roll your cassa','enchilada-casserole.jpg',0,0,1,0,1,0,0,0,0,0),(5,'Spicy Vegan Potato Curry','India','Put some spice in your potatoes then curry them','vegan-potato-curry.jpg',1,1,0,0,0,0,0,0,0,0),(6,'Bubble and Squeak','UK','Bubble your squeak','bubble-squeak.jpg',0,0,0,1,0,0,0,0,0,0);
/*!40000 ALTER TABLE `recipe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipeset`
--

DROP TABLE IF EXISTS `recipeset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipeset` (
  `wid` int(10) NOT NULL AUTO_INCREMENT,
  `deliverydate` date DEFAULT NULL,
  `available` int(1) NOT NULL DEFAULT '1',
  `rid1` int(10) DEFAULT NULL,
  `rid2` int(10) DEFAULT NULL,
  `rid3` int(10) DEFAULT NULL,
  `rid4` int(10) DEFAULT NULL,
  `rid5` int(10) DEFAULT NULL,
  `custcode` char(8) NOT NULL,
  PRIMARY KEY (`wid`),
  UNIQUE KEY `custcode` (`custcode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipeset`
--

LOCK TABLES `recipeset` WRITE;
/*!40000 ALTER TABLE `recipeset` DISABLE KEYS */;
INSERT INTO `recipeset` VALUES (1,'2019-02-25',0,1,3,5,4,2,'XdT3qO56'),(2,'2019-03-04',1,2,3,4,5,1,'22QeRT21'),(3,'2019-03-11',1,2,1,4,3,5,'Rt34wQQ3'),(4,'2019-03-18',1,5,4,3,2,1,'RR21aae4'),(5,'2019-03-25',1,6,2,3,2,4,'12SqqERT');
/*!40000 ALTER TABLE `recipeset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `rid1`
--

DROP TABLE IF EXISTS `rid1`;
/*!50001 DROP VIEW IF EXISTS `rid1`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `rid1` (
  `wid` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `rid2`
--

DROP TABLE IF EXISTS `rid2`;
/*!50001 DROP VIEW IF EXISTS `rid2`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `rid2` (
  `wid` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `rid3`
--

DROP TABLE IF EXISTS `rid3`;
/*!50001 DROP VIEW IF EXISTS `rid3`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `rid3` (
  `wid` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `rid4`
--

DROP TABLE IF EXISTS `rid4`;
/*!50001 DROP VIEW IF EXISTS `rid4`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `rid4` (
  `wid` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `rid5`
--

DROP TABLE IF EXISTS `rid5`;
/*!50001 DROP VIEW IF EXISTS `rid5`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `rid5` (
  `wid` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(78) NOT NULL,
  `is_admin` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin@vegifresh.com',1),(2,'bobrek','ae0c9a5f3eec5019b9cb2dbe043b5241','r.crisp@hotmail.com',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `weeklyset`
--

DROP TABLE IF EXISTS `weeklyset`;
/*!50001 DROP VIEW IF EXISTS `weeklyset`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `weeklyset` (
  `wid` tinyint NOT NULL,
  `deliverydate` tinyint NOT NULL,
  `available` tinyint NOT NULL,
  `recipe1` tinyint NOT NULL,
  `recipe2` tinyint NOT NULL,
  `recipe3` tinyint NOT NULL,
  `recipe4` tinyint NOT NULL,
  `recipe5` tinyint NOT NULL,
  `rid1` tinyint NOT NULL,
  `rid2` tinyint NOT NULL,
  `rid3` tinyint NOT NULL,
  `rid4` tinyint NOT NULL,
  `rid5` tinyint NOT NULL,
  `custcode` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `rid1`
--

/*!50001 DROP TABLE IF EXISTS `rid1`*/;
/*!50001 DROP VIEW IF EXISTS `rid1`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `rid1` AS select `recipeset`.`wid` AS `wid`,`recipe`.`id` AS `id`,`recipe`.`name` AS `name` from (`recipeset` join `recipe`) where (`recipeset`.`rid1` = `recipe`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `rid2`
--

/*!50001 DROP TABLE IF EXISTS `rid2`*/;
/*!50001 DROP VIEW IF EXISTS `rid2`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `rid2` AS select `recipeset`.`wid` AS `wid`,`recipe`.`id` AS `id`,`recipe`.`name` AS `name` from (`recipeset` join `recipe`) where (`recipeset`.`rid2` = `recipe`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `rid3`
--

/*!50001 DROP TABLE IF EXISTS `rid3`*/;
/*!50001 DROP VIEW IF EXISTS `rid3`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `rid3` AS select `recipeset`.`wid` AS `wid`,`recipe`.`id` AS `id`,`recipe`.`name` AS `name` from (`recipeset` join `recipe`) where (`recipeset`.`rid3` = `recipe`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `rid4`
--

/*!50001 DROP TABLE IF EXISTS `rid4`*/;
/*!50001 DROP VIEW IF EXISTS `rid4`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `rid4` AS select `recipeset`.`wid` AS `wid`,`recipe`.`id` AS `id`,`recipe`.`name` AS `name` from (`recipeset` join `recipe`) where (`recipeset`.`rid4` = `recipe`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `rid5`
--

/*!50001 DROP TABLE IF EXISTS `rid5`*/;
/*!50001 DROP VIEW IF EXISTS `rid5`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `rid5` AS select `recipeset`.`wid` AS `wid`,`recipe`.`id` AS `id`,`recipe`.`name` AS `name` from (`recipeset` join `recipe`) where (`recipeset`.`rid5` = `recipe`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `weeklyset`
--

/*!50001 DROP TABLE IF EXISTS `weeklyset`*/;
/*!50001 DROP VIEW IF EXISTS `weeklyset`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `weeklyset` AS select `rid1`.`wid` AS `wid`,`recipeset`.`deliverydate` AS `deliverydate`,`recipeset`.`available` AS `available`,`rid1`.`name` AS `recipe1`,`rid2`.`name` AS `recipe2`,`rid3`.`name` AS `recipe3`,`rid4`.`name` AS `recipe4`,`rid5`.`name` AS `recipe5`,`rid1`.`id` AS `rid1`,`rid2`.`id` AS `rid2`,`rid3`.`id` AS `rid3`,`rid4`.`id` AS `rid4`,`rid5`.`id` AS `rid5`,`recipeset`.`custcode` AS `custcode` from (((((`recipeset` join `rid1`) join `rid2`) join `rid3`) join `rid4`) join `rid5`) where ((`recipeset`.`wid` = `rid1`.`wid`) and (`rid1`.`wid` = `rid2`.`wid`) and (`rid2`.`wid` = `rid3`.`wid`) and (`rid3`.`wid` = `rid4`.`wid`) and (`rid4`.`wid` = `rid5`.`wid`)) order by `rid1`.`wid` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-26 19:32:55
