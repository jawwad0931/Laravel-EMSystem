-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 12:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larave-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Course_image` varchar(255) NOT NULL,
  `Course_name` varchar(255) NOT NULL,
  `Course_status` enum('Available','Unavailable','Upcoming') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `Course_image`, `Course_name`, `Course_status`, `created_at`, `updated_at`) VALUES
(16, '1728220005.jpg', 'Biol', 'Upcoming', '2024-10-06 20:06:45', '2024-10-06 20:06:45'),
(19, '1728386285.jpg', 'Bio', 'Upcoming', '2024-10-08 18:18:05', '2024-10-08 18:18:05'),
(20, '1728386740.jpg', 'Bio', 'Upcoming', '2024-10-08 18:25:40', '2024-10-08 18:25:40'),
(21, '1728599487.jpg', 'aa', 'Unavailable', '2024-10-11 05:31:27', '2024-10-11 05:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `courses_categories`
--

CREATE TABLE `courses_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CourseIcon` varchar(255) DEFAULT NULL,
  `CourseName` varchar(255) NOT NULL,
  `CourseDescription` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_categories`
--

INSERT INTO `courses_categories` (`id`, `CourseIcon`, `CourseName`, `CourseDescription`, `created_at`, `updated_at`) VALUES
(23, 'C:\\xampp\\tmp\\phpAC04.tmp', 'cc', 'cc', '2024-10-11 03:16:58', '2024-10-11 03:16:58'),
(24, 'C:\\xampp\\tmp\\php3041.tmp', 'ff', 'ff', '2024-10-11 03:33:55', '2024-10-11 03:33:55'),
(25, 'C:\\xampp\\tmp\\phpE2F7.tmp', 'dd', 'dd', '2024-10-11 03:45:36', '2024-10-11 03:45:36'),
(26, 'C:\\xampp\\tmp\\phpF30.tmp', 'Geography', 'available', '2024-10-11 03:51:15', '2024-10-11 03:51:15'),
(28, 'C:\\xampp\\tmp\\phpDBC3.tmp', 'Geography', 'ss', '2024-10-11 04:25:59', '2024-10-11 04:25:59'),
(29, 'C:\\xampp\\tmp\\php742B.tmp', 'aa', 'aa', '2024-10-11 04:26:38', '2024-10-11 04:26:38'),
(30, '1728600641.png', 'English Language', 'available', '2024-10-11 05:50:41', '2024-10-11 05:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FAQ_Question` varchar(255) NOT NULL,
  `FAQ_Answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `FAQ_Question`, `FAQ_Answer`, `created_at`, `updated_at`) VALUES
(1, 'what is education', 'education icreased memory', NULL, NULL),
(2, 'what is this', 'this is a book', '2024-10-10 17:07:13', '2024-10-10 17:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_image` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `Dob` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `agree` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `std_image`, `first_name`, `last_name`, `father_name`, `email`, `class`, `school_name`, `phone`, `city`, `address`, `age`, `Dob`, `gender`, `agree`, `created_at`, `updated_at`) VALUES
(1, 'images/mp91Qom4Lo8xi61lWniRtu4pzDJheebXPSATNH0p.png', 'Muhammad jawwad', 'Khan', 'ali', 'aa@gmail.com', 12, 'star', '1234567890', 'Karachi', 'sdas', 24, '2024-09-10', 'female', 1, '2024-09-25 05:20:54', '2024-09-25 05:20:54'),
(3, 'images/Yhc3b0MomF9rsHsvyd08JHLxiUwdZlnVZAWigrYP.png', 'Muhammad jawwad', 'Khan', 'ali', 'vv@gmail.com', 12, 'star', '1234567890', '12', '12asdas', 45, '2024-09-02', 'male', 1, '2024-09-25 05:41:43', '2024-09-25 05:41:43'),
(4, 'images/x4ecfThQ3dNAuiEUI5XiimW5DQ2xE3Y1Fl48sICp.png', 'Muhammad jawwad', 'Khan', 'Muhammad', 'jawwadkhan@gmail.com', 5, 'ABC School', '03400028803', '12', 'Karachi PIDC', 23, '2002-02-13', 'male', 1, '2024-10-01 11:58:16', '2024-10-01 11:58:16'),
(5, 'storage/upload/tx9eU1Sd3mrOlyBZ6nCsn9yEtj7jT1ovwdmNp39L.png', 'Muhammad jawwad', 'Khan', 'Muhammad', 'jawwadkhan091@gmail.com', 14, 'star', '923400028803', 'karachi', 'new camp', 45, '2024-10-21', 'male', 1, '2024-10-06 20:41:00', '2024-10-06 20:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_14_224351_create_faqs_table', 2),
(6, '2024_09_20_205822_create_faqs_table', 3),
(7, '2024_09_22_121638_create_courses_categories_table', 4),
(8, '2024_09_22_205512_create_team_members_table', 5),
(9, '2024_09_22_213920_create_courses_table', 6),
(10, '2024_09_23_213355_create_contacts_table', 7),
(11, '2024_09_24_211427_create_forms_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$12$0R3hCVObpWAhp7qrhB3NWO6J7r0hceRZ9VnpasIPtEuj5KgyqqWNi', '2024-10-07 06:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `MemberImage` varchar(255) NOT NULL,
  `MemberName` varchar(255) NOT NULL,
  `MemberExperties` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `MemberImage`, `MemberName`, `MemberExperties`, `created_at`, `updated_at`) VALUES
