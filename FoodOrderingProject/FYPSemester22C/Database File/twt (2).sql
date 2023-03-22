-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twt`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` int(11) NOT NULL,
  `category_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `order_number`, `category_status`, `added_on`, `created_at`, `updated_at`) VALUES
(1, 'Japanese', 1, 1, '2023-01-03 00:00:00', '2023-01-03 07:56:53', '2023-01-03 07:56:53'),
(2, 'Western and Middle Eastern', 1, 1, '2023-01-03 00:00:00', '2023-01-03 07:57:21', '2023-01-03 07:57:21'),
(3, 'Drinks and Beverages', 1, 1, '2023-01-03 00:00:00', '2023-01-03 07:58:38', '2023-01-03 07:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `dish_id` int(11) NOT NULL,
  `coupon_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_price` int(11) NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_limit` int(11) NOT NULL,
  `coupon_used` int(11) NOT NULL,
  `coupon_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_status` int(11) NOT NULL,
  `price` double(10,2) DEFAULT NULL,
  `discount` double(10,2) DEFAULT NULL,
  `added_on` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`dish_id`, `category_id`, `dish_name`, `dish_detail`, `dish_image`, `dish_status`, `price`, `discount`, `added_on`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chicken Ramen', 'Ramen noodles served with soft boiled eggs, chicken slices, and veggies.', '1672761689.menu1.jpg', 1, 24.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:01:29', '2023-01-03 08:01:29'),
(2, 1, 'Beef Udon', 'Served with the broth, beef slices and assortments of veggies.', '1672761748.menu2.jpg', 1, 28.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:02:28', '2023-01-03 08:02:28'),
(3, 1, 'Chicken Karage', 'Japanese-style fried chicken, with boneless pieces of chicken.', '1672761810.menu3.jpg', 1, 18.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:03:30', '2023-01-03 08:03:30'),
(4, 1, 'Chicken Katsu', 'Skinless chicken breast, Japanese sesame dressing and tonkatsu sauce and shredded cabbage.', '1672761845.menu4.jpg', 1, 24.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:04:05', '2023-01-03 08:04:05'),
(5, 1, 'Shrimp Tempura', 'Deep friend Shrimp with the Tempura batter.', '1672761896.menu5.jpg', 1, 13.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:04:56', '2023-01-03 08:04:56'),
(6, 1, 'Tamagoyaki', 'Japanase-style Omelet', '1672761964.menu6.jpg', 1, 16.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:06:04', '2023-01-03 08:06:04'),
(7, 1, 'Hambagu \"Hamburger Steak\"', 'Made-in-house Hamburger Patty, served with fries and veggies.', '1672762193.menu7.jpg', 1, 26.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:07:34', '2023-01-03 08:09:53'),
(8, 1, 'Omurice \"Omelet Fried Rice\"', 'Fried Rice covered in an Omelet-wrap and decorated with sauce on top.', '1672762219.menu8.jpg', 1, 26.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:08:45', '2023-01-03 08:10:19'),
(9, 2, 'Lamb Wrap', 'Wrap with beef slices, fries, veggies and garlic sauce.', '1672762309.menu9.jpg', 1, 22.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:11:49', '2023-01-03 08:11:49'),
(10, 2, 'Cheeseburger', 'Lamb/Beef Patty, lettuce, tomatoes and special sauce.', '1672762360.menu10.jpg', 1, 21.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:12:40', '2023-01-03 08:12:40'),
(11, 2, 'Chicken Salad', 'Chicken slices, served with assortment of veggies and salad dressing of your choice.', '1672762403.menu11.jpg', 1, 23.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:13:23', '2023-01-03 08:13:23'),
(12, 2, 'Grilled Chicken and Rice', 'The chicken grilled and seasoned with spices and herbs and served with yellow rice cooked in chicken broth.', '1672762455.menu12.jpg', 1, 23.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:14:15', '2023-01-03 08:14:15'),
(13, 2, 'Barbeque Plate', 'A platter of chicken, lamb and beef in the forms of cuts, kebabs, sausages and patties.', '1672762513.menu13.jpg', 1, 21.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:15:13', '2023-01-03 08:15:13'),
(14, 2, 'Grill Chicken with Soy Sauce', 'Chicken grilled, marinated overnight in soy sauce and our mix of season.', '1672762567.menu14.jpg', 1, 17.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:16:07', '2023-01-03 08:16:07'),
(15, 3, 'Japanese Green Tea', 'Fresh Japanese Green Tea supplied from Japan', '1672762650.drink.jpg', 1, 12.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:17:30', '2023-01-03 08:17:30'),
(16, 3, 'Milkshake', 'Blended with our homemade ice-cream and topped of with sprinkles', '1672762705.drink2.jpg', 1, 13.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:18:25', '2023-01-03 08:18:25'),
(17, 3, 'Coffee', 'Freshly brewed coffee made to order, beans from South America.', '1672762733.drink3.jpg', 1, 12.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:18:53', '2023-01-03 08:18:53'),
(18, 3, 'Ice Chocolate', 'Iced chocolate drink made with coco-powder.', '1672762789.drink4.jpg', 1, 15.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:19:49', '2023-01-03 08:19:49'),
(19, 3, 'Root Beer Float', 'Root Beer with ice-cream served on top.', '1672763040.drink5.jpg', 1, 13.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:24:00', '2023-01-03 08:24:00'),
(20, 3, 'Smoothies', 'Smooothies made with fresh fruits and honey for added flavour.', '1672763134.drink5.jpg', 1, 14.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:25:34', '2023-01-03 08:25:34'),
(21, 3, 'Sparkling Water', 'High-end sparkling water', '1672763200.drink7.jpg', 1, 13.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:26:40', '2023-01-03 08:26:40'),
(22, 3, 'Soft Drink', 'A soft drink of your choice and free refill', '1672763234.drink8.jpg', 1, 13.00, NULL, '2023-01-04 00:00:00', '2023-01-03 08:27:14', '2023-01-03 08:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_07_133446_create_categories_table', 1),
(6, '2022_12_08_122500_create_menus_table', 1),
(7, '2022_12_08_130413_create_orders_table', 1),
(8, '2022_12_15_130838_create_coupons_table', 1),
(9, '2022_12_18_070849_create_payments_table', 1),
(10, '2022_12_18_122137_create_customers_table', 1),
(11, '2023_01_02_144043_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `dish_quantity` int(11) NOT NULL,
    `date` datetime DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr.food', 'food@gmail.com', NULL, '$2y$10$.niTWnFgg9I/sSz3Zur8YujI8t2UCgf4e.WPLrt0kCPco8Rry2kZ6', NULL, '2023-01-03 07:54:57', '2023-01-03 07:54:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`),
  ADD UNIQUE KEY `coupons_coupon_code_unique` (`coupon_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `dish_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
