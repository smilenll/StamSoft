-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 01:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stamfb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'gol', '2018-08-28 04:16:50', '2018-08-28 04:16:50'),
(2, 'red card', '2018-08-28 04:16:57', '2018-08-28 04:17:13'),
(3, 'yellow cart', '2018-08-28 04:17:08', '2018-08-28 04:17:08'),
(4, 'offside', '2018-08-28 04:17:21', '2018-08-28 04:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime DEFAULT NULL,
  `host_id` int(10) UNSIGNED DEFAULT NULL,
  `hostScore` int(11) NOT NULL,
  `guestScore` int(11) NOT NULL,
  `guest_id` int(10) UNSIGNED DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `date`, `host_id`, `hostScore`, `guestScore`, `guest_id`, `location`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 0, 0, 2, 'Barcelona', '2018-08-28 04:19:59', '2018-08-28 04:19:59'),
(2, NULL, 4, 0, 0, 3, 'Nish', '2018-08-28 04:20:52', '2018-08-28 04:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `game_stat`
--

CREATE TABLE `game_stat` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_id` int(10) UNSIGNED NOT NULL,
  `stat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `season_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `season_id`, `created_at`, `updated_at`) VALUES
(1, 'Champion League', 1, '2018-08-28 04:13:12', '2018-08-28 04:13:12'),
(2, 'League Europ', 1, '2018-08-28 04:13:20', '2018-08-28 04:13:20'),
(3, 'A-grupa 2', 1, '2018-08-28 05:54:19', '2018-08-28 05:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_14_131253_create_events_table', 1),
(4, '2018_08_14_131616_create_games_table', 1),
(5, '2018_08_14_131645_create_leagues_table', 1),
(6, '2018_08_14_131728_create_players_table', 1),
(7, '2018_08_14_132017_create_seasons_table', 1),
(8, '2018_08_14_132035_create_teams_table', 1),
(9, '2018_08_16_142633_create_stats_table', 1),
(10, '2018_08_16_143341_create_player_stat_table', 1),
(11, '2018_08_16_144239_create_game_stat_table', 1),
(12, '2018_08_20_100328_add_season_id_to_leagues', 1),
(13, '2018_08_20_104827_add_league_id_to_teams', 1),
(14, '2018_08_20_110121_add_host_id_to_games', 1),
(15, '2018_08_20_110135_add_guest_id_to_games', 1),
(16, '2018_08_20_111749_add_event_id_to_stats', 1),
(17, '2018_08_21_123638_create_player_team_table', 1),
(18, '2018_08_27_092204_add_columns_to_stats', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `picture`, `nationality`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Muler', 'm', 'Germany', 'atack', '2018-08-28 04:15:27', '2018-08-28 04:15:27'),
(2, 'Messi', 'n', 'Argenina', 'Atack', '2018-08-28 04:15:53', '2018-08-28 04:15:53'),
(3, 'Vurata', 'vvv', 'vvv', 'atack', '2018-08-28 04:16:19', '2018-08-28 04:16:19'),
(4, 'Moci', 'b', 'n', 'Defence', '2018-08-28 04:16:29', '2018-08-28 04:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `player_stat`
--

CREATE TABLE `player_stat` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(10) UNSIGNED NOT NULL,
  `stat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_team`
--

CREATE TABLE `player_team` (
  `id` int(10) UNSIGNED NOT NULL,
  `player_id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `season` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `season`, `created_at`, `updated_at`) VALUES
(1, '2018', '2018-08-28 04:12:44', '2018-08-28 04:12:44'),
(2, '2017', '2018-08-28 04:12:51', '2018-08-28 04:12:51'),
(4, 'qsa', '2018-08-28 05:18:21', '2018-08-28 05:18:21'),
(8, '321', '2018-08-28 05:40:55', '2018-08-28 05:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED DEFAULT NULL,
  `player_id` int(10) UNSIGNED DEFAULT NULL,
  `team_id` int(10) UNSIGNED DEFAULT NULL,
  `game_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `league_id` int(10) UNSIGNED DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `league_id`, `logo`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Barcelona', 1, 'da', 'da', '2018-08-28 04:13:38', '2018-08-28 04:13:38'),
(2, 'Bayer Munchen', 1, 'aaa', 'aaa', '2018-08-28 04:13:55', '2018-08-28 04:13:55'),
(3, 'Ludogorec', 2, 'www', 'www', '2018-08-28 04:14:08', '2018-08-28 04:14:08'),
(4, 'Cyrvena Zvezda', 2, 'CZ', 'ASD', '2018-08-28 04:14:35', '2018-08-28 04:14:35'),
(5, 'dsad', 1, 'dsadas', 'dsadsada', '2018-08-28 06:02:19', '2018-08-28 06:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_host_id_foreign` (`host_id`),
  ADD KEY `games_guest_id_foreign` (`guest_id`);

--
-- Indexes for table `game_stat`
--
ALTER TABLE `game_stat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_stat_game_id_foreign` (`game_id`),
  ADD KEY `game_stat_stat_id_foreign` (`stat_id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leagues_season_id_foreign` (`season_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_stat`
--
ALTER TABLE `player_stat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_stat_player_id_foreign` (`player_id`),
  ADD KEY `player_stat_stat_id_foreign` (`stat_id`);

--
-- Indexes for table `player_team`
--
ALTER TABLE `player_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_team_player_id_foreign` (`player_id`),
  ADD KEY `player_team_team_id_foreign` (`team_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stats_event_id_foreign` (`event_id`),
  ADD KEY `stats_player_id_foreign` (`player_id`),
  ADD KEY `stats_team_id_foreign` (`team_id`),
  ADD KEY `stats_game_id_foreign` (`game_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_league_id_foreign` (`league_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game_stat`
--
ALTER TABLE `game_stat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `player_stat`
--
ALTER TABLE `player_stat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_team`
--
ALTER TABLE `player_team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_guest_id_foreign` FOREIGN KEY (`guest_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `games_host_id_foreign` FOREIGN KEY (`host_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `game_stat`
--
ALTER TABLE `game_stat`
  ADD CONSTRAINT `game_stat_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_stat_stat_id_foreign` FOREIGN KEY (`stat_id`) REFERENCES `stats` (`id`);

--
-- Constraints for table `leagues`
--
ALTER TABLE `leagues`
  ADD CONSTRAINT `leagues_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`);

--
-- Constraints for table `player_stat`
--
ALTER TABLE `player_stat`
  ADD CONSTRAINT `player_stat_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`),
  ADD CONSTRAINT `player_stat_stat_id_foreign` FOREIGN KEY (`stat_id`) REFERENCES `stats` (`id`);

--
-- Constraints for table `player_team`
--
ALTER TABLE `player_team`
  ADD CONSTRAINT `player_team_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`),
  ADD CONSTRAINT `player_team_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `stats_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `stats_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `stats_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
