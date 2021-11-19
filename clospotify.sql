-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 08:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clospotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `artworkPath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `artworkPath`) VALUES
(1, 'Inkuba', 3, 3, 'assets/images/artwork/clearday.jpg'),
(2, 'Amahoro', 2, 2, 'assets/images/artwork/popdance.jpg'),
(3, 'Amashimwe', 2, 2, 'assets/images/artwork/clearday.jpg'),
(4, 'Icyambu', 1, 1, 'assets/images/artwork/energy.jpg'),
(5, 'Ngwino', 2, 2, 'assets/images/artwork/sweet.jpg'),
(6, 'Yankuye Kure', 1, 1, 'assets/images/artwork/funkyelement.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Bull Dog'),
(2, 'Marina'),
(3, 'JayZ'),
(4, 'Yeez'),
(5, 'BacT'),
(6, 'Oliver Ngoma');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'R&B'),
(2, 'HIPHOP'),
(3, 'GAKONDO'),
(4, 'AFROBEAT'),
(5, 'Rap'),
(6, 'POP'),
(7, 'Blues'),
(8, 'Slow'),
(9, 'Jazz'),
(10, 'Zouk'),
(11, 'Kizomba');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(500) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`) VALUES
(1, 'Accoustic Breeze', 1, 1, 8, '2:37', 'assets/music/bensound-accousticbreeze.mp3', 1, 0),
(2, 'New Beginning', 2, 2, 6, '2:35', 'assets/music/bensound-anewbeginning.mp3', 3, 0),
(3, 'Better Days', 2, 3, 4, '2:33', 'assets/music/bensound-betterdays.mp3', 3, 0),
(4, 'Buddy', 3, 1, 5, '2:02', 'assets/music/bensound-buddy.mp3', 3, 0),
(5, 'Clear Days', 1, 5, 4, '1:29', 'assets/music/bensound-clearday.mp3', 3, 0),
(6, 'Going Higher', 2, 1, 1, '4:04', 'assets/music/bensound-goinghigher.mp3', 1, 0),
(7, 'Funny Song', 2, 4, 2, '3:07', 'assets/music/bensound-funnysong.mp3', 2, 0),
(8, 'Funky Element', 2, 1, 3, '3:08', 'assets/music/bensound-funkyelement.mp3', 2, 0),
(9, 'Extreme Action', 2, 1, 4, '8:03', 'assets/music/bensound-extremeaction.mp3', 3, 0),
(10, 'Epic', 2, 4, 5, '2:58', 'assets/music/bensound-epic.mp3', 3, 0),
(11, 'Energy', 2, 1, 6, '2:59', 'assets/music/bensound-energy.mp3', 4, 0),
(12, 'Dubstep', 2, 1, 7, '2:03', 'assets/music/bensound-dubstep.mp3', 5, 0),
(13, 'Happiness', 3, 6, 8, '4:21', 'assets/music/bensound-happiness.mp3', 5, 0),
(14, 'Happy Rock', 3, 6, 9, '1:45', 'assets/music/bensound-happyrock.mp3', 4, 0),
(15, 'Jazzy Frenchy', 3, 6, 10, '1:44', 'assets/music/bensound-jazzyfrenchy.mp3', 3, 0),
(16, 'Little Idea', 3, 6, 1, '2:49', 'assets/music/bensound-littleidea.mp3', 2, 0),
(17, 'Memories', 3, 6, 2, '3:50', 'assets/music/bensound-memories.mp3', 1, 0),
(18, 'Moose', 4, 7, 1, '2:43', 'assets/music/bensound-moose.mp3', 5, 0),
(19, 'November', 4, 7, 2, '3:32', 'assets/music/bensound-november.mp3', 4, 0),
(20, 'Of Elias Dream', 4, 7, 3, '4:58', 'assets/music/bensound-ofeliasdream.mp3', 3, 0),
(21, 'Pop Dance', 4, 7, 2, '2:42', 'assets/music/bensound-popdance.mp3', 2, 0),
(22, 'Retro Soul', 4, 7, 5, '3:36', 'assets/music/bensound-retrosoul.mp3', 1, 0),
(23, 'Sad Day', 5, 2, 1, '2:28', 'assets/music/bensound-sadday.mp3', 1, 0),
(24, 'Sci-fi', 5, 2, 2, '4:44', 'assets/music/bensound-scifi.mp3', 2, 0),
(25, 'Slow Motion', 5, 2, 3, '3:26', 'assets/music/bensound-slowmotion.mp3', 3, 0),
(26, 'Sunny', 5, 2, 4, '2:20', 'assets/music/bensound-sunny.mp3', 4, 0),
(27, 'Sweet', 5, 2, 5, '5:07', 'assets/music/bensound-sweet.mp3', 5, 0),
(28, 'Tenderness ', 3, 3, 7, '2:03', 'assets/music/bensound-tenderness.mp3', 4, 0),
(29, 'The Lounge', 3, 3, 8, '4:16', 'assets/music/bensound-thelounge.mp3 ', 3, 0),
(30, 'Ukulele', 3, 3, 9, '2:26', 'assets/music/bensound-ukulele.mp3 ', 2, 0),
(31, 'Tomorrow', 3, 3, 1, '4:54', 'assets/music/bensound-tomorrow.mp3 ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'raymond.reddington', 'Raymond', 'Reddington', 'Raymond.reddington@blacklist.tv', '111ep', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(2, 'ray.reddington', 'Ray', 'Reddington', 'Ray.reddington@blacklist.tv', '111reddington', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(3, 'Ebenezer.Barinda', 'Ebenezer', 'Barinda', 'Ep@gmail.com', '111en', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(4, 'Ebenezer.Barinda1', 'Ebenezer', 'Barinda', 'Eptech@gmail.com', '6db4efaea017cf8aad33a54fd589d9cb', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(5, 'Ebenezer.Barinda', 'Ebenezer', 'Barinda', 'Ep@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(6, 'Ebenezer.Barinda', 'Ebenezer', 'Barinda', 'Ep@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(7, 'Ebenezer.Barinda', 'Ebenezer', 'Barinda', 'Ep@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(8, 'Ebenezer.Barinda', 'Ebenezer', 'Barinda', 'Ep@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(9, 'brandon1', 'Brandon', 'Shook', 'Bs@gmail.com', '7c6a180b36896a0a8c02787eeafb0e4c', '2021-11-10 00:00:00', 'assets/images/profile-pics/profile.png'),
(10, 'bossPapa', 'Boss', 'Papa', 'Ep1@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-11 00:00:00', 'assets/images/profile-pics/profile.png'),
(11, 'hello', 'Eeyyyyyyyy', 'Yyyyyyyyyyyyyyyyyyyyyy', 'Fsfff@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-11 00:00:00', 'assets/images/profile-pics/profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
