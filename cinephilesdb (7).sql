-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 04:52 PM
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
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `uname` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `dt` varchar(100) NOT NULL,
  `moviename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`uname`, `msg`, `dt`, `moviename`) VALUES
('Foyez', '	whatis up		', '22-12-25 01:57pm', '127 HOURS'),
('Foyez', '	adscaasd		', '22-12-25 02:00pm', '127 HOURS'),
('Foyez', 'ascacasc', '22-12-25 02:00pm', '127 HOURS'),
('Foyez', '	hello in the tall grass		', '22-12-25 02:18pm', 'In the Tall Grass'),
('Foyez', 'jojo			', '22-12-25 03:24pm', 'GOOD WILL HUNTING'),
('Xami', 'hiwuwi			', '22-12-25 03:25pm', 'GOOD WILL HUNTING'),
('Foyez', 'wKJb', '22-12-25 03:25pm', 'GOOD WILL HUNTING'),
('Xami', 'SJDHVD', '22-12-25 03:25pm', 'GOOD WILL HUNTING'),
('Xami', 'HELLO			', '22-12-25 03:26pm', 'In the Tall Grass'),
('Xami', 'SWWS', '22-12-25 03:27pm', 'In the Tall Grass'),
('Foyez', '		uiu	', '22-12-26 05:35pm', 'GOOD WILL HUNTING'),
('Jami', '		sfdsds	', '23-01-02 01:33am', 'Fallen Angels');

-- --------------------------------------------------------

--
-- Table structure for table `memeinfo`
--

CREATE TABLE `memeinfo` (
  `PostImg` varchar(100) NOT NULL,
  `PostLike` int(11) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp(),
  `PostId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memeinfo`
--

INSERT INTO `memeinfo` (`PostImg`, `PostLike`, `Time`, `PostId`, `email`) VALUES
('meme1.jpg', 0, '2023-01-05 11:16:43', 14, 'foyez'),
('meme1.jpg', 0, '2023-01-05 11:19:43', 15, 'foyez');

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
  `image` text NOT NULL,
  `video` varchar(100) NOT NULL,
  `movie_clip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`movie_name`, `release_year`, `genres`, `synopsis`, `category`, `image`, `video`, `movie_clip`) VALUES
