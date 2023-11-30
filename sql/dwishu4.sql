-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 03:37:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwishu4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dwishu4_usuarios`
--

CREATE TABLE `dwishu4_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `emailuser` varchar(50) NOT NULL,
  `pswd` varchar(40) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dwishu4_usuarios`
--

INSERT INTO `dwishu4_usuarios` (`id_usuario`, `username`, `emailuser`, `pswd`, `estatus`) VALUES
(1, 'gdelgado', 'gerxim7865@gmail.com', '12345', 1),
(2, 'reyfranco', '20045028@alumno.utc.edu.mx', '67890', 1),
(3, 'yuvitorres', '19040090@alumno.utc.edu.mx', '2456', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dwishu4_usuarios`
--
ALTER TABLE `dwishu4_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dwishu4_usuarios`
--
ALTER TABLE `dwishu4_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
