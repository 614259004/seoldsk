-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 04:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seoldnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `se_studentid` int(9) NOT NULL,
  `se_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`se_studentid`, `se_password`) VALUES
(1, 'dc5c7986daef50c1e02ab09b442ee34f'),
(604259010, 'ea20a043c08f5168d4409ff4144f32e2'),
(604259011, '84eb13cfed01764d9c401219faa56d53'),
(604259013, 'c0279f73075a52e1a7dea35065bc8c80'),
(614259004, '004'),
(614259008, 'a13ee062eff9d7295bfc800a11f33704'),
(614259013, '441954d29ad2a375cef8ea524a2c7e73'),
(614259018, '7658d0d2112eb265d6496cbac9de1e24'),
(614259040, '21addf589817401ad295073cf611e4b9'),
(614259043, '2f1ee6251bc23a0f35118b54170177cb'),
(614259052, 'a71d83915f8839e1da511021db1b3aa0');

-- --------------------------------------------------------

--
-- Table structure for table `se_register`
--

CREATE TABLE `se_register` (
  `se_studentid` int(9) NOT NULL,
  `se_numna` varchar(255) NOT NULL,
  `se_name` varchar(255) NOT NULL,
  `se_lastname` varchar(255) NOT NULL,
  `se_birthday` varchar(255) NOT NULL,
  `se_idcard` char(13) NOT NULL,
  `se_tel` char(10) NOT NULL,
  `se_yearend` varchar(255) DEFAULT NULL,
  `se_skill` varchar(255) NOT NULL,
  `se_facebook` varchar(255) NOT NULL,
  `se_email` varchar(255) NOT NULL,
  `se_lakete` varchar(255) NOT NULL,
  `se_mu` varchar(255) NOT NULL,
  `se_district` varchar(255) NOT NULL,
  `se_aumpa` varchar(255) NOT NULL,
  `se_province` varchar(255) NOT NULL,
  `se_status_id` int(1) NOT NULL,
  `S_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `se_register`
--

