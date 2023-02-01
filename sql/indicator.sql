-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table indicator.category
CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `category_NO` varchar(150) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table indicator.category: ~0 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
REPLACE INTO `category` (`categoryID`, `category_NO`, `category_name`) VALUES
	(1, '7.1', 'ผลลัพธ์ด้านการเรียนรู้ของผู้เรียนและบริการที่ตอบสนองลูกค้ากลุ่มอื่น และด้านกระบวนการ '),
	(2, '7.2', 'ผลลัพธ์ด้านลูกค้า'),
	(3, '7.3', 'ผลลัพธ์ด้านบุคลากร'),
	(4, '7.4', 'ผลลัพธ์ด้านการนำองค์กรและการกำกับดูแลองค์กร '),
	(5, '7.5', 'ผลลัพธ์ด้านงบประมาณ การเงิน ตลาด และกลยุทธ์');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table indicator.user
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL DEFAULT '',
  `username` varchar(300) NOT NULL DEFAULT '',
  `role` int(11) NOT NULL DEFAULT '1' COMMENT '0 = แอดมิน 1 = เจ้าหน้าที่',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table indicator.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`userID`, `name`, `username`, `role`) VALUES
	(1, 'scchadne', 'scchadne', 0),
	(4, 'ชฎาภรณ์ เนตรวงษ์', '60114440042', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
