-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 11:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `type_id`, `name`, `image`, `price`, `cost`, `mota`) VALUES
(1, 1, 'Bao da iPhone 13 Pro OU Trong suốt', '11.jpg', '5000000 ', '700000', 'Ốp lưng iPhone 13 Pro OU trong suốt – Lựa chọn tối ưu\r\nỐp lưng luôn là một phụ kiện cần thiết, một sự bảo vệ thầm lặng dành cho bất kỳ chiếc điện thoại nào. Và một chiếc điện thoại cao cấp của Apple như iPhone 13 Pro sẽ rất cần một chiếc ốp lưng iPhone 13 Pro OU trong suốt. OU xứng đáng là chiếc ốp lưng nên được lựa chọn để có thể được thể hiện trọn vẹn vẻ đẹp và bảo vệ toàn diện cho chiếc điện thoại.'),
(2, 1, 'Bao da Samsung Galaxy S24 Ultra Smartview chính hãng\r\n', '12.jpg', '763000', '1090000', 'Bao da Samsung Galaxy S24 Ultra thông minh – Thiết kế cửa sổ hiển thị tiện lợi\r\nBao da Samsung Galaxy S24 Ultra thông minh là phụ kiện không thể thiếu trên chiếc flagship cao cấp mới nhất từ nhà Samsung. Bao da được thiết kế tinh tế từ chất liệu cao cấp, giúp bảo vệ thiết bị của bạn khỏi va đập và trầy xước. Vậy bao da Samsung Galaxy S24 Ultra được làm từ chất liệu gì, thiết kế và tính năng ra sao? Liệu có đáng để bạn lựa chọn hay không?'),
(3, 1, 'Bao da iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe\r\n', '13.jpg', '1050000', '1590000', 'Ốp lưng iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe - Bảo vệ bền bỉ dưới mọi tác động\r\nỐp lưng iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe là sản phẩm chính hãng đến từ Apple dành riêng cho iPhone 15 Pro Max. Do đó, ốp được hoàn thiện tỉ mỉ mang tới vẻ ngoài đẹp, bảo vệ toàn diện góc cạnh và có hỗ trợ sạc MagSafe tiện lợi.'),
(4, 1, 'Bao da Samsung Galaxy S24 Plus silicon chính hãng\r\n', '14.jpg', '552000', '690000', 'Ốp lưng Samsung Galaxy S24 Plus Silicon - Màu sắc trẻ trung, năng động\r\nNếu bạn đang tìm một phụ kiện bảo vệ cho điện thoại Galaxy S24 Plus thì đừng bỏ qua mẫu ốp lưng silicon chính hãng từ Samsung. Sản phẩm được nghiên cứu riêng cho phiên bản Plus của bộ sưu tập S24 series với những ưu điểm vượt trội về thiết kế và chất liệu. '),
(5, 1, 'Bao da iPhone 11 Filada trong viền màu\r\n', '15.jpg', '105000', '150000', 'Ốp lưng iPhone 11 Filada trong viền màu - Thiết kế đổi mới, bảo vệ toàn diện\r\niPhone 11 được thiết kế với mặt lưng bằng kính và khung viền kim loại rất dễ bị trầy xước hoặc nứt vỡ trong quá trình sử dụng. Một trong nhưng phụ kiện có thể giúp bạn bảo vệ toàn diện được chiếc iPhone 11 đang được nhiều iFan lựa chọn đó là ốp lưng Filada trong viền màu.'),
(6, 2, 'Cáp Baseus Crystal Shine USB-A to Lightning 1.2M', '21.jpg', '90000', '300000', 'Cáp Baseus Crystal Shine USB-A to Lightning dài 1.2m - Sạc nhanh, siêu bền\r\nCáp Baseus Crystal Shine USB-A to Lightning dài 1.2m là phụ kiện cần thiết, với tác dụng để sạc pin và đồng bộ dữ liệu cao cho các thiết bị của Apple thông qua cổng sạc Lightning. Vì thế một khi bạn làm mất hay hỏng chiếc cáp sạc hãy trang bị ngay cáp Baseus Crystal Shine USB-A to Lightning.'),
(7, 2, 'Cáp Anker Powerline Flow III USB-C to Lightning A8662 0.9m', '22.jpg', '270000', '480000', 'Cáp USB-C to Lightning Anker Powerline Flow III 0.9m A8662 – Cáp sạc bền bỉ, sạc nhanh tiện lợi\r\nCáp USB-C to Lightning Anker Powerline Flow III 0.9m A8662 nổi bật với thiết kế hoàn thiện bền bỉ. Với khả năng sạc nhanh ấn tượng, sản phẩm cáp sạc lightning trên hứa hẹn sẽ là sự lựa chọn tuyệt vời giúp người dùng dễ dàng sạc nhanh các thiết bị chỉ trong thời gian ngắn.'),
(8, 2, 'Cáp sạc nhanh tự ngắt Baseus Explorer Series Type-C to iPhone 20W 1M', '23.jpg', '170000', '290000', 'ĐẶC ĐIỂM NỔI BẬT\r\nHỗ trợ sạc nhanh Power Delivery công suất 20W cho tốc độ truyền tải dữ liệu 480 Mbps\r\nTính năng tự động ngắt sạc khi đầy giúp chống chai pin, phù pin và tối ưu tuổi thọ pin thiết bị\r\nThiết kế đầu cáp trong suốt nhìn thấy linh kiện, đèn LED báo hiệu bên trong siêu hiện đại\r\nĐầu cáp và các tiếp điểm thiết kế lại để đảm bảo bền hơn, chống gãy tốt, tiếp xúc tốt hơn'),
(9, 2, 'Củ sạc Samsung Type-C 45W kèm cáp Type C to Type C 1.8M T4511', '24.jpg', '850000', '1190000', 'Củ sạc nhanh Samsung T4511 4W kèm cáp Type-C to Type-C 1.8m công suất 45W, hỗ trợ sạc nhanh\r\nBộ sạc T4511 là sản phẩm được chính Samsung thiết kế dành riêng cho các thiết bị có cổng sạc Type-C, nhất là các dòng sản phẩm của Samsung. Bộ sạc sẽ giúp người dùng nhanh chóng làm đầy dung lượng pin trong thời gian ngắn.'),
(10, 2, 'Cáp Baseus Golden Loop 3 trong 1 Elastic 3.5A 1.2M\r\n', '25.jpg', '170000', '300000', 'Cáp Baseus Golden Loop 3 in 1 Elastic 3.5A 1.2M - Tiện dụng để sạc 3 thiết bị dễ dàng hơn\r\nCáp Baseus Golden Loop 3 in 1 Elastic 3.5A 1.2M được thiết kế dưới dạng dây rút, đa năng với 3 đầu sạc trong 1. Cáp được hỗ trợ dòng lên đến 3.5 A nên tốc độ sạc được cải thiện hơn 30% và đảm bảo độ ổn định bởi bộ xử lý tiên tiến.'),
(11, 3, 'Pin sạc dự phòng không dây Baseus Magnetic Mini Fast Charge Type-C Edition 10000mAh 30W', '32.jpg', '790000', '1450000', 'Pin sạc dự phòng không dây Baseus Magnetic Miniedition 10000mAh 30W - Thiết kế nhỏ gọn, dung lượng khủng\r\nPin sạc dự phòng không dây Baseus Magnetic Miniedition 10000mAh 30Wnhỏ gọn nhưng có dung lượng khủng để hỗ trợ nhu cầu của bạn. Với những điểm nổi trội về tính năng sản phẩm này sẽ làm người dùng hài lòng khi sử dụng trong thời gian dài.\r\n\r\n'),
(12, 3, 'Pin dự phòng Anker Nano 10000mAh 30W USB-C tích hợp A1259', '33.jpg', '930000', '1350000', 'Pin dự phòng Anker Nano 10000mAh 30W USB-C tích hợp A1259 - Sạc siêu nhanh 2 chiều 30W\r\nPin dự phòng Anker Nano 10000mAh 30W USB-C tích hợp A1259 trải nghiệm ấn tượng sạc nhanh cho các thiết bị công nghệ khác nhau. Bạn có thể yên tâm sử dụng sạc dự phòng Anker này trong thời gian dài nhờ thương hiệu Anker uy tín trên thị trường.'),
(13, 3, 'Pin sạc dự phòng Golf 10.000mAh tích hợp dây L106', '34.jpg', '270000', '640000', 'Sạc dự phòng Golf 10.000mAh tích hợp dây L106 - Thiết kế nhỏ gọn, vô cùng tiện lợi\r\nPin sạc dự phòng Golf 10.000 mAh tích hợp dây L106 là một phụ kiện không thể thiếu trong balo hay túi xách của bạn, đặc biệt là những người dùng thường xuyên làm việc ở bên ngoài hay đi du lịch. Đây là sản phẩm pin dự phòng Golf vừa mới được ra mắt mang trong mình nhiều sự hiện đại.'),
(14, 3, 'Pin sạc dự phòng Energizer 20000mAh QE20013PQ', '35.jpg', '840000', '1200000', 'Pin dự phòng Energizer 20.000 mAh QE20013PQ - Pin trâu cùng thiết kế nhỏ gọn\r\nPin dự phòng Energizer 20.000 mAh QE20013PQ là một chiếc pin được sản xuất “đa-zi-năng” dành cho dế yêu và thiết bị. Thiết kế nhỏ gọn, pin dung lượng lớn và công nghệ sạc nhanh đã giúp cho pin dự phòng Energizer được nhiều người tiêu dùng lựa chọn.'),
(15, 4, 'Miếng Dán PPF Full Viền Mặt sau cho iPhone 11 Pro Max', '41.jpg', '135000', '150000', 'Miếng dán PPF full viền mặt sau cho iPhone 11 Pro Max giá rẻ, chất lượng cao.\r\nKhông thể phủ định rằng mặt lưng của iPhone 11 Pro Max chính là một điểm nổi bật và thu hút nhất. Sở hữu những màu sắc của máy hiện được đánh giá đẹp nhất. Bạn muốn bảo vệ mặt lưng của máy nhưng vẫn khoe được vẻ đẹp nguyên bản của nó. Miếng dán PPF full viền mặt lưng iPhone 11 Pro Max là một lựa chọn mà bạn nên cân nhắc.'),
(16, 4, 'Dán chống va đập cho Samsung Galaxy S21 FE Zeelot Full cao cấp', '42.jpg', '174000', '290000', 'Dán chống va đập Zeelot Full cho Samsung Galaxy S21 FE - Lớp skin bền bỉ\r\nSamsung Galaxy S21 FE là chiếc điện thoại flagship sở hữu công nghệ màn hình rất phức tạp, thậm chí là cong nhẹ để tăng trải nghiệm người dùng. Vì thế không ít khó khăn cho nhà cung cấp dán cường lực trong quá trình sản xuất. Dù vậy, mọi thứ đều trở nên đơn giản hóa với dán chống va đập Zeelot Full cho Samsung Galaxy S21 FE.'),
(17, 4, 'Dán chống va đập Samsung Galaxy M34 Full Màn', '43.jpg', '120000', '150000', 'Kính cường lực Samsung Galaxy M34 - Full màn thẩm mỹ, bảo vệ tối ưu \r\nKính cường lực Samsung Galaxy M34 là một lựa chọn đáng cân nhắc để bảo vệ màn hình toàn diện thiết bị. Các góc cạnh của màn hình sẽ được đảm bảo an toàn tối đa trước mọi tình huống không mong muốn như va đập, rơi rớt, hoặc tiếp xúc với nước.'),
(18, 4, 'Dán cường lực Xiaomi Redmi Note 13 Full', '44.jpg', '120000', '150000', 'Dán cường lực Xiaomi Redmi Note 13 13 full an toàn, chất lượng\r\nDán cường lực Xiaomi Redmi Note 13 chống va đập full là một loại miếng dán màn hình được thiết kế dành riêng cho dòng điện thoại Redmi Note 13. Miếng dán này được làm từ chất liệu kính cường lực cao cấp, có độ cứng gấp 4 lần kính thông thường, giúp bảo vệ màn hình điện thoại một cách tối ưu khỏi hầu hết va đập và trầy xước.'),
(19, 4, 'Dán cường lực Xiaomi Redmi 13C chống va đập Full màn', '45.jpg', '120000', '150000', 'Dán cường lực Xiaomi Redmi 13C - Thiết kế siêu mỏng, chống trầy xước, va đập ấn tượng\r\nDán cường lực Xiaomi Redmi 13C được đánh giá là lựa chọn xuất sắc để bảo vệ màn hình của Xiaomi Redmi 13C an toàn khỏi những va chạm không đáng có. Với độ cứng vượt trội, miếng dán màn hình Xiaomi này giúp duy trì sự sáng bóng và khả năng hiển thị chân thực,tạo nên trải nghiệm xem hình ảnh rõ nét và không hề bị giảm chất lượng.'),
(20, 5, 'Thẻ nhớ SanDisk Class 10 64GB 100MB/s', '51.jpg', '149000', '239000', 'Thẻ nhớ SanDisk Class 10 64GB 100MB/s - Dung lượng lớn, tốc độ cao\r\nĐể mở rộng dung lượng bộ nhớ cho các thiết bị của bạn trong quá trình sử dụng hằng ngày. Trang bị thẻ nhớ SanDisk Class 10 64GB 100MB/s là một giải pháp tối ưu nhất cho bạn. Với dung lượng khá cao kèm tốc độ đọc ghi nhanh sẽ giúp bạn mở rộng bộ nhớ tốt nhất cho thiết bị của mình.'),
(21, 5, 'Thẻ nhớ SanDisk Class 10 128GB 100MB/s', '52.jpg', '269000', '449000', 'Thẻ nhớ SanDisk Class 10 128GB 100MB/s -Thiết kế bền bỉ, lưu trữ và truyền tải nhanh chóng\r\nHiện nay nhu cầu lưu trữ dữ liệu và hình ảnh của người dùng ngày càng lớn, bộ nhớ của thiết bị không đủ đáp ứng nhu cầu của bạn. Chính vì thế thẻ nhớ SanDisk Class 10 128GB 100MB/s ra đời. SanDisk Class 10 với thiết kế nhỏ gọn bền bỉ dung lượng lưu trữ lớn truyền tải dữ liệu nhanh chóng khiến chiếc thẻ nhớ ngày nổi bật trong thị trường hiện nay.'),
(22, 5, 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150MB/s', '53.jpg', '579000', '890000', 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs - Truyền tải độ phân giải cao, tốc độ nhanh\r\nThẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs cho phép truyền tải hình ảnh và video có độ phân giải cao. Với dung lượng 256GB, người dùng có thể lưu giữ thoải mái và an toàn nhiều dữ liệu, do thẻ nhớ có khả năng chống thấm, chống nhiệt tốt.'),
(23, 5, 'Thẻ nhớ Micro SDXC Sandisk Extreme V30 A2 190MB/s 1TB', '54.jpg', '3490000', '3590000', 'Thẻ nhớ MicroSDXC Sandisk Extreme V30 A2 1TB 190MB/s - Tốc độ đọc cực nhanh\r\nThẻ nhớ MicroSDXC Sandisk Extreme V30 A2 1TB 190MB/s có khả năng đọc, ghi cực kỳ nhanh chóng, và mở rộng dung lượng khá lớn, giúp bạn lưu trữ hàng loạt các tài liệu quan trọng. Nếu bạn quan tâm tới thẻ nhớ này, thì hãy tham khảo phần nội dung phía bên dưới nhé.'),
(24, 5, 'Thẻ nhớ Samsung Evo Plus 128GB 130MPS', '55.jpg', '329000', '449000', 'Thẻ nhớ 128GB Samsung Evo Plus (2021) 130MPS - Dung lượng lớn, an toàn cao\r\nThẻ nhớ 128GB Samsung Evo Plus (2021) 130MPS có hiệu suất đáng tin cậy, từ tốc độ nâng cao và khả năng tương thích. Thẻ còn đáp ứng tất cả các nhu cầu về lưu trữ, khi có dung lượng lớn và tốc độ tối ưu lên đến 130 MB/s.'),
(25, 3, 'Pin sạc dự phòng Anker 633 Magnetic A1641 10.000mAh 20W', '31.jpg', '1050000', '2000000', 'Pin Dự Phòng Anker 633 Magnetic (Mago) 10.000MAH - A1641 luôn là cái tên nằm trong top những chiếc pin sạc không dây được yêu thích bậc nhất trên thị trường. Sản phẩm pin dự phòng Anker mang đến thiết kế nhỏ gọn cùng khả năng sạc có thể làm hài lòng nhiều khách hàng.'),
(26, 1, 'Bao da Samsung Galaxy S21 FE Clear View Cover\r\n', '16.jpg', '774000', '1290000', 'Thiết kế dạng ốp 2 mặt bảo vệ toàn diện góc cạnh\r\nBao da Samsung S21 FE ôm trọn từng chi tiết, góc cạnh của chiếc điện thoại. Mặt trước của bao da làm bằng chất liệu mềm mịn xịn tiếp xúc êm ái màn hình cảm ứng, mặt sau được làm từ chất liệu chắc chắn bền tốt nhằm giúp bảo vệ thiết bị khỏi các va chạm.'),
(27, 1, 'Bao da iPad Air 10.9 Zagg kèm bàn phím Trackpad\r\n', '17.jpg', '2450000', '3500000', 'Bao da iPad Air 10.9 ZAGG kèm bàn phím Trackpad - Tích hợp đèn LED bàn phím ấn tượng\r\nBao da iPad Air 10.9 ZAGG kèm bàn phím Trackpad là mẫu ốp lưng kèm bàn phím đời mới rất thuận tiện cho học tập và làm việc. Sản phẩm bao da iPad Air 10.9 được sản xuất bởi thương hiệu cao cấp cho iPad từ Mỹ và phù hợp cho các dòng iPad Air 10.9 inch. '),
(33, 1, 'Bao Da Mutural Design Folio cho iPad Pro 11 2021\r\n', '18.jpg', '531000', '590000', 'Bao da Mutural Design Folio cho Apple iPad Pro 11 2021 – Thẩm mỹ, cao cấp\r\nBao da Mutural Design Folio cho Apple iPad Pro 11 2021 là món phụ kiện phổ biến mà người dùng iPad 11 2021 không thể không trang bị. Với thiết kế mềm dẻo cùng khả năng chống sốc tốt, sản phẩm sẽ giúp bảo vệ iPad của bạn được an toàn và mang đến trải nghiệm tốt cho người dùng.'),
(34, 2, 'Cáp Ugreen Type-C to Type-C 100W 1M US288\r\n', '26.jpg', '80000', '150000', 'Cáp Type C to Type C Ugreen US288 100W 1M - Chất liệu Nylon bền bỉ\r\nCáp Type C to Type C Ugreen US288 100W 1M có khả năng cung cấp nguồn điện năng rất nhanh chóng cho thiết bị điện tử, nhằm tối ưu thời gian cho người dùng. Nếu bạn quan tâm tới sản phẩm cáp sạc USB-C này, thì hãy tham khảo phần nội dung phía bên dưới đây nhé.'),
(35, 2, 'Cáp 3 in 1 Devia Smart Series\r\n', '27.jpg', '100000', '120000', 'Dây cáp DEVIA Smart 3 đầu sạc - Thiết kế độc đáo, nâng cao hiệu quả sạc\r\nDây cáp DEVIA Smart 3 đầu sạc là một trong những sản phẩm cáp sạc nổi bật của thương hiệu DEVIA. Với thiết kế độc đáo tích hợp 3 đầu sạc khác nhau vào chung một dây sạc, chiếc cáp nhiều cổng này mang lại cho người dùng sự tiện lợi cùng khả năng sạc cực kỳ nhanh chóng.'),
(36, 2, 'Cáp Ugreen USB-A to Type-C 1M US288\r\n', '28.jpg', '70000', '160000', 'Cáp USB-A to type-C Ugreen US288 1m – Chất liệu siêu bền\r\nCáp USB-A to type-C Ugreen US288 1m được nhiều người dùng sử dụng là nhờ vào thiết kế và tính năng ấn tượng, mang hiệu quả tối ưu khi nạp năng lượng cho các thiết bị thông minh. Với nhiều ưu điểm nên sản phẩm cáp USB-C này sẽ làm người dùng hài lòng.'),
(37, 3, 'Pin sạc dự phòng Baseus Airpow Fast Charge 20000mAh 20W\r\n', '36.jpg', '420000', '600000', 'Pin sạc dự phòng Baseus Airpow Fast Charge 20000mAh 20W – Năng lượng dồi dào, sạc nhanh tức thì\r\nVới pin sạc dự phòng Baseus Airpow Fast Charge 20000mAh 20W, bạn sẽ luôn có nguồn năng lượng dồi dào trong tầm tay mỗi khi cần. Với công nghệ sạc nhanh tức thì, bạn có thể sạc điện thoại, máy tính bảng hay các thiết bị di động khác một cách nhanh chóng và tiện lợi.'),
(38, 3, 'Pin dự phòng sạc nhanh Baseus Qpow Pro 20.000mAh 20W cho iPhone, Type C(kèm cáp)\r\n', '37.jpg', '680000', '850000', 'Pin dự phòng sạc nhanh Type-C Baseus Qpow Pro 20.000 mAh 20W - Hỗ trợ sạc đa thiết bị tốc độ cao\r\nPin dự phòng sạc nhanh Type-C Baseus Qpow Pro 20.000 mAh 20W được trang bị dung lượng pin lớn để đảm bảo thiết bị thông minh của người dùng luôn trong trạng thái sẵn sàng hoạt động. Sản phẩm còn được trang bị các cổng đầu ra tích hợp công nghệ sạc nhanh để có được hiệu suất sử dụng cao và tính ổn định.'),
(39, 3, 'Pin sạc dự phòng Samsung EB-P4520X 20000 mAh 45W\r\n', '38.jpg', '1030000', '1490000', 'Pin sạc dự phòng Samsung EB-P4520X 20.000 mAh 45W - Dung lượng lớn, tốc độ sạc nhanh\r\nPin sạc dự phòng Samsung EB-P4520X 20.000 mAh 45W là mẫu pin sạc dự phòng dành cho đa dạng thiết bị thông minh khi có công suất tối đa ở mức 45W. Dung lượng pin 20.000 mAh sẽ đảm bảo rằng người dùng có thể sử dụng phụ kiện trong thời gian dài cũng như hỗ trợ sạc pin cùng lúc cho nhiều thiết bị mà không lo hết năng lượng.'),
(40, 4, 'Dán chống va đập Samsung Galaxy S24 Ultra Mipow Premium Full cao cấp\r\n', '46.jpg', '400000', '400000', 'Kính cường lực Samsung Galaxy S24 Ultra MiPow Premium - Độ cứng và độ mỏng ấn tượng \r\nKính cường lực Samsung Galaxy S24 Ultra MiPow Premium từ Kingbull thực sự ấn tượng với công nghệ tráng màn đỉnh cao. Sản phẩm kính “Vua trâu” này mang lại tinh tế trong thiết kế, giúp người dùng trải nghiệm miếng dán màn hình S24 Ultra mượt mà khi thao tác, mô phỏng chính xác như màn hình thật.'),
(41, 4, 'Samsung Galaxy A55 dán chống va đập Mocoll Full cao cấp\r\n', '47.jpg', '224000', '280000', 'Dán cường lực Samsung Galaxy A55 Mocoll Full: độ cứng đáng tin cậy, chạm mượt mà\r\nNếu bạn đang tìm kiếm miếng dán cường lực cho Samsung Galaxy A55 thì đừng bỏ qua sản phẩm của Mocoll. Dán cường lực Mocoll Full hứa hẹn sẽ mang tới trải nghiệm hài lòng cho bạn nhờ được sản xuất từ chất liệu kính cứng với kích thước lý tưởng cho Galaxy A55.'),
(42, 4, 'Dán chống va đập Full màn hình Samsung Galaxy A53\r\n', '48.jpg', '45000', '150000', 'Dán chống va đập Full màn hình Samsung Galaxy A53 – Bảo vệ màn hình hiệu quả\r\nKính cường lực Samsung Galaxy A53 là lựa chọn lý tưởng để bạn an tâm dùng smartphone mỗi ngày. Miếng dán với độ bền cao, thẩm mỹ cho điện thoại và giúp điện thoại sạch sẽ hơn. Vậy miếng dán này có nên mua hay không, hãy tìm câu trả lời trong phần mô tả dưới đây!'),
(43, 5, 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150MB/s\r\n', '56.jpg', '579000', '890000', 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs - Truyền tải độ phân giải cao, tốc độ nhanh\r\nThẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs cho phép truyền tải hình ảnh và video có độ phân giải cao. Với dung lượng 256GB, người dùng có thể lưu giữ thoải mái và an toàn nhiều dữ liệu, do thẻ nhớ có khả năng chống thấm, chống nhiệt tốt'),
(44, 5, 'Thẻ nhớ microSD Kingston Class 10 128GB (Không kèm Adapter)\r\n', '57.jpg', '249000', '399000', 'Thẻ nhớ MicroSD Kingston Class 10 128GB (non adapter) - Dung lượng 128GB, sử dụng bền bỉ\r\nThẻ nhớ MicroSD Kingston Class 10 128GB (non adapter) 128GB là một trong những sản phẩm thẻ nhớ được đánh giá cao về dung lượng lớn và tốc độ xử lý nhanh chóng, phục vụ tốt cho các nhu cầu lưu trữ dữ liệu đa dạng của người dùng hiện đại. Sản phẩm không chỉ đáp ứng được các yêu cầu kỹ thuật mà còn mang lại sự tiện lợi và đáng tin cậy trong mọi tình huống sử dụng'),
(45, 5, 'Thẻ nhớ Micro SDXC Sandisk Extreme Pro V30 A2 200MB/S 128GB\r\n', '58.jpg', '549000', '699000', 'Thẻ nhớ Micro SDXC Sandisk Extreme V30 A2 200MB/S 128GB – Tăng dung lượng lưu trữ\r\nThẻ nhớ Micro SDXC Sandisk Extreme V30 A2 200MB/S 128GB được thiết kế chất lượng cao, bền bỉ, bảo vệ những tài liệu được lưu trữ một cách tốt nhất. Với dung lượng lưu trữ lên đến 128GB cùng tốc độ đọc/ ghi dữ liệu cực nhanh, chiếc thẻ nhớ này sẽ là phụ kiện cần thiết cho nhiều người dùng.'),
(46, 1, 'Bao da Samsung Galaxy S24 Plus silicon chính hãng\r\n', '14.jpg', '552000', '690000', 'Ốp lưng Samsung Galaxy S24 Plus Silicon - Màu sắc trẻ trung, năng động\r\nNếu bạn đang tìm một phụ kiện bảo vệ cho điện thoại Galaxy S24 Plus thì đừng bỏ qua mẫu ốp lưng silicon chính hãng từ Samsung. Sản phẩm được nghiên cứu riêng cho phiên bản Plus của bộ sưu tập S24 series với những ưu điểm vượt trội về thiết kế và chất liệu. ');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'nguoi_dung');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_product`
--

CREATE TABLE `type_of_product` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `type_of_product`
--

INSERT INTO `type_of_product` (`type_id`, `type_name`) VALUES
(1, 'Ốp lưng'),
(2, 'Sạc, cáp'),
(3, 'Sạc dự phòng'),
(4, 'Dán màn hình'),
(5, 'Thẻ nhớ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `pass`, `role_id`) VALUES
(1, 'ngoc_khanh', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'gia_khanh', 'e10adc3949ba59abbe56e057f20f883e', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `oder_id` (`oder_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `type_of_product`
--
ALTER TABLE `type_of_product`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_of_product`
--
ALTER TABLE `type_of_product`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`oder_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_of_product` (`type_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
