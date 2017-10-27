-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 01:05 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi`
--
CREATE DATABASE IF NOT EXISTS `skripsi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `skripsi`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level_id` int(1) NOT NULL,
  `id_subunit` int(11) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  KEY `username` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `created`, `level_id`, `id_subunit`) VALUES
('admin@gmail.com', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2016-08-02 09:27:26', 1, 0),
('galih@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', '2017-09-27 03:54:00', 2, 2),
('rani@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', '2017-09-27 04:04:21', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `area_proses`
--

CREATE TABLE IF NOT EXISTS `area_proses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_proses` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `area_proses`
--

INSERT INTO `area_proses` (`id`, `area_proses`) VALUES
(11, 'Service Delivery'),
(12, 'Incident Resolution and Prevention'),
(13, 'Service System Development'),
(14, 'Service System Transition'),
(15, 'Strategic Service Management'),
(16, 'Configuration Management'),
(17, 'Measurement and Analysis'),
(18, 'Process and Product Quality Assurance'),
(19, 'Decision Analysis and Resolution'),
(20, 'Causal Analysis and Resolution'),
(21, 'Organizational Process Definition'),
(22, 'Organizational Process Focus'),
(23, 'Organizational Training'),
(24, 'Organizational Process Performance'),
(25, 'Organizational Performance Management'),
(26, 'Requirement Management'),
(27, 'Supplier Agreement Management'),
(28, 'Work Monitoring and Control'),
(29, 'Work Planning'),
(30, 'Capacity and Availability Management'),
(31, 'Integrated Work Management'),
(32, 'Risk Management'),
(33, 'Service Continuity'),
(34, 'Quantitative Work Management');

-- --------------------------------------------------------

--
-- Table structure for table `area_proses_spesifik`
--

CREATE TABLE IF NOT EXISTS `area_proses_spesifik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_area_proses` int(11) NOT NULL,
  `id_spesific_goal` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `area_proses_spesifik`
--

INSERT INTO `area_proses_spesifik` (`id`, `id_area_proses`, `id_spesific_goal`, `nama`) VALUES
(1, 11, 35, 'Service Delivery SG1'),
(2, 11, 36, 'Service Delivery SG2'),
(3, 11, 37, 'Service Delivery SG3'),
(4, 12, 35, 'Incident Resolution and Prevention SG1'),
(5, 12, 36, 'Incident Resolution and Prevention SG2'),
(6, 12, 37, 'Incident Resolution and Prevention SG3'),
(7, 13, 35, 'Service System Development SG1'),
(8, 13, 36, 'Service System Development SG2'),
(9, 13, 37, 'Service System Development SG3'),
(10, 14, 35, 'Service System Transition SG1'),
(11, 14, 36, 'Service System Transition SG2'),
(12, 15, 35, 'Strategic Service Management SG1'),
(13, 15, 36, 'Strategic Service Management SG2'),
(14, 16, 35, 'Configuration Management SG1'),
(15, 16, 36, 'Configuration Management SG2'),
(16, 17, 35, 'Measurement and Analysis SG1'),
(17, 17, 36, 'Measurement and Analysis SG2'),
(18, 18, 35, 'Process and Product Quality Assurance SG1'),
(19, 18, 36, 'Process and Product Quality Assurance SG2'),
(20, 19, 35, 'Decision Analysis and Resolution SG1'),
(21, 20, 35, 'Causal Analysis and Resolution SG1'),
(22, 20, 36, 'Causal Analysis and Resolution SG2'),
(23, 21, 35, 'Organizational Process Definition SG1'),
(24, 22, 35, 'Organizational Process Focus SG1'),
(25, 22, 36, 'Organizational Process Focus SG2'),
(26, 22, 37, 'Organizational Process Focus SG3'),
(27, 23, 35, 'Organizational Training SG1'),
(28, 23, 36, 'Organizational Training SG2'),
(29, 24, 35, 'Organizational Process Performance SG1'),
(30, 25, 35, 'Organizational Performance Management SG1'),
(31, 25, 36, 'Organizational Performance Management SG2'),
(32, 25, 37, 'Organizational Performance Management SG3'),
(33, 26, 35, 'Requirement Management SG1'),
(34, 27, 35, 'Supplier Agreement Management SG1'),
(35, 27, 36, 'Supplier Agreement Management SG2'),
(36, 28, 35, 'Work Monitoring and Control SG1'),
(37, 28, 36, 'Work Monitoring and Control SG2'),
(38, 29, 35, 'Work Planning SG1'),
(39, 29, 36, 'Work Planning SG2'),
(40, 29, 37, 'Work Planning SG3'),
(41, 30, 35, 'Capacity and Availability Management SG1'),
(42, 30, 36, 'Capacity and Availability Management SG2'),
(43, 31, 35, 'Integrated Work Management SG1'),
(44, 31, 36, 'Integrated Work Management SG2'),
(45, 32, 35, 'Risk Management SG1'),
(46, 32, 36, 'Risk Management SG2'),
(47, 32, 37, 'Risk Management SG3'),
(48, 33, 35, 'Service Continuity SG1'),
(49, 33, 36, 'Service Continuity SG2'),
(50, 33, 37, 'Service Continuity SG3'),
(51, 34, 35, 'Quantitative Work Management SG1'),
(52, 34, 36, 'Quantitative Work Management SG2');

-- --------------------------------------------------------

--
-- Table structure for table `detail_survey`
--

CREATE TABLE IF NOT EXISTS `detail_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_survey` int(11) NOT NULL,
  `spesific_goal` int(11) NOT NULL,
  `nomor_soal` int(11) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `skor` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `detail_survey`
--

INSERT INTO `detail_survey` (`id`, `id_survey`, `spesific_goal`, `nomor_soal`, `jawaban`, `type`, `skor`) VALUES
(9, 19, 1, 20, 'Tidak Ada', 'A', 1),
(10, 19, 1, 21, 'Ada tetapi tidak diimplementasikan', 'B', 2),
(11, 19, 2, 26, 'Selalu diimplementasikan', 'E', 5),
(12, 19, 52, 208, 'Ada tetapi tidak diimplementasikan', 'B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `start_time` time NOT NULL,
  `doe_time` time NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `tanggal`, `start_time`, `doe_time`, `durasi`, `status`) VALUES
(8, '2017-09-18', '22:00:00', '24:00:00', '2', 1),
(9, '2017-09-29', '12:00:00', '14:00:00', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_area_proses_spesifik` int(11) NOT NULL,
  `id_subunit` int(11) NOT NULL,
  `pertanyaan` varchar(225) NOT NULL,
  `A` varchar(225) NOT NULL,
  `B` varchar(225) NOT NULL,
  `C` varchar(225) NOT NULL,
  `D` varchar(225) NOT NULL,
  `E` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=209 ;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `id_area_proses_spesifik`, `id_subunit`, `pertanyaan`, `A`, `B`, `C`, `D`, `E`) VALUES
