-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: l.me    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB

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
-- Table structure for table `mails`
--

DROP TABLE IF EXISTS `mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `From` varchar(50) DEFAULT NULL,
  `To` varchar(50) DEFAULT NULL,
  `Message` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mails`
--

LOCK TABLES `mails` WRITE;
/*!40000 ALTER TABLE `mails` DISABLE KEYS */;
INSERT INTO `mails` VALUES (1,'p360@abv.bg','prezident@gov.no','Sto kila rakiq davam, samo da te pritejavam!'),(2,'m@m.m','m@m.m','Probleeemaaaciiiaaaaaa'),(4,'m@m.m','m@m.m','1231231231');
/*!40000 ALTER TABLE `mails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `makeup`
--

DROP TABLE IF EXISTS `makeup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `makeup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Content` text,
  `Aside` varchar(50) DEFAULT NULL,
  `e1` varchar(50) DEFAULT NULL,
  `e2` varchar(50) DEFAULT NULL,
  `e3` varchar(50) DEFAULT NULL,
  `e4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `makeup`
--

LOCK TABLES `makeup` WRITE;
/*!40000 ALTER TABLE `makeup` DISABLE KEYS */;
INSERT INTO `makeup` VALUES (1,'Hair Masks','Petia','12.05.2016','Mauris vel sapien vel lorem porttitor suscipit. Vivamus porttitor ipsum et malesuada vehicula. Maecenas nec commodo leo, non viverra ipsum. Maecenas at orci dictum, dignissim risus id, sollicitudin tortor. Donec non urna et felis gravida elementum. Quisque et augue tincidunt, elementum elit sit amet, congue metus. Maecenas ut nunc nisl. Phasellus sed elit ipsum. Vestibulum nec mauris et nisl sollicitudin venenatis non at sem. Etiam odio nunc, viverra blandit aliquet a, mollis in felis. Pellentesque erat magna, feugiat sollicitudin mollis vel, euismod quis urna. Mauris interdum vehicula est ut tempus. Cras dignissim vestibulum nulla. Vestibulum non congue erat, quis placerat libero. Nulla eu massa consectetur, gravida ex sit amet, ultrices orci. Donec varius viverra eros a efficitur.','How to do a good make-up:','Create good base','Dutene','Get a mirror','Frustrate your husband');
/*!40000 ALTER TABLE `makeup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `GSM` varchar(50) DEFAULT NULL,
  `University` varchar(50) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Vladimir','Trifonov','0886674688','UNSS','vladimir.jpg'),(2,'Mihaela','Etropolska','0885665446','unknown','mihaela.jpg'),(3,'Spas','Bozhanov','0886652826','unknown','spas.jpg'),(4,'Veselinka','Blajeva','0875228325','Unibit','veselinka.jpg'),(5,'Nikolai','Ivanov','0887328827','TU','nikolai.jpg\"'),(6,'Tihomir','Dimitrov','0884667775','unknown','tihomir.jpg'),(7,'Alex','Sofroniev','0887453583','unknown','alex.jpg'),(8,'Petia','Spasova','0882728757','unknown','petia.jpg'),(9,'Amir','Plugarov','0878257528','unknown','amir.jpg'),(10,'Petar','Stoyanov','0898437837','MG','petar.jpg'),(11,'Strahil','Plashipatkov','0918203980','NONE','strahi.jpg'),(12,'Tenio','Tenev','10927389123','SU','kur.dll');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `science`
--

DROP TABLE IF EXISTS `science`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `science` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Content` text,
  `Aside` varchar(50) DEFAULT NULL,
  `e1` varchar(50) DEFAULT NULL,
  `e2` varchar(50) DEFAULT NULL,
  `e3` varchar(50) DEFAULT NULL,
  `e4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `science`
--

LOCK TABLES `science` WRITE;
/*!40000 ALTER TABLE `science` DISABLE KEYS */;
INSERT INTO `science` VALUES (1,'html','Anton','12.05.2016','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum velit nec ipsum ultrices, id accumsan risus semper. Suspendisse potenti. Ut a ex diam. Vestibulum tempor sodales sem quis mollis. Nulla tristique, orci ut varius facilisis, magna ex venenatis tortor, eu porta dolor odio vel neque. Morbi ut cursus magna. Donec suscipit quis enim non hendrerit. Vivamus id ultricies velit. Pellentesque vulputate lacinia neque. Duis nec libero et lorem congue dignissim. Pellentesque pretium felis facilisis viverra fermentum. Phasellus pulvinar arcu mollis hendrerit tincidunt. Duis non feugiat dui, vel ultricies nulla.','HTML:','Frame of the site','Images','Forms','Styling'),(2,'PHP','Petar','12.05.2016','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean venenatis auctor eleifend. Donec vitae velit orci. Integer porta nisl risus, non porttitor orci vehicula ut. Duis lacinia feugiat lorem, a elementum urna interdum ut. Praesent venenatis pellentesque dolor vel tincidunt. Sed vel nisi non mauris molestie vulputate at at dolor. Nam viverra eu metus auctor elementum. Vivamus gravida ullamcorper nulla, ac commodo justo imperdiet a. Nullam posuere euismod neque vitae condimentum. Ut sollicitudin gravida consectetur. Quisque interdum venenatis sem, et egestas dolor finibus eu. Nullam libero nunc, suscipit nec elit a, porttitor pharetra nibh. Morbi vestibulum metus ac tellus mollis, eget ultrices urna placerat. Morbi eget mattis eros.','PHP:','Dynamic site','if/else logic','Functions','Database');
/*!40000 ALTER TABLE `science` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sport`
--

DROP TABLE IF EXISTS `sport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sport` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Content` text,
  `Aside` varchar(50) DEFAULT NULL,
  `e1` varchar(50) DEFAULT NULL,
  `e2` varchar(50) DEFAULT NULL,
  `e3` varchar(50) DEFAULT NULL,
  `e4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sport`
--

LOCK TABLES `sport` WRITE;
/*!40000 ALTER TABLE `sport` DISABLE KEYS */;
INSERT INTO `sport` VALUES (1,'European Championship','Spas','12.05.2016','European Championship,,Spas,,12.05.2016,,Suspendisse quam sem, convallis nec eros ut, pulvinar efficitur purus. Praesent sit amet tempor risus, eu mollis est. Aliquam ut placerat urna. Aenean lectus dolor, eleifend eu purus non, cursus tempus mi. Ut elementum lorem id augue varius ornare. Praesent et tempus enim, ac interdum ante. Ut interdum tristique porta. Ut dignissim, arcu sed vulputate interdum, sapien nibh ornare orci, quis blandit mauris magna nec justo. Aenean rhoncus mauris sed tellus lacinia, sed sollicitudin enim gravida. Integer a volutpat risus. Integer at tortor fermentum, ultricies nisl et, iaculis massa. Proin auctor elit id arcu aliquet, vitae finibus erat gravida. Sed sed suscipit leo. Vestibulum ac dui vehicula, condimentum nisl sed, faucibus velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','Teams:','France','Italy','Spain','Germany');
/*!40000 ALTER TABLE `sport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technology`
--

DROP TABLE IF EXISTS `technology`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `technology` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Content` text,
  `Aside` varchar(50) DEFAULT NULL,
  `e1` varchar(50) DEFAULT NULL,
  `e2` varchar(50) DEFAULT NULL,
  `e3` varchar(50) DEFAULT NULL,
  `e4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technology`
--

LOCK TABLES `technology` WRITE;
/*!40000 ALTER TABLE `technology` DISABLE KEYS */;
INSERT INTO `technology` VALUES (1,'HTML','Anton','12.05.2016','In nomine htmli, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum velit nec ipsum ultrices, id accumsan risus semper. Suspendisse potenti. Ut a ex diam. Vestibulum tempor sodales sem quis mollis. Nulla tristique, orci ut varius facilisis, magna ex venenatis tortor, eu porta dolor odio vel neque. Morbi ut cursus magna. Donec suscipit quis enim non hendrerit. Vivamus id ultricies velit. Pellentesque vulputate lacinia neque. Duis nec libero et lorem congue dignissim. Pellentesque pretium felis facilisis viverra fermentum. Phasellus pulvinar arcu mollis hendrerit tincidunt. Duis non feugiat dui, vel ultricies nulla.Nulla vitae odio vel enim mattis ornare vel nec mauris. Curabitur maximus mattis felis, eget eleifend nulla pharetra porta. Sed suscipit, augue at suscipit faucibus, dolor felis lobortis ipsum, semper pellentesque augue velit id nunc. Nulla aliquet vehicula elit, ut fringilla mauris scelerisque non. Aliquam at tempor sapien. Aliquam erat volutpat. Phasellus sit amet nunc sed odio rhoncus tincidunt nec nec dolor. Quisque mi augue, fermentum ut aliquet vitae, imperdiet tempor ligula. Vestibulum sed orci quis elit consequat molestie auctor in eros. Integer fringilla rutrum malesuada. Aenean sollicitudin nulla in ipsum blandit, pharetra tempus urna commodo. Curabitur id elit ut purus viverra eleifend posuere at mi. Integer eget pharetra ex, ac bibendum mi.','HTML:','Frame of the site','Images','Forms','Styling'),(2,'PHP','Petar','12.05.2016','In nomine phpli, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean venenatis auctor eleifend. Donec vitae velit orci. Integer porta nisl risus, non porttitor orci vehicula ut. Duis lacinia feugiat lorem, a elementum urna interdum ut. Praesent venenatis pellentesque dolor vel tincidunt. Sed vel nisi non mauris molestie vulputate at at dolor. Nam viverra eu metus auctor elementum. Vivamus gravida ullamcorper nulla, ac commodo justo imperdiet a. Nullam posuere euismod neque vitae condimentum. Ut sollicitudin gravida consectetur. Quisque interdum venenatis sem, et egestas dolor finibus eu. Nullam libero nunc, suscipit nec elit a, porttitor pharetra nibh. Morbi vestibulum metus ac tellus mollis, eget ultrices urna placerat. Morbi eget mattis eros.In hac habitasse platea dictumst. In a aliquam leo. Integer volutpat maximus ornare. Donec tincidunt dui in odio mattis tincidunt. Praesent facilisis ex leo, nec elementum dolor euismod ut. Donec sit amet nisi et leo consequat pharetra eget a sem. Duis vel accumsan turpis, vitae fringilla libero. Nunc convallis elit ligula, non rutrum metus finibus non. Sed id aliquet urna, ac lobortis purus. Aenean a convallis urna. Nulla sagittis libero non efficitur aliquam. Aliquam sit amet mi urna. Praesent imperdiet nisl sed metus dignissim, vitae aliquam odio pulvinar. Vivamus quam quam, ultrices sed odio vitae, tempor gravida est. Morbi cursus nulla id libero convallis, finibus sodales ligula scelerisque. Nullam sed porttitor orci, sit amet ornare nunc.','PHP:','Dynamic site','if/else logic','Functions','Database');
/*!40000 ALTER TABLE `technology` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travel`
--

DROP TABLE IF EXISTS `travel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Content` text,
  `Aside` varchar(50) DEFAULT NULL,
  `e1` varchar(50) DEFAULT NULL,
  `e2` varchar(50) DEFAULT NULL,
  `e3` varchar(50) DEFAULT NULL,
  `e4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travel`
--

LOCK TABLES `travel` WRITE;
/*!40000 ALTER TABLE `travel` DISABLE KEYS */;
INSERT INTO `travel` VALUES (1,'Experience Dubai','Alex','12.05.2016','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum augue id arcu imperdiet imperdiet. Vestibulum dapibus tempus aliquam. Sed volutpat orci non turpis interdum convallis. Suspendisse maximus justo sapien, vitae cursus leo mollis sit amet. Fusce tincidunt ut purus sit amet maximus. Duis enim eros, tempus et bibendum a, imperdiet at libero. Morbi semper sem dolor, luctus venenatis lorem scelerisque in. Aliquam pretium, erat non condimentum dictum, turpis nisi interdum dolor, nec fermentum odio erat quis nulla. Aenean ac iaculis purus, sit amet aliquet arcu. Quisque ullamcorper nisi at libero malesuada, vel fringilla lectus fermentum. Nam ut ultricies ipsum, vel accumsan velit. Maecenas non risus non elit faucibus dapibus.Aliquam non ultricies lectus. Integer sit amet fermentum lectus, at lacinia magna. Vivamus arcu quam, bibendum at ante non, facilisis dapibus lacus. Etiam fermentum lacus ex, nec pulvinar augue viverra ac. Integer sagittis sit amet nibh ut efficitur. Vestibulum laoreet arcu a lobortis rutrum. Integer a efficitur est, vehicula efficitur mauris. Nulla dictum rutrum velit, quis consectetur leo luctus sed. Nulla eu nibh lectus. Nulla sagittis non massa id luctus. Donec ultrices nunc ut sem bibendum, sit amet feugiat risus venenatis. Etiam maximus, lacus non vehicula mattis, mi tortor ultricies elit, vel dapibus elit nisl sit amet purus.','Specifics:','Dry place with lots of sand.','Tall skyscrapers','Sports tuned golden cars','Inshallah'),(3,'Pragha','Mechka','2014-06-24','In sapien mi, tempus in velit ut, dictum blandit felis. Cras vitae tortor non massa condimentum ultricies quis sed dui. Proin vel congue nisi, et mollis neque. Suspendisse eros mauris, faucibus at lectus eu, rutrum varius urna. Donec in urna mattis, fermentum purus ac, cursus quam. Morbi id maximus lacus, ac porta massa. Integer at elementum tellus. Phasellus tincidunt odio finibus, lacinia dolor eu, pellentesque sem. Vestibulum tristique ultricies purus nec mollis.','Honeyweek','Bunny','Bear','Tourists','Pictures');
/*!40000 ALTER TABLE `travel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `Group` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','$2y$10$.vxoOVuGiJN8dE4cEZRQtec8K2gPPtl1VYI92M1RoKdeZULSYx46m','admins'),(2,'Guest','$2y$10$3MmuNBhAzWlsu5dMQJFN8eCKrLZXwR5C41NKzQoWIMS5hkm9VcSHK','users');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-28 13:21:59
