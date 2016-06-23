-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 11:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demozend`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_pic` varchar(200) NOT NULL,
  `user_mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`, `user_address`, `user_phone`, `user_pic`, `user_mail`) VALUES
(13, 'phuong', '23456789', 'Ha Ha', '0987456', '', ''),
(14, 'phuonganh', '12345678', 'Ha Nam', '0123654789', '', ''),
(23, 'phuonganh', '23456789', 'Ha Nam', '0987456321', '', ''),
(29, 'phuonganh', '12345678', 'Ha Ha', '0987456321', '', ''),
(30, 'Thang', '1234567890', 'Ha Nam', '0987456321', '', ''),
(32, 'phuong', '34567890', 'Ha Ha', '0987456321', '', ''),
(34, 'phuonganh', '2345678', 'Ha Nam', '0987456321', '', '3ewr5ty6uiop[]'),
(35, '12345678', 'jjkavldfjvadf', 'Ha Nam', '0987456321', '', '3ewr5ty6uiop[]'),
(36, 'phuonganh', 'sdfghjkl', 'Ha Nam', '0987456', '', '3ewr5ty6uiop[]'),
(37, 'phuonganh', '234567890', 'Ha Nam', '0987456321', '', '3ewr5ty6uiop[]'),
(39, 'pubby', '', 'Ha Ha', '0987456321', '', '3ewr5ty6uiop[]'),
(40, 'Æ°', 'adf', 'adf', 'adf', '', 'adf'),
(41, '1', '1', '1', '1', '', '1'),
(42, '1', '', '1', '1', '', '1@gmail'),
(43, '1', '1', '1', '1', '', 'PHUONGANH@GMAIL'),
(44, 'A', 'a', 'a', 'a', '', 'a@aadfad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
