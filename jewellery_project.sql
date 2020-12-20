-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 08:27 AM
-- Server version: 10.1.30-MariaDB
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
-- Database: `jewellery_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pid` int(50) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pdes` varchar(300) NOT NULL,
  `pcost` float NOT NULL,
  `pimg` varchar(150) NOT NULL,
  `pqty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `comment_id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `userid` int(50) NOT NULL,
  `orderid` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone_no` bigint(12) NOT NULL,
  `housename` varchar(50) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`userid`, `orderid`, `firstname`, `lastname`, `phone_no`, `housename`, `address`, `city`, `postcode`, `country`, `state`, `date`, `time`) VALUES
(6, 1, 'aaa', 'bbb', 1234, 'ppp', 'kol', 'kol', 77777, 'india', 'wb', '2018-04-07', ''),
(4, 2, 'd', 'df', 9755, 'ghjk', 'iisbdu', 'mndh', 67800, 'hnn', 'gfjdk', '2018-11-30', ''),
(4, 3, 'hn', 'gv', 789, 'jhgfv', 'yujm', 'ghj', 6789, 'ghj', 'ghj', '2018-06-06', ''),
(6, 4, 'fghj', '', 567890, 'fghj', 'vbnm', 'fgbnmuj', 852, 'bnm', 'yhjnm', '2018-05-03', 'Evening (04:00 pm-07:00 pm)'),
(6, 5, 'ghn', '', 567890, 'ghj', 'fgbhnm', 'yh', 6789, 'hbgvb ', 'fgyuikj', '2018-05-02', 'Afternoon (12:00 pm-04:00 pm)'),
(6, 6, 'hgbn', '', 56789, 'fghn', 'fghjm', 'fgnm', 56789, 'ghj', 'ghj', '2018-04-04', 'Night (07:00 pm-09:00 pm)'),
(6, 7, 'bn', '', 6789, 'hj', 'ghnm,', 'ghjk', 67890, 'fghjk', 'fghj', '2018-05-05', 'Evening (04:00 pm-07:00 pm)'),
(6, 8, 'hnm', '', 7890, 'ghjk', 'bnm', 'fghjk', 987654, 'hjk', 'ghjk', '2018-07-07', 'Morning (09:00 am-12:00 pm)'),
(6, 9, 'hjmk', '', 7890, 'ghbnm', 'ghnm', 'hbkmjn', 567890, 'ghjm', 'ghnm', '2018-02-22', 'Morning (09:00 am-12:00 pm)'),
(6, 10, 'tghn', '', 456789, 'rfgbn ', 'rfvgbhjkmn', 'okjhbv', 56789, 'gb ', 'hn', '2018-06-06', 'Evening (04:00 pm-07:00 pm)'),
(6, 11, 'tgjcn', 'hghj', 56789, 'hhnb ', 'thjbjnj', 'tjnjkn', 567890, 'hhjnj', 'hugfhk', '2018-05-22', 'Morning (09:00 am-12:00 pm)'),
(6, 12, 'gdhjbd', 'gb', 789, 'gbbj ', 'gbjn', 'vbjj', 653, 'hjnkn', 'bjknk', '2018-06-06', 'Afternoon (12:00 pm-04:00 pm)'),
(6, 13, 'hgjmn', 'nj', 6789, '', 'hgj', 'hughv', 689889, 'hbjbjbb', 'bjbjhg', '2018-05-05', 'Evening (04:00 pm-07:00 pm)'),
(4, 14, 'bjbjdn', 'b', 6547, 'gbjb', 'gfn', 'bn', 687, 'hjbnm', 'uihn', '2018-05-02', 'Afternoon (12:00 pm-04:00 pm)'),
(4, 15, 'jihifh', 'fbjb', 6789, 'bjbnjn', 'ubjbn', 'nvbckn', 84659, 'nbjfnn', 'jrjr', '2018-04-14', 'Evening (04:00 pm-07:00 pm)'),
(4, 16, 'nnn', '', 7548, 'nbjb', 'bhvbjb', 'jbjggj', 589, 'vfgj', 'gygvjbn', '2018-05-02', 'Afternoon (12:00 pm-04:00 pm)'),
(4, 17, 'huhdih', 'hh', 6548, 'gjnkjb', 'bjbjn', 'bjbgjnb', 543489, 'nnkn', 'jjjj', '2018-05-03', 'Evening (04:00 pm-07:00 pm)'),
(4, 18, 'jhdihjbf', '', 56789, 'bbjb', 'bjhbvhbv', 'bhvhv', 87654, 'bb', 'gb', '2018-05-05', 'Afternoon (12:00 pm-04:00 pm)'),
(4, 19, 'hjhbh', '', 987654, 'bjbj', 'bbjbj', 'gubb', 689, 'hhj', 'hhh', '2018-06-06', 'Evening (04:00 pm-07:00 pm)');

