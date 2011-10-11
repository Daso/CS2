-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2011 a las 14:00:22
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `impuestos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuestopormes`
--

CREATE TABLE IF NOT EXISTS `impuestopormes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(20) NOT NULL,
  `ingresoMensual` float NOT NULL,
  `impuestoMensual` float NOT NULL,
  `usuarioName` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcar la base de datos para la tabla `impuestopormes`
--

INSERT INTO `impuestopormes` (`id`, `mes`, `ingresoMensual`, `impuestoMensual`, `usuarioName`) VALUES
(1, 'Enero', 12, 12, '12'),
(2, 'mesX', 0.1, 0, 'Eduard'),
(3, 'mesX', 0.2, 0, 'Eduard'),
(4, 'mesX', 0.3, 0, 'Eduard'),
(5, 'mesX', 0.4, 0, 'Eduard'),
(6, 'mesX', 0.5, 0, 'Eduard'),
(7, 'mesX', 0.6, 0, 'Eduard'),
(8, 'mesX', 0.7, 0, 'Eduard'),
(9, 'mesX', 0.8, 0, 'Eduard'),
(10, 'mesX', 0.9, 0, 'Eduard'),
(11, 'mesX', 0.1, 0, 'Eduard'),
(12, 'mesX', 0.11, 0, 'Eduard'),
(13, 'mesX', 0.12, 0, 'Eduard'),
(14, 'mesX', 0.1, 0, 'asfa'),
(15, 'mesX', 0.2, 0, 'asfa'),
(16, 'mesX', 0.3, 0, 'asfa'),
(17, 'mesX', 0.4, 0, 'asfa'),
(18, 'mesX', 0.5, 0, 'asfa'),
(19, 'mesX', 0.6, 0, 'asfa'),
(20, 'mesX', 0.7, 0, 'asfa'),
(21, 'mesX', 0.8, 0, 'asfa'),
(22, 'mesX', 0.9, 0, 'asfa'),
(23, 'mesX', 0.1, 0, 'asfa'),
(24, 'mesX', 0.11, 0, 'asfa'),
(25, 'mesX', 0.12, 0, 'asfa'),
(26, 'mesX', 0.1, 0, 'asfa'),
(27, 'mesX', 0.2, 0, 'asfa'),
(28, 'mesX', 0.3, 0, 'asfa'),
(29, 'mesX', 0.4, 0, 'asfa'),
(30, 'mesX', 0.5, 0, 'asfa'),
(31, 'mesX', 0.6, 0, 'asfa'),
(32, 'mesX', 0.7, 0, 'asfa'),
(33, 'mesX', 0.8, 0, 'asfa'),
(34, 'mesX', 0.9, 0, 'asfa'),
(35, 'mesX', 0.1, 0, 'asfa'),
(36, 'mesX', 0.11, 0, 'asfa'),
(37, 'mesX', 0.12, 0, 'asfa'),
(38, 'mesX', 0.1, 0, 'asfa'),
(39, 'mesX', 0.2, 0, 'asfa'),
(40, 'mesX', 0.3, 0, 'asfa'),
(41, 'mesX', 0.4, 0, 'asfa'),
(42, 'mesX', 0.5, 0, 'asfa'),
(43, 'mesX', 0.6, 0, 'asfa'),
(44, 'mesX', 0.7, 0, 'asfa'),
(45, 'mesX', 0.8, 0, 'asfa'),
(46, 'mesX', 0.9, 0, 'asfa'),
(47, 'mesX', 0.1, 0, 'asfa'),
(48, 'mesX', 0.11, 0, 'asfa'),
(49, 'mesX', 0.12, 0, 'asfa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `impuestoAnual` float NOT NULL,
  `impExtraordinario` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `impuestoAnual`, `impExtraordinario`) VALUES
(1, 'Eduardo', 0, 0),
(2, 'Eduard', 0, 0),
(3, 'asfa', 0, 0),
(4, 'asfa', 0.03381, 0),
(5, 'asfa', 0.06762, 0);