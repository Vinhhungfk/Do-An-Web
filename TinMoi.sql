-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 30, 2019 lúc 08:12 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id2997261_dbb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `TinMoi`
--

CREATE TABLE `TinMoi` (
  `id` int(11) NOT NULL,
  `ten` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `TinMoi`
--

INSERT INTO `TinMoi` (`id`, `ten`, `noidung`, `time`, `img`) VALUES
(10, 'admin', 'yêu lắm vào rồi xẽ nhận ra đôi khi cô đơn lại là hay', '27/11/2019 - 22:13:26', ''),
(11, 'admin', 'Tip:Chúc các bạn có một buổi tối vui vẻ, hạnh phúc bên gia đình và bạn bè!\r\n• Truy cập Trong ngày: 1\r\n• Tổng cộng: 2562', '27/11/2019 - 23:06', ''),
(12, 'admin', 'Trong hành trình tìm kiếm tình yêu, hạnh phúc chỉ đến với những ai biết kiên nhẫn, biết lắng nghe, biết nỗ lực và dũng cảm đương đầu với thử thách.\r\nMây trên đồng bay mãi – An Dĩ Mạch', '28/11/2019 - 15:01', ''),
(13, 'admin', 'ALO', '30/11/2019 - 14:49', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `TinMoi`
--
ALTER TABLE `TinMoi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `TinMoi`
--
ALTER TABLE `TinMoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
