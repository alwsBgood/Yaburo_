

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



-- --------------------------------------------------------

--
-- Структура таблицы `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` char(255) NOT NULL,
  `last_name` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `registrationType` varchar(255) NOT NULL,
  `orderType` varchar(255) NOT NULL,
  `registration_type_id` varchar(255) NOT NULL,
  `order_type_id` varchar(255) NOT NULL,
  `date_visited` varchar(11) NOT NULL,
  `time_visited` varchar(8) NOT NULL,
  `page_url` text NOT NULL,
  `user_agent` text NOT NULL,
  `utm_source` varchar(255) NOT NULL,
  `utm_campaign` varchar(255) NOT NULL,
  `utm_medium` varchar(255) NOT NULL,
  `utm_term` varchar(255) NOT NULL,
  `utm_content` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `utmcsr` varchar(255) NOT NULL,
  `utmccn` varchar(255) NOT NULL,
  `utmcmd` varchar(255) NOT NULL,
  `affiliate_id` varchar(255) NOT NULL,
  `click_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `leads`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
