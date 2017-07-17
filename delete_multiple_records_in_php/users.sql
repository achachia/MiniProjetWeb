CREATE TABLE `users_3` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Deactive',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users_3` (`id`, `first_name`, `last_name`, `email`, `phone`, `created`, `modified`, `status`) VALUES
(NULL, 'Nitya', 'Maity', 'nitya@gmail.com', '123456', '2015-04-17 00:00:00', '2015-04-17 00:00:00', 1),
(NULL, 'Codex', 'World', 'contact@codexworld.com', '123456', '2015-04-17 00:00:00', '2015-04-17 00:00:00', 1),
(NULL, 'Raj', 'Ans', 'raj@gmail.com', '123456', '2015-04-17 00:00:00', '2015-04-17 00:00:00', 1),
(NULL, 'John', 'Thomas', 'john@gmail.com', '123456', '2015-04-17 00:00:00', '2015-04-17 00:00:00', 1),
(NULL, 'Kate', 'Bell', 'kate@gmail.com', '123456', '2015-04-17 00:00:00', '2015-04-17 00:00:00', 1);