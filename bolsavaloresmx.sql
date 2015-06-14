-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2013 a las 13:53:36
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bolsavaloresmx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `americanmovil`
--

CREATE TABLE IF NOT EXISTS `americanmovil` (
  `Fecha` date DEFAULT NULL,
  `PrecioApertura` decimal(4,2) DEFAULT NULL,
  `Maximo` decimal(4,2) DEFAULT NULL,
  `Minimo` decimal(4,2) DEFAULT NULL,
  `Cierre` decimal(4,2) DEFAULT NULL,
  `Volumen` int(9) DEFAULT NULL,
  `CierreAjustado` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `americanmovil`
--

INSERT INTO `americanmovil` (`Fecha`, `PrecioApertura`, `Maximo`, `Minimo`, `Cierre`, `Volumen`, `CierreAjustado`) VALUES
('2013-11-15', '13.90', '14.34', '13.90', '14.30', 100846700, '14.30'),
('2013-11-14', '13.71', '13.99', '13.70', '13.97', 85176500, '13.97'),
('2013-11-13', '13.74', '13.84', '13.54', '13.77', 132454200, '13.77'),
('2013-11-12', '13.69', '13.93', '13.58', '13.78', 111545500, '13.78'),
('2013-11-11', '13.78', '13.94', '13.71', '13.83', 94841200, '13.72'),
('2013-11-08', '13.95', '13.96', '13.72', '13.80', 130162100, '13.69'),
('2013-11-07', '14.07', '14.16', '13.92', '13.96', 105162700, '13.85'),
('2013-11-06', '13.99', '14.14', '13.87', '14.07', 107322200, '13.96'),
('2013-11-05', '14.15', '14.15', '13.91', '13.97', 107514200, '13.86'),
('2013-11-04', '14.08', '14.22', '14.05', '14.15', 50011600, '14.04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cemex`
--

CREATE TABLE IF NOT EXISTS `cemex` (
  `Fecha` varchar(10) DEFAULT NULL,
  `PrecioApertura` decimal(4,2) DEFAULT NULL,
  `Maximo` decimal(4,2) DEFAULT NULL,
  `Minimo` decimal(4,2) DEFAULT NULL,
  `Cierre` decimal(4,2) DEFAULT NULL,
  `Volumen` int(8) DEFAULT NULL,
  `CierreAjustado` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `cemex`
--

INSERT INTO `cemex` (`Fecha`, `PrecioApertura`, `Maximo`, `Minimo`, `Cierre`, `Volumen`, `CierreAjustado`) VALUES
('2013-10-29', '14.27', '14.30', '14.11', '14.19', 26214400, '14.19'),
('2013-10-28', '14.46', '14.46', '14.20', '14.27', 23561300, '14.27'),
('2013-10-25', '14.15', '14.47', '14.11', '14.43', 24333000, '14.43'),
('2013-10-24', '13.75', '14.41', '13.75', '14.25', 73821100, '14.25'),
('2013-10-23', '13.91', '13.91', '13.66', '13.71', 36491100, '13.71'),
('2013-10-22', '13.78', '13.96', '13.68', '13.91', 33540400, '13.91'),
('2013-10-21', '13.95', '13.98', '13.67', '13.74', 40316700, '13.74'),
('2013-10-18', '13.64', '13.95', '13.62', '13.87', 31883000, '13.87'),
('2013-10-17', '13.76', '13.76', '13.47', '13.59', 32227400, '13.59'),
('2013-10-16', '13.92', '13.96', '13.64', '13.71', 37753600, '13.71');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresasica`
--

CREATE TABLE IF NOT EXISTS `empresasica` (
  `Fecha` varchar(10) DEFAULT NULL,
  `PrecioApertura` decimal(4,2) DEFAULT NULL,
  `Maximo` decimal(4,2) DEFAULT NULL,
  `Minimo` decimal(4,2) DEFAULT NULL,
  `Cierre` decimal(4,2) DEFAULT NULL,
  `Volumen` int(8) DEFAULT NULL,
  `CierreAjustado` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresasica`
--

INSERT INTO `empresasica` (`Fecha`, `PrecioApertura`, `Maximo`, `Minimo`, `Cierre`, `Volumen`, `CierreAjustado`) VALUES
('2013-11-15', '24.20', '24.55', '23.95', '24.37', 6932500, '24.37'),
('2013-11-14', '23.25', '24.30', '23.10', '23.90', 10868900, '23.90'),
('2013-11-13', '23.20', '23.48', '23.03', '23.18', 4635100, '23.18'),
('2013-11-12', '23.30', '23.37', '23.05', '23.31', 2859800, '23.31'),
('2013-11-11', '23.40', '23.57', '23.03', '23.23', 1216300, '23.23'),
('2013-11-08', '23.09', '23.75', '22.70', '23.44', 4775300, '23.44'),
('2013-11-07', '23.85', '23.89', '22.68', '23.09', 7552200, '23.09'),
('2013-11-06', '24.00', '24.50', '23.59', '23.70', 3788000, '23.70'),
('2013-11-05', '24.26', '24.46', '23.60', '23.83', 3905500, '23.83'),
('2013-11-04', '24.43', '24.64', '24.00', '24.05', 2091600, '24.05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupomexico`
--

CREATE TABLE IF NOT EXISTS `grupomexico` (
  `Fecha` varchar(10) DEFAULT NULL,
  `PrecioApertura` decimal(4,2) DEFAULT NULL,
  `Maximo` decimal(4,2) DEFAULT NULL,
  `Minimo` decimal(4,2) DEFAULT NULL,
  `Cierre` decimal(4,2) DEFAULT NULL,
  `Volumen` int(8) DEFAULT NULL,
  `CierreAjustado` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupomexico`
--

INSERT INTO `grupomexico` (`Fecha`, `PrecioApertura`, `Maximo`, `Minimo`, `Cierre`, `Volumen`, `CierreAjustado`) VALUES
('2013-11-15', '40.15', '40.61', '38.98', '39.20', 15788500, '39.20'),
('2013-11-14', '38.40', '40.19', '38.21', '40.06', 10816000, '40.06'),
('2013-11-13', '38.49', '38.49', '37.50', '38.13', 14716100, '38.13'),
('2013-11-12', '39.50', '39.50', '38.25', '38.39', 10433400, '38.39'),
('2013-11-11', '39.85', '40.00', '39.03', '39.26', 7528200, '39.26'),
('2013-11-08', '40.34', '40.45', '39.81', '39.94', 11403700, '39.94'),
('2013-11-07', '41.20', '41.38', '40.34', '40.91', 4787700, '40.91'),
('2013-11-06', '40.44', '41.05', '40.11', '40.88', 5582800, '40.88'),
('2013-11-05', '41.20', '41.79', '40.05', '40.19', 7777400, '40.19'),
('2013-11-04', '41.69', '42.20', '41.30', '41.54', 2305300, '41.54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `walmart`
--

CREATE TABLE IF NOT EXISTS `walmart` (
  `Fecha` varchar(10) DEFAULT NULL,
  `PrecioApertura` decimal(4,2) DEFAULT NULL,
  `Maximo` decimal(4,2) DEFAULT NULL,
  `Minimo` decimal(4,2) DEFAULT NULL,
  `Cierre` decimal(4,2) DEFAULT NULL,
  `Volumen` int(8) DEFAULT NULL,
  `CierreAjustado` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `walmart`
--

INSERT INTO `walmart` (`Fecha`, `PrecioApertura`, `Maximo`, `Minimo`, `Cierre`, `Volumen`, `CierreAjustado`) VALUES
('2013-11-15', '33.17', '33.90', '33.01', '33.75', 21724600, '33.75'),
('2013-11-14', '32.70', '33.33', '32.49', '33.01', 14403800, '33.01'),
('2013-11-13', '32.82', '32.88', '32.50', '32.66', 18278100, '32.66'),
('2013-11-12', '32.01', '33.04', '32.01', '32.84', 14774300, '32.84'),
('2013-11-11', '32.15', '32.69', '32.11', '32.19', 12401500, '32.19'),
('2013-11-08', '31.94', '32.64', '31.25', '32.45', 29773200, '32.45'),
('2013-11-07', '32.17', '32.17', '31.72', '31.82', 41712700, '31.82'),
('2013-11-06', '33.01', '33.01', '31.99', '32.06', 64551200, '32.06'),
('2013-11-05', '34.09', '34.09', '33.00', '33.12', 18853600, '33.12'),
('2013-11-04', '34.19', '34.19', '33.89', '34.05', 7046400, '34.05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
