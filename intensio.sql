-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2021 at 11:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intensio`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `exp` varchar(30) NOT NULL,
  `interest` varchar(30) NOT NULL,
  `resume` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phno`, `exp`, `interest`, `resume`) VALUES
(6, 'techintensio@gmail.com', 'techintensio@gmail.com', '515614561', 'intern', 'webdes', 'LOGO2.png'),
(7, 'Surendra Chakali', 'a@gmail.com', '4545446854', 'intern', 'webdev', 'enroll.php'),
(8, 'Surendra Chakali', 'a@gmail.com', '4545446854', 'intern', 'webdevwithpython', 'api1.png'),
(9, 'Surendra Chakali', 'a@gmail.com', '4545446854', 'intern', 'webdev', '6193.png'),
(10, 'Aravind', 'aravindaddula@gmail.com', '7730061616', 'intern', 'webdes', 'Resume-3134.desktop'),
(11, 'Aravind', 'aravindaddula200@gmail.com', '7730061616', 'intern', 'webdevwithpython', 'Resume-3074.pdf'),
(12, 'Aravind', 'aravindaddula2020@gmail.com', '4545446854', 'earlyprof', 'java', 'Resume-5728.png'),
(13, 'Surendra Chakali', 'a@gmail.com', '4545446854', 'intern', 'webdes', 'Resume-4031.png'),
(14, 'Surendra Chakali', 'techintensio@gmail.com', '4545446854', 'intern', 'datascience', 'Resume-9721.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
