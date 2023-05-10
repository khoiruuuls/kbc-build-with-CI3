-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 07:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbc-build`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `id` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`id`, `nama`, `profesi`, `photo`) VALUES
(0, 'Ruaniwati', 'Profesi Coach', './assets/img/consultant/ruaniwati.jpg'),
(1, 'Andri Eriek', 'President Director', './assets/img/consultant/andri.jpg'),
(2, 'Agus Sanetyo', 'Profesi Coach', './assets/img/consultant/agus.jpg'),
(3, 'Yuliawaty', 'Profesi Psycholog', './assets/img/consultant/yuliawaty.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `price` int(8) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `name`, `content`, `price`, `photo`) VALUES
(1, 'Kingdom Financial Kids', 'When kids leave home, they face some heavy financial responsibilities, including creating a budget and choosing the right investments for their long-term goals. Much of the time, however, they’re woefully unprepared for those challenges.\r\n\r\nMany kids grow up in households where parents simply aren’t comfortable talking about money. And in much of the country, they’re not required to get a financial education at school, either. That’s why, according to a 2019 study by Experian, as many as 76% of Gen Z respondents said they wished they had been able to take a financial education class.\r\n1\r\n And in 2022, the Investopedia Financial Literacy Survey found that only one in four Gen Zers feel that they understand the stock market well enough to explain how it works to a friend.\r\n\r\nThe good news is that there are plenty of great money-related resources for kids on the Internet and on library bookshelves—you just need to know where to look. Here are some of our faves when it comes to teaching children the basic financial skills they’ll need and, even more importantly, down the road as independent adults. ', 1500000, './assets/img/program/1.jpeg'),
(2, 'Workshop Lifting Up', 'Several years ago my spouse and I built our second new home. It is a process that we greatly enjoy in spite of the fact that it can be more than a little stressful. When building a new home there are a lot of decisions to be made. These decisions include selecting a builder, a floor plan, the type of exterior you want (brick, siding, stucco, for example), selecting your flooring, fixtures, and lighting, and on and on it goes. Some people prefer to buy an existing home because they find this plethora of decisions overwhelming. However, my spouse and I prefer making these decisions ourselves so that we can get exactly what we want and so we can watch our empty lot be transformed into a home.\r\n\r\nOne of the advantages to building your own home is that you can directly and easily observe the quality going into it. Our first area of concern is the foundation. After our foundation is poured we look at it to assess whether it looks level and is free of any defects. We all know that a good foundation is critical. Without it, the quality of the rest of the construction can be irrelevant. Once we have a good foundation in place, we continue to monitor the construction. We take note of the quality of the materials being used as well as the quality of the framing job, plumbing, drywall, etc. Once the construction is completed and the buyers move into the house, the builder’s job is finished but the homeowner’s job is really just beginning because the house has to be maintained.\r\n\r\nRelated\r\nSurvey Types\r\n\r\n', 1250000, './assets/img/program/2.jpeg'),
(3, 'Building Business Through Peop', 'Several years ago my spouse and I built our second new home. It is a process that we greatly enjoy in spite of the fact that it can be more than a little stressful. When building a new home there are a lot of decisions to be made. These decisions include selecting a builder, a floor plan, the type of exterior you want (brick, siding, stucco, for example), selecting your flooring, fixtures, and lighting, and on and on it goes. Some people prefer to buy an existing home because they find this plethora of decisions overwhelming. However, my spouse and I prefer making these decisions ourselves so that we can get exactly what we want and so we can watch our empty lot be transformed into a home.\r\n\r\nOne of the advantages to building your own home is that you can directly and easily observe the quality going into it. Our first area of concern is the foundation. After our foundation is poured we look at it to assess whether it looks level and is free of any defects. We all know that a good foundation is critical. Without it, the quality of the rest of the construction can be irrelevant. Once we have a good foundation in place, we continue to monitor the construction. We take note of the quality of the materials being used as well as the quality of the framing job, plumbing, drywall, etc. Once the construction is completed and the buyers move into the house, the builder’s job is finished but the homeowner’s job is really just beginning because the house has to be maintained.\r\n\r\nRelated\r\nSurvey Types\r\n', 2500000, './assets/img/program/3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
