-- phpMyAdmin SQL Dump
-- Real Estates Database
-- Fixed: company varchar increased, username/password changed to varchar

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------
-- Database: `db`
-- --------------------------------------------------------

-- Table: `real estates`
-- Fix: company was varchar(11) which is too short for real company names

CREATE TABLE `real estates` (
  `company`  varchar(100) NOT NULL,
  `broker`   varchar(100) NOT NULL,
  `address`  varchar(255) NOT NULL,
  `price`    varchar(50)  NOT NULL,
  `finnid`   int(9)       NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `real estates` (`company`, `broker`, `address`, `price`, `finnid`) VALUES
('Fabijon Real Estate', 'Isen', 'Selmers gate 24', '70000', 123124124);

-- --------------------------------------------------------

-- Table: `users`
-- Fix: username and password were int(11), changed to varchar for text credentials

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
