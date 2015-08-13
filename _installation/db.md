***********Login database***************

CREATE DATABASE IF NOT EXISTS `login` ;

CREATE TABLE IF NOT EXISTS `users` (

`user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',

`user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',

`user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',

`user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique'
) 
ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

***********RW database***************

CREATE DATABASE IF NOT EXISTS `RW_data`;


CREATE TABLE IF NOT EXISTS `select` (

`select_id` int(50) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',

`user_id` int(50) NOT NULL,
  `select` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  
`drift` varchar(50) NOT NULL,
  `volatility` varchar(50) NOT NULL,
  
`timestep` varchar(50) NOT NULL
) 
ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `temp_data` (
  
`user_id` int(50) NOT NULL,

`id` int(50) NOT NULL,
  
`data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) 
ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;