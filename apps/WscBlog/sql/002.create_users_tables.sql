CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	-- `status_id` int(11) NOT NULL DEFAULT '1',
	-- `nickname` varchar(100) DEFAULT NULL,
	-- `phone_number` varchar(100) DEFAULT NULL,
	-- `user_firsrt_name` varchar(100) NOT NULL DEFAULT '',
	-- `user_middle_name` varchar(100) DEFAULT NULL,
	-- `user_last_name` varchar(100) DEFAULT NULL,
	`username` varchar(100) NOT NULL DEFAULT '',
	`password` varchar(100) NOT NULL DEFAULT '',
	-- `user_background_file_name` varchar(255) DEFAULT NULL,
	-- `user_photo_file_name` varchar(255) DEFAULT NULL,
	-- `user_about` text,
	`created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	`modified` timestamp NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`id`),
	UNIQUE KEY `username` (`username`),
	KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