-- --------------------------------------------------------

--
-- Table structure for table `kid_category`
--

CREATE TABLE `kid_category` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kid_category`
--

INSERT INTO `kid_category` (`id`, `name`) VALUES
('k1', 'Earrings'),
('k2', 'Lockets'),
('k3', 'Chains'),
('k4', 'Rings');

-- --------------------------------------------------------

--
-- Table structure for table `men_category`
--

CREATE TABLE `men_category` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_category`
--

INSERT INTO `men_category` (`id`, `name`) VALUES
('m1', 'Earrings'),
('m2', 'Chains'),
('m3', 'Lockets'),
('m4', 'Rings'),
('m5', 'Wristlet');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderid` int(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pdes` varchar(300) NOT NULL,
  `pcost` float NOT NULL,
  `pimg` varchar(150) NOT NULL,
  `pqty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderid`, `pid`, `pname`, `pdes`, `pcost`, `pimg`, `pqty`) VALUES
(17, 22, 'Men Bangle 8', 'Punjabi Bala', 600, 'images/bangle_2.jpeg', 1),
(17, 65, 'kids locket 1', 'Quality lockets', 600, 'images/klocket_1.jpg', 1),
(18, 65, 'kids locket 1', 'Quality lockets', 600, 'images/klocket_1.jpg', 5),
(18, 73, 'men earring 1', 'Handsome earrings', 600, 'images/mearring_1.jpg', 1),
(19, 58, 'kids earring 1', 'guranteed earrings', 300, 'images/kearring_1.jpg', 1),
(19, 66, 'kids locket 2', 'Quality lockets', 650, 'images/klocket_2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `userid` int(50) NOT NULL,
  `orderid` int(50) NOT NULL,
  `billcost` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`userid`, `orderid`, `billcost`) VALUES
(6, 13, NULL),
(4, 14, NULL),
(4, 15, NULL),
(4, 16, NULL),
(4, 17, NULL),
(4, 18, NULL),
(4, 19, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(50) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pdes` varchar(300) NOT NULL,
  `pcost` float NOT NULL,
  `pimg` varchar(150) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdes`, `pcost`, `pimg`, `cid`) VALUES
