-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 06.Jún 2025, 14:11
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `f1blog`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `datum_vytvorenia` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `datum_vytvorenia`) VALUES
(2, 11, 14, '12311111111111111', '2025-05-27 13:00:13');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `datum_vytvorenia` datetime NOT NULL DEFAULT curtime(),
  `pouzivatelia_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `messages`
--

INSERT INTO `messages` (`id`, `username`, `email`, `message`, `datum_vytvorenia`, `pouzivatelia_id`) VALUES
(16, 'janodrevo', 'jano@gmail.com', 'egrgrdg', '2025-05-24 11:43:23', NULL),
(17, 'janodrevo', 'jano@gmail.com', 'egrgrdg', '2025-05-24 11:47:48', NULL),
(18, 'DanielKuchar', 'kuchardaniel25@gmail.com', 'halooo', '2025-05-25 11:14:34', NULL),
(19, 'JohnDoe', 'John@gmail.com', 'prosim', '2025-05-26 11:53:21', NULL),
(20, 'timika', 'timika@gmail.com', 'stiaznost!!!!!', '2025-05-26 20:59:20', NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `datum_vytvorenia` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `excerpt`, `content`, `datum_vytvorenia`) VALUES
(11, 'Charles leclerc ', '03.jpg', 'The Italian driver’s competitive running was brought to an early end in Qualifying as he hit the wall while trying to shave time off his lap, which meant he was unable to continue and settled for P15 on the grid.', 'With his team mate George Russell suffering an unfortunate technical issue and lining up just ahead in P14, Mercedes were forced to adopt an alternative strategy to fulfil the recently introduced two pit stops rule in Monaco.\r\n\r\nThey elected to go long into the race before bringing either car into the pits in the hope that there would be a late Safety Car or red flag that could grant them a free stop. As this failed to materialise, Antonelli was left as one of the last drivers to change his tyres as he dropped to last place on the track.\r\n\r\n“It was quite relaxing, to be honest,” the 18-year-old said optimistically. “It was a very chill race – only on Lap 1 there was action. We were trying to go long straight away.\r\n\r\n“I was doing what the team asked me to and we were trying to get at least one of the cars into the points. Unfortunately it didn’t work out but there was nothing more I could have done there. I was just trying to help the team as much as possible.\r\n', '2025-05-27 12:30:04'),
(13, 'fernando', '06.jpg', 'I’m driving at a high level’ – Alonso defends start to 2025 after Monaco power unit issue denies him maiden season points\r\n', 'Fernando Alonso’s ongoing mission to score points in 2025 was fruitless once again at the Monaco Grand Prix as he was forced to retire with a power unit issue, taking his tally of DNFs to three for the season.\r\n\r\nFor the first time since 2001, the former World Champion has failed to score in the first eight races – Kick Sauber’s Gabriel Bortoleto, Alpine’s Franco Colapinto and the replaced Jack Doohan the only other drivers on zero points.\r\n\r\nEXCLUSIVE: Newey on improving Aston Martin’s ‘weak’ tools, being a ‘maverick’ and focusing on 2026\r\n\r\nA crash in the Australian season opener, a brake issue in China, and a car that has generally lacked performance have all contributed to Alonso’s frustrating start to the year, while his team mate Lance Stroll has accumulated 14 points.\r\n\r\nIt seemed as though there had been a positive change of fortune for the Spaniard in Monaco as he put together a lap good enough for P7 in Qualifying, which became P6 after Lewis Hamilton was handed a three-place grid penalty.', '2025-05-27 13:02:19'),
(14, 'POWER RANKINGS: ', '08.jpg', 'Lando Norris delivered a supreme performance over the Monaco Grand Prix with a pole position and victory double. But who else impressed on the tight, twisty streets of the Principality? Check out the latest Power Rankings scores and overall leaderboard below...', 'Lando Norris delivered a supreme performance over the Monaco Grand Prix with a pole position and victory double. But who else impressed on the tight, twisty streets of the Principality? Check out the latest Power Rankings scores and overall leaderboard below...\r\n\r\nMonaco\'s unique nature means that your track position at lights out can determine where you finish more than most circuits – a fact which Lando Norris was fully aware of and leaned into when he qualified on pole position, smashing the track record. Despite his shaky lock-up at the first corner, he held his nerve for the entirety of the demanding race and resisted immense pressure from home hero Charles Leclerc, executing his drive to perfection and waiting until the very end to make a statement with some more fastest laps on his way to victory.\r\n\r\n\r\nIsack Hadjar has quickly settled into an impressive rhythm at Racing Bulls, and the daunting prospect of racing an F1 car around the streets of Monaco seemed not to faze him as he secured his best result of the season in P6. After Qualifying in a strong fifth position, he played the team game immaculately to keep both himself and Liam Lawson in the top 10 in what he called a \"perfect weekend\".', '2025-05-28 12:52:19'),
(17, '111', '09.jpg', 'kratke', 'dlhe', '2025-05-28 17:11:30');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pouzivatelia`
--

CREATE TABLE `pouzivatelia` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datum_vytvorenia` datetime NOT NULL DEFAULT curtime(),
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `pouzivatelia`
--

INSERT INTO `pouzivatelia` (`id`, `username`, `pwd`, `email`, `datum_vytvorenia`, `is_admin`) VALUES
(12, 'dano', '$2y$10$v7ILtOM0Noj/x2f4KjvzyOXMcvMAgfNULKjaXJ7YH3oDrxO1zGiOy', 'dani@gmail.com', '2025-05-25 11:34:54', 0),
(14, 'danielko1206', '$2y$10$MXBjgYu0DOjrdYIDw0ADt.VJesm7j4QOaQ499Txysc/IBaNH9uK7a', 'geham18454@avashost.com', '2025-05-25 12:06:43', 1),
(15, 'JohnDoe', '$2y$10$lfaFE8q4X8fD3t39fotgceqoe/ootvYjoDUHJpLpRtuTHyVwMd0PW', 'John@gmail.com', '2025-05-26 11:53:51', 0),
(16, 'timika', '$2y$10$kQWNNr13IExkopCUvYnuhOrUHlV4DbcI3oVpGMIAN4Gs8dSVfnf7W', 'timika@gmail.com', '2025-05-26 21:00:03', 0);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pouzivatelia_id` (`pouzivatelia_id`);

--
-- Indexy pre tabuľku `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pre tabuľku `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`pouzivatelia_id`) REFERENCES `pouzivatelia` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
