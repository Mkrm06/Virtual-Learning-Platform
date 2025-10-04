-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2025 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masteryhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`, `profile_image`, `created_at`) VALUES
(1, '', '', '$2y$10$zS7iNxhx91nTvfkWpyq8v.NwgjYwrRQPbRcb2Bb725dWzk0CaNRIa', '', '', '2025-09-30 00:42:13'),
(2, 'Mohamed ', 'mohamedmukarram3@gmail.com', '$2y$10$08KqLBuj0hp7s0KqlJV1xe4jYhcPH3yK6QnV45UTOUY3BVFcwkRiy', 'Student', 'uploads/IMG_0058[1].JPEG', '2025-09-30 00:43:02'),
(4, '', 'admin@gmail.com', '$2y$10$YcS8BqYg8JfG7Yb7hQ6cfOvC3eD7Yx9jzWZ7JqQFq3e9Zz9Ft2xVe', 'admin', NULL, '2025-10-04 07:03:36'),
(5, 'Mohamed ', 'mohamed@example.com', '', 'Student', 'uploads/R.jpg', '2025-10-04 07:26:05'),
(6, 'nashan', 'nashan@gmail.com', '', 'Student', 'uploads/R.jpg', '2025-10-04 16:10:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
