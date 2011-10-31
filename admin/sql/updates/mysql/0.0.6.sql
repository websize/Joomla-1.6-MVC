# table portfolio

DROP TABLE IF EXISTS `#__portfolio`;
 
CREATE TABLE `#__portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) NOT NULL,
  `title_pl` varchar(128) NOT NULL,
  `title_en` varchar(128) NOT NULL,
  `description_pl` text,
  `description_en` text,
  `icon` varchar(128) NOT NULL,
  `image` varchar(128),
  `technics` varchar(25),
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

#table portfolio_technics

DROP TABLE IF EXISTS `#__portfolio_technics`;

CREATE TABLE `#__portfolio_technics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `icon` varchar(64) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
