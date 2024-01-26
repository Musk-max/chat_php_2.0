-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2024 at 12:27 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `msg`, `date`) VALUES
(18, 'franck@gmail.com', 'c cmt\r\n', '2024-01-24 23:34:54'),
(17, 'franck@gmail.com', 'ca va ?', '2024-01-24 23:34:15'),
(16, 'franck@gmail.com', 'frère', '2024-01-24 23:34:06'),
(15, 'fh@gmail.com', 'ca va \r\n', '2024-01-24 22:40:06'),
(14, 'fh@gmail.com', 'oui ca va bien et toi ?', '2024-01-24 22:39:52'),
(13, 'fh@gmail.com', 'bonjour Franck ca va ?', '2024-01-24 22:39:38'),
(12, 'franck@gmail.com', 'fonjour fh', '2024-01-24 22:38:56'),
(19, 'franck@gmail.com', 'gaoudi', '2024-01-24 23:35:31'),
(20, 'franck@gmail.com', 'et la famille ca va ?', '2024-01-24 23:37:20'),
(21, 'franck@gmail.com', 'Bienvenu sur chat_php', '2024-01-25 20:15:23'),
(22, 'fh@gmail.com', 'Merci Franck', '2024-01-25 20:16:37'),
(23, 'franck@gmail.com', 'salut herve', '2024-01-25 20:49:31'),
(24, 'franck@gmail.com', 'comment vas tu Franck', '2024-01-25 20:49:54'),
(25, 'franck@gmail.com', 'bien et toi ', '2024-01-25 20:50:13'),
(26, 'franck@gmail.com', 'Bienvenu dans notre tutoriel', '2024-01-26 00:01:02'),
(27, 'fh@gmail.com', 'Merci franck', '2024-01-26 00:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`) VALUES
(1, 'franck@gmail.com', 'franck'),
(2, 'hervelagouesh@gmail.com', 'herve'),
(3, 'fh@gmail.com', 'fh'),
(4, 'E@gmail.com', 'QT4K\"dm+Y^a%PS7'),
(5, 'jean@gmail.com', 'jean'),
(6, 'kessie@gmail.com', 'kessie'),
(7, 'faye@gmail.com', 'faye'),
(8, 'junior@gmail.com', 'junior'),
(9, 'aka@gmail.com', 'aka'),
(10, 'kevin@gmail.com', 'kevin'),
(11, 'yanick@gmail.com', 'yanick'),
(12, 'toby@gmail.com', 'toby'),
(13, 'baki@gmail.com', 'baki'),
(14, 'user@gmail.com', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
