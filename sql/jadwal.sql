CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `start_time` time NOT NULL,
  `doe_time` time NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `jadwal` (`id`, `tanggal`, `start_time`, `doe_time`, `durasi`, `status`) VALUES
(4, '2016-08-04', '10:00:30', '12:00:30', '2', 1),
(5, '2016-08-05', '21:43:00', '22:40:00', '1', 1);

ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);