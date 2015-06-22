CREATE TABLE `tbl_user_transactions` (
  `id` int(100) NOT NULL,
  `emails_sent` varchar(30) NOT NULL,
  `payments_made` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `sent_bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1