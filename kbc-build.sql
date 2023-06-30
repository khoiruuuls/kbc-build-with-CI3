-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 04:34 PM
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
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id` int(8) NOT NULL,
  `bahasa_name` varchar(50) NOT NULL,
  `consultant_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id`, `bahasa_name`, `consultant_id`) VALUES
(16, 'Chinese', 4),
(67, 'English', 1),
(68, 'Indonesian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bb/tt` varchar(20) NOT NULL,
  `nomer` varchar(50) NOT NULL,
  `name_kartu` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `cvv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`, `bb/tt`, `nomer`, `name_kartu`, `users_id`, `cvv`) VALUES
(2, 'BCA', '37/23', '7634762', 'sadam payoda sabilillah', 40, '949'),
(10, 'BCA', '113123', '1232131', 'BCA', 39, '123123');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `id` int(8) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `profesi` varchar(20) DEFAULT NULL,
  `profile` text DEFAULT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_handphone` varchar(12) NOT NULL,
  `link_group` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `sertifikasi` varchar(255) DEFAULT NULL,
  `sertif_start` date DEFAULT NULL,
  `sertif_end` date DEFAULT NULL,
  `akun_media` varchar(100) DEFAULT NULL,
  `jumlah_client` int(11) DEFAULT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`id`, `name`, `users_id`, `profesi`, `profile`, `photo`, `alamat`, `email`, `no_handphone`, `link_group`, `perusahaan`, `sertifikasi`, `sertif_start`, `sertif_end`, `akun_media`, `jumlah_client`, `spesialisasi`, `program_id`, `provinsi`, `kota`) VALUES
(1, 'Andri Eriek', 41, 'Coach', '', 'consultant (2).jpg', '', 'Andrieriek@gmail.com', '+62 889-8608', '9', 'Google. Inc', '', NULL, NULL, '@erik123', 123, 'Pajak', 14, NULL, NULL),
(4, 'Ruaniwati', 43, 'Coach', 'memperoleh gelar sarjana dalam teknik metalurgi. Setelah itu, ia melanjutkan pendidikan di Stanford University di mana ia mendapatkan gelar MBA dan MS dalam teknik material. Pichai bergabung dengan Google pada tahun 2004 dan memainkan peran penting dalam pengembangan produk seperti Google Toolbar, Google Chrome, dan sistem operasi Android. Pada tahun 2015, ia diangkat menjadi CEO Google dan kemudian, setelah restrukturisasi perusahaan pada tahun 2019, menjadi CEO Alphabet Inc.', 'consultant (1).jpg', ' Jl. Ahmad Yani no 806, Jawa Barat', 'ruaniwati@gmail.com', '+62 837-4749', '0', 'Kopi Kenangan', '', NULL, NULL, '@ruaniwati', 1900, '', 1, NULL, NULL),
(8, 'Fahmi', 44, 'consultant', '', 'KBC_Build3.png', 'Jalanin aja dulu', 'khotak@gmail.com', '098909890989', '90', 'Maxy', '', NULL, NULL, 'Ig', 1234, 'gak ada', NULL, NULL, NULL),
(9, 'sadam haho', 51, '', '', '', '', '', '02384803840', '', '', '', NULL, NULL, '', 0, '', NULL, 'SUMATERA BARAT', NULL),
(15, 'sadam haho', 50, NULL, NULL, NULL, NULL, NULL, '0404004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kuota_program`
--

