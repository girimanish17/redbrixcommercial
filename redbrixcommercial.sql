-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 10:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redbrixcommercial`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `content`, `slug`, `date`) VALUES
(3, 'sdf', 'acr.png', '<p>asdfasdf dfas</p>', '', 'sdf', '2023-10-31 03:31:10'),
(4, 'Top 5 Biggest Malls of Noida', 'acr.png', '<p>Noida is the rapidly growing city of NCR, with a large proportion of living in different centers in various sectors across the city. The huge population creates a huge demand for shopping and entertainment options because these urban populations are working populations who have money to spend on various things such as entertainment, shopping, and having quality food and cuisines.</p>\r\n\r\n<p>The&nbsp;<a href=\"#\"><strong>shop space in Noida</strong></a>&nbsp;has a wide range of options available and development across different sectors of Noida. There are a lot of opportunities for the already existing brands that come and serve the market in Noida, which will play a crucial role in developing the retail segment of Noida.</p>\r\n\r\n<p>Investing in the malls can be a good step because they generate a good rental income, and malls are strategically placed over the high footfall location, because of which chance of good capital appreciation is always there over the long term in a city like Noida.&nbsp;</p>', '', 'top-5-biggest-malls-of-noida', '2023-11-01 05:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Shops/Showroom'),
(2, 'Office Space'),
(3, 'Food Court');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_contact`
--

CREATE TABLE `enquiry_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `message` varchar(355) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_contact`
--

