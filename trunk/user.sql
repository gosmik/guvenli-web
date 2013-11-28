-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Kas 2013, 15:15:20
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `project_v1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `user_surname` varchar(250) NOT NULL,
  `user_mail` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_surname`, `user_mail`, `user_password`) VALUES
(1, 'yusuf', 'yusuf', 'yusuf@gmail.com', 'yusuf'),
(2, 'yusufu', 'unlu', 'yusuf@gmail.com', '46764523'),
(3, 'user_1', 'user_1', 'user_1', 'user_1'),
(5, 'user_2', 'user_2', 'user_2', 'user_2'),
(6, 'osman', 'ünat', 'osman@osmanunat.com', '123456'),
(7, '', '', '', ''),
(8, 'user_3', 'user_3', 'user_3', 'user_3'),
(9, 'olgun', 'unal', 'olgun@gmail.com', '123456'),
(10, 'havva', 'demir', 'havva@gmail.com', '123'),
(11, 'user_6', 'unlu', 'user_6@gmail.com', '123'),
(13, 'erdem', 'erdem', 'erdem@gmail.com', 'erdem'),
(14, 'erdem2', 'erdem', 'erdem@gmail.com', '123'),
(15, 'veysel', 'veysel', 'veysel', 'veysel'),
(17, 'user_10', 'user_10', 'user_10', 'user_10'),
(18, 'root', 'root', 'root', 'root'),
(19, 'user_16', 'user_16', 'user_16', 'user_16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
