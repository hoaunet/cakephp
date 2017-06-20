-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2017 lúc 02:53 PM
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
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_url` varchar(225) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `articles_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `isactive` tinyint(2) NOT NULL,
  `ishot` tinyint(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `short_url`, `short_desc`, `body`, `articles_image`, `category_id`, `user_id`, `isactive`, `ishot`, `created`, `modified`) VALUES
(1, 'Cẩm nang tuyển dụng việc làm với người Nhật', 'cam_nang_tuyen_dung_viec_lam_voi_nguoi_nhat', 'John Condon là chuyên gia nổi tiếng về giao thoa văn hóa. Ông đã có thời gian sống và làm việc lâu dài với người Nhật.\r\nTomoko Matsumoto là giáo sư về truyền thông tại Đại học Nghiên cứu Quốc tế Kanda ở ngoại ô Tokyo.', 'Về tác giả\r\nJohn Condon là chuyên gia nổi tiếng về giao thoa văn hóa. Ông đã có thời gian sống và làm việc lâu dài với người Nhật.\r\nTomoko Matsumoto là giáo sư về truyền thông tại Đại học Nghiên cứu Quốc tế Kanda ở ngoại ô Tokyo.\r\nNội dung chính\r\nNguyên tác: With Respect to The Japanese\r\nNgười dịch: Thanh Huyền\r\nBản quyền tiếng Việt: Thái Hà Books\r\n1. Tất cả những gì tôi cần biết, họ đã học ở trường mẫu giáo\r\nTrong cuốn \"Tất cả những gì tôi cần biết, tôi đã học ở trường mẫu giáo\" - cuốn sách bán chạy nhất ở Mỹ vài năm trước, tác giả Robert Fulghum viết về kiến thức đơn giản khi học cách chia sẻ mọi thứ, nắm tay và đi sát nhau khi băng qua đường.\r\nHàng thập kỷ trước, khi cuốn sách thú vị của Fulghum ra đời, các nhà khoa học ở Nhật đã có một nghiên cứu về hành vi của trẻ em ở các trường mẫu giáo của Mỹ và các trường quốc tế so với hành vi của trẻ em trong các trường mẫu giáo ở Nhật Bản.\r\nCác nhà nghiên cứu quan tâm đến tranh vẽ của bọn trẻ. Họ băn khoăn liệu khi nhận được cùng một chỉ dẫn, những đứa trẻ từ các nền văn hoá khác nhau có tạo nên các bức tranh khác nhau hay không.\r\nCâu trả lời là có, rõ ràng đến nỗi gần như ai cũng có thể phân loại được bức nào là do bọn trẻ Nhật Bản vẽ và bức nào là của trẻ em Bắc Mỹ, Úc và châu Âu.\r\nĐầu tiên là cách bố trí chỗ ngồi ở mỗi trường. Ở một số phòng học của Mỹ, có những chiếc bàn riêng. Ở tất cả các trường mẫu giáo của Nhật, trẻ em ngồi quanh những chiếc bàn, tạo thành các nhóm sáu hay tám bé.\r\nNguyên tắc của các giáo viên cũng khác nhau. Các giáo viên người Mỹ mời các vị khách \"đi thẳng vào vấn đề và bảo các em họ muốn các em làm gì\". Ở các trường của Nhật, tất cả việc truyền đạt thông tin đều do giáo viên kiểm soát, họ chịu trách nhiệm và đóng vai trò cầu nối, thực hiện. \"Hãy cho tôi biết các bạn muốn tôi nói gì với các em\", giáo viên Nhật sẽ nói như vậy.\r\nCách bọn trẻ bắt đầu và thực hiện hoạt động cũng khác biệt. Thường thì sau khi nhận được tờ giấy, một đứa trẻ người Mỹ sẽ bắt đầu vẽ ngay. Khi bức tranh đã hoàn thành, bọn trẻ sẽ giơ lên để thông báo hoặc sẽ mang lên bàn giáo viên.\r\nỞ các trường của Nhật thì trẻ em đợi đến khi tất cả các tờ giấy đã được phát. Sau đó, ở mỗi bàn, các em nhìn nhau và nói chuyện một chút về những việc chúng chuẩn bị làm. Sau đó, từng bàn một, như thể có tín hiệu, tất cả các em bắt đầu vẽ. Trong suốt quá trình vẽ, bọn trẻ sẽ quay ra và xem những đứa khác đang làm gì. Những em hoàn thành trước tiên sẽ đợi đến khi các bạn khác xong, và khi tất cả đã hoàn thành thì các bức vẽ sẽ được thu lại.\r\nNếu bọn trẻ tỏ ra khó khăn khi vẽ ai đó trong gia đình, phản ứng của các giáo viên cũng khác nhau. Giáo viên người Nhật thường hỗ trợ đứa trẻ, cầm tay trẻ và điều khiến chiếc bút màu. Ở các trường của Mỹ, giáo viên khuyến khích các em với các từ như \"Hãy cố gắng hết sức\" hay \"Trong tranh là bố của em đấy, em hãy cố vẽ theo cách mà em nhìn thấy bố em nhé\".\r\nCuối cùng, trình tự mà các thành viên gia đình được vẽ ra cũng khác nhau đáng kể. Với trẻ em Nhật, trình tự thường bắt đầu từ bố, me, rồi đến anh chị. Đứa trẻ sẽ vẽ mình tiếp theo, và nếu vẫn còn em nhỏ hơn, các bé sẽ vẽ cuối cùng.\r\nVới trẻ em Mỹ và các em từ các nước khác, trình tự có vẽ như ngẫu nhiên hơn nhiều. Xu hướng đáng chú ý duy nhất là một số trẻ em Mỹ sẽ vẽ mình đầu tiên.\r\nTôi hay chúng ta?\r\nBằng vô số cách, cả hiển nhiên và tinh tế, người Nhật Bản được khuyến khích trước tiên tới quan hệ của họ với người khác. \"Chúng ta\" trước \"tôi\". \"Chúng ta\" theo nghĩa gia đình, mái trường, đất nước, hay đơn giản là những người đang cùng trò chuyện trong phòng. Một cá nhân không bao giờ hoàn toàn độc lập, mà luôn phải có ý thức về những người khác.\r\nVới nhiều người từ các nền văn hoá khác, cá nhân, chứ không phải nhóm, mới là căn bản.\r\nĐây không đơn giản chỉ là những khác biệt văn hoá thú vị. Chúng chính là những vấn đề về cảm xúc. Một vị khách có thể phiền lòng nếu một người Nhật thể hiện quan điểm mở đầu bằng cụm từ \"Người Nhật chúng tôi\" (Wareware Nihonjin). Người Mỹ thì sẽ yêu cầu \"Hãy cho tôi biết luôn quan điểm của anh đi\".\r\nTương tự, người Nhật cũng thấy một số biểu hiện của chủ nghĩa cá nhân kiểu Mỹ thật bất lịch sự và khó gần. Người Mỹ thường có xu hướng nói theo kiểu \"theo ý kiến của tôi\", \"tôi nghĩ là...\", để vừa thể hiện tính cá nhân đồng thời thận trọng về việc nói thay ý kiến người khác. Tuy nhiên, điều đó có thể tạo ấn tượng tự cao tự đại.\r\nTrớ trêu thay, cả hai cách đều nhằm mục đích thể hiện sự khiêm tốn: Nói \"chúng tôi\" có thể là một cách để hạ thấp quan điểm của cá nhân xuống, còn nói \"theo cách nhìn của tôi\" thì có thể là một cach để chỉ rằng người đó không có ý nói thay cho người khác.\r\nỞ Nhật, lòng trung thành dành cho trường học tồn tại rất lâu, và khi một người tham gia vào một tổ chức, như công ty chẳng hạn, thì thường sẽ là sự gắn bó lâu dài. Chuyển từ trường này sang trường khác hay công ty này sang công ty khác rất hiếm thấy trước khi bong bóng kinh tế vỡ vào những năm 1990, và đến bây giờ vẫn rất ít.\r\nỞ Nhật, thay đổi không được khuyến khích, vì người chen ngang sẽ không thể tích luỹ được những kinh nghiệm chung với những người đã ở cùng nhau một thời gian dài. Thay đổi từ trường này qua trường khác hay từ công ty này sang công ty khác được coi là gián đoạn; việc đó không đóng góp gì cho sự hoà hợp của nhóm.\r\nThông lệ tuyển dụng\r\nNhân viên Nhật Bản thường được tuyển dụng theo nhóm hay \"lớp\", mỗi năm một lần, rất giống sinh viên nhập trường. Dù hoạt động có thể khác nhau, họ đều làm việc cùng nhau, ăn cùng nhau và một số người có thể sống cùng nhau trong khu ký túc xá của công ty. Do đó, khả năng sống hoà thuận với những người khác là một tiêu chí quan trọng để được tuyển dụng.\r\nRa quyết định\r\nTrong phần lớn các trường hợp, người Nhật thích đưa ra quyết định dựa trên sự đồng lòng hơn là theo biểu quyết. Mọi người nên bàn bạc cho tới khi đạt được thoả thuận nào đó. Nếu có vẻ như không thể thống nhất, thì tốt nhất là hoãn việc ra quyết định lại.\r\n2. Trật tự xã hội\r\nNhiều người nước ngoài tới làm việc ở Nhật cho rằng người Nhật ý thức thái quá về địa vị của người này với người khác, đặc biệt là tuổi tác và thâm niên.\r\nTrật tự tôn kính ở Nhật là: 1/ Người trẻ hơn nghe theo người lớn tuổi hơn; 2/ Trong một tổ chức, sự tôn trọng được dành cho người có thâm niên nhiều hơn; 3/ Khi chào, những người đang muốn được ưu ái thì cúi thấp hơn (ví dụ người bán hàng cúi đầu trước khách hàng).\r\nTuy nhiên, lớn hơn không có nghĩa là muốn làm gì thì làm. Anh hay chị có trách nhiệm đặc biệt với cha mẹ và các em. Lớn hơn không nhất thiết là vị trí đáng ganh tỵ. Người nhỏ hơn có thể phụ thuộc và dựa vào sự hỗ trợ của người lớn hơn, hình thức này cũng đúng với các lứa tuổi khác nhau khi học cùng một trường.\r\nĐây là mối gắn kết tiền bối - hậu bối (senpal - kohai), nó còn tiếp tục rất lâu sau thời kỳ đại học và mở rộng sang thế giới công việc, ở đó, các cựu sinh viên tìm kiếm và trao đi sự ưu ái với nhau vì mối gắn kết vì - chứ không phải bất chấp - khác biệt tuổi tác của họ.\r\nTrong một tổ chức, một người trẻ có thể có khả năng tốt hơn người lớn tuổi, và có thể những người khác cũng nhận ra điều đó mà không cần thể hiện ra ngoài, nhưng người trẻ hơn sẽ vẫn thể hiện sự tôn kính với người nhiều tuổi hơn.\r\nTrong các cuộc gặp xuyên văn hoá, mọi thứ có thể bị xáo trộn. Sự lúng túng sẽ giảm đi nếu cả hai chuyện trò bằng tiếng Anh, thứ ngôn ngữ ít đòi hỏi phải điều chỉnh cẩn thận để phù hợp với mỗi tình huống xã hội hơn là tiếng Nhật.\r\nSenpai và Kohai\r\nBa từ để mô tả các mối quan hệ cực kỳ quan trọng ở Nhật là senpai, kohai và doki. Senpai chỉ một người là tiền bối của người khác và kohai chỉ người ở địa vị thấp hơn trong tổ chức, doki chỉ những người trong nhóm gia nhập tổ chức cùng một lúc.\r\nTôn trọng theo tuổi tác, thâm niên và chú ý tới thứ bậc trên dưới của tổ chức xuất hiện trong giao tiếp hàng ngày ở Nhật.\r\nỞ công sở, những người mới được tuyển thường chỉ thực thi những công việc lặt vặt, thường là trong cả năm đầu tiên. Trong năm đầu này, họ dỡ đồ, phát thư trong nội bộ, đến văn phòng sớm hơn những người khác để sắp xếp tài liệu, thậm chí là lau dọn văn phòng.\r\nMối quan hệ senpai - kohai tương tự như quan hệ cha mẹ - con cái, rất hiển nhiên trong các tổ chức ở Nhật Bản. Kohai có thể mong chờ ở vị senpai của mình sự bảo đảm và giúp đỡ, thậm chí đôi khi cả sự bảo vệ che chở nữa, cũng như một người chờ đợi những hỗ trợ về tinh thần của cha mẹ khi cần.\r\nDoki, theo nghĩa đen là \"cùng kỳ\". Các doki được cử về các bộ phận khác nhau và rồi được thuyên chuyển từ bộ phận này sang bộ phận khác trong những năm đầu ở công ty, nên mạng lưới doki của một người sẽ nhanh chóng được mở rộng trong tổ chức. Dù không xuất hiện trong bất cứ sơ đồ tổ chức chính thức nào, nhưng mạng lưới doki là sức mạnh chính trong sự bền chặt và đoàn kết của các tổ chức Nhật Bản.\r\nMong muốn hoà nhập\r\nVì chắc chắn sẽ gặp khó khăn với tiếng Nhật, nên những người mới đến thường cần có ai đó giúp đỡ. Hầu hết các đồng nghiệp người Nhật không thể giúp đỡ được gì nhiều, nhưng có ai để đặt câu hỏi bằng tiếng Anh sẽ giúp giảm đáng kể cảm giác lo lắng của một người nước ngoài làm việc trong một tổ chức Nhật Bản. Những người này tình nguyện giúp đỡ các thực tập sinh.\r\nThường thì một người không lớn lên ở Nhật cần phải chủ động đề nghị được giúp đỡ và phát triển mối quan hệ với những người có thể giúp.\r\nCách thức vận hành: Xin phép\r\nMột phụ nữ người Mỹ miêu tả kinh nghiệm khi làm việc tại một công ty ở Tokyo của mình: \"Tôi được yêu cầu dọn sạch một trong những phòng làm việc mà nhóm tôi sử dụng. Nhưng mệnh lệnh này đầu tiên xuất phát từ shocho (giám đốc) của tôi, giám đốc nói với nhóm trưởng của tôi, nhóm trưởng nói với sếp thường trực của tôi, sếp thường trực sau đó nói lại với tôi. Ở đây không có chuyện làm việc trực tiếp với bất cứ ai\".\r\nVới người Mỹ, điều này có vẻ \"thiếu hiệu quả\". Nhưng trở lại câu chuyện trong lớp học mẫu giáo, khi giáo viên đóng vai trò là người đứng giữa trẻ em trong lớp với những người đến thăm và đề nghị những người khách nói mong muốn của họ với các em cho cô, cô đang thực hiện vai trò trung gian của mình, nếu không, buổi tiếp xúc có thể trở nên khó xử, bối rối, theo quan niệm của người Nhật.\r\nTrong một tổ chức của Nhật, nhận thức về người có trách nhiệm luôn thường trực trong đầu. Đôi khi, trách nhiệm rơi chủ yếu vào người phụ trách (tantosha), nhưng trách nhiệm cũng tăng lên theo vị trí cao hơn trong mạng lưới tổ chức.\r\nỞ Nhật, người ta không hay nghe thấy câu \"đó không phải trách nhiệm của tôi\".\r\nCác vấn đề giới tính\r\nỞ mọi cấp độ danh tính cá nhân và mối quan hệ, giới tính là một vấn đề quan trọng cần lưu tâm.\r\nNhững người nước ngoài khi đến làm việc tại Nhật nên thận trọng khi đưa ra giả định về đồng nghiệp và những mối quan hệ với đồng nghiệp chỉ dựa trên cơ sở giới tính. Một kỹ sư người Mỹ đến làm việc ở Nhật đã kỳ vọng rằng, hầu hết phụ nữ ở phòng thí nghiệm sẽ là trợ lý hay chủ yếu là thư ký.\r\nThật ngạc nhiên, người đứng đầu bộ phận và giám sát anh là một phụ nữ, có bằng tiến sĩ khoa học và nhiều năm kinh nghiệm chuyên môn. Tuy nhiên, anh vẫn thấy nhiều phụ nữ anh quen biết có nền tảng học vấn ngang với anh làm những công việc sơ đẳng hơn, và anh kết luận rằng điều này phản ánh một sự thiên lệch giới tính trong tổ chức và người giám sát của anh là một ngoại lệ.\r\nMất vài tháng anh mới dần hiểu được rằng, những người phụ nữ mà anh cảm thấy là bị chỉ định cho những công việc ít thử thách hơn vì họ là phụ nữ, thực ra đều là những người mới được tuyển dụng, những chuyên viên nghiên cứu sơ cấp, cả nam giới và nữ giới đều phải làm. Điều anh quy cho giới tính trên thực tế là nhiệm vụ do họ còn thiếu thâm niên trong tổ chức.\r\nTheo truyền thống và cho tới ngày nay, trong gia đình, người phụ nữ quản lý về tài chính cũng như những vấn đề học hành của con cái và những trách nhiệm truyền thống khác. Phụ nữ với trình độ giáo dục ngang với bạn học nam vẫn giành được những công việc tương đương trong các công ty.\r\nNếu một phụ nữ kết hôn và sinh con, cô ấy có thể rời công ty một vài năm, tuy nhiên khi trở lại công ty, họ không có thâm niên như những nam giới có cùng xuất phát điểm.\r\nỞ Nhật, có những lúc không hề có sự phân biệt giới tính, đó là khi thực hiện các dự án. Không hiếm thấy một quản lý dự án là nữ, giám sát một đội đông đảo nam giới. Nhưng trong giờ ăn trưa ở nơi làm việc, thường nam giới và phụ nữ sẽ ngồi ở những khu vực riêng trong phòng ăn.\r\nMột phụ nữ Mỹ kể về kinh nghiệm làm việc ở Nhật của cô rằng, việc cô đi ra ngoài với sếp và nói chuyện về mục đích và kế hoạch tương lai, thậm chí cả những vấn đề cá nhân, không có gì là bất thường cả. \"Tình huống đó ở Mỹ có thể sẽ bị nhìn nhận sai lệch - rằng có thể cô ta đang định làm gì đấy sau lưng ai đó hay đang ngoại tình\", cô cho biết.\r\nNhiều phụ nữ trẻ Nhật coi việc kết hôn và sinh con là điều cốt yếu mà họ trân trọng, khát khao và mong mỏi. Những người khát lại đặt nặng sự thoả mãn bản thân và cống hiến cho xã hội qua những thành tựu trong nghề nghiệp. Nhiều người muốn có cả hai, đồng thời hoặc tuần tự.\r\n3. Gặp nhau\r\nBầu không khí\r\nKhông khí hay bầu không khí cảm xúc, tuy mơ hồ nhưng lại là những cảm giác rất mãnh liệt - chúng là trọng tâm trong bối cảnh các mối quan hệ và giao tiếp giữa người với người ở Nhật.\r\nĐể \"hiểu được bầu không khí\" và cảm nhận người khác đang nghĩ hay cảm thấy gì mà không cần hỏi là cả một nghệ thuật, một dấu hiệu cho thấy sự chín chắn, và một phẩm chất quan trọng trong lãnh đạo và quản lý.\r\nĐiều quan trọng ở Nhật là giá trị của việc \"hiểu được bầu không khí\", và không phải lúc nào cũng cần hay muốn mọi chuyện được \"nói rõ ra\"\r\nNếu một buổi họp được triệu tập để xem xét một quyết định quan trọng, người quản lý hay người chịu trách nhiệm có thể hoãn ra quyết định nếu \"bầu không khí\" thể hiện rằng tốt hơn là nên đợi đến sau này, khi việc đi đến sự đồng thuận được dễ dàng hơn.\r\nK.Y (kuki ga yomenai) là từ tiếng lóng ở Nhật, ám chỉ những người không hiểu được bầu không khí. K.Y cũng miêu tả cảm giác của rất nhiều người phương Tây tới làm việc ở Nhật.\r\nĐịa điểm\r\nĐịa điểm thường là một yếu tố cơ bản trong giao tiếp ở Nhật, nhiều đến nỗi người ta thay đổi địa điểm và thời gian để có được cuộc trò chuyện mà họ muốn.\r\nMột vị quản lý ngân hàng người Úc từng tới Nhật, mô tả cảm giác hoang mang khi các đồng nghiệp Nhật cân nhắc rất nhiều trước khi quyết định nên gặp nhau ở nhà hàng nào trong buổi họp vào bữa tối. \"Tôi đã nghĩ chủ yếu là vấn đề thuận tiện, thực đơn và giá cả. Nhưng những điều này có vẻ mới chỉ là những điều tối thiểu\", ông nói.\r\nNguyên tắc về việc coi địa điểm là bối cảnh để diễn giải lời nói cũng như thúc đẩy hay chế ngự những điều có thể được nói ra là những đặc trưng giao tiếp không thể xem nhẹ ở Nhật.\r\n\"Ở Mỹ, lời nói là cách để giao tiếp; ở Nhật, lời nói là một cách để giao tiếp\" - nhà nhân loại học Masao Kunihiro giúp chúng ta giải thích cách lý giải ngôn từ, và những điều có thể còn quan trọng hơn cả chính lời nói.\r\nKhi từ ngữ quan trọng hơn ngữ cảnh, thì các điều khoản của hợp đồng thường có xu hướng cố định và cứng nhắc.\r\nTrong một khảo sát ở Nhật, câu hỏi được đưa ra là nếu hợp đồng đã được ký, nhưng sau một khoảng thời gian thì việc đáp ứng các điều khoản là không thể, vì các điều kiện đã thay đổi, thì nên làm gì. Chưa tới một phần tư những người được khảo sát trả lời rằng \"hợp đồng là hợp đồng\", và người ta nên cảm thấy bị ràng buộc bởi các điều khoản đó. Hai phần ba đưa ra lựa chọn khác - bàn bạc với bên kia và xem có thể điều chỉnh được những gì.\r\n\"Với người thông thái thì chỉ một từ là đủ\" là câu được nói ở phương Tây, nhưng lại vang dội ở Nhật.\r\nKhi một người Nhật được một công ty Nhật tuyển dụng, họ có thể sẽ không nhận được một bản miêu tả công việc chính xác; nhân viên mới có thể thậm chí không biết lương và phúc lợi của họ sẽ thế nào, một tình thế mà không mấy người phương Tây cảm thấy thoải mái. Người phương Tây muốn lời hứa phải được nói rõ ràng. Người Nhật đặt lòng tin nhiều hơn vào những vấn đề khác - uy tín của công ty hay người đã tiến cử ứng viên.\r\nCác tiêu chuẩn kép\r\nGiao tiếp ở Nhật đánh giá cao sự nhạy bén đối với các tình huống, với việc làm hoặc nói những gì phù hợp trong một tình huống cụ thể. Người Nhật không mong muốn tất cả mọi người phải được đối xử cùng một cách trong tất cả các tình huống, họ cũng không nghĩ rằng sẽ là khôn ngoan nếu lúc nào cũng nói ra điều mình tin tưởng.\r\n\"Theo từng trường hợp\" là một thành ngữ thường được sử dụng ở Nhật.\r\nTatemae và Honne\r\nNhiều người nghiên cứu về nước Nhật đã nghe đến thuật ngữ tiếng Nhật tatemae và honne dùng để mô tả hai tiêu chuẩn cùng tồn tại song song không mâu thuẫn.\r\nTatemae nghĩa đen là cấu trúc bên ngoài của một toà nhà - những biểu hiển ở bề mặt. Honne nghĩa đen là \"tiếng nói thực sự\". Người Nhật cho rằng giữa những điều người ta nói và nghĩ có thể có sự khác biệt.\r\nNgười Nhật thường xem xét hoàn cảnh mà vấn đề được bộc lộ, từ đó đánh giá xem bao nhiêu phản ánh là honne và bao nhiêu là tatemae. Ngữ cảnh là điều quan trọng bậc nhất.\r\nNhững người làm việc ở Nhật được khuyên phải luôn luôn xem xét hoàn cảnh mà điều gì đó được nói ra.\r\nNgười Nhật thể hiện sự tôn trọng và lòng biết ơn cùng sự lịch thiệp bằng cách nâng người kia lên, trong cả lời nói và hành động. Cả sự tôn kính nâng người khác lên và sự khiêm nhường hạ thấp mình đều là những nguyên tắc cơ bản trong mối quan hệ giữa người với người ở Nhật.\r\nNgười phương Tây cũng làm như người Nhật khi tán tụng, ca ngợi hay thể hiện sự quan tâm đến người kia, nhưng họ không sẵn sàng để trở nên lu mờ như những người bạn Nhật của họ.\r\nKhi khách hàng cảm thấy mình không được người bán hàng cư xử nhã nhặn, hay khi cha mẹ cảm thấy họ không nhận được sự tôn trọng từ phía con cái, họ sẽ thấy phiền lòng hoặc cảm thấy bị tổn thương.\r\nVăn hoá Mỹ lại không khuyến khích mọi người mong mỏi bất cứ cách đối xử đặc biệt nào mà không phải do họ đã \"giành\" được.\r\nNgười Nhật thường chuẩn bị kỹ cho các cuộc gặp mặt. Họ sẽ muốn biết ít nhất là đủ thông tin về người mà họ sẽ gặp lần đầu, để cư xử cho đúng mục đích, hơn là cố gắng tìm hiểu mối quan hệ vào lúc gặp mặt.\r\nDo vậy, người Nhật thích sử dụng người trung gian để giới thiệu.\r\nNgười Nhật không thoải mái với \"cuộc gọi lạnh lùng\" từ những người muốn hợp tác trong công việc. Các doanh nhân tới một công ty Nhật mà không báo trước sẽ không bao giờ được ấn tượng tốt và chắc chắn là sẽ không được đón nhận một cách tốt đẹp. Công ty quả thật chưa sẵn sàng để tiếp nhận họ.\r\nCác phong cách thương thảo\r\nTầm quan trọng của ngữ cảnh và kỳ vọng về việc có qua có lại đều là trọng tâm đối với các phong cách thương thảo ở Nhật, như được giải thích qua sự tách biệt giữa phong cách điều chỉnh (awase) và phong cách chọn lọc (erabi) của Kinhide Mushakoji - Phó hiệu trưởng và giảng viên quan hệ quốc tế của Đại học Liên Hiệp Quốc.\r\nPhong cách erabi dành cho người thích lựa chọn, gắn với các nhà thương thảo người Mỹ.\r\nPhong cách awase đặc trưng bởi các điều chỉnh liên tiếp trong một môi trường liên tục thay đổi. Nhà thương thảo phong cách awase có thể không có mục tiêu cố định trong đầu cho tới sau khi tham gia vào các cuộc thảo luận và cảm thấy những điều khả thi trong tình huống.\r\nKhi người phương Tây và người Nhật thương thảo, ngay từ ban đầu có thể sẽ có những xung đột trong các hiệp ước. Một phía có thể sẽ muốn đưa ra các đề nghị ngay lập tức, muốn \"đặt các quân bài của mình lên bàn\". Người Nhật có lẽ không sẵn sàng làm như vậy, họ muốn dành nhiều thời gian hơn để trong lúc đó dần hiểu bên kia rõ hơn, nhằm nhận thấy điều gì có thể sẽ có hiệu quả.\r\nNếu một bên muốn có các hợp đồng chi tiết và chặt chẽ trong khi phía Nhật lại thích một tài liệu ít chính xác hơn đóng vai trò như một biểu tượng cho sự nỗ lực hợp tác của hai bên, thì có thể sẽ nảy sinh vấn đề. Phía Nhật có thể tiếp tục đàm phán về các biệt đãi sau khi hợp đồng được ký, một vị thế mà những người đã quen với phong cách erabi coi là không phù hợp.\r\n4. Giao tiếp hàng ngày\r\nDù thời trang thay đổi năm này qua năm khác, và ở Nhật khác nhau một chút ở các vùng, nhưng hai đặc điểm bất biến của phục trang và diện mạo bên ngoài là gọn gàng và sạch sẽ.\r\nTa nên lưu ý rằng ăn mặc phù hợp mới chỉ là điều bận tâm đầu tiên. Cách cư xử thậm chí còn quan trọng hơn.\r\nMột nghiên cứu về các cuộc phỏng vấn xin việc cho thấy những khác biệt giữa sinh viên Nhật và sinh viên Mỹ thành thạo tiếng Nhật. Một vài sinh viên Mỹ bắt chéo chân trong khi phỏng vấn, trong khi không sinh viên Nhật nào làm như vậy. Ở Nhật, bắt chéo chân trước mặt của ai đó lớn tuổi hơn hay ở địa vị cao hơn mình bị coi là bất lịch sự.\r\nVới những người từ nước ngoài tới Nhật làm việc, lời khuyên là bắt đầu bằng cách ăn mặc cẩn trọng, quan sát xem những người khác mặc gì rồi điều chỉnh theo.\r\nGiao tiếp ở Nhật chuộng \"đi đường vòng\". Một phiên dịch viên chuyên nghiệp người Nhật nói rằng: \"Lối nói gián tiếp kiểu Nhật là một phần cách sống của chúng tôi. Không phải vì chúng tôi là những người tử tế và ân cần đến nỗi lo lắng về phản ứng của người khác. Chỉ là chúng tôi biết định mệnh và số phận của chúng tôi lúc nào cũng gắn với người khác\".\r\nỞ nơi mà một người là một phần của nhóm - gia đình hay công ty - cũng có thể có sự thẳng thắn khiến người ngoài phải choáng váng. Các vị sếp có thể đi thẳng vào vấn đề, mà theo tiêu chuẩn của phương Tây, điều dó có vẻ tàn khốc.\r\nKhi hy vọng gặp ai đó lần đầu và đôi lúc, khi truyền đạt một thông tin khó khăn và tế nhị, người Nhật thấy rằng sử dụng bên thứ ba, hay người trung gian, có thể là cách hiệu quả nhất.\r\nTuy nhiên, có một \"bên thứ ba\" mà người Nhật ít dùng hơn so với các xã hội hiện đại khác: luật sư. Thực tế, vai trò của luật sư một phần là để giúp làm rõ và giảm những điều mơ hồ bằng cách chuyển các thông tin thành dạng văn bản, với thứ ngôn ngữ khiến mọi vấn đề trở nên rõ ràng với cả hai phía. Các hợp đồng của Mỹ thường rất nhiều chi tiết và đưa ra những thoả thuận, ý định và kết quả rõ ràng. Các hợp đồng của Nhật có vẻ chung chung và mơ hồ hơn.\r\nVới quá trình toàn cầu hoá, sự có mặt và vai trò của luật sư đã tăng lên đáng kể ở Nhật, nhưng phần lớn là ở cấp độ công ty hay tổ chức khác. Nghĩa là người ta không hề nghĩ tới việc mâu thuẫn bình thường leo thang thành một thách thức pháp luật.\r\nNgười Nhật có cách chia buồn đúng, cách chào đón người trên đúng, cách đón năm mới đúng, cách mời nước và nhận quà đúng, từ chối một lời khen sao cho đúng... Tuy nhiên người Nhật không kỳ vọng người nước ngoài sẽ cố gắng hành động như họ.\r\nMột nhà tư vấn kinh doanh người Nhật đưa ra lời khuyên: \"Có nhiều việc bạn nên cố gắng làm cho đúng khi ở Nhật, nhưng người Nhật không kỳ vọng bạn làm mọi việc giống như cách họ làm. Bạn nên cố gắng biết điều gì người Nhật coi là cách thức phù hợp, và điều chỉnh theo\".\r\nCác cách nói \"không\"\r\nNgười Nhật trong khi trò chuyện thường gật đầu hơn bất cứ xã hội nào, và tần suất hơn gấp đôi so với người Mỹ.\r\nNgười phương Tây không quen thuộc với Nhật Bản thường nhầm gật đồng với đồng ý, trong khi điều đó chỉ đơn giản là dấu hiệu cho thấy người đó đang lắng nghe. Một số người Nhật cho biết họ cảm thấy bất an khi nói chuyện với người không gật đầu.\r\nMặc dù hành vi gật đầu không có nghĩa là đồng ý, nhưng lại mang tính xác nhận, vì người Nhật rất ngại nói \"không\" trực tiếp trong giao tiếp xã giao.\r\nNhà nghiên cứu Keiko Ueda đã xác định được 16 cách khác nhau truyền đạt câu nói \"không\", bao gồm đổi hướng câu chuyện, xin lỗi, nói \"có\" kèm theo điều kiện, và im lặng.\r\nKhi trả lời câu hỏi về việc tìm thời gian gặp mặt, một người nói tiếng Anh có thể nói \"Không, tôi không gặp bạn vào thứ Sáu được\", còn người Nhật sẽ nói \"Như thế có thể hơi khó\".\r\nKhi một nhà quản lý người Nhật trả lời một gợi ý hay một yêu cầu bằng một nhận xét kiểu như \"Hừmmm, chuyện đó chắc sẽ khó đấy\", hay \"Để tôi nghĩ về chuyện đó đã\", thì một người Nhật khác sẽ coi đó là dấu hiệu tương đối mạnh rằng câu trả lời là \"không\".\r\nHầu như người Mỹ nào cũng quen với câu \"im lặng là vàng\", nhưng ít ai biết đến nó ở dạng quen thuộc ở Nhật: \"Nói là bạc, nhưng im lặng là vàng\".\r\nQuả thật, có rất nhiều câu tục ngữ Nhật thể hiện sự hoài nghi với lời nói và đánh giá cao sự im lặng. \"Thùng rỗng kêu to\" là một câu được ưa thích. Trong giao tiếp, nói quá nhiều cũng có thể là dấu hiệu của sự thiếu chín chắn hoặc một dạng đầu rỗng.\r\nNgười Mỹ thường tin rằng nếu có điều gì đó chưa được nói thành lời thì nó chưa được truyền đạt, và nếu ai đó có gì đó để nói thì họ nên nói ra.\r\nNgười Nhật và người Mỹ thường khiến nhau bối rối do cách họ nói chuyện và đối xử với sự im lặng. Một người Mỹ hỏi người Nhật một câu và có một khoảng lặng trước khi người Nhật trả lời. Nếu câu hỏi là tương đối trực tiếp thì khoảng lặng thậm chí có thể còn dài hơn, vì người Nhật cân nhắc sao cho tránh được câu trả lời trực tiếp.\r\nTuy nhiên, người Mỹ có thể cho rằng khoảng lặng đó là do câu hỏi chưa được hiểu rõ, và sẽ nhắc lại cho rõ hơn. Việc diễn đạt thêm bằng lời nói chắc chắn chỉ khiến tình huống khó xử hơn cho người Nhật.\r\nỞ Nhật, \"mạnh dạn lên tiếng\" có thể trở thành công kích.\r\nMột người Nhật đã học ở Mỹ và từng sống vài năm ở Honolulu giải thích: \"Nếu tôi nói với một người bạn Nhật rằng tôi vừa ở Los Angeles, bạn tôi sẽ hỏi tôi thấy những gì, tôi thích nơi đó không... Nhưng nếu tôi kể cho một người Mỹ câu chuyện tương tự, anh ta sẽ noi: \"Ồ, Los Angeles hả! Tôi có một người anh họ sống ở Long Beach đấy. Tôi đã từng đến đấy. Tôi thích Los lắm và năm ngoái lúc tôi đi mua sắm ở đó...”. Thật khó chịu khi ai đó chuyển hướng câu chuyện sang nói về họ\".\r\nKhiêm tốn là một đức hạnh, một thái độ lịch thiệp xã giao trong hầu hết các xã hội. Một người khoe mẽ, chỉ biết đến mình, thì dù ở Sydney hay Saporo cũng làm người khác chán. Người Nhật cũng như người phương Tây đánh giá cao người anh hùng gạt đi những lời khen tặng dành cho hành động của họ. Tuy nhiên, cũng có đôi chút khác biệt.\r\nKhi một người Nhật đưa ra lời đề nghị với người khác, như tặng một món quà hay một bữa ăn mà người đó đã chuẩn bị, có những biểu hiện cố định cho sự khiêm nhường: \"Chẳng có gì đâu\" hay \"Không có gì đặc biệt đâu\".\r\nĐừng bao giờ đón nhận những lời xin lỗi theo giá trị bên ngoài. Người chủ xin lỗi khách rằng \"Thật chẳng có gì đặc biệt để đãi anh cả\" nhưng thật ra họ đã dành gần hai ngày để lên kế hoạch và chuẩn bị bữa ăn. Tất nhiên, khách nên phản đối sự phủ nhận đó.\r\nBởi mỗi người đều gắn bó chặt chẽ với gia đình, nên khen ngợi vợ chồng hay con cái cũng giống như ca ngợi chính mình, theo người Nhật. Sự ngần ngại ca ngợi công khai những phẩm chất tốt của gia đình là một lý do khiến người Nhật thấy lạ khi các doanh nhân phương Tây để ảnh của vợ chồng hay gia đình họ trên bàn ở văn phòng.\r\nKhái niệm thể diện ở Nhật bắt nguồn chủ yếu từ tầm quan trọng mà các giá trị phương Tây dành cho một cá nhân.\r\nTheo quan điểm của người Nhật, một người đối xử với người khác và được người khác đối xử lại có tầm quan trọng vô cùng lớn.\r\nĐiều người khác nghĩ về một người thực sự rất hệ trọng ở Nhật. Quan tâm tới những gì người khác nghĩ, quan trọng nhất là những người thiết lập nên nhóm, là giá trị cơ bản và lẽ đương nhiên ở Nhật. Ý thức này đôi khi dẫn tới việc sống như thể để gánh trách nhiệm thay cho người khác.\r\nỞ Nhật, người ta sợ bị mất thể diện do gây ra lỗi lầm nhiều hơn rất nhiều so với việc bị ai đó cố tình sỉ nhục. Những người phương Tây làm việc gần với người Nhật một thời gian sẽ học được cách cẩn trọng trong cách họ đối xử với người khác, vì sợ xúc phạm tới họ.\r\nTuy nhiên, cũng có những vị sếp người Nhật rất thẳng thắn trong việc trách mắng một nhân viên trước mặt người khác. Dù ngày nay không còn thường xuyên thấy trong các tổ chức của Nhật, nhưng phong cách độc đoán này trong các nhóm vẫn tồn tại cùng mối quan tâm về thể diện.\r\nNgười Nhật cũng rất nỗ lực để giúp \"bao che\" cho người khác nhằm ngăn chặn hoặc \"cứu\" những tình huống có thể khiến bạn bè hay đồng nghiệp phải xấu hổ. Về khía cạnh này, mối quan tâm về \"thể diện\" có thể chiếm vị trí ưu tiên so với những mối quan tâm khác.\r\nMột vị lãnh đạo người Nhật làm việc ở Tokyo gần bằng thời gian làm việc ở New York nói rằng, cô thấy rất thú vị với cách nói của người Mỹ, \"da mỏng\" nghĩa là \"quá nhạy cảm với điều người khác nói\".\r\n\"Tôi nghĩ, những người Mỹ làm việc với người Nhật cần phải có \"da mỏng hơn\", và người Nhật làm việc với người Mỹ - đặc biệt ở New York - cần phải trở nên \"da dày hơn\", bởi vì ý nghĩa và hậu quả của những gì người khác nói về chúng ta hay về cách người khác đối xử với chúng ta ở mỗi quốc gia là khác nhau\", cô kết luận.', 'news/1497579304_327091.jpg', 3, 1, 1, 0, '2017-06-16 02:15:11', '2017-06-16 02:15:11'),
(2, 'Nữ giám đốc mất việc chỉ bởi một câu nói của Ông lão quét rác', 'nu_giam_doc_mat_viec_chi_boi_mot_cau_noi_cua_ong_lao_quet_rac', 'Một nữ giám đốc cao quý gặp phải một “ông lão quét rác”, lại vì một câu nói của ông mà khiến cho người này mất việc, nguyên do chỉ bởi một thói quen không nên có của con người.', 'Một nữ giám đốc cao quý gặp phải một “ông lão quét rác”, lại vì một câu nói của ông mà khiến cho người này mất việc, nguyên do chỉ bởi một thói quen không nên có của con người.\r\nMột nữ giám đốc cao quý gặp phải một “ông lão quét rác”, lại vì một câu nói của ông mà khiến cho người này mất việc, nguyên do chỉ bởi một thói quen không nên có của con người.\r\n\r\nQuý bà sang trọng và ông lão quét rác\r\nMột người phụ nữ hơn 40 tuổi sang trọng quý phái dẫn theo đứa con trai đi đến hoa viên ở lầu dưới một cao ốc, vốn là tổng bộ xí nghiệp nổi tiếng tại Thượng Hải, ngồi xuống một chiếc ghế dài ăn đồ.\r\nMột lúc sau, người phụ nữ vứt một mẩu giấy vụn xuống đất, cách đó không xa có một ông lão đang quét rác, ông không nói lời nào, đi đến lượm mẩu giấy đó lên, và bỏ nó vào trong thùng rác bên cạnh.\r\n\r\nLại qua một lúc nữa, người phụ nữ lại vứt một mẩu giấy nữa. Ông lão một lần nữa lại đi đến nhặt mẩu giấy đó lên bỏ vào trong thùng rác. Cứ như vậy, ông lão đã lượm ba lần liên tục.\r\n\r\nNgười phụ nữ chỉ vào ông lão, và nói với cậu con trai mình rằng: “Đã nhìn thấy chưa, con bây giờ nếu không cố gắng học hành, tương lai sẽ giống như ông ta, chẳng có tiền đồ gì cả, mà chỉ có thể làm cái công việc thấp kém này thôi!”.\r\n\r\nÔng lão nghe xong liền buông cây chổi xuống, đi đến nói: “Chào cô, nơi đây là hoa viên tư gia của tập đoàn này, cô đã vào đây như thế nào vậy?”.\r\n\r\nNgười phụ nữ trung niên cao ngạo nói: “Tôi là giám đốc bộ môn vừa mới được tuyển vào đây”.\r\n\r\nLúc này, một người đàn ông vội vàng đi đến, rất mực cung kính đứng trước mặt ông lão. Nói với ông lão rằng: “Tổng giám đốc, hội nghị sắp bắt đầu rồi!”.\r\n\r\nÔng lão nói: “Tôi đề nghị hãy cách chức người đàn bà này ngay lập tức!”.\r\n\r\nNgười đó luôn miệng nói: “Vâng, tôi sẽ lập tức làm theo chỉ thị của ngài!”.\r\n\r\nÔng lão dặn dò xong, liền đi thẳng đến chỗ cậu bé, ông đưa tay sờ sờ đầu của cậu, nói một cách ngụ ý sâu xa rằng:\r\n\r\n“Ông mong cháu hiểu rằng, điều quan trong nhất trên đời này là cần phải học biết tôn trọng mỗi  người và thành quả lao động của họ”.\r\n\r\nNgười phụ nữ trung niên sang trọng đó kinh ngạc đến ngây người trước sự việc diễn ra trước mắt.\r\n\r\nMột lúc sau bà vẫn ngồi liệt trên chiếc ghế dài, nếu như biết đó là tổng giám đốc thì nhất định bà sẽ không có cái thái độ vô lễ đến như vậy.\r\n\r\nNhưng bà đã làm rồi, hơn nữa còn làm trước mặt của tổng giám đốc đang trong thân phận một người làm vườn. Tại sao vậy? Lẽ nào là bởi sự sang hèn của thân phận chăng?\r\n\r\nTôn trọng mỗi một người, chớ lấy thân phận mà phân biệt, đây là thói quen của bạn, vốn là điều không thể giả được, nó sẽ luôn để lộ ra một mặt chân thật trong nhân cách của bạn.\r\n\r\nTài sản là thứ không vững bền, học được cách tôn trọng mới là tài sản của một đời vậy. Đó mới là cảnh giới cao nhất của đời người.\r\n\r\nSự chân thành là điều vô giá\r\n\r\nỞ nước Mỹ, có giám đốc A của một xí nghiệp nhỏ cứ mãi bàn về vấn đề hợp tác với giám đốc B của một tập đoàn lớn khác, nhưng lần nào cũng thất bại.\r\n\r\nLần này, giám đốc A lại từ phòng làm việc của giám đốc B đi ra, việc đàm phán hợp tác lại không thành.\r\n\r\nÔng nhìn thấy bên đường có một cái cây nhỏ bị gió thổi ngã, thế là bèn đi qua đỡ cái cây đó dậy.\r\n\r\nVì để tránh cho cái cây lại bị gió thổi ngã lần nữa, ông còn đặc biệt lấy từ trong xe một sợi dây để cố định cái cây.\r\n\r\nKhông ngờ được rằng, hành động đó của giám đốc A đã được tổng giám đốc trên lầu làm việc từ đầu đến cuối chứng kiến rõ ràng, chính là hành động vô ý này, đã cảm động tổng giám đốc B, hợp tác cuối cùng cũng đã đàm phán thành công.\r\n\r\nTrong lúc ký kết hợp đồng, tổng giám đốc B nói rằng: “Cậu biết không? Điều cảm động tôi không phải là chuyện cậu đỡ cái cây nhỏ kia, mà là vì cái cây nhỏ, cậu đã đi một quãng rất xa để lấy sợi dây cố định nó lại. Trong lúc người khác cần sự giúp đỡ, nếu như một người có thể dưới tình huống người khác không biết chuyện, mà vẫn có thể hy sinh lợi ích của bản thân không một chút do dự, dẫu cho điều hy sinh chỉ là một chút xíu, cũng thật là quý hóa biết bao! Tôi thật sự không có lý do để không hợp tác với người như vậy, và người như vậy cũng không có lý do gì để mà không gặt hái được thành công!”.\r\n\r\nVề sau, sự nghiệp của giám đốc A quả nhiên vì vậy mà càng ngày càng đi lên, càng làm càng lớn!\r\nỞ nước Mỹ, trong một cửa hàng bách hóa, bởi trời đột nhiên đổ cơn mưa lớn, một bà lão ăn mặc giản dị, khắp người ướt sũng đi vào tránh mưa, gần như toàn bộ nhân viên bán hàng đều không muốn để mắt đến bà lão này.\r\n\r\nCó một chàng trai rất thành kính nói với bà rằng: “Phu nhân, chào bà, tôi có thể giúp gì cho bà đây?”.\r\n\r\nBà lão cảm thấy mượn chỗ của người khác để tránh mưa, trong lòng cũng có chút khó chịu, liền muốn mua một vài món đồ, nhưng đi vòng quanh mãi mà không biết mua gì nữa.\r\n\r\nChàng trai này nhìn thấy liền nói với bà lão rằng:\r\n\r\n“Phu nhân, bà không cần cảm thấy khó xử! Tôi đã để một chiếc ghế ở trước cửa, bà cứ yên tâm ngồi ở đó là được rồi”.\r\n\r\nSau hai tiếng đồng hồ thì mưa đã tạnh, bà lão xin danh thiếp của chàng trai này rồi đi mất.\r\n\r\nMấy tháng sau, chàng trai này đã được một cơ hội hiếm có, anh được chỉ định làm đại biểu cho công ty bách hóa này đàm phán nghiệp vụ với công ty gia tộc lớn khác, lợi nhuận rất lớn.\r\n\r\nVề sau mới biết là bà lão đó đã cho cậu cơ hội này, hơn nữa bà lão này không phải ai khác, mà chính là mẹ của “Vua Thép” Carnegie, tỷ phú nước Mỹ.\r\n\r\nThế là, chàng trai này từ đây đã thuận buồm xuôi gió, một bước lên mây, trở thành trợ thủ đắc lực của “Vua Thép” Carnegie, đồng thời cũng là một trong số nhân vật trọng yếu giàu có bậc nhất, địa vị chỉ đứng sau Carnegie mà thôi.\r\n\r\nChẳng cần lời ngon tiếng ngọt, chỉ cần chân thành là tốt rồi;\r\n\r\nChẳng cần thề non hẹn biển, chỉ cần thật sự làm được là tốt rồi;\r\n\r\nChẳng cần oán trách lẫn nhau, chỉ cần hai bên hiểu nhau là tốt rồi;\r\n\r\nChẳng cần ngờ vực lẫn nhau, chỉ cần tin tưởng lẫn nhau là tốt rồi;\r\n\r\nChẳng cần phải tức giận cả ngày, chỉ cần hiểu được bao dung là tốt rồi;\r\n\r\nChẳng cần gắn bó chẳng rời, chỉ cần trong lòng có nhau là tốt rồi.\r\n\r\nGiữa người với người, điều cần nhất chính là một tấm lòng chân thành kia vậy!', 'news/1497579625_837698.jpg', 4, 1, 1, 1, '2017-06-16 02:20:26', '2017-06-16 02:20:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `career_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `careers`
--

INSERT INTO `careers` (`id`, `career_name`, `parent_id`, `lft`, `rght`, `status`, `created`, `modified`) VALUES
(1, 'Bảo hiểm', 120, 1, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(2, 'Bán hàng', 121, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(3, 'Bưu chính', 122, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(4, 'Kiến Trúc Sư', 29, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(5, 'Bảo vệ', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(6, 'Hành chính văn phòng', 122, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(7, 'Du lịch', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(8, 'Ô tô-Xe máy', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(9, 'Báo chí-Truyền hình', 126, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(10, 'Hàng gia dụng', 127, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(11, 'Kinh doanh ngân hàng', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-17 12:32:22'),
(12, 'Kỹ Sư Xây Dựng', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(13, 'Hoạch định-Dự án', 128, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(14, 'IT phần cứng/mạng', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(15, 'Làm bán thời gian', 130, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(16, 'Giáo Viên', 63, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(17, 'Kinh Doanh Bất Động Sản', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(18, 'NV trông quán Internet', 130, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(19, 'IT phần mềm', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(20, 'Nghệ thuật-Điện ảnh', 128, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(21, 'Kỹ Sư Chế Tạo Máy', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(22, 'Kinh doanh máy tính', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(23, 'Mỹ phẩm-Trang sức', 127, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(24, 'Marketing-PR', 126, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(25, 'Công nghệ cao', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(26, 'Khách sạn-Nhà hàng', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(27, 'Nhân sự', 131, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(28, 'Biên - Phiên dịch', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(29, 'Xây dựng', 0, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(30, 'Điện tử viễn thông', 122, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(31, 'Nhân viên kinh doanh', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(32, 'Quản trị kinh doanh', 121, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(33, 'Chứng khoán vàng', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(34, 'Kế toán Kiểm toán', 120, 34, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(35, 'Thiết Kế - Đồ Họa', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(36, 'Dịch vụ', 130, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(37, 'Thư ký-Trợ lý', 131, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(38, 'Bộ phận bếp', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(39, 'Công nghiệp', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(40, 'Tổ chức sự kiện-Quà tặng', 126, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(41, 'Thời trang', 127, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(42, 'Kinh doanh mỹ phẩm', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(43, 'Kỹ Sư Cơ Khí', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(44, 'Quan hệ đối ngoại', 128, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(45, 'Thiết kế đồ hoạ web', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(46, 'Promotion Girl (PG)', 130, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(47, 'Chuyên Viên Đào Tạo', 63, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(48, 'Sinh viên làm thêm', 130, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(49, 'Thương mại điện tử', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(50, 'Thiết kế-Mỹ thuật', 128, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(51, 'Kỹ Sư Hóa Chất', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(52, 'Kinh doanh dược phẩm', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(53, 'Thực phẩm-Đồ uống', 127, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(54, 'Tiếp thị-Quảng cáo', 126, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(55, 'Dệt may-Gia dày', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(56, 'Bộ phận bồi bàn', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(57, 'Lễ tân', 131, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(58, 'Xuất, nhập khẩu', 121, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(59, 'KD bất động sản', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(60, 'Ngân hàng', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(61, 'Chuyên viên tuyển dụng', 131, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(62, 'Bộ phận vệ sinh', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(63, 'Giáo dục-Đào tạo', 0, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(64, 'In ấn-Xuất bản', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(65, 'Kinh doanh vàng', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(66, 'Kỹ Sư Môi Trường', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(67, 'Nghành nghề khác', 0, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(68, 'Quản Trị Mạng', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(69, 'Thực tập', 130, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(70, 'Kỹ thuật viên', 129, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(71, 'Kỹ Sư Điện Tử', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(72, 'Kinh doanh điện thoại', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(73, 'Lao động phổ thông', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(74, 'Hàng hải', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(75, 'Bộ phận sảnh', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(76, 'Đầu tư', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(77, 'Giao dịch viên', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(78, 'Hàng không', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(79, 'Nông-Lâm-Ngư nghiệp', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(80, 'Kinh doanh hàng tiêu dùng', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(81, 'Kỹ Sư Kết Cấu', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(82, 'Kỹ Sư CNTT', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(83, 'Kỹ Sư Dự Toán', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(84, 'Kinh doanh du lịch', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(85, 'Thủ công mỹ nghệ', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(86, 'Người giúp việc', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(87, 'Chuyên viên tư vấn tài chính', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(88, 'Trung Tâm Thẻ Ngân Hàng', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(89, 'Pháp lý', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(90, 'Vật tư-Thiết bị', 125, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(91, 'Kinh doanh tài chính', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(92, 'Kỹ Sư Dự Thầu', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(93, 'Kỹ Sư Nông Nghiệp', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(94, 'Kinh doanh thiết bị y tế', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(95, 'Tư vấn', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(96, 'Vận tải-Lái xe', 123, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(97, 'Ngoại Hối', 120, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(98, 'Kinh doanh hàng may mặc', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(99, 'Kỹ Sư Máy Tính', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(100, 'Kỹ Sư Điện Nước', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(101, 'Kinh doanh dịch vụ', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(102, 'Y tế-Dược', 124, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(103, 'Kinh doanh chứng khoán', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(104, 'Kỹ Sư Điện Lạnh', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(105, 'Kỹ Sư Kinh Tế', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(106, 'Kinh doanh hóa chất', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(107, 'Kinh doanh thời trang', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(108, 'Kỹ Sư Giám Sát', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(109, 'Kỹ Sư Thiết Kế', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(110, 'Kinh doanh thủ công mỹ nghệ', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(111, 'Kinh doanh bảo hiểm', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(112, 'Kỹ Sư Giao Thông Vận Tải', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(113, 'Kỹ Sư Điện Tử Viễn Thông', 118, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(114, 'Kinh doanh thiết bị công nghệ', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(115, 'Kinh doanh truyền thông', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(116, 'Kinh Doanh Thiết Bị Kỹ Thuật', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(117, 'Kinh doanh khác', 119, NULL, NULL, 1, '2017-06-16 15:32:08', '2017-06-16 15:32:08'),
(118, 'Kỹ Sư', 0, NULL, NULL, 1, '2017-06-16 00:00:00', '2017-06-16 00:00:00'),
(119, 'Kinh doanh', 0, NULL, NULL, 1, '2017-06-17 12:29:51', '2017-06-17 12:29:51'),
(120, 'Tài chính tiền tệ', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(121, 'Kinh doanh thương mại', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(122, 'Viễn thông', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(123, 'Dịch vụ hỗ trợ', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(124, 'Khách sạn du lịch', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(125, 'Sản xuất', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(126, 'Truyền thông - PR', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(127, 'Hàng tiêu dùng', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(128, 'Ngành nghề khác', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(129, 'Công nghệ thông tin', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(130, 'Làm thêm', 0, NULL, NULL, 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(131, 'Hành chính nhân sự', 0, NULL, NULL, 1, '2017-06-20 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
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
(1, 0, 1, 4, 'Tin tuyển dụng', 'Dành cho nhà tuyển dụng', '2017-06-16 01:27:05', '2017-06-16 01:27:05'),
(2, 0, 5, 8, 'Tin hướng nghiệp', 'Dành cho người tìm việc', '2017-06-16 01:29:18', '2017-06-16 01:29:18'),
(3, 1, 2, 3, 'Cẩm nang tuyển dụng', 'Cẩm nang tuyển dụng', '2017-06-16 01:38:44', '2017-06-16 01:38:44'),
(4, 2, 6, 7, 'Cẩm nang tìm việc', 'Cẩm nang tìm việc', '2017-06-16 01:50:35', '2017-06-16 01:50:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `uniq_id` text NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `seo_url` varchar(250) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(225) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `masothue` varchar(225) NOT NULL,
  `descriptions` text NOT NULL,
  `is_beta` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1->Beta company , 0-> Default',
  `is_active` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:Active , 2: Cancelled ',
  `is_deactivated` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1-> Auto Deactivated , 2-> Deactivated by admin,3->Disable By admin,0-> Default ',
  `companysize_id` int(11) NOT NULL,
  `twitted` tinyint(2) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `companies`
--

INSERT INTO `companies` (`id`, `uniq_id`, `name`, `seo_url`, `subscription_id`, `logo`, `website`, `address`, `contact_phone`, `masothue`, `descriptions`, `is_beta`, `is_active`, `is_deactivated`, `companysize_id`, `twitted`, `created`, `modified`) VALUES
(1, 'aqvietnam', 'Công Ty Cổ Phần Thương Mại AQ Việt Nam', 'aqvietnam', 1, 'aqvietnam.com', 'http://aqvietnam.com', '', '0934340213\r\n', '', '', 0, 1, 0, 2, 0, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(2, 'nhanhoa', 'Nhân Hòa - Công Ty TNHH Phần Mềm Nhân Hòa', 'nhanhoa', 0, 'company/logo_nhan_hoa.png', 'https://nhanhoa.com/', '', '(04) 35626533', '', '', 0, 1, 0, 4, 0, '2017-06-15 00:00:00', '2017-06-15 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companysizes`
--

CREATE TABLE `companysizes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `isactive` int(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `companysizes`
--

INSERT INTO `companysizes` (`id`, `name`, `isactive`, `created`, `modified`) VALUES
(1, 'Ít hơn 10 nhân viên', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(2, 'Từ 10 - 24 nhân viên', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(3, 'Từ 25 - 99 nhân viên', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(4, 'Từ 100 - 499 nhân viên', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(5, 'Từ 500 - 999 nhân viên', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(6, 'Trên 1000 nhân viên', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companyusers`
--

CREATE TABLE `companyusers` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `company_uniq_id` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1-owner,2-Admin,3-member',
  `is_active` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0-Inactive, 1-Active,2- Not confirmed , 3- Deleted user',
  `est_billing_amt` float(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Keep the estimated billing amount for the period',
  `act_date` datetime DEFAULT NULL,
  `billing_start_date` datetime DEFAULT NULL,
  `billing_end_date` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `companyusers`
--

INSERT INTO `companyusers` (`id`, `company_id`, `company_uniq_id`, `user_id`, `user_type`, `is_active`, `est_billing_amt`, `act_date`, `billing_start_date`, `billing_end_date`, `created`, `modified`) VALUES
(1, 2, '2', 1, 1, 1, 0.00, '2017-06-15 00:00:00', '2017-06-15 00:00:00', '2017-06-15 00:00:00', '2017-06-15 00:00:00', '2017-06-15 00:00:00');

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
-- Cấu trúc bảng cho bảng `degrees`
--

CREATE TABLE `degrees` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1:Active , 0: Deactivated'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `degrees`
--

INSERT INTO `degrees` (`id`, `name`, `created`, `modified`, `is_active`) VALUES
(1, 'Trên Đại học', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(2, 'Đại học', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(3, 'Cao đẳng', '2017-06-19 00:00:00', '2017-06-19 00:00:00', 1),
(4, 'Trung cấp', '2017-06-19 00:00:00', '2017-06-19 00:00:00', 1),
(5, 'Trung học', '2017-06-19 00:00:00', '2017-06-19 00:00:00', 1),
(6, 'Lao Động phổ Thông', '2017-06-19 00:00:00', '2017-06-19 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employments`
--

CREATE TABLE `employments` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `experience_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `degree_id` int(11) DEFAULT NULL,
  `typework_id` int(11) DEFAULT NULL,
  `isgender` int(2) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `age` varchar(255) NOT NULL,
  `salary_id` int(11) DEFAULT NULL,
  `numrequire` int(2) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `summary` text NOT NULL,
  `benefit` text NOT NULL,
  `other_require` text NOT NULL,
  `expire_day` datetime NOT NULL,
  `form_apply` int(2) DEFAULT NULL,
  `companyuser_id` int(11) NOT NULL,
  `ishot` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `employments`
--

INSERT INTO `employments` (`id`, `title`, `code`, `level_id`, `experience_id`, `career_id`, `degree_id`, `typework_id`, `isgender`, `province_id`, `age`, `salary_id`, `numrequire`, `language_id`, `summary`, `benefit`, `other_require`, `expire_day`, `form_apply`, `companyuser_id`, `ishot`, `created`, `modified`) VALUES
(1, 'Nhân Viên Kinh Doanh (Lương+%thưởng bán hàng)', 'NTD16963', 5, 1, 31, 4, 1, 1, 1, '21- 29', 3, 2, 1, 'Vị trí: Nhân viên kinh doanh.\\n-	Mã tuyển dụng: KDSL170602\\n\r\n-	Số lượng tuyển: 02\\n\r\n-	Ngành nghề tuyển dụng: Thiết bị chiếu sáng.\\n\r\n-	Vị trí tuyển dụng: Nhân viên kinh doanh – Nhân viên triển khai dự án.\\n\r\n-	Hình thức làm việc: Nhân viên chính thức\\n\r\n-	Thời gian làm việc: giờ hành chính \\n\r\n(sáng 8h30 –12h00, chiều 13h00- 17h30, nghỉ chiều t7 và chủ nhật)\\n\r\n-	Thời gian thử việc: 02 tháng\\n\r\n-	Địa điểm làm việc: 233 Ngô Gia Tự, Long Biên, Hà Nội.\\n\r\nMô tả công việc: \\n\r\n-	Duy trì và phát triển khách hàng được giao.\\n\r\n-	Thu thập, phân tích đánh giá thông tin thị trường và đối thủ cạnh tranh.\\n-	Lập kế hoạch, Tìm kiếm, phát triển và duy trì khách hàng/đại lý mới.\\n\r\n-	Thực hiện việc bán hàng, thu hồi công nợ với các khách hàng cũ và mới.\\n-	Giải quyết các thắc mắc, khiếu nại của khách hàng về chất lượng, hàng hóa, dịch vụ và chính sách bán hàng nếu có.\\n-	Triển khai các hoạt động hỗ trợ khách hàng, các hoạt động Marketing của công ty.\\n\r\n-	Triển khai các dự án được giao từ công ty (tìm nguồn hàng, nhập hàng, hợp đồng, giao hàng, thanh toán).\\n\r\n-	Phối hợp với các bộ phận khác nhằm đạt được hiệu quả công việc tốt nhất.c\\n-	Thực hiện các công việc khác theo yêu cầu công ty\\n', '-	Lương cơ bản 4tr + % thưởng bán hàng theo tháng, quý, năm (chi tiết trao đổi khi phỏng vấn).\r\n-	Xét tăng/giảm lương 1 năm 1 lần theo kết quả kinh doanh và tài chính của công ty.\r\n-	Môi trường làm việc trẻ, năng động, chuyên nghiệp, phát huy mọi khả năng của bản thân.\r\n-	Được hưởng các chế độ khác theo luật lao động Việt Nam\r\n-	Chế độ nghỉ phép hằng năm theo quy định của pháp luật\r\n-	Trao đổi cụ thể khi phỏng vấn', '-	Kinh nghiệm: không yêu cầu\r\n-	Độ tuổi: 21-29 (tuổi)\r\n-	Có phương tiện đi lại (xe máy) và máy tính.\r\n-	Tốt nghiệp Trung cấp, cao đẳng trở lên, có đam mê công việc kinh doanh, bán hàng\r\n-	Sử dụng tốt vi tính văn phòng (Ms-word, excel…).\r\n-	Có khả năng giao tiếp tốt, khả năng tự chủ, năng động, sẵn sàng đi lại.\r\n-	Hăng hái, nhiệt huyết, chấp nhận thử thách .\r\n-	Có năng lực và trách nhiệm cao, trung thực, cẩn thận, nhiệt tình.', '2017-06-30 00:00:00', 1, 1, 0, '2017-06-19 00:00:00', '0000-00-00 00:00:00'),
(2, 'NHÂN VIÊN PHỤC VỤ TIỆC', 'NTD14877', 5, 1, 48, 1, 1, 1, 2, '1', 2, 30, 1, 'Khách sạn CARAVELLE cần tuyển gấp 50 nam/nữ phục vụ các bữa tiệc cưới, hội nghị...\r\n\r\nThời gian làm việc:\r\n-	Làm việc theo ca, mỗi ca ~5h\r\n-	Ca trưa: bắt đầu lúc 9h sáng\r\n-	Ca tối: bắt đầu lúc 5h chiều\r\n\r\nMô tả công việc: Phục vụ trong chuỗi nhà hàng-khách sạn 5 sao', '-	Lương: 25k/h \r\n-	Có thưởng tăng ca\r\n-	Được cung cấp đồng phục và hỗ trợ 1 bữa ăn/ca', '-	Chăm chỉ, nhanh nhẹn, chịu khó\r\n-	Có sức khỏe tốt\r\n-	Ưu tiên những bạn có mong muốn được làm việc nâng cao nghiệp vụ trong môi trường nhà hàng khách sạn chuyên nghiệp và đẳng cấp', '2017-07-31 00:00:00', 1, 1, 1, '2017-06-20 00:00:00', '2017-06-20 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `isactive` int(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `isactive`, `created`, `modified`) VALUES
(1, 'Chưa có kinh nghiệm', 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(2, 'Sinh Viên Đại Học', 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(3, 'Lao Động Phổ Thông', 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(4, 'Lao Động Phổ Thông', 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(5, 'Dưới 1 năm', 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00'),
(6, 'Dưới 1 năm', 1, '2017-06-19 00:00:00', '2017-06-19 00:00:00');

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
(1, 'Tiếng Anh (England)', 'en', 'en', 'en', 1),
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
  `level_name` varchar(225) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1:Active , 0: Deactivated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `levels`
--

INSERT INTO `levels` (`id`, `level_name`, `created`, `modified`, `is_active`) VALUES
(1, 'Quản trị cấp cao', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(2, 'Trưởng/Phó phòng', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(3, 'Tư vấn/Trợ lý', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(4, 'Chuyên gia', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(5, 'Nhân viên', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(6, 'Trưởng nhóm/Giám sát', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1),
(7, 'Kỹ thuật viên/Kỹ sư', '2017-06-16 00:00:00', '2017-06-16 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `newsletters`
--

INSERT INTO `newsletters` (`id`, `career_id`, `level_id`, `user_id`, `email`, `created`, `modified`) VALUES
(1, 2, 4, 0, 'hoaunet@yahoo.com', '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(2, 9, 7, 0, 'hoaunet@gmail.com', '2017-06-15 07:11:25', '2017-06-15 07:11:25'),
(3, 2, 4, 1, 'sales@nhanhoa.com', '2017-06-15 07:35:49', '2017-06-15 07:35:49');

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
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `province_type`, `province_code`, `parent_id`, `country_id`, `status`, `created`, `modified`) VALUES
(1, 'Hà Nội', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(2, 'TP.HCM', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(3, 'Đà Nẵng', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(4, 'Bình Dương', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(5, 'Cần Thơ', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(6, 'Hải Phòng', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(7, 'Bà Rịa - Vũng Tàu', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(8, 'Bắc Giang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(9, 'Bắc Kạn', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(10, 'Thừa Thiên Huế', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(11, 'Bắc Ninh', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(12, 'Bến Tre', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(13, 'Bạc Liêu', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(14, 'Bình Định', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(15, 'Bình Phước', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(16, 'Bình Thuận', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(17, 'Cà Mau', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(18, 'Cao Bằng', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(19, 'Đắc Lắc', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(20, 'An Giang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(21, 'Đắc Nông', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(22, 'Điện Biên', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(23, 'Đồng Nai', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(24, 'Đồng Tháp', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(25, 'Gia Lai', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(26, 'Hà Giang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(27, 'Hà Nam', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(28, 'Hà Tĩnh', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(29, 'Hải Dương', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(30, 'Hậu Giang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(31, 'Hòa Bình', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(32, 'Hưng Yên', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(33, 'Khánh Hòa - Nha Trang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(34, 'Kiên Giang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(35, 'Kon Tum', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(36, 'Lai Châu', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(37, 'Lạng Sơn', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(38, 'Lào Cai', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(39, 'Lâm Đồng', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(40, 'Long An', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(41, 'Nam Định', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(42, 'Nghệ An', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(43, 'Ninh Bình', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(44, 'Ninh Thuận', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(45, 'Nha Trang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(46, 'Phú Thọ', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(47, 'Phú Yên', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(48, 'Quảng Bình', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(49, 'Quảng Nam', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(50, 'Quảng Ngãi', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(51, 'Quảng Ninh', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(52, 'Quảng Trị', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(53, 'Sóc Trăng', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(54, 'Sơn La', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(55, 'Tây Ninh', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(56, 'Thái Bình', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(57, 'Thái Nguyên', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(58, 'Thanh Hóa', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(59, 'Tiền Giang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(60, 'Trà Vinh', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(61, 'Tuyên Quang', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(62, 'Vĩnh Long', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(63, 'Vĩnh Phúc', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(64, 'Yên Bái', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(65, 'Phú Quốc', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(66, 'Toàn Quốc', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(67, 'Miền Bắc', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(68, 'Miền Nam', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56'),
(69, 'Miền Trung', 1, 0, 0, 230, 1, '2017-06-14 14:19:56', '2017-06-14 14:19:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `uploadcv` varchar(225) NOT NULL,
  `lastcompany` varchar(225) NOT NULL,
  `summary` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salaries`
--

CREATE TABLE `salaries` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1:Active , 0: Deactivated',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `salaries`
--

INSERT INTO `salaries` (`id`, `name`, `is_active`, `created`, `modified`) VALUES
(1, 'Thỏa thuận', 1, '2017-06-15 00:00:00', '2017-06-15 17:00:00'),
(2, '1 - 3 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(3, '3 - 5 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(4, '5 - 7 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(5, '7 - 10 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(6, '10 - 15 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(7, '15 - 20 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(8, '20 - 30 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(9, '30 - 40 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(10, '40 - 50 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(11, '50 - 60 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(12, 'Trên 60 triệu', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(13, '100 - 300 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(14, '400 - 600 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(15, '700 - 1000 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(16, '1000 - 1500 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(17, '1500 - 2000 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(18, '2000 - 3000 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00'),
(19, '&gt; 3000 USD', 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00');

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
  `province_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `school_address`, `school_type`, `school_website`, `province_id`, `created`, `modified`) VALUES
(1, 'Quốc gia Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bách khoa Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Công đoàn', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Công nghệ Giao thông vận tải', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Công nghiệp Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Công nghiệp Việt Hung', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Dược Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Điện lực', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Giao thông vận tải', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Khoa học và Công nghệ Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Kinh tế Kỹ thuật Công nghiệp', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Kinh tế Quốc dân', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Kiến trúc Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Lao động Xã hội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Lâm nghiệp', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Luật Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Mỏ Địa chất Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Mỹ thuật Công nghiệp', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Mỹ thuật Việt Nam', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Ngoại thương', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Nội vụ Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Nông nghiệp Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Sân khấu Điện ảnh', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Sư phạm Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Sư phạm Nghệ thuật Trung ương Hà', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Sư phạm Thể dục thể thao Hà nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Tài nguyên và Môi trường Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Thủy lợi', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Thương mại', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Văn hóa Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Xây dựng', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Y Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Y tế Công cộng', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Mở Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Đông Đô', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Phương Đông', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Thăng Long', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Đại Nam', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'FPT', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Hòa Bình', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Kinh doanh và Công nghệ Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Nguyễn Trãi', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Quốc tế Bắc Hà', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Tài chính Ngân hàng Hà Nội', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Thành Tây', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Thành Đô', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Công nghệ và Quản lý Hữu nghị', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'An Ninh Nhân Dân', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Bách Khoa', '', 'ĐH Quốc Gia Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Cảnh Sát Nhân Dân', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Công Nghệ Sài Gòn', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Công Nghệ Thông Tin', '', 'ĐH Quốc Gia Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Công Nghệ Thông Tin Gia Định', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Công Nghệ Tphcm (hutech)', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Công Nghệ Tphcm (hutech)', '', 'Hệ CĐ', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Công Nghiệp Thực Phẩm Tp.hcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Công Nghiệp Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Dân Lập Văn Lang', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Giao Thông Vận Tải (phía Nam)', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Giao Thông Vận Tải Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Hoa Sen', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Hùng Vương Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Khoa Học Tự Nhiên', '', 'ĐH Quốc Gia Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Khoa Học Xã Hội Và Nhân Văn', '', 'ĐH Quốc Gia Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Kiến Trúc Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Kinh Tế', '', 'tài Chính Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Kinh Tế Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Lao Động', '', 'Xã Hội (phía Nam)', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Luật Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Mở Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Mỹ Thuật Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Ngân Hàng Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Ngoại Ngữ', '', 'Tin Học Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Ngoại Thương (phía Nam)', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Nguyễn Tất Thành', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Nông Lâm Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Quốc Tế', '', 'ĐH Quốc Gia Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Quốc Tế Hồng Bàng', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Quốc Tế Sài Gòn', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Sài Gòn', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Sân Khấu Điện Ảnh Tp Hcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Sư Phạm Kỹ Thuật Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Sư Phạm Thể Dục Thể Thao Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Sư Phạm Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Tài Chính Marketing', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Tài Nguyên Môi Trường Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Thể Dục Thể Thao Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Thuỷ Lợi (phía Nam)', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Tôn Đức Thắng', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Trần Đại Nghĩa', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Văn Hiến', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Văn Hoá', '', 'Nghệ Thuật Quân Đội', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Văn Hoá Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Việt Đức', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Y Dược Tphcm', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Y Khoa Phạm Ngọc Thạch', '', 'Đại Học', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Âm nhạc Quốc gia Việt Nam', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Báo chí Tuyên truyền', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Chính sách và Phát triển', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Công nghệ Bưu chính Viễn thông', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Hành chính Quốc gia', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Kỹ thuật Mật mã', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Ngân hàng', '', 'Học Viện (HN)', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Ngoại giao', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Quản lý Giáo dục', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Tài chính', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Thanh Thiếu niên Việt Nam', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Y Dược học cổ truyền Việt Nam', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Biên Phòng', '', 'Phía Nam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Chính Trị', '', 'Phía Nam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Công Nghệ Bưu Chính Viễn Thông (', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Hàng Không Việt Nam', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Hành Chính Quốc Gia (phía Nam)', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Khoa Học Quân Sự (quân Sự, Thi Ở', '', 'Học Viện', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Khoa Y (ĐHQG HCM)', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Nhạc Viện Tphcm', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Bách Việt', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Bán Công Công Nghệ Và Quản Trị D', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Công Nghệ Thông Tin Tphcm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Công Nghệ Thủ Đức', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Công Nghiệp Thực Phẩm Tphcm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Công Thương Tphcm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Điện Lực Tphcm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Giao Thông Vận Tải 3', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Giao Thông Vận Tải Tphcm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Kinh Tế', '', 'Kỹ Thuật Sài Gòn', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Kinh Tế', '', 'Kỹ Thuật Vinatex Tp. Hồ Chí Minh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Kinh Tế Đối Ngoại', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Kinh Tế Kỹ Thuật Miền Nam', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Kinh Tế Kỹ Thuật Phú Lâm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Kinh Tế Tphcm', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Kinh Tế', '', 'công Nghệ Tphcm', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Kỹ Thuật Cao Thắng', '', 'Cao Đẳng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'KHÁC', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typeworks`
--

CREATE TABLE `typeworks` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `isactive` int(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `typeworks`
--

INSERT INTO `typeworks` (`id`, `name`, `isactive`, `created`, `modified`) VALUES
(1, '\r\nToàn thời gian cố định', 1, '2017-06-19 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userinfos`
--

CREATE TABLE `userinfos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `access_token` text,
  `is_google_signup` tinyint(4) NOT NULL DEFAULT '0',
  `gender` tinyint(1) NOT NULL,
  `birdthday` datetime NOT NULL,
  `is_mariage` tinyint(1) NOT NULL,
  `address` varchar(225) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userlogins`
--

CREATE TABLE `userlogins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uniq_id` varchar(64) NOT NULL,
  `btprofile_id` varchar(100) DEFAULT NULL,
  `usersubscription_id` int(10) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `fullname` varchar(150) CHARACTER SET utf8 NOT NULL,
  `istype` tinyint(2) NOT NULL DEFAULT '3' COMMENT '1-Super Admin, 2-Internal User, 3-External User',
  `photo` varchar(50) DEFAULT NULL,
  `isactive` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 - ACTIVE, 2 - INACTIVE . 2-Disabled ,3- Deleted user',
  `dt_last_login` datetime DEFAULT NULL,
  `dt_last_logout` datetime DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `active_dashboard_tab` int(11) NOT NULL DEFAULT '7' COMMENT 'Sum of Binary values which will show tabs accordingly',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `uniq_id`, `btprofile_id`, `usersubscription_id`, `email`, `password`, `fullname`, `istype`, `photo`, `isactive`, `dt_last_login`, `dt_last_logout`, `ip`, `active_dashboard_tab`, `created`, `modified`) VALUES
(1, '', NULL, NULL, 'sales@nhanhoa.com', '$2y$10$breImzeW5.1QURdp0ju1huCU1/XIBCUQ7oxRyPMdvzq2BC5HFxIb.', '?? Li?u', 3, NULL, 1, '2017-06-15 00:00:00', '2017-06-15 00:00:00', NULL, 7, '2017-06-15 00:00:00', '2017-06-15 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Chỉ mục cho bảng `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `companysizes`
--
ALTER TABLE `companysizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `companyusers`
--
ALTER TABLE `companyusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CompanyCompanyuser` (`company_id`),
  ADD KEY `FK_UserCompanyuser` (`user_id`);

--
-- Chỉ mục cho bảng `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employments`
--
ALTER TABLE `employments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CareerNewsletter` (`career_id`),
  ADD KEY `FK_LevelNewsletter` (`level_id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CountryProvince` (`country_id`);

--
-- Chỉ mục cho bảng `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `typeworks`
--
ALTER TABLE `typeworks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `companysizes`
--
ALTER TABLE `companysizes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `companyusers`
--
ALTER TABLE `companyusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT cho bảng `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `employments`
--
ALTER TABLE `employments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT cho bảng `typeworks`
--
ALTER TABLE `typeworks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
