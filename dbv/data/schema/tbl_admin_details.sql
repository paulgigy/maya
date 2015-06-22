CREATE TABLE `tbl_admin_details` (
  `id` int(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `admin_category` varchar(50) NOT NULL,
  `admin_image` varchar(100) NOT NULL,
  `registration_date` varchar(100) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1