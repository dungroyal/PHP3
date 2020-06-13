-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2020 lúc 04:54 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3_bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dateCategory` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dateEditCategory` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`idCategory`, `nameCategory`, `dateCategory`, `dateEditCategory`) VALUES
(2, 'Sách trẻ em', '2020-06-05 17:35:58', ''),
(3, 'Sách kinh doanh', '2020-06-05 17:35:44', ''),
(4, 'Sách văn chương', '2020-06-05 17:36:03', ''),
(5, 'Sách âm nhạc', '2020-06-05 17:35:34', ''),
(6, 'Sách giáo khoa', '2020-06-05 17:35:51', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `idProduct` int(11) NOT NULL,
  `nameProduct` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sortDescription` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dateProduct` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `priceProduct` double NOT NULL,
  `authorProduct` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`idProduct`, `nameProduct`, `sortDescription`, `images`, `Description`, `dateProduct`, `priceProduct`, `authorProduct`, `idCategory`) VALUES
(1, '5 Múi Giờ, 10 Tiếng Bay Và Một Cái Khép Mi', '5 Múi Giờ, 10 Tiếng Bay Và Một Cái Khép Mi', '1.jpg', '5 Múi Giờ, 10 Tiếng Bay Và Một Cái Khép Mi', '2020-06-05 17:12:46', 300000, 'Nguyễn Mai Chi ', 2),
(2, 'Mộng Xưa Thành Cũ', 'Mộng Xưa Thành Cũ', '2.jpg', 'Mộng Xưa Thành Cũ Mộng Xưa Thành Cũ', '2020-06-05 17:11:26', 300000, 'Mặc Mặc An Nhiên ', 2),
(3, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '3.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:11:29', 200000, 'Ngọc Hoài Nhân ', 3),
(4, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '4.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:11:34', 200000, 'Ngọc Hoài Nhân ', 4),
(5, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '5.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:11:37', 200000, 'Ngọc Hoài Nhân ', 5),
(6, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '6.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:11:39', 200000, 'Ngọc Hoài Nhân ', 6),
(7, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '7.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:12:49', 200000, 'Ngọc Hoài Nhân ', 4),
(8, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '8.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:12:51', 200000, 'Ngọc Hoài Nhân ', 2),
(9, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '6.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:11:39', 200000, 'Ngọc Hoài Nhân ', 2),
(10, 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '3.jpg', 'Gói Nỗi Buồn Lại Và Ném Đi Thật Xa', '2020-06-05 17:11:29', 200000, 'Ngọc Hoài Nhân ', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `rule`) VALUES
(1, 'admin', '$2y$10$bTyPx.jx6yhP6LJUFHvxueq7SVxgAm00jbrK3r48sy0375mY2K35i', 1),
(2, 'dungdq', '$2y$10$bTyPx.jx6yhP6LJUFHvxueq7SVxgAm00jbrK3r48sy0375mY2K35i', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`idCategory`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Chỉ mục cho bảng `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