('127 HOURS', 2010, 'ADVENTURE', 'Aron Ralston, a mountain climber, is on a hiking adventure in Utah when he gets trapped in a canyon. Soon, he takes desperate measures to survive and struggles for 127 hours before he is rescued.', 'LIGHT', '127_hours.jpg', '127_hours.mp4', '127.mp4\r\n'),
('Arrival', 2016, 'SCIENCE FICTION', 'Louise Banks, a linguistics expert, along with her team, must interpret the language of aliens who have come to Earth in a mysterious spaceship.', 'LIGHT', 'arrival.jpg', 'arrival.mp4', 'Arrival.mp4'),
('Avatar', 2009, 'Action', 'Jake, who is paraplegic, replaces his twin on the Na\'vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie', 'LIGHT', 'avatar.jpg', 'Avatar.mp4', 'Avatar.mp4'),
('ETERNAL SUNSHINE OF THE SPOTLESS MIND', 2004, 'SCIENCE FICTION', 'Joel and Clementine begin a relationship after a train journey together. However, having had their memories clinically erased, they do not remember their tumultuous past.', 'LIGHT', 'eternal_sunshine_of_the_spotless_mind.jpg', 'enternal.mp4', 'Pulp.mp4\r\n'),
('Fallen Angels', 1995, 'DRAMA', 'An assassin, his boss, an entrepreneur and two women cross paths in Hong Kong as their professional and love lives collide and influence each other, mostly without their knowledge.', 'DARK', 'fallen_angels.jpg', 'parasite.mp4', 'Angels.mp4\r\n'),
('GOOD WILL HUNTING', 1997, 'DRAMA', 'Will Hunting, a genius in mathematics, solves all the difficult mathematical problems. When he faces an emotional crisis, he takes help from psychiatrist Dr Sean Maguireto, who helps him recover.', 'LIGHT', 'good_will_hunting.jpg', 'arrival.mp4', 'Good.mp4'),
('Hush', 2016, 'HORROR', 'A deaf writer who retreated into the woods to live a solitary life must fight for her life in silence when a masked killer appears in her window.', 'DARK', 'hush.jpg', 'arrival.mp4', 'Hush.mp4\r\n'),
('In the Tall Grass', 2019, 'HORROR', 'A brother and sister enter a field of tall grass to rescue a boy, but they soon realize they cannot escape and something evil lurks in the grass.', 'DARK', 'in_the_tall_grass.jpg', 'inThetrailGrass.mp4', 'Grass.mp4'),
('Instant Family', 2018, 'COMEDY', 'A married couple, Pete and Ellie Wagner, decide to adopt Lizzy, a teenager. However, their life turns challenging when they realise Lizzy has two more siblings.', 'DARK', 'instant_family.jpg', 'parasite.mp4', 'Instant.mp4'),
('INTERSTELLAR', 2014, 'SCIENCE FICTION', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 'LIGHT', 'interstellar.jpg', 'INTERSTELLAR.mp4', 'Interstellar.mp4'),
('Into the Wild', 2007, 'DRAMA', 'Christopher McCandless, a young graduate, decides to renounce all his possessions and hitchhike across America. During his journey, he encounters several situations which change him as a person.\r\n', 'LIGHT', 'into_the_wild.jpg', 'parasite.mp4', 'Into.mp4\r\n'),
('IT IS A WONDERFUL LIFE', 1946, 'DRAMA', 'An angel is sent from Heaven to help a desperately frustrated businessman by showing him what life would have been like if he had never existed.', 'LIGHT', 'It\'s_a_Wonderful_Life.jpeg', 'arrival.mp4', 'Life.mp4'),
('Joker', 2019, 'THRILLER', 'Arthur Fleck, a party clown, leads an impoverished life with his ailing mother. However, when society shuns him and brands him as a freak, he decides to embrace the life of crime and chaos.', 'DARK', 'joker.jpg', 'arrival.mp4', 'JOKER.mp4'),
('Lady Bird', 2017, 'DRAMA,COMEDY', 'As senior year comes to an end, Lady Bird must strive to navigate through the ups and downs in her relationships while trying to get into a prestigious college and become popular.', 'LIGHT', 'lady_bird.jpg', '127_hours.mp4', 'Lady.mp4'),
('Little Women', 2019, 'DRAMA', 'While the March sisters enter the threshold of womanhood, they go through many ups and downs in life and endeavour to make important decisions that can affect their future.', 'LIGHT', 'little_women.jpg', '', 'Women.mp4'),
('Parasite', 2019, 'THRILLER', 'The struggling Kim family sees an opportunity when the son starts working for the wealthy Park family. Soon, all of them find a way to work within the same household and start living a parasitic life.', 'DARK', 'parasite.jpg', 'parasite.mp4', 'Parasite.mp4'),
('Pulp Fiction', 1994, 'DRAMA', 'In the realm of underworld, a series of incidents intertwines the lives of two Los Angeles mobsters, a gangster\'s wife, a boxer and two small-time criminals.', 'DARK', 'pulp_fiction.jpg', 'arrival.mp4', 'Fiction.mp4'),
('Schindlers List', 1993, 'BASED ON A TRUE STORY', 'Oskar Schindler, a German industrialist and member of the Nazi party, tries to save his Jewish employees after witnessing the persecution of Jews in Poland.', 'DARK', 'schindler\'s_list.jpg', 'arrival.mp4', 'Schindler.mp4'),
('Shutter Island', 2010, 'THRILLER', 'Teddy Daniels and Chuck Aule, two US marshals, are sent to an asylum on a remote island in order to investigate the disappearance of a patient, where Teddy uncovers a shocking truth about the place.', 'DARK', 'shutter_island.jpg', 'INTERSTELLAR.mp4', 'Shutter.mp4'),
('Stand By Me', 1986, 'ADVENTURE', 'Gordie, Chris, Teddy, and Vern are four friends who decide to hike to find the corpse of Ray Brower, a local teenager, who was hit by a train while plucking blueberries in the wild.', 'LIGHT', 'stand_by_me.jpg', 'parasite.mp4', 'Stand.mp4'),
('THE BATMAN', 2022, 'ACTION', 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.\r\n', 'DARK', 'batman.jpg', 'arrival.mp4', 'Batman.mp4'),
('The Conjuring', 2013, 'HORROR', 'The Perron family moves into a farmhouse where they experience paranormal phenomena. They consult demonologists, Ed and Lorraine Warren, to help them get rid of the evil entity haunting them.', 'LIGHT', 'conjuring.jpg', 'INTERSTELLAR.mp4', 'Conjuring.mp4'),
('The Hangover', 2009, 'COMEDY', 'Doug and his three best men go to Las Vegas to celebrate his bachelor party. However, the three best men wake up the next day with a hangover and realise that Doug is missing.', 'DARK', 'hangover.jpg', 'parasite.mp4', 'Hangover.mp4'),
('THE LORD OF THE RINGS TRILOGY', 2001, 'FANTASY', 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.\r\n', 'LIGHT', 'lordoftherings.jpg', 'arrival.mp4', 'LOTR.mp4'),
('The Martian', 2015, 'SCIENCE FICTION', 'Mark Watney is stranded on the planet of Mars after his crew leaves him behind, presuming him to be dead due to a storm. With minimum supplies, Mark struggles to keep himself alive.', 'LIGHT', 'the_martian.jpg', 'parasite.mp4', 'Martian.mp4'),
('The Perks of Being a Wallflower', 2012, 'DRAMA', 'Charlie, a 15-year-old introvert, enters high school and is nervous about his new life. When he befriends his seniors, he learns to cope with his friend\'s suicide and his tumultuous past.', 'LIGHT', 'perks_of_being_a_wallflower.jpg', 'INTERSTELLAR.mp4', 'Pick.mp4'),
('The Pursuit of Happyness\r\n', 2006, 'DRAMA', 'Tired of Chris\'s professional failures, his wife decides to separate, leaving him financially broke with an unpaid internship in a brokerage firm and his son\'s custody to deal with.\r\n', 'LIGHT', 'persuit_of_happyness.jpg', '', ''),
('THE SECRET LIFE OF WALTER MITTY', 2013, 'ADVENTURE', 'When both he and a colleague are about to lose their job, Walter takes action by embarking on an adventure more extraordinary than anything he ever imagined.', 'LIGHT', 'the-secret-life-of-walter-mitty-poster.jpg', '', ''),
('THE SHAWSHANK REDEMPTION', 1994, 'DRAMA', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.', 'DARK', 'shawshank.jpg', '', ''),
('THE SHINING', 1980, 'HORROR', 'A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', 'DARK', 'shining.jpg', '', ''),
('Veronica', 2017, 'HORROR', 'During a solar eclipse, a teenage girl and her friends want to summon the spirit of the girl\'s father using an Ouija board. However, during the session she loses consciousness and soon it becomes clear that evil demons have arrived.', 'LIGHT', 'veronica.jpg', '', '');

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
  `favorites` varchar(500) NOT NULL,
  `recent` varchar(500) DEFAULT NULL,
  `watchlist` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `friendlist` mediumtext NOT NULL,
  `sentreq` mediumtext NOT NULL,
  `friendreq` mediumtext NOT NULL,
  `bio` varchar(100) NOT NULL,
  `watchlistp` mediumtext NOT NULL,
  `favoritesp` mediumtext NOT NULL,
  `recentlyp` mediumtext NOT NULL,
  `friendmeme` varchar(1000) NOT NULL,
  `memep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `favorites`, `recent`, `watchlist`, `image`, `friendlist`, `sentreq`, `friendreq`, `bio`, `watchlistp`, `favoritesp`, `recentlyp`, `friendmeme`, `memep`) VALUES
('admin', 'admin', 0, '', ',IT IS A WONDERFUL LIFE,Shutter Island', '', 'profile.jpg', '', ',', ',', 'I am nobody', 'p', 'p', 'p', '', ''),
('c', 'c', 0, '', ',,IT IS A WONDERFUL LIFE,Shutter Island', '', 'profile.jpg', '', '', ',', '', '', '', '', '', ''),
('Emam Hasan', 'd', 0, '', NULL, '', 'profile.jpg', '', '', '', '', '', '', '', '', ''),
('e', 'e', 0, '', ',,,,Fallen Angels,GOOD WILL HUNTING,THE SECRET LIFE OF WALTER MITTY', '', 'profile.jpg', ',xami,', ',', '', '', '', '', '', '', ''),
('Foyez', 'foyez', 0, ',,,,,,,,,,,,,,,,,,,,,,,,,,,,,In the Tall Grass,,,,,,,,,,,,,,,,,,,,,,,,', ',Avatar,Stand By Me,,,THE BATMAN,,Arrival,,The Martian,127 HOURS,,,,,,,,,,,,,,,,,,,,,,,,,,,,Fallen Angels,INTERSTELLAR,,,,,,,,,,,,,ETERNAL SUNSHINE OF THE SPOTLESS MIND,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,', ',Lady Bird,,Fallen Angels,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,', 'foyez.jpg', ',xami,', ',jony,', ',', 'hi i am batscaama', 'p', 'f', 'f', 'meme2.jpg,meme1.jpg,', 'p'),
('jony', 'jony', 0, '', NULL, '', 'profile.jpg', '', '', 'foyez,', '', '', '', '', '', ''),
('Sunny', 'sunny', 123, '', NULL, '', 'profile.jpg', '', '', ',', '', '', '', '', '', ''),
('Jami', 'xami', 0, ',,Arrival,Fallen Angels,GOOD WILL HUNTING,In the Tall Grass,Into the Wild,Joker,,', ',THE BATMAN,,,,,', 'THE BATMAN,Stand By Me,The Perks of Being a Wallflower,INTERSTELLAR', 'download (1).jpg', ',foyez,', ',', ',', 'I am batman', 'o', '', '', 'memimg.jpg,', '');

-- --------------------------------------------------------

--
-- Table structure for table `votetracking`
--

CREATE TABLE `votetracking` (
  `postid` int(11) NOT NULL,
  `postOwnerEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `watchparty`
--

CREATE TABLE `watchparty` (
  `id` int(11) NOT NULL,
  `ownerEmail` varchar(100) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `min` int(11) NOT NULL,
  `sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watchparty`
--

INSERT INTO `watchparty` (`id`, `ownerEmail`, `moviename`, `min`, `sec`) VALUES
(25, 'xami', '127 HOURS', 5, 58);

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `winnerId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`date`, `winnerId`, `email`) VALUES
('2023-01-02 07:36:45', 1, 'xami'),
('2023-01-02 07:38:01', 2, 'foyez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memeinfo`
--
ALTER TABLE `memeinfo`
  ADD PRIMARY KEY (`PostId`);

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

--
-- Indexes for table `watchparty`
--
ALTER TABLE `watchparty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`winnerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memeinfo`
--
ALTER TABLE `memeinfo`
  MODIFY `PostId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `watchparty`
--
ALTER TABLE `watchparty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `winnerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
