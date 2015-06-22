CREATE TABLE `tbl_newsletters` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `newsletter_title` varchar(100) NOT NULL,
  `newsletter_data` text NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `month_created` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1