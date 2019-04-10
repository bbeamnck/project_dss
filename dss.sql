-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 08:45 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `gram` int(11) NOT NULL,
  `Kcal` int(11) NOT NULL,
  `worth` int(11) NOT NULL,
  `full` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `price`, `gram`, `Kcal`, `worth`, `full`, `name`, `picture`) VALUES
(20, 5, 13, 70, 5, 5, 'เลย์(ทุกรสชาติ) น้ำหนักสุทธิ 13 กรัม', '1.jpg'),
(21, 5, 14, 70, 5, 5, 'ไวโอเลต โกลด์', '2.jpg'),
(22, 5, 13, 70, 5, 5, 'Seka Potato Chip', '3.jpg'),
(23, 5, 13, 50, 4, 5, 'แคมปัส รสช็อกโกแลต', '4.jpg'),
(24, 5, 5, 15, 1, 1, 'Bento', '5.jpg'),
(25, 6, 45, 200, 4, 3, 'มินิปังกรอบ', '6.png'),
(26, 7, 90, 240, 5, 5, 'มินิแพ๊ค ขนมปังทุกรสชาติ', '7.png'),
(27, 10, 60, 240, 4, 3, 'โดรายากิ(ทุกรสชาติ)', '8.png'),
(28, 10, 80, 230, 4, 4, 'ขนมปังสอดไส้สังขยา', '9.png'),
(29, 10, 70, 250, 5, 3, 'ขนมปังสอดไส้เผือกมะพร้าวอ่อน ', '10.png'),
(30, 10, 60, 180, 3, 3, 'ขนมปังสอดไส้ไก่หยองน้ำพริกเผากุ้ง', '11.png'),
(31, 10, 120, 290, 5, 5, 'ดับเบิ้ลแซนด์วิชกระเป๋า รส ไส้ปู้อัดมายองเนส', '12.jpg'),
(32, 10, 60, 170, 3, 3, 'โดรายากิไส้ถั่วแดงอะซูกิ', '13.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
