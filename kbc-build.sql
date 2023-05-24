-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 07:27 PM
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
-- Database: `kbc-build-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `id` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_handphone` varchar(12) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `akun_media` varchar(100) NOT NULL,
  `jumlah_client` int(11) NOT NULL,
  `spesialisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`id`, `name`, `profesi`, `photo`, `alamat`, `email`, `no_handphone`, `perusahaan`, `akun_media`, `jumlah_client`, `spesialisasi`) VALUES
(1, 'Andri Eriek', 'Coach', 'consultant (2).jpg', '', '', '', '', '', 0, ''),
(2, 'Yuliawaty ', 'Psycholog', 'consultant (3).jpg', '', '', '', '', '', 0, ''),
(3, 'Yuliawaty ', 'Psycholog', 'consultant (3).jpg', '', '', '', '', '', 0, ''),
(4, 'Ruaniwati', 'Coach', 'consultant (1).jpg', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `descProgram` text NOT NULL,
  `priceMin` int(20) NOT NULL,
  `priceMax` int(20) NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `mode` enum('online','hybrid','offline') DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `kuota` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `tag`, `type`, `descProgram`, `priceMin`, `priceMax`, `dateStart`, `dateEnd`, `time_start`, `time_end`, `mode`, `url`, `lokasi`, `alamat`, `kota`, `photo`, `kuota`) VALUES
(1, 'Shifting Up: Tranforming Your Business', '', 'Consulting', 'The word “transformation” gets thrown around a lot these days, but it can have different meanings for different individuals and companies. In a world of \nunprecedented disruption and market turbulence, transformation today revolves around the need to generate new value—to unlock new opportunities, to drive new growth, to deliver new efficiencies. \nAll transformations require you to rethink how your enterprise creates value today and in the future. In other words, all transformations require you to think big. Why? Because incremental improvement \nis not enough to win in today’s exponentially \ndisrupted business environment. Your organization \nrequires sustained growth in the face of near \nconstant disruption, and sustained growth requires \nagile reinvention. It’s not enough to win today. You \nhave to be able to continue to evolve in the future', 2500000, 3500000, '2023-03-23', '2023-05-23', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (1).jpg', 0),
(2, 'Transformasi Dimulai Dari Pemimpin', '', 'Training', 'Gaya kepemimpinan transformasional, menurut Indeed, adalah cara seorang pemimpin memotivasi dan memberdayakan orang-orang di bawah tanggung jawabnya untuk bekerja sama mewujudkan visi perusahaan.\r\n\r\nSemua itu dicapainya tanpa micromanaging. Seorang pemimpin transformasional justru memberikan anggotanya ruang lebih untuk mengasah berbagai skill yang mereka perlukan di tempat kerja.\r\n\r\nKeleluasaan tersebut memungkinkan mereka menjadi lebih kreatif berinovasi menemukan solusi baru untuk masalah lama, serta mampu melihat ke masa depan.\r\n\r\nDengan begitu, setiap karyawan memiliki kekuasaan untuk membuat keputusan dan bertindak sesuai kebutuhan dalam setiap pekerjaannya.\r\n\r\nLewat tempaan kepemimpinan transformasional, anggota menunjukkan tingkat kepuasan kerja dan komitmen yang tinggi. Mereka juga cenderung memiliki cara pandang baru dan sense of belonging yang lebih kuat. \r\n\r\nPada akhirnya, upaya transformasi ini memungkinkan pemimpin menciptakan budaya dan lingkungan kerja yang sehat, efektif, serta efisien bagi semua. ', 500000, 1250000, '2023-05-03', '2023-06-26', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (2).jpg', 0),
(3, 'Kingdom Financial for Kids Program', '', 'Coaching', 'As homeschoolers, we all know that a well-rounded education contains more than just the 3 R’s. In fact, in my home, it’s well known that all children are required to have a basic understanding of life skills that my husband and I feel are necessary. A big one for us is money management and money skills. We want to ensure our kids graduate with a basic understanding of what money is, why it’s necessary, and how to use it properly. And while my plan was to wait a little while longer, when my daughter and I learned of The Complete Starter Kit from The Kingdom Code we just knew we wanted to review their money management program, from a Biblical perspective.', 1500000, 1500000, '2023-06-24', '2023-07-01', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (3).jpg', 0),
(4, 'Sukses Sejati Blended Learning', '', 'Training', 'Sukses Sejati ini modelnya Blended Learning, dengan menggunakan aplikasi keren Gnowbe, semua bahan disampaikan disana, kita bisa mempelajarinya sendiri. Selain itu kami dibuatkan WhatsApp Group dan Telegram Group bersama dengan Fasilitator. Dan setiap satu atau dua minggu ada pertemuan yang disebut Saturday Together. \r\n\r\nSelama mengikuti ini saya banyak mendapatkan bahan super menarik untuk memperkaya dan memperkuat entrepreneurship terutama di dalam Tuhan Yesus, sang pemilik hidup kita. \r\n\r\nMateri-materi yang sangat berarti saya dapatkan diantaranya konsep GLORY dan 6 Harta yang harus kita ketahui lebih dalam. Semua ini semakin memperkuat pemahaman dan keyakinan saya, bahwa semua dalam hidup saya adalah untuk Tuhan sang pemilik hidup, termasuk juga bisnis dan usaha yang Tuhan ijinkan saya kelola selama ini.', 1500000, 1650000, '2023-06-24', '2023-07-08', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (4).jpg', 0),
(14, 'Sukses Sejati Blended Learning', '', 'Training', 'Sukses Sejati ini modelnya Blended Learning, dengan menggunakan aplikasi keren Gnowbe, semua bahan disampaikan disana, kita bisa mempelajarinya sendiri. Selain itu kami dibuatkan WhatsApp Group dan Telegram Group bersama dengan Fasilitator. Dan setiap satu atau dua minggu ada pertemuan yang disebut Saturday Together. \r\n\r\nSelama mengikuti ini saya banyak mendapatkan bahan super menarik untuk memperkaya dan memperkuat entrepreneurship terutama di dalam Tuhan Yesus, sang pemilik hidup kita. \r\n\r\nMateri-materi yang sangat berarti saya dapatkan diantaranya konsep GLORY dan 6 Harta yang harus kita ketahui lebih dalam. Semua ini semakin memperkuat pemahaman dan keyakinan saya, bahwa semua dalam hidup saya adalah untuk Tuhan sang pemilik hidup, termasuk juga bisnis dan usaha yang Tuhan ijinkan saya kelola selama ini.', 1500000, 1650000, '2023-06-24', '2023-07-08', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (4).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

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

-- --------------------------------------------------------

--
-- Table structure for table `type_sevice`
--

CREATE TABLE `type_sevice` (
  `id` int(11) NOT NULL,
  `icon` varchar(16) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_sevice`
