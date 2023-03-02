-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2020 at 06:12 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Book ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Book Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Book Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Book ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Book ID`, `Book Name`, `Book Price`, `Quantity`, `Image`) VALUES
('G/0005', 'Harry Porter', 700, 5, 'cart images/Harry potter.png'),
('G/0054', 'PHP & MYSQL', 500, 10, 'cart images/php.jpg'),
('G/0004', 'Java', 600, 2, 'cart images/java.jpg'),
('G00034', 'City of Dark Magic', 700, 5, 'cart images/City of dark magic.jpg'),
('G/00088', 'At the going down on the sun', 650, 6, 'cart images/Atthegoingdownofthesun_mockup.png'),
('G/00034', 'Information Technology', 600, 12, 'cart images/IT.jpg\" class=\"card-img-top'),
('G/01232', 'Python Language', 650, 12, 'cart images\\python.jpg'),
('G/00016', 'The nature of technology', 500, 15, 'cart images/The nature.jpg'),
('G/00456', 'Learn PHP', 700, 14, 'cart images/php2.jpg'),
('G/01212', 'Python Language', 650, 12, 'cart images\\python.jpg'),
('G/00567', 'World Whisperer', 400, 4, 'cart images\\World-Whisperer.jpg'),
('G/07651', 'Solar Bones', 550, 2, 'cart images\\story.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

DROP TABLE IF EXISTS `logintbl`;
CREATE TABLE IF NOT EXISTS `logintbl` (
  `UserName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`UserName`, `Password`) VALUES
('host', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Book Id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Full Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Card Number` int(11) NOT NULL,
  `Amount` float NOT NULL,
  PRIMARY KEY (`Book Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `UserName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ConfirmPassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `EmailAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UserName`, `Password`, `ConfirmPassword`, `FullName`, `PhoneNumber`, `EmailAddress`) VALUES
('Kamal', 'kamal', 'kamal', 'Kamal Jarapakasha', 712345781, 'kamal123@gmal.com'),
('Nisadi ', 'nisadi', 'nisadi', 'Nisadi Imalka', 775805744, 'nisadiimlka@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
