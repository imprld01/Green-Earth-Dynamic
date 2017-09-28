-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016 �?01 ??03 ??18:13
-- 伺服器版本: 5.6.21
-- PHP 版本： 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `green_earth`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` varchar(255) NOT NULL,
  `datetm` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `srcn` varchar(255) NOT NULL,
  `srch` varchar(255) NOT NULL,
  `content` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `article`
--

INSERT INTO `article` (`id`, `datetm`, `title`, `srcn`, `srch`, `content`) VALUES
('steven7486', '2016-1-4 0:44:12', 'Database demo 2', '資料庫系統', 'http://www.facebook.com', 'demo 2 成功!'),
('zax0624zax', '2016-1-4 0:42:22', 'Database demo', '資料庫', 'http://www.google.com', 'demo 成功!');

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `datetm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `login`
--

INSERT INTO `login` (`id`, `ip`, `datetm`) VALUES
('steven7486', '::1', '2016-1-4 0:43:10'),
('zax0624zax', '::1', '2016-1-4 0:9:36');

-- --------------------------------------------------------

--
-- 資料表結構 `seed`
--

CREATE TABLE IF NOT EXISTS `seed` (
  `id` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `seed`
--

INSERT INTO `seed` (`id`, `level`, `exp`) VALUES
('steven7486', 14, 0),
('zax0624zax', 11, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `tree`
--

CREATE TABLE IF NOT EXISTS `tree` (
  `name` varchar(255) NOT NULL,
  `scin` text NOT NULL,
  `comn` text NOT NULL,
  `description` longtext NOT NULL,
  `picsrc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `tree`
--

INSERT INTO `tree` (`name`, `scin`, `comn`, `description`, `picsrc`) VALUES
('台灣肖楠', 'Calocedrus formosana (Florin) Florin', '肖楠，黃肉仔', '<ul>\r\n                                <li>形態特徵：</li><li>大喬木，樹皮紅褐色。葉鱗片狀，每四枚合生，全體扁平，表面深綠，背面蒼綠色。毬果長橢圓形，長10～15mm，果鱗4枚，十字形對生，僅兩側者結實。種子具大小不等之膜質翅。</li>\r\n                                <li>生態／分布：</li><li>本種為臺灣特有種，生長於中北部海拔300～1,900m之山區，中興大學實驗林惠蓀林場保留有臺灣肖楠的母樹林。</li>\r\n                                <li>用途／解說：</li><li>從小枝及鱗片葉的形態上看，本種與紅檜、臺灣扁柏都很相似，但本種小枝鱗片葉的節間比較長，毬果呈長橢圓形，果鱗成對著生是其不同之處。臺灣肖楠是極佳的綠美化材料。</li>\r\n                            </ul>', '             http://subject.forest.gov.tw/species/twtrees/book1/images/P37-2.jpg\r\n						'),
('樟樹', 'Cinnamomum camphora (L.) Presl', '樟，芳樟，油樟，鳥樟，栳樟，Camphor tree', '<ul>\r\n                                <li>形態特徵：</li><li>常綠喬木，全株各部位均有芳香氣味，樹幹常縱向深溝裂。葉薄革質，卵形或橢圓形，平滑無毛，離基三出脈，葉背脈腋有腺窩。圓錐花序頂生或腋生，花甚小，綠白色。核果球形，徑約6㎜，熟時黑色。</li>\r\n                                <li>生態／分布：</li><li>臺灣的樟樹原來蓄積非常豐富，全島約1800m以下之中海拔山區或平地都很適宜樟樹的生長，可惜日本佔據臺灣時，設有"樟腦專賣局"，大量砍伐樟樹煉製樟腦，販售圖利，光復後，山區已無樟林矣。南部恆春半島地區之樟樹，植株通較低矮，樹幹萌芽性強，溝裂不明顯，特別稱為栳樟或鳥樟。</li>\r\n                                <li>用途／解說：</li><li>樟樹全株除可供提煉樟腦、樟油外，木材性質甚性，可供建材、家具、雕刻等用途。樟樹亦為著名的綠美化樹種，林園樹、行道樹或植為防風林均極適宜。</li>\r\n                            </ul>', '\r\nhttp://subject.forest.gov.tw/species/twtrees/book1/images/P73-3.jpg		');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `name`, `pswd`) VALUES
('steven7486', '呂旻旻', 'ji394ao3up '),
('zax0624zax', 'Zax', 'zax0527zax');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`,`datetm`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`,`datetm`);

--
-- 資料表索引 `seed`
--
ALTER TABLE `seed`
 ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tree`
--
ALTER TABLE `tree`
 ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- 資料表的 Constraints `seed`
--
ALTER TABLE `seed`
ADD CONSTRAINT `seed_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
