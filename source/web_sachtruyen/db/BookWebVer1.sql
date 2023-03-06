-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 25, 2023 lúc 04:04 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiettusach`
--

CREATE TABLE `chitiettusach` (
  `TuSachID` int(11) NOT NULL,
  `SachID` int(11) NOT NULL,
  `NgayThem` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

CREATE TABLE `chuong` (
  `ID` int(11) NOT NULL,
  `SachID` int(11) NOT NULL,
  `TenChuong` varchar(50) DEFAULT NULL,
  `ChiSoChuong` int(11) DEFAULT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goidocsach`
--

CREATE TABLE `goidocsach` (
  `ID` int(11) NOT NULL,
  `TenGoiDoc` varchar(50) DEFAULT NULL,
  `GiaTri` int(11) DEFAULT NULL,
  `ThoiLuong` int(11) DEFAULT NULL,
  `MoTa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muagoidoc`
--

CREATE TABLE `muagoidoc` (
  `ID` int(11) NOT NULL,
  `NguoiDungID` int(11) NOT NULL,
  `GoiDocSachID` int(11) NOT NULL,
  `NgayMua` date DEFAULT current_timestamp(),
  `NgayHetHan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muasach`
--

CREATE TABLE `muasach` (
  `NguoiDungID` int(11) NOT NULL,
  `SachID` int(11) NOT NULL,
  `NgayMua` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` int(11) NOT NULL,
  `TenDN` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SoDienThoai` varchar(50) DEFAULT NULL,
  `DiemTichLuy` int(11) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `VaiTro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `ID` int(11) NOT NULL,
  `TenSach` varchar(50) DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `TacGia` varchar(50) DEFAULT NULL,
  `NgayHoanThanh` date DEFAULT NULL,
  `NgaySangTac` date DEFAULT current_timestamp(),
  `SoChuong` int(11) DEFAULT NULL,
  `URLBiaSach` varchar(255) DEFAULT NULL,
  `GiaSach` int(11) DEFAULT NULL,
  `TheLoai` varchar(50) DEFAULT NULL,
  `MoTa` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`ID`, `TenSach`, `TrangThai`, `TacGia`, `NgayHoanThanh`, `NgaySangTac`, `SoChuong`, `URLBiaSach`, `GiaSach`, `TheLoai`, `MoTa`) VALUES
(0, 'Những tháng năm vội vã', 'Hoàn thành', 'Minh Nguyệt Vô Ưu', '0000-00-00', '2023-02-25', 77, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.cdv_novel/0/0/0/248.jpg?v=1&time=1677320608&w=720&h=720', 10000, 'Tình cảm lãng mạn', 'Việt Nam vào giai đoạn nửa thuộc địa nửa phong kiến, thời kỳ nhiễu nhương, dở dở ương ương, con người vẫy vùng giữa cái mới và cái cũ. Trong tư tưởng giằng co đó thì những mối tình đồng giới bị xem là thứ bệnh truyền nhiễm cần được chữa trị. Hai người đàn ông sinh nhầm thời. Vì định kiến xã hội mà họ phải bỏ lỡ nhau đến bảy năm. Năm tháng vội vã, thời gian như thoi đưa. Trong bảy năm đó, họ có tất cả nhưng lại không thể có nhau…\r\n“Minh khẽ lắc đầu. Thèm chè gì chứ? Chẳng qua hắn đang thèm một số chuyện của quá khứ mà thôi. Nơi đây từng là chỗ hẹn hò của hắn. Từng có người cùng hắn đêm mười sáu trăng tròn ngồi trên xuồng ăn chè, kể nhau nghe chuyện phong hoa tuyết nguyệt, nói về những dự tính của tương lai. Đáng tiếc, tất cả đều không thành. Bởi vì trong cái tương lai đó, hai người đã không còn bên nhau nữa.”'),
(1, 'Hệ thống tình yêu hoàn mỹ', 'Hoàn thành', 'RinBaBa', '0000-00-00', '2023-02-25', 60, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.cdv_novel/0/0/0/310.jpg?v=6&time=1676255681&w=720&h=720', 10000, 'Truyện dài', 'Hai mươi năm cuộc đời Hữu Tinh chưa từng yêu đương. Vào năm mười tám tuổi, cậu nghe giới thiệu về Hệ Thống Tình Yêu Hoàn Mỹ giúp tìm bạn trai và cho người tham gia một trải nghiệm yêu đương như ý muốn trong vòng sáu tháng.\r\nVào sinh nhật hai mươi tuổi, Hữu Tinh đủ tuổi tham gia hệ thống. Nhưng yêu đương chưa thấy, chỉ thấy phiền phức.\r\n“Hệ thống chết tiệt, tao muốn đổi thế giới” Hữu Tinh hét lên.\r\n[Xin lỗi, bạn chỉ có thể thoát khỏi hệ thống khi qua sáu tháng. Chúc bạn vui vẻ!]\r\n“Sắp tới, em muốn chúng ta chơi trò gì?” Thừa Hải cười nhẹ hỏi.\r\n“Chơi cái đầu anh, nửa tháng tôi cũng chịu không nổi chứ nói gì sáu tháng.”\r\nCậu ngửa mặt nhìn trời rồi hét to: “Ta muốn thoát khỏi HỆ THỐNG HOÀN MỸ.”'),
(2, 'Tiệm bánh hạnh phúc', 'Hoàn thành', 'RinBaBa', '0000-00-00', '2023-02-25', 1, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.cdv_novel/0/0/0/660.jpg?v=1&time=1675823339&w=720&h=720', 10000, 'Truyện ngắn', 'Hôm ấy, trước trung tâm thương mại đông đúc có chàng trai đứng đợi một người.\r\nGiữa trời đông vào giờ tan tầm, trên đường phố tấp nập người qua lại có không ít người tò mò ngoái lại nhìn chàng trai trẻ rồi bất giác mỉm cười vì hình ảnh ấm áp và đẹp đẽ. Các cô gái trẻ đi cùng nhau thì trầm trồ không dứt. Các cô ước gì có một người bạn trai như thế...'),
(3, 'Thế giới em nhìn thấy', 'Hoàn thành', 'RinBaBa', '0000-00-00', '2023-02-25', 1, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.cdv_novel/0/0/0/658.jpg?v=1&time=1675823170&w=720&h=720', 10000, 'Truyện ngắn', 'Giữa ánh đèn rực rỡ, em tỏa sáng như một nữ thần. Em dâng lời ca tiếng hát đến cho mọi người, nhưng thứ họ quan tâm lại là hình thể, là quần áo và những chỗ hở hang trên người em. Họ gào thét nghệ danh của em nhưng mấy ai biết tên thật của em là gì. Thứ họ quan tâm là lớp mặt nạ bên ngoài được đắp nặn bằng truyền thông, bằng tiền, bằng những bài viết sáo rỗng...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tusach`
--

CREATE TABLE `tusach` (
  `ID` int(11) NOT NULL,
  `NguoiDungID` int(11) NOT NULL,
  `SoLuongSach` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiettusach`
--
ALTER TABLE `chitiettusach`
  ADD PRIMARY KEY (`TuSachID`,`SachID`),
  ADD KEY `FK_ChiTietTuSach_1` (`SachID`);

--
-- Chỉ mục cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Chuong_0` (`SachID`);

--
-- Chỉ mục cho bảng `goidocsach`
--
ALTER TABLE `goidocsach`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `muagoidoc`
--
ALTER TABLE `muagoidoc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_MuaGoiDoc_0` (`NguoiDungID`),
  ADD KEY `FK_MuaGoiDoc_1` (`GoiDocSachID`);

--
-- Chỉ mục cho bảng `muasach`
--
ALTER TABLE `muasach`
  ADD PRIMARY KEY (`NguoiDungID`,`SachID`),
  ADD KEY `FK_MuaSach_1` (`SachID`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tusach`
--
ALTER TABLE `tusach`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_TuSach_0` (`NguoiDungID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiettusach`
--
ALTER TABLE `chitiettusach`
  ADD CONSTRAINT `FK_ChiTietTuSach_0` FOREIGN KEY (`TuSachID`) REFERENCES `tusach` (`ID`),
  ADD CONSTRAINT `FK_ChiTietTuSach_1` FOREIGN KEY (`SachID`) REFERENCES `sach` (`ID`);

--
-- Các ràng buộc cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `FK_Chuong_0` FOREIGN KEY (`SachID`) REFERENCES `sach` (`ID`);

--
-- Các ràng buộc cho bảng `muagoidoc`
--
ALTER TABLE `muagoidoc`
  ADD CONSTRAINT `FK_MuaGoiDoc_0` FOREIGN KEY (`NguoiDungID`) REFERENCES `nguoidung` (`ID`),
  ADD CONSTRAINT `FK_MuaGoiDoc_1` FOREIGN KEY (`GoiDocSachID`) REFERENCES `goidocsach` (`ID`);

--
-- Các ràng buộc cho bảng `muasach`
--
ALTER TABLE `muasach`
  ADD CONSTRAINT `FK_MuaSach_0` FOREIGN KEY (`NguoiDungID`) REFERENCES `nguoidung` (`ID`),
  ADD CONSTRAINT `FK_MuaSach_1` FOREIGN KEY (`SachID`) REFERENCES `sach` (`ID`);

--
-- Các ràng buộc cho bảng `tusach`
--
ALTER TABLE `tusach`
  ADD CONSTRAINT `FK_TuSach_0` FOREIGN KEY (`NguoiDungID`) REFERENCES `nguoidung` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
