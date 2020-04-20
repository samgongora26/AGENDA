-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-04-2020 a las 11:17:20
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `id_materia` int(10) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_materia`, `id_maestro`, `nombre`, `color`, `id_usuario`) VALUES
(16, 1, 'Penal II', 'rgb(247, 161, 172)', 1),
(17, 2, 'circuitos', 'rgb(248, 103, 64)', 1),
(21, 6, 'programacion de sistemas', 'rgb(65, 184, 237)', 1),
(19, 8, 'programacion 1', 'rgb(64, 117, 248)', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id_calificacion` int(10) NOT NULL AUTO_INCREMENT,
  `id_materia` int(10) NOT NULL,
  `calificacion` int(4) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_parcial` int(10) NOT NULL,
  PRIMARY KEY (`id_calificacion`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_calificacion`, `id_materia`, `calificacion`, `id_usuario`, `id_parcial`) VALUES
(1, 16, 90, 1, 2),
(2, 17, 88, 1, 2),
(3, 19, 75, 1, 3),
(6, 19, 95, 1, 8),
(5, 19, 80, 1, 4),
(7, 21, 100, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_evento` int(10) NOT NULL AUTO_INCREMENT,
  `id_materia` int(10) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `color_importancia` varchar(20) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

DROP TABLE IF EXISTS `maestros`;
CREATE TABLE IF NOT EXISTS `maestros` (
  `id_maestro` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id_maestro`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `nombre`, `apellido`, `id_usuario`) VALUES
(1, 'Abigail', 'lopez', 1),
(2, 'saul', 'gongora', 1),
(6, 'Guadalupe', 'puc', 1),
(7, 'Gabriela', 'Braga', 1),
(8, 'Lorenzo', 'Balam', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parciales`
--

DROP TABLE IF EXISTS `parciales`;
CREATE TABLE IF NOT EXISTS `parciales` (
  `id_parcial` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  PRIMARY KEY (`id_parcial`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parciales`
--

INSERT INTO `parciales` (`id_parcial`, `nombre`, `id_usuario`) VALUES
(2, 'primer parcial', 1),
(3, 'segundo parcial', 1),
(4, 'tercer parcial', 1),
(8, 'cuatrimestral', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `to_do`
--

DROP TABLE IF EXISTS `to_do`;
CREATE TABLE IF NOT EXISTS `to_do` (
  `id_tarea` int(10) NOT NULL AUTO_INCREMENT,
  `tarea` varchar(40) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_tarea`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `to_do`
--

INSERT INTO `to_do` (`id_tarea`, `tarea`, `id_usuario`, `estado`) VALUES
(32, 'hacer la introduccion', 1, 0),
(30, 'terminar el proyecto', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `edad` int(3) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `edad`, `foto`, `usuario`, `contrasenia`) VALUES
(1, 'saul', 'gongora', 19, 'foto1', 'sam26', 'root');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
