CREATE TABLE IF NOT EXISTS `sub_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_unit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sub_unit`
--

INSERT INTO `sub_unit` (`id`, `sub_unit`) VALUES
(1, 'EAM dan Rayonisasi'),
(2, 'Gangguan Operasional'),
(3, 'K3'),
(4, 'Pengadaan'),
(5, 'Perencanaan & Evaluasi'),
(6, 'SDM'),
(7, 'Niaga');