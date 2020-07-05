-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 10:32 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontline`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `thumbnail`) VALUES
(1, 'Wallpapers', 'gallery-img6.jpg'),
(2, 'Blinds, Curtains and Beddings', 'page3-img4.jpg'),
(3, 'Lightings', 'pic.jpg'),
(4, 'Furniture and Fixture', 'page3-img3.jpg'),
(5, 'Motors Interiors', 'page2-img2.jpg'),
(6, 'Space Management', 'page3-img4.jpg'),
(7, 'Painting,Screeding, POP Ceiling', 'gallery-img3.jpg'),
(8, 'Interior Advisory', 'gallery-img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `companyprofile`
--

CREATE TABLE `companyprofile` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyprofile`
--

INSERT INTO `companyprofile` (`id`, `photo`) VALUES
(1, 'pic.jpg'),
(2, 'IMG-20191214-WA0005.jpg'),
(3, 'slide.jpg'),
(4, 'IMG-20191214-WA0005.jpg'),
(5, 'IMG-20191214-WA0005.jpg'),
(6, 'IMG-20191209-WA0005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `time`) VALUES
(1, 'Glory Nwa', 'glorynwa@gmail.com', '+2347068057873', 'wwwwwww', '2019-12-17 11:10:30.000000');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `total` int(11) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`) VALUES
(1, 'a596579173b6dc6c53f1e4858ee64de1');

-- --------------------------------------------------------

--
-- Table structure for table `newarrivals`
--

CREATE TABLE `newarrivals` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newarrivals`
--

INSERT INTO `newarrivals` (`id`, `description`, `price`, `product_id`, `picture`) VALUES
(4, 'Work carried out in presidential suite A braka in 2019', 88000, 'DFFA001', 'page3-img1.jpg'),
(6, 'USA Chair ', 23000, '', 'gallery-img2.jpg'),
(8, 'Europian sofa ', 20000, '', 'page2-img2.jpg'),
(9, 'American Chair ', 230000, 'DAF002', 'page3-img1.jpg'),
(11, 'American Chair ', 20000, 'DAF003', 'page3-img2.jpg'),
(12, 'Europian sofa ', 39000, '', 'page4-img7.jpg'),
(14, 'Frontline teamare super creative ', 51000, '', 'gallery-img2.jpg'),
(15, 'Frontline teamare super creative ', 50000, '', 'gallery-img5.jpg'),
(16, 'Itallian Sofa ', 18000, ' WPDA003 ', 'page4-img6.jpg'),
(17, 'Italian Wallpapper - 20000 per yard ', 20000, ' WPDA003 ', 'page4-img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `product` text NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productarchive`
--

CREATE TABLE `productarchive` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `description` text NOT NULL,
  `month` text NOT NULL,
  `day` text NOT NULL,
  `summary` text NOT NULL,
  `file` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productarchive`
--

INSERT INTO `productarchive` (`id`, `year`, `description`, `month`, `day`, `summary`, `file`, `time`) VALUES
(2, '2013 ', ' Work carried out in presidential suite A braka ', 'july', '', '', 'gallery-img2.jpg', '0000-00-00 00:00:00'),
(3, '2013 ', ' Work carried out in presidential suite A braka ', 'july', '', '', 'gallery-img3.jpg', '0000-00-00 00:00:00'),
(4, '2017 ', ' Work carried out in presidential suite A braka ', 'october', '', '', 'page3-img3.jpg', '0000-00-00 00:00:00'),
(5, '2017 ', ' Work carried out in presidential suite A braka ', 'october', '', '', 'gallery-img5.jpg', '0000-00-00 00:00:00'),
(6, '2017 ', ' Work carried out in presidential suite A braka ', 'october', '', '', 'page3-img1.jpg', '0000-00-00 00:00:00'),
(7, '2013 ', 'ustry. Our ecommerce solutions are built on latest technology.  ', 'july', '', '', 'gallery-img6.jpg', '0000-00-00 00:00:00'),
(8, '2017 ', ' Work carried out in presidential suite A braka ', 'july', '', '', 'gallery-img1.jpg', '0000-00-00 00:00:00'),
(9, '2010 ', ' Work carried out in presidential suite A braka ', 'feb', '', '', 'gallery-img2.jpg', '0000-00-00 00:00:00'),
(10, '2018 ', ' Work carried out in presidential suite A braka ', 'Jan', '', '', 'gallery-img4.jpg', '0000-00-00 00:00:00'),
(11, '2011 ', ' Work carried out in presidential suite A braka ', 'october', '', '', 'page3-img3.jpg', '0000-00-00 00:00:00'),
(12, '2011 ', ' Work carried out in presidential suite A braka ', 'october', '', '', 'page3-img3.jpg', '0000-00-00 00:00:00'),
(13, '2018 ', ' Work carried out in presidential suite A braka ', 'october', '', '', 'gallery-img1.jpg', '0000-00-00 00:00:00'),
(14, '2019 ', ' Work carried out in presidential suite A braka ', 'June', '', '', 'page2-img2.jpg', '0000-00-00 00:00:00'),
(15, '2019 ', ' Work carried out in presidential suite A braka ', 'july', '', '', 'page3-img5.jpg', '0000-00-00 00:00:00'),
(16, '2019 ', ' Work carried out in presidential suite A braka ', 'Nov.', '', '', 'gallery-img2.jpg', '0000-00-00 00:00:00'),
(17, '2019 ', ' Work carried out in presidential suite A braka ', 'March', '', '', 'gallery-img3.jpg', '0000-00-00 00:00:00'),
(19, '2012', ' Work carried out in presidential suite Eko Hotel', 'July', '', '', 'gallery-img6.jpg', '0000-00-00 00:00:00'),
(20, '2013 ', ' Work carried out in presidential suite A braka ', 'May', '', '', 'gallery-img4.jpg', '0000-00-00 00:00:00'),
(21, '2018 ', ' Frontline teamare super creative ', 'Nov.', ' Day 2 ', 'work done it out in Eko Hotel ', 'gallery-img5.jpg', '2020-02-10 16:17:05'),
(22, '2019', ' Frontline teamare super creative ', 'Dec', ' Day 2 ', 'work done it out in Eko Hotel ', 'gallery-img6.jpg', '2020-02-10 16:17:21'),
(24, '2018 ', ' Frontline teamare super creative ', 'Nov.', ' Day 1 ', 'work done it out in Eko Hotel ', 'gallery-img1.jpg', '2020-02-10 16:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `amount` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `description`, `category`, `amount`, `file`) VALUES
(42, ' Italian Wallpapper ', 'WallPappers,WallPanel/Installation', '2000 per yard', 'page4-img4.jpg'),
(43, ' American Wallpaper ', 'WallPappers,WallPanel/Installation', '3000 per yard', 'thumb-3.jpg'),
(44, ' Range Rover Cover Matt ', 'Motors Interior/Accessories', '50000', 'bg-top.jpg'),
(46, ' Honda Accord Leather  Seat Cover ', 'Motors Interior/Accessories', '23,000', 'gallery-img1.jpg'),
(47, ' Frontline teamare super creative ', 'Space-management', '29,000', 'gallery-img6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed`
--

CREATE TABLE `recently_viewed` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `viewdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recentwork`
--

CREATE TABLE `recentwork` (
  `id` int(11) NOT NULL,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `description` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recentwork`
--

INSERT INTO `recentwork` (`id`, `day`, `month`, `year`, `description`, `file`) VALUES
(4, '11 ', 'october ', '2017 ', ' Work carried out in presidential suite A braka ', 'page1-img1.jpg'),
(6, 'Thursday ', 'June ', '2011 ', ' Frontline teamare super creative ', 'gallery-img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `productname` text NOT NULL,
  `price` int(11) NOT NULL,
  `product` text NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `goods` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `firstName`, `lastName`, `phone`, `address`, `city`, `state`, `goods`, `time`) VALUES
(12, 'Atim', 'Atim', '090999999999', '99 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '33', '2020-02-08 08:43:27'),
(13, 'Atim', 'Atim', '090999999999', '99 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '33,12', '2020-02-08 12:45:57'),
(14, 'Atim', 'Atim', '090999999999', '99 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '33,12', '2020-02-08 12:47:52'),
(15, 'Atim', 'Atim', '090999999999', '22/23 I ze Iyamu, Oregun', 'Lagos', 'Lagos', '33', '2020-02-08 20:52:40'),
(16, 'Atim', 'Atim', '090999999999', '22/23 I ze Iyamu, Oregun', 'Lagos', 'Lagos', '33', '2020-02-08 20:57:59'),
(17, 'Atim', 'Atim', '090999999999', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '33', '2020-02-08 21:18:17'),
(18, 'Atim', 'Atim', '090999999999', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '33', '2020-02-08 21:23:35'),
(19, 'Atim', 'Atim', '090999999999', '22/23 I ze Iyamu, Oregun', 'Lagos', 'Lagos', '33,12', '2020-02-08 21:51:48'),
(20, 'IMBLESSED', 'UKA', '09022222222222', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '33', '2020-02-09 14:21:05'),
(21, 'IMBLESSED', 'UKA', '09022222222222', '22/23 I ze Iyamu, Oregun', 'Lagos', 'Lagos', '12', '2020-02-09 15:06:52'),
(22, 'IMBLESSED', 'UKA', '09022222222222', '22/23 I ze Iyamu, Oregun', 'Lagos', 'Lagos', '12,9,11', '2020-02-09 15:07:18'),
(23, 'IMBLESSED', 'UKA', '09022222222222', '99 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '11,11', '2020-02-09 15:14:50'),
(24, 'IMBLESSED', 'UKA', '09022222222222', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '12,10', '2020-02-09 18:32:43'),
(25, '', '', '', '11 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42', '2020-02-10 22:52:45'),
(26, 'John', 'Anyawu', '0903333333', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,15,9,16', '2020-02-17 16:34:07'),
(27, 'John', 'Anyawu', '0903333333', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,15,9,16', '2020-02-17 16:34:43'),
(28, 'John', 'Anyawu', '0903333333', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,15,9,16', '2020-02-17 16:36:14'),
(29, 'John', 'Anyawu', '0903333333', '11 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,43,23,23,23,23,23,8', '2020-03-01 00:00:56'),
(30, 'John', 'Anyawu', '0903333333', '11 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,43,23,23,23,23,23,8', '2020-03-01 00:01:37'),
(31, 'John', 'Anyawu', '0903333333', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,43,23,23,23,23,23,8,23,4', '2020-03-03 18:21:38'),
(32, '', '', '', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,43,23,23,23,23,23,8,23,4', '2020-03-03 18:35:04'),
(33, 'Gloria22222222', 'Nwaaaaaaaaaaaa', '07068057873', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '10,10,46,44,42,46,43,43,23,23,23,23,23,8,23,4,23,16', '2020-03-04 23:57:41'),
(34, 'Gloria22222222', 'Nwaaaaaaaaaaaa', '07068057873', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', ',6', '2020-03-11 17:40:39'),
(35, 'Gloria22222222', 'Nwaaaaaaaaaaaa', '07068057873', '22/23 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', ',6', '2020-03-11 17:42:40'),
(36, 'Gloria22222222', 'Nwaaaaaaaaaaaa', '07068057873', '22/23 I ze Iyamu, Oregun', 'Lagos', 'Lagos', ',6', '2020-03-11 17:46:37'),
(37, 'Gloria22222222', 'Nwaaaaaaaaaaaa', '07068057873', '99 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', ',15', '2020-03-11 18:09:14'),
(38, 'Gloria22222222', 'Nwaaaaaaaaaaaa', '07068057873', '11 I ze Iyamu, Oregun, Lagos', 'Lagos', 'Lagos', '6', '2020-03-11 18:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimages`
--

CREATE TABLE `sliderimages` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliderimages`
--

INSERT INTO `sliderimages` (`id`, `photo`) VALUES
(1, 'gallery-img1.jpg'),
(2, 'gallery-img1.jpg'),
(3, 'slide.jpg'),
(4, 'pic.jpg'),
(5, 'gallery-img3.jpg'),
(6, 'gallery-img1.jpg'),
(7, 'frontline.jpg'),
(8, 'gallery-img6.jpg'),
(9, 'gallery-img2.jpg'),
(10, 'page4-img4.jpg'),
(11, 'gallery-img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `name` text NOT NULL,
  `post` text NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `descriptions`, `name`, `post`, `company`) VALUES
(1, ' No one designs to their clients better than FrontLine Interiors. They are simply the best when it comes interior decore and furniture', 'ESSIEN ALEX ', 'Senior Web Developer & Programmer ', 'Ceflix Scepter '),
(2, '\" No one designs to their clients better than FrontLine Interiors. They are simply the best when it comes interior decore and furniture\" ', 'Glory Nwa ', 'Senior Web Developer & Programmer ', 'Ceflix Scepter '),
(3, '\" No one designs to their clients better than FrontLine Interiors. They are simply the best when it comes interior decore and furniture\" ', 'chinwe Okonkwo ', 'Senior Web Developer & Programmer ', 'GTBank ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyprofile`
--
ALTER TABLE `companyprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newarrivals`
--
ALTER TABLE `newarrivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productarchive`
--
ALTER TABLE `productarchive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recentwork`
--
ALTER TABLE `recentwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimages`
--
ALTER TABLE `sliderimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `companyprofile`
--
ALTER TABLE `companyprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newarrivals`
--
ALTER TABLE `newarrivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ordered_items`
--
ALTER TABLE `ordered_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productarchive`
--
ALTER TABLE `productarchive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recentwork`
--
ALTER TABLE `recentwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `sliderimages`
--
ALTER TABLE `sliderimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
