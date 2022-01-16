-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `frag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `life` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `quan`, `price`, `frag`, `type`, `remark`, `pic`, `speci`, `unit`, `life`, `created_at`, `updated_at`) VALUES
(3,	'【cocodor】果漾系列擴香瓶',	'5',	199,	'果香調',	'擴香瓶',	'品牌:Cocod\'or\r\n內容物: 擴香瓶100ml、擴香棒5支\r\n內容物成分:香料、有機溶劑、檸檬油精\r\n產地:韓國\r\n保存期限:3年\r\n產地：韓國',	'https://i.imgur.com/w1Nm5BB.jpg',	'100',	'毫升',	'2025/7/31',	'2022-01-11 18:21:02',	'2022-01-16 07:06:36'),
(4,	'【cocodor】Good Night系列擴香瓶－洋甘菊',	'3',	299,	'花香調',	'擴香瓶',	'內容物:擴香瓶120ml、擴香棒5支、木質造型擴香棒1支\r\n內容物成分:ISOPAR、DMP、香精\r\n產地:韓國\r\n製造日期:如包裝所示\r\n保存期限:3年\r\n產地：韓國',	'https://i.imgur.com/qNaUgBa.jpg',	'120',	'毫升',	'2025/9/25',	'2022-01-11 18:22:49',	'2022-01-16 07:09:08'),
(5,	'O\'Pretty 歐沛媞 室內/車用 香氛擴香石掛飾－環形小兔子',	'2',	499,	'木質調',	'擴香石',	'規格：5.5X5.5X8cm\r\n★使用方法：將 香水/精油 滴入擴香石即可擴散芳香，如需更換香味，請浸泡在清水中30分鐘左右陰乾。產品本身沒有任何香味，收到後把喜愛的 香水/精油 直接滴在表面自然吸收即可。\r\n☆溫馨提醒：\r\n？本產品屬於私人消耗性產品，已拆封或使用過、無法恢復原狀、商品外盒損壞等均恕無法辦理退換貨。\r\n？商品建議下訂前先實際試色、試用後再購買，若因顏色不符或皮膚不適等症狀，恕不接受退換。',	'https://i.imgur.com/amF7bAp.jpg',	'200',	'毫升',	'2028/7/5',	'2022-01-11 18:24:56',	'2022-01-16 07:21:09'),
(6,	'PADDYWAX 聖誕樹造型香氛蠟燭 & 線香座',	'20',	980,	'柑橘調',	'香氛蠟燭',	'商品包含一個可堆疊香氛蠟燭和一線香座，這系列以白雪覆蓋的柏樹、嚴冬中的火爐、團聚為啟發，結合工匠手工製陶瓷容器和當家設計師 Mickenzie 設計的聖誕樹造型燭台，把冷杉針、白桉樹、松果香帶進你在的空間，彷彿置身在白雪皚皚森林中的小木屋，佐一杯熱可可靠在火爐旁，細細品味空氣中的淡淡香氣，用溫暖又獨特的味道度過冬天。\r\n\r\n大棵聖誕樹尺寸：11.8 X 11.8 X 20.8 cm\r\n小棵聖誕樹尺寸：9.9 X 9.9 X 13.7 cm\r\n\r\n前調：佛手柑、檸檬皮、紅莓\r\n中調：槲寄生、檀香、香草荳\r\n後調：柏樹、北美黃衫、松樹\r\n\r\n底層蠟燭：156g\r\n\r\n頂層線香座（不包含線香）\r\n\r\n燃燒時間：蠟燭會根據環境的溫度、濕度差異而有不同的燃燒速度，基本上 28g 可燃燒 6-7 小時，本蠟燭燃燒時間約 56 小時\r\n\r\n請留意：所有產品皆為手工製造，每一款商品表面可能會稍微有些不平整或是不對齊，完美主義者請謹慎下單。',	'https://i.imgur.com/kAK5MAV.png',	'156',	'毫升',	'2025/9/17',	'2022-01-11 18:28:46',	'2022-01-16 07:00:36'),
(7,	'輕奢感流金香氛蠟燭 - 小紫杯(淡雅晚香)',	'20',	880,	'花香調',	'香氛蠟燭',	'儀式感必備香氛蠟燭!蠟燭使用閃耀光芒的流金杯身，也為家中添加一絲精緻質感。 亦可搭配香氛燈使用，不點燃也能被香氣包圍。熄滅靜置30秒，蠟油可按摩身體',	'https://i.imgur.com/uJJOjTp.jpg',	'175',	'毫升',	'2030/4/28',	'2022-01-11 18:40:57',	'2022-01-16 07:01:27'),
(8,	'TOM FORD私人調香系列 神秘聖木',	'2',	8400,	'木質調',	'擴香瓶',	'TOM FORD木質香調全新力作「私人調香系列 神秘聖木」以古老秘魯聖木與頂級烏木之煙作為淨化儀式的主角，焚香的木頭中釋放神祕的芳香精油，融合了泥土味、木頭、柑橘和令人放鬆的松針氣息，緊接而來的溫暖奢華的岩玫瑰純露、玫瑰及非洲黑檀木層層堆疊，捕抓靈魂最激情的時刻，躲入冥想空間，重獲超然的心靈平靜。TOM FORD私人調香系列 神秘聖木',	'https://i.imgur.com/JW7ghg8.jpg',	'50',	'毫升',	'2027/5/30',	'2022-01-11 18:43:00',	'2022-01-16 07:00:52'),
(11,	'護膚香氛大豆蠟燭－（雪橇－熱紅酒香氣）',	'5',	799,	'木質調',	'香氛蠟燭',	'大豆蠟低熔點的特性搭配天然香氛精油，讓您點亮氣氛的同時 熄滅蠟燭後的蠟油亦可沾取作護膚油使用。\r\n這款蠟燭具有熱紅酒香味，肉桂、肉豆蔻和紅酒的香氣喚起了聖誕節的精神。柳橙的果香和檸檬的味道為這種溫暖的香氣增添了柑橘香味。\r\n—————————————　\r\n英國製，可燃燒35小時\r\n速食主義者、零殘忍。無塑料環保包裝、全部可回收包材。',	'https://i.imgur.com/nIsxiOT.jpg',	'170',	'毫升',	'3年',	'2022-01-16 06:30:06',	'2022-01-16 06:41:02'),
(12,	'護膚香氛大豆蠟燭－（聖誕鳥－麝香佛手柑）',	'10',	1000,	'柑橘調',	'香氛蠟燭',	'英式古典風格包裝散發著聖誕綠葉的清新香味，如紅通通聖誕鳥跳躍於森林間。以精緻的冬花、常春藤和冬青為基調。這款蠟燭會喚起您對節日花環的回憶，是對聖誕節香味的現代詮釋。\r\n—————————————　\r\n               　　　\r\n英國製，可燃燒35小時。\r\n速食主義者、零殘忍。無塑料環保包裝、全部可回收包材。\r\n純大豆蠟低熔點的特性搭配天然香氛精油，讓您點亮氣氛的同時 熄滅蠟燭後的蠟油亦可沾取作護膚油使用。',	'https://i.imgur.com/71qYRxI.jpg',	'170',	'毫升',	'3年',	'2022-01-16 06:33:35',	'2022-01-16 06:36:35'),
(13,	'天然精油大豆蠟燭－月光茉莉',	'1',	1800,	'花香調',	'香氛蠟燭',	'No.45月光茉莉 -- 自信堅定複方\r\n從內在覺醒，找到自我的定位與價值。\r\n安撫面對挫折的無力感，重新找到面對困境的勇氣。\r\n堅定內在目標，朝向夢想邁進。\r\n—————————————————————\r\n天然·環保·純淨·健康     優質香氛創造愉悅時光。\r\n成份：美國進口環保大豆蠟、天然植物精油(茉莉原精、玫瑰草精油、波本天竺葵精油、橙花精油、苦橙葉精油)。\r\n​保存方法：請置放於陰涼乾燥處，避免陽光直射。',	'https://i.imgur.com/ol4NhVh.jpg',	'200',	'公克',	'2年',	'2022-01-16 06:40:06',	'2022-01-16 06:40:06'),
(14,	'永生花擴香瓶－玫瑰',	'2',	499,	'花香調',	'擴香瓶',	'精心乾燥的永生花，永遠保持花朵盛開的模樣。\r\n內容物：擴香瓶、一束永生花、5支擴香棒\r\n內容物成分：ISOPAR、DPM、香精\r\n產地：韓國',	'https://i.imgur.com/xR0McvQ.jpg',	'200',	'毫升',	'3年',	'2022-01-16 06:46:38',	'2022-01-16 06:46:38'),
(15,	'【午夜太陽】瑞典天然植物蠟香氛蠟燭－清新海洋調',	'99',	550,	'海洋調',	'香氛蠟燭',	'北歐大地是神話中起源於寒冰與烈焰的共存之地，這個童話般的國度，擁有廣袤的森林、明淨的湖泊、神聖的午夜太陽與壯麗雪景，如夢似幻的自然景觀，創造了壯闊的傳奇史詩與充滿奇幻色彩的童話，點燃幻彩袖珍系列，讓香氣帶你翱翔傳唱冰與火之歌的魔幻境地。\r\n－\r\n一年之中的期間限定，極北之境的神秘色彩，日不落帝國原來就存在於北緯71度10’21”，超越現實，無與倫比的溫柔色調，絢麗而燦爛的陽光普照 24 小時是地球上最神秘的自然景觀。北冰洋的冷冽海洋清香，引出橘黃色的佛手柑酸甜，彷彿奇景再現眼前，恣意展現著人類無法參透的魔幻，日不落下，如同希望。\r\n－',	'https://i.imgur.com/yQxOwZ8.jpg',	'75',	'公克',	'3年',	'2022-01-16 07:19:56',	'2022-01-16 07:19:56');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `type`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'admin',	'123@123',	NULL,	'$2y$10$VqNJvK.IrexR6LhWWQNMZuQfBksMuUvy8djrApGhnZZi9q6.ShBqu',	NULL,	NULL,	NULL,	'admin',	NULL,	NULL,	'2022-01-15 00:19:25',	'2022-01-15 00:19:25'),
(2,	'456',	'456@456',	NULL,	'$2y$10$oL9MktmUOwTXEqDbmbpQ8u7/mJ0hYGxQb0SzZjyHjPpE4GBKdJLwW',	NULL,	NULL,	NULL,	'customer',	NULL,	NULL,	'2022-01-15 06:00:01',	'2022-01-15 06:00:01');

-- 2022-01-16 16:53:22
