-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2024 lúc 06:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoestore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietquyenchucnang`
--

CREATE TABLE `chitietquyenchucnang` (
  `MaQuyen` int(11) NOT NULL,
  `MaCN` int(11) NOT NULL,
  `HD` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucnang`
--

CREATE TABLE `chucnang` (
  `MaCN` int(11) NOT NULL,
  `TenCN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctpn`
--

CREATE TABLE `ctpn` (
  `MaPN` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaNhap` int(11) DEFAULT NULL,
  `SizeSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctpn`
--

INSERT INTO `ctpn` (`MaPN`, `MaSP`, `SoLuong`, `GiaNhap`, `SizeSP`) VALUES
(1, 1, 2, 500000, 37),
(1, 1, 2, 500000, 38),
(1, 1, 2, 500000, 39),
(1, 1, 2, 500000, 40),
(1, 1, 2, 500000, 41),
(1, 2, 2, 500000, 39),
(1, 2, 2, 500000, 40),
(1, 2, 2, 500000, 41),
(1, 2, 2, 500000, 42),
(1, 2, 2, 500000, 43),
(1, 3, 1, 500000, 33),
(1, 3, 1, 500000, 34),
(1, 3, 1, 500000, 35),
(1, 3, 1, 500000, 36),
(1, 3, 1, 500000, 37),
(1, 3, 1, 500000, 38),
(1, 3, 1, 500000, 39),
(1, 3, 1, 500000, 40),
(1, 3, 1, 500000, 41),
(1, 3, 1, 500000, 42),
(1, 4, 5, 500000, 40),
(1, 4, 5, 500000, 43),
(2, 5, 2, 500000, 37),
(2, 5, 2, 500000, 38),
(2, 5, 2, 500000, 39),
(2, 5, 2, 500000, 40),
(2, 5, 2, 500000, 41),
(2, 6, 4, 500000, 30),
(2, 6, 6, 500000, 35),
(2, 6, 6, 500000, 36),
(2, 6, 6, 500000, 37),
(2, 6, 10, 500000, 39),
(2, 6, 12, 500000, 40),
(2, 6, 2, 500000, 41),
(2, 6, 2, 500000, 42),
(3, 7, 10, 500000, 39),
(3, 8, 10, 500000, 38),
(3, 9, 10, 500000, 37),
(3, 10, 10, 500000, 40),
(3, 11, 10, 500000, 40),
(3, 12, 10, 500000, 40),
(3, 13, 10, 500000, 34),
(3, 14, 10, 500000, 32),
(4, 15, 10, 500000, 37),
(4, 16, 10, 500000, 37),
(5, 17, 1, 500000, 31),
(5, 17, 1, 500000, 32),
(5, 17, 1, 500000, 33),
(5, 17, 1, 500000, 34),
(5, 17, 1, 500000, 35),
(5, 17, 1, 500000, 36),
(5, 17, 1, 500000, 37),
(5, 17, 1, 500000, 38),
(5, 17, 1, 500000, 39),
(5, 17, 1, 500000, 43),
(6, 18, 10, 500000, 43),
(6, 19, 10, 500000, 43),
(6, 20, 10, 500000, 43),
(6, 21, 2, 500000, 37),
(6, 21, 2, 500000, 40),
(6, 21, 2, 500000, 41),
(6, 21, 2, 500000, 42),
(6, 21, 2, 500000, 43),
(6, 22, 10, 500000, 43),
(6, 23, 10, 500000, 43),
(6, 24, 10, 500000, 43),
(6, 25, 10, 500000, 43),
(6, 26, 10, 500000, 43),
(6, 27, 10, 500000, 43),
(7, 28, 20, 500000, 43),
(7, 29, 20, 500000, 43),
(7, 30, 20, 500000, 43),
(7, 31, 20, 500000, 43),
(7, 32, 20, 500000, 43),
(7, 33, 20, 500000, 43),
(7, 34, 20, 500000, 43),
(7, 35, 20, 500000, 43),
(7, 39, 10, 500000, 42),
(7, 39, 20, 500000, 43),
(8, 1, 5, 500000, 43),
(8, 2, 5, 500000, 43),
(8, 3, 5, 500000, 43),
(8, 4, 5, 500000, 43),
(8, 5, 5, 500000, 43),
(8, 6, 5, 500000, 43),
(8, 7, 5, 500000, 43),
(8, 8, 5, 500000, 43),
(8, 9, 5, 500000, 43),
(8, 10, 1, 500000, 33),
(8, 10, 1, 500000, 34),
(8, 10, 1, 500000, 35),
(8, 10, 1, 500000, 36),
(8, 10, 1, 500000, 37),
(8, 11, 5, 500000, 43),
(8, 12, 1, 500000, 37),
(8, 12, 1, 500000, 38),
(8, 12, 1, 500000, 39),
(8, 12, 1, 500000, 40),
(8, 12, 1, 500000, 43),
(9, 20, 10, 500000, 37),
(9, 21, 10, 500000, 37),
(9, 22, 10, 500000, 37),
(9, 23, 10, 500000, 37),
(9, 28, 5, 500000, 37),
(9, 29, 5, 500000, 37),
(9, 30, 5, 500000, 37),
(10, 31, 10, 500000, 38),
(10, 32, 10, 500000, 37),
(10, 33, 10, 500000, 38),
(10, 34, 10, 500000, 37),
(10, 35, 5, 500000, 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctpx`
--

CREATE TABLE `ctpx` (
  `MaPX` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `SizeSP` int(11) NOT NULL,
  `trangThai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctpx`
--

INSERT INTO `ctpx` (`MaPX`, `MaSP`, `SoLuong`, `GiaBan`, `SizeSP`, `trangThai`) VALUES
(1, 37, 1, 1440000, 43, 1),
(1, 38, 1, 752000, 43, 1),
(2, 2, 1, 950000, 41, 1),
(2, 3, 1, 720000, 42, 1),
(2, 4, 2, 880000, 40, 1),
(2, 5, 1, 1040000, 40, 1),
(3, 6, 1, 760000, 41, 1),
(3, 7, 2, 920000, 42, 1),
(4, 2, 2, 950000, 37, 1),
(5, 20, 1, 768000, 39, 1),
(5, 21, 1, 1440000, 38, 1),
(6, 18, 1, 1240000, 43, 1),
(6, 30, 1, 1240000, 40, 1),
(6, 30, 1, 1240000, 43, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctsizesp`
--

CREATE TABLE `ctsizesp` (
  `MaSP` int(11) NOT NULL,
  `SizeSP` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctsizesp`
--

INSERT INTO `ctsizesp` (`MaSP`, `SizeSP`, `SoLuong`) VALUES
(1, 30, 11),
(1, 31, 24),
(1, 32, 2),
(1, 33, 33),
(1, 34, 40),
(1, 35, 19),
(1, 36, 10),
(1, 37, 36),
(1, 38, 6),
(1, 39, 10),
(1, 40, 0),
(1, 41, 27),
(1, 42, 32),
(1, 43, 46),
(2, 30, 9),
(2, 31, 36),
(2, 32, 25),
(2, 33, 18),
(2, 34, 38),
(2, 35, 1),
(2, 36, 23),
(2, 37, 23),
(2, 38, 18),
(2, 39, 45),
(2, 40, 9),
(2, 41, 47),
(2, 42, 30),
(2, 43, 36),
(3, 30, 24),
(3, 31, 46),
(3, 32, 29),
(3, 33, 7),
(3, 34, 18),
(3, 35, 21),
(3, 36, 42),
(3, 37, 48),
(3, 38, 37),
(3, 39, 21),
(3, 40, 46),
(3, 41, 0),
(3, 42, 41),
(3, 43, 44),
(4, 30, 41),
(4, 31, 35),
(4, 32, 16),
(4, 33, 10),
(4, 34, 9),
(4, 35, 27),
(4, 36, 2),
(4, 37, 45),
(4, 38, 44),
(4, 39, 13),
(4, 40, 37),
(4, 41, 33),
(4, 42, 20),
(4, 43, 27),
(5, 30, 34),
(5, 31, 30),
(5, 32, 47),
(5, 33, 47),
(5, 34, 13),
(5, 35, 40),
(5, 36, 39),
(5, 37, 46),
(5, 38, 26),
(5, 39, 5),
(5, 40, 31),
(5, 41, 35),
(5, 42, 50),
(5, 43, 9),
(6, 30, 20),
(6, 31, 50),
(6, 32, 50),
(6, 33, 36),
(6, 34, 1),
(6, 35, 37),
(6, 36, 20),
(6, 37, 5),
(6, 38, 38),
(6, 39, 43),
(6, 40, 47),
(6, 41, 40),
(6, 42, 7),
(6, 43, 21),
(7, 30, 39),
(7, 31, 6),
(7, 32, 50),
(7, 33, 36),
(7, 34, 20),
(7, 35, 34),
(7, 36, 19),
(7, 37, 11),
(7, 38, 42),
(7, 39, 20),
(7, 40, 22),
(7, 41, 49),
(7, 42, 39),
(7, 43, 30),
(8, 30, 23),
(8, 31, 15),
(8, 32, 47),
(8, 33, 20),
(8, 34, 7),
(8, 35, 8),
(8, 36, 26),
(8, 37, 44),
(8, 38, 44),
(8, 39, 16),
(8, 40, 18),
(8, 41, 19),
(8, 42, 10),
(8, 43, 31),
(9, 30, 41),
(9, 31, 0),
(9, 32, 9),
(9, 33, 0),
(9, 34, 7),
(9, 35, 20),
(9, 36, 7),
(9, 37, 0),
(9, 38, 46),
(9, 39, 35),
(9, 40, 26),
(9, 41, 17),
(9, 42, 28),
(9, 43, 25),
(10, 30, 4),
(10, 31, 33),
(10, 32, 35),
(10, 33, 11),
(10, 34, 34),
(10, 35, 30),
(10, 36, 33),
(10, 37, 9),
(10, 38, 34),
(10, 39, 3),
(10, 40, 29),
(10, 41, 43),
(10, 42, 2),
(10, 43, 46),
(11, 30, 39),
(11, 31, 50),
(11, 32, 27),
(11, 33, 41),
(11, 34, 30),
(11, 35, 24),
(11, 36, 48),
(11, 37, 47),
(11, 38, 42),
(11, 39, 48),
(11, 40, 30),
(11, 41, 40),
(11, 42, 21),
(11, 43, 29),
(12, 30, 18),
(12, 31, 2),
(12, 32, 7),
(12, 33, 22),
(12, 34, 10),
(12, 35, 46),
(12, 36, 20),
(12, 37, 10),
(12, 38, 1),
(12, 39, 18),
(12, 40, 34),
(12, 41, 40),
(12, 42, 32),
(12, 43, 25),
(13, 30, 25),
(13, 31, 15),
(13, 32, 23),
(13, 33, 22),
(13, 34, 18),
(13, 35, 0),
(13, 36, 48),
(13, 37, 47),
(13, 38, 31),
(13, 39, 9),
(13, 40, 36),
(13, 41, 50),
(13, 42, 12),
(13, 43, 17),
(14, 30, 12),
(14, 31, 6),
(14, 32, 40),
(14, 33, 48),
(14, 34, 36),
(14, 35, 9),
(14, 36, 35),
(14, 37, 22),
(14, 38, 19),
(14, 39, 16),
(14, 40, 18),
(14, 41, 46),
(14, 42, 18),
(14, 43, 45),
(15, 30, 30),
(15, 31, 14),
(15, 32, 50),
(15, 33, 34),
(15, 34, 36),
(15, 35, 15),
(15, 36, 20),
(15, 37, 28),
(15, 38, 17),
(15, 39, 46),
(15, 40, 29),
(15, 41, 45),
(15, 42, 48),
(15, 43, 29),
(16, 30, 8),
(16, 31, 19),
(16, 32, 19),
(16, 33, 13),
(16, 34, 24),
(16, 35, 20),
(16, 36, 42),
(16, 37, 5),
(16, 38, 19),
(16, 39, 30),
(16, 40, 0),
(16, 41, 35),
(16, 42, 31),
(16, 43, 34),
(17, 30, 20),
(17, 31, 43),
(17, 32, 45),
(17, 33, 41),
(17, 34, 25),
(17, 35, 18),
(17, 36, 17),
(17, 37, 47),
(17, 38, 3),
(17, 39, 32),
(17, 40, 2),
(17, 41, 23),
(17, 42, 1),
(17, 43, 13),
(18, 30, 16),
(18, 31, 14),
(18, 32, 17),
(18, 33, 3),
(18, 34, 0),
(18, 35, 14),
(18, 36, 32),
(18, 37, 1),
(18, 38, 11),
(18, 39, 46),
(18, 40, 46),
(18, 41, 36),
(18, 42, 44),
(18, 43, 21),
(19, 30, 38),
(19, 31, 9),
(19, 32, 13),
(19, 33, 26),
(19, 34, 50),
(19, 35, 32),
(19, 36, 29),
(19, 37, 34),
(19, 38, 37),
(19, 39, 11),
(19, 40, 14),
(19, 41, 16),
(19, 42, 41),
(19, 43, 45),
(20, 30, 35),
(20, 31, 27),
(20, 32, 38),
(20, 33, 27),
(20, 34, 21),
(20, 35, 6),
(20, 36, 27),
(20, 37, 2),
(20, 38, 12),
(20, 39, 47),
(20, 40, 32),
(20, 41, 23),
(20, 42, 32),
(20, 43, 18),
(21, 30, 0),
(21, 31, 37),
(21, 32, 23),
(21, 33, 37),
(21, 34, 44),
(21, 35, 13),
(21, 36, 21),
(21, 37, 46),
(21, 38, 45),
(21, 39, 17),
(21, 40, 48),
(21, 41, 32),
(21, 42, 37),
(21, 43, 43),
(22, 30, 2),
(22, 31, 40),
(22, 32, 47),
(22, 33, 17),
(22, 34, 17),
(22, 35, 15),
(22, 36, 41),
(22, 37, 2),
(22, 38, 33),
(22, 39, 46),
(22, 40, 48),
(22, 41, 30),
(22, 42, 1),
(22, 43, 27),
(23, 30, 23),
(23, 31, 29),
(23, 32, 7),
(23, 33, 2),
(23, 34, 16),
(23, 35, 19),
(23, 36, 5),
(23, 37, 10),
(23, 38, 13),
(23, 39, 46),
(23, 40, 20),
(23, 41, 22),
(23, 42, 3),
(23, 43, 25),
(24, 30, 22),
(24, 31, 19),
(24, 32, 14),
(24, 33, 23),
(24, 34, 4),
(24, 35, 15),
(24, 36, 34),
(24, 37, 29),
(24, 38, 21),
(24, 39, 32),
(24, 40, 24),
(24, 41, 26),
(24, 42, 18),
(24, 43, 23),
(25, 30, 5),
(25, 31, 19),
(25, 32, 27),
(25, 33, 22),
(25, 34, 37),
(25, 35, 20),
(25, 36, 14),
(25, 37, 2),
(25, 38, 48),
(25, 39, 23),
(25, 40, 40),
(25, 41, 2),
(25, 42, 18),
(25, 43, 33),
(26, 30, 14),
(26, 31, 39),
(26, 32, 34),
(26, 33, 25),
(26, 34, 50),
(26, 35, 43),
(26, 36, 30),
(26, 37, 17),
(26, 38, 47),
(26, 39, 48),
(26, 40, 19),
(26, 41, 29),
(26, 42, 50),
(26, 43, 31),
(27, 30, 28),
(27, 31, 34),
(27, 32, 18),
(27, 33, 44),
(27, 34, 22),
(27, 35, 30),
(27, 36, 0),
(27, 37, 33),
(27, 38, 4),
(27, 39, 47),
(27, 40, 26),
(27, 41, 40),
(27, 42, 9),
(27, 43, 14),
(28, 30, 45),
(28, 31, 20),
(28, 32, 19),
(28, 33, 43),
(28, 34, 50),
(28, 35, 50),
(28, 36, 39),
(28, 37, 2),
(28, 38, 24),
(28, 39, 1),
(28, 40, 45),
(28, 41, 21),
(28, 42, 49),
(28, 43, 26),
(29, 30, 27),
(29, 31, 25),
(29, 32, 0),
(29, 33, 43),
(29, 34, 4),
(29, 35, 50),
(29, 36, 24),
(29, 37, 9),
(29, 38, 22),
(29, 39, 27),
(29, 40, 16),
(29, 41, 37),
(29, 42, 1),
(29, 43, 12),
(30, 30, 35),
(30, 31, 40),
(30, 32, 30),
(30, 33, 43),
(30, 34, 34),
(30, 35, 26),
(30, 36, 47),
(30, 37, 3),
(30, 38, 27),
(30, 39, 28),
(30, 40, 41),
(30, 41, 2),
(30, 42, 7),
(30, 43, 26),
(31, 30, 32),
(31, 31, 33),
(31, 32, 6),
(31, 33, 8),
(31, 34, 32),
(31, 35, 17),
(31, 36, 1),
(31, 37, 47),
(31, 38, 7),
(31, 39, 48),
(31, 40, 14),
(31, 41, 17),
(31, 42, 0),
(31, 43, 42),
(32, 30, 11),
(32, 31, 47),
(32, 32, 17),
(32, 33, 19),
(32, 34, 13),
(32, 35, 3),
(32, 36, 2),
(32, 37, 28),
(32, 38, 0),
(32, 39, 28),
(32, 40, 16),
(32, 41, 12),
(32, 42, 29),
(32, 43, 48),
(33, 30, 36),
(33, 31, 34),
(33, 32, 47),
(33, 33, 15),
(33, 34, 12),
(33, 35, 5),
(33, 36, 16),
(33, 37, 17),
(33, 38, 34),
(33, 39, 39),
(33, 40, 30),
(33, 41, 37),
(33, 42, 8),
(33, 43, 29),
(34, 30, 20),
(34, 31, 22),
(34, 32, 43),
(34, 33, 16),
(34, 34, 1),
(34, 35, 13),
(34, 36, 31),
(34, 37, 30),
(34, 38, 43),
(34, 39, 2),
(34, 40, 29),
(34, 41, 18),
(34, 42, 8),
(34, 43, 0),
(35, 30, 18),
(35, 31, 29),
(35, 32, 17),
(35, 33, 26),
(35, 34, 37),
(35, 35, 7),
(35, 36, 47),
(35, 37, 35),
(35, 38, 3),
(35, 39, 0),
(35, 40, 48),
(35, 41, 24),
(35, 42, 8),
(35, 43, 31),
(36, 30, 48),
(36, 31, 16),
(36, 32, 40),
(36, 33, 12),
(36, 34, 34),
(36, 35, 13),
(36, 36, 18),
(36, 37, 49),
(36, 38, 28),
(36, 39, 41),
(36, 40, 45),
(36, 41, 9),
(36, 42, 46),
(36, 43, 35),
(37, 30, 3),
(37, 31, 18),
(37, 32, 18),
(37, 33, 35),
(37, 34, 8),
(37, 35, 1),
(37, 36, 18),
(37, 37, 19),
(37, 38, 44),
(37, 39, 40),
(37, 40, 29),
(37, 41, 27),
(37, 42, 19),
(37, 43, 38),
(38, 30, 26),
(38, 31, 22),
(38, 32, 31),
(38, 33, 11),
(38, 34, 20),
(38, 35, 19),
(38, 36, 4),
(38, 37, 26),
(38, 38, 18),
(38, 39, 37),
(38, 40, 36),
(38, 41, 3),
(38, 42, 50),
(38, 43, 49),
(39, 30, 8),
(39, 31, 27),
(39, 32, 31),
(39, 33, 34),
(39, 34, 1),
(39, 35, 37),
(39, 36, 18),
(39, 37, 6),
(39, 38, 28),
(39, 39, 12),
(39, 40, 44),
(39, 41, 11),
(39, 42, 43),
(39, 43, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `MaDanhGia` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `MaKH` int(11) DEFAULT NULL,
  `TenDanhGia` varchar(30) DEFAULT NULL,
  `NoiDungDanhGia` varchar(255) DEFAULT NULL,
  `ThoiGianDanhGia` date DEFAULT NULL,
  `SoTimDanhGia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`MaDanhGia`, `MaSP`, `MaKH`, `TenDanhGia`, `NoiDungDanhGia`, `ThoiGianDanhGia`, `SoTimDanhGia`) VALUES
(1, 1, 1, 'Sản phẩm chất lượng', 'Giày này rất phong cách và thoải mái. Chất lượng và thiết kế đều tuyệt vời. Màu sắc và kiểu dáng rất hợp thời trang. Tuy nhiên, kích cỡ có vẻ nhỏ hơn so với các sản phẩm khác.', '2023-12-03', 5),
(2, 1, 2, 'Phong cách và Thoải mái', 'Sự kết hợp tinh tế giữa thiết kế và chất lượng là điểm mạnh của sản phẩm.', '2023-11-04', 5),
(3, 1, 3, 'Phong Cách và Quyến Rũ', 'Đôi giày này vừa đẹp vừa chất, hoàn hảo cho mọi dịp.', '2023-07-05', 5),
(4, 2, 4, 'Sản phẩm đẹp', 'Cảm giác tự tin và thoải mái mỗi khi mang là điều tôi thích nhất.', '2021-03-06', 4),
(5, 2, 5, 'Không chỗ chê', 'Sản phẩm này thực sự là điểm nhấn trong bộ sưu tập giày hàng ngày của tôi.', '2024-07-05', 5),
(6, 3, 1, 'Lôi Cuốn và Đẹp Mắt', 'Sự hấp dẫn của đôi giày này là không thể phủ nhận.', '2024-11-11', 4),
(7, 3, 3, 'Vẻ Đẹp Tinh Tế', 'Kiểu dáng hiện đại và màu sắc bắt mắt, dễ kết hợp với nhiều trang phục.', '2023-12-12', 5),
(8, 4, 4, 'Đẹp Tuyệt Vời', 'Chất liệu và hoàn thiện rất chất lượng, tạo cảm giác thoải mái khi mang.', '2022-03-03', 5),
(9, 5, 6, 'Sức Hút Mạnh M', 'Đôi giày này rất ấn tượng với vẻ đẹp tinh tế và sang trọng.', '2022-04-23', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `Mafb` int(11) NOT NULL,
  `SoSao` int(11) DEFAULT NULL,
  `NoiDung` varchar(500) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL,
  `TenNgFb` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`Mafb`, `SoSao`, `NoiDung`, `Image`, `TenNgFb`) VALUES
(1, 5, '\"Mình không thể hạnh phúc hơn với đôi giày này! Chất liệu tuyệt vời, thiết kế đẹp mắt và rất thoải mái khi mang. Mình đã nhận được nhiều lời khen từ bạn bè về sự phong cách của giày. Sẽ tiếp tục ủng hộ thương hiệu này trong tương lai!\"', 'fb1.png', 'DONAL TRUMP'),
(2, 5, '\"Đôi giày mới của mình đơn giản là tuyệt vời! Chúng không chỉ làm cho bàn chân mình cảm thấy thoải mái hơn mà còn giúp tôn lên phong cách riêng của mình. Chắc chắn sẽ giới thiệu cho bạn bè và gia đình mình biết về thương hiệu này.\"', 'fb2.jpg', 'BILL GATES'),
(3, 5, '\"Mua giày online lần đầu tiên và thật may mắn khi chọn được đôi giày tuyệt vời như thế này! Chất liệu cao cấp và cảm giác chân thật sự thoải mái. Những ngày dạo chơi hay đi làm đều trở nên dễ dàng hơn với đôi giày này.\"', 'fb3.jpg', 'MR BEAN'),
(4, 5, '\"Mình không thể hạnh phúc hơn với đôi giày này! Chất liệu tuyệt vời, thiết kế đẹp mắt và rất thoải mái khi mang. Mình đã nhận được nhiều lời khen từ bạn bè về sự phong cách của giày. Sẽ tiếp tục ủng hộ thương hiệu này trong tương lai!\"', 'fb4.jpg', 'OBAMA'),
(5, 5, 'Đôi giày hoàn toàn đáng tiền! Chất liệu và thiết kế không chỉ đẹp mắt mà còn rất bền. Mình đã đi dạo một hồi dài và đôi giày vẫn giữ form tốt. Cảm ơn thương hiệu đã mang đến cho mình một sản phẩm tuyệt vời như vậy!\"', 'fb5.jpg', 'ELON MUSK');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `IDHinhAnh` int(11) NOT NULL,
  `SCR_ANH` varchar(100) DEFAULT NULL,
  `MaSP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `TenLoai`) VALUES
(1, 'Basketball'),
(2, 'Gym'),
(3, 'Running'),
(4, 'Tennis'),
(5, 'Badminton');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(20) DEFAULT NULL,
  `DiaChiNCC` varchar(255) DEFAULT NULL,
  `SdtNCC` varchar(10) DEFAULT NULL,
  `EmailNCC` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChiNCC`, `SdtNCC`, `EmailNCC`) VALUES
(1, 'Vina Giày', '', '0392921111', 'ncc1@gmail.com'),
(2, 'An Ba', '', '0231231233', 'ncc2@gmail.com'),
(3, 'Giày Việt', '', '0938212311', 'ncc3@gmail.com'),
(4, 'Giày Sài Gòn', '', '039123123', 'ncc4@gmail.com'),
(5, 'Sahara', '', '0909988972', 'ncc5@gmail.com'),
(6, 'Bitis', '', '0293123123', 'ncc6@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieu`
--

CREATE TABLE `nhanhieu` (
  `MaNhanHieu` int(20) NOT NULL,
  `TenNhanHieu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieu`
--

INSERT INTO `nhanhieu` (`MaNhanHieu`, `TenNhanHieu`) VALUES
(2, 'Nike'),
(3, 'Adidas'),
(4, 'Jordan'),
(5, 'New Balance'),
(6, 'Vans'),
(7, 'Puma');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` int(11) NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `NgayNhap` date DEFAULT NULL,
  `MaNCC` int(11) DEFAULT NULL,
  `TongTien` int(11) DEFAULT NULL,
  `TongSoLuong` int(11) NOT NULL,
  `TinhTrangDH` varchar(20) NOT NULL,
  `Trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

INSERT INTO `phieunhap` (`MaPN`, `MaNV`, `NgayNhap`, `MaNCC`, `TongTien`, `TongSoLuong`, `TinhTrangDH`, `Trangthai`) VALUES
(1, 3, '2023-03-03', 1, 20000000, 40, 'Đã nhận', 1),
(2, 3, '2023-04-23', 2, 30000000, 60, 'Chưa nhận', 1),
(3, 4, '2023-05-13', 3, 40000000, 80, 'Chưa nhận', 1),
(4, 4, '2023-07-05', 4, 10000000, 20, 'Đã nhận', 1),
(5, 4, '2023-09-13', 5, 5000000, 10, 'Đã hận', 1),
(6, 4, '2023-01-24', 6, 50000000, 100, 'Chưa nhận', 1),
(7, 5, '2023-02-18', 2, 100000000, 200, 'Chưa nhận', 1),
(8, 5, '2023-05-29', 3, 30000000, 60, 'Đã nhận', 1),
(9, 5, '2023-12-01', 4, 27500000, 55, 'Chưa nhận', 1),
(10, 3, '2023-11-03', 5, 22500000, 45, 'Đã nhận', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuxuat`
--

CREATE TABLE `phieuxuat` (
  `MaPX` int(11) NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `MaKH` int(11) DEFAULT NULL,
  `NgayDatHang` date DEFAULT NULL,
  `TinhTrangDH` varchar(20) DEFAULT NULL,
  `TongTien` int(11) NOT NULL,
  `TongSoLuong` int(11) NOT NULL,
  `trangThai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phieuxuat`
--

INSERT INTO `phieuxuat` (`MaPX`, `MaNV`, `MaKH`, `NgayDatHang`, `TinhTrangDH`, `TongTien`, `TongSoLuong`, `trangThai`) VALUES
(1, 3, 1, '2024-03-04', 'Tạm giữ', 2192000, 2, 1),
(2, 3, 2, '2024-03-02', 'Đang xử lý', 4470000, 4, 1),
(3, 3, 3, '2024-02-14', 'Tạm giữ', 2600000, 3, 1),
(4, 3, 4, '2024-01-24', 'Đã hoàn thành', 1900000, 2, 1),
(5, 3, 5, '2024-02-09', 'Đã hoàn thành', 2208000, 2, 1),
(6, 3, 6, '2024-04-30', 'Đã hoàn thành', 3560000, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `TenQuyen`) VALUES
(1, 'Admin'),
(2, 'Quản lý'),
(3, 'Nhân viên'),
(4, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(30) DEFAULT NULL,
  `SoSaoDanhGia` int(11) DEFAULT NULL,
  `SoLuotDanhGia` int(11) DEFAULT NULL,
  `MoTa` varchar(100) DEFAULT NULL,
  `HinhAnh` varchar(100) DEFAULT NULL,
  `SanPhamMoi` int(11) DEFAULT NULL,
  `SanPhamHot` int(11) DEFAULT NULL,
  `GiaCu` int(11) DEFAULT NULL,
  `GiaMoi` int(11) DEFAULT NULL,
  `SoLuongDaBan` int(11) DEFAULT NULL,
  `MaNhanHieu` int(20) DEFAULT NULL,
  `MaLoai` int(11) NOT NULL,
  `hide` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `SoSaoDanhGia`, `SoLuotDanhGia`, `MoTa`, `HinhAnh`, `SanPhamMoi`, `SanPhamHot`, `GiaCu`, `GiaMoi`, `SoLuongDaBan`, `MaNhanHieu`, `MaLoai`, `hide`) VALUES
(1, 'NIKE AiRFORD 1', 5, 13, 'Mô tả Nike Air Max 270', 'pd-1.png', 1, 0, 1000000, 800000, 50, 2, 1, 1),
(2, 'Nike Ultraboost', 5, 13, 'Mô tả Adidas Ultraboost', 'pd-2.png', 1, 0, 1200000, 950000, 30, 2, 3, 1),
(3, 'JORDAN Air Force', 4, 38, 'Mô tả Puma Speed 500', 'pd-3.png', 1, 0, 900000, 720000, 60, 4, 5, 1),
(4, 'Nike PG 1', 5, 19, 'Mô tả Nike Air Jordan 1', 'pd-4.png', 1, 0, 1100000, 880000, 40, 2, 2, 1),
(5, 'NIKE AIR ZOOM PEGASUS 34', 5, 4, 'Mô tả Adidas Superstar', 'pd-5.png', 1, 0, 1300000, 1040000, 35, 2, 3, 1),
(6, 'Air Jordan 1 Mid GS', 4, 10, 'Mô tả Puma Future Rider', 'pd-6.png', 1, 1, 950000, 760000, 55, 4, 1, 1),
(7, 'NIKE Revolution 5', 5, 10, 'Mô tả Nike Air Force 1', 'pd-7.png', 1, 0, 1150000, 920000, 25, 2, 3, 1),
(8, 'JORDAN Retro 1', 4, 4, 'Mô tả Puma RS-X3', 'pd-9.png', 1, 0, 980000, 784000, 50, 4, 3, 1),
(9, 'PUMA RS-X', 5, 23, 'Mô tả Nike Revolution 5', 'pd-10.png', 1, 0, 1050000, 840000, 45, 7, 1, 1),
(10, 'NEW Balance 997H', 5, 12, 'Mô tả Adidas Yeezy Boost 350', 'pd-11.png', 1, 0, 1600000, 1280000, 30, 5, 4, 1),
(11, 'VANS Authentic', 4, 30, 'Mô tả Puma Hybrid Fuego', 'pd-12.png', 1, 0, 970000, 776000, 60, 6, 4, 1),
(12, 'NIKE Air Max', 5, 56, 'Mô tả Nike Air Max 97', 'pd-13.png', 0, 1, 1250000, 1000000, 70, 2, 5, 1),
(13, 'ADIDAS NMD R1', 5, 65, 'Mô tả Adidas Questar Flow', 'pd-14.png', 0, 1, 1350000, 1080000, 15, 3, 4, 1),
(14, 'JORDAN Air Force 1', 4, 32, 'Mô tả Puma Future Rider Twofold', 'pd-15.png', 1, 0, 940000, 752000, 40, 4, 3, 1),
(15, 'PUMA Suede', 5, 8, 'Mô tả Nike Air Zoom Pegasus', 'pd-16.png', 0, 1, 1450000, 1160000, 25, 7, 1, 1),
(16, 'NEW Balance 574S', 5, 4, 'Mô tả Adidas Stan Smith', 'pd-17.png', 0, 1, 1700000, 1360000, 10, 5, 5, 1),
(17, 'VANS Era', 4, 4, 'Mô tả Puma Deviate Nitro', 'pd-18.png', 0, 0, 920000, 736000, 50, 6, 5, 1),
(18, 'NIKE React Infinity', 5, 5, 'Mô tả Nike Air Max Plus', 'pd-19.png', 0, 1, 1550000, 1240000, 15, 2, 4, 1),
(19, 'ADIDAS Stan Smith', 5, 6, 'Mô tả Adidas Ultraboost 21', 'pd-20.png', 0, 1, 1750000, 1400000, 23, 3, 3, 1),
(20, 'NIKE Air Max 270', 5, 7, 'Mô tả Puma Cali Sport', 'pd-21.png', 0, 0, 960000, 768000, 35, 2, 2, 1),
(21, 'ADIDAS Ultraboost 21', 5, 23, 'Mô tả Nike Air Jordan 4', 'pd-22.png', 0, 1, 1800000, 1440000, 30, 3, 2, 1),
(22, 'JORDAN Retro 4', 4, 17, 'Mô tả Adidas NMD R1', 'pd-23.png', 0, 1, 1650000, 1320000, 25, 4, 4, 1),
(23, 'PUMA RS-X Bold', 4, 40, 'Mô tả Puma Liberate Nitro', 'pd-24.png', 0, 0, 990000, 792000, 45, 7, 5, 1),
(24, 'NEW Balance 997', 5, 10, 'Mô tả Nike Blazer Mid', 'pd-25.png', 0, 1, 1350000, 1080000, 30, 5, 5, 1),
(25, 'VANS Sk8-Hi', 5, 4, 'Mô tả Adidas Superstar', 'pd-26.png', 0, 1, 1700000, 1360000, 15, 6, 1, 1),
(26, 'NIKE Blazer Mid', 4, 5, 'Mô tả Puma Suede Classic', 'pd-27.png', 1, 0, 950000, 760000, 40, 2, 1, 1),
(27, 'ADIDAS Nite Jogger', 5, 20, 'Mô tả Nike Air Max 2090', 'pd-28.png', 0, 1, 1400000, 1120000, 25, 3, 4, 1),
(28, 'JORDAN Retro 11', 5, 16, 'Mô tả Adidas Stan Smith', 'pd-29.png', 0, 1, 1600000, 1280000, 20, 4, 3, 1),
(29, 'PUMA Suede Classic', 4, 30, 'Mô tả Puma Liberate Nitro', 'pd-30.png', 1, 0, 960000, 768000, 35, 7, 1, 1),
(30, 'NEW Balance 327', 5, 17, 'Mô tả Nike Air Max 97', 'pd-31.png', 0, 1, 1450000, 1160000, 30, 5, 5, 1),
(31, 'VANS Slip-On', 5, 13, 'Mô tả Adidas Ultraboost 21', 'pd-32.png', 0, 1, 1800000, 1440000, 15, 6, 4, 1),
(32, 'NIKE Air Force 1', 4, 15, 'Mô tả Puma RS-X3', 'pd-33.png', 0, 0, 970000, 776000, 30, 2, 3, 1),
(33, 'ADIDAS Stan Smith', 5, 23, 'Mô tả Nike Air Zoom Pegasus', 'pd-34.png', 0, 0, 1500000, 1200000, 25, 3, 5, 1),
(34, 'JORDAN Retro 6', 5, 14, 'Mô tả Adidas Yeezy Boost 350', 'pd-35.png', 0, 0, 1700000, 1360000, 50, 4, 4, 1),
(35, 'PUMA Cali', 4, 45, 'Mô tả Puma Hybrid Fuego', 'pd-36.png', 0, 0, 980000, 784000, 55, 7, 1, 1),
(36, 'NEW Balance 574', 5, 27, 'Mô tả Nike Air Zoom Pegasus', 'pd-37.png', 0, 0, 1600000, 1280000, 30, 5, 2, 1),
(37, 'VANS Old Skool', 5, 23, 'Mô tả Adidas Stan Smith', 'pd-38.png', 0, 0, 1800000, 1440000, 25, 6, 2, 1),
(38, 'NIKE React Presto', 4, 45, 'Mô tả Puma Deviate Nitro', 'pd-39.png', 1, 0, 940000, 752000, 50, 2, 2, 1),
(39, 'ADIDAS Falcon', 5, 16, 'Mô tả Nike Air Max Plus', 'pd-40.png', 1, 0, 1900000, 1520000, 20, 3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `SettingID` int(11) NOT NULL,
  `TenSetting` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizesp`
--

CREATE TABLE `sizesp` (
  `SizeSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizesp`
--

INSERT INTO `sizesp` (`SizeSP`) VALUES
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(255) NOT NULL,
  `MatKhau` varchar(255) DEFAULT NULL,
  `NgayTaoTK` date DEFAULT NULL,
  `MaQuyen` int(11) DEFAULT NULL,
  `Avt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `MatKhau`, `NgayTaoTK`, `MaQuyen`, `Avt`) VALUES
('admin1', '12345', '2024-03-16', 1, 'avt-7.png'),
('admin2', '12345', '2024-03-16', 1, 'avt-8.png'),
('nhanvien1', '12345', '2024-03-16', 3, 'avt-9.png'),
('nhanvien2', '12345', '2024-03-16', 3, 'avt-10.png'),
('nhanvien3', '12345', '2024-03-16', 3, 'avt-11.png'),
('quanly1', '12345', '2024-03-16', 2, 'avt-12.png'),
('user1', '12345', '2024-03-16', 4, 'avt-1.png'),
('user2', '12345', '2024-03-16', 4, 'avt-2.png'),
('user3', '12345', '2024-03-16', 4, 'avt-3.png'),
('user4', '12345', '2024-03-16', 4, 'avt-4.png'),
('user5', '12345', '2024-03-16', 4, 'avt-5.png'),
('user6', '12345', '2024-03-16', 4, 'avt-6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Ma` int(11) NOT NULL,
  `TenDangNhap` varchar(255) DEFAULT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `GioiTinh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Ma`, `TenDangNhap`, `HoTen`, `NgaySinh`, `SDT`, `Email`, `DiaChi`, `GioiTinh`) VALUES
(1, 'admin1', 'Hồ Đỗ Hoàng Khang', '2003-03-02', '0987362123', 'hodohoangkhang@gmail.com', '123 Đường ABC, Quận XYZ, Thành phố HCM', 1),
(2, 'admin2', 'Tăng Hồng Nguyên Đán', '2003-06-06', '0982731231', 'tanghongnguyendan@gmail', '101 Đường GHI, Quận PQR, Thành phố HCM', 1),
(3, 'nhanvien1', 'Vỹ Apu', '2003-10-12', '0123456789', 'levy@gmail.com', '333 Đường UVW, Quận YZA, Thành phố HCM', 1),
(4, 'nhanvien2', 'Khánh Duy', '2003-02-04', '0987655432', 'khanhduy@gmail.com', '555 Đường HIJ, Quận KLM, Thành phố HCM', 1),
(5, 'nhanvien3', 'Lê Vạn An', '2003-04-23', '0999888312', 'vanan@gmail', '999 Đường FGH, Quận IJK, Thành phố HCM', 1),
(6, 'quanly1', 'Trần Văn A', '2003-12-13', '0982731231', 'tranvana@gmail', '1010 Đường LMN, Quận OPQ, Thành phố HCM', 1),
(7, 'user1', 'Nguyễn Sin', '2009-02-09', '0982731231', 'nguyensin@gmail', '1412 Đường GHI, Quận PQR, Thành phố HCM', 1),
(8, 'user2', 'Trấn Thành', '1999-02-23', '0123123123', 'tranthanh@gmail', '1515 Đường VAS, Quận 5, Thành phố HCM', 1),
(9, 'user3', 'Mika Tô', '2000-06-06', '0987873231', 'mikato@gmail', '1441 Đường LT, Quận TB, Thành phố HCM', 1),
(10, 'user4', 'Trường Giang', '2001-10-06', '0122112312', 'truonggiang@gmail', '113 Đường GHI, Quận 8, Thành phố HCM', 1),
(11, 'user5', 'Nam Em', '1992-05-10', '0191919212', 'namem@gmail', '1022 Đường QKS, Quận 4, Thành phố HCM', 0),
(12, 'user6', 'Nhã Phương', '1999-07-08', '0191231231', 'nhaphuong@gmail', '104 Đường HKA, Quận 2, Thành phố HCM', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietquyenchucnang`
--
ALTER TABLE `chitietquyenchucnang`
  ADD PRIMARY KEY (`MaQuyen`,`MaCN`),
  ADD KEY `fk_nqnctnq` (`MaCN`);

--
-- Chỉ mục cho bảng `chucnang`
--
ALTER TABLE `chucnang`
  ADD PRIMARY KEY (`MaCN`);

--
-- Chỉ mục cho bảng `ctpn`
--
ALTER TABLE `ctpn`
  ADD PRIMARY KEY (`MaPN`,`MaSP`,`SizeSP`),
  ADD KEY `CTN_fk_MaSP` (`MaSP`),
  ADD KEY `SizeSP` (`SizeSP`);

--
-- Chỉ mục cho bảng `ctpx`
--
ALTER TABLE `ctpx`
  ADD PRIMARY KEY (`MaPX`,`MaSP`,`SizeSP`),
  ADD KEY `fk_MaSP_CTPX` (`MaSP`),
  ADD KEY `SizeSP` (`SizeSP`),
  ADD KEY `SizeSP_2` (`SizeSP`),
  ADD KEY `MaPX` (`MaPX`);

--
-- Chỉ mục cho bảng `ctsizesp`
--
ALTER TABLE `ctsizesp`
  ADD PRIMARY KEY (`MaSP`,`SizeSP`),
  ADD KEY `fk_ct_size_masp` (`SizeSP`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaDanhGia`),
  ADD KEY `fk_MaSPDG` (`MaSP`),
  ADD KEY `fk_MaKh` (`MaKH`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Mafb`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`IDHinhAnh`),
  ADD KEY `fk_MaSPHA` (`MaSP`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  ADD PRIMARY KEY (`MaNhanHieu`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `fk_MaNCC_PN` (`MaNCC`),
  ADD KEY `fk_MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD PRIMARY KEY (`MaPX`),
  ADD KEY `fk_px_MaNV` (`MaNV`),
  ADD KEY `fk_px_MaKh` (`MaKH`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaNhanHieu` (`MaNhanHieu`),
  ADD KEY `MaDanhMuc` (`MaLoai`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`SettingID`);

--
-- Chỉ mục cho bảng `sizesp`
--
ALTER TABLE `sizesp`
  ADD PRIMARY KEY (`SizeSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`),
  ADD KEY `fk_maq_tk` (`MaQuyen`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Ma`),
  ADD KEY `TenDangNhap` (`TenDangNhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chucnang`
--
ALTER TABLE `chucnang`
  MODIFY `MaCN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaDanhGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Mafb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `IDHinhAnh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  MODIFY `MaNhanHieu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MaPN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phieuxuat`
--
ALTER TABLE `phieuxuat`
  MODIFY `MaPX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietquyenchucnang`
--
ALTER TABLE `chitietquyenchucnang`
  ADD CONSTRAINT `fk_nqnctnq` FOREIGN KEY (`MaCN`) REFERENCES `chucnang` (`MaCN`),
  ADD CONSTRAINT `fk_tdnctnq` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `ctpn`
--
ALTER TABLE `ctpn`
  ADD CONSTRAINT `CTN_fk_MaPN` FOREIGN KEY (`MaPN`) REFERENCES `phieunhap` (`MaPN`),
  ADD CONSTRAINT `CTN_fk_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `ctpn_ibfk_1` FOREIGN KEY (`SizeSP`) REFERENCES `sizesp` (`SizeSP`);

--
-- Các ràng buộc cho bảng `ctpx`
--
ALTER TABLE `ctpx`
  ADD CONSTRAINT `ctpx_ibfk_1` FOREIGN KEY (`SizeSP`) REFERENCES `sizesp` (`SizeSP`),
  ADD CONSTRAINT `fk_MaSP_CTPX` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `fk_MaxpX` FOREIGN KEY (`MaPX`) REFERENCES `phieuxuat` (`MaPX`);

--
-- Các ràng buộc cho bảng `ctsizesp`
--
ALTER TABLE `ctsizesp`
  ADD CONSTRAINT `fk_ct_size_masp` FOREIGN KEY (`SizeSP`) REFERENCES `sizesp` (`SizeSP`),
  ADD CONSTRAINT `fk_mactspsiz` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `user` (`Ma`),
  ADD CONSTRAINT `fk_MaSPDG` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_MaSPHA` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `fk_MaNCC_PN` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`),
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `user` (`Ma`);

--
-- Các ràng buộc cho bảng `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD CONSTRAINT `phieuxuat_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `user` (`Ma`),
  ADD CONSTRAINT `phieuxuat_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `user` (`Ma`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LoaiSP` FOREIGN KEY (`MaLoai`) REFERENCES `loaisp` (`MaLoai`),
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaNhanHieu`) REFERENCES `nhanhieu` (`MaNhanHieu`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_maq_tk` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
