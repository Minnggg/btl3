-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2024 lúc 08:43 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `traffic_violation_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `DateTimeAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `DateTimeAdded`) VALUES
('admin', '123', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `driving_licenses`
--

CREATE TABLE `driving_licenses` (
  `license_id` int(11) NOT NULL,
  `license_number` varchar(20) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `date_of_issue` date NOT NULL,
  `date_of_expiry` date NOT NULL,
  `issuing_authority` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `driving_licenses`
--

INSERT INTO `driving_licenses` (`license_id`, `license_number`, `driver_name`, `date_of_issue`, `date_of_expiry`, `issuing_authority`) VALUES
(1, '123456', 'Nguyễn Văn An', '2020-01-01', '2025-01-01', 'Sở GTVT Hà Nội'),
(2, '543210', 'Trần Thị Bình', '2020-01-02', '2025-01-02', 'Sở GTVT Hà Nội'),
(3, '678901', 'Phạm Văn Cường', '2020-01-03', '2025-01-03', 'Sở GTVT Hà Nội'),
(4, '543211', 'Lê Thị Dung', '2020-01-04', '2025-01-04', 'Sở GTVT Hà Nội'),
(5, '678902', 'Trần Văn Đức', '2020-01-05', '2025-01-05', 'Sở GTVT Hà Nội'),
(6, '123457', 'Nguyễn Thị Hương', '2020-01-06', '2025-01-06', 'Sở GTVT Hà Nội'),
(7, '234567', 'Lê Thị Minh', '2020-01-07', '2025-01-07', 'Sở GTVT Hà Nội'),
(8, '345678', 'Phan Văn Khánh', '2020-01-08', '2025-01-08', 'Sở GTVT Hà Nội'),
(9, '456789', 'Đỗ Thị Ngọc', '2020-01-09', '2025-01-09', 'Sở GTVT Hà Nội'),
(10, '567890', 'Hoàng Văn Hải', '2020-01-10', '2025-01-10', 'Sở GTVT Hà Nội'),
(11, '678903', 'Trần Văn Phong', '2020-01-11', '2025-01-11', 'Sở GTVT Hà Nội'),
(12, '789012', 'Phạm Thị Thu', '2020-01-12', '2025-01-12', 'Sở GTVT Hà Nội'),
(13, '890123', 'Nguyễn Văn Long', '2020-01-13', '2025-01-13', 'Sở GTVT Hà Nội'),
(14, '901234', 'Lê Văn Tân', '2020-01-14', '2025-01-14', 'Sở GTVT Hà Nội'),
(15, '012345', 'Phan Thị Lan', '2020-01-15', '2025-01-15', 'Sở GTVT Hà Nội'),
(16, '123458', 'Đỗ Văn Hùng', '2020-01-16', '2025-01-16', 'Sở GTVT Hà Nội'),
(17, '234568', 'Hoàng Thị Hằng', '2020-01-17', '2025-01-17', 'Sở GTVT Hà Nội'),
(18, '345679', 'Trần Văn Thanh', '2020-01-18', '2025-01-18', 'Sở GTVT Hà Nội'),
(19, '456780', 'Phạm Văn Quân', '2020-01-19', '2025-01-19', 'Sở GTVT Hà Nội'),
(20, '567891', 'Nguyễn Thị Lan', '2020-01-20', '2025-01-20', 'Sở GTVT Hà Nội'),
(21, '678904', 'Lê Văn Sơn', '2020-01-21', '2025-01-21', 'Sở GTVT Hà Nội'),
(22, '789013', 'Phan Văn Tiến', '2020-01-22', '2025-01-22', 'Sở GTVT Hà Nội'),
(23, '890124', 'Đỗ Văn Vinh', '2020-01-23', '2025-01-23', 'Sở GTVT Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `traffic_reports`
--

CREATE TABLE `traffic_reports` (
  `report_id` int(11) NOT NULL,
  `license_plate` varchar(20) NOT NULL,
  `license_number` varchar(20) NOT NULL,
  `report_date` date NOT NULL,
  `violation_type` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `fine` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `is_payment_done` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `traffic_reports`
--

INSERT INTO `traffic_reports` (`report_id`, `license_plate`, `license_number`, `report_date`, `violation_type`, `location`, `fine`, `notes`, `is_payment_done`) VALUES
(2, '30B-54321', '543210', '2020-01-02', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(3, '29A-23456', '543210', '2020-01-02', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 1),
(4, '30B-65432', '543211', '2020-01-04', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 0),
(5, '29A-34567', '678901', '2020-01-03', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(6, '30B-76543', '678902', '2020-01-05', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(7, '29A-45678', '543211', '2020-01-04', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(8, '30B-87654', '123456', '2020-01-01', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(9, '29A-56789', '678902', '2020-01-05', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(10, '30B-98765', '678903', '2020-01-06', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(11, '29A-67890', '123457', '2020-01-06', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(12, '30B-09876', '234567', '2020-01-07', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(13, '29A-78901', '890123', '2020-01-13', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(14, '30B-10987', '901234', '2020-01-14', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(15, '29A-89012', '123458', '2020-01-08', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(16, '30B-21098', '234568', '2020-01-17', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(17, '29A-90123', '678904', '2020-01-21', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(18, '30B-32109', '456789', '2020-01-09', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(19, '29A-01234', '678904', '2020-01-21', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(20, '30B-43210', '567891', '2020-01-15', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(21, '29A-12346', '890123', '2020-01-13', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(22, '30B-54320', '789012', '2020-01-12', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(23, '29A-23457', '567890', '2020-01-10', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(24, '30B-65431', '678903', '2020-01-11', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(25, '29A-34568', '567891', '2020-01-15', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(26, '30B-76542', '789013', '2020-01-22', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(27, '29A-45679', '890124', '2020-01-23', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(28, '30B-87653', '234567', '2020-01-07', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(29, '29A-56780', '567890', '2020-01-10', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(30, '30B-98764', '234568', '2020-01-17', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(31, '29A-67891', '234568', '2020-01-17', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(32, '30B-09875', '789012', '2020-01-12', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(33, '29A-78902', '890123', '2020-01-13', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(34, '30B-10986', '123458', '2020-01-08', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(35, '29A-89013', '567891', '2020-01-15', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(36, '30B-21097', '789013', '2020-01-22', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1),
(37, '29A-90124', '567891', '2020-01-15', 'Không đội mũ bảo hiểm', 'Hà Nội', 100000, NULL, 0),
(38, '30B-32108', '890124', '2020-01-23', 'Vượt đèn đỏ', 'Hà Nội', 200000, NULL, 1),
(39, '29A-01235', '567891', '2020-01-15', 'Chạy quá tốc độ', 'Hà Nội', 150000, NULL, 0),
(40, '30B-43210', '234568', '2020-01-17', 'Đi sai làn đường', 'Hà Nội', 120000, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `license_plate` varchar(20) DEFAULT NULL,
  `owner_name` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `vehicle_type` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `license_plate`, `owner_name`, `registration_date`, `vehicle_type`, `color`) VALUES
(1, '29A-12345', 'Nguyễn Văn An', '2020-01-01', 'Xe máy', 'Đen'),
(2, '30B-54321', 'Nguyễn Văn An', '2020-01-01', 'Ô tô', 'Trắng'),
(3, '29A-23456', 'Trần Thị Bình', '2020-01-02', 'Xe máy', 'Đỏ'),
(4, '30B-65432', 'Trần Thị Bình', '2020-01-02', 'Ô tô', 'Xanh'),
(5, '29A-34567', 'Phạm Văn Cường', '2020-01-03', 'Xe máy', 'Xanh'),
(6, '30B-76543', 'Phạm Văn Cường', '2020-01-03', 'Ô tô', 'Vàng'),
(7, '29A-45678', 'Lê Thị Dung', '2020-01-04', 'Xe máy', 'Trắng'),
(8, '30B-87654', 'Lê Thị Dung', '2020-01-04', 'Ô tô', 'Đen'),
(9, '29A-56789', 'Trần Văn Đức', '2020-01-05', 'Xe máy', 'Đen'),
(10, '30B-98765', 'Trần Văn Đức', '2020-01-05', 'Ô tô', 'Đỏ'),
(11, '29A-67890', 'Nguyễn Thị Hương', '2020-01-06', 'Xe máy', 'Vàng'),
(12, '30B-09876', 'Nguyễn Thị Hương', '2020-01-06', 'Ô tô', 'Trắng'),
(13, '29A-78901', 'Lê Thị Minh', '2020-01-07', 'Xe máy', 'Xanh'),
(14, '30B-10987', 'Lê Thị Minh', '2020-01-07', 'Ô tô', 'Xanh'),
(15, '29A-89012', 'Phan Văn Khánh', '2020-01-08', 'Xe máy', 'Đen'),
(16, '30B-21098', 'Phan Văn Khánh', '2020-01-08', 'Ô tô', 'Đen'),
(17, '29A-90123', 'Đỗ Thị Ngọc', '2020-01-09', 'Xe máy', 'Đỏ'),
(18, '30B-32109', 'Đỗ Thị Ngọc', '2020-01-09', 'Ô tô', 'Vàng'),
(19, '29A-01234', 'Hoàng Văn Hải', '2020-01-10', 'Xe máy', 'Vàng'),
(20, '30B-43210', 'Hoàng Văn Hải', '2020-01-10', 'Ô tô', 'Trắng'),
(21, '29A-12346', 'Trần Văn Phong', '2020-01-11', 'Xe máy', 'Trắng'),
(22, '30B-54320', 'Trần Văn Phong', '2020-01-11', 'Ô tô', 'Xanh'),
(23, '29A-23457', 'Phạm Thị Thu', '2020-01-12', 'Xe máy', 'Đen'),
(24, '30B-65431', 'Phạm Thị Thu', '2020-01-12', 'Ô tô', 'Đỏ'),
(25, '29A-34568', 'Nguyễn Văn Long', '2020-01-13', 'Xe máy', 'Đỏ'),
(26, '30B-76542', 'Nguyễn Văn Long', '2020-01-13', 'Ô tô', 'Vàng'),
(27, '29A-45679', 'Lê Văn Tân', '2020-01-14', 'Xe máy', 'Xanh'),
(28, '30B-87653', 'Lê Văn Tân', '2020-01-14', 'Ô tô', 'Trắng'),
(29, '29A-56780', 'Phan Thị Lan', '2020-01-15', 'Xe máy', 'Trắng'),
(30, '30B-98764', 'Phan Thị Lan', '2020-01-15', 'Ô tô', 'Đen'),
(31, '29A-67891', 'Đỗ Văn Hùng', '2020-01-16', 'Xe máy', 'Đen'),
(32, '30B-09875', 'Đỗ Văn Hùng', '2020-01-16', 'Ô tô', 'Xanh'),
(33, '29A-78902', 'Hoàng Thị Hằng', '2020-01-17', 'Xe máy', 'Đỏ'),
(34, '30B-10986', 'Hoàng Thị Hằng', '2020-01-17', 'Ô tô', 'Vàng'),
(35, '29A-89013', 'Trần Văn Thanh', '2020-01-18', 'Xe máy', 'Xanh'),
(36, '30B-21097', 'Trần Văn Thanh', '2020-01-18', 'Ô tô', 'Đỏ'),
(37, '29A-90124', 'Phạm Văn Quân', '2020-01-19', 'Xe máy', 'Trắng'),
(38, '30B-32108', 'Phạm Văn Quân', '2020-01-19', 'Ô tô', 'Đen'),
(39, '29A-01235', 'Nguyễn Thị Lan', '2020-01-20', 'Xe máy', 'Đen');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `driving_licenses`
--
ALTER TABLE `driving_licenses`
  ADD PRIMARY KEY (`license_id`),
  ADD UNIQUE KEY `license_number` (`license_number`);

--
-- Chỉ mục cho bảng `traffic_reports`
--
ALTER TABLE `traffic_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Chỉ mục cho bảng `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD UNIQUE KEY `license_plate` (`license_plate`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `driving_licenses`
--
ALTER TABLE `driving_licenses`
  MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `traffic_reports`
--
ALTER TABLE `traffic_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
