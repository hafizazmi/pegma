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
  `harga` int(11) DEFAULT NULL,
  `kebersihan` int(11) DEFAULT NULL,
  `kualiti_makanan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.bintang: ~0 rows (approximately)
/*!40000 ALTER TABLE `bintang` DISABLE KEYS */;
/*!40000 ALTER TABLE `bintang` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.gerai
CREATE TABLE IF NOT EXISTS `gerai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `lot_no` text,
  `id_pemilik` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.gerai: ~0 rows (approximately)
/*!40000 ALTER TABLE `gerai` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.pemilik: ~0 rows (approximately)
/*!40000 ALTER TABLE `pemilik` DISABLE KEYS */;
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
  `id_bintang` int(11) NOT NULL,
  `waktu_nilai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.penilaian: ~0 rows (approximately)
/*!40000 ALTER TABLE `penilaian` DISABLE KEYS */;
/*!40000 ALTER TABLE `penilaian` ENABLE KEYS */;


-- Dumping structure for table storeevaldb.soalan
CREATE TABLE IF NOT EXISTS `soalan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soalan` text,
  `mata_demerit` int(3) DEFAULT NULL,
  `markah` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table storeevaldb.soalan: ~0 rows (approximately)
/*!40000 ALTER TABLE `soalan` DISABLE KEYS */;
/*!40000 ALTER TABLE `soalan` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
