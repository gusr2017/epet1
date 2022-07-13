-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2017 a las 02:46:47
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `fecha_ed` date NOT NULL,
  `num_ed` int(2) NOT NULL,
  `num_pag` int(4) NOT NULL,
  `observ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `categoria`, `ISBN`, `nombre`, `autor`, `editorial`, `fecha_ed`, `num_ed`, `num_pag`, `observ`) VALUES
(4, 'Lengua', '6549-987-9', 'Cronica de una muerte anunciada', 'Felipe Romero Palacios', 'Planeta', '1981-06-05', 3, 397, 'Novela policial'),
(6, 'Novela', '654321', 'El Quijote', 'Saavedra', 'El Pais', '2017-10-10', 60, 160, 'Nada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