INSERT INTO `se_register` (`se_studentid`, `se_numna`, `se_name`, `se_lastname`, `se_birthday`, `se_idcard`, `se_tel`, `se_yearend`, `se_skill`, `se_facebook`, `se_email`, `se_lakete`, `se_mu`, `se_district`, `se_aumpa`, `se_province`, `se_status_id`, `S_img`) VALUES
(1, 'นาย', 'นฤพล', 'สุวรรณวิจิตร', 'ไม่รู้ครับ', '173xxxxxxxxxx', 'xxxxxxxxxx', '2564 ', 'เขียนเว็บไซต์ ', 'Naruapon Suwanwijit', 'Naruapon@webmail.npru.ac.th ', 'xxx/xx', 'x', 'xxxx', 'xxxxx', 'กาญจนบุรี', 2, '1603822502_pws.jpg'),
(604259010, 'นางสาว', 'สุพิชา', 'เนตรสุวรรณ', '27 มีนาคม 1999', '173xxxxxxxxxx', '0645088848', '2564', 'เขียนเว็บไซต์', 'Stamp Supicha', '604259010@webmail.npru.ac.th  ', '19/13', '6 ', 'นาดี', 'เมือง', 'สมุทรสาคร', 2, '1603822731_stamp.jpg'),
(604259011, 'นางสาว', 'สุภัทรา', 'สัตย์จริง', '1 ธันวาคม 1998', '198xxxxxxxxxx', '091xxxxxxx', '2564', 'กิน ', 'Tai Supatra', '604259011@webmail.npru.ac.th  ', 'xx', 'xx', 'xx', 'xxxx', 'เพชรบุรี', 2, '1603823137_tai.jpg'),
(604259013, 'นาย', 'อานนท์', 'ภู่เกิด', '29 ตุลาคม 1998', '173xxxxxxxxxx', '085xxxxxxx', '2564', 'ขับรถ', 'Arnon Phukerd', '604259013@webmail.npru.ac.th  ', 'x/x', 'x', 'xxx', 'xxx', 'ราชบุรี', 2, '1603822981_arm.jpg'),
(614259004, 'นาย', 'jirayuk', 'แซ่ลิ้ม', '05 พฤษภาคม 2000', '1730601223791', '0614711894', '2564 ', 'ถ่ายรูป', 'jirayuk sae-lim', '614259004@webmail.npru.ac.th', '19/13', '6', 'นาดี   ', 'เมือง', 'สมุทรสาคร  ', 3, '1603822809_def.jpg'),
(614259008, 'นางสาว', 'ชนากาญ', 'นวลพุ่ม', '11 กรกฏาคม 1999', '178xxxxxxxxxx', '091xxxxxxx', '2564', 'ซิทอัพ', 'Chanakan Noulpum', '614259008@webmail.npru.ac.th', 'xx/xx', 'x', 'xxxxxx', 'xxxxxx', 'ราชบุรี', 2, '1603822165_new.jpg'),
(614259013, 'นาย', 'ณัฐนัย', 'ตีรกานนท์', 'xx xxx xxxxx', '186xxxxxxxxxx', '098xxxxxxx', '2568', 'กิน', '', '614259013@webmail.npru.ac.th ', 'x/x', 'x', 'xxxxx', 'xxxxx', 'สมุทรสาคร', 2, '1603822386_pao.jpg'),
(614259018, 'นาย', 'ธนายุทธ', 'สามสังข์', 'xx  xxxx xxxx', '195xxxxxxxxxx', '031xxxxxxx', '2564', 'เจ้าชู้', 'Thanayut Samsang', '614259018@webmail.npru.ac.th  ', 'xxx/xxx', 'xxx', 'xxxxxx', 'xxxxxxx', 'สุพรรณบุรี', 2, '1603822278_noch.jpg'),
(614259040, 'นาย', 'พิชยุทธ', 'อินทรัตน์', 'xx xxx xxxx', '173xxxxxxxxxx', '061xxxxxxx', '2564', 'กิน', 'Pichayut Intharat', '614259040@webmail.npru.ac.th  ', 'xx', 'x', 'xxx', 'xxxx', 'ระนอง', 2, '1603822599_ryu.jpg'),
(614259043, 'นาย', 'วรทัต', 'ปั้นอินทร์', '16 กุมภาพันธ์ 2000', '187xxxxxxxxxx', '085xxxxxxx', '2563', 'กระโดกบ', 'Worrathat Pan-in', '614259043@webmail.npru.ac.th', 'xx/xxx', 'xx', 'xxxxxx', 'xxxx', 'เพชรบุรี', 2, '1603822036_milk.jpg'),
(614259052, 'นาย', 'วรวัฒน์', 'รัตนโนสถ', '29 พฤศจิกายน 1999', '198xxxxxxxxxx', '08xxxxxxxx', '2563', 'วิ่ง', 'Worawat Rattanosod', '614259052@webmail.npru.ac.th  ', 'xx/xx', '8', 'xxxxxxx', 'xxxxxx', 'สุพรรณบุรี', 2, '1603821909_earth.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `se_status`
--

CREATE TABLE `se_status` (
  `se_status_id` int(1) NOT NULL,
  `se_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `se_status`
--

INSERT INTO `se_status` (`se_status_id`, `se_status`) VALUES
(1, 'TAECHER'),
(2, 'ALUMNI'),
(3, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `se_workaddress`
--

CREATE TABLE `se_workaddress` (
  `work_name` varchar(255) NOT NULL,
  `work_lakete` varchar(255) NOT NULL,
  `work_mu` varchar(255) NOT NULL,
  `work_district` varchar(255) NOT NULL,
  `work_aumpua` varchar(255) NOT NULL,
  `work_province` varchar(255) NOT NULL,
  `work_tel` varchar(10) NOT NULL,
  `se_studentid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `se_workaddress`
--

INSERT INTO `se_workaddress` (`work_name`, `work_lakete`, `work_mu`, `work_district`, `work_aumpua`, `work_province`, `work_tel`, `se_studentid`) VALUES
('SE NPRU', 'x/x', 'x', 'xxx', 'xxxxxx', 'นครปฐม', '09xxxxxxxx', 1),
('SE NPRU', '19/13', '6', 'นาดี', 'เมือง ', 'สมุทสาคร', '034423149', 604259010),
('SE NPRU', 'x', 'xx', 'xxxx', 'xxx', 'นครปฐม', '09xxxxxxxx', 604259011),
('SE NPRU ', 'x', 'x', 'xxx', 'xxxx', 'นครปฐม', '09xxxxxxxx', 604259013),
('SE NPRU', '19/13', '8', 'หนองปากโลง ', 'เมือง ', 'นครปฐม', '0818084819', 614259004),
('SE NPRU', 'xxx/xx', 'xx', 'xxxxx', 'xxxxx', 'นครปฐม', '09xxxxxxxx', 614259008),
('SE NPRU', 'xxx/xx', 'x', 'xxxxx', 'xxxx', 'นครปฐม', '09xxxxxxxx', 614259013),
('SE NPRU', 'xxxx/x', 'xx', 'xxxxx', 'xxxxxxx', 'นครปฐม', '09xxxxxxxx', 614259018),
('SE NPRU', 'xx', 'x', 'xxx', 'xxxx', 'นครปฐม', '09xxxxxxxx', 614259040),
('SE NPRU', 'xx/xxx', 'xx', 'xxxxxx', 'xxxxxx', 'นครปฐม', '09xxxxxxxx', 614259043),
('SE NPRU', 'xx/xxx', 'x', 'xxxxxx', 'xxxxxxxx', 'นครปฐม', '09xxxxxxxx', 614259052);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`se_studentid`);

--
-- Indexes for table `se_register`
--
ALTER TABLE `se_register`
  ADD PRIMARY KEY (`se_studentid`),
  ADD KEY `se_status_id` (`se_status_id`);

--
-- Indexes for table `se_status`
--
ALTER TABLE `se_status`
  ADD PRIMARY KEY (`se_status_id`);

--
-- Indexes for table `se_workaddress`
--
ALTER TABLE `se_workaddress`
  ADD PRIMARY KEY (`se_studentid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`se_studentid`) REFERENCES `se_register` (`se_studentid`);

--
-- Constraints for table `se_register`
--
ALTER TABLE `se_register`
  ADD CONSTRAINT `se_register_ibfk_1` FOREIGN KEY (`se_status_id`) REFERENCES `se_status` (`se_status_id`);

--
-- Constraints for table `se_workaddress`
--
ALTER TABLE `se_workaddress`
  ADD CONSTRAINT `se_workaddress_ibfk_1` FOREIGN KEY (`se_studentid`) REFERENCES `se_register` (`se_studentid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
