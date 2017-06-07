-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2017 lúc 08:00 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog_cakephp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `articles_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `short_desc`, `articles_image`, `category_id`, `created`, `modified`, `user_id`) VALUES
(1, 'Hết đau lưng do thoát vị đĩa đệm sau 15 ngày.', 'Chúng tôi tìm đến nhà chị La Thị Oanh (sinh năm 1978), nằm sâu trong con hẻm nhỏ ngoằn ngoèo ở tổ 7 ấp 7 Xuân Thới Thượng, Huyện Hóc Môn, TP.HCM', '', '', 1, '2017-06-02 06:40:18', '2017-06-02 08:15:13', 1),
(2, 'Người tiêu dùng có cơ hội tham quan nhà máy Ajinomoto Việt Nam', 'Khách tham quan sẽ được trải nghiệm những chương trình thú vị khác nhau, từ việc tìm hiểu những thông tin thú vị về Tập đoàn và Công ty Ajinomoto Việt Nam\r\nNhằm mang đến cho người tiêu dùng cơ hội được trải nghiệm trực tiếp tại Ajiomoto, Công ty Ajinomoto Việt Nam triển khai các hoạt động tham quan thực tế nhà máy tại Biên Hòa, Long Thành và văn phòng đại diện tại Hà Nội dành cho nhiều đối tượng như người tiêu dùng, học sinh, sinh viên,… Tùy vào địa điểm đăng ký, khách tham quan sẽ được trải nghiệm những chương trình thú vị khác nhau.\r\n\r\nĐến với nhà máy Long Thành, khách tham quan không khỏi ngạc nhiên khi chứng kiến quy trình sản xuất hiện đại, khép kín tại phân xưởng sản xuất Hạt nêm Aji-ngon, đặc biệt là quy trình chế biến Nước Hầm Xương và Thịt từ nguồn nguyên liệu chọn lọc được hầm tương tự như cách nấu nước dùng tại nhà, để trở nên thành phần quan trọng không thể thiếu của Hạt nêm Aji-ngon. Đặc biệt, khách tham quan còn có cơ hội thưởng thức món BBQ thơm ngon, hấp dẫn do các đầu bếp của Ajinomoto chế biến từ chính nguyên liệu sản xuất nước hầm xương và thịt.', '', '', 3, '2017-06-02 08:38:37', '2017-06-02 08:38:37', 1),
(3, 'Lấy chồng có phải như đánh một canh bạc?', 'Con gái à! Khi chúng ta quyết định đi đến với một ai cho dù lý do nào thì hãy thật sáng suốt, đừng vì mù quáng trong tình yêu mà chọn nhầm người, đừng vì môn đăng hộ đối mà không có hạnh phúc, cũng đừng nhìn vẻ bể ngoài mà đánh giá bản chất bên trong.\r\nCon gái à! khi chúng ta quyết định đi đến với một ai cho dù lý do nào thì hãy thật sáng suốt, đừng vì mù quáng trong mà chọn nhầm người, đừng vì môn đăng hộ đối mà không có , cũng đừng nhìn vẻ bể ngoài mà đánh giá bản chất bên trong. Hãy cảm nhận bằng trái tim mình rằng người ấy đối với mình như thế nào? Như vậy có lẽ sẽ thắng trong canh bạc cả cuộc đời này đấy.', '', '', 2, '2017-06-02 08:42:40', '2017-06-02 08:42:40', 1),
(4, 'Choáng với lý do hầu hết sao Việt không dám cho tiền người ăn xin', 'Hóa ra đây là một điều đặc biệt kiêng kị, vì thế mà các sao Việt không dám cho tiền những người ăn xin.\r\nLàm nghệ thuật, đặc biệt là mảng giải trí như ca sĩ, diễn viên… nhiều người nghĩ dễ kiếm tiền và sung sướng. Tuy nhiên, chỉ có người trong nghề mới biết để có được đồng tiền thì cũng phải đổ mồ hôi, nước mắt và bao công sức.\r\n\r\nHơn nữa, trong nghề có có những nguyên tắc riêng, giống như luật bất thành văn. Ngoài ra còn phải tinh ý trong việc kiêng kị để tránh bị mất lộc, điển hình là việc không cho tiền người ăn xin vì được cho là sẽ bị mất lộc và sau này sẽ có cùng số phận với những người đó.', '', '', 5, '2017-06-02 11:02:52', '2017-06-02 11:02:52', 1),
(5, 'Choáng với lý do hầu hết sao Việt không dám cho tiền người ăn xin', 'Hóa ra đây là một điều đặc biệt kiêng kị, vì thế mà các sao Việt không dám cho tiền những người ăn xin.\r\nLàm nghệ thuật, đặc biệt là mảng giải trí như ca sĩ, diễn viên… nhiều người nghĩ dễ kiếm tiền và sung sướng. Tuy nhiên, chỉ có người trong nghề mới biết để có được đồng tiền thì cũng phải đổ mồ hôi, nước mắt và bao công sức.\r\n\r\nHơn nữa, trong nghề có có những nguyên tắc riêng, giống như luật bất thành văn. Ngoài ra còn phải tinh ý trong việc kiêng kị để tránh bị mất lộc, điển hình là việc không cho tiền người ăn xin vì được cho là sẽ bị mất lộc và sau này sẽ có cùng số phận với những người đó.', '', '', 5, '2017-06-02 11:02:54', '2017-06-02 11:02:54', 1),
(6, 'Phan Thành chắc sẽ “khóc ròng” khi thấy Midu ngày càng xinh đẹp, gợi cảm thế này', '- Hậu chia tay bạn trai thiếu gia, Midu ngày càng thăng hoa về cả nhan sắc và phong cách.\r\nSau đổ vỡ tình cảm với thiếu gia Phan Thành, Midu ngày càng trở nên bản lĩnh hơn. Thay vì hình ảnh yếu đuối, mỏng manh thuở còn mặn nồng với bạn trai, hot girl đình đám có xu hướng mạnh mẽ, sắc sảo hơn trước. Điều này thể hiển rõ nét qua phong cách sexy mà cô nàng theo đuổi. Không chỉ nhan sắc thăng hoa, Midu còn xây dựng cho mình hình tượng quý cô đài các, quyến rũ đến hút hồn. Có lẽ, chính vết thương tình cảm đã biến thành động lực để hot girl Sài Thành “lột xác” toàn diện. Cùng với ngoại hình, Midu còn “bén duyên” với công việc kinh doanh thời trang và gặt hái được thành công nhất định.\r\n\r\nChắc hẳn, Phan Thành cũng không khỏi tiếc nuối khi để tuột mất vị hôn phu xinh đẹp, tài năng như Midu. Nhất là khi mới đây, thiếu gia trẻ tuổi còn treo status tâm trạng, mang hàm ý nhớ thương người cũ. Có lẽ, Phan Thành vẫn còn vương vẫn Midu sau cuộc chia tay tốn giấy mực.', '', '', 6, '2017-06-02 11:05:05', '2017-06-02 11:05:05', 1),
(7, '\r\nrss[19-03-2017] Tin tức » Super star » Sao Việt\r\nMỗi khi bên Cường Đô la, Hà Hồ thường mặc thế này!', 'Dù ít gặp lại chồng cũ thế những mỗi lần xuất hiện bên Cường Đô la, Hà Hồ tương đối giản dị với những set đồ quen thuộc.\r\nSau quãng thời gian đường ai nấy đi, Hà Hồ ít khi gặp lại chồng cũ Cường Đô la. Tuy nhiên cả hai đều khẳng định vẫn luôn là những người bạn thân thiết. Trong các sự kiện có mặt cậu con trai Subeo, cặp vợ chồng của showbiz Việt đều xuất hiện tình cảm và ăn mặc rất phong cách.\r\nMới đây, Cường Đô La gây bất ngờ khi chở Hà Hồ trên chiếc xế hộp vàng Lamborghini Huracan nằm trong bộ sưu tập siêu xe đắt đỏ của anh. Khác với hình ảnh hào nhoáng thường thấy trên sân khấu, nữ hoàng giải trí Việt  xuất hiện bên chồng cũ với trang phục giản dị nhưng không kém phần xinh đẹp và nổi bật.\r\nChính thức chia tay từ năm 2015, Cường Đô la hiện đang hẹn hò với nữ diễn viên Hạ Vi, trong khi đó Hà Hồ dính nhiều tin đồn liên quan đến một vị đại gia khác. ', 'Dù ít gặp lại chồng cũ thế những mỗi lần xuất hiện bên Cường Đô la, Hà Hồ tương đối giản dị với những set đồ quen thuộc.', 'news/ha_ho_cuong_dola_luatsutunhan.jpg', 6, '2017-06-02 11:06:29', '2017-06-02 11:06:29', 1),
(8, 'Ly hôn đã lâu, Hà Hồ vẫn diện đồ thế này mỗi lần gặp Cường Đô La', '- Mỗi lần tái ngộ Cường Đô La, Hà Hồ có xu hướng lựa chọn váy áo khai thác triệt để vẻ quyến rũ, hút hồn.\r\nMới đây, Hồ Ngọc Hã đã tự tay đăng tải hình ảnh hạnh phúc bên con trai trong ngày Quốc tế thiếu nhi 1/6. Được biết, đây cũng là ngày sum vầy của gia đình “nữ hoàng giải trí”. Có mặt tại nhà hàng cùng 2 mẹ con ca sĩ còn có chồng cũ của cô là doanh nhân Cường Đô La. Chính anh cũng là người đã chụp bức hình cho 2 mẹ con. Dù đã “đường ai nấy đi” nhưng giữa thiếu gia và giọng ca đình đám Vbiz vẫn duy trì mối quan hề bạn bè thân thiết.\r\n\r\nĐiều đặc biệt khiến cư dân mạng chú ý trong bức hình của Hà Hồ còn ở trang phục cô diện trong ngày hội ngộ chồng cũ. Người đẹp diện váy 2 dây khá quyến rũ, để lộ khéo léo bờ vai trần gợi cảm và nét duyên dáng “chết người”. Đây không phải lần đầu tiên, Hà Hồ chọn đồ nữ tính khi gặp gỡ “người cũ”. Mỗi lần tái ngộ Cường Đô La, giọng ca “Destiny” đều gây xôn bởi loạt váy áo khai thác triệt để vẻ hấp dẫn hút hồn.', 'Mỗi lần tái ngộ Cường Đô La, Hà Hồ có xu hướng lựa chọn váy áo khai thác triệt để vẻ quyến rũ, hút hồn', 'news/ha_ho_cuong_dola_luatsutunhan.jpg', 6, '2017-06-02 11:06:29', '2017-06-02 11:06:29', 1),
(9, 'Những kiểu đầm trắng hợp mốt cho ngày hè', 'Cứ đến mùa nắng nóng, những mẫu váy áo đơn sắc có kiểu dáng thanh lịch lại lên ngôi\r\nLà tông màu cơ bản và dễ dàng sử dụng vì thế sắc trắng luôn được yêu thích từ tháng này qua năm khác. Ở mùa hè năm nay, những kiểu váy trắng mang hơi hướng cổ điển tiếp tục khiến phải đẹp xiêu lòng.', 'Cứ đến mùa nắng nóng, những mẫu váy áo đơn sắc có kiểu dáng thanh lịch lại lên ngôi', 'news/vaytrang-mua_he_luatsutunhan.jpg', 6, '2017-06-02 11:08:59', '2017-06-02 11:08:59', 1),
(10, 'Ông bố chuyển giới có bầu lại không lâu sau khi sảy thai', 'Ám ảnh từ lần sảy thai đầu tiên khiến hai ông bố người Mỹ rất lo lắng suốt những tháng đầu thai kỳ lần hai.\r\nCặp vợ chồng đồng tính ở thành phố Portland, bang Oregon, đang háo hức mong chờ đứa con chào đời vào tháng 7 tới. Dù đã nhận hai con nuôi, Trystan Reese và chồng, Biff Chaplow, vẫn mong có con đẻ. Năm 2016, ông bố chuyển giới Trystan mang thai lần đầu tiên nhưng không may bị hỏng. Sau lần ấy, Biff muốn đợi một năm sau, trước khi bạn đời mang thai lại. Tuy nhiên, việc chờ đợi rồi có thai với người chuyển giới rất phức tạp, do đó, vợ chồng Biff quyết định thử lại, theo Cosmopolitan.\r\n\r\nĐể có thai, cả hai mất nhiều thời gian hơn lần đầu. Sau 6 tháng cố gắng, một ngày nọ, Trystan thức dậy và thấy trong người khó chịu. Trong lúc Biff đưa các con tới trường, Trystan ở nhà dùng que thử và hạnh phúc khi biết tin vui.\r\n\r\nÁm ảnh từ lần sảy thai đầu khiến vợ chồng Trystan luôn trong tâm trạng lo lắng và cẩn thận. Nỗi sợ sảy thai khiến Trystan tăng cân suốt những tuần đầu của thai kỳ. Trước ngày siêu âm ở tuần thai thứ 6, Trystan đã gọi tới văn phòng của bác sĩ để đặt lịch khám. Trystan hình dung sẽ nhận được những ánh mắt dò xét và tò mò khi một người đàn ông tới khám thai. Tuy nhiên, mọi chuyện diễn ra theo chiều hướng tích cực. Trystan có những trải nghiệm dễ chịu khi không ai có thái độ kỳ thị với việc anh là \"ông bố mang bầu\". Họ chào đón anh bằng vòng tay ấm áp.', 'Ám ảnh từ lần sảy thai đầu tiên khiến hai ông bố người Mỹ rất lo lắng suốt những tháng đầu thai kỳ lần hai', 'news/gia-dinh.jpg', 3, '2017-06-02 11:09:48', '2017-06-02 11:09:48', 1),
(11, 'Chồng mải chơi game quên chăm lo gia đình', 'Hàng tuần, được nghỉ duy nhất một ngày chủ nhật thì anh năn nỉ xin tôi cho đi chơi game 2 tiếng. \r\nTôi 28 tuổi, lập gia đình được 5 năm nhưng mới có bé gái 16 tháng. Không phải vợ chồng tôi khó khăn chuyện sinh nở mà là kế hoạch. Tôi đang bán hàng tại nhà, mỗi tháng tiền lãi được hơn 10 triệu đồng, vừa bán hàng vừa chăm con, cháu lười ăn nên nhẹ cân, lúc cháu nhỏ tôi chăm vất vả lắm, nhiều lúc cảm giác bất lực. Giờ lớn hơn nên cháu chịu ăn phần nào.\r\n\r\nChồng tôi làm về xây dựng, lương tháng được 20 triệu đồng nhưng mất nhiều thời gian, sáng đi làm tối mịt mới về. Anh không cờ bạc, không gái gú, ít khi uống rượu nhưng lại hay uống chè và thỉnh thoảng vẫn hút trộm thuốc lá, chưa lần nào tôi bắt được trực tiếp nhưng ngửi áo vẫn có mùi thuốc. Công việc anh bận như vậy nhưng tối về nếu không làm thêm là rất hay xem game và chơi game. Trông con anh cũng bật máy tính để xem game. Với anh ấy, gần như chỉ có công việc và chơi game. Tối về, anh chỉ bế con được một lúc, hoặc lúc nào tôi mệt quá anh mới trông con và cho con ăn. Lúc con còn nhỏ lười ăn thì anh hay cùng tôi cho con ăn, bé lớn dần thì lại lười không cho ăn mấy.', 'Hàng tuần, được nghỉ duy nhất một ngày chủ nhật thì anh năn nỉ xin tôi cho đi chơi game 2 tiếng. ', 'news/chong_mai_choi_game.jpg', 3, '2017-06-02 11:10:33', '2017-06-02 11:10:33', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(10) NOT NULL,
  `rght` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`, `description`, `created`, `modified`) VALUES
