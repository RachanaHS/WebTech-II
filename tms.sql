-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 08:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `g_hotels`
--

CREATE TABLE `g_hotels` (
  `h_id` int(100) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_features` varchar(200) NOT NULL,
  `h_price` varchar(100) NOT NULL,
  `h_images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_hotels`
--

INSERT INTO `g_hotels` (`h_id`, `h_name`, `h_features`, `h_price`, `h_images`) VALUES
(1, 'Hotel Crasin', 'Free Wifi,Indoor Entertainment,Spa,Room Service,Outdoor Activities', '8000', '2.jpg'),
(2, 'Hotel Old Goa', 'Indoor Entertainment,Spa,Room Service,Outdoor Activities', '8000', '3.jpg'),
(3, 'Hotel Kimsel', 'Free Wifi,Indoor Entertainment,Spa,Room Service,Outdoor Activities,Bar and Resturant', '10000', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `h_id` int(100) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_features` varchar(300) NOT NULL,
  `h_price` varchar(100) NOT NULL,
  `h_images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`h_id`, `h_name`, `h_features`, `h_price`, `h_images`) VALUES
(1, 'Hotel Crystal', 'Free Wifi,Indoor Entertainment,Spa,Room Service,Outdoor Activities', '9000', '1.jpg'),
(2, 'Hotel Inn', 'Sight Seeing,Room servive,Spa', '7000', '3.jpg'),
(3, 'Hotel Dunes', 'Free Wifi,Indoor Entertainment,Spa,Room Service', '17000', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `k_hotels`
--

CREATE TABLE `k_hotels` (
  `h_id` int(100) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_features` varchar(300) NOT NULL,
  `h_price` varchar(100) NOT NULL,
  `h_images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_hotels`
--

INSERT INTO `k_hotels` (`h_id`, `h_name`, `h_features`, `h_price`, `h_images`) VALUES
(1, 'Hotel Munnar', 'Free Wifi,Indoor Entertainment,Spa,Room Service', '6000', '2.jpg'),
(2, 'Hotel Boutique', 'Sight Seeing,Room servive,Spa', '8000', '3.jpg'),
(3, 'Hotel Oak', 'Free Wifi,Indoor Entertainment,Spa,Room Service', '9000', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `l_hotels`
--

CREATE TABLE `l_hotels` (
  `h_id` int(100) NOT NULL,
  `h_name` varchar(200) NOT NULL,
  `h_features` varchar(200) NOT NULL,
  `h_price` varchar(100) NOT NULL,
  `h_images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `l_hotels`
--

INSERT INTO `l_hotels` (`h_id`, `h_name`, `h_features`, `h_price`, `h_images`) VALUES
(1, 'Hotel Shaolin', 'Free Wifi,Indoor Entertainment,Spa,Room Service', '8000', '2.jpg'),
(2, 'Hotel Stupa', 'Sight seeing,Free Wifi,Indoor Entertainment,Spa,Room Service', '9000', '3.jpg'),
(3, 'Hotel Arya', 'Free Wifi,Indoor Entertainment,Spa,Room Service', '8900', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(16, 7, 'meghanavnayak@gmail.com', '2020-04-18', '2020-04-19', 'give the best', '2020-04-17 03:31:05', 2, 'a', '2020-04-17 03:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(10, NULL, NULL, NULL, '2020-04-17 03:29:11', NULL, NULL),
(11, 'meghanavnayak@gmail.com', 'Cancellation', 'i want to cancel my booking', '2020-04-17 03:43:08', 'okay..will try do do that', '2020-04-17 03:45:32'),
(12, NULL, NULL, NULL, '2020-04-17 04:40:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '<P align=justify><FONT size=2><STRONG><FONT color=#990000>(1) ACCEPTANCE OF TERMS</FONT><BR><BR></STRONG>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <A href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</A>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>\r\n<P align=justify><FONT size=2>Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </FONT><A href=\"http://in.docs.yahoo.com/info/terms/\"><FONT size=2>http://in.docs.yahoo.com/info/terms/</FONT></A><FONT size=2>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </FONT></P>'),
(2, 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'aboutus', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Test test</span>'),
(11, 'contact', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(2, 'Jaipur', 'Family', 'Rajasthan,India', 7000, 'Sigh Seeing', 'demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test demo test ', '4.jpg', '2017-05-13 15:24:26', '2020-04-14 15:40:36'),
(6, 'Thailand', 'Family', 'Thailand', 40000, 'Free Wi-Fi ,Free Parking ,Room Service, Power Backup ,Air Conditioning (Room controlled), Smoke Detector ,Laundry Service', '2 Days,3 Nights', '1.jpg', '2017-05-14 08:01:08', '2020-04-15 10:41:40'),
(7, 'Manali', 'General(Family)', 'Manali,India', 9000, 'Air Conditioning ,Balcony,Swimming', 'njnj', 'Manali_jan.jpg', '2020-04-14 15:24:03', NULL),
(8, 'Kerala', 'Familty and Couple', 'Kerala', 10000, 'Sight Seeing,Restaurant,Room service', '2 days,3 Nights', 'ker1.jpg', '2017-05-13 22:39:37', '2020-04-15 14:23:29'),
(9, 'Kashmir', 'Couple Package', 'Jammu and Kashmir,India', 30000, 'Transfer,Meals,Sightseeing ,Shopping,RomanticSummer, SpecialFamily & KidsHill Stations', '3 Days,4 Nights', 'kas1.jpg', '2020-04-15 09:46:46', NULL),
(10, 'Andaman', 'Family,Couple', 'Andaman and Nicobar Island', 40000, 'Transfer,Intercom,Free Wi-Fi ,Free Parking ,Room Service, Power Backup ,Air Conditioning (Room controlled), Smoke Detector ,Laundry Service', '3 Days,4Nights', 'and1.jpg', '2020-04-15 11:14:51', NULL),
(11, 'Ladakh', 'Family,Couple', 'Ladakh,India', 30000, 'Transfer,Meals,Sightseeing ,Shopping,RomanticSummer, SpecialFamily & KidsHill Stations', '4 Days,5 Nights', 'lad3.jpg', '2020-04-15 13:34:54', NULL),
(12, 'Goa', 'Couple Package', 'Goa,India', 10000, 'Free Wi-Fi ,Free Parking ,Room Service, Power Backup ,Air Conditioning (Room controlled), Smoke Detector ,Laundry Service', '3 Days,4 Nights', 'goa6.jpg', '2020-04-15 13:37:14', '2020-04-15 14:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(12, 'Rachana', '1234545678', 'rachana@gmail.com', '6f43523e8d7a377deb143ea04fb7ac42', '2020-04-15 07:34:24', NULL),
(14, 'meghana', '1111222234', 'meghana@gmail.com', 'db52aae9d9c7f4ec2ca6948335c93163', '2020-04-17 03:29:11', '2020-04-17 06:32:01'),
(15, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '2020-04-17 03:43:08', NULL),
(16, 'sruthi', '1234567890', 'sruthi@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-04-17 04:40:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbplaces`
--

CREATE TABLE `tbplaces` (
  `p_name` varchar(100) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `start_price` varchar(100) NOT NULL,
  `features` varchar(100) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbplaces`
--

INSERT INTO `tbplaces` (`p_name`, `p_image`, `start_price`, `features`, `p_id`) VALUES
('Manali', 'Manali_jan.jpg', '8500', 'Sight seeing', 1),
('Thailand', '1.jpg', '12000', 'njwsjahj', 2),
('Kerala', '3.jpg', '5000', 'ksiwjsi', 3),
('Jaipur', '4.jpg', '10000', 'ghgfj', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `k_hotels`
--
ALTER TABLE `k_hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `l_hotels`
--
ALTER TABLE `l_hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Indexes for table `tbplaces`
--
ALTER TABLE `tbplaces`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `k_hotels`
--
ALTER TABLE `k_hotels`
  MODIFY `h_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `l_hotels`
--
ALTER TABLE `l_hotels`
  MODIFY `h_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
