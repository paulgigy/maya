CREATE TABLE `tbl_user_services` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(100) NOT NULL,
  `monthy_newsletter` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_category` varchar(100) NOT NULL,
  `general_likes` int(100) DEFAULT NULL,
  `website_link` varchar(100) DEFAULT NULL,
  `adverts` text,
  `user_transactions_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1