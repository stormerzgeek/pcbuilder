-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 11:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcbuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `builds`
--

CREATE TABLE `builds` (
  `name` varchar(100) DEFAULT NULL,
  `build` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`name`) VALUES
('Intel Celeron G6900T'),
('Intel Celeron G6900'),
('Intel Pentium G7400T'),
('Intel Pentium G7400'),
('Intel i3-12100T'),
('Intel i3-12100F'),
('Intel i3-12100'),
('Intel i3-12300T'),
('Intel i3-12300'),
('Intel i5-12400T'),
('Intel i5-12400F'),
('Intel i5-12400'),
('Intel i5-12500T'),
('Intel i5-12500'),
('Intel i5-12600T'),
('Intel i5-12600'),
('Intel i5-12600KF'),
('Intel i5-12600K'),
('Intel i7-12700T'),
('Intel i7-12700F'),
('Intel i7-12700'),
('Intel i7-12700KF'),
('Intel i7-12700K'),
('Intel i9-12900T'),
('Intel i9-12900F'),
('Intel i9-12900'),
('Intel i9-12900KF'),
('Intel i9-12900K'),
('Intel i9-12900KS'),
('Intel i5-11400T'),
('Intel i5-11400F'),
('Intel i5-11400'),
('Intel i5-11500T'),
('Intel i5-11500'),
('Intel i5-11600T'),
('Intel i5-11600'),
('Intel i5-11600KF'),
('Intel i5-11600K'),
('Intel i7-11700T'),
('Intel i7-11700F'),
('Intel i7-11700'),
('Intel i7-11700KF'),
('Intel i7-11700K'),
('Intel i9-11900T'),
('Intel i9-11900F'),
('Intel i9-11900'),
('Intel i9-11900KF'),
('Intel i9-11900K'),
('AMD Ryzen 3 5300GE'),
('AMD Ryzen 3 5300G'),
('AMD Ryzen 5 5600GE'),
('AMD Ryzen 5 5600G'),
('AMD Ryzen 7 5700GE'),
('AMD Ryzen 7 5700G'),
('AMD Ryzen 5 5500'),
('AMD Ryzen 5 5600'),
('AMD Ryzen 5 5600X'),
('AMD Ryzen 7 5700X'),
('AMD Ryzen 7 5800'),
('AMD Ryzen 7 5800X'),
('AMD Ryzen 7 5800X3D'),
('AMD Ryzen 9 5900'),
('AMD Ryzen 9 5900X'),
('AMD Ryzen 9 5950X'),
('AMD Ryzen 3 4300GE'),
('AMD Ryzen 3 4300G'),
('AMD Ryzen 5 4600GE'),
('AMD Ryzen 5 4600G'),
('AMD Ryzen 7 4700GE'),
('AMD Ryzen 7 4700G'),
('AMD Ryzen 3 4100'),
('AMD Ryzen 3 4500');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`name`) VALUES
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti');

-- --------------------------------------------------------

--
-- Table structure for table `intel11thx2`
--

CREATE TABLE `intel11thx2` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intel11thx2`
--

INSERT INTO `intel11thx2` (`name`) VALUES
('Intel i5-11400T'),
('Intel i5-11400F'),
('Intel i5-11400'),
('Intel i5-11500T'),
('Intel i5-11500'),
('Intel i5-11600T'),
('Intel i5-11600'),
('Intel i5-11600KF'),
('Intel i5-11600K'),
('Intel i7-11700T'),
('Intel i7-11700F'),
('Intel i7-11700'),
('Intel i7-11700KF'),
('Intel i7-11700K'),
('Intel i9-11900T'),
('Intel i9-11900F'),
('Intel i9-11900'),
('Intel i9-11900KF'),
('Intel i9-11900K'),
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti'),
('Standard-ATX'),
('Micro-ATX'),
('Extended-ATX'),
('Mini-ITX'),
('H510 Chipset'),
('B560 Chipset'),
('H570 Chipset'),
('Z590 Chipset'),
('H470 Chipset'),
('Z490 Chipset'),
('1 Stick'),
('2 Sticks'),
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `intel11thx4`
--

CREATE TABLE `intel11thx4` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intel11thx4`
--

INSERT INTO `intel11thx4` (`name`) VALUES
('Intel i5-11400T'),
('Intel i5-11400F'),
('Intel i5-11400'),
('Intel i5-11500T'),
('Intel i5-11500'),
('Intel i5-11600T'),
('Intel i5-11600'),
('Intel i5-11600KF'),
('Intel i5-11600K'),
('Intel i7-11700T'),
('Intel i7-11700F'),
('Intel i7-11700'),
('Intel i7-11700KF'),
('Intel i7-11700K'),
('Intel i9-11900T'),
('Intel i9-11900F'),
('Intel i9-11900'),
('Intel i9-11900KF'),
('Intel i9-11900K'),
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti'),
('Standard-ATX'),
('Micro-ATX'),
('Extended-ATX'),
('B560 Chipset'),
('H570 Chipset'),
('Z590 Chipset'),
('H470 Chipset'),
('Z490 Chipset'),
('1 Stick'),
('2 Sticks'),
('3 Sticks'),
('4 Sticks'),
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `intel12thx2`
--

