-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 10, 2023 lúc 04:31 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sportsnews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_TT` bigint(20) NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin`
--

CREATE TABLE `loai_tin` (
  `id` bigint(20) NOT NULL,
  `id_TL` bigint(20) NOT NULL,
  `ten_LT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_LT_KD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin`
--

INSERT INTO `loai_tin` (`id`, `id_TL`, `ten_LT`, `ten_LT_KD`, `created_at`, `updated_at`) VALUES
(1, 1, 'V.League', 'vleague', '2023-08-05 22:54:37', '2023-08-05 22:54:37'),
(2, 1, 'Cúp Quốc gia', 'cup-quoc-gia', '2023-08-05 22:55:53', '2023-08-05 22:55:53'),
(3, 1, 'Bóng đá nữ', 'bong-da-nu', '2023-08-07 02:00:48', '2023-08-07 02:00:48'),
(4, 1, 'Đội tuyển Việt Nam', 'doi-tuyen-viet-nam', '2023-08-07 02:01:33', '2023-08-07 02:01:33'),
(5, 2, 'Ngoại hạng Anh', 'ngoai-hang-anh', '2023-08-07 02:02:03', '2023-08-07 02:02:03'),
(6, 2, 'Đội tuyển Anh', 'doi-tuyen-anh', '2023-08-07 02:02:21', '2023-08-07 02:02:21'),
(7, 3, 'La Liga', 'la-liga', '2023-08-07 02:02:54', '2023-08-07 02:02:54'),
(8, 3, 'Đội tuyển TBN', 'doi-tuyen-tbn', '2023-08-07 02:03:06', '2023-08-07 02:03:06'),
(9, 3, 'Cúp Nhà Vua', 'cup-nha-vua', '2023-08-07 02:03:19', '2023-08-07 02:03:19'),
(10, 4, 'Đội tuyển Đức', 'doi-tuyen-duc', '2023-08-07 02:03:35', '2023-08-07 02:03:35'),
(11, 4, 'Bundesliga', 'bundesliga', '2023-08-07 02:03:51', '2023-08-07 02:03:51'),
(12, 5, 'Đội tuyển Pháp', 'doi-tuyen-phap', '2023-08-07 02:04:34', '2023-08-07 02:04:34'),
(13, 5, 'Ligue 1', 'ligue-1', '2023-08-07 02:04:48', '2023-08-07 02:04:48'),
(14, 5, 'Cúp QG Pháp', 'cup-qg-phap', '2023-08-07 02:05:07', '2023-08-07 02:05:07'),
(15, 6, 'Champions Leage', 'champions-leage', '2023-08-07 02:05:26', '2023-08-07 02:05:26'),
(16, 6, 'Europa League', 'europa-league', '2023-08-07 02:05:38', '2023-08-07 02:05:38'),
(17, 6, 'Club World Cup', 'club-world-cup', '2023-08-07 02:05:49', '2023-08-07 02:05:49'),
(18, 7, 'World Cup nữ 2023', 'world-cup-nu-2023', '2023-08-07 02:06:12', '2023-08-07 02:06:12'),
(19, 7, 'World Cup', 'world-cup', '2023-08-07 02:06:28', '2023-08-07 02:06:28'),
(20, 7, 'EURO', 'euro', '2023-08-07 02:06:38', '2023-08-07 02:06:38'),
(21, 7, 'Nations League', 'nations-league', '2023-08-07 02:06:53', '2023-08-07 02:06:53'),
(22, 8, 'Chuyển nhượng', 'chuyen-nhuong', '2023-08-07 02:07:04', '2023-08-07 02:07:04'),
(23, 8, 'Đam mê', 'dam-me', '2023-08-07 02:07:17', '2023-08-07 02:07:17'),
(24, 8, 'Điểm tin', 'diem-tin', '2023-08-07 02:07:27', '2023-08-07 02:07:27'),
(25, 13, 'Big Story', 'big-story', '2023-08-08 20:00:44', '2023-08-09 08:00:44'),
(26, 13, 'Infographic', 'infographic', '2023-08-08 19:38:08', '2023-08-08 19:38:08');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_07_17_172951_create_tin_tuc_table', 1),
(4, '2023_07_17_173029_create_loai_tin_table', 1),
(5, '2023_07_17_173101_create_binh_luan_table', 1),
(6, '2023_08_05_005508_create_the_loai_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loai`
--

CREATE TABLE `the_loai` (
  `id` bigint(20) NOT NULL,
  `ten_TL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_TL_KD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loai`
--

INSERT INTO `the_loai` (`id`, `ten_TL`, `ten_TL_KD`, `created_at`, `updated_at`) VALUES
(1, 'VIỆT NAM', 'viet-nam', '2023-08-08 18:32:03', '2023-08-09 06:32:03'),
(2, 'ANH', 'anh', '2023-08-08 18:32:17', '2023-08-09 06:32:17'),
(3, 'TÂY BAN NHA', 'tay-ban-nha', '2023-08-08 18:32:26', '2023-08-09 06:32:26'),
(4, 'ĐỨC', 'duc', '2023-08-08 18:32:35', '2023-08-09 06:32:35'),
(5, 'PHÁP', 'phap', '2023-08-08 18:32:50', '2023-08-09 06:32:50'),
(6, 'CẤP CLB', 'cap-clb', '2023-08-08 18:33:00', '2023-08-09 06:33:00'),
(7, 'ĐỘI TUYỂN\r\n', 'doi-tuyen', '2023-08-06 02:59:23', '2023-08-06 02:59:23'),
(8, 'CHUYÊN ĐỀ\r\n', 'chuyen-de', '2023-08-06 02:59:23', '2023-08-06 02:59:23'),
(13, 'ĐẶC BIỆT', 'dac-biet', '2023-08-08 19:47:32', '2023-08-09 07:47:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` bigint(20) NOT NULL,
  `tieu_de` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de_kd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tac_gia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luot_xem` int(11) NOT NULL,
  `id_LT` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `tieu_de`, `tieu_de_kd`, `tom_tat`, `noi_dung`, `hinh_anh`, `tac_gia`, `tags`, `luot_xem`, `id_LT`, `created_at`, `updated_at`) VALUES
(1, 'HLV Vũ Hồng Việt: ‘Nam Định chờ Văn Toàn hết hạn hợp đồng ở Seoul E-Land’', 'hlv-vu-hong-viet-nam-dinh-cho-van-toan-het-han-hop-dong-o-seoul-e-land', 'HLV Vũ Hồng Việt cho biết việc chiêu mộ tiền đạo Văn Toàn nằm trong kế hoạch xây dựng lực lượng cho Nam Định ở mùa giải tới đây. Đội bóng này sẽ chờ cho đến khi Văn Toàn hết hạn hợp đồng với Seoul E-Land.', 'Như Bongdaplus đưa tin, thông tin chuyển nhượng của Văn Toàn nhận được sự quan tâm lớn của người hâm mộ. Đặc biệt là câu chuyện xoay quanh khả năng Văn Toàn trở về V.League. Trong đó, Nam Định đang là CLB quan tâm đến cầu thủ này.\r\n\r\nHLV Vũ Hồng Việt cho biết: “Mùa giải 2023/24 sẽ quay trở về với thể thức thi đấu cũ, khi 24 vòng đấu vắt từ cuối năm 2023 đến giữa năm 2024 mới kết thúc. Đây là cuộc đua đường trường với độ khó cao, tiềm ẩn rủi ro và có thể đối diện với nguy cơ sứt mẻ lực lượng. Vậy nên, nếu muốn đua đường dài, hướng tới mục tiêu cao thì hơn bao giờ hết Nam Định cần lực lượng dày, có tính chiều sâu. Thế nên chuyện Nam Định bổ sung lực lượng cho mùa giải mới cũng là điều bình thường. Việc chiêu mộ tiền đạo Văn Toàn nằm trong  kế hoạch xây dựng lực lượng cho đội bóng tham dự mùa giải tới đây”.\r\n\r\nHLV Vũ Hồng Việt bày tỏ: “Văn Toàn là cầu thủ giỏi mà bất cứ HLV nào cũng muốn có anh trong đội hình. Tôi cũng không phải là ngoại lệ. Lối chơi của cậu ấy phù hợp với kế hoạch chuyên môn mà tôi đang xây dựng ở Nam Định. Cho đến lúc này, chúng tôi tôn trọng hợp đồng giữa Văn Toàn và Seoul E-land. Tôi mong cậu ấy thi đấu tốt trong thời gian chơi bóng ở Hàn Quốc. Nam Định sẽ chờ đến khi Văn Toàn đáo hạn hợp đồng với Seoul E-land thì sẽ đàm phán với cậu ấy”.\r\n\r\nTrong thông báo mới đây của công ty đại diện của Văn Toàn có nêu rõ: Văn Toàn vẫn là cầu thủ của Seoul E-land và sẽ tiếp tục ở lại đội bóng cho đến khi kết thúc mùa giải vào cuối cuối tháng 11 tới đây.', 'van-toan-0.jpeg', 'Van Thuong', '', 2, 1, '2023-08-07 11:21:56', '2023-08-08 07:58:13'),
(2, 'Tạm giữ 3 đối tượng đốt pháo sáng khiến bé 6 tuổi bị thương ở trận Hà Nội FC vs Hải Phòng', 'tam-giu-3-doi-tuong-dot-phao-sang-khien-be-6-tuoi-bi-thuong-o-tran-ha-noi-fc-vs-hai-phong', 'Công an quận Đống Đa (Hà Nội) tạm giữ 3 đối tượng đã đốt pháo sáng trên SVĐ Hàng Đẫy khiến cháu bé 6 tuổi bị bỏng.', 'Ngày 7/8, Công an quận Đống Đa (Hà Nội) cho biết, đơn vị đã ra quyết định tạm giữ hình sự đối với Nguyễn Trung Hiếu (SN 2003), Lê Văn Tùng (SN 1989) và Đỗ Minh Sáng (SN 2002), cùng ở TP Hải Phòng, để điều tra về hành vi “Gây rối trật tự công cộng”.\r\n\r\nVIDEO: Văn Quyết, Thành Lương tới thăm CĐV Hải Phòng bị bỏng do pháo sáng\r\n\r\nĐây là nhóm cổ động viên đốt pháo sáng trên sân vận động Hàng Đẫy trong trận đấu bóng đá giữa CLB Hà Nội và Hải Phòng tối ngày 2/8, khiến một cháu bé bị thương. Theo điều tra, khi trận đấu đang diễn ra ở phút thứ 34, CLB Hải Phòng được hưởng một quả phạt đền. Sau khi cầu thủ bên phía CLB Hải Phòng ghi bàn vào lưới CLB Hà Nội, tại vị trí khán đài B9, gần hàng rào bảo vệ, Nguyễn Trung Hiếu kích hoạt 1 quả pháo sáng chuẩn bị từ trước rồi ném xuống khu vực hàng rào, khiến nhiều cổ động viên khu vực này quá khích hò reo, gây mất trật tự. Đến khi lực lượng bảo vệ sân dập quả pháo thì khu vực mới được ổn định.\r\n\r\n', 'phao-sang-1.jpeg', 'Van Thuong', '', 3, 1, '2023-08-08 08:21:31', '2023-08-08 08:21:31'),
(3, 'Chung kết U15 QG - Next Media 2020: Đợi PVF trả hận', 'chung-ket-u15-qg-next-media-2020-doi-pvf-tra-han', 'Chiều nay (26/10) vào lúc 17h30 trên sân Bình Dương sẽ diễn ra trận chung kết giải U15 QG - Next Media 2020 giữa PVF và SHB Đà Nẵng.', 'Ở bán kết, PVF đã có chiến thắng đầy nhọc nhằn trước SLNA sau loạt “đấu súng” (hòa 3-3, luân lưu 5-4). Do bị vắt kiệt sức ở bán kết nên PVF được dự đoán sẽ gặp nhiều khó khăn trước SHB Đà Nẵng - đội thắng chủ nhà B.BD ở bán kết với tỷ số 2-1. \r\n\r\nTrận chung kết cũng là màn tái đấu giữa hai đội bởi ở vòng bảng SHB.ĐN đã thắng PVF với tỷ số 3-2. Tuy nhiên, với tính chất căng thẳng của một trận chung kết thì chưa biết chừng PVF sẽ khiến SHB.ĐN bất ngờ.\r\n\r\nPVF được đánh giá cao hơn bởi họ có quy trình đào tạo bài bản và quan trọng là được thi đấu cọ xát rất nhiều nên có phần vượt trội so với các cầu thủ cùng trang lứa.\r\n\r\nTrong những năm qua, PVF luôn thi đấu rất thành công ở các giải trẻ và việc họ thắng SLNA ở bán kết đã cho thấy bản lĩnh của các chân sút.\r\n\r\nTrong khi đó, dù SHB.ĐN từng khá thành công ở các giải U19, U21 nhưng ở cấp độ U15 thì khá lâu rồi lò đào tạo đội bóng sông Hàn mới có đại diện dự trận chung kết.\r\n\r\n', 'U15.jpeg', 'Van Thuong', '', 2, 2, '2023-08-08 08:31:54', '2023-08-08 08:31:54'),
(4, 'HLV Park Hang Seo tri ân CLB Hà Nội theo cách đặc biệt', 'hlv-park-hang-seo-tri-an-clb-ha-noi-theo-cach-dac-biet', 'Nhà cầm quân người Hàn Quốc có động thái thiết thực đầy bất ngờ nhằm chúc mừng CLB Hà Nội sau chức vô địch Cúp QG 2020.', 'Với chiến thắng 2-1 trước Viettel ở trận chung kết, CLB Hà Nội đã giành chức vô địch Cúp QG 2020 một cách xứng đáng. Đội quân của HLV Chu Đình Nghiêm là nhà vô địch tuyệt đối ở giải đấu này khi toàn thắng 4 trận, ghi bàn nhiều nhất (17) và để thủng lưới ít nhất (2). Đây cũng là lần thứ 2 liên tiếp đội bóng Thủ đô đăng quang ở sân chơi danh giá thứ nhì của bóng đá Việt Nam. \r\n\r\nTrước thành tích ấn tượng của Quang Hải cùng các đồng đội, HLV Park Hang Seo thể hiện sự ngưỡng mộ và đánh giá cao. Một ngày sau trận đấu với Viettel, vị chiến lược gia 61 tuổi đã gửi tặng lẵng hoa chúc mừng chức vô địch Cúp QG 2020 của CLB Hà Nội. Đây cũng là cách thể hiện sự tri ân của nhà cầm người Hàn Quốc dành tặng cho CLB Hà Nội, đội bóng thường xuyên đóng góp quân số đông nhất cho các ĐTQG ở các giải đấu quan trọng gần đây.\r\n\r\nTrước đó tối ngày 20/9, HLV Park Hang Seo cũng đã có mặt ở sân Hàng Đẫy để dự khán trận chung kết Cúp QG giữa Hà Nội và Viettel. Ông Park ít nhiều có thể hài lòng khi các học trò ở ĐTQG thuộc biên chế của hai đội đều thi đấu tốt, cống hiến một trận cầu hấp dẫn và kịch tính.\r\n\r\nQuang Hải có lẽ là cái tên nhận được sự hài lòng lớn nhất của thầy Park. Ngôi sao sáng nhất của bóng đá Việt Nam suốt 2 năm qua có trận đấu cực hay, ghi bàn thắng quyết định mang về chức vô địch Cúp QG cho Hà Nội. Điều này cho thấy Quang Hải đã dần lấy lại được phong độ tốt nhất của mình sau giai đoạn sa sút và đối diện nhiều khó khăn về những câu chuyện ngoài hậu trường.', 'bia-hn.jpeg', 'Van Thuong', '', 6, 2, '2023-08-08 08:33:27', '2023-08-08 08:33:27'),
(5, 'ĐT nữ Việt Nam tụt 4 bậc trên BXH FIFA, vẫn đứng đầu Đông Nam Á', 'dt-nu-viet-nam-tut-4-bac-tren-bxh-fifa-van-dung-dau-dong-nam-a', 'ĐT nữ Việt Nam rơi xuống vị trí thứ 36 trên BXH FIFA, sau 3 trận thua tại World Cup nữ 2023. Dẫu sao, thầy trò HLV Mai Đức Chung vẫn đứng đầu Đông Nam Á.\r\n', 'FIFA vừa cập nhật BXH mới nhất, sau khi vòng bảng World Cup nữ 2023 khép lại. Theo đó, ĐT nữ Việt Nam đã bị trừ 29,4 điểm. Điều này không bất ngờ khi trong suốt tháng 7 và đầu tháng 8 vừa qua, ĐT nữ Việt Nam đã chịu 6 trận thua (trong đó có 5 trận đấu chính thức), trước Đức, New Zealand, Tây Ban Nha, Mỹ, Bồ Đào Nha và Hà Lan.\r\n\r\nDo bị trừ đến gần 30 điểm nên ĐT nữ Việt Nam rơi từ vị trí thứ 32 xuống 36 thế giới. Dù tụt hạng, ĐT nữ Việt Nam vẫn đứng đầu khu vực Đông Nam Á. Đội tuyển nữ Thái Lan mất vị trí thứ hai khu vực Đông Nam Á vào tay Philippines. Philippines có thêm 29,8 điểm nhờ chiến thắng trước New Zealand. Trong khi đó, 2 trận thua trước Thụy Sỹ và Na Uy khiến ĐT nữ Philippines chỉ mất 9,98 điểm.\r\n\r\nĐT nữ Việt Nam sẽ có cơ hội cải thiện về thứ hạng khi tham dự ASIAD 2023 tại Hàng Châu, Trung Quốc vào tháng 9 tới. Ở Á vận hội kỳ này, ĐT nữ Việt Nam nằm ở bảng D cùng các đội tuyển Nhật Bản, Nepal và Bangladesh. Trong đó, đội tuyển Nhật Bản là thử thách lớn nhất với thầy trò HLV Mai Đức Chung.', 'dt-nu-viet-nam-fifa-1.jpeg', 'Van Thuong', '', 1, 3, '2023-08-08 08:35:13', '2023-08-08 08:35:13'),
(6, 'HLV Troussier nói gì về kết quả bốc thăm của ĐT Việt Nam ở VL World Cup 2026?', 'hlv-troussier-noi-gi-ve-ket-qua-boc-tham-cua-dt-viet-nam-o-vl-world-cup-2026', 'Phát biểu trên website của LĐBĐ châu Á, HLV trưởng ĐT Việt Nam Troussier cảm thấy thú vị về kết quả bốc thăm vòng loại thứ hai World Cup 2026.', 'Kết quả bốc thăm đưa ĐT Việt Nam vào bảng đấu cùng Iraq, Philippines và nhiều khả năng là Indonesia (đội sẽ chỉ phải đấu với Brunei tại vòng play-off). Có mặt tại lễ bốc thăm diễn ra vào ngày 27/7, HLV trưởng ĐT Troussier có những chia sẻ cảm xúc về kết quả này.\r\n\r\n“Không có trận đấu nào là dễ dàng trong bóng đá cả. Tôi nghĩ rằng tất cả các đội bóng ở bảng đấu này đều có tham vọng vượt qua vòng loại. Đó là lý do đây là bảng đấu khó”, thuyền trưởng của ĐT Việt Nam cho biết. “Đối với tôi, nó thực sự là cơ hội tuyệt vời để giới thiệu các cầu thủ mới. Chúng tôi có mục tiêu vượt qua vòng loại. Chúng tôi có 3 tháng để thực hiện nhiệm vụ này”.\r\n\r\n“Điều quan trọng tôi muốn nói là kết quả bốc thăm thật sự thú vị bởi ở Asian Cup 2023, chúng tôi cũng sẽ đối đầu với Iraq và Indonesia. Tôi không biết đó có phải là lợi thế hay không nhưng tôi phải xem xét kỹ lưỡng để chúng tôi có thể hiểu rõ lẫn nhau”. “Chúng tôi có những cầu thủ và trong những tháng tới, tôi sẽ có cơ hội để chuẩn bị. Chúng tôi không hề e sợ. Về cá nhân, tôi hoàn toàn tự tin bởi chúng tôi rơi vào bảng đấu tốt”, ông Troussier đánh giá. \r\n\r\nTheo lịch thi đấu, ĐT Việt Nam sẽ có trận ra quân bằng chuyến làm khách trên sân Philippines trước khi trở về sân nhà tiếp Iraq trong 2 lượt trận đầu tiên diễn ra vào tháng 11 tới tại vòng loại thứ hai World Cup 2026.', 'philippetroussier.jpeg', 'Van Thuong', '', 1, 4, '2023-08-08 08:36:54', '2023-08-08 08:36:54'),
(7, 'HLV Hoàng Anh Tuấn tiết lộ áp lực đặc biệt khi dẫn dắt U23 Việt Nam', 'hlv-hoang-anh-tuan-tiet-lo-ap-luc-dac-biet-khi-dan-dat-u23-viet-nam', 'HLV Hoàng Anh Tuấn cho biết áp lực lớn nhất của ông khi dẫn dắt U23 Việt Nam là làm sao phải tìm ra những nhân tố tốt, giới thiệu cho ĐTQG sau giải U23 Đông Nam Á.', 'Chiều 8/8, Liên đoàn bóng đá Việt Nam đã tổ chức Lễ công bố HLV Hoàng Anh Tuấn dẫn dắt đội tuyển U23 Việt Nam tham dự giải vô địch U23 Đông Nam Á 2023.\r\n\r\nCăn cứ vào lịch thi đấu các giải quốc tế trong năm 2023, VFF đã quyết định thành lập hai đội tuyển U.23 Việt Nam cho các nhiệm vụ khác nhau. Đội U23 Việt Nam dự vòng loại U23 châu Á 2024 do ông Troussier dẫn dắt, còn đội U23 Việt Nam tham gia giải vô địch U23 Đông Nam Á 2023 và ASIAD 19 do ông Hoàng Anh Tuấn huấn luyện.\r\n\r\nHLV Hoàng Anh Tuấn là người có nhiều đóng góp quan trọng trong công tác đào tạo, phát triển lớp cầu thủ kế cận cho đội tuyển quóc gia. Ông cũng là người đầu tiên đưa U19 Việt Nam lọt vào vòng chung kết U20 FIFA World Cup 2017. Nhiều cầu thủ nay đã trở thành những trụ cột tuyển quốc gia. \r\n\r\nVFF kì vọng HLV Hoàng Anh Tuấn sẽ hoàn thành xuất sắc nhiệm vụ được giao, nhận được sự ủng hộ của truyền thông và người hâm mộ để cùng các cầu thủ trẻ tự tin chinh phục những mục tiêu đặt ra. \r\n\r\nTrong buổi lễ ra mắt, HLV Hoàng Anh Tuấn chia sẻ: “Tôi rất vinh dự và vui mừng khi được VFF ủng hộ, tin tưởng giao nhiệm vụ dẫn dắt U23 Việt Nam tham dự giải U23 Đông Nam Á và xa hơn là ASIAD 19. Tôi từng giữ cương vị huấn luyện viên trưởng các tuyển trẻ quốc gia từ U16, U17 U20 và lần này vinh dự hơn là U23 Việt Nam. \r\n\r\nTrong quá trình 8 năm được VFF giao nhiệm vụ, tôi cũng có một số thành tích, nhưng vẫn có những bước lỗi nhịp. Lần này là một bước cao hơn khi dẫn dắt U23, lớp cầu thủ kế cận gần nhất với đội tuyển quốc gia. Với cá nhân mình, tôi nghĩ rằng đây là trách nhiệm quan trọng”.\r\n\r\nU23 Việt Nam tham dự giải U23 Đông Nam Á với vị thế của nhà ĐKVĐ. Nói về mục tiêu sắp tới của đội nhà, HLV Hoàng Anh Tuấn cho biết: “Mỗi năm có sự thay đổi. Năm ngoái vô địch không có nghĩa năm nay cũng thế. Chúng tôi có mục tiêu chiến lược, có 3 giải cuối năm nay đội cho U23. Có sự ưu tiên cho VCK U23 châu Á, sân chơi Đông Nam Á và Asiad là bước đệm để HLV Troussier có nhân sự tốt nhất cho VCK U23 châu Á. Danh sách lần này có nhiều cầu thủ trẻ, tôi chỉ có thể trả lời là sự trải nghiệm nhưng chắc chắn chúng ta phải tạo nên điều gì đó, định hình lối chơi, tìm thêm gương mặt cho U23 QG.\r\n\r\nChúng ta đang thi đấu ở Đông Nam Á, mục tiêu dành cho U23 châu Á. Vì thế, cầu thủ thủ cần rèn luyện nhiều, chuẩn bị chuyên môn cho lực lượng kế cận đáp ứng chuyên môn, không có nghĩa là chỉ chơi tấn công, phòng ngự cũng phải tốt, mang đến sự đa dạng đáp ứng yêu cầu của HLV ĐTQG”.\r\n\r\nNhà cầm quân người Khánh Hòa chia sẻ thêm: “Thật ra những vấn đề này thuộc về chiến lược, giải đấu nào cũng có mục tiêu làm những gì. Đối với tôi áp lực sau giải đấu giới thiệu bao nhiêu người lên ĐTQG. VFF không giao chỉ tiêu không có nghĩa là chơi tuỳ tiện. Làm sao dể cầu thủ có trải nghiệm tốt nhất, bài học, sẵn sàng tham gia ĐTQG cấp độ cao hơn”.\r\n\r\nCũng theo tiết lộ của HLV Hoàng Anh Tuấn, U23 Việt Nam sẽ tổ chức cách chơi để phù hợp với triết lý mà HLV Troussier đang xây dựng cho các lứa trên và ĐTQG. \r\n“Chắc chắn phải có rồi, tạo lên lứa cầu thủ phù hợp lối chơi ĐTQG. HLV Trouisser chơi kiểm soát và tấn công. Mục tiêu chúng tôi cố gắng, chơi theo sở trường cầu thủ, nhanh khéo léo. Đó cũng làm nhiệm vụ của tôi để cầu thủ đáp ứng nhu cầu chiến thuật HLV ĐTQG”, ông Tuấn nhấn mạnh.\r\n\r\n“Trên buổi tập như lớp học, có học trò giỏi và chưa tốt. Tôi phải sửa cho họ tốt hơn. Trên sân họ làm sai tôi phải sửa. Tôi cho phép họ sai và sửa để thi đấu không sai nữa”, ông Tuấn nói về sự thích nghi của lứa U23 Việt Nam hiện tại.', 'hlv-hoang-anh-tuan-bia.jpeg', 'Van Thuong', '', 1, 4, '2023-08-08 08:38:20', '2023-08-08 08:38:20'),
(8, 'Maguire bị HLV Southgate cảnh báo', 'maguire-bi-hlv-southgate-canh-bao', 'HLV đội tuyển Anh, Gareth Southgate đã chỉ ra rằng, thời gian thi đấu không liên tục tại MU có thể ảnh hưởng đến vị trí tại ĐTQG của Harry Maguire.', 'Maguire đã sa sút phong độ dưới thời HLV mới Erik ten Hag tại Man United. Anh chỉ là sự lựa chọn thứ 5 cho vị trí trung vệ, sau Lisandro Martinez, Raphael Varane, Victor Lindelof và thậm chí cả Luke Shaw.\r\n\r\nCầu thủ 30 tuổi vẫn còn hợp đồng đến năm 2025 và có ý định ở lại để chiến đấu giành lấy vị trí tại sân Old Trafford. Nhưng HLV Southgate thừa nhận, Maguire cần những cơ hội thường xuyên hơn để chứng minh phong độ và thể lực của mình.\r\n\r\n“Cậu ấy là đội trưởng của một câu lạc bộ bóng đá rất nổi tiếng nên đó sẽ là một tình huống khó khăn\", Southgate nói về Maguire sau trận Anh thắng Bắc Macedonia 7-0. \"Rõ ràng là cậu ấy sẽ thất vọng khi không được thi đấu nhiều như mong muốn, nhưng tôi nghĩ cậu ấy đã xử lý điều đó rất tốt\".\r\n\r\nKhi được hỏi liệu Maguire có cần thi đấu nhiều hơn không, Southgate nói: \"Thực sự điều đó quá rõ ràng rồi. Tôi nghĩ cậu ấy và Kalvin Phillips là hai người ra sân ít nhất trong đội hình ĐT Anh mùa này, nhưng chúng tôi vẫn triệu tập họ. Bởi vì, ở hai vị trí này, chúng tôi nghĩ rằng, họ vẫn ấn tượng hơn những người có thể đã được ra sân nhiều hơn ở CLB\".\r\n\r\n\"Nhưng tất nhiên mọi người đều phải công bằng. Nếu bạn không được thi đấu thường xuyên để chứng mình phong độ và thể lực thì bạn khó mà giữ được suất đá chính\".\r\n\r\nMaguire nhiều khả năng sẽ rời Man United trong mùa Hè này nếu như đội chủ sân Old Trafford tìm được đối tác thích hợp. Mới đây, từng có tin Newcastle muốn mượn Maguire 1 mùa nhưng MU lại chỉ muốn bán đứt.', 'maguire.jpeg', 'Van Thuong', '', 1, 6, '2023-08-08 08:39:52', '2023-08-08 08:39:52'),
(9, 'Có phải Arsenal đã mua hớ Declan Rice?', 'co-phai-arsenal-da-mua-ho-declan-rice', 'Trong mùa Hè 2023, Arsenal đã khiến nhiều người ngạc nhiên khi bỏ ra tới 100 triệu bảng (chưa kể 5 triệu bảng phát sinh) để chiêu mộ tiền vệ Declan Rice tới từ West Ham. Có ý kiến cho rằng Arsenal dường như mua hớ khi trả giá quá cao cho Rice, nhưng những tín hiệu ban đầu đang cho thấy điều ngược lại.', 'Trong phát biểu mới nhất, cựu tiền vệ CLB MU là Roy Keane đã gây chú ý khi ám chỉ việc Arsenal quá hào phóng khi đầu tư vào Rice. Với tư cách là bình luận viên của ITV, Keane nhận xét về tân binh của Pháo thủ trước trận tranh Siêu cúp nước Anh giữa Man City và Arsenal như sau: “Đến với Arsenal, Rice sẽ thi đấu cùng những cầu thủ giỏi hơn\".\r\n\r\n“Sẽ có những yêu cầu khác nhau dành cho cậu ấy. Nếu thi đấu cao hơn thì Rice cũng phải ghi được nhiều bàn thắng hơn. Cậu ấy có sức mạnh thể chất tốt, nhưng tôi vẫn nghĩ Arsenal đã trả quá nhiều tiền. Theo tôi, Rice không xứng đáng với mức giá đó\", Keane kết luận.\r\n\r\nQua tuyên bố trên, có thể thấy Keane không có ý xem thường Rice. Vấn đề mà ông nêu ra chỉ là “lợi nhuận” mà Arsenal thu về liệu có tương xứng với khoản đầu tư khổng lồ vào Rice hay không.\r\n\r\nĐây là câu hỏi không dễ giải đáp trong bối cảnh Rice thực ra chưa có nhiều thời gian cống hiến cho đội bóng mới. Điều đáng mừng ở đây là cầu thủ 24 tuổi người Anh này đã có sự khởi đầu như mơ cùng đại diện phía Bắc thành London.\r\n\r\nThật vậy, vừa chân ướt chân ráo sang Arsenal anh đã giúp Pháo thủ đánh bại Man City hùng mạnh trong trận tranh  Community Shield đêm Chủ nhật vừa qua. Với Rice trong đội hình, tuyến giữa của Arsenal đã trở nên chắc chắn và năng động hơn hẳn.\r\n\r\nĐể thấy rõ hơn sự khác biệt mà Rice tạo ra, chúng ta nên biết trước trận tranh Siêu cúp nước Anh vừa rồi, Arsenal đã thua tới 8 trận liên tiếp trước đó khi đụng phải Man City. Nếu xem kết quả thực tế trên sân là câu trả lời chính xác nhất, thì Rice qua trận đấu với The Citizens đã cho thấy anh là cầu thủ “đáng đồng tiền bát gạo”.\r\n\r\nCàng tuyệt vời hơn khi chính bản thân Rice còn cho rằng phiên bản tốt nhất của anh vẫn đang ở phía trước. Phát biểu trước báo giới, tiền vệ mang áo số 41 tự tin tuyên bố: “Tôi đang cảm thấy rất phấn khích. Khi ký hợp đồng với Arsenal tôi đã hình dung ra viễn cảnh này”.', 'keane.jpeg', 'Van Thuong', '', 1, 5, '2023-08-08 08:43:00', '2023-08-08 08:43:00'),
(10, 'Man City giữ chân Bernardo Silva', 'man-city-giu-chan-bernardo-silva', 'Tương lai của Bernardo Silva đang thu hút sự chú ý khi Man City có những động thái khẩn trương để giữ chân ngôi sao người Bồ Đào Nha trước sự lôi kéo từ Barca.', 'Với lối chơi đa năng, linh hoạt và hiệu quả, Bernardo Silva đã đóng góp công sức đáng kể vào việc giúp Man City hoàn tất cú ăn 3 lịch sử ở mùa giải trước. Tương lai của ngôi sao Bồ Đào Nha thu hút sự quan tâm của đông đảo fan Man City suốt thời gian qua, khi có tin cho rằng Silva sẽ nối gót đồng đội cũ Ilkay Gundogan cập bến Barca trong phiên chợ Hè năm nay. Cần biết hợp đồng hiện tại của Silva với đội chủ sân Etihad có thời hạn đến tháng 6/2025.\r\n\r\nTheo tờ Mundo Deportivo, Silva đang ngày càng bi quan về triển vọng đầu quân cho Barca trong kỳ chuyển nhượng Hè này. Trên thực tế, Barca đang phải thắt lưng buộc bụng sau khi chi hơn 150 triệu euro để ký hợp đồng với Robert Lewandowski, Jules Kounde và Raphinha ở mùa Hè năm ngoái. Bởi thế, dù tuyên bố sẽ ưu tiên ký hợp đồng với Silva, nhưng Barca vẫn chưa đưa ra lời đề nghị chính thức cho Man City. \r\n\r\nCần nhấn mạnh HLV Pep Guardiola của Man City đã tuyên bố sẽ chỉ “nhả” Silva nếu Barca chồng đủ lên bàn đàm phán 70 triệu bảng. Điều đó càng khiến thương vụ này đi vào bế tắc. Trong bối cảnh đó, Man City đã có những động thái khẩn trương để giữ chân Silva.\r\n\r\nCụ thể, Man City đã gửi lời đề nghị gia hạn hợp đồng với Silva kèm một loạt điều khoản hấp dẫn về mức lương, thưởng. Cần biết Silva hiện đang lĩnh mức lương 150.000 bảng/tuần ở Etihad. Mặc dù không đề cập chi tiết song theo giới thạo tin, mức lương mới của Silva sẽ tăng lên đáng kể một khi gia hạn hợp đồng. Bên cạnh đó, Man City còn phát ra thông điệp về việc xem Bernardo Silva là nhân tố quan trọng trong kế hoạch phát triển đội bóng và sẽ không để anh ra đi trong kỳ chuyển nhượng Hè này.\r\n\r\nCòn theo trùm săn tin chuyển nhượng Fabrizio Romano, Man City sẽ làm tất cả những gì có thể để giữ chân cầu thủ mà Pep coi là “đặc biệt” và là “một trong những cầu thủ tốt nhất từng huấn luyện trong cuộc đời”.\r\n\r\n', 'anh-silva-1.jpeg', 'Van Thuong', '', 1, 5, '2023-08-08 08:45:28', '2023-08-08 08:45:48'),
(11, 'Nhận định Barca La Liga mùa giải mới 2023/24: Ngai vàng khó giữ', 'nhan-dinh-barca-la-liga-mua-giai-moi-202324-ngai-vang-kho-giu', 'Bongdaplus.vn đánh giá sự chuẩn bị của Barca cho mùa giải mới 2023/24: danh sách chuyển nhượng, kết quả giao hữu, đội hình tối ưu, lịch thi đấu mùa tới… nhận định Barca và dự đoán thứ hạng của đội bóng xứ Catalunya.', 'Danh sách chuyển nhượng Barca Hè 2023\r\nTính cho đến ngày 8/8, Barca đã có 3 tân binh. Tuy nhiên, đội bóng xứ Catalunya mới chi vỏn vẹn 3,4 triệu euro vào thị trường chuyển nhượng mùa Hè này. Bản hợp đồng mất phí duy nhất của họ là tiền vệ phòng ngự Oriol Romeu chuyển đến từ CLB Girona. Đây là cầu thủ trưởng thành từ lò đào tạo trẻ của Barca và được kỳ vọng sẽ thích nghi nhanh chóng tại Camp Nou, nhằm phần nào khỏa lấp khoảng trống ở giữa sân sau khi Sergio Busquets chuyển sang Inter Miami.\r\n\r\nTuyến giữa của Barca mùa này đang khiến nhiều người hâm mộ lo lắng sau khi không còn sự phục vụ của Busquets. Tuy nhiên, với sự xuất hiện của Romeu và đặc biệt là bản hợp đồng chất lượng Ilkay Gundogan, nếu họ hòa nhập tốt, HLV Xavi có thể hoàn toàn yên tâm. Xin nhấn mạnh, Gundogan là cầu thủ đã đóng góp rất lớn cho “cú ăn ba” của Man City ở mùa trước. Barca quá hời khi “vớ” được ngôi sao người Đức mà không mất xu phí chuyển nhượng nào.\r\n\r\nBên cạnh việc chú trọng tăng cường tuyến giữa, Barca cũng không quên củng cố hệ thống phòng ngự. Họ đã ký hợp đồng dưới dạng chuyển nhượng tự do với trung vệ Inigo Martinez từ CLB Bilbao. Cầu thủ 32 tuổi này nhiều khả năng sẽ cặp với Ronaldo Araujo thành tấm lá chắn trước cửa khung thành của thủ môn Marc-Andre ter Stegen ở mùa tới. Còn Jules Kounde rất có thể sẽ được HLV Xavi kéo hẳn sang đá hậu vệ phải.\r\n\r\nTất nhiên, công cuộc củng cố đội hình của Barca chưa dừng lại. Đội bóng xứ Catalunya còn đang nhắm đến một vài mục tiêu khác. Trong đó, HLV Xavi rất muốn đưa được tiền vệ Bernardo Silva của Man City về Camp Nou trong kỳ chuyển nhượng mùa Hè năm nay. Bên cạnh đó, có thể họ sẽ cân nhắc tìm mua thêm tiền đạo, trong trường hợp Ousmane Dembele hoàn tất thủ tục chuyển sang đầu quân cho PSG.', 'chuyen-nhuong-barca.jpeg', 'Van Thuong', '', 2, 7, '2023-08-08 09:01:45', '2023-08-08 09:01:45'),
(12, 'Vì sao Brazil là ‘công xưởng’ của bóng đá thế giới', 'vi-sao-brazil-la-cong-xuong-cua-bong-da-the-gioi', 'Brazil từ lâu đã được biết đến là một “công xưởng” chuyên sản xuất các tài năng bóng đá ra khắp thế giới. Cầu thủ Brazil luôn được ưa chuộng ở bất kỳ đâu trên thế giới. Nhưng vì sao xứ sở Samba có thể làm được điều này?', 'Văn hóa Brazil là văn hóa bóng đá\r\nBóng đá đến Brazil hơn một thế kỷ trước, theo nghĩa đen là trong một chiếc vali, từ châu Âu để giải trí cho những người định cư ở đây. Nó đã trở thành một trò chơi hấp dẫn và một di sản văn hóa khi người Brazil bắt đầu thích môn thể thao này, đồng thời đưa những giá trị đặc trưng của riêng họ vào môn thể thao Vua. \r\n\r\nAldo Rebelo, cựu Bộ trưởng Thể thao Brazil, từng có những chia sẻ rất đáng chú ý về văn hóa bóng đá của người Brazil. Ông cho biết: “Người dân của chúng tôi rất đam mê bóng đá và bóng đá Brazil là niềm đam mê của hàng triệu người trên thế giới. Tất cả những gì bạn cần là một quả bóng và một sân để chơi ở bất kỳ nơi nào trên đất nước rộng lớn này, từ những bãi biển ở Rio de Janeiro đến những khu rừng ở Amazon”. \r\n\r\n“Điều đặc biệt là bóng đá Brazil không có một khuôn mẫu định sẵn. Bạn sẽ không thể tìm được một cầu thủ giống hệt Neymar, Pele, Ronaldo hay Romario. Mỗi người có một nét riêng không thể pha lẫn. Chúng tôi khuyến khích các cầu thủ trẻ hãy là chính họ với các đặc điểm của riêng họ”.\r\n\r\nKhi được hỏi về triết lý bóng đá của Brazil, ông Rebelo phân tích: “Triết lý của trường phái bóng đá Brazil, nếu có thể gọi như vậy, là hạnh phúc, ngẫu hứng và tự do với một trật tự (chiến thuật) nhất định. ‘Nhà máy sản xuất cầu thủ bóng đá’ của chúng tôi sử dụng giấc mơ của hàng triệu trẻ em làm nguyên liệu thô, những đứa trẻ hy vọng một ngày nào đó sẽ sánh ngang với các người hùng của mình, bất kể là về mức độ nổi tiếng hay sự thăng tiến trong xã hội. Như cựu huấn luyện viên Luiz Felipe Scolari của Brazil đã nói, khi ông còn huấn luyện ĐT Bồ Đào Nha, người Brazil luôn khao khát bóng đá”.\r\n\r\nÔng Rebelo cũng chia sẻ về lịch sử của văn hóa bóng đá Brazil: “Giới thượng lưu và trí thức vẫn có một số e ngại đối với bóng đá. Đó là lý do tại sao chúng tôi không có bất kỳ cuốn sách hay bộ phim lớn nào về bóng đá ở Brazil. Văn hóa và niềm đam mê bóng đá đến từ các tầng lớp dân cư ít đặc quyền hơn, những người hâm mộ tiết kiệm một ít tiền khó kiếm được để đến các sân vận động. Bóng đá ban đầu được giới thiệu và áp dụng ở Brazil bởi giới thượng lưu. Những người gốc Phi chỉ được phép thuê bởi các đội chuyên nghiệp vào khoảng năm 1920. Nhưng môn thể thao này ngay từ đầu đã trở thành niềm đam mê đối với mọi tầng lớp xã hội. Những người lao động đã giành lấy bóng đá từ giới thượng lưu và biến nó thành thứ như ngày nay ở Brazil”.\r\n\r\nVề vấn đề nhiều cầu thủ vĩ đại của Brazil xuất thân từ các khu ổ chuột, ông Rebelo giải thích: “Trong một xã hội, trong nhiều năm, được tạo thành từ các tầng lớp xã hội phân tầng, nơi màu da của một ai đó hoặc số tiền họ xác định vị trí của họ, bóng đá đã trở thành một cách để những người gốc Phi và người nghèo đạt được sự thăng tiến trong xã hội. Điều này giải thích tại sao rất nhiều cầu thủ bóng đá đến từ các khu ổ chuột hoặc khu vực thu nhập thấp. Và mặc dù xã hội không còn bất bình đẳng nữa, nhưng điều này vẫn xảy ra ngày nay”.\r\n\r\nỞ thời điểm hiện tại, nhiều người cho rằng nguyên mẫu sáng tạo tự do của cầu thủ Brazil đang ngày càng mai một. Ông Rebelo cho biết: “Một vấn đề chúng tôi gặp phải ở Brazil là các cầu thủ đến châu Âu khi còn rất trẻ. Do đó, họ thích nghi với các mô hình bóng đá ở Anh, Đức và Italia, điều này có hại cho tương lai nền bóng đá của chúng tôi. Brazil luôn nổi bật vì có những cầu thủ tấn công và tiền vệ tuyệt vời. Điều này đã thay đổi vài năm trước, khi các hậu vệ người Brazil nổi bật như Thiago Silva và David Luiz. Nhưng sau đó chúng tôi có Neymar, người đã mang lại tình yêu cho lối chơi khéo léo của chúng tôi”.', 'van-hoa-bong-da.jpeg', 'Van Thuong', '', 1, 25, '2023-08-09 08:50:57', '2023-08-09 08:50:57'),
(13, 'N\'Golo Kante - gã nô lệ đáng thương của đám người đại diện bất lương  ', 'ngolo-kante-ga-no-le-dang-thuong-cua-dam-nguoi-dai-dien-bat-luong', 'Vắng mặt trên sân cỏ kể từ tháng 8/2022, N\'Golo Kante gần như sa lầy vào của các vấn đề ngoài thể thao trong vòng 6 năm tính từ năm 2016. Tạp chí France Football đã lần theo chủ đề này để bóc trần một Hồ Sơ Kante rùng rợn, tàn ác và nham hiểm.', 'Vào mùa xuân 2017, N\'Golo Kante không còn là một đứa trẻ nữa. Anh đã 26 tuổi, nhưng chuyến đi khứ hồi giữa London và Paris sẽ để lại những vết sẹo. Khoảng cách 342 km giữa hai thủ đô này là đòn giáng cuối cùng vào những gì còn lại trong trắng của đứa trẻ đến từ Rueil-Malmaison, phía tây Paris.\r\n\r\nÍt ai ngờ rằng, nhà vô địch thế giới năm 2018 lại là nạn nhân của lòng tham, sự độc ác, tráo trở nảy sinh từ những người thân cận với anh trong vòng vài năm liền. Một cái bẫy phục kích tinh vi và nham hiểm đã được dựng lên để đưa Kante vào hiểm cảnh.\r\n\r\nNhững lời đe dọa nhằm vào Kante sẽ không trở thành hiện thực, nhưng chúng ta không tránh được cảm giác rùng mình. Khi đang tận hưởng những giây phút nghỉ ngơi tại một nhà hàng ở Hauts-de-Seine, anh đã được \"mời\" lên một chiếc xe tối om. Vài giây sau, một khẩu súng lạnh ngắt đặt trên đầu gối của Kante.\r\n\r\nMọi thứ diễn ra rất nhanh và rõ ràng: \"Thằng đại diện của mày, với nó, mày chỉ có hai lựa chọn: cắt đứt quan hệ với nó hoặc chúng ta sẽ cho nó xơi kẹo đồng\". Đây là một trong những tình tiết gây sốc trong \"Hồ sơ Kante\" - như cách gọi của cộng đồng bóng đá và những người am hiểu. Một \"hồ sơ\" bốc mùi căng thẳng, tham lam và những liên tưởng xấu, mà France Football muốn khám phá.\r\n\r\nTrong một tin nhắn âm thanh được Mediapart tiết lộ cách đây ít lâu, anh trai của tên cướp, người mà chúng ta sẽ nói đến sau, giải thích: \"Thằng em tao có hàng nóng đó nhưng nó cũng có não. Yên tâm, nó không làm gì mày đâu\". Sau đó, y cho Kante lựa chọn.\r\n\r\nTrong cuộc trao đổi thứ hai, mà France Football đã có thể lắng nghe, lần này là một câu hỏi về \"áp lực\" lặp đi lặp lại. Một cá nhân xác nhận cảnh N\'Golo bị đe dọa: \"Tên cướp đến, lôi anh ta khỏi một nhà hàng, tống vào ô tô và dí súng vào đầu gối anh ta\".\r\n\r\nỞ Rueil-Malmaison, trong số những người đã gặp Kante ai cũng biết bởi nó chẳng phải bí mật quái gì. \"Mọi người đều biết câu chuyện này. Báo chí đã đăng đầy trên mạng. Nhưng không có điều gì xảy ra cả. Một khẩu súng và những lời đe dọa không nhất thiết buộc N\'Golo phải thay người đại diện.\".\r\n\r\nKanté không còn muốn nói về những câu chuyện này nữa, và những khi nói chuyện trên điện thoại, anh đều lịch sự cảnh báo: \"Này, không có chuyện gì đâu nhé và tôi không nói gì đâu. Tôi đang tập trung cho sự nghiệp ở Chelsea, nơi tôi đang rất hạnh phúc, với mong muốn được trở lại sân cỏ\".', 'kante-cover.jpeg', 'Van Thuong', '', 1, 25, '2023-08-09 09:07:08', '2023-08-09 09:07:08'),
(14, 'Đại hội LĐBĐ Việt Nam khóa IX (nhiệm kỳ 2022-2026)', 'dai-hoi-ldbd-viet-nam-khoa-ix-nhiem-ky-2022-2026', 'Đại hội LĐBĐ Việt Nam khóa IX (nhiệm kỳ 2022-2026) sẽ khai mạc ngày 6/11 tại Hà Nội. Tham dự đại hội có tổng cộng 240 đại biểu và khách mời, trong đó có 74 tổ chức thành viên của LĐBĐ Việt Nam. Đại hội cũng có sự tham gia và giám sát của đại diện LĐBĐ thế giới (FIFA) và LĐBĐ Châu Á (AFC).', 'Đại hội sẽ bầu ra Ban Chấp hành LĐBĐ Việt Nam (VFF) khóa IX gồm 17 ủy viên, trong đó có 01 Chủ tịch, 03 Phó Chủ tịch và 13 Ủy viên; và Ban Kiểm tra gồm 01 Trưởng ban và 02 Ủy viên. \r\n\r\nDanh sách ứng cử Chủ tịch LĐBĐVN khóa IX\r\nHọ và tên: TRẦN QUỐC TUẤN\r\n\r\nNgày sinh: 05/01/1971\r\n\r\nQuê quán: Tây Sơn, Bình Định\r\n\r\nCHỨC VỤ: Công chức Tổng cục Thể dục thể thao; Quyền Chủ tịch Liên đoàn Bóng đá Việt Nam (VFF); Ủy viên Thường vụ Liên đoàn Bóng đá châu Á (AFC); Trưởng Ban thi đấu Liên đoàn Bóng đá châu Á (AFC)\r\n\r\nHỌC VẤN/ ĐÀO TẠO: Tiến sĩ Giáo dục học (được công nhận là giáo viên Thể dục - Huấn luyện viên môn Bóng đá); Trình độ lý luận chính trị: Cao cấp; Trình độ ngoại ngữ: Tiếng Nga. \r\n\r\nTHỜI GIAN HOẠT ĐỘNG: Hơn 20 năm kinh nghiệm trong tổ chức, điều hành các hoạt động bóng đá trên nhiều cương vị: Ban Thi đấu của VFF (2001), Tổng Thư ký VFF (2005-2012), Ủy viên thường vụ AFC (2011-2015, 2017-nay), Trưởng ban Thi đấu AFC (2017-nay), Phó Chủ tịch VFF (2014-2022), Quyền Chủ tịch VFF (tháng 1/2022-nay).\r\n\r\n************************\r\n\r\nDanh sách ứng cử Phó Chủ tịch phụ trách Chuyên môn\r\nHọ và tên: TRẦN ANH TÚ\r\n\r\nNgày sinh: 21/01/1963\r\n\r\nQuê quán: Nghệ An\r\n\r\nCHỨC VỤ: Ủy viên thường trực Ban Chấp hành LĐBĐ Việt Nam (VFF); Chủ tịch HĐQT Công ty Cổ phần Bóng đá Chuyên nghiệp Việt Nam (VPF); Chủ tịch LĐBĐ TP Hồ Chí Minh (HFF); Chủ tịch Hội đồng thành viên Công ty TNHH Thương mại Thái Sơn Nam\r\n\r\nHỌC VẤN/ ĐÀO TẠO: Kỹ sư Phát dẫn Điện/Cử nhân Luật; Trình độ lý luận chính trị: Trung cấp; Trình độ ngoại ngữ: Tiếng Anh bằng C.\r\n\r\nTHỜI GIAN HOẠT ĐỘNG: Nhiều năm kinh nghiệm quản lý bóng đá trên các cương vị: Phó Tổng Thư ký HFF (2008), Ủy viên Ban Futsal VFF (2008), Chủ tịch HFF (2012-nay), Ủy viên BCH VFF (2014-nay), Trưởng Ban Futsal VFF (2014-nay), Ủy viên Thường trực BCH VFF (2014-nay), Chủ tịch HĐQT Công ty VPF (2017-nay), Tổng Giám đốc Công ty VPF (2017-2020), Ủy viên Ban Futsal và Bóng đá Bãi biển LĐBĐ châu Á (2019-nay).\r\n\r\n**************************\r\n\r\nDanh sách ứng cử Phó Chủ tịch phụ trách Tài chính và Vận động tài trợ\r\n1. Họ và tên: LÊ VĂN THÀNH\r\n\r\nNgày sinh: 08/6/1959\r\n\r\nQuê quán: Hà Nội\r\n\r\nCHỨC VỤ: Phó Chủ tịch Liên đoàn Bóng đá Việt Nam (VFF); Chủ tịch HĐQT kiêm Tổng Giám đốc Công ty Cổ phần Động Lực.\r\n\r\nHỌC VẤN/ ĐÀO TẠO: Cử nhân Đại học Thể dục Thể thao, Quản trị Kinh doanh (Tuck School of Business tại Mỹ); Trình độ lý luận chính trị: Trung cấp.\r\n\r\nTHỜI GIAN HOẠT ĐỘNG: Công tác tại Ủy ban Thể dục thể thao (nay là Tổng cục Thể dục thể thao) từ 1982-1991, Chủ tịch Hội đồng quản trị kiêm Tổng Giám đốc Công ty Cổ phần Động Lực (1991-nay), Ủy viên BCH VFF (2001-2020), Chủ tịch Liên đoàn Bóng chuyền Việt Nam (2016-2021), Phó Chủ tịch VFF (2020-nay).\r\n\r\n2. Họ và tên: NGUYỄN TRUNG KIÊN\r\n\r\nNgày sinh: 15/7/1983\r\n\r\nQuê quán: Đông Hưng, Thái Bình\r\n\r\nCHỨC VỤ: Tổng Giám đốc Công ty Cổ phần Giải pháp Truyền hình Thế hệ Mới\r\n\r\nHỌC VẤN/ ĐÀO TẠO: Cử nhân Toán tin Ứng dụng Đại học Khoa học Tự nhiên; Trình độ ngoại ngữ: Tiếng Anh B.\r\n\r\nTHỜI GIAN HOẠT ĐỘNG: Giàu kinh nghiệm trong lĩnh vực phát triển các kênh truyền thông, vận động tài trợ và khai thác bản quyền truyền hình trong các cương vị: Tổng Giám đốc Công ty Cổ phần Giải pháp Truyền hình Thế hệ Mới (2014-nay); Ủy viên Ban Truyền thông Đối ngoại LĐBĐ Việt Nam (2019-nay).\r\n\r\n*************************\r\n\r\nDanh sách ứng cử Phó Chủ tịch phụ trách Truyền thông và Đối ngoại\r\n1. Họ và tên: CAO VĂN CHÓNG\r\n\r\nNgày sinh: 24/11/1979\r\n\r\nQuê quán: Tiền Giang\r\n\r\nCHỨC VỤ: Phó Chủ tịch Liên đoàn Bóng đá Việt Nam (VFF); Phó Giám đốc Sở Văn hóa, Thể thao và Du lịch tỉnh Bình Dương; Thành viên Hội đồng Trường, Trưởng Ban Truyền thông Đối ngoại - Trường Đại học Tiền Giang.\r\n\r\nHỌC VẤN/ ĐÀO TẠO: Tiến sĩ Khoa học quản lý, Cử nhân Kinh tế, Cử nhân Quản lý Nhà nước; Trình độ lý luận chính trị: Cao cấp; Trình độ ngoại ngữ: Cử nhân tiếng Anh.\r\n\r\nTHỜI GIAN HOẠT ĐỘNG: Gần 20 năm kinh nghiệm trong quản lý, điều hành, tổ chức các hoạt động bóng đá trên nhiều cương vị: Giám đốc Thương mại, Phó Tổng Giám đốc, Tổng Giám đốc Câu lạc bộ Becamex Bình Dương (2004-2015), Tổng Giám đốc Công ty Cổ phần Bóng đá Chuyên nghiệp Việt Nam (VPF, 2015-2017), Phó Chủ tịch VFF (2018-nay),  Giám đốc Truyền thông, Phó Tổng Giám đốc Tổng Công ty Becamex IDC (2018-2022), Thành viên Hội đồng Trường, Trưởng Ban Truyền thông Đối ngoại - Trường Đại học Tiền Giang (2019-nay), Phó Giám đốc Sở VH-TT&DL tỉnh Bình Dương (tháng 6/2022-nay). \r\n\r\n2. Họ và tên: NGUYỄN XUÂN VŨ\r\n\r\nNgày sinh: 12/4/1981\r\n\r\nQuê quán: Bến Tre\r\n\r\nCHỨC VỤ: Chủ tịch CLB Bóng đá Phù Đổng\r\n\r\nHỌC VẤN/ĐÀO TẠO: Thạc sĩ Tài chính Ngân hàng; Trình độ lý luận chính trị: Trung cấp; Trình độ ngoại ngữ: Tiếng Anh C.\r\n\r\nTHỜI GIAN HOẠT ĐỘNG: Chủ tịch CLB Bóng đá Phù Đổng (2015-nay), Phó Chủ tịch phụ trách Truyền thông và Đối ngoại LĐBĐ TP Hà Nội nhiệm kỳ 2021 – 2026, Phó Tổng Giám đốc Ngân hàng Sacombank (2014-2018), Thành viên Hội đồng quản trị Ngân hàng Sacombank (2018-nay). \r\n\r\n****************************', 'cover1.jpeg', 'Van Thuong', '', 1, 26, '2023-08-09 09:09:19', '2023-08-09 09:09:19'),
(15, 'Huỳnh Như: Xứng đáng cầu thủ nữ Việt Nam xuất sắc nhất lịch sử', 'huynh-nhu-xung-dang-cau-thu-nu-viet-nam-xuat-sac-nhat-lich-su', '2022 có thể là năm đặc biệt thành công với Huỳnh Như. Danh hiệu Quả bóng vàng nữ Việt Nam lần thứ 5 trong sự nghiệp là hoàn toàn xứng đáng với những gì mà cô gái sinh năm 1991 thể hiện. Đồng thời, điều đó cũng đưa cô trở thành Cầu thủ nữ Việt Nam xuất sắc nhất lịch sử.', 'Danh hiệu Quả bóng vàng nữ Việt Nam 2022 giúp Huỳnh Như lập nên 2 cột mốc vô tiền khoáng hậu trong lịch sử.  Thứ nhất, chưa một cầu thủ nào giành 4 danh hiệu Quả bóng vàng nữ Việt Nam liên tiếp như Huỳnh Như. Trước năm 2022, Huỳnh Như đã đoạt Quả bóng vàng nữ liên tiếp vào các năm 2019, 2020, 2021.\r\n\r\nVIDEO: Huỳnh Như lần thứ 5 giành Quả bóng Vàng nữ Việt Nam\r\n\r\nNgoài ra, vào năm 2016, Huỳnh Như cũng có lần đầu tiên trong sự nghiệp giành Quả bóng Vàng. Như vậy, tính đến hiện tại, Huỳnh Như đã trở thành Cầu thủ nữ Việt Nam có nhiều giải Quả bóng Vàng nhất trong lịch sử với 5 lần đoạt danh hiệu này. Thành tích của Huỳnh Như nhiều hơn so với cựu cầu thủ Đoàn Thị Kim Chi (4 lần đoạt Quả bóng Vàng các năm 2004, 2005, 2007 và 2009).\r\n\r\nÝ nghĩa hơn, Huỳnh Như nhận Quả bóng vàng nữ Việt Nam lần thứ 5 trong bối cảnh cô đang có sự hòa nhập tốt tại Lank FC (CLB nữ Bồ Đào Nha). Cô có thể xem là người mở đường để bóng đá nữ Việt Nam tự tin xuất ngoại trong tương lai.', 'huynh-nhu-graphic.jpeg', 'Van Thuong', '', 1, 26, '2023-08-09 09:10:35', '2023-08-09 13:40:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `ten`, `mat_khau`, `dia_chi`, `hinh_anh`, `phan_quyen`, `created_at`, `updated_at`) VALUES
(1, 'tvt230101@gmail.com', 'Van Thuong', '12345678', 'abc', 'avatar-1.jpg', 'Quản Lý', '2023-08-07 17:51:33', '2023-08-07 17:51:33'),
(2, 'tvt@gmail.com', 'tvt', '12345678', 'def', 'avatar-2.jpg', 'Khách Hàng', '2023-08-07 17:51:33', '2023-08-07 17:51:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_TT`),
  ADD KEY `id_TT` (`id_TT`);

--
-- Chỉ mục cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_TL` (`id_TL`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_LT` (`id_LT`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_TT`) REFERENCES `tin_tuc` (`id`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  ADD CONSTRAINT `loai_tin_ibfk_1` FOREIGN KEY (`id_TL`) REFERENCES `the_loai` (`id`);

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `tin_tuc_ibfk_1` FOREIGN KEY (`id_LT`) REFERENCES `loai_tin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
