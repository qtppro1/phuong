-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2021 lúc 04:25 PM
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
  `dongia` double NOT NULL,
  `thanhtien` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdhs`
--

INSERT INTO `chitietdhs` (`id`, `madh`, `masp`, `soluong`, `dongia`, `thanhtien`, `created_at`, `updated_at`) VALUES
(1, 7, 7, 2, 5690000, 11380000, '2021-07-22 03:54:49', '2021-07-22 03:54:49'),
(2, 8, 8, 2, 50000, 100000, '2021-07-22 03:56:29', '2021-07-22 03:56:29'),
(5, 10, 6, 1, 5690000, 5690000, '2021-07-23 01:59:27', '2021-07-23 01:59:27'),
(6, 10, 8, 1, 50000, 50000, '2021-07-23 01:59:27', '2021-07-23 01:59:27'),
(7, 11, 8, 2, 50000, 100000, '2021-07-23 06:45:25', '2021-07-23 06:45:25'),
(8, 11, 7, 1, 5690000, 5690000, '2021-07-23 06:45:25', '2021-07-23 06:45:25'),
(9, 12, 7, 2, 5690000, 11380000, '2021-07-23 07:20:16', '2021-07-23 07:20:16'),
(10, 12, 8, 1, 50000, 50000, '2021-07-23 07:20:16', '2021-07-23 07:20:16');

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
  `tongtien` double NOT NULL,
  `giamgia` double(8,2) NOT NULL,
  `phiship` float NOT NULL,
  `hinhthucthanhtoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangs`
--

INSERT INTO `donhangs` (`id`, `maldh`, `mauser`, `makh`, `matuyen`, `ngaytao`, `tongtien`, `giamgia`, `phiship`, `hinhthucthanhtoan`, `stt`, `created_at`, `updated_at`) VALUES
(7, 2, 9, 11, 1, '2021-07-22', 11430000, 0.00, 50000, 'Tiền mặt', 'Đã Thanh toán', '2021-07-22 03:54:49', '2021-07-22 03:54:49'),
(8, 2, 9, 11, 1, '2021-07-22', 150000, 0.00, 50000, 'Tiền mặt', 'Hủy đơn', '2021-07-22 03:56:29', '2021-07-23 05:30:55'),
(10, 2, 9, 11, 1, '2021-07-23', 5790000, 0.00, 50000, 'Tiền mặt', 'Hủy đơn', '2021-07-23 01:59:27', '2021-07-23 06:44:08'),
(11, 2, 15, 11, 1, '2021-07-23', 5840000, 0.00, 50000, 'Tiền mặt', 'Hủy đơn', '2021-07-23 06:45:25', '2021-07-23 07:19:23'),
(12, 2, 15, 11, 1, '2021-07-23', 11480000, 0.00, 50000, 'Tiền mặt', 'Đã Thanh toán', '2021-07-23 07:20:16', '2021-07-23 07:20:16');

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

--
-- Đang đổ dữ liệu cho bảng `loaidhs`
--

INSERT INTO `loaidhs` (`id`, `tenldh`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'Hóa đơn nhập', 'giành cho các thanh toán thuộc về nhập hàng', '2021-07-14 03:54:23', '2021-07-14 03:54:23'),
(2, 'Hóa đơn xuất', 'Giành cho các giao dịch nhập hàng', NULL, NULL);

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

--
-- Đang đổ dữ liệu cho bảng `loaikhachhangs`
--

INSERT INTO `loaikhachhangs` (`id`, `tenloaikh`, `created_at`, `updated_at`) VALUES
(1, 'Khách hàng mua sỉ', '2021-07-19 07:10:02', '2021-07-19 07:10:02'),
(2, 'Khách hàng mua lẻ', '2021-07-19 07:10:09', '2021-07-19 07:10:09'),
(3, 'Đại lý', '2021-07-19 07:10:19', '2021-07-19 07:10:19');

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

--
-- Đang đổ dữ liệu cho bảng `loaisps`
--

INSERT INTO `loaisps` (`id`, `tenlsp`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', 'Nhóm sản phẩm điện thoại', '2021-07-13 07:56:45', '2021-07-13 07:56:45'),
(2, 'Ipad', 'Các sản phẩm Ipad từ apple', '2021-07-13 07:56:54', '2021-07-13 07:56:54'),
(3, 'Linh kiện', 'Các linh kiện thay thế cho sản phẩm apple', '2021-07-13 07:57:00', '2021-07-13 07:57:00'),
(4, 'Phụ kiện', 'Sản phẩm phụ kiện giành cho sản phẩm Apple', '2021-07-13 07:57:08', '2021-07-13 07:57:08');

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

--
-- Đang đổ dữ liệu cho bảng `nhacungcaps`
--

INSERT INTO `nhacungcaps` (`id`, `tenncc`, `diachincc`, `sdt`, `nganhhangcc`, `created_at`, `updated_at`) VALUES
(1, 'cty giang', 'cần thơ', '0939337516', 'Điện thoại', '2021-07-13 07:57:18', '2021-07-13 07:57:18'),
(3, 'Công ty TNHH Apple', 'cần thơ', '0939337516', 'Điện thoại', '2021-07-23 06:36:09', '2021-07-23 06:36:09'),
(4, 'cty TNHH ABC', 'Cần thơ', '0939337516', 'Ipad', '2021-07-23 06:43:01', '2021-07-23 06:43:01'),
(5, 'Cty ADC', 'cần thơ', '0939337516', 'Phụ kiện', '2021-07-23 07:17:43', '2021-07-23 07:17:43');

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

--
-- Đang đổ dữ liệu cho bảng `quyens`
--

INSERT INTO `quyens` (`id`, `tenquyen`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'quyền cao nhất', NULL, NULL),
(2, 'quản lý', 'sử dụng các chức năng quản lý', NULL, NULL),
(3, 'Thu ngân', 'Thu ngân tại quầy thanh toán', NULL, NULL),
(4, 'khách hàng', 'thông tin khách hàng dùng cho việc thanh toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `id` int(10) UNSIGNED NOT NULL,
  `malsp` int(10) UNSIGNED NOT NULL,
  `mancc` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` longtext COLLATE utf8_unicode_ci NOT NULL,
  `giavon` bigint(20) NOT NULL,
  `giaspbanra` bigint(20) NOT NULL,
  `mieuta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`id`, `malsp`, `mancc`, `tensp`, `soluong`, `hinhanh`, `giavon`, `giaspbanra`, `mieuta`, `trangthai`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 'Iphone 8Plus 64GB', 344, '8p1.jpg', 4590000, 5690000, 'Sản phẩm đến từ nhà táo', 'Còn hàng', '2021-07-15 00:23:36', '2021-07-15 00:23:36'),
(7, 2, 1, 'Ipad Air 2 64GB', 100, 'ipad-air-3-10-5inch.jpg', 4590000, 5690000, 'Sản phẩm đến từ nhà táo', 'Còn hàng', '2021-07-15 00:39:29', '2021-07-15 00:39:29'),
(8, 1, 1, 'màn hình iphone 6s', 20, 'iphone8-plus-red-3 - Copy.png', 15000, 50000, 'màn hình', 'còn hàng', '2021-07-16 06:44:33', '2021-07-16 06:44:33'),
(9, 1, 1, 'Iphone 8Plus 128GB', 100, '8psliver.png', 5450000, 7200000, 'Sản phẩm đến từ nhà táo', 'Còn hàng', '2021-07-23 06:32:16', '2021-07-23 06:32:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tp`
--

