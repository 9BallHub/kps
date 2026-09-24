-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 24, 2026 at 09:09 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdkkbase`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `Producent` varchar(200) NOT NULL,
  `Name` text NOT NULL,
  `socket` varchar(200) NOT NULL,
  `Cena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id`, `Producent`, `Name`, `socket`, `Cena`) VALUES
(1, 'Intel', 'Intel Core i5-14400F', 'LGA1700', '690'),
(2, 'Intel', 'Intel Core i5-14600K', 'LGA1700', '1200'),
(3, 'Intel', 'Intel Core i5-12400F', 'LGA1700', '640'),
(4, 'Intel', 'Intel Core i5-13500', 'LGA1700', '1300'),
(5, 'Intel', 'Intel Core i5-13600K', 'LGA1700', '1250'),
(6, 'Intel', 'Intel Core i9-14900KF', 'LGA1700', '1800'),
(7, 'Intel', 'Intel Core i5-10600KF', 'LGA1200', '600'),
(8, 'Intel', 'Intel Core i5-11600K', 'LGA1200', '880'),
(9, 'Intel', 'Intel Core i7-14700KF', 'LGA1700', '1600'),
(10, 'AMD', 'AMD Ryzen 5 5500F', 'AM4', '450'),
(11, 'AMD', 'AMD Ryzen 7 5700X', 'AM4', '840'),
(12, 'AMD', 'AMD Ryzen 9 5950X', 'AM4', '1400'),
(13, 'AMD', 'AMD Ryzen 7 5800X3D', 'AM4', '1550'),
(14, 'AMD', 'AMD Ryzen 3 4100', 'AM4', '280'),
(15, 'AMD', 'AMD Ryzen 5 7600', 'AM5', '750'),
(16, 'AMD', 'AMD Ryzen 5 9600', 'AM5', '870'),
(17, 'AMD', 'AMD Ryzen 5 9600X', 'AM5', '750'),
(18, 'AMD', 'AMD Ryzen 9 9900X3D', 'AM5', '2250');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gpu`
--

CREATE TABLE `gpu` (
  `id` int(200) NOT NULL,
  `producent` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `cena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`id`, `producent`, `model`, `cena`) VALUES
(1, 'Nvidia', 'Asus Dual GeForce RTX 4060 OC 8GB', '2000'),
(2, 'Nvidia', 'Zotac Gaming GeForce RTX 4070 Ti Trinity 12GB', '3300'),
(3, 'Nvidia', 'MSI GeForce RTX 5060 Ti 8G', '2300'),
(4, 'Nvidia', 'Zotac GeForce RTX 5070 Solid OC 12GB', '3800'),
(5, 'Nvidia', 'Gigabyte GeForce RTX 5080 Aero OC 16GB', '6800'),
(6, 'AMD', 'Gigabyte Radeon RX 7600 Gaming OC 8GB', '1300'),
(7, 'AMD', 'ASRock Radeon RX 9060 XT Challenger OC 16GB', '2500'),
(8, 'AMD', 'ASUS Radeon RX 9070 XT Prime OC White 16GB', '3900'),
(9, 'Intel', 'ASRock Arc B570 Challenger 10GB OC', '1400'),
(10, 'Intel', 'ASRock Arc B580 Challenger OC 12GB', '1600'),
(11, 'Intel', 'Intel Arc Pro B50 16GB', '2300');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
