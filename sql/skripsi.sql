--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`email`, `password`, `created`, `level_id`) VALUES
('aci@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:36', 3),
('ade@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('admin@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-02 16:27:26', 1),
('agus@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('al@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-05 01:49:14', 3),
('alex@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('ardi@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:36', 3),
('arya@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('ayu@yahoo.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:36', 3),
('detty@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:37:01', 2),
('eka@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('erik@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('gina@yahoo.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('ira@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('joko@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('kelvin@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:36', 3),
('lambok@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('lesmana@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('nining@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('pudja@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('rohmat@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:36', 3),
('ruhiyat@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-04 03:33:27', 2),
('swisma@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('try@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:36', 3),
('wildan@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('wildanegi011@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-05 01:18:15', 3),
('wildanegi@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3),
('yuli@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-03 05:43:35', 3);


CREATE TABLE IF NOT EXISTS `responden` (
  `id` int(11) NOT NULL,
  `nama_responden` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `id_subunit` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;


INSERT INTO `responden` (`id`, `nama_responden`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat`, `jenis_kelamin`, `pendidikan_terakhir`, `pekerjaan`, `id_subunit`, `email`, `telepon`) VALUES
(20, 'wildan egi ardiawan', 'Bandung', '1992-04-11', '24 Tahun', 'jalan moch toha bandung', 'Laki-Laki', 'D1-D3-D4', 'PNS', 1, 'wildanegi011@gmail.com', '08987069270'),
(2, 'gina zaida yusfira', 'Bandung', '1995-04-21', '20 Tahun', 'jalan raya ciwastra', 'Perempuan', 'S1', 'PNS', 1, 'gina@yahoo.com', '0987897898'),
(3, 'arya beni sanjaya', 'Solo', '1995-05-01', '20 Tahun', 'jalan soreang', 'Laki-Laki', 'S1', 'TNI', 1, 'arya@gmail.com', '09089089889'),
(4, 'pudja ismail', 'Bandung', '1995-09-05', '21 Tahun', 'Jalan Bojong soang', 'Laki-Laki', 'D3', 'POLRI', 1, 'pudja@gmail.com', '0989089089'),
(5, 'Ira Yulianti', 'Bandung', '1995-09-05', '21 Tahun', 'Jalan Cimahi', 'Perempuan', 'S1', 'Wiraswasta', 1, 'ira@gmail.com', '00989878879'),
(6, 'Yuli Pariani', 'Solo', '1996-10-25', '19 Tahun', 'jalan cibaduyut', 'Perempuan', 'S1', 'Wiraswasta', 1, 'yuli@gmail.com', '08767676767'),
(7, 'Swisma Kurniawan', 'Bandung', '1996-10-25', '20 Tahun', 'Jalan Bojong soang', 'Laki-Laki', 'D3', 'TNI', 1, 'swisma@gmail.com', '09897877777'),
(8, 'Wildan April', 'Bandung', '1994-01-02', '22 Tahun', 'Jalan Kiaracondong', 'Laki-Laki', 'D3', 'TNI', 1, 'wildan@gmail.com', '09897989089'),
(9, 'lambok situmorang', 'Bandung', '1994-01-02', '22 Tahun', 'Jalan Soreang', 'Laki-Laki', 'D3', 'PNS', 1, 'lambok@gmail.com', '0989079877'),
(10, 'Gusti Ayu eka', 'Bandung', '1995-04-21', '20 Tahun', 'Jalan babakan Siliwangi', 'Perempuan', 'D3', 'Wiraswasta', 1, 'ayu@yahoo.com', '0987789898'),
(11, 'Rohmat Suteja Somantri', 'Bandung', '1995-04-21', '20 Tahun', 'Jalan Leuwi Panjang', 'Laki-Laki', 'S1', 'PNS', 1, 'rohmat@gmail.com', '09808988898'),
(12, 'Kelvin Alfian', 'Purwakarta', '1996-04-21', '20 Tahun', 'Jalan Sukaati', 'Laki-Laki', 'S1', 'PNS', 1, 'kelvin@gmail.com', '0989899897'),
(13, 'Try Setyo Utomo', 'Bandung', '1996-04-21', '20 Tahun', 'Jalan Cibereum', 'Laki-Laki', 'S1', 'PNS', 1, 'try@gmail.com', '09879789787'),
(14, 'Asri Nur Azmi', 'Bandung', '1996-04-21', '20 Tahun', 'Jalan cimahi', 'Perempuan', 'D3', 'Wiraswasta', 1, 'aci@gmail.com', '09898908989'),
(15, 'Ardi Kurniawan', 'Bandung', '1996-04-21', '20 Tahn', 'jalan Gede Bage', 'Laki-Laki', 'D3', 'POLRI', 1, 'ardi@gmail.com', '0987789777'),
(21, 'alopurinol', 'Bandung', '1992-04-11', '0', '\r\nuiy', 'Laki-Laki', 'SLTA', 'PNS', 1, 'al@gmail.com', '08987069270');

CREATE TABLE IF NOT EXISTS `sub_unit` (
  `id` int(11) NOT NULL,
  `sub_unit` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `sub_unit` (`id`, `sub_unit`) VALUES
(1, 'EAM'),
(2, 'Gangguan Operasional'),
(3, 'K3'),
(4, 'Pengadaan'),
(5, 'Perencanaan & Evaluasi'),
(6, 'SDM'),
(7, 'Niaga');

ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`), ADD KEY `username` (`email`);

ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`);

ALTER TABLE `sub_unit`
  ADD PRIMARY KEY (`id`);
 