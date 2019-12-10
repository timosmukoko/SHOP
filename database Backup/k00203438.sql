CREATE DATABASE  IF NOT EXISTS `'ecommerce` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ecommerce`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Laptops'),(5,'Mouse'),(6,'Keyboard'),(13,'Smartphone'),(14,'Books'),(18,'Tablets');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dateOrdered` varchar(100) NOT NULL,
  `dateDelivered` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (11,'Timos Mukoko','123457','75, Kilteragh Dooradoyle, Dooradoyle','timos@yahoo.fr','(1) Samsung Galaxy, ','0','confirmed','04/20/17 02:29:48 AM','04/20/17 07:47:05 AM'),(12,'John O connel','654321','Pery square','john@yahoo.ie','(1) Dell Venue 11Pro, ','0','delivered','04/20/17 07:52:51 AM','04/20/17 07:53:18 AM');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imgUrl` text NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Price` double NOT NULL,
  `Category` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (83,'Dell.JPG','Dell Venue 11Pro','Operating System: Windows 8.1  Screen Size: 10.8',89.76,'Tablets'),(84,'Asus.JPG','ASUS X540YA','ASUS X540YA-XX016T 15.6',378,'Laptops'),(85,'Toshiba.JPG','TOSHIBA C55','TOSHIBA C55-C-11N I3-4005 750GB 4GB DVDSM W8.1 15.6\" BLACK',429,'Laptops'),(86,'Lenovo.JPG','Lenovo B50 - 10','LENOVO B50-10 80QR N3540 128GB SSD 4GB DVD WRITER WIN10 HOME ',349,'Laptops'),(87,'Fuji.JPG','FUJITSU LIFEBOOK ','FUJITSU LIFEBOOK A514 CI3 4005U 128GB 4GB 15.6IN W7P/W8.1P',489,'Laptops'),(92,'mouse1.JPG','Apple - Magic Mouse','Apple - Magic Mouse 2 - Silver',79.99,'Mouse'),(93,'Lenovo Za.JPG','Lenovo ZA000015GB','Lenovo ZA000015GB A2 A10 70 Blue Tablet 16GB ',239,'Tablets'),(94,'huawei.JPG','Huawei G6 Android','The G6 has a 4.5-inch, 4GB Memory,extertnal MicroSD up to 32GB,960Ã—540 ',350,'Smartphone'),(95,'Samsung Galaxy.JPG','Samsung Galaxy','Samsung Galaxy Tab A 7.0 T280 Wifi 8GB Metallic Black ',175,'Tablets'),(96,'SamsungGTab.JPG','Samsung Galaxy Tab','Samsung Galaxy Tab A 7.0 T280 Wifi 8GB Pearl White',175,'Tablets'),(97,'LenovoTab.JPG','Lenovo A7-10F','Lenovo A7-10F MTK84127 7',99,'Tablets'),(98,'iphone1.JPG','IPhone 5S 16GB','iPhone 5S 16GB White/Silver Unlocked Factory Refurbished - 6 Months Warranty',239,'Smartphone'),(99,'iphone2.JPG','IPhone 5S 16GB','iPhone 5S 16GB White/Gold Unlocked Factory Refurbished 6 Months Warranty',239,'Smartphone'),(100,'iphone3.JPG','IPhone 6 16GB','iPhone 6 16GB White/Silver Unlocked, Factory Refurbished - 6 months warranty',339,'Smartphone'),(101,'iphone4.JPG','IPhone 6S 16GB','iPhone 6S 16GB White/Rose Gold, Unlocked, Factory Refurbished - 6 months warranty',429,'Smartphone'),(102,'mouse2.JPG','Logitech - M325','Logitech - M325 Wireless Optical Mouse - Silver',19.99,'Mouse'),(103,'mouse3.JPG','Logitech - M310','Logitech - M310 Wireless Mouse - Silver',15.99,'Mouse'),(104,'mouse4.JPG','Logitech - G602','Logitech - G602 Wireless Gaming Mouse - Black',39.99,'Mouse'),(105,'keyboard1.JPG','T Wireless Keyboard','Logitech - K400 Plus Wireless Keyboard - Black',26.99,'Keyboard'),(106,'K830.JPG','K830','Logitech - K830 Illuminated Keyboard - Black',67.99,'Keyboard'),(107,'Mk270.JPG','MK270 Wireless','Logitech - MK270 Wireless Keyboard and Mouse - Black',24.99,'Keyboard'),(108,'4000.JPG','Ergonomic Keyboard','Microsoft - Natural Ergonomic Keyboard 4000 - Black',29.99,'Keyboard'),(109,'php1.JPG','PHP Cookbook','PHP Cookbook: Solutions & Examples for PHP Programmers',47,'Books'),(110,'c++.JPG','C++ Programming','C++ Programming in easy steps, 4th Edition',10.13,'Books'),(111,'csharp.JPG','Learn C# in One Day','Learn C# in One Day and Learn It Well: C# for Beginners with Hands-on ',10.51,'Books');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `userName` varchar(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `Lastname` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('tims','Timos','Mukoko','1234');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'administrator','bobby'),(2,'admin','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ecommerce'
--

--
-- Dumping routines for database 'ecommerce'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-22 23:41:53
