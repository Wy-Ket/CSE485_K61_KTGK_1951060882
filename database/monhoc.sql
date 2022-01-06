

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `monhoc` (
  `mamh` int(11) NOT NULL,
  `ten_mh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sotinchi` date DEFAULT NULL,
  `sotiet_lt` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sotiet_bt` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sotiet_thtn` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sogio_tuhoc` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hocvi` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coquan` int(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `monhoc` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
(1, 'Công nghệ web', 3, 45, 30, 15, 0),
(1, 'Mạng máy tính', 3, 45, 30, 15, 0),

ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);


ALTER TABLE `monhoc`
  MODIFY `mamh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


