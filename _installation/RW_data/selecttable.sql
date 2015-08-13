CREATE TABLE IF NOT EXISTS `select` (
`select_id` int(50) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_id` int(50) NOT NULL,
  `select` varchar(50) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `drift` varchar(50) NOT NULL,
  `volatility` varchar(50) NOT NULL,
  `timestep` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;