--

INSERT INTO `type_sevice` (`id`, `icon`, `title`, `description`) VALUES
(1, 'ri-team-fill', 'Training', 'Suatu praktik pembelajaran yang bertujuan untuk meningkatkan pengetahuan dan keterampilan anggota tim Anda, dengan harapan dapat memberikan kontribusi positif pada produktivitas dan kinerja perusahaan secara keseluruhan.'),
(2, 'ri-open-arm-fill', 'Coaching & Mentoring', 'Suatu praktik pembelajaran yang bertujuan untuk meningkatkan pengetahuan dan keterampilan anggota tim Anda, dengan harapan dapat memberikan kontribusi positif pada produktivitas dan kinerja perusahaan secara keseluruhan.'),
(3, 'ri-parent-fill', 'Consulting', 'Khoiurl Suatu praktik pembelajaran yang bertujuan untuk meningkatkan pengetahuan dan keterampilan anggota tim Anda, dengan harapan dapat memberikan kontribusi positif pada produktivitas dan kinerja perusahaan secara keseluruhan.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no` int(12) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') DEFAULT NULL,
  `date` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(20) NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `no`, `jenis_kelamin`, `date`, `password`, `role_id`, `picture`) VALUES
(1, 'sadam payoda', 'sadampayodaa@gmail.com', 2147483647, NULL, NULL, 'sadam12345', 1, NULL),
(35, 'Khoirul Fahmi', 'khoirul@gmail.com', 977898390, NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 2, NULL),
(37, 'Fahmi', 'Fahmi13@gmail.com', 2147483647, NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(38, 'Fauzan Bakhtiar', 'fauzan123@gmail.com', 2147483647, NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(39, 'Sadam PS 1', 'sadam123@gmail.com', 2147483647, NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_sevice`
--
ALTER TABLE `type_sevice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_sevice`
--
ALTER TABLE `type_sevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
