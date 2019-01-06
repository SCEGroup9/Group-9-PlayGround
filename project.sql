-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2019 at 07:34 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `enters`
--

DROP TABLE IF EXISTS `enters`;
CREATE TABLE IF NOT EXISTS `enters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tDate` varchar(50) NOT NULL,
  `counts` int(255) NOT NULL,
  PRIMARY KEY (`id`,`tDate`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enters`
--

INSERT INTO `enters` (`id`, `tDate`, `counts`) VALUES
(1, '2018-12-10', 12),
(3, '2018-12-12', 12),
(4, '2018-12-13', 1),
(5, '2018-12-15', 1),
(6, '2018-12-17', 68),
(7, '2018-12-18', 12),
(8, '2018-12-22', 4),
(9, '2018-12-23', 55),
(10, '2018-12-24', 41),
(11, '2018-12-25', 5),
(12, '2018-12-26', 2),
(13, '2018-12-27', 22),
(14, '2018-12-29', 12),
(15, '2018-12-30', 30),
(16, '2018-12-31', 8),
(17, '2019-01-01', 3),
(18, '2019-01-02', 28);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `gamename` varchar(255) NOT NULL,
  `enemy` varchar(255) NOT NULL,
  `Gstatus` int(2) NOT NULL,
  `points` int(255) NOT NULL,
  `tDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `user`, `gamename`, `enemy`, `Gstatus`, `points`, `tDate`) VALUES
