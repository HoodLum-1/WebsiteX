-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 09:29 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `edition` int(11) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `isbn` int(11) NOT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `edition`, `publisher`, `isbn`, `price`) VALUES
(1, 'study', 'Male', 3, 'pearson', 87593867, 562),
(2, 'write', 'people', 2, 'Pearson', 26487398, 632);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cellNum` varchar(10) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `province` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `zipCode` varchar(4) DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lName`, `email`, `cellNum`, `city`, `province`, `address`, `zipCode`, `university`, `course`, `password`) VALUES
(1, 'Malesela', '', 'random@hi.com', '', NULL, NULL, NULL, NULL, NULL, NULL, '12345'),
(2, '', '', 'load@hotmail.com', '', '', '', '', '', '', '', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(3, '', '', 'joe@gmail.com', '', '', '', '', '', '', '', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(4, 'Johnny', '', 'johnnyM@lol.copied', '', '', '', '', '', '', '', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(5, 'Joke', '', 'joke@koke.com', '', '', '', '', '', '', '', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(6, 'Jokes', '', 'joke@koke.com', '', '', '', '', '', '', '', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(7, 'Hot', 'Man', 'hhh@ovi.com', '0456824678', 'Polokwane', 'Limpopo', 'ManHot', '0699', 'Joke School', 'Laugh', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(8, 'Killefd', 'Luke', 'luke@google.co.uk', '0724567854', 'Love', 'Heart', '15 love street', '4562', 'Feelings', 'Feel', '1cfdf0e8d0c87a228c1f40d9bee7888b'),
(9, 'd', 'd', 'dog@frog.co.za', '', '', '', '', '', '', '', '1cfdf0e8d0c87a228c1f40d9bee7888b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