(1, 'avatar2.jpg', 'Shumaila', 'Mathmetics', NULL, NULL),
(2, 'storage/upload/nKeO3ADTiRQSqbYGLePtWTpecKBVl50aBqxL6qMd.png', 'Muhammad Ali', 'Teacher', '2024-10-07 02:27:19', '2024-10-07 02:27:19'),
(3, 'storage/upload/LXKriWzIRHcm65A7mdTNHK2W9eEeNcgdBYGE5rEJ.png', 'Junaid', 'Labourer', '2024-10-07 02:27:35', '2024-10-07 02:27:35'),
(4, 'storage/upload/TdTRUF72B8V4bOYu8Z7Bt7Bvb7j9BSKQUXJLJmGh.jpg', 'Muhammad Ali', 'Teacher', '2024-10-07 02:30:18', '2024-10-07 02:30:18'),
(5, 'storage/upload/0zQAQmmcKgaJZ5XklVMRPQBcMv1Z3ufitVPLuZfX.png', 'Junaid', 'Teacher', '2024-10-07 02:32:17', '2024-10-07 02:32:17'),
(6, 'upload/gUPc7f6wYiQR0B8lSvNBO2bEaBnKJI9bc4pGMkHG.png', 'Muhammad Ali', 'Teacher', '2024-10-07 02:36:09', '2024-10-07 02:36:09'),
(7, '1728254826.png', 'Muhammad Ali', 'Teacher', '2024-10-07 05:47:06', '2024-10-07 05:47:06'),
(8, '1728254848.png', 'Muhammad Ali', 'Teacher', '2024-10-07 05:47:28', '2024-10-07 05:47:28'),
(9, '1728591689.jpg', 'Junaid', 'ww', '2024-10-11 03:21:29', '2024-10-11 03:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'user', 'user@gmail.com', NULL, '$2y$12$/rMTy0Q3LfS5tDgwd9.uduVRTiHNWCpfcoCJXgHgqkw1VJSVcvdiO', 'user', 'S8KHBWjGFKUVlpYvxvx5BvjC4WByBKsujqD4b3tgAAtDLIEllhWdMLYygmah', '2024-09-14 17:43:46', '2024-09-14 17:43:46'),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$12$n/.IhBzVAhLd2pJ1KzTdUOATipSDTtTE/V57HflZULKP5cPBaCUCK', 'admin', 'CgOJu552Lqn2fAxJQ5brpnWw3XcmjtSaRJFiPpNjs4ZS2kZPTfzHj94PlFgM', '2024-09-14 19:28:08', '2024-09-14 19:28:08'),
(18, 'John Doe', 'johndoe1@example.com', '2024-10-01 17:00:00', 'password_hash_1', 'user', 'token_1', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(19, 'Jane Smith', 'janesmith1@example.com', '2024-10-01 17:00:00', 'password_hash_2', 'admin', 'token_2', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(20, 'Robert Brown', 'robertbrown1@example.com', '2024-10-01 17:00:00', 'password_hash_3', 'user', 'token_3', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(21, 'Emily White', 'emilywhite1@example.com', '2024-10-01 17:00:00', 'password_hash_4', 'user', 'token_4', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(22, 'Michael Green', 'michaelgreen1@example.com', '2024-10-01 17:00:00', 'password_hash_5', '', 'token_5', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(23, 'Jessica Black', 'jessicablack1@example.com', '2024-10-01 17:00:00', 'password_hash_6', 'user', 'token_6', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(24, 'David Gray', 'davidgray1@example.com', '2024-10-01 17:00:00', 'password_hash_7', 'user', 'token_7', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(25, 'Laura Blue', 'laurablue1@example.com', '2024-10-01 17:00:00', 'password_hash_8', '', 'token_8', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(26, 'George Red', 'georgered1@example.com', '2024-10-01 17:00:00', 'password_hash_9', 'user', 'token_9', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(27, 'Megan Yellow', 'meganyellow1@example.com', '2024-10-01 17:00:00', 'password_hash_10', 'admin', 'token_10', '2024-10-01 17:00:00', '2024-10-01 17:00:00'),
(28, 'Daniel Pink', 'danielpink1@example.com', '2024-10-01 17:00:00', 'password_hash_11', 'user', 'token_11', '2024-10-01 17:00:00', '2024-10-01 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_categories`
--
ALTER TABLE `courses_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forms_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `courses_categories`
--
ALTER TABLE `courses_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