(1, ' xyz earrings', 'red earrings', 100, 'images/earring_1.jpeg', 'w1'),
(5, 'earring 2', 'pearl jhumka', 200, 'images/earring_2.jpeg', 'w1'),
(6, 'earring 3', 'pearl earring', 150, 'images/earring_3.jpeg', 'w1'),
(7, 'earring 4', 'pearl tops', 150, 'images/earring_4.jpeg', 'w1'),
(8, 'earring 5', 'sword earring', 180, 'images/earring_5.jpeg', 'w1'),
(9, 'earring 6', 'heart top', 150, 'images/earring_6.jpeg', 'w1'),
(10, 'earring 7', 'medium top', 150, 'images/earring_7.jpeg', 'w1'),
(11, 'earring 8', 'jhumka', 170, 'images/earring_8.jpeg', 'w1'),
(12, 'earring 9', 'jhumka', 170, 'images/earring_9.jpeg', 'w1'),
(13, 'earring 10', 'silver coloured', 170, 'images/earring_10.jpeg', 'w1'),
(14, 'earring 11', 'ring top', 170, 'images/earring_11.jpeg', 'w1'),
(15, 'earring 12', 'jhumka', 170, 'images/earring_12.jpeg', 'w1'),
(16, 'earring 13', 'jhumka', 170, 'images/earring_13.jpeg', 'w1'),
(17, 'earring 14', 'top', 150, 'images/earring_14.jpeg', 'w1'),
(18, 'earring 15', 'sui dhaga', 170, 'images/earring_15.jpeg', 'w1'),
(19, 'earring 16', 'back ring', 150, 'images/earring_16.jpeg', 'w1'),
(20, 'bangle 1', 'multi striped bangle', 400, 'images/bangle_1.jpeg', 'w2'),
(21, 'bangle 3', 'churi', 300, 'images/bangle_3.jpeg', 'w2'),
(22, 'Men Bangle 8', 'Punjabi Bala', 600, 'images/bangle_2.jpeg', 'm5'),
(23, 'Bracelet 1', 'Silver Coloured Bracelet', 450, 'images/bracelet_1.jpeg', 'w3'),
(24, 'Bracelet 2', 'Stone Bracelet', 450, 'images/bracelet_2.jpeg', 'w3'),
(25, 'Bracelet 3', 'Stone Bracelet', 450, 'images/bracelet_3.jpeg', 'w3'),
(26, 'Bracelet 4', 'Stone Bracelet', 450, 'images/bracelet_4.jpeg', 'w3'),
(27, 'Bracelet 5', 'Stone Bracelet', 450, 'images/bracelet_5.jpeg', 'w3'),
(28, 'Bracelet 6', 'Stone Bracelet', 450, 'images/bracelet_6.jpeg', 'w3'),
(29, 'Bracelet 7', 'Stone Bangle', 450, 'images/bracelet_7.jpeg', 'w3'),
(32, 'Necklace 1', 'Golden Necklace', 1450, 'images/necklace_01.jpg', 'w4'),
(33, 'Necklace 2', 'Golden Necklace', 1450, 'images/necklace_2.jpeg', 'w4'),
(34, 'Necklace 3', 'Stone Necklace', 1450, 'images/necklace_3.jpeg', 'w4'),
(35, 'Necklace 4', 'Stone Necklace', 1450, 'images/necklace_4.jpeg', 'w4'),
(36, 'Necklace 5', 'Stone Necklace', 1450, 'images/necklace_5.jpeg', 'w4'),
(37, 'Necklace 6', 'Golden Necklace', 1450, 'images/necklace_6.jpeg', 'w4'),
(38, 'Necklace 7', 'Golden Necklace', 1450, 'images/necklace_7.jpeg', 'w4'),
(39, 'Chain 1', 'Golden Chain', 300, 'images/chain_1.jpeg', 'w5'),
(40, 'Locket 1', 'Stone Locket', 300, 'images/locket_1.jpeg', 'w6'),
(41, 'Locket 2', 'Stone Locket', 300, 'images/locket_2.jpeg', 'w6'),
(42, 'Locket 3', 'Stone Locket', 300, 'images/locket_3.jpeg', 'w6'),
(43, 'Locket 4', 'Stone Locket', 300, 'images/locket_4.jpeg', 'w6'),
(44, 'Locket 5', 'Stone Locket', 300, 'images/locket_5.jpeg', 'w6'),
(46, 'Locket 7', 'Love Locket', 300, 'images/locket_7.jpeg', 'w6'),
(47, 'Locket 8', 'Love Pill Locket', 300, 'images/locket_8.jpeg', 'w6'),
(48, 'Locket 9', 'Swastik Locket', 300, 'images/locket_9.jpeg', 'w6'),
(49, 'Locket 10', 'Stone Locket', 300, 'images/locket_10.jpeg', 'w6'),
(50, 'Locket 11', 'Stone Locket', 300, 'images/locket_11.jpeg', 'w6'),
(51, 'Ring 1', 'Stone Ring', 350, 'images/ring_1.jpeg', 'w7'),
(52, 'Ring 2', 'Stone Ring', 350, 'images/ring_2.jpeg', 'w7'),
(53, 'Ring 3', 'Stone Ring', 350, 'images/ring_3.jpeg', 'w7'),
(54, 'Ring 4', 'Stone Ring', 350, 'images/ring_4.jpeg', 'w7'),
(55, 'Ring 5', 'Stone Ring', 350, 'images/ring_5.jpeg', 'w7'),
(56, 'Ring 6', 'Stone Ring', 350, 'images/ring_6.jpeg', 'w7'),
(57, 'Ring 7', 'Stone Ring', 350, 'images/ring_7.jpeg', 'w7'),
(58, 'kids earring 1', 'guranteed earrings', 300, 'images/kearring_1.jpg', 'k1'),
(59, 'kids earring 2', 'guranteed earrings', 300, 'images/kearring_2.jpg', 'k1'),
(60, 'kids earring 3', 'guranteed earrings', 400, 'images/kearring_3.jpg', 'k1'),
(61, 'kids earring 4', 'guranteed earrings', 400, 'images/kearring_4.jpg', 'k1'),
(62, 'kids earring 5', 'guranteed earrings', 400, 'images/kearring_5.jpg', 'k1'),
(63, 'kids earring 6', 'guranteed earrings', 500, 'images/kearring_6.jpg', 'k1'),
(64, 'kids earring 7', 'guranteed earrings', 450, 'images/kearring_7.jpg', 'k1'),
(65, 'kids locket 1', 'Quality lockets', 600, 'images/klocket_1.jpg', 'k2'),
(66, 'kids locket 2', 'Quality lockets', 650, 'images/klocket_2.jpg', 'k2'),
(67, 'kids locket 3', 'Quality lockets', 600, 'images/klocket_3.jpg', 'k2'),
(68, 'kids locket 4', 'Quality lockets', 700, 'images/klocket_4.jpg', 'k2'),
(69, 'kids locket 5', 'Quality lockets', 900, 'images/klocket_5.jpg', 'k2'),
(70, 'kids locket 6', 'Quality lockets', 650, 'images/klocket_6.jpg', 'k2'),
(71, 'kids locket 7', 'Quality lockets', 700, 'images/klocket_7.jpg', 'k2'),
(72, 'kids locket 8', 'Quality lockets', 750, 'images/klocket_8.jpg', 'k2'),
(73, 'men earring 1', 'Handsome earrings', 600, 'images/mearring_1.jpg', 'm1'),
(74, 'men earring 2', 'Handsome earrings', 600, 'images/mearring_2.jpg', 'm1'),
(75, 'men earring 3', 'Handsome earrings', 600, 'images/mearring_3.jpg', 'm1'),
(76, 'men locket 1', 'colour guranteed', 650, 'images/mlocket_1.jpg', 'm3'),
(77, 'men locket 2', 'colour guranteed', 650, 'images/mlocket_2.jpg', 'm3'),
(78, 'men locket 3', 'colour guranteed', 750, 'images/mlocket_3.jpg', 'm3'),
(79, 'men locket 4', 'colour guranteed', 700, 'images/mlocket_4.jpg', 'm3'),
(80, 'men locket 5', 'Football Locket', 600, 'images/locket_6.jpeg', 'm3'),
(81, 'Men Ring 1', 'silver ring', 550, 'images/mring_1.jpg', 'm4'),
(82, 'Men Ring 2', 'golden ring', 600, 'images/mring_2.jpg', 'm4'),
(83, 'Men Ring 3', 'golden ring', 450, 'images/mring_3.jpg', 'm4'),
(84, 'Men Ring 4', 'golden ring', 450, 'images/mring_4.jpg', 'm4'),
(85, 'Men Ring 5', 'golden ring', 450, 'images/mring_5.jpg', 'm4'),
(86, 'Men Ring 6', 'golden ring', 450, 'images/mring_6.jpg', 'm4'),
(87, 'Men Ring 7', 'silver ring', 400, 'images/mring_7.jpg', 'm4'),
(88, 'Men Ring 8', 'golden ring', 450, 'images/mring_8.jpg', 'm4'),
(89, 'Men Ring 9', 'golden ring', 450, 'images/mring_9.jpg', 'm4'),
(90, 'Men Ring 10', 'golden ring', 450, 'images/mring_10.jpg', 'm4'),
(91, 'Men Bangle 1', 'Punjabi bala', 600, 'images/mbangle_1.jpg', 'm5'),
(92, 'Men Bangle 2', 'Punjabi bala', 650, 'images/mbangle_2.jpg', 'm5'),
(93, 'Men Bangle 3', 'men bangle', 750, 'images/mbangle_3.jpg', 'm5'),
(94, 'Men Bangle 4', 'Punjabi bala', 500, 'images/mbangle_4.jpg', 'm5'),
(95, 'Men Bangle 5', 'men wristlet', 600, 'images/mbangle_5.jpg', 'm5'),
(96, 'Men Bangle 6', 'men wristlet', 600, 'images/mbangle_6.jpg', 'm5'),
(97, 'Men Bangle 7', 'men wristlet', 600, 'images/mbangle_7.jpg', 'm5');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(20) NOT NULL,
  `housename` varchar(50) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `fname`, `lname`, `email`, `phone`, `housename`, `address`, `city`, `postcode`, `country`, `state`, `password`) VALUES
