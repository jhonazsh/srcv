-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2014 a las 03:53:38
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID`, `ORIGEN`, `DESTINO`, `FECHA_SALIDA`, `HORA_SALIDA`, `DNI`, `NOMBRES`, `APELLIDOS`, `FECHA_ACTUAL`, `ASIENTO`, `PRECIO`) VALUES
(60, 'Trujillo', 'Chiclayo', '20 de noviembre 2015', '2:30 pm', '90234567', 'Jennifer', 'Alfaro Medina', '08 de noviembre 2014', 31, 23.5),
(61, 'Trujillo', 'Piura', '21 de noviembre 2015', '3:30 pm', '80234567', 'Patricia', 'Zapata Alonso', '18 de noviembre 2014', 29, 43.5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
