-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2014 a las 05:51:02
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRES` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `DNI` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_CLIENTE`, `NOMBRES`, `APELLIDOS`, `DNI`) VALUES
(1, 'Jhon Felipe', 'Medina Zapata', '46622539'),
(2, 'Sandy Katherine', 'Castillo Cruz', '46622539'),
(3, 'Sandy Katherine', 'Castillo Cruz', '78990733'),
(4, 'Herminia', 'Zapata Palacios', '12121211'),
(5, 'adaksdj asdasd', 'asdasd asdasd', '212123121'),
(6, 'wew', 'weqw', '2332323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ORIGEN` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESTINO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_SALIDA` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `HORA_SALIDA` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DNI` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRES` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_ACTUAL` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ASIENTO` int(10) NOT NULL,
  `PRECIO` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID`, `ORIGEN`, `DESTINO`, `FECHA_SALIDA`, `HORA_SALIDA`, `DNI`, `NOMBRES`, `APELLIDOS`, `FECHA_ACTUAL`, `ASIENTO`, `PRECIO`) VALUES
(74, 'Trujillo', 'MÃ¡ncora', '2014-11-09', '8:20 pm', '46622539', 'Jhon Felipe', 'Medina Zapata', '09/11/2014', 34, 32),
(75, 'Trujillo', 'MÃ¡ncora', '2014-11-09', '2:30 pm', '46622539', 'Sandy Katherine', 'Castillo Cruz', '09/11/2014', 23, 30),
(76, 'Trujillo', 'Chiclayo', '2014-11-09', '8:20 pm', '78990733', 'Sandy Katherine', 'Castillo Cruz', '09/11/2014', 23, 30),
(77, 'Trujillo', 'MÃ¡ncora', '2014-11-09', '8:20 pm', '12121211', 'Herminia', 'Zapata Palacios', '09/11/2014', 23, 40),
(78, 'Trujillo', 'MÃ¡ncora', '2014-11-09', '9:00 am', '21212312', 'adaksdj asdasd', 'asdasd asdasd', '09/11/2014', 3, 40),
(79, 'Trujillo', 'MÃ¡ncora', '2014-11-09', '8:20 pm', '2332323', 'wew', 'weqw', '09/11/2014', 4, 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