INSERT INTO `enquiry_contact` (`id`, `name`, `contact`, `email`, `address`, `message`, `date`) VALUES
(1, 'RIzwan Khan', '9876543210', 'rizwan@gmail.com', 'test address', 'testing msg', '2023-11-03'),
(2, 'Bemi Brooks', '1234567890', 'bemibrooks.dev@gmail.com', '3080 Grove Avenue', 'Hello team - redbrixcommercial.com,\r\n\r\nI found your details on Google.com and I have looked at your website and realized your website has great design but your website ranking is not good on all search engines Google, AOL, Yahoo and Bing.\r\n\r\nWe can increase targeted traffic to your website so that it appears on Google\'s first page. Bing, Yahoo, AOL, etc', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_project`
--

CREATE TABLE `enquiry_project` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry_project`
--

INSERT INTO `enquiry_project` (`id`, `project_id`, `first_name`, `last_name`, `email`, `contact`, `date`) VALUES
(1, NULL, 'rk', 'test', 'test@yahoo.com', '7894561230', '2023-11-02'),
(2, '', 'Jolina', 'Hadfield', 'arda_bourrouag98@mteen.net', '7723577131', '2023-11-04'),
(3, '', 'Jolina', 'Hadfield', 'hugolehmann92@outlook.com', '7723577131', '2023-11-04'),
(4, '', 'Jolina', 'Hadfield', 'arda_bourrouag98@mteen.net', '9488504993', '2023-11-04'),
(5, '', 'Jolina', 'Hadfield', 'keithbarrows88@aol.com', '7723577131', '2023-11-04'),
(6, '', 'Jolina', 'Hadfield', 'keithbarrows88@aol.com', '7723577131', '2023-11-04'),
(7, '', 'Ceasar', 'Muller', 'nora.schowalter@mteen.net', '7723577131', '2023-11-04'),
(8, '', 'Ceasar', 'Muller', 'keithbarrows88@aol.com', '7723577131', '2023-11-04'),
(9, '', 'Ceasar', 'Muller', 'nora.schowalter@mteen.net', '4362053469', '2023-11-04'),
(10, '', 'Ceasar', 'Muller', 'hugolehmann92@outlook.com', '7723577131', '2023-11-04'),
(11, '', 'Ceasar', 'Muller', 'hugolehmann92@outlook.com', '7723577131', '2023-11-04'),
(12, '', 'Myrna', 'Blick', 'marianna.stokes72@mteen.net', '7723577131', '2023-11-04'),
(13, '', 'Myrna', 'Blick', 'keithbarrows88@aol.com', '7723577131', '2023-11-04'),
(14, '', 'Myrna', 'Blick', 'marianna.stokes72@mteen.net', '3695450113', '2023-11-04'),
(15, '', 'Myrna', 'Blick', 'hugolehmann92@outlook.com', '7723577131', '2023-11-04'),
(16, '', 'Myrna', 'Blick', 'hugolehmann92@outlook.com', '7723577131', '2023-11-04'),
(17, '6', ' test', 'giri', 'admin@gmail.com', '9639639632', '2023-11-05'),
(18, '', 'Beth', 'Bernhard', 'baby.vonrueden@tf-info.com', '8022429111', '2023-11-07'),
(19, '', 'Beth', 'Bernhard', 'baby.vonrueden@tf-info.com', '8022429111', '2023-11-07'),
(20, '', 'Beth', 'Bernhard', 'brandonfarmer75@outlook.com', '8022429111', '2023-11-07'),
(21, '', 'Beth', 'Bernhard', 'parkercatherine622@gmail.com', '8022429111', '2023-11-07'),
(22, '', 'Beth', 'Bernhard', 'parkercatherine622@gmail.com', '8022429111', '2023-11-07'),
(23, '', 'Dejuan', 'Strosin', 'rhett_smitham@tf-info.com', '4939508710', '2023-11-07'),
(24, '', 'Dejuan', 'Strosin', 'brandonfarmer75@outlook.com', '4939508710', '2023-11-07'),
(25, '', 'Dejuan', 'Strosin', 'rhett_smitham@tf-info.com', '4939508710', '2023-11-07'),
(26, '', 'Dejuan', 'Strosin', 'parkercatherine622@gmail.com', '4939508710', '2023-11-07'),
(28, '', 'Aakansha', 'Jain', 'jainaaka@gmail.com', '9039677154', '2023-11-08'),
(30, '', 'Alec', 'Torphy', 'merl24@bocah.team', '8065135749', '2023-11-13'),
(31, '', 'Alec', 'Torphy', 'merl24@bocah.team', '8065135749', '2023-11-13'),
(32, '', 'Alec', 'Torphy', 'brandonfarmer75@outlook.com', '6348976149', '2023-11-13'),
(33, '', 'Alec', 'Torphy', 'danupton1@aol.com', '8065135749', '2023-11-13'),
(34, '', 'Alec', 'Torphy', 'danupton1@aol.com', '8065135749', '2023-11-13'),
(35, '', 'Darryl', 'Wunsch', 'adelle_anderson71@bocah.team', '8065135749', '2023-11-13'),
(36, '', 'Darryl', 'Wunsch', 'adelle_anderson71@bocah.team', '8065135749', '2023-11-13'),
(37, '', 'Darryl', 'Wunsch', 'brandonfarmer75@outlook.com', '2326353832', '2023-11-13'),
(38, '', 'Darryl', 'Wunsch', 'danupton1@aol.com', '8065135749', '2023-11-13'),
(39, '', 'Darryl', 'Wunsch', 'danupton1@aol.com', '8065135749', '2023-11-13'),
(40, '', 'Carolina', 'Kutch', 'issac.cartwright@bocah.team', '8065135749', '2023-11-13'),
(41, '', 'Carolina', 'Kutch', 'issac.cartwright@bocah.team', '8065135749', '2023-11-13'),
(42, '', 'Carolina', 'Kutch', 'brandonfarmer75@outlook.com', '0375656812', '2023-11-13'),
(43, '', 'Carolina', 'Kutch', 'danupton1@aol.com', '8065135749', '2023-11-13'),
(44, '', 'Carolina', 'Kutch', 'danupton1@aol.com', '8065135749', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `project_id`, `image`) VALUES
(11, '5', 'gallery1.jpg'),
(12, '5', 'gallery2.jpg'),
(13, '5', 'gallery3.jpg'),
(14, '6', '600x1067_(2).png'),
(15, '6', '600x1067.png'),
(16, '6', '900x1600_(2).png'),
(17, '6', '900x1600.png'),
(18, '6', '1200x628_(2).png'),
(19, '6', '1200x628.png'),
(20, '6', '1200x1200_(2).png'),
(21, '6', '1200x1200.png');

-- --------------------------------------------------------

--
-- Table structure for table `home_section`
--

CREATE TABLE `home_section` (
  `id` int(11) NOT NULL,
  `video` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_section`
--

INSERT INTO `home_section` (`id`, `video`, `date`) VALUES
(1, '95d59d77c34ebebe19182f334f31019d.mp4', '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_type` varchar(150) NOT NULL,
  `project_status` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_plan` varchar(100) NOT NULL,
  `rera_no` varchar(255) NOT NULL,
  `address` varchar(355) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `home_slider_image` varchar(255) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `highlight_bg_image` varchar(255) NOT NULL,
  `amenties_bg_image` varchar(255) NOT NULL,
  `exclusive_projects` varchar(20) DEFAULT NULL,
  `featured_listing` varchar(20) DEFAULT NULL,
  `guaranteed_return_project` varchar(20) DEFAULT NULL,
  `other_properties` varchar(20) DEFAULT NULL,
  `project_description` longtext NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category`, `project_title`, `project_type`, `project_status`, `price`, `payment_plan`, `rera_no`, `address`, `bg_image`, `home_slider_image`, `project_image`, `highlight_bg_image`, `amenties_bg_image`, `exclusive_projects`, `featured_listing`, `guaranteed_return_project`, `other_properties`, `project_description`, `date`, `status`, `slug`) VALUES
(5, 2, 'Minima pariatur Inv', '3, 4, 5 BHK APARTMANET', '1', '1 Cr Onwards', '40:60', 'URPSKKD26555', 'bangali street', 'Golden_Grande.png', '7d1af631d15b1d6801cf3ac3244edc27.png', 'Gaur_WSS.png', 'acr.png', 'welcome11.jpg', '1', '1', '1', '1', '<p>Availability of Office Space: Noida has a large number of commercial complexes, office buildings, and IT parks, providing a wide range of options for companies looking to set up their offices.</p>\r\n\r\n<p>Affordable Rentals: Compared to Delhi, the rentals for commercial properties in Noida are relatively lower, making it a cost-effective location for businesses.</p>\r\n\r\n<p>Growing Economy: Noida is a thriving industrial and business hub, driven by the IT/ITeS, manufacturing, and real estate sectors. This has led to an increase in job opportunities and a growing population, providing a large market for commercial properties.</p>', '2023-11-01', 1, 'minima-pariatur-inv'),
(6, 1, 'M3M The Cullinan - High Street Retail Shops', 'High Street Retail Shops', '1', 'Rs. 1 Cr Onwards*', '40:60', 'UPRERAPRJ442214', 'Sector 94, Noida', '07f52f9b953617243c2831038aa9d80d.png', 'd576555268621b9072a4842db93d0e4d.png', '1200x1200.png', 'Highlights.png', 'aminities.png', '1', '1', '1', NULL, '<p>As Noida continues to grow and attract businesses from all sectors, finding a wise investment choice has<br />\r\nbecome more crucial than ever. Here&rsquo;s how M3M the Cullinan Retail Shops offer an enticing<br />\r\nopportunity that savvy investors simply cannot ignore.<br />\r\n<strong>1. Luxurious Shopping Experience: </strong>M3M Noida retail shops are designed to provide a luxurious shopping<br />\r\nexperience to customers. The high-end design and architecture, along with the premium facilities like<br />\r\nconcierge services, make it an ideal destination for high-end retail brands. This is a major draw for<br />\r\nbusinesses looking to establish their presence in the upscale market of Noida.<br />\r\n&nbsp;</p>', '2023-11-01', 1, 'm3m-the-cullinan-high-street-retail-shops');

-- --------------------------------------------------------

--
-- Table structure for table `project_amenties`
--

CREATE TABLE `project_amenties` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `pm_points` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_amenties`
--

INSERT INTO `project_amenties` (`id`, `project_id`, `pm_points`) VALUES
(330, '5', 'Id sint veniam ame'),
(331, '5', 'Omnis cumque et comm'),
(332, '5', 'Proident quos nesci'),
(333, '5', 'Duis hic quibusdam a'),
(334, '5', 'Ipsa reiciendis hic'),
(335, '5', 'Laborum Cumque prov'),
(336, '5', 'Quasi assumenda inci'),
(365, '6', '24×7 security with CCTV surveillance'),
(366, '6', 'Fire Fighting System'),
(367, '6', 'High Speed Elevator'),
(368, '6', 'Lift Lobby'),
(369, '6', 'Power Backup'),
(370, '6', 'Rain Water Harvesting'),
(371, '6', 'Sewage Treatment Plant (STP)');

-- --------------------------------------------------------

--
-- Table structure for table `project_highlights`
--

CREATE TABLE `project_highlights` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `ph_point` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_highlights`
--

INSERT INTO `project_highlights` (`id`, `project_id`, `ph_point`) VALUES
(330, '5', 'Rerum beatae non quo'),
(331, '5', 'Consequatur sit ve'),
(332, '5', 'In velit voluptatem'),
(333, '5', 'Aliquid aut officia '),
(334, '5', 'Irure ut saepe aut l'),
(335, '5', 'Ea eos reiciendis f'),
(336, '5', 'Quasi provident in '),
(365, '6', '12 double-height anchor stores'),
(366, '6', 'Fusion of anchor & vanilla stores with pop-ups'),
(367, '6', 'Extra vehicle stack parking: 3100+ spaces'),
(368, '6', 'Central landscape plaza for high-street retail'),
(369, '6', 'Large store fronts with glazing areas'),
(370, '6', 'Highest traffic by leveraging the convenient car drop-off area, specifically designed to enhance footfall'),
(371, '6', 'Premium anchor stores are strategically positioned on the lower ground floor');

-- --------------------------------------------------------

--
-- Table structure for table `project_retail`
--

CREATE TABLE `project_retail` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `pr_title` varchar(255) NOT NULL,
  `pr_price` varchar(50) NOT NULL,
  `pr_size` varchar(100) NOT NULL,
  `pr_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_retail`
--

INSERT INTO `project_retail` (`id`, `project_id`, `pr_title`, `pr_price`, `pr_size`, `pr_type`) VALUES
(151, '5', 'Iure vero non in eni', '₹ 34,48 Lacs - 1.05 Cr', '138-421 Sq.Ft', '3'),
(152, '5', 'Soluta illo dolores', '₹ 34,48 Lacs - 1.05 Cr', '138-421 Sq.Ft', '1'),
(153, '5', 'Ut quis quibusdam ve', '₹ 34,48 Lacs - 1.05 Cr', '138-421 Sq.Ft', '2'),
(154, '5', '', '', '', ''),
(171, '6', 'High Street Retail Shops', '₹ 1 Cr* Onwards', '600-2000 Sq.Ft', '1'),
(172, '6', 'High Street Retail Shops', '₹ 2 Cr* Onwards', '600-2000 Sq.Ft', '2'),
(173, '6', 'High Street Retail Shops', '₹ 1.5 Cr* Onwards', '600-2000 Sq.Ft', '3'),
(174, '6', 'test4', '1500cr', '1500sqft.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `id` int(11) NOT NULL,
  `project_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`id`, `project_status`) VALUES
(1, 'Under Construction'),
(2, 'New'),
(3, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `retail_type`
--

CREATE TABLE `retail_type` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `retail_type`
--

INSERT INTO `retail_type` (`id`, `type`) VALUES
(1, 'Lower Ground'),
(2, 'Ground Floor'),
(3, 'First Floor'),
(4, 'Above First Floor');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date`) VALUES
(1, 'demo@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(250) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created_date`, `name`, `mobile_no`, `description`, `entry_date`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2018-07-22 09:11:58', 'Admin', '9098343935', '', '2018-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_contact`
--
ALTER TABLE `enquiry_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_project`
--
ALTER TABLE `enquiry_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section`
--
ALTER TABLE `home_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_amenties`
--
ALTER TABLE `project_amenties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_highlights`
--
ALTER TABLE `project_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_retail`
--
ALTER TABLE `project_retail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_type`
--
ALTER TABLE `retail_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry_contact`
--
ALTER TABLE `enquiry_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry_project`
--
ALTER TABLE `enquiry_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `home_section`
--
ALTER TABLE `home_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_amenties`
--
ALTER TABLE `project_amenties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

--
-- AUTO_INCREMENT for table `project_highlights`
--
ALTER TABLE `project_highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

--
-- AUTO_INCREMENT for table `project_retail`
--
ALTER TABLE `project_retail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `retail_type`
--
ALTER TABLE `retail_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
