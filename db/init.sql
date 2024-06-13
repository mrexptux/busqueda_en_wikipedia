-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2024 a las 16:47:17
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `historial_busqueda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `busquedas`
--

CREATE TABLE `busquedas` (
  `id` int(11) NOT NULL,
  `termino` varchar(255) NOT NULL,
  `fecha_busqueda` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `busquedas`
--

INSERT INTO `busquedas` (`id`, `termino`, `fecha_busqueda`) VALUES
(1, 'hola', '2024-06-12 13:28:39'),
(2, 'hola', '2024-06-12 13:31:09'),
(3, 'hola', '2024-06-12 14:08:11'),
(4, 'hola', '2024-06-12 14:14:27'),
(5, 'hola', '2024-06-12 14:14:53'),
(6, 'hola', '2024-06-12 14:15:40'),
(7, 'hola', '2024-06-12 14:17:36'),
(8, 'asa', '2024-06-12 14:18:40'),
(9, 'pepe', '2024-06-12 14:22:04'),
(10, 'pepe', '2024-06-12 14:25:00'),
(11, 'pepe', '2024-06-12 14:26:20'),
(12, 'pepe', '2024-06-12 14:28:01'),
(13, 'pepe', '2024-06-12 14:28:32'),
(14, 'pepe', '2024-06-12 14:29:07'),
(15, 'pepe', '2024-06-12 14:31:10'),
(16, 'pepe', '2024-06-12 14:31:49'),
(17, 'pepe', '2024-06-12 14:33:31'),
(18, 'pepe', '2024-06-12 14:34:54'),
(19, 'pepe', '2024-06-12 14:35:09'),
(20, 'pepe', '2024-06-12 14:37:23'),
(21, 'pepe', '2024-06-12 14:38:47'),
(22, 'pepe', '2024-06-12 14:39:09'),
(23, 'españa', '2024-06-12 14:39:49'),
(24, 'españa', '2024-06-12 14:40:55'),
(25, 'españa', '2024-06-12 14:41:12'),
(26, 'hola', '2024-06-12 14:41:35'),
(27, 'hola', '2024-06-12 14:41:36'),
(28, 'hola', '2024-06-12 14:41:37'),
(29, 'hola', '2024-06-12 14:41:37'),
(30, 'hola', '2024-06-12 14:41:37'),
(31, 'pepe', '2024-06-12 14:41:49'),
(32, 'pepe', '2024-06-12 14:42:29'),
(33, 'pepe', '2024-06-12 14:42:35'),
(34, 'pepoe', '2024-06-12 14:43:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