(3, 'gyvgfgv', 'gbvbg', 'bfghnm@fgvbn', 42251, 'hghg', 'jbb', 'jhihihn', 420, 'dfghjk', 'state', '4550'),
(4, 'xscx', 'cxsc', 'dd@dd', 452, 'dwd', 'defgrgvr', 'defe', 456, 'dwf', 'state', 'papul'),
(6, 'Papul', 'Ghosh', 'papulgsh1997@gmail.com', 2147483647, 'MTSA', '34/1  Garanhata Street, Kolkata - 700006', 'Kolkata', 700006, 'India', 'West Bengal', '9830134875'),
(7, 'a', 'b', 'c@d', 100, '', 'p.road', 'dd', 1000, 'India', 'Bengal', '1555'),
(8, 'aaa', '', 'hnb@dhgf', 8989, 'djcbdc', 'kcn', 'mjcnb', 8989, 'jhch', 'ncn', '1234'),
(10, 'zzz', '', 'z@mm', 9999, '', 'pp', 'kk', 9999, 'mmm', 'uuu', '123'),
(11, 'rohan', '', 'kkk@gmail.com', 3214565, '', '9a gdhdg', 'kolkata', 700005, 'india', 'westbengal', '1111'),
(12, 'mm', '', 'j@sw', 88, 'nn', 'nnkn', 'nkn', 4, 'mnm', 'mm', '123'),
(14, 'h', '', 's@q', 444, '', 'kmj', 'jjjjjjjj', 789, 'pnkmk', '', '100'),
(15, 'mmj', '', 'ju@f', 555, '', 'nnnn', 'de', 33, '', 'eee', '100'),
(16, 'kk', '', 'a@hb', 6789, '', 'ghjm', 'hj', 5678, 'vgb', 'fgbhn', '123'),
(17, 'f', '', 'd@f', 789, '', 'dsxc', 'j', 9, 'nm', 'nm', '455'),
(18, 'xsds', '', 'd@dfvbn', 567890, '', 'dbnm', 'nj', 89, 'hj', 'kn', '455');

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE `special_offers` (
  `pid` int(50) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pdes` varchar(300) NOT NULL,
  `pcost` float NOT NULL,
  `pimg` varchar(150) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_offers`
--

INSERT INTO `special_offers` (`pid`, `pname`, `pdes`, `pcost`, `pimg`, `cid`) VALUES
(8, 'earring 5', 'sword earring', 180, 'images/earring_5.jpeg', 'w1'),
(20, 'bangle 1', 'multi striped bangle', 400, 'images/bangle_1.jpeg', 'w2'),
(22, 'Men Bangle', 'Punjabi Bala', 300, 'images/bangle_2.jpeg', 'm5'),
(24, 'Bracelet 2', 'Stone Bracelet', 450, 'images/bracelet_2.jpeg', 'w3'),
(34, 'Necklace 3', 'Stone Necklace', 1450, 'images/necklace_3.jpeg', 'w4'),
(42, 'Locket 3', 'Stone Locket', 300, 'images/locket_3.jpeg', 'w6'),
(47, 'Locket 8', 'Love Pill Locket', 300, 'images/locket_8.jpeg', 'w6'),
(54, 'Ring 4', 'Stone Ring', 350, 'images/ring_4.jpeg', 'w7');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_collection`
--

CREATE TABLE `wedding_collection` (
  `pid` int(50) NOT NULL,
  `pname` varchar(150) NOT NULL,
  `pdes` varchar(300) NOT NULL,
  `pcost` float NOT NULL,
  `pimg` varchar(150) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wedding_collection`
--

INSERT INTO `wedding_collection` (`pid`, `pname`, `pdes`, `pcost`, `pimg`, `cid`) VALUES
(15, 'earring 12', 'jhumka', 170, 'images/earring_12.jpeg', 'w1'),
(21, 'bangle 3', 'churi', 300, 'images/bangle_3.jpeg', 'w2'),
(22, 'Men Bangle', 'Punjabi Bala', 300, 'images/bangle_2.jpeg', 'm5'),
(26, 'Bracelet 4', 'Stone Bracelet', 450, 'images/bracelet_4.jpeg', 'w3'),
(34, 'Necklace 3', 'Stone Necklace', 1450, 'images/necklace_3.jpeg', 'w4'),
(37, 'Necklace 6', 'Golden Necklace', 1450, 'images/necklace_6.jpeg', 'w4'),
(52, 'Ring 2', 'Stone Ring', 350, 'images/ring_2.jpeg', 'w7');

-- --------------------------------------------------------

--
-- Table structure for table `women_category`
--

CREATE TABLE `women_category` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women_category`
--

INSERT INTO `women_category` (`id`, `name`) VALUES
('w1', 'Earrings'),
('w2', 'Bangles'),
('w3', 'Bracelets'),
('w4', 'necklaces'),
('w5', 'Chains'),
('w6', 'Lockets'),
('w7', 'Rings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `kid_category`
--
ALTER TABLE `kid_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men_category`
--
ALTER TABLE `men_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `wedding_collection`
--
ALTER TABLE `wedding_collection`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `women_category`
--
ALTER TABLE `women_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `orderid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
