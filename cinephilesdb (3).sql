-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 02:51 PM
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
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`movie_name`, `release_year`, `genres`, `synopsis`, `category`, `image`) VALUES
('127 HOURS', 2010, 'ADVENTURE', 'Aron Ralston, a mountain climber, is on a hiking adventure in Utah when he gets trapped in a canyon. Soon, he takes desperate measures to survive and struggles for 127 hours before he is rescued.', 'LIGHT', '127_hours.jpg'),
('Arrival', 2016, 'SCIENCE FICTION', 'Louise Banks, a linguistics expert, along with her team, must interpret the language of aliens who have come to Earth in a mysterious spaceship.', 'LIGHT', 'arrival.jpg'),
('ETERNAL SUNSHINE OF THE SPOTLESS MIND', 2004, 'SCIENCE FICTION,ROMANCE', 'Joel and Clementine begin a relationship after a train journey together. However, having had their memories clinically erased, they do not remember their tumultuous past.', 'LIGHT', 'eternal_sunshine_of_the_spotless_mind.jpg'),
('Fallen Angels', 1995, 'DRAMA,ROMANCE', 'An assassin, his boss, an entrepreneur and two women cross paths in Hong Kong as their professional and love lives collide and influence each other, mostly without their knowledge.', 'DARK', 'fallen_angels.jpg'),
('GOOD WILL HUNTING', 1997, 'DRAMA', 'Will Hunting, a genius in mathematics, solves all the difficult mathematical problems. When he faces an emotional crisis, he takes help from psychiatrist Dr Sean Maguireto, who helps him recover.', 'LIGHT', 'good_will_hunting.jpg'),
('Hush', 2016, 'HORROR', 'A deaf writer who retreated into the woods to live a solitary life must fight for her life in silence when a masked killer appears in her window.', 'DARK', 'hush.jpg'),
('In the Tall Grass', 2019, 'HORROR', 'A brother and sister enter a field of tall grass to rescue a boy, but they soon realize they cannot escape and something evil lurks in the grass.', 'DARK', 'in_the_tall_grass.jpg'),
('Instant Family', 2018, 'COMEDY', 'A married couple, Pete and Ellie Wagner, decide to adopt Lizzy, a teenager. However, their life turns challenging when they realise Lizzy has two more siblings.', 'DARK', 'instant_family.jpg'),
('INTERSTELLAR', 2014, 'SCIENCE FICTION', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'LIGHT', 'interstellar.jpg'),
('Into the Wild', 2007, 'DRAMA,ADVENTURE', 'Christopher McCandless, a young graduate, decides to renounce all his possessions and hitchhike across America. During his journey, he encounters several situations which change him as a person.\r\n', 'LIGHT', 'into_the_wild.jpg'),
('IT\'S A WONDERFUL LIFE', 1946, 'DRAMA,FANTASY', 'An angel is sent from Heaven to help a desperately frustrated businessman by showing him what life would have been like if he had never existed.', 'LIGHT', 'It\'s_a_Wonderful_Life.jpeg'),
('Joker', 2019, 'THRILLER', 'Arthur Fleck, a party clown, leads an impoverished life with his ailing mother. However, when society shuns him and brands him as a freak, he decides to embrace the life of crime and chaos.', 'DARK', 'joker.jpg'),
('Lady Bird', 2017, 'DRAMA,COMEDY', 'As senior year comes to an end, Lady Bird must strive to navigate through the ups and downs in her relationships while trying to get into a prestigious college and become popular.', 'LIGHT', 'lady_bird.jpg'),
('Little Women', 2019, 'DRAMA', 'While the March sisters enter the threshold of womanhood, they go through many ups and downs in life and endeavour to make important decisions that can affect their future.', 'LIGHT', 'little_women.jpg'),
('Parasite', 2019, 'THRILLER', 'The struggling Kim family sees an opportunity when the son starts working for the wealthy Park family. Soon, all of them find a way to work within the same household and start living a parasitic life.', 'DARK', 'parasite.jpg'),
('Pulp Fiction', 1994, 'Drama', 'In the realm of underworld, a series of incidents intertwines the lives of two Los Angeles mobsters, a gangster\'s wife, a boxer and two small-time criminals.', 'DARK', 'pulp_fiction.jpg'),
('Schindler\'s List', 1993, 'BASED ON A TRUE STORY', 'Oskar Schindler, a German industrialist and member of the Nazi party, tries to save his Jewish employees after witnessing the persecution of Jews in Poland.', 'DARK', 'schindler\'s_list.jpg'),
('Shutter Island', 2010, 'THRILLER', 'Teddy Daniels and Chuck Aule, two US marshals, are sent to an asylum on a remote island in order to investigate the disappearance of a patient, where Teddy uncovers a shocking truth about the place.', 'DARK', 'shutter_island.jpg'),
('Stand By Me', 1986, 'ADVENTURE,DRAMA', 'Gordie, Chris, Teddy, and Vern are four friends who decide to hike to find the corpse of Ray Brower, a local teenager, who was hit by a train while plucking blueberries in the wild.', 'LIGHT', 'stand_by_me.jpg'),
('THE BATMAN', 2022, 'ACTION,SUPERHERO', 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.\r\n', 'DARK', 'batman.jpg'),
('The Conjuring', 2013, 'HORROR', 'The Perron family moves into a farmhouse where they experience paranormal phenomena. They consult demonologists, Ed and Lorraine Warren, to help them get rid of the evil entity haunting them.', 'LIGHT', 'conjuring.jpg'),
('The Hangover', 2009, 'COMEDY', 'Doug and his three best men go to Las Vegas to celebrate his bachelor party. However, the three best men wake up the next day with a hangover and realise that Doug is missing.', 'DARK', 'hangover.jpg'),
('THE LORD OF THE RINGS TRILOGY', 2001, 'FANTASY,ADVENTURE', 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.\r\n', 'LIGHT', 'lordoftherings.jpg'),
('The Martian', 2015, 'SCIENCE FICTION', 'Mark Watney is stranded on the planet of Mars after his crew leaves him behind, presuming him to be dead due to a storm. With minimum supplies, Mark struggles to keep himself alive.', 'LIGHT', 'the_martian.jpg'),
('The Perks of Being a Wallflower', 2012, 'DRAMA,ROMANCE', 'Charlie, a 15-year-old introvert, enters high school and is nervous about his new life. When he befriends his seniors, he learns to cope with his friend\'s suicide and his tumultuous past.', 'LIGHT', 'perks_of_being_a_wallflower.jpg'),
('The Pursuit of Happyness\r\n', 2006, 'DRAMA,BASED ON ATRUE STORY', 'Tired of Chris\'s professional failures, his wife decides to separate, leaving him financially broke with an unpaid internship in a brokerage firm and his son\'s custody to deal with.\r\n', 'LIGHT', 'persuit_of_happyness.jpg'),
('THE SECRET LIFE OF WALTER MITTY', 2013, 'ADVENTURE', 'When both he and a colleague are about to lose their job, Walter takes action by embarking on an adventure more extraordinary than anything he ever imagined.', 'LIGHT', 'the-secret-life-of-walter-mitty-poster.jpg'),
('THE SHAWSHANK REDEMPTION', 1994, 'DRAMA', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'DARK', 'shawshank.jpg'),
('THE SHINING', 1980, 'HORROR', 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', 'DARK', 'shining.jpg'),
('Veronica', 2017, 'HORROR', 'During a solar eclipse, a teenage girl and her friends want to summon the spirit of the girl\'s father using an Ouija board. However, during the session she loses consciousness and soon it becomes clear that evil demons have arrived.', 'LIGHT', 'veronica.jpg');

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
-- Indexes for table `movie_info`
--
ALTER TABLE `movie_info`
  ADD PRIMARY KEY (`movie_name`);

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