(1, 0, 1, 10, 'Phụ nữ', 'Dành riêng cho giới nữ', '2017-06-02 06:26:51', '2017-06-02 06:26:51'),
(2, 1, 2, 3, 'Công sở', 'Tâm sự của những nữ văn phòng', '2017-06-02 06:46:43', '2017-06-02 06:46:43'),
(3, 0, 11, 18, 'Nam giới', 'Dành riêng của giới nam', '2017-06-02 06:47:39', '2017-06-02 06:47:39'),
(4, 1, 4, 5, 'Hôn nhân', 'Người phụ nữ của gia đình', '2017-06-02 08:44:50', '2017-06-02 08:44:50'),
(5, 1, 6, 7, 'Tình yêu', 'Những câu chuyện tình yêu', '2017-06-02 08:45:28', '2017-06-02 08:45:28'),
(6, 1, 8, 9, 'Thời trang', 'Trang phục cho phái nữ', '2017-06-02 11:04:03', '2017-06-02 11:04:03'),
(7, 3, 12, 13, 'Sự nghiệp', 'Công việc ', '2017-06-02 11:11:30', '2017-06-02 11:11:30'),
(9, 3, 14, 15, 'Đàn ông yêu', 'Tình yêu của phái mạnh', '2017-06-02 11:12:09', '2017-06-02 11:12:09'),
(11, 3, 16, 17, 'Tiêu khiển', 'Những thú vui của phái mạnh', '2017-06-02 11:12:49', '2017-06-02 11:12:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL,
  `countries_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `countries_iso_code_2` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `countries_iso_code_3` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `address_format_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 1),
