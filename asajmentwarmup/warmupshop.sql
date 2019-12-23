-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2018 at 03:53 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warmup`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `cId` int(10) UNSIGNED NOT NULL,
  `cName` varchar(50) DEFAULT NULL,
  `cDescription` varchar(200) DEFAULT NULL,
  `lastModifiedBy` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`cId`, `cName`, `cDescription`, `lastModifiedBy`) VALUES
(1, 'COFFEE', '', 2),
(2, 'TEA', '', 2),
(3, 'FREEZE', '', 2),
(4, 'Banh my', '', 2),
(5, 'CAKE', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `iId` varchar(10) NOT NULL,
  `iName` varchar(50) DEFAULT NULL,
  `iDescription` varchar(500) DEFAULT NULL,
  `iPrice` int(10) UNSIGNED DEFAULT NULL,
  `iStatus` varchar(20) DEFAULT NULL,
  `iSize` varchar(20) DEFAULT NULL,
  `iImage` varchar(300) DEFAULT NULL,
  `catalogueId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iId`, `iName`, `iDescription`, `iPrice`, `iStatus`, `iSize`, `iImage`, `catalogueId`) VALUES
('WARMD00001', 'AMERICANO', 'Americano táº¡i Highlands Coffee l&agrave; sá»± káº¿t há»£p giá»¯a c&agrave; ph&ecirc; espresso th&ecirc;m v&agrave;o nÆ°á»›c Ä‘un s&ocirc;i. Báº¡n c&oacute; thá»ƒ t&ugrave;y th&iacute;ch lá»±a chá»n uá»‘ng n&oacute;ng hoáº·c d&ugrave;ng chung vá»›i Ä‘&aacute;.', 50000, 'warm', 'ML', 'WARMD00001.png', 1),
('WARMD10002', 'PHIN ÄEN N&Oacute;NG', 'D&agrave;nh cho nhá»¯ng t&iacute;n Ä‘á»“ c&agrave; ph&ecirc; Ä‘&iacute;ch thá»±c! HÆ°Æ¡ng vá»‹ c&agrave; ph&ecirc; truyá»n thá»‘ng Ä‘Æ°á»£c phá»‘i trá»™n Ä‘á»™c Ä‘&aacute;o táº¡i Highlands. C&agrave; ph&ecirc; Ä‘áº­m Ä‘&agrave; pha tá»« Phin, cho th&ecirc;m 1 th&igrave;a Ä‘Æ°á»ng, mang Ä‘áº¿n vá»‹ c&agrave; ph&ecirc; Ä‘áº­m Ä‘&agrave; cháº¥t Phin. ', 29000, 'Warm', 'S', 'WARMD10002.png', 1),
('WARMD30001', 'FREEZE TR&Agrave; XANH', 'Thá»©c uá»‘ng ráº¥t Ä‘Æ°á»£c Æ°a chuá»™ng! Tr&agrave; xanh thÆ°á»£ng háº¡ng tá»« cao nguy&ecirc;n Viá»‡t Nam, káº¿t há»£p c&ugrave;ng Ä‘&aacute; xay, tháº¡ch tr&agrave; dai dai, thÆ¡m ngon v&agrave; má»™t lá»›p kem d&agrave;y phá»§ l&ecirc;n tr&ecirc;n v&ocirc; c&ugrave;ng háº¥p dáº«n. Freeze Tr&agrave; Xanh thÆ¡m ngon, m&aacute;t láº¡nh, chinh phá»¥c báº¥t cá»© ai!', 19000, 'new-cold', 'SML', 'WARMD30001.png', 3),
('WARMF00001', 'X&Iacute;U Máº I', 'B&aacute;nh m&igrave; Viá»‡t Nam gi&ograve;n thÆ¡m, vá»›i nh&acirc;n thá»‹t vi&ecirc;n háº¥p dáº«n, phá»§ th&ecirc;m má»™t lá»›p nÆ°á»›c sá»‘t c&agrave; chua ngá»t, c&ugrave;ng vá»›i rau tÆ°Æ¡i v&agrave; gia vá»‹ Ä‘áº­m Ä‘&agrave;.', 19000, 'traditional', 'no size', 'WARMF00001.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `username`, `password`, `status`) VALUES
(1, 'admin', '93dd646db7ac1de0ea652af8c4c22820', '1'),
(2, 'nguyentrungduc', '93dd646db7ac1de0ea652af8c4c22820', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`cId`),
  ADD KEY `lastModifiedBy` (`lastModifiedBy`),
  ADD KEY `cName` (`cName`(7));

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iId`),
  ADD KEY `iName` (`iName`(10)),
  ADD KEY `catalogueId` (`catalogueId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD KEY `username` (`username`(10));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `cId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD CONSTRAINT `catalogue_ibfk_1` FOREIGN KEY (`lastModifiedBy`) REFERENCES `user` (`uId`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`catalogueId`) REFERENCES `catalogue` (`cId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