(1, 'sean', 'cards', 'mor', 1, 30, '2019-01-02'),
(2, 'mor', 'cards', 'sean', 0, 0, '2019-01-02'),
(3, 'sean', 'cards', 'mor', 1, 30, '2019-01-02'),
(4, 'mor', 'cards', 'sean', 0, 0, '2019-01-02'),
(5, 'sean', 'cards', 'mor', 1, 30, '2019-01-02'),
(6, 'mor', 'cards', 'sean', 0, 0, '2019-01-02'),
(7, 'mor', 'cards', 'sean', 1, 30, '2019-01-02'),
(8, 'sean', 'cards', 'mor', 0, 0, '2019-01-02'),
(9, 'sean', 'cards', 'mor', 1, 30, '2019-01-02'),
(10, 'mor', 'cards', 'sean', 0, 0, '2019-01-02'),
(11, 'mor', 'cards', 'sean', 1, 30, '2019-01-02'),
(12, 'sean', 'cards', 'mor', 0, 0, '2019-01-02'),
(13, 'orita', 'cards', 'daniel', 1, 30, '2019-01-02'),
(14, 'daniel', 'cards', 'orita', 0, 0, '2019-01-02'),
(15, 'orita', 'cards', 'daniel', 1, 30, '2019-01-02'),
(16, 'daniel', 'cards', 'orita', 0, 0, '2019-01-02'),
(17, 'orita', 'cards', 'inbal', 1, 30, '2019-01-02'),
(18, 'inbal', 'cards', 'orita', 0, 0, '2019-01-02'),
(19, 'lior', 'cards', 'mor', 1, 30, '2019-01-02'),
(20, 'mor', 'cards', 'lior', 0, 0, '2019-01-02'),
(21, 'mor', 'cards', 'lior', 1, 30, '2019-01-02'),
(22, 'lior', 'cards', 'mor', 0, 0, '2019-01-02'),
(23, 'yossi', 'cards', 'regev', 1, 30, '2019-01-02'),
(24, 'regev', 'cards', 'yossi', 0, 0, '2019-01-02'),
(25, 'yossi', 'cards', 'regev', 1, 30, '2019-01-02'),
(26, 'regev', 'cards', 'yossi', 0, 0, '2019-01-02'),
(27, 'yossi', 'cards', 'regev', 1, 30, '2019-01-02'),
(28, 'regev', 'cards', 'yossi', 0, 0, '2019-01-02'),
(29, 'regev', 'cards', 'lior', 1, 30, '2019-01-02'),
(30, 'lior', 'cards', 'regev', 0, 0, '2019-01-02'),
(31, 'inbal', 'cards', 'daniel', 1, 30, '2019-01-02'),
(32, 'daniel', 'cards', 'inbal', 0, 0, '2019-01-02'),
(33, 'daniel', 'cards', 'inbal', 1, 30, '2019-01-02'),
(34, 'inbal', 'cards', 'daniel', 0, 0, '2019-01-02'),
(35, 'Avi', 'cards', 'Yaron', 1, 30, '2019-01-02'),
(36, 'Yaron', 'cards', 'Avi', 0, 0, '2019-01-02'),
(37, 'Yaron', 'cards', 'Avi', 1, 30, '2019-01-02'),
(38, 'Avi', 'cards', 'Yaron', 0, 0, '2019-01-02'),
(39, 'daniel', 'cards', 'inbal', 1, 30, '2019-01-02'),
(40, 'inbal', 'cards', 'daniel', 0, 0, '2019-01-02'),
(41, 'daniel', 'cards', 'inbal', 1, 30, '2019-01-02'),
(42, 'inbal', 'cards', 'daniel', 0, 0, '2019-01-02'),
(43, 'inbal', 'cards', 'daniel', 1, 30, '2019-01-02'),
(44, 'daniel', 'cards', 'inbal', 0, 0, '2019-01-02'),
(45, 'inbal', 'cards', 'daniel', 1, 30, '2019-01-02'),
(46, 'daniel', 'cards', 'inbal', 0, 0, '2019-01-02'),
(47, 'inbal', 'cards', 'daniel', 1, 30, '2019-01-02'),
(48, 'daniel', 'cards', 'inbal', 0, 0, '2019-01-02'),
(49, 'sean', 'cards', 'Computer', 1, 30, '2019-01-02'),
(50, 'sean', 'cards', 'Computer', 0, 0, '2019-01-02'),
(51, 'Avi', 'checkers', 'sean', 1, 50, '2019-01-02'),
(52, 'sean', 'checkers', 'Avi', 0, 0, '2019-01-02'),
(53, 'sean', 'checkers', 'Avi', 1, 50, '2019-01-02'),
(54, 'Avi', 'checkers', 'sean', 0, 0, '2019-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Subj` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `FirstName`, `LastName`, `Email`, `Country`, `Subj`) VALUES
(24, 'mor', 'biton', 'mo1@nana10.co.il', 'Israel', 'I played checkers and liked it very much!'),
(23, 'ori', 'tabibi', 'ori121@gmail.com', 'Israel', 'Very good!'),
(22, 'Sean', 'Assolin', 'Sean1@walla.com', 'israel', 'Good!'),
(25, 'lior', 'dahan', 'lior@gmail.com', 'Israel', 'Well done!');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

DROP TABLE IF EXISTS `rules`;
CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nameofgame` varchar(256) NOT NULL,
  `Rules` varchar(1000) NOT NULL,
  `Points` varchar(500) NOT NULL,
  PRIMARY KEY (`id`,`Nameofgame`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `Nameofgame`, `Rules`, `Points`) VALUES
(1, 'Checkers', 'Checkers is played by two opponents, on opposite sides of the gameboard.One player has the dark pieces; the other has the light pieces.Players alternate turns. A player may not move an opponent\'s piece. A move consists of moving a piece diagonally to an adjacent unoccupied square. If the adjacent square contains an opponent\'s piece, and the square immediately beyond it is vacant, the piece may be captured (and removed from the game) by jumping over it.Only the dark squares of the checkered board are used. A piece may move only diagonally into an unoccupied square.Capturing is mandatory in most official rules, although some rule variations make capturing optional when presented.In almost all variants,the player without pieces remaining, or who cannot move due to being blocked, loses the game.', 'For each win, the winner gets 50 points.'),
(2, 'Cards', 'Each player turns up a card at the same time and the player with the higher card takes both cards and puts them, face down, on the bottom of his stack. If the cards are the same rank, it is War. Each player turns up one card face down and one card face up. The player with the higher cards takes both piles (six cards). If the turned-up cards are again the same rank, each player places another card face down and turns another card face up. The player with the higher card takes all 10 cards, and so on.', 'For each win, the winner gets 30 points.'),
(3, 'check', 'check </br> new</br> <br>line</br>', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Age` int(10) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `pswr` varchar(100) NOT NULL,
  `rnk` int(1) NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Age`, `Country`, `username`, `psw`, `pswr`, `rnk`) VALUES
(12, 'Sean', 'Assolin', 25, 'Israel', 'sean', '123456', '123456', 0),
(13, 'Mor', 'Dahan', 25, 'Israel', 'mor', '123456', '123456', 0),
(14, 'Daniel', 'Ben Yair', 25, 'Israel', 'daniel', '123456', '123456', 0),
(15, 'Inbal', 'Altan', 25, 'Israel', 'inbal', '123456', '123456', 0),
(17, 'ori', 'tabibi', 24, 'Israel', 'orita', 'orita4', 'orita4', 1),
(35, 'lior', 'roz', 25, 'israel', 'lior', '123', '123', 1),
(39, 'regev', 'avital', 26, 'Israel', 'regev', 'AB123456', 'AB123456', 1),
(40, 'yossi', 'biton', 26, 'Israel', 'yossi', 'AB123456', 'AB123456', 1),
(41, 'Avi', 'Dahan', 28, 'Israel', 'Avi', 'AB123456', 'AB123456', 1),
(42, 'Yaron', 'London', 36, 'Israel', 'Yaron', 'AA123456', 'AA123456', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
