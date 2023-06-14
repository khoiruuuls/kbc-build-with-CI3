-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 10:41 AM
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
(7, 'English', 1),
(8, 'Indonesian', 1),
(9, 'Spanish', 1),
(10, 'English', 2),
(11, 'French', 2),
(12, 'German', 2),
(16, 'Chinese', 4);

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
  `name` varchar(20) NOT NULL,
  `users_id` int(11) NOT NULL,
  `profesi` varchar(20) NOT NULL,
  `profile` text NOT NULL,
  `photo` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_handphone` varchar(12) NOT NULL,
  `link_group` varchar(255) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `sertif_start` date DEFAULT NULL,
  `sertif_end` date DEFAULT NULL,
  `akun_media` varchar(100) NOT NULL,
  `jumlah_client` int(11) NOT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`id`, `name`, `users_id`, `profesi`, `profile`, `photo`, `alamat`, `email`, `no_handphone`, `link_group`, `perusahaan`, `sertifikasi`, `sertif_start`, `sertif_end`, `akun_media`, `jumlah_client`, `spesialisasi`, `program_id`,`provinsi`,`kota`) VALUES
(1, 'Andri Eriek', 41, 'Coach', 'memimpin perusahaan menjadi salah satu perusahaan e-commerce terbesar di dunia. Bezos lahir pada tanggal 12 Januari 1964 di Albuquerque, New Mexico, Amerika Serikat. Ia belajar di Princeton University dan lulus dengan gelar sarjana ilmu komputer dan teknik listrik. Setelah lulus, Bezos bekerja di Wall Street sebelum mendirikan Amazon pada tahun 1994. Ia memegang posisi CEO hingga Juli 2021, ketika dia menyerahkan jabatan tersebut kepada Andy Jassy.', 'consultant (2).jpg', 'Jl Tubagus Ismail III/3, Jawa Barat', 'Andrieriek@gmail.com', '+62 889-8608', '9', 'Google. Inc', '', NULL, NULL, '@erik123', 123, 'Pajak', 14, NULL,NULL),
(2, 'Yuliawaty ', 42, 'Psycholog', 'Setelah menyelesaikan studi di University of Pennsylvania, ia mendirikan Zip2, sebuah perusahaan perangkat lunak yang menjual sistem manajemen media untuk perusahaan media. Setelah sukses dengan Zip2, ia mendirikan perusahaan pembayaran online X.com, yang kemudian berkembang menjadi PayPal. Pada tahun 2002, PayPal diakuisisi oleh eBay, dan Musk fokus pada proyek-proyek ruang angkasa dan mobil listrik. Dia mendirikan SpaceX pada tahun 2002 dan Tesla Motors pada tahun 2003. Sejak itu, ia terus menjadi tokoh terkemuka dalam inovasi teknologi.', 'consultant (3).jpg', ' Jl Bugangan VIII 203, Jawa Tengah', 'yuliawaty@gmail.com', '+62 830-5480', '0', 'Facebook', '', NULL, NULL, '@yuliawaty ', 450, 'Bahasa Inggris', 3,NULL,NULL),
(4, 'Ruaniwati', 43, 'Coach', 'memperoleh gelar sarjana dalam teknik metalurgi. Setelah itu, ia melanjutkan pendidikan di Stanford University di mana ia mendapatkan gelar MBA dan MS dalam teknik material. Pichai bergabung dengan Google pada tahun 2004 dan memainkan peran penting dalam pengembangan produk seperti Google Toolbar, Google Chrome, dan sistem operasi Android. Pada tahun 2015, ia diangkat menjadi CEO Google dan kemudian, setelah restrukturisasi perusahaan pada tahun 2019, menjadi CEO Alphabet Inc.', 'consultant (1).jpg', ' Jl. Ahmad Yani no 806, Jawa Barat', 'ruaniwati@gmail.com', '+62 837-4749', '0', 'Kopi Kenangan', '', NULL, NULL, '@ruaniwati', 1900, '', 1,NULL,NULL),
(8, 'Fahmi', 44, 'consultant', '', 'KBC_Build3.png', 'Jalanin aja dulu', 'khotak@gmail.com', '098909890989', '90', 'Maxy', '', NULL, NULL, 'Ig', 1234, 'gak ada', NULL,NULL,NULL);

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
(3, 'PT. Kalbe Farma Tbk', '2022-10-06', '2023-12-12', 1),
(4, 'Bank Indonesia', '2022-10-17', '2023-12-04', 2),
(5, 'PT. Bank Central Asia', '2023-08-21', '2023-12-12', 2);

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
  `consultant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `tag`, `type`, `descProgram`, `priceMin`, `priceMax`, `dateStart`, `dateEnd`, `time_start`, `time_end`, `mode`, `url`, `lokasi`, `alamat`, `kota`, `photo`, `kuota`, `consultant_id`) VALUES
