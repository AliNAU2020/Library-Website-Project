-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 07:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `ISBN_10` varchar(255) NOT NULL,
  `ISBN_13` varchar(255) NOT NULL,
  `NumberOfPages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `image`, `Title`, `Author`, `Publisher`, `ISBN_10`, `ISBN_13`, `NumberOfPages`) VALUES
(1, 'hunger_games.jpg', 'Hunger Games', 'Suzanne Collins', 'Scholastic Press; Reprint edition (2010)', '0439023483', '978-0439023481', '384'),
(2, 'hunger_games_3.jpg', 'Hunger Games: Mockingjay', 'Suzanne Collins', 'Scholastic Press; Reprint edition (February 25, 2014)', '9780545663267', '978-0545663267', '400'),
(3, '39_clues_2.jpg', '39 clues: One False Note', 'Gordon Korman', 'Scholastic Inc.; Gmc Rei/Cr edition (December 2, 2008)', '0545060427', '978-0545060424', '176'),
(4, '39_clues_4.jpg', '39 clues: Beyond the Grave', 'Jude Watson', 'Scholastic Inc.; The 39 Clues , Book 4 edition (June 2, 2009)', '9780545060448', '978-0545060448', '192'),
(5, '39_clues_6.jpg', '39 clues: In Too Deep', 'Jude Watson', 'Scholastic Inc.; 1 edition (November 3, 2009)', '9780545060462', '978-0545060462', '208'),
(6, 'hunger_games_2.jpg', 'Hunger Games: Catching Fire', 'Suzanne Collins', 'Scholastic Press; Reprint edition (June 4, 2013)', '0545586178', '978-0545586177', '400'),
(7, '39_clues_1.jpg', '39 clues: the maze of bones', 'Gordon Korman', 'Scholastic Press; 1st edition (September 9, 2008)', '0545060397', '978-0545060394', '220'),
(8, '39_clues_3.jpg', '39 clues: The Sword Thief', 'Peter Lerangis', 'Scholastic; Library Binding edition', '9780545060431', '978-0545060431', '160'),
(9, '39_clues_5.jpg', '39 clues: The Black Circle', 'Patrick Carman', 'Scholastic Press; First Edition edition (August 11, 2009)', '9780545060455', '978-0545060455', '176'),
(10, '39_clues_7.jpg', '39 clues: The Viper\'s Nest', 'Peter Lerangis', 'Scholastic Inc.; Gmc Har/Cr edition (February 2, 2010)', '9780545060479', '978-0545060479', '192'),
(11, '39_clues_8.jpg', '39 clues: The Emperor\'s Code', 'Gordon Korman', 'Scholastic Inc.; Reprint edition', '0545060486', '978-0545060486', '192'),
(12, '39_clues_10.jpg', '39 clues: Into the Gauntlet', 'Margaret Peterson Haddix', 'Scholastic Inc.; First Edition first Printing edition (August 31, 2010)', '0545060508', '978-0545060509', '327'),
(13, 'the_giver.jpg', 'The Giver', 'Lois Lowry', 'HMH Books for Young Readers; Reprint, Media Tie In edition (July 1, 1993)', '9780544336261', '978-0544336261', '240'),
(14, 'oliver_twist.jpg', 'Oliver Twist', 'CharlesDickens', 'CreateSpace Independent Publishing Platform (June 22, 2015)', '1514640376', '978-1514640371', '234'),
(15, 'ender_games.jpg', 'Ender\'s Game', 'Orson Scott Card', 'Tor Science Fiction (July 15, 1994)', '0812550706', '978-0812550702', '352'),
(16, '39_clues_9.jpg', '39 clues: Storm Warning', 'Linda Sue Park', 'Scholastic Inc.; Gmc Rei/Cr edition (May 25, 2010)', '0545060494', '978-0545060493', '192'),
(17, '39_clues_11.jpg', '39 clues: Vespers Rising', 'Rick Riordan', 'Scholastic Press; Gmc Har/Cr edition (April 5, 2011)', '9780545290593', '978-0545290593', '240'),
(18, 'under_the_sea.jpg', '20,000 leagues under the sea', 'Jules Verne', 'Sterling Children\'s Books; Abridged edition (March 28, 2006)', '1402725337', '978-1402725333', '160'),
(19, 'tresure_island.jpg', 'Tresure Island', 'Robert Louis Stevenson', 'Wisehouse Classics; 1 edition (May 12, 2016)', '1514650460', '978-1514650462', '122'),
(20, 'enders_shadow.jpg', 'Ender\'s Shadow', 'Orson Scott Card', 'Starscape Books; 1st edition (May 19, 2002)', '0765342405', '978-0765342409', '469');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(6, 'master2', 'master2@yahoo.com', 'admin', '900150983cd24fb0d6963f7d28e17f72'),
(8, 'selmir', 'selmir@yahoo.com', 'user', '900150983cd24fb0d6963f7d28e17f72'),
(9, 'master3', 'master3@yahoo.com', 'admin', '23734cd52ad4a4fb877d8a1e26e5df5f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
