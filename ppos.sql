-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 08, 2021 lúc 10:05 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ppos`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdhs`
--

CREATE TABLE `chitietdhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `madh` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double(8,2) NOT NULL,
  `thanhtien` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangs`
--

CREATE TABLE `donhangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `maldh` int(10) UNSIGNED NOT NULL,
  `mauser` int(10) UNSIGNED NOT NULL,
  `makh` int(10) UNSIGNED NOT NULL,
  `matuyen` int(10) UNSIGNED NOT NULL,
  `ngaytao` date NOT NULL,
  `tongtien` double(8,2) NOT NULL,
  `giamgia` double(8,2) NOT NULL,
  `hinhthucthanhtoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangs`
--

CREATE TABLE `khachhangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `maloai` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidhs`
--

CREATE TABLE `loaidhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenldh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikhachhangs`
--

CREATE TABLE `loaikhachhangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloaikh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisps`
--

CREATE TABLE `loaisps` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenlsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_07_06_013925_create__quyens_table', 1),
(4, '2021_07_06_075318_create__loaikhachhangs_table', 1),
(5, '2021_07_06_075521_create__tuyens_table', 1),
(6, '2021_07_06_075658_create__loai_d_hs_table', 1),
(7, '2021_07_06_075917_create__nha_c_cs_table', 1),
(8, '2021_07_06_080047_create__loai_s_ps_table', 1),
(9, '2021_07_08_030218_create_khachhangs_table', 1),
(10, '2021_07_08_030229_create_users_table', 1),
(11, '2021_07_08_030241_create_sanphams_table', 1),
(12, '2021_07_08_030338_create_donhangs_table', 1),
(13, '2021_07_08_030357_create_chitietdhs_table', 1),
(14, '2021_07_08_030414_create_nccsanphams_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nccsanphams`
--

CREATE TABLE `nccsanphams` (
  `id` int(10) UNSIGNED NOT NULL,
  `mancc` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcaps`
--

CREATE TABLE `nhacungcaps` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenncc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachincc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nganhhangcc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyens`
--

CREATE TABLE `quyens` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenquyen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `id` int(10) UNSIGNED NOT NULL,
  `malsp` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` longtext COLLATE utf8_unicode_ci NOT NULL,
  `giavon` double(8,2) NOT NULL,
  `giaspbanra` double(8,2) NOT NULL,
  `mieuta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyens`
--

CREATE TABLE `tuyens` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `maquyen` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdhs`
--
ALTER TABLE `chitietdhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietdhs_madh_foreign` (`madh`),
  ADD KEY `chitietdhs_masp_foreign` (`masp`);

--
-- Chỉ mục cho bảng `donhangs`
--
ALTER TABLE `donhangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhangs_maldh_foreign` (`maldh`),
  ADD KEY `donhangs_mauser_foreign` (`mauser`),
  ADD KEY `donhangs_makh_foreign` (`makh`),
  ADD KEY `donhangs_matuyen_foreign` (`matuyen`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhangs_maloai_foreign` (`maloai`);

--
-- Chỉ mục cho bảng `loaidhs`
--
ALTER TABLE `loaidhs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaikhachhangs`
--
ALTER TABLE `loaikhachhangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisps`
--
ALTER TABLE `loaisps`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nccsanphams`
--
ALTER TABLE `nccsanphams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nccsanphams_mancc_foreign` (`mancc`),
  ADD KEY `nccsanphams_masp_foreign` (`masp`);

--
-- Chỉ mục cho bảng `nhacungcaps`
--
ALTER TABLE `nhacungcaps`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `quyens`
--
ALTER TABLE `quyens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanphams_malsp_foreign` (`malsp`);

--
-- Chỉ mục cho bảng `tuyens`
--
ALTER TABLE `tuyens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_maquyen_foreign` (`maquyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdhs`
--
ALTER TABLE `chitietdhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhangs`
--
ALTER TABLE `donhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaidhs`
--
ALTER TABLE `loaidhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaikhachhangs`
--
ALTER TABLE `loaikhachhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisps`
--
ALTER TABLE `loaisps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nccsanphams`
--
ALTER TABLE `nccsanphams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhacungcaps`
--
ALTER TABLE `nhacungcaps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quyens`
--
ALTER TABLE `quyens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tuyens`
--
ALTER TABLE `tuyens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdhs`
--
ALTER TABLE `chitietdhs`
  ADD CONSTRAINT `chitietdhs_madh_foreign` FOREIGN KEY (`madh`) REFERENCES `donhangs` (`id`),
  ADD CONSTRAINT `chitietdhs_masp_foreign` FOREIGN KEY (`masp`) REFERENCES `sanphams` (`id`);

--
-- Các ràng buộc cho bảng `donhangs`
--
ALTER TABLE `donhangs`
  ADD CONSTRAINT `donhangs_makh_foreign` FOREIGN KEY (`makh`) REFERENCES `khachhangs` (`id`),
  ADD CONSTRAINT `donhangs_maldh_foreign` FOREIGN KEY (`maldh`) REFERENCES `loaidhs` (`id`),
  ADD CONSTRAINT `donhangs_matuyen_foreign` FOREIGN KEY (`matuyen`) REFERENCES `tuyens` (`id`),
  ADD CONSTRAINT `donhangs_mauser_foreign` FOREIGN KEY (`mauser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD CONSTRAINT `khachhangs_maloai_foreign` FOREIGN KEY (`maloai`) REFERENCES `loaikhachhangs` (`id`);

--
-- Các ràng buộc cho bảng `nccsanphams`
--
ALTER TABLE `nccsanphams`
  ADD CONSTRAINT `nccsanphams_mancc_foreign` FOREIGN KEY (`mancc`) REFERENCES `nhacungcaps` (`id`),
  ADD CONSTRAINT `nccsanphams_masp_foreign` FOREIGN KEY (`masp`) REFERENCES `sanphams` (`id`);

--
-- Các ràng buộc cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD CONSTRAINT `sanphams_malsp_foreign` FOREIGN KEY (`malsp`) REFERENCES `loaisps` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_maquyen_foreign` FOREIGN KEY (`maquyen`) REFERENCES `quyens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
