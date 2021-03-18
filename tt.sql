-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ts`
--

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE `cons` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `line` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cons`
--

INSERT INTO `cons` (`id`, `email`, `phone`, `facebook`, `line`) VALUES
(1, 'jam@gmail.com', '0885693402', 'poramin jumprom', 'jamm jung'),
(2, 'taii@gmail.com', '0984038567', 'Taii chanuchit', 'Tai eiei');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `h_number` varchar(100) NOT NULL,
  `swine` varchar(20) NOT NULL,
  `h_dis` varchar(100) NOT NULL,
  `h_per` varchar(100) NOT NULL,
  `hpro` varchar(100) NOT NULL,
  `h_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `h_number`, `swine`, `h_dis`, `h_per`, `hpro`, `h_code`) VALUES
(1, '144', '124', 'หนองมะค่าโมง', 'บ้านด่านช้าง', 'สุพรรณบุรี','72180'),
(2, '122', '1', 'ศรีสำราญ', 'สองพี่น้อง', 'นครปฐม', '73180');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `p_num` char(13) NOT NULL,
  `date` date NOT NULL,
  `s_pe` int(11) NOT NULL,
  `session` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `stu_id`, `name`, `lastname`, `gender`, `p_num`, `date`, `s_pe`, `session`, `password`) VALUES
(1, 614259039, 'ปรมินทร์', 'จุมพรม', 'ชาย', '1234567890123', '2020-09-28', 2565, '61/50', '17580'),
(2, 614259005, 'จุฑามาศ', 'ชานุชิต', 'หญิง', '1785945263124', '2020-09-29', 2564, '61/47', '12340');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_code` varchar(100) NOT NULL,
  `w_mu` varchar(100) NOT NULL,
  `w_tum` varchar(100) NOT NULL,
  `w_per` varchar(100) NOT NULL,
  `w_por` varchar(100) NOT NULL,
  `w_pai` varchar(100) NOT NULL,
  `w_ps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `w_name`, `w_code`, `w_mu`, `w_tum`, `w_per`, `w_por`, `w_pai`, `w_ps`) VALUES
(1, '2', 'หนองมะค่าโมง', 'อำเภอด่านช้าง', 'สุพรรณบุรี', '72180', 'ceo', 'company', '136'),
(2, 'ว่าง', '-', '-', '-', '-', '-', '-', 'ว่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cons`
--
ALTER TABLE `cons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cons`
--
ALTER TABLE `cons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
