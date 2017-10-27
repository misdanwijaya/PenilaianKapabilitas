CREATE TABLE IF NOT EXISTS `area_proses_spesifik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_area_proses` int(11) NOT NULL,
  `id_spesific_goal` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;