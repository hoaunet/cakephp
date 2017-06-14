-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2017 lúc 11:21 AM
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
-- Cơ sở dữ liệu: `hoaunetcareer`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `career_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `careers`
--

INSERT INTO `careers` (`id`, `career_name`, `parent_id`, `status`) VALUES
(1, 'Bảo hiểm', 0, 0),
(2, 'Bán hàng', 0, 0),
(3, 'Bưu chính', 0, 0),
(4, 'Kiến Trúc Sư', 0, 0),
(5, 'Bảo vệ', 0, 0),
(6, 'Hành chính văn phòng', 0, 0),
(7, 'Du lịch', 0, 0),
(8, 'Ô tô-Xe máy', 0, 0),
(9, 'Báo chí-Truyền hình', 0, 0),
(10, 'Hàng gia dụng', 0, 0),
(11, 'Kinh doanh ngân hàng', 0, 0),
(12, 'Kỹ Sư Xây Dựng', 0, 0),
(13, 'Hoạch định-Dự án', 0, 0),
(14, 'IT phần cứng/mạng', 0, 0),
(15, 'Làm bán thời gian', 0, 0),
(16, 'Giáo Viên', 0, 0),
(17, 'Kinh Doanh Bất Động Sản', 0, 0),
(18, 'NV trông quán Internet', 0, 0),
(19, 'IT phần mềm', 0, 0),
(20, 'Nghệ thuật-Điện ảnh', 0, 0),
(21, 'Kỹ Sư Chế Tạo Máy', 0, 0),
(22, 'Kinh doanh máy tính', 0, 0),
(23, 'Mỹ phẩm-Trang sức', 0, 0),
(24, 'Marketing-PR', 0, 0),
(25, 'Công nghệ cao', 0, 0),
(26, 'Khách sạn-Nhà hàng', 0, 0),
(27, 'Nhân sự', 0, 0),
(28, 'Biên - Phiên dịch', 0, 0),
(29, 'Xây dựng', 0, 0),
(30, 'Điện tử viễn thông', 0, 0),
(31, 'Nhân viên kinh doanh', 0, 0),
(32, 'Quản trị kinh doanh', 0, 0),
(33, 'Chứng khoán-Vàng', 0, 0),
(34, 'Kế toán Kiểm toán', 0, 0),
(35, 'Thiết Kế - Đồ Họa', 0, 0),
(36, 'Dịch vụ', 0, 0),
(37, 'Thư ký-Trợ lý', 0, 0),
(38, 'Bộ phận bếp', 0, 0),
(39, 'Công nghiệp', 0, 0),
(40, 'Tổ chức sự kiện-Quà tặng', 0, 0),
(41, 'Thời trang', 0, 0),
(42, 'Kinh doanh mỹ phẩm', 0, 0),
(43, 'Kỹ Sư Cơ Khí', 0, 0),
(44, 'Quan hệ đối ngoại', 0, 0),
(45, 'Thiết kế đồ hoạ web', 0, 0),
(46, 'Promotion Girl (PG)', 0, 0),
(47, 'Chuyên Viên Đào Tạo', 0, 0),
(48, 'Sinh viên làm thêm', 0, 0),
(49, 'Thương mại điện tử', 0, 0),
(50, 'Thiết kế-Mỹ thuật', 0, 0),
(51, 'Kỹ Sư Hóa Chất', 0, 0),
(52, 'Kinh doanh dược phẩm', 0, 0),
(53, 'Thực phẩm-Đồ uống', 0, 0),
(54, 'Tiếp thị-Quảng cáo', 0, 0),
(55, 'Dệt may-Gia dày', 0, 0),
(56, 'Bộ phận bồi bàn', 0, 0),
(57, 'Lễ tân', 0, 0),
(58, 'Xuất, nhập khẩu', 0, 0),
(59, 'KD bất động sản', 0, 0),
(60, 'Ngân hàng', 0, 0),
(61, 'Chuyên viên tuyển dụng', 0, 0),
(62, 'Bộ phận vệ sinh', 0, 0),
(63, 'Giáo dục-Đào tạo', 0, 0),
(64, 'In ấn-Xuất bản', 0, 0),
(65, 'Kinh doanh vàng', 0, 0),
(66, 'Kỹ Sư Môi Trường', 0, 0),
(67, 'Nghành nghề khác', 0, 0),
(68, 'Quản Trị Mạng', 0, 0),
(69, 'Thực tập', 0, 0),
(70, 'Kỹ thuật viên', 0, 0),
(71, 'Kỹ Sư Điện Tử', 0, 0),
(72, 'Kinh doanh điện thoại', 0, 0),
(73, 'Lao động phổ thông', 0, 0),
(74, 'Hàng hải', 0, 0),
(75, 'Bộ phận sảnh', 0, 0),
(76, 'Đầu tư', 0, 0),
(77, 'Giao dịch viên', 0, 0),
(78, 'Hàng không', 0, 0),
(79, 'Nông-Lâm-Ngư nghiệp', 0, 0),
(80, 'Kinh doanh hàng tiêu dùng', 0, 0),
(81, 'Kỹ Sư Kết Cấu', 0, 0),
(82, 'Kỹ Sư CNTT', 0, 0),
(83, 'Kỹ Sư Dự Toán', 0, 0),
(84, 'Kinh doanh du lịch', 0, 0),
(85, 'Thủ công mỹ nghệ', 0, 0),
(86, 'Người giúp việc', 0, 0),
(87, 'Chuyên viên tư vấn tài chính', 0, 0),
(88, 'Trung Tâm Thẻ Ngân Hàng', 0, 0),
(89, 'Pháp lý', 0, 0),
(90, 'Vật tư-Thiết bị', 0, 0),
(91, 'Kinh doanh tài chính', 0, 0),
(92, 'Kỹ Sư Dự Thầu', 0, 0),
(93, 'Kỹ Sư Nông Nghiệp', 0, 0),
(94, 'Kinh doanh thiết bị y tế', 0, 0),
(95, 'Tư vấn', 0, 0),
(96, 'Vận tải-Lái xe', 0, 0),
(97, 'Ngoại Hối', 0, 0),
(98, 'Kinh doanh hàng may mặc', 0, 0),
(99, 'Kỹ Sư Máy Tính', 0, 0),
(100, 'Kỹ Sư Điện Nước', 0, 0),
(101, 'Kinh doanh dịch vụ', 0, 0),
(102, 'Y tế-Dược', 0, 0),
(103, 'Kinh doanh chứng khoán', 0, 0),
(104, 'Kỹ Sư Điện Lạnh', 0, 0),
(105, 'Kỹ Sư Kinh Tế', 0, 0),
(106, 'Kinh doanh hóa chất', 0, 0),
(107, 'Kinh doanh thời trang', 0, 0),
(108, 'Kỹ Sư Giám Sát', 0, 0),
(109, 'Kỹ Sư Thiết Kế', 0, 0),
(110, 'Kinh doanh thủ công mỹ nghệ', 0, 0),
(111, 'Kinh doanh bảo hiểm', 0, 0),
(112, 'Kỹ Sư Giao Thông Vận Tải', 0, 0),
(113, 'Kỹ Sư Điện Tử Viễn Thông', 0, 0),
(114, 'Kinh doanh thiết bị công nghệ', 0, 0),
(115, 'Kinh doanh truyền thông', 0, 0),
(116, 'Kinh Doanh Thiết Bị Kỹ Thuật', 0, 0),
(117, 'Kinh doanh khác', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `countries_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `countries_iso_code_2` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `countries_iso_code_3` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `address_format_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`) VALUES
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
-- Cấu trúc bảng cho bảng `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `directory` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `image`, `directory`, `sort_order`) VALUES
(1, 'Tiếng Anh (England)', '', '', '', 0),
(2, 'Tiếng Pháp (France)', '', '', '', 1),
(3, 'Tiếng Hàn Quốc (Korea)', '', '', '', 2),
(4, 'Tiếng Nhật Bản (Japan)', '', '', '', 3),
(5, 'Tiếng Trung Quốc (China)', '', '', '', 4),
(6, 'Tiếng Nga (Russia)', '', '', '', 5),
(7, 'Tiếng Đức (Germany)', '', '', '', 6),
(8, 'Thái Lan (Thailand)', '', '', '', 7),
(9, 'Indonesia', '', '', '', 8),
(10, 'Tiếng Mã Lai (Malaysia)', '', '', '', 9),
(11, 'Tiếng Ả Rập', '', '', '', 10),
(12, 'Myanmar', '', '', '', 11),
(13, 'Tiếng Hindi Hoặc Bengali', '', '', '', 12),
(14, 'Ngôn Ngữ Khác', '', '', '', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_name` varchar(225) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(1, 'Quản trị cấp cao'),
(2, 'Trưởng/Phó phòng'),
(3, 'Tư vấn/Trợ lý'),
(4, 'Chuyên gia'),
(5, 'Nhân viên'),
(6, 'Trưởng nhóm/Giám sát'),
(7, 'Kỹ thuật viên/Kỹ sư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `province_name` varchar(225) CHARACTER SET utf8 NOT NULL,
  `province_type` int(11) NOT NULL,
  `province_code` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `province_type`, `province_code`, `parent_id`, `country_id`, `status`) VALUES