CREATE TABLE `kuota_program` (
  `id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kuota_program`
--

INSERT INTO `kuota_program` (`id`, `program_id`, `user_id`) VALUES
(71, 4, 64),
(72, 1, 81),
(73, 3, 94),
(74, 3, 90),
(75, 2, 99),
(76, 4, 101),
(77, 4, 65),
(78, 3, 99),
(79, 1, 75),
(80, 1, 72),
(81, 4, 73),
(82, 2, 66),
(83, 1, 82),
(84, 3, 90),
(85, 2, 59),
(86, 4, 97),
(87, 2, 96),
(88, 3, 74),
(89, 2, 84),
(90, 1, 103),
(91, 2, 81),
(92, 4, 105),
(93, 2, 101),
(94, 2, 96),
(95, 1, 103),
(96, 3, 81),
(97, 3, 92),
(98, 3, 102),
(99, 4, 97),
(100, 3, 98),
(101, 1, 75),
(102, 1, 70),
(103, 2, 84),
(104, 1, 94),
(105, 2, 107),
(106, 3, 72),
(107, 1, 89),
(108, 3, 74),
(109, 1, 94),
(110, 2, 102),
(111, 1, 81),
(112, 1, 102),
(113, 1, 86),
(114, 3, 107),
(115, 2, 87),
(116, 1, 71),
(117, 4, 100),
(118, 4, 93),
(119, 1, 98),
(120, 4, 58),
(121, 4, 100),
(122, 1, 106),
(123, 4, 100),
(124, 4, 81),
(125, 1, 66),
(126, 2, 66),
(127, 2, 95),
(128, 1, 92),
(129, 1, 67),
(130, 1, 86),
(131, 3, 70),
(132, 1, 89),
(133, 4, 90),
(134, 3, 91),
(135, 2, 98),
(136, 3, 85),
(137, 3, 60),
(138, 1, 58),
(139, 3, 100),
(140, 3, 106),
(141, 3, 95),
(142, 3, 91),
(143, 3, 102),
(144, 3, 106),
(145, 4, 75),
(146, 4, 60),
(147, 4, 100),
(148, 2, 86),
(149, 4, 69),
(150, 2, 60),
(151, 3, 107),
(152, 2, 83),
(153, 4, 101),
(154, 1, 96),
(155, 4, 92),
(156, 1, 65),
(157, 4, 93),
(158, 1, 65),
(159, 2, 89),
(160, 3, 77),
(161, 2, 100),
(162, 1, 82),
(163, 2, 89),
(164, 3, 79),
(165, 4, 79),
(166, 3, 84),
(167, 2, 63),
(168, 3, 74),
(169, 2, 70),
(170, 4, 94),
(171, 4, 90),
(172, 2, 100),
(173, 3, 63),
(174, 2, 78),
(175, 2, 93),
(176, 3, 106),
(177, 3, 100),
(178, 1, 89),
(179, 4, 74),
(180, 3, 81),
(181, 3, 104),
(182, 1, 89),
(183, 4, 78),
(184, 1, 65),
(185, 2, 66),
(186, 3, 98),
(187, 3, 105),
(188, 1, 90),
(189, 1, 91),
(190, 2, 62),
(191, 1, 90),
(192, 4, 91),
(193, 2, 100),
(194, 3, 63),
(195, 4, 84),
(196, 4, 102),
(197, 2, 65),
(198, 4, 100),
(199, 4, 103),
(200, 2, 86),
(201, 1, 97),
(202, 4, 98),
(203, 3, 73),
(204, 3, 83),
(205, 2, 106),
(206, 4, 58),
(207, 4, 71),
(208, 1, 61),
(209, 1, 100),
(210, 4, 83),
(211, 3, 61),
(212, 2, 99),
(213, 4, 103),
(214, 4, 59),
(215, 3, 71),
(216, 3, 94),
(217, 4, 82),
(218, 4, 101),
(219, 4, 68),
(220, 3, 65),
(221, 4, 62),
(222, 4, 75),
(223, 3, 91),
(224, 1, 96),
(225, 4, 80),
(226, 1, 93),
(227, 1, 83),
(228, 1, 75),
(229, 1, 105),
(230, 2, 95),
(231, 1, 101),
(232, 4, 88),
(233, 2, 99),
(234, 4, 67),
(235, 3, 73),
(236, 1, 67),
(237, 2, 105),
(238, 4, 79),
(239, 2, 84),
(240, 2, 74),
(241, 2, 77),
(242, 1, 74),
(243, 1, 93),
(244, 3, 88),
(245, 3, 60),
(246, 2, 77),
(247, 1, 101),
(248, 1, 64),
(249, 3, 91),
(250, 1, 81),
(251, 2, 97),
(252, 1, 106),
(253, 4, 78),
(254, 1, 66),
(255, 4, 82),
(256, 4, 103),
(257, 4, 92),
(258, 1, 101),
(259, 3, 84),
(260, 3, 60),
(261, 4, 77),
(262, 4, 100),
(263, 4, 92),
(264, 2, 79),
(265, 3, 97),
(266, 3, 65),
(267, 1, 98),
(268, 1, 101),
(269, 3, 82),
(270, 1, 71);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(8) NOT NULL,
  `pengalaman_name` varchar(50) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `consultant_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `pengalaman_name`, `date_start`, `date_end`, `consultant_id`) VALUES
(1, 'Bank Indonesia', '2013-12-11', '2023-12-12', 1),
(2, 'PT. Forisa Nusapersada', '2023-07-03', '2023-09-13', 1),
(3, 'PT. Kalbe Farma Tbk', '2022-10-06', '2023-12-12', 1);

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
  `kuota` int(20) DEFAULT NULL,
  `consultant_id` int(11) DEFAULT NULL,
  `status` enum('menunggu','aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `tag`, `type`, `descProgram`, `priceMin`, `priceMax`, `dateStart`, `dateEnd`, `time_start`, `time_end`, `mode`, `url`, `lokasi`, `alamat`, `kota`, `photo`, `kuota`, `consultant_id`, `status`) VALUES
(1, 'Shifting Up: Tranforming Your Business', '', 'Consulting', 'The word “transformation” gets thrown around a lot these days, but it can have different meanings for different individuals and companies. In a world of \nunprecedented disruption and market turbulence, transformation today revolves around the need to generate new value—to unlock new opportunities, to drive new growth, to deliver new efficiencies. \nAll transformations require you to rethink how your enterprise creates value today and in the future. In other words, all transformations require you to think big. Why? Because incremental improvement \nis not enough to win in today’s exponentially \ndisrupted business environment. Your organization \nrequires sustained growth in the face of near \nconstant disruption, and sustained growth requires \nagile reinvention. It’s not enough to win today. You \nhave to be able to continue to evolve in the future', 2500000, 3500000, '2023-03-23', '2023-05-23', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (1).jpg', 0, 4, 'menunggu'),
(2, 'Transformasi Dimulai Dari Pemimpin', '', 'Training', 'Gaya kepemimpinan transformasional, menurut Indeed, adalah cara seorang pemimpin memotivasi dan memberdayakan orang-orang di bawah tanggung jawabnya untuk bekerja sama mewujudkan visi perusahaan.\r\n\r\nSemua itu dicapainya tanpa micromanaging. Seorang pemimpin transformasional justru memberikan anggotanya ruang lebih untuk mengasah berbagai skill yang mereka perlukan di tempat kerja.\r\n\r\nKeleluasaan tersebut memungkinkan mereka menjadi lebih kreatif berinovasi menemukan solusi baru untuk masalah lama, serta mampu melihat ke masa depan.\r\n\r\nDengan begitu, setiap karyawan memiliki kekuasaan untuk membuat keputusan dan bertindak sesuai kebutuhan dalam setiap pekerjaannya.\r\n\r\nLewat tempaan kepemimpinan transformasional, anggota menunjukkan tingkat kepuasan kerja dan komitmen yang tinggi. Mereka juga cenderung memiliki cara pandang baru dan sense of belonging yang lebih kuat. \r\n\r\nPada akhirnya, upaya transformasi ini memungkinkan pemimpin menciptakan budaya dan lingkungan kerja yang sehat, efektif, serta efisien bagi semua. ', 500000, 1250000, '2023-05-03', '2023-06-26', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (2).jpg', 0, 4, 'aktif'),
(3, 'Kingdom Financial for Kids Program', '', 'Coaching', 'As homeschoolers, we all know that a well-rounded education contains more than just the 3 R’s. In fact, in my home, it’s well known that all children are required to have a basic understanding of life skills that my husband and I feel are necessary. A big one for us is money management and money skills. We want to ensure our kids graduate with a basic understanding of what money is, why it’s necessary, and how to use it properly. And while my plan was to wait a little while longer, when my daughter and I learned of The Complete Starter Kit from The Kingdom Code we just knew we wanted to review their money management program, from a Biblical perspective.', 1500000, 1500000, '2023-06-24', '2023-07-01', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (3).jpg', 0, 1, 'menunggu'),
(4, 'Sukses Sejati Blended Learning', '', 'Training', 'Sukses Sejati ini modelnya Blended Learning, dengan menggunakan aplikasi keren Gnowbe, semua bahan disampaikan disana, kita bisa mempelajarinya sendiri. Selain itu kami dibuatkan WhatsApp Group dan Telegram Group bersama dengan Fasilitator. Dan setiap satu atau dua minggu ada pertemuan yang disebut Saturday Together. \r\n\r\nSelama mengikuti ini saya banyak mendapatkan bahan super menarik untuk memperkaya dan memperkuat entrepreneurship terutama di dalam Tuhan Yesus, sang pemilik hidup kita. \r\n\r\nMateri-materi yang sangat berarti saya dapatkan diantaranya konsep GLORY dan 6 Harta yang harus kita ketahui lebih dalam. Semua ini semakin memperkuat pemahaman dan keyakinan saya, bahwa semua dalam hidup saya adalah untuk Tuhan sang pemilik hidup, termasuk juga bisnis dan usaha yang Tuhan ijinkan saya kelola selama ini.', 1500000, 1650000, '2023-06-24', '2023-07-08', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (4).jpg', 0, 1, 'menunggu'),
(18, 'Kursus Pelatihan Pajak', 'Pajak', 'Seminar', 'Jasa pelatihan pajak ini ditujukan untuk meningkatkan pengetahuan dan keterampilan perpajakan pada wajib pajak di perusahaan dan masyarakat pada umumnya.', 120000, 120000, '2023-06-07', '2023-06-22', NULL, NULL, 'online', 'https://www.google.com/search?q=program+pelatihan+pajak&oq=program+pelatihan+pajak&aqs=edge..69i57j0', 'Gedung Pakuwon', 'Jakarta Selatan', 'Jakarta Selatan', '', 1234, 8, 'menunggu'),
(19, 'Kursus Pelatihan Pajak', 'Pajak', 'Seminar', 'Jasa pelatihan pajak ini ditujukan untuk meningkatkan pengetahuan dan keterampilan perpajakan pada wajib pajak di perusahaan dan masyarakat pada umumnya.', 120000, 120000, '2023-06-07', '2023-06-22', NULL, NULL, 'online', 'https://www.google.com/search?q=program+pelatihan+pajak&oq=program+pelatihan+pajak&aqs=edge..69i57j0', 'Gedung Pakuwon', 'Jakarta Selatan', 'Jakarta Selatan', 'hello.jpg', 1234, 8, 'menunggu'),
(20, 'Hello', 'Hello', 'consultan', 'HelloHelloHelloHelloHellov', 123, 100123, '2023-06-22', '2023-06-26', '18:30:00', '14:36:00', 'online', 'Hello', NULL, NULL, NULL, 'KBC_Build5.png', 1234, 15, 'menunggu');

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
(2, 'admin'),
(3, 'consultant\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `users_id` int(20) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `speaker` varchar(100) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` enum('Hybrid','Offline','Online') DEFAULT NULL,
  `status` enum('menunggu','active','draf') DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `users_id`, `name`, `sub_title`, `content`, `speaker`, `date_start`, `date_end`, `time_start`, `time_end`, `price`, `photo`, `type`, `status`, `link`, `contact_person`, `kuota`, `lokasi`, `alamat`, `kota`) VALUES