(2, 'Albania', 'AL', 'ALB', 1),
(3, 'Algeria', 'DZ', 'DZA', 1),
(4, 'American Samoa', 'AS', 'ASM', 1),
(5, 'Andorra', 'AD', 'AND', 1),
(6, 'Angola', 'AO', 'AGO', 1),
(7, 'Anguilla', 'AI', 'AIA', 1),
(8, 'Antarctica', 'AQ', 'ATA', 1),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 1),
(10, 'Argentina', 'AR', 'ARG', 1),
(11, 'Armenia', 'AM', 'ARM', 1),
(12, 'Aruba', 'AW', 'ABW', 1),
(13, 'Australia', 'AU', 'AUS', 1),
(14, 'Austria', 'AT', 'AUT', 5),
(15, 'Azerbaijan', 'AZ', 'AZE', 1),
(16, 'Bahamas', 'BS', 'BHS', 1),
(17, 'Bahrain', 'BH', 'BHR', 1),
(18, 'Bangladesh', 'BD', 'BGD', 1),
(19, 'Barbados', 'BB', 'BRB', 1),
(20, 'Belarus', 'BY', 'BLR', 1),
(21, 'Belgium', 'BE', 'BEL', 1),
(22, 'Belize', 'BZ', 'BLZ', 1),
(23, 'Benin', 'BJ', 'BEN', 1),
(24, 'Bermuda', 'BM', 'BMU', 1),
(25, 'Bhutan', 'BT', 'BTN', 1),
(26, 'Bolivia', 'BO', 'BOL', 1),
(27, 'Bosnia and Herzegowina', 'BA', 'BIH', 1),
(28, 'Botswana', 'BW', 'BWA', 1),
(29, 'Bouvet Island', 'BV', 'BVT', 1),
(30, 'Brazil', 'BR', 'BRA', 1),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 1),
(32, 'Brunei Darussalam', 'BN', 'BRN', 1),
(33, 'Bulgaria', 'BG', 'BGR', 1),
(34, 'Burkina Faso', 'BF', 'BFA', 1),
(35, 'Burundi', 'BI', 'BDI', 1),
(36, 'Cambodia', 'KH', 'KHM', 1),
(37, 'Cameroon', 'CM', 'CMR', 1),
(38, 'Canada', 'CA', 'CAN', 1),
(39, 'Cape Verde', 'CV', 'CPV', 1),
(40, 'Cayman Islands', 'KY', 'CYM', 1),
(41, 'Central African Republic', 'CF', 'CAF', 1),
(42, 'Chad', 'TD', 'TCD', 1),
(43, 'Chile', 'CL', 'CHL', 1),
(44, 'China', 'CN', 'CHN', 1),
(45, 'Christmas Island', 'CX', 'CXR', 1),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1),
(47, 'Colombia', 'CO', 'COL', 1),
(48, 'Comoros', 'KM', 'COM', 1),
(49, 'Congo', 'CG', 'COG', 1),
(50, 'Cook Islands', 'CK', 'COK', 1),
(51, 'Costa Rica', 'CR', 'CRI', 1),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', 1),
(53, 'Croatia', 'HR', 'HRV', 1),
(54, 'Cuba', 'CU', 'CUB', 1),
(55, 'Cyprus', 'CY', 'CYP', 1),
(56, 'Czech Republic', 'CZ', 'CZE', 1),
(57, 'Denmark', 'DK', 'DNK', 1),
(58, 'Djibouti', 'DJ', 'DJI', 1),
(59, 'Dominica', 'DM', 'DMA', 1),
(60, 'Dominican Republic', 'DO', 'DOM', 1),
(61, 'East Timor', 'TP', 'TMP', 1),
(62, 'Ecuador', 'EC', 'ECU', 1),
(63, 'Egypt', 'EG', 'EGY', 1),
(64, 'El Salvador', 'SV', 'SLV', 1),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 1),
(66, 'Eritrea', 'ER', 'ERI', 1),
(67, 'Estonia', 'EE', 'EST', 1),
(68, 'Ethiopia', 'ET', 'ETH', 1),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1),
(70, 'Faroe Islands', 'FO', 'FRO', 1),
(71, 'Fiji', 'FJ', 'FJI', 1),
(72, 'Finland', 'FI', 'FIN', 1),
(73, 'France', 'FR', 'FRA', 1),
(74, 'France, Metropolitan', 'FX', 'FXX', 1),
(75, 'French Guiana', 'GF', 'GUF', 1),
(76, 'French Polynesia', 'PF', 'PYF', 1),
(77, 'French Southern Territories', 'TF', 'ATF', 1),
(78, 'Gabon', 'GA', 'GAB', 1),
(79, 'Gambia', 'GM', 'GMB', 1),
(80, 'Georgia', 'GE', 'GEO', 1),
(81, 'Germany', 'DE', 'DEU', 5),
(82, 'Ghana', 'GH', 'GHA', 1),
(83, 'Gibraltar', 'GI', 'GIB', 1),
(84, 'Greece', 'GR', 'GRC', 1),
(85, 'Greenland', 'GL', 'GRL', 1),
(86, 'Grenada', 'GD', 'GRD', 1),
(87, 'Guadeloupe', 'GP', 'GLP', 1),
(88, 'Guam', 'GU', 'GUM', 1),
(89, 'Guatemala', 'GT', 'GTM', 1),
(90, 'Guinea', 'GN', 'GIN', 1),
(91, 'Guinea-bissau', 'GW', 'GNB', 1),
(92, 'Guyana', 'GY', 'GUY', 1),
(93, 'Haiti', 'HT', 'HTI', 1),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1),
(95, 'Honduras', 'HN', 'HND', 1),
(96, 'Hong Kong', 'HK', 'HKG', 1),
(97, 'Hungary', 'HU', 'HUN', 1),
(98, 'Iceland', 'IS', 'ISL', 1),
(99, 'India', 'IN', 'IND', 1),
(100, 'Indonesia', 'ID', 'IDN', 1),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1),
(102, 'Iraq', 'IQ', 'IRQ', 1),
(103, 'Ireland', 'IE', 'IRL', 1),
(104, 'Israel', 'IL', 'ISR', 1),
(105, 'Italy', 'IT', 'ITA', 1),
(106, 'Jamaica', 'JM', 'JAM', 1),
(107, 'Japan', 'JP', 'JPN', 1),
(108, 'Jordan', 'JO', 'JOR', 1),
(109, 'Kazakhstan', 'KZ', 'KAZ', 1),
(110, 'Kenya', 'KE', 'KEN', 1),
(111, 'Kiribati', 'KI', 'KIR', 1),
(112, 'Korea, Democratic People\'s Republic of', 'KP', 'PRK', 1),
(113, 'Korea, Republic of', 'KR', 'KOR', 1),
(114, 'Kuwait', 'KW', 'KWT', 1),
(115, 'Kyrgyzstan', 'KG', 'KGZ', 1),
(116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 1),
(117, 'Latvia', 'LV', 'LVA', 1),
(118, 'Lebanon', 'LB', 'LBN', 1),
(119, 'Lesotho', 'LS', 'LSO', 1),
(120, 'Liberia', 'LR', 'LBR', 1),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1),
(122, 'Liechtenstein', 'LI', 'LIE', 1),
(123, 'Lithuania', 'LT', 'LTU', 1),
(124, 'Luxembourg', 'LU', 'LUX', 1),
(125, 'Macau', 'MO', 'MAC', 1),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MKD', 1),
(127, 'Madagascar', 'MG', 'MDG', 1),
(128, 'Malawi', 'MW', 'MWI', 1),
(129, 'Malaysia', 'MY', 'MYS', 1),
(130, 'Maldives', 'MV', 'MDV', 1),
(131, 'Mali', 'ML', 'MLI', 1),
(132, 'Malta', 'MT', 'MLT', 1),
(133, 'Marshall Islands', 'MH', 'MHL', 1),
(134, 'Martinique', 'MQ', 'MTQ', 1),
(135, 'Mauritania', 'MR', 'MRT', 1),
(136, 'Mauritius', 'MU', 'MUS', 1),
(137, 'Mayotte', 'YT', 'MYT', 1),
(138, 'Mexico', 'MX', 'MEX', 1),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', 1),
(140, 'Moldova, Republic of', 'MD', 'MDA', 1),
(141, 'Monaco', 'MC', 'MCO', 1),
(142, 'Mongolia', 'MN', 'MNG', 1),
(143, 'Montserrat', 'MS', 'MSR', 1),
(144, 'Morocco', 'MA', 'MAR', 1),
(145, 'Mozambique', 'MZ', 'MOZ', 1),
(146, 'Myanmar', 'MM', 'MMR', 1),
(147, 'Namibia', 'NA', 'NAM', 1),
(148, 'Nauru', 'NR', 'NRU', 1),
(149, 'Nepal', 'NP', 'NPL', 1),
(150, 'Netherlands', 'NL', 'NLD', 1),
(151, 'Netherlands Antilles', 'AN', 'ANT', 1),
(152, 'New Caledonia', 'NC', 'NCL', 1),
(153, 'New Zealand', 'NZ', 'NZL', 1),
(154, 'Nicaragua', 'NI', 'NIC', 1),
(155, 'Niger', 'NE', 'NER', 1),
(156, 'Nigeria', 'NG', 'NGA', 1),
(157, 'Niue', 'NU', 'NIU', 1),
(158, 'Norfolk Island', 'NF', 'NFK', 1),
(159, 'Northern Mariana Islands', 'MP', 'MNP', 1),
(160, 'Norway', 'NO', 'NOR', 1),
(161, 'Oman', 'OM', 'OMN', 1),
(162, 'Pakistan', 'PK', 'PAK', 1),
(163, 'Palau', 'PW', 'PLW', 1),
(164, 'Panama', 'PA', 'PAN', 1),
(165, 'Papua New Guinea', 'PG', 'PNG', 1),
(166, 'Paraguay', 'PY', 'PRY', 1),
(167, 'Peru', 'PE', 'PER', 1),
(168, 'Philippines', 'PH', 'PHL', 1),
(169, 'Pitcairn', 'PN', 'PCN', 1),
(170, 'Poland', 'PL', 'POL', 1),
(171, 'Portugal', 'PT', 'PRT', 1),
(172, 'Puerto Rico', 'PR', 'PRI', 1),
(173, 'Qatar', 'QA', 'QAT', 1),
(174, 'Reunion', 'RE', 'REU', 1),
(175, 'Romania', 'RO', 'ROM', 1),
(176, 'Russian Federation', 'RU', 'RUS', 1),
(177, 'Rwanda', 'RW', 'RWA', 1),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1),
(179, 'Saint Lucia', 'LC', 'LCA', 1),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1),
(181, 'Samoa', 'WS', 'WSM', 1),
(182, 'San Marino', 'SM', 'SMR', 1),
(183, 'Sao Tome and Principe', 'ST', 'STP', 1),
(184, 'Saudi Arabia', 'SA', 'SAU', 1),
(185, 'Senegal', 'SN', 'SEN', 1),
(186, 'Seychelles', 'SC', 'SYC', 1),
(187, 'Sierra Leone', 'SL', 'SLE', 1),
(188, 'Singapore', 'SG', 'SGP', 4),
(189, 'Slovakia (Slovak Republic)', 'SK', 'SVK', 1),
(190, 'Slovenia', 'SI', 'SVN', 1),
(191, 'Solomon Islands', 'SB', 'SLB', 1),
(192, 'Somalia', 'SO', 'SOM', 1),
(193, 'South Africa', 'ZA', 'ZAF', 1),
(194, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 1),
(195, 'Spain', 'ES', 'ESP', 3),
(196, 'Sri Lanka', 'LK', 'LKA', 1),
(197, 'St. Helena', 'SH', 'SHN', 1),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1),
(199, 'Sudan', 'SD', 'SDN', 1),
(200, 'Suriname', 'SR', 'SUR', 1),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1),
(202, 'Swaziland', 'SZ', 'SWZ', 1),
(203, 'Sweden', 'SE', 'SWE', 1),
(204, 'Switzerland', 'CH', 'CHE', 1),
(205, 'Syrian Arab Republic', 'SY', 'SYR', 1),
(206, 'Taiwan', 'TW', 'TWN', 1),
(207, 'Tajikistan', 'TJ', 'TJK', 1),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1),
(209, 'Thailand', 'TH', 'THA', 1),
(210, 'Togo', 'TG', 'TGO', 1),
(211, 'Tokelau', 'TK', 'TKL', 1),
(212, 'Tonga', 'TO', 'TON', 1),
(213, 'Trinidad and Tobago', 'TT', 'TTO', 1),
(214, 'Tunisia', 'TN', 'TUN', 1),
(215, 'Turkey', 'TR', 'TUR', 1),
(216, 'Turkmenistan', 'TM', 'TKM', 1),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', 1),
(218, 'Tuvalu', 'TV', 'TUV', 1),
(219, 'Uganda', 'UG', 'UGA', 1),
(220, 'Ukraine', 'UA', 'UKR', 1),
(221, 'United Arab Emirates', 'AE', 'ARE', 1),
(222, 'United Kingdom', 'GB', 'GBR', 1),
(223, 'United States', 'US', 'USA', 2),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1),
(225, 'Uruguay', 'UY', 'URY', 1),
(226, 'Uzbekistan', 'UZ', 'UZB', 1),
(227, 'Vanuatu', 'VU', 'VUT', 1),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1),
(229, 'Venezuela', 'VE', 'VEN', 1),
(230, 'Viet Nam', 'VN', 'VNM', 1),
(231, 'Virgin Islands (British)', 'VG', 'VGB', 1),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1),
(234, 'Western Sahara', 'EH', 'ESH', 1),
(235, 'Yemen', 'YE', 'YEM', 1),
(236, 'Yugoslavia', 'YU', 'YUG', 1),
(237, 'Zaire', 'ZR', 'ZAR', 1),
(238, 'Zambia', 'ZM', 'ZMB', 1),
(239, 'Zimbabwe', 'ZW', 'ZWE', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturers_id` int(11) NOT NULL,
  `manufacturers_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturers_image` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturers_id`, `manufacturers_name`, `manufacturers_image`, `date_added`, `last_modified`) VALUES