(1, 'Hà Nội', 1, 0, 0, 230, 1),
(2, 'TP.HCM', 1, 0, 0, 230, 1),
(3, 'Đà Nẵng', 1, 0, 0, 230, 1),
(4, 'Bình Dương', 1, 0, 0, 230, 1),
(5, 'Cần Thơ', 1, 0, 0, 230, 1),
(6, 'Hải Phòng', 1, 0, 0, 230, 1),
(7, 'Bà Rịa - Vũng Tàu', 1, 0, 0, 230, 1),
(8, 'Bắc Giang', 1, 0, 0, 230, 1),
(9, 'Bắc Kạn', 1, 0, 0, 230, 1),
(10, 'Thừa Thiên Huế', 1, 0, 0, 230, 1),
(11, 'Bắc Ninh', 1, 0, 0, 230, 1),
(12, 'Bến Tre', 1, 0, 0, 230, 1),
(13, 'Bạc Liêu', 1, 0, 0, 230, 1),
(14, 'Bình Định', 1, 0, 0, 230, 1),
(15, 'Bình Phước', 1, 0, 0, 230, 1),
(16, 'Bình Thuận', 1, 0, 0, 230, 1),
(17, 'Cà Mau', 1, 0, 0, 230, 1),
(18, 'Cao Bằng', 1, 0, 0, 230, 1),
(19, 'Đắc Lắc', 1, 0, 0, 230, 1),
(20, 'An Giang', 1, 0, 0, 230, 1),
(21, 'Đắc Nông', 1, 0, 0, 230, 1),
(22, 'Điện Biên', 1, 0, 0, 230, 1),
(23, 'Đồng Nai', 1, 0, 0, 230, 1),
(24, 'Đồng Tháp', 1, 0, 0, 230, 1),
(25, 'Gia Lai', 1, 0, 0, 230, 1),
(26, 'Hà Giang', 1, 0, 0, 230, 1),
(27, 'Hà Nam', 1, 0, 0, 230, 1),
(28, 'Hà Tĩnh', 1, 0, 0, 230, 1),
(29, 'Hải Dương', 1, 0, 0, 230, 1),
(30, 'Hậu Giang', 1, 0, 0, 230, 1),
(31, 'Hòa Bình', 1, 0, 0, 230, 1),
(32, 'Hưng Yên', 1, 0, 0, 230, 1),
(33, 'Khánh Hòa - Nha Trang', 1, 0, 0, 230, 1),
(34, 'Kiên Giang', 1, 0, 0, 230, 1),
(35, 'Kon Tum', 1, 0, 0, 230, 1),
(36, 'Lai Châu', 1, 0, 0, 230, 1),
(37, 'Lạng Sơn', 1, 0, 0, 230, 1),
(38, 'Lào Cai', 1, 0, 0, 230, 1),
(39, 'Lâm Đồng', 1, 0, 0, 230, 1),
(40, 'Long An', 1, 0, 0, 230, 1),
(41, 'Nam Định', 1, 0, 0, 230, 1),
(42, 'Nghệ An', 1, 0, 0, 230, 1),
(43, 'Ninh Bình', 1, 0, 0, 230, 1),
(44, 'Ninh Thuận', 1, 0, 0, 230, 1),
(45, 'Nha Trang', 1, 0, 0, 230, 1),
(46, 'Phú Thọ', 1, 0, 0, 230, 1),
(47, 'Phú Yên', 1, 0, 0, 230, 1),
(48, 'Quảng Bình', 1, 0, 0, 230, 1),
(49, 'Quảng Nam', 1, 0, 0, 230, 1),
(50, 'Quảng Ngãi', 1, 0, 0, 230, 1),
(51, 'Quảng Ninh', 1, 0, 0, 230, 1),
(52, 'Quảng Trị', 1, 0, 0, 230, 1),
(53, 'Sóc Trăng', 1, 0, 0, 230, 1),
(54, 'Sơn La', 1, 0, 0, 230, 1),
(55, 'Tây Ninh', 1, 0, 0, 230, 1),
(56, 'Thái Bình', 1, 0, 0, 230, 1),
(57, 'Thái Nguyên', 1, 0, 0, 230, 1),
(58, 'Thanh Hóa', 1, 0, 0, 230, 1),
(59, 'Tiền Giang', 1, 0, 0, 230, 1),
(60, 'Trà Vinh', 1, 0, 0, 230, 1),
(61, 'Tuyên Quang', 1, 0, 0, 230, 1),
(62, 'Vĩnh Long', 1, 0, 0, 230, 1),
(63, 'Vĩnh Phúc', 1, 0, 0, 230, 1),
(64, 'Yên Bái', 1, 0, 0, 230, 1),
(65, 'Phú Quốc', 1, 0, 0, 230, 1),
(66, 'Toàn Quốc', 1, 0, 0, 230, 1),
(67, 'Miền Bắc', 1, 0, 0, 230, 1),
(68, 'Miền Nam', 1, 0, 0, 230, 1),
(69, 'Miền Trung', 1, 0, 0, 230, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `school_address` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_website` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_province` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `school_address`, `school_type`, `school_website`, `school_province`) VALUES
(1, 'Quốc gia Hà Nội', '', 'Đại Học', '', 0),
(2, 'Bách khoa Hà Nội', '', 'Đại Học', '', 0),
(3, 'Công đoàn', '', 'Đại Học', '', 0),
(4, 'Công nghệ Giao thông vận tải', '', 'Đại Học', '', 0),
(5, 'Công nghiệp Hà Nội', '', 'Đại Học', '', 0),
(6, 'Công nghiệp Việt Hung', '', 'Đại Học', '', 0),
(7, 'Dược Hà Nội', '', 'Đại Học', '', 0),
(8, 'Điện lực', '', 'Đại Học', '', 0),
(9, 'Giao thông vận tải', '', 'Đại Học', '', 0),
(10, 'Hà Nội', '', 'Đại Học', '', 0),
(11, 'Khoa học và Công nghệ Hà Nội', '', 'Đại Học', '', 0),
(12, 'Kinh tế Kỹ thuật Công nghiệp', '', 'Đại Học', '', 0),
(13, 'Kinh tế Quốc dân', '', 'Đại Học', '', 0),
(14, 'Kiến trúc Hà Nội', '', 'Đại Học', '', 0),
(15, 'Lao động Xã hội', '', 'Đại Học', '', 0),
(16, 'Lâm nghiệp', '', 'Đại Học', '', 0),
(17, 'Luật Hà Nội', '', 'Đại Học', '', 0),
(18, 'Mỏ Địa chất Hà Nội', '', 'Đại Học', '', 0),
(19, 'Mỹ thuật Công nghiệp', '', 'Đại Học', '', 0),
(20, 'Mỹ thuật Việt Nam', '', 'Đại Học', '', 0),
(21, 'Ngoại thương', '', 'Đại Học', '', 0),
(22, 'Nội vụ Hà Nội', '', 'Đại Học', '', 0),
(23, 'Nông nghiệp Hà Nội', '', 'Đại Học', '', 0),
(24, 'Sân khấu Điện ảnh', '', 'Đại Học', '', 0),
(25, 'Sư phạm Hà Nội', '', 'Đại Học', '', 0),
(26, 'Sư phạm Nghệ thuật Trung ương Hà', '', 'Đại Học', '', 0),
(27, 'Sư phạm Thể dục thể thao Hà nội', '', 'Đại Học', '', 0),
(28, 'Tài nguyên và Môi trường Hà Nội', '', 'Đại Học', '', 0),
(29, 'Thủy lợi', '', 'Đại Học', '', 0),
(30, 'Thương mại', '', 'Đại Học', '', 0),
(31, 'Văn hóa Hà Nội', '', 'Đại Học', '', 0),
(32, 'Xây dựng', '', 'Đại Học', '', 0),
(33, 'Y Hà Nội', '', 'Đại Học', '', 0),
(34, 'Y tế Công cộng', '', 'Đại Học', '', 0),
(35, 'Mở Hà Nội', '', 'Đại Học', '', 0),
(36, 'Đông Đô', '', 'Đại Học', '', 0),
(37, 'Phương Đông', '', 'Đại Học', '', 0),
(38, 'Thăng Long', '', 'Đại Học', '', 0),
(39, 'Đại Nam', '', 'Đại Học', '', 0),
(40, 'FPT', '', 'Đại Học', '', 0),
(41, 'Hòa Bình', '', 'Đại Học', '', 0),
(42, 'Kinh doanh và Công nghệ Hà Nội', '', 'Đại Học', '', 0),
(43, 'Nguyễn Trãi', '', 'Đại Học', '', 0),
(44, 'Quốc tế Bắc Hà', '', 'Đại Học', '', 0),
(45, 'Tài chính Ngân hàng Hà Nội', '', 'Đại Học', '', 0),
(46, 'Thành Tây', '', 'Đại Học', '', 0),
(47, 'Thành Đô', '', 'Đại Học', '', 0),
(48, 'Công nghệ và Quản lý Hữu nghị', '', 'Đại Học', '', 0),
(49, 'An Ninh Nhân Dân', '', 'Đại Học', '', 0),
(50, 'Bách Khoa', '', 'ĐH Quốc Gia Tphcm', '', 0),
(51, 'Cảnh Sát Nhân Dân', '', 'Đại Học', '', 0),
(52, 'Công Nghệ Sài Gòn', '', 'Đại Học', '', 0),
(53, 'Công Nghệ Thông Tin', '', 'ĐH Quốc Gia Tphcm', '', 0),
(54, 'Công Nghệ Thông Tin Gia Định', '', 'Đại Học', '', 0),
(55, 'Công Nghệ Tphcm (hutech)', '', 'Đại Học', '', 0),
(56, 'Công Nghệ Tphcm (hutech)', '', 'Hệ CĐ', '', 0),
(57, 'Công Nghiệp Thực Phẩm Tp.hcm', '', 'Đại Học', '', 0),
(58, 'Công Nghiệp Tphcm', '', 'Đại Học', '', 0),
(59, 'Dân Lập Văn Lang', '', 'Đại Học', '', 0),
(60, 'Giao Thông Vận Tải (phía Nam)', '', 'Đại Học', '', 0),
(61, 'Giao Thông Vận Tải Tphcm', '', 'Đại Học', '', 0),
(62, 'Hoa Sen', '', 'Đại Học', '', 0),
(63, 'Hùng Vương Tphcm', '', 'Đại Học', '', 0),
(64, 'Khoa Học Tự Nhiên', '', 'ĐH Quốc Gia Tphcm', '', 0),
(65, 'Khoa Học Xã Hội Và Nhân Văn', '', 'ĐH Quốc Gia Tphcm', '', 0),
(66, 'Kiến Trúc Tphcm', '', 'Đại Học', '', 0),
(67, 'Kinh Tế', '', 'tài Chính Tphcm', '', 0),
(68, 'Kinh Tế Tphcm', '', 'Đại Học', '', 0),
(69, 'Lao Động', '', 'Xã Hội (phía Nam)', '', 0),
(70, 'Luật Tphcm', '', 'Đại Học', '', 0),
(71, 'Mở Tphcm', '', 'Đại Học', '', 0),
(72, 'Mỹ Thuật Tphcm', '', 'Đại Học', '', 0),
(73, 'Ngân Hàng Tphcm', '', 'Đại Học', '', 0),
(74, 'Ngoại Ngữ', '', 'Tin Học Tphcm', '', 0),
(75, 'Ngoại Thương (phía Nam)', '', 'Đại Học', '', 0),
(76, 'Nguyễn Tất Thành', '', 'Đại Học', '', 0),
(77, 'Nông Lâm Tphcm', '', 'Đại Học', '', 0),
(78, 'Quốc Tế', '', 'ĐH Quốc Gia Tphcm', '', 0),
(79, 'Quốc Tế Hồng Bàng', '', 'Đại Học', '', 0),
(80, 'Quốc Tế Sài Gòn', '', 'Đại Học', '', 0),
(81, 'Sài Gòn', '', 'Đại Học', '', 0),
(82, 'Sân Khấu Điện Ảnh Tp Hcm', '', 'Đại Học', '', 0),
(83, 'Sư Phạm Kỹ Thuật Tphcm', '', 'Đại Học', '', 0),
(84, 'Sư Phạm Thể Dục Thể Thao Tphcm', '', 'Đại Học', '', 0),
(85, 'Sư Phạm Tphcm', '', 'Đại Học', '', 0),
(86, 'Tài Chính Marketing', '', 'Đại Học', '', 0),
(87, 'Tài Nguyên Môi Trường Tphcm', '', 'Đại Học', '', 0),
(88, 'Thể Dục Thể Thao Tphcm', '', 'Đại Học', '', 0),
(89, 'Thuỷ Lợi (phía Nam)', '', 'Đại Học', '', 0),
(90, 'Tôn Đức Thắng', '', 'Đại Học', '', 0),
(91, 'Trần Đại Nghĩa', '', 'Đại Học', '', 0),
(92, 'Văn Hiến', '', 'Đại Học', '', 0),
(93, 'Văn Hoá', '', 'Nghệ Thuật Quân Đội', '', 0),
(94, 'Văn Hoá Tphcm', '', 'Đại Học', '', 0),
(95, 'Việt Đức', '', 'Đại Học', '', 0),
(96, 'Y Dược Tphcm', '', 'Đại Học', '', 0),
(97, 'Y Khoa Phạm Ngọc Thạch', '', 'Đại Học', '', 0),
(98, 'Âm nhạc Quốc gia Việt Nam', '', 'Học Viện', '', 0),
(99, 'Báo chí Tuyên truyền', '', 'Học Viện', '', 0),
(100, 'Chính sách và Phát triển', '', 'Học Viện', '', 0),
(101, 'Công nghệ Bưu chính Viễn thông', '', 'Học Viện', '', 0),
(102, 'Hành chính Quốc gia', '', 'Học Viện', '', 0),
(103, 'Kỹ thuật Mật mã', '', 'Học Viện', '', 0),
(104, 'Ngân hàng', '', 'Học Viện (HN)', '', 0),
(105, 'Ngoại giao', '', 'Học Viện', '', 0),
(106, 'Quản lý Giáo dục', '', 'Học Viện', '', 0),
(107, 'Tài chính', '', 'Học Viện', '', 0),
(108, 'Thanh Thiếu niên Việt Nam', '', 'Học Viện', '', 0),
(109, 'Y Dược học cổ truyền Việt Nam', '', 'Học Viện', '', 0),
(110, 'Biên Phòng', '', 'Phía Nam', '', 0),
(111, 'Chính Trị', '', 'Phía Nam', '', 0),
(112, 'Công Nghệ Bưu Chính Viễn Thông (', '', 'Học Viện', '', 0),
(113, 'Hàng Không Việt Nam', '', 'Học Viện', '', 0),
(114, 'Hành Chính Quốc Gia (phía Nam)', '', 'Học Viện', '', 0),
(115, 'Khoa Học Quân Sự (quân Sự, Thi Ở', '', 'Học Viện', '', 0),
(116, 'Khoa Y (ĐHQG HCM)', '', '', '', 0),
(117, 'Nhạc Viện Tphcm', '', '', '', 0),
(118, 'Bách Việt', '', 'Cao Đẳng', '', 0),
(119, 'Bán Công Công Nghệ Và Quản Trị D', '', 'Cao Đẳng', '', 0),
(120, 'Công Nghệ Thông Tin Tphcm', '', 'Cao Đẳng', '', 0),
(121, 'Công Nghệ Thủ Đức', '', 'Cao Đẳng', '', 0),
(122, 'Công Nghiệp Thực Phẩm Tphcm', '', 'Cao Đẳng', '', 0),
(123, 'Công Thương Tphcm', '', 'Cao Đẳng', '', 0),
(124, 'Điện Lực Tphcm', '', 'Cao Đẳng', '', 0),
(125, 'Giao Thông Vận Tải 3', '', 'Cao Đẳng', '', 0),
(126, 'Giao Thông Vận Tải Tphcm', '', 'Cao Đẳng', '', 0),
(127, 'Kinh Tế', '', 'Kỹ Thuật Sài Gòn', '', 0),
(128, 'Kinh Tế', '', 'Kỹ Thuật Vinatex Tp. Hồ Chí Minh', '', 0),
(129, 'Kinh Tế Đối Ngoại', '', 'Cao Đẳng', '', 0),
(130, 'Kinh Tế Kỹ Thuật Miền Nam', '', 'Cao Đẳng', '', 0),
(131, 'Kinh Tế Kỹ Thuật Phú Lâm', '', 'Cao Đẳng', '', 0),
(132, 'Kinh Tế Tphcm', '', 'Cao Đẳng', '', 0),
(133, 'Kinh Tế', '', 'công Nghệ Tphcm', '', 0),
(134, 'Kỹ Thuật Cao Thắng', '', 'Cao Đẳng', '', 0),
(135, 'KHÁC', '', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uniq_id` varchar(64) NOT NULL,
  `btprofile_id` varchar(100) DEFAULT NULL,
  `usersubscription_id` int(10) DEFAULT NULL,
  `credit_cardtoken` varchar(100) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL COMMENT 'Only last 4degit of card',
  `expiry_date` varchar(255) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `is_beta` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1 For beta user ,0 - Default',
  `last_name` varchar(100) DEFAULT NULL,
  `short_name` varchar(8) DEFAULT NULL,
  `istype` tinyint(2) NOT NULL DEFAULT '3' COMMENT '1-Super Admin, 2-Internal User, 3-External User',
  `photo` varchar(50) DEFAULT NULL,
  `photo_reset` varchar(50) DEFAULT NULL,
  `isactive` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 - ACTIVE, 2 - INACTIVE . 2-Disabled ,3- Deleted user',
  `timezone_id` smallint(6) DEFAULT '26',
  `isemail` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-Send Email, 0-Don''t Send',
  `is_agree` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0: No, 1: Yes',
  `usersub_type` tinyint(4) DEFAULT '0' COMMENT '0->Free User, 1->Paid User',
  `est_billing_amount` float(10,2) DEFAULT '0.00',
  `dt_created` datetime NOT NULL,
  `dt_updated` datetime DEFAULT NULL,
  `dt_last_login` datetime DEFAULT NULL,
  `dt_last_logout` datetime DEFAULT NULL,
  `query_string` varchar(100) DEFAULT NULL,
  `update_email` varchar(150) NOT NULL,
  `update_random` varchar(150) NOT NULL,
  `gaccess_token` text,
  `ip` varchar(15) DEFAULT NULL,
  `sig` varchar(100) NOT NULL,
  `desk_notify` tinyint(4) NOT NULL DEFAULT '1',
  `active_dashboard_tab` int(11) NOT NULL DEFAULT '7' COMMENT 'Sum of Binary values which will show tabs accordingly',
  `is_moderator` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0: No grant privilege, 1: Yes',
  `show_default_inner` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_infos`
--

CREATE TABLE `user_infos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `access_token` text,
  `is_google_signup` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_logins`
--

CREATE TABLE `user_logins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_COUNTRIES_NAME` (`countries_name`);

--
-- Chỉ mục cho bảng `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_LANGUAGES_NAME` (`name`);

--
-- Chỉ mục cho bảng `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_id_2` (`uniq_id`),
  ADD KEY `uniq_id` (`uniq_id`),
  ADD KEY `istype` (`istype`),
  ADD KEY `isactive` (`isactive`),
  ADD KEY `isemail` (`isemail`),
  ADD KEY `timezone_id` (`timezone_id`);

--
-- Chỉ mục cho bảng `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT cho bảng `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT cho bảng `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT cho bảng `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
