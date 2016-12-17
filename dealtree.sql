-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 12:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealtree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(32) NOT NULL,
  `post_date` date NOT NULL,
  `post_category` varchar(32) NOT NULL,
  `post_location` varchar(32) NOT NULL,
  `post_pice` float NOT NULL,
  `post_desc` varchar(1024) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_date`, `post_category`, `post_location`, `post_pice`, `post_desc`, `user_id`) VALUES
(37, 'Nexus 5 Brand New in Box', '2016-11-15', 'Electrinices', 'windsor', 205, 'Unopened Box. Locked to Bell Mobility. 2 gb ram and snapdargon 801 soc.', 2),
(40, 'BUY CELL PHONE', '2016-11-09', 'Electronics', 'Tornoto', 500, 'WANT TO BUY NEW IPOHNE IN RANGE OF 5000', 5),
(41, 'Chevrolet Aveo 2012 Model', '2016-11-10', 'Cars', 'Windsor', 10000, '2012 Model in Excellent condition. Only 120000 kms. Metallic Paint. ', 4),
(50, 'For Sale! Excellent LG G3', '2016-11-08', 'Mobiles', 'Windsor, ON N8Y4R2', 150, '32 gb Lg g3 in pristine condition, always kept in otter box case (included) locked to virgin/bell', 2),
(53, '2003 Pontiac Sunfire Sedan Etest', '2016-11-12', 'Automobiles', 'Windsor, ON N8Y4R2', 2000, 'Perfect reliable winter car. Low KMS as these engines are known to last. E-test done November 2016. The outside damage was from 1 fender bender and was side swiped in traffic. After market speakers in front and rear. Text me at 226-246-6190 for quickest responses and more information. Open to offers.', 2),
(54, 'GRILL COOK', '2016-11-13', 'Jobs', 'Windsor, ON', 13.75, 'Minimum 5 years experience in a fast paced kitchen required. experience in grill would be an added advantage. we are located in the Silvercity movies walker road plaza.\r\n\r\nRequired experience:\r\n\r\n    Cooking: 5 years\r\n    Grill Cook: 3 years', 4),
(55, 'BARTENDERS AND SERVERS', '2016-11-15', 'Jobs', 'Windsor, ON,Canada', 11.75, 'BLANCHE LOUNGE is now accepting resumes for the following positions\r\n\r\nServer / (Must have smart serve)\r\n\r\nBartender (Must have smart serve)\r\n\r\nSecurity (Must have valid security license)\r\n\r\nCover Girl\r\n\r\nCoat Check Attendant\r\n\r\nBarback''s (Must have smart serve)\r\n\r\n\r\nPlease sand resumes or call Damain at (226) 346-6988 or email with reaume.\r\n\r\nJoin the amazing team at BLANCHE LOUNGE.', 2),
(57, 'AZ DRIVER WITH FAST CARD', '2016-11-12', 'Jobs', 'Windsor, ON,Canada', 45, 'Need AZ Driver with FAST card for dedicated autopart load Windsor to Toledo and Back Drop and Hook both side 2 OR 3 loads a day Monday to Friday, Home every night and great pay for short loads. Must have FAST CARD and 1 year experience is required. For more information please call Jassi at 226.348.1314', 5),
(59, 'Help Needed Part Time Leading To', '2016-11-10', 'Jobs', 'kingsville,ON,Canada', 13.75, 'Help Needed Part Time Leading To Full Time 30 40 hrs Per Week In Kingsville And Surrounding Areas\r\n\r\nDo You Enjoy Cleaning? Enjoy Meeting And Helping Others\r\nWe Would Like To Hear From You\r\nOur Cleaning Staff Enjoy Working In a Positive Fun Environment Helping Our Clients In Many Different Ways.\r\nServing Kingsville and surrounding areas\r\nCome Join Our Team And Enjoy The Rewards Of Great Work\r\n\r\n30 40 hours per week Monday-Friday with occasional Saturdays.\r\nRequirements 2 Years Residential Cleaning Experience Preferre Will Train \r\n                                                                                           Your Own Transportation With A Clean Driving Record, Police Background Check Is A Must A\r\nPositive Attitude, Dependable, Physically Fit, Enjoy Working With And Helping Others.\r\nSend Resume To: 2blondeshousecleaning@gmail.com\r\nPhone 519-990-4054 Ask for Debbie', 2),
(60, 'Order Picker/Service Desk', '2016-11-06', 'Jobs', 'Windsor, ON,Canada', 12.95, 'At the highest level, Home Depot Associates must (a) provide outstanding customer service to our Customers and (b) drive the sales and profitability of the store. Customer service objectives include delighting our Customers each and every day and fostering long-term loyalty bonds between our Associates and our Customers. There are six key priorities that deliver the Home Depot shopping experience:\r\n1. Having good quality products available.\r\n2. Making it easy and safe for our Customers to shop our stores.\r\n3. Giving our Customers good value.\r\n4. Providing our Customers the help they need.\r\n5. Offering extra services.\r\n6. Making the shopping experience exciting and fun', 5),
(62, 'Dimplex 750W Electric Panel Conv', '2016-11-14', 'Appliances', 'Lamington,ON,Canada', 44.65, 'The Dimplex panel convection heater has an attractive contemporary design with factory-baked finish, just like kitchen appliances. The beautiful pristine white blends well with any décor. Quiet, convection heating moves warm air quickly and evenly without a fan, excellent supplemental heat for any room. The hinged wall-mounting frame detaches from the unit back for a clean and easy installation.\r\n \r\n\r\n    Silent, effective heater for quiet spaces\r\n    Smooth , sleek panel design - suits any room decor\r\n    Detachable wall mount bracket for quick and easy installation\r\n    Durable steel construction with powder coat finish\r\n    Exclusive enclosed element for long life and safety', 3),
(64, 'Computer Desk', '2016-11-18', 'Computers', 'Amherstburg, ON N9V3Y7', 175, 'Good condition, sliding drawers work great,sliding keyboard rack,huge spae for books also. 2 piece', 3),
(65, 'Computer Desk', '2016-11-18', 'Computers', 'Amherstburg, ON N9V3Y7', 175, 'Good condition, sliding drawers work great,sliding keyboard rack,huge spae for books also. 2 piece', 3),
(68, 'Computer Desk', '0000-00-00', 'Computers', 'Amherstburg, ON N9V3Y', 175, 'Good condition, sliding drawers work great,sliding keyboard rack,huge spae for books also. 2 piece', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_pic`
--

