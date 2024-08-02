-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 02:29 PM
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
-- Database: `iamadesigner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `permissions` varchar(255) DEFAULT NULL,
  `type` tinyint(4) DEFAULT 1 COMMENT '0= super_admin, 1 = staff user',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `phone_no`, `permissions`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$7f.2AW3QqbkuXvp8KOps3uXZG0qByD2zmLdtL1qAqSHzN/dqaroYy', NULL, NULL, 0, 1, '2022-04-15 12:25:42', '2024-05-13 12:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'graphic', 'graphic', '1718350426.jpg', '2024-06-14 02:30:47', '2024-06-14 02:33:46'),
(2, 'interior', 'interior', '1718350466.jpg', '2024-06-14 02:34:08', '2024-06-14 02:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `about` mediumtext DEFAULT NULL,
  `introVideo` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `dribbble` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `view_count` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `open` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Open to work, 1=Not open to work',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `premium` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Free, 1=Pro',
  `remember_token` varchar(100) DEFAULT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `definition` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id`, `name`, `email`, `username`, `phone`, `image`, `cover_image`, `resume`, `about`, `introVideo`, `bio`, `city`, `country`, `pinterest`, `dribbble`, `instagram`, `facebook`, `view_count`, `email_verified_at`, `password`, `open`, `status`, `premium`, `remember_token`, `verification_token`, `created_at`, `updated_at`, `definition`) VALUES
