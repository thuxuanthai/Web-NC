-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 06:15 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhchon`
--

CREATE TABLE `binhchon` (
  `idBC` int(11) NOT NULL,
  `MoTa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idLT` int(11) NOT NULL,
  `SoLanChon` int(11) NOT NULL,
  `AnHien` int(11) NOT NULL,
  `ThuTu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhchon`
--

INSERT INTO `binhchon` (`idBC`, `MoTa`, `idLT`, `SoLanChon`, `AnHien`, `ThuTu`) VALUES
(1, 'Ban nghi hocweb co giup ban hoc tot hon ko?', 1, 11, 1, 0),
(2, 'Ban du doan Phuong My Chi co dat gia?', 1, 2, 1, 0),
(3, 'Ban thich lam gi trong cac nghe duoi day?', 9, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phuongan`
--

CREATE TABLE `phuongan` (
  `idPA` int(11) NOT NULL,
  `Mota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SoLanChon` int(11) NOT NULL,
  `idBC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phuongan`
--

INSERT INTO `phuongan` (`idPA`, `Mota`, `SoLanChon`, `idBC`) VALUES
(1, 'La noi de sinh vien co the tu hoc CNTT', 21, 1),
(2, 'Noi dung ko phong phu lam', 5, 1),
(3, 'Lam cong chuc nha nuoc', 0, 3),
(4, 'Lam cho cac cong ty', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhchon`
--
ALTER TABLE `binhchon`
  ADD PRIMARY KEY (`idBC`);

--
-- Indexes for table `phuongan`
--
ALTER TABLE `phuongan`
  ADD PRIMARY KEY (`idPA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phuongan`
--
ALTER TABLE `phuongan`
  MODIFY `idPA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
