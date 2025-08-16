-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2025 at 01:13 PM
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
-- Database: `mobiyoung`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `role` enum('User','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `dob`, `password`, `created_at`, `role`) VALUES
(4, 'User', 'One', 'user@gmail.com', '2025-07-30', '$2y$10$NguIgwEMi7U0Bnk4PjwGIuD7VMXO.sZuH/elzEgok8ZYN.WsXDoUe', '2025-08-01 12:33:52', 'Admin'),
(5, 'User', 'Two', 'usertwo@gmail.com', '2025-07-29', '$2y$10$M0ife0dr9Q6N0Nq0C7sSxu3TBbs00YS6KZmOuMsNUZX1nX9SSUhL6', '2025-08-01 12:37:24', 'User'),
(6, 'User', 'Three', 'userthree@gmail.com', '2025-07-10', '$2y$10$ROmPLTazz7QW4moIq8CIeeEI8me4kN5f/WQvbVAIExM3RODoL9ufW', '2025-08-01 12:45:10', 'User'),
(7, 'Demo', 'One', 'demo@gmail.com', '2025-07-29', '$2y$10$8ikUviLduzfdcqdPe.xG6.0rXsmtIUcxD9rPc45NGVlCR5VAsDsGW', '2025-08-01 12:58:20', 'User'),
(11, 'top', 'two', 'top@gmail.com', '2025-07-30', '$2y$10$tDjzEqCAEVT/J1afgwQFZOeodULeKG.i03990BwsFhZZUcz2ujP.e', '2025-08-04 19:10:31', 'User'),
(12, 'admin', 'one', 'admin@gmail.com', '2025-07-30', '$2y$10$78dyWI5FI5RUKcduUzMPGO8eLLh.1z4jh1kOUc0xfmVanCex23/Ha', '2025-08-04 19:12:10', 'Admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
