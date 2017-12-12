-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `active_flag` enum('0','1','2') NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `mobile`, `email`, `passwd`, `salt`, `active_flag`, `added_by`, `date_added`, `updated_by`, `date_updated`) VALUES
(1,	'admin',	'admin',	'admin',	'9999999999',	'example@email.com',	'c4ca4238a0b923820dcc509a6f75849b',	'',	'1',	0,	'2017-12-10 20:50:05',	0,	'0000-00-00 00:00:00');


-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `starservice_dev`;
CREATE TABLE `starservice_dev` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- 2017-12-12 23:14:32