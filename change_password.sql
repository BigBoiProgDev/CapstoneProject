-- phpMyAdmin SQL Dump for User Account Settings
-- Generated on: Oct 06, 2024
-- Database: `database1`
-- Tables: `accounts`, `password_history`

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

-- Table structure for `accounts`
CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(99) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(255) NOT NULL, -- Current password
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for `password_history`
-- Tracks old passwords for each account and when they were changed
CREATE TABLE IF NOT EXISTS `password_history` (
  `history_id` int(99) NOT NULL AUTO_INCREMENT,
  `account_id` int(99) NOT NULL,
  `old_password` varchar(255) NOT NULL,
  `changed_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`history_id`),
  FOREIGN KEY (`account_id`) REFERENCES `accounts`(`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Sample data for `accounts` table (existing data for reference)
INSERT INTO `accounts` (`ID`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'jesa', 'victorillo', 'jess@gmail.com', 'jess', '5f4dcc3b5aa765d61d8327deb882cf99'), -- 'password'
(2, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'), -- empty record
(3, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'), -- empty record
(4, 'revo', 'Rabasto', 'revozx.17@gmail.com', 'revozx', '7cb4c9fd7e76d4a31fe6cf700ca78192'); -- 'password123'

-- --------------------------------------------------------

-- Sample data for `password_history` table (tracking old passwords)
INSERT INTO `password_history` (`account_id`, `old_password`, `changed_at`) VALUES
(1, 'e99a18c428cb38d5f260853678922e03', '2024-07-15 10:45:00'), -- 'abc123'
(4, 'd41d8cd98f00b204e9800998ecf8427e', '2024-07-25 09:00:00'); -- old password for account 4

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
