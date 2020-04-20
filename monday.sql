-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 09:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monday`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) COLLATE latin1_bin NOT NULL,
  `username` varchar(30) COLLATE latin1_bin NOT NULL,
  `password` varchar(100) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(3, 'Zulfa', 'zulfa', '95d710cb7daefe7843280a8f963ac363'),
(4, 'Khai Zulfa', 'khaizulfa18', '7b1143532c2971570aa23921d9b1840a');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `account` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `nama`, `account`, `link`, `no_wa`) VALUES
(1, 'Khaizuddin Zulfa', '@khaiz.18_', 'https://www.instagram.com/khaiz.18_/', '+62895383063231'),
(2, 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', '+62895384113413');

-- --------------------------------------------------------

--
-- Table structure for table `posted`
--

CREATE TABLE `posted` (
  `id` int(11) NOT NULL,
  `id_posted` varchar(20) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `author` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `link_acc` varchar(100) NOT NULL,
  `picture` text NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posted`
--

INSERT INTO `posted` (`id`, `id_posted`, `judul`, `author`, `account`, `link_acc`, `picture`, `date_posted`) VALUES
(13, 'MON-820190905', 'Elizabeth_Angela_Lorenza', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'Elizabeth_Angela_Lorenza.jpg', '2019-09-05 12:17:12'),
(14, 'MON-920190905', 'Joker', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'jokerwpap.jpg', '2019-09-05 12:20:52'),
(15, 'MON-1020190905', 'Jhon_Lennon', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'john_lennon.jpg', '2019-09-05 12:33:48'),
(16, 'MON-1020190905', 'Polwan', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'Polwan.jpg', '2019-09-05 12:39:00'),
(17, 'MON-1120190905', 'Emma_Stone', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'Emma_Stone.jpg', '2019-09-05 12:46:17'),
(18, 'MON-1820190905', 'Woman', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'chinese.jpg', '2019-09-05 16:31:14'),
(19, 'MON-1520190905', 'Neymar_Jr.', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'Neymar.jpg', '2019-09-05 16:34:25'),
(20, 'MON-2020190905', 'PUBG_x_Alan_Walker', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'pubg1.jpg', '2019-09-05 16:37:07'),
(21, 'MON-2120190905', 'Thanos', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'thanos.jpg', '2019-09-05 16:39:28'),
(22, 'MON-1120191003', 'Cerberus', 'Khaizuddin Zulfa', '@khaiz.18_', 'https://www.instagram.com/khaiz.18_/', '5d2ffbc5b8bc1.png', '2019-10-03 09:42:13'),
(23, 'MON-23120191016', 'REM_Waifuku', 'Khaizuddin Zulfa', '@khaiz.18_', 'https://www.instagram.com/khaiz.18_/', 'rem-re-zero-wallpaper-1920x1080-WTG30911389.jpg', '2019-10-16 13:32:09'),
(24, 'MON-7620191106', 'Rem', 'Iqbal Pradana', '@iqbalpradana.crew', 'https://www.instagram.com/iqbalpradana.crew/', 'bali.jpg', '2019-11-06 13:51:58'),
(25, 'MON-123220200128', 'Testing', 'Khaizuddin Zulfa', '@khaiz.18_', 'https://www.instagram.com/khaiz.18_/', '4568631-shigatsu-wa-kimi-no-uso-miyazono-kaori-arima-kousei-minimalism-anime-vectors.png', '2020-01-28 19:46:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posted`
--
ALTER TABLE `posted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posted`
--
ALTER TABLE `posted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
