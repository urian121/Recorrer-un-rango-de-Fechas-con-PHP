-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 21:32:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alberto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `fechaInicio` varchar(30) DEFAULT NULL,
  `fechaFin` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `fechaInicio`, `fechaFin`) VALUES
(174, 'urian viera', '19-02-2021', '20-02-2021'),
(175, 'urian viera', '21-02-2021', '22-02-2021'),
(176, 'urian viera', '23-02-2021', '24-02-2021'),
(177, 'urian viera', '25-02-2021', '26-02-2021'),
(178, 'urian viera', '27-02-2021', '28-02-2021'),
(179, 'alberto', '19-02-2021', '20-02-2021'),
(180, 'alberto', '20-02-2021', '22-02-2021'),
(181, 'alberto', '21-02-2021', '24-02-2021'),
(182, 'alberto', '22-02-2021', '26-02-2021'),
(183, 'alberto', '23-02-2021', '28-02-2021'),
(184, '', '19-02-2021', '20-02-2021'),
(185, '', '20-02-2021', '22-02-2021'),
(186, '', '21-02-2021', '24-02-2021'),
(187, '', '22-02-2021', '26-02-2021'),
(188, '', '23-02-2021', '28-02-2021');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
