CREATE TABLE `images` (
 	`id` int(11) NOT NULL AUTO_INCREMENT,
	`image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 	`order` int(5) NOT NULL DEFAULT '0',
 	`created` datetime NOT NULL,
 	`modified` datetime NOT NULL,
 	`status` tinyint(1) NOT NULL DEFAULT '1',
 	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `images` (`image`, `order`, `created`, `modified`, `status`) VALUES
('img1.jpg', 4, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img2.jpg', 6, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img3.jpg', 5, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img4.jpg', 1, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img5.jpg', 2, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img6.jpg', 7, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img7.jpg', 3, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1),
('img8.jpg', 8, '2015-04-14 00:00:00', '2015-04-14 00:00:00', 1);