-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2011 a las 13:50:37
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `impuestosanual`
--
CREATE DATABASE `impuestosanual` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `impuestosanual`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuesto`
--

CREATE TABLE IF NOT EXISTS `impuesto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(20) NOT NULL,
  `ingreso` int(11) NOT NULL,
  `impuesto` double(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabla que muestra los impuestos y los ingresos' AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `impuesto`
--

INSERT INTO `impuesto` (`id`, `mes`, `ingreso`, `impuesto`) VALUES
(1, 'Enero', 5001, 120.00),
(2, 'Febrero', 2000, 14.00),
(3, 'Marzo', 1200, 8.40),
(4, 'Abril', 2900, 290.00),
(5, 'Mayo', 3000, 300.00);