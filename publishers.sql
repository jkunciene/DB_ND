-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2019 m. Lap 17 d. 19:54
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `publishers`
--

CREATE TABLE `publishers` (
  `id` int(11) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `printed_quantity` int(11) DEFAULT NULL,
  `printing_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `publishers`
--

INSERT INTO `publishers` (`id`, `publisher_name`, `book_title`, `author`, `printed_quantity`, `printing_price`) VALUES
(1, 'Debesų ganyklos', 'ATOMINIAI ĮPROČIAI: lengvas ir patikrintas būdas išsiugdyti gerus įpročius ir nugalėti blogus', 'James Clear', 100, 2),
(3, 'Debesų ganyklos', 'Didžioji pasakų knyga', 'Laura Bajoriūnė', 60563, 11),
(4, 'Pirma leidykla', 'EDENO MAIŠTININKAI. Ar pavyks vienai merginai išgelbėti pragaru virstantį rojų? „The New York Times“ bestselerių trilogijos „Edenas“ trečioji dalis', 'Joey Graceffa', 6000, 7),
(5, 'Debesų ganyklos', 'AUŠVICO TATUIRUOTOJAS: tikra Leilo Sokolovo meilės ir išlikimo drama, nušviečianti dangiška vilties šviesa net tamsiausiomis žmonijos istorijos akimirkomis', 'Heather Morris', 60563, 8),
(6, 'Antra leidykla', 'Skrydis', 'Zigmas', 100542, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
