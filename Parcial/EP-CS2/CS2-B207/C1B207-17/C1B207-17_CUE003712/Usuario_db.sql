-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2011 a las 13:42:13
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `Usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `ingreso` int(11) NOT NULL,
  `impuesto` int(11) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `nombre`, `ingreso`, `impuesto`) VALUES
(45654714, 'Carlos Mantilla', 1000, 7),
(5223658, 'Susana Gutierrez', 3500, 35),
(47485254, 'Julio Carrazco', 1800, 13),
(52521204, 'Alexandra Martins', 2000, 14);
