--
-- Table structure for table `proposals`
--

CREATE TABLE IF NOT EXISTS `proposals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortURL` varchar(255) NOT NULL,
  `proposalURL` varchar(255) NOT NULL,
  `shortDescription` text NOT NULL,
  `fulfillmentTrailer` text NOT NULL,
  `totalPrice` varchar(255) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `pulltabShort` varchar(255) NOT NULL,
  `pulltabDescription` text NOT NULL,
  `fourupDescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
