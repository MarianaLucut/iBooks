CREATE DATABASE  IF NOT EXISTS `workbooks_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `workbooks_db`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: workbooks_db
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Class_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Class_Id_Course_idx` (`Class_Id`),
  CONSTRAINT `Class_Id_Course` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_game`
--

DROP TABLE IF EXISTS `forum_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_game` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Message` varchar(500) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `Message_Date_Time` datetime DEFAULT NULL,
  `Response_Message_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `User_Id_FG_idx` (`User_Id`),
  CONSTRAINT `User_Id_FG` FOREIGN KEY (`User_Id`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_game`
--

LOCK TABLES `forum_game` WRITE;
/*!40000 ALTER TABLE `forum_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(45) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Workbook_Id` int(11) DEFAULT NULL,
  `Duration` time DEFAULT NULL,
  `Points` float DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Workbook_Id_Game_idx` (`Workbook_Id`),
  CONSTRAINT `Workbook_Id_Game` FOREIGN KEY (`Workbook_Id`) REFERENCES `workbook` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `User_Id_Parent_idx` (`User_Id`),
  CONSTRAINT `User_Id_Parent` FOREIGN KEY (`User_Id`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
/*!40000 ALTER TABLE `parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school`
--

LOCK TABLES `school` WRITE;
/*!40000 ALTER TABLE `school` DISABLE KEYS */;
/*!40000 ALTER TABLE `school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Class_Id` int(11) DEFAULT NULL,
  `Parent_Id` int(11) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Avatar` varchar(45) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `User_Id_Student_idx` (`User_Id`),
  KEY `Class_Id_Student_idx` (`Class_Id`),
  KEY `Parent_Id_Student_idx` (`Parent_Id`),
  CONSTRAINT `Class_Id_Student` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Parent_Id_Student` FOREIGN KEY (`Parent_Id`) REFERENCES `parent` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `User_Id_Student` FOREIGN KEY (`User_Id`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_game`
--

DROP TABLE IF EXISTS `student_game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_game` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Game_Id` int(11) DEFAULT NULL,
  `Student_Id` int(11) DEFAULT NULL,
  `Result` float DEFAULT NULL,
  `Duration` time DEFAULT NULL,
  `Last_Modification_Date` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Game_Id_SG_idx` (`Game_Id`),
  KEY `Student_Id_SG_idx` (`Student_Id`),
  CONSTRAINT `Game_Id_SG` FOREIGN KEY (`Game_Id`) REFERENCES `game` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Student_Id_SG` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_game`
--

LOCK TABLES `student_game` WRITE;
/*!40000 ALTER TABLE `student_game` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CV` varchar(45) DEFAULT NULL,
  `User_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `User_Id_idx` (`User_Id`),
  CONSTRAINT `User_Id` FOREIGN KEY (`User_Id`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_course`
--

DROP TABLE IF EXISTS `teacher_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_course` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Course_Id` int(11) DEFAULT NULL,
  `Class_Id` int(11) DEFAULT NULL,
  `Teacher_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Course_Id_TC_idx` (`Course_Id`),
  KEY `Class_Id_TC_idx` (`Class_Id`),
  KEY `Teacher_Id_TC_idx` (`Teacher_Id`),
  CONSTRAINT `Class_Id_TC` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Course_Id_TC` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Teacher_Id_TC` FOREIGN KEY (`Teacher_Id`) REFERENCES `teacher` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_course`
--

LOCK TABLES `teacher_course` WRITE;
/*!40000 ALTER TABLE `teacher_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(30) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `School_Id` int(11) DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `UniqueLog` (`Email`,`Role`),
  KEY `School_Id_idx` (`School_Id`),
  CONSTRAINT `School_Id_User` FOREIGN KEY (`School_Id`) REFERENCES `school` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workbook`
--

DROP TABLE IF EXISTS `workbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workbook` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) DEFAULT NULL,
  `Course_Id` int(11) DEFAULT NULL,
  `Class_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Course_Id_Wb_idx` (`Course_Id`),
  KEY `Class_Id_Wb_idx` (`Class_Id`),
  CONSTRAINT `Class_Id_Wb` FOREIGN KEY (`Class_Id`) REFERENCES `class` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Course_Id_Wb` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workbook`
--

LOCK TABLES `workbook` WRITE;
/*!40000 ALTER TABLE `workbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `workbook` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-24 10:32:55
