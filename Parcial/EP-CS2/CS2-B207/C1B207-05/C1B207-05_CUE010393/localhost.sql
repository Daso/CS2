-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2011 a las 13:59:06
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `impuestos`
--
CREATE DATABASE `impuestos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `impuestos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE IF NOT EXISTS `meses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(15) NOT NULL,
  `impuesto` float NOT NULL,
  `ingreso` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `meses`
--

INSERT INTO `meses` (`id`, `mes`, `impuesto`, `ingreso`) VALUES
(1, 'Enero', 0.01, 123123),
(2, 'Febrero', 0.01, 123123),
(3, 'Marzo', 0.007, 123),
(4, 'Abril', 0.01, 12312),
(5, 'Mayo', 0.01, 123123),
(6, 'Junio', 0.007, 1231),
(7, 'Julio', 0.007, 0),
(8, 'Agosto', 0.007, 0),
(9, 'Septiembre', 0.007, 0),
(10, 'Octubre', 0.007, 0),
(11, 'Noviembre', 0.007, 0),
(12, 'Diciembre', 0.007, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
