-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Már 23. 11:01
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
-- Adatbázis: `warzonedatabase`
--
CREATE DATABASE IF NOT EXISTS `warzonedatabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `warzonedatabase`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `attachments`
--

DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments` (
  `attachmentname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `attachmenttypenumber` int(11) NOT NULL,
  `attachmentnumber` int(11) NOT NULL,
  `accuracychange` int(11) NOT NULL,
  `damagechange` int(11) NOT NULL,
  `rangechange` int(11) NOT NULL,
  `fireratechange` int(11) NOT NULL,
  `mobilitychange` int(11) NOT NULL,
  `controlchange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `attachments`
--

INSERT INTO `attachments` (`attachmentname`, `attachmenttypenumber`, `attachmentnumber`, `accuracychange`, `damagechange`, `rangechange`, `fireratechange`, `mobilitychange`, `controlchange`) VALUES
('Lightweight Suppressor', 1, 1, 0, 1, -5, 0, -2, 5),
('Monolithic Suppressor', 1, 2, 0, 3, 5, 0, -2, 1),
('Tactical Suppressor', 1, 3, 0, 0, 1, 0, -1, -1),
('Flash Guard', 1, 4, 1, -1, 0, 0, 0, 0),
('Muzzle Brake', 1, 5, 2, 0, 0, 0, -1, 1),
('Compensator', 1, 6, 1, 0, 0, 0, -1, 2),
('Breacher Device', 1, 7, 0, 1, 0, 0, -1, 0),
('CQB Breacher Device', 1, 8, 0, 2, 0, 0, -1, 0),
('Collosus Suppressor', 1, 9, 0, 2, 3, 0, -2, 1),
('Bayonet', 1, 10, 0, 3, 0, 0, -2, 0),
('Oil Can Suppressor', 1, 11, -2, 2, 1, 0, -1, 0),
('Choke', 1, 12, 2, 2, 3, 0, -2, 1),
('FORGE TAC Marauder', 1, 13, 2, 2, 3, 0, -1, 0),
('Desperado Pro Compensator', 1, 14, 1, 1, 0, 0, -2, 3),
('ZLR Sabre', 1, 15, 1, 2, 3, 0, -2, 2),
('XRK Tank Brake', 1, 16, 2, 0, 0, 0, -3, 3),
('Rytec AMR Suppressor', 1, 17, 1, 2, 3, 0, -2, 1),
('Granulated Grip Tape', 2, 18, 1, 0, 2, 0, -2, 2),
('Stippled Grip Tape', 2, 19, 2, 0, 0, 0, 3, -1),
('Rubberized Grip Tape', 2, 20, -1, 0, -1, 0, 0, 3),
('Lockwood .357 Custom Stock', 2, 21, 1, 0, 0, 0, 1, 2),
('FSS Raider Stock', 2, 22, 2, 0, 0, 0, 1, 2),
('X16 Stock', 2, 23, 1, 0, 1, 0, 0, 2),
('FTAC 60 Series Polymer', 2, 24, 0, 0, 0, 0, 3, 1),
('FTAC G-5 EXO', 2, 25, 2, -1, 1, 0, 3, -1),
('FTAC 60 Series Rubber', 2, 26, -2, 0, 1, 0, 2, 1),
('XRK Void II', 2, 27, 2, 0, 0, 0, 4, -2),
('Cronen Sniper Elite', 2, 28, 3, 0, 1, 0, -2, 3),
('FTAC R-89 Rubber', 2, 29, 3, 0, 0, 0, -1, -1),
('XRK Pro Grip', 2, 30, 4, 0, 0, 0, -1, -2),
('XRK Speed Grip', 2, 31, 1, 0, 0, 0, 4, -2),
('XRK CR-56 Granulated Wrap', 2, 32, 1, 0, 1, 0, -3, 2),
('XRK CR-56 Stippled Wrap', 2, 33, -1, 0, 0, 0, 5, -2),
('XRK CR-56 Rubberized Wrap', 2, 34, 2, 0, 1, 0, -3, 2),
('No Stock', 3, 35, -2, 0, -3, 0, 6, -3),
('FORGE TAC Stalker', 3, 36, 3, 0, 2, 0, -2, 1),
('FORGE TAC Ultralight', 3, 37, -1, 0, 1, 0, 3, -2),
('XRK Striker', 3, 38, -1, 0, 0, 0, 4, 0),
('Singuard Arms Invader', 3, 39, -3, 0, 0, 0, 3, 1),
('Forge Tac CQS', 3, 40, 0, 0, -1, 0, 3, -2),
('Classic Straight-line Stock', 3, 41, 1, 0, 0, 0, 3, -2),
('FSS Close Quarters Stock', 3, 42, -1, 0, 0, 0, 4, -2),
('FTAC Collapsible', 3, 43, -1, 0, 0, 0, 4, -2),
('FTAC Hunter', 3, 44, 3, 0, 0, 0, -3, 1),
('Singuard Arms Sniper Pro', 3, 45, 1, 0, 0, 0, -2, 2),
('Factory 18 Aluminum Stock', 3, 46, -1, 0, 0, 0, 3, -1),
('M-16 Stock', 3, 47, 2, 0, 1, 0, -3, 2),
('FR Ultralight Hollow', 3, 48, -1, 0, 0, 0, 3, -1),
('Operator Reflex Sight', 4, 49, 1, 0, 1, 0, 1, 0),
('Aim-Op Reflex Sight', 4, 50, 2, 0, 1, 0, -1, 0),
('Viper Reflex Sight', 4, 51, 2, 0, 1, 0, -2, -1),
('Cronen LP945 Mini Reflex', 4, 52, 2, 0, 1, 0, -2, 0),
('Integral Hybrid', 4, 53, 1, 0, 2, 0, -3, -1),
('VLK 3.0x Optic', 4, 54, 3, 0, 2, 0, -3, 1),
('Canted Hybrid', 4, 55, 1, 0, 0, 0, -1, 2),
('1mW Laser', 5, 56, 3, 0, 0, 0, 1, 1),
('5mW Laser', 5, 57, 3, 0, 0, 0, 0, 2),
('Tac Laser', 5, 58, 3, 0, 0, 0, 0, 3),
('FSS R9-0 Bulldog', 6, 59, -1, 0, 0, 1, -1, 0),
('FTAC Ultralight Pump', 6, 60, 1, 0, 0, 2, -1, 1),
('FTAC Close Quarters Pro', 6, 61, 1, 2, 0, 0, 0, -1),
('XRK Race Grip', 6, 62, 2, 0, 0, 0, 1, 0),
('VLK Prime Pump Grip', 6, 63, 1, 3, 0, 0, 0, -1),
('XRK ReliaGrip', 6, 64, 0, 1, 0, 0, -3, 1),
('120 Round Belt', 7, 65, 0, 0, 0, 2, -3, 0),
('150 Round Belt', 7, 66, 0, 0, 0, 4, -3, 0),
('50 Round Mags', 7, 67, 0, 0, 0, 2, -1, 0),
('60 Round Mags', 7, 68, 0, 0, 0, 2, -1, 0),
('9mm Para 32-Round Mags', 7, 69, 0, 0, 0, 2, 1, -1),
('.458 SOCOM 10-Round Mags', 7, 70, 0, 2, 0, 1, 0, 0),
('45 Round Mags', 7, 71, 0, 0, 0, 2, -1, 0),
('100 Round Drums', 7, 72, 0, 0, 0, 2, -2, 0),
('24 Round Mags', 7, 73, 0, 0, 0, 1, 0, -1),
('30 Round Mags', 7, 74, 0, 0, 0, -1, 0, 1),
('25 Round Mags', 7, 75, 0, 0, 0, 1, 0, 0),
('Stock M16 Grenadier', 8, 76, 2, 1, 1, 0, -1, 1),
('Corvus Custom Marksman', 8, 77, 1, 0, 1, 0, -1, 0),
('FSS 12.4 Predator', 8, 78, 1, 0, 0, 2, 0, -1),
('Subsonic Integral Suppressor', 8, 79, 2, 1, 0, 0, -1, 0),
('XRK Marksman', 8, 80, 1, 0, 0, 0, 1, -2),
('Oden Factory 420mm', 8, 81, 1, 0, 2, 1, 0, 2),
('FORGE TAC Precision 20.0', 8, 82, 1, 1, 0, 1, 2, 1),
('Bipod', 9, 83, 2, 0, 2, 0, -1, 1),
('Commando Foregrip', 9, 84, 3, 0, 1, 0, 0, 3),
('Merc Foregrip', 9, 85, 1, 0, 2, 0, -2, 0),
('Ranger Foregrip', 9, 86, 2, 0, 0, 0, -2, 2),
('Tempus SlimGrip', 10, 87, 0, 0, 1, 2, 0, -1),
('FORGE TAC Steady Grip', 10, 88, 1, 0, 1, 1, 0, -2),
('FORGE TAC Commander', 10, 89, 1, 0, 0, 0, -1, 0),
('Match Grade Trigger', 11, 90, 0, 0, 0, 3, 1, 0),
('Heavy Duty Trigger', 11, 91, 1, 0, 0, 2, 0, -1),
('Lightweight Trigger', 11, 92, 1, 0, 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `attachmenttypes`
--

DROP TABLE IF EXISTS `attachmenttypes`;
CREATE TABLE `attachmenttypes` (
  `attachmenttypename` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `attachmenttypenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `attachmenttypes`
--

INSERT INTO `attachmenttypes` (`attachmenttypename`, `attachmenttypenumber`) VALUES
('muzzle', 1),
('rear grip', 2),
('stock', 3),
('optic', 4),
('laser', 5),
('pump', 6),
('magazine', 7),
('barrel', 8),
('underbarrel', 9),
('guard', 10),
('trigger action', 11);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `weapons`
--

DROP TABLE IF EXISTS `weapons`;
CREATE TABLE `weapons` (
  `weaponname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `weapontypenumber` int(11) NOT NULL,
  `weaponnumber` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `range` int(11) NOT NULL,
  `firerate` int(11) NOT NULL,
  `mobility` int(11) NOT NULL,
  `control` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `weapons`
--

INSERT INTO `weapons` (`weaponname`, `weapontypenumber`, `weaponnumber`, `accuracy`, `damage`, `range`, `firerate`, `mobility`, `control`) VALUES
('AK-47', 1, 1, 69, 77, 67, 61, 59, 69),
('AN-94', 1, 2, 74, 74, 62, 68, 62, 70),
('AS-VAL', 1, 3, 68, 76, 59, 76, 64, 69),
('CR-56 AMAX', 1, 4, 69, 75, 65, 66, 62, 69),
('FAL', 1, 5, 74, 79, 70, 59, 60, 68),
('FN Scar 17', 1, 6, 69, 71, 68, 63, 57, 67),
('FR 5.56', 1, 7, 73, 75, 62, 76, 59, 71),
('Grau 5.56', 1, 8, 70, 72, 66, 72, 65, 70),
('Kilo 141', 1, 9, 70, 73, 64, 73, 61, 72),
('M13', 1, 10, 72, 71, 64, 77, 62, 74),
('M4A1', 1, 11, 71, 72, 63, 75, 63, 71),
('Oden', 1, 12, 65, 81, 68, 56, 57, 65),
('RAM-7', 1, 13, 70, 73, 60, 76, 66, 73),
('AUG', 2, 14, 67, 70, 58, 72, 65, 72),
('CX-9', 2, 15, 65, 66, 52, 81, 79, 74),
('Fennec', 2, 16, 71, 65, 50, 82, 70, 73),
('ISO', 2, 17, 65, 68, 51, 77, 74, 77),
('MP5', 2, 18, 66, 67, 55, 75, 73, 77),
('MP7', 2, 19, 63, 64, 47, 79, 75, 76),
('P90', 2, 20, 69, 65, 52, 78, 70, 74),
('PP19 Bizon', 2, 21, 64, 72, 53, 67, 68, 75),
('Striker 45', 2, 22, 68, 75, 61, 64, 72, 72),
('Uzi', 2, 23, 61, 70, 49, 64, 78, 78),
('725', 3, 24, 70, 85, 56, 46, 62, 60),
('JAK-12', 3, 25, 56, 75, 40, 53, 70, 73),
('Model 680', 3, 26, 60, 82, 45, 44, 69, 65),
('Origin 12 Shotgun', 3, 27, 50, 76, 38, 49, 76, 70),
('R9-0 Shotgun', 3, 28, 55, 79, 42, 51, 71, 75),
('VLK Rogue', 3, 29, 57, 78, 42, 52, 78, 68),
('AX-50', 4, 30, 82, 85, 79, 38, 44, 70),
('Dragunov', 4, 31, 81, 78, 75, 48, 50, 55),
('HDR', 4, 32, 83, 86, 83, 36, 43, 65),
('Rytec AMR', 4, 33, 80, 84, 78, 46, 40, 65),
('Bruen Mk9', 5, 34, 78, 73, 74, 73, 52, 69),
('FiNN LMG', 5, 35, 79, 74, 72, 66, 54, 73),
('Holger-26', 5, 36, 73, 73, 76, 71, 52, 72),
('M91', 5, 37, 74, 76, 77, 68, 51, 65),
('MG34', 5, 38, 72, 77, 78, 76, 48, 72),
('PKM', 5, 39, 75, 77, 76, 73, 50, 65),
('SA87', 5, 40, 73, 74, 77, 64, 53, 70),
('Crossbow', 6, 41, 70, 85, 60, 26, 70, 64),
('EBR-14', 6, 42, 77, 76, 73, 50, 58, 72),
('Kar98k', 6, 43, 76, 82, 75, 40, 53, 68),
('MK2 Carbine', 6, 44, 78, 80, 68, 45, 66, 60),
('SKS', 6, 45, 75, 76, 71, 52, 59, 73),
('SP-R 208', 6, 46, 77, 84, 76, 41, 51, 65),
('.357', 7, 47, 60, 63, 56, 44, 76, 65),
('.50 GS', 7, 48, 54, 65, 52, 53, 77, 60),
('1911', 7, 49, 55, 59, 44, 55, 80, 69),
('M19', 7, 50, 57, 55, 40, 60, 82, 72),
('Renetti', 7, 51, 60, 55, 41, 62, 80, 70),
('Sykov', 7, 52, 53, 57, 43, 57, 80, 71),
('X16', 7, 53, 55, 57, 42, 58, 81, 70),
('Combat Knife', 8, 54, 0, 90, 5, 0, 80, 30),
('Dual Kodachis', 8, 55, 0, 92, 11, 0, 75, 31),
('Kali Sticks', 8, 56, 0, 84, 7, 0, 82, 35),
('Riot Shield', 8, 57, 0, 90, 5, 0, 80, 0),
('JOKR', 9, 58, 90, 80, 95, 25, 42, 40),
('PILA', 9, 59, 68, 82, 90, 25, 47, 30),
('RPG-7', 9, 60, 56, 86, 85, 30, 49, 40),
('Strela-P', 9, 61, 70, 88, 87, 30, 47, 35);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `weapontypes`
--

DROP TABLE IF EXISTS `weapontypes`;
CREATE TABLE `weapontypes` (
  `weapontypename` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `weapontypenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `weapontypes`
--

INSERT INTO `weapontypes` (`weapontypename`, `weapontypenumber`) VALUES
('assault rifle', 1),
('submachine gun', 2),
('shotgun', 3),
('sniper rifle', 4),
('light machine gun', 5),
('marksman rifle', 6),
('handgun', 7),
('melee', 8),
('launcher', 9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `weapont_attachmentt`
--

DROP TABLE IF EXISTS `weapont_attachmentt`;
CREATE TABLE `weapont_attachmentt` (
  `weapontypenumber` int(11) NOT NULL,
  `attachmenttypenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`attachmentnumber`),
  ADD UNIQUE KEY `attachmentname` (`attachmentname`),
  ADD KEY `attachment_type` (`attachmenttypenumber`);

--
-- A tábla indexei `attachmenttypes`
--
ALTER TABLE `attachmenttypes`
  ADD PRIMARY KEY (`attachmenttypenumber`);

--
-- A tábla indexei `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`weaponnumber`),
  ADD UNIQUE KEY `weaponname` (`weaponname`),
  ADD KEY `weapon_type` (`weapontypenumber`);

--
-- A tábla indexei `weapontypes`
--
ALTER TABLE `weapontypes`
  ADD PRIMARY KEY (`weapontypenumber`);

--
-- A tábla indexei `weapont_attachmentt`
--
ALTER TABLE `weapont_attachmentt`
  ADD KEY `weapontypeSwitch` (`weapontypenumber`),
  ADD KEY `attachmenttypeSwitch` (`attachmenttypenumber`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachment_type` FOREIGN KEY (`attachmenttypenumber`) REFERENCES `attachmenttypes` (`attachmenttypenumber`);

--
-- Megkötések a táblához `weapons`
--
ALTER TABLE `weapons`
  ADD CONSTRAINT `weapon_type` FOREIGN KEY (`weapontypenumber`) REFERENCES `weapontypes` (`weapontypenumber`);

--
-- Megkötések a táblához `weapont_attachmentt`
--
ALTER TABLE `weapont_attachmentt`
  ADD CONSTRAINT `attachmenttypeSwitch` FOREIGN KEY (`attachmenttypenumber`) REFERENCES `attachmenttypes` (`attachmenttypenumber`),
  ADD CONSTRAINT `weapontypeSwitch` FOREIGN KEY (`weapontypenumber`) REFERENCES `weapontypes` (`weapontypenumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