CREATE TABLE `post_pic` (
  `post_id` int(11) NOT NULL,
  `post_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_pic`
--

INSERT INTO `post_pic` (`post_id`, `post_pic`) VALUES
(36, 'a.jpg'),
(37, 'b.jpg'),
(40, 'c.jpg'),
(41, 'd.jpg'),
(50, 'e.jpg'),
(53, '6.jpg'),
(54, '7.jpg'),
(55, '8.jpg'),
(57, '9.jpg'),
(59, '10.jpg'),
(60, '11.jpg'),
(62, '12.jpg'),
(63, '13.jpg'),
(64, '14.jpg'),
(65, '15.jpg'),
(69, 'e.jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `post_id` int(255) NOT NULL,
  `email_id` varchar(1000) NOT NULL,
  `count` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`post_id`, `email_id`, `count`) VALUES
(40, 'k@uwindsor.ca', 1),
(41, 'k@uwindsor.ca', 15),
(37, 'k@uwindsor.ca', 37);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `active`, `firstname`, `lastname`, `phone`, `email`) VALUES
(1, 'Haspreet', '12345', 1, 'Haspreet', 'Singh', 232625, 'sidhuhaspreet@gmail.com'),
(2, 'kamaldeep', '12345', 1, 'Kamaldeep', 'Singh', 226280383, 'k@uwindsor.ca'),
(4, 'Loveneet', '12345', 1, 'Loveneet', 'Singh', 226280303, 'loveneet@uwindsor.ca'),
(5, 'Harpreet', '12345', 1, 'Harpreet', 'Singh', 2252525, 'har@uwindsor.ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
