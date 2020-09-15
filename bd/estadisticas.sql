-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.13-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para estadisticas
CREATE DATABASE IF NOT EXISTS `estadisticas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `estadisticas`;

-- Volcando estructura para tabla estadisticas.estadios
CREATE TABLE IF NOT EXISTS `estadios` (
  `id_estadio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estadio` varchar(100) NOT NULL DEFAULT '',
  `ciudad` varchar(50) NOT NULL DEFAULT '',
  `pais` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_estadio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.estadios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estadios` DISABLE KEYS */;
INSERT INTO `estadios` (`id_estadio`, `nombre_estadio`, `ciudad`, `pais`) VALUES
	(1, 'prueba', 'a', 'a'),
	(2, 'Pascual', 'Cali', 'COL');
/*!40000 ALTER TABLE `estadios` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.tipos_partidos
CREATE TABLE IF NOT EXISTS `tipos_partidos` (
  `id_tipo_partido` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) DEFAULT NULL,
  `cod_homologacion` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_partido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.tipos_partidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_partidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_partidos` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.torneos
CREATE TABLE IF NOT EXISTS `torneos` (
  `id_torneo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_torneo` varchar(50) NOT NULL DEFAULT '0',
  `tipo_torneo` varchar(2) NOT NULL DEFAULT '0',
  `cod_homologacion` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_torneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.torneos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `torneos` DISABLE KEYS */;
/*!40000 ALTER TABLE `torneos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
