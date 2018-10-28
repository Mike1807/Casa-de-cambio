-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2018 a las 16:51:50
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ccambio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nombre_completo` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `pais` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `extranjero` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `mexicano` varchar(128) COLLATE latin1_spanish_ci DEFAULT NULL,
  `moneda_origen` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `moneda_cambio` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad` varchar(128) COLLATE latin1_spanish_ci NOT NULL,
  `total` varchar(128) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
