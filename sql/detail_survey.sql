CREATE TABLE IF NOT EXISTS `detail_survey` (
  `id` int(11) NOT NULL,
  `id_survey` int(11) NOT NULL,
  `nomor_soal` int(11) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `skor` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;

ALTER TABLE `detail_survey`
  ADD PRIMARY KEY (`id`);