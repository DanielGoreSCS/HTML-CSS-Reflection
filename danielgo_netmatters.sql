-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2022 at 05:18 PM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danielgo_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `company`, `email`, `phone`, `subject`, `message`, `marketing`) VALUES
('Daniel Gore', 'Netmatters', 'daniel.gore@netmatters-scs.com', '07597802734', 'Test subject', 'Test message.', 1),
('John Doe', '', 'john.doe@example.com', '01234567891011', 'testing company name', 'this is a test to see how the company name gets logged', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_picture` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `theme` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `image`, `text`, `author_name`, `author_picture`, `date`, `theme`) VALUES
('A Revolutionised IT Infrastructure&colon; Case Study', 'img/news/april-notables-2022-bRIE.jpg', 'Netmatters has been building a strong reputation across Norfolk and Cambridge as the leading full&hyphen;se&period;&period;&period;', 'Netmatters', 'img/netmatters-ltd-VXAv.png', '15th June 2022', 'card-news-1'),
('Michael Grimshaw Achieves Long Service Award', 'img/news/scs-graduates-april-s2nt.jpg', 'The team at Netmatters are happy to congratulate Michael Grimshaw for achieving the Long Service Awa&period;&period;&period;', 'Netmatters', 'img/netmatters-ltd-VXAv.png', '15th June 2022', 'card-news-2'),
('Where to Spend Your Marketing Budget in 2022', 'img/news/senior-web-developer-8f6n.jpg', 'Marketing is an ever&hyphen;changing part of business&comma; and the consumer landscape has changed considerably&period;&period;&period;', 'Netmatters', 'img/netmatters-ltd-VXAv.png', '15th June 2022', 'card-news-3');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(14) NOT NULL,
  `map` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`name`, `image`, `address`, `phone`, `map`) VALUES
('Cambridge Office', '/img/offices/cambridge.jpg', 'Unit 1.31,<br>St John\'s Innovation Centre,<br>Cowley Road, Milton, Cambridge,<br>CB4 0WS', '01223 37 57 72', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.4463836928!2d0.15166901597154953!3d52.23527526504287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8711469d7de59%3A0x4ad66f1b36a452da!2sNetmatters%20Cambridge!5e0!3m2!1sen!2suk!4v1670250034318!5m2!1sen!2suk'),
('Wymondham Office', '/img/offices/wymondham.jpg', 'Unit 15,<br>Penfold Drive,<br>Gateway 11 Business Park,<br>Wymondham, Norfolk,<br>NR18 0WZ', '01603 70 40 20', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.6441990347134!2d1.1343817159809104!3d52.57604533982628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1670250610279!5m2!1sen!2suk'),
('Great Yarmouth Office', '/img/offices/yarmouth.jpg', 'Suite F23,<br>Beacon Innovation Centre,<br>Beacon Park, Gorleston,<br>Great Yarmouth, Norfolk,<br>NR31 7RA', '01493 60 32 04', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.757804159304!2d1.7108708159803367!3d52.555905741319876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Great%20Yarmouth!5e0!3m2!1sen!2suk!4v1670250748763!5m2!1sen!2suk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
