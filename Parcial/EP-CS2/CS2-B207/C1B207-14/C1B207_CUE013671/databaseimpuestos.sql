-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2011 a las 13:48:31
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `impuestos`
--
CREATE DATABASE `impuestos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `impuestos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imps`
--

CREATE TABLE IF NOT EXISTS `imps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(30) NOT NULL,
  `ingreso` double NOT NULL,
  `imes` double NOT NULL,
  `iacum` double NOT NULL,
  `iext` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `imps`
--

INSERT INTO `imps` (`id`, `mes`, `ingreso`, `imes`, `iacum`, `iext`) VALUES
(1, 'enero', 2000, 120, 100, 450),
(2, 'febrero', 2005, 200, 100, 300),
(3, 'marzo', 2000, 300, 100, 230),
(6, 'abril', 2000, 600, 100, 200),
(7, 'mayo', 2000, 2800, 300, 600),
(8, 'Junio', 3000, 200, 300, 100),
(9, 'julio', 2000, 300, 20, 100),
(10, 'setiembre', 2000, 0, 0, 0);
