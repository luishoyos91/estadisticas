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

-- Volcando estructura para tabla estadisticas.alineaciones
CREATE TABLE IF NOT EXISTS `alineaciones` (
  `id_alineacion` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `nombre_jugador` varchar(200) NOT NULL,
  `dorsal` int(3) NOT NULL,
  `condicion` varchar(3) NOT NULL,
  `min_jugados` int(3) DEFAULT NULL,
  `capitan` bit(1) DEFAULT NULL,
  `goles` int(2) DEFAULT NULL,
  `autogoles` int(2) DEFAULT NULL,
  `asistencias` int(2) DEFAULT NULL,
  `goles_concedidos` int(2) DEFAULT NULL,
  `jugador_reemplazado` varchar(200) DEFAULT NULL,
  `nacion_jug_reempl` varchar(4) DEFAULT NULL,
  `posicion_jug_reempl` varchar(4) DEFAULT NULL,
  `jugador_ingresado` varchar(200) DEFAULT NULL,
  `nacion_jug_ingr` varchar(4) DEFAULT NULL,
  `posiciones_jug_ingr` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_alineacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.alineaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `alineaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `alineaciones` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.equipos
CREATE TABLE IF NOT EXISTS `equipos` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(200) NOT NULL,
  `nacionalidad` varchar(4) NOT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.equipos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.estadios
CREATE TABLE IF NOT EXISTS `estadios` (
  `id_estadio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estadio` varchar(100) NOT NULL,
  `aforo` int(7) DEFAULT NULL,
  `ciudad` varchar(50) NOT NULL,
  `pais` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estadio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.estadios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `estadios` DISABLE KEYS */;
INSERT INTO `estadios` (`id_estadio`, `nombre_estadio`, `aforo`, `ciudad`, `pais`) VALUES
	(1, 'prueba', NULL, 'a', 0),
	(2, 'Pascual', NULL, 'Cali', 0),
	(3, 'a', NULL, 'a', 0),
	(4, 'Santiago Bernabeu', NULL, 'Madrid', 0),
	(5, 'Camp Nou', NULL, 'Barcelona', 0),
	(6, 'Stadium of Light', 56000, 'Sunderland', 0);
/*!40000 ALTER TABLE `estadios` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.jugadores
CREATE TABLE IF NOT EXISTS `jugadores` (
  `id_jugador` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `fecha_nacimiento` varchar(200) DEFAULT NULL,
  `nacionalidad` varchar(10) NOT NULL,
  `estatura` int(3) DEFAULT NULL,
  `perfil` varchar(50) DEFAULT NULL,
  `posicion` varchar(50) DEFAULT NULL,
  `valor_mercado` int(20) DEFAULT NULL,
  `dorsal` int(3) DEFAULT NULL,
  `estado` varchar(3) NOT NULL COMMENT 'ACT=>ACTIVO - INA =>INACTIVO - CED=>CEDIDO',
  PRIMARY KEY (`id_jugador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.jugadores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `jugadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `jugadores` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `id_pais` int(11) NOT NULL,
  `nombre_pais` varchar(200) DEFAULT NULL,
  `codigo_pais` varchar(4) NOT NULL,
  `estado` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.paises: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` (`id_pais`, `nombre_pais`, `codigo_pais`, `estado`) VALUES
	(1, 'Colombia', 'COL', 'ACT'),
	(2, 'Venezuela', 'VEN', 'ACT');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.partidos
CREATE TABLE IF NOT EXISTS `partidos` (
  `id_evento` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `dia` varchar(50) DEFAULT NULL,
  `id_torneo` int(11) NOT NULL,
  `tipo_partido` int(3) NOT NULL,
  `equipo_rival` varchar(200) NOT NULL,
  `nacionalidad` varchar(4) NOT NULL,
  `estadio` varchar(200) NOT NULL,
  `dt_mfc` varchar(200) DEFAULT NULL,
  `pais_dt_mfc` varchar(4) DEFAULT NULL,
  `dt_rival` varchar(200) DEFAULT NULL,
  `pais_dt_rival` varchar(4) DEFAULT NULL,
  `arbitro` varchar(200) DEFAULT NULL,
  `goles_mfc_ht` int(2) DEFAULT NULL,
  `goles_rival_ht` int(2) DEFAULT NULL,
  `resultado_ht` varchar(10) DEFAULT NULL,
  `goles_mfc_st` int(2) DEFAULT NULL,
  `goles_rival_st` int(2) DEFAULT NULL,
  `resultado_st` varchar(10) DEFAULT NULL,
  `goles_mfc_ft` int(2) DEFAULT NULL,
  `goles_rival_ft` int(2) DEFAULT NULL,
  `resultado_ft` int(10) DEFAULT NULL,
  `asistencia` int(7) DEFAULT NULL,
  `var` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_evento`),
  KEY `FK_partidos_torneos` (`id_torneo`),
  KEY `FK_partidos_tipospartidos` (`tipo_partido`),
  CONSTRAINT `FK_partidos_tipospartidos` FOREIGN KEY (`tipo_partido`) REFERENCES `tipos_partidos` (`id_tipo_partido`) ON UPDATE CASCADE,
  CONSTRAINT `FK_partidos_torneos` FOREIGN KEY (`id_torneo`) REFERENCES `torneos` (`id_torneo`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.partidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.tipos_partidos
CREATE TABLE IF NOT EXISTS `tipos_partidos` (
  `id_tipo_partido` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  `cod_homologacion` varchar(2) NOT NULL,
  PRIMARY KEY (`id_tipo_partido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.tipos_partidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_partidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_partidos` ENABLE KEYS */;

-- Volcando estructura para tabla estadisticas.torneos
CREATE TABLE IF NOT EXISTS `torneos` (
  `id_torneo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_torneo` varchar(50) DEFAULT NULL,
  `tipo_torneo` varchar(2) DEFAULT NULL,
  `cod_homologacion` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_torneo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla estadisticas.torneos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `torneos` DISABLE KEYS */;
/*!40000 ALTER TABLE `torneos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