CREATE TABLE `intel12thx2` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intel12thx2`
--

INSERT INTO `intel12thx2` (`name`) VALUES
('Intel Celeron G6900T'),
('Intel Celeron G6900'),
('Intel Pentium G7400T'),
('Intel Pentium G7400'),
('Intel i3-12100T'),
('Intel i3-12100F'),
('Intel i3-12100'),
('Intel i3-12300T'),
('Intel i3-12300'),
('Intel i5-12400T'),
('Intel i5-12400F'),
('Intel i5-12400'),
('Intel i5-12500T'),
('Intel i5-12500'),
('Intel i5-12600T'),
('Intel i5-12600'),
('Intel i5-12600KF'),
('Intel i5-12600K'),
('Intel i7-12700T'),
('Intel i7-12700F'),
('Intel i7-12700'),
('Intel i7-12700KF'),
('Intel i7-12700K'),
('Intel i9-12900T'),
('Intel i9-12900F'),
('Intel i9-12900'),
('Intel i9-12900KF'),
('Intel i9-12900K'),
('Intel i9-12900KS'),
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti'),
('Standard-ATX'),
('Micro-ATX'),
('Extended-ATX'),
('Mini-ITX'),
('B660 Chipset'),
('H670 Chipset'),
('Z690 Chipset'),
('1 Stick'),
('2 Sticks'),
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `intel12thx4`
--

CREATE TABLE `intel12thx4` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intel12thx4`
--

INSERT INTO `intel12thx4` (`name`) VALUES
('Intel Celeron G6900T'),
('Intel Celeron G6900'),
('Intel Pentium G7400T'),
('Intel Pentium G7400'),
('Intel i3-12100T'),
('Intel i3-12100F'),
('Intel i3-12100'),
('Intel i3-12300T'),
('Intel i3-12300'),
('Intel i5-12400T'),
('Intel i5-12400F'),
('Intel i5-12400'),
('Intel i5-12500T'),
('Intel i5-12500'),
('Intel i5-12600T'),
('Intel i5-12600'),
('Intel i5-12600KF'),
('Intel i5-12600K'),
('Intel i7-12700T'),
('Intel i7-12700F'),
('Intel i7-12700'),
('Intel i7-12700KF'),
('Intel i7-12700K'),
('Intel i9-12900T'),
('Intel i9-12900F'),
('Intel i9-12900'),
('Intel i9-12900KF'),
('Intel i9-12900K'),
('Intel i9-12900KS'),
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti'),
('Standard-ATX'),
('Micro-ATX'),
('Extended-ATX'),
('B660 Chipset'),
('H670 Chipset'),
('Z690 Chipset'),
('1 Stick'),
('2 Sticks'),
('3 Sticks'),
('4 Sticks'),
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `mbformfactor`
--

