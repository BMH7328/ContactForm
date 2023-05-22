-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tables` (`id`, `name`, `email`, `message`, `added_on`) VALUES
(1,	'Shawn Ning Jia Le',	'shawnningjiale@gmail.com',	'hddhaefhoaefnolae',	'2023-05-22 06:57:21'),
(2,	'Shawn Ning Jia Le',	'shawnningjiale@gmail.com',	'awfaefaefaefefef',	'2023-05-22 06:58:54');

-- 2023-05-22 06:59:45
