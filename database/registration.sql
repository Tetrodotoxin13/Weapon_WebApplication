-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Már 23. 08:55
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `registration`
--
CREATE DATABASE IF NOT EXISTS `registration` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `registration`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1234, 'admin1234', 'admin1234'),
(1313, 'admin1313', 'admin1313'),
(1419, 'admin1419', 'admin1419'),
(2333, 'admin2333', 'admin2333'),
(2567, 'admin2567', 'admin2567'),
(5745, 'admin5745', 'admin5745'),
(6666, 'admin6666', 'admin6666'),
(6913, 'admin6913', 'admin6913'),
(9583, 'admin9583', 'admin9583'),
(9699, 'admin9699', 'admin9699');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'sz9takleo', 'tleon@hotmail.hu', '912ec803b2ce49e4a541068d495ab570'),
(2, 'leontin', 'tleontin@freemail.hu', '912ec803b2ce49e4a541068d495ab570'),
(3, 'reka', 'takacs.leontin.h776488@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(4, 'takacs', 'takacsleontin13@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(5, 'leon', 'leontin13@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
(6, 'leontintakacs', 'leontint@gmail.hu', '912ec803b2ce49e4a541068d495ab570'),
(7, 'felhasznalo1', 'felhasznalo1@gmail.com', '1f5364c58947e14f9afa445bdf1ba4d9'),
(8, 'alma', 'alma@freemail.hu', '912ec803b2ce49e4a541068d495ab570'),
(10, 'olaf', 'sdfsdfdsf@adsf', '912ec803b2ce49e4a541068d495ab570'),
(12, 'lamaalma', 'fdf@d', '912ec803b2ce49e4a541068d495ab570'),
(13, 'lamalom', 'lama@d', '912ec803b2ce49e4a541068d495ab570'),
(14, 'asdffdfdf', 'ddd@f.com', '912ec803b2ce49e4a541068d495ab570'),
(15, 'tesztelek', 'tesztelek@gmail.com', '6c90aa3760658846a86a263a4e92630e'),
(16, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'admin2', 'admin2@admin2.com', 'c84258e9c39059a89ab77d846ddab909'),
(20, 'admin3', 'admin3@gmail.com', '32cacb2f994f6b42183a1300d9a3e8d6');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