CREATE TABLE `mbformfactor` (
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mbformfactor`
--

INSERT INTO `mbformfactor` (`name`) VALUES
('Standard-ATX'),
('Micro-ATX'),
('Mini-ITX'),
('Extended-ATX');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`name`) VALUES
('H610 Chipset'),
('B660 Chipset'),
('H670 Chipset'),
('Z690 Chipset'),
('H510 Chipset'),
('B560 Chipset'),
('H570 Chipset'),
('Z590 Chipset'),
('H470 Chipset'),
('Z490 Chipset'),
('X570 Chipset'),
('B550 Chipset'),
('A520 Chipset'),
('X470 Chipset'),
('B450 Chipset'),
('A320 Chipset'),
('B350 Chipset'),
('X370 Chipset');

-- --------------------------------------------------------

--
-- Table structure for table `ramcount`
--

CREATE TABLE `ramcount` (
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ramcount`
--

INSERT INTO `ramcount` (`name`) VALUES
('1 Stick'),
('2 Sticks'),
('3 Sticks'),
('4 Sticks');

-- --------------------------------------------------------

--
-- Table structure for table `ramsizespeed`
--

CREATE TABLE `ramsizespeed` (
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ramsizespeed`
--

INSERT INTO `ramsizespeed` (`name`) VALUES
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `ryzen5thx2`
--

CREATE TABLE `ryzen5thx2` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ryzen5thx2`
--

INSERT INTO `ryzen5thx2` (`name`) VALUES
('AMD Ryzen 3 5300GE'),
('AMD Ryzen 3 5300G'),
('AMD Ryzen 5 5600GE'),
('AMD Ryzen 5 5600G'),
('AMD Ryzen 7 5700GE'),
('AMD Ryzen 7 5700G'),
('AMD Ryzen 5 5500'),
('AMD Ryzen 5 5600'),
('AMD Ryzen 5 5600X'),
('AMD Ryzen 7 5700X'),
('AMD Ryzen 7 5800'),
('AMD Ryzen 7 5800X'),
('AMD Ryzen 7 5800X3D'),
('AMD Ryzen 9 5900'),
('AMD Ryzen 9 5900X'),
('AMD Ryzen 9 5950X'),
('AMD Ryzen 3 4300GE'),
('AMD Ryzen 3 4300G'),
('AMD Ryzen 5 4600GE'),
('AMD Ryzen 5 4600G'),
('AMD Ryzen 7 4700GE'),
('AMD Ryzen 7 4700G'),
('AMD Ryzen 3 4100'),
('AMD Ryzen 3 4500'),
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti'),
('Standard-ATX'),
('Micro-ATX'),
('Extended-ATX'),
('Mini-ITX'),
('X570 Chipset'),
('B550 Chipset'),
('A520 Chipset'),
('X470 Chipset'),
('B450 Chipset'),
('A320 Chipset'),
('B350 Chipset'),
('X370 Chipset'),
('1 Stick'),
('2 Sticks'),
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `ryzen5thx4`
--

CREATE TABLE `ryzen5thx4` (
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ryzen5thx4`
--

INSERT INTO `ryzen5thx4` (`name`) VALUES
('AMD Ryzen 3 5300GE'),
('AMD Ryzen 3 5300G'),
('AMD Ryzen 5 5600GE'),
('AMD Ryzen 5 5600G'),
('AMD Ryzen 7 5700GE'),
('AMD Ryzen 7 5700G'),
('AMD Ryzen 5 5500'),
('AMD Ryzen 5 5600'),
('AMD Ryzen 5 5600X'),
('AMD Ryzen 7 5700X'),
('AMD Ryzen 7 5800'),
('AMD Ryzen 7 5800X'),
('AMD Ryzen 7 5800X3D'),
('AMD Ryzen 9 5900'),
('AMD Ryzen 9 5900X'),
('AMD Ryzen 9 5950X'),
('AMD Ryzen 3 4300GE'),
('AMD Ryzen 3 4300G'),
('AMD Ryzen 5 4600GE'),
('AMD Ryzen 5 4600G'),
('AMD Ryzen 7 4700GE'),
('AMD Ryzen 7 4700G'),
('AMD Ryzen 3 4100'),
('AMD Ryzen 3 4500'),
('AMD RX 6400'),
('AMD RX 6500 XT'),
('AMD RX 6600'),
('AMD RX 6600 XT'),
('AMD RX 6650 XT'),
('AMD RX 6700'),
('AMD RX 6700 XT'),
('AMD RX 6750 XT'),
('AMD RX 6800'),
('AMD RX 6800 XT'),
('AMD RX 6900 XT'),
('AMD RX 6950 XT'),
('AMD RX 5300'),
('AMD RX 5300 XT'),
('AMD RX 5500'),
('AMD RX 5500 XT'),
('AMD RX 5600'),
('AMD RX 5600 XT'),
('AMD RX 5700'),
('AMD RX 5700 XT'),
('AMD Radeon VII'),
('AMD RX Vega 56'),
('AMD RX Vega 64'),
('Nvidia RTX 3050'),
('Nvidia RTX 3060'),
('Nvidia RTX 3060 Ti'),
('Nvidia RTX 3070'),
('Nvidia RTX 3070 Ti'),
('Nvidia RTX 3080'),
('Nvidia RTX 3080 12gb'),
('Nvidia RTX 3080 Ti'),
('Nvidia RTX 3090'),
('Nvidia RTX 3090 Ti'),
('Nvidia RTX 2060'),
('Nvidia RTX 2060 12gb'),
('Nvidia RTX 2060 Super'),
('Nvidia RTX 2070'),
('Nvidia RTX 2070 Super'),
('Nvidia RTX 2080'),
('Nvidia RTX 2080 Super'),
('Nvidia RTX 2080 Ti'),
('Nvidia Titan RTX'),
('Nvidia GTX 1630'),
('Nvidia GTX 1650'),
('Nvidia GTX 1650 Super'),
('Nvidia GTX 1660'),
('Nvidia GTX 1660 Super'),
('Nvidia GTX 1660 Ti'),
('Standard-ATX'),
('Micro-ATX'),
('Extended-ATX'),
('X570 Chipset'),
('B550 Chipset'),
('A520 Chipset'),
('X470 Chipset'),
('B450 Chipset'),
('A320 Chipset'),
('B350 Chipset'),
('X370 Chipset'),
('1 Stick'),
('2 Sticks'),
('3 Sticks'),
('4 Sticks'),
('4GB 2400MHz'),
('4GB 2666MHz'),
('8GB 2400MHz'),
('8GB 2666MHz'),
('8GB 2933MHz'),
('8GB 3000MHz'),
('8GB 3200MHz'),
('8GB 3600MHz'),
('8GB 3800MHz'),
('8GB 4000MHz'),
('8GB 4133MHz'),
('8GB 4200MHz'),
('8GB 4400MHz'),
('8GB 4600MHz'),
('8GB 4800MHz'),
('8GB 5000MHz'),
('8GB 5133MHz'),
('16GB 2400MHz'),
('16GB 2666MHz'),
('16GB 3000MHz'),
('16GB 3200MHz'),
('16GB 3600MHz'),
('16GB 3800MHz'),
('16GB 4000MHz'),
('16GB 4200MHz'),
('16GB 4800MHz'),
('32GB 3000MHz'),
('32GB 3200MHz');

-- --------------------------------------------------------

--
-- Table structure for table `ubuilds`
--

CREATE TABLE `ubuilds` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `user` varchar(200) DEFAULT NULL,
  `cpu` varchar(200) DEFAULT NULL,
  `gpu` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `build_date` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ubuilds`
--

INSERT INTO `ubuilds` (`id`, `name`, `user`, `cpu`, `gpu`, `ram`, `description`, `price`, `build_date`, `image`) VALUES
(37, 'Storminator', 'Deraj', 'AMD Ryzen 7 5800x3d', 'Nvidia RTX 3080ti', '32gb', 'This is one of the highest end PCs which I have built. This can play all latest games at high refresh rate and resolution.', '2,30,000', '28-07-2022', '5800x3d.jpg'),
(38, 'Battle Axe', 'Deraj', 'Intel I7-12600k', 'Nvidia RTX 3070', '16GB', 'This is a great and Value for money PC which can play all latest games at high refresh rate or high resolution.', '1,60,000', '27-02-2022', '12600k.jpg'),
(39, 'Ignaris', 'Reahan', 'AMD Ryzen 9 5900x', 'AMD Radeon 6800XT', '24GB', 'This is an all AMD build which can run almost every games at very high fidelity.', '2,50,000', '18-03-2022', '5900x.jpg'),
(40, 'Alpha Monk', 'Reahan', '13900k', 'Nvidia RTX 4090', '64GB', 'This is the most high end PC than can be currently built and it can run every game in the highest settings possible.', '3,90,000', '07-11-2022', '13900k.jpg'),
(41, 'Fire PC', 'Mohamed', 'AMD Ryzen 9 7950x', 'AMD Radeon 7900XTX', '64GB', 'The ultimate AMD pc build ', '3,30,300', '11-11-2022', 'images (7).jpeg'),
(42, 'Vedapu PC', 'Emceepranav', 'AMD Ryzen 9 7950X', 'NVIDIA RTX 4090Ti', '64 GB', 'Verry Vedapu PC ever!!', '5,00,000', '16-11-2022', '309c86355eb41e1aaf5ae362f530b5d4.jpg'),
(43, 'Console Killer', 'Deraj', 'Intel i7-12700k', 'Nvidia RTX 3080', '32gb', 'This is a perfect console killer', '1,20,000', '13-07-2022', 'istockphoto-1314343964-612x612.jpg'),
(44, 'Azim bhai', 'Emceepranav', 'Intel TR 5995WX Pro', 'Nvidia Quadro A6000', '128 GB', 'Ultimate Workstation', '15,00,000', '16-11-2022', '1379d1415819ac35be6d99ad8e737215.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`) VALUES
(4, 'Gads', 'Dgsa', 'dsag@gds.com', 'dgsa@gd.cpom', 'dgsa', 'f576e8dc357f4441a297ddfc445345c1'),
(5, 'Deraj', 'R.M', 'derajrm@gmail.com', '9803528903', 'Vellore', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Reahan', 'S K', 'reahansk@gmail.com', '8532098854', 'Katpadi', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Mohamed', 'Faiz', 'hiphoprappers6@gmail.com', '0569664216', 'Abu Dhabi,UAE', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(8, 'Emceepranav', 'Spidey', 'pachaelai@gmail.com', '1234567890', 'white house, america', '2090e35bfbf71e376830f3b09629ad29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ubuilds`
--
ALTER TABLE `ubuilds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ubuilds`
--
ALTER TABLE `ubuilds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
