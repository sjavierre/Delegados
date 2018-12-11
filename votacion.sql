-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2018 a las 11:00:43
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `nombre`, `email`) VALUES
(1, 'Barayan Citrolinho Latrius', 'elgrancitrolinho@gmail.com'),
(2, 'Cristian Vicente Malusparteanus ', 'malus@gmail.com'),
(3, 'Fermitanio Martina Andaluz', 'fermitaniomusic@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'ASIR2', 'Grupo formado por los mejores informáticos del Somontano y futuros dominadores del Mundo.'),
(2, 'Departamento', 'Grupo liderado por el gran Fermitanio cuyo propósito es el aprendizaje de todos los alumnos con la ayuda de F1 e lograr la ardua tarea de instalar Oracle en Windows. '),
(3, 'Acapulco', 'El bar mas caro y con peor servicio de toda la comarca. Cuya finalidad es asistir el menor numero de horas a clase que sea posible.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_candidatos`
--

CREATE TABLE `grupos_candidatos` (
  `candidato` int(5) NOT NULL,
  `grupo` int(5) NOT NULL,
  `votos` int(4) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos_candidatos`
--

INSERT INTO `grupos_candidatos` (`candidato`, `grupo`, `votos`, `fecha`) VALUES
(1, 1, NULL, '2018-11-07'),
(2, 2, NULL, '2018-11-07'),
(3, 3, NULL, '2018-11-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos_candidatos`
--
ALTER TABLE `grupos_candidatos`
  ADD PRIMARY KEY (`candidato`,`grupo`),
  ADD KEY `Grupo` (`grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `grupos_candidatos`
--
ALTER TABLE `grupos_candidatos`
  MODIFY `candidato` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupos_candidatos`
--
ALTER TABLE `grupos_candidatos`
  ADD CONSTRAINT `grupos_candidatos_ibfk_1` FOREIGN KEY (`candidato`) REFERENCES `candidatos` (`id`),
  ADD CONSTRAINT `grupos_candidatos_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
