CREATE TABLE IF NOT EXISTS `articles` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` int(11) NOT NULL,
	`title` varchar(81) DEFAULT NULL,
	`summary` varchar(300) DEFAULT NULL,
	`text` text,
	`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`modified` timestamp NOT NULL,
	PRIMARY KEY (`id`),
	KEY `user_id` (`user_id`)
	-- CONSTRAINT `fk_article_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;