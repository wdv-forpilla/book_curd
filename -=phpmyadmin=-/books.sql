-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 10:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_of_publication` date NOT NULL,
  `description` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `date_of_publication`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Harry-Potter-III', 'JKRowling', '2020-08-12', 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizards.', '2021-09-14 08:50:03', '2021-09-16 03:02:48'),
(2, 'Lighting Thief', 'Percy Jackson', '2020-08-12', 'The Lightning Thief is a light-hearted fantasy about a modern 12-year-old boy who learns that his true father is Poseidon.', '2021-09-14 08:50:38', '2021-09-14 08:50:38'),
(4, 'Twilight-IV', 'Stephenie Meyer', '2015-06-07', 'The Twilight Saga is a series of five vampire-themed romance fantasy films from Summit Entertainment based on the four novels published by author Stephenie Meyer.', '2021-09-15 03:11:11', '2021-09-16 03:01:09'),
(5, 'The-Hobbit-IV', 'J. R. R. Tolkien', '2012-12-12', 'The Hobbit is a film series consisting of three high fantasy adventure films directed by Peter Jackson. The three films are The Hobbit: An Unexpected Journey, The Hobbit: The Desolation of Smaug,', '2021-09-15 04:37:25', '2021-09-16 02:58:59'),
(7, 'Lord-of-the-Rings-IV', 'J. R. R. Tolkien', '1954-07-29', 'The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth.', '2021-09-16 03:04:50', '2021-09-16 03:05:04'),
(8, 'Bob-ong', 'Alamat-ni-Talangka', '2009-08-01', 'Alamat ng Gubat is the fourth book published in 2003 by Bob Ong, a Filipino contemporary author noted for using conversational Filipino to create humorous and reflective depictions of life as a Filipino.', '2021-09-16 03:15:05', '2021-09-16 03:15:05'),
(11, 'MySQL-Books', 'John Duckett', '2020-08-15', 'Learn PHP, the programming language used to build sites like Facebook, Wikipedia and WordPress, then discover how these sites store information in a database (MySQL) and use the database to create the web pages.', '2021-09-16 03:21:44', '2021-09-16 08:48:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
