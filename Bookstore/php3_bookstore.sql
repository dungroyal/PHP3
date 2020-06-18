-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2020 lúc 03:55 AM
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
-- Cấu trúc bảng cho bảng `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantity` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantity` int(2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `dateOrder` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `idUser`, `idProduct`, `quantity`, `status`, `dateOrder`) VALUES
(10, 5, 13, 1, 1, '2020-06-16 00:21:23'),
(11, 5, 12, 1, 1, '2020-06-16 00:21:23'),
(12, 5, 13, 1, 1, '2020-06-16 08:06:31'),
(13, 5, 14, 1, 1, '2020-06-16 08:06:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `idProduct` int(11) NOT NULL,
  `nameProduct` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NXB` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `priceProduct` double NOT NULL,
  `specialPrice` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `authorProduct` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `idCategory` int(11) NOT NULL,
  `dateProduct` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`idProduct`, `nameProduct`, `NXB`, `images`, `Description`, `priceProduct`, `specialPrice`, `authorProduct`, `status`, `idCategory`, `dateProduct`) VALUES
(13, 'Trên đường băng', 'Tuổi trẻ', 'tren_duong_bang_tai_ban_2017_1_2018_11_16_11_02_25.jpg', 'Cuốn Trên Đường Băng được chia làm 3 phần: “Chuẩn bị hành trang”, “Trong phòng chờ sân bay” và “Lên máy bay”, tương ứng với những quá trình một bạn trẻ phải trải qua trước khi “cất cánh” trên đường băng cuộc đời, bay vào bầu trời cao rộng.', 64000, '62000', 'Tony buổi sáng', 0, 4, '2020-06-15 15:05:52'),
(14, 'Bí Mật Tư Duy Triệu Phú (Tái Bản 2018)', 'Tổng Hợp TPHCM', 'image_188995_1.jpg', '\"Ai cũng có một cuộc sống, ai cũng làm việc cần cù, ai cũng ước mơ được thành công, nhưng không mấy ai may mắn học được cách tư duy độc đáo và tầm nhìn của những tỷ phú lừng danh đã tiết lộ trong cuốn sách giá trị này...\"', 61200, '59500', 'T Harv Eker', 0, 3, '2020-06-16 00:38:59'),
(15, 'Để Được Trọng Dụng & Đãi Ngộ', 'Tổng Hợp TPHCM', '8935086838136.jpg', 'Để được trọng dụng và đãi ngộ là quyển sách thật sự cần thiết cho những ai nuôi tham vọng tiến bước trên con đường công danh, sự nghiệp. Quyển sách sẽ cung cấp cho bạn những phương pháp đơn giản, hiệu quả và đã được kiểm chứng trên thực tế nhằm giúp bạn nâng cao thu nhập và thăng tiến nhanh hơn.', 32560, '31025', 'Brian Tracy', 0, 3, '2020-06-16 00:40:47'),
(16, 'Mega XOY - Sổ Tay Công Thức Giải Nhanh Toán Trắc Nghiệm 12', 'Đại Học Quốc Gia Hà Nội', 'f15497d4b2ceb48ba106bca25a23255d.jpg', 'Công thức là chiếc chìa khóa để mở cánh cửa toán học. Tuy nhiên, việc có quá nhiều công thức khiến cho quá trình ghi nhớ gặp nhiều khó khăn, đặc biệt đối với các bạn học sinh lớp 12. Hiểu được điều này, nhóm tác giả Megabook đã nghiên cứu và cho ra đời cuốn “Mega XOY Sổ tay công thức giải nhanh Toán trắc nghiệm 12\"', 28500, '26700', 'Vương Thanh Bình', 0, 6, '2020-06-16 00:43:21'),
(17, 'Thủ Thuật Casio Giải Nhanh Trắc Nghiệm 12', 'Thanh Hóa', 'image_170.png', 'Kì thi tuyển sinh đại học năm 2017 là năm đầu tiên thi theo hình thức trắc nghiệm. Với một đề thi 50 câu, thí sinh sẽ được làm trong 90 phút. Như vậy một câu hỏi chỉ được phép làm trong thời gian 1 phút 48 giây là khoảng thời gian cực kì ngắn. Để hoàn thiện hết đề thi trong một khoảng thời gian ngắn như vậy thì vai trò của máy tính Casio là đặc biệt quan trọng. \r\n\r\nTrong cuốn sách này tác giả xin giới thiệu 33 Thủ thuật máy tính Casio để giải nhanh các dạng toán trắc nghiệm 12. Mỗi thủ thuật ứng với một chủ đề. Trong mỗi chủ đề được chia ra làm hai phần: các ví dụ đầu được thiết kế ở dạng đơn giản, học sinh chỉ được biết được thủ thật, bấm máy tính Casio là biết được đáp án nào là đáp án đúng  A, B, C hay là D mà không cần biết cách làm tự luận.  Phần hai là các ví dụ được thiết kế ở dạng nâng cao, dạng hạn chế sự lợi hại của máy tính Casio, để làm được các bài toán này thì đòi hỏi sự phối hợp cao giữa tư duy tự luận và thủ thuật máy tính Casio.', 100500, '98000', 'Vương Thanh Bình', 0, 6, '2020-06-16 00:44:16'),
(18, 'Ông Già Và Biển Cả', 'Văn Học', '2017_08_30_11_53_17_1.jpg', 'Ernest Hemingway (1899 -1961) là một tiểu thuyết gia người Mỹ, một nhà văn viết truyện ngắn, và là một nhà báo. Ông từng tham gia chiến đấu trong Chiến tranh thế giới lần thứ I, sau đó ông được biết đến qua \"Thế hệ đã mất\", nhận được giải thưởng báo chí Pulitzer năm 1953 với tiểu thuyết Ông già và biển cả, và giải Nobel Văn học năm 1954.', 26500, '24000', 'E, Hemingway', 0, 4, '2020-06-16 00:45:44'),
(19, 'Biển Đổi Thay', 'Ernest Hemingway', 'bien_doi_thay_1_2018_07_20_15_34_02.jfif', 'Cuốn sách tuyển tập những truyện ngắn đặc sắc của Hemingway. Ernest Hemingway (1899 - 1961) là nhà văn, nhà báo người Mỹ. Ông từng tham gia chiến đấu trong Chiến tranh thế giới lần thứ Nhất, sau đó ông được biết đến qua Thế hệ đã mất, nhận được giải thưởng báo chí Pulitzer năm 1953 với tiểu thuyết Ông già và biển cả, và giải Nobel văn học năm 1954. Hemingway để lại ấn tượng sâu sắc đối với bạn đọc qua nguyên lý tảng băng trôi, văn phong của ông được mô tả bởi sự kiệm lời nhưng có nhiều tầng ý nghĩa, phải suy nghĩ thật sâu mới có thể hiểu hết được những gì tác giả gửi gắm. Nhiều tác phẩm của ông hiện nay được coi là những tác phẩm kinh điển của nền văn học Mỹ.', 43200, '41500', 'Ernest Hemingway', 0, 4, '2020-06-16 00:46:59'),
(20, 'Dẫn Luận Về Âm Nhạc', 'Hồng Đức', 'image_91951.jpg', '“Dẫn luận về âm nhạc là cuốn sách hết sức thấu đáo trong ý tưởng, sinh động và gọn gàng trong hình thức, hợp lý và hiện đại trong bố cục, hoàn hảo để trở thành một thứ bạn có thể bỏ túi và đắm chìm vào nó trong mọi khoảnh khắc rảnh rỗi”.', 53600, '51200', 'Nicholas Cook', 0, 5, '2020-06-16 00:48:36'),
(21, 'One Piece Magazine - Tập 2 - Tặng Kèm Tờ Truy Nã Postgas D. Ace', 'Kim Đồng', '130.jpg', 'Nhân dịp kỉ niệm 20 năm ra đời bộ Manga nổi tiếng thế giới ONE PIECE, đồng thời đánh dấu chặng đường 10 năm phát hành bộ truyện tại Việt Nam, xin được gửi đến các fan của bộ bom tấn này một ấn phẩm vô cùng đặc biệt, được thực hiện bằng phong cách hoàn toàn mới, chưa từng có trước nay!! Đó chính là Tạp chí ONE PIECE - ONE PIECE MAGAZINE siêu rực rỡ!!', 94000, '92000', 'Eiichiro Oda', 0, 2, '2020-06-16 00:50:42'),
(22, 'Tôi Và Nhóm Bạn Siêu Quậy: Tập 1', 'Kim Đồng', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1273.jpg', 'Ella và các bạn rất lo lắng cho thầy giáo: thầy nhận được những bức thư bí mật, thỉnh thoảng thầy lại nhìn quanh nhìn quất, thậm chí thầy còn nhảy xuống hồ bơi ngay cả khi đang mặc quần áo dài… Tóm lại, mọi hành động của thầy đều rất bất thường.\r\n\r\nĐối với đám nhóc, chúng nghĩ rằng thầy giáo chắc chắn là nạn nhân của một vụ tống tiền. Bọn trẻ hứa sẽ làm tất cả để cứu thầy. Và nếu thầy không thực sự gặp nguy hiểm theo như suy đoán của bọn trẻ thì mọi chuyện sẽ thật xui xẻo.\r\n\r\nTruyện dành cho lứa tuổi 6+', 36000, '35000', 'Timo Parvela, Zelda Zonk', 0, 2, '2020-06-16 00:52:06'),
(23, 'Đức Phật Kể Con Nghe - Tập 1', 'Lao Động', '8935280902206.jpg', 'Cuốn sách này là tập của bộ sách “Đức Phật kể con nghe” của tác giả Dharmachari Nagaraja.\r\n\r\nQua công việc phát thanh của mình, tác giả khám phá ra rằng không có gì thu hút được sự chú ý và hưởng ứng của người nghe bằng một câu chuyện hay. Từ nhận xét này, tác giả đã nghĩ đến việc kể lại vài câu chuyện ngắn về tiền thân của Đức Phật – những câu chuyện cổ xưa được tin là do chính Đức Phật đã kể ra. Mục đích của tác giả là viết lại những truyện ngắn dễ tiếp cận không chỉ với Phật tử mà còn với mọi người – cụ thể là trẻ em. Kết quả là cuốn sách với 20 truyện ngắn này ra đời và tác giả hy vọng các bạn sẽ thích thú chia sẻ với con em của mình.', 52000, '51000', 'Dharmachari Nagaraja', 0, 2, '2020-06-16 00:52:57'),
(24, 'Tôi Vẽ - Phương Pháp Tự Học Vẽ Truyện Tranh', 'Đông A', '8936071672704.jpg', '“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.', 85000, '84000', 'Nhiều tác giả', 0, 2, '2020-06-16 00:54:00'),
(25, 'Chàng Cọp - Truyện Cổ Tích Xưa Và Nay Hay Nhất', 'Đồng Nai', 'chang_cop___truyen_co_tich_xua_va_nay_hay_nhat_1_2018_09_20_15_31_17.jfif', 'Chàng Cọp - Truyện Cổ Tích Xưa Và Nay Hay Nhất', 17615, '16000', 'Nhóm Trí Việt', 0, 2, '2020-06-16 00:55:41'),
(26, 'Tranh Truyện Lịch Sử Việt Nam: Lý Công Uẩn', 'Kim Đồng', 'image_182424.jpg', 'Lý Công Uẩn là vị vua sinh ra từ cửa Phật. Ông học rộng biết nhiều, có tài trị nước. Ông thực thi nhiều quyết sách hữu hiệu củng cố triều đình, đánh dẹp phiến quân, dời đô từ vùng núi Hoa Lư - Ninh Bình hiểm trở về thành Đại La “rồng cuộn, hổ ngồi”. Thủ đô Thăng Long - Hà Nội gắn liền với tên vị vua này.\r\n\r\nTủ sách \"Tranh truyện lịch sử Việt Nam\" dành cho lứa tuổi thiếu niên nhi đồng được NXB Kim Đồng xây dựng xuất phát từ mong muốn giúp các em nhỏ bước đầu làm quen với lịch sử, tiếp nhận một lượng kiến thức cơ bản về lịch sử nước nhà thông qua những câu chuyện về các danh nhân được thể hiện bằng các trang sách màu.', 13500, '12800', 'Tạ Huy Long, Việt Quỳnh', 0, 2, '2020-06-16 00:56:27'),
(27, 'Tranh Truyện Lịch Sử Việt Nam: Trần Nhân Tông', 'Kim Đồng', 'image_182425.jpg', 'Trần Nhân Tông (1258 - 1308) được sử sách ngợi ca là một trong những vị vua anh minh nhất trong lịch sử. Trong thời gian trị vì, ông đã lãnh đạo nhân dân qua hai cuộc chống xâm lược Nguyên Mông (1285 và 1287). Sau khi truyền ngôi cho Thái tử Trần Thuyên, Trần Nhân Tông xuất gia tu hành tại cung Vũ Lâm (Ninh Bình). Đến năm 1299, ông rời đến Yên Tử (Quảng Ninh) tiếp tục tu hành và thành lập Thiền phái Trúc Lâm Yên Tử.\r\n\r\nTủ sách \"Tranh truyện lịch sử Việt Nam\" dành cho lứa tuổi thiếu niên nhi đồng được NXB Kim Đồng xây dựng xuất phát từ mong muốn giúp các em nhỏ bước đầu làm quen với lịch sử, tiếp nhận một lượng kiến thức cơ bản về lịch sử nước nhà thông qua những câu chuyện về các danh nhân được thể hiện bằng các trang sách màu.', 25000, '24000', 'Tạ Huy Long, Việt Quỳnh', 0, 2, '2020-06-16 00:57:10'),
(28, 'Doanh Nghiệp Của Thế Kỷ 21', 'Trẻ', 'image_195509_1_603.jpg', 'Một quyển sách khác của tác giả bộ sách nổi tiếng Dạy con làm giàu. Trong cuốn sách này, Robert T. Kiyosaki sẽ chỉ ra cho bạn đọc thấy lý do tại sao mình cần phải gây dựng doanh nghiệp riêng của mình và chính xác đó là doanh nghiệp gì. Nhưng đây không phải là việc thay đổi loại hình doanh nghiệp mình đang triển khai mà đó là việc thay đổi chính bản thân. Tác giả còn cho bạn đọc biết cách thức tìm kiếm những gì mình cần để phát triển doanh nghiệp hoàn hảo, nhưng để doanh nghiệp của mình phát triển thì mình cũng sẽ phải phát triển theo.', 72250, '71500', 'Robert T Kiyosaki, John Fleming, Kim Kiyosaki', 0, 3, '2020-06-16 00:58:35'),
(29, 'Quốc Gia Khởi Nghiệp', 'Thế Giới', 'quoc_gia_khoi_nghiep_tai_ban_2018_1_2018_08_07_09_47_11.jfif', 'Là câu chuyện viết về sự phát triển thần kỳ của nền kinh tế Israel từ lúc lập quốc cho đến khi trở thành quốc gia có nền công nghệ hàng đầu thế giới. Quyển sách này có thể trả lời cho những thắc mắc làm thế nào một đất nước nhỏ bé lại có thể tồn tại giữa sự thù địch của các quốc gia lân cận, đối phó với những cuộc chiến giữ vững bờ cõi mà vẫn tạo ra sự sáng tạo vượt bậc trong các lĩnh vực công nghệ, quân sự và dân sự.\r\n\r\nVới ngòi bút sắc sảo, phong phú và tập trung những lời nhận xét thực tế từ những doanh nhân thành công hàng đầu, “Quốc gia khởi nghiệp” đã đem đến những cái nhìn mới mẻ về con người và đất nước Israel, làm sáng tỏ phần nào những thành công tưởng chừng như không tưởng của đất nước nhỏ bé này. Cá tính quyết liệt, dám thách thức và sáng tạo không ngừng của những con người Do Thái lưu vong, chạy trốn và sống sót sau những cuộc thảm sát trong Chiến tranh thế giới thứ II, không cam chịu cuộc sống nghèo khó, họ đã cùng với những người theo Chủ nghĩa Phục quốc Do Thái gây dựng và bảo vệ đất nước Israel bằng chính sức lực của mình và khiến cả thế giới phải kinh ngạc.', 52000, '51000', 'Dan Senor, Saul Singer', 0, 3, '2020-06-16 00:59:20'),
(30, 'Đánh Bại Phố Wall', 'Lao Động', '2020_05_13_15_28_04_1.jfif', 'Đánh Bại Phố Wall (Tái Bản 2018)\r\n\r\nVới 13 năm kinh nghiệm quản lý thành công quỹ đầu tư Fidelity Magellan và lựa chọn hàng nghìn cổ phiếu, Lynch đã đúc kết thành 21 nguyên tắc hài hước mà ông gọi là “Những nguyên tắc của Peter”.\r\n\r\nChìa khóa để đầu tư thành công, theo Lynch, là phải ghi nhớ rằng cổ phiếu không giống như tấm vé số; luôn có một công ty đằng sau mỗi cổ phiếu và một nguyên nhân lý giải cho cách thức vận hành của các công ty - và cổ phiếu của chúng. Lynch chỉ ra làm cách nào chúng ta có thể tìm hiểu tối đa về công ty mục tiêu và xây dựng một danh mục đầu tư sinh lợi dựa trên chính kinh nghiệm, hiểu biết và kết quả nghiên cứu của bản thân. Không có bất kỳ lý do nào cản trở một nhà đầu tư cá nhân tự trở thành chuyên gia, và cuốn sách này sẽ chỉ ra cách thực hiện điều đó.', 119000, '115000', 'Peter Lynch, John Rothchild', 0, 3, '2020-06-16 01:00:24'),
(31, 'Luật Của Warren Buffett', 'Lao Động', '89360377989186.jpg', 'Cuốn sách “Luật của Warren Buffett” là tuyển tập những lá thư cùng những nguyên tắc nền tảng trong đầu tư của Warren Buffett, một trong những nhà tỷ phú giàu nhất thế giới với khối tài sản không ngừng tăng lên từng ngày. Cuốn sách chứa đựng những kiến thức uyên tâm và tư duy của một nhà đầu tư thành công ngay cả khi bắt đầu bằng một nguồn vốn khiêm tốn. Những điều được chia sẻ trong cuốn “Luật của Warren Buffett” mang những giá trị vượt thời gian và không gian. Dù cho chàng thanh niên Buffett có khởi sự trong thời đại ngày nay, hẳn ông cũng có thể đạt được những thành quả to lớn như vậy. Mỗi chương trong cuốn sách này đều được xây dựng xung quanh một ý tưởng hoặc chủ đề riêng biệt từ những bức thư và có một bố cục đơn giản, bắt đầu là một bản tóm tắt nhằm cung cấp một số thông tin nền. Đồng thời, tất cả các trích đoạn quan trọng từ những bức thư trong từng chủ đề đều sẽ được trình bày đầy đủ. Khi mà Warren Buffett chưa từng xuất bản một cuốn giáo trình nào về đầu tư, có thể xem những bức thư được tập hợp trong cuốn sách này là một khóa học từ nhà tỷ phú thành công người Mỹ. Cuốn sách được chia làm ba phần', 52000, '51000', 'James B. Stewart', 0, 3, '2020-06-16 01:01:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbluser`
--

INSERT INTO `tbluser` (`id`, `fullName`, `phoneNumber`, `diaChi`, `city`, `username`, `password`, `rule`) VALUES
(1, '', '', '', '0', 'admin', '$2y$10$bTyPx.jx6yhP6LJUFHvxueq7SVxgAm00jbrK3r48sy0375mY2K35i', 1),
(4, 'Đoàn Quốc Dũng', '0398022720', '34D, Đường số 12, Phường 11, Quận Gò Vấp', 'Hồ Chí Minh', 'user', '$2y$10$vqfBAI4L0NgOUYkwZHT3w.PDbTUrZQ5NsrId3tttxY79fzCElsANG', 0),
(5, 'Dũng Royal', '0398022720', '34D, Đường số 12, Phường 11, Quận Gò Vấp', 'Hồ Chí Minh', 'dungdq5520@gmail.com', '$2y$10$CsWbyLdMReUXtX9sGxsGieatrt5zvssrfmdwxAXY.Y2nz6nyaMx8a', 0);

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
-- Chỉ mục cho bảng `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
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
-- AUTO_INCREMENT cho bảng `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
