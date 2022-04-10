-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 03:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_home_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(4) NOT NULL,
  `otp` varchar(7) NOT NULL,
  `is_expired` int(4) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `create_at`) VALUES
(15, '272265', 0, '2020-06-13 17:53:12'),
(16, '160424', 1, '2020-06-13 17:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `CityId` int(4) NOT NULL,
  `CityName` varchar(20) NOT NULL,
  `StateId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`CityId`, `CityName`, `StateId`) VALUES
(1, 'Srinagar	', 1),
(2, 'Anantanag	', 1),
(3, 'Badgam	', 1),
(4, 'Bandipore	', 1),
(5, 'Doda', 1),
(6, 'Jammu	', 1),
(7, 'Kargil	', 1),
(8, 'Leh', 1),
(9, 'Pulwama	', 1),
(10, 'Kishtwar	', 1),
(11, 'Rajouri	', 1),
(12, 'Shimla	', 2),
(13, 'Bilaspur	', 2),
(14, 'Chamba	', 2),
(15, 'Kullu	', 2),
(16, 'Kangra	', 2),
(17, 'Lahul & Spiti	', 2),
(18, 'Mandi	', 2),
(19, 'Kinnaur	', 2),
(20, 'Simaur	', 2),
(21, 'Nainital	', 3),
(22, 'Hardwar	', 3),
(23, 'Rishikesh	', 3),
(24, 'Chamoli	', 3),
(25, 'Uttarkashi	', 3),
(26, 'Mussoorie	', 3),
(27, 'Mussoorie	', 3),
(28, 'Lucknow	', 4),
(29, 'Pragyagraj	', 4),
(30, 'Agra	', 4),
(31, 'Varanasi	', 4),
(32, 'Kanpur	', 4),
(33, 'Meerut	', 4),
(34, 'Jhansi	', 4),
(35, 'Ghaziabad	', 4),
(36, 'Mathura	', 4),
(37, 'Bareilly	', 4),
(38, 'Vrindavan	', 4),
(39, 'Ludhiana	', 5),
(40, 'Amritsar	', 5),
(41, 'Jalandhar	', 5),
(42, 'Patiala	', 5),
(43, 'Bathinda	', 5),
(44, 'Hoshiarpur	', 5),
(45, 'Pathankot	', 5),
(46, 'Firozpur	', 5),
(47, 'Chandigarh	', 5),
(48, 'Jalandhar	', 5),
(49, 'Gurdaspur	', 5),
(50, 'Gurugram	', 6),
(51, 'Faridabad	', 6),
(52, 'Rewari	', 6),
(53, 'Karnal	', 6),
(54, 'Rohtak	', 6),
(55, 'Palwal	', 6),
(56, 'Panipat	', 6),
(57, 'Hisar	', 6),
(58, 'Panchkula	', 6),
(59, 'New Delhi	', 6),
(60, 'Kurukshetra	', 6),
(61, 'Noida	', 6),
(62, 'Guwahati	', 7),
(63, 'Jorhat	', 7),
(64, 'Tezpur	', 7),
(65, 'Dilburgarh	', 7),
(66, 'Dispur	', 7),
(67, 'Dhubri	', 7),
(68, 'Goalpara	', 7),
(69, 'Nalbari	', 7),
(70, 'Ranchi	', 8),
(71, 'Jamshedpur	', 8),
(72, 'Dhanvad	', 8),
(73, 'Deoghar	', 8),
(74, 'Giridih	', 8),
(75, 'Ramgarh	', 8),
(76, 'Chas	', 8),
(77, 'Gumla	', 8),
(78, 'Chirkunda	', 8),
(79, 'Rajmahal	', 8),
(80, 'Patna	', 9),
(81, 'Gaya	', 9),
(82, 'Bhagalpur	', 9),
(83, 'Muzaffarpur	', 9),
(84, 'Purnia		', 9),
(85, 'Katihar	', 9),
(86, 'Mungar	', 9),
(87, 'Danapur	', 9),
(88, 'Buxar	', 9),
(89, 'Aurangabad	', 9),
(90, 'Jamalpur	', 9),
(91, 'Cuttak	', 10),
(92, 'Bhubaneshwar	', 10),
(93, 'Puri	', 10),
(94, 'Sambalpur	', 10),
(95, 'Rourkela	', 10),
(96, 'Balasore	', 10),
(97, 'Brahmapur	', 10),
(98, 'Konark	', 10),
(99, 'Barbil	', 10),
(100, 'Goapalpur	', 10),
(101, 'Pipili	', 10),
(102, 'Phulbani	', 10),
(103, 'Kolkata	', 11),
(104, 'Siliguri	', 11),
(105, 'Durgapur	', 11),
(106, 'Dhulian	', 11),
(107, 'Ranghat	', 11),
(108, 'Jalpaiguri	', 11),
(109, 'Jangriur	', 11),
(110, 'Cocoh Behar	', 11),
(111, 'Krishnamagar	', 11),
(112, 'Haldia	', 11),
(113, 'Surat	', 12),
(114, 'Ahemdabad	', 12),
(115, 'Porbandar	', 12),
(116, 'Navsari	', 12),
(117, 'Valsad	', 12),
(118, 'Vapi	', 12),
(119, 'Baroda	', 12),
(120, 'Anand	', 12),
(121, 'Rajkot	', 12),
(122, 'Jamnagar	', 12),
(123, 'Mehsana	', 12),
(124, 'Bhuj	', 12),
(125, 'Kutchh	', 12),
(126, 'Himmatnagar	', 12),
(127, 'Virpur	', 12),
(128, 'Gondal	', 12),
(129, 'JamKhambhalia	', 12),
(130, 'Bardoli	', 12),
(131, 'Upleta	', 12),
(132, 'Ranavav	', 12),
(133, 'Chotila	', 12),
(134, 'Dwarka	', 12),
(135, 'Jaipur	', 13),
(136, 'Udaipur	', 13),
(137, 'Nathdwara	', 13),
(138, 'Jodhpur	', 13),
(139, 'Jaisalmer	', 13),
(140, 'Pushkar	', 13),
(141, 'Bundi	', 13),
(142, 'Bharatpur	', 13),
(143, 'Bikaner	', 13),
(144, 'Mount Abu	', 13),
(145, 'Kota	', 13),
(146, 'Banswara	', 13),
(147, 'Ajmer	', 13),
(148, 'Alwar	', 13),
(149, 'Gandhinagar	', 12),
(150, 'Bhopal	', 14),
(151, 'Indore	', 14),
(152, 'Jablpur	', 14),
(153, 'Ujjain	', 14),
(154, 'Gwalior	', 14),
(155, 'Rewa	', 14),
(156, 'Dewas	', 14),
(157, 'Pachmarshi	', 14),
(158, 'Mandav	', 14),
(159, 'Vijaywada	', 15),
(160, 'Vishakhapatnam	', 15),
(161, 'Tirupti	', 15),
(162, 'Guntur	', 15),
(163, 'Kakinada	', 15),
(164, 'Ananatpur	', 15),
(165, 'Srikakulam	', 15),
(166, 'Mumbai	', 16),
(167, 'Pune	', 16),
(168, 'Nagpur	', 16),
(169, 'Nasik	', 16),
(170, 'Solapur	', 16),
(171, 'Kalyan	', 16),
(172, 'Satara	', 16),
(173, 'Ahmednagar	', 16),
(174, 'Shirdi	', 16),
(175, 'Panvel	', 16),
(176, 'Matheran	', 16),
(177, 'Vasai-Virar	', 16),
(178, 'Khandala	', 16),
(179, 'Hyderabad	', 17),
(180, 'Warangal	', 17),
(181, 'Karimnagar	', 17),
(182, 'Nizambad	', 17),
(183, 'Naigonda	', 17),
(184, 'Adilabad	', 17),
(185, 'Medak	', 17),
(186, 'Bengaluru	', 18),
(187, 'Manglore	', 18),
(188, 'Belgaum	', 18),
(189, 'Hubli	', 18),
(190, 'Ballari	', 18),
(191, 'Vijayapura	', 18),
(192, 'Mysuru	', 18),
(193, 'Udupi	', 18),
(194, 'Chennai	', 19),
(195, 'Coimbatore	', 19),
(196, 'Madurau	', 19),
(197, 'Vellore	', 19),
(198, 'Ooty	', 19),
(199, 'Tiruppur	', 19),
(200, 'Kodaikanal	', 19),
(201, 'Rameshwaram	', 19),
(202, 'Kanyakumari	', 19),
(203, 'Karur	', 19),
(204, 'Thiruvanantpuram	', 20),
(205, 'Kochi	', 20),
(206, 'Thrissur	', 20),
(207, 'Kollam	', 20),
(208, 'Kannur	', 20),
(209, 'Kottayam	', 20),
(210, 'Palakkad	', 20),
(211, 'Munnar	', 20),
(212, 'Varkala	', 20),
(213, 'Kovalam	', 20),
(214, 'Guruvayur	', 20),
(215, 'Tirur	', 20),
(216, 'Punalur	', 20),
(217, 'Nilambur	', 20),
(218, 'Panaji	', 21),
(219, 'Vasco da gama', 21),
(220, 'Maragao	', 21),
(221, 'Mapusa', 21),
(222, 'Goa Veiha	', 21),
(223, 'Ponda	', 21),
(224, 'Anjuna	', 21),
(225, 'Calangute	', 21),
(226, 'Candolim	', 21),
(227, 'Baga	', 21),
(228, 'Varca	', 21),
(229, 'Bicholim	', 21),
(230, 'St. Cruz	', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `complain_id` int(11) NOT NULL,
  `tenant_emailid` varchar(30) NOT NULL,
  `owner_emailid` varchar(30) NOT NULL,
  `property_id` int(11) NOT NULL,
  `body` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`complain_id`, `tenant_emailid`, `owner_emailid`, `property_id`, `body`, `date`, `status`) VALUES
(2, '17bmiit143@gmail.com', '17bmiit141@gmail.com', 10, 'In this house electric wiring is not properly.', '2020-06-05 19:54:54', 'pending'),
(3, '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', 11, 'ndnsdfdfsf', '2020-06-13 14:46:21', 'show');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `tenant_emailid` varchar(30) NOT NULL,
  `owner_emailid` varchar(30) NOT NULL,
  `property_id` int(11) NOT NULL,
  `body` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `tenant_emailid`, `owner_emailid`, `property_id`, `body`, `date`) VALUES
(6, '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', 11, 'This House is Awesome.', '2020-06-13 14:47:10'),
(7, '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', 11, 'This property is very nice. thank you for give me on rent.', '2020-06-13 14:47:48'),
(8, '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', 11, 'This dream house website is very useful for rent house.', '2020-06-13 14:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaseout_notification`
--

CREATE TABLE `tbl_leaseout_notification` (
  `notification_id` int(11) NOT NULL,
  `tenant_emailid` varchar(30) NOT NULL,
  `owner_emailid` varchar(30) NOT NULL,
  `property_id` int(11) NOT NULL,
  `body` varchar(50) NOT NULL,
  `owner_mess` varchar(150) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'pending',
  `n_status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leaseout_notification`
--

INSERT INTO `tbl_leaseout_notification` (`notification_id`, `tenant_emailid`, `owner_emailid`, `property_id`, `body`, `owner_mess`, `date`, `status`, `n_status`) VALUES
(2, '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', 11, 'I want to lease out your house.', 'The Property Owner Urvi Patell has excepted your request to lease out the house and refund your deposit.', '2020-06-13 14:50:03', 'accept', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notification_id` int(11) NOT NULL,
  `tenant_emailid` varchar(30) NOT NULL,
  `owner_emailid` varchar(30) NOT NULL,
  `property_id` int(11) NOT NULL,
  `body` varchar(50) NOT NULL,
  `owner_mess` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'pending',
  `n_status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`notification_id`, `tenant_emailid`, `owner_emailid`, `property_id`, `body`, `owner_mess`, `date`, `status`, `n_status`) VALUES
(4, '17bmiit143@gmail.com', '17bmiit141@gmail.com', 10, 'I want to rent your house.', 'The Property Owner Nidhi Sakariya  has excepted your request to get the house on rent.', '2020-06-13 11:44:34', 'accept', 'deactive'),
(5, '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', 11, 'I want to rent your house.', 'The Property Owner Urvi Patell has excepted your request to get the house on rent.', '2020-06-13 14:40:11', 'accept', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `tenant_emailid` varchar(30) NOT NULL,
  `property_id` int(11) NOT NULL,
  `transaction_id` varchar(21) NOT NULL,
  `amount` float NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `tenant_emailid`, `property_id`, `transaction_id`, `amount`, `date`, `status`) VALUES
(10, '17bmiit143@gmail.com', 11, 'e28eeda88ac538c5f3a7', 5000, '2020-06-13 14:45:33', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_detail`
--

CREATE TABLE `tbl_property_detail` (
  `property_id` int(4) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `home_no` varchar(5) NOT NULL,
  `society_name` varchar(25) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `area` varchar(25) NOT NULL,
  `deposit` float NOT NULL,
  `rent` float NOT NULL,
  `no_of_room` int(4) NOT NULL,
  `no_of_hall` int(4) NOT NULL,
  `no_of_kitchen` int(4) NOT NULL,
  `no_of_bathroom` int(4) NOT NULL,
  `no_of_balcony` int(11) NOT NULL,
  `squarefeet` varchar(10) NOT NULL,
  `furnished` bit(1) NOT NULL,
  `home_type` varchar(10) NOT NULL,
  `photo` varchar(60) NOT NULL,
  `hall_photo` varchar(60) NOT NULL,
  `kitchen_photo` varchar(60) NOT NULL,
  `bedroom_photo` varchar(60) NOT NULL,
  `bathroom_photo` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'lease out',
  `home_status` varchar(10) NOT NULL DEFAULT 'active ',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_property_detail`
--

INSERT INTO `tbl_property_detail` (`property_id`, `emailid`, `home_no`, `society_name`, `landmark`, `area`, `deposit`, `rent`, `no_of_room`, `no_of_hall`, `no_of_kitchen`, `no_of_bathroom`, `no_of_balcony`, `squarefeet`, `furnished`, `home_type`, `photo`, `hall_photo`, `kitchen_photo`, `bedroom_photo`, `bathroom_photo`, `status`, `home_status`, `date`) VALUES
(8, '17bmiit141@gmail.com', 'A-4', 'rang Avdhut ', 'primary Magob School ', 'parvat patiya ', 2000, 3000, 5, 3, 3, 5, 5, '4000', b'1', 'Farm', '4.jpg', '5.jpg', '3.jpg', '2.jpg', '6.jpg', 'lease out', 'active ', '2020-06-03 18:42:11'),
(9, '17bmiit141@gmail.com', 'A-5', 'rang Avdhut ', 'primary Magob School ', 'parvat patiya ', 1000, 4000, 3, 2, 2, 2, 2, '2802', b'1', 'House', '5.jpg', '4.jpg', '4.jpg', '3.jpg', '3.jpg', 'lease out', 'active ', '2020-06-03 18:50:51'),
(10, '17bmiit141@gmail.com', 'A-6', 'rang Avdhut ', 'primary Magob School ', 'parvat patiya ', 2000, 4000, 2, 2, 2, 2, 1, '2500', b'1', 'Apartment', 'home-backgrounds-1.jpg', '4.jpg', '6.jpg', '4.jpg', '3.jpg', 'lease out', 'active ', '2020-06-03 18:55:15'),
(11, 'urvirpatel1999@gmail.com', 'A-23', 'Rang Avdhut ', 'primary Magob School ', 'parvat patiya ', 3000, 2000, 2, 1, 1, 2, 2, '2774', b'1', 'Apartment', '2.jpg', '6.jpg', '6.jpg', '2.jpg', '7.jpg', 'lease out', 'active ', '2020-06-13 14:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_owner`
--

CREATE TABLE `tbl_property_owner` (
  `owner_id` int(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `adharcard` varchar(50) NOT NULL,
  `pancard` varchar(50) NOT NULL,
  `property_tax_bill` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'deactive',
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_property_owner`
--

INSERT INTO `tbl_property_owner` (`owner_id`, `name`, `address`, `state`, `city`, `emailid`, `contact_no`, `adharcard`, `pancard`, `property_tax_bill`, `photo`, `status`, `create_date`) VALUES
(11, 'Nidhi Sakariya ', '                Adajan', '12', 'Surat	', '17bmiit141@gmail.com', '7894561231', '1.png', '1.png', '2.png', 'user.png', 'active', '2020-03-01 10:06:56'),
(12, 'Urvi Patell', 'Adajan', '16', 'Mumbai	', 'urvirpatel1999@gmail.com', '9979502931', '1.png', '1.png', '3.png', 'girl (2).png', 'active', '2020-06-13 14:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_send_message`
--

CREATE TABLE `tbl_send_message` (
  `message_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `message_body` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'unread',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_send_message`
--

INSERT INTO `tbl_send_message` (`message_id`, `name`, `contact_no`, `emailid`, `message_body`, `status`, `date`) VALUES
(1, 'Urvi Patel', '1979502930', '17bmiit143@gmail.com', 'hi I,m Urvi patel.', 'unread', '2020-03-04 05:08:48'),
(3, 'Trusha Sabhadiya', '9979502930', '17bmiit053@gmail.com', 'hi I am Trusha.', 'unread', '2020-03-04 05:11:15'),
(4, 'urvi patel', '7894561231', '17bmiit143@gmail.com', 'hi', 'unread', '2020-06-13 08:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_send_message_from_owner`
--

CREATE TABLE `tbl_send_message_from_owner` (
  `message_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `owner_emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `message_body` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'unread',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_send_message_from_owner`
--

INSERT INTO `tbl_send_message_from_owner` (`message_id`, `name`, `emailid`, `owner_emailid`, `contactno`, `message_body`, `status`, `date`) VALUES
(3, 'Urvi Patel', '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', '9979502931', 'hey I\'m Urvi patel ', 'unread', '2020-06-05 07:52:18'),
(5, 'Urvi Patell', '17bmiit143@gmail.com', 'urvirpatel1999@gmail.com', '7894561230', 'aasasdsd', 'unread', '2020-06-13 14:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_send_message_from_tenant`
--

CREATE TABLE `tbl_send_message_from_tenant` (
  `mess_id` int(4) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `tenant_emailid` varchar(30) NOT NULL,
  `body` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'unread',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_send_message_from_tenant`
--

INSERT INTO `tbl_send_message_from_tenant` (`mess_id`, `emailid`, `tenant_emailid`, `body`, `status`, `date`) VALUES
(1, 'urvirpatel1999@gmail.com', '17bmiit143@gmail.com', 'hey I\'m Urvi patel ', 'unread', '2020-06-05 08:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `StateId` int(4) NOT NULL,
  `StateName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`StateId`, `StateName`) VALUES
(1, 'Jammu-Kashmir'),
(2, 'Himachal Pradesh'),
(3, 'Uttrakhand'),
(4, 'Uttar Pradesh'),
(5, 'Punjab'),
(6, 'Haryana'),
(7, 'Assam'),
(8, 'Jarkhand'),
(9, 'Bihar'),
(10, 'Orissa'),
(11, 'West Bengal'),
(12, 'Gujarat'),
(13, 'Rajasthan'),
(14, 'Madhya Pradesh'),
(15, 'Andra Pradesh'),
(16, 'Maharashtra'),
(17, 'Telangana'),
(18, 'Karnataka'),
(19, 'Tamil Nadu'),
(20, 'Kerela'),
(21, 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tenants`
--

CREATE TABLE `tbl_tenants` (
  `Tenant_id` int(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `adharcard_photo` varchar(50) NOT NULL,
  `pancard_photo` varchar(50) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active ',
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tenants`
--

INSERT INTO `tbl_tenants` (`Tenant_id`, `name`, `address`, `state`, `city`, `emailid`, `contactno`, `adharcard_photo`, `pancard_photo`, `user_photo`, `Status`, `create_date`) VALUES
(35, 'Urvi Patell', 'Parvat Patiya ', '12', 'Ahemdabad	', '17bmiit143@gmail.com', '7894561230', '3.png', '1.png', 'girl (1).png', 'active', '2020-06-13 14:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(4) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `emailid`, `password`, `user_type`, `status`) VALUES
(9, 'admin@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 'Admin', 'active'),
(14, '17bmiit141@gmail.com', '202cb962ac59075b964b07152d234b70', 'property owner', 'active'),
(15, 'urvirpatel1999@gmail.com', '202cb962ac59075b964b07152d234b70', 'property owner', 'active'),
(16, '17bmiit143@gmail.com', '202cb962ac59075b964b07152d234b70', 'tenants', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'add',
  `w_status` varchar(8) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`wishlist_id`, `property_id`, `emailid`, `status`, `w_status`) VALUES
(3, 11, '17bmiit143@gmail.com', 'add', '0'),
(4, 10, '17bmiit143@gmail.com', 'remove', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`CityId`),
  ADD KEY `StateId` (`StateId`);

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_leaseout_notification`
--
ALTER TABLE `tbl_leaseout_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_property_detail`
--
ALTER TABLE `tbl_property_detail`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `tbl_property_owner`
--
ALTER TABLE `tbl_property_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `tbl_send_message`
--
ALTER TABLE `tbl_send_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_send_message_from_owner`
--
ALTER TABLE `tbl_send_message_from_owner`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_send_message_from_tenant`
--
ALTER TABLE `tbl_send_message_from_tenant`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`StateId`);

--
-- Indexes for table `tbl_tenants`
--
ALTER TABLE `tbl_tenants`
  ADD PRIMARY KEY (`Tenant_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `property_id` (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `CityId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_leaseout_notification`
--
ALTER TABLE `tbl_leaseout_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_property_detail`
--
ALTER TABLE `tbl_property_detail`
  MODIFY `property_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_property_owner`
--
ALTER TABLE `tbl_property_owner`
  MODIFY `owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_send_message`
--
ALTER TABLE `tbl_send_message`
  MODIFY `message_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_send_message_from_owner`
--
ALTER TABLE `tbl_send_message_from_owner`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_send_message_from_tenant`
--
ALTER TABLE `tbl_send_message_from_tenant`
  MODIFY `mess_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `StateId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_tenants`
--
ALTER TABLE `tbl_tenants`
  MODIFY `Tenant_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `tbl_city_ibfk_1` FOREIGN KEY (`StateId`) REFERENCES `tbl_state` (`StateId`);

--
-- Constraints for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD CONSTRAINT `tbl_wishlist_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `tbl_property_detail` (`property_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
