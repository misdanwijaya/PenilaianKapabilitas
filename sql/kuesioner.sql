CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_area_proses_spesifik` int(11) NOT NULL,
  `pertanyaan` varchar(225) NOT NULL,
  `A` varchar(225) NOT NULL,
  `B` varchar(225) NOT NULL,
  `C` varchar(225) NOT NULL,
  `D` varchar(225) NOT NULL,
  `E` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
