-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kerajinan`
--

CREATE TABLE `kerajinan` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kerajinan`
--

INSERT INTO `kerajinan` (`id`, `title`, `description`, `images`) VALUES
(3, 'Batik', 'Fashion batik Jogja mulai motif klasik hingga model terbaru dapat dengan mudah Anda peroleh di kawasan Jalan Malioboro dan Pasar Beringharjo. Sedangkan sentra batik tulis khas Keraton Yogyakarta terbesar di Giriloyo, Wukirsari, Imogiri, Bantul. Pengunjung bisa melihat proses pembuatannya, termasuk belajar bagaimana cara membatik. Dimana desa wisata ini fokus pada wahana edukasi kultural, mengenalkan batik kepada wisatawan.', 'Rectangle 13 (2).png'),
(4, 'Keris', 'Keris senjata tradisional Jawa, barangkali Anda sering melihatnya di upacara adat, pernikahan tradisi Jawa. Keris pusaka populer dikalangan bangsawan serta petinggi. Dibuat oleh para empu, secara turun menurun. Selain fungsi pusaka, sebagian sebagai hiasan atau aksesoris. Sedangkan tempat pembuatan keris di Jogja paling terkenal di Dusun Banyusumurup, Desa Girirejo, wilayah Imogiri.', 'Rectangle 13 (3).png');

-- --------------------------------------------------------

--
-- Table structure for table `kesenian`
--

CREATE TABLE `kesenian` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `images` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kesenian`
--

INSERT INTO `kesenian` (`id`, `title`, `description`, `images`) VALUES
(11, 'Tari Bedhaya Semang', 'Tari Bedhaya Semang adalah satu tari putri klasik di Istana Kasultanan Ngayogyakarta Hadiningrat yang diciptakan oleh Sri Sultan Hamengku Buwana I. Tarian ini sangat disakralkan oleh keraton memiliki hubungan mistis antara keturunan Panembahan Senopati sebagai Raja Mataram Islam dengan penguasa Laut Selatan atau Ratu Laut Selatan, yaitu Kanjeng Ratu Kidul. ', 'Rectangle 13.png'),
(12, 'Karawitan', 'Musik tradisional Jawa atau gamelan dimainkan oleh sekelompok orang yang disebut ‘wiyogo’. Musik ini dimainkan dengan diiringi penyanyi wanita disebut ‘waranggono’ dan penyanyi pria yang disebut ‘wiraswara’. Musik ini disebut juga ‘uyon-uyon’ yang terdiri dari bermacam-macam lagu. Saat instrumen gamelan dimainkan tanpa penyanyi disebut ‘soran’.', 'Rectangle 13 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(18, 'marchel', 'marchel.adias@gmail.com', 'aaa'),
(22, 'admin', 'admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerajinan`
--
ALTER TABLE `kerajinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesenian`
--
ALTER TABLE `kesenian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kerajinan`
--
ALTER TABLE `kerajinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kesenian`
--
ALTER TABLE `kesenian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