CREATE TABLE `tbl_tp` (
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tp`
--

INSERT INTO `tbl_tp` (`matp`, `name`, `type`) VALUES
('01', 'Thành phố Hà Nội', 'Thành phố Trung ương'),
('02', 'Tỉnh Hà Giang', 'Tỉnh'),
('04', 'Tỉnh Cao Bằng', 'Tỉnh'),
('06', 'Tỉnh Bắc Kạn', 'Tỉnh'),
('08', 'Tỉnh Tuyên Quang', 'Tỉnh'),
('10', 'Tỉnh Lào Cai', 'Tỉnh'),
('11', 'Tỉnh Điện Biên', 'Tỉnh'),
('12', 'Tỉnh Lai Châu', 'Tỉnh'),
('14', 'Tỉnh Sơn La', 'Tỉnh'),
('15', 'Tỉnh Yên Bái', 'Tỉnh'),
('17', 'Tỉnh Hoà Bình', 'Tỉnh'),
('19', 'Tỉnh Thái Nguyên', 'Tỉnh'),
('20', 'Tỉnh Lạng Sơn', 'Tỉnh'),
('22', 'Tỉnh Quảng Ninh', 'Tỉnh'),
('24', 'Tỉnh Bắc Giang', 'Tỉnh'),
('25', 'Tỉnh Phú Thọ', 'Tỉnh'),
('26', 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
('27', 'Tỉnh Bắc Ninh', 'Tỉnh'),
('30', 'Tỉnh Hải Dương', 'Tỉnh'),
('31', 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
('33', 'Tỉnh Hưng Yên', 'Tỉnh'),
('34', 'Tỉnh Thái Bình', 'Tỉnh'),
('35', 'Tỉnh Hà Nam', 'Tỉnh'),
('36', 'Tỉnh Nam Định', 'Tỉnh'),
('37', 'Tỉnh Ninh Bình', 'Tỉnh'),
('38', 'Tỉnh Thanh Hóa', 'Tỉnh'),
('40', 'Tỉnh Nghệ An', 'Tỉnh'),
('42', 'Tỉnh Hà Tĩnh', 'Tỉnh'),
('44', 'Tỉnh Quảng Bình', 'Tỉnh'),
('45', 'Tỉnh Quảng Trị', 'Tỉnh'),
('46', 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
('48', 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
('49', 'Tỉnh Quảng Nam', 'Tỉnh'),
('51', 'Tỉnh Quảng Ngãi', 'Tỉnh'),
('52', 'Tỉnh Bình Định', 'Tỉnh'),
('54', 'Tỉnh Phú Yên', 'Tỉnh'),
('56', 'Tỉnh Khánh Hòa', 'Tỉnh'),
('58', 'Tỉnh Ninh Thuận', 'Tỉnh'),
('60', 'Tỉnh Bình Thuận', 'Tỉnh'),
('62', 'Tỉnh Kon Tum', 'Tỉnh'),
('64', 'Tỉnh Gia Lai', 'Tỉnh'),
('66', 'Tỉnh Đắk Lắk', 'Tỉnh'),
('67', 'Tỉnh Đắk Nông', 'Tỉnh'),
('68', 'Tỉnh Lâm Đồng', 'Tỉnh'),
('70', 'Tỉnh Bình Phước', 'Tỉnh'),
('72', 'Tỉnh Tây Ninh', 'Tỉnh'),
('74', 'Tỉnh Bình Dương', 'Tỉnh'),
('75', 'Tỉnh Đồng Nai', 'Tỉnh'),
('77', 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
('79', 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
('80', 'Tỉnh Long An', 'Tỉnh'),
('82', 'Tỉnh Tiền Giang', 'Tỉnh'),
('83', 'Tỉnh Bến Tre', 'Tỉnh'),
('84', 'Tỉnh Trà Vinh', 'Tỉnh'),
('86', 'Tỉnh Vĩnh Long', 'Tỉnh'),
('87', 'Tỉnh Đồng Tháp', 'Tỉnh'),
('89', 'Tỉnh An Giang', 'Tỉnh'),
('91', 'Tỉnh Kiên Giang', 'Tỉnh'),
('92', 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
('93', 'Tỉnh Hậu Giang', 'Tỉnh'),
('94', 'Tỉnh Sóc Trăng', 'Tỉnh'),
('95', 'Tỉnh Bạc Liêu', 'Tỉnh'),
('96', 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyens`
--

CREATE TABLE `tuyens` (
  `id` int(10) UNSIGNED NOT NULL,
  `diemdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diemcuoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `km` float NOT NULL,
  `phiship` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyens`
--

INSERT INTO `tuyens` (`id`, `diemdau`, `diemcuoi`, `km`, `phiship`, `created_at`, `updated_at`) VALUES
(1, 'Tỉnh Hậu Giang', 'Thành phố Cần Thơ', 20, 50000, '2021-07-19 11:44:39', '2021-07-19 11:44:39'),
(2, 'Thành phố Cần Thơ', 'Tỉnh Lạng Sơn', 10000, 500400, '2021-07-19 11:51:43', '2021-07-19 11:51:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `maquyen` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachicuthe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `maquyen`, `hoten`, `diachicuthe`, `gioitinh`, `email`, `sdt`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 2, 'Nguyễn Hà Giang', 'Cái tắc hậu giang', 'Nam', 'giang@gmail.com', '0939337416', 'admin.png', NULL, '$2y$10$Rv84QKPUP94e64nooaXVG.G.GJoG.rQZFfa39Jg2XbXyBOZULBgQq', NULL, '2021-07-19 06:40:25', '2021-07-19 06:40:25'),
(10, 3, 'Lưu Huỳnh Như', 'Cái tắc hậu giang', 'Nữ', 'nhu@gmail.com', '0939337416', 'admin.png', NULL, '$2y$10$x9oCrM2iFA.jbHm9IEULxu9gKKvG3QPDXmLjKJiK2qVhhCxZt2wzW', NULL, '2021-07-20 07:33:08', '2021-07-20 07:33:08'),
(11, 4, 'phan phu thuan', 'Cần thơ', 'Nam', 'thuan@gmail.com', '0939337416', 'admin.png', NULL, '$2y$10$DDusD5ysEXh9svTcHgDfqurQE.ElVCEtA/l2fIedci9ru78hJ03TW', NULL, '2021-07-20 07:37:08', '2021-07-20 07:37:08'),
(13, 4, 'Lưu Huỳnh A', 'Cần thơ', 'Nữ', 'nhu123@gmail.com', '0939337416', 'admin.png', NULL, '$2y$10$qFnM4gnDVXrdadhGbVFe1ObHV4DU3kekwI7ZElD2cj3CNvsg3z0J.', NULL, '2021-07-20 12:04:32', '2021-07-20 12:04:32'),
(15, 1, 'Quách thanh Phương', 'Kiên Giang', 'Nam', 'admin@gmail.com', '0939337416', 'img.jpg', NULL, '$2y$10$NsnTkrkCLdjD2QaUTApVO.MxPG6XQFOkoEDKYAXfl5HLERxcfVyui', NULL, '2021-07-23 06:25:13', '2021-07-23 06:25:13');

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
  ADD KEY `donhangs_matuyen_foreign` (`matuyen`),
  ADD KEY `donhangs_makh_foreign` (`makh`);

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
  ADD KEY `sanphams_malsp_foreign` (`malsp`),
  ADD KEY `sanphams_mancc_foreign` (`mancc`);

--
-- Chỉ mục cho bảng `tbl_tp`
--
ALTER TABLE `tbl_tp`
  ADD PRIMARY KEY (`matp`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhangs`
--
ALTER TABLE `donhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaikhachhangs`
--
ALTER TABLE `loaikhachhangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisps`
--
ALTER TABLE `loaisps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nhacungcaps`
--
ALTER TABLE `nhacungcaps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quyens`
--
ALTER TABLE `quyens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tuyens`
--
ALTER TABLE `tuyens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  ADD CONSTRAINT `donhangs_makh_foreign` FOREIGN KEY (`makh`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `donhangs_maldh_foreign` FOREIGN KEY (`maldh`) REFERENCES `loaidhs` (`id`),
  ADD CONSTRAINT `donhangs_matuyen_foreign` FOREIGN KEY (`matuyen`) REFERENCES `tuyens` (`id`),
  ADD CONSTRAINT `donhangs_mauser_foreign` FOREIGN KEY (`mauser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD CONSTRAINT `khachhangs_maloai_foreign` FOREIGN KEY (`maloai`) REFERENCES `loaikhachhangs` (`id`);

--
-- Các ràng buộc cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD CONSTRAINT `sanphams_malsp_foreign` FOREIGN KEY (`malsp`) REFERENCES `loaisps` (`id`),
  ADD CONSTRAINT `sanphams_mancc_foreign` FOREIGN KEY (`mancc`) REFERENCES `nhacungcaps` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_maquyen_foreign` FOREIGN KEY (`maquyen`) REFERENCES `quyens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
