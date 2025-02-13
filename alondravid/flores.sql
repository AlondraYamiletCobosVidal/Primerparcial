-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2025 a las 23:19:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanvaletin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flores`
--

CREATE TABLE `flores` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `rareza` varchar(50) NOT NULL,
  `clima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flores`
--

INSERT INTO `flores` (`id`, `nombre`, `color`, `rareza`, `clima`) VALUES
(1, 'Tulipan', 'Rojo', 'Media', 'Tropical'),
(2, 'Rosa', 'Negras', 'Alta', 'Cálido y frío'),
(3, 'Clavel', 'Morado', 'Baja', 'Templado'),
(4, 'Girasol', 'Amarillo', 'Baja', 'Templados, tropicales, mediterráneos'),
(5, 'Gerbera', 'Naranja', 'Media', 'Cálido'),
(6, 'Hortensias ', 'Azules', 'Alta', 'Seco y húmedo'),
(7, 'Orquídea', 'Verde', 'Media', 'Frío, templado y cálido'),
(8, 'Lirio', 'Blanco', 'Baja', 'Cálido y frío'),
(9, 'Flor de loto', 'Rosa', 'Baja', 'Templado'),
(10, 'Lantanas', 'Naranja y rosa', 'Media', 'Cálido');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flores`
--
ALTER TABLE `flores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flores`
--
ALTER TABLE `flores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