(1, 'Matrox', 'manufacturer/manufacturer_matrox.gif', '2017-06-05 10:44:29', NULL),
(2, 'Microsoft', 'manufacturer/manufacturer_microsoft.gif', '2017-06-05 10:44:29', NULL),
(3, 'Warner', 'manufacturer/manufacturer_warner.gif', '2017-06-05 10:44:29', NULL),
(4, 'Fox', 'manufacturer/manufacturer_fox.gif', '2017-06-05 10:44:29', NULL),
(5, 'Logitech', 'manufacturer/manufacturer_logitech.gif', '2017-06-05 10:44:29', NULL),
(6, 'Canon', 'manufacturer/manufacturer_canon.gif', '2017-06-05 10:44:29', NULL),
(7, 'Sierra', 'manufacturer/manufacturer_sierra.gif', '2017-06-05 10:44:30', NULL),
(8, 'GT Interactive', 'manufacturer/manufacturer_gt_interactive.gif', '2017-06-05 10:44:30', NULL),
(9, 'Hewlett Packard', 'manufacturer/manufacturer_hewlett_packard.gif', '2017-06-05 10:44:30', NULL),
(10, 'Samsung', 'manufacturer/manufacturer_samsung.png', '2017-06-05 10:44:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170601071845, 'CreateArticles', '2017-06-01 00:25:57', '2017-06-01 00:25:58', 0),
(20170601072318, 'CreateCategories', '2017-06-01 00:25:58', '2017-06-01 00:25:59', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `products_quantity` int(4) NOT NULL,
  `products_model` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_image` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_description` text COLLATE utf8_unicode_ci NOT NULL,
  `products_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `products_price` decimal(15,4) NOT NULL,
  `products_date_added` datetime NOT NULL,
  `products_last_modified` datetime DEFAULT NULL,
  `products_date_available` datetime DEFAULT NULL,
  `products_weight` decimal(5,2) NOT NULL,
  `products_status` tinyint(1) NOT NULL,
  `products_tax_class_id` int(11) NOT NULL,
  `manufacturers_id` int(11) DEFAULT NULL,
  `products_viewed` int(5) NOT NULL,
  `products_ordered` int(11) NOT NULL DEFAULT '0',
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_quantity`, `products_model`, `products_image`, `products_description`, `products_url`, `products_price`, `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`, `products_status`, `products_tax_class_id`, `manufacturers_id`, `products_viewed`, `products_ordered`, `categories_id`) VALUES
(1, 'Matrox G200 MMS', 32, 'MG200MMS', 'matrox/mg200mms.gif', '', '', '299.9900', '2017-06-05 10:44:30', NULL, NULL, '23.00', 1, 1, 1, 0, 0, 4),
(2, 'Matrox G400 32MB', 32, 'MG400-32MB', 'matrox/mg400-32mb.gif', '', '', '499.9900', '2017-06-05 10:44:30', NULL, NULL, '23.00', 1, 1, 1, 0, 0, 4),
(3, 'Microsoft IntelliMouse Pro', 2, 'MSIMPRO', 'microsoft/msimpro.gif', '', '', '49.9900', '2017-06-05 10:44:30', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 9),
(4, 'The Replacement Killers', 13, 'DVD-RPMK', 'dvd/replacement_killers.gif', '', '', '42.0000', '2017-06-05 10:44:30', NULL, NULL, '23.00', 1, 1, 2, 0, 0, 10),
(5, 'Blade Runner - Director\'s Cut', 17, 'DVD-BLDRNDC', 'dvd/blade_runner.gif', '', '', '35.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 11),
(6, 'The Matrix', 10, 'DVD-MATR', 'dvd/the_matrix.gif', '', '', '39.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 10),
(7, 'You\'ve Got Mail', 10, 'DVD-YGEM', 'dvd/youve_got_mail.gif', '', '', '34.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 12),
(8, 'A Bug\'s Life', 10, 'DVD-ABUG', 'dvd/a_bugs_life.gif', '', '', '35.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 13),
(9, 'Under Siege', 10, 'DVD-UNSG', 'dvd/under_siege.gif', '', '', '29.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 10),
(10, 'Under Siege 2 - Dark Territory', 10, 'DVD-UNSG2', 'dvd/under_siege2.gif', '', '', '29.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 10),
(11, 'Fire Down Below', 10, 'DVD-FDBL', 'dvd/fire_down_below.gif', '', '', '29.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 10),
(12, 'Die Hard With A Vengeance', 10, 'DVD-DHWV', 'dvd/die_hard_3.gif', '', '', '39.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 4, 0, 0, 10),
(13, 'Lethal Weapon', 10, 'DVD-LTWP', 'dvd/lethal_weapon.gif', '', '', '34.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 10),
(14, 'Red Corner', 10, 'DVD-REDC', 'dvd/red_corner.gif', '', '', '32.0000', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 15),
(15, 'Frantic', 10, 'DVD-FRAN', 'dvd/frantic.gif', '', '', '35.0000', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 14),
(16, 'Courage Under Fire', 10, 'DVD-CUFI', 'dvd/courage_under_fire.gif', '', '', '38.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 4, 0, 0, 15),
(17, 'Speed', 10, 'DVD-SPEED', 'dvd/speed.gif', '', '', '39.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 4, 0, 0, 10),
(18, 'Speed 2: Cruise Control', 10, 'DVD-SPEED2', 'dvd/speed_2.gif', '', '', '42.0000', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 4, 0, 0, 10),
(19, 'There\'s Something About Mary', 10, 'DVD-TSAB', 'dvd/theres_something_about_mary.gif', '', '', '49.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 4, 0, 0, 12),
(20, 'Beloved', 10, 'DVD-BELOVED', 'dvd/beloved.gif', '', '', '54.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 3, 0, 0, 15),
(21, 'SWAT 3: Close Quarters Battle', 16, 'PC-SWAT3', 'sierra/swat_3.gif', '', '', '79.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 7, 0, 0, 18),
(22, 'Unreal Tournament', 13, 'PC-UNTM', 'gt_interactive/unreal_tournament.gif', '', '', '89.9900', '2017-06-05 10:44:31', NULL, NULL, '7.00', 1, 1, 8, 0, 0, 19),
(23, 'The Wheel Of Time', 16, 'PC-TWOF', 'gt_interactive/wheel_of_time.gif', '', '', '99.9900', '2017-06-05 10:44:31', NULL, NULL, '10.00', 1, 1, 8, 0, 0, 20),
(24, 'Disciples: Sacred Lands', 17, 'PC-DISC', 'gt_interactive/disciples.gif', '', '', '90.0000', '2017-06-05 10:44:31', NULL, NULL, '8.00', 1, 1, 8, 0, 0, 20),
(25, 'Microsoft Internet Keyboard PS/2', 16, 'MSINTKB', 'microsoft/intkeyboardps2.gif', '', '', '69.9900', '2017-06-05 10:44:31', NULL, NULL, '8.00', 1, 1, 2, 0, 0, 8),
(26, 'Microsoft IntelliMouse Explorer', 10, 'MSIMEXP', 'microsoft/imexplorer.gif', '', '', '64.9500', '2017-06-05 10:44:31', NULL, NULL, '8.00', 1, 1, 2, 0, 0, 9),
(27, 'Hewlett Packard LaserJet 1100Xi', 8, 'HPLJ1100XI', 'hewlett_packard/lj1100xi.gif', '', '', '499.9900', '2017-06-05 10:44:31', NULL, NULL, '45.00', 1, 1, 9, 0, 0, 5),
(28, 'Samsung Galaxy Tab', 100, 'GT-P1000', 'samsung/galaxy_tab.gif', '', '', '749.9900', '2017-06-05 10:44:31', NULL, NULL, '1.00', 1, 1, 10, 0, 0, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `categories_image` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(3) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`categories_id`, `categories_name`, `categories_image`, `parent_id`, `sort_order`, `date_added`, `last_modified`) VALUES
(1, 'Hardware', 'category/category_hardware.gif', 0, 1, '2017-06-05 10:44:06', NULL),
(2, 'Software', 'category/category_software.gif', 0, 2, '2017-06-05 10:44:06', NULL),
(3, 'DVD Movies', 'category/category_dvd_movies.gif', 0, 3, '2017-06-05 10:44:06', NULL),
(4, 'Graphics Cards', 'subcategory_graphic_cards.gif', 1, 0, '2017-06-05 10:44:06', NULL),
(5, 'Printers', 'subcategory_printers.gif', 1, 0, '2017-06-05 10:44:06', NULL),
(6, 'Monitors', 'subcategory_monitors.gif', 1, 0, '2017-06-05 10:44:06', NULL),
(7, 'Speakers', 'subcategory_speakers.gif', 1, 0, '2017-06-05 10:44:06', NULL),
(8, 'Keyboards', 'subcategory_keyboards.gif', 1, 0, '2017-06-05 10:44:07', NULL),
(9, 'Mice', 'subcategory_mice.gif', 1, 0, '2017-06-05 10:44:09', NULL),
(10, 'Action', 'subcategory_action.gif', 3, 0, '2017-06-05 10:44:10', NULL),
(11, 'Science Fiction', 'subcategory_science_fiction.gif', 3, 0, '2017-06-05 10:44:10', NULL),
(12, 'Comedy', 'subcategory_comedy.gif', 3, 0, '2017-06-05 10:44:10', NULL),
(13, 'Cartoons', 'subcategory_cartoons.gif', 3, 0, '2017-06-05 10:44:10', NULL),
(14, 'Thriller', 'subcategory_thriller.gif', 3, 0, '2017-06-05 10:44:10', NULL),
(15, 'Drama', 'subcategory_drama.gif', 3, 0, '2017-06-05 10:44:10', NULL),
(16, 'Memory', 'subcategory_memory.gif', 1, 0, '2017-06-05 10:44:10', NULL),
(17, 'CDROM Drives', 'subcategory_cdrom_drives.gif', 1, 0, '2017-06-05 10:44:10', NULL),
(18, 'Simulation', 'subcategory_simulation.gif', 2, 0, '2017-06-05 10:44:10', NULL),
(19, 'Action', 'subcategory_action_games.gif', 2, 0, '2017-06-05 10:44:10', NULL),
(20, 'Strategy', 'subcategory_strategy.gif', 2, 0, '2017-06-05 10:44:10', NULL),
(21, 'Gadgets', 'category/category_gadgets.png', 0, 4, '2017-06-05 10:44:10', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2y$10$YsuboZUkmD4r0UHUplH1d.IrlB8tYFOvYwb.shK/ZXuCe0hee494m', 'admin', '2017-06-01 11:50:04', '2017-06-01 11:50:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`),
  ADD KEY `IDX_COUNTRIES_NAME` (`countries_name`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturers_id`),
  ADD KEY `IDX_MANUFACTURERS_NAME` (`manufacturers_name`);

--
-- Chỉ mục cho bảng `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
