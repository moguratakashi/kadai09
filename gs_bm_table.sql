-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 10 朁E12 日 09:41
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db16`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `date`) VALUES
(9, '東大から刑務所へ', 'http://www.gentosha.co.jp/book/b11131.html', '刑務所に堕ちてこそ分かることがある。大学在学中に起業したライブドアを時価総額8000億円企業にまで成長させながらも、世間から「拝金主義者」のレッテルを貼られ逮捕された堀江貴文。大王製紙創業家の長男として生まれ、幼少時代は1200坪の屋敷で過ごし、42歳で社長に就任しながらも、カジノに106億8000万円を使い込み逮捕された井川意高。二人の元東大生が刑務所に入って初めて学んだ“人生の表と裏”“世の中の清と濁”。東大では教えてくれない「人生を強く自由に生きる極意」を縦横無尽に語り尽くす。', '2017-10-04 20:21:08'),
(15, 'こんにちワニ (わははは!ことばあそびブック) ', 'https://www.php.co.jp/books/detail.php?isbn=978-4-569-68203-7', 'こんにちワニ いただきマスク いないいないばあちゃん どうもすみませんぷうき ただいまんとひひ ジャンケンポンず あいこでしょうゆ だるまさんがころんだんご ユーモアたっぷりのイラストを添えたことばあそび絵本。', '2017-10-08 17:15:32'),
(16, 'タモリと戦後ニッポン', 'http://bookclub.kodansha.co.jp/product?isbn=9784062883283', '終戦直後に生まれ古希を迎えた\r\n稀代の司会者の半生と、\r\n敗戦から70年が経過した日本。\r\n\r\n双方を重ね合わせることで、\r\nあらためて戦後ニッポンの歩みを\r\n検証・考察した、新感覚現代史!\r\n\r\nまったくあたらしいタモリ本!\r\n\r\nタモリとは「日本の戦後」そのものだった!', '2017-10-08 17:55:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
