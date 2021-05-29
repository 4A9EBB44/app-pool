-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2021 at 02:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-pool`
--

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `icon` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`icon`, `path`, `id`, `password`) VALUES
('GoodNotes', 'img/editor/goodnotes.png', 'gdn@apple.com', 'gdn'),
('Fortnite', 'img/editor/fortnite.png', 'ftn@apple.com', 'ftn'),
('Procreate', 'img/editor/procreate.png', 'pct@apple.com', 'pct');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `icon` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`icon`, `path`, `id`, `password`) VALUES
('Grid', 'img/game/grid.png', 'grd@apple.com', 'grd'),
('Dirt', 'img/game/dirt.png', 'drt@apple.com', 'drt'),
('PUBG', 'img/game/pubg.png', 'pbg@apple.com', 'pbg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `icon` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`icon`, `path`, `id`, `password`) VALUES
('GoodNotes', 'img/home/goodnotes.png', 'gdn@apple.com', 'gdn'),
('Fortnite', 'img/home/fortnite.png', 'ftn@apple.com', 'ftn'),
('Procreate', 'img/home/procreate.png', 'pct@apple.com', 'pct'),
('Grid Autosport', 'img/home/grid.png', 'grd@apple.com', 'grd'),
('Dirt', 'img/home/dirt.png', 'drt@apple.com', 'drt'),
('PUBG', 'img/home/pubg.png', 'pbg@apple.com', 'pbg'),
('Geekbench', 'img/home/geekbench.png', 'gbc@apple.com', 'gbc'),
('LumaFusion', 'img/home/lumafusion.png', 'lmf@apple.com', 'lmf'),
('Final Cut Pro', 'img/home/finalcutpro.png', 'fcp@apple.com', 'fcp');

-- --------------------------------------------------------

--
-- Table structure for table `productivity`
--

CREATE TABLE `productivity` (
  `icon` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productivity`
--

INSERT INTO `productivity` (`icon`, `path`, `id`, `password`) VALUES
('Geekbench', 'img/productivity/geekbench.png', 'gbc@apple.com', 'gbc'),
('LumaFusion', 'img/productivity/lumafusion.png', 'lmf@apple.com', 'lmf'),
('Final Cut Pro', 'img/productivity/finalcutpro.png', 'fcp@apple.com', 'fcp');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `app` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`app`, `date`) VALUES
('Forza', '2021-05-28 08:29:05.388395'),
('GTA V', '2021-05-28 08:38:09.127895'),
('Need For Speed', '2021-05-28 13:40:57.250919'),
('Minecraft', '2021-05-28 13:51:31.904299'),
('Room', '2021-05-28 13:57:48.262838'),
('Odyssey', '2021-05-28 13:59:12.193981'),
('Dead Cell', '2021-05-28 14:04:14.286592'),
('Oceanhorn2', '2021-05-28 14:07:00.549729'),
('Notability', '2021-05-28 14:15:10.560411'),
('Calendar 5', '2021-05-28 15:03:59.869089'),
('Calendar', '2021-05-29 05:24:00.383133'),
('NBA 2k', '2021-05-29 05:24:04.827289'),
('Sky', '2021-05-29 06:41:07.565032');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
