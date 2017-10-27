CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL,
  `id_jadwal` int(5) NOT NULL,
  `nama_responden` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);