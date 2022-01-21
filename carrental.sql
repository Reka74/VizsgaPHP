-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 21. 22:02
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `carrental`
--
CREATE DATABASE IF NOT EXISTS `carrental` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `carrental`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adminfelhasznalok`
--

DROP TABLE IF EXISTS `adminfelhasznalok`;
CREATE TABLE `adminfelhasznalok` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vezeteknev` varchar(255) NOT NULL,
  `utonev` varchar(255) NOT NULL,
  `jelszo` text NOT NULL,
  `ervenyes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- TÁBLA KAPCSOLATAI `adminfelhasznalok`:
--

--
-- A tábla adatainak kiíratása `adminfelhasznalok`
--

INSERT INTO `adminfelhasznalok` (`id`, `email`, `vezeteknev`, `utonev`, `jelszo`, `ervenyes`) VALUES
(1, 'tamas.rekasi@gmail.com', 'Rékasi', 'Tamás', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 1),
(2, 'nagy@gmail.com', 'Nagy', 'Miklós', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `car_type` varchar(45) DEFAULT NULL,
  `car_image` varchar(255) DEFAULT NULL,
  `price_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- TÁBLA KAPCSOLATAI `car`:
--   `price_id`
--       `price` -> `id`
--

--
-- A tábla adatainak kiíratása `car`
--

INSERT INTO `car` (`id`, `car_type`, `car_image`, `price_id`) VALUES
(1, 'McLaren 720 S', 'https%20_hypebeast.com_image_2021_09_1016-industries-mclaren-720s-purple-carbon-fiber-tuned-custom-supercar-8.jpg', 1),
(2, 'Acura NSX', 'https%20_hypebeast.com_image_2021_09_2022-acura-nsx-type-s-300-reserved-in-24-hours-us-orders-001.jpg', 2),
(3, 'Koenigsegg Agera S', 'https%20_hypebeast.com_image_2021_09_koenigsegg-agera-s-green-carbon-fiber-rare-swedish-hypercar-collecting-cars-auction-1.jpg', 3),
(4, 'Mansory Rolls-Royce', 'https%20_hypebeast.com_image_2021_09_mansory-rolls-royce-dawn-silver-bullet-soft-kit-custom-tuned-conversion-limited-edition-1.jpg', 4),
(5, 'Ferrari F8 Spider', 'https%20_hypebeast.com_image_2021_09_novitec-ferrari-f8-spider-carbon-fiber-tuned-twin-turbo-v8-convertible-italian-supercar-1.jpg', 5),
(6, 'Polski Fiat 126P', 'Polski_Fiat_126p_rocznik_1973.jpg', 10),
(7, 'Trabant 601 S', 'Trabbi_601-S_3828.jpg', 10),
(8, 'Dodge Challenger SRT Hellcat', '2021-dodge-challenger-srt-hellcat-109-1593640224.jpg', 6),
(9, 'Audi R8 V10 Spyder', 'audi_r8_v10_spyder_lead-700x467.jpg', 1),
(10, 'Chevrolet Corvette C7', 'Chevrolet_Corvette_C7.jpg', 7),
(11, 'Ford Mustang Shelby GT500', 'Ford-Mustang-Shelby-GT500.jpg', 4),
(12, 'Lamborghini Huracan EVO Spyder', 'lamborghini-huracan-evo-spyder.jpg', 5),
(13, 'Maserati Ghibli Trofeo', 'maserati-ghibli-trofeo-10.jpg', 8),
(14, 'Porsche GT3 RS', 'Porsche-GT3-RS.jpg', 9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `price_1day` int(11) DEFAULT NULL,
  `price_3days` int(11) DEFAULT NULL COMMENT 'A napi ár 80%-a',
  `price_7days` int(11) DEFAULT NULL COMMENT 'A napi ár 2/3-a',
  `deposit` int(11) DEFAULT NULL COMMENT 'A napi ár 2 szerese',
  `megjegyzes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- TÁBLA KAPCSOLATAI `price`:
--

--
-- A tábla adatainak kiíratása `price`
--

INSERT INTO `price` (`id`, `price_1day`, `price_3days`, `price_7days`, `deposit`, `megjegyzes`) VALUES
(1, 150000, 120000, 100000, 300000, ''),
(2, 180000, 144000, 120000, 360000, ''),
(3, 300000, 240000, 200000, 600000, ''),
(4, 450000, 360000, 300000, 900000, ''),
(5, 525000, 420000, 350000, 1050000, ''),
(6, 105000, 84000, 70000, 210000, ''),
(7, 120000, 96000, 80000, 240000, ''),
(8, 375000, 300000, 250000, 750000, ''),
(9, 750000, 600000, 500000, 1500000, ''),
(10, 0, 0, 0, 0, 'Nincs ár, csak érdeklődésre.');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `adminfelhasznalok`
--
ALTER TABLE `adminfelhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_id` (`price_id`) USING BTREE;

--
-- A tábla indexei `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `adminfelhasznalok`
--
ALTER TABLE `adminfelhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`price_id`) REFERENCES `price` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