(10, 'John Doe', 'john@gmail.com', 'johndoe', '+121389172398', 'johndoe1717595129.jpg', 'cover1717595129.jpg', 'johndoe1717595129.png', 'Hi, I am John a designer. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'johndoe1717595129.mkv', 'De Finibus Bonorum et Malorum', 'New York', 'United States', 'https://pinterest.com/john', 'https://dribbble.com/john', 'https://instagram.com/john', 'https://facebook.com/john', '74', '2024-06-05 08:42:40', '$2y$10$k8NSi5eQYyFhLfnE8JjJouXsxyDQz8THyveALxA02YvS7Mn1nZXhu', 0, 1, 0, NULL, NULL, '2024-06-05 08:42:22', '2024-06-15 13:40:05', 'graphic');

-- --------------------------------------------------------

--
-- Table structure for table `designer_categories`
--

CREATE TABLE `designer_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_categories`
--

INSERT INTO `designer_categories` (`id`, `designer_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 10, 1, '2024-06-14 05:09:43', '2024-06-14 05:09:43'),
(13, 10, 2, '2024-06-14 05:09:44', '2024-06-14 05:09:44');

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
(5, '2024_04_30_054314_create_designers_table', 1),
(6, '2024_04_30_062720_add_verification_token_field_to_designers_table', 1),
(7, '2024_04_30_122303_add_verification_token_field_to_users_table', 2),
(8, '2024_05_01_101258_add_fields_to_designers_table', 3),
(9, '2024_05_01_122527_create_projects_table', 4),
(10, '2024_05_13_091005_add_subtitle_field_to_projects_table', 5),
(11, '2024_05_13_103558_add_fields_to_designers_table', 6),
(12, '2024_06_05_055703_create_project_saves_table', 7),
(13, '2024_06_05_080321_create_categories_table', 8),
(14, '2024_06_13_183815_create_designer_categories_table', 9),
(15, '2024_06_14_094420_add_field_to_designers_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `images` mediumtext DEFAULT NULL,
  `videos` mediumtext DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0,
  `saves` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `is_featured` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=featured, 0=not featured',
  `is_published` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=published, 0=unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `designer_id`, `title`, `subtitle`, `slug`, `banner`, `description`, `images`, `videos`, `views`, `likes`, `saves`, `status`, `is_featured`, `is_published`, `created_at`, `updated_at`) VALUES
(24, 10, 'Celestial symphony of silver and sapphire', 'This necklace captures the ethereal beauty of the night sky, whispering stories of dreams and stardust.', 'celestial-symphony-of-silver-and-sapphire-1717595277', 'banner-celestial-symphony-of-silver-and-sapphire-1717595277.jpg', '<p>This necklace is a captivating ode to the celestial realm. Handcrafted from sterling silver, it features a delicate chain adorned with a shimmering sapphire pendant. The sapphire, cut into a mesmerizing starburst shape, evokes the twinkling of distant stars. Its deep blue hue reflects the night sky\'s endless expanse, while the intricate silver setting adds a touch of elegance. This piece is a reminder of the magic that lies beyond our world, a celestial whisper for those who dream big.</p><p>&nbsp;</p><figure class=\"image image_resized\" style=\"width:59.58%;\"><img style=\"aspect-ratio:1711/2228;\" src=\"/uploads/projects/alvaro-o-donnell-RP4_f4zu_8A-unsplash_1717595270.jpg\" width=\"1711\" height=\"2228\"></figure><p>&nbsp;</p><p>This necklace is a captivating ode to the celestial realm. Handcrafted from sterling silver, it features a delicate chain adorned with a shimmering sapphire pendant. The sapphire, cut into a mesmerizing starburst shape, evokes the twinkling of distant stars. Its deep blue hue reflects the night sky\'s endless expanse, while the intricate silver setting adds a touch of elegance. This piece is a reminder of the magic that lies beyond our world, a celestial whisper for those who dream big.</p>', NULL, NULL, 0, 0, 0, 1, 1, 1, '2024-06-05 08:47:57', '2024-06-05 08:53:33'),
(25, 10, 'A fiery garnet set in a bold', 'Unleash your inner fire with this fierce statement ring. A fiery garnet set in a bold, geometric design, it commands attention with every glance', 'a-fiery-garnet-set-in-a-bold-1717595362', 'banner-a-fiery-garnet-set-in-a-bold-1717595362.jpg', '<p>This ring is a bold statement piece that embodies fierce individuality. A radiant garnet, known for its passion and energy, is showcased in a dramatic, geometric setting crafted from 18k gold. The angular lines and sharp edges create a visually striking contrast against the smooth, fiery gemstone. This ring is designed for those who dare to be different, who embrace their own power and radiate confidence. It\'s a symbol of passion, resilience, and the unwavering spirit that lies within.</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:640/360;\" src=\"/uploads/projects/1_1717595358.gif\" width=\"640\" height=\"360\"></figure>', NULL, NULL, 0, 0, 0, 1, 0, 1, '2024-06-05 08:49:22', '2024-06-05 08:49:22'),
(26, 10, 'Vibrant bracelet dances on the wrist', 'A symphony of color and light. This vibrant bracelet dances on the wrist, a playful expression of individuality and joy', 'vibrant-bracelet-dances-on-the-wrist-1717595522', 'banner-vibrant-bracelet-dances-on-the-wrist-1717595522.jpg', '<p>This bracelet is a burst of color and energy, a whimsical celebration of life\'s beauty. Crafted from a delicate silver chain, it features a cascade of hand-painted enamel beads in a kaleidoscope of vibrant hues. Each bead is a miniature work of art, showcasing unique patterns and textures. This bracelet is designed to be a cheerful reminder to embrace the unexpected, to find joy in the simple things, and to let your personality shine through.</p><p>&nbsp;</p><figure class=\"media\"><div data-oembed-url=\"https://youtu.be/Fxyp6nGztw0\"><div style=\"position: relative; padding-bottom: 100%; height: 0; padding-bottom: 56.2493%;\"><iframe src=\"https://www.youtube.com/embed/Fxyp6nGztw0\" style=\"position: absolute; width: 100%; height: 100%; top: 0; left: 0;\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen=\"\"></iframe></div></div></figure>', NULL, NULL, 0, 0, 0, 1, 1, 1, '2024-06-05 08:52:02', '2024-06-05 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `project_saves`
--

CREATE TABLE `project_saves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `meta_tag`, `meta_key`, `meta_value`) VALUES
(1, 'project', 'site_title', 'I Am A Designer'),
(2, 'project', 'short_site_title', 'IAAD'),
(3, 'project', 'site_logo', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designers_email_unique` (`email`),
  ADD UNIQUE KEY `designers_username_unique` (`username`);

--
-- Indexes for table `designer_categories`
--
ALTER TABLE `designer_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designer_categories_designer_id_foreign` (`designer_id`),
  ADD KEY `designer_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_designer_id_foreign` (`designer_id`);

--
-- Indexes for table `project_saves`
--
ALTER TABLE `project_saves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_saves_user_id_foreign` (`user_id`),
  ADD KEY `project_saves_project_id_foreign` (`project_id`),
  ADD KEY `project_saves_designer_id_foreign` (`designer_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `designer_categories`
--
ALTER TABLE `designer_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `project_saves`
--
ALTER TABLE `project_saves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designer_categories`
--
ALTER TABLE `designer_categories`
  ADD CONSTRAINT `designer_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `designer_categories_designer_id_foreign` FOREIGN KEY (`designer_id`) REFERENCES `designers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_designer_id_foreign` FOREIGN KEY (`designer_id`) REFERENCES `designers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_saves`
--
ALTER TABLE `project_saves`
  ADD CONSTRAINT `project_saves_designer_id_foreign` FOREIGN KEY (`designer_id`) REFERENCES `designers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_saves_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_saves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