(1, 'Shifting Up: Tranforming Your Business', '', 'Consulting', 'The word “transformation” gets thrown around a lot these days, but it can have different meanings for different individuals and companies. In a world of \nunprecedented disruption and market turbulence, transformation today revolves around the need to generate new value—to unlock new opportunities, to drive new growth, to deliver new efficiencies. \nAll transformations require you to rethink how your enterprise creates value today and in the future. In other words, all transformations require you to think big. Why? Because incremental improvement \nis not enough to win in today’s exponentially \ndisrupted business environment. Your organization \nrequires sustained growth in the face of near \nconstant disruption, and sustained growth requires \nagile reinvention. It’s not enough to win today. You \nhave to be able to continue to evolve in the future', 2500000, 3500000, '2023-03-23', '2023-05-23', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (1).jpg', 0, 4),
(2, 'Transformasi Dimulai Dari Pemimpin', '', 'Training', 'Gaya kepemimpinan transformasional, menurut Indeed, adalah cara seorang pemimpin memotivasi dan memberdayakan orang-orang di bawah tanggung jawabnya untuk bekerja sama mewujudkan visi perusahaan.\r\n\r\nSemua itu dicapainya tanpa micromanaging. Seorang pemimpin transformasional justru memberikan anggotanya ruang lebih untuk mengasah berbagai skill yang mereka perlukan di tempat kerja.\r\n\r\nKeleluasaan tersebut memungkinkan mereka menjadi lebih kreatif berinovasi menemukan solusi baru untuk masalah lama, serta mampu melihat ke masa depan.\r\n\r\nDengan begitu, setiap karyawan memiliki kekuasaan untuk membuat keputusan dan bertindak sesuai kebutuhan dalam setiap pekerjaannya.\r\n\r\nLewat tempaan kepemimpinan transformasional, anggota menunjukkan tingkat kepuasan kerja dan komitmen yang tinggi. Mereka juga cenderung memiliki cara pandang baru dan sense of belonging yang lebih kuat. \r\n\r\nPada akhirnya, upaya transformasi ini memungkinkan pemimpin menciptakan budaya dan lingkungan kerja yang sehat, efektif, serta efisien bagi semua. ', 500000, 1250000, '2023-05-03', '2023-06-26', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (2).jpg', 0, 4),
(3, 'Kingdom Financial for Kids Program', '', 'Coaching', 'As homeschoolers, we all know that a well-rounded education contains more than just the 3 R’s. In fact, in my home, it’s well known that all children are required to have a basic understanding of life skills that my husband and I feel are necessary. A big one for us is money management and money skills. We want to ensure our kids graduate with a basic understanding of what money is, why it’s necessary, and how to use it properly. And while my plan was to wait a little while longer, when my daughter and I learned of The Complete Starter Kit from The Kingdom Code we just knew we wanted to review their money management program, from a Biblical perspective.', 1500000, 1500000, '2023-06-24', '2023-07-01', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (3).jpg', 0, 1),
(4, 'Sukses Sejati Blended Learning', '', 'Training', 'Sukses Sejati ini modelnya Blended Learning, dengan menggunakan aplikasi keren Gnowbe, semua bahan disampaikan disana, kita bisa mempelajarinya sendiri. Selain itu kami dibuatkan WhatsApp Group dan Telegram Group bersama dengan Fasilitator. Dan setiap satu atau dua minggu ada pertemuan yang disebut Saturday Together. \r\n\r\nSelama mengikuti ini saya banyak mendapatkan bahan super menarik untuk memperkaya dan memperkuat entrepreneurship terutama di dalam Tuhan Yesus, sang pemilik hidup kita. \r\n\r\nMateri-materi yang sangat berarti saya dapatkan diantaranya konsep GLORY dan 6 Harta yang harus kita ketahui lebih dalam. Semua ini semakin memperkuat pemahaman dan keyakinan saya, bahwa semua dalam hidup saya adalah untuk Tuhan sang pemilik hidup, termasuk juga bisnis dan usaha yang Tuhan ijinkan saya kelola selama ini.', 1500000, 1650000, '2023-06-24', '2023-07-08', NULL, NULL, 'online', NULL, NULL, NULL, NULL, 'our-program (4).jpg', 0, NULL),
(14, 'Sukses Sejati Blended Learning 1', '', 'consultan', 'Sukses Sejati ini modelnya Blended Learning, dengan menggunakan aplikasi keren Gnowbe, semua bahan disampaikan disana, kita bisa mempelajarinya sendiri. Selain itu kami dibuatkan WhatsApp Group dan Telegram Group bersama dengan Fasilitator. Dan setiap satu atau dua minggu ada pertemuan yang disebut Saturday Together. \r\n\r\nSelama mengikuti ini saya banyak mendapatkan bahan super menarik untuk memperkaya dan memperkuat entrepreneurship terutama di dalam Tuhan Yesus, sang pemilik hidup kita. \r\n\r\nMateri-materi yang sangat berarti saya dapatkan diantaranya konsep GLORY dan 6 Harta yang harus kita ketahui lebih dalam. Semua ini semakin memperkuat pemahaman dan keyakinan saya, bahwa semua dalam hidup saya adalah untuk Tuhan sang pemilik hidup, termasuk juga bisnis dan usaha yang Tuhan ijinkan saya kelola selama ini.', 1500000, 1650000, '2023-06-24', '2023-07-08', '00:00:00', '00:00:00', 'online', '', NULL, NULL, NULL, 'our-program (4).jpg', 12, 2),
(18, 'Kursus Pelatihan Pajak', 'Pajak', 'Seminar', 'Jasa pelatihan pajak ini ditujukan untuk meningkatkan pengetahuan dan keterampilan perpajakan pada wajib pajak di perusahaan dan masyarakat pada umumnya.', 120000, 120000, '2023-06-07', '2023-06-22', NULL, NULL, 'online', 'https://www.google.com/search?q=program+pelatihan+pajak&oq=program+pelatihan+pajak&aqs=edge..69i57j0', 'Gedung Pakuwon', 'Jakarta Selatan', 'Jakarta Selatan', '', 1234, 8),
(19, 'Kursus Pelatihan Pajak', 'Pajak', 'Seminar', 'Jasa pelatihan pajak ini ditujukan untuk meningkatkan pengetahuan dan keterampilan perpajakan pada wajib pajak di perusahaan dan masyarakat pada umumnya.', 120000, 120000, '2023-06-07', '2023-06-22', NULL, NULL, 'online', 'https://www.google.com/search?q=program+pelatihan+pajak&oq=program+pelatihan+pajak&aqs=edge..69i57j0', 'Gedung Pakuwon', 'Jakarta Selatan', 'Jakarta Selatan', 'hello.jpg', 1234, 8),
(20, 'Hello', 'Hello', 'consultan', 'HelloHelloHelloHelloHellov', 123, 100123, '2023-06-22', '2023-06-26', '18:30:00', '14:36:00', 'online', 'Hello', NULL, NULL, NULL, 'KBC_Build5.png', 1234, 1);

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
(1, 44, 'Kingdom Financial Kids', '', 'When kids leave home, they face some heavy financial responsibilities, including creating a budget and choosing the right investments for their long-term goals. Much of the time, however, they’re woefully unprepared for those challenges.\r\n\r\nMany kids grow up in households where parents simply aren’t comfortable talking about money. And in much of the country, they’re not required to get a financial education at school, either. That’s why, according to a 2019 study by Experian, as many as 76% of Gen Z respondents said they wished they had been able to take a financial education class.\r\n1\r\n And in 2022, the Investopedia Financial Literacy Survey found that only one in four Gen Zers feel that they understand the stock market well enough to explain how it works to a friend.\r\n\r\nThe good news is that there are plenty of great money-related resources for kids on the Internet and on library bookshelves—you just need to know where to look. Here are some of our faves when it comes to teaching children the basic financial skills they’ll need and, even more importantly, down the road as independent adults. ', '', NULL, NULL, '00:00:00', '00:00:00', 1500000, './assets/img/program/1.jpeg', '', 'menunggu', '', '', NULL, NULL, NULL, NULL),
(2, 44, 'Workshop Lifting Up', '', 'Several years ago my spouse and I built our second new home. It is a process that we greatly enjoy in spite of the fact that it can be more than a little stressful. When building a new home there are a lot of decisions to be made. These decisions include selecting a builder, a floor plan, the type of exterior you want (brick, siding, stucco, for example), selecting your flooring, fixtures, and lighting, and on and on it goes. Some people prefer to buy an existing home because they find this plethora of decisions overwhelming. However, my spouse and I prefer making these decisions ourselves so that we can get exactly what we want and so we can watch our empty lot be transformed into a home.\r\n\r\nOne of the advantages to building your own home is that you can directly and easily observe the quality going into it. Our first area of concern is the foundation. After our foundation is poured we look at it to assess whether it looks level and is free of any defects. We all know that a good foundation is critical. Without it, the quality of the rest of the construction can be irrelevant. Once we have a good foundation in place, we continue to monitor the construction. We take note of the quality of the materials being used as well as the quality of the framing job, plumbing, drywall, etc. Once the construction is completed and the buyers move into the house, the builder’s job is finished but the homeowner’s job is really just beginning because the house has to be maintained.\r\n\r\nRelated\r\nSurvey Types\r\n\r\n', '', NULL, NULL, '00:00:00', '00:00:00', 1250000, './assets/img/program/2.jpeg', '', 'menunggu', '', '', NULL, NULL, NULL, NULL),
(8, 44, 'dvjq', 'jfbjw', NULL, NULL, '2023-05-03', '2023-05-16', '13:37:00', '13:35:00', 111, NULL, 'Online', 'draf', 'jd cjcj', NULL, 22, NULL, NULL, NULL),
(9, 44, 'dvjq', 'wnkwn', NULL, NULL, '2023-05-03', '2023-05-09', '14:15:00', '16:15:00', 21, '', 'Online', 'menunggu', 'hvvh', NULL, 233, NULL, NULL, NULL);

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
(3, 'Master Trainer - Future Digital Skills Certificati', '2017-06-15', '2023-06-15', 1),
(4, 'Master Trainer - Future Digital Skills Certificati', '2016-06-17', '2023-06-14', 2),
(5, 'Human Capital Strategy', '2017-06-16', '2023-06-14', 2);

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
(1, 'Pemasaran', 1),
(2, 'Strategi Bisnis', 1),
(3, 'Teknologi Informasi', 1),
(4, 'Keuangan', 2),
(5, 'Sumber Daya Manusia', 2),
(8, 'Operasional & Bisnis', 2),
(9, 'Operasional & Bisnis', 1);

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
(2, 'Admin', 'admin@gmail.com', '977898390', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 2, NULL),
(35, 'Khoirul Fahmi', 'khoirul@gmail.com', '977898390', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 2, NULL),
(37, 'Fahmi', 'Fahmi13@gmail.com', '2147483647', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(38, 'Fauzan Bakhtiar', 'fauzan123@gmail.com', '2147483647', NULL, NULL, 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(39, 'Sadam PS 1', 'sadam123@gmail.com', '2147483647', NULL, '2006-12-18', 'c93ccd78b2076528346216b3b2f701e6', 1, NULL),
(40, 'oke deh deh', 'sadamlol@gmail.com', '082331770406', 'pria', '2015-04-04', '2dbdfc20899993b3d3d356c6fc22e84d', 1, NULL),
(41, 'Andri Eriek', 'erik@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d', 3, NULL),
(42, 'Yuliawaty \r\n', 'yuli@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d\r\n', 3, NULL),
(43, 'Ruaniwati\r\n', 'rua@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d\r\n', 3, NULL),
(44, 'Fahmi', 'fahmi@gmail.com', NULL, NULL, NULL, '2dbdfc20899993b3d3d356c6fc22e84d', 3, NULL);

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type_sevice`
--
ALTER TABLE `type_sevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
-- Constraints for table `consultant`
--
ALTER TABLE `consultant`
  ADD CONSTRAINT `fk_consultant_program` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`);

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `fk_consultant_pengalaman_id` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `fk_program_consultant` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`);

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
