-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2022 年 05 月 23 日 01:35
-- 服务器版本: 5.7.27
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `food20013721`
--
CREATE DATABASE `food20013721` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `food20013721`;

-- --------------------------------------------------------

--
-- 表的结构 `cd`
--

CREATE TABLE IF NOT EXISTS `cd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `pic` varchar(255) NOT NULL DEFAULT 'img/2.jpg' COMMENT '图片',
  `Details` varchar(9999) DEFAULT NULL COMMENT '详细内容',
  `time` datetime NOT NULL,
  `coordinate` varchar(50) DEFAULT NULL COMMENT '坐标',
  `address` varchar(100) NOT NULL COMMENT '地址',
  `Carousel` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `cd`
--

INSERT INTO `cd` (`id`, `title`, `content`, `pic`, `Details`, `time`, `coordinate`, `address`, `Carousel`) VALUES
(1, '哈哈碳都韩国烤肉', '福州探店｜烤肉届的性价比之王‼!!!!1', 'img/3.jpg', '&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-1&amp;quot;&amp;gt;中华爆炒小龙虾饭&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;满满的小龙虾肉 搭配秘制酱汁&amp;nbsp; &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;和米饭一口下去 真的太幸福了!!&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;不掉后悔系列！吃你就知道了！&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-2&amp;quot;&amp;gt;火炙波波寿司&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;想吃不同口味寿司的一定要点!! &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;三文鱼、北极贝、北极甜虾、鳗鱼、蟹柳等等…&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;圆滚滚的造型真的hin 可爱！。&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;上桌后服务员还会用火枪炙烤 非常香!!&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-3&amp;quot;&amp;gt;嫩口炉烧小牛排&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;牛排真的巨嫩!! &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;一点都不柴～&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;牛肉还有点淡淡的奶香味 &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;酱汁调的真的很香很入味!!超好吃!!&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-4&amp;quot;&amp;gt;绿油油金枪鱼卷&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;牛油果的清爽加金枪鱼香&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;一口下去 味蕾爆棚 !!! &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;好爱这种特别味道的寿司 &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt; 一点都不踩雷&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-5&amp;quot;&amp;gt;鲜熬豚骨地狱拉面&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;辣度刚刚好 豚骨汤汁很浓郁 &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt; 一大口一大口吸溜拉面太满足了!!&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;里面的叉烧肉和温泉蛋真的很喜欢！&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-6&amp;quot;&amp;gt;和风柚子唐扬鸡块&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;牛油果的清爽加金枪鱼香&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;一口下去 味蕾爆棚 !!! &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;好爱这种特别味道的寿司 &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt; 一点都不踩雷&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-7&amp;quot;&amp;gt;四季西柚小桃气&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;最喜欢的饮品就是这个！&amp;nbsp; &amp;nbsp;&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;浓浓的西柚+桃子香 &amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt; 底下还有脆啵啵 ！&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;h4 id=&amp;quot;list-item-8&amp;quot;&amp;gt;王炸虾滑&amp;lt;/h4&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;仙隐小鹿将虾滑和日式炸物融合在一起，&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;独具创意的口感与滋味绝对让你眼前一亮！&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;手工打制的虾滑披上了金黄酥脆的外皮，&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt; 依旧Q弹又可爱，完美的口感搭配劲爆的辣椒粉，&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;p&amp;gt;一口咬开满满的虾肉简直不能太满足~&amp;lt;/p&amp;gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;white-space: normal;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '0000-00-00 00:00:00', '116.379547,39.929986', '福州软件职业技术学院', '"..\\/img\\/lbt-1\\/e6e1ed1f8a46946bace04b20fb39deeb.jpg"'),
(2, '俏大姐黑牛小串', '福州首家干汁火锅鸡‼️超多小吃一家来自东北军嫂开的新店说直接点就是：便宜！好吃！又大份！每个菜品都不会踩雷！', 'img/cd2.png', '', '0000-00-00 00:00:00', '', '', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(5, '仙隐小鹿', '主打创意日式料理的武汉人气料理品牌，中西结合的大胆创作，凭借超高品质、领先餐饮市场的超高颜值、以及创新式的产品，人气飙升。', 'img/cd5.png', '<h4 id="list-item-1">中华爆炒小龙虾饭</h4> <p>满满的小龙虾肉 搭配秘制酱汁 </p> <p>和米饭一口下去 真的太幸福了!!</p> <p>不掉后悔系列！吃你就知道了！</p> <h4 id="list-item-2">火炙波波寿司</h4> <p>想吃不同口味寿司的一定要点!! </p> <p>三文鱼、北极贝、北极甜虾、鳗鱼、蟹柳等等…</p> <p>圆滚滚的造型真的hin 可爱！。</p> <p>上桌后服务员还会用火枪炙烤 非常香!!</p> <h4 id="list-item-3">嫩口炉烧小牛排</h4> <p>牛排真的巨嫩!! </p> <p>一点都不柴～</p> <p>牛肉还有点淡淡的奶香味 </p> <p>酱汁调的真的很香很入味!!超好吃!!</p> <h4 id="list-item-4">绿油油金枪鱼卷</h4> <p>牛油果的清爽加金枪鱼香</p> <p>一口下去 味蕾爆棚 !!! </p> <p>好爱这种特别味道的寿司 </p> <p> 一点都不踩雷</p> <h4 id="list-item-5">鲜熬豚骨地狱拉面</h4> <p>辣度刚刚好 豚骨汤汁很浓郁 </p> <p> 一大口一大口吸溜拉面太满足了!!</p> <p>里面的叉烧肉和温泉蛋真的很喜欢！</p> <h4 id="list-item-6">和风柚子唐扬鸡块</h4> <p>牛油果的清爽加金枪鱼香</p> <p>一口下去 味蕾爆棚 !!! </p> <p>好爱这种特别味道的寿司 </p> <p> 一点都不踩雷</p> <h4 id="list-item-7">四季西柚小桃气</h4> <p>最喜欢的饮品就是这个！ </p> <p>浓浓的西柚+桃子香 </p> <p> 底下还有脆啵啵 ！</p> <h4 id="list-item-8">王炸虾滑</h4> <p>仙隐小鹿将虾滑和日式炸物融合在一起，</p> <p>独具创意的口感与滋味绝对让你眼前一亮！</p> <p>手工打制的虾滑披上了金黄酥脆的外皮，</p> <p> 依旧Q弹又可爱，完美的口感搭配劲爆的辣椒粉，</p>​<p>一口咬开满满的虾肉简直不能太满足~</p>', '2022-05-18 04:27:43', '119.27899,26.041911', '福州市仓山万达广场3楼', '"..\\/img\\/lbt-5\\/ddafdad4698318843f28ae7c65a0979d.jpg"'),
(6, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card''s content.', 'img/2.jpg', '', '0000-00-00 00:00:00', '', '', '"..\\/img\\/lbt-6\\/ffbe372ff78f1ddbccdfafc74b44e283.jpg"'),
(7, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card''s content.', 'img/2.jpg', '', '0000-00-00 00:00:00', '', '', ''),
(10, 'sadasd', 'sadasdas', 'img/2.jpg', 'dasdasdasd', '2022-05-15 15:32:33', '', '', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(11, 'sadsadasdsz', 'dasdsadzxczxc', 'img/2.jpg', '&lt;p&gt;zdadadsdzdz&lt;/p&gt;', '2022-05-15 22:41:32', '', '', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(12, 'sdasadzcxz', 'casdsdasdas', 'img/2.jpg', '&lt;p&gt;zxcawseqwdasadas&lt;/p&gt;', '2022-05-15 22:41:41', '', '', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(16, 'sbxys', 'xyssb', 'img/2.jpg', '&lt;p&gt;adadsa&lt;/p&gt;', '2022-05-16 18:45:47', '', '', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(31, 'sbxys', 'xyssb', './img/1652774136.jpg', '&lt;p&gt;aaaaaaaaaaa&lt;br/&gt;&lt;/p&gt;', '2022-05-17 15:55:36', '', '', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(33, '许友燊炖肉', '水煮需一身', './img/1652864886.jpg', '&lt;p&gt;啊啊啊啊&lt;/p&gt;', '2022-05-18 17:08:06', '119.709566,25.974947', '福州软件职业技术学院', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(34, 'sb许友燊', 'sbxuys', './img/1652865555.jpg', '&lt;p&gt;少时诵诗书是&lt;/p&gt;', '2022-05-18 17:19:15', '119.709566,25.974947', '福州软件职业技术学院', ''),
(35, '许友', '卖需一身', './img/1652895627.jpg', '&lt;p&gt;需一身是猪&lt;br/&gt;&lt;/p&gt;', '2022-05-19 01:40:27', '116.402544,39.921133', '福州软件职业技术学院', '"..\\/img\\/lbt-35\\/f41915abb1f01fe8828807d832ae9804.jpg"'),
(36, '3333', '2222', './img/1652973759.jpg', '&lt;p&gt;55555&lt;/p&gt;', '2022-05-19 23:22:39', '116.402544,39.921133', '福州软件职业技术学院', '../img/lbt-6/ffbe372ff78f1ddbccdfafc74b44e283.jpg'),
(38, '111', '1111', './img/2.jpg', '111', '2022-05-13 22:16:23', '1111', '11111', '111111'),
(39, '11111111111', '1111111', './img/1653229113.jpg', '&lt;p&gt;1111111111111111&lt;/p&gt;', '2022-05-22 22:18:33', '119.709566,25.974947', '福州软件职业技术学院', NULL),
(40, '222221', '22221', './img/1653230004.jpg', '&lt;p&gt;222222221&lt;/p&gt;', '2022-05-22 22:33:24', '119.709566,25.974947', '福州软件职业技术学院2', NULL),
(41, '123456', '123456', './img/1653230449.jpg', '&lt;p&gt;123456&lt;/p&gt;', '2022-05-22 22:40:49', '116.379547,39.929986', '123456', '"..\\/img\\/lbt-41\\/b6c422edd42a0f9c77a7fcc9df86a45a.jpg"');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `id`) VALUES
('admin', '1204045128@qq.com', 'admin', 1),
('q1204045128', '1204045128@qq.com', '123456', 2),
('xiaomi', '1204045128@qq.com', '123456', 4),
('xiaoming', '1204045128@qq.com', '123456', 6),
('许友燊', '835304264@qq.com', '123456', 8),
('liao', '1204045128@qq.com', '123456', 10),
('111111', '835304264@qq.com', '123456', 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
