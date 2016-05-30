-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table storeevaldb.bintang
CREATE TABLE IF NOT EXISTS `bintang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.bintang: ~2 rows (approximately)
/*!40000 ALTER TABLE `bintang` DISABLE KEYS */;
INSERT INTO `bintang` (`id`, `name`) VALUES
	(1, 'harga'),
	(2, 'kebersihan'),
	(3, 'kualiti makanan');
/*!40000 ALTER TABLE `bintang` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.gerai
CREATE TABLE IF NOT EXISTS `gerai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `lot_no` text,
  `id_pemilik` int(10),
  PRIMARY KEY (`id`),
  KEY `FK_gerai_pemilik` (`id_pemilik`),
  CONSTRAINT `FK_gerai_pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.gerai: ~3 rows (approximately)
/*!40000 ALTER TABLE `gerai` DISABLE KEYS */;
INSERT INTO `gerai` (`id`, `name`, `description`, `lot_no`, `id_pemilik`) VALUES
	(2, 'Hafanis Tom yam', 'menjual masakan thai', '123', 1),
	(3, 'Seri Manggis', 'menjual makanan selera kampung', '246', 2),
	(4, 'Selera Ramai', 'Menjual sarapan dan makan tengah hari', '345', 3);
/*!40000 ALTER TABLE `gerai` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.pemilik
CREATE TABLE IF NOT EXISTS `pemilik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.pemilik: ~3 rows (approximately)
/*!40000 ALTER TABLE `pemilik` DISABLE KEYS */;
INSERT INTO `pemilik` (`id`, `name`, `email`, `mobile`) VALUES
	(1, 'hafiz', 'motorbiker007@gmail.com', '0145115420'),
	(2, 'Azmi', 'ai130024@siswa.uthm.edu.my', '0199133365'),
	(3, 'mahani', 'tengkuhafiz94@yahoo.com', '0199145218');
/*!40000 ALTER TABLE `pemilik` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.pengguna: ~4 rows (approximately)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`id`, `username`, `password`, `role`) VALUES
	(1, 'user', 'user', 1),
	(2, 'eval', 'eval', 2),
	(3, 'own', 'own', 3),
	(4, 'admin', 'admin', 4);
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.penilaian
CREATE TABLE IF NOT EXISTS `penilaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) NOT NULL,
  `id_gerai` int(11) NOT NULL,
  `waktu_nilai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bintang_value` int(1) DEFAULT NULL,
  `markah_soalan` int(2) DEFAULT NULL,
  `aduan` text,
  PRIMARY KEY (`id`),
  KEY `FK_penilaian_gerai` (`id_gerai`),
  KEY `FK_penilaian_pengguna` (`id_pengguna`),
  CONSTRAINT `FK_penilaian_gerai` FOREIGN KEY (`id_gerai`) REFERENCES `gerai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_penilaian_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.penilaian: ~5 rows (approximately)
/*!40000 ALTER TABLE `penilaian` DISABLE KEYS */;
INSERT INTO `penilaian` (`id`, `id_pengguna`, `id_gerai`, `waktu_nilai`, `bintang_value`, `markah_soalan`, `aduan`) VALUES
	(1, 1, 2, '2016-05-31 02:38:13', 2, NULL, NULL),
	(2, 1, 3, '2016-05-31 02:38:18', 5, NULL, NULL),
	(3, 2, 2, '2016-05-31 03:26:36', NULL, 50, NULL),
	(4, 2, 4, '2016-05-31 03:27:02', NULL, 60, NULL),
	(5, 1, 3, '2016-05-31 03:31:22', NULL, NULL, 'kedai kotor');
/*!40000 ALTER TABLE `penilaian` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.soalan
CREATE TABLE IF NOT EXISTS `soalan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soalan` text,
  `mata_demerit` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.soalan: ~3 rows (approximately)
/*!40000 ALTER TABLE `soalan` DISABLE KEYS */;
INSERT INTO `soalan` (`id`, `soalan`, `mata_demerit`) VALUES
	(1, 'kebersihan lantai', 30),
	(2, 'kebersihan singki', 12),
	(3, 'kebersihan tempat letak makanan', 21);
/*!40000 ALTER TABLE `soalan` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
