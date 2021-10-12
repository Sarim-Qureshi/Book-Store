-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2021 at 09:35 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `username` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `last_message` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`username`, `contact`, `last_message`, `timestamp`) VALUES
('vmor@ks.cce', 'sarim.asq@gmail.com', 'Hey', '2021-10-12 14:28:38'),
('abc@xyz.z', 'a@a.com', 'Dammit', '2021-10-17 14:16:36'),
('abc@xyz.z', 'vmor@ks.cce', 'Good to hear', '2021-10-12 14:02:55'),
('vmor@ks.cce', 'kk@kk.k', 'Good morning', '2021-10-12 14:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `datetime`) VALUES
(1, 'Kane Williamson', 'Kane Stuart Williamson is a New Zealand international cricketer who is currently the captain of the New Zealand national team in all formats. He is a right-handed batsman and an occasional off spin bowler. Williamson made his first-class cricket debut in December 2007', '2021-10-20 22:04:06'),
(1, 'David warner', 'David Andrew Warner is an Australian international cricketer and a former captain of the Australian national team. A left-handed opening batsman, Warner is the first Australian cricketer in 132 years to be selected for a national team in any format without experience in first-class cricket.', '2021-10-02 05:04:06'),
(2, 'abc', 'Might Guy', '2021-10-02 12:12:08'),
(1, 'abc', 'avc', '2021-10-02 12:09:58'),
(10, 'abc', 'Yo', '2021-10-02 14:07:46'),
(13, 'abc', '&lt;script&gt;alert(\"Hello\");&lt;/script&gt;', '2021-10-02 14:29:06'),
(8, 'abc', '&lt;h1&gt;&lt;/h1&gt;', '2021-10-02 14:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`from`, `to`, `datetime`, `message`) VALUES
('abc@xyz.z', 'vmor@ks.cce', '2021-10-12 12:44:23', 'How you doing'),
('abc@xyz.z', 'vmor@ks.cce', '2021-10-12 12:33:16', 'Hey'),
('vmor@ks.cce', 'abc@xyz.z', '2021-10-12 14:01:30', 'I am fine'),
('abc@xyz.z', 'vmor@ks.cce', '2021-10-12 14:02:17', 'I was interested in your book which you uploaded'),
('vmor@ks.cce', 'abc@xyz.z', '2021-10-12 14:02:55', 'Good to hear'),
('vmor@ks.cce', 'sarim.asq@gmail.com', '2021-10-12 14:04:16', 'Hello'),
('sarim.asq@gmail.com', 'vmor@ks.cce', '2021-10-12 14:28:38', 'Hey'),
('kk@kk.k', 'vmor@ks.cce', '2021-10-12 14:30:31', 'Hello'),
('vmor@ks.cce', 'kk@kk.k', '2021-10-12 14:31:10', 'Good morning');

-- --------------------------------------------------------

--
-- Table structure for table `entrybook`
--

DROP TABLE IF EXISTS `entrybook`;
CREATE TABLE IF NOT EXISTS `entrybook` (
  `uploaded_by` varchar(50) NOT NULL,
  `bookid` int NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_image` varchar(250) NOT NULL,
  `author` varchar(100) NOT NULL,
  `rent` tinyint NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `entrybook`
--

INSERT INTO `entrybook` (`uploaded_by`, `bookid`, `book_name`, `book_image`, `author`, `rent`, `category`, `price`) VALUES
('shivam.prajapati_19@sakec.ac.in', 807716029, 'hero', '', 'dfds', 0, '1', 50),
('shivam.prajapati_19@sakec.ac.in', 875677398, 'harry', 'peakpx.jpg', 'dfds', 0, '1', 50),
('', 1590910806, 'freedom', 'peakpx.jpg', 'dfds', 0, '2', 50),
('shivam.prajapati_19@sakec.ac.in', 1629481422, 'hero', 'peakpx.jpg', 'dfds', 0, '1', 50),
('', 1875990789, 'hereo', 'peakpx.jpg', 'dfds', 0, '0', 50),
('', 2121963916, 'helo', 'peakpx.jpg', 'dfds', 0, '1', 50),
('', 2130119357, 'fdfs', 'peakpx(3).jpg', 'jdlf', 0, '1', 50),
('vmor@ks.cce', 1527355982, 'ABC', 'IMG_20200711_220459.jpg', 'Kane', 0, '2', 10000),
('abc@xyz.z', 1283975186, 'John', 'crossword.png', 'Kane', 0, '1', 1000),
('sarim.asq@gmail.com', 1836767605, 'Korth DBMS', 'IMG_20210211_115631.jpg', 'Korth', 0, '2', 500);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`title`, `description`, `created`) VALUES
('The Big Bang', 'The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.', '2021-09-08'),
('The Jungle', 'The Jungle is a 1906 novel by the American journalist and novelist Upton Sinclair. The novel portrays the harsh conditions and exploited lives of immigrants in the United States in Chicago and similar industrialized cities.', '2021-09-16'),
('The Sea', 'A luminous novel about love, loss, and the unpredictable power of memory. The narrator is Max Morden, a middle-aged Irishman who, soon after his wife\'s death, has gone back to the seaside town where he spent his summer holidays as a child—a retreat from the grief, anger, and numbness of his life without her.\r\n', '2021-09-01'),
('Monster', 'Monster.com is a global employment website owned and operated by Monster Worldwide, Inc. It was created in 1999 through the merger of The Monster Board and Online Career Center. It is a subsidiary of Randstad Holding, a Dutch multinational human resource consulting firm, and is headquartered in Weston, Massachusetts', '2021-09-18'),
('Moon', 'The Moon is Earth\'s only natural satellite. At about one-quarter the diameter of Earth, it is the largest natural satellite in the Solar System relative to the size of its planet, the fifth largest satellite in the Solar System overall, and is larger than any known dwarf planet. ', '2021-09-10'),
('Mike', 'abcd', '2021-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `forumnew`
--

DROP TABLE IF EXISTS `forumnew`;
CREATE TABLE IF NOT EXISTS `forumnew` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `started` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `forumnew`
--

INSERT INTO `forumnew` (`id`, `title`, `description`, `created`, `started`) VALUES
(1, 'Big Bang', 'The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.', '2021-10-27', 'kane'),
(2, 'Might', 'The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.', '2021-10-13', 'kane'),
(3, 'Big Bang', 'The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.', '2021-10-27', 'kane'),
(4, 'Might', 'The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.The universe began, scientists believe, with every speck of its energy jammed into a very tiny point. This extremely dense point exploded with unimaginable force, creating matter and propelling it outward to make the billions of galaxies of our vast universe. Astrophysicists dubbed this titanic explosion the Big Bang.', '2021-10-13', 'kane'),
(5, 'Rio', 'To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use display: flex, allowing easy alignment of content thanks to our margin and flexbox utilities.\r\n\r\nToasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.', '2021-10-21', 'kane'),
(6, 'Jio', 'To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use display: flex, allowing easy alignment of content thanks to our margin and flexbox utilities.\r\n\r\nToasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.', '2021-10-12', 'kane'),
(7, 'John', 'To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use display: flex, allowing easy alignment of content thanks to our margin and flexbox utilities.\r\n\r\nToasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.', '2021-10-04', 'kane'),
(8, 'River', 'To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use display: flex, allowing easy alignment of content thanks to our margin and flexbox utilities.\r\n\r\nToasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.', '2021-10-28', 'kane'),
(9, 'Diamond', 'Diamond is a form of the element carbon with its atoms arranged in a crystal structure called diamond cubic. At room temperature and pressure, another solid form of carbon known as graphite is the chemically stable form of carbon, but diamond almost never converts to it.', '2021-10-01', 'mike'),
(10, 'kangaroo', 'The kangaroo is a marsupial from the family Macropodidae. In common use the term is used to describe the largest species from this family, the red kangaroo, as well as the antilopine kangaroo, eastern grey kangaroo, and western grey kangaroo. Kangaroos are indigenous to Australia and New Guinea. ', '2021-10-02', 'abc'),
(11, 'Monkey', ' &lt;div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\"&gt;\r\n            © &lt;script&gt;\r\n            document.write(new Date().getFullYear())\r\n            &lt;/script&gt; Copyright: Book Store\r\n        &lt;/div&gt;', '2021-10-02', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `phone`, `password`) VALUES
('aber', 'a@a.com', 2147483647, '$2y$10$hR0GY4Lfhhy32Ir0JFYi7ucKW1dPqvxkLi2Oa9Pq/QamImCWOKrfe'),
('abc', 'abc@xyz.z', 2147483647, '$2y$10$coGXSXETNmqQfya8CkS7W.3UtdlBKlhs5JikRlfasd8Me/oYjFj3O'),
('Zeus', 'kk@kk.k', 2147483647, '$2y$10$QBAgSz.lMhP27hHmbfFa8.lXDtwkvwyFTJeeLZ4JrerMM0PvYxu12'),
('Sarim Qureshi', 'sarim.asq@gmail.com', 2147483647, '$2y$10$uqVegEBs7sckurXwbabhoO5KBmtkpHJjA/b/SBS7gyHkR70OdG6rq'),
('dfd', 'shivam.prajapati_19@sakec.ac.in', 1234567890, '$2y$10$RXItOhHJpRZibC0h82ONr.Jr3Ne7pHftXPkFdYKy7dWkEn7oQRroK'),
('name', 'vmor@ks.cce', 2147483647, '$2y$10$coGXSXETNmqQfya8CkS7W.3UtdlBKlhs5JikRlfasd8Me/oYjFj3O');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `serialno` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`serialno`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serialno`, `username`, `password`) VALUES
(2, 'shivam.prajapati_19@sakec.ac.in', '$2y$10$RXItOhHJpRZibC0h82ONr.Jr3Ne7pHftXPkFdYKy7dWkEn7oQRroK'),
(3, 'abc@xyz.z', '$2y$10$coGXSXETNmqQfya8CkS7W.3UtdlBKlhs5JikRlfasd8Me/oYjFj3O'),
(4, 'vmor@ks.cce', '$2y$10$coGXSXETNmqQfya8CkS7W.3UtdlBKlhs5JikRlfasd8Me/oYjFj3O'),
(8, 'a@a.com', '$2y$10$hR0GY4Lfhhy32Ir0JFYi7ucKW1dPqvxkLi2Oa9Pq/QamImCWOKrfe'),
(9, 'sarim.asq@gmail.com', '$2y$10$uqVegEBs7sckurXwbabhoO5KBmtkpHJjA/b/SBS7gyHkR70OdG6rq'),
(10, 'sarim.asq@gmail.com', '$2y$10$oB4md1MkriqWrA.DRjaIAOL36.I/CgdxH7t2dnrRJjbXALsQ/9UcG'),
(11, 'sarim.asq@gmail.com', '$2y$10$qKrS7WH2RFPccIwl1Dr7uuug2Bvzj12/Tc.YWA/fdIgtzdTy/AzLq'),
(12, 'kk@kk.k', '$2y$10$QBAgSz.lMhP27hHmbfFa8.lXDtwkvwyFTJeeLZ4JrerMM0PvYxu12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
