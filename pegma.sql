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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.bintang: ~0 rows (approximately)
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
  `id_pemilik` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_gerai_pemilik` (`id_pemilik`),
  CONSTRAINT `FK_gerai_pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.gerai: ~1 rows (approximately)
/*!40000 ALTER TABLE `gerai` DISABLE KEYS */;
INSERT INTO `gerai` (`id`, `name`, `description`, `lot_no`, `id_pemilik`) VALUES
	(1, 'selera ramai', 'mejual lauk pauk', '543', 1),
	(2, 'ayam kampung', 'ayam', '123', NULL);
/*!40000 ALTER TABLE `gerai` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.pemilik
CREATE TABLE IF NOT EXISTS `pemilik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `nric` text,
  `nama_syarikat` text,
  `alamat_syarikat` text,
  `id_pengguna` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.pemilik: ~1 rows (approximately)
/*!40000 ALTER TABLE `pemilik` DISABLE KEYS */;
INSERT INTO `pemilik` (`id`, `nama`, `nric`, `nama_syarikat`, `alamat_syarikat`, `id_pengguna`) VALUES
	(1, 'ali', '123456789123', 'lalal sdn bhd', NULL, NULL);
/*!40000 ALTER TABLE `pemilik` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.pengguna: ~3 rows (approximately)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`id`, `username`, `password`, `type`) VALUES
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
  `id_soalan` int(11) NOT NULL,
  `waktu_nilai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_bintang` int(11) DEFAULT NULL,
  `bintang_value` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_penilaian_pengguna` (`id_pengguna`),
  KEY `FK_penilaian_gerai` (`id_gerai`),
  KEY `FK_penilaian_soalan` (`id_soalan`),
  KEY `FK_penilaian_bintang` (`id_bintang`),
  CONSTRAINT `FK_penilaian_bintang` FOREIGN KEY (`id_bintang`) REFERENCES `bintang` (`id`),
  CONSTRAINT `FK_penilaian_gerai` FOREIGN KEY (`id_gerai`) REFERENCES `gerai` (`id`),
  CONSTRAINT `FK_penilaian_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`),
  CONSTRAINT `FK_penilaian_soalan` FOREIGN KEY (`id_soalan`) REFERENCES `soalan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.penilaian: ~1 rows (approximately)
/*!40000 ALTER TABLE `penilaian` DISABLE KEYS */;
INSERT INTO `penilaian` (`id`, `id_pengguna`, `id_gerai`, `id_soalan`, `waktu_nilai`, `id_bintang`, `bintang_value`) VALUES
	(2, 1, 1, 1, '2016-05-12 01:24:54', 1, 3),
	(3, 1, 1, 1, '2016-05-12 01:25:11', 2, 2),
	(4, 1, 1, 1, '2016-05-12 01:25:42', 3, 5);
/*!40000 ALTER TABLE `penilaian` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.review
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review` text,
  `status` int(11) DEFAULT NULL,
  `id_gerai` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_review_gerai` (`id_gerai`),
  KEY `FK_review_pengguna` (`id_pengguna`),
  CONSTRAINT `FK_review_gerai` FOREIGN KEY (`id_gerai`) REFERENCES `gerai` (`id`),
  CONSTRAINT `FK_review_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.review: ~1 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`id`, `review`, `status`, `id_gerai`, `id_pengguna`) VALUES
	(1, 'lalala', 1, 1, 1);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.soalan
CREATE TABLE IF NOT EXISTS `soalan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soalan` text,
  `mata_demerit` int(3) DEFAULT NULL,
  `markah` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.soalan: ~3 rows (approximately)
/*!40000 ALTER TABLE `soalan` DISABLE KEYS */;
INSERT INTO `soalan` (`id`, `soalan`, `mata_demerit`, `markah`) VALUES
	(1, 'ape je lah', NULL, NULL),
	(2, 'saolan 1', 12, NULL),
	(3, 'ayam', 13, NULL);
/*!40000 ALTER TABLE `soalan` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
