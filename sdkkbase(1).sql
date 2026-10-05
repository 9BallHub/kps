-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 01, 2026 at 12:52 PM
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
-- Struktura tabeli dla tabeli `cpucooler`
--

CREATE TABLE `cpucooler` (
  `id` int(200) NOT NULL,
  `Nazwa` varchar(200) NOT NULL,
  `Producent` varchar(200) NOT NULL,
  `typ` varchar(200) NOT NULL,
  `cena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `cpucooler`
--

INSERT INTO `cpucooler` (`id`, `Nazwa`, `Producent`, `typ`, `cena`) VALUES
(1, 'MSI MAG Core Liquid A13 240 ARGB 2x120mm', 'MSI', 'AIO', '260'),
(2, 'ENDORFY Navis F360 3x120mm', 'ENDORFY', 'AIO', '280'),
(3, 'ASUS PRIME LC 240 ARGB 2x120mm', 'ASUS', 'AIO', '480'),
(4, 'Deepcool LD240 ARGB 2x120mm', 'Deepcool', 'AIO', '369'),
(5, 'Noctua NH-U14S 140mm', 'Noctua', 'radiator', '480'),
(6, 'be quiet! Pure Rock Pro 3 2x120mm', 'be quiet!', 'radiator', '209'),
(7, 'ENDORFY Fortis 5 Black ARGB 140mm', 'ENDORFY', 'radiator', '260'),
(8, 'Arctic Freezer 8A 100mm', 'Arctic Freezer', 'radiator', '80'),
(9, 'Thermalright Peerless Assassin 120 SE 120mm', 'Thermalright', 'radiator', '190');

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `motherboard`
--

CREATE TABLE `motherboard` (
  `id` int(11) NOT NULL,
  `producent` varchar(200) NOT NULL,
  `Nazwa` varchar(200) NOT NULL,
  `socket` varchar(200) NOT NULL,
  `cena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`id`, `producent`, `Nazwa`, `socket`, `cena`) VALUES
(1, 'MSI', 'MSI B760 GAMING PLUS WiFi', 'LGA1700', '620'),
(2, 'Gigabyte', 'Gigabyte Z790 D', 'LGA1700', '675'),
(3, 'ASRock', 'ASRock H610M-HDV/M.2+ D5', 'LGA1700', '280'),
(4, 'Gigabyte', 'Gigabyte H510M S2H V3', 'LGA1200', '240'),
(5, 'ASUS', 'ASUS ROG STRIX B560-E GAMING WIFI', 'LGA1200', '429'),
(6, 'Gigabyte', 'Gigabyte Z590 AORUS PRO AX', 'LGA1200', '1000'),
(7, 'Asus', 'ASUS B650E MAX GAMING WIFI', 'AM5', '560'),
(8, 'Asus', 'ASUS TUF GAMING B850-PLUS WIFI', 'AM5', '910'),
(9, 'Gigabyte', 'Gigabyte X870 AORUS ELITE WIFI7', 'AM5', '1140'),
(10, 'Gigabyte', 'Gigabyte B550 AORUS ELITE AX V2', 'AM4', '540'),
(11, 'MSI', 'MSI A520M PRO', 'AM4', '275'),
(12, 'ASUS', 'ASUS TUF GAMING B550M-PLUS', 'AM4', '609');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ram`
--

CREATE TABLE `ram` (
  `id` int(200) NOT NULL,
  `Nazwa` varchar(200) NOT NULL,
  `producent` varchar(200) NOT NULL,
  `cena` varchar(200) NOT NULL,
  `ddr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `Nazwa`, `producent`, `cena`, `ddr`) VALUES
(1, 'Kingston FURY 128GB (2x64GB) 5600 CL36 Beast RGB', 'Kingston', '10500', 'DDR5'),
(2, 'GOODRAM 16GB (1x16GB) 7600 CL36 IRDM', 'GOODRAM', '1560', 'DDR5'),
(3, 'Lexar 32GB (2x16GB) 6000 CL30 Ares RGB', 'Lexar', '2900', 'DDR5'),
(4, 'Patriot 32GB (2x16GB) 6000MHz CL36 VIPER VENOM', 'Patriot', '2310', 'DDR5'),
(5, 'Patriot 64GB (2x32GB) 6400MHz CL32 Viper VENOM', 'Patriot', '5400', 'DDR5'),
(6, 'Corsair 16GB (2x8GB) 3200MHz CL16 Vengeance RGB RS', 'Corsair', '720', 'DDR4'),
(7, 'GOODRAM 32GB(2x16GB) 3600 CL18 Rival Deep Black', 'GOODRAM', '1570', 'DDR4'),
(8, 'Corsair 32GB (2x16GB) 3200MHz CL16 Vengeance LPX ', 'Corsair', '1230', 'DDR4'),
(9, 'Kingston FURY 16GB (2x8GB) 3200MHz CL16', 'Kingston', '910', 'DDR4'),
(10, 'Crucial 64GB (2x32GB) 3200MHz CL22 Pro', 'Crucial', '2790', 'DDR4');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `cpucooler`
--
ALTER TABLE `cpucooler`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ram`
--
ALTER TABLE `ram`
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
-- AUTO_INCREMENT for table `cpucooler`
--
ALTER TABLE `cpucooler`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
