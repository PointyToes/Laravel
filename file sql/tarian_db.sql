-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2019 at 09:54 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9577352_tarian_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tarian`
--

CREATE TABLE `data_tarian` (
  `id_tarian` bigint(20) UNSIGNED NOT NULL,
  `nama_tarian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_tarian`
--

INSERT INTO `data_tarian` (`id_tarian`, `nama_tarian`, `foto`, `provinsi`, `deskripsi`, `video`, `created_at`, `updated_at`) VALUES
(7, 'Bajidor Kahot Dance', '01.jpg', 'Jawa Barat', 'Bajidor Kahot Dance is one of the traditional dances originating from West Java. Bajidor Kahot Dance is a combination of Tap Tilu Dance and Jaipongan Dance as the basis of the movement. What distinguishes Bajidor Kahot Dance is not to optimize the shoulders in movement as well as on Jaipongan Dance and Tap Tilu Dance. In Bajidor Kahot Dance, hips, arms, shoulders, head, and hands are dynamically moved. Steps from the foot became part of Bajidor Kahot Dance. \r\n\r\nThe dancers bajidor kahot usually wear kebaya typical Pasundan land. With the kebaya in the design fit with the body shape, the dancers bajidor kahot look very charming. Moreover, the clothes worn wear bright colors. Additional accessories such as scarves and fans also make the show from Bajidor Kahot Dance looks very beautiful.', 'https://www.youtube.com/embed/kEw2ON35UDg', '2019-08-02 06:58:42', '2019-08-02 06:58:42'),
(8, 'Bambang Cakil Dance', '02.jpg', 'Yogyakarta', 'The Bambangan Cakil dance is one of the classical dances in Java, especially Central Java. This dance was actually adopted from one of the scenes in the performance of Wayang Kulit or Wayang Kulit, the Flower War or Flower War. \r\n\r\nThis dance is telling about the battle between the knights that fight giants. The knight is a character that is subtle and gentle, while the giant figures is illustrate the rough and cruel. In Leather puppet performances, Perang Kembang scenes are usually performed at the middle or the show or at Pathet Sanga stage. The war between the knights (Bambangan) against the giant is very attractive, in this scene can also be used as a place of assessment of a puppeteer in moving the puppet. The meaning that contained in this dance is that all forms of crime and wrath which definitely inferior to the good.', 'https://www.youtube.com/embed/pO_EstNJcF4', '2019-08-02 07:01:06', '2019-08-07 21:56:49'),
(9, 'Bedhaya Dance', '03.jpg', 'Surakarta', 'The bedhaya (also written as bedoyo, beḍaya, and various other transliterations) is a sacred ritualized dance of Java, Indonesia, associated with the royal palaces of Yogyakarta and Surakarta. Along with the serimpi, the bedhaya epitomized the elegant (alus) character of the royal court, and the dance became an important symbol of the ruler\'s power. \r\n\r\nThe bedhaya has different forms in the two court cities, the bedhaya Ketawang in Surakarta (Solo), and the bedhaya Semang in Yogyakarta, the latter of which has not been performed for more than 20 years. The Solonese dance continues to be performed once per year, on the second day of the Javanese month of Ruwah (during May in the Gregorian calendar), to commemorate the ascension of the current Susuhunan (prince) of Surakarta. Nine females, relatives or wives of the Susuhunan, perform the dance before a private audience. An invitation to anyone outside of the inner circle of the court is a considerable honor. \r\n\r\nSome kind of female dance known as bedhaya existed on Java at least as early as the Majapahit Empire. Indeed, some of the steps of the modern dance are said to be as old as the 3rd century. However, the modern form is traditionally dated to the court of Sultan Agung of Mataram (reigned 1613–1645). Unfortunately there is almost no historical evidence to back up the claims made about the advances in the arts in Sultan Agung\'s courts, and the existence of the dance is not clearly documented until the late 18th century.', 'https://www.youtube.com/embed/HzItCtW6cCk', '2019-08-02 07:02:33', '2019-08-02 07:02:33'),
(10, 'Ciwa Nataraja Dance', '04.jpg', 'Bali', 'The Çiwa Nataraja is a master dance of the Institute, of which is commonly carried out and performed by 9 (nine) female dancers. A dancer embodies and acts as the Lord Śiva, while eight (8) other dancers embody and act as the bright effulgence of the Lord Śiva. \r\n\r\nIn hindu myhtology, Siwa Nataraja is a form of the God Siwa, who is known as the king of dance. As the highest dancer. Siwa dances continuously to maintain rhythm and balance in the cosmos. The movements in this dancing are so powerful that it creates and combines this world realm. \r\n\r\nThis dance is a compatible fusion between Balinese and several elements of Bharata Natyam dance from India, which have been extracted and reconstructed into its total entirety. Çiwa Nataraja itself is the manifestation of the Lord Śiva Himself, or the personality of Godhead as the Supreme Dancer. Being a god of dance, he constantly moves leading to the rhythm and regularity in the cosmos. \r\n\r\nThis master dance describes the effulgence of the Lord Śiva as the supreme powers, and then those supreme powers are accumulated into a supreme unity of which causing and creating the creatures in the universe. This master dance is often performed together with the institute Hymn and Mars in several occasions of academic ceremonies. Dance Composer: N.L.N. Swasthi Widjaja, and Music Art: I Nyoman Windha.', 'https://www.youtube.com/embed/TnkVMNNXz84', '2019-08-02 07:07:03', '2019-08-02 07:07:03'),
(11, 'Deguq Dance', '05.jpg', 'Kalimantan Timur', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/0IxMdR-26Zo', '2019-08-02 07:36:38', '2019-08-02 07:36:38'),
(12, 'Gabor Dance', '07.jpg', 'Bali', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/QR9bjN4jAVM', '2019-08-02 07:38:01', '2019-08-02 07:38:01'),
(13, 'Iswara Gandrung Dance', '07.jpg', 'Jawa Barat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/i_D-daDsFS4', '2019-08-02 07:45:05', '2019-08-02 07:45:05'),
(14, 'Jemparingan Dance', '08.jpg', 'Yogyakarta', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/x55RvYhMzew', '2019-08-02 07:46:26', '2019-08-02 07:46:26'),
(15, 'Kedempling Dance', '09.jpg', 'Jawa Barat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/3YauV-GrSYY', '2019-08-02 07:48:16', '2019-08-02 07:48:16'),
(16, 'Kidung Asmara Dance', '10.jpg', 'Jawa Timur', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/-iX_Wgt14Lw', '2019-08-02 08:05:42', '2019-08-02 08:05:42'),
(17, 'Ngarojeng Dance', '11.jpg', 'Jawa Barat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/Y-xyRvXGgKY', '2019-08-02 08:10:58', '2019-08-02 08:10:58'),
(18, 'Ofalangga Dance', '12.jpg', 'Nusa Tenggara Timur', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/OelheN_CJmk', '2019-08-02 08:17:23', '2019-08-02 08:17:23'),
(19, 'Paksi Tuwung Dance', '13.jpg', 'Jawa Barat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/VsF8d9yX9nI', '2019-08-02 08:19:12', '2019-08-02 08:19:12'),
(20, 'Ratoh Rajoe Dance', '14.jpg', 'Aceh', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/8fTHblviKi8', '2019-08-02 08:21:50', '2019-08-02 08:21:50'),
(21, 'Pendet Dance', '15.jpg', 'Bali', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be.', 'https://www.youtube.com/embed/fV8vYwbNYCA', '2019-08-02 08:23:40', '2019-08-02 08:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_09_101529_komentar', 1),
(5, '2019_08_01_071247_data_tarian', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$oTFhH2ptr4mY3IeutW1t3O4rxyFuQayDgdR3gz7fu.AUS9zQlSJxe', 'admin', NULL, '2019-07-27 12:51:33', '2019-07-27 12:51:33'),
(2, 'Virna', 'admin@virna.com', NULL, '$2y$10$wm3JSqr3yRHxMNmOkTpZ9eJfXXTWP93pm7I4R72lli4vhRIW.wxPm', 'admin', 'YRuZAPxYpQtjSflspMGxpwYWGndOnQ2qAuB6UEqCGfdKpTTA3UTVgwoRNKnz', '2019-08-02 01:36:47', '2019-08-02 01:36:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tarian`
--
ALTER TABLE `data_tarian`
  ADD PRIMARY KEY (`id_tarian`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tarian`
--
ALTER TABLE `data_tarian`
  MODIFY `id_tarian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
