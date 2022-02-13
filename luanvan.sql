-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 13, 2022 lúc 09:01 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `luanvan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'binh123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Thanh Binh', '0121123123', '2021-08-09 08:29:30', NULL),
(2, 'binh2@gmail.com', '123123', 'thanh binh 2', '0123789456', NULL, NULL),
(3, 'binh4@gmail.com', '12345', 'thanh binh 4', '0124578963', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(7, 'Nông sản nhập khẩu', 'tất cả các sản phẩm nhập khẩu ngoài nước', 0, NULL, '2021-12-09 02:14:42'),
(8, 'Đặc sản vùng miền', 'bao gồm tất cả các sản phẩm thuộc các vừng miền', 0, '2021-08-24 23:49:58', '2021-12-09 02:13:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(4, 'Trái Cây', '1', 0, NULL, NULL),
(5, 'Rau', '2', 0, NULL, NULL),
(6, 'Củ', '3', 0, NULL, NULL),
(7, 'Trái cây nhập khẩu', 'Chuyên về các sản phẩm trái cây', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comment_id`, `product_id`, `comment_name`, `comment_email`, `comment_desc`, `created_at`, `updated_at`) VALUES
(1, 42, 'binh', 'binh@gmail.com', 'sản phẩm chất lượng', '2021-12-10 19:55:21', '2021-12-10 19:55:21'),
(2, 42, 'binh2', 'binh2@gmail.com', 'ngon 2', '2021-12-10 20:07:59', '2021-12-10 20:07:59'),
(8, 41, 'Binh thanh', 'Ninhg@gmail.com', 'san pham chat luong', '2021-12-12 02:20:40', '2021-12-12 02:20:40'),
(10, 41, 'Binh thanh', 'Ninhg@gmail.com', 'san pham chat luong', '2021-12-12 02:24:06', '2021-12-12 02:24:06'),
(11, 41, 'Binh thanh', 'Ninhg@gmail.com', 'san pham chat luong', '2021-12-12 02:25:58', '2021-12-12 02:25:58'),
(16, 40, 'Nhan', 'nhanh@gmail.com', 'trai cay tuoi lam', '2021-12-12 02:41:41', '2021-12-12 02:41:41'),
(17, 40, 'Hưng', 'hung@gmail.com', 'sản phẩm tuyệt vời', '2021-12-12 02:42:38', '2021-12-12 02:42:38'),
(18, 36, 'Ngân', 'ngan@gmail.com', 'Sản phẩm chất lượng, giao hàng đúng hẹn', '2021-12-22 08:27:34', '2021-12-22 08:27:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_time` int(11) NOT NULL,
  `coupon_condition` int(11) NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_time`, `coupon_condition`, `coupon_number`, `created_at`, `updated_at`) VALUES
(1, 'Giảm giá tết', 'TET2022', 10, 1, 30, NULL, NULL),
(2, 'Giảm giá thang 1', 'THANG1', 10, 2, 100000, '2021-12-06 03:33:00', '2021-12-06 03:33:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `store` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`, `store`) VALUES
(1, 'binh', 'bin123@gmail.com', '123123', '123123', NULL, NULL, 'Cua hang 5'),
(2, 'Thanh', 'Thanh@gmail.com', '12345', '0123456', NULL, NULL, 'Cua hang 5'),
(3, 'binh', '23@gmail.com', '123123', '0123566', NULL, NULL, 'Cua hang 5'),
(4, 'binh', 'bin123@gmail.com', '123123', '123', NULL, NULL, 'Cua hang 5'),
(5, 'binh111', 'binh123@gmail.com', '123123', '123', NULL, NULL, 'Cửa hàng số 9'),
(7, 'Hoai An', 'an@gmail.com', '123123', '0120120123', NULL, NULL, 'Trái cây Sài Gòn'),
(8, 'Khoa', 'khoa@gmail.com', '123123', '0123321321', NULL, NULL, NULL),
(9, 'Thanh Bình', 'binh123@gmail.com', '123123', '01216901847', NULL, NULL, NULL);

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_08_09_081710_create_admin_table', 1),
(9, '2021_08_09_130038_create_category_table', 2),
(10, '2021_08_11_072336_create_brand_table', 3),
(11, '2021_08_11_081835_create_product_table', 4),
(13, '2021_08_18_082943_create_table_customer', 5),
(14, '2021_08_18_093817_create_table_shipping', 6),
(15, '2021_08_19_091048_create_table_payment', 7),
(16, '2021_08_19_091416_create_table_order', 7),
(17, '2021_08_19_091452_create_table_order_detail', 7),
(18, '2021_12_11_015703_create_comment_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 5, '266,200.00', '0', NULL, NULL),
(2, 5, 2, 6, '266,200.00', '0', NULL, NULL),
(3, 5, 2, 7, '266,200.00', '0', NULL, NULL),
(4, 5, 2, 8, '266,200.00', '0', NULL, NULL),
(5, 5, 2, 9, '266,200.00', '0', NULL, NULL),
(6, 5, 3, 10, '266,200.00', '0', NULL, NULL),
(17, 5, 7, 21, '60,500.00', '0', NULL, NULL),
(18, 5, 8, 22, '399,300.00', '0', NULL, NULL),
(19, 5, 9, 23, '150,000.00', '1', NULL, NULL),
(20, 7, 10, 24, '970,000.00', '0', NULL, NULL),
(22, 3, 11, 26, '50,000.00', '0', NULL, NULL),
(23, 3, 17, 27, '25,000.00', '0', NULL, NULL),
(24, 3, 18, 28, '25,000.00', '1', NULL, NULL),
(25, 3, 19, 29, '245,000.00', '0', NULL, NULL),
(26, 3, 20, 30, '40,000.00', '0', NULL, NULL),
(27, 3, 20, 31, '0.00', '0', NULL, NULL),
(28, 3, 21, 32, '40,000.00', '0', NULL, NULL),
(29, 9, 22, 33, '45,000.00', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sale_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sale_quantity`, `created_at`, `updated_at`) VALUES
(1, 5, 15, 'Bưởi da xanh 2kg', '80000', 2, NULL, NULL),
(2, 5, 18, 'Bắp cải tím', '20000', 3, NULL, NULL),
(3, 6, 15, 'Bưởi da xanh 2kg', '80000', 2, NULL, NULL),
(4, 6, 18, 'Bắp cải tím', '20000', 3, NULL, NULL),
(5, 14, 18, 'Bắp cải tím', '20000', 2, NULL, NULL),
(6, 15, 19, 'Cà rốt đỏ', '25000', 1, NULL, NULL),
(7, 15, 18, 'Bắp cải tím', '20000', 1, NULL, NULL),
(8, 16, 21, 'Nấm Linh Chi Hàn Quốc', '50000', 1, NULL, NULL),
(9, 17, 29, 'Bông cải trắng', '50000', 1, NULL, NULL),
(10, 18, 29, 'Bông cải trắng', '50000', 1, NULL, NULL),
(11, 18, 39, 'Nho Xanh', '150000', 1, NULL, NULL),
(12, 18, 42, 'Dưa hấu', '25000', 3, NULL, NULL),
(13, 18, 41, 'Cà Tím', '55000', 1, NULL, NULL),
(14, 19, 42, 'Dưa hấu', '25000', 4, NULL, NULL),
(15, 19, 29, 'Bông cải trắng', '50000', 1, NULL, NULL),
(16, 20, 42, 'Dưa hấu', '25000', 1, NULL, NULL),
(17, 20, 40, 'Cherry', '220000', 2, NULL, NULL),
(18, 20, 39, 'Nho Xanh', '150000', 3, NULL, NULL),
(19, 20, 41, 'Cà Tím', '55000', 1, NULL, NULL),
(20, 22, 42, 'Dưa hấu', '25000', 2, NULL, NULL),
(21, 23, 42, 'Dưa hấu', '25000', 1, NULL, NULL),
(22, 24, 42, 'Dưa hấu', '25000', 1, NULL, NULL),
(23, 25, 42, 'Dưa hấu', '25000', 1, NULL, NULL),
(24, 25, 40, 'Cherry', '220000', 1, NULL, NULL),
(25, 26, 18, 'Bắp cải tím', '20000', 2, NULL, NULL),
(26, 28, 18, 'Bắp cải tím', '20000', 2, NULL, NULL),
(27, 29, 42, 'Dưa hấu', '25000', 1, NULL, NULL),
(28, 29, 18, 'Bắp cải tím', '20000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lí', NULL, NULL),
(2, '1', 'Đang chờ xử lí', NULL, NULL),
(3, '1', 'Đang chờ xử lí', NULL, NULL),
(4, '1', 'Đang chờ xử lí', NULL, NULL),
(5, '1', 'Đang chờ xử lí', NULL, NULL),
(6, '1', 'Đang chờ xử lí', NULL, NULL),
(7, '1', 'Đang chờ xử lí', NULL, NULL),
(8, '1', 'Đang chờ xử lí', NULL, NULL),
(9, '1', 'Đang chờ xử lí', NULL, NULL),
(10, '2', 'Đang chờ xử lí', NULL, NULL),
(11, '2', 'Đang chờ xử lí', NULL, NULL),
(12, '2', 'Đang chờ xử lí', NULL, NULL),
(13, '2', 'Đang chờ xử lí', NULL, NULL),
(14, '2', 'Đang chờ xử lí', NULL, NULL),
(15, '2', 'Đang chờ xử lí', NULL, NULL),
(16, '2', 'Đang chờ xử lí', NULL, NULL),
(17, '2', 'Đang chờ xử lí', NULL, NULL),
(18, '2', 'Đang chờ xử lí', NULL, NULL),
(19, '2', 'Đang chờ xử lí', NULL, NULL),
(20, '2', 'Đang chờ xử lí', NULL, NULL),
(21, '2', 'Đang chờ xử lí', NULL, NULL),
(22, '2', 'Đang chờ xử lí', NULL, NULL),
(23, '2', 'Đang chờ xử lí', NULL, NULL),
(24, '2', 'Đang chờ xử lí', NULL, NULL),
(25, '2', 'Đang chờ xử lí', NULL, NULL),
(26, '2', 'Đang chờ xử lí', NULL, NULL),
(27, '2', 'Đang chờ xử lí', NULL, NULL),
(28, '2', 'Đang chờ xử lí', NULL, NULL),
(29, '2', 'Đang chờ xử lí', NULL, NULL),
(30, '2', 'Đang chờ xử lí', NULL, NULL),
(31, '2', 'Đang chờ xử lí', NULL, NULL),
(32, '2', 'Đang chờ xử lí', NULL, NULL),
(33, '2', 'Đang chờ xử lí', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `brand_id`, `user_id`, `product_name`, `product_desc`, `product_price`, `product_image`, `product_content`, `product_status`, `created_at`, `updated_at`) VALUES
(14, 4, 5, 0, 'Bơ 0.5kg', 'Bơ sáp siêu ngon', '35000', 'bo516.jpg', 'Bơ sáp loại 1', 0, NULL, NULL),
(15, 4, 5, 0, 'Bưởi da xanh 2kg', 'Bưởi da xanh', '80000', 'buoi-da-xanh528.jpg', 'Bưởi da xanh', 0, NULL, NULL),
(16, 4, 5, 0, 'Dưa hấu', 'dưa hấu long an', '30000', 'dua-hau236.jpg', 'dưa hấu long an', 0, NULL, NULL),
(17, 4, 5, 1, 'Chanh Dây', 'chanh day', '35000', 'chanh-day772.jpg', 'cahnh day loại 1', 0, NULL, NULL),
(18, 5, 7, 5, 'Bắp cải tím', '<p>bắp cải t&iacute;m</p>', '20000', 'bap-cai-tim33.jpg', '<p>bắp cải t&iacute;m loại 1</p>', 0, NULL, NULL),
(19, 6, 7, 1, 'Cà rốt đỏ', 'cà rốt đỏ', '25000', 'ca-rot6.jpg', 'Cà rốt đỏ loại 1', 0, NULL, NULL),
(20, 6, 6, 3, 'Bắp Mỹ', 'Bắp Mỹ là một loại thực phẩm được trồng rất nhiều ở khắp nơi trên thế giới. Đây là một loại quả vừa ngon, lại có rất nhiều chất khoáng chất và vitamin. Bắp có thể chế biến thành nhiều món ăn ngon như: cơm bắp, chè bắp, sữa bắp,... bất kỳ món gì cũng tạo nên hương vị tuyệt hảo.\r\n\r\n\r\n\r\nTổ chức Dinh dưỡng thế giới đã có công trình nghiên cứu và phân tích các thành phần dinh dưỡng trong bắp Mỹ. Theo đó, trong loại quả này có chứa đa dạng các khoáng chất và vitamin như protein, calo, đồng, sắt, selen, kẽm, niacin, A, E, C, B3, B1, thiamine…Ngoài ra, trong bắp Mỹ còn chứa cellulose, chất xơ rất tốt cho hệ tiêu hóa. Có thể nói đây là một loại ngũ cốc giàu dưỡng chất, hương vị lại thơm ngon, dễ ăn, dễ chế biến, cùng với màu sắc đẹp mang đến sự bắt mắt, hấp dẫn hơn rất nhiều cho món ăn.\r\nBắp mua về rửa sạch, tùy theo nhu cầu chế biến mà để nguyên trái hoặc tách hạt. Bách Hóa Xanh chỉ bạn mẹo tách hạt bắp cực nhanh, cùng tham khảo nào\r\n\r\nBước 1: Chọn một chiếc thớt lớn để khi cắt hạt bắp, các hạt sẽ không bắn quá xa mà nằm gọn trong thớt để bạn dễ thu thập hạt bắp sau khi cắt.\r\n\r\nBước 2: Dao nên chọn loại có kích cỡ vừa tay, được mài bén và bắp đã lột bỏ vỏ, râu.\r\n\r\nBước 3: Đặt bắp nằm ngang trên thớt rồi 1 tay bạn giữ trái bắp, 1 tay cầm dao cắt tách hạt bắp khỏi cùi. Sau khi cắt 1 mặt của trái bắp, bạn đặt chính mặt đó nằm xuống thớt để tạo độ thăng bằng giúp việc cắt các mặt khác của bắp dễ dàng hơn.\r\n\r\nBước 4: Sau khi cắt, trên dao thường dính sữa bắp, đừng rửa hoặc bỏ sữa này, bạn hãy dùng muỗng/đũa quét sữa bắp vào tô chứa hạt bắp và sử dụng luôn nó để nấu ăn, món ăn sẽ ngon, ngọt và bổ dưỡng hơn nhé.\r\nBắp mua về rửa sạch, tùy theo nhu cầu chế biến mà để nguyên trái hoặc tách hạt. Bách Hóa Xanh chỉ bạn mẹo tách hạt bắp cực nhanh, cùng tham khảo nào\r\n\r\nBước 1: Chọn một chiếc thớt lớn để khi cắt hạt bắp, các hạt sẽ không bắn quá xa mà nằm gọn trong thớt để bạn dễ thu thập hạt bắp sau khi cắt.\r\n\r\nBước 2: Dao nên chọn loại có kích cỡ vừa tay, được mài bén và bắp đã lột bỏ vỏ, râu.\r\n\r\nBước 3: Đặt bắp nằm ngang trên thớt rồi 1 tay bạn giữ trái bắp, 1 tay cầm dao cắt tách hạt bắp khỏi cùi. Sau khi cắt 1 mặt của trái bắp, bạn đặt chính mặt đó nằm xuống thớt để tạo độ thăng bằng giúp việc cắt các mặt khác của bắp dễ dàng hơn.\r\n\r\nBước 4: Sau khi cắt, trên dao thường dính sữa bắp, đừng rửa hoặc bỏ sữa này, bạn hãy dùng muỗng/đũa quét sữa bắp vào tô chứa hạt bắp và sử dụng luôn nó để nấu ăn, món ăn sẽ ngon, ngọt và bổ dưỡng hơn nhé.\r\nBắp mua về rửa sạch, tùy theo nhu cầu chế biến mà để nguyên trái hoặc tách hạt. Bách Hóa Xanh chỉ bạn mẹo tách hạt bắp cực nhanh, cùng tham khảo nào\r\n\r\nBước 1: Chọn một chiếc thớt lớn để khi cắt hạt bắp, các hạt sẽ không bắn quá xa mà nằm gọn trong thớt để bạn dễ thu thập hạt bắp sau khi cắt.\r\n\r\nBước 2: Dao nên chọn loại có kích cỡ vừa tay, được mài bén và bắp đã lột bỏ vỏ, râu.\r\n\r\nBước 3: Đặt bắp nằm ngang trên thớt rồi 1 tay bạn giữ trái bắp, 1 tay cầm dao cắt tách hạt bắp khỏi cùi. Sau khi cắt 1 mặt của trái bắp, bạn đặt chính mặt đó nằm xuống thớt để tạo độ thăng bằng giúp việc cắt các mặt khác của bắp dễ dàng hơn.\r\n\r\nBước 4: Sau khi cắt, trên dao thường dính sữa bắp, đừng rửa hoặc bỏ sữa này, bạn hãy dùng muỗng/đũa quét sữa bắp vào tô chứa hạt bắp và sử dụng luôn nó để nấu ăn, món ăn sẽ ngon, ngọt và bổ dưỡng hơn nhé.\r\nBắp mua về rửa sạch, tùy theo nhu cầu chế biến mà để nguyên trái hoặc tách hạt. Bách Hóa Xanh chỉ bạn mẹo tách hạt bắp cực nhanh, cùng tham khảo nào\r\n\r\nBước 1: Chọn một chiếc thớt lớn để khi cắt hạt bắp, các hạt sẽ không bắn quá xa mà nằm gọn trong thớt để bạn dễ thu thập hạt bắp sau khi cắt.\r\n\r\nBước 2: Dao nên chọn loại có kích cỡ vừa tay, được mài bén và bắp đã lột bỏ vỏ, râu.\r\n\r\nBước 3: Đặt bắp nằm ngang trên thớt rồi 1 tay bạn giữ trái bắp, 1 tay cầm dao cắt tách hạt bắp khỏi cùi. Sau khi cắt 1 mặt của trái bắp, bạn đặt chính mặt đó nằm xuống thớt để tạo độ thăng bằng giúp việc cắt các mặt khác của bắp dễ dàng hơn.\r\n\r\nBước 4: Sau khi cắt, trên dao thường dính sữa bắp, đừng rửa hoặc bỏ sữa này, bạn hãy dùng muỗng/đũa quét sữa bắp vào tô chứa hạt bắp và sử dụng luôn nó để nấu ăn, món ăn sẽ ngon, ngọt và bổ dưỡng hơn nhé.', '32000', 'bap-ngot764.jpg', 'Noi dung sp\r\nBắp Mỹ là một loại thực phẩm được trồng rất nhiều ở khắp nơi trên thế giới. Đây là một loại quả vừa ngon, lại có rất nhiều chất khoáng chất và vitamin. Bắp có thể chế biến thành nhiều món ăn ngon như: cơm bắp, chè bắp, sữa bắp,... bất kỳ món gì cũng tạo nên hương vị tuyệt hảo.\r\nTổ chức Dinh dưỡng thế giới đã có công trình nghiên cứu và phân tích các thành phần dinh dưỡng trong bắp Mỹ. Theo đó, trong loại quả này có chứa đa dạng các khoáng chất và vitamin như protein, calo, đồng, sắt, selen, kẽm, niacin, A, E, C, B3, B1, thiamine…Ngoài ra, trong bắp Mỹ còn chứa cellulose, chất xơ rất tốt cho hệ tiêu hóa. Có thể nói đây là một loại ngũ cốc giàu dưỡng chất, hương vị lại thơm ngon, dễ ăn, dễ chế biến, cùng với màu sắc đẹp mang đến sự bắt mắt, hấp dẫn hơn rất nhiều cho món ăn.', 0, NULL, NULL),
(21, 5, 5, 1, 'Nấm Linh Chi Hàn Quốc', '<p>Sản phẩm được nhập khẩu từ H&agrave;n Quốc. đảm bảo chất lượng ngon v&agrave; tươi khi sử dụng</p>', '50000', 'nam-linh-chi-trang-han-quoc542.jpg', '<p>Sản phẩm được nhập khẩu từ H&agrave;n Quốc. đảm bảo chất lượng ngon v&agrave; tươi khi sử dụng</p>', 0, NULL, NULL),
(22, 5, 8, 1, 'Hoa Atiso Đà Lạt', '<p>Sản phẩm được trồng Ogranic, an to&agrave;n vệ sinh cho người ti&ecirc;u d&ugrave;ng</p>', '75000', 'bong-atiso884.jpg', '<p>Sản phẩm được bảo quản lạnh 10<sup>0</sup>C để đảm bảo sản phẩm tươi ngon nhất khi đến tay người ti&ecirc;u d&ugrave;ng</p>', 0, NULL, NULL),
(23, 6, 8, 5, 'Cà Chua Đà Lạt', '<p>C&agrave; chua thơm ngon an to&agrave;n vệ sinh&nbsp;</p>', '45000', 'ca-chua264.jpg', '<p>C&agrave; chua được trồng ho&agrave;n to&agrave;n tại n&ocirc;ng trại ogranic theo ti&ecirc;u chuẩn đảm bảo an to&agrave;n cho người ti&ecirc;u d&ugrave;ng</p>', 0, NULL, NULL),
(24, 4, 8, 5, 'Việt Quốc', '<p>Việt quất nhập khẩu từ Mỹ l&agrave; một sản phẩm được trồng tại n&ocirc;ng trại ho&agrave;n to&agrave;n sạch</p>', '250000', 'viet-quat-huu-co903.jpg', '<p>sản phẩm được bảo quản lạnh để giữ độ tươi ngon khi đến tay người ti&ecirc;u d&ugrave;ng</p>', 0, NULL, NULL),
(25, 4, 7, 5, 'Thanh Long Ruột Đỏ', '<p>Thanh Long được trồng tại n&ocirc;ng trại B&igrave;nh Thuận nổi tiếng với giống thanh long ruột đỏ ngon, ngọt nhất Việt Nam</p>', '35000', 'thanh-long198.jpg', '<p>Sản phẩm thơm ngon c&oacute; thể chế biết được nhiều loại m&oacute;n ăn thơm ngon bổ dưỡng</p>', 0, NULL, NULL),
(26, 5, 8, 5, 'Tía Tô', '<p>T&iacute;a t&ocirc; miền nam&nbsp;</p>', '15000', 'tia-to644.jpg', '<p>Việt nam</p>', 0, NULL, NULL),
(27, 5, 8, 0, 'Cà Tím', '<p>C&agrave; t&iacute;m việt nam</p>', '20000', 'ca-tim561.jpg', '<p>nhập khẩu</p>', 0, NULL, NULL),
(28, 6, 8, 3, 'Khoai Mỡ', '<p>Khoai mỡ mới</p>', '25000', 'khoai-mo931.jpg', '<p>mới nhập</p>', 0, NULL, NULL),
(29, 6, 8, 3, 'Bông cải trắng', '<p>bong cai&nbsp;</p>', '50000', 'bong-cai-trang976.jpg', '<p>b&ocirc;ng cải trắng</p>', 0, NULL, NULL),
(30, 5, 8, 3, 'Bí Gợ', '<p>B&iacute; gợ</p>', '30000', 'bi-nhat695.jpg', '<p>Việt nam</p>', 0, NULL, NULL),
(31, 5, 8, 5, 'Chanh Vàng', '<p>Chanh v&agrave;ng</p>', '25000', 'chanh-vang120.jpg', '<p>Miền nam</p>', 0, NULL, NULL),
(32, 6, 8, 0, 'Củ Cải Đường', '<p>Củ cải đường</p>', '27000', 'cu-cai-duong825.jpg', '<p>việt nam</p>', 0, NULL, NULL),
(33, 5, 8, 3, 'Cà Tím', '<p>g</p>', '25000', 'ca-tim626.jpg', '<p>g</p>', 0, NULL, NULL),
(34, 5, 8, 3, 'Bầu', '<p>m</p>', '15000', 'bau-xanh392.jpg', '<p>m</p>', 0, NULL, NULL),
(35, 4, 8, 5, 'Hồng Giòn', '<p>ag</p>', '55000', 'hong-gion-han-quoc774.jpg', '<p>ga</p>', 0, NULL, NULL),
(36, 4, 8, 5, 'Bưởi Ruột Đỏ', '<p>Bưởi da xanh l&agrave; c&acirc;y bưởi được nhiều người biết đến với bưởi ngon v&agrave; rất nổi tiếng, với vị thanh, kh&ocirc;ng hạt hoặc &iacute;t hạt, nước vừa phải, m&uacute;i m&agrave;u hồng, dễ lột v&agrave; với những ưu điểm h&agrave;ng đầu như vậy n&ecirc;n bưởi da xanh đang được rất l&agrave; ưu chuộng hiện nay.</p>\r\n\r\n<p>Đặc điểm nổi bật để ph&acirc;n biệt loại n&agrave;y với nhưng giống bưởi kh&aacute;c l&agrave; ruột của bưởi c&oacute; m&agrave;u đỏ tươi, vỏ kh&aacute; mỏng, c&aacute;c con t&eacute;p căng mọng nước. Khi ăn bưởi ta cảm nhận thấy vị ngọt lịm nơi đầu lưỡi.</p>', '55000', 'buoi-da-xanh61.jpg', '<p>Bưởi Ruột đỏ c&oacute; c&aacute;c t&aacute;c dụng</p>\r\n\r\n<p>-Tăng cường hệ thống miễn dịch. H&agrave;m lượng dồi d&agrave;o vitamin C gi&uacute;p ph&ograve;ng ngừa hoặc chống lại những cơn cảm mạo th&ocirc;ng thường.</p>\r\n\r\n<p>-Đốt ch&aacute;y chất b&eacute;o tự nhi&ecirc;n.</p>\r\n\r\n<p>-Tăng cường trao đổi chất.</p>\r\n\r\n<p>-Giải độc gan.</p>\r\n\r\n<p>-Gi&uacute;p đỡ việc chống lại căn bệnh ung thư tuyến tiền liệt.</p>\r\n\r\n<p>-Ngăn ngừa ung thư phổi.</p>\r\n\r\n<p>-Giảm lượng cholesterol xấu.</p>\r\n\r\n<p>-Đối ph&oacute; c&aacute;c bệnh về nướu.</p>', 0, NULL, NULL),
(37, 4, 8, 3, 'Chanh Dây', '<p>d</p>', '44000', 'chanh-day712.jpg', '<p>f</p>', 0, NULL, NULL),
(38, 4, 8, 5, 'Bơ Sáp', '<p>l</p>', '55000', 'bo924.jpg', '<p>l</p>', 0, NULL, NULL),
(39, 4, 8, 5, 'Nho Xanh', '<p>Nho xanh kh&ocirc;ng hạt&nbsp;l&agrave; loại tr&aacute;i c&acirc;y tươi nhập khẩu cao cấp.&nbsp;Đạt ti&ecirc;u chuẩn xuất khẩu to&agrave;n cầu. Bảo quản tươi ngon đến tận tay kh&aacute;ch h&agrave;ng. Quả nho m&agrave;u xanh, d&aacute;ng tr&ograve;n, tr&aacute;i vừa ăn.&nbsp;Vỏ mỏng, kh&ocirc;ng hạt, vị ngọt đậm, thịt chắc, gi&ograve;n, tươi m&aacute;t.</p>\r\n\r\n<p><strong>Nho xanh kh&ocirc;ng hạt</strong>&nbsp;l&agrave; loại&nbsp;trai cay&nbsp;cao cấp, nho c&oacute; đặc điểm tr&aacute;i tr&ograve;n, tươi ngon mọng nước. Kh&ocirc;ng chỉ vậy, quả nho c&ograve;n c&oacute; vị ngọt đậm đ&agrave;, thịt chắc gi&ograve;n, ngon miệng. Sản phẩm nhập khẩu trực tiếp từ Mỹ, đạt ti&ecirc;u chuẩn xuất khẩu to&agrave;n cầu v&agrave; được bảo quản tươi ngon đến tận tay kh&aacute;ch h&agrave;ng.<br />\r\n<br />\r\n<img alt=\"Nho xanh không hạt túi 500g 0\" src=\"https://cdn.tgdd.vn/Products/Images//7578/228875/bhx/files/ItOkjUlqRC6xpSjbQAXz_green%20grapes.jpeg\" /></p>\r\n\r\n<h2><strong>Dinh dưỡng từ quả nho</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Nho chứa nhiều đường&nbsp;tr&aacute;i c&acirc;y, chất xơ, vitamin C, A v&agrave; B rất tốt cho sức khoẻ.</p>\r\n	</li>\r\n	<li>\r\n	<p>Ngừa nguy cơ xơ cứng động mạch, giảm c&aacute;c triệu chứng vi&ecirc;m nhiễm, giảm huyết &aacute;p.</p>\r\n	</li>\r\n	<li>\r\n	<p>Ph&ograve;ng chống c&aacute;c bệnh về tuổi gi&agrave; v&agrave; ngăn ngừa ung thư.</p>\r\n	</li>\r\n	<li>\r\n	<p>Loại&nbsp;tr&aacute;i c&acirc;y&nbsp;n&agrave;y c&ograve;n gi&uacute;p tăng cường hệ miễn dịch, giảm nguy cơ mắc bệnh đường h&ocirc; hấp.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><img alt=\"Nho xanh không hạt túi 500g 3\" src=\"https://cdn.tgdd.vn/Products/Images//7578/222922/bhx/files/wp-1483197025245(1).jpg\" /></p>\r\n\r\n<h2><strong>Lưu &yacute; khi ăn nho</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kh&ocirc;ng n&ecirc;n ăn nho chung với sữa, c&aacute;...sẽ dễ g&acirc;y đau bụng.</p>\r\n	</li>\r\n	<li>\r\n	<p>V&igrave; h&agrave;m lượng đường trong nho kh&aacute; cao n&ecirc;n sử dụng qu&aacute; nhiều.</p>\r\n	</li>\r\n	<li>\r\n	<p>N&ecirc;n rửa sạch bụi bẩn sau đ&oacute; ng&acirc;m khoảng 20 - 30 ph&uacute;t rồi rửa sạch, n&ecirc;n ăn lu&ocirc;n vỏ để hấp thụ chất dinh dưỡng tối đa.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng rửa nho nếu kh&ocirc;ng ăn ngay. Việc rửa nho sẽ l&agrave;m mất lớp phấn tự nhi&ecirc;n bảo vệ quả, khiến nho nhanh ch&iacute;n, nước x&acirc;m nhập v&agrave;o b&ecirc;n trong g&acirc;y thối ủng quả.</p>\r\n	</li>\r\n	<li>\r\n	<p>Cho nho v&agrave;o t&uacute;i nilong v&agrave; buộc k&iacute;n, cất trong ngăn m&aacute;t tủ lạnh ở nhiệt độ từ 0 đến 5 độ C, tr&aacute;nh để gần c&aacute;c thực phẩm g&acirc;y m&ugrave;i như h&agrave;nh, tỏi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;Ăn nho nhiều c&oacute; tốt kh&ocirc;ng? T&aacute;c hại khi ăn nho qu&aacute; nhiều</p>\r\n\r\n<p><img alt=\"Nho xanh không hạt túi 500g 4\" src=\"https://cdn.tgdd.vn/Products/Images//7578/228875/bhx/files/AUTUMNCRISP_Slide-610x289.jpg\" /><br />\r\n<strong>Lưu &yacute;:</strong>&nbsp;Sản phẩm nhận được c&oacute; thể kh&aacute;c với h&igrave;nh ảnh về m&agrave;u sắc v&agrave; số lượng nhưng vẫn đảm bảo về mặt khối lượng v&agrave; chất lượng.</p>', '150000', 'Nho-xanh-khong-hat906.jpg', '<p>Nho</p>', 0, NULL, NULL),
(40, 4, 8, 5, 'Cherry', '<p>ddd</p>', '220000', 'cherry982.jpg', '<p>d</p>', 0, NULL, NULL),
(41, 4, 8, 5, 'Dừa Xiêm', '<p>dfg</p>', '55000', 'dua-nuoc-40.jpg', '<p>fsdf</p>', 0, NULL, NULL),
(42, 4, 8, 5, 'Dưa hấu', '<p>Dưa hấu l&agrave; loại tr&aacute;i c&acirc;y c&oacute; gi&aacute; trị dịnh dưỡng cao, trong 100g dưa hấu c&oacute; chứa: Năng lượng, chất b&eacute;o, thiamin, niacin, vitamin B6, Vitamin C, sắt, phospho.</p>\r\n\r\n<p>&nbsp;</p>', '25000', 'dua-hau859.jpg', '<p>Dưa hấu cung cấp đủ c&aacute;c dưỡng chất gi&uacute;p l&agrave;n da mịn m&agrave;n, d&ugrave;ng dưa hấu ăn ki&ecirc;ng gi&uacute;p giảm c&acirc;n v&agrave; đ&agrave;o thải chất độc ra khỏi cơ thể v&igrave; dưa hấu c&oacute; khả năng l&agrave;m no m&agrave; cung cấp rất &iacute;t năng lượng</p>', 0, NULL, NULL),
(43, 7, 7, 5, 'Lựu Đỏ', '<p>Lựu t&uacute;i 1kg của B&aacute;ch H&oacute;a Xanh được đ&oacute;ng g&oacute;i v&agrave; bảo quản theo những ti&ecirc;u chuẩn nghi&ecirc;m ngặt về vệ sinh v&agrave; an to&agrave;n thực phẩm, đảm bảo về chất lượng,&nbsp;<br />\r\nđộ tươi v&agrave; ngon của thực phẩm, xuất xứ r&otilde; r&agrave;ng. Lựu c&oacute; thể ăn liền cũng c&oacute; thể chế biến c&aacute;c m&oacute;n như nước &eacute;p lựu, sinh tố lựu.<br />\r\nLựu nhập khẩu Trung Quốc được xem l&agrave; một trong những loại tr&aacute;i c&acirc;y nhập khẩu tốt nhất cho sức khỏe.&nbsp;<br />\r\nTrong quả lựu chứa một loạt c&aacute;c hợp chất từ thực vật c&oacute; lợi m&agrave; nhiều loại thực phẩm kh&aacute;c kh&ocirc;ng thể so s&aacute;nh được.&nbsp;<br />\r\nC&aacute;c nghi&ecirc;n cứu đ&atilde; cho thấy rằng ch&uacute;ng c&oacute; nhiều lợi &iacute;ch v&agrave; l&agrave;m giảm nguy cơ mắc nhiều bệnh kh&aacute;c nhau.<br />\r\nVới hương vị thơm ngon đặc trưng v&agrave; gi&aacute; trị dinh dưỡng đối với sức khỏe, lựu đang được rất nhiều chị em ưa chuộng.&nbsp;<br />\r\nTrong quả lựu c&oacute; chứa nhiều chất oxy h&oacute;a, vitamin C v&agrave; nhiều dưỡng chất kh&aacute;c c&oacute; t&aacute;c dụng l&agrave;m đẹp, tăng cường hệ miễn dịch v&agrave; bảo vệ sức khỏe.&nbsp;<br />\r\nC&oacute; thể n&oacute;i, với mức gi&aacute; phải chăng, chất lượng dinh dưỡng cao, lựu kh&ocirc;ng thua k&eacute;m g&igrave; c&aacute;c loại tr&aacute;i c&acirc;y nội địa kh&aacute;c.<br />\r\nC&aacute;ch t&aacute;ch hạt lựu<br />\r\nLựu l&agrave; loại quả dễ ăn nhưng rất kh&oacute; để t&aacute;ch khỏi vỏ, &aacute;p dụng c&aacute;ch t&aacute;ch hạt lựu kh&ocirc;ng n&aacute;t m&agrave; lại nhanh dưới đ&acirc;y nh&eacute;.</p>\r\n\r\n<p>Bước 1: Cắt phần vỏ bao quanh cuống quả v&agrave; loại bỏ n&oacute; đi. Sau đ&oacute; rạch 8 đường dao theo chiều dọc l&ecirc;n tr&ecirc;n vỏ quả lựu, ch&uacute; &yacute; kh&ocirc;ng cắt s&acirc;u xuống ruột quả.</p>\r\n\r\n<p>Bước 2: D&ugrave;ng tay bẻ quả lựu từ trong ra ngo&agrave;i theo vết cắt (giống như khi bẻ lấy m&uacute;i bưởi), tuy nhi&ecirc;n kh&ocirc;ng bẻ hẳn ra. Bạn l&ocirc;i phần c&ugrave;i quả ở giữa ra v&agrave; bỏ đi nh&eacute;.</p>\r\n\r\n<p>Bước 3: Cầm &uacute;p quả lựu bằng một tay v&agrave; một tay kh&aacute;c cầm chiếc th&igrave;a inox m&agrave; đập l&ecirc;n quả lựu cho hạt rơi v&agrave;o trong t&ocirc; lớn. D&ugrave;ng lực vừa đủ chứ đừng đập mạnh qu&aacute;.</p>\r\n\r\n<p>Bước 4: Cuối c&ugrave;ng nhặt bỏ phần xơ c&ograve;n lại l&agrave; được.&nbsp;</p>\r\n\r\n<p>Thức uống ngon, tốt cho sức khỏe<br />\r\nGiảm c&acirc;n eo thon gọn<br />\r\nL&agrave;m dịu dạ d&agrave;y<br />\r\nTăng hệ miễn dịch<br />\r\nDuy tr&igrave; huyết &aacute;p<br />\r\nXem th&ecirc;m: 12 lợi &iacute;ch sức khỏe đến từ quả lựu.<br />\r\nNgo&agrave;i ra, kết hợp lựu với sữa chua cũng l&agrave; một c&aacute;ch gi&uacute;p duy tr&igrave; c&acirc;n nặng v&agrave; hỗ trợ qu&aacute; tr&igrave;nh l&agrave;m đẹp da ở phụ nữ. Th&ecirc;m v&agrave;o đ&oacute;, lựu cũng được sử dụng trong việc trang tr&iacute; c&aacute;c m&ograve;n ăn v&agrave; c&aacute;c loại b&aacute;nh ngọt.</p>\r\n\r\n<p>Lưu &yacute;: Sản phẩm nhận được c&oacute; thể kh&aacute;c với h&igrave;nh ảnh về m&agrave;u sắc v&agrave; số lượng nhưng vẫn đảm bảo về mặt khối lượng v&agrave; chất lượng<br />\r\n&nbsp;</p>', '150000', 'luu-tay-ban-nha927.jpg', '<p>Tr&aacute;i c&oacute; vỏ v&agrave;ng c&oacute; mặt th&igrave; ửng hồng, thịt hạt lựu d&agrave;y v&agrave; mọng nước, ngọt lịm, thịt đỏ au. Đặc biệt hột rất mềm n&ecirc;n ăn được lu&ocirc;n cả hột .</p>\r\n\r\n<p>Lựu rất gi&agrave;u vitamin C v&agrave; chất chống oxy ho&aacute; .</p>\r\n\r\n<p>Lựu vừa đ&aacute;p về n&ecirc;n c&ograve;n rất tươi tr&aacute;i căng b&oacute;ng, nặng tay vỏ gi&ograve;n dễ cắt n&ecirc;n việc t&aacute;ch hạt khỏi vỏ cũng rất dễ d&agrave;ng v&agrave; nhanh ch&oacute;ng.&nbsp;</p>', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_name`, `shipping_email`, `shipping_address`, `shipping_phone`, `shipping_note`, `created_at`, `updated_at`) VALUES
(1, 'binh a', 'binhh@gmail.com', 'can tho', '01231456', 'ddd', NULL, NULL),
(2, 'binh b', 'abc@gmail.com', 'can tho', '0123', 'giao', NULL, NULL),
(3, 'binh a', 'binhh@gmail.com', 'can tho', '01231456', 'don 4', NULL, NULL),
(4, 'thanh binh', 'thanhbinhtest@gmail.com', '360 can tho', '01216901847', 'don hang giao trong gio hanh chinh', NULL, NULL),
(5, 'nhan', 'nhanlol@gmail.com', 'hau giang', '097123123', 'giao nhanh trong ngay', NULL, NULL),
(6, 'binh 1', 'binh1@gmail.com', 'xa phien , hau giang', '01234444', 'giao can than', NULL, NULL),
(7, 'binh 2', 'binhh@gmail.com', 'xa phien , hau giang', '01231456', 'de vo xin nhe tay', NULL, NULL),
(8, 'Ngọc Mai', 'mai@gmal.com', '476,Hem 51, Xuân khánh, ninh kiều, cần thơ', '0701201101', 'hàng là đồ ăn, vui lòng nhẹ tay', NULL, NULL),
(9, 'Nguyễn Văn A', 'abc@gmail.com', '360 Tầm vu, Hưng Lợi, Ninh Kiều, Cần Thơ', '0771231234', 'Cẩn thận hàng hóa dễ vỡ và hư hỏng', NULL, NULL),
(10, 'Trần Văn An', 'abc@gmail.com', '360 Tầm vu, Hưng Lợi, Ninh Kiều, Cần Thơ', '0123123123', 'Cẩn thận hàng hóa dễ hư hỏng', NULL, NULL),
(11, 'thanh binh', 'binhh@gmail.com', 'xa phien , hau giang', '01231456', 'dd', NULL, NULL),
(12, 'binh', '23@gmail.com', 'xa phien , hau giang', '0123566', 'ggg', NULL, NULL),
(13, 'binh', '23@gmail.com', 'can tho', '0123566', 'dd', NULL, NULL),
(14, 'binh', '23@gmail.com', 'can tho', '0123566', 'dd', NULL, NULL),
(15, 'binhd', '2a3@gmail.com', 'can tho', '0123566', 'dd', NULL, NULL),
(16, 'binh', '23@gmail.com', 'xa phien , hau giang', '0123566', 'k co', NULL, NULL),
(17, 'binh', '23@gmail.com', 'xa phien , hau giang', '0123566', 'k co', NULL, NULL),
(18, 'binh', '23@gmail.com', '360 Tầm vu, Hưng Lợi, Ninh Kiều, Cần Thơ', '0123566', 'xin nhe tay', NULL, NULL),
(19, 'binh', '23@gmail.com', 'xa phien , hau giang', '0123566', 'XIN NHEJ TAY', NULL, NULL),
(20, 'binh', '23@gmail.com', '360 Tầm vu, Hưng Lợi, Ninh Kiều, Cần Thơ', '0123566', 'Giao hang nhanh giup em', NULL, NULL),
(21, 'binh', '23@gmail.com', 'xa phien , hau giang', '0123566', 'Giao gio hanh chinh', NULL, NULL),
(22, 'Thanh Bình', 'binh123@gmail.com', '360 Tầm vu, Hưng Lợi, Ninh Kiều, Cần Thơ', '01216901847', 'Giao hàng trong giờ hàng chính', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `store`
--

CREATE TABLE `store` (
  `store_id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_img` varchar(50) NOT NULL,
  `store_email` varchar(50) NOT NULL,
  `store_address` varchar(255) NOT NULL,
  `store_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `store`
--

INSERT INTO `store` (`store_id`, `customer_id`, `store_name`, `store_img`, `store_email`, `store_address`, `store_phone`) VALUES
(1, 1, 'tên cửa hàng 1', '', 'duahau@gmail.com', '360 tầm vu', 123456),
(2, 5, 'Cua hang 2', '', 'chery@gmail.com', '260a1 ninh kieeu can tho', 123456789),
(3, 5, 'Cua hang 3', '', 'chery@gmail.com', '260a1 ninh kieeu can tho', 123456789),
(4, 5, 'Cua hang 3', '', 'chery@gmail.com', '260a1 ninh kieeu can tho', 123456789),
(5, 5, 'Cua hang 3', '', 'chery@gmail.com', '260a1 ninh kieeu can tho', 123456789),
(6, 5, 'Cua hang 4', '', 'bo@gmail.com', '260a1 ninh kieeu hau giang', 123456),
(7, 5, 'Cua hang 4', '', 'bo@gmail.com', '260a1 ninh kieeu hau giang', 123456),
(8, 5, 'Cua hang 5', '', 'bo@gmail.com', '360 kien gian', 1222245),
(9, 5, 'Cua hang 5', '', 'bo@gmail.com', '360 kien gian', 1222245),
(10, 5, 'Cua hang 6', '', 'bo@gmail.com', '360 kien gian', 1222245),
(11, 5, 'Cua hang 7', '', 'bo@gmail.com', 'tien giang', 123123123),
(12, 5, 'Cua hang 8', '', 'bo@gmail.com', 'tien giang', 123123123),
(13, 5, 'Cửa hàng số 9', 'bo.jpg', 'bo@gmail.com', 'tien giang', 123456);

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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'binh', 'binh123@gmail.com', '0000-00-00 00:00:00', '123456', '123', NULL, NULL),
(2, 'thanh binh 3', 'binh3@gmail.com', NULL, '12345', '12345', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

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
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