(1, 50, 'Kingdom Financial Kids', '', 'When kids leave home, they face some heavy financial responsibilities, including creating a budget and choosing the right investments for their long-term goals. Much of the time, however, they’re woefully unprepared for those challenges.\r\n\r\nMany kids grow up in households where parents simply aren’t comfortable talking about money. And in much of the country, they’re not required to get a financial education at school, either. That’s why, according to a 2019 study by Experian, as many as 76% of Gen Z respondents said they wished they had been able to take a financial education class.\r\n1\r\n And in 2022, the Investopedia Financial Literacy Survey found that only one in four Gen Zers feel that they understand the stock market well enough to explain how it works to a friend.\r\n\r\nThe good news is that there are plenty of great money-related resources for kids on the Internet and on library bookshelves—you just need to know where to look. Here are some of our faves when it comes to teaching children the basic financial skills they’ll need and, even more importantly, down the road as independent adults. ', '', NULL, NULL, '00:00:00', '00:00:00', 1500000, './assets/img/program/1.jpeg', '', 'menunggu', '', '', NULL, NULL, NULL, NULL),
(2, 50, 'Workshop Lifting Up', '', 'Several years ago my spouse and I built our second new home. It is a process that we greatly enjoy in spite of the fact that it can be more than a little stressful. When building a new home there are a lot of decisions to be made. These decisions include selecting a builder, a floor plan, the type of exterior you want (brick, siding, stucco, for example), selecting your flooring, fixtures, and lighting, and on and on it goes. Some people prefer to buy an existing home because they find this plethora of decisions overwhelming. However, my spouse and I prefer making these decisions ourselves so that we can get exactly what we want and so we can watch our empty lot be transformed into a home.\r\n\r\nOne of the advantages to building your own home is that you can directly and easily observe the quality going into it. Our first area of concern is the foundation. After our foundation is poured we look at it to assess whether it looks level and is free of any defects. We all know that a good foundation is critical. Without it, the quality of the rest of the construction can be irrelevant. Once we have a good foundation in place, we continue to monitor the construction. We take note of the quality of the materials being used as well as the quality of the framing job, plumbing, drywall, etc. Once the construction is completed and the buyers move into the house, the builder’s job is finished but the homeowner’s job is really just beginning because the house has to be maintained.\r\n\r\nRelated\r\nSurvey Types\r\n\r\n', '', NULL, NULL, '00:00:00', '00:00:00', 1250000, './assets/img/program/2.jpeg', '', 'menunggu', '', '', NULL, NULL, NULL, NULL),
(8, 50, 'dvjq', 'jfbjw', NULL, NULL, '2023-05-03', '2023-05-16', '13:37:00', '13:35:00', 111, NULL, 'Online', 'draf', 'jd cjcj', NULL, 22, NULL, NULL, NULL),
(9, 50, 'dvjq', 'wnkwn', NULL, NULL, '2023-05-03', '2023-05-09', '14:15:00', '16:15:00', 21, '', 'Online', 'menunggu', 'hvvh', NULL, 233, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id` int(8) NOT NULL,
  `sertifikasi_name` varchar(50) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `consultant_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id`, `sertifikasi_name`, `date_start`, `date_end`, `consultant_id`) VALUES
(1, 'Master of Technology Education', '2023-06-08', '2023-06-07', 1),
(2, 'Certified Behavioral Analyst', '2023-06-21', '2023-06-14', 1),
(3, 'Master Trainer - Future Digital Skills Certificati', '2017-06-15', '2023-06-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spesialisasi`
--

CREATE TABLE `spesialisasi` (
  `id` int(8) NOT NULL,
  `spesialisasi_name` varchar(50) NOT NULL,
  `consultant_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spesialisasi`
--

INSERT INTO `spesialisasi` (`id`, `spesialisasi_name`, `consultant_id`) VALUES
(73, 'Pemasaran', 1),
(74, 'Strategi Bisnis', 1),
(75, 'Motivasi', 1);

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
  `no` varchar(12) DEFAULT NULL,
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
(1, 'sadam payoda', 'sadampayodaa@gmail.com', '2147483647', NULL, NULL, 'sadam12345', 1, NULL),
(2, 'Admin', 'admin@gmail.com', '977898390', NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d\n', 2, NULL),
(35, 'Khoirul Fahmi', 'khoirul@gmail.com', '977898390', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 2, NULL),
(37, 'Fahmi', 'Fahmi13@gmail.com', '2147483647', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(38, 'Fauzan Bakhtiar', 'fauzan123@gmail.com', '2147483647', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(39, 'Sadam PS 1', 'sadam123@gmail.com', '2147483647', NULL, '2006-12-18', 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(40, 'oke deh deh', 'sadamlol@gmail.com', '082331770406', 'pria', '2015-04-04', '2dbdfc20899993b3d3d356c6fc22e84d', 1, NULL),
(41, 'Andri Eriek', 'erik@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d', 3, NULL),
(43, 'Ruaniwati\r\n', 'rua@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d\r\n', 3, NULL),
(44, 'Fahmi', 'fahmi@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d', 3, NULL),
(50, 'sadam haho', 'haha@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d', 3, NULL),
(51, 'teshaha', 'sadamh@gmail.com', '082331770406', NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d', 3, NULL),
(56, 'ekkqen', 'dnvnr@gmail.com', NULL, NULL, NULL, '', 3, NULL),
(57, 'anin', 'anin@gmail.com', '039284380', NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d\r\n', 2, NULL),
(58, 'User1', 'user1@gmail.com', NULL, NULL, NULL, 'd53bea63a5c7bdbccf8eeee82c8cff3c', 1, NULL),
(59, 'User2', 'user2@gmail.com', NULL, NULL, NULL, 'f7145180f759e4f7f9b8890adb10537b', 1, NULL),
(60, 'User3', 'user3@gmail.com', NULL, NULL, NULL, '52a5eddf95455f41272fb4f63a9d931f', 1, NULL),
(61, 'User4', 'user4@gmail.com', NULL, NULL, NULL, 'f55e4f384bb12abb176d96470eab88a9', 1, NULL),
(62, 'User5', 'user5@gmail.com', NULL, NULL, NULL, 'e9a7a154449b679936b287eeb91f071e', 1, NULL),
(63, 'User6', 'user6@gmail.com', NULL, NULL, NULL, '0b9a56ab4671ab6781a5430503bda1d8', 1, NULL),
(64, 'User7', 'user7@gmail.com', NULL, NULL, NULL, '651a786f5df255249cacea1559bd3662', 1, NULL),
(65, 'User8', 'user8@gmail.com', NULL, NULL, NULL, 'd54d3c57b4d5e821365f0aa11afc7d2e', 1, NULL),
(66, 'User9', 'user9@gmail.com', NULL, NULL, NULL, '62693e000c23d4de5bbb2b295169b0c2', 1, NULL),
(67, 'User10', 'user10@gmail.com', NULL, NULL, NULL, '10cf5343d08d7fe47440a1bcd90f224e', 1, NULL),
(68, 'User11', 'user11@gmail.com', NULL, NULL, NULL, 'c821f198d9878be7f71a991beb4e5331', 1, NULL),
(69, 'User12', 'user12@gmail.com', NULL, NULL, NULL, '314967b7bc3b3a04eb949108a447fbb1', 1, NULL),
(70, 'User13', 'user13@gmail.com', NULL, NULL, NULL, '8d2439468ede6e78bb22d1aa11b2b69a', 1, NULL),
(71, 'User14', 'user14@gmail.com', NULL, NULL, NULL, 'adad2572c576b7ae36b20e56f1d001de', 1, NULL),
(72, 'User15', 'user15@gmail.com', NULL, NULL, NULL, '4b6da0ec541a7b54bb39424311046dc5', 1, NULL),
(73, 'User16', 'user16@gmail.com', NULL, NULL, NULL, '3b287776f5523df05bee744f4a91afd8', 1, NULL),
(74, 'User17', 'user17@gmail.com', NULL, NULL, NULL, 'dbcf9f1b2cfeece3c560efe24ddf766f', 1, NULL),
(75, 'User18', 'user18@gmail.com', NULL, NULL, NULL, '6be4defd9e07d95dd19b1b0ee33e7e94', 1, NULL),
(76, 'User19', 'user19@gmail.com', NULL, NULL, NULL, 'bbecd48febbeff20a2c682d56c8df425', 1, NULL),
(77, 'User20', 'user20@gmail.com', NULL, NULL, NULL, 'dc4d1d452d01dbe7eadad0cc3584d55a', 1, NULL),
(78, 'User21', 'user21@gmail.com', NULL, NULL, NULL, '0335be57a34980310797bacd89eca7ec', 1, NULL),
(79, 'User22', 'user22@gmail.com', NULL, NULL, NULL, '043b5b68bfc2b637b4ffce1d98aae361', 1, NULL),
(80, 'User23', 'user23@gmail.com', NULL, NULL, NULL, '6b88753d941f9454f7f38e356943cd7b', 1, NULL),
(81, 'User24', 'user24@gmail.com', NULL, NULL, NULL, 'ddb68f1c6411058c1b5dab7674f184a0', 1, NULL),
(82, 'User25', 'user25@gmail.com', NULL, NULL, NULL, 'b210b28134e8de3cfdc30b63fb6d8131', 1, NULL),
(83, 'User26', 'user26@gmail.com', NULL, NULL, NULL, '507b7a6bb95f6bb24d51c9e8c1a7b776', 1, NULL),
(84, 'User27', 'user27@gmail.com', NULL, NULL, NULL, '1d414df4aabd24d0dc2663f5c200dfef', 1, NULL),
(85, 'User28', 'user28@gmail.com', NULL, NULL, NULL, 'a183cbbafc7cdafcd9258d434c1b44c6', 1, NULL),
(86, 'User29', 'user29@gmail.com', NULL, NULL, NULL, 'a65c12b8f15e1a1630592b01cdac03ac', 1, NULL),
(87, 'User30', 'user30@gmail.com', NULL, NULL, NULL, 'b7ba09d776c84ef876bcdf7cae47912a', 1, NULL),
(88, 'User31', 'user31@gmail.com', NULL, NULL, NULL, 'd44a72ecf93caacbd3916625bfa9fe48', 1, NULL),
(89, 'User32', 'user32@gmail.com', NULL, NULL, NULL, '6b2536cd14be892117a8b78fc8f08e0b', 1, NULL),
(90, 'User33', 'user33@gmail.com', NULL, NULL, NULL, 'ab03c3267bdc77c1ced23e852e147d88', 1, NULL),
(91, 'User34', 'user34@gmail.com', NULL, NULL, NULL, '3804c7484efe8e5dee9c606a8b2a63a0', 1, NULL),
(92, 'User35', 'user35@gmail.com', NULL, NULL, NULL, '51d596e9089b0ff97189248a1f49390b', 1, NULL),
(93, 'User36', 'user36@gmail.com', NULL, NULL, NULL, 'cf2b5124c211189eca3f858f30308456', 1, NULL),
(94, 'User37', 'user37@gmail.com', NULL, NULL, NULL, '5a7f429dd01865115d5e610ff742bed8', 1, NULL),
(95, 'User38', 'user38@gmail.com', NULL, NULL, NULL, '18ae9c1cb24f058e182bc012c13b6956', 1, NULL),
(96, 'User39', 'user39@gmail.com', NULL, NULL, NULL, 'e6f26e0d65279c9f2229835b10e1b0d8', 1, NULL),
(97, 'User40', 'user40@gmail.com', NULL, NULL, NULL, '4acc143e068912c6a03a18b86c8f1a72', 1, NULL),
(98, 'User41', 'user41@gmail.com', NULL, NULL, NULL, '3a875c0dc911bbdae46144eb06db7c32', 1, NULL),
(99, 'User42', 'user42@gmail.com', NULL, NULL, NULL, 'a43392f1332dbcb6d6f55a13f3e7b3fa', 1, NULL),
(100, 'User43', 'user43@gmail.com', NULL, NULL, NULL, '25ef0655cac52b4786baed981184f425', 1, NULL),
(101, 'User44', 'user44@gmail.com', NULL, NULL, NULL, 'e480789cc740930486de34b8fdd7a8b2', 1, NULL),
(102, 'User45', 'user45@gmail.com', NULL, NULL, NULL, '937b8140d3ce9e19ec83eccf716dab75', 1, NULL),
(103, 'User46', 'user46@gmail.com', NULL, NULL, NULL, '0a292e6f0bc1b9c447f1c3978c047af2', 1, NULL),
(104, 'User47', 'user47@gmail.com', NULL, NULL, NULL, 'af2a9d76a1ff7cf2702feb4b232a7426', 1, NULL),
(105, 'User48', 'user48@gmail.com', NULL, NULL, NULL, '33cfe9012315ea74e405535938cc7754', 1, NULL),
(106, 'User49', 'user49@gmail.com', NULL, NULL, NULL, '53d1657f64693e7eae8f4ceaf6e0f07c', 1, NULL),
(107, 'User50', 'user50@gmail.com', NULL, NULL, NULL, '9aef2d9faedd31dafd79272c77ccea73', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `seminar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `program_id`, `seminar_id`) VALUES
(1, 40, 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bahasa_ibfk_1` (`consultant_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_consultant_program` (`program_id`);

--
-- Indexes for table `kuota_program`
--
ALTER TABLE `kuota_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_consultant_pengalaman_id` (`consultant_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_program_consultant` (`consultant_id`);

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
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_consultant_sertifikasi_id` (`consultant_id`);

--
-- Indexes for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_consultant_spesialisasi_id` (`consultant_id`) USING BTREE;

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kuota_program`
--
ALTER TABLE `kuota_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `type_sevice`
--
ALTER TABLE `type_sevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD CONSTRAINT `bahasa_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_consultant_id` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`);

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `fk_consultant_pengalaman_id` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`);

--
-- Constraints for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD CONSTRAINT `fk_consultant_sertifikasi_id` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sertifikasi_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`);

--
-- Constraints for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  ADD CONSTRAINT `fk_consultant_spesialiasi_id` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spesialisasi_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
