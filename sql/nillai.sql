CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(11) NOT NULL,
  `type` varchar(1) NOT NULL,
  `nilai` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `nilai` (`id`, `type`, `nilai`) VALUES
(1, 'A', 5),
(2, 'B', 4),
(3, 'C', 3),
(4, 'D', 2),
(5, 'E', 1);