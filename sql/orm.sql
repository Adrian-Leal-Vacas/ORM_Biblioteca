-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2023 a las 13:33:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS `orm`;
CREATE DATABASE `orm`;
USE `orm`;

--
-- Base de datos: `orm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Disco`
--

CREATE TABLE `Disco` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `ano` date NOT NULL,
  `publicacion` varchar(100) NOT NULL,
  `duracion` int(11) NOT NULL,
  `iswc` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Disco`
--

INSERT INTO `Disco` (`id`, `titulo`, `grupo`, `ano`, `publicacion`, `duracion`, `iswc`, `genero`) VALUES
(1, 'Highway to Hell', 'AC/DC', '1979-09-05', 'Atlantic Records', 43, 'ISWC-111-111-1-11-1', 'rock'),
(2, 'El sueño eterno', 'Sebastian Yatra', '2019-04-12', 'Me la invento 2', 43, 'ISWC-111-111-1-11-2', 'pop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Libro`
--

CREATE TABLE `Libro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `ano` date NOT NULL,
  `publicacion` varchar(50) NOT NULL,
  `extension` int(11) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Libro`
--

INSERT INTO `Libro` (`id`, `titulo`, `autor`, `ano`, `publicacion`, `extension`, `isbn`, `genero`) VALUES
(1, 'titulo1', 'alv', '2023-12-14', 'El alv', 300, 'ALV-8-22124-24', 'romantico'),
(2, 'titulo2', 'alv2', '2023-12-14', 'El alv', 90, 'ALV-8-22124-25', 'terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pelicula`
--

CREATE TABLE `Pelicula` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `reparto` varchar(100) NOT NULL,
  `ano` date NOT NULL,
  `publicacion` varchar(100) NOT NULL,
  `duracion` int(11) NOT NULL,
  `isan` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Pelicula`
--

INSERT INTO `Pelicula` (`id`, `titulo`, `director`, `reparto`, `ano`, `publicacion`, `duracion`, `isan`, `genero`) VALUES
(1, 'tituloPeli1', 'ALV', 'ALV, nacho', '2023-12-14', 'ALV production', 135, 'ALV-548-485-1-0', 'terror'),
(2, 'tituloPeli2', 'ALV', 'ALV, nacho, pepito', '2023-12-15', 'ALV production', 120, 'ALV-548-485-1-1', 'otro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Disco`
--
ALTER TABLE `Disco`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iswc` (`iswc`);

--
-- Indices de la tabla `Libro`
--
ALTER TABLE `Libro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indices de la tabla `Pelicula`
--
ALTER TABLE `Pelicula`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isan` (`isan`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Disco`
--
ALTER TABLE `Disco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Libro`
--
ALTER TABLE `Libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Pelicula`
--
ALTER TABLE `Pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
