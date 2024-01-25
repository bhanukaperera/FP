-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 04:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`id`, `queries`, `replies`) VALUES
(1, 'What is your name? | What is your name | who are you | who are you?', 'I am ITS WiKi, Your support assist'),
(2, 'Hi | Hey ', 'Hi there !!'),
(3, 'Heyo | Hello', 'Greetings!! How may I help you?'),
(4, 'Bye | Finish | Done', 'Bye, See you soon !'),
(5, 'See you | ciao', 'See you, Have a nice day !!'),
(9, 'How to install anydesk ? | How to install anydesk | please tell me how to install anydesk | how to install anydesk?', 'http://localhost/FP/pdf/AnyDesk.pdf'),
(10, 'how are you ? | how are you?', 'Im fine, Hope you\'re doing great as well '),
(11, 'What can you do?\r\n\r\n', 'At ITSWiKi, my mission is to provide valuable information and support to our community.'),
(12, 'Give me the steps', 'For Windows / Mac:\r\n\r\n1. Visit the AnyDesk website.\r\n\r\n2. Download\" button to download the application.\r\n\r\n3. Open the program to start the installation process.'),
(13, 'good morning ', 'Very good morning '),
(14, 'Thank you | thanks | thank', 'My pleasure to help');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bot`
--
ALTER TABLE `bot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
