-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 11:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sampath`
--

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE IF NOT EXISTS `que` (
`id` int(11) NOT NULL,
  `problem` text NOT NULL,
  `answer` int(11) NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`id`, `problem`, `answer`, `ans1`, `ans2`, `ans3`) VALUES
(1, 'test problem 1', 2, '1answer  1', '1answer  2', '1answer  3'),
(2, 'test problem 2', 1, '2answer  1', '2answer  2', '2answer  3'),
(3, 'test problem 3', 3, '3answer  1', '3answer  2', '3answer  3'),
(4, 'test problem 4', 1, '4answer  1', '4answer  2', '4answer  3'),
(5, 'test problem 5', 3, '5answer  1', '5answer  2', '5answer  3'),
(6, 'test problem 6', 2, '6answer  1', '6answer  2', '6answer  3'),
(7, 'test problem 7', 2, '7answer  1', '7answer  2', '7answer  3'),
(8, 'test problem 8', 1, '8answer  1', '8answer  2', '8answer  3'),
(9, 'test problem 9', 3, '9answer  1', '9answer  2', '9answer  3'),
(10, 'test problem 10', 1, '10answer  1', '10answer  2', '10answer  3'),
(11, 'test problem 11', 3, '11answer  1', '11answer  2', '11answer  3'),
(12, 'test problem 12', 2, '12answer  1', '12answer  2', '12answer  3'),
(13, 'test problem 13', 2, '13answer  1', '13answer  2', '13answer  3'),
(14, 'question new', 2, 'ans 1', 'ans2', 'ans3'),
(15, '&#3508;&#3536;&#3505;&#3514;&#3495; &#3520;&#3538;&#3523;&#3503;&#3540;&#3512;', 3, '&#3520;&#3538;&#3523;&#3503;&#3540;&#3512; 1', '&#3520;&#3538;&#3523;&#3503;&#3540;&#3512; 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `sysuser`
--

CREATE TABLE IF NOT EXISTS `sysuser` (
  `nic` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sysuser`
--

INSERT INTO `sysuser` (`nic`, `username`, `date`) VALUES
(931663054, 'nipuna', '2016-05-02'),
(931212312, 'sanju', '2016-05-02'),
(840652483, 'SampathM', '2016-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nic` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nic`, `score`) VALUES
(1, 840652483, 40),
(2, 931212312, 50),
(3, 840652483, 20),
(4, 840652483, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `que`
--
ALTER TABLE `que`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
