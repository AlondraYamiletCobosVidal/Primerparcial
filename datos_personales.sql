-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2025 a las 18:46:40
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
-- Base de datos: `listadenombres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos personales`
--

CREATE TABLE `datos personales` (
  `id` int(10) NOT NULL,
  `Nombre(s)` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Fecha de nacimiento` varchar(20) NOT NULL,
  `Edad` int(10) NOT NULL,
  `Lugar de origen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos personales`
--

INSERT INTO `datos personales` (`id`, `Nombre(s)`, `Apellidos`, `Fecha de nacimiento`, `Edad`, `Lugar de origen`) VALUES
(1, 'Juliana Kali', 'Molar Molar', '13/02/2008', 17, 'Reynosa, Tamps.'),
(2, 'Praticia Yamilet ', 'Vidal Córdova', '05/07/1975', 49, 'CDMX'),
(3, 'Verónica Heidi', 'Vidal Córdova', '05/11/1970', 54, 'CDMX'),
(4, 'Danna', 'Guzmán Guzmán', '21/08/2005', 19, 'Reynosa, Tamps.'),
(5, 'Fabián Alejandro ', 'Álvarez De León ', '19/07/2007', 17, 'Reynosa, Tamps.'),
(6, 'Osvaldo Josue ', 'Montoya Gutiérrez ', '17/01/2008', 17, 'Reynosa, Tamps.'),
(7, 'Jessica ', 'Zaragoza Flores ', '24/08/2008', 16, 'Venustiano Carranza, Puebla. '),
(8, 'Alexia Ayerim ', 'Córdova Maza', '15/03/2008', 16, 'Gutiérrez Zamora, Veracruz '),
(9, 'Marwan Noland', 'Cortéz Villanueva', '08/11/2005', 19, 'Nuevo Laredo, Tamps.'),
(10, 'Miguel Ángel ', 'Sánchez Azúa ', '11/07/2004', 20, 'Yucatán');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos personales`
--
ALTER TABLE `datos personales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos personales`
--
ALTER TABLE `datos personales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
