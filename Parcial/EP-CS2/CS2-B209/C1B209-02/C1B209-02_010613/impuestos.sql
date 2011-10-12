-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2011 a las 13:57:35
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `impuestos`
--
CREATE DATA BASE 'impuestos';
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sueldos`
--

CREATE TABLE IF NOT EXISTS `sueldos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `enero` float DEFAULT NULL,
  `feb` float DEFAULT NULL,
  `marzo` float DEFAULT NULL,
  `abril` float DEFAULT NULL,
  `mayo` float DEFAULT NULL,
  `junio` float DEFAULT NULL,
  `julio` float DEFAULT NULL,
  `agosto` float DEFAULT NULL,
  `septiembre` float DEFAULT NULL,
  `octubre` float DEFAULT NULL,
  `noviembre` float DEFAULT NULL,
  `diciembre` float DEFAULT NULL,
  `impuestoTotal` float DEFAULT NULL,
  `ImpuestoExtra` float DEFAULT NULL,
  `TotalSinImpuesto` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `sueldos`
--

INSERT INTO `sueldos` (`id`, `nombre`, `apellido`, `enero`, `feb`, `marzo`, `abril`, `mayo`, `junio`, `julio`, `agosto`, `septiembre`, `octubre`, `noviembre`, `diciembre`, `impuestoTotal`, `ImpuestoExtra`, `TotalSinImpuesto`) VALUES
(1, 'juan', 'perez', NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'orlando', 'afwdfw', NULL, 23423.2, NULL, 3242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Orlando', 'Ramirez', 1245.1, 142.5, 12.45, 12.5, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(4, 'Orlando', 'Anaya', 12345.2, 1234, 1232, 1234, 800, 900, 1234, 2343, 1223, 1111, 2222, 2322, NULL, NULL, NULL),
(5, 'Orlando', 'Anaya', 12345.2, 1234, 1232, 1234, 800, 900, 1234, 2343, 1223, 1111, 2222, 2322, NULL, NULL, NULL),
(6, 'fegfe', 'fwe', 21312, 3123, 123, 123, 312, 312, 312, 312, 31, 31, 312, 31, NULL, NULL, NULL);