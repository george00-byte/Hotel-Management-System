-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `agent` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent`, `email`, `username`, `secondname`, `role`, `created_at`, `image`) VALUES
(11, 1, 'hector@gmail.com', 'Daniel', 'ZIgler', 'Real Estate Agent', '2022-05-19 19:34:21', '1652988861_zahir-namane-hwc7eIQiTCE-unsplash.jpg'),
(12, 1, 'rey@gmail.com', 'Rey', 'Reyden', 'Real Estate Agent', '2022-05-19 19:35:12', '1652988912_gregory-hayes-h5cd51KXmRQ-unsplash.jpg'),
(14, 1, 'karen@gmail.com', 'Karen', 'Patterson', 'Real Estate Agent', '2022-05-19 19:37:33', '1652989053_michael-dam-mEZ3PoFGs_k-unsplash.jpg'),
(15, 1, 'Jacobsz@gamil.som', 'Jacobs', 'zimmerman', 'Real Estate Agent', '2022-05-19 19:43:23', '1652989403_mahdi-bafande-XCU9ZV_ys5w-unsplash.jpg'),
(16, 1, 'zeus@gmail.com', 'Matty', 'Reyes', 'Real Estate Agent', '2022-05-19 19:44:37', '1652989477_matheus-ferrero-W7b3eDUb_2I-unsplash.jpg'),
(17, 1, 'jordanash@gmail.com', 'Jordan', 'Ashgar', 'Real Estate Agent', '2022-05-19 19:46:14', '1652989574_hannah-nicollet-JQ2D4I-2eyw-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `secondName` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `checkIn` text NOT NULL,
  `checkOut` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`id`, `username`, `secondName`, `email`, `phone`, `checkIn`, `checkOut`, `address`) VALUES
(6, 'George', 'Rey', 'georgeodmbo007@gmail.com', '0743435', '2022-11-25', '2022-11-24', 'Juventus 470 12th, unit 1, philadelphia');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `published`, `email`, `username`, `secondname`, `testimonial`, `created-at`, `image`) VALUES
(7, 1, 'Rose.lm@gmail.com', 'Saulo', 'Cavary', '&lt;p&gt;This was the greatest service i have ever had. Actually It was far more greater than any sevice. The houses are at their apex aesthetic conditions. keep it up&lt;/p&gt;', '2022-05-20 18:53:25', '1653072805_rowan-freeman-G-4OXlHo86o-unsplash.jpg'),
(8, 1, 'manson@gmail.com', 'Jake', 'Manson', '&lt;p&gt;&lt;strong&gt;Byzantium you have the best real estate properties i have ever ventured in. I will keep on investing with you. You are great indeed.&lt;/strong&gt;&lt;/p&gt;', '2022-05-20 18:55:16', '1653072916_shamsul-alam-topu-uf914SzMn9k-unsplash.jpg'),
(9, 1, 'janesans@gmail.com', 'Jane', 'Schopenour', '&lt;p&gt;I was not sure at first if the property i bought with you would be the way I expected it. It turns out it was even more than i expected&lt;/p&gt;', '2022-05-20 19:03:48', '1653073428_vladislav-todorov-joINR2EKnvY-unsplash (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `sold` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `year` text NOT NULL DEFAULT 'Not Defined',
  `overview` varchar(255) NOT NULL,
  `agentimage` varchar(255) NOT NULL,
  `agentname` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL DEFAULT 'Tenats wishes',
  `parking` text NOT NULL,
  `heating` text NOT NULL DEFAULT 'Natural',
  `cooling` text NOT NULL DEFAULT '\'Natural\'',
  `appliances` varchar(255) NOT NULL DEFAULT 'Not mentioned',
  `basement` varchar(255) NOT NULL DEFAULT '''None''',
  `flooring` varchar(255) NOT NULL,
  `interiorfeautures` varchar(255) NOT NULL,
  `newconstruction` text NOT NULL DEFAULT 'No',
  `discountedprice` text NOT NULL,
  `walking` text NOT NULL DEFAULT 'Pedestrial',
  `transit` text NOT NULL DEFAULT 'Transit line',
  `rating` int(11) NOT NULL,
  `stories` text NOT NULL DEFAULT 'Non Storie',
  `exteriorfeautures` varchar(255) NOT NULL,
  `fencing` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `price`, `beds`, `baths`, `size`, `address`, `image`, `published`, `sold`, `created_at`, `year`, `overview`, `agentimage`, `agentname`, `community`, `family`, `parking`, `heating`, `cooling`, `appliances`, `basement`, `flooring`, `interiorfeautures`, `newconstruction`, `discountedprice`, `walking`, `transit`, `rating`, `stories`, `exteriorfeautures`, `fencing`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(30, 'Juventus', '4,000,000', 5, 5, '43000', '470 12th, unit 1, philadelphia', '1654071700_bailey-anselme-Bkp3gLygyeA-unsplash.jpg', 1, 0, '2022-06-01 08:21:40', '1993', '<p>&nbsp;</p><p>This is one of the best property. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers and', '1654071700_zahir-namane-hwc7eIQiTCE-unsplash.jpg', 'Daniel ZIgler', 'Sanfransisco', 'single family', '3', 'Forced air', 'Central air', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Rame/Oven, Dishwasher', 'None', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '3,500,000', 'car-dependent', 'Minimal Transit', 8, '2', 'Stone, wood', 'Fenced yard', '1654071700_kara-eads-L7EwHkq1B2s-unsplash.jpg', '1654071700_christian-mackie-yb9b2wbhxG4-unsplash.jpg', '1654071700_dane-deaner-l2eTNVrendQ-unsplash.jpg', '1654071700_annie-spratt-maS7GmsVeRs-unsplash.jpg', '1654071700_dakota-lim-n_2DimPwbEk-unsplash.jpg', '1654071700_jason-briscoe-UV81E0oXXWQ-unsplash.jpg'),
(31, 'Helium', '4,000,000', 5, 3, '3400', '940 40 400 Kileleshwa', '1654082788_backImage.jpg', 1, 0, '2022-06-01 11:26:28', '2000', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654082788_hannah-nicollet-JQ2D4I-2eyw-unsplash.jpg', 'Jordan Ashgar', 'Nairobi', 'Not specified', '3', 'Forced air', 'Central air', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Dishwasher', 'None', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '3,500,000', 'car-dependent', 'Minimal Transit', 7, '2', 'Stone, wood', 'Fenced yard', '1654082788_brett-jordan-Ox49Toau6Tc-unsplash.jpg', '1654082788_brian-wangenheim-W_yMFXQlKqQ-unsplash.jpg', '1654082788_christian-mackie-yb9b2wbhxG4-unsplash.jpg', '1654082788_kenny.jpg', '', '1654082788_hutomo-abrianto-X5BWooeO4Cw-unsplash.jpg'),
(32, 'Jeinsons', '5,000,000', 4, 3, '3400', '330 450 Embakasi', '1654083178_background.jpg', 1, 0, '2022-06-01 11:32:58', '2020', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654083178_gregory-hayes.jpg', 'Rey Reyden', 'Nairobi', 'Not specified', 'none', 'Natural', 'Electric', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Rame/Oven, Dishwasher', 'None', ' Hardwood, Laminate, Carpet', 'Not listed', 'No', '4,500,000', 'Pedestrial', 'Transit Line', 7, '1', 'Stone', 'fenced', '1654083178_aaron-huber-G7sE2S4Lab4-unsplash.jpg', '1654083178_thanos-pal-61TfyNIrWmI-unsplash.jpg', '1654083178_spacejoy-YI2YkyaREHk-unsplash.jpg', '1654083178_moments-kqCx4n-R8G8-unsplash.jpg', '1654083178_spacejoy-umAXneH4GhA-unsplash.jpg', '1654083178_sidekix.jpg'),
(33, 'Subab Onstains', '5,000,000', 5, 3, '3', '470 12th, unit 14, Kilifi', '1654083586_todd-kent-178j8tJrNlc-unsplash.jpg', 1, 0, '2022-06-01 11:39:46', '2020', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654083586_gregory-hayes.jpg', 'Rey Reyden', 'Kilifi', 'Not specified', '1', 'Forced air', 'Central air', ' Refrigerator, Freezer, Garbage Disposal, Microwave, Rame/Oven', 'None', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '3,400,0000', 'Pedestrial', 'Minimal Transit', 7, '2', 'Stone, wood', 'Fenced yard', '1654083586_spacejoy-RqO6kwm4tZY-unsplash.jpg', '1654083586_randy-fath-csK5XPO87lI-unsplash.jpg', '1654083586_mk-s--I-C7qtq1oY-unsplash.jpg', '1654083586_or-hakim-j2GVZooXrgg-unsplash.jpg', '1654083586_jose-rago-LNlJ0WZHiEs-unsplash.jpg', '1654083586_dcbel-JmLk8QycRTY-unsplash.jpg'),
(34, 'Villa Limas', '3,000,0000', 4, 3, '3250', '480 12th, unit 15, Fresi Barida', '1654084044_zac-gudakov-FH3zlDsY4Z4-unsplash.jpg', 1, 0, '2022-06-01 11:47:24', '2007', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654084044_matheus-ferrero-W7b3eDUb_2I-unsplash.jpg', 'Matty Reyes', 'Nairobi', 'single family', '3', 'Natural', 'Central air', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Dishwasher', '1 basement', 'Tiles', 'Fireplace', 'No', '2,500,000', 'car-dependent', 'Transit Line', 8, '2', 'Stone, wood', 'Fenced yard', '1654084044_jason-briscoe-UV81E0oXXWQ-unsplash.jpg', '1654084044_francesca-tosolini-tHkJAMcO3QE-unsplash.jpg', '1654084044_mk-s-d4xIaYkK0G4-unsplash.jpg', '1654084044_decima-athens-7JPESPAhpZ0-unsplash.jpg', '1654084044_kenny-eliason-Wp7t4cWN-68-unsplash.jpg', '1654084044_krystal-black-V5OEpF12pzw-unsplash.jpg'),
(35, 'Killsoniguns', '3,000,000', 4, 3, '3500', '480 12th, unit 12, kilifi', '1654084459_joel-filipe-RFDP7_80v5A-unsplash.jpg', 1, 0, '2022-06-01 11:54:19', '1998', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654082788_hannah-nicollet-JQ2D4I-2eyw-unsplash.jpg', 'Jordan Ashgar', 'Kilifi', 'Not specified', '1', 'Forced air', '470 12th, unit 1, philadelphia', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Rame/Oven, Dishwasher', '1 basement', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '2,500,000', 'car-dependent', 'Transit Line', 8, '2', 'Stone, wood', 'Fenced yard', '1654084459_francesca-tosolini-tHkJAMcO3QE-unsplash.jpg', '1654084459_or-hakim-j2GVZooXrgg-unsplash.jpg', '1654084459_edgar-castrejon-CX8ooha2yLA-unsplash.jpg', '1654084459_lissete-laverde-z9Ropm8edsw-unsplash.jpg', '1654084459_spacejoy.jpg', '1654084459_ronnarit-jirathanyakorn-JpvX-0YR4gM-unsplash.jpg'),
(36, 'Dustin Pillars', '4,000,000', 6, 3, '3500', '20 430 Nairobi', '1654085670_webaliser-_TPTXZd9mOo-unsplash.jpg', 1, 0, '2022-06-01 12:14:30', '2020', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654085670_hannah-nicollet-JQ2D4I-2eyw-unsplash.jpg', 'Jordan Ashgar', 'Nairobi', 'Not specified', '1', 'Forced air', 'Central air', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Dishwasher', '1 basement', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '3,200,000', 'car-dependent', 'Transit Line', 8, '1', 'Stone', 'Fenced yard', '1654085670_sidekix.jpg', '1654085670_spacejoy-uGWNcejbf2E-unsplash.jpg', '1654085670_spacejoy-RqO6kwm4tZY-unsplash.jpg', '1654085670_francesca.jpg', '1654085670_chastity-cortijo-6TY_WrJTwSI-unsplash.jpg', '1654085670_decima-athens-3LEl7hKPp7w-unsplash.jpg'),
(37, 'Timber Showzie', '4,000,000', 5, 5, '2300sqft', '20 433 Nairobi', '1654086053_r-architecture-2gDwlIim3Uw-unsplash.jpg', 1, 0, '2022-06-01 12:20:53', '2000', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654086053_mohamad-khosravi--eb0moHDPBI-unsplash.jpg', 'Mohammed Sufi', 'Nairobi', 'single family', '3', 'Forced air', 'Electric', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Rame/Oven, Dishwasher', '1 basement', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '3,600,000', 'Pedestrial', 'Transit Line', 7, '1', 'Stone, wood', 'Fenced yard', '1654086053_brian-wangenheim-W_yMFXQlKqQ-unsplash.jpg', '1654086053_becca-tapert-sY5RjMB1KkE-unsplash.jpg', '1654086053_francesca.jpg', '1654086053_filios-sazeides-qeIuFR5vPm8-unsplash.jpg', '1654086053_naomi-hebert-MP0bgaS_d1c-unsplash.jpg', '1654086053_spacejoy-YI2YkyaREHk-unsplash.jpg'),
(38, 'Jade Villa', '5,000,000', 4, 3, '1993', '470 12th, unit 14, philadelphia', '1654086438_todd-kent-178j8tJrNlc-unsplash.jpg', 1, 1, '2022-06-01 12:25:27', '1993', '<p>&nbsp;</p><p>This is one of the best properties. A hidden GEM in the Heart of the city. Free from the buzzing</p><p>Noises. It is surely the best place to stay in. It is filles with natures lovely</p><p>birds of every kind. Insects, beautiful flowers a', '1654086438_mohamad-khosravi--eb0moHDPBI-unsplash.jpg', 'Jordan Ashgar', 'Kilifi', 'single family', '1', 'Forced air', 'Electric', 'Dryer, Washer, Refrigerator, Freezer, Garbage Disposal, Microwave, Rame/Oven, Dishwasher', 'None', ' Hardwood, Laminate, Carpet', 'Fireplace', 'No', '4,500,000', 'Pedestrial', 'Transit Line', 8, '2', 'Stone, wood', 'Fenced yard', '1654086327_naomi-hebert-MP0bgaS_d1c-unsplash.jpg', '1654086327_brett-jordan-Ox49Toau6Tc-unsplash (1).jpg', '1654086327_becca-tapert-sY5RjMB1KkE-unsplash.jpg', '1654086327_brett-jordan-Ox49Toau6Tc-unsplash.jpg', '1654086327_christian-mackie-yb9b2wbhxG4-unsplash (1).jpg', '1654086327_christian-mackie-yb9b2wbhxG4-unsplash (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created-at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created-at`, `image`) VALUES
(29, 1, 'George', 'georgeodh@ueab.ac.ke', '$2y$10$Pk06zf/tPvp9Upys2cRO.ubUajx4bR3d8UDoNPqFDYlrwMZBSJFPG', '2022-05-18 10:20:17', '1653158229_juanma-velasquez-JrNsKhB5aRQ-unsplash.jpg'),
(36, 0, 'George', 'georgeodmbo007@gmail.com', '$2y$10$pN7RLLt9N.jVyochV.nckuZkIj0OMGY5cb1FZxQ85v/jdVoABk0am', '2022-05-21 13:15:07', ''),
(37, 0, 'Hector', 'hector@gmail.com', '$2y$10$HjYWdUkBTDRDHKoZyG2vXOyDM2NyUr3.pZUNZ4qWqb8wZ2PyoTRDe', '2022-05-21 13:27:26', ''),
(38, 0, 'Ruby', 'ruby@gmail.com', '$2y$10$4Huvwj1YN/zFiumOtdXlCOuJVgTgxs3W6wZd9Vn9JPOtLTQU.AKsy', '2022-05-21 13:32:39', ''),
(39, 0, 'George', 'test@ueab.ac.ke', '$2y$10$eQL338zC.mauRHx9EIpPwOFsteBydKDqMACk2aOIvdgNATV3.fpEG', '2022-10-14 11:05:44', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
