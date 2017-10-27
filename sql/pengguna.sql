CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_responden` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `id_subunit` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_id` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;


INSERT INTO `pengguna` (`id`, `nama_responden`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat`, `jenis_kelamin`, `pendidikan_terakhir`, `id_subunit`, `email`, `password`, `level_id`) VALUES
(35, 'Admin', 'Bandung', '1995-22-06', '22 Tahun', 'Margahayu', 'Laki-Laki', 'S1', 1, 'admin@gmail.com','3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '1'),
(36, 'Aziz Ashari', 'Bandung', '1995-09-30', '21 Tahun', 'Gatsu', 'Laki-Laki', 'S1', 5, 'aziz.ashari1@gmail.com','adcd7048512e64b48da55b027577886ee5a36350', '2'),
(37, 'Abdul', 'Bandung', '2000-08-31', '17 Tahun', 'Soreang', 'Laki-Laki', 'S1', 5, 'abdul@gmail.com','3be0ff98032936bc7f9df51c5685ee5f2dd6ccee','2');
