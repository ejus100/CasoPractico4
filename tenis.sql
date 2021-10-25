-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2021 a las 04:42:17
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tenis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenis`
--

CREATE TABLE `tenis` (
  `idtenis` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `numerotalla` varchar(50) NOT NULL,
  `tipotenis` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tenis`
--

INSERT INTO `tenis` (`idtenis`, `marca`, `color`, `numerotalla`, `tipotenis`, `modelo`, `precio`) VALUES
(1, 'adidas', 'blanco', '7', 'casual', '2020', '1200'),
(5, 'puma', 'negro', '7', 'correr', '2020', '2500'),
(6, 'nike', 'gris', '5', 'futbol', '2018', '1000'),
(7, 'jordan', 'rojos', '7', 'casual', '2022', '5000'),
(8, 'sporline', 'gris', '6', 'correr', '2021', '600'),
(9, 'puma', 'verde', '5', 'futbol', '2021', '3000'),
(10, 'charly', 'azul', '6', 'correr', '2020', '1200'),
(12, 'puma', 'negro', '7', 'correr', '2020', '2500');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tenis`
--
ALTER TABLE `tenis`
  ADD PRIMARY KEY (`idtenis`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tenis`
--
ALTER TABLE `tenis`
  MODIFY `idtenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
