-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 01:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(1111) NOT NULL,
  `eheading` varchar(100) NOT NULL,
  `edescription` varchar(1111) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `description`, `eheading`, `edescription`, `image`) VALUES
(1, 'About Us', 'It’s so tough to impress attendees these days, won’t you agree?  That feeling of ‘seen it, done it’ is always lingering around.  We need inspiration and creativity more than ever.  Our boss demands them, our attendees want them, and our sponsors crave them.  So how do you impress attendees, regardless of the type of events you plan?  The devil is in the details.  Sometimes it’s those little twists you add to small details of your event that change perceptions. This is why we are giving you the most comprehensive database to date on event ideas. We are making it public and sharing it with you.', 'About Our Events', 'It’s so tough to impress attendees these days, won’t you agree?That feeling of ‘seen it, done it’ is always lingering around.We need inspiration and creativity more than ever.Our boss demands them, our attendees want them, and our sponsors crave them.So how do you impress attendees, regardless of the type of events you plan?The devil is in the details.Sometimes it’s those little twists you add to small details of your event that change perceptions. This is why we are giving you the most comprehensive database to date on event ideas. We are making it public and sharing it with you.', 'images/assd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`, `phone`, `email`, `website`) VALUES
(1, '01 Pascale Springs Apt. 339, NY City United State', 2147483647, 'info.colorlib@gmail.com', 'www.eventmanagement.com');

-- --------------------------------------------------------

--
-- Table structure for table `b-schedule`
--

CREATE TABLE `b-schedule` (
  `id` int(100) NOT NULL,
  `1time` varchar(100) NOT NULL,
  `2time` varchar(100) NOT NULL,
  `3time` varchar(100) NOT NULL,
  `4time` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `date2` varchar(100) NOT NULL,
  `date3` varchar(100) NOT NULL,
  `date4` varchar(100) NOT NULL,
  `d1event1` varchar(100) NOT NULL,
  `d1event2` varchar(100) NOT NULL,
  `d1event3` varchar(100) NOT NULL,
  `d1event4` varchar(100) NOT NULL,
  `d2event1` varchar(100) NOT NULL,
  `d2event2` varchar(100) NOT NULL,
  `d2event3` varchar(100) NOT NULL,
  `d2event4` varchar(100) NOT NULL,
  `d3event1` varchar(100) NOT NULL,
  `d3event2` varchar(100) NOT NULL,
  `d3event3` varchar(100) NOT NULL,
  `d3event4` varchar(100) NOT NULL,
  `d4event1` varchar(100) NOT NULL,
  `d4event2` varchar(100) NOT NULL,
  `d4event3` varchar(100) NOT NULL,
  `d4event4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `b-schedule`
--

INSERT INTO `b-schedule` (`id`, `1time`, `2time`, `3time`, `4time`, `date1`, `date2`, `date3`, `date4`, `d1event1`, `d1event2`, `d1event3`, `d1event4`, `d2event1`, `d2event2`, `d2event3`, `d2event4`, `d3event1`, `d3event2`, `d3event3`, `d3event4`, `d4event1`, `d4event2`, `d4event3`, `d4event4`) VALUES
(1, '19:43', '19:43', '19:45', '19:43', '2023-05-29', '2023-06-15', '2023-06-29', '2023-06-21', 'Maximize CEO By Elmer Dunn', 'Talking To Life By John Smith', 'Technology Future By Thomas Munoz', 'Technology Future By Thomas Munoz', 'Coffee Break', 'Social Website By Delia Mullins', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `heading`, `type`, `date`) VALUES
(4, 'blog-3.jpg', 'Count Every Second Until the Event', 'Foody', '2023-06-13'),
(5, 'blog-5.jpg', 'Count Every Second Until the Event', 'marketing', '2023-06-11'),
(6, 'blog-6.jpg', 'Count Every Second Until the Event', 'Technology', '2023-06-21'),
(7, 'blog-7.jpg', 'Count Every Second Until the Event', 'event', '2023-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `c-schedule`
--

CREATE TABLE `c-schedule` (
  `id` int(100) NOT NULL,
  `1time` varchar(100) NOT NULL,
  `2time` varchar(100) NOT NULL,
  `3time` varchar(100) NOT NULL,
  `4time` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `date2` varchar(100) NOT NULL,
  `date3` varchar(100) NOT NULL,
  `date4` varchar(100) NOT NULL,
  `d1event1` varchar(100) NOT NULL,
  `d1event2` varchar(100) NOT NULL,
  `d1event3` varchar(100) NOT NULL,
  `d1event4` varchar(100) NOT NULL,
  `d2event1` varchar(100) NOT NULL,
  `d2event2` varchar(100) NOT NULL,
  `d2event3` varchar(100) NOT NULL,
  `d2event4` varchar(100) NOT NULL,
  `d3event1` varchar(100) NOT NULL,
  `d3event2` varchar(100) NOT NULL,
  `d3event3` varchar(100) NOT NULL,
  `d3event4` varchar(100) NOT NULL,
  `d4event1` varchar(100) NOT NULL,
  `d4event2` varchar(100) NOT NULL,
  `d4event3` varchar(100) NOT NULL,
  `d4event4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`) VALUES
(1, 'Foody Event'),
(2, 'Conference Event');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `review`) VALUES
(2, 'zunair ahmad', 'zunair@gmail.com', 'The good points include the fact that there are lots of up-to-date groups you can listen to such as '),
(3, 'zunair ahmad', 'zunair@gmail.com', 'The good points include the fact that there are lots of up-to-date groups you can listen to such as '),
(4, 'Muaz', 'Muaz@gmail.com', 'The good points include the fact that there are lots of up-to-date groups you can listen to such as'),
(5, 'Talha', 'Talha@gmail.com', 'This is a awesome website');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `phone`, `email`, `message`) VALUES
(2, 'zunair ahmad', 2147483647, 'zunair@gmail.com', 'aaaaaaaaaaaaaaaaaaaa'),
(3, 'Talha', 2147483647, 'Talha@gmail.com', '??????????????');

-- --------------------------------------------------------

--
-- Table structure for table `e-schedule`
--

CREATE TABLE `e-schedule` (
  `id` int(100) NOT NULL,
  `1time` varchar(100) NOT NULL,
  `2time` varchar(100) NOT NULL,
  `3time` varchar(100) NOT NULL,
  `4time` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `date2` varchar(100) NOT NULL,
  `date3` varchar(100) NOT NULL,
  `date4` varchar(100) NOT NULL,
  `d1event1` varchar(100) NOT NULL,
  `d1event2` varchar(100) NOT NULL,
  `d1event3` varchar(100) NOT NULL,
  `d1event4` varchar(100) NOT NULL,
  `d2event1` varchar(100) NOT NULL,
  `d2event2` varchar(100) NOT NULL,
  `d2event3` varchar(100) NOT NULL,
  `d2event4` varchar(100) NOT NULL,
  `d3event1` varchar(100) NOT NULL,
  `d3event2` varchar(100) NOT NULL,
  `d3event3` varchar(100) NOT NULL,
  `d3event4` varchar(100) NOT NULL,
  `d4event1` varchar(100) NOT NULL,
  `d4event2` varchar(100) NOT NULL,
  `d4event3` varchar(100) NOT NULL,
  `d4event4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eventbooking`
--

CREATE TABLE `eventbooking` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventbooking`
--

INSERT INTO `eventbooking` (`id`, `name`, `email`, `address`, `event`, `phone`) VALUES
(3, 'zunair ahmad', 'asad.shafiq.50999', 'gulistan colony sahiwal', 'zunair ahmad', '0308 6311779'),
(5, 'Jhon', 'admin@gmail.com', 'gulistan colony sahiwal', 'Conference Event', '0308 6311779');

-- --------------------------------------------------------

--
-- Table structure for table `eventcomplete`
--

CREATE TABLE `eventcomplete` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventcomplete`
--

INSERT INTO `eventcomplete` (`id`, `name`, `email`, `address`, `phone`, `event`) VALUES
(5, 'zunair ahmad', 'asad.shafiq.50999@gmail.com', 'gulistan colony sahiwal', '03086311779', 'Foody Event'),
(6, 'zunair ahmad', 'asad.shafiq@gmail.com', 'gulistan colony sahiwal', '0308 6311779', 'zunair ahmad'),
(7, 'zunair ahmad', 'admin@gmail.com', 'gulistan colony sahiwal', '0308 6311779', 'Open this select menu'),
(8, 'zunair ahmad', 'asad.shafiq.50999@gmail.com', 'gulistan colony sahiwal', '03086311779', 'Foody Event');

-- --------------------------------------------------------

--
-- Table structure for table `eventtime`
--

CREATE TABLE `eventtime` (
  `id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `days` int(100) NOT NULL,
  `hours` int(100) NOT NULL,
  `minutes` int(100) NOT NULL,
  `sec` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventtime`
--

INSERT INTO `eventtime` (`id`, `heading`, `days`, `hours`, `minutes`, `sec`) VALUES
(2, 'Our Latest Event', 22, 18, 60, 59);

-- --------------------------------------------------------

--
-- Table structure for table `m-schedule`
--

CREATE TABLE `m-schedule` (
  `id` int(100) NOT NULL,
  `1time` varchar(100) NOT NULL,
  `2time` varchar(100) NOT NULL,
  `3time` varchar(100) NOT NULL,
  `4time` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `date2` varchar(100) NOT NULL,
  `date3` varchar(100) NOT NULL,
  `date4` varchar(100) NOT NULL,
  `d1event1` varchar(100) NOT NULL,
  `d1event2` varchar(100) NOT NULL,
  `d1event3` varchar(100) NOT NULL,
  `d1event4` varchar(100) NOT NULL,
  `d2event1` varchar(100) NOT NULL,
  `d2event2` varchar(100) NOT NULL,
  `d2event3` varchar(100) NOT NULL,
  `d2event4` varchar(100) NOT NULL,
  `d3event1` varchar(100) NOT NULL,
  `d3event2` varchar(100) NOT NULL,
  `d3event3` varchar(100) NOT NULL,
  `d3event4` varchar(100) NOT NULL,
  `d4event1` varchar(100) NOT NULL,
  `d4event2` varchar(100) NOT NULL,
  `d4event3` varchar(100) NOT NULL,
  `d4event4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m-schedule`
--

INSERT INTO `m-schedule` (`id`, `1time`, `2time`, `3time`, `4time`, `date1`, `date2`, `date3`, `date4`, `d1event1`, `d1event2`, `d1event3`, `d1event4`, `d2event1`, `d2event2`, `d2event3`, `d2event4`, `d3event1`, `d3event2`, `d3event3`, `d3event4`, `d4event1`, `d4event2`, `d4event3`, `d4event4`) VALUES
(1, '19:02', '19:02', '19:03', '19:02', '2023-06-13', '2023-06-23', '2023-06-14', '2023-06-23', 'Coffee Break', 'Talking To Life By John Smith', 'Meet Up Marketing By Mc Cage', 'Technology Future By Thomas Munoz', 'Coffee Break', 'Social Website By Delia Mullins', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon', 'Conect People By James Colon');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(100) NOT NULL,
  `bprice` int(100) NOT NULL,
  `bservice1` varchar(100) NOT NULL,
  `bservice2` varchar(100) NOT NULL,
  `bservice3` varchar(100) NOT NULL,
  `bservice4` varchar(100) NOT NULL,
  `bservice5` varchar(100) NOT NULL,
  `fprice` int(100) NOT NULL,
  `fservice1` varchar(100) NOT NULL,
  `fservice2` varchar(100) NOT NULL,
  `fservice3` varchar(100) NOT NULL,
  `fservice4` varchar(100) NOT NULL,
  `fservice5` varchar(100) NOT NULL,
  `fservice6` varchar(100) NOT NULL,
  `gprice` int(100) NOT NULL,
  `gservice1` varchar(100) NOT NULL,
  `gservice2` varchar(100) NOT NULL,
  `gservice3` varchar(100) NOT NULL,
  `gservice4` varchar(100) NOT NULL,
  `gservice5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `bprice`, `bservice1`, `bservice2`, `bservice3`, `bservice4`, `bservice5`, `fprice`, `fservice1`, `fservice2`, `fservice3`, `fservice4`, `fservice5`, `fservice6`, `gprice`, `gservice1`, `gservice2`, `gservice3`, `gservice4`, `gservice5`) VALUES
(1, 10, 'One Day Conference Ticket', 'Coffee-break', 'Lunch and Networking', 'Keynote talk', 'Talk to the Editors Session', 25, 'One Day Conference Ticket', 'Coffee-break', 'Lunch and Networking', 'Keynote talk', 'Talk to the Editors Session', 'Lunch and Networking', 20, 'One Day Conference Ticket', 'Coffee-break', 'Lunch and Networking', 'Keynote talk', 'Talk to the Editors Session');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'zunair', 'zunair@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `t-schedule`
--

CREATE TABLE `t-schedule` (
  `id` int(100) NOT NULL,
  `1time` varchar(100) NOT NULL,
  `2time` varchar(100) NOT NULL,
  `3time` varchar(100) NOT NULL,
  `4time` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `date2` varchar(100) NOT NULL,
  `date3` varchar(100) NOT NULL,
  `date4` varchar(100) NOT NULL,
  `d1event1` varchar(100) NOT NULL,
  `d1event2` varchar(100) NOT NULL,
  `d1event3` varchar(100) NOT NULL,
  `d1event4` varchar(100) NOT NULL,
  `d2event1` varchar(100) NOT NULL,
  `d2event2` varchar(100) NOT NULL,
  `d2event3` varchar(100) NOT NULL,
  `d2event4` varchar(100) NOT NULL,
  `d3event1` varchar(100) NOT NULL,
  `d3event2` varchar(100) NOT NULL,
  `d3event3` varchar(100) NOT NULL,
  `d3event4` varchar(100) NOT NULL,
  `d4event1` varchar(100) NOT NULL,
  `d4event2` varchar(100) NOT NULL,
  `d4event3` varchar(100) NOT NULL,
  `d4event4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `about` varchar(1111) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `facebook`, `instagram`, `gmail`, `about`, `image`) VALUES
(5, 'Jayden Gill', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/speaker-1.jpg'),
(6, 'Mary Jane', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/speaker-2.jpg'),
(7, 'Jack Human', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/speaker-3.jpg'),
(8, 'Sara Brudt', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/speaker-4.jpg'),
(9, 'Emma Sandoval', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/speaker-5.jpg'),
(10, 'Harriet Freeman', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/speaker-6.jpg'),
(11, 'Emma Sandoval', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/member-5.jpg'),
(12, 'Emma Sandoval', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/member-6.jpg'),
(13, 'Emma Sandoval', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/member-7.jpg'),
(14, 'Jhon', 'Speaker', 'www.facebook.com', 'www.instagram.com', 'www.gmail.com', 'Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper.', 'images/member-10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b-schedule`
--
ALTER TABLE `b-schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c-schedule`
--
ALTER TABLE `c-schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e-schedule`
--
ALTER TABLE `e-schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventbooking`
--
ALTER TABLE `eventbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventcomplete`
--
ALTER TABLE `eventcomplete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventtime`
--
ALTER TABLE `eventtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m-schedule`
--
ALTER TABLE `m-schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t-schedule`
--
ALTER TABLE `t-schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b-schedule`
--
ALTER TABLE `b-schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `c-schedule`
--
ALTER TABLE `c-schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e-schedule`
--
ALTER TABLE `e-schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventbooking`
--
ALTER TABLE `eventbooking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventcomplete`
--
ALTER TABLE `eventcomplete`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eventtime`
--
ALTER TABLE `eventtime`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m-schedule`
--
ALTER TABLE `m-schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t-schedule`
--
ALTER TABLE `t-schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
