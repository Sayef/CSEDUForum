-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2015 at 02:58 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `FORUM`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `signup_date` date DEFAULT NULL,
  `Profession` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `password`, `name`, `email`, `date_of_birth`, `signup_date`, `Profession`, `profile_pic`) VALUES
('Akash', '$2y$10$460N6aI2u6UB5CvNNZ5D/.yMysYf/bFv34n/75yPCJTm6eP1bhPRy', 'Akash Foysal', 'akash@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'akash.jpg'),
('Asif', '$2y$10$m3SD33Pb0KUG9k6mXHv.y.7eWvbbmXBKfQqO674cxmc8pc/Tc11oa', 'Asif Mahmud', 'asif@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'asif.jpg'),
('Bappy', '$2y$10$TamHoXa0Nq5zeCJLekcFBu1.VLwT.yRjVNE4.eaYbXyRB4YXSsnNa', 'Saif Bappa', 'bappasaif@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'bappa.jpg'),
('Dibbo', '$2y$10$uKDgKepBQUHH1FgE0FvhLuDN4TJXBhZZlExIBYIvYbEyKqH1edUBq', 'Shayontan Vaduri', 'vaduri@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'VADURI.JPG'),
('Fahad', '$2y$10$81QCkdrWnVN0/xQeneZQ9.2JXOkqV3.EcSTNYtV4EvwQfFTso.VEW', 'Md. Shafiqul Islam', 'shafiq@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'fahad.jpg'),
('Nitish', '$2y$10$niiCaKs1qmA4T/S7Gq7ql.ldYb//H0.k4Yi9pJbBaqSJQZFE1Bvli', 'Nitish Ranjan Bhowmik', 'nitishcsedu@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'nitish.jpg'),
('Partho', '$2y$10$h7mKgEhqACyc/RT5a/UNiu4RN8LsKgJIPJdZNGE4vLyN30eQhv9g2', 'Partho Roy', 'partho@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'partho.jpeg'),
('Rayhan', '$2y$10$pnuwXrKNlq/cQ5a4fuNhD.Y5DbwgXa2q6wWruo.ctpRAocUcHkrxW', 'Md. Shaiful Alam', 'shaiful@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'rayhan.jpg'),
('Sayef', '$2y$10$IcEhHKqOYyPjjEe0EmJmiePMLUVwZXIci0BAHtQaPArXbfzY75mWe', 'Mohammad Sayef', 'bappasaif@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'Sayef.jpg'),
('Sujoy', '$2y$10$758lF8R0a/rpsiOwSd2RduD6EIJefPR7VzN1gps3D1vlpeaAPfoMq', 'Sujoy Debnath', 'sujoy@gmail.com', '1992-02-18', '2015-04-19', 'Student', 'sujoy.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
