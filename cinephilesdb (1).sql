-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinephilesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_info`
--

CREATE TABLE `movie_info` (
  `movie_name` varchar(500) NOT NULL,
  `release_year` int(11) NOT NULL,
  `genres` varchar(500) NOT NULL,
  `synopsis` varchar(10000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`movie_name`, `release_year`, `genres`, `synopsis`, `category`, `image`) VALUES
('THE BATMAN', 2022, 'ACTION,SUPERHERO', 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.\r\n', 'DARK', ''),
('THE SHAWSHANK REDEMPTION', 1994, 'DRAMA', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'DARK', ''),
('THE LORD OF THE RINGS TRILOGY', 2001, 'FANTASY,ADVENTURE', 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.\r\n', 'LIGHT', ''),
('THE SHINING', 1980, 'HORROR', 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', 'DARK', ''),
('IT\'S A WONDERFUL LIFE', 1946, 'DRAMA,FANTASY', 'An angel is sent from Heaven to help a desperately frustrated businessman by showing him what life would have been like if he had never existed.', 'LIGHT', ''),
('THE SECRET LIFE OF WALTER MITTY', 2013, 'ADVENTURE', 'When both he and a colleague are about to lose their job, Walter takes action by embarking on an adventure more extraordinary than anything he ever imagined.', 'LIGHT', ''),
('ETERNAL SUNSHINE OF THE SPOTLESS MIND', 2004, 'SCIENCE FICTION,ROMANCE', 'Joel and Clementine begin a relationship after a train journey together. However, having had their memories clinically erased, they do not remember their tumultuous past.', 'LIGHT', ''),
('The Pursuit of Happyness\r\n', 2006, 'DRAMA,BASED ON ATRUE STORY', 'Tired of Chris\'s professional failures, his wife decides to separate, leaving him financially broke with an unpaid internship in a brokerage firm and his son\'s custody to deal with.\r\n', 'LIGHT', ''),
('Into the Wild', 2007, 'DRAMA,ADVENTURE', 'Christopher McCandless, a young graduate, decides to renounce all his possessions and hitchhike across America. During his journey, he encounters several situations which change him as a person.\r\n', 'LIGHT', ''),
('127 HOURS', 2010, 'ADVENTURE', 'Aron Ralston, a mountain climber, is on a hiking adventure in Utah when he gets trapped in a canyon. Soon, he takes desperate measures to survive and struggles for 127 hours before he is rescued.', 'LIGHT', ''),
('INTERSTELLAR', 2014, 'SCIENCE FICTION', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'LIGHT', ''),
('The Martian', 2015, 'SCIENCE FICTION', 'Mark Watney is stranded on the planet of Mars after his crew leaves him behind, presuming him to be dead due to a storm. With minimum supplies, Mark struggles to keep himself alive.', 'LIGHT', ''),
('GOOD WILL HUNTING', 1997, 'DRAMA', 'Will Hunting, a genius in mathematics, solves all the difficult mathematical problems. When he faces an emotional crisis, he takes help from psychiatrist Dr Sean Maguireto, who helps him recover.', 'LIGHT', '');

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `question_number` int(130) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `password` int(130) NOT NULL,
  `Want_to_watch` varchar(500) NOT NULL,
  `recent_watch_list` varchar(500) NOT NULL,
  `recomended_movie` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