(20, 1, 7, 'Dilakukan survei kepuasan pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(21, 1, 7, 'Terdapat perjanjian pelayanan (Service Agreement) sebelum menggunakan jasa dari PLN', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(22, 3, 1, 'Terdapat jadwal pemeliharaan pada sistem pelayanan yang ada', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(23, 3, 5, 'Terdapat jadwal pemeliharaan pada sistem pelayanan yang ada', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(24, 2, 7, 'Tersedia layanan costumer service untuk pelanggan bila terjadi masalah', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(26, 2, 7, 'Terdapat dokumen dari setiap aktivitas pelayanan yang dilaksanakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(27, 2, 7, 'Terdapat sistem pemantauan bagi pelanggan untuk mengetahui proses dari permintaan pelayanan yang diajukan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(28, 3, 7, 'Dilakukan konfirmasi kepada pelanggan bila suatu permintaan pelayanan telah selesai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(29, 4, 3, 'Dilakukan pendekatan bila terjadi sebuah insiden', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(30, 4, 3, 'Terdapat prosedur dari tiap insiden yang bisa terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(31, 4, 2, 'Terdapat prosedur dari tiap insiden yang bisa terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(32, 5, 3, 'Dilakukan pencatatan untuk setiap insiden yang terjadi baik per individu ataupun dalam satu unit kerja yang menangganinya', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(34, 5, 3, 'Terdapat laporan bila terjadi insiden', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(35, 5, 2, 'Terdapat laporan bila terjadi insiden', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(36, 5, 3, 'Dokumen laporan dari kumpulan insiden yang pernah terjadi selalu diperbarui', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(37, 5, 2, 'Terdapat pemantauan pada penangganan insiden yang terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(38, 5, 3, 'Status dari tahapan penangganan insiden dapat dipantau', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(39, 6, 3, 'Dilakukan penyelidikan sebab-akibat bila terjadi insiden', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(40, 6, 2, 'Dilakukan penyelidikan sebab-akibat bila terjadi insiden', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(41, 6, 3, 'Terdapat dokumen yang berupa instruksi dan solusi bila sewaktu-waktu insiden yang sama terjadi kembali', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(42, 6, 2, 'Terdapat dokumen yang berupa instruksi dan solusi bila sewaktu-waktu insiden yang sama terjadi kembali', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(43, 6, 3, 'Bila telah terjadi insiden, diberlakukan suatu aturan baru untuk mengurangi insiden serupa terjadi kembali', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(44, 7, 7, 'Terdapat persyaratan untuk pelanggan yang ingin menggunakan layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(45, 7, 7, 'Terdapat kebijakan untuk mengatur perubahan persyaratan yang bisa berubah sewaktu-waktu', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(46, 8, 5, 'Dilakukan evaluasi terhadap setiap persyaratan yang diterapkan dalam sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(47, 8, 5, 'Dilakukan dokumentasi terhadap hasil evaluasi persyaratan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(48, 8, 6, 'Terdapat pembagian jobdesk yang jelas kepada setiap pegawai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(49, 8, 6, 'Pendoman manual untuk pegawai dari segi operator dan pemeliharaan sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(50, 8, 1, 'Pendoman manual untuk pegawai dari segi operator dan pemeliharaan sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(51, 9, 5, 'Dilakukan verifikasi dan validasi pada setiap sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(52, 9, 5, 'Terdapat jadwal untuk review kinerja para pegawai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(53, 9, 6, 'Terdapat jadwal untuk review kinerja para pegawai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(54, 9, 5, 'Dibuat laporan dari analisis hasil kinerja pegawai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(55, 9, 6, 'Dibuat laporan dari analisis hasil kinerja pegawai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(56, 10, 5, 'Dilakukan perencanaan terlebih dahulu sebelum melakukan perubahan pada sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(57, 10, 5, 'Dilakukan analisis terhadap dampak dari perubahan sistem sebelum dan setelah dilakukan perubahan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(58, 10, 6, 'Terdapat pelatihan yang mendukung perubahan pada sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(59, 11, 7, 'Memiliki panduan untuk penerapan sistem pelayanan yang baru', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(60, 11, 5, 'Memiliki panduan untuk penerapan sistem pelayanan yang baru', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(61, 11, 5, 'Terdapat dokumen untuk penilaian penerapan sistem pelayanan yang baru atau diperbarui', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(62, 12, 7, 'Dilakukan analisis data untuk kebutuhan stategis pada sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(63, 12, 5, 'Dilakukan analisis data untuk kebutuhan stategis pada sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(64, 12, 7, 'Dilakukan perencanaan untuk penerapan standar pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(65, 10, 5, 'Dilakukan perencanaan untuk penerapan standar pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(66, 13, 7, 'Terdapat dokumen dari kumpulan standar pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(67, 13, 7, 'Tersedia pilihan untuk pelayanan yang diinginkan oleh pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(68, 14, 7, 'Dilakukan identifikasi terhadap setiap jenis layanan yang diberikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(69, 14, 7, 'Terdapat aturan untuk pengontrolan layanan yang sedang dikerjakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(70, 14, 1, 'Terdapat aturan untuk pengontrolan layanan yang sedang dikerjakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(71, 14, 7, 'Menerapakan aturan sesuai dengan visi misi organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(72, 14, 1, 'Menerapakan aturan sesuai dengan visi misi organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(73, 14, 2, 'Menerapakan aturan sesuai dengan visi misi organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(74, 14, 5, 'Menerapakan aturan sesuai dengan visi misi organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(75, 15, 7, 'Terdapat prosedur apabila pelanggan melakukan permintaan perubahaan pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(76, 15, 7, 'Dilakukan pencatatan dari semua perubahan permintaan yang ada', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(77, 16, 5, 'Dilakuakan penentuan tujuan dari pengukuran yang akan dilaksanakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(78, 16, 5, 'Terdapat spesifikasi dasar untuk tolak ukur pengukuran yang akan dilaksanakan.', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(79, 16, 5, 'Tersedia alat untuk pengumpulan data pengukuran', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(80, 16, 5, 'Dilakukan analisis dengan alat pengukuran', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(81, 17, 5, 'Hasil dari pengumpulan tersebut disimpan pada dokumen dengan detail dari data yang didapatkan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(82, 17, 5, 'Terdapat draf laporan sementara dari hasil analisis pengukuran', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(83, 17, 5, 'Data dari hasil pengukuran diarsipkan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(84, 17, 5, 'Hasil pengukuran dan analisis disampaikan kebagian yang terkait', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(85, 18, 2, 'Dilakukan tindakan yang bersifat korektif bila terjadi kesalahan pada prosedur pemberian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(86, 18, 1, 'Dilakukan tindakan yang bersifat korektif bila terjadi kesalahan pada prosedur pemberian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(87, 18, 2, 'Dokumentasi dari tindakan korektif tersebut', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(88, 19, 7, 'Terdapat laporan evaluasi untuk pemberian layanan yang telah dilakukan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(89, 19, 5, 'Terdapat laporan evaluasi untuk pemberian layanan yang telah dilakukan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(90, 19, 7, 'Laporan untuk penilaian tren kualitas dari pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(91, 20, 5, 'Terdapat jadwal untuk melakukan evaluasi terhadap proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(92, 20, 7, 'Terdapat jadwal untuk melakukan evaluasi terhadap proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(93, 20, 5, 'Dilakukan pemilihan untuk metode evaluasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(94, 20, 5, 'Terdapat dokumentasi terkait kriteria evaluasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(95, 20, 5, 'Setelah dilakukan evaluasi dilakukan identifikasi terhadap alternatif yang bisa digunakan solusi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(96, 20, 5, 'Hasil dari evaluasi dan solusi dipublikasikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(97, 20, 5, 'Saran dari hasil evaluasi itu dilaksanakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(98, 21, 7, 'Terdapat dokumenentasi dari data awal hasil analisis kinerja proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(99, 21, 5, 'Dokumentasi dari tindakan awal yang dilakukan dari data hasil analisis awal', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(100, 21, 7, 'Dokumentasi dari tindakan awal yang dilakukan dari data hasil analisis awal', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(101, 22, 5, 'Melakukan perencanaan dari tindakan yang akan diambil', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(102, 22, 7, 'Melakukan perencanaan dari tindakan yang akan diambil', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(103, 22, 5, 'Setelah dilakukan tindakan untuk memperbaiki kinerja proses terjadi perubahan yang signifikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(104, 22, 5, 'Dilakukan analisis sebab-akibat dari data hasil evaluasi kinerja', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(105, 23, 7, 'Terdapat dokumen yang menjelaskan proses standar pada kegiatan organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(106, 23, 1, 'Terdapat dokumen yang menjelaskan proses standar pada kegiatan organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(107, 23, 7, 'Terdapat gambaran dari siklus kerja pada kegiatan pelayanan yang diberikan oleh organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(108, 23, 5, 'Dilakukan pendefinisian pada pengukuran untuk proses standar yang dijalankan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(109, 23, 6, 'Terdapat aturan untuk pembentukan tim kerja pada organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(110, 24, 7, 'Dilakukan penilaian untuk menemukan kelebihan dan kelemahan pada proses pelayanan pada pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(111, 24, 6, 'Dilakukan penilaian untuk menemukan kelebihan dan kelemahan pada proses pelayanan pada pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(112, 24, 5, 'Dilakukan penilaian untuk menemukan kelebihan dan kelemahan pada proses pelayanan pada pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(113, 24, 5, 'Menganalisis hasil dari penilaian untuk menemukan proses yang harus diperbaiki', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(114, 24, 5, 'Dilakukan rekomendasi untuk perbaikan proses layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(115, 25, 5, 'Terdapat dokumen perencanaan perbaikan proses yang disetujui', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(116, 25, 5, 'Pelaksanaan rencana yang diawasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(117, 26, 5, 'Terdapat daftar dan deskripsi dari pengerjaan proses yang telah direncanakan sebelumnya', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(118, 26, 7, 'Terdapat daftar dan deskripsi dari pengerjaan proses yang telah direncanakan sebelumnya', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(119, 27, 6, 'Dilakukan analisis terkait kebutuhan pelatihan yang akan dilakukan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(120, 27, 6, 'Terdapat komitmen dari penyelengaraan pelatihan agar tujuan pelatihan yang sudah direncanakan bisa tercapai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(121, 27, 6, 'Dilakukan perencanaan yang matang untuk pelatihan pada organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(122, 27, 6, 'Dokumen dari materi pelatihan didapatkan oleh setiap peserta pelatihan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(123, 28, 6, 'Dilakukan penetapan waktu pelatihan dari jauh-jauh hari', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(124, 28, 6, 'Terdapat dokumentasi dari setiap pelatihan yang dilakukan pada organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(125, 28, 6, 'Dilakukan evaluasi dari hasil program pelatihan yang dilaksanakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(126, 29, 5, 'Dilakukan proses penilaian dari kualitas pemberian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(127, 29, 7, 'Dilakukan proses penilaian dari kualitas pemberian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(128, 29, 5, 'Terdapat daftar spesifik untuk penilaian kinerja yang akan dilakukan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(129, 29, 7, 'Dilakukan analisis dari data kinerja dalam proses pelayanan yang berlangsung', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(130, 29, 7, 'Terdapat dokumen untuk mengambarkan suatu proses pelayanan yang dilaksanakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(131, 30, 7, 'Dilakukan revisi apabila suatu proses pelayanan memiliki kualitas yang rendah dan tidak mendukung visi misi organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(132, 30, 5, 'Melakukan analisis dari kemampuan saat ini terkait dengan visi misi organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(133, 30, 5, 'Dari hasil analisis dapat diketahui proses pada pelayanan yang harus ditingkatkan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(134, 31, 5, 'Adanya usulan perbaikan dari proses pelayanan yang sedang berjalan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(135, 31, 7, 'Usulan dari perbaikan proses pelayanan dilakukan validasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(136, 32, 5, 'Perencanaan untuk penerapan dari perbaikan proses yang diusulkan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(137, 32, 7, 'Dokumentasi dari hasil proses pelayanan yang sudah dilakukan perbaikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(138, 33, 7, 'Terdapat dokumen dari daftar prosedur pada proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(139, 33, 7, 'Dokumentasi apabila terjadi perubahan prosedur pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(140, 33, 7, 'Laporan dari dampak bila dilakukan perubahan prosedur pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(141, 33, 2, 'Laporan dari dampak bila dilakukan perubahan prosedur pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(142, 33, 7, 'Melakukan tindakan korektif bila terjadi hal tidak sesuai dari prosedur yang dijalankan dengan rencana kerja serta hasil yang diterima pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(143, 33, 2, 'Melakukan tindakan korektif bila terjadi hal tidak sesuai dari prosedur yang dijalankan dengan rencana kerja serta hasil yang diterima pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(144, 34, 4, 'Terdapat dokumen jenis barang/ jasa yang disediakan oleh pihak luar (pemasok)', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(145, 34, 1, 'Terdapat dokumen jenis barang/ jasa yang disediakan oleh pihak luar (pemasok)', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(146, 34, 4, 'Daftar pemasok yang berkerja sama dengan organisasi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(147, 34, 4, 'Terdapat MoU atau perjanjian tertulis dengan pihak pemasok', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(148, 35, 4, 'Pengecekan serta pembuatan laporan dari setiap bahan yang disuplai pemasok', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(149, 35, 1, 'Pengecekan serta pembuatan laporan dari setiap bahan yang disuplai pemasok', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(150, 35, 4, 'Membuat laporan bila barang dari pemasok mengalami kesalahan atau kerusakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(151, 35, 4, 'Terdapat garansi dari pihak pemasok terkait barang yg disuplai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(152, 36, 2, 'Dilakukan pencatatan bila terjadi kesalahan dari prosedur pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(153, 36, 6, 'Dilakukan penijauan kembali dari komitmen pegawai terkait jobdesk yang telah disepakati', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(154, 36, 7, 'Pemantauan terhadap resiko dari prosedur pelayanan yang berjalan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(155, 36, 7, 'Pemantauan kinerja dari pelayanan yang diterima pelanggan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(156, 36, 7, 'Dokumen dari hasil peninjauan proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(157, 37, 2, 'Daftar permasalahan yang memerlukan tindakan perbaikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(158, 37, 2, 'Dilakukan perencanaan untuk perbaikan masalah', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(159, 37, 5, 'Dilakukan perencanaan untuk perbaikan masalah', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(160, 38, 7, 'Dilakukan langkah stategis untuk setiap pelayanan yang diberikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(161, 38, 5, 'Dilakukan langkah stategis untuk setiap pelayanan yang diberikan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(162, 38, 7, 'Dilakukan pengorganisasian terhadapat pengerjaan dari proses pelayanan yang ada', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(163, 38, 7, 'Dilakukan perhitungan untuk mengetahui tingkat kompleksitas dari hasil kerja pada proses pengerjaan pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(164, 38, 4, 'Estimasi biaya yang dikeluarkan untuk pengadaan barang yang mendukung proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(165, 39, 7, 'Penjadwalan dari proses pengerjaan pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(166, 39, 5, 'Pengelolaan data untuk menunjang pengembangan rencana kerja', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(167, 39, 6, 'Daftar persyaratan untuk administrasi kepegawaian', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(168, 39, 6, 'Dilakukan perekrutan pegawai baru bila terjadi kekosongan posisi atau memerlukan keterampilan tertentu', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(169, 40, 5, 'Pengkajian ulang terhadap rencana yang akan mempegaruhi pengerjaan proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(170, 41, 1, 'Strategi untuk pengelolaan dari kapasitas dan ketersediaan layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(171, 41, 1, 'Dilakukan pemeriksaan yang berkala terkait pemberian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(172, 41, 1, 'Terdapat data yang menggambarkan tingkat penggunaan aset untuk pelayanan yang sedang digunakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(173, 42, 1, 'Analisis terhadap perkembangan dari pertumbuhan pengguna layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(174, 42, 1, 'Analisis terhadap perkembangan dari pertumbuhan pengguna layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(175, 42, 1, 'Laporan ketersedian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(176, 43, 6, 'Terdapat dokumen rencana kerja yang terpadu antara unit kerja untuk mendukung sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(177, 43, 1, 'Terdapat dokumen rencana kerja yang terpadu antara unit kerja untuk mendukung sistem pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(178, 43, 6, 'Dengan rencana kerja maka wkatu pengerjaan pelayanan menjadi jauh lebih efektif', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(179, 43, 1, 'Terdapat catatan dari penggunaan dan perawatan alat yang mendukung pemberian layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(180, 43, 6, 'Dilakukan pendaftaran dari setiap pegawai bila masuk menjadi anggota tim yang ditugaskan pada unit kerja tertentu', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(181, 43, 5, 'Memberikan usulan perbaikan bila terjadi kesalahan koordinasi pengerjaan layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(182, 45, 1, 'Sumber risiko dapat diketahui sebelum risiko itu terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(183, 45, 3, 'Sumber risiko dapat diketahui sebelum risiko itu terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(184, 45, 1, 'Terdapat strategi untuk meminimalisir risiko yang dapat terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(185, 45, 3, 'Terdapat strategi untuk meminimalisir risiko yang dapat terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(186, 46, 1, 'Analisis untuk setiap risiko yang bisa terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(187, 46, 1, 'Terdapat prioritas untuk penanggan risiko yang bisa terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(188, 47, 1, 'Terdapat daftar penanggung jawab dari setiap risiko', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(189, 47, 2, 'Terdapat daftar penanggung jawab dari setiap risiko', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(190, 47, 1, 'Dokumen yang berisikan daftar pilihan penangganan untuk mengatasi risiko yang dapat terjadi', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(191, 48, 7, 'Dilakukan analisis dari setiap dampak proses pelayanan yang dijalankan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(192, 48, 5, 'Dilakukan analisis dari setiap dampak proses pelayanan yang dijalankan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(193, 48, 2, 'Dilakukan analisis dari setiap dampak proses pelayanan yang dijalankan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(194, 48, 6, 'Dokumen sumber daya internal dan eksternal yang dibutuhkan untuk menjalankan proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(195, 48, 4, 'Dokumen sumber daya internal dan eksternal yang dibutuhkan untuk menjalankan proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(196, 48, 1, 'Dokumen sumber daya internal dan eksternal yang dibutuhkan untuk menjalankan proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(197, 49, 1, 'Mekanisme untuk koordinasi antar unit kerja memulai pelaksanaan layanan yang berkelanjutan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(198, 49, 6, 'Mekanisme untuk koordinasi antar unit kerja memulai pelaksanaan layanan yang berkelanjutan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(199, 49, 6, 'Terdapat pelatihan sebelum melaksanakan pelayanan yang berkelanjutan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(200, 49, 6, 'Evaluasi terkait efektifitas dari pelatihan dengan pemberian pelayanan yang berkelanjutan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(201, 50, 5, 'Terdapat metode untuk verifikasi dan validasi dari rencana pelayanan yang berkelanjutan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(202, 50, 7, 'Terdapat metode untuk verifikasi dan validasi dari rencana pelayanan yang berkelanjutan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(203, 50, 5, 'Dari hasil evaluasi terdapat rekomendasi untuk perbaikan proses pelayanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(204, 51, 5, 'Terdapat standar nilai mutu yang harus dipenuhi untuk setiap proses pengerjaan layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(205, 51, 5, 'Identifikasi sebab-akibat bila standar mutu tersebut tidak tercapai', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(206, 52, 2, 'Dilakukan penanganan apabila terdapat kekurangan dari proses pengerjaan layanan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(207, 52, 7, 'Statistik dari pelayanan yang sedang dan sudah dikerjakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan'),
(208, 52, 1, 'Statistik dari pelayanan yang sedang dan sudah dikerjakan', 'Tidak Ada', 'Ada tetapi tidak diimplementasikan', 'Sebagian diimplementasikan', 'Sebagian besar diimplementasikan', 'Selalu diimplementasikan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(11) NOT NULL,
  `type` varchar(1) NOT NULL,
  `nilai` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `type`, `nilai`) VALUES
(1, 'A', 5),
(2, 'B', 4),
(3, 'C', 3),
(4, 'D', 2),
(5, 'E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE IF NOT EXISTS `responden` (
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `nama_responden`, `tempat_lahir`, `tanggal_lahir`, `usia`, `alamat`, `jenis_kelamin`, `pendidikan_terakhir`, `id_subunit`, `email`) VALUES
(40, 'Galih Praja', 'Bandung', '1970-01-21', '47 Tahun', 'aaaa', 'Laki-Laki', 'S1', 2, 'galih@gmail.com'),
(44, 'Rani', 'Padang', '1995-06-25', '22 Tahun', 'Jakarta', 'Laki-Laki', 'S1', 7, 'rani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `spesific_goal`
--

CREATE TABLE IF NOT EXISTS `spesific_goal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_spesific_goal` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `spesific_goal`
--

INSERT INTO `spesific_goal` (`id`, `nama_spesific_goal`) VALUES
(35, 'Spesific Goal 1'),
(36, 'Spesific Goal 2'),
(37, 'Spesific Goal 3');

-- --------------------------------------------------------

--
-- Table structure for table `sub_unit`
--

CREATE TABLE IF NOT EXISTS `sub_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_unit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwal` int(5) NOT NULL,
  `nama_responden` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `id_jadwal`, `nama_responden`, `email`) VALUES
(7, 9, 'Galih Praja', 'galih@gmail.com'),
(8, 9, 'Galih Praja', 'galih@gmail.com'),
(9, 9, 'Galih Praja', 'galih@gmail.com'),
(10, 9, 'Galih Praja', 'galih@gmail.com'),
(11, 9, 'Galih Praja', 'galih@gmail.com'),
(12, 9, 'Galih Praja', 'galih@gmail.com'),
(13, 9, 'Galih Praja', 'galih@gmail.com'),
(14, 9, 'Galih Praja', 'galih@gmail.com'),
(15, 9, 'Galih Praja', 'galih@gmail.com'),
(16, 9, 'Galih Praja', 'galih@gmail.com'),
(17, 9, 'Galih Praja', 'galih@gmail.com'),
(18, 9, 'Galih Praja', 'galih@gmail.com'),
(19, 9, 'Galih Praja', 'galih@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
