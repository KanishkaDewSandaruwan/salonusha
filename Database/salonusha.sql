-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 05:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salonusha`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL,
  `open` varchar(255) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`, `email`, `phone`, `address`, `facebook`, `twiter`, `instragram`, `open`, `open_time`, `close_time`) VALUES
('hendrik-cornelissen-jpTT_SAU034-unsplash.jpg', 'White Catchers Gift Wall decor', '<p>sssss</p>', 'kanishkadewsandaruwan@gmail.com', 713664071, 'Banwalgodalla, Kosmulla', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'Mon-Sun : 10am:07pm', '09:01:00', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `appinment`
--

CREATE TABLE `appinment` (
  `appoinment_id` int(11) NOT NULL,
  `eppinment_date` date NOT NULL,
  `eppinment_time` time NOT NULL,
  `eppinment_end_time` time NOT NULL,
  `trn_date` datetime NOT NULL,
  `service_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appinment`
--

INSERT INTO `appinment` (`appoinment_id`, `eppinment_date`, `eppinment_time`, `eppinment_end_time`, `trn_date`, `service_id`, `customer_id`, `status`, `payment`, `amount`) VALUES
(32, '2021-06-15', '10:12:00', '15:12:00', '2021-06-14 06:04:19', 4, 8, 'Pending', 'Pending', 7500),
(33, '2021-06-16', '10:00:00', '13:00:00', '2021-06-14 06:04:46', 5, 8, 'Canceled', 'Paid', 2500),
(34, '2021-06-19', '09:16:00', '11:16:00', '2021-06-14 06:04:32', 3, 8, 'Pending', 'Paid', 850),
(35, '2021-06-17', '10:38:00', '12:38:00', '2021-06-14 06:05:13', 3, 8, 'Accepted', 'Paid', 850);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nic` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `email`, `address`, `password`, `nic`) VALUES
(5, '', 783664071, 'admin', '', 'e10adc3949ba59abbe56e057f20f883e', '91364578V'),
(7, 'Kanishka Dew Sandaruwan', 713664056, 'kanishkadewsandaruwan9@gmail.com', 'Banwalgodalla, Kosmulla', 'e10adc3949ba59abbe56e057f20f883e', '962670426G'),
(8, 'Kanishka Sandaruwan', 913664071, 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla', 'e10adc3949ba59abbe56e057f20f883e', '962670426V');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `header_image` varchar(255) NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `header_desc` varchar(255) NOT NULL,
  `subpage_image` varchar(255) NOT NULL,
  `header_image_02` varchar(255) NOT NULL,
  `header_title_02` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`header_image`, `header_title`, `header_desc`, `subpage_image`, `header_image_02`, `header_title_02`) VALUES
('archie-fantom-lCe_aHkPxss-unsplash.jpg', 'White Catchers Gift Wall decor', 'Order your foods', 'gersey-vargas-ijuTwBjQZww-unsplash.jpg', 'etienne-boulanger-C5yfbvMWxC8-unsplash.jpg', 'Fast Service & Best');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `image_id` int(11) NOT NULL,
  `galary_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`image_id`, `galary_image`) VALUES
(22, 'gersey-vargas-ijuTwBjQZww-unsplash.jpg'),
(23, 'gersey-vargas-ijuTwBjQZww-unsplash.jpg'),
(24, 'archie-fantom-lCe_aHkPxss-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded'),
(8, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'ssss', 'ssssss', '2021-05-13 05:19:02', 'Reded'),
(12, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'ssss', 'ssss', '2021-06-13 06:17:09', 'Reded');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(9000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `hour` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `description`, `image`, `price`, `headline`, `hour`) VALUES
(3, 'Kaniya', '<p>sssssss</p>', 'hendrik-cornelissen-jpTT_SAU034-unsplash.jpg', 850, 'ojsjasjnajs sdsdsdsd', 2),
(4, 'Logitec Keyboard', '<p>ssssss</p>', 'daniel-klein-Qx8_d5dGhrs-unsplash.jpg', 7500, 'sss', 1),
(5, 'Handmade Dream  Catchers  for vehicle', '<p>aaaaa</p>', 'daniel-klein-Qx8_d5dGhrs-unsplash.jpg', 2500, 'ojsjasjnajs', 3),
(6, 'Prone Rice', '<p>22</p>', 'smith.png', 850, 'ojsjasjnajs', 2),
(7, 'White Catchers Gift Wall decorjhjh', '<p>jjhj</p>', 'daniel-klein-Qx8_d5dGhrs-unsplash.jpg', 850, 'ojsjasjnajs', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appinment`
--
ALTER TABLE `appinment`
  ADD PRIMARY KEY (`appoinment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appinment`
--
ALTER TABLE `appinment`
  MODIFY `appoinment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